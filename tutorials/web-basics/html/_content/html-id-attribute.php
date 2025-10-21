<p><code>id</code> uniquely identifies an element on a page. IDs are perfect for fragment links, form labeling, and script hooks, but avoid using them for styling if a class would work.</p>

<h2>Good uses</h2>
<ul>
  <li>Link targets: <code>&lt;h2 id="faq"&gt;</code> then <code>&lt;a href="#faq"&gt;</code></li>
  <li>Labels: <code>&lt;label for="email"&gt;</code> pairs with <code>&lt;input id="email"&gt;</code></li>
  <li>Script selection: <code>document.getElementById('modal')</code></li>
</ul>

<h2>Example</h2>
<pre><code class="language-html">&lt;label for="email"&gt;Email&lt;/label&gt;
&lt;input id="email" type="email" required&gt;
</code></pre>
