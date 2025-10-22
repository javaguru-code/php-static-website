<p>Typography affects readability and tone. Control font families, sizes, weights, line height, and spacing.</p>

<h2>Basics</h2>
<pre><code class="language-css">:root { --font: system-ui, -apple-system, "Segoe UI", Roboto, Arial, sans-serif; }
body { font-family: var(--font); line-height: 1.6; }
h1 { font-size: 2rem; margin-bottom: .5rem; }
p { margin: 0 0 1rem; }
</code></pre>

<h2>Web fonts</h2>
<pre><code class="language-css">@font-face {
  font-family: "Inter";
  src: url("/fonts/Inter.woff2") format("woff2");
  font-display: swap;
}
</code></pre>
