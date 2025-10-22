<p>CSS describes how HTML elements are displayed. Browsers apply rules from stylesheets to elements that match selectors, then compute final values through the cascade, inheritance, and specificity.</p>

<h2>How CSS is applied</h2>
<ul>
  <li>External stylesheet: <code>&lt;link rel="stylesheet" href="/path/styles.css" /&gt;</code></li>
  <li>Embedded: <code>&lt;style&gt; ... &lt;/style&gt;</code> in the document head</li>
  <li>Inline: <code>&lt;h1 style="color:red"&gt;</code> (avoid for maintainability)</li>
</ul>

<h2>Example</h2>
<pre><code class="language-css">/* Rule: selector + declarations */
button.primary {
  background: #0d6efd;
  color: white;
  padding: 0.5rem 1rem;
}
</code></pre>
