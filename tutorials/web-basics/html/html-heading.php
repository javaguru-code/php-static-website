<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML Headings - Full Stack Master';
$page_description = 'Comprehensive guide to HTML headings including hierarchy, semantics, and best practices';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;
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
    <section class="section">
        <h1 class="mb-4">HTML Headings</h1>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4">Understanding HTML Headings</h2>
                <p>HTML headings are defined with the <code>&lt;h1&gt;</code> to <code>&lt;h6&gt;</code> tags, where <code>&lt;h1&gt;</code> is the most important heading and <code>&lt;h6&gt;</code> is the least important. Headings help structure your content and improve accessibility.</p>
                
                <div class="alert alert-info">
                    <h5>Key Points About Headings:</h5>
                    <ul class="mb-0">
                        <li>Range from <code>&lt;h1&gt;</code> (most important) to <code>&lt;h6&gt;</code> (least important)</li>
                        <li>Should be used in hierarchical order</li>
                        <li>Improve accessibility and SEO</li>
                        <li>Should describe the content that follows</li>
                    </ul>
                </div>
                
                <h3 class="h5 mt-4">Table of Contents</h3>
                <ul class="list-unstyled">
                    <li><a href="#basic-headings" class="text-decoration-none">1. Basic Headings</a></li>
                    <li><a href="#semantic-meaning" class="text-decoration-none">2. Semantic Meaning</a></li>
                    <li><a href="#best-practices" class="text-decoration-none">3. Best Practices</a></li>
                    <li><a href="#accessibility" class="text-decoration-none">4. Accessibility Considerations</a></li>
                    <li><a href="#examples" class="text-decoration-none">5. Practical Examples</a></li>
                </ul>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="basic-headings">1. Basic Headings</h2>
                <p>HTML provides six levels of headings, from <code>&lt;h1&gt;</code> to <code>&lt;h6&gt;</code>. Each heading level represents a different level of importance in the document hierarchy.</p>
                
                <div class="alert alert-light">
                    <pre class="mb-0"><code class="language-html">&lt;h1&gt;Main Title (Most Important)&lt;/h1&gt;
&lt;h2&gt;Section Heading&lt;/h2&gt;
&lt;h3&gt;Subsection Heading&lt;/h3&gt;
&lt;h4&gt;Sub-subsection Heading&lt;/h4&gt;
&lt;h5&gt;Minor Heading&lt;/h5&gt;
&lt;h6&gt;Least Important Heading&lt;/h6&gt;</code></pre>
                </div>
                
                <div class="mt-4 p-3 border rounded">
                    <h1 class="h1">Main Title (Most Important)</h1>
                    <h2 class="h2">Section Heading</h2>
                    <h3 class="h3">Subsection Heading</h3>
                    <h4 class="h4">Sub-subsection Heading</h4>
                    <h5 class="h5">Minor Heading</h5>
                    <h6 class="h6">Least Important Heading</h6>
                </div>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="semantic-meaning">2. Semantic Meaning</h2>
                <p>Headings provide semantic meaning to your content, helping search engines and screen readers understand the structure of your page.</p>
                
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Element</th>
                                <th>Semantic Meaning</th>
                                <th>Typical Use</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>&lt;h1&gt;</code></td>
                                <td>Main page title</td>
                                <td>Should be used once per page as the main title</td>
                            </tr>
                            <tr>
                                <td><code>&lt;h2&gt;</code></td>
                                <td>Major section heading</td>
                                <td>Main sections of the page</td>
                            </tr>
                            <tr>
                                <td><code>&lt;h3&gt;</code> to <code>&lt;h6&gt;</code></td>
                                <td>Subsection headings</td>
                                <td>Nested subsections under higher-level headings</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="best-practices">3. Best Practices</h2>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-header bg-success text-white">
                                <h5 class="mb-0">Do's</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Use only one <code>&lt;h1&gt;</code> per page</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Maintain a logical heading hierarchy</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Keep headings concise and descriptive</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i> Use headings in sequential order</li>
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
                                    <li class="mb-2"><i class="fas fa-times-circle text-danger me-2"></i> Skip heading levels</li>
                                    <li class="mb-2"><i class="fas fa-times-circle text-danger me-2"></i> Use headings for styling only</li>
                                    <li class="mb-2"><i class="fas fa-times-circle text-danger me-2"></i> Create long, complex headings</li>
                                    <li><i class="fas fa-times-circle text-danger me-2"></i> Use headings for non-heading content</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="accessibility">4. Accessibility Considerations</h2>
                <p>Proper use of headings is crucial for web accessibility:</p>
                
                <div class="alert alert-warning">
                    <h5>Accessibility Tips:</h5>
                    <ul class="mb-0">
                        <li>Screen readers use headings to navigate content</li>
                        <li>Don't skip heading levels (e.g., don't go from <code>&lt;h1&gt;</code> to <code>&lt;h3&gt;</code> without an <code>&lt;h2&gt;</code>)</li>
                        <li>Use ARIA landmarks with headings for complex layouts</li>
                        <li>Ensure sufficient color contrast for readability</li>
                    </ul>
                </div>
                
                <h3 class="h5 mt-4">Accessible Heading Structure Example</h3>
                <div class="alert alert-light">
                    <pre><code class="language-html">&lt;h1&gt;Page Title&lt;/h1&gt;
