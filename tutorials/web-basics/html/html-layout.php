<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'Full Stack Master - HTML Layout Techniques';
$page_description = 'Learn different HTML layout techniques including traditional, flexbox, and grid layouts with practical examples';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<div class="tutorial-content">
    <h1 class="mb-4">HTML Layout Techniques</h1>
    
    <div class="alert alert-info">
        <i class="fas fa-info-circle me-2"></i>
        HTML layouts are fundamental to web design. They define how elements are arranged on a web page. Modern web design uses various techniques to create responsive and flexible layouts.
    </div>

    <section id="traditional-layout" class="mt-5">
        <h2>1. Traditional Layout (Float-based)</h2>
        <p>Before flexbox and grid, developers used floats to create layouts. While still supported, this method is considered outdated for layout purposes.</p>
        
        <div class="row">
            <div class="col-md-6">
                <h5>HTML:</h5>
                <pre><code class="language-html">&lt;div class="header"&gt;Header&lt;/div&gt;
&lt;div class="nav"&gt;Navigation&lt;/div&gt;
&lt;div class="content"&gt;
    &lt;div class="main"&gt;Main Content&lt;/div&gt;
    &lt;div class="sidebar"&gt;Sidebar&lt;/div&gt;
&lt;/div&gt;
&lt;div class="footer"&gt;Footer&lt;/div&gt;</code></pre>

                <h5 class="mt-3">CSS:</h5>
                <pre><code class="language-css">.header, .footer {
    padding: 20px;
    background: #f0f0f0;
    text-align: center;
}
.nav {
    background: #333;
    color: white;
    padding: 10px;
}
.content:after {
    content: "";
    display: table;
    clear: both;
}
.main {
    float: left;
    width: 70%;
    padding: 15px;
    box-sizing: border-box;
}
.sidebar {
    float: right;
    width: 30%;
    padding: 15px;
    background: #f9f9f9;
    box-sizing: border-box;
}
@media (max-width: 600px) {
    .main, .sidebar {
        width: 100%;
        float: none;
    }
}</code></pre>
            </div>
            <div class="col-md-6">
                <h5>Result:</h5>
                <div class="border p-3">
                    <div style="padding: 15px; background: #f0f0f0; text-align: center; margin-bottom: 10px;">Header</div>
                    <div style="background: #333; color: white; padding: 10px; margin-bottom: 10px;">Navigation</div>
                    <div style="overflow: hidden;">
                        <div style="float: left; width: 70%; padding: 15px; box-sizing: border-box; background: #fff; border: 1px solid #ddd; min-height: 200px;">
                            Main Content
                        </div>
                        <div style="float: right; width: 30%; padding: 15px; background: #f9f9f9; box-sizing: border-box; border: 1px solid #ddd; min-height: 200px;">
                            Sidebar
                        </div>
                    </div>
                    <div style="clear: both; padding: 15px; background: #f0f0f0; text-align: center; margin-top: 10px;">
                        Footer
                    </div>
                </div>
                <div class="alert alert-warning mt-3">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <strong>Note:</strong> While float-based layouts still work, they're not recommended for modern web development. Use Flexbox or Grid instead.
                </div>
            </div>
        </div>
    </section>

    <section id="flexbox-layout" class="mt-5">
        <h2>2. Flexbox Layout</h2>
        <p>Flexbox is a one-dimensional layout model that offers space distribution between items in an interface and powerful alignment capabilities.</p>
        
        <div class="row">
            <div class="col-md-6">
                <h5>HTML:</h5>
                <pre><code class="language-html">&lt;div class="flex-container"&gt;
    &lt;header&gt;Header&lt;/header&gt;
    &lt;nav&gt;Navigation&lt;/nav&gt;
    &lt;div class="main-content"&gt;
        &lt;main&gt;Main Content&lt;/main&gt;
        &lt;aside&gt;Sidebar&lt;/aside&gt;
    &lt;/div&gt;
    &lt;footer&gt;Footer&lt;/footer&gt;
&lt;/div&gt;</code></pre>

                <h5 class="mt-3">CSS:</h5>
                <pre><code class="language-css">.flex-container {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}
header, footer {
    padding: 20px;
    background: #4a6fa5;
    color: white;
    text-align: center;
}
nav {
    background: #333;
    color: white;
    padding: 10px;
}
.main-content {
    display: flex;
    flex: 1;
}
main {
    flex: 3;
    padding: 20px;
    background: #fff;
}
aside {
    flex: 1;
    padding: 20px;
    background: #f4f4f4;
}
@media (max-width: 768px) {
    .main-content {
        flex-direction: column;
    }
    main, aside {
        flex: 1;
    }
}</code></pre>
            </div>
            <div class="col-md-6">
                <h5>Result:</h5>
                <div style="display: flex; flex-direction: column; min-height: 500px; border: 1px solid #ddd;">
                    <div style="padding: 15px; background: #4a6fa5; color: white; text-align: center;">Header</div>
                    <div style="background: #333; color: white; padding: 10px;">Navigation</div>
                    <div style="display: flex; flex: 1;">
                        <div style="flex: 3; padding: 20px; background: #fff;">Main Content</div>
                        <div style="flex: 1; padding: 20px; background: #f4f4f4;">Sidebar</div>
                    </div>
                    <div style="padding: 15px; background: #4a6fa5; color: white; text-align: center;">Footer</div>
                </div>
                <div class="alert alert-info mt-3">
                    <i class="fas fa-info-circle me-2"></i>
                    <strong>Tip:</strong> Flexbox is ideal for one-dimensional layouts (either a row or a column).
                </div>
            </div>
        </div>
    </section>

    <section id="grid-layout" class="mt-5">
        <h2>3. CSS Grid Layout</h2>
        <p>CSS Grid is a two-dimensional layout system that handles both rows and columns, making it perfect for complex web layouts.</p>
        
        <div class="row">
            <div class="col-md-6">
                <h5>HTML:</h5>
                <pre><code class="language-html">&lt;div class="grid-container"&gt;
    &lt;header&gt;Header&lt;/header&gt;
    &lt;nav&gt;Navigation&lt;/nav&gt;
    &lt;main&gt;Main Content&lt;/main&gt;
    &lt;aside&gt;Sidebar&lt;/aside&gt;
    &lt;footer&gt;Footer&lt;/footer&gt;
