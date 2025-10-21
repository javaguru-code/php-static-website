<?php
$page_title = 'CSS Syntax - CSS Tutorial';
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
<li class="breadcrumb-item active">CSS Syntax</li>
</ol>
</nav>
<article>
<h1 class="display-5 fw-bold mb-4">CSS Syntax</h1>
<section class="mb-5">
<h2>CSS Rule Structure</h2>
<p>A CSS rule consists of a <strong>selector</strong> and a <strong>declaration block</strong>:</p>
<div class="code-block-wrapper">
<pre><code class="language-css">selector {
    property: value;
}</code></pre>
</div>
<div class="card bg-light mt-3">
<div class="card-body">
<h5>Anatomy of a CSS Rule:</h5>
<ul class="mb-0">
<li><strong>Selector</strong> - Specifies which HTML element(s) to style</li>
<li><strong>Declaration Block</strong> - Contains one or more declarations enclosed in curly braces { }</li>
<li><strong>Property</strong> - The aspect you want to change (e.g., color, font-size)</li>
<li><strong>Value</strong> - The setting for the property</li>
<li><strong>Semicolon (;)</strong> - Separates declarations</li>
</ul>
</div>
</div>
</section>
<section class="mb-5">
<h2>Complete Example</h2>
<div class="code-block-wrapper">
<pre><code class="language-css">h1 {
    color: blue;
    font-size: 24px;
    text-align: center;
}</code></pre>
</div>
<div class="row mt-3">
<div class="col-md-6">
<div class="card border-primary h-100">
<div class="card-body">
<h5 class="card-title text-primary">Selector: <code>h1</code></h5>
<p class="card-text">Targets all &lt;h1&gt; elements on the page</p>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card border-success h-100">
<div class="card-body">
<h5 class="card-title text-success">Declarations:</h5>
<ul class="mb-0">
<li><code>color: blue;</code></li>
<li><code>font-size: 24px;</code></li>
<li><code>text-align: center;</code></li>
</ul>
</div>
</div>
</div>
</div>
</section>
<section class="mb-5">
<h2>Multiple Selectors</h2>
<p>You can apply the same styles to multiple elements by separating selectors with commas:</p>
<div class="code-block-wrapper">
<pre><code class="language-css">h1, h2, h3 {
    color: navy;
    font-family: Arial, sans-serif;
}

p, li, span {
    line-height: 1.6;
}</code></pre>
</div>
</section>
<section class="mb-5">
<h2>CSS Comments</h2>
<p>Comments help document your CSS and are ignored by browsers:</p>
<div class="code-block-wrapper">
<pre><code class="language-css">/* This is a single-line comment */

/*
    This is a
    multi-line comment
*/

