<?php
// api/openai.php - Proxy to OpenAI for chat (duplicate of chat.php to avoid server rewrites)
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Accept');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') { http_response_code(200); exit(); }
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { http_response_code(405); echo json_encode(['success'=>false,'error'=>'Method not allowed']); exit(); }

require_once __DIR__ . '/../includes/config.php';

try {
    $raw = file_get_contents('php://input');
    $data = json_decode($raw, true) ?: [];
    $message = trim((string)($data['message'] ?? ''));
    $history = $data['history'] ?? [];
    $model = $data['model'] ?? 'gpt-4o-mini';
    $isStream = !empty($data['stream']);

    if ($message === '') { http_response_code(400); echo json_encode(['success'=>false,'error'=>'Message is required']); exit(); }

    $keysStr = getenv('OPENAI_API_KEYS') ?: ($_ENV['OPENAI_API_KEYS'] ?? '');
    $keys = array_values(array_filter(array_map('trim', preg_split('/[\s,]+/', $keysStr))));
    if (empty($keys)) { throw new Exception('OPENAI_API_KEYS not configured'); }
    $apiKey = $keys[array_rand($keys)];

    $messages = [];
    $messages[] = ['role'=>'system','content'=>'You are an expert coding assistant. Answer concisely. When sharing code, use proper fenced markdown with language hints.'];
    if (is_array($history)) {
        foreach ($history as $h) {
            if (!isset($h['role'], $h['content'])) continue;
            $role = in_array($h['role'], ['system','user','assistant']) ? $h['role'] : 'user';
            $content = (string)$h['content'];
            if ($content !== '') $messages[] = ['role'=>$role,'content'=>$content];
        }
    }
    $messages[] = ['role'=>'user','content'=>$message];

    $payload = ['model'=>$model,'messages'=>$messages,'temperature'=>0.3];

    $endpoint = 'https://api.openai.com/v1/chat/completions';

    if ($isStream) {
        $payload['stream'] = true;
        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');
        header('Connection: keep-alive');
        header('X-Accel-Buffering: no');

        $ch = curl_init($endpoint);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . $apiKey,
            'Content-Type: application/json'
        ]);
        curl_setopt($ch, CURLOPT_WRITEFUNCTION, function($ch, $chunk) {
            echo $chunk; @ob_flush(); @flush(); return strlen($chunk);
        });
        curl_exec($ch);
        curl_close($ch);
        exit;
    }

    $ch = curl_init($endpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $apiKey,
        'Content-Type: application/json'
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlError = curl_error($ch);
    curl_close($ch);

    if ($curlError) { throw new Exception('Request failed: ' . $curlError); }
    $json = json_decode($response, true);
    if ($httpCode < 200 || $httpCode >= 300 || !$json) {
        $msg = $json['error']['message'] ?? ('HTTP ' . $httpCode);
        throw new Exception($msg);
    }

    $reply = $json['choices'][0]['message']['content'] ?? '';
    echo json_encode(['success'=>true,'reply'=>$reply]);
} catch (Exception $e) {
    if (!empty($isStream)) {
        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');
        echo 'data: ' . json_encode(['error' => $e->getMessage()]) . "\n\n";
        echo "data: [DONE]\n\n"; @ob_flush(); @flush(); exit;
    }
    http_response_code(500);
    echo json_encode(['success'=>false,'error'=>$e->getMessage()]);
}
