<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML Paragraphs - Full Stack Master';
$page_description = 'Comprehensive guide to HTML paragraphs including formatting, alignment, and best practices';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<main class="col-12 col-lg-9 pt-3 px-lg-4">
    <div class="d-lg-none mb-3">
        <button class="btn btn-primary" data-bs-target="#sidebarOffcanvas" data-bs-toggle="offcanvas">
            <i class="bi bi-list"></i> Menu
        </button>
    </div>

    <article class="tutorial-content">
    <section class="section">
        <h1 class="mb-4">HTML Paragraphs</h1>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4">Understanding HTML Paragraphs</h2>
                <p>The <code>&lt;p&gt;</code> tag defines a paragraph in HTML. Browsers automatically add some margin (space) before and after each <code>&lt;p&gt;</code> element, which helps in creating a clear visual separation between paragraphs.</p>
                
                <div class="alert alert-info">
                    <h5>Key Points About Paragraphs:</h5>
                    <ul class="mb-0">
                        <li>Defined with the <code>&lt;p&gt;</code> tag</li>
                        <li>Browsers automatically add margins</li>
                        <li>Preserves whitespace and line breaks only with specific tags</li>
                        <li>Essential for text organization and readability</li>
                    </ul>
                </div>
                
                <h3 class="h5 mt-4">Table of Contents</h3>
                <ul class="list-unstyled">
                    <li><a href="#basic-paragraphs" class="text-decoration-none">1. Basic Paragraphs</a></li>
                    <li><a href="#formatting" class="text-decoration-none">2. Text Formatting</a></li>
                    <li><a href="#alignment" class="text-decoration-none">3. Text Alignment</a></li>
                    <li><a href="#whitespace" class="text-decoration-none">4. Handling Whitespace</a></li>
                    <li><a href="#text-formatting" class="text-decoration-none">5. Advanced Text Formatting</a></li>
                    <li><a href="#code-elements" class="text-decoration-none">6. Code & Preformatted Text</a></li>
                    <li><a href="#deprecated-tags" class="text-decoration-none">7. Deprecated HTML Tags</a></li>
                    <li><a href="#best-practices" class="text-decoration-none">8. Best Practices</a></li>
                    <li><a href="#examples" class="text-decoration-none">9. Practical Examples</a></li>
                </ul>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="basic-paragraphs">1. Basic Paragraphs</h2>
                <p>HTML paragraphs are defined with the <code>&lt;p&gt;</code> tag. Each paragraph of text should be wrapped in its own <code>&lt;p&gt;</code> element.</p>
                
                <div class="alert alert-light">
                    <pre class="mb-0"><code class="language-html">&lt;p&gt;This is a paragraph of text. It will appear as a separate block with some space before and after it.&lt;/p&gt;
&lt;p&gt;This is another paragraph. Notice the space between these two paragraphs.&lt;/p&gt;</code></pre>
                </div>
                
                <div class="mt-4 p-3 border rounded">
                    <p>This is a paragraph of text. It will appear as a separate block with some space before and after it.</p>
                    <p>This is another paragraph. Notice the space between these two paragraphs.</p>
                </div>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="formatting">2. Text Formatting</h2>
                <p>HTML provides several tags for formatting text within paragraphs:</p>
                
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Tag</th>
                                <th>Description</th>
                                <th>Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>&lt;strong&gt;</code></td>
                                <td>Important text (bold)</td>
                                <td><code>&lt;strong&gt;Important&lt;/strong&gt; text</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;em&gt;</code></td>
                                <td>Emphasized text (italic)</td>
                                <td><code>This is &lt;em&gt;emphasized&lt;/em&gt; text</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;u&gt;</code></td>
                                <td>Underlined text</td>
                                <td><code>This is &lt;u&gt;underlined&lt;/u&gt; text</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;mark&gt;</code></td>
                                <td>Highlighted text</td>
                                <td><code>This is &lt;mark&gt;highlighted&lt;/mark&gt; text</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;small&gt;</code></td>
                                <td>Smaller text</td>
                                <td><code>This is &lt;small&gt;smaller&lt;/small&gt; text</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;sub&gt;</code> and <code>&lt;sup&gt;</code></td>
                                <td>Subscript and superscript</td>
                                <td><code>H&lt;sub&gt;2&lt;/sub&gt;O and x&lt;sup&gt;2&lt;/sup&gt;</code></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <h3 class="h5 mt-4">Formatting Example</h3>
                <div class="alert alert-light">
                    <pre class="mb-0"><code class="language-html">&lt;p&gt;
    This is a &lt;strong&gt;formatted&lt;/strong&gt; paragraph with &lt;em&gt;emphasized&lt;/em&gt; text.
    You can also add &lt;mark&gt;highlights&lt;/mark&gt; and &lt;u&gt;underlines&lt;/u&gt;.
    For scientific notation: H&lt;sub&gt;2&lt;/sub&gt;O and E=mc&lt;sup&gt;2&lt;/sup&gt;.
