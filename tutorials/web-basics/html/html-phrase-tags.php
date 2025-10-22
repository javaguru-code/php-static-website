<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML Phrase Tags - Full Stack Master';
$page_description = 'Comprehensive guide to HTML phrase tags including emphasis, strong, mark, and other text-level semantic elements';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<div class="tutorial-content">
    <section class="section">
        <h1 class="mb-4">HTML Phrase Tags</h1>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4">Understanding HTML Phrase Tags</h2>
                <p>HTML phrase tags are special purpose tags that define the structural meaning of a block of text. They provide semantic meaning to the text content, making it more accessible and SEO-friendly.</p>
                
                <div class="alert alert-info">
                    <h5>Key Points About Phrase Tags:</h5>
                    <ul class="mb-0">
                        <li>Add semantic meaning to text content</li>
                        <li>Improve accessibility for screen readers</li>
                        <li>Enhance SEO by defining content structure</li>
                        <li>Can be styled with CSS for visual emphasis</li>
                    </ul>
                </div>
                
                <h3 class="h5 mt-4">Table of Contents</h3>
                <ul class="list-unstyled">
                    <li><a href="#emphasis" class="text-decoration-none">1. &lt;em&gt; - Emphasized Text</a></li>
                    <li><a href="#strong" class="text-decoration-none">2. &lt;strong&gt; - Important Text</a></li>
                    <li><a href="#mark" class="text-decoration-none">3. &lt;mark&gt; - Highlighted Text</a></li>
                    <li><a href="#abbr" class="text-decoration-none">4. &lt;abbr&gt; - Abbreviations</a></li>
                    <li><a href="#dfn" class="text-decoration-none">5. &lt;dfn&gt; - Definition Term</a></li>
                    <li><a href="#cite" class="text-decoration-none">6. &lt;cite&gt; - Citations</a></li>
                    <li><a href="#other-tags" class="text-decoration-none">7. Other Phrase Tags</a></li>
                    <li><a href="#best-practices" class="text-decoration-none">8. Best Practices</a></li>
                </ul>
            </div>
        </div>
        
        <!-- Emphasis Tag -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="emphasis">1. &lt;em&gt; - Emphasized Text</h2>
                <p>The <code>&lt;em&gt;</code> tag is used to define emphasized text. The content inside is typically displayed in italic.</p>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-light">
                            <h6>Example:</h6>
                            <pre class="mb-0"><code class="language-html">&lt;p&gt;This is &lt;em&gt;emphasized&lt;/em&gt; text.&lt;/p&gt;
&lt;p&gt;I &lt;em&gt;really&lt;/em&gt; need to finish this project.&lt;/p&gt;</code></pre>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded">
                            <p>This is <em>emphasized</em> text.</p>
                            <p class="mb-0">I <em>really</em> need to finish this project.</p>
                        </div>
                    </div>
                </div>
                
                <div class="alert alert-warning mt-3">
                    <h5 class="alert-heading">Note:</h5>
                    <p class="mb-0">While <code>&lt;em&gt;</code> is often rendered in italics, don't use it just for styling. Use CSS for presentation and <code>&lt;em&gt;</code> for semantic emphasis.</p>
                </div>
            </div>
        </div>
        
        <!-- Strong Tag -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="strong">2. &lt;strong&gt; - Important Text</h2>
                <p>The <code>&lt;strong&gt;</code> tag is used to define text with strong importance. The content inside is typically displayed in bold.</p>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-light">
                            <h6>Example:</h6>
                            <pre class="mb-0"><code class="language-html">&lt;p&gt;This is &lt;strong&gt;important&lt;/strong&gt; information.&lt;/p&gt;
&lt;p&gt;&lt;strong&gt;Warning:&lt;/strong&gt; This action cannot be undone.&lt;/p&gt;</code></pre>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded">
                            <p>This is <strong>important</strong> information.</p>
                            <p class="mb-0"><strong>Warning:</strong> This action cannot be undone.</p>
                        </div>
                    </div>
                </div>
                
                <div class="alert alert-info mt-3">
                    <h5 class="alert-heading">Accessibility Tip:</h5>
                    <p class="mb-0">Screen readers will often change their voice inflection when reading <code>&lt;strong&gt;</code> content, making it more noticeable to users with visual impairments.</p>
                </div>
            </div>
        </div>
        
        <!-- Mark Tag -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="mark">3. &lt;mark&gt; - Highlighted Text</h2>
                <p>The <code>&lt;mark&gt;</code> tag defines text that should be marked or highlighted, typically with a yellow background.</p>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-light">
                            <h6>Example:</h6>
                            <pre class="mb-0"><code class="language-html">&lt;p&gt;Search results for "HTML":&lt;/p&gt;
