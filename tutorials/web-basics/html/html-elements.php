<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML Elements - Full Stack Master';
$page_description = 'Comprehensive guide to HTML elements including block-level, inline, semantic, form, and media elements';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

         
   


<div class="tutorial-content">
    <section class="section">
        <h1 class="mb-4">HTML Elements</h1>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4">Understanding HTML Elements</h2>
                <p>HTML elements are the building blocks of web pages, consisting of a start tag, content, and an end tag. Elements can contain other elements, creating a hierarchical structure that defines the document's layout and content.</p>
                
                <div class="alert alert-info">
                    <h5>Basic Element Structure:</h5>
                    <pre><code class="language-html">&lt;tagname attribute="value"&gt;Content goes here...&lt;/tagname&gt;</code></pre>
                </div>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4">1. Block-level Elements</h2>
                <p>Block-level elements always start on a new line and take up the full width available. They can contain other block-level or inline elements.</p>
                
                <div class="table-responsive mb-4">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Element</th>
                                <th>Description</th>
                                <th>Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>&lt;div&gt;</code></td>
                                <td>Generic container for flow content</td>
                                <td><code>&lt;div&gt;Content&lt;/div&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;p&gt;</code></td>
                                <td>Paragraph</td>
                                <td><code>&lt;p&gt;This is a paragraph.&lt;/p&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;h1&gt;-&lt;h6&gt;</code></td>
                                <td>Headings from most to least important</td>
                                <td><code>&lt;h1&gt;Main Heading&lt;/h1&gt;</code></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <p>Block-level elements are essential for creating the main structure of a webpage. They stack vertically by default, with each new block element starting on a new line. Common uses include creating headers, footers, navigation bars, and content sections. The <code>&lt;div&gt;</code> element is particularly versatile and is often used with CSS to create page layouts.</p>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4">2. Inline Elements</h2>
                <p>Inline elements do not start on a new line and only take up as much width as necessary.</p>
                
                <div class="table-responsive mb-4">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Element</th>
                                <th>Description</th>
                                <th>Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>&lt;span&gt;</code></td>
                                <td>Generic inline container</td>
                                <td><code>&lt;span&gt;styled text&lt;/span&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;a&gt;</code></td>
                                <td>Hyperlink</td>
                                <td><code>&lt;a href="#"&gt;Link&lt;/a&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;strong&gt;</code></td>
                                <td>Important text (bold)</td>
                                <td><code>&lt;strong&gt;Important!&lt;/strong&gt;</code></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <p>Inline elements are used within block-level elements to style or define specific parts of the content. They flow with the document's text and don't create line breaks. Common uses include styling text (bold, italics), creating links, and adding emphasis. The <code>&lt;span&gt;</code> element is particularly useful for applying styles or scripting to specific portions of text.</p>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4">3. Semantic Elements (HTML5)</h2>
                <p>Semantic elements clearly describe their meaning to both the browser and the developer.</p>
                
                <div class="table-responsive mb-4">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Element</th>
                                <th>Description</th>
                                <th>Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>&lt;header&gt;</code></td>
                                <td>Introductory content</td>
                                <td><code>&lt;header&gt;Page Header&lt;/header&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;footer&gt;</code></td>
                                <td>Footer content</td>
                                <td><code>&lt;footer&gt; 2023&lt;/footer&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;article&gt;</code></td>
                                <td>Independent, self-contained content</td>
                                <td><code>&lt;article&gt;Blog post...&lt;/article&gt;</code></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <p>Semantic elements were introduced in HTML5 to make the structure of web pages more meaningful. They help search engines and assistive technologies better understand the content and structure of a webpage. Using semantic elements improves accessibility, SEO, and makes the code more readable. Examples include <code>&lt;header&gt;</code>, <code>&lt;nav&gt;</code>, <code>&lt;main&gt;</code>, <code>&lt;section&gt;</code>, <code>&lt;article&gt;</code>, <code>&lt;aside&gt;</code>, and <code>&lt;footer&gt;</code>.</p>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4">4. Form Elements</h2>
                <p>Form elements are used to create interactive controls for web-based forms.</p>
                
                <div class="table-responsive mb-4">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Element</th>
                                <th>Description</th>
                                <th>Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>&lt;form&gt;</code></td>
                                <td>Container for form elements</td>
                                <td><code>&lt;form action="/submit"&gt;...&lt;/form&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;input&gt;</code></td>
                                <td>Input field</td>
                                <td><code>&lt;input type="text" name="username"&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;button&gt;</code></td>
                                <td>Clickable button</td>
                                <td><code>&lt;button type="submit"&gt;Submit&lt;/button&gt;</code></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <p>Form elements are essential for collecting user input. The <code>&lt;form&gt;</code> element is the container for all form elements. Common form controls include text inputs, checkboxes, radio buttons, submit buttons, and more. Each form element can have various attributes that define its behavior, such as <code>name</code>, <code>value</code>, <code>placeholder</code>, and <code>required</code>. Modern HTML5 introduced new input types like <code>email</code>, <code>date</code>, <code>range</code>, and <code>color</code> to enhance user experience and input validation.</p>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4">5. Void Elements</h2>
                <p>Void elements are HTML elements that cannot have any child nodes (nested elements or text). They only have a start tag and must not have an end tag.</p>
                
                <div class="table-responsive mb-4">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Element</th>
                                <th>Description</th>
                                <th>Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>&lt;br&gt;</code></td>
                                <td>Line break</td>
                                <td><code>First line&lt;br&gt;Second line</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;img&gt;</code></td>
                                <td>Embeds an image</td>
                                <td><code>&lt;img src="image.jpg" alt="Description"&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;input&gt;</code></td>
                                <td>Input field</td>
                                <td><code>&lt;input type="text" name="username"&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;meta&gt;</code></td>
                                <td>Metadata about the document</td>
                                <td><code>&lt;meta charset="UTF-8"&gt;</code></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="alert alert-info">
                    <h5>Important Notes about Void Elements:</h5>
                    <ul class="mb-0">
                        <li>Void elements cannot contain any content or other elements</li>
                        <li>In XHTML, they must be self-closing: <code>&lt;br /&gt;</code></li>
                        <li>Common void elements include: <code>&lt;area&gt;</code>, <code>&lt;base&gt;</code>, <code>&lt;br&gt;</code>, <code>&lt;col&gt;</code>, <code>&lt;embed&gt;</code>, <code>&lt;hr&gt;</code>, <code>&lt;img&gt;</code>, <code>&lt;input&gt;</code>, <code>&lt;link&gt;</code>, <code>&lt;meta&gt;</code>, <code>&lt;param&gt;</code>, <code>&lt;source&gt;</code>, <code>&lt;track&gt;</code>, <code>&lt;wbr&gt;</code></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4">6. Nested Elements</h2>
                <p>Nesting in HTML means placing one element inside another, creating a parent-child relationship. This is fundamental to HTML document structure.</p>
                
                <div class="example-box p-3 bg-light rounded mb-4">
                    <h5>Basic Nesting Example:</h5>
                    <pre><code class="language-html">&lt;div class="container"&gt;
    &lt;header&gt;
        &lt;h1&gt;Page Title&lt;/h1&gt;
        &lt;nav&gt;
            &lt;ul&gt;
                &lt;li&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="#"&gt;About&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/nav&gt;
    &lt;/header&gt;
    &lt;main&gt;
        &lt;article&gt;
            &lt;h2&gt;Article Title&lt;/h2&gt;
            &lt;p&gt;This is a paragraph with &lt;strong&gt;strong&lt;/strong&gt; text.&lt;/p&gt;
        &lt;/article&gt;
    &lt;/main&gt;
