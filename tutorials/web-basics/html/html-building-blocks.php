<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'Full Stack Master - What Is Html';
$page_description = 'Full Stack Master - Programming Tutorials';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<main class="col-9 col-lg-9 pt-3 px-lg-4">
    <div class="d-lg-none mb-3">
        <button class="btn btn-primary" data-bs-target="#sidebarOffcanvas" data-bs-toggle="offcanvas">
            <i class="bi bi-list"></i> Menu
        </button>
    </div>

    <article class="tutorial-content">
<section class="section">
        <h1 class="mb-4">HTML Building Blocks</h1>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4">Understanding HTML Building Blocks</h2>
                <p>HTML (HyperText Markup Language) is built using three fundamental building blocks: tags, elements, and attributes. These components work together to create the structure and content of web pages.</p>
                
                <div class="my-4" style="overflow-x: auto;">
                    <div>
                        <img 
                            src="<?= $base_url ?>tutorials/web-basics/html/assets/images/html-building-blocks.svg" 
                            alt="HTML Building Blocks" 
                            class="img-fluid d-block mx-auto" 
                            style="max-width: 100%; height: auto;"
                            onerror="this.onerror=null; this.src='<?= $base_url ?>tutorials/web-basics/html/assets/images/html-building-blocks.png'"
                        >
                        <p class="text-muted mt-2 text-center"><small>Figure: HTML Element Structure - Tags, Attributes, and Content</small></p>
                    </div>
                </div>
                
                <div class="row text-center">
                    <div class="col-md-4 mb-3">
                        <div class="p-3 border rounded bg-light">
                            <i class="bi bi-tags fs-1 text-primary"></i>
                            <h5 class="mt-2">Tags</h5>
                            <p class="mb-0">Define the structure</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="p-3 border rounded bg-light">
                            <i class="bi bi-box-seam fs-1 text-success"></i>
                            <h5 class="mt-2">Elements</h5>
                            <p class="mb-0">Contain content</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="p-3 border rounded bg-light">
                            <i class="bi bi-tag fs-1 text-info"></i>
                            <h5 class="mt-2">Attributes</h5>
                            <p class="mb-0">Provide additional info</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tags Section -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4">1. HTML Tags</h2>
                <p>HTML tags are the building blocks of HTML documents. They are used to define the structure and content of a web page. Tags are enclosed in angle brackets <code>< ></code> and usually come in pairs: an opening tag and a closing tag.</p>
                
                <h5 class="mt-4">Key Characteristics of HTML Tags:</h5>
                <ul>
                    <li>Most tags come in pairs (opening and closing)</li>
                    <li>Some tags are self-closing (void elements)</li>
                    <li>Tags are not case-sensitive but lowercase is recommended</li>
                    <li>Tags can be nested inside other tags</li>
                </ul>

                <div class="example-box p-3 bg-light mt-3">
                    <h5>Examples of HTML Tags:</h5>
                    <pre><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;My Page&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Welcome&lt;/h1&gt;
    &lt;p&gt;This is a paragraph.&lt;/p&gt;
    &lt;img src="image.jpg" alt="Description"&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
                </div>
            </div>
        </div>

        <!-- Elements Section -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4">2. HTML Elements</h2>
                <p>An HTML element is defined by a start tag, some content, and an end tag. Elements can also contain other elements, creating a hierarchical structure known as the Document Object Model (DOM).</p>
                
                <h5 class="mt-4">Structure of an HTML Element:</h5>
                <pre><code class="language-html">&lt;tagname&gt;Content goes here...&lt;/tagname&gt;</code></pre>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <h5>Common HTML Elements:</h5>
                        <ul>
                            <li><code>&lt;h1&gt; to &lt;h6&gt;</code>: Headings</li>
                            <li><code>&lt;p&gt;</code>: Paragraph</li>
                            <li><code>&lt;div&gt;</code>: Division/section</li>
                            <li><code>&lt;span&gt;</code>: Inline container</li>
                            <li><code>&lt;a&gt;</code>: Hyperlink</li>
                            <li><code>&lt;img&gt;</code>: Image</li>
                            <li><code>&lt;ul&gt;, &lt;ol&gt;, &lt;li&gt;</code>: Lists</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h5>Element Nesting Example:</h5>
                        <pre><code class="language-html">&lt;div class="container"&gt;
    &lt;h1&gt;My Blog&lt;/h1&gt;
    &lt;article&gt;
        &lt;h2&gt;Article Title&lt;/h2&gt;
        &lt;p&gt;This is a paragraph inside an article.&lt;/p&gt;
        &lt;ul&gt;
            &lt;li&gt;First item&lt;/li&gt;
            &lt;li&gt;Second item&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/article&gt;
