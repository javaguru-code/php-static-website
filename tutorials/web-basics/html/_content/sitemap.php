<p>An HTML sitemap helps users discover pages through a simple list. An XML sitemap helps search engines discover URLs systematically.</p>

<h2>HTML sitemap (on-site page)</h2>
<pre><code class="language-html">&lt;nav aria-label="Sitemap"&gt;
  &lt;ul&gt;
    &lt;li&gt;&lt;a href="/"&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="/tutorials/"&gt;Tutorials&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;
</code></pre>

<h2>XML sitemap (for bots)</h2>
<pre><code class="language-xml">&lt;urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"&gt;
  &lt;url&gt;&lt;loc&gt;https://example.com/&lt;/loc&gt;&lt;/url&gt;
  &lt;url&gt;&lt;loc&gt;https://example.com/tutorials/&lt;/loc&gt;&lt;/url&gt;
&lt;/urlset&gt;
</code></pre>
