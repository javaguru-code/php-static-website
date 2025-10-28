<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML Colors - Full Stack Master';
$page_description = 'HTML colors with names, HEX, RGB, HSL; applying colors via inline styles and CSS classes; contrast and accessibility.';
$base_url = get_base_url();
$css_path = $base_url; $js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<main class="col-9 col-lg-9 pt-3 px-lg-4">
<article class="tutorial-content">
  <h1 class="mb-4">HTML Colors</h1>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">Color Notations</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead class="table-dark"><tr><th>Format</th><th>Example</th><th>Notes</th></tr></thead>
        <tbody>
          <tr><td>Named</td><td><code>color: tomato;</code></td><td>140+ standard names</td></tr>
          <tr><td>HEX</td><td><code>color: #ff6347;</code></td><td>#RRGGBB or #RGB</td></tr>
          <tr><td>RGB(A)</td><td><code>color: rgb(255,99,71); color: rgba(255,99,71,.8);</code></td><td>0-255, with optional alpha</td></tr>
          <tr><td>HSL(A)</td><td><code>color: hsl(9,100%,64%); color: hsla(9,100%,64%,.8);</code></td><td>Hue, Saturation, Lightness</td></tr>
        </tbody>
      </table>
    </div>
<pre><code class="language-html">&lt;p style="color:tomato"&gt;Named&lt;/p&gt;
&lt;p style="color:#ff6347"&gt;HEX&lt;/p&gt;
&lt;p style="color:rgb(255,99,71)"&gt;RGB&lt;/p&gt;
&lt;p style="color:hsl(9,100%,64%)"&gt;HSL&lt;/p&gt;</code></pre>
  </div></div>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">Backgrounds and Gradients</h2>
<pre><code class="language-html">&lt;div style="background: linear-gradient(90deg, #06f, #0cf); color:white; padding:1rem"&gt;
  Gradient background
&lt;/div&gt;</code></pre>
  </div></div>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">Accessibility</h2>
    <ul>
      <li>Ensure sufficient contrast (WCAG AA: 4.5:1 for normal text).</li>
      <li>Do not convey meaning by color alone; add text or icons.</li>
    </ul>
  </div></div>
</article>
</main>

<?php include_file('includes/footer.php'); ?>