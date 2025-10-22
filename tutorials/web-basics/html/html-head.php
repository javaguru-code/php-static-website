<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'Full Stack Master - HTML Head Elements';
$page_description = 'Learn about HTML head elements, meta tags, SEO optimization, and more in this comprehensive guide';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<div class="tutorial-content">
    <h1 class="mb-4">HTML Head Elements</h1>

    <div class="alert alert-info">
        <i class="fas fa-info-circle me-2"></i>
        The HTML <code>&lt;head&gt;</code> element is a container for metadata and links to external resources. It's not
        displayed on the web page but contains crucial information for browsers and search engines.
    </div>

    <section id="basic-structure" class="mt-5">
        <h2>Basic Structure</h2>
        <p>Every HTML document should have a properly structured <code>&lt;head&gt;</code> section. Here's a basic
            example:</p>

        <div class="row">
            <div class="col-md-8">
                <pre><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;meta name="description" content="A brief description of your page"&gt;
    &lt;title&gt;Page Title&lt;/title&gt;
    &lt;link rel="stylesheet" href="styles.css"&gt;
    &lt;link rel="icon" href="favicon.ico" type="image/x-icon"&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;!-- Page content --&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
            </div>
        </div>
    </section>

    <section id="meta-tags" class="mt-5">
        <h2>Meta Tags</h2>
        <p>Meta tags provide metadata about the HTML document. Here are the most important ones:</p>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Tag</th>
                        <th>Purpose</th>
                        <th>Example</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>charset</code></td>
                        <td>Character encoding</td>
                        <td><code>&lt;meta charset="UTF-8"&gt;</code></td>
                    </tr>
                    <tr>
                        <td><code>viewport</code></td>
                        <td>Responsive design settings</td>
                        <td><code>&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;</code>
                        </td>
                    </tr>
                    <tr>
                        <td><code>description</code></td>
                        <td>Page description for search engines</td>
                        <td><code>&lt;meta name="description" content="Learn about HTML head elements"&gt;</code></td>
                    </tr>
                    <tr>
                        <td><code>keywords</code></td>
                        <td>SEO keywords (less important now)</td>
                        <td><code>&lt;meta name="keywords" content="HTML, head, meta tags, SEO"&gt;</code></td>
                    </tr>
                    <tr>
                        <td><code>author</code></td>
                        <td>Page author</td>
                        <td><code>&lt;meta name="author" content="John Doe"&gt;</code></td>
                    </tr>
                    <tr>
                        <td><code>robots</code></td>
                        <td>Search engine indexing instructions</td>
                        <td><code>&lt;meta name="robots" content="index, follow"&gt;</code></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section id="linking-resources" class="mt-5">
        <h2>Linking Resources</h2>
        <p>Use <code>&lt;link&gt;</code> and <code>&lt;script&gt;</code> tags to connect external resources:</p>

        <div class="row">
            <div class="col-md-6">
                <h5>CSS Files</h5>
                <pre><code class="language-html">&lt;!-- Main stylesheet --&gt;
&lt;link rel="stylesheet" href="styles.css"&gt;

<!-- Google Fonts -->
&lt;link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"&gt;

<!-- Font Awesome -->
&lt;link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"&gt;</code></pre>

                <h5 class="mt-4">JavaScript Files</h5>
                <pre><code class="language-html">&lt;!-- External JavaScript (preferred in head with defer) --&gt;
&lt;script src="script.js" defer&gt;&lt;/script&gt;

<!-- Inline JavaScript (use sparingly) -->
&lt;script&gt;
    document.addEventListener('DOMContentLoaded', function() {
        console.log('Page loaded!');
    });
&lt;/script&gt;</code></pre>
            </div>
            <div class="col-md-6">
                <h5>Favicon</h5>
                <pre><code class="language-html">&lt;!-- Standard favicon --&gt;
&lt;link rel="icon" href="favicon.ico" type="image/x-icon"&gt;

<!-- Apple Touch Icon (iOS) -->
&lt;link rel="apple-touch-icon" href="apple-touch-icon.png"&gt;

<!-- Windows 8/10 Tile -->
&lt;meta name="msapplication-TileColor" content="#2b5797"&gt;
&lt;meta name="theme-color" content="#ffffff"&gt;</code></pre>

                <h5 class="mt-4">Preconnect and Preload</h5>
                <pre><code class="language-html">&lt;!-- Preconnect to external domains --&gt;
&lt;link rel="preconnect" href="https://fonts.gstatic.com"&gt;

<!-- Preload critical resources -->
&lt;link rel="preload" href="critical.css" as="style"&gt;
&lt;link rel="preload" href="hero-image.jpg" as="image"&gt;</code></pre>
            </div>
        </div>
    </section>

    <section id="open-graph" class="mt-5">
        <h2>Open Graph & Social Media Meta Tags</h2>
        <p>Enhance how your page appears when shared on social media:</p>

        <pre><code class="language-html">&lt;!-- Open Graph / Facebook --&gt;
&lt;meta property="og:type" content="website"&gt;
&lt;meta property="og:url" content="https://example.com/page"&gt;
&lt;meta property="og:title" content="Your Page Title"&gt;
&lt;meta property="og:description" content="Your page description"&gt;
&lt;meta property="og:image" content="https://example.com/image.jpg"&gt;

