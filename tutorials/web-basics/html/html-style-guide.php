<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML Style Guide - Full Stack Master';
$page_description = 'Best practices for writing clean, semantic, accessible HTML and consistent code style.';
$base_url = get_base_url();
$css_path = $base_url; $js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<main class="col-12 col-lg-9 pt-3 px-lg-4">
<article class="tutorial-content">
  <h1 class="mb-4">HTML Style Guide</h1>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">Structure & Semantics</h2>
    <ul>
      <li>Use semantic elements (<code>&lt;header&gt;</code>, <code>&lt;main&gt;</code>, <code>&lt;section&gt;</code>, <code>&lt;article&gt;</code>, <code>&lt;footer&gt;</code>).</li>
      <li>One <code>&lt;h1&gt;</code> per page; maintain a logical heading order.</li>
      <li>Use lists for lists, tables for tabular data, and forms for inputs.</li>
    </ul>
  </div></div>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">Formatting</h2>
    <ul>
      <li>Indent consistently (2 spaces recommended), lowercase tag/attribute names.</li>
      <li>Quote attribute values, use meaningful <code>alt</code> on images.</li>
      <li>Group related attributes: <code>id</code>/<code>class</code> first, then ARIA, then data-*, then style.</li>
    </ul>
<pre><code class="language-html">&lt;img class="avatar" src="/img/u.png" alt="User avatar" width="64" height="64"&gt;</code></pre>
  </div></div>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">Accessibility</h2>
    <ul>
      <li>Ensure focus order, labels for inputs, and sufficient color contrast.</li>
      <li>Use ARIA judiciously; prefer native semantics.</li>
    </ul>
  </div></div>
</article>
</main>

<?php include_file('includes/footer.php'); ?>