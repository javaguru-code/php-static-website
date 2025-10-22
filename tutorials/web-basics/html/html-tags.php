<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'Full Stack Master - HTML Tags Reference';
$page_description = 'Comprehensive reference of all HTML tags with descriptions and usage examples';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<div class="tutorial-content">
    <section class="section">
        <h1 class="mb-4">HTML Tags Reference</h1>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4">Understanding HTML Tags</h2>
                <p>HTML tags are the building blocks of web pages. They define how content is structured and displayed in a web browser. Tags are enclosed in angle brackets <code>&lt; &gt;</code> and usually come in pairs: an opening tag and a closing tag.</p>
                
                <div class="alert alert-info">
                    <h5>Basic Tag Structure:</h5>
                    <pre><code class="language-html">&lt;tagname attribute="value"&gt;Content goes here...&lt;/tagname&gt;</code></pre>
                    <p class="mb-0">Some tags are self-closing and don't require a closing tag, like <code>&lt;img&gt;</code> or <code>&lt;br&gt;</code>.</p>
                </div>
                
                <h3 class="h5 mt-4">Categories of HTML Tags</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Key Tags</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Document Structure</strong></td>
                                <td>Define the overall structure of the HTML document</td>
                                <td><code>&lt;!DOCTYPE&gt;</code>, <code>&lt;html&gt;</code>, <code>&lt;head&gt;</code>, <code>&lt;body&gt;</code>, <code>&lt;div&gt;</code>, <code>&lt;span&gt;</code></td>
                            </tr>
                            <tr>
                                <td><strong>Text Formatting</strong></td>
                                <td>Style and format text content</td>
                                <td><code>&lt;h1&gt;-&lt;h6&gt;</code>, <code>&lt;p&gt;</code>, <code>&lt;strong&gt;</code>, <code>&lt;em&gt;</code>, <code>&lt;u&gt;</code>, <code>&lt;mark&gt;</code></td>
                            </tr>
                            <tr>
                                <td><strong>Links & Media</strong></td>
                                <td>Create hyperlinks and embed media</td>
                                <td><code>&lt;a&gt;</code>, <code>&lt;img&gt;</code>, <code>&lt;video&gt;</code>, <code>&lt;audio&gt;</code>, <code>&lt;iframe&gt;</code></td>
                            </tr>
                            <tr>
                                <td><strong>Lists & Tables</strong></td>
                                <td>Create organized data structures</td>
                                <td><code>&lt;ul&gt;</code>, <code>&lt;ol&gt;</code>, <code>&lt;li&gt;</code>, <code>&lt;table&gt;</code>, <code>&lt;tr&gt;</code>, <code>&lt;td&gt;</code></td>
                            </tr>
                            <tr>
                                <td><strong>Forms & Input</strong></td>
                                <td>Create interactive forms</td>
                                <td><code>&lt;form&gt;</code>, <code>&lt;input&gt;</code>, <code>&lt;button&gt;</code>, <code>&lt;select&gt;</code>, <code>&lt;textarea&gt;</code></td>
                            </tr>
                            <tr>
                                <td><strong>Semantic Elements</strong></td>
                                <td>Define meaning and structure (HTML5)</td>
                                <td><code>&lt;header&gt;</code>, <code>&lt;footer&gt;</code>, <code>&lt;article&gt;</code>, <code>&lt;section&gt;</code>, <code>&lt;nav&gt;</code></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4">Detailed Tag Reference</h2>
                
                <h3 class="h5">1. Document Structure</h3>
                <p>These tags define the main structure of an HTML document and its sections.</p>
                <div class="table-responsive mb-4">
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
                                <td><code>&lt;!DOCTYPE&gt;</code></td>
                                <td>Defines the document type and HTML version</td>
                                <td><code>&lt;!DOCTYPE html&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;html&gt;</code></td>
                                <td>Root element of an HTML document</td>
                                <td><code>&lt;html lang="en"&gt;...&lt;/html&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;head&gt;</code></td>
                                <td>Container for metadata and document info</td>
                                <td><code>&lt;head&gt;...&lt;/head&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;body&gt;</code></td>
                                <td>Contains the visible page content</td>
                                <td><code>&lt;body&gt;...&lt;/body&gt;</code></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h3 class="h5">2. Text Formatting</h3>
                <p>Tags for styling and structuring text content.</p>
                <div class="table-responsive mb-4">
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
                                <td><code>&lt;h1&gt;-&lt;h6&gt;</code></td>
                                <td>HTML headings from most to least important</td>
                                <td><code>&lt;h1&gt;Main Title&lt;/h1&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;p&gt;</code></td>
                                <td>Defines a paragraph</td>
                                <td><code>&lt;p&gt;This is a paragraph.&lt;/p&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;strong&gt;</code></td>
                                <td>Defines important text (bold)</td>
                                <td><code>&lt;strong&gt;Important!&lt;/strong&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;em&gt;</code></td>
                                <td>Defines emphasized text (italic)</td>
                                <td><code>&lt;em&gt;Emphasized text&lt;/em&gt;</code></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h3 class="h5">3. Links & Media</h3>
                <p>Tags for creating hyperlinks and embedding media.</p>
                <div class="table-responsive mb-4">
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
                                <td><code>&lt;a&gt;</code></td>
                                <td>Creates a hyperlink</td>
                                <td><code>&lt;a href="https://example.com"&gt;Visit&lt;/a&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;img&gt;</code></td>
                                <td>Embeds an image</td>
                                <td><code>&lt;img src="image.jpg" alt="Description"&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;video&gt;</code></td>
                                <td>Embeds video content</td>
                                <td><code>&lt;video src="movie.mp4" controls&gt;&lt;/video&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;audio&gt;</code></td>
                                <td>Embeds audio content</td>
                                <td><code>&lt;audio src="audio.mp3" controls&gt;&lt;/audio&gt;</code></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h3 class="h5">4. Lists & Tables</h3>
                <p>Tags for creating organized data structures.</p>
                <div class="table-responsive mb-4">
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
                                <td><code>&lt;ul&gt;</code></td>
                                <td>Defines an unordered list</td>
                                <td><code>&lt;ul&gt;&lt;li&gt;Item&lt;/li&gt;&lt;/ul&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;ol&gt;</code></td>
                                <td>Defines an ordered list</td>
                                <td><code>&lt;ol&gt;&lt;li&gt;First&lt;/li&gt;&lt;/ol&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;table&gt;</code></td>
                                <td>Defines a table</td>
                                <td><code>&lt;table&gt;&lt;tr&gt;&lt;td&gt;Data&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;</code></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h3 class="h5">5. Forms & Input</h3>
                <p>Tags for creating interactive forms.</p>
                <div class="table-responsive mb-4">
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
                                <td><code>&lt;form&gt;</code></td>
                                <td>Container for form elements</td>
                                <td><code>&lt;form action="/submit" method="post"&gt;&lt;/form&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;input&gt;</code></td>
                                <td>Creates an input field</td>
                                <td><code>&lt;input type="text" name="username"&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;button&gt;</code></td>
                                <td>Creates a clickable button</td>
                                <td><code>&lt;button type="submit"&gt;Submit&lt;/button&gt;</code></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h3 class="h5">6. Semantic Elements</h3>
                <p>HTML5 elements that clearly describe their meaning.</p>
                <div class="table-responsive mb-4">
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
                                <td><code>&lt;header&gt;</code></td>
                                <td>Represents introductory content</td>
                                <td><code>&lt;header&gt;Site Header&lt;/header&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;footer&gt;</code></td>
                                <td>Represents a footer for its section</td>
                                <td><code>&lt;footer&gt;© 2023&lt;/footer&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;article&gt;</code></td>
                                <td>Self-contained composition</td>
                                <td><code>&lt;article&gt;Blog post...&lt;/article&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;section&gt;</code></td>
                                <td>Defines a section in a document</td>
                                <td><code>&lt;section&gt;Chapter 1&lt;/section&gt;</code></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="alert alert-warning">
                    <h5>Note on Deprecated Tags</h5>
                    <p>Some older HTML tags like <code>&lt;font&gt;</code>, <code>&lt;center&gt;</code>, and <code>&lt;strike&gt;</code> are deprecated in HTML5 and should not be used. Instead, use CSS for styling and modern semantic elements for structure.</p>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include_file('includes/footer.php'); ?>