&lt;/div&gt;</code></pre>
                </div>
                
                <h5 class="mt-4">Nesting Rules and Best Practices:</h5>
                <ul>
                    <li><strong>Proper Nesting Order:</strong> Elements must be properly nested and closed in the reverse order they were opened.</li>
                    <li><strong>Block vs Inline:</strong> Block elements can contain other block and inline elements, while inline elements should only contain other inline elements.</li>
                    <li><strong>Semantic Nesting:</strong> Use semantic elements to create meaningful document structures.</li>
                    <li><strong>Indentation:</strong> Proper indentation improves code readability and helps identify nested levels.</li>
                </ul>
                
                <div class="alert alert-warning">
                    <h5>Common Nesting Mistakes to Avoid:</h5>
                    <ul class="mb-0">
                        <li>Improperly nested tags: <code>&lt;p&gt;&lt;div&gt;Content&lt;/p&gt;&lt;/div&gt;</code> (incorrect)</li>
                        <li>Block elements inside inline elements: <code>&lt;span&gt;&lt;div&gt;Content&lt;/div&gt;&lt;/span&gt;</code> (invalid)</li>
                        <li>Forgetting to close tags, which can break the document structure</li>
                    </ul>
                </div>
                
                <div class="example-box p-3 bg-light rounded">
                    <h5>Example of Properly Nested Form Elements:</h5>
                    <pre><code class="language-html">&lt;form action="/submit" method="post"&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="username"&gt;Username:&lt;/label&gt;
        &lt;input type="text" id="username" name="username" required&gt;
    &lt;/div&gt;
    
    &lt;div class="form-group"&gt;
        &lt;label for="password"&gt;Password:&lt;/label&gt;
        &lt;input type="password" id="password" name="password" required&gt;
    &lt;/div&gt;
    
    &lt;fieldset&gt;
        &lt;legend&gt;Preferences:&lt;/legend&gt;
        &lt;div&gt;
            &lt;input type="checkbox" id="newsletter" name="newsletter"&gt;
            &lt;label for="newsletter"&gt;Subscribe to newsletter&lt;/label&gt;
        &lt;/div&gt;
    &lt;/fieldset&gt;
    
    &lt;button type="submit" class="btn btn-primary"&gt;Submit&lt;/button&gt;
