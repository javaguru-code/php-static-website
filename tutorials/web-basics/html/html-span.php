<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML <span> Element - Full Stack Master';
$page_description = 'Learn how to use the HTML span element for inline grouping, styling, and scripting.';
$base_url = get_base_url();
$css_path = $base_url; $js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<main class="col-9 col-lg-9 pt-3 px-lg-4">
<article class="tutorial-content">
  <h1 class="mb-4">HTML <code>&lt;span&gt;</code> Element</h1>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">Purpose</h2>
    <p><code>&lt;span&gt;</code> is a generic inline container used to wrap text or other inline elements for styling or scripting. It carries no semantics.</p>
<pre><code class="language-html">&lt;p&gt;Make &lt;span style="color:tomato"&gt;this text&lt;/span&gt; stand out.&lt;/p&gt;</code></pre>
  </div></div>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">Best Practices</h2>
    <ul>
      <li>Prefer semantic elements like <code>&lt;em&gt;</code>, <code>&lt;strong&gt;</code> when they convey meaning.</li>
      <li>Use <code>class</code> and external CSS over inline styles.</li>
      <li>Do not wrap block content inside <code>&lt;span&gt;</code>.</li>
    </ul>
  </div></div>
</article>
</main>

<?php include_file('includes/footer.php'); ?>