&lt;/p&gt;</code></pre>
                </div>
                
                <div class="mt-3 p-3 border rounded">
                    <p>
                        This is a <strong>formatted</strong> paragraph with <em>emphasized</em> text.
                        You can also add <mark>highlights</mark> and <u>underlines</u>.
                        For scientific notation: H<sub>2</sub>O and E=mc<sup>2</sup>.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="alignment">3. Text Alignment</h2>
                <p>You can align text within paragraphs using CSS. Here are the common alignment options:</p>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Alignment Options</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><code>text-start</code> - Left alignment (default)</li>
                                    <li class="mb-2"><code>text-center</code> - Center alignment</li>
                                    <li class="mb-2"><code>text-end</code> - Right alignment</li>
                                    <li><code>text-justify</code> - Justified text</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Example</h5>
                            </div>
                            <div class="card-body">
                                <pre class="mb-0"><code class="language-html">&lt;p class="text-start"&gt;Left aligned text&lt;/p&gt;
&lt;p class="text-center"&gt;Centered text&lt;/p&gt;
&lt;p class="text-end"&gt;Right aligned text&lt;/p&gt;
&lt;p class="text-justify"&gt;Justified text...&lt;/p&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4 p-3 border rounded">
                    <p class="text-start">This paragraph is left-aligned (default).</p>
                    <p class="text-center">This paragraph is centered.</p>
                    <p class="text-end">This paragraph is right-aligned.</p>
                    <p class="text-justify">This paragraph is justified. Justified text aligns to both the left and right margins, adding space between words as needed to create a clean, straight edge on both sides of the paragraph.</p>
                </div>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="whitespace">4. Handling Whitespace</h2>
                <p>HTML collapses multiple spaces and line breaks into a single space. Here's how to control whitespace:</p>
                
                <div class="alert alert-light">
                    <pre class="mb-0"><code class="language-html">&lt;p&gt;This    text    has    extra    spaces.&lt;/p&gt;
&lt;p&gt;This text
has a line break.&lt;/p&gt;
&lt;p&gt;This text has a&lt;br&gt;line break with &lt;br&gt; tag.&lt;/p&gt;
&lt;pre&gt;This text preserves
    all    spaces
    and    line breaks.&lt;/pre&gt;</code></pre>
                </div>
                
                <div class="mt-3 p-3 border rounded">
                    <p>This    text    has    extra    spaces.</p>
                    <p>This text
                    has a line break.</p>
                    <p>This text has a<br>line break with <br> tag.</p>
                    <pre>This text preserves
    all    spaces
    and    line breaks.</pre>
                </div>
                
                <div class="alert alert-info mt-3">
                    <h5>Note:</h5>
                    <p class="mb-0">The <code>&lt;pre&gt;</code> tag preserves both spaces and line breaks. For more control over whitespace, you can use the CSS <code>white-space</code> property with values like <code>pre</code>, <code>pre-line</code>, or <code>pre-wrap</code>.</p>
                </div>
            </div>
        </div>
        
        <!-- Advanced Text Formatting -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="text-formatting">5. Advanced Text Formatting</h2>
                
                <h3 class="h5">Superscript and Subscript</h3>
                <p>HTML provides tags for superscript (<code>&lt;sup&gt;</code>) and subscript (<code>&lt;sub&gt;</code>) text, which are commonly used for mathematical expressions, chemical formulas, and footnotes.</p>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-light">
                            <h6>Example:</h6>
                            <pre class="mb-0"><code class="language-html">&lt;p&gt;The Pythagorean theorem: a&lt;sup&gt;2&lt;/sup&gt; + b&lt;sup&gt;2&lt;/sup&gt; = c&lt;sup&gt;2&lt;/sup&gt;&lt;/p&gt;
