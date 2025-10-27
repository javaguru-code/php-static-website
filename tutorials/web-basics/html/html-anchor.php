<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML Anchor Tags - Full Stack Master';
$page_description = 'Comprehensive guide to HTML anchor tags, including links, bookmarks, email links, and best practices';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;

// Add Font Awesome CSS
$page_extra_head = '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />';

include_file('includes/header.php');
include 'sidebar.php';
?>

<main class="col-12 col-lg-9 pt-3 px-lg-4">
    <div class="d-lg-none mb-3">
        <button class="btn btn-primary" data-bs-target="#sidebarOffcanvas" data-bs-toggle="offcanvas">
            <i class="bi bi-list"></i> Menu
        </button>
    </div>

    <article class="tutorial-content">
    <section class="section">
        <h1 class="mb-4">HTML Anchor Tags</h1>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4">Understanding HTML Anchor Tags</h2>
                <p>The HTML <code>&lt;a&gt;</code> tag, also known as the anchor tag, is used to create hyperlinks between different resources on the web. It's one of the most important and frequently used elements in HTML.</p>
                
                <h3 class="h5 mt-4">Basic Link Syntax</h3>
                <p>The most basic link consists of the <code>&lt;a&gt;</code> tag with an <code>href</code> attribute that specifies the destination URL.</p>
                
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="h6">HTML Code:</h4>
                        <pre><code class="language-html">&lt;!-- Text link --&gt;
&lt;a href="https://example.com"&gt;Visit Example.com&lt;/a&gt;

<!-- Link to another page on the same site -->
&lt;a href="/about.html"&gt;About Us&lt;/a&gt;

<!-- Link to a section on the same page -->
&lt;a href="#section-id"&gt;Jump to Section&lt;/a&gt;

<!-- Link that opens in a new tab -->
&lt;a href="https://example.com" target="_blank" rel="noopener noreferrer"&gt;
    Open in New Tab
&lt;/a&gt;

<!-- Link with title attribute -->
&lt;a href="https://example.com" title="Go to Example.com"&gt;
    Hover for tooltip
&lt;/a&gt;

<!-- Link with email address -->
&lt;a href="mailto:contact@example.com"&gt;Email Us&lt;/a&gt;

