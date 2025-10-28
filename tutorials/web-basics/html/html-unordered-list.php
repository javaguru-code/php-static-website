<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'Full Stack Master - HTML Unordered List';
$page_description = 'Learn how to create and style unordered lists in HTML with examples and best practices';
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
    <h1 class="mb-4">HTML Unordered Lists</h1>
    
    <div class="alert alert-info">
        <i class="fas fa-info-circle me-2"></i>Unordered lists are used to group related items where the order doesn't matter, such as navigation menus, feature lists, or item collections.
    </div>

    <section id="basic-unordered-list" class="mt-5">
        <h2>Basic Unordered List</h2>
        <p>The <code>&lt;ul&gt;</code> element defines an unordered list, and each item is defined with the <code>&lt;li&gt;</code> (list item) element.</p>
        
        <div class="row">
            <div class="col-md-6">
                <h5>Code Example:</h5>
                <pre><code class="language-html">&lt;ul&gt;
    &lt;li&gt;First item&lt;/li&gt;
    &lt;li&gt;Second item&lt;/li&gt;
    &lt;li&gt;Third item&lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
            <div class="col-md-6">
                <h5>Result:</h5>
                <div class="border p-3 bg-light">
                    <ul>
                        <li>First item</li>
                        <li>Second item</li>
                        <li>Third item</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="list-markers" class="mt-5">
        <h2>List Markers</h2>
        <p>You can change the bullet style using the <code>list-style-type</code> CSS property:</p>
        
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Style</th>
                        <th>CSS Property</th>
                        <th>Example</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Disc (default)</td>
                        <td><code>list-style-type: disc;</code></td>
                        <td><ul class="disc-style"><li>Item 1</li><li>Item 2</li></ul></td>
                    </tr>
                    <tr>
                        <td>Circle</td>
                        <td><code>list-style-type: circle;</code></td>
                        <td><ul class="circle-style"><li>Item 1</li><li>Item 2</li></ul></td>
                    </tr>
                    <tr>
                        <td>Square</td>
                        <td><code>list-style-type: square;</code></td>
                        <td><ul class="square-style"><li>Item 1</li><li>Item 2</li></ul></td>
                    </tr>
                    <tr>
                        <td>None</td>
                        <td><code>list-style-type: none;</code></td>
                        <td><ul class="no-marker"><li>Item 1</li><li>Item 2</li></ul></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="alert alert-warning mt-3">
            <i class="fas fa-exclamation-triangle me-2"></i>
            The <code>type</code> attribute for <code>&lt;ul&gt;</code> is deprecated in HTML5. Always use CSS <code>list-style-type</code> instead.
        </div>
    </section>

    <section id="nested-lists" class="mt-5">
        <h2>Nested Unordered Lists</h2>
        <p>You can nest unordered lists to create hierarchical structures, like site navigation menus or category trees.</p>
        
        <div class="row">
            <div class="col-md-6">
                <h5>Code Example:</h5>
                <pre><code class="language-html">&lt;ul&gt;
    &lt;li&gt;Main Item 1
        &lt;ul&gt;
            &lt;li&gt;Subitem 1.1&lt;/li&gt;
            &lt;li&gt;Subitem 1.2
                &lt;ul&gt;
                    &lt;li&gt;Sub-subitem 1.2.1&lt;/li&gt;
                    &lt;li&gt;Sub-subitem 1.2.2&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li&gt;Main Item 2&lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
            <div class="col-md-6">
                <h5>Result:</h5>
                <div class="border p-3 bg-light">
                    <ul>
                        <li>Main Item 1
                            <ul>
                                <li>Subitem 1.1</li>
                                <li>Subitem 1.2
                                    <ul>
                                        <li>Sub-subitem 1.2.1</li>
                                        <li>Sub-subitem 1.2.2</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>Main Item 2</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="styling-with-css" class="mt-5">
        <h2>Styling Unordered Lists with CSS</h2>
        <p>You can customize the appearance of unordered lists using CSS. Here are some common styling options:</p>
        
        <h4 class="mt-4">1. Custom Bullet Points</h4>
        <div class="row">
            <div class="col-md-6">
                <pre><code class="language-css">/* Using CSS to style unordered lists */
ul.custom-bullets {
    list-style-type: none;
    padding-left: 1.5rem;
}

ul.custom-bullets li {
    position: relative;
    margin-bottom: 0.5rem;
    padding-left: 1.5rem;
}

ul.custom-bullets li::before {
    content: "\f00c"; /* Font Awesome check icon */
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    color: #198754;
    position: absolute;
    left: 0;
}

/* For emoji bullets */
ul.emoji-bullets {
    list-style-type: none;
    padding-left: 1.5rem;
}

ul.emoji-bullets li::before {
    content: "✅";
    margin-right: 0.5rem;
}</code></pre>
            </div>
            <div class="col-md-6">
                <h5>Result:</h5>
                <div class="border p-3 bg-light">
                    <ul class="custom-bullets">
                        <li>Custom checkmark bullet</li>
                        <li>Using Font Awesome</li>
                    </ul>
                    
                    <ul class="emoji-bullets mt-3">
                        <li>Emoji bullet points</li>
                        <li>Great for fun lists</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <h4 class="mt-4">2. Card List Layout</h4>
        <div class="row">
            <div class="col-md-6">
                <pre><code class="language-css">/* Card list layout */
ul.card-list {
    list-style: none;
    padding: 0;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 1rem;
}

ul.card-list li {
    background: white;
    border: 1px solid #dee2e6;
    border-radius: 0.5rem;
    padding: 1rem;
    transition: transform 0.2s, box-shadow 0.2s;
}

ul.card-list li:hover {
    transform: translateY(-3px);
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
}

