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


<div class="tutorial-content">
    <section class="mb-5">
        <h2>What is HTML?</h2>
        <p>HTML (HyperText Markup Language) is the standard markup language for creating and structuring web content. It provides the basic building blocks for web pages and applications, allowing you to define the structure and meaning of content on the web.</p>
        
        <h3 class="mt-4">What is HyperText Markup Language?</h3>
        <ul>
            <li><strong>HyperText</strong>: Refers to the way web pages are linked together through hyperlinks, allowing users to navigate between pages.</li>
            <li><strong>Markup</strong>: Refers to the tags and elements used to structure and present content.</li>
            <li><strong>Language</strong>: A standardized system for encoding documents in a format that is both human-readable and machine-readable.</li>
        </ul>
    </section>

    <section class="mb-5">
        <h2>Features of HTML</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-layout-text-window-reverse text-primary me-2"></i>Easy to Learn</h5>
                        <p class="card-text">HTML has a simple and straightforward syntax that's easy to understand and use, even for beginners.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-globe text-primary me-2"></i>Platform Independent</h5>
                        <p class="card-text">HTML works the same way on any operating system (Windows, Mac, Linux) and is supported by all modern web browsers.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-puzzle text-primary me-2"></i>Extensible</h5>
                        <p class="card-text">HTML can be extended with CSS for styling and JavaScript for interactivity, making it highly versatile.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-images text-primary me-2"></i>Multimedia Support</h5>
                        <p class="card-text">HTML5 introduced native support for audio, video, and canvas elements, reducing the need for third-party plugins.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <h2>Limitations of HTML</h2>
        <div class="alert alert-warning">
            <h5 class="alert-heading"><i class="bi bi-exclamation-triangle-fill"></i> Important Limitations</h5>
            <ul class="mb-0">
                <li><strong>Static Pages</strong>: HTML alone can only create static web pages.</li>
                <li><strong>No Programming Logic</strong>: It cannot perform computations or make decisions.</li>
                <li><strong>Browser Compatibility</strong>: Different browsers may render HTML slightly differently.</li>
                <li><strong>Limited Security</strong>: HTML doesn't provide built-in security features.</li>
                <li><strong>Complex Pages Require Additional Technologies</strong>: For dynamic content, you need to use server-side languages or JavaScript.</li>
            </ul>
        </div>
    </section>

    <section class="mb-5">
        <h2>HTML History</h2>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-badge bg-primary"><i class="bi bi-1-circle"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h5 class="timeline-title">1989</h5>
                    </div>
                    <div class="timeline-body">
                        <p>Tim Berners-Lee invents the World Wide Web and creates the first version of HTML.</p>
                    </div>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-badge bg-success"><i class="bi bi-2-circle"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h5 class="timeline-title">1995</h5>
                    </div>
                    <div class="timeline-body">
                        <p>HTML 2.0 is published as an IETF standard.</p>
                    </div>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-badge bg-info"><i class="bi bi-3-circle"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h5 class="timeline-title">1997</h5>
                    </div>
                    <div class="timeline-body">
                        <p>HTML 3.2 is released as a W3C Recommendation.</p>
                    </div>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-badge bg-warning"><i class="bi bi-4-circle"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h5 class="timeline-title">1999</h5>
                    </div>
                    <div class="timeline-body">
                        <p>HTML 4.01 becomes a W3C Recommendation.</p>
                    </div>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-badge bg-danger"><i class="bi bi-5-circle"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h5 class="timeline-title">2014</h5>
                    </div>
                    <div class="timeline-body">
                        <p>HTML5 is published as a W3C Recommendation, introducing many new semantic elements and APIs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <h2>Important Terms</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Web Page</h5>
                        <p class="card-text">A single document on the web that can be displayed in a web browser. It's written in HTML and may include CSS and JavaScript.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Website</h5>
                        <p class="card-text">A collection of related web pages that are linked together and share a common domain name.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Web Browser</h5>
                        <p class="card-text">Software application used to access and view websites (e.g., Chrome, Firefox, Safari, Edge).</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Web Application</h5>
                        <p class="card-text">An interactive program that runs in a web browser and provides functionality similar to desktop applications.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <h2>Understanding Applications</h2>
        <p>An application (or app) is a software program designed to perform specific functions for the user. Here are the main types:</p>
        
        <h4 class="mt-4">1. Web Applications</h4>
        <ul>
            <li>Run in web browsers</li>
            <li>Examples: Gmail, Google Docs, Facebook</li>
            <li>Built with HTML, CSS, JavaScript, and backend technologies</li>
        </ul>
        
        <h4 class="mt-3">2. Desktop Applications</h4>
        <ul>
            <li>Run on a computer's operating system</li>
            <li>Examples: Microsoft Word, Adobe Photoshop</li>
            <li>Built with languages like C++, Java, or .NET</li>
        </ul>
        
        <h4 class="mt-3">3. Mobile Applications</h4>
        <ul>
            <li>Designed for mobile devices</li>
            <li>Examples: Instagram, WhatsApp, Uber</li>
            <li>Built with Swift (iOS), Kotlin (Android), or cross-platform frameworks</li>
        </ul>
        
        <h4 class="mt-3">4. Progressive Web Apps (PWAs)</h4>
        <ul>
            <li>Web applications that can be installed on devices</li>
            <li>Work offline and can send push notifications</li>
            <li>Examples: Twitter Lite, Pinterest, Spotify</li>
        </ul>
    </section>

    <section class="mb-5">
        <h2>HTML Basic Example</h2>
        <div class="card mb-4">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0">Example: Basic HTML Document Structure</h5>
            </div>
            <div class="card-body">
                <pre><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;My First Web Page&lt;/title&gt;
    &lt;style&gt;
        body { font-family: Arial, sans-serif; line-height: 1.6; }
        header { background: #4CAF50; color: white; padding: 1rem; }
        nav { background: #333; padding: 0.5rem; }
        nav a { color: white; margin-right: 1rem; text-decoration: none; }
        main { padding: 1rem; }
        footer { background: #333; color: white; text-align: center; padding: 1rem; }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;header&gt;
        &lt;h1&gt;Welcome to My Website&lt;/h1&gt;
    &lt;/header&gt;
    
    &lt;nav&gt;
        &lt;a href="#home"&gt;Home&lt;/a&gt;
        &lt;a href="#about"&gt;About&lt;/a&gt;
        &lt;a href="#services"&gt;Services&lt;/a&gt;
        &lt;a href="#contact"&gt;Contact&lt;/a&gt;
    &lt;/nav&gt;
    
    &lt;main&gt;
        &lt;section id="home"&gt;
            &lt;h2&gt;Home&lt;/h2&gt;
            &lt;p&gt;This is the home section of our website.&lt;/p&gt;
            &lt;img src="images/welcome.jpg" alt="Welcome Image" style="max-width: 100%;"&gt;
        &lt;/section&gt;
    &lt;/main&gt;
    
    &lt;footer&gt;
        &lt;p&gt;&copy; 2025 My Website. All rights reserved.&lt;/p&gt;
    &lt;/footer&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
            </div>
        </div>

        <h4>Understanding the HTML Document Structure</h4>
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
                <p class="lead">Every HTML document follows a standard structure that helps browsers interpret and display web content correctly. Let's break down the essential components:</p>
                
                <h5 class="mt-4">1. &lt;!DOCTYPE html&gt; Declaration</h5>
                <p>The <code>&lt;!DOCTYPE html&gt;</code> declaration is the first line of an HTML document and serves as an instruction to the web browser about what version of HTML the page is written in. In HTML5, this declaration is simplified to just <code>&lt;!DOCTYPE html&gt;</code>. This declaration is not case sensitive, but it's a best practice to write it in uppercase. It must appear exactly once, at the top of the page, before any HTML tags. This declaration ensures that the browser renders the page in standards mode, which provides the best cross-browser consistency in how the page is displayed. Without it, browsers might render the page in "quirks mode," which can lead to inconsistent display across different browsers.</p>
                
                <h5 class="mt-4">2. &lt;html&gt; Element</h5>
                <p>The <code>&lt;html&gt;</code> element is the root element of an HTML document and serves as the container for all other HTML elements (except for the <code>&lt;!DOCTYPE&gt;</code> declaration). This element tells the browser that this is an HTML document. It typically includes the <code>lang</code> attribute, which specifies the language of the document's content (e.g., <code>lang="en"</code> for English). This is important for accessibility tools and search engines. The <code>&lt;html&gt;</code> element contains two main sections: the <code>&lt;head&gt;</code> section (for metadata) and the <code>&lt;body&gt;</code> section (for content). In HTML5, you can also use the <code>xmlns</code> attribute to specify the XML namespace, though it's not required for HTML5 documents.</p>
                
                <h5 class="mt-4">3. &lt;head&gt; Section</h5>
                <p>The <code>&lt;head&gt;</code> element is a container for metadata (data about data) and is placed between the <code>&lt;html&gt;</code> tag and the <code>&lt;body&gt;</code> tag. This section typically includes:</p>
                <ul>
                    <li><strong>Title</strong>: Specified with the <code>&lt;title&gt;</code> tag, it defines the title of the document shown in the browser's title bar or tab.</li>
                    <li><strong>Character Encoding</strong>: Defined with <code>&lt;meta charset="UTF-8"&gt;</code>, it specifies the character encoding for the document (UTF-8 supports all Unicode characters).</li>
                    <li><strong>Viewport Settings</strong>: The <code>&lt;meta name="viewport"&gt;</code> tag controls the layout on mobile browsers.</li>
                    <li><strong>Links to External Resources</strong>: Such as CSS files (<code>&lt;link rel="stylesheet"&gt;</code>), favicons, and other resources.</li>
                    <li><strong>Scripts</strong>: JavaScript files or code that need to be loaded before the page renders.</li>
                </ul>
                <p>Nothing inside the <code>&lt;head&gt;</code> section is displayed on the web page itself (except for the title, which appears in the browser tab).</p>
                
                <h5 class="mt-4">4. &lt;body&gt; Section</h5>
                <p>The <code>&lt;body&gt;</code> element contains all the contents of an HTML document, such as text, images, hyperlinks, tables, lists, etc. This is the part of the HTML document that is actually displayed in the browser window. The <code>&lt;body&gt;</code> element typically includes several key structural elements:</p>
                <ul>
                    <li><strong>Header</strong> (<code>&lt;header&gt;</code>): Contains introductory content or navigational aids.</li>
                    <li><strong>Navigation</strong> (<code>&lt;nav&gt;</code>): Contains navigation links.</li>
                    <li><strong>Main Content</strong> (<code>&lt;main&gt;</code>): Contains the main content of the document.</li>
                    <li><strong>Sections/Articles</strong> (<code>&lt;section&gt;</code>, <code>&lt;article&gt;</code>): Organize content into logical sections.</li>
                    <li><strong>Footer</strong> (<code>&lt;footer&gt;</code>): Contains footer information like copyright and contact details.</li>
                </ul>
                <p>All visible content should be placed within the <code>&lt;body&gt;</code> tags. Modern HTML5 introduced semantic elements that help define the structure of the document more clearly, making it more accessible to both users and search engines. The proper use of these elements improves SEO and ensures that assistive technologies can better understand and navigate the page structure.</p>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <h2>HTML Tags, Elements, and Attributes</h2>
        
        <h4 class="mt-4">HTML Tags</h4>
        <p>HTML tags are the building blocks of HTML documents. They are enclosed in angle brackets <code>&lt; &gt;</code>.</p>
        <ul>
            <li><strong>Opening Tag</strong>: <code>&lt;tagname&gt;</code></li>
            <li><strong>Closing Tag</strong>: <code>&lt;/tagname&gt;</code></li>
            <li><strong>Self-closing Tag</strong>: <code>&lt;tagname /&gt;</code> or <code>&lt;tagname&gt;</code> (in HTML5)</li>
        </ul>
        
        <h4 class="mt-4">HTML Elements</h4>
        <p>An HTML element is defined by a start tag, content, and an end tag.</p>
        <pre><code class="language-html">&lt;p&gt;This is a paragraph.&lt;/p&gt;
&lt;a href="https://example.com"&gt;This is a link&lt;/a&gt;</code></pre>
        
        <h4 class="mt-4">HTML Attributes</h4>
        <p>Attributes provide additional information about elements and are always specified in the start tag.</p>
        <ul>
            <li><code>class</code>: Specifies one or more class names for an element</li>
            <li><code>id</code>: Specifies a unique id for an element</li>
            <li><code>src</code>: Specifies the source URL of an image or script</li>
            <li><code>href</code>: Specifies the URL of a linked resource</li>
            <li><code>alt</code>: Specifies alternative text for an image</li>
        </ul>
        
        <div class="alert alert-info mt-4">
            <h5 class="alert-heading"><i class="bi bi-lightbulb"></i> Best Practices</h5>
            <ul class="mb-0">
                <li>Always include the <code>lang</code> attribute in the <code>&lt;html&gt;</code> tag</li>
                <li>Use semantic HTML5 elements for better accessibility and SEO</li>
                <li>Always include the <code>alt</code> attribute for images</li>
                <li>Use lowercase for all element and attribute names</li>
                <li>Always quote attribute values</li>
            </ul>
        </div>
    </section>
</div>

<style>
    /* Timeline Styling */
    .timeline {
        position: relative;
        padding: 20px 0;
    }
    .timeline-item {
        position: relative;
        padding-bottom: 30px;
        padding-left: 60px;
    }
    .timeline-badge {
        position: absolute;
        left: 0;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        text-align: center;
        line-height: 40px;
        color: white;
    }
    .timeline-panel {
        position: relative;
        background: #f8f9fa;
        border-radius: 6px;
        padding: 20px;
        box-shadow: 0 1px 6px rgba(0,0,0,0.1);
    }
    .timeline:before {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        left: 20px;
        width: 2px;
        background: #dee2e6;
    }
    .timeline-item:last-child {
        padding-bottom: 0;
    }
    .timeline-title {
        margin-top: 0;
    }
</style>


<?php include_file('includes/footer.php'); ?>