<!-- Link to download a file -->
&lt;a href="/files/document.pdf" download&gt;Download PDF&lt;/a&gt;</code></pre>
                    </div>
                    <div class="col-md-6">
                        <h4 class="h6">Live Example:</h4>
                        <div class="p-3 border rounded">
                            <p class="mb-3">
                                <a href="https://example.com" class="me-3">Visit Example.com</a>
                                <a href="#section-id" class="me-3">Jump to Section</a>
                            </p>
                            <p class="mb-3">
                                <a href="https://example.com" target="_blank" rel="noopener noreferrer" class="me-3">
                                    <i class="fas fa-external-link-alt me-1"></i> New Tab
                                </a>
                                <a href="#" title="This is a tooltip" class="me-3">
                                    <i class="fas fa-info-circle me-1"></i> Hover Me
                                </a>
                            </p>
                            <p class="mb-3">
                                <a href="mailto:contact@example.com" class="me-3">
                                    <i class="fas fa-envelope me-1"></i> Email Us
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-primary" onclick="alert('In a real implementation, this would download a file.'); return false;">
                                    <i class="fas fa-download me-1"></i> Download
                                </a>
                            </p>
                        </div>
                        
                        <div class="alert alert-info mt-3">
                            <h5 class="alert-heading">Best Practices:</h5>
                            <ul class="mb-0">
                                <li>Always include meaningful link text that describes the destination</li>
                                <li>Use <code>target="_blank"</code> with <code>rel="noopener noreferrer"</code> for security</li>
                                <li>Make email links obvious with <code>mailto:</code></li>
                                <li>Use the <code>title</code> attribute for additional context</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="card mt-4">
                    <div class="card-header">
                        <h4 class="h6 mb-0">Link States</h4>
                    </div>
                    <div class="card-body">
                        <p>Links have different states that can be styled using CSS pseudo-classes:</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><code>:link</code> - A normal, unvisited link</li>
                            <li class="mb-2"><code>:visited</code> - A link the user has visited</li>
                            <li class="mb-2"><code>:hover</code> - When the user mouses over it</li>
                            <li class="mb-2"><code>:active</code> - The moment the link is clicked</li>
                            <li class="mb-2"><code>:focus</code> - When the link has keyboard focus</li>
                        </ul>
                        <p class="mb-0">
                            <a href="#" class="me-3">Normal Link</a>
                            <a href="#" class="me-3 visited">Visited Link</a>
                            <a href="#" class="me-3 hover">Hover State</a>
                            <a href="#" class="me-3 active">Active State</a>
                            <a href="#" class="focus">Focus State</a>
                        </p>
                    </div>
                </div>
                
                <div class="alert alert-info">
                    <h5>Key Points About Anchor Tags:</h5>
                    <ul class="mb-0">
                        <li>Defined with the <code>&lt;a&gt;</code> tag</li>
                        <li>Uses the <code>href</code> attribute to specify the destination</li>
                        <li>Can link to other web pages, files, email addresses, or locations on the same page</li>
                        <li>Essential for website navigation and user experience</li>
                    </ul>
                </div>
                
                <h3 class="h5 mt-4">Table of Contents</h3>
                <ul class="list-unstyled">
                    <li><a href="#basic-links" class="text-decoration-none">1. Basic Links</a></li>
                    <li><a href="#link-attributes" class="text-decoration-none">2. Link Attributes</a></li>
                    <li><a href="#bookmarks" class="text-decoration-none">3. Page Bookmarks</a></li>
                    <li><a href="#email-links" class="text-decoration-none">4. Email Links</a></li>
                    <li><a href="#download-links" class="text-decoration-none">5. Download Links</a></li>
                    <li><a href="#button-links" class="text-decoration-none">6. Button-Style Links</a></li>
                    <li><a href="#best-practices" class="text-decoration-none">7. Best Practices</a></li>
                    <li><a href="#examples" class="text-decoration-none">8. Practical Examples</a></li>
                </ul>
            </div>
        </div>
        
        <!-- Basic Links -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="basic-links">1. Basic Links</h2>
                <p>The most common use of the anchor tag is to link to another web page. The <code>href</code> attribute specifies the URL of the page you want to link to.</p>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-light">
                            <h6>Example:</h6>
                            <pre class="mb-0"><code class="language-html">&lt;!-- External link --&gt;
&lt;a href="https://www.example.com"&gt;Visit Example.com&lt;/a&gt;

<!-- Internal link -->
 &gt; 
&lt;a href="about.html"&gt;About Us&lt;/a&gt;

<!-- Link with title attribute -->
 &gt;
