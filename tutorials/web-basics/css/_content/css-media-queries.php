<p>Media queries adapt styles to device capabilities like width, color scheme, or reduced motion.</p>

<h2>Responsive breakpoints</h2>
<pre><code class="language-css">@media (min-width: 768px) {
  .grid { grid-template-columns: repeat(12, 1fr); }
}

@media (prefers-color-scheme: dark) {
  body { background: #121212; color: #e6e6e6; }
}

@media (prefers-reduced-motion: reduce) {
  * { animation: none !important; transition: none !important; }
}
</code></pre>
