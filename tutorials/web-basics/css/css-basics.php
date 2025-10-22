<?php
$page_title = 'CSS Basics - Full Stack Master';
$page_description = 'Full Stack Master - Programming Tutorials';
$base_url = '../../../';
$css_path = '../../../';
$js_path = '../../../';
include '../../../includes/header.php';
?>


<!-- Navigation -->

<!-- Main Content -->
<div class="container-fluid">
<div class="row">
<!-- Sidebar -->
<aside class="col-lg-3 d-none d-lg-block sidebar-nav p-0">
<div class="sticky-top pt-3" style="top: 70px;">
<div class="sidebar-content px-3">
<h5 class="sidebar-title mb-3"><i class="bi bi-palette"></i> CSS Tutorial</h5>
<nav class="nav flex-column">
<a class="nav-link active" href="#what-is-css">What is CSS?</a>
<a class="nav-link" href="#css-syntax">CSS Syntax</a>
<a class="nav-link" href="#how-to-add">How to Add CSS</a>
<a class="nav-link" href="#selectors">CSS Selectors</a>
<a class="nav-link" href="#properties">Common Properties</a>
<a class="nav-link" href="#cascade">The Cascade</a>
</nav>
</div>
</div>
</aside>
<!-- Main Tutorial Content -->
<main class="col-lg-9 px-md-4 py-4 tutorial-content">
<nav aria-label="breadcrumb" class="mb-4">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="../../../">Home</a></li>
<li class="breadcrumb-item"><a href="../../../web-basics/css">CSS</a></li>
<li class="breadcrumb-item active">CSS Basics</li>
</ol>
</nav>
<article>
<!-- What is CSS -->
<section class="mb-5" id="what-is-css">
<h1 class="display-5 fw-bold mb-4">CSS Basics</h1>
<p class="lead">CSS (Cascading Style Sheets) is the language used to style and layout web pages. It controls colors, fonts, spacing, positioning, and visual presentation of HTML elements.</p>
<div class="alert alert-info">
<i class="bi bi-info-circle"></i> <strong>What you'll learn:</strong> 
                            CSS syntax, selectors, properties, and how to apply styles to HTML elements.
                        </div>
<h2 class="mt-4">What is CSS?</h2>
<p>CSS (Cascading Style Sheets) is a stylesheet language that describes the presentation of HTML documents. While HTML provides structure and content, CSS handles the visual design, making websites beautiful and engaging.</p>
<div class="row g-4 my-4">
<div class="col-md-4">
<div class="card h-100 border-primary">
<div class="card-body">
<h5 class="card-title"><i class="bi bi-palette text-primary"></i> Styling</h5>
<p class="card-text">Control colors, fonts, sizes, and visual appearance of elements.</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card h-100 border-success">
<div class="card-body">
<h5 class="card-title"><i class="bi bi-layout-three-columns text-success"></i> Layout</h5>
<p class="card-text">Position elements, create grids, and build responsive designs.</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card h-100 border-info">
<div class="card-body">
<h5 class="card-title"><i class="bi bi-film text-info"></i> Animation</h5>
<p class="card-text">Add transitions, transforms, and keyframe animations.</p>
</div>
</div>
</div>
</div>
</section>
<!-- CSS Syntax -->
<section class="mb-5" id="css-syntax">
<h2 class="mb-3">CSS Syntax</h2>
<p>A CSS rule consists of a selector and a declaration block. The selector targets HTML elements, and the declaration block contains property-value pairs.</p>
<div class="code-block-wrapper mb-4">
<div class="code-block-header"><span class="code-language">CSS</span> Basic Syntax</div>
<pre><code class="language-css">selector {
    property: value;
    another-property: value;
}

