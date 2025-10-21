<?php
$page_title = 'What is CSS - CSS Tutorial';
$page_description = 'Full Stack Master - Programming Tutorials';
$base_url = '../../../';
$css_path = '../../../';
$js_path = '../../../';
include '../../../includes/header.php';
?>



<div class="container-fluid">
<div class="row">
<main class="col-12 px-md-4 py-4 tutorial-content">
<nav aria-label="breadcrumb" class="mb-4">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="../../../">Home</a></li>
<li class="breadcrumb-item"><a href="home">CSS</a></li>
<li class="breadcrumb-item active">What is CSS</li>
</ol>
</nav>
<article>
<h1 class="display-5 fw-bold mb-4">What is CSS?</h1>
<section class="mb-5">
<h2>CSS Definition</h2>
<div class="alert alert-primary">
<h5><i class="bi bi-filetype-css me-2"></i>CSS (Cascading Style Sheets)</h5>
<p class="mb-0">CSS is a stylesheet language used to control the presentation, formatting, and layout of HTML documents. It defines how HTML elements should be displayed on screen, paper, or other media.</p>
</div>
</section>
<section class="mb-5">
<h2>Understanding the Term "Cascading"</h2>
<p>The word <strong>"Cascading"</strong> in CSS refers to the way styles are applied when multiple rules target the same element. CSS follows a priority system:</p>
<div class="card mb-3">
<div class="card-body">
<h5 class="card-title">CSS Cascade Priority (Highest to Lowest)</h5>
<ol class="mb-0">
<li><strong>Inline styles</strong> - Styles applied directly to an element</li>
<li><strong>Internal styles</strong> - Styles defined in &lt;style&gt; tags</li>
<li><strong>External styles</strong> - Styles from linked CSS files</li>
<li><strong>Browser defaults</strong> - Default browser styling</li>
</ol>
</div>
</div>
<h4>Cascade Example:</h4>
<div class="code-block-wrapper">
<pre><code class="language-html">&lt;!-- External CSS file --&gt;
&lt;style&gt;
    p { color: blue; }  /* External rule */
&lt;/style&gt;

&lt;style&gt;
    p { color: green; } /* Internal rule - overrides external */
&lt;/style&gt;

&lt;!-- Inline style wins --&gt;
&lt;p style="color: red;"&gt;This text will be RED&lt;/p&gt;</code></pre>
</div>
</section>
<section class="mb-5">
<h2>The Role of CSS in Web Development</h2>
<div class="row g-3">
<div class="col-md-4">
<div class="card text-center h-100">
<div class="card-body">
<i class="bi bi-filetype-html text-primary" style="font-size: 3rem;"></i>
<h5 class="card-title mt-3">HTML</h5>
<p class="card-text">Structure &amp; Content</p>
<p class="small text-muted">The skeleton of the page</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card text-center h-100 border-primary">
<div class="card-body">
<i class="bi bi-filetype-css text-success" style="font-size: 3rem;"></i>
<h5 class="card-title mt-3">CSS</h5>
<p class="card-text">Presentation &amp; Style</p>
<p class="small text-muted">The skin and appearance</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card text-center h-100">
<div class="card-body">
<i class="bi bi-filetype-js text-warning" style="font-size: 3rem;"></i>
<h5 class="card-title mt-3">JavaScript</h5>
<p class="card-text">Behavior &amp; Interaction</p>
<p class="small text-muted">The muscles and actions</p>
</div>
</div>
</div>
</div>
</section>
<section class="mb-5">
<h2>What Can CSS Control?</h2>
<div class="table-responsive">
<table class="table table-hover">
<thead class="table-light">
<tr>
<th>Category</th>
<th>Properties</th>
<th>Examples</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>Colors</strong></td>
<td>Text color, background color, border color</td>
<td><code>color, background-color, border-color</code></td>
</tr>
<tr>
<td><strong>Text</strong></td>
<td>Font, size, weight, alignment, spacing</td>
<td><code>font-family, font-size, text-align</code></td>
</tr>
<tr>
<td><strong>Box Model</strong></td>
<td>Margin, padding, border, width, height</td>
<td><code>margin, padding, border, width</code></td>
</tr>
<tr>
<td><strong>Layout</strong></td>
<td>Position, display, flexbox, grid</td>
<td><code>position, display, flex, grid</code></td>
</tr>
<tr>
<td><strong>Visual Effects</strong></td>
<td>Shadows, opacity, transforms, transitions</td>
<td><code>box-shadow, opacity, transform</code></td>
</tr>
</tbody>
</table>
</div>
</section>
<section class="mb-5">
<h2>How CSS Works</h2>
<div class="card bg-light">
<div class="card-body">
<h5>The Process:</h5>
<ol>
<li><strong>Browser loads HTML</strong> - The browser reads the HTML document</li>
<li><strong>CSS is parsed</strong> - The browser finds and reads CSS rules</li>
<li><strong>Styles are applied</strong> - CSS rules are matched to HTML elements</li>
<li><strong>Page is rendered</strong> - The styled page is displayed to the user</li>
</ol>
</div>
</div>
</section>
<section class="mb-5">
<h2>Simple CSS Example</h2>
<p>Here's a basic example showing how CSS transforms plain HTML:</p>
<div class="row">
<div class="col-md-6">
<h4 class="h6">HTML:</h4>
<div class="code-block-wrapper">
<pre><code class="language-html">&lt;div class="card"&gt;
    &lt;h2&gt;Welcome&lt;/h2&gt;
    &lt;p&gt;This is a card component.&lt;/p&gt;
    &lt;button&gt;Click Me&lt;/button&gt;
