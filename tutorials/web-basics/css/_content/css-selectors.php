<p>Selectors target elements to style. Combine simple selectors to match exactly what you need.</p>

<h2>Common selectors</h2>
<ul>
  <li>Type: <code>p</code>, <code>h1</code></li>
  <li>Class: <code>.btn</code>, <code>.active</code></li>
  <li>ID: <code>#main</code> (use sparingly)</li>
  <li>Attribute: <code>a[target="_blank"]</code></li>
  <li>Pseudo-class: <code>a:hover</code>, <code>input:focus</code>, <code>li:nth-child(2)</code></li>
  <li>Pseudo-element: <code>p::first-line</code>, <code>.tag::before</code></li>
</ul>

<h2>Examples</h2>
<pre><code class="language-css">/* Descendant */
nav a { text-decoration: none; }
/* Child */
ul > li { margin-bottom: .25rem; }
/* Grouping */
h1, h2, h3 { font-family: system-ui, sans-serif; }
</code></pre>
