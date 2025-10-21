<p>Attributes add extra information to elements. They live in the opening tag as name–value pairs (or boolean flags) and influence behavior, accessibility, or styling.</p>

<h2>Basics</h2>
<ul>
  <li>Format: <code>name="value"</code>, values typically quoted</li>
  <li>Boolean: present means true (e.g., <code>disabled</code>, <code>required</code>)</li>
  <li>Global attributes: <code>id</code>, <code>class</code>, <code>style</code>, <code>title</code>, <code>lang</code>, <code>dir</code>, <code>hidden</code></li>
  <li>Custom data: <code>data-*</code> for app‑specific metadata</li>
</ul>

<h2>Example</h2>
<pre><code class="language-html">&lt;a href="/about" class="btn" title="About us"&gt;About&lt;/a&gt;
&lt;input type="checkbox" checked&gt;
&lt;article id="post-1" data-status="draft"&gt;...&lt;/article&gt;
</code></pre>