&lt;nav aria-label="Main navigation"&gt;
    &lt;h2 class="visually-hidden"&gt;Main Navigation&lt;/h2&gt;
    &lt;!-- Navigation items --&gt;
&lt;/nav&gt;
&lt;main&gt;
    &lt;article&gt;
        &lt;h2&gt;Article Title&lt;/h2&gt;
        &lt;section&gt;
            &lt;h3&gt;Section Heading&lt;/h3&gt;
            &lt;!-- Content --&gt;
        &lt;/section&gt;
    &lt;/article&gt;
&lt;/main&gt;</code></pre>
                </div>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="examples">5. Practical Examples</h2>
                
                <h3 class="h5">Blog Post Structure</h3>
                <div class="alert alert-light">
                    <pre><code class="language-html">&lt;article&gt;
    &lt;header&gt;
        &lt;h1&gt;The Future of Web Development&lt;/h1&gt;
        &lt;p&gt;Published on &lt;time datetime="2023-10-22"&gt;October 22, 2023&lt;/time&gt; by John Doe&lt;/p&gt;
    &lt;/header&gt;
    
    &lt;section&gt;
        &lt;h2&gt;Introduction&lt;/h2&gt;
        &lt;p&gt;Web development is evolving rapidly...&lt;/p&gt;
    &lt;/section&gt;
    
    &lt;section&gt;
        &lt;h2&gt;Key Technologies&lt;/h2&gt;
        
        &lt;h3&gt;Frontend Frameworks&lt;/h3&gt;
        &lt;p&gt;Modern frameworks like React and Vue...&lt;/p&gt;
        
        &lt;h3&gt;Backend Technologies&lt;/h3&gt;</code></pre>
                </div>
            </div>
        </div>
    </section>
    </article>
</main>
</div>
</div>
<?php include_file('includes/footer.php'); ?>
        &lt;h2&gt;Conclusion&lt;/h2&gt;
        &lt;p&gt;The future looks bright for web development...&lt;/p&gt;
    &lt;/footer&gt;
&lt;/article&gt;</code></pre>
                </div>
                
                <h3 class="h5 mt-4">Product Page Structure</h3>
                <div class="alert alert-light">
                    <pre><code class="language-html">&lt;div class="product-page"&gt;
    &lt;h1&gt;Premium Wireless Headphones&lt;/h1&gt;
    
    &lt;div class="product-details"&gt;
        &lt;h2&gt;Product Features&lt;/h2&gt;
        
        &lt;h3&gt;Sound Quality&lt;/h3&gt;
        &lt;p&gt;Experience crystal clear audio...&lt;/p&gt;
        
        &lt;h3&gt;Battery Life&lt;/h3&gt;
        &lt;p&gt;Up to 30 hours of playback...&lt;/p&gt;
        
        &lt;h3&gt;Comfort &amp; Design&lt;/h3&gt;
        &lt;p&gt;Ergonomic design for all-day comfort...&lt;/p&gt;
    &lt;/div&gt;
    
    &lt;aside class="related-products"&gt;
        &lt;h2&gt;You May Also Like&lt;/h2&gt;
        &lt;!-- Related products --&gt;
    &lt;/aside&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>
        </div>
        
        <div class="alert alert-success">
            <h4>Summary</h4>
            <p>HTML headings are essential for creating well-structured, accessible, and SEO-friendly web pages. By using headings properly, you improve both the user experience and the maintainability of your code. Remember to maintain a logical hierarchy, be consistent in your heading usage, and always consider accessibility best practices.</p>
        </div>
    </section>
</div>

<?php include_file('includes/footer.php'); ?>