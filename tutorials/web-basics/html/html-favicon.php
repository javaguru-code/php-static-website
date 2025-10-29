<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML Favicon - Full Stack Master';
$page_description = 'Complete guide to favicons with HTML, including all possible attributes, formats, and best practices for modern web development.';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;

// Add external resources
$page_extra_head = '
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism-tomorrow.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js"></script>
<link rel="stylesheet" href="' . $base_url . 'tutorials/web-basics/html/css/audio-video.css">';

include_file('includes/header.php');
include 'sidebar.php';
?>

<main class="col-9 col-lg-9 pt-3 px-lg-4">
    <div class="d-lg-none mb-3">
        <button class="btn btn-primary" data-bs-target="#sidebarOffcanvas" data-bs-toggle="offcanvas">
            <i class="bi bi-list"></i> Menu
        </button>
    </div>

    <article class="tutorial-content">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="display-4 fw-bold text-primary">HTML Favicon Guide</h1>
                <p class="lead">A comprehensive guide to implementing favicons with HTML, covering all formats, attributes, and best practices.</p>
            </div>
        </div>

        <!-- Introduction -->
        <section class="media-section" id="introduction">
            <h2 class="mb-4">Introduction to Favicons</h2>
            <p>Favicons (short for favorite icons) are small icons associated with a particular website or web page. They appear in browser tabs, bookmarks, history, and other interface elements.</p>
            
            <div class="alert alert-info">
                <i class="bi bi-info-circle-fill me-2"></i>
                <strong>Modern Browsers Support:</strong> Modern browsers support multiple favicon formats including ICO, PNG, GIF, JPG, and SVG. The most widely supported format is still ICO for maximum compatibility.
            </div>
        </section>

        <!-- Basic Favicon Setup -->
        <section class="media-section" id="basic-setup">
            <h2 class="mb-4">Basic Favicon Setup</h2>
            
            <div class="example-card">
                <div class="card-header">Basic Favicon Implementation</div>
                <div class="card-body">
                    <div class="code-example">
                        <pre><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    
    <!-- Basic favicon -->
    &lt;link rel="icon" href="/favicon.ico" type="image/x-icon" sizes="16x16 32x32"&gt;
    
    <!-- For modern browsers -->
    &lt;link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32"&gt;
    &lt;link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16"&gt;
    
    <!-- For Apple devices -->
    &lt;link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png"&gt;
    
    <!-- For Windows 8/10 -->
    &lt;meta name="msapplication-TileColor" content="#2b5797"&gt;
    &lt;meta name="msapplication-TileImage" content="/mstile-144x144.png"&gt;
    
    <!-- For Android Chrome -->
    &lt;link rel="manifest" href="/site.webmanifest"&gt;
    &lt;meta name="theme-color" content="#ffffff"&gt;
    
    <title>Document Title</title>
&lt;/head&gt;
&lt;body&gt;
    <!-- Page content -->
