<?php
// Load environment variables from .env file
$envFile = __DIR__ . '/../.env';
if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        // Skip comments
        if (strpos(trim($line), '#') === 0) {
            continue;
        }
        
        // Parse the line into key-value pairs
        if (strpos($line, '=') !== false) {
            list($key, $value) = explode('=', $line, 2);
            $key = trim($key);
            $value = trim($value, " \t\n\r\0\x0B'\"");
            
            // Set the environment variable if not already set
            if (!getenv($key)) {
                putenv("$key=$value");
                $_ENV[$key] = $value;
                $_SERVER[$key] = $value;
            }
        }
    }
}

/**
 * Get base URL with consistent trailing slash
 */
function get_base_url() {
    $base_url = getenv('BASE_URL') ?: 'http://localhost/fsmaster';
    // Ensure URL ends with a single forward slash
    return rtrim($base_url, '/') . '/';
}

/**
 * Get base directory path with consistent trailing slash
 */
function get_base_dir() {
    $base_dir = getenv('BASE_DIR');
    if (!$base_dir) {
        // Fallback to the parent directory of the current file
        $base_dir = dirname(__DIR__);
    }
    // Ensure path ends with a directory separator
    return rtrim(str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $base_dir), DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
}

// Set base URL and directory
$base_url = get_base_url();
$base_dir = get_base_dir();

// Prevent direct access to this file
defined('BASE_URL') or define('BASE_URL', $base_url);
defined('BASE_DIR') or define('BASE_DIR', $base_dir);

/**
 * Helper function to get asset URLs
 */
function asset($path) {
    $base = get_base_url();
    // Remove any leading slashes from path to prevent double slashes
    $path = ltrim($path, '/');
    return $base . $path;
}

/**
 * Helper function to include files using base directory
 */
function include_file($path) {
    $full_path = get_base_dir() . ltrim(str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $path), '/\\');
    if (file_exists($full_path)) {
        return include $full_path;
    }
    throw new Exception("File not found: " . $full_path);
}

/**
 * Helper function to require files using base directory
 */
function require_file($path) {
    $full_path = get_base_dir() . ltrim(str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $path), '/\\');
    if (file_exists($full_path)) {
        return require $full_path;
    }
    throw new Exception("File not found: " . $full_path);
}
?>
