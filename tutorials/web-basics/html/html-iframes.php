<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'Full Stack Master - HTML Iframes';
$page_description = 'Learn how to use HTML iframes to embed content from other sources into your web pages';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<div class="tutorial-content">
    <h1 class="mb-4">HTML Iframes: Embedding Content</h1>
    
    <div class="alert alert-info">
        <i class="fas fa-info-circle me-2"></i>
        Iframes (Inline Frames) allow you to embed another HTML document within the current document. They're commonly used for embedding videos, maps, and other external content.
    </div>

    <section id="basic-iframe" class="mt-5">
        <h2>1. Basic Iframe</h2>
        <p>The simplest way to create an iframe is using the <code>&lt;iframe&gt;</code> tag with a <code>src</code> attribute.</p>
        
        <div class="row">
            <div class="col-md-6">
                <h5>HTML:</h5>
                <pre><code class="language-html">&lt;!-- Basic iframe --&gt;
&lt;iframe 
    src="https://example.com" 
    title="Example Website"
    width="100%" 
    height="300"&gt;
&lt;/iframe&gt;</code></pre>

                <h5 class="mt-3">Attributes:</h5>
                <ul class="list-group mb-3">
                    <li class="list-group-item"><code>src</code> - Specifies the URL of the page to embed</li>
                    <li class="list-group-item"><code>title</code> - Provides an accessible name (required for accessibility)</li>
                    <li class="list-group-item"><code>width</code> / <code>height</code> - Sets dimensions (in pixels or percentage)</li>
                    <li class="list-group-item"><code>name</code> - Names the iframe for targeting with links</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>Result:</h5>
                <div class="border p-3">
                    <iframe 
                        src="https://example.com" 
                        title="Example Website"
                        width="100%" 
                        height="300"
                        class="border">
                    </iframe>
                </div>
                <div class="alert alert-warning mt-3">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <strong>Note:</strong> Some websites may prevent being embedded in iframes using X-Frame-Options or Content Security Policy (CSP) headers.
                </div>
            </div>
        </div>
    </section>

    <section id="youtube-video" class="mt-5">
        <h2>2. Embedding YouTube Videos</h2>
        <p>YouTube provides embed code that uses iframes to display videos on your site.</p>
        
        <div class="row">
            <div class="col-md-6">
                <h5>HTML:</h5>
                <pre><code class="language-html">&lt;iframe 
    width="560" 
    height="315" 
    src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
    title="YouTube video player" 
    frameborder="0" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
    allowfullscreen&gt;
&lt;/iframe&gt;</code></pre>
                
                <h5 class="mt-3">Responsive YouTube Embed:</h5>
                <pre><code class="language-html">&lt;div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;"&gt;
    &lt;iframe 
        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
        src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
        title="YouTube video player" 
        frameborder="0" 
        allowfullscreen&gt;
    &lt;/iframe&gt;
&lt;/div&gt;</code></pre>
            </div>
            <div class="col-md-6">
                <h5>Result (Responsive):</h5>
                <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;" class="border">
                    <iframe 
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="alert alert-info mt-3">
                    <i class="fas fa-info-circle me-2"></i>
                    <strong>Tip:</strong> The responsive technique uses a container with a 16:9 aspect ratio (56.25% padding-bottom) that scales with the viewport width.
                </div>
            </div>
        </div>
    </section>

    <section id="google-maps" class="mt-5">
        <h2>3. Embedding Google Maps</h2>
        <p>Google Maps can be easily embedded using iframes.</p>
        
        <div class="row">
            <div class="col-md-6">
                <h5>HTML:</h5>
                <pre><code class="language-html">&lt;iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.215218288117!2d-73.98784492414752!3d40.74844097192417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b3117469%3A0xd134e199a405a163!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1623456789012!5m2!1sen!2sus" 
    width="600" 
    height="450" 
    style="border:0;" 
    allowfullscreen="" 
    loading="lazy"
    title="Google Maps - Empire State Building"&gt;