&lt;/div&gt;</code></pre>
</div>
</div>
<div class="col-md-6">
<h4 class="h6">CSS:</h4>
<div class="code-block-wrapper">
<pre><code class="language-css">.card {
    background: white;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.card h2 {
    color: #2563eb;
    margin-bottom: 10px;
}

.card p {
    color: #666;
    line-height: 1.6;
}

.card button {
    background: #2563eb;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}</code></pre>
</div>
</div>
</div>
</section>
<section class="mb-5">
<h2>Benefits of Using CSS</h2>
<div class="row g-3">
<div class="col-lg-6">
<div class="card border-success h-100">
<div class="card-body">
<h5 class="card-title text-success"><i class="bi bi-check-circle-fill me-2"></i>Consistency</h5>
<p class="card-text">Apply the same styles across multiple pages by linking one CSS file.</p>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="card border-success h-100">
<div class="card-body">
<h5 class="card-title text-success"><i class="bi bi-check-circle-fill me-2"></i>Maintainability</h5>
<p class="card-text">Update styles in one place and see changes reflected everywhere.</p>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="card border-success h-100">
<div class="card-body">
<h5 class="card-title text-success"><i class="bi bi-check-circle-fill me-2"></i>Flexibility</h5>
<p class="card-text">Create complex layouts and designs without modifying HTML structure.</p>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="card border-success h-100">
<div class="card-body">
<h5 class="card-title text-success"><i class="bi bi-check-circle-fill me-2"></i>Performance</h5>
<p class="card-text">Browsers can cache CSS files, improving page load times.</p>
</div>
</div>
</div>
</div>
</section>
<section class="mb-5">
<h2>Key Takeaways</h2>
<ul class="list-group">
<li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>CSS stands for <strong>Cascading Style Sheets</strong></li>
<li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>It controls the <strong>visual presentation</strong> of HTML</li>
<li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>"Cascading" refers to the <strong>priority system</strong> for applying styles</li>
<li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>CSS is <strong>separate from HTML</strong> for better organization</li>
<li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>It makes websites <strong>consistent, maintainable, and beautiful</strong></li>
</ul>
</section>
<div class="d-flex justify-content-between mt-5 pt-4 border-top">
<a class="btn btn-outline-secondary" href="css-introduction">
<i class="bi bi-arrow-left"></i> Previous: CSS Introduction
                        </a>
<a class="btn btn-primary" href="css-syntax">
                            Next: CSS Syntax <i class="bi bi-arrow-right"></i>
</a>
</div>
</article>
</main>
</div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-markup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-css.min.js"></script>
<script src="../../js/theme-toggle.js"></script>


<?php include '../../../includes/footer.php'; ?>
