<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML Icons - Full Stack Master';
$page_description = 'Use icons in HTML via SVG, icon fonts, and external libraries (Bootstrap Icons, Font Awesome).';
$base_url = get_base_url();
$css_path = $base_url; $js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<main class="col-12 col-lg-9 pt-3 px-lg-4">
<article class="tutorial-content">
  <h1 class="mb-4">HTML Icons</h1>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">SVG Icons (Recommended)</h2>
<pre><code class="language-html">&lt;svg width="24" height="24" viewBox="0 0 16 16" fill="currentColor" aria-label="star" role="img"&gt;
  &lt;path d="M3.612 15.443..." /&gt;
&lt;/svg&gt;</code></pre>
    <ul>
      <li>Scalable, stylable with CSS, accessible with <code>aria-label</code>.</li>
    </ul>
  </div></div>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">Icon Fonts / Libraries</h2>
    <p>Popular options include Bootstrap Icons and Font Awesome.</p>
<pre><code class="language-html">&lt;!-- Bootstrap Icons --&gt;
&lt;link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"&gt;
&lt;i class="bi bi-star-fill" aria-hidden="true"&gt;&lt;/i&gt; Star
</code></pre>
  </div></div>
</article>
</main>

<?php include_file('includes/footer.php'); ?>