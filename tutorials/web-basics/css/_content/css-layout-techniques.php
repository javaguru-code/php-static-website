<p>Modern layout prefers Flexbox and Grid. Avoid relying on floats and absolute positioning for page layout.</p>

<h2>Examples</h2>
<pre><code class="language-css">/* Flex row */
.row { display: flex; flex-wrap: wrap; gap: 1rem; }
.col { flex: 1 1 300px; }

/* Grid cards */
.cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1rem; }
</code></pre>
