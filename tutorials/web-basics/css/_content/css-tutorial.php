<p>CSS (Cascading Style Sheets) is the language that controls presentation — colors, layout, spacing, and typography — for your HTML. It separates style from structure so you can keep markup clean and reuse design across pages.</p>

<h2>Why CSS matters</h2>
<ul>
  <li>Visual design and branding across your site</li>
  <li>Responsive layouts for phones, tablets, and desktops</li>
  <li>Accessible, readable interfaces with consistent spacing and type</li>
</ul>

<h2>A minimal CSS example</h2>
<pre><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1" /&gt;
    &lt;link rel="stylesheet" href="styles.css" /&gt;
    &lt;title&gt;Styled page&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1 class="title"&gt;Hello, CSS!&lt;/h1&gt;
    &lt;p&gt;This is a paragraph of text.&lt;/p&gt;
  &lt;/body&gt;
&lt;/html&gt;</code></pre>

<pre><code class="language-css">/* styles.css */
.title { color: #0d6efd; margin-bottom: 0.5rem; }
p { line-height: 1.6; }
</code></pre>

<h2>Where to go next</h2>
<p>Start by learning CSS syntax, selectors, and the box model, then move to layout with Flexbox and Grid.</p>
<ul>
  <li><a href="what-is-css">What is CSS?</a></li>
  <li><a href="css-syntax">CSS Syntax</a></li>
  <li><a href="css-selectors">CSS Selectors</a></li>
  <li><a href="css-box-model">Box Model</a></li>
</ul>