&lt;/body&gt;
&lt;/html&gt;</code></pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- Favicon Formats -->
        <section class="media-section" id="formats">
            <h2 class="mb-4">Favicon Formats</h2>
            
            <div class="example-card">
                <div class="card-header">Supported Formats</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Format</th>
                                <th>File Extension</th>
                                <th>MIME Type</th>
                                <th>Best For</th>
                                <th>Browser Support</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ICO</td>
                                <td><code>.ico</code></td>
                                <td><code>image/x-icon</code></td>
                                <td>Legacy browser support</td>
                                <td>All browsers</td>
                            </tr>
                            <tr>
                                <td>PNG</td>
                                <td><code>.png</code></td>
                                <td><code>image/png</code></td>
                                <td>High-quality icons</td>
                                <td>All modern browsers</td>
                            </tr>
                            <tr>
                                <td>SVG</td>
                                <td><code>.svg</code></td>
                                <td><code>image/svg+xml</code></td>
                                <td>Scalable vector graphics</td>
                                <td>Modern browsers</td>
                            </tr>
                            <tr>
                                <td>GIF</td>
                                <td><code>.gif</code></td>
                                <td><code>image/gif</code></td>
                                <td>Animated icons</td>
                                <td>Most browsers</td>
                            </tr>
                            <tr>
                                <td>WebP</td>
                                <td><code>.webp</code></td>
                                <td><code>image/webp</code></td>
                                <td>High-quality with compression</td>
                                <td>Modern browsers</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Link Rel Attributes -->
        <section class="media-section" id="link-attributes">
            <h2 class="mb-4">Link Rel Attributes</h2>
            
            <div class="example-card">
                <div class="card-header">Rel Attribute Values</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Attribute Value</th>
                                    <th>Description</th>
                                    <th>Example</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>icon</code></td>
                                    <td>Default favicon</td>
                                    <td><code>&lt;link rel="icon" href="/favicon.ico"&gt;</code></td>
                                </tr>
                                <tr>
                                    <td><code>shortcut icon</code></td>
                                    <td>Legacy support (not recommended)</td>
                                    <td><code>&lt;link rel="shortcut icon" href="/favicon.ico"&gt;</code></td>
                                </tr>
                                <tr>
                                    <td><code>apple-touch-icon</code></td>
                                    <td>For iOS home screen icons</td>
                                    <td><code>&lt;link rel="apple-touch-icon" href="/apple-touch-icon.png"&gt;</code></td>
                                </tr>
                                <tr>
                                    <td><code>manifest</code></td>
                                    <td>Web App Manifest (PWA)</td>
                                    <td><code>&lt;link rel="manifest" href="/site.webmanifest"&gt;</code></td>
                                </tr>
                                <tr>
                                    <td><code>mask-icon</code></td>
                                    <td>Safari pinned tab icon</td>
                                    <td><code>&lt;link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5"&gt;</code></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sizes Attribute -->
        <section class="media-section" id="sizes-attribute">
            <h2 class="mb-4">Sizes Attribute</h2>
            
            <div class="example-card">
                <div class="card-header">Sizes Attribute Examples</div>
                <div class="card-body">
                    <p>The <code>sizes</code> attribute specifies the size of the linked icon. This is particularly useful when providing multiple icon sizes.</p>
                    
                    <div class="code-example">
                        <pre><code class="language-html"><!-- Single size -->
&lt;link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32"&gt;

<!-- Multiple sizes (browser will choose the most appropriate) -->
&lt;link rel="icon" type="image/png" href="/favicon-192x192.png" sizes="192x192"&gt;
&lt;link rel="icon" type="image/png" href="/favicon-512x512.png" sizes="512x512"&gt;

<!-- For devices with high DPI/PPI displays -->
&lt;link rel="icon" type="image/png" href="/favicon-64x64.png" sizes="64x64"&gt;
&lt;link rel="icon" type="image/png" href="/favicon-128x128.png" sizes="128x128"&gt;

<!-- For specific device sizes -->
&lt;link rel="icon" type="image/png" href="/favicon-48x48.png" sizes="48x48"&gt;
&lt;link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96"&gt;</code></pre>
                    </div>
                    
                    <div class="alert alert-info mt-3">
                        <i class="bi bi-lightbulb-fill me-2"></i>
                        <strong>Recommended Sizes:</strong> 16x16, 32x32, 48x48, 64x64, 96x96, 128x128, 192x192, 256x256, 512x512
                    </div>
                </div>
            </div>
        </section>

        <!-- Apple Touch Icons -->
        <section class="media-section" id="apple-touch">
            <h2 class="mb-4">Apple Touch Icons</h2>
            
            <div class="example-card">
                <div class="card-header">iOS Home Screen Icons</div>
                <div class="card-body">
                    <p>For iOS devices, you can specify different icon sizes for different devices and display resolutions.</p>
                    
                    <div class="code-example">
                        <pre><code class="language-html"><!-- iPhone (non-Retina) -->
&lt;link rel="apple-touch-icon" href="/apple-touch-icon.png"&gt;

<!-- Standard iPhone (Retina) -->
&lt;link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png"&gt;

