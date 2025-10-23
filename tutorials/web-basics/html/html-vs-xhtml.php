<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML vs XHTML - Full Stack Master';
$page_description = 'Differences between HTML and XHTML: syntax, DOCTYPE, MIME types, self-closing, boolean attributes, and migration tips.';
$base_url = get_base_url();
$css_path = $base_url; $js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<main class="col-12 col-lg-9 pt-3 px-lg-4">
<article class="tutorial-content">
  <h1 class="mb-4">HTML vs XHTML</h1>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">Overview</h2>
    <p>HTML is an SGML/HTML5 language with permissive parsing, while XHTML is an XML serialization of HTML. XHTML requires well-formed XML.</p>
  </div></div>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">Key Differences</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead class="table-dark"><tr><th>Topic</th><th>HTML</th><th>XHTML</th></tr></thead>
        <tbody>
          <tr><td>Parsing</td><td>Error-tolerant</td><td>XML well-formedness required</td></tr>
          <tr><td>Case</td><td>Tags/attrs usually lowercase but not required</td><td>Must be lowercase</td></tr>
          <tr><td>Attributes</td><td>Boolean attrs may omit value (e.g., checked)</td><td>Must be explicit (checked="checked")</td></tr>
          <tr><td>Quotes</td><td>Attribute values should be quoted</td><td>Attribute values must be quoted</td></tr>
          <tr><td>Self-closing</td><td>Void elements have no end tag (e.g., &lt;br&gt;)</td><td>Self-close XML-style (e.g., &lt;br /&gt;)</td></tr>
          <tr><td>DOCTYPE</td><td>HTML5: &lt;!DOCTYPE html&gt;</td><td>Typically XHTML 1.0/1.1 doctypes</td></tr>
          <tr><td>MIME type</td><td>text/html</td><td>application/xhtml+xml</td></tr>
        </tbody>
      </table>
    </div>
  </div></div>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">Examples</h2>
<pre><code class="language-html">&lt;!-- HTML5 --&gt;
&lt;!DOCTYPE html&gt;
&lt;img src="a.png" alt="A"&gt;
&lt;input type="checkbox" checked&gt;</code></pre>
<pre><code class="language-markup">&lt;!-- XHTML 1.0 Strict --&gt;
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"&gt;
  &lt;img src="a.png" alt="A" /&gt;
  &lt;input type="checkbox" checked="checked" /&gt;
&lt;/html&gt;</code></pre>
  </div></div>

  <div class="card mb-4"><div class="card-body">
    <h2 class="h4">Practical Guidance</h2>
    <ul>
      <li>Modern projects typically use HTML5 with <code>&lt;!DOCTYPE html&gt;</code> and <code>text/html</code>.</li>
      <li>XHTML is useful when strict XML tooling or XML processing is required.</li>
      <li>When serving <code>application/xhtml+xml</code>, ensure well‑formed output; browsers will not apply HTML error recovery.</li>
      <li>For migration, fix unclosed tags, quote attributes, make boolean attributes explicit, and close empty elements.</li>
    </ul>
  </div></div>
</article>
</main>

<?php include_file('includes/footer.php'); ?>