&lt;/div&gt;</code></pre>

                <h5 class="mt-3">CSS:</h5>
                <pre><code class="language-css">.grid-container {
    display: grid;
    grid-template-areas:
        'header header header'
        'nav nav nav'
        'main main sidebar'
        'footer footer footer';
    grid-gap: 10px;
    min-height: 100vh;
}
header {
    grid-area: header;
    background: #4a6fa5;
    color: white;
    padding: 20px;
    text-align: center;
}
nav {
    grid-area: nav;
    background: #333;
    color: white;
    padding: 10px;
}
main {
    grid-area: main;
    background: #fff;
    padding: 20px;
}
aside {
    grid-area: sidebar;
    background: #f4f4f4;
    padding: 20px;
}
footer {
    grid-area: footer;
    background: #4a6fa5;
    color: white;
    padding: 20px;
    text-align: center;
}
@media (max-width: 768px) {
    .grid-container {
        grid-template-areas:
            'header header header'
            'nav nav nav'
            'main main main'
            'sidebar sidebar sidebar'
            'footer footer footer';
    }
}</code></pre>
            </div>
            <div class="col-md-6">
                <h5>Result:</h5>
                <div style="display: grid; grid-template-areas: 'header header header' 'nav nav nav' 'main main sidebar' 'footer footer footer'; grid-gap: 10px; min-height: 500px; border: 1px solid #ddd;">
                    <div style="grid-area: header; background: #4a6fa5; color: white; padding: 15px; text-align: center;">Header</div>
                    <div style="grid-area: nav; background: #333; color: white; padding: 10px;">Navigation</div>
                    <div style="grid-area: main; background: #fff; padding: 20px;">Main Content</div>
                    <div style="grid-area: sidebar; background: #f4f4f4; padding: 20px;">Sidebar</div>
                    <div style="grid-area: footer; background: #4a6fa5; color: white; padding: 15px; text-align: center;">Footer</div>
                </div>
                <div class="alert alert-success mt-3">
                    <i class="fas fa-check-circle me-2"></i>
                    <strong>Best Practice:</strong> CSS Grid is ideal for complex two-dimensional layouts where you need control over both rows and columns.
                </div>
            </div>
        </div>
    </section>

    <section id="layout-comparison" class="mt-5">
        <h2>Layout Comparison</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Layout Type</th>
                        <th>Best For</th>
                        <th>Browser Support</th>
                        <th>Learning Curve</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Float-based</td>
                        <td>Simple layouts, legacy support</td>
                        <td>Excellent (all browsers)</td>
                        <td>Moderate (requires hacks for complex layouts)</td>
                    </tr>
                    <tr>
                        <td>Flexbox</td>
                        <td>One-dimensional layouts, content distribution</td>
                        <td>Excellent (modern browsers)</td>
                        <td>Moderate</td>
                    </tr>
                    <tr>
                        <td>CSS Grid</td>
                        <td>Complex two-dimensional layouts</td>
                        <td>Good (modern browsers)</td>
                        <td>Steeper learning curve</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section id="best-practices" class="mt-5">
        <h2>Layout Best Practices</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">1. Mobile-First Approach</h5>
                    </div>
                    <div class="card-body">
                        <p>Start with mobile layouts and use media queries to enhance for larger screens.</p>
                        <pre><code class="language-css">/* Mobile styles first */
.container {
    width: 100%;
    padding: 10px;
}

/* Tablet and larger */
@media (min-width: 768px) {
    .container {
        max-width: 720px;
        margin: 0 auto;
    }
}

/* Desktop */
@media (min-width: 992px) {
    .container {
        max-width: 960px;
    }
}</code></pre>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">2. Use CSS Variables</h5>
                    </div>
                    <div class="card-body">
                        <p>Define reusable values for consistent spacing and colors.</p>
                        <pre><code class="language-css">:root {
    --primary-color: #4a6fa5;
    --secondary-color: #333;
    --spacing-unit: 1rem;
    --border-radius: 4px;
}

header {
    background: var(--primary-color);
    padding: calc(var(--spacing-unit) * 2);
    border-radius: var(--border-radius);
}</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="d-flex justify-content-between mt-5">
        <a href="html-semantic-elements.php" class="btn btn-outline-primary">
            <i class="fas fa-arrow-left me-2"></i>Previous: Semantic Elements
        </a>
        <a href="html-iframes.php" class="btn btn-primary">
            Next: HTML Iframes <i class="fas fa-arrow-right ms-2"></i>
        </a>
    </div>
</div>

<?php include_file('includes/footer.php'); ?>