h1 {
    color: red; /* Inline comment */
}</code></pre>
</div>
</section>
<section class="mb-5">
<h2>CSS Syntax Rules</h2>
<div class="table-responsive">
<table class="table table-bordered">
<thead class="table-light">
<tr>
<th>Rule</th>
<th>Description</th>
<th>Example</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>Case Sensitivity</strong></td>
<td>Property names and values are case-insensitive, but selectors can be case-sensitive</td>
<td><code>Color</code> = <code>color</code></td>
</tr>
<tr>
<td><strong>Semicolons</strong></td>
<td>Required to separate declarations (optional for last declaration)</td>
<td><code>color: red; font-size: 14px;</code></td>
</tr>
<tr>
<td><strong>Curly Braces</strong></td>
<td>Enclose all declarations for a selector</td>
<td><code>p { color: blue; }</code></td>
</tr>
<tr>
<td><strong>Colon</strong></td>
<td>Separates property from value</td>
<td><code>property: value;</code></td>
</tr>
<tr>
<td><strong>Whitespace</strong></td>
<td>Ignored (use for readability)</td>
<td>Spaces, tabs, line breaks</td>
</tr>
</tbody>
</table>
</div>
</section>
<section class="mb-5">
<h2>Common Property Types</h2>
<div class="row g-3">
<div class="col-md-6">
<div class="card h-100">
<div class="card-body">
<h5 class="card-title"><i class="bi bi-palette text-primary me-2"></i>Colors</h5>
<div class="code-block-wrapper">
<pre><code class="language-css">color: red;
color: #ff0000;
color: rgb(255, 0, 0);
color: rgba(255, 0, 0, 0.5);
color: hsl(0, 100%, 50%);</code></pre>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card h-100">
<div class="card-body">
<h5 class="card-title"><i class="bi bi-rulers text-success me-2"></i>Sizes</h5>
<div class="code-block-wrapper">
<pre><code class="language-css">font-size: 16px;
width: 100%;
margin: 10px;
padding: 1.5em;
height: 50vh;</code></pre>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card h-100">
<div class="card-body">
<h5 class="card-title"><i class="bi bi-fonts text-warning me-2"></i>Text</h5>
<div class="code-block-wrapper">
<pre><code class="language-css">font-family: Arial, sans-serif;
font-weight: bold;
text-align: center;
text-decoration: underline;</code></pre>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card h-100">
<div class="card-body">
<h5 class="card-title"><i class="bi bi-border text-danger me-2"></i>Borders</h5>
<div class="code-block-wrapper">
<pre><code class="language-css">border: 1px solid black;
border-radius: 5px;
border-color: blue;
border-width: 2px;</code></pre>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="mb-5">
<h2>Shorthand Properties</h2>
<p>CSS provides shorthand properties to set multiple related properties at once:</p>
<div class="row">
<div class="col-md-6">
<h5>Long Form:</h5>
<div class="code-block-wrapper">
<pre><code class="language-css">margin-top: 10px;
margin-right: 20px;
margin-bottom: 10px;
margin-left: 20px;</code></pre>
</div>
</div>
<div class="col-md-6">
<h5>Shorthand:</h5>
<div class="code-block-wrapper">
<pre><code class="language-css">margin: 10px 20px 10px 20px;
/* or */
margin: 10px 20px;</code></pre>
</div>
</div>
</div>
<div class="alert alert-info mt-3">
<strong>Shorthand Order:</strong> top, right, bottom, left (clockwise) or vertical, horizontal
                        </div>
</section>
<section class="mb-5">
<h2>Valid vs Invalid Syntax</h2>
<div class="row">
<div class="col-md-6">
<div class="card border-success h-100">
<div class="card-header bg-success text-white">
<i class="bi bi-check-circle me-2"></i>Valid Syntax
                                    </div>
<div class="card-body">
<div class="code-block-wrapper">
<pre><code class="language-css">/* Correct */
p {
    color: blue;
    font-size: 16px;
}

h1 {
    color: red;
}</code></pre>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card border-danger h-100">
<div class="card-header bg-danger text-white">
<i class="bi bi-x-circle me-2"></i>Invalid Syntax
                                    </div>
<div class="card-body">
<div class="code-block-wrapper">
<pre><code class="language-css">/* Wrong - missing semicolon */
p {
    color: blue
    font-size: 16px;
}

/* Wrong - missing colon */
h1 {
    color red;
}</code></pre>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="mb-5">
<h2>Best Practices</h2>
<ul class="list-group">
<li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Use lowercase for property names</li>
<li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Always end declarations with semicolons</li>
<li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Use proper indentation for readability</li>
<li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Add comments to explain complex styles</li>
<li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Group related properties together</li>
<li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>Use shorthand properties when appropriate</li>
</ul>
</section>
<section class="mb-5">
<h2>Practice Example</h2>
<div class="code-block-wrapper">
<pre><code class="language-css">/* Styling a button */
.btn {
    /* Display &amp; Box Model */
    display: inline-block;
    padding: 12px 24px;
    margin: 10px;
    
    /* Colors &amp; Backgrounds */
    background-color: #3b82f6;
    color: white;
    
    /* Borders */
    border: none;
    border-radius: 6px;
    
    /* Text */
    font-size: 16px;
    font-weight: 600;
    text-align: center;
    text-decoration: none;
    
    /* Interaction */
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn:hover {
    background-color: #2563eb;
    transform: translateY(-2px);
}</code></pre>
</div>
</section>
<div class="d-flex justify-content-between mt-5 pt-4 border-top">
<a class="btn btn-outline-secondary" href="what-is-css">
<i class="bi bi-arrow-left"></i> Previous: What is CSS
                        </a>
<a class="btn btn-primary" href="css-selector">
                            Next: CSS Selectors <i class="bi bi-arrow-right"></i>
</a>
</div>
</article>
</main>
</div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-css.min.js"></script>
<script src="../../js/theme-toggle.js"></script>


<?php include '../../../includes/footer.php'; ?>