<!-- Twitter -->
 &gt;
&lt;meta name="twitter:card" content="summary_large_image"&gt;
&lt;meta name="twitter:title" content="Your Page Title"&gt;
&lt;meta name="twitter:description" content="Your page description"&gt;
&lt;meta name="twitter:image" content="https://example.com/image.jpg"&gt;</code></pre>
    </section>

    <section id="performance-optimization" class="mt-5">
        <h2>Performance Optimization</h2>
        <div class="row">
            <div class="col-md-6">
                <h5>Resource Hints</h5>
                <pre><code class="language-html">&lt;!-- DNS prefetching --&gt;
&lt;link rel="dns-prefetch" href="//cdn.example.com"&gt;

<!-- Prefetch resources for the next navigation -->
&lt;link rel="prefetch" href="/next-page.html" as="document"&gt;

<!-- Preload critical resources -->
&lt;link rel="preload" href="font.woff2" as="font" type="font/woff2" crossorigin&gt;</code></pre>
            </div>
            <div class="col-md-6">
                <h5>HTTP/2 Server Push</h5>
                <pre><code class="language-html">&lt;!-- Example of HTTP/2 Server Push header -->
&lt;link rel="preload" href="/style.css" as="style"&gt;
&lt;link rel="preload" href="/main.js" as="script"&gt;

<!-- Or configure in your server config -->
<!-- Nginx: http2_push /style.css; -->
<!-- Apache: Header add Link "&lt;/style.css&gt;; rel=preload; as=style" --></code></pre>
            </div>
        </div>
    </section>

    <section id="browser-compatibility" class="mt-5">
        <h2>Browser Compatibility</h2>
        <div class="alert alert-warning">
            <i class="fas fa-exclamation-triangle me-2"></i>
            <strong>Note:</strong> Some older browsers might need special meta tags for better compatibility.
        </div>

        <pre><code class="language-html">&lt;!-- Force IE 8/9/10 to use its best rendering engine --&gt;
&lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;

<!-- Disable automatic detection of phone numbers on iOS -->
&lt;meta name="format-detection" content="telephone=no"&gt;

<!-- Disable automatic link highlighting in Chrome -->
&lt;meta name="theme-color" content="#ffffff"&gt;</code></pre>
    </section>

    <section id="complete-example" class="mt-5">
        <h2>Complete Example</h2>
        <p>Here's a complete, production-ready <code>&lt;head&gt;</code> section:</p>

        <pre><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;!-- Basic Meta --&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;meta http-equiv="X-UA-Compatible" content="ie=edge"&gt;
    
    &lt;!-- Primary Meta Tags --&gt;
    &lt;title&gt;Your Page Title | Website Name&lt;/title&gt;
    &lt;meta name="title" content="Your Page Title | Website Name"&gt;
    &lt;meta name="description" content="A brief description of your page content"&gt;
    &lt;meta name="keywords" content="keyword1, keyword2, keyword3"&gt;
    &lt;meta name="author" content="Your Name"&gt;
    
    &lt;!-- Open Graph / Facebook --&gt;
    &lt;meta property="og:type" content="website"&gt;
    &lt;meta property="og:url" content="https://example.com/page/"&gt;
    &lt;meta property="og:title" content="Your Page Title | Website Name"&gt;
    &lt;meta property="og:description" content="A brief description of your page content"&gt;
    &lt;meta property="og:image" content="https://example.com/images/og-image.jpg"&gt;
    
    &lt;!-- Twitter --&gt;
    &lt;meta property="twitter:card" content="summary_large_image"&gt;
    &lt;meta property="twitter:url" content="https://example.com/page/"&gt;
    &lt;meta property="twitter:title" content="Your Page Title | Website Name"&gt;
    &lt;meta property="twitter:description" content="A brief description of your page content"&gt;
    &lt;meta property="twitter:image" content="https://example.com/images/og-image.jpg"&gt;
    
    &lt;!-- Favicon --&gt;
    &lt;link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png"&gt;
    &lt;link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png"&gt;
    &lt;link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png"&gt;
    &lt;link rel="manifest" href="/site.webmanifest"&gt;
    &lt;meta name="theme-color" content="#ffffff"&gt;
    
    &lt;!-- CSS --&gt;
    &lt;link rel="preconnect" href="https://fonts.gstatic.com"&gt;
    &lt;link rel="preload" href="css/styles.css" as="style"&gt;
    &lt;link rel="stylesheet" href="css/styles.css"&gt;
    
    &lt;!-- JavaScript --&gt;
    &lt;script src="js/script.js" defer&gt;&lt;/script&gt;
&lt;/head&gt;</code></pre>
    </section>

    <div class="d-flex justify-content-between mt-5">
        <a href="html-doctype.php" class="btn btn-outline-primary">
            <i class="fas fa-arrow-left me-2"></i>Previous: HTML Doctype
        </a>
        <a href="html-semantic-elements.php" class="btn btn-primary">
            Next: Semantic Elements <i class="fas fa-arrow-right ms-2"></i>
        </a>
    </div>
</div>

<?php include_file('includes/footer.php'); ?>