&lt;a href="services.html" title="View our services"&gt;Our Services&lt;/a&gt;</code></pre>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded">
                            <p><a href="https://www.example.com" class="me-3">Visit Example.com</a></p>
                            <p><a href="#" class="me-3">About Us</a> (example of internal link)</p>
                            <p class="mb-0"><a href="#" title="View our services" class="me-3">Our Services</a> (hover to see title)</p>
                        </div>
                    </div>
                </div>
                
                <div class="alert alert-warning mt-3">
                    <h5 class="alert-heading">URL Types:</h5>
                    <ul class="mb-0">
                        <li><strong>Absolute URLs:</strong> Full web address including protocol (https://) and domain name</li>
                        <li><strong>Relative URLs:</strong> Path relative to the current page (e.g., about.html, /images/photo.jpg)</li>
                        <li><strong>Root-relative URLs:</strong> Path relative to the root directory (e.g., /about.html)</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Link Attributes -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="link-attributes">2. Link Attributes</h2>
                <p>Anchor tags support several attributes that control their behavior and appearance.</p>
                
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Attribute</th>
                                <th>Description</th>
                                <th>Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>href</code></td>
                                <td>Specifies the URL of the page the link goes to</td>
                                <td><code>href="page.html"</code></td>
                            </tr>
                            <tr>
                                <td><code>target</code></td>
                                <td>Specifies where to open the linked document</td>
                                <td><code>target="_blank"</code> (opens in new tab)</td>
                            </tr>
                            <tr>
                                <td><code>rel</code></td>
                                <td>Specifies the relationship between the current and linked document</td>
                                <td><code>rel="nofollow"</code> or <code>rel="noopener"</code></td>
                            </tr>
                            <tr>
                                <td><code>title</code></td>
                                <td>Provides additional information about the link</td>
                                <td><code>title="Learn more about us"</code></td>
                            </tr>
                            <tr>
                                <td><code>download</code></td>
                                <td>Specifies that the target will be downloaded when clicked</td>
                                <td><code>download="filename"</code></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <h3 class="h5 mt-4">Target Attribute Examples</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-light">
                            <h6>Example:</h6>
                            <pre class="mb-0"><code class="language-html">&lt;!-- Open in new tab --&gt;
&lt;a href="https://example.com" target="_blank"&gt;Open in New Tab&lt;/a&gt;

<!-- Open in parent frame -->
 &gt;
&lt;a href="about.html" target="_parent"&gt;Open in Parent Frame&lt;/a&gt;

<!-- Open in top frame (breaks out of frames) -->
&lt;a href="index.html" target="_top"&gt;Break Out of Frames&lt;/a&gt;</code></pre>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded">
                            <p><a href="https://example.com" target="_blank" class="me-3">Open in New Tab</a></p>
                            <p><a href="#" class="me-3">Open in Parent Frame</a> (example)</p>
                            <p class="mb-0"><a href="#" class="me-3">Break Out of Frames</a> (example)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Page Bookmarks -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="bookmarks">3. Page Bookmarks</h2>
                <p>You can create bookmarks (also known as anchor links) to allow users to jump to specific sections of a webpage.</p>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-light">
                            <h6>Example:</h6>
                            <pre class="mb-0"><code class="language-html">&lt;!-- Create a bookmark with id --&gt;
&lt;h2 id="section1"&gt;Section 1&lt;/h2&gt;
&lt;p&gt;Content for section 1...&lt;/p&gt;

&lt;h2 id="section2"&gt;Section 2&lt;/h2&gt;
&lt;p&gt;Content for section 2...&lt;/p&gt;

&lt;!-- Link to the bookmarks --&gt;
&lt;a href="#section1"&gt;Jump to Section 1&lt;/a&gt; | 
&lt;a href="#section2"&gt;Jump to Section 2&lt;/a&gt;</code></pre>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded">
                            <div class="mb-3">
                                <a href="#demo-section1" class="btn btn-sm btn-outline-primary me-2">Jump to Demo Section 1</a>
                                <a href="#demo-section2" class="btn btn-sm btn-outline-primary">Jump to Demo Section 2</a>
                            </div>
                            <div class="border p-3 mb-3" id="demo-section1">
                                <h4 class="h5">Demo Section 1</h4>
                                <p class="mb-0">This is the content for demo section 1. Click the link above to see the page jump effect.</p>
                            </div>
                            <div class="border p-3" id="demo-section2">
                                <h4 class="h5">Demo Section 2</h4>
                                <p class="mb-0">This is the content for demo section 2. The link at the top of this example will bring you here.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="alert alert-info mt-3">
                    <h5 class="alert-heading">Smooth Scrolling</h5>
                    <p class="mb-0">For a smoother scrolling experience, you can add this CSS to your stylesheet:</p>
                    <pre class="mt-2 mb-0"><code class="language-css">html {
    scroll-behavior: smooth;
}</code></pre>
                </div>
            </div>
        </div>
        
        <!-- Email Links -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="email-links">4. Email Links</h2>
                <p>You can create links that open the user's default email client with a pre-filled email using the <code>mailto:</code> protocol.</p>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-light">
                            <h6>Example:</h6>
                            <pre class="mb-0"><code class="language-html">&lt;!-- Basic email link --&gt;
&lt;a href="mailto:contact@example.com"&gt;Email Us&lt;/a&gt;

<!-- Email with subject and body -->
&lt;a href="mailto:contact@example.com?subject=Inquiry&body=Hello, I have a question"&gt;
    Send us an email
&lt;/a&gt;

<!-- Email with multiple recipients -->
&lt;a href="mailto:contact@example.com,support@example.com"&gt;
    Contact our team
&lt;/a&gt;</code></pre>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded">
                            <p><a href="mailto:contact@example.com" class="me-3">Email Us</a></p>
                            <p><a href="mailto:contact@example.com?subject=Inquiry&body=Hello, I have a question" class="me-3">Send us an email</a></p>
                            <p class="mb-0"><a href="mailto:contact@example.com,support@example.com" class="me-3">Contact our team</a></p>
                        </div>
                    </div>
                </div>
                
                <div class="alert alert-warning mt-3">
                    <h5 class="alert-heading">Email Link Parameters</h5>
                    <ul class="mb-0">
                        <li><code>subject</code>: Sets the email subject line</li>
                        <li><code>body</code>: Sets the email body text</li>
                        <li><code>cc</code>: Adds CC recipients</li>
                        <li><code>bcc</code>: Adds BCC recipients</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Download Links -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="download-links">5. Download Links</h2>
                <p>The <code>download</code> attribute specifies that the target will be downloaded when a user clicks on the hyperlink.</p>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-light">
                            <h6>Example:</h6>
                            <pre class="mb-0"><code class="language-html">&lt;!-- Simple download link --&gt;
&lt;a href="/files/document.pdf" download&gt;Download PDF&lt;/a&gt;

<!-- Specify a filename for the downloaded file -->
&lt;a href="/files/document.pdf" download="my-document"&gt;
    Download with Custom Filename
&lt;/a&gt;

<!-- Download an image -->
&lt;a href="/images/photo.jpg" download&gt;
    &lt;img src="/images/photo-thumb.jpg" alt="Download photo"&gt;
&lt;/a&gt;</code></pre>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded">
                            <div class="d-flex flex-wrap gap-2 mb-3">
                                <a href="#" class="btn btn-outline-primary" onclick="alert('In a real implementation, this would download a file.'); return false;">Download PDF</a>
                                <a href="#" class="btn btn-outline-primary" onclick="alert('In a real implementation, this would download a file with a custom name.'); return false;">Download with Custom Filename</a>
                            </div>
                            <div class="text-center">
                                <a href="#" onclick="alert('In a real implementation, this would download the image.'); return false;" class="d-inline-block">
                                    <img src="https://via.placeholder.com/100" alt="Download photo" class="img-thumbnail">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="alert alert-info mt-3">
                    <h5 class="alert-heading">Note:</h5>
                    <p class="mb-0">The <code>download</code> attribute only works for same-origin URLs, or the <code>blob:</code> and <code>data:</code> schemes. For security reasons, browsers may block cross-origin downloads.</p>
                </div>
            </div>
        </div>
        
        <!-- Button-Style Links -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="button-links">6. Button-Style Links</h2>
                <p>You can style links to look like buttons using CSS. Here are some common button styles using Bootstrap classes.</p>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-light">
                            <h6>Example:</h6>
                            <pre class="mb-0"><code class="language-html">&lt;!-- Basic button --&gt;
&lt;a href="#" class="btn btn-primary"&gt;Primary Button&lt;/a&gt;

<!-- Outline button -->
&lt;a href="#" class="btn btn-outline-secondary"&gt;Secondary Button&lt;/a&gt;

<!-- Large button -->
&lt;a href="#" class="btn btn-success btn-lg"&gt;Large Button&lt;/a&gt;

<!-- Disabled button -->
&lt;a href="#" class="btn btn-danger" disabled&gt;Disabled Button&lt;/a&gt;</code></pre>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded">
                            <div class="d-flex flex-wrap gap-2 mb-3">
                                <a href="#" class="btn btn-primary">Primary Button</a>
                                <a href="#" class="btn btn-outline-secondary">Secondary Button</a>
                            </div>
                            <div class="d-flex flex-wrap gap-2 mb-3">
                                <a href="#" class="btn btn-success btn-lg">Large Button</a>
                                <a href="#" class="btn btn-danger" disabled>Disabled Button</a>
                            </div>
                            <p class="mb-0">
                                <a href="#" class="btn btn-info text-white me-2 mb-2">
                                    <i class="fas fa-info-circle me-1"></i> With Icon
                                </a>
                                <a href="#" class="btn btn-warning text-dark me-2 mb-2">
                                    <i class="fas fa-download me-1"></i> Download
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="alert alert-warning mt-3">
                    <h5 class="alert-heading">Accessibility Note:</h5>
                    <p class="mb-0">When using links styled as buttons, ensure they're still recognizable as links to screen readers. If the link performs an action rather than navigation, consider using a <code>&lt;button&gt;</code> element with appropriate ARIA attributes instead.</p>
                </div>
            </div>
        </div>
        
        <!-- Best Practices -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="best-practices">7. Best Practices</h2>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-header bg-success text-white">
                                <h5 class="mb-0">Do's</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Use descriptive link text that indicates the destination</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Add <code>title</code> attributes for additional context</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Use <code>target="_blank"</code> with <code>rel="noopener noreferrer"</code> for external links</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Ensure links have sufficient color contrast</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Make clickable areas large enough to tap on touch devices</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-header bg-danger text-white">
                                <h5 class="mb-0">Don'ts</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-times-circle text-danger me-2"></i> Don't use "click here" or similar non-descriptive link text</li>
                                    <li class="mb-2"><i class="fas fa-times-circle text-danger me-2"></i> Avoid opening links in new tabs without a good reason</li>
                                    <li class="mb-2"><i class="fas fa-times-circle text-danger me-2"></i> Don't use JavaScript in <code>href</code> (use buttons instead)</li>
                                    <li class="mb-2"><i class="fas fa-times-circle text-danger me-2"></i> Don't use links for actions that modify data (use forms or buttons)</li>
                                    <li class="mb-2"><i class="fas fa-times-circle text-danger me-2"></i> Don't rely solely on color to identify links</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="alert alert-info mt-4">
                    <h5 class="alert-heading">Accessibility Tips</h5>
                    <ul class="mb-0">
                        <li>Ensure all links are keyboard-navigable</li>
                        <li>Provide visual focus indicators for keyboard users</li>
                        <li>Use ARIA attributes when appropriate (e.g., <code>aria-label</code>, <code>aria-current</code>)</li>
                        <li>Indicate when a link will open in a new window</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Practical Examples -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="examples">8. Practical Examples</h2>
                
                <h3 class="h5">Navigation Menu</h3>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="alert alert-light">
                            <h6>Example:</h6>
                            <pre class="mb-0"><code class="language-html">&lt;nav class="navbar navbar-expand-lg navbar-light bg-light"&gt;
    &lt;div class="container-fluid"&gt;
        &lt;a class="navbar-brand" href="#"&gt;My Website&lt;/a&gt;
        &lt;div class="collapse navbar-collapse"&gt;
            &lt;ul class="navbar-nav me-auto mb-2 mb-lg-0"&gt;
                &lt;li class="nav-item"&gt;
                    &lt;a class="nav-link active" aria-current="page" href="#"&gt;Home&lt;/a&gt;
                &lt;/li&gt;
                &lt;li class="nav-item"&gt;
                    &lt;a class="nav-link" href="#"&gt;About&lt;/a&gt;
                &lt;/li&gt;
                &lt;li class="nav-item"&gt;
                    &lt;a class="nav-link" href="#"&gt;Services&lt;/a&gt;
                &lt;/li&gt;
                &lt;li class="nav-item"&gt;
                    &lt;a class="nav-link" href="#"&gt;Contact&lt;/a&gt;
                &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/nav&gt;</code></pre>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
                                <div class="container-fluid">
                                    <a class="navbar-brand" href="#">My Website</a>
                                    <div class="navbar-nav">
                                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                                        <a class="nav-link" href="#">About</a>
                                        <a class="nav-link" href="#">Services</a>
                                        <a class="nav-link" href="#">Contact</a>
                                    </div>
                                </div>
                            </nav>
                            <p class="text-muted small mb-0">This is a simplified navigation bar example. In a real implementation, you would use proper Bootstrap classes for responsive behavior.</p>
                        </div>
                    </div>
                </div>
                
                <h3 class="h5">Call-to-Action Buttons</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-light">
                            <h6>Example:</h6>
                            <pre class="mb-0"><code class="language-html">&lt;div class="text-center p-5 bg-light rounded"&gt;
    &lt;h2&gt;Ready to get started?&lt;/h2&gt;
    &lt;p class="lead mb-4"&gt;Join thousands of satisfied customers today.&lt;/p&gt;
    &lt;a href="#" class="btn btn-primary btn-lg me-2"&gt;Sign Up Now&lt;/a&gt;
    &lt;a href="#" class="btn btn-outline-secondary btn-lg"&gt;Learn More&lt;/a&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-5 bg-light rounded">
                            <h2 class="h3 text-center">Ready to get started?</h2>
                            <p class="lead text-center mb-4">Join thousands of satisfied customers today.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary btn-lg me-2">Sign Up Now</a>
                                <a href="#" class="btn btn-outline-secondary btn-lg">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-body text-center">
                <h3 class="h5 mb-3">Ready to learn more?</h3>
                <a href="#" class="btn btn-primary me-2">Take the Quiz</a>
                <a href="html-images.php" class="btn btn-outline-primary">Next: HTML Images →</a>
            </div>
        </div>
    </section>
</div>

<?php include_file('includes/footer.php'); ?>