<p>Specificity determines which rule wins when multiple rules apply. It’s calculated from selector components: inline &gt; ID &gt; class/attribute/pseudo-class &gt; type/pseudo-element.</p>

<h2>Specificity basics</h2>
<pre><code class="language-css">/***** lower wins? No — higher specificity wins *****/
/* Type selector */
p { color: black; }
/* Class selector */
.message { color: green; }
/* ID selector */
#notice { color: blue; }
/* Inline (highest) */
&lt;p style="color:red"&gt;...
</code></pre>

<p>Use classes instead of IDs for reusable styling. Avoid <code>!important</code> except in utilities.</p>