<!-- iPhone X/11/12/13/14 (Retina HD) -->
&lt;link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png"&gt;

<!-- iPad (non-Retina) -->
&lt;link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png"&gt;

<!-- iPad (Retina) -->
&lt;link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png"&gt;

<!-- iPad Pro -->
&lt;link rel="apple-touch-icon" sizes="167x167" href="/apple-touch-icon-167x167.png"&gt;

<!-- iOS Startup Image (optional) -->
&lt;link rel="apple-touch-startup-image" href="/launch.png"&gt;</code></pre>
                    </div>
                    
                    <div class="mt-3">
                        <h5>Apple-Specific Meta Tags</h5>
                        <pre><code class="language-html"><!-- Web App Capable (for full-screen mode) -->
&lt;meta name="apple-mobile-web-app-capable" content="yes"&gt;

<!-- Status Bar Style -->
&lt;meta name="apple-mobile-web-app-status-bar-style" content="black"&gt;

<!-- Web App Title -->
&lt;meta name="apple-mobile-web-app-title" content="App Name"&gt;</code></pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- Windows Tiles -->
        <section class="media-section" id="windows-tiles">
            <h2 class="mb-4">Windows Tiles</h2>
            
            <div class="example-card">
                <div class="card-header">Windows 8/10/11 Pinned Sites</div>
                <div class="card-body">
                    <p>For Windows 8/10/11, you can customize the pinned site tiles with different images and colors.</p>
                    
                    <div class="code-example">
                        <pre><code class="language-html"><!-- Windows 8/10/11 Tiles -->
&lt;meta name="msapplication-TileColor" content="#2b5797"&gt;
&lt;meta name="msapplication-TileImage" content="/mstile-144x144.png"&gt;

<!-- Additional tile sizes -->
&lt;meta name="msapplication-square70x70logo" content="/mstile-70x70.png"&gt;
&lt;meta name="msapplication-square150x150logo" content="/mstile-150x150.png"&gt;
&lt;meta name="msapplication-wide310x150logo" content="/mstile-310x150.png"&gt;
&lt;meta name="msapplication-square310x310logo" content="/mstile-310x310.png"&gt;

<!-- Windows 8/10/11 Tile Configuration -->
&lt;meta name="msapplication-config" content="/browserconfig.xml"&gt;</code></pre>
                    </div>
                    
                    <div class="mt-3">
                        <h5>browserconfig.xml Example</h5>
                        <pre><code class="language-xml">&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;browserconfig&gt;
    &lt;msapplication&gt;
        &lt;tile&gt;
            &lt;square70x70logo src="/mstile-70x70.png"/&gt;
            &lt;square150x150logo src="/mstile-150x150.png"/&gt;
            &lt;wide310x150logo src="/mstile-310x150.png"/&gt;
            &lt;square310x310logo src="/mstile-310x310.png"/&gt;
            &lt;TileColor&gt;#2b5797&lt;/TileColor&gt;
        &lt;/tile&gt;
        &lt;notification&gt;
            &lt;polling-uri src="/notifications/feed.xml"/&gt;
            &lt;frequency&gt;30&lt;/frequency&gt;
            &lt;cycle&gt;1&lt;/cycle&gt;
        &lt;/notification&gt;
    &lt;/msapplication&gt;
&lt;/browserconfig&gt;</code></pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- Web App Manifest -->
        <section class="media-section" id="web-app-manifest">
            <h2 class="mb-4">Web App Manifest</h2>
            
            <div class="example-card">
                <div class="card-header">Progressive Web App (PWA) Support</div>
                <div class="card-body">
                    <p>The web app manifest provides metadata used when the web app is installed on a device's home screen.</p>
                    
                    <div class="code-example">
                        <pre><code class="language-html"><!-- Link to manifest file -->
&lt;link rel="manifest" href="/site.webmanifest"&gt;

