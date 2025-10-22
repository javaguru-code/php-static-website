<p>CSS values use units. Prefer relative units for scalable, responsive UIs.</p>

<h2>Common units</h2>
<ul>
  <li>Absolute: <code>px</code></li>
  <li>Font-relative: <code>em</code>, <code>rem</code></li>
  <li>Viewport: <code>vw</code>, <code>vh</code>, <code>dvw</code>, <code>dvh</code></li>
  <li>Percentage: <code>%</code> (relative to container)</li>
</ul>

<pre><code class="language-css">html { font-size: 100%; } /* 16px default */
h1 { font-size: clamp(1.75rem, 2.5vw + 1rem, 3rem); }
.container { width: min(90%, 1200px); }
</code></pre>
