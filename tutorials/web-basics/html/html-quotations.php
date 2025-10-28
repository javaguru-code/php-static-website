<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML Quotations - Full Stack Master';
$page_description = 'Learn HTML quotation and citation elements: blockquote, q, cite, abbr, address, bdo/bdi with examples and best practices.';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<main class="col-9 col-lg-9 pt-3 px-lg-4">
  <article class="tutorial-content">
    <h1 class="mb-4">HTML Quotations</h1>

    <div class="card mb-4">
      <div class="card-body">
        <h2 class="h4">Overview</h2>
        <p>HTML provides several elements to mark up quotations, citations, and contact information. Proper use improves accessibility and SEO.</p>
        <ul>
          <li><code>&lt;blockquote&gt;</code> for long quotations</li>
          <li><code>&lt;q&gt;</code> for short inline quotes</li>
          <li><code>&lt;cite&gt;</code> to reference a creative work</li>
          <li><code>&lt;abbr&gt;</code> to define abbreviations</li>
          <li><code>&lt;address&gt;</code> for contact information</li>
          <li><code>&lt;bdo&gt;</code>/<code>&lt;bdi&gt;</code> for bidirectional text control</li>
        </ul>
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-body">
        <h2 class="h4 mb-3">Block and Inline Quotes</h2>
        <div class="table-responsive mb-3">
          <table class="table table-bordered table-striped">
            <thead class="table-dark">
              <tr>
                <th>Element</th><th>Use</th><th>Example</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code>&lt;blockquote cite="..."&gt;</code></td>
                <td>Long quotation in its own block; may include <code>cite</code> attribute with source URL.</td>
                <td><code>&lt;blockquote cite="https://example.com"&gt;...&lt;/blockquote&gt;</code></td>
              </tr>
              <tr>
                <td><code>&lt;q&gt;</code></td>
                <td>Short inline quotation; browsers typically add quotation marks.</td>
                <td><code>He said, &lt;q&gt;Always write semantic HTML.&lt;/q&gt;</code></td>
              </tr>
            </tbody>
          </table>
        </div>
<pre><code class="language-html">&lt;blockquote cite="https://www.w3.org/TR/html52/"&gt;
  HTML is the standard markup language for documents designed to be displayed in a web browser.
&lt;/blockquote&gt;

&lt;p&gt;As the spec notes: &lt;q&gt;Use markup to convey meaning&lt;/q&gt; rather than presentation.&lt;/p&gt;</code></pre>
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-body">
        <h2 class="h4 mb-3">Citations, Abbreviations, Address</h2>
        <div class="table-responsive mb-3">
          <table class="table table-bordered table-striped">
            <thead class="table-dark"><tr><th>Element</th><th>Description</th><th>Example</th></tr></thead>
            <tbody>
              <tr>
                <td><code>&lt;cite&gt;</code></td>
                <td>Title of a cited creative work (book, article, movie, etc.).</td>
                <td><code>&lt;cite&gt;The Pragmatic Programmer&lt;/cite&gt;</code></td>
              </tr>
              <tr>
                <td><code>&lt;abbr title="HyperText Markup Language"&gt;HTML&lt;/abbr&gt;</code></td>
                <td>Defines an abbreviation or acronym; <code>title</code> provides full term.</td>
                <td><code>&lt;abbr title="Cascading Style Sheets"&gt;CSS&lt;/abbr&gt;</code></td>
              </tr>
              <tr>
                <td><code>&lt;address&gt;</code></td>
                <td>Contact information for nearest <code>&lt;article&gt;</code> or <code>&lt;body&gt;</code>.</td>
                <td><code>&lt;address&gt;Contact: dev@example.com&lt;/address&gt;</code></td>
              </tr>
            </tbody>
          </table>
        </div>
<pre><code class="language-html">&lt;p&gt;Read &lt;cite&gt;Eloquent JavaScript&lt;/cite&gt; for more examples.&lt;/p&gt;
&lt;p&gt;We write &lt;abbr title="HyperText Markup Language"&gt;HTML&lt;/abbr&gt; and &lt;abbr title="Cascading Style Sheets"&gt;CSS&lt;/abbr&gt; daily.&lt;/p&gt;
&lt;address&gt;
  Full Stack Master, 123 Web Ave, Internet City
  &lt;br&gt;Email: contact@example.com
&lt;/address&gt;</code></pre>
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-body">
        <h2 class="h4 mb-3">Bidirectional Text</h2>
        <p>Use <code>&lt;bdo dir="rtl"&gt;</code> to override text direction; <code>&lt;bdi&gt;</code> isolates text that might have different direction.</p>
<pre><code class="language-html">&lt;p&gt;Normal: مرحبا بالعالم&lt;/p&gt;
&lt;p&gt;Override: &lt;bdo dir="ltr"&gt;مرحبا بالعالم&lt;/bdo&gt;&lt;/p&gt;</code></pre>
      </div>
    </div>
  </article>
</main>

<?php include_file('includes/footer.php'); ?>