<!-- Theme Color for Chrome, Firefox OS, and Opera -->
&lt;meta name="theme-color" content="#ffffff"&gt;</code></pre>
                        
                        <h5 class="mt-4">site.webmanifest</h5>
                        <pre><code class="language-json">{
    "name": "My Awesome App",
    "short_name": "MyApp",
    "description": "A brief description of my application",
    "start_url": "/?homescreen=1",
    "display": "standalone",
    "background_color": "#ffffff",
    "theme_color": "#2b5797",
    "orientation": "portrait",
    "icons": [
        {
            "src": "/android-chrome-192x192.png",
            "sizes": "192x192",
            "type": "image/png",
            "purpose": "any maskable"
        },
        {
            "src": "/android-chrome-512x512.png",
            "sizes": "512x512",
            "type": "image/png"
        },
        {
            "src": "/icon-192x192.png",
            "sizes": "192x192",
            "type": "image/png",
            "purpose": "maskable"
        }
    ],
    "screenshots": [
        {
            "src": "/screenshot1.png",
            "sizes": "1280x800",
            "type": "image/png",
            "form_factor": "wide"
        },
        {
            "src": "/screenshot2.png",
            "sizes": "750x1334",
            "type": "image/png",
            "form_factor": "narrow"
        }
    ]
}</code></pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- SVG Favicons -->
        <section class="media-section" id="svg-favicons">
            <h2 class="mb-4">SVG Favicons</h2>
            
            <div class="example-card">
                <div class="card-header">Using SVG for Favicons</div>
                <div class="card-body">
                    <p>SVG favicons are resolution-independent and often smaller in file size than bitmap formats.</p>
                    
                    <div class="code-example">
                        <pre><code class="language-html"><!-- Basic SVG favicon -->
&lt;link rel="icon" type="image/svg+xml" href="/favicon.svg"&gt;

<!-- SVG with media query for dark mode -->
&lt;link rel="icon" href="/favicon.svg"&gt
&lt;link rel="icon" href="/favicon-dark.svg" media="(prefers-color-scheme: dark)"&gt;

