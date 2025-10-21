<p>File paths determine where the browser looks for linked resources (images, stylesheets, pages). Understanding relative vs absolute paths prevents broken links.</p>

<h2>Types of paths</h2>
<ul>
  <li><strong>Absolute URL</strong>: <code>https://example.com/assets/logo.png</code></li>
  <li><strong>Root‑relative</strong>: <code>/assets/logo.png</code> (from site root)</li>
  <li><strong>Relative</strong>: <code>../images/pic.jpg</code> or <code>./style.css</code> (from current document)</li>
</ul>

<h2>Examples</h2>
<pre><code class="language-html">&lt;link rel="stylesheet" href="/css/app.css"&gt;
&lt;img src="../img/photo.jpg" alt="Photo"&gt;
&lt;a href="./contact.html"&gt;Contact&lt;/a&gt;
</code></pre>