&lt;p&gt;Learn &lt;mark&gt;HTML&lt;/mark&gt; and CSS to build modern websites.&lt;/p&gt;
&lt;p&gt;The &lt;mark&gt;HTML&lt;/mark&gt; specification is maintained by the W3C.&lt;/p&gt;</code></pre>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded">
                            <p>Search results for "HTML":</p>
                            <p>Learn <mark>HTML</mark> and CSS to build modern websites.</p>
                            <p class="mb-0">The <mark>HTML</mark> specification is maintained by the W3C.</p>
                        </div>
                    </div>
                </div>
                
                <div class="alert alert-warning mt-3">
                    <h5 class="alert-heading">Browser Support:</h5>
                    <p class="mb-0">The <code>&lt;mark&gt;</code> tag is supported in all modern browsers, including Internet Explorer 9 and later.</p>
                </div>
            </div>
        </div>
        
        <!-- Abbreviation Tag -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="abbr">4. &lt;abbr&gt; - Abbreviations</h2>
                <p>The <code>&lt;abbr&gt;</code> tag defines an abbreviation or an acronym, like "HTML", "CSS", "Mr.", "Dr.", etc.</p>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-light">
                            <h6>Example:</h6>
                            <pre class="mb-0"><code class="language-html">&lt;p&gt;The &lt;abbr title="World Health Organization"&gt;WHO&lt;/abbr&gt; was founded in 1948.&lt;/p&gt;
&lt;p&gt;Learn &lt;abbr title="HyperText Markup Language"&gt;HTML&lt;/abbr&gt; to create web pages.&lt;/p&gt;
&lt;p&gt;&lt;abbr title="Doctor"&gt;Dr.&lt;/abbr&gt; Smith will see you now.&lt;/p&gt;</code></pre>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded">
                            <p>The <abbr title="World Health Organization">WHO</abbr> was founded in 1948.</p>
                            <p>Learn <abbr title="HyperText Markup Language">HTML</abbr> to create web pages.</p>
                            <p class="mb-0"><abbr title="Doctor">Dr.</abbr> Smith will see you now.</p>
                        </div>
                    </div>
                </div>
                
                <div class="alert alert-info mt-3">
                    <h5 class="alert-heading">Accessibility Tip:</h5>
                    <p class="mb-0">The <code>title</code> attribute in the <code>&lt;abbr&gt;</code> tag is displayed as a tooltip when hovering over the abbreviation, and is also read by screen readers, making your content more accessible.</p>
                </div>
            </div>
        </div>
        
        <!-- Definition Tag -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="dfn">5. &lt;dfn&gt; - Definition Term</h2>
                <p>The <code>&lt;dfn&gt;</code> tag represents the defining instance of a term in HTML. The nearest parent of the <code>&lt;dfn&gt;</code> tag must also contain the definition/explanation for the term.</p>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-light">
                            <h6>Example:</h6>
                            <pre class="mb-0"><code class="language-html">&lt;p&gt;&lt;dfn&gt;HTML&lt;/dfn&gt; is the standard markup language for creating web pages.&lt;/p&gt;

&lt;p&gt;&lt;dfn&gt;&lt;abbr title="Cascading Style Sheets"&gt;CSS&lt;/abbr&gt;&lt;/dfn&gt; is a style sheet language used for describing the presentation of a document.&lt;/p&gt;

&lt;p&gt;A &lt;dfn&gt;keyboard&lt;/dfn&gt; is an input device used to type text and commands into a computer.&lt;/p&gt;</code></pre>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded">
                            <p><dfn>HTML</dfn> is the standard markup language for creating web pages.</p>
                            <p><dfn><abbr title="Cascading Style Sheets">CSS</abbr></dfn> is a style sheet language used for describing the presentation of a document.</p>
                            <p class="mb-0">A <dfn>keyboard</dfn> is an input device used to type text and commands into a computer.</p>
                        </div>
                    </div>
                </div>
                
                <div class="alert alert-warning mt-3">
                    <h5 class="alert-heading">Best Practice:</h5>
                    <p class="mb-0">The <code>&lt;dfn&gt;</code> element should be used the first time a term is defined in a document. Subsequent mentions of the term should use normal text or other appropriate elements.</p>
                </div>
            </div>
        </div>
        
        <!-- Cite Tag -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="cite">6. &lt;cite&gt; - Citations</h2>
                <p>The <code>&lt;cite&gt;</code> tag defines the title of a creative work (e.g., a book, a poem, a song, a movie, a painting, a sculpture, etc.).</p>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-light">
                            <h6>Example:</h6>
                            <pre class="mb-0"><code class="language-html">&lt;p&gt;More information can be found in &lt;cite&gt;HTML &amp; CSS: Design and Build Websites&lt;/cite&gt; by Jon Duckett.&lt;/p&gt;

&lt;p&gt;As Shakespeare wrote in &lt;cite&gt;Hamlet&lt;/cite&gt;: "To be, or not to be, that is the question."&lt;/p&gt;

