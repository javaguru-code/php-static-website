<p>Responsive layout adapts to different screens. Combine the viewport meta tag, flexible layouts, and responsive media.</p>

<h2>Key ingredients</h2>
<ul>
  <li><code>&lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;</code></li>
  <li>Fluid widths with percentages and modern CSS (Flexbox/Grid)</li>
  <li>Responsive images via <code>srcset</code>/<code>sizes</code></li>
  <li>Media queries for breakpoints</li>
</ul>

<h2>Example</h2>
<pre><code class="language-css">@media (min-width: 768px) {
  .grid { display: grid; grid-template-columns: 2fr 1fr; gap: 1rem; }
}
</code></pre>
