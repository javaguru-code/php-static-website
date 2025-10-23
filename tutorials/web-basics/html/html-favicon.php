<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML Favicon - Full Stack Master';
$page_description = 'Add favicons to your website using <link rel="icon"> with multiple formats and sizes, including best practices.';
$base_url = get_base_url();
$css_path = $base_url; $js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<main class="col-12 col-lg-9 pt-3 px-lg-4">
<article class="tutorial-content">
  <h1 class="mb-4">HTML Favicon</h1>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">Basic Setup</h2>
    <p>Add favicon links inside the <code>&lt;head&gt;</code> element.</p>
<pre><code class="language-html">&lt;link rel="icon" href="/favicon.ico" sizes="any"&gt;
&lt;link rel="icon" type="image/svg+xml" href="/icon.svg"&gt;
&lt;link rel="apple-touch-icon" href="/apple-touch-icon.png"&gt;
&lt;link rel="manifest" href="/site.webmanifest"&gt;</code></pre>
  </div></div>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">Recommendations</h2>
    <ul>
      <li>Provide ICO or SVG plus PNG fallbacks (16×16, 32×32, 180×180).</li>
      <li>Use a web app manifest for PWA support.</li>
      <li>Ensure good contrast in dark/light themes.</li>
    </ul>
  </div></div>
</article>
</main>

<?php include_file('includes/footer.php'); ?>