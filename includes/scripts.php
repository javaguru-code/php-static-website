<?php
/**
 * Scripts Include File
 * 
 * This file contains all script includes for the application.
 */

/**
 * Outputs all required script tags
 */
function include_scripts($additional_scripts = []) {
    // Common scripts
    $scripts = [
        // jQuery (required for Bootstrap)
        'jquery' => [
            'src' => 'https://code.jquery.com/jquery-3.6.0.min.js',
            'integrity' => 'sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=',
            'crossorigin' => 'anonymous'
        ],
        // Bootstrap Bundle with Popper
        'bootstrap' => [
            'src' => 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
            'integrity' => 'sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL',
            'crossorigin' => 'anonymous'
        ],
        // Theme toggle
        'theme' => [
            'src' => asset('js/theme-toggle.js')
        ],
        // Navigation
        'navigation' => [
            'src' => asset('js/navigation.js')
        ]
    ];

    // Merge with additional scripts if any
    $scripts = array_merge($scripts, $additional_scripts);

    // Output script tags
    foreach ($scripts as $script) {
        $tag = '<script';
        foreach ($script as $attr => $value) {
            $tag .= ' ' . $attr . '="' . htmlspecialchars($value, ENT_QUOTES) . '"';
        }
        $tag .= '></script>' . "\n";
        echo $tag;
    }
}
?>
