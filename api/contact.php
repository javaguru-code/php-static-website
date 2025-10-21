<?php
// Enable error reporting for debugging (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);

// Set headers for JSON response
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Accept');

// Handle preflight OPTIONS request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Method not allowed. Only POST requests are accepted.'
    ]);
    exit();
}

try {
    // Get JSON input
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);
    
    // Validate required fields
    $errors = [];
    
    if (empty($data['name']) || trim($data['name']) === '') {
        $errors[] = 'Name is required';
    }
    
    if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email';
    }
    
    if (empty($data['subject']) || trim($data['subject']) === '') {
        $errors[] = 'Subject is required';
    }
    
    if (empty($data['message']) || trim($data['message']) === '') {
        $errors[] = 'Message is required';
    }
    
    // If there are validation errors, return them
    if (!empty($errors)) {
        http_response_code(400);
        echo json_encode([
            'success' => false,
            'errors' => $errors
        ]);
        exit();
    }
    
    // Sanitize input data
    $name = htmlspecialchars(trim($data['name']), ENT_QUOTES, 'UTF-8');
    $email = filter_var(trim($data['email']), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($data['subject']), ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars(trim($data['message']), ENT_QUOTES, 'UTF-8');
    
    // Load environment variables from .env file
    $envFile = dirname(__DIR__) . '/.env';
    if (file_exists($envFile)) {
        $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (strpos(trim($line), '#') === 0) continue;
            list($key, $value) = explode('=', $line, 2);
            $key = trim($key);
            $value = trim($value);
            putenv("$key=$value");
            $_ENV[$key] = $value;
        }
    }
    
    // Get SendGrid API key from environment
    $sendgridApiKey = getenv('SENDGRID_API_KEY') ?: $_ENV['SENDGRID_API_KEY'] ?? null;
    $emailFrom = getenv('EMAIL_FROM') ?: $_ENV['EMAIL_FROM'] ?? 'noreply@fsmaster.in';
    $emailTo = 'bhoomsc@gmail.com';
    
    if (!$sendgridApiKey) {
        throw new Exception('SendGrid API key is not configured');
    }
    
    // Prepare email HTML content
    $emailHtml = "
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>New Contact Form Submission</title>
        <style>
            body, html {
                margin: 0;
                padding: 0;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                line-height: 1.6;
                color: #333333;
            }
            .email-container {
                max-width: 600px;
                margin: 0 auto;
                background-color: #ffffff;
            }
            .header {
                background-color: #2c3e50;
                padding: 30px 20px;
                text-align: center;
                color: white;
            }
            .header h1 {
                margin: 0;
                font-size: 24px;
                font-weight: 600;
            }
            .content {
                padding: 30px;
            }
            .message-box {
                background-color: #f8f9fa;
                border-radius: 8px;
                padding: 20px;
                margin: 20px 0;
                border-left: 4px solid #3498db;
            }
            .footer {
                text-align: center;
                padding: 20px;
                font-size: 12px;
                color: #7f8c8d;
                border-top: 1px solid #eeeeee;
                margin-top: 30px;
            }
        </style>
    </head>
    <body style='margin: 0; padding: 0; background-color: #f4f4f4;'>
        <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
            <tr>
                <td style='padding: 20px 0; text-align: center;'>
                    <div class='email-container'>
                        <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                            <tr>
                                <td class='header'>
                                    <h1>New Contact Form Submission</h1>
                                </td>
                            </tr>
                        </table>
                        <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                            <tr>
                                <td class='content'>
                                    <p>Hello,</p>
                                    <p>You've received a new message from your website's contact form:</p>
                                    <div class='message-box'>
                                        <p><strong>From:</strong> {$name} &lt;{$email}&gt;</p>
                                        <p><strong>Subject:</strong> {$subject}</p>
                                        <p><strong>Message:</strong></p>
                                        <div style='background: white; padding: 15px; border-radius: 4px; margin-top: 10px; border: 1px solid #e0e0e0;'>
                                            " . nl2br($message) . "
                                        </div>
                                    </div>
                                    <p style='margin-top: 25px;'>
                                        <a href='mailto:{$email}' style='display: inline-block; background-color: #3498db; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px;'>
                                            Reply to {$name}
                                        </a>
                                    </p>
                                </td>
                            </tr>
                        </table>
                        <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                            <tr>
                                <td class='footer'>
                                    <p>This email was sent from the contact form on <a href='https://fsmaster.in' style='color: #3498db; text-decoration: none;'>Full Stack Master</a>.</p>
                                    <p style='margin-top: 10px; color: #95a5a6;'>
                                        &copy; " . date('Y') . " Full Stack Master. All rights reserved.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    </body>
    </html>
    ";
    
    // Prepare SendGrid email payload
    $emailData = [
        'personalizations' => [[
            'to' => [['email' => $emailTo]],
            'subject' => "Contact Form: {$subject}"
        ]],
        'from' => ['email' => $emailFrom],
        'reply_to' => ['email' => $email],
        'content' => [
            [
                'type' => 'text/plain',
                'value' => "New message from {$name} ({$email}):\n\n{$message}"
            ],
            [
                'type' => 'text/html',
                'value' => $emailHtml
            ]
        ]
    ];
    
    // Send email using SendGrid API
    $ch = curl_init('https://api.sendgrid.com/v3/mail/send');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($emailData));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $sendgridApiKey,
        'Content-Type: application/json'
    ]);
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlError = curl_error($ch);
    curl_close($ch);
    
    if ($curlError) {
        throw new Exception('Failed to send email: ' . $curlError);
    }
    
    if ($httpCode >= 200 && $httpCode < 300) {
        // Email sent successfully
        http_response_code(200);
        echo json_encode([
            'success' => true,
            'message' => 'Your message has been sent successfully!'
        ]);
    } else {
        // Email sending failed
        $errorResponse = json_decode($response, true);
        $errorMessage = isset($errorResponse['errors'][0]['message']) 
            ? $errorResponse['errors'][0]['message'] 
            : 'Failed to send email';
        
        throw new Exception($errorMessage);
    }
    
} catch (Exception $e) {
    error_log('Contact form error: ' . $e->getMessage());
    
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Failed to send message. Please try again later.',
        'error' => $e->getMessage()
    ]);
}
?>