&lt;p&gt;Water chemical formula: H&lt;sub&gt;2&lt;/sub&gt;O&lt;/p&gt;
&lt;p&gt;This is a footnote&lt;sup&gt;1&lt;/sup&gt; in a document.&lt;/p&gt;</code></pre>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded">
                            <p>The Pythagorean theorem: a<sup>2</sup> + b<sup>2</sup> = c<sup>2</sup></p>
                            <p>Water chemical formula: H<sub>2</sub>O</p>
                            <p>This is a footnote<sup>1</sup> in a document.</p>
                        </div>
                    </div>
                </div>
                
                <h3 class="h5 mt-4">Embedding Elements Within Paragraphs</h3>
                <p>You can embed various HTML elements within paragraphs to enhance content, including links, images, buttons, and more.</p>
                
                <div class="alert alert-light">
                    <h6>Example:</h6>
                    <pre class="mb-0"><code class="language-html">&lt;p&gt;
    This paragraph contains a &lt;a href="#" class="text-primary"&gt;link&lt;/a&gt;, 
    a &lt;button class="btn btn-sm btn-primary"&gt;button&lt;/button&gt;, 
    and an &lt;strong&gt;important&lt;/strong&gt; piece of text.
&lt;/p&gt;
&lt;p&gt;
    You can also include &lt;span class="badge bg-info"&gt;badges&lt;/span&gt; or 
    &lt;code&gt;code snippets&lt;/code&gt; within your text.
&lt;/p&gt;</code></pre>
                </div>
                
                <div class="p-3 border rounded mt-2">
                    <p>
                        This paragraph contains a <a href="#" class="text-primary">link</a>,
                        a <button class="btn btn-sm btn-primary">button</button>,
                        and an <strong>important</strong> piece of text.
                    </p>
                    <p class="mb-0">
                        You can also include <span class="badge bg-info">badges</span> or
                        <code>code snippets</code> within your text.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Code & Preformatted Text -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="code-elements">6. Code & Preformatted Text</h2>
                
                <h3 class="h5">The &lt;pre&gt; Tag</h3>
                <p>The <code>&lt;pre&gt;</code> tag defines preformatted text which is displayed in a fixed-width font, and it preserves both spaces and line breaks.</p>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-light">
                            <h6>Example:</h6>
                            <pre class="mb-0"><code class="language-html">&lt;pre&gt;
    function helloWorld() {
        console.log("Hello, World!");
        return true;
    }
&lt;/pre&gt;</code></pre>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded">
                            <pre class="mb-0">
    function helloWorld() {
        console.log("Hello, World!");
        return true;
    }</pre>
                        </div>
                    </div>
                </div>
                
                <h3 class="h5 mt-4">The &lt;code&gt; Tag</h3>
                <p>The <code>&lt;code&gt;</code> tag is used to define a piece of computer code. The content is displayed in the browser's default monospace font.</p>
                
                <div class="alert alert-light">
                    <h6>Example:</h6>
                    <pre class="mb-0"><code class="language-html">&lt;p&gt;In JavaScript, you can use &lt;code&gt;console.log()&lt;/code&gt; to print to the console.&lt;/p&gt;
