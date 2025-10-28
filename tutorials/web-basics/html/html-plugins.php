<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML Plug-ins (Embed/Object) - Full Stack Master';
$page_description = 'Using the embed and object elements to include external content; security and compatibility considerations.';
$base_url = get_base_url();
$css_path = $base_url; $js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<main class="col-9 col-lg-9 pt-3 px-lg-4">
<article class="tutorial-content">
  <h1 class="mb-4">HTML Plug-ins</h1>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">embed vs object</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead class="table-dark"><tr><th>Element</th><th>Use</th><th>Example</th></tr></thead>
        <tbody>
          <tr><td><code>&lt;embed&gt;</code></td><td>Embeds external content</td><td><code>&lt;embed src="file.pdf" type="application/pdf"&gt;</code></td></tr>
          <tr><td><code>&lt;object&gt;</code></td><td>Generic container for external resources; supports fallback</td><td><code>&lt;object data="file.pdf" type="application/pdf"&gt;Fallback&lt;/object&gt;</code></td></tr>
        </tbody>
      </table>
    </div>
<pre><code class="language-html">&lt;object data="/file.pdf" type="application/pdf" width="600" height="400"&gt;
  &lt;p&gt;PDF preview not available. &lt;a href="/file.pdf"&gt;Download&lt;/a&gt;&lt;/p&gt;
&lt;/object&gt;</code></pre>
    <p>Note: Many legacy plug-ins (like Flash) are obsolete. Prefer native HTML capabilities.</p>
  </div></div>
</article>
</main>

<?php include_file('includes/footer.php'); ?>