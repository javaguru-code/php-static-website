<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML Form Attributes - Full Stack Master';
$page_description = 'Form-level attributes: action, method, enctype, novalidate, autocomplete, target, rel; and how they affect submissions.';
$base_url = get_base_url();
$css_path = $base_url; $js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<main class="col-12 col-lg-9 pt-3 px-lg-4">
<article class="tutorial-content">
  <h1 class="mb-4">HTML Form Attributes</h1>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">Core Attributes</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead class="table-dark"><tr><th>Attribute</th><th>Description</th><th>Example</th></tr></thead>
        <tbody>
          <tr><td><code>action</code></td><td>Submission URL</td><td><code>&lt;form action="/signup"&gt;</code></td></tr>
          <tr><td><code>method</code></td><td>HTTP method</td><td><code>&lt;form method="post"&gt;</code></td></tr>
          <tr><td><code>enctype</code></td><td>Encoding type</td><td><code>&lt;form enctype="multipart/form-data"&gt;</code></td></tr>
          <tr><td><code>novalidate</code></td><td>Disable HTML validation</td><td><code>&lt;form novalidate&gt;</code></td></tr>
          <tr><td><code>autocomplete</code></td><td>Enable/disable autofill</td><td><code>&lt;form autocomplete="off"&gt;</code></td></tr>
          <tr><td><code>target</code></td><td>Submission browsing context</td><td><code>&lt;form target="_blank"&gt;</code></td></tr>
          <tr><td><code>rel</code></td><td>Relationship hints</td><td><code>&lt;form rel="opener"&gt;</code></td></tr>
        </tbody>
      </table>
    </div>
<pre><code class="language-html">&lt;form action="/upload" method="post" enctype="multipart/form-data"&gt;
  &lt;input type="file" name="avatar" required&gt;
  &lt;button&gt;Upload&lt;/button&gt;
&lt;/form&gt;</code></pre>
  </div></div>
</article>
</main>

<?php include_file('includes/footer.php'); ?>