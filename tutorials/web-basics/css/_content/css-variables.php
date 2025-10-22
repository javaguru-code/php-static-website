<p>Custom properties (CSS variables) let you define reusable tokens for colors, spacing, and more.</p>

<h2>Usage</h2>
<pre><code class="language-css">:root {
  --brand: #0d6efd;
  --radius: .5rem;
}
.button {
  background: var(--brand);
  border-radius: var(--radius);
}
</code></pre>
