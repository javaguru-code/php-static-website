<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML Computer Code - Full Stack Master';
$page_description = 'Comprehensive guide to HTML computer code elements with detailed explanations and examples';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<main class="col-12 col-lg-9 pt-3 px-lg-4">
    <div class="d-lg-none mb-3">
        <button class="btn btn-primary" data-bs-target="#sidebarOffcanvas" data-bs-toggle="offcanvas">
            <i class="bi bi-list"></i> Menu
        </button>
    </div>

    <article class="tutorial-content">
        <h1 class="mb-4">HTML Computer Code Elements</h1>
        <p class="lead">Learn how to properly format and display computer code, user input, program output, and variables in HTML documents.</p>

        <section class="section">
            <h2 class="mt-5 mb-3">Introduction to Code Elements</h2>
            <p>HTML provides several elements specifically designed for displaying computer code, user input, program output, and variables. These elements not only improve the visual presentation of code but also enhance accessibility and semantic meaning.</p>
            
            <div class="alert alert-info">
                <i class="bi bi-info-circle-fill me-2"></i>
                <strong>Why use semantic code elements?</strong> They help screen readers and search engines understand the purpose of the content, and they allow for consistent styling of code-related content.
            </div>
        </section>

        <section class="section">
            <h2 class="mt-5 mb-3">1. The <code>&lt;code&gt;</code> Element</h2>
            <p>Use the <code>&lt;code&gt;</code> element to define a piece of computer code. The content inside is displayed in the browser's default monospace font.</p>
            
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="h5 mb-0">Example:</h3>
                </div>
                <div class="card-body">
                    <p>To create a paragraph in HTML, use the <code>&lt;p&gt;</code> element.</p>
                    <pre><code class="language-html">&lt;p&gt;To create a paragraph in HTML, use the &lt;code&gt;&amp;lt;p&amp;gt;&lt;/code&gt; element.&lt;/p&gt;</code></pre>
                </div>
            </div>
            
            <div class="alert alert-warning">
                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                <strong>Note:</strong> Always escape angle brackets (&lt; and &gt;) as &amp;lt; and &amp;gt; when displaying HTML code within a <code>&lt;code&gt;</code> element.
            </div>
        </section>

        <section class="section">
            <h2 class="mt-5 mb-3">2. The <code>&lt;pre&gt;</code> Element</h2>
            <p>The <code>&lt;pre&gt;</code> element defines preformatted text which is displayed in a fixed-width font, and it preserves both spaces and line breaks.</p>
            
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="h5 mb-0">Example:</h3>
                </div>
                <div class="card-body">
                    <pre><code>function greet() {
    console.log("Hello, World!");
    return true;
}</code></pre>
                    <pre><code class="language-html">&lt;pre&gt;&lt;code&gt;function greet() {
    console.log("Hello, World!");
    return true;
}&lt;/code&gt;&lt;/pre&gt;</code></pre>
                </div>
            </div>
            
            <div class="alert alert-info">
                <i class="bi bi-lightbulb-fill me-2"></i>
                <strong>Tip:</strong> The <code>&lt;pre&gt;</code> and <code>&lt;code&gt;</code> elements are often used together to display blocks of code with proper formatting.
            </div>
        </section>

        <section class="section">
            <h2 class="mt-5 mb-3">3. The <code>&lt;kbd&gt;</code> Element</h2>
            <p>The <code>&lt;kbd&gt;</code> element is used to define keyboard input. It represents user input and is typically displayed in the browser's default monospace font.</p>
            
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="h5 mb-0">Example:</h3>
                </div>
                <div class="card-body">
                    <p>Press <kbd>Ctrl</kbd> + <kbd>S</kbd> to save your document.</p>
                    <pre><code class="language-html">&lt;p&gt;Press &lt;kbd&gt;Ctrl&lt;/kbd&gt; + &lt;kbd&gt;S&lt;/kbd&gt; to save your document.&lt;/p&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="section">
            <h2 class="mt-5 mb-3">4. The <code>&lt;samp&gt;</code> Element</h2>
            <p>The <code>&lt;samp&gt;</code> element is used to define sample output from a computer program. It is typically displayed in the browser's default monospace font.</p>
            
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="h5 mb-0">Example:</h3>
                </div>
                <div class="card-body">
                    <p>If your program runs successfully, you should see: <samp>Success! The file has been saved.</samp></p>
                    <pre><code class="language-html">&lt;p&gt;If your program runs successfully, you should see: &lt;samp&gt;Success! The file has been saved.&lt;/samp&gt;&lt;/p&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="section">
            <h2 class="mt-5 mb-3">5. The <code>&lt;var&gt;</code> Element</h2>
            <p>The <code>&lt;var&gt;</code> element is used to define a variable in programming or in a mathematical expression. The content is typically displayed in italics.</p>
            
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="h5 mb-0">Example:</h3>
                </div>
                <div class="card-body">
                    <p>The area of a rectangle is calculated as: <var>area</var> = <var>length</var> × <var>width</var></p>
                    <pre><code class="language-html">&lt;p&gt;The area of a rectangle is calculated as: &lt;var&gt;area&lt;/var&gt; = &lt;var&gt;length&lt;/var&gt; × &lt;var&gt;width&lt;/var&gt;&lt;/p&gt;</code></pre>
                </div>
            </div>
        </section>

        <section class="section">
            <h2 class="mt-5 mb-3">Best Practices</h2>
            <div class="card">
                <div class="card-body">
                    <ul>
                        <li>Always use the most appropriate semantic element for your content</li>
                        <li>For code blocks, combine <code>&lt;pre&gt;</code> and <code>&lt;code&gt;</code> elements</li>
                        <li>Escape special HTML characters (<code>&lt;</code>, <code>></code>, <code>&</code>, etc.) when displaying code</li>
                        <li>Consider using a syntax highlighter for better code presentation</li>
                        <li>Ensure sufficient contrast for accessibility when styling code elements</li>
                    </ul>
                </div>
            </div>
        </section>
    </article>
</main>
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
