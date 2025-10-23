<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML Block vs Inline - Full Stack Master';
$page_description = 'Understand the difference between block-level and inline elements with rules, examples, and best practices.';
$base_url = get_base_url();
$css_path = $base_url; $js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<main class="col-12 col-lg-9 pt-3 px-lg-4">
<article class="tutorial-content">
  <h1 class="mb-4">Block vs Inline Elements</h1>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">What are Block-level Elements?</h2>
    <p>Block elements start on a new line and stretch to fill the horizontal space. Common examples: <code>&lt;div&gt;</code>, <code>&lt;p&gt;</code>, <code>&lt;h1..h6&gt;</code>, <code>&lt;ul&gt;</code>, <code>&lt;li&gt;</code>, <code>&lt;section&gt;</code>.</p>
    <pre><code class="language-html">&lt;div&gt;Block element&lt;/div&gt;
&lt;p&gt;Another block element&lt;/p&gt;</code></pre>
  </div></div>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">What are Inline Elements?</h2>
    <p>Inline elements do not start on a new line and only take up as much width as needed. Examples: <code>&lt;span&gt;</code>, <code>&lt;a&gt;</code>, <code>&lt;strong&gt;</code>, <code>&lt;em&gt;</code>, <code>&lt;img&gt;</code>.</p>
    <pre><code class="language-html">Text with &lt;span&gt;inline&lt;/span&gt; elements and an &lt;a href="#"&gt;inline link&lt;/a&gt;.</code></pre>
  </div></div>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">Rules & Best Practices</h2>
    <ul>
      <li>Block elements may contain block and inline elements; inline elements should only contain phrasing content.</li>
      <li>Avoid putting block elements inside inline elements (invalid in HTML).</li>
      <li>Use semantic elements (<code>&lt;section&gt;</code>, <code>&lt;article&gt;</code>, etc.) when possible for structure.</li>
    </ul>
  </div></div>

</article>
</main>

<?php include_file('includes/footer.php'); ?>