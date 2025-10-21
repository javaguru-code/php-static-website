<p>Classes let you target groups of elements for styling or scripting. An element can have multiple classes separated by spaces.</p>

<h2>Guidelines</h2>
<ul>
  <li>Names are case‑sensitive; use readable, consistent naming (e.g., BEM)</li>
  <li>Reuse classes; avoid overusing IDs for styling</li>
  <li>JavaScript can select by class via <code>document.querySelectorAll('.class')</code></li>
</ul>

<h2>Example</h2>
<pre><code class="language-html">&lt;button class="btn btn-primary"&gt;Save&lt;/button&gt;
&lt;article class="card card--feature"&gt;...&lt;/article&gt;
</code></pre>
