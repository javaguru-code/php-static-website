<p>Entities represent characters that would otherwise be parsed as markup or that are hard to type. With UTF‑8, entities are needed less often but still useful for reserved characters.</p>

<h2>Common entities</h2>
<ul>
  <li><code>&amp;amp;</code> → &amp;</li>
  <li><code>&amp;lt;</code> → &lt;, <code>&amp;gt;</code> → &gt;</li>
  <li><code>&amp;quot;</code> → ", <code>&amp;apos;</code> → '</li>
  <li><code>&amp;nbsp;</code> → non‑breaking space</li>
  <li>Numeric: <code>&amp;#169;</code> (©), hex: <code>&amp;#x1F680;</code> (🚀)</li>
</ul>

<h2>Example</h2>
<pre><code class="language-html">&lt;p&gt;Use &amp;amp; for an ampersand: R&amp;amp;D&lt;/p&gt;
</code></pre>
