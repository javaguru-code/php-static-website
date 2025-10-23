<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML Computer Code - Full Stack Master';
$page_description = 'Mark up code and technical content with code, pre, kbd, samp, var, and best practices.';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<main class="col-12 col-lg-9 pt-3 px-lg-4">
  <article class="tutorial-content">
    <h1 class="mb-4">HTML Computer Code Elements</h1>

    <div class="card mb-4">
      <div class="card-body">
        <h2 class="h4">Overview</h2>
        <p>Use these elements to represent code, user input, program output, and variables. This improves semantics, readability, and accessibility.</p>
        <ul>
          <li><code>&lt;code&gt;</code> — inline code snippet</li>
          <li><code>&lt;pre&gt;</code> — preformatted block preserving whitespace</li>
          <li><code>&lt;kbd&gt;</code> — user keyboard input</li>
          <li><code>&lt;samp&gt;</code> — sample output from a program</li>
          <li><code>&lt;var&gt;</code> — variable name</li>
        </ul>
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-body">
        <h2 class="h4 mb-3">Element Reference</h2>
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead class="table-dark">
              <tr>
                <th>Element</th>
                <th>Purpose</th>
                <th>Example</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code>&lt;code&gt;</code></td>
                <td>Inline code within a sentence.</td>
                <td><code>The function is called <code>render()</code>.</code></td>
              </tr>
              <tr>
                <td><code>&lt;pre&gt;</code></td>
                <td>Block that preserves whitespace and line breaks.</td>
                <td><code>&lt;pre&gt;line 1\n  line 2&lt;/pre&gt;</code></td>
              </tr>
              <tr>
                <td><code>&lt;kbd&gt;</code></td>
                <td>Indicates user input (keys/shortcuts).</td>
                <td><code>Press &lt;kbd&gt;Ctrl&lt;/kbd&gt;+&lt;kbd&gt;S&lt;/kbd&gt;</code></td>
              </tr>
              <tr>
                <td><code>&lt;samp&gt;</code></td>
                <td>Represents sample output from programs.</td>
                <td><code>&lt;samp&gt;OK 2 tests passed&lt;/samp&gt;</code></td>
              </tr>
              <tr>
                <td><code>&lt;var&gt;</code></td>
                <td>Represents variables in math or code.</td>
                <td><code>&lt;var&gt;x&lt;/var&gt; = 42</code></td>
              </tr>
            </tbody>
          </table>
        </div>

<pre><code class="language-html">&lt;pre&gt;&lt;code class="language-js"&gt;
function sum(a, b) {
  return a + b; // example
}
&lt;/code&gt;&lt;/pre&gt;</code></pre>
        <p>Combine <code>&lt;pre&gt;</code> and <code>&lt;code&gt;</code> for syntax-highlighted blocks.</p>
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-body">
        <h2 class="h4 mb-3">Best Practices</h2>
        <ul>
          <li>Escape special characters inside code blocks as needed (e.g., <code>&amp;lt;</code>, <code>&amp;gt;</code>, <code>&amp;amp;</code>).</li>
          <li>Add language classes (e.g., <code>language-js</code>) for highlighters like Prism.</li>
          <li>Use <code>&lt;kbd&gt;</code> for shortcuts (e.g., <code>&lt;kbd&gt;Ctrl&lt;/kbd&gt;+&lt;kbd&gt;C&lt;/kbd&gt;</code>).</li>
          <li>Keep lines under ~80–100 chars for readability and avoid horizontal scrolling.</li>
          <li>Prefer semantic elements over generic styling for accessibility.</li>
        </ul>
      </div>
    </div>
  </article>
</main>

<?php include_file('includes/footer.php'); ?>
