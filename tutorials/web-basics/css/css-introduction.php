<?php
$page_title = 'CSS Introduction - CSS Tutorial';
$page_description = 'Full Stack Master - Programming Tutorials';
$base_url = '../../../';
$css_path = '../../../';
$js_path = '../../../';
include '../../../includes/header.php';
include 'sidebar.php';
?>



<main class="col-12 col-lg-9 pt-3 px-lg-4 tutorial-content">
<nav aria-label="breadcrumb" class="mb-4">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="../../../">Home</a></li>
<li class="breadcrumb-item"><a href="home">CSS</a></li>
<li class="breadcrumb-item active">CSS Introduction</li>
</ol>
</nav>
<article>
<h1 class="display-5 fw-bold mb-4">CSS Introduction</h1>
<div class="alert alert-info">
<i class="bi bi-info-circle me-2"></i>
<strong>What You'll Learn:</strong> This tutorial introduces CSS (Cascading Style Sheets), its purpose, benefits, and how it enhances web pages.
                    </div>
<section class="mb-5">
<h2>What is CSS?</h2>
<p><strong>CSS (Cascading Style Sheets)</strong> is a stylesheet language used to describe the presentation and design of HTML documents. While HTML provides the structure and content of a web page, CSS controls how that content looks.</p>
<p>CSS allows you to:</p>
<ul>
<li>Control colors, fonts, and spacing</li>
<li>Create layouts and position elements</li>
<li>Add animations and transitions</li>
<li>Make websites responsive across different devices</li>
<li>Maintain consistent styling across multiple pages</li>
</ul>
</section>
<section class="mb-5">
<h2>Why Use CSS?</h2>
<div class="row g-3">
<div class="col-md-6">
<div class="card h-100">
<div class="card-body">
<h5 class="card-title"><i class="bi bi-lightning-charge text-warning"></i> Separation of Concerns</h5>
<p class="card-text">CSS separates content (HTML) from presentation, making code easier to maintain and update.</p>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card h-100">
<div class="card-body">
<h5 class="card-title"><i class="bi bi-speedometer2 text-success"></i> Better Performance</h5>
<p class="card-text">One CSS file can style multiple HTML pages, reducing code duplication and improving load times.</p>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card h-100">
<div class="card-body">
<h5 class="card-title"><i class="bi bi-phone text-primary"></i> Responsive Design</h5>
<p class="card-text">CSS enables creating layouts that adapt to different screen sizes and devices.</p>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card h-100">
<div class="card-body">
<h5 class="card-title"><i class="bi bi-palette text-danger"></i> Creative Control</h5>
<p class="card-text">Provides precise control over visual design including colors, fonts, layouts, and effects.</p>
</div>
</div>
</div>
</div>
</section>
<section class="mb-5">
<h2>HTML Without CSS vs. With CSS</h2>
<h3 class="h5 mt-4">Without CSS:</h3>
<div class="code-block-wrapper">
<pre><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Plain HTML&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Welcome to My Website&lt;/h1&gt;
    &lt;p&gt;This is a paragraph without any styling.&lt;/p&gt;
    &lt;button&gt;Click Me&lt;/button&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
</div>
<div class="alert alert-secondary">
<strong>Result:</strong> Basic, unstyled content with browser default styling
                        </div>
