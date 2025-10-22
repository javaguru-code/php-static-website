<?php
// Include config first to get helper functions
require_once __DIR__ . '/../../../includes/config.php';

// Use the base URL from environment
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;

$page_title = 'HTML Tutorial - Full Stack Master';
$page_description = 'Learn HTML from basics to advanced concepts with our comprehensive HTML tutorial. Perfect for beginners and experienced developers.';

// Include header and sidebar using the base directory
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
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="display-4 fw-bold text-primary">HTML Tutorial</h1>
                <p class="lead">
                    This HTML tutorial is designed for both beginners and experienced developers to understand HTML well — in a clear, step‑by‑step way. 
                    It explains every key topic of HTML, including Introduction, HTML tags & elements, attributes, formatting, forms, tables, lists, 
                    media types, HTML5 semantics, Canvas, SVG, responsive layout, and many other topics.
                </p>
            </div>
        </div>

        <!-- What is HTML? -->
        <section id="what-is-html" class="mb-5">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h2 class="h4 mb-0">What is HTML?</h2>
                </div>
                <div class="card-body">
                    <p>The name HTML stands for <strong>HyperText Markup Language</strong>. It is the standard language used to create and design web pages. 
                    It is not a programming language; rather, it's a markup language for organising content on the web. 
                    HTML forms the foundation for every website.</p>
                    
                    <div class="alert alert-info">
                        <h5 class="alert-heading"><i class="bi bi-info-circle"></i> Did you know?</h5>
                        <p class="mb-0">In 1991, Tim Berners‑Lee created HTML (then in its earliest forms) at CERN, which has since evolved — 
                        most notably into HTML5, adding support for audio, video, graphics, and responsive design features.</p>
                    </div>
                    
                    <h5 class="mt-4">Key points about HTML include:</h5>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item"><i class="bi bi-check-circle text-primary me-2"></i> HTML stands for HyperText Markup Language.</li>
                        <li class="list-group-item"><i class="bi bi-check-circle text-primary me-2"></i> It is used to create web pages and web applications.</li>
                        <li class="list-group-item"><i class="bi bi-check-circle text-primary me-2"></i> HTML is the most commonly used language on the web.</li>
                        <li class="list-group-item"><i class="bi bi-check-circle text-primary me-2"></i> HTML is capable of creating static web pages.</li>
                        <li class="list-group-item"><i class="bi bi-check-circle text-primary me-2"></i> It is a markup language and not a programming language.</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- HTML Example -->
        <section id="html-example" class="mb-5">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h2 class="h4 mb-0">HTML Example with an HTML Editor</h2>
                </div>
                <div class="card-body">
                    <p>Here's a simple example of an HTML document. A markup document typically consists of a document‑type declaration, 
                    a <code>&lt;head&gt;</code> section, a <code>&lt;title&gt;</code>, and a <code>&lt;body&gt;</code> with headings and a paragraph:</p>
                    
                    <div class="card mb-4">
    <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
        <span><i class="bi bi-code-square me-2"></i>HTML Editor</span>
        <div>
            <button id="copyCode" class="btn btn-sm btn-outline-light me-2" title="Copy Code">
                <i class="bi bi-clipboard"></i> Copy
            </button>
            <button id="runCode" class="btn btn-sm btn-primary">
                <i class="bi bi-play-fill"></i> Run Code
            </button>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="code-block">
            <pre class="line-numbers"><code id="htmlCode" class="language-markup">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;My First Web Page&lt;/title&gt;
    &lt;style&gt;
        body { 
            font-family: Arial, sans-serif; 
            max-width: 800px; 
            margin: 0 auto; 
            padding: 20px;
        }
        h1 { color: #2c3e50; }
        .container { 
            background-color: #f8f9fa; 
            padding: 20px; 
            border-radius: 5px;
            margin: 20px 0;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="container"&gt;
        &lt;h1&gt;Welcome to My Website&lt;/h1&gt;
        &lt;p&gt;This is a paragraph of text. You can edit this code and see the changes in real-time!&lt;/p&gt;
        &lt;button onclick="alert('Button clicked!')"&gt;Click Me&lt;/button&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
        </div>
    </div>
</div>

<div class="card mb-4">
    <div class="card-header bg-dark text-white">
        <i class="bi bi-display me-2"></i>Output
    </div>
    <div class="card-body p-0">
        <iframe id="outputFrame" class="w-100" style="height: 300px; border: none;"></iframe>
    </div>
</div>

<!-- Add required scripts at the end of the file -->
<script>
// Run the code when the page loads
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Prism for syntax highlighting
    if (typeof Prism !== 'undefined') {
        Prism.highlightAll();
    }

    // Copy code to clipboard
    document.getElementById('copyCode').addEventListener('click', function() {
        const code = document.getElementById('htmlCode').textContent;
        navigator.clipboard.writeText(code).then(() => {
            const originalText = this.innerHTML;
            this.innerHTML = '<i class="bi bi-check"></i> Copied!';
            setTimeout(() => {
                this.innerHTML = originalText;
            }, 2000);
        });
    });

    // Run the code
    document.getElementById('runCode').addEventListener('click', function() {
        const code = document.getElementById('htmlCode').textContent;
        const outputFrame = document.getElementById('outputFrame');
        const frameDoc = outputFrame.contentDocument || outputFrame.contentWindow.document;
        
        frameDoc.open();
        frameDoc.write(code);
        frameDoc.close();
    });

    // Run code initially
    document.getElementById('runCode').click();
});
</script>
                </div>
            </div>
        </section>

        <!-- Why Learn HTML? -->
        <section id="why-learn-html" class="mb-5">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h2 class="h4 mb-0">Why Learn HTML?</h2>
                </div>
                <div class="card-body">
                    <p>Every website starts with HTML. If you aim to be a web developer or web designer, you must understand HTML. 
                    Building even a basic website always begins with knowing HTML. Here are some major reasons why HTML is a strong choice:</p>
                    
                    <div class="row g-4 mt-3">
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-primary bg-opacity-10 p-3 rounded-circle me-3">
                                            <i class="bi bi-easel2-fill text-primary fs-4"></i>
                                        </div>
                                        <h5 class="card-title mb-0">Essential for Web Development</h5>
                                    </div>
                                    <p class="card-text">HTML is the foundation of all web development. Without HTML, there would be no web pages.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-primary bg-opacity-10 p-3 rounded-circle me-3">
                                            <i class="bi bi-code-slash text-primary fs-4"></i>
                                        </div>
                                        <h5 class="card-title mb-0">Easy to Learn</h5>
                                    </div>
                                    <p class="card-text">HTML has a simple, straightforward syntax that's easy to understand and use, even for beginners.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-primary bg-opacity-10 p-3 rounded-circle me-3">
                                            <i class="bi bi-browser-chrome text-primary fs-4"></i>
                                        </div>
                                        <h5 class="card-title mb-0">Works Everywhere</h5>
                                    </div>
                                    <p class="card-text">HTML works the same way on any computer (platform‑independent) and is supported by every web browser.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-primary bg-opacity-10 p-3 rounded-circle me-3">
                                            <i class="bi bi-puzzle text-primary fs-4"></i>
                                        </div>
                                        <h5 class="card-title mb-0">Works with Other Technologies</h5>
                                    </div>
                                    <p class="card-text">HTML works seamlessly with CSS and JavaScript to build dynamic and interactive websites.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- How HTML Works -->
        <section id="how-html-works" class="mb-5">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h2 class="h4 mb-0">How HTML Works</h2>
                </div>
                <div class="card-body">
                    <p>An HTML file is a plain‑text file, typically ending in <code>.html</code>. Inside these documents, tags and attributes 
                    give structure and meaning to content. A web browser loads an HTML document and renders the page to the user according to that markup.</p>
                    
                    <h5 class="mt-4">The HTML Processing Flow:</h5>
                    <ol class="list-group list-group-numbered mb-4">
                        <li class="list-group-item">
                            <strong>Request:</strong> When you enter a URL in your browser, it sends a request to the web server.
                        </li>
                        <li class="list-group-item">
                            <strong>Response:</strong> The server responds by sending the HTML document back to the browser.
                        </li>
                        <li class="list-group-item">
                            <strong>Parsing:</strong> The browser parses the HTML and constructs the Document Object Model (DOM) tree.
                        </li>
                        <li class="list-group-item">
                            <strong>Rendering:</strong> The browser renders the page based on the DOM and CSS styling.
                        </li>
                        <li class="list-group-item">
                            <strong>Interaction:</strong> JavaScript can modify the DOM after the page has loaded, enabling dynamic content.
                        </li>
                    </ol>
                    
                    <div class="row align-items-center my-4">
                        <div class="col-md-6">
                            <div class="p-4 bg-light rounded">
                                <h5 class="text-primary">HTML Document Structure</h5>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item border-0 bg-transparent ps-0"><code>&lt;!DOCTYPE html&gt;</code> - Document Type Declaration</li>
                                    <li class="list-group-item border-0 bg-transparent ps-0"><code>&lt;html&gt;</code> - Root Element</li>
                                    <li class="list-group-item border-0 bg-transparent ps-0"><code>&lt;head&gt;</code> - Contains metadata, title, and links to CSS/JS</li>
                                    <li class="list-group-item border-0 bg-transparent ps-0"><code>&lt;body&gt;</code> - Contains the visible page content</li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-center p-4">
                                <img src="<?= $base_url ?>images/html-structure.svg" alt="HTML Document Structure" class="img-fluid">
                                <p class="text-muted small mt-2 mb-0">Basic Structure of an HTML Document</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="alert alert-info">
                        <h5 class="alert-heading"><i class="bi bi-lightbulb"></i> Understanding the Web</h5>
                        <p>Think of HTML as the backbone of a website: it defines each webpage's components — the text, the images, the links — and how they relate. 
                        Without HTML, web browsers would not be able to correctly present web pages.</p>
                        
                        <h6 class="mt-3">Key Components of HTML Processing:</h6>
                        <ul class="mb-0">
                            <li><strong>Elements:</strong> The building blocks of HTML (e.g., &lt;p&gt;, &lt;div&gt;, &lt;span&gt;)</li>
                            <li><strong>Attributes:</strong> Provide additional information about elements (e.g., id, class, src, href)</li>
                            <li><strong>DOM:</strong> The browser creates a tree-like structure (Document Object Model) of the page</li>
                            <li><strong>Rendering:</strong> The browser uses the DOM and CSS to render the final page</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Getting Started with HTML -->
        <section id="getting-started" class="mb-5">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h2 class="h4 mb-0">Getting Started with HTML</h2>
                </div>
                <div class="card-body">
                    <p>We will begin by covering the essential aspects of HTML, then move on to more advanced concepts in HTML5.</p>
                    
                    <h4 class="mt-4 mb-3">HTML Basics – You'll Learn About:</h4>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title text-primary"><i class="bi bi-tags-fill me-2"></i>HTML Elements</h5>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="bi bi-chevron-right text-muted me-2"></i> HTML tags and their usage</li>
                                        <li class="mb-2"><i class="bi bi-chevron-right text-muted me-2"></i> HTML formatting (headings, paragraphs, etc.)</li>
                                        <li class="mb-2"><i class="bi bi-chevron-right text-muted me-2"></i> HTML anchor (<code>&lt;a&gt;</code>) tags</li>
                                        <li class="mb-2"><i class="bi bi-chevron-right text-muted me-2"></i> HTML image tags (<code>&lt;img&gt;</code>)</li>
                                        <li class="mb-2"><i class="bi bi-chevron-right text-muted me-2"></i> HTML tables and lists</li>
                                        <li class="mb-2"><i class="bi bi-chevron-right text-muted me-2"></i> HTML forms (inputs, buttons)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title text-primary"><i class="bi bi-code-square me-2"></i>Advanced Topics</h5>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="bi bi-chevron-right text-muted me-2"></i> HTML5 semantic elements</li>
                                        <li class="mb-2"><i class="bi bi-chevron-right text-muted me-2"></i> Multimedia (audio, video, canvas)</li>
                                        <li class="mb-2"><i class="bi bi-chevron-right text-muted me-2"></i> Responsive design principles</li>
                                        <li class="mb-2"><i class="bi bi-chevron-right text-muted me-2"></i> Web accessibility (a11y)</li>
                                        <li class="mb-2"><i class="bi bi-chevron-right text-muted me-2"></i> HTML entities and symbols</li>
                                        <li class="mb-2"><i class="bi bi-chevron-right text-muted me-2"></i> Best practices and standards</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <h5>Who Is This Tutorial For?</h5>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <h6 class="card-title"><i class="bi bi-person-plus-fill text-primary me-2"></i>Prerequisites:</h6>
                                        <p class="card-text">You should have basic computer skills — such as using a text editor, recognizing file types, and managing folders — before diving into HTML.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <h6 class="card-title"><i class="bi bi-people-fill text-primary me-2"></i>Audience:</h6>
                                        <p class="card-text">Both beginners and professionals can benefit from this tutorial. If you're a beginner or you want to polish your HTML skills, this guide will take you step‑by‑step.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="alert alert-warning mt-4">
                        <h5 class="alert-heading"><i class="bi bi-exclamation-triangle-fill"></i> Need Help?</h5>
                        <p class="mb-0">Should you encounter an error or spot something that seems off, feel free to raise it via the contact form in the tutorial platform.</p>
                    </div>
                </div>
            </div>
        </section>

        </article>
    </main>
</div>
</div>
<?php include_file('includes/footer.php'); ?>
       