&lt;p&gt;The &lt;code&gt;Array.prototype.map()&lt;/code&gt; method creates a new array with the results of calling a function on every element.&lt;/p&gt;</code></pre>
                </div>
                
                <div class="p-3 border rounded mt-2">
                    <p>In JavaScript, you can use <code>console.log()</code> to print to the console.</p>
                    <p class="mb-0">The <code>Array.prototype.map()</code> method creates a new array with the results of calling a function on every element.</p>
                </div>
                
                <h3 class="h5 mt-4">Line Breaks & Horizontal Rules</h3>
                <p>The <code>&lt;br&gt;</code> tag inserts a single line break, while the <code>&lt;hr&gt;</code> tag creates a thematic break (horizontal rule) between paragraph-level elements.</p>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-light">
                            <h6>Example:</h6>
                            <pre class="mb-0"><code class="language-html">&lt;p&gt;This is the first line.&lt;br&gt;
This text appears on a new line.&lt;br&gt;
And this is yet another line.&lt;/p&gt;

&lt;p&gt;This is a paragraph above the horizontal rule.&lt;/p&gt;
&lt;hr&gt;
&lt;p&gt;This is a paragraph below the horizontal rule.&lt;/p&gt;</code></pre>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded">
                            <p>This is the first line.<br>
                            This text appears on a new line.<br>
                            And this is yet another line.</p>
                            
                            <p class="mb-2">This is a paragraph above the horizontal rule.</p>
                            <hr class="my-2">
                            <p class="mb-0">This is a paragraph below the horizontal rule.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Deprecated Tags -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="deprecated-tags">7. Deprecated HTML Tags</h2>
                <p>Some HTML tags that were once commonly used are now considered obsolete and should be avoided in modern web development. Here are some deprecated tags and their modern alternatives:</p>
                
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Deprecated Tag</th>
                                <th>Modern Alternative</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>&lt;center&gt;</code></td>
                                <td><code>text-align: center</code> (CSS)</td>
                                <td>Use CSS for text alignment instead</td>
                            </tr>
                            <tr>
                                <td><code>&lt;font&gt;</code></td>
                                <td><code>font-family</code>, <code>color</code>, <code>size</code> (CSS)</td>
                                <td>Use CSS for font styling</td>
                            </tr>
                            <tr>
                                <td><code>&lt;strike&gt;</code></td>
                                <td><code>&lt;del&gt;</code> or <code>text-decoration: line-through</code></td>
                                <td>For deleted/removed text</td>
                            </tr>
                            <tr>
                                <td><code>&lt;u&gt;</code></td>
                                <td><code>text-decoration: underline</code> (CSS)</td>
                                <td>Use CSS for underlining text</td>
                            </tr>
                            <tr>
                                <td><code>&lt;big&gt;</code></td>
                                <td><code>font-size</code> (CSS)</td>
                                <td>Use CSS for font sizing</td>
                            </tr>
                            <tr>
                                <td><code>&lt;tt&gt;</code></td>
                                <td><code>&lt;code&gt;</code> or <code>font-family: monospace</code></td>
                                <td>For monospaced text</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="alert alert-warning mt-3">
                    <h5 class="alert-heading">Important Note</h5>
                    <p class="mb-0">While some deprecated tags may still work in modern browsers, they are not part of the HTML5 specification. Using them can lead to inconsistent rendering across different browsers and devices. Always prefer using CSS for styling and semantic HTML5 elements for structure.</p>
                </div>
            </div>
        </div>
        
        <!-- Best Practices -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="best-practices">8. Best Practices</h2>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-header bg-success text-white">
                                <h5 class="mb-0">Do's</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Use <code>&lt;p&gt;</code> for regular paragraphs</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Keep paragraphs focused on a single idea</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Use semantic HTML for text formatting</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i> Maintain consistent spacing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-header bg-danger text-white">
                                <h5 class="mb-0">Don'ts</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-times-circle text-danger me-2"></i> Don't use <code>&lt;br&gt;</code> for spacing between paragraphs</li>
                                    <li class="mb-2"><i class="fas fa-times-circle text-danger me-2"></i> Avoid using multiple <code>&lt;br&gt;</code> tags for spacing</li>
                                    <li class="mb-2"><i class="fas fa-times-circle text-danger me-2"></i> Don't use empty paragraphs for spacing</li>
                                    <li><i class="fas fa-times-circle text-danger me-2"></i> Avoid using deprecated tags like <code>&lt;font&gt;</code></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="examples">6. Practical Examples</h2>
                
                <h3 class="h5">Blog Post Example</h3>
                <div class="alert alert-light">
                    <pre><code class="language-html">&lt;article&gt;
    &lt;header&gt;
        &lt;h1&gt;The Art of Web Design&lt;/h1&gt;
        &lt;p class="text-muted"&gt;Published on &lt;time datetime="2023-10-22"&gt;October 22, 2023&lt;/time&gt;&lt;/p&gt;
    &lt;/header&gt;
    
    &lt;section&gt;
        &lt;h2&gt;Introduction&lt;/h2&gt;
        &lt;p&gt;Web design is a crucial aspect of creating engaging online experiences. It combines aesthetics with functionality to create websites that are both beautiful and user-friendly.&lt;/p&gt;
    &lt;/section&gt;
    
    &lt;section&gt;
        &lt;h2&gt;Key Principles&lt;/h2&gt;
        
        &lt;h3&gt;Typography&lt;/h3&gt;
        &lt;p&gt;Good typography enhances readability and sets the tone of your content. Choose fonts that are easy to read and appropriate for your audience.&lt;/p&gt;
        
        &lt;h3&gt;Color Theory&lt;/h3&gt;
        &lt;p&gt;Colors evoke emotions and create visual hierarchy. Use a consistent color palette that aligns with your brand and improves user experience.&lt;/p&gt;
    &lt;/section&gt;
    
    &lt;footer&gt;
        &lt;p class="text-muted"&gt;Written by &lt;strong&gt;Jane Doe&lt;/strong&gt;, Senior Web Designer&lt;/p&gt;
    &lt;/footer&gt;