&lt;p&gt;The famous painting &lt;cite&gt;Starry Night&lt;/cite&gt; was created by Vincent van Gogh.&lt;/p&gt;</code></pre>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 border rounded">
                            <p>More information can be found in <cite>HTML & CSS: Design and Build Websites</cite> by Jon Duckett.</p>
                            <p>As Shakespeare wrote in <cite>Hamlet</cite>: "To be, or not to be, that is the question."</p>
                            <p class="mb-0">The famous painting <cite>Starry Night</cite> was created by Vincent van Gogh.</p>
                        </div>
                    </div>
                </div>
                
                <div class="alert alert-info mt-3">
                    <h5 class="alert-heading">Note:</h5>
                    <p class="mb-0">Browsers usually display <code>&lt;cite&gt;</code> elements in italic text. However, you can override this with CSS if needed.</p>
                </div>
            </div>
        </div>
        
        <!-- Other Phrase Tags -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="other-tags">7. Other Useful Phrase Tags</h2>
                
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Tag</th>
                                <th>Description</th>
                                <th>Example</th>
                                <th>Output</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>&lt;code&gt;</code></td>
                                <td>Defines a piece of computer code</td>
                                <td><code>&lt;code&gt;console.log()&lt;/code&gt;</code></td>
                                <td><code>console.log()</code></td>
                            </tr>
                            <tr>
                                <td><code>&lt;samp&gt;</code></td>
                                <td>Defines sample output from a computer program</td>
                                <td><code>&lt;samp&gt;Error: File not found&lt;/samp&gt;</code></td>
                                <td><samp>Error: File not found</samp></td>
                            </tr>
                            <tr>
                                <td><code>&lt;kbd&gt;</code></td>
                                <td>Defines keyboard input</td>
                                <td><code>Press &lt;kbd&gt;Ctrl&lt;/kbd&gt; + &lt;kbd&gt;C&lt;/kbd&gt; to copy</code></td>
                                <td>Press <kbd>Ctrl</kbd> + <kbd>C</kbd> to copy</td>
                            </tr>
                            <tr>
                                <td><code>&lt;var&gt;</code></td>
                                <td>Defines a variable in programming or mathematical expression</td>
                                <td><code>Let &lt;var&gt;x&lt;/var&gt; = 5;</code></td>
                                <td>Let <var>x</var> = 5;</td>
                            </tr>
                            <tr>
                                <td><code>&lt;small&gt;</code></td>
                                <td>Defines smaller text (like fine print)</td>
                                <td><code>&lt;small&gt;© 2023 Company Name&lt;/small&gt;</code></td>
                                <td><small> 2023 Company Name</small></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="alert alert-warning mt-3">
                    <h5 class="alert-heading">Styling Note:</h5>
                    <p class="mb-0">While these tags have default styling in browsers, you can always customize their appearance using CSS to match your website's design system.</p>
                </div>
            </div>
        </div>
        
        <!-- Best Practices -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4" id="best-practices">8. Best Practices for Using Phrase Tags</h2>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-header bg-success text-white">
                                <h5 class="mb-0">Do's</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Use semantic tags for their intended purpose</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Always include the <code>title</code> attribute with <code>&lt;abbr&gt;</code> tags</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Use <code>&lt;strong&gt;</code> for important text, not just for bold styling</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Use <code>&lt;em&gt;</code> for emphasis, not just for italic styling</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Style with CSS when presentation is the only concern</li>
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
                                    <li class="mb-2"><i class="fas fa-times-circle text-danger me-2"></i> Don't use phrase tags just for styling</li>
                                    <li class="mb-2"><i class="fas fa-times-circle text-danger me-2"></i> Avoid using <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> when <code>&lt;strong&gt;</code> or <code>&lt;em&gt;</code> would be more appropriate</li>
                                    <li class="mb-2"><i class="fas fa-times-circle text-danger me-2"></i> Don't nest phrase tags unnecessarily</li>
                                    <li class="mb-2"><i class="fas fa-times-circle text-danger me-2"></i> Don't use deprecated tags like <code>&lt;u&gt;</code>, <code>&lt;strike&gt;</code>, or <code>&lt;font&gt;</code></li>
                                    <li class="mb-2"><i class="fas fa-times-circle text-danger me-2"></i> Don't overuse <code>&lt;mark&gt;</code> as it can reduce its effectiveness</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="alert alert-info mt-4">
                    <h5 class="alert-heading">Accessibility Considerations</h5>
                    <p>Using the appropriate semantic HTML elements is crucial for accessibility:</p>
                    <ul class="mb-0">
                        <li>Screen readers use these tags to provide context to users</li>
                        <li>Search engines use them to better understand your content</li>
                        <li>They help with keyboard navigation and other assistive technologies</li>
                    </ul>
                </div>
                
                <div class="alert alert-warning">
                    <h5 class="alert-heading">When to Use CSS Instead</h5>
                    <p class="mb-0">Use CSS instead of HTML phrase tags when you only need to change the appearance of text without adding semantic meaning. For example, use <code>font-weight: bold;</code> for visual styling that doesn't carry importance, and reserve <code>&lt;strong&gt;</code> for text that is actually important.</p>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-body text-center">
                <h3 class="h5 mb-3">Ready to test your knowledge?</h3>
                <a href="#" class="btn btn-primary me-2">Take the Quiz</a>
                <a href="html-formatting.php" class="btn btn-outline-primary">Next: HTML Text Formatting →</a>
            </div>
        </div>
    </section>
</div>

<?php include_file('includes/footer.php'); ?>