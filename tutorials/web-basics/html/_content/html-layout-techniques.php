<p>Layout techniques are implemented in CSS. Your HTML should provide semantic structure; let CSS control positioning and responsiveness.</p>

<h2>Modern approaches</h2>
<ul>
  <li>Flexbox: 1‑D layout for rows/columns of components</li>
  <li>Grid: 2‑D layout for full page or section grids</li>
  <li>Avoid table/floats for layout except for legacy cases</li>
</ul>

<h2>Example (semantic HTML + CSS hooks)</h2>
<pre><code class="language-html">&lt;main class="layout"&gt;
  &lt;article class="layout__content"&gt;...&lt;/article&gt;
  &lt;aside class="layout__sidebar"&gt;...&lt;/aside&gt;
&lt;/main&gt;
</code></pre>
<pre><code class="language-css">.layout { display: grid; grid-template-columns: 2fr 1fr; gap: 1rem; }
@media (max-width: 768px) { .layout { grid-template-columns: 1fr; } }
</code></pre>
