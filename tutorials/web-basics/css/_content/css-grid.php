<p>CSS Grid is a two-dimensional layout system for building rows and columns at once.</p>

<h2>Basics</h2>
<pre><code class="language-css">.grid {
  display: grid;
  grid-template-columns: repeat(12, 1fr);
  gap: 1rem;
}
.item-6 { grid-column: span 6; }
</code></pre>

<h2>Areas</h2>
<pre><code class="language-css">.layout {
  display: grid;
  grid-template:
    "header header" auto
    "sidebar main" 1fr
    / 280px 1fr;
}
.header { grid-area: header; }
.sidebar { grid-area: sidebar; }
.main { grid-area: main; }
</code></pre>
