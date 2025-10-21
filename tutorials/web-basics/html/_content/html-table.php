<p>Tables display tabular data. Use proper structure for readability and accessibility; avoid tables for layout.</p>

<h2>Structure</h2>
<ul>
  <li><code>&lt;table&gt;</code> with optional <code>&lt;caption&gt;</code></li>
  <li><code>&lt;thead&gt;</code>, <code>&lt;tbody&gt;</code>, <code>&lt;tfoot&gt;</code> group rows</li>
  <li><code>&lt;tr&gt;</code> rows, <code>&lt;th&gt;</code>/<code>&lt;td&gt;</code> cells</li>
  <li>Use <code>scope</code> on <code>&lt;th&gt;</code> for screen readers</li>
</ul>

<h2>Example</h2>
<pre><code class="language-html">&lt;table&gt;
  &lt;caption&gt;Quarterly Revenue&lt;/caption&gt;
  &lt;thead&gt;&lt;tr&gt;&lt;th scope="col"&gt;Qtr&lt;/th&gt;&lt;th scope="col"&gt;Amount&lt;/th&gt;&lt;/tr&gt;&lt;/thead&gt;
  &lt;tbody&gt;&lt;tr&gt;&lt;th scope="row"&gt;Q1&lt;/th&gt;&lt;td&gt;$10k&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;
&lt;/table&gt;
</code></pre>
