<p>The box model defines how space is calculated: content + padding + border + margin. Width/height apply to the content box unless you use <code>box-sizing: border-box</code>.</p>

<h2>Visual</h2>
<pre><code class="language-css">.box {
  width: 300px; /* content width */
  padding: 16px;
  border: 2px solid #333;
  margin: 12px;
}

/* Better sizing */
*, *::before, *::after { box-sizing: border-box; }
</code></pre>
