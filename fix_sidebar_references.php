<?php
// Script to update mobile-sidebar.js references to mobile-mobile-sidebar.js

$directory = new RecursiveDirectoryIterator(__DIR__);
$iterator = new RecursiveIteratorIterator($directory);
$files = new RegexIterator($iterator, '/^.+(\.php|\.html|\.js)$/i', RecursiveRegexIterator::GET_MATCH);

$updates = 0;

echo "Starting to update mobile-sidebar.js references to mobile-mobile-sidebar.js...\n";

foreach ($files as $file) {
    $filePath = $file[0];
    
    // Skip this script
    if (basename($filePath) === 'fix_sidebar_references.php') {
        continue;
    }
    
    $content = file_get_contents($filePath);
    if ($content === false) {
        echo "Error reading file: $filePath\n";
        continue;
    }
    
    // Check if the file contains the old reference
    if (strpos($content, 'mobile-sidebar.js') !== false) {
        $newContent = str_replace('mobile-sidebar.js', 'mobile-mobile-sidebar.js', $content, $count);
        
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

echo "\nUpdate complete! $updates references to 'mobile-sidebar.js' were updated to 'mobile-mobile-sidebar.js'\n";
?>
