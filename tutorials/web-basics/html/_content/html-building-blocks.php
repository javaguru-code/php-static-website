<p>Before you dive into individual tags, get comfortable with the fundamental parts of an HTML document and how they fit together.</p>

<h2>Document structure</h2>
<ul>
  <li><code>&lt;!DOCTYPE html&gt;</code>: tells the browser to use modern HTML parsing rules.</li>
  <li><code>&lt;html&gt;</code>: wraps the entire page.</li>
  <li><code>&lt;head&gt;</code>: metadata (title, charset, viewport, links, scripts).</li>
  <li><code>&lt;body&gt;</code>: everything visible to the user.</li>
</ul>

<h2>Elements, tags, and attributes</h2>
<ul>
  <li><strong>Tags</strong> mark up content; most come in pairs: <code>&lt;tag&gt;...&lt;/tag&gt;</code>.</li>
  <li><strong>Elements</strong> are the combination of tags and content.</li>
  <li><strong>Attributes</strong> add details: <code>class</code>, <code>id</code>, <code>href</code>, <code>alt</code>.</li>
</ul>

<h2>Common building blocks</h2>
<ul>
  <li>Headings: <code>&lt;h1&gt;</code>…<code>&lt;h6&gt;</code></li>
  <li>Text: <code>&lt;p&gt;</code>, <code>&lt;strong&gt;</code>, <code>&lt;em&gt;</code></li>
  <li>Links and media: <code>&lt;a&gt;</code>, <code>&lt;img&gt;</code>, <code>&lt;video&gt;</code></li>
  <li>Lists and tables: <code>&lt;ul&gt;</code>, <code>&lt;ol&gt;</code>, <code>&lt;table&gt;</code></li>
  <li>Layout and semantics: <code>&lt;header&gt;</code>, <code>&lt;nav&gt;</code>, <code>&lt;main&gt;</code>, <code>&lt;section&gt;</code>, <code>&lt;article&gt;</code>, <code>&lt;footer&gt;</code></li>
</ul>

<h2>Example: a small page</h2>
<pre><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;title&gt;Profile&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;header&gt;&lt;h1&gt;Ada Lovelace&lt;/h1&gt;&lt;/header&gt;
    &lt;main&gt;
      &lt;p&gt;Mathematician and early computing pioneer.&lt;/p&gt;
      &lt;ul&gt;
        &lt;li&gt;Analytical Engine notes&lt;/li&gt;
        &lt;li&gt;Algorithm concepts&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/main&gt;
  &lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h2>Next steps</h2>
<p>Practice by composing pages with headings, paragraphs, links, images, and lists, then add semantics for clearer structure.</p>