&lt;/div&gt;</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <!-- Attributes Section -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4">3. HTML Attributes</h2>
                <p>HTML attributes provide additional information about HTML elements. They are always specified in the start tag and usually come in name/value pairs like: <code>name="value"</code>.</p>
                
                <h5 class="mt-4">Common HTML Attributes:</h5>
                <ul>
                    <li><code>id</code>: Specifies a unique id for an element</li>
                    <li><code>class</code>: Specifies one or more class names for an element</li>
                    <li><code>src</code>: Specifies the URL of an image</li>
                    <li><code>href</code>: Specifies the URL of a link</li>
                    <li><code>alt</code>: Specifies an alternate text for an image</li>
                    <li><code>style</code>: Specifies inline CSS styles</li>
                    <li><code>title</code>: Specifies extra information about an element</li>
                </ul>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <h5>Attribute Examples:</h5>
                        <pre><code class="language-html">&lt;!-- Class and ID attributes --&gt;
&lt;div id="header" class="main-header"&gt;...&lt;/div&gt;

&lt;!-- Image with src and alt --&gt;
&lt;img src="logo.png" alt="Company Logo"&gt;

&lt;!-- Link with href and title --&gt;
&lt;a href="about.html" title="About Us"&gt;About&lt;/a&gt;

&lt;!-- Inline styles --&gt;
&lt;p style="color: blue;"&gt;This is blue text.&lt;/p&gt;

&lt;!-- Data attributes --&gt;
&lt;div data-user-id="123"&gt;User Content&lt;/div&gt;</code></pre>
                    </div>
                    <div class="col-md-6">
                        <h5>Boolean Attributes:</h5>
                        <p>Some attributes don't need a value - their presence alone indicates a true value.</p>
                        <pre><code class="language-html">&lt;!-- Disabled button --&gt;
&lt;button disabled&gt;Can't click me&lt;/button&gt;

&lt;!-- Checked checkbox --&gt;
&lt;input type="checkbox" checked&gt;

&lt;!-- Multiple select --&gt;
&lt;select multiple&gt;
    &lt;option&gt;Option 1&lt;/option&gt;
    &lt;option selected&gt;Option 2&lt;/option&gt;
&lt;/select&gt;</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4">Putting It All Together</h2>
                <p>Here's a complete example showing how tags, elements, and attributes work together:</p>
                
                <div class="example-box p-3 bg-light">
                    <pre><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;My Web Page&lt;/title&gt;
    &lt;style&gt;
        .highlight {
            background-color: yellow;
            padding: 5px;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;header id="main-header" class="page-header"&gt;
        &lt;h1&gt;Welcome to My Website&lt;/h1&gt;
        &lt;nav&gt;
            &lt;ul&gt;
                &lt;li&gt;&lt;a href="#home" class="nav-link"&gt;Home&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#about" class="nav-link"&gt;About&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/nav&gt;
    &lt;/header&gt;

    &lt;main&gt;
        &lt;article class="blog-post"&gt;
            <h2>Understanding HTML</h2>
            <p>HTML is the standard markup language for creating web pages.</p>
            <div class="highlight" data-importance="high">
                <p>Remember: Always close your HTML tags properly!</p>
            </div>
        &lt;/article&gt;
    &lt;/main&gt;

    &lt;footer&gt;
        &lt;p&gt; 2025 My Website. All rights reserved.&lt;/p&gt;
    &lt;/footer&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
                </div>

                <div class="alert alert-info mt-4">
                    <h5>Key Takeaways:</h5>
                    <ul>
                        <li><strong>Tags</strong> are the basic building blocks, written with angle brackets.</li>
                        <li><strong>Elements</strong> consist of opening tag, content, and closing tag.</li>
                        <li><strong>Attributes</strong> provide additional information about elements.</li>
                        <li>Proper nesting and closing of tags is essential for valid HTML.</li>
                        <li>Use semantic elements for better accessibility and SEO.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include_file('includes/footer.php'); ?>