&lt;/iframe&gt;</code></pre>
                
                <h5 class="mt-3">How to Get Embed Code:</h5>
                <ol>
                    <li>Go to <a href="https://www.google.com/maps" target="_blank">Google Maps</a></li>
                    <li>Find your location</li>
                    <li>Click the menu (☰) → Share or embed map</li>
                    <li>Select the "Embed a map" tab</li>
                    <li>Copy the HTML code</li>
                </ol>
            </div>
            <div class="col-md-6">
                <h5>Result:</h5>
                <div class="border p-2">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.215218288117!2d-73.98784492414752!3d40.74844097192417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b3117469%3A0xd134e199a405a163!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1623456789012!5m2!1sen!2sus" 
                        width="100%" 
                        height="400" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy"
                        title="Google Maps - Empire State Building">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <section id="advanced-options" class="mt-5">
        <h2>4. Advanced Iframe Options</h2>
        
        <div class="row">
            <div class="col-md-6">
                <h5>Sandbox Attribute</h5>
                <p>Restrict what the iframe can do for security:</p>
                <pre><code class="language-html">&lt;!-- Basic sandbox --&gt;
&lt;iframe 
    src="untrusted.html" 
    sandbox
    title="Sandboxed content"&gt;
&lt;/iframe&gt;

<!-- Allow specific features -->
&lt;iframe 
    src="semi-trusted.html"
    sandbox="allow-forms allow-scripts allow-same-origin"
    title="Partially sandboxed content"&gt;
&lt;/iframe&gt;</code></pre>

                <h5 class="mt-4">Lazy Loading</h5>
                <p>Improve page load performance:</p>
                <pre><code class="language-html">&lt;iframe 
    src="content.html" 
    loading="lazy"
    title="Lazy loaded content"&gt;
&lt;/iframe&gt;</code></pre>
            </div>
            <div class="col-md-6">
                <h5>srcdoc Attribute</h5>
                <p>Embed HTML content directly:</p>
                <pre><code class="language-html">&lt;iframe 
    srcdoc="&lt;h1&gt;Hello, World!&lt;/h1&gt;"
    title="Inline content"
    width="100%"
    height="100"&gt;
&lt;/iframe&gt;</code></pre>

                <div class="card mt-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Iframe Security Best Practices</h5>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Always include a <code>title</code> attribute for accessibility</li>
                            <li>Use <code>sandbox</code> attribute for untrusted content</li>
                            <li>Consider using <code>loading="lazy"</code> for non-critical iframes</li>
                            <li>Be cautious with <code>allow-scripts</code> in sandbox</li>
                            <li>Use <code>referrerpolicy</code> to control referrer information</li>
                            <li>Set appropriate <code>Content-Security-Policy</code> headers</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="iframe-communication" class="mt-5">
        <h2>5. Cross-Origin Communication</h2>
        
        <div class="row">
            <div class="col-md-6">
                <h5>Parent to Iframe</h5>
                <pre><code class="language-html">&lt;!-- Parent page --&gt;
&lt;button onclick="sendToIframe()"&gt;Send Message to Iframe&lt;/button&gt;
&lt;iframe id="myIframe" src="child.html" title="Child Iframe"&gt;&lt;/iframe&gt;

&lt;script&gt;
function sendToIframe() {
    const iframe = document.getElementById('myIframe');
    iframe.contentWindow.postMessage('Hello from parent!', 'https://trusted-origin.com');
}

// Listen for messages from iframe
window.addEventListener('message', (event) => {
    // Verify origin for security
    if (event.origin !== 'https://trusted-origin.com') return;
    
    console.log('Message from iframe:', event.data);
});
&lt;/script&gt;</code></pre>
            </div>
            <div class="col-md-6">
                <h5>Iframe to Parent</h5>
                <pre><code class="language-html">&lt;!-- Inside child.html (in iframe) --&gt;
&lt;button onclick="sendToParent()"&gt;Send to Parent&lt;/button&gt;

&lt;script&gt;
// Send message to parent
function sendToParent() {
    window.parent.postMessage('Hello from iframe!', 'https://parent-origin.com');
}

// Listen for messages from parent
window.addEventListener('message', (event) => {
    // Verify origin for security
    if (event.origin !== 'https://parent-origin.com') return;
    
    console.log('Message from parent:', event.data);
});
&lt;/script&gt;</code></pre>
                
                <div class="alert alert-warning mt-3">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <strong>Security Note:</strong> Always verify the message origin to prevent cross-site scripting (XSS) attacks.
                </div>
            </div>
        </div>
    </section>

    <div class="d-flex justify-content-between mt-5">
        <a href="html-layout.php" class="btn btn-outline-primary">
            <i class="fas fa-arrow-left me-2"></i>Previous: HTML Layout
        </a>
        <a href="html-javascript.php" class="btn btn-primary">
            Next: HTML with JavaScript <i class="fas fa-arrow-right ms-2"></i>
        </a>
    </div>
</div>

<?php include_file('includes/footer.php'); ?>