<h3 class="h5 mt-4">With CSS:</h3>
<div class="code-block-wrapper">
<pre><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Styled HTML&lt;/title&gt;
    &lt;style&gt;
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 50px;
        }
        h1 {
            font-size: 3rem;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        p {
            font-size: 1.2rem;
            line-height: 1.6;
            text-align: center;
        }
        button {
            display: block;
            margin: 20px auto;
            padding: 15px 30px;
            background: white;
            color: #667eea;
            border: none;
            border-radius: 25px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: transform 0.2s;
        }
        button:hover {
            transform: scale(1.1);
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Welcome to My Website&lt;/h1&gt;
    &lt;p&gt;This is a beautifully styled paragraph.&lt;/p&gt;
    &lt;button&gt;Click Me&lt;/button&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
</div>
<div class="alert alert-success">
<strong>Result:</strong> Professional, visually appealing design with custom colors, fonts, spacing, and interactive effects
                        </div>
</section>
<section class="mb-5">
<h2>CSS History</h2>
<div class="table-responsive">
<table class="table table-striped">
<thead>
<tr>
<th>Version</th>
<th>Year</th>
<th>Key Features</th>
</tr>
</thead>
<tbody>
<tr>
<td>CSS 1</td>
<td>1996</td>
<td>Basic styling: fonts, colors, text alignment</td>
</tr>
<tr>
<td>CSS 2</td>
<td>1998</td>
<td>Positioning, z-index, media types</td>
</tr>
<tr>
<td>CSS 2.1</td>
<td>2011</td>
<td>Bug fixes and clarifications</td>
</tr>
<tr>
<td>CSS 3</td>
<td>2011-Present</td>
<td>Modules: animations, flexbox, grid, transitions, transforms</td>
</tr>
</tbody>
</table>
</div>
</section>
<section class="mb-5">
<h2>What Can CSS Do?</h2>
<div class="row g-3">
<div class="col-lg-4 col-md-6">
<div class="card text-center">
<div class="card-body">
<i class="bi bi-palette-fill text-primary" style="font-size: 2rem;"></i>
<h5 class="card-title mt-3">Colors &amp; Backgrounds</h5>
<p class="card-text">Set colors, gradients, images, and patterns</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="card text-center">
<div class="card-body">
<i class="bi bi-fonts text-success" style="font-size: 2rem;"></i>
<h5 class="card-title mt-3">Typography</h5>
<p class="card-text">Control fonts, sizes, spacing, and text effects</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="card text-center">
<div class="card-body">
<i class="bi bi-bounding-box text-warning" style="font-size: 2rem;"></i>
<h5 class="card-title mt-3">Layout</h5>
<p class="card-text">Position elements using Grid, Flexbox, or Float</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="card text-center">
<div class="card-body">
<i class="bi bi-box text-danger" style="font-size: 2rem;"></i>
<h5 class="card-title mt-3">Box Model</h5>
<p class="card-text">Manage margins, padding, borders, and dimensions</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="card text-center">
<div class="card-body">
<i class="bi bi-phone text-info" style="font-size: 2rem;"></i>
<h5 class="card-title mt-3">Responsive Design</h5>
<p class="card-text">Adapt layouts for mobile, tablet, and desktop</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="card text-center">
<div class="card-body">
<i class="bi bi-arrow-repeat text-secondary" style="font-size: 2rem;"></i>
<h5 class="card-title mt-3">Animations</h5>
<p class="card-text">Create transitions, transforms, and keyframe animations</p>
</div>
</div>
</div>
</div>
</section>
<section class="mb-5">
<h2>Getting Started</h2>
<p>To start using CSS, you need:</p>
<ol>
<li><strong>An HTML file</strong> - Your content structure</li>
<li><strong>CSS rules</strong> - Your styling instructions</li>
<li><strong>A way to connect them</strong> - Inline, internal, or external CSS</li>
</ol>
<div class="alert alert-primary">
<i class="bi bi-lightbulb me-2"></i>
                            In the next lessons, you'll learn the CSS syntax, how to select elements, and the different ways to add CSS to your HTML pages.
                        </div>
</section>
<section class="mb-5">
<h2>Key Takeaways</h2>
<ul class="list-group">
<li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>CSS stands for Cascading Style Sheets</li>
<li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>CSS controls the visual presentation of HTML</li>
<li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>It separates content from design</li>
<li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>CSS makes websites responsive and interactive</li>
<li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i>CSS3 is modular and continuously evolving</li>
</ul>
</section>
<div class="d-flex justify-content-between mt-5 pt-4 border-top">
<a class="btn btn-outline-secondary" href="home">
<i class="bi bi-arrow-left"></i> Back to Home
                        </a>
<a class="btn btn-primary" href="what-is-css">
                            Next: What is CSS <i class="bi bi-arrow-right"></i>
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


<?php include_file('includes/footer.php'); ?>
