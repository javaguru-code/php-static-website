<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML Emojis - Full Stack Master';
$page_description = 'Using emojis in HTML with Unicode, UTF-8, and accessibility considerations.';
$base_url = get_base_url();
$css_path = $base_url; $js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<main class="col-9 col-lg-9 pt-3 px-lg-4">
<article class="tutorial-content">
  <h1 class="mb-4">HTML Emojis</h1>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">Using Emojis</h2>
    <p>Emojis are Unicode characters. Ensure your pages use UTF-8: <code>&lt;meta charset="UTF-8"&gt;</code>.</p>
<pre><code class="language-html">&lt;p&gt;Smile 😊 (U+1F60A) via direct char.&lt;/p&gt;
&lt;p&gt;Alternatively: &amp;#128522; or &amp;#x1F60A;&lt;/p&gt;</code></pre>
  </div></div>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">Accessibility</h2>
    <ul>
      <li>Provide context or aria-labels when emojis convey meaning.</li>
      <li>Avoid overusing emojis in critical UI text.</li>
    </ul>
  </div></div>
</article>
</main>

<?php include_file('includes/footer.php'); ?>