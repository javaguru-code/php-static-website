<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML Input Attributes - Full Stack Master';
$page_description = 'All important HTML input attributes: value, placeholder, required, pattern, min/max, step, readonly, disabled, autocomplete, list, multiple.';
$base_url = get_base_url();
$css_path = $base_url; $js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<main class="col-12 col-lg-9 pt-3 px-lg-4">
<article class="tutorial-content">
  <h1 class="mb-4">HTML Input Attributes</h1>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">Common Attributes</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead class="table-dark"><tr><th>Attribute</th><th>Description</th><th>Example</th></tr></thead>
        <tbody>
          <tr><td><code>value</code></td><td>Initial value</td><td><code>&lt;input value="John"&gt;</code></td></tr>
          <tr><td><code>placeholder</code></td><td>Hint text</td><td><code>&lt;input placeholder="Your name"&gt;</code></td></tr>
          <tr><td><code>required</code></td><td>Makes field mandatory</td><td><code>&lt;input required&gt;</code></td></tr>
          <tr><td><code>readonly</code></td><td>Not editable but submitted</td><td><code>&lt;input readonly value="123"&gt;</code></td></tr>
          <tr><td><code>disabled</code></td><td>Disabled and not submitted</td><td><code>&lt;input disabled&gt;</code></td></tr>
          <tr><td><code>autocomplete</code></td><td>Hints browser autofill</td><td><code>&lt;input autocomplete="email"&gt;</code></td></tr>
          <tr><td><code>pattern</code></td><td>Regex validation</td><td><code>&lt;input pattern="[A-Za-z]{3,}"&gt;</code></td></tr>
          <tr><td><code>min</code>/<code>max</code>/<code>step</code></td><td>Numeric/date constraints</td><td><code>&lt;input type="number" min="0" max="100" step="5"&gt;</code></td></tr>
          <tr><td><code>list</code></td><td>Datalist association</td><td><code>&lt;input list="cities"&gt;</code></td></tr>
          <tr><td><code>multiple</code></td><td>Allow multiple values (file, email)</td><td><code>&lt;input type="file" multiple&gt;</code></td></tr>
        </tbody>
      </table>
    </div>
<pre><code class="language-html">&lt;label&gt;Username
  &lt;input name="user" required minlength="3" maxlength="15"&gt;
&lt;/label&gt;</code></pre>
  </div></div>
</article>
</main>

<?php include_file('includes/footer.php'); ?>