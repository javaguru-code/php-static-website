<p>Tags are the keywords inside angle brackets that mark up your content. Most tags wrap content with an opening and closing tag; some are void (self‑closing) and carry data via attributes.</p>

<h2>Syntax</h2>
<ul>
  <li>Normal tags: <code>&lt;tag&gt;content&lt;/tag&gt;</code></li>
  <li>Void tags: <code>&lt;img&gt;</code>, <code>&lt;br&gt;</code>, <code>&lt;meta&gt;</code> (no closing tag)</li>
  <li>Case‑insensitive in HTML, but lowercase is conventional</li>
</ul>

<h2>Semantics</h2>
<p>Prefer meaningful tags like <code>&lt;nav&gt;</code>, <code>&lt;main&gt;</code>, <code>&lt;article&gt;</code> instead of generic <code>&lt;div&gt;</code> when they express intent.</p>

<h2>Examples</h2>
<pre><code class="language-html">&lt;header&gt;
  &lt;h1&gt;Site Title&lt;/h1&gt;
  &lt;nav&gt;&lt;a href="/"&gt;Home&lt;/a&gt;&lt;/nav&gt;
&lt;/header&gt;
&lt;img src="team.jpg" alt="Our team"&gt;
</code></pre>
