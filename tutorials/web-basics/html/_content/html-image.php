<p>Images use <code>&lt;img&gt;</code> with required <code>src</code> and meaningful <code>alt</code> text for accessibility. Provide intrinsic dimensions or CSS sizing, and consider lazy loading.</p>

<h2>Good practices</h2>
<ul>
  <li>Always write descriptive <code>alt</code> text (or empty <code>alt</code> for decorative images)</li>
  <li>Use <code>width</code>/<code>height</code> to reserve layout space</li>
  <li>Use <code>loading="lazy"</code> and <code>decoding="async"</code></li>
  <li>Prefer <code>figure</code>/<code>figcaption</code> for annotated images</li>
</ul>

<h2>Responsive images</h2>
<pre><code class="language-html">&lt;img src="small.jpg" srcset="small.jpg 600w, large.jpg 1200w" sizes="(max-width: 600px) 100vw, 600px" alt="Sunset" loading="lazy"&gt;
&lt;figure&gt;
  &lt;img src="chart.png" alt="Sales chart"&gt;
  &lt;figcaption&gt;Q1–Q4 sales&lt;/figcaption&gt;
&lt;/figure&gt;
</code></pre>