/* Example: Style all paragraphs */
p {
    color: blue;
    font-size: 16px;
    line-height: 1.6;
}</code></pre>
</div>
<h3 class="h4 mt-4">Syntax Breakdown</h3>
<ul class="list-group list-group-flush">
<li class="list-group-item"><strong>Selector:</strong> Targets which HTML elements to style (e.g., <code>p</code>, <code>.class</code>, <code>#id</code>)</li>
<li class="list-group-item"><strong>Declaration Block:</strong> Enclosed in curly braces <code>{ }</code></li>
<li class="list-group-item"><strong>Property:</strong> The aspect you want to change (e.g., <code>color</code>, <code>font-size</code>)</li>
<li class="list-group-item"><strong>Value:</strong> The setting for the property (e.g., <code>blue</code>, <code>16px</code>)</li>
<li class="list-group-item"><strong>Semicolon:</strong> Separates each declaration</li>
</ul>
</section>
<!-- How to Add CSS -->
<section class="mb-5" id="how-to-add">
<h2 class="mb-3">How to Add CSS to HTML</h2>
<p>There are three ways to add CSS to HTML documents. Each method has its use cases and advantages.</p>
<h3 class="h4 mt-4">1. External CSS (Recommended)</h3>
<p>Link to an external CSS file using the <code>&lt;link&gt;</code> tag in the HTML <code>&lt;head&gt;</code>. This is the best practice for maintainability and reusability.</p>
<div class="code-block-wrapper mb-4">
<div class="code-block-header"><span class="code-language">HTML</span> External CSS</div>
<pre><code class="language-html">&lt;head&gt;
    &lt;link rel="stylesheet" href="styles.css"&gt;
&lt;/head&gt;</code></pre>
</div>
<div class="code-block-wrapper mb-4">
<div class="code-block-header"><span class="code-language">CSS</span> styles.css</div>
<pre><code class="language-css">body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
}

h1 {
    color: #333;
    text-align: center;
}</code></pre>
</div>
<h3 class="h4 mt-4">2. Internal CSS</h3>
<p>Write CSS inside a <code>&lt;style&gt;</code> tag in the HTML <code>&lt;head&gt;</code>. Useful for single-page styles.</p>
<div class="code-block-wrapper mb-4">
<div class="code-block-header"><span class="code-language">HTML</span> Internal CSS</div>
<pre><code class="language-html">&lt;head&gt;
    &lt;style&gt;
        p {
            color: green;
            font-size: 18px;
        }
    &lt;/style&gt;
&lt;/head&gt;</code></pre>
</div>
<h3 class="h4 mt-4">3. Inline CSS</h3>
<p>Apply styles directly to elements using the <code>style</code> attribute. Use sparingly for specific overrides.</p>
<div class="code-block-wrapper mb-4">
<div class="code-block-header"><span class="code-language">HTML</span> Inline CSS</div>
<pre><code class="language-html">&lt;p style="color: red; font-weight: bold;"&gt;
    This paragraph has inline styles.
&lt;/p&gt;</code></pre>
</div>
</section>
<!-- CSS Selectors -->
<section class="mb-5" id="selectors">
<h2 class="mb-3">CSS Selectors</h2>
<p>Selectors determine which HTML elements receive the styles. Mastering selectors is key to efficient CSS.</p>
<h3 class="h4 mt-4">Basic Selectors</h3>
<div class="table-responsive">
<table class="table table-bordered">
<thead class="table-light">
<tr>
<th>Selector</th>
<th>Syntax</th>
<th>Description</th>
<th>Example</th>
</tr>
</thead>
<tbody>
<tr>
<td>Element</td>
<td><code>element</code></td>
<td>Selects all elements of a type</td>
<td><code>p { }</code></td>
</tr>
<tr>
<td>Class</td>
<td><code>.classname</code></td>
<td>Selects all elements with that class</td>
<td><code>.btn { }</code></td>
</tr>
<tr>
<td>ID</td>
<td><code>#idname</code></td>
<td>Selects the element with that ID</td>
<td><code>#header { }</code></td>
</tr>
<tr>
<td>Universal</td>
<td><code>*</code></td>
<td>Selects all elements</td>
<td><code>* { }</code></td>
</tr>
</tbody>
</table>
</div>
<div class="code-block-wrapper mb-4">
<div class="code-block-header"><span class="code-language">CSS</span> Selector Examples</div>
<pre><code class="language-css">/* Element Selector - Styles all <p> elements */
p {
    line-height: 1.6;
}

/* Class Selector - Styles elements with class="highlight" */
.highlight {
    background-color: yellow;
    padding: 5px;
}

/* ID Selector - Styles element with id="main-title" */
#main-title {
    font-size: 32px;
    font-weight: bold;
}

/* Universal Selector - Applies to all elements */
* {
    box-sizing: border-box;
}</p></code></pre>
</div>
<h3 class="h4 mt-4">Combining Selectors</h3>
<div class="code-block-wrapper mb-4">
<div class="code-block-header"><span class="code-language">CSS</span> Combinator Selectors</div>
<pre><code class="language-css">/* Descendant - Selects all <p> inside <div> */
div p {
    color: blue;
}

