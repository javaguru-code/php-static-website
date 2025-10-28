<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML YouTube Embeds - Full Stack Master';
$page_description = 'Embed YouTube videos responsibly with iframe, privacy-enhanced mode, responsive aspect ratio, and accessibility.';
$base_url = get_base_url();
$css_path = $base_url; $js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<main class="col-9 col-lg-9 pt-3 px-lg-4">
<article class="tutorial-content">
  <h1 class="mb-4">YouTube Embeds</h1>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">Basic Embed</h2>
<pre><code class="language-html">&lt;div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden"&gt;
  &lt;iframe src="https://www.youtube-nocookie.com/embed/dQw4w9WgXcQ" 
          title="YouTube video player" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
          referrerpolicy="strict-origin-when-cross-origin" 
          allowfullscreen 
          style="position:absolute;top:0;left:0;width:100%;height:100%;border:0"&gt;&lt;/iframe&gt;
&lt;/div&gt;</code></pre>
    <p>Use <code>youtube-nocookie.com</code> for privacy-enhanced mode and wrap the iframe to maintain 16:9 aspect ratio.</p>
  </div></div>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">Accessibility</h2>
    <ul>
      <li>Provide descriptive <code>title</code> on the <code>&lt;iframe&gt;</code>.</li>
      <li>Offer transcript or captions when possible.</li>
    </ul>
  </div></div>
</article>
</main>

<?php include_file('includes/footer.php'); ?>