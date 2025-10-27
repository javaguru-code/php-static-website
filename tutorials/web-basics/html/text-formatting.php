<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'Full Stack Master - Text Formatting';
$page_description = 'Full Stack Master - Programming Tutorials';
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
        <section class="section">
            <h1 class="mb-4">HTML Text Formatting</h1>
            <p>HTML provides various tags to format text on a web page. These tags help in making text bold, italic, underlined, and more. Let's explore the different text formatting options available in HTML.</p>
        </section>

        <section class="section">
            <h2 class="mt-5 mb-3">Basic Text Formatting</h2>
            
            <h3 class="mt-4">Bold Text</h3>
            <p>Use <code>&lt;b&gt;</code> or <code>&lt;strong&gt;</code> to make text bold.</p>
            <div class="code-block">
                <pre><code class="language-html">&lt;p&gt;This is &lt;b&gt;bold text&lt;/b&gt; using &amp;lt;b&amp;gt; tag.&lt;/p&gt;
&lt;p&gt;This is &lt;strong&gt;important text&lt;/strong&gt; using &amp;lt;strong&amp;gt; tag.&lt;/p&gt;</code></pre>
            </div>
            <div class="alert alert-info mt-3">
                <i class="bi bi-info-circle-fill me-2"></i>
                <strong>Note:</strong> While both <code>&lt;b&gt;</code> and <code>&lt;strong&gt;</code> make text bold, <code>&lt;strong&gt;</code> indicates that the text is of strong importance.
            </div>

            <h3 class="mt-4">Italic Text</h3>
            <p>Use <code>&lt;i&gt;</code> or <code>&lt;em&gt;</code> to make text italic.</p>
            <div class="code-block">
                <pre><code class="language-html">&lt;p&gt;This is &lt;i&gt;italic text&lt;/i&gt; using &amp;lt;i&amp;gt; tag.&lt;/p&gt;
&lt;p&gt;This is &lt;em&gt;emphasized text&lt;/em&gt; using &amp;lt;em&amp;gt; tag.&lt;/p&gt;</code></pre>
            </div>

            <h3 class="mt-4">Underlined Text</h3>
            <p>Use <code>&lt;u&gt;</code> to underline text.</p>
            <div class="code-block">
                <pre><code class="language-html">&lt;p&gt;This is &lt;u&gt;underlined text&lt;/u&gt;.&lt;/p&gt;</code></pre>
            </div>
        </section>

        <section class="section">
            <h2 class="mt-5 mb-3">Text Markup</h2>
            
            <h3 class="mt-4">Marked/Highlighted Text</h3>
            <p>Use <code>&lt;mark&gt;</code> to highlight text.</p>
            <div class="code-block">
                <pre><code class="language-html">&lt;p&gt;This is &lt;mark&gt;highlighted text&lt;/mark&gt;.&lt;/p&gt;</code></pre>
            </div>

            <h3 class="mt-4">Deleted/Strikethrough Text</h3>
            <p>Use <code>&lt;del&gt;</code> or <code>&lt;s&gt;</code> for deleted text.</p>
            <div class="code-block">
                <pre><code class="language-html">&lt;p&gt;This is &lt;del&gt;deleted text&lt;/del&gt;.&lt;/p&gt;
&lt;p&gt;This is &lt;s&gt;strikethrough text&lt;/s&gt;.&lt;/p&gt;</code></pre>
            </div>

            <h3 class="mt-4">Inserted/Underlined Text</h3>
            <p>Use <code>&lt;ins&gt;</code> for inserted text (usually displayed as underlined).</p>
            <div class="code-block">
                <pre><code class="language-html">&lt;p&gt;This is &lt;ins&gt;inserted text&lt;/ins&gt;.&lt;/p&gt;</code></pre>
            </div>
        </section>

        <section class="section">
            <h2 class="mt-5 mb-3">Text Formatting for Code</h2>
            
            <h3 class="mt-4">Inline Code</h3>
            <p>Use <code>&lt;code&gt;</code> to display code inline.</p>
            <div class="code-block">
                <pre><code class="language-html">&lt;p&gt;Use the &lt;code&gt;print()&lt;/code&gt; function to display output.&lt;/p&gt;</code></pre>
            </div>

            <h3 class="mt-4">Keyboard Input</h3>
            <p>Use <code>&lt;kbd&gt;</code> to represent keyboard input.</p>
            <div class="code-block">
                <pre><code class="language-html">&lt;p&gt;Press &lt;kbd&gt;Ctrl&lt;/kbd&gt; + &lt;kbd&gt;C&lt;/kbd&gt; to copy text.&lt;/p&gt;</code></pre>
            </div>

            <h3 class="mt-4">Program Output</h3>
            <p>Use <code>&lt;samp&gt;</code> to represent sample output.</p>
            <div class="code-block">
                <pre><code class="language-html">&lt;p&gt;The program will output: &lt;samp&gt;Hello, World!&lt;/samp&gt;&lt;/p&gt;</code></pre>
            </div>
        </section>

        <section class="section">
            <h2 class="mt-5 mb-3">Text Direction and Quotations</h2>
            
            <h3 class="mt-4">Bi-Directional Override</h3>
            <p>Use <code>&lt;bdo&gt;</code> to override text direction.</p>
            <div class="code-block">
                <pre><code class="language-html">&lt;p&gt;&lt;bdo dir="rtl"&gt;This text will be written from right to left&lt;/bdo&gt;&lt;/p&gt;</code></pre>
            </div>

            <h3 class="mt-4">Quotations</h3>
            <p>Use <code>&lt;q&gt;</code> for short inline quotes and <code>&lt;blockquote&gt;</code> for block quotes.</p>
            <div class="code-block">
                <pre><code class="language-html">&lt;p&gt;As the saying goes: &lt;q&gt;The early bird catches the worm.&lt;/q&gt;&lt;/p&gt;

&lt;blockquote cite="https://example.com"&gt;
    &lt;p&gt;This is a longer quotation that should be set off from the main text.&lt;/p&gt;
    &lt;footer&gt;— Author Name, &lt;cite&gt;Source Title&lt;/cite&gt;&lt;/footer&gt;
&lt;/blockquote&gt;</code></pre>
            </div>
        </section>

        <section class="section">
            <h2 class="mt-5 mb-3">Best Practices</h2>
            <ul>
                <li>Use semantic HTML elements when possible (e.g., <code>&lt;strong&gt;</code> instead of <code>&lt;b&gt;</code> for important text)</li>
                <li>Don't use formatting tags just for appearance - use CSS for styling</li>
                <li>Be consistent with your formatting choices throughout the website</li>
                <li>Use proper nesting of formatting elements</li>
                <li>Remember that some formatting tags have semantic meaning to screen readers</li>
            </ul>
        </section>
    </article>
</main>

<?php include_file('includes/footer.php'); ?>