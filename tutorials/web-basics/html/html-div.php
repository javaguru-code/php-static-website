<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML <div> Element - Full Stack Master';
$page_description = 'Deep dive into the HTML div element: usage, semantics, layout patterns, and accessibility tips.';
$base_url = get_base_url();
$css_path = $base_url; $js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<main class="col-9 col-lg-9 pt-3 px-lg-4">
<article class="tutorial-content">
  <h1 class="mb-4">HTML <code>&lt;div&gt;</code> Element</h1>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">Purpose</h2>
    <p><code>&lt;div&gt;</code> is a generic block-level container used to group content for styling or scripting. It has no semantic meaning by itself.</p>
<pre><code class="language-html">&lt;div class="card"&gt;
  &lt;h2&gt;Title&lt;/h2&gt;
  &lt;p&gt;Content...&lt;/p&gt;
&lt;/div&gt;</code></pre>
  </div></div>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">When to use <code>&lt;div&gt;</code> vs semantic elements</h2>
    <ul>
      <li>Prefer <code>&lt;header&gt;</code>, <code>&lt;main&gt;</code>, <code>&lt;section&gt;</code>, <code>&lt;article&gt;</code>, <code>&lt;footer&gt;</code> for structure.</li>
      <li>Use <code>&lt;div&gt;</code> when no suitable semantic element exists or as a hook for CSS grid/flex layout.</li>
    </ul>
  </div></div>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">Layout Patterns</h2>
<pre><code class="language-html">&lt;div class="container"&gt;
  &lt;div class="row"&gt;
    &lt;div class="col"&gt;Column 1&lt;/div&gt;
    &lt;div class="col"&gt;Column 2&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
  </div></div>
</article>
</main>

<?php include_file('includes/footer.php'); ?>