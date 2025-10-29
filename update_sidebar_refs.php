<?php
// Find all PHP files in the project
$directory = new RecursiveDirectoryIterator(__DIR__);
$iterator = new RecursiveIteratorIterator($directory);
$files = new RegexIterator($iterator, '/^.+(\.php|\.html|\.js)$/i', RecursiveRegexIterator::GET_MATCH);

$updates = 0;

echo "Updating sidebar.js references to mobile-sidebar.js...\n";

foreach ($files as $file) {
    $filePath = $file[0];
    
    // Skip this script
    if (basename($filePath) === 'update_sidebar_refs.php') {
        continue;
    }
    
    $content = file_get_contents($filePath);
    if ($content === false) {
        echo "Error reading file: $filePath\n";
        continue;
    }
    
    // Check if the file contains the old reference
    if (strpos($content, 'sidebar.js') !== false) {
        $newContent = str_replace('sidebar.js', 'mobile-sidebar.js', $content, $count);
        
        if ($count > 0) {
            if (file_put_contents($filePath, $newContent) !== false) {
                $updates += $count;
                echo "Updated $filePath - $count occurrence(s) replaced\n";
            } else {
                echo "Error writing to file: $filePath\n";
            }
        }
    }
}

echo "\nUpdate complete! $updates references to 'sidebar.js' were updated to 'mobile-sidebar.js'\n";
?>
