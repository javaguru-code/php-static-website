<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML Comments - Full Stack Master';
$page_description = 'Comprehensive guide to HTML comments including syntax, best practices, and practical examples';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<div class="tutorial-content">
    <section class="section">
        <h1 class="mb-4">HTML Comments</h1>

        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4">Understanding HTML Comments</h2>
                <p>HTML comments are used to insert notes or explanations within the HTML code. These comments are not
                    displayed in the browser but can be viewed in the page source. They serve several important
                    purposes:</p>

                <div class="alert alert-info">
                    <h5>Key Points About Comments:</h5>
                    <ul class="mb-0">
                        <li>Start with <code>&lt;!--</code> and end with <code>--&gt;</code></li>
                        <li>Can span single or multiple lines</li>
                        <li>Not displayed in the browser</li>
                        <li>Useful for documentation and debugging</li>
                    </ul>
                </div>

                <h3 class="h5 mt-4">Table of Contents</h3>
                <ul class="list-unstyled">
                    <li><a href="#syntax" class="text-decoration-none">1. Comment Syntax</a></li>
                    <li><a href="#types" class="text-decoration-none">2. Types of HTML Comments</a></li>
                    <li><a href="#conditional" class="text-decoration-none">3. Conditional Comments (Legacy)</a></li>
                    <li><a href="#best-practices" class="text-decoration-none">4. Best Practices</a></li>
                    <li><a href="#examples" class="text-decoration-none">5. Practical Examples</a></li>
                </ul>

            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="syntax">1. Comment Syntax</h2>
                <p>The basic syntax for an HTML comment is:</p>

                <div class="alert alert-light">
                    <pre class="mb-0"><code class="language-html">&lt;!-- This is a comment --&gt;</code></pre>
                </div>

                <h3 class="h5 mt-4">Key Points About Syntax</h3>
                <ul>
                    <li>Starts with <code>&lt;!--</code> and ends with <code>--&gt;</code></li>
                    <li>Can span single or multiple lines</li>
                    <li>Cannot be nested (you can't put a comment inside another comment)</li>
                    <li>Cannot contain <code>--</code> within the comment text (use spaces: <code>- -</code>)</li>
                </ul>

            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="types">2. Types of HTML Comments</h2>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Type</th>
                                <th>Description</th>
                                <th>Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Single-line</strong></td>
                                <td>Used for short notes or to comment out a single line</td>
                                <td><code>&lt;!-- Single line comment --&gt;</code></td>
                            </tr>
                            <tr>
                                <td><strong>Multi-line</strong></td>
                                <td>Used for longer explanations or multiple lines</td>
                                <td><code>&lt;!-- 
    Multiple
    line
    comment
--&gt;</code></td>
                            </tr>
                            <tr>
                                <td><strong>Inline</strong></td>
                                <td>Used to comment within a line of HTML</td>
                                <td><code>&lt;p&gt;Text &lt;!-- inline --&gt; more text&lt;/p&gt;</code></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>



    <div class="card mb-4">
        <div class="card-body">
            <h2 class="h4 mb-4" id="conditional">3. Conditional Comments (Legacy)</h2>
            <div class="alert alert-warning">
                <h5>Note:</h5>
                <p class="mb-0">Conditional comments were a feature of Internet Explorer (IE) and are now considered
                    obsolete. They are mentioned here for historical context. Modern approaches use feature detection
                    instead of browser detection.</p>
            </div>

            <p>Conditional comments allowed you to target specific versions of IE:</p>
            <div class="alert alert-light">
                <pre class="mb-0"><code class="language-html">&lt;!--[if IE 8]&gt;
    &lt;link rel="stylesheet" type="text/css" href="ie8-styles.css"&gt;
&lt;![endif]--&gt;</code></pre>
            </div>

        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h2 class="h4 mb-4" id="best-practices">4. Best Practices for HTML Comments</h2>

            <div class="row">
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0">Do's</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Explain complex
                                    code
                                    sections</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Keep comments
                                    up-to-date</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Use clear
                                    language
                                </li>
                                <li><i class="fas fa-check-circle text-success me-2"></i> Be consistent in style</li>
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
                                <li class="mb-2"><i class="fas fa-times-circle text-danger me-2"></i> Explain obvious
                                    code
                                </li>
                                <li class="mb-2"><i class="fas fa-times-circle text-danger me-2"></i> Leave
                                    commented-out
                                    code</li>
                                <li class="mb-2"><i class="fas fa-times-circle text-danger me-2"></i> Include sensitive
                                    info
                                </li>
                                <li><i class="fas fa-times-circle text-danger me-2"></i> Over-comment simple code</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h2 class="h4 mb-4" id="examples">5. Practical Examples</h2>

            <h3 class="h5">1. Document Structure Comments</h3>
            <div class="alert alert-light">
                <pre><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;!-- Character encoding and viewport settings --&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    
    &lt;title&gt;My Web Page&lt;/title&gt;
    
    &lt;!-- External stylesheets --&gt;
    &lt;link rel="stylesheet" href="styles.css"&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;!-- Main content wrapper --&gt;
    &lt;div class="container"&gt;
        &lt;!-- Page header --&gt;
        &lt;header class="py-4"&gt;
            &lt;h1 class="display-4"&gt;Welcome to My Website&lt;/h1&gt;
        &lt;/header&gt;
        
        &lt;!-- Navigation menu --&gt;
        &lt;nav class="mb-4"&gt;
            &lt;!-- Navigation links will be added here --&gt;
        &lt;/nav&gt;
        
        &lt;!-- Main content area --&gt;
        &lt;main class="py-3"&gt;
            &lt;article&gt;
                &lt;h2&gt;Article Title&lt;/h2&gt;
                &lt;p&gt;Article content goes here...&lt;/p&gt;
            &lt;/article&gt;
        &lt;/main&gt;
        
        &lt;!-- Footer section --&gt;
        &lt;footer class="py-3 mt-4 border-top"&gt;
            &lt;p class="text-muted"&gt;Copyright &copy; 2023&lt;/p&gt;
        &lt;/footer&gt;
    &lt;/div&gt;
    
    &lt;!-- Scripts --&gt;
    &lt;script src="app.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
            </div>

            <h3 class="h5 mt-4">2. Commenting Out Code</h3>
            <div class="alert alert-light">
                <pre><code class="language-html">&lt;!-- 
    ===================================
    TEMPORARILY HIDDEN PROMO BANNER
    Uncomment when the promotion starts
    ===================================
--&gt;
&lt;!--
&lt;div class="alert alert-warning text-center">
    &lt;h4 class="alert-heading"&gt;Special Offer!&lt;/h4&gt;
    &lt;p class="mb-2"&gt;Get 20% off your first purchase.&lt;/p&gt;
    &lt;button class="btn btn-primary btn-sm"&gt;Claim Offer&lt;/button&gt;
&lt;/div&gt;
--&gt;

&lt;div class="content"&gt;
    &lt;h1 class="display-5"&gt;Welcome to our website&lt;/h1&gt;
    &lt;p class="lead"&gt;Main content goes here...&lt;/p&gt;
&lt;/div&gt;</code></pre>
            </div>

            <h3 class="h5 mt-4">3. Development Notes</h3>
            <div class="alert alert-light">
                <pre><code class="language-html">&lt;!-- 
    ===================================
    AUTHENTICATION CHECK - TODO
    ===================================
    Required features:
    - [ ] Check user login status
    - [ ] Redirect to /login if not authenticated
    - [ ] Show error message for expired sessions
    - [ ] Log access attempts
    
    Dependencies:
    - auth.js must be loaded first
    - User session management required
    
    Last updated: 2023-10-22 by dev@example.com
--&gt;

&lt;!-- 
    FIXME: This is a temporary workaround
    Need to implement a more efficient solution
    Related issue: #1234
--&gt;</code></pre>
            </div>
        </div>

        </section>

        <div class="alert alert-success">
            <h4>Summary</h4>
            <p>HTML comments are a valuable tool for developers to document their code, make notes, and temporarily
                disable
                code. While they don't affect the rendered page, they can significantly improve code maintainability and
                collaboration. Remember to use them judiciously and follow best practices to keep your codebase clean
                and
                understandable.</p>
        </div>
        < </section>
    </div>
    <?php include_file('includes/footer.php'); ?>