<p>CSS can be applied to HTML in three ways: external stylesheet (recommended), internal <code>&lt;style&gt;</code> block, or inline <code>style</code> attribute. Prefer classes and external CSS for maintainability.</p>

<h2>Ways to include CSS</h2>
<pre><code class="language-html">&lt;!-- External --&gt;
&lt;link rel="stylesheet" href="/css/styles.css"&gt;

&lt;!-- Internal --&gt;
&lt;style&gt; body { font-family: system-ui; } &lt;/style&gt;

&lt;!-- Inline (avoid for large styling) --&gt;
&lt;p style="color: teal"&gt;Inline example&lt;/p&gt;
</code></pre>

<h2>Selecting elements</h2>
<pre><code class="language-css">.btn { padding: .5rem 1rem; }
.card &gt; h2 { margin: 0; }
</code></pre>
