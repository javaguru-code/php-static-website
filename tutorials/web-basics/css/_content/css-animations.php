<p>Keyframe animations define intermediate states over time.</p>

<h2>Example</h2>
<pre><code class="language-css">@keyframes pulse {
  0%, 100% { transform: scale(1); }
  50% { transform: scale(1.06); }
}
.button { animation: pulse 1.2s ease-in-out infinite; }
</code></pre>