<!-- Inline SVG (data URI) -->
&lt;link rel="icon" type="image/svg+xml" href="data:image/svg+xml,&lt;svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'&gt;&lt;text y='.9em' font-size='90'&gt;🔍&lt;/text&gt;&lt;/svg&gt;"&gt;</code></pre>
                        
                        <h5 class="mt-4">favicon.svg Example</h5>
                        <pre><code class="language-xml">&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;svg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"&gt;
    &lt;circle cx="50" cy="50" r="45" fill="#2b5797"/&gt;
    &lt;path d="M30,35 L70,35 L65,65 L50,75 L35,65 Z" fill="#ffffff"/&gt;
    &lt;circle cx="50" cy="40" r="10" fill="#2b5797"/&gt;
    
    &lt;!-- Dark mode support (if needed) --&gt;
    &lt;style&gt;
        @media (prefers-color-scheme: dark) {
            circle { fill: #ffffff; }
            path { fill: #2b5797; }
        }
    &lt;/style&gt;
&lt;/svg&gt;</code></pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- Best Practices -->
        <section class="media-section" id="best-practices">
            <h2 class="mb-4">Best Practices</h2>
            
            <div class="example-card">
                <div class="card-header">Favicon Implementation Best Practices</div>
                <div class="card-body">
                    <h5>1. File Naming Conventions</h5>
                    <ul>
                        <li>Use <code>favicon.ico</code> for the root favicon (browsers request this by default)</li>
                        <li>Name files by their dimensions (e.g., <code>icon-192x192.png</code>)</li>
                        <li>Keep all favicon files in the root directory or a dedicated <code>/icons</code> folder</li>
                    </ul>
                    
                    <h5 class="mt-4">2. Performance Optimization</h5>
                    <ul>
                        <li>Use appropriate image compression (e.g., TinyPNG, ImageOptim)</li>
                        <li>Prefer SVG for vector-based icons when possible</li>
                        <li>Use WebP format for bitmap images when browser support allows</li>
                        <li>Set appropriate cache headers for favicon files</li>
                    </ul>
                    
                    <h5 class="mt-4">3. Cross-Browser Compatibility</h5>
                    <ul>
                        <li>Always include a basic <code>favicon.ico</code> for maximum compatibility</li>
                        <li>Provide multiple sizes for different devices and resolutions</li>
                        <li>Test on various browsers and devices</li>
                    </ul>
                    
                    <h5 class="mt-4">4. Testing Tools</h5>
                    <ul>
                        <li><a href="https://realfavicongenerator.net/" target="_blank">RealFaviconGenerator</a> - Comprehensive favicon generator and checker</li>
                        <li><a href="https://www.favicon-generator.org/" target="_blank">Favicon Generator</a> - Another good generator</li>
                        <li>Browser developer tools (F12) - Check network requests and console for errors</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Complete Example -->
        <section class="media-section" id="complete-example">
            <h2 class="mb-4">Complete Example</h2>
            
            <div class="example-card">
                <div class="card-header">Complete Favicon Implementation</div>
                <div class="card-body">
                    <p>Here's a complete example that covers all major platforms and use cases:</p>
                    
                    <div class="code-example">
                        <pre><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    
    <!-- Basic Metadata -->
    <title>My Awesome Website</title>
    <meta name="description" content="A description of my awesome website">
    
    <!-- Standard Favicon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon" sizes="16x16 32x32">
    
    <!-- Modern Browsers -->
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    
    <!-- Apple Touch Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#2b5797">
    
    <!-- Windows Tiles -->
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="msapplication-config" content="/browserconfig.xml">
    
    <!-- Theme Color -->
    <meta name="theme-color" content="#2b5797">
    
    <!-- Web App Manifest -->
    <link rel="manifest" href="/site.webmanifest">
    
    <!-- Additional Meta Tags -->
    <meta name="apple-mobile-web-app-title" content="My App">
    <meta name="application-name" content="My App">
    <meta name="msapplication-tap-highlight" content="no">
    
    <!-- Open Graph / Social Media -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="My Awesome Website">
    <meta property="og:description" content="A description of my awesome website">
    <meta property="og:image" content="/images/social-preview.jpg">
    <meta property="og:url" content="https://example.com">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="My Awesome Website">
    <meta name="twitter:description" content="A description of my awesome website">
    <meta name="twitter:image" content="/images/twitter-preview.jpg">
&lt;/head&gt;
&lt;body&gt;
    <!-- Page content -->
&lt;/body&gt;
&lt;/html&gt;</code></pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- Conclusion -->
        <section class="media-section" id="conclusion">
            <h2 class="mb-4">Conclusion</h2>
            <p>Implementing proper favicon support across all platforms can be complex, but it's essential for a professional web presence. By following the guidelines in this guide, you can ensure your website looks great everywhere it's displayed.</p>
            
            <div class="alert alert-success">
                <i class="bi bi-lightbulb-fill me-2"></i>
                <strong>Pro Tip:</strong> Use the <a href="https://realfavicongenerator.net/" target="_blank">RealFaviconGenerator</a> to generate all necessary favicon files and code snippets with just a few clicks.
            </div>
            
            <div class="mt-4">
                <h3>Additional Resources</h3>
                <ul>
                    <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/link" target="_blank">MDN: The Link element</a></li>
                    <li><a href="https://www.w3.org/2005/10/howto-favicon" target="_blank">W3C: How to Add a Favicon to your Site</a></li>
                    <li><a href="https://web.dev/learn/pwa/web-app-manifest/" target="_blank">Web App Manifest - web.dev</a></li>
                    <li><a href="https://evilmartians.com/chronicles/how-to-favicon-in-2021-six-files-that-fit-most-needs" target="_blank">How to Favicon in 2021</a></li>
                </ul>
            </div>
        </section>
    </article>
      <li>Provide ICO or SVG plus PNG fallbacks (16×16, 32×32, 180×180).</li>
      <li>Use a web app manifest for PWA support.</li>
      <li>Ensure good contrast in dark/light themes.</li>
    </ul>
  </div></div>
</article>
</main>

<?php include_file('includes/footer.php'); ?>