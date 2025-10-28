<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML Entities Deep Dive - Full Stack Master';
$page_description = 'When and how to use HTML entities: reserved characters, named vs numeric, NBSP, zero-width, pitfalls, and best practices.';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<main class="col-9 col-lg-9 pt-3 px-lg-4">
  <article class="tutorial-content">
    <h1 class="mb-4">HTML Entities: Complete Guide</h1>

    <div class="card mb-4"><div class="card-body">
      <h2 class="h4">Reserved Characters</h2>
      <p>These must be escaped in text nodes to avoid being parsed as markup.</p>
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead class="table-dark"><tr><th>Char</th><th>Named</th><th>Decimal</th><th>Hex</th><th>Use</th></tr></thead>
          <tbody>
            <tr><td><code>&lt;</code></td><td><code>&amp;lt;</code></td><td><code>&amp;#60;</code></td><td><code>&amp;#x3C;</code></td><td>Less-than</td></tr>
            <tr><td><code>&gt;</code></td><td><code>&amp;gt;</code></td><td><code>&amp;#62;</code></td><td><code>&amp;#x3E;</code></td><td>Greater-than</td></tr>
            <tr><td><code>&amp;</code></td><td><code>&amp;amp;</code></td><td><code>&amp;#38;</code></td><td><code>&amp;#x26;</code></td><td>Ampersand</td></tr>
            <tr><td><code>"</code></td><td><code>&amp;quot;</code></td><td><code>&amp;#34;</code></td><td><code>&amp;#x22;</code></td><td>Double quote</td></tr>
            <tr><td><code>'</code></td><td><code>&amp;apos;</code> or <code>&amp;#39;</code></td><td><code>&amp;#39;</code></td><td><code>&amp;#x27;</code></td><td>Single quote</td></tr>
          </tbody>
        </table>
      </div>
    </div></div>

    <div class="card mb-4"><div class="card-body">
      <h2 class="h4">Named vs Numeric Entities</h2>
      <ul>
        <li>Named entities (e.g., <code>&amp;copy;</code>) are readable but not exhaustive across all Unicode points.</li>
        <li>Numeric entities work for any character: decimal <code>&amp;#169;</code> or hex <code>&amp;#xA9;</code>.</li>
        <li>Prefer UTF-8 with <code>&lt;meta charset="UTF-8"&gt;</code>; only escape when required.</li>
      </ul>
    </div></div>

    <div class="card mb-4"><div class="card-body">
      <h2 class="h4">Whitespace and Invisible Characters</h2>
      <ul>
        <li><code>&amp;nbsp;</code> — non-breaking space (U+00A0). Avoid overuse for layout; use CSS.</li>
        <li>Thin space: <code>&amp;thinsp;</code>; Em space: <code>&amp;emsp;</code>; En space: <code>&amp;ensp;</code>.</li>
        <li>Zero‑width joiner (ZWJ U+200D): <code>&amp;#8205;</code> to join emoji glyphs.</li>
        <li>Soft hyphen: <code>&amp;shy;</code> indicates hyphenation opportunity.</li>
      </ul>
<pre><code class="language-html">&lt;p&gt;10&amp;nbsp;kg vs 10 kg&lt;/p&gt;
&lt;p&gt;Emoji sequence: 👩&amp;#8205;💻&lt;/p&gt;</code></pre>
    </div></div>

    <div class="card mb-4"><div class="card-body">
      <h2 class="h4">Entities in Attributes</h2>
      <p>Inside quoted attributes you usually only need to escape the matching quote and <code>&amp;</code>.</p>
<pre><code class="language-html">&lt;img alt="4 &amp; 5 &lt; 10" src="/x.png"&gt;
&lt;div data-json='{"a":"&lt;b&gt;"}'&gt;...&lt;/div&gt;</code></pre>
    </div></div>

    <div class="card mb-4"><div class="card-body">
      <h2 class="h4">Common Pitfalls</h2>
      <ul>
        <li><strong>Double encoding:</strong> Avoid converting <code>&amp;</code> to <code>&amp;amp;</code> more than once.</li>
        <li>Server templates may auto-escape; be careful when inserting raw HTML.</li>
        <li>Use CSS for spacing, not multiple <code>&amp;nbsp;</code>.</li>
      </ul>
    </div></div>
  </article>
</main>

<?php include_file('includes/footer.php'); ?>