ul.card-list h3 {
    margin-top: 0;
    color: #0d6efd;
    font-size: 1.1rem;
}</code></pre>
            </div>
            <div class="col-md-6">
                <h5>Result:</h5>
                <div class="border p-3 bg-light">
                    <ul class="card-list">
                        <li>
                            <h3>Feature One</h3>
                            <p>Description of the first feature goes here.</p>
                        </li>
                        <li>
                            <h3>Feature Two</h3>
                            <p>Description of the second feature.</p>
                        </li>
                        <li>
                            <h3>Feature Three</h3>
                            <p>Another feature description here.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="practical-examples" class="mt-5">
        <h2>Practical Examples</h2>
        
        <div class="row">
            <div class="col-md-6">
                <h4>Navigation Menu</h4>
                <pre><code class="language-html">&lt;nav&gt;
    &lt;ul class="nav-menu"&gt;
        &lt;li&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;About&lt;/a&gt;&lt;/li&gt;
        &lt;li class="has-dropdown"&gt;
            &lt;a href="#"&gt;Services &darr;&lt;/a&gt;
            &lt;ul class="dropdown"&gt;
                &lt;li&gt;&lt;a href="#"&gt;Web Design&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;Development&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;SEO&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;Contact&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
            </div>
            <div class="col-md-6">
                <h4>Social Media Links</h4>
                <pre><code class="language-html">&lt;ul class="social-links"&gt;
    &lt;li&gt;&lt;a href="#"&gt;&lt;i class="fab fa-facebook"&gt;&lt;/i&gt; Facebook&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;&lt;i class="fab fa-twitter"&gt;&lt;/i&gt; Twitter&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;&lt;i class="fab fa-instagram"&gt;&lt;/i&gt; Instagram&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;&lt;i class="fab fa-linkedin"&gt;&lt;/i&gt; LinkedIn&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
        </div>
    </section>

    <section id="best-practices" class="mt-5">
        <h2>Best Practices</h2>
        <div class="card">
            <div class="card-body">
                <ul class="mb-0">
                    <li>Use unordered lists when the order of items doesn't matter (e.g., navigation menus, feature lists, ingredients).</li>
                    <li>Keep list items concise and parallel in structure for better readability.</n                    <li>Use semantic HTML and proper nesting for better accessibility.</li>
                    <li>Consider using CSS Grid or Flexbox for complex list layouts.</li>
                    <li>For navigation menus, use the <code>&lt;nav&gt;</code> element for better semantics.</li>
                    <li>Test your lists on different screen sizes to ensure they're responsive.</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="accessibility" class="mt-5">
        <h2>Accessibility Considerations</h2>
        <div class="card">
            <div class="card-body">
                <ul>
                    <li>Screen readers will announce the presence of a list and the number of items.</li>
                    <li>Use the <code>aria-label</code> or <code>aria-labelledby</code> attribute to provide additional context if needed.</li>
                    <li>If you remove list markers with CSS, ensure there's still a visual indicator of the list structure.</li>
                    <li>For interactive lists (like menus), use appropriate ARIA roles and keyboard navigation.</li>
                    <li>Ensure sufficient color contrast between text and background for better readability.</li>
                </ul>
            </div>
        </div>
    </section>

    <div class="d-flex justify-content-between mt-5">
        <a href="html-ordered-list.php" class="btn btn-outline-primary">
            <i class="fas fa-arrow-left me-2"></i>Previous: Ordered Lists
        </a>
        <a href="html-description-list.php" class="btn btn-primary">
            Next: Description Lists <i class="fas fa-arrow-right ms-2"></i>
        </a>
    </div>
</div>

<!-- Custom CSS for this page -->
<style>
/* List marker styles */
.disc-style { list-style-type: disc; }
.circle-style { list-style-type: circle; }
.square-style { list-style-type: square; }
.no-marker { list-style-type: none; padding-left: 0; }

/* Navigation menu styles */
.nav-menu {
    list-style: none;
    padding: 0;
    display: flex;
    gap: 1rem;
    background: #f8f9fa;
    padding: 1rem;
    border-radius: 0.5rem;
}

.nav-menu a {
    text-decoration: none;
    color: #333;
    padding: 0.5rem 1rem;
    border-radius: 0.25rem;
    transition: background-color 0.2s;
}

.nav-menu a:hover {
    background-color: #e9ecef;
}

/* Dropdown styles */
.has-dropdown {
    position: relative;
}

.dropdown {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background: white;
    border: 1px solid #dee2e6;
    border-radius: 0.25rem;
    min-width: 200px;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    padding: 0.5rem 0;
    list-style: none;
}

.has-dropdown:hover .dropdown {
    display: block;
}

.dropdown li {
    padding: 0;
}

.dropdown a {
    display: block;
    padding: 0.5rem 1rem;
    color: #333;
    text-decoration: none;
}

.dropdown a:hover {
    background-color: #f8f9fa;
}

/* Social links styles */
.social-links {
    list-style: none;
    padding: 0;
}

.social-links li {
    margin-bottom: 0.5rem;
}

.social-links a {
    display: inline-flex;
    align-items: center;
    padding: 0.5rem 1rem;
    background: #f8f9fa;
    border-radius: 0.25rem;
    color: #333;
    text-decoration: none;
    transition: background-color 0.2s;
}

.social-links a:hover {
    background-color: #e9ecef;
}

.social-links i {
    margin-right: 0.5rem;
    width: 1.25rem;
    text-align: center;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .nav-menu {
        flex-direction: column;
        gap: 0.5rem;
    }
    
    .dropdown {
        position: static;
        box-shadow: none;
        border: none;
        padding-left: 1rem;
    }
}

section {
    scroll-margin-top: 80px;
}
</style>

<?php include_file('includes/footer.php'); ?>