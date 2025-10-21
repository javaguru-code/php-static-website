<p><code>&lt;iframe&gt;</code> embeds another page or resource. Use it sparingly and securely, and always provide a descriptive <code>title</code> for accessibility.</p>

<h2>Security and performance</h2>
<ul>
  <li><code>sandbox</code>: restrict capabilities (e.g., <code>sandbox="allow-scripts allow-same-origin"</code>)</li>
  <li><code>referrerpolicy</code>, <code>loading="lazy"</code>, and explicit <code>width/height</code></li>
  <li>Use <code>allow</code> to grant specific features (camera, fullscreen, clipboard)</li>
</ul>

<h2>Example</h2>
<pre><code class="language-html">&lt;iframe src="/embed/map" title="Office location" loading="lazy"
        width="600" height="450" style="border:0;"
        sandbox="allow-scripts allow-same-origin"&gt;&lt;/iframe&gt;
</code></pre>