&lt;/article&gt;</code></pre>
                </div>
                
                <h3 class="h5 mt-4">Product Description Example</h3>
                <div class="alert alert-light">
                    <pre><code class="language-html">&lt;div class="product"&gt;
    &lt;h1&gt;Premium Wireless Earbuds&lt;/h1&gt;
    
    &lt;div class="product-description"&gt;
        &lt;p class="lead"&gt;Experience crystal-clear sound with our latest wireless earbuds.&lt;/p&gt;
        
        &lt;h2&gt;Features&lt;/h2&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;strong&gt;Battery Life:&lt;/strong&gt; Up to 8 hours of playtime&lt;/li&gt;
            &lt;li&gt;&lt;strong&gt;Bluetooth:&lt;/strong&gt; 5.0 for stable connection&lt;/li&gt;
            &lt;li&gt;&lt;strong&gt;Water Resistance:&lt;/strong&gt; IPX5 rated&lt;/li&gt;
        &lt;/ul&gt;
        
        &lt;h2&gt;Technical Specifications&lt;/h2&gt;
        &lt;pre&gt;
Driver: 10mm dynamic
Frequency Response: 20Hz - 20kHz
Charging Time: 1.5 hours
Weight: 5g per earbud
        &lt;/pre&gt;
    &lt;/div&gt;
    
    &lt;div class="price"&gt;
        &lt;p class="h3 text-primary"&gt;$129.99 &lt;small class="text-muted"&gt;Free Shipping&lt;/small&gt;&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>
        </div>
        
        <div class="alert alert-success">
            <h4>Summary</h4>
            <p>HTML paragraphs are fundamental building blocks of web content. By using the <code>&lt;p&gt;</code> tag effectively and following best practices for text formatting and organization, you can create content that is both visually appealing and accessible. Remember to use semantic HTML, maintain proper spacing, and structure your content logically for the best user experience.</p>
        </div>
    </section>
</div>

<?php include_file('includes/footer.php'); ?>