<p>Use <code>&lt;script&gt;</code> to load JavaScript. Place scripts responsibly to keep pages fast and interactive without blocking rendering.</p>

<h2>Ways to load scripts</h2>
<ul>
  <li><code>&lt;script src="app.js" defer&gt;</code>: defers execution until after parsing (recommended for inline DOM scripts)</li>
  <li><code>&lt;script src="lib.js" async&gt;</code>: downloads and executes independently (good for analytics)</li>
  <li><code>&lt;script type="module" src="main.js"&gt;</code>: ES modules with import/export, deferred by default</li>
</ul>

<h2>Example</h2>
<pre><code class="language-html">&lt;script src="/js/app.js" defer&gt;&lt;/script&gt;
&lt;script type="module"&gt;
  import { init } from '/js/init.js';
  init();
&lt;/script&gt;
</code></pre>