/* Child - Direct children only */
div &gt; p {
    font-weight: bold;
}

/* Multiple selectors */
h1, h2, h3 {
    font-family: 'Arial', sans-serif;
}

/* Element with class */
p.important {
    color: red;
}</div></p></code></pre>
</div>
</section>
<!-- Common Properties -->
<section class="mb-5" id="properties">
<h2 class="mb-3">Common CSS Properties</h2>
<p>Here are essential CSS properties every developer should know.</p>
<h3 class="h4 mt-4">Color &amp; Background</h3>
<div class="code-block-wrapper mb-4">
<div class="code-block-header"><span class="code-language">CSS</span> Color Properties</div>
<pre><code class="language-css">.element {
    color: #333;                    /* Text color */
    background-color: #f0f0f0;      /* Background color */
    background-image: url('bg.jpg'); /* Background image */
    opacity: 0.8;                    /* Transparency */
}</code></pre>
</div>
<h3 class="h4 mt-4">Text Styling</h3>
<div class="code-block-wrapper mb-4">
<div class="code-block-header"><span class="code-language">CSS</span> Text Properties</div>
<pre><code class="language-css">.text {
    font-family: 'Arial', sans-serif;
    font-size: 16px;
    font-weight: bold;
    font-style: italic;
    text-align: center;
    text-decoration: underline;
    line-height: 1.6;
    letter-spacing: 2px;
}</code></pre>
</div>
<h3 class="h4 mt-4">Box Model</h3>
<div class="code-block-wrapper mb-4">
<div class="code-block-header"><span class="code-language">CSS</span> Box Model Properties</div>
<pre><code class="language-css">.box {
    width: 300px;
    height: 200px;
    margin: 20px;           /* Space outside */
    padding: 15px;          /* Space inside */
    border: 2px solid #333; /* Border */
    border-radius: 8px;     /* Rounded corners */
}</code></pre>
</div>
</section>
<!-- The Cascade -->
<section class="mb-5" id="cascade">
<h2 class="mb-3">The Cascade &amp; Specificity</h2>
<p>CSS stands for "Cascading Style Sheets" because styles can cascade and override each other based on specificity and source order.</p>
<h3 class="h4 mt-4">Specificity Hierarchy</h3>
<ol class="list-group list-group-numbered">
<li class="list-group-item"><strong>Inline styles</strong> - Highest priority (<code>style=""</code>)</li>
<li class="list-group-item"><strong>IDs</strong> - Very specific (<code>#header</code>)</li>
<li class="list-group-item"><strong>Classes, attributes, pseudo-classes</strong> - Moderate (<code>.btn</code>, <code>[type="text"]</code>, <code>:hover</code>)</li>
<li class="list-group-item"><strong>Elements &amp; pseudo-elements</strong> - Least specific (<code>p</code>, <code>::before</code>)</li>
</ol>
<div class="code-block-wrapper my-4">
<div class="code-block-header"><span class="code-language">CSS</span> Specificity Example</div>
<pre><code class="language-css">/* Specificity: 1 (element) */
p {
    color: black;
}

/* Specificity: 10 (class) */
.text {
    color: blue;
}

/* Specificity: 100 (ID) */
#main-text {
    color: red;
}

/* The element with id="main-text" will be RED */
/* because ID has highest specificity */</code></pre>
</div>
<div class="alert alert-warning">
<i class="bi bi-exclamation-triangle"></i> <strong>Best Practice:</strong> 
                            Avoid using !important and excessive IDs. Rely on classes for most styling to keep specificity manageable.
                        </div>
</section>
<!-- Navigation -->
<div class="d-flex justify-content-between mt-5 pt-4 border-top">
<a class="btn btn-outline-secondary" href="../../../web-basics/css">
<i class="bi bi-arrow-left"></i> Back to CSS
                        </a>
<a class="btn btn-primary" href="selectors">
                            CSS Selectors <i class="bi bi-arrow-right"></i>
</a>
</div>
</article>
</main>
</div>
</div>
<!-- Footer -->

<!-- Scripts -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-css.min.js"></script>
<script src="../../js/theme-toggle.js"></script>


<?php include_file('includes/footer.php'); ?>
