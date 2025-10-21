<?php
require_once __DIR__ . '/../../../includes/config.php';

function render_html_page($slug, $title) {
    $base_url = get_base_url();
    $page_title = $title . ' - HTML Tutorial';
    $page_description = $title . ' tutorial page';
    include_file('includes/header.php');
    include_file('tutorials/web-basics/html/sidebar.php');
    echo '<main class="col-12 col-lg-9 pt-3 px-lg-4">';
    echo '<article class="tutorial-content">';
    echo '<h1 class="display-5">' . htmlspecialchars($title) . '</h1>';

    // Load page-specific content if available
    $content_path = __DIR__ . '/_content/' . $slug . '.php';
    if (file_exists($content_path)) {
        include $content_path;
    } else {
        echo '<p class="text-muted">Content coming soon.</p>';
    }

    echo '</article>';
    echo '</main>';
    echo '</div></div>';
    
    // Include footer
    include_file('includes/footer.php');
    
    // Initialize Bootstrap components
    echo <<<HTML
<script>
// Initialize all Bootstrap tooltips
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
});

// Initialize all Bootstrap popovers
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl);
});

// Manually initialize accordions to ensure they work
var accordionElements = document.querySelectorAll('.accordion-button');
accordionElements.forEach(function(button) {
    button.addEventListener('click', function() {
        var targetId = this.getAttribute('data-bs-target');
        var targetElement = document.querySelector(targetId);
        
        if (targetElement) {
            var bsCollapse = new bootstrap.Collapse(targetElement, {
                toggle: true
            });
        }
    });
});
</script>
HTML;
}

$pages = [
  'html-tutorial' => 'HTML Tutorial',
  'what-is-html' => 'What is HTML',
  'html-text-editors' => 'HTML Text Editors',
  'html-building-blocks' => 'HTML Building Blocks',
  'html-tags' => 'HTML Tags',
  'html-attributes' => 'HTML Attributes',
  'html-elements' => 'HTML Elements',
  'html-heading' => 'HTML Heading',
  'html-paragraph' => 'HTML Paragraph',
  'html-phrase-tags' => 'HTML Phrase Tags',
  'html-anchor' => 'HTML Anchor',
  'html-image' => 'HTML Image',
  'html-table' => 'HTML Table',
  'html-lists' => 'HTML Lists',
  'html-ordered-list' => 'HTML Ordered List',
  'html-unordered-list' => 'HTML Unordered List',
  'html-description-list' => 'HTML Description List',
  'html-with-css' => 'HTML with CSS',
  'html-classes' => 'HTML Classes',
  'html-id-attribute' => 'HTML Id Attribute',
  'html-iframes' => 'HTML Iframes',
  'html-javascript' => 'HTML JavaScript',
  'html-comments' => 'HTML Comments',
  'html-file-paths' => 'HTML File Paths',
  'html-head' => 'HTML Head',
  'html-layout' => 'HTML Layout',
  'html-layout-techniques' => 'HTML Layout Techniques',
  'html-responsive' => 'HTML Responsive',
  'html-computercode' => 'HTML Computer Code',
  'html-entities' => 'HTML Entities',
  'html-symbols' => 'HTML Symbols',
  'html-charset' => 'HTML Charset',
  'html-url-encode' => 'HTML URL Encode',
  'meta-tags' => 'Meta Tags',
  'semantic-seo' => 'Semantic SEO',
  'sitemap' => 'Sitemaps'
];

// Router: determine which page based on filename
$script = basename($_SERVER['SCRIPT_NAME'], '.php');
if (isset($pages[$script])) {
    render_html_page($script, $pages[$script]);
} else {
    // Default to index-like fallback
    render_html_page('html-tutorial', 'HTML Tutorial');
}
