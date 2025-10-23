<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'URL Encoding Deep Dive - Full Stack Master';
$page_description = 'Percent-encoding rules for URLs: reserved/unreserved sets, query vs path, form encoding, encodeURIComponent vs encodeURI, pitfalls.';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<main class="col-12 col-lg-9 pt-3 px-lg-4">
  <article class="tutorial-content">
    <h1 class="mb-4">URL Encoding (Percent-Encoding)</h1>

    <div class="card mb-4"><div class="card-body">
      <h2 class="h4">Unreserved vs Reserved Characters</h2>
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead class="table-dark"><tr><th>Set</th><th>Characters</th><th>Notes</th></tr></thead>
          <tbody>
            <tr><td>Unreserved</td><td><code>A–Z a–z 0–9 - _ . ~</code></td><td>Never needs encoding</td></tr>
            <tr><td>Reserved</td><td><code>! * ' ( ) ; : @ & = + $ , / ? # [ ]</code></td><td>May have special meaning; encode as needed</td></tr>
          </tbody>
        </table>
      </div>
<pre><code class="language-text">Space → %20 (in URLs), but in application/x-www-form-urlencoded bodies: space → +</code></pre>
    </div></div>

    <div class="card mb-4"><div class="card-body">
      <h2 class="h4">Path vs Query</h2>
      <ul>
        <li>In <strong>path segments</strong>, encode spaces as <code>%20</code>, and encode <code>/</code> if it’s data, not a separator.</li>
        <li>In <strong>query strings</strong>, use <code>application/x-www-form-urlencoded</code> rules: space → <code>+</code>, others percent-encoded.</li>
      </ul>
<pre><code class="language-text">/search/ACME%2FInc   ← the literal slash in a name
?q=hello+world&amp;tag=C%23   ← # becomes %23</code></pre>
    </div></div>

    <div class="card mb-4"><div class="card-body">
      <h2 class="h4">JavaScript Helpers</h2>
<pre><code class="language-js">// Use for individual components (query parameter values, path parts)
encodeURIComponent("C# dev & tools")
// "C%23%20dev%20%26%20tools"

// Use for a full URL but keep reserved delimiters (/?:@) intact
encodeURI("https://ex.com/a path/?q=a&b=1")
// "https://ex.com/a%20path/?q=a&b=1"</code></pre>
    </div></div>

    <div class="card mb-4"><div class="card-body">
      <h2 class="h4">Server-side</h2>
      <ul>
        <li>Always decode with UTF‑8; modern servers expect UTF‑8 percent-encoded bytes.</li>
        <li>Avoid <strong>double-encoding</strong>: do not encode already-encoded strings.</li>
        <li>Normalize inputs before validation/processing.</li>
      </ul>
    </div></div>
  </article>
</main>

<?php include_file('includes/footer.php'); ?>