&lt;/form&gt;</code></pre>
                </div>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4">7. Comprehensive HTML Element Reference</h2>
                <p>This section provides a detailed reference of HTML elements organized by their primary function and purpose.</p>
                
                <h3 class="h5 mt-4">Document Structure Elements</h3>
                <div class="table-responsive mb-4">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Element</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>&lt;html&gt;</code></td>
                                <td>The root element that wraps all content on the page and indicates that this is an HTML document.</td>
                            </tr>
                            <tr>
                                <td><code>&lt;head&gt;</code></td>
                                <td>Contains machine-readable information about the document, like its title, scripts, and style sheets.</td>
                            </tr>
                            <tr>
                                <td><code>&lt;body&gt;</code></td>
                                <td>Represents the content of an HTML document, containing all the visible content.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <h3 class="h5 mt-4">Sectioning & Grouping</h3>
                <div class="table-responsive mb-4">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Element</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>&lt;header&gt;</code></td>
                                <td>Represents introductory content, typically containing navigational aids or introductory elements.</td>
                            </tr>
                            <tr>
                                <td><code>&lt;nav&gt;</code></td>
                                <td>Defines a section of navigation links for the current document or to other documents.</td>
                            </tr>
                            <tr>
                                <td><code>&lt;main&gt;</code></td>
                                <td>Represents the dominant content of the document, with content that is directly related to the central topic.</td>
                            </tr>
                            <tr>
                                <td><code>&lt;section&gt;</code></td>
                                <td>Defines a standalone section that groups related content thematically.</td>
                            </tr>
                            <tr>
                                <td><code>&lt;article&gt;</code></td>
                                <td>Represents a self-contained composition that could be independently distributed or reusable.</td>
                            </tr>
                            <tr>
                                <td><code>&lt;aside&gt;</code></td>
                                <td>Represents content that is only indirectly related to the main content, often seen in sidebars.</td>
                            </tr>
                            <tr>
                                <td><code>&lt;footer&gt;</code></td>
                                <td>Represents the footer of a document or section, typically containing metadata and copyright information.</td>
                            </tr>
                            <tr>
                                <td><code>&lt;address&gt;</code></td>
                                <td>Provides contact information for its nearest article or body element ancestor.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <h3 class="h5 mt-4">Text Content & Formatting</h3>
                <div class="table-responsive mb-4">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Element</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>&lt;h1&gt;-&lt;h6&gt;</code></td>
                                <td>Headings that define the hierarchy of content, with h1 being the most important and h6 the least.</td>
                            </tr>
                            <tr>
                                <td><code>&lt;p&gt;</code></td>
                                <td>Defines a paragraph, which is a block of text separated from adjacent blocks by blank lines.</td>
                            </tr>
                            <tr>
                                <td><code>&lt;pre&gt;</code></td>
                                <td>Represents preformatted text that should be displayed exactly as written, preserving spaces and line breaks.</td>
                            </tr>
                            <tr>
                                <td><code>&lt;blockquote&gt;</code></td>
                                <td>Indicates that the enclosed text is an extended quotation, often indented.</td>
                            </tr>
                            <tr>
                                <td><code>&lt;hr&gt;</code></td>
                                <td>Represents a thematic break between paragraph-level elements, typically displayed as a horizontal rule.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <h3 class="h5 mt-4">Lists</h3>
                <div class="table-responsive mb-4">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Element</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>&lt;ul&gt;</code></td>
                                <td>Defines an unordered list, typically rendered as a bulleted list of items.</td>
                            </tr>
                            <tr>
                                <td><code>&lt;ol&gt;</code></td>
                                <td>Defines an ordered list, where items are typically displayed with numbers or letters.</td>
                            </tr>
                            <tr>
                                <td><code>&lt;li&gt;</code></td>
                                <td>Represents an item in a list, which must be contained in a parent <code>&lt;ul&gt;</code>, <code>&lt;ol&gt;</code>, or <code>&lt;menu&gt;</code>.</td>
                            </tr>
                            <tr>
                                <td><code>&lt;dl&gt;</code></td>
                                <td>Represents a description list, which consists of name-value groups.</td>
                            </tr>
                            <tr>
                                <td><code>&lt;dt&gt;</code></td>
                                <td>Specifies a term in a description list.</td>
                            </tr>
                            <tr>
                                <td><code>&lt;dd&gt;</code></td>
                                <td>Provides the description, definition, or value for the preceding term in a description list.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <h3 class="h5 mt-4">Forms & User Input</h3>
                <div class="table-responsive mb-4">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Element</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>&lt;form&gt;</code></td>
                                <td>Represents a document section containing interactive controls for submitting information to a web server.</td>
                            </tr>
                            <tr>
                                <td><code>&lt;fieldset&gt;</code></td>
                                <td>Groups several controls as well as labels within a web form, often with a box around them.</td>
                            </tr>
                            <tr>
                                <td><code>&lt;output&gt;</code></td>
                                <td>Represents the result of a calculation or user action, such as the output of a script.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <h3 class="h5 mt-4">Multimedia & Embedded Content</h3>
                <div class="table-responsive mb-4">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Element</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>&lt;figure&gt;</code></td>
                                <td>Represents self-contained content, typically referenced as a single unit from the main flow of the document.</td>
                            </tr>
                            <tr>
                                <td><code>&lt;figcaption&gt;</code></td>
                                <td>Represents a caption or legend for the rest of the contents of its parent <code>&lt;figure&gt;</code> element.</td>
                            </tr>
                            <tr>
                                <td><code>&lt;canvas&gt;</code></td>
                                <td>Provides a resolution-dependent bitmap canvas that can be used for rendering graphs, game graphics, or other visual images on the fly.</td>
                            </tr>
                            <tr>
                                <td><code>&lt;video&gt;</code></td>
                                <td>Embeds a media player which supports video playback into the document.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <h3 class="h5 mt-4">Scripting</h3>
                <div class="table-responsive mb-4">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Element</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>&lt;noscript&gt;</code></td>
                                <td>Defines a section of HTML to be inserted if a script type on the page is unsupported or if scripting is currently turned off in the browser.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>        
   


<?php include_file('includes/footer.php'); ?>
