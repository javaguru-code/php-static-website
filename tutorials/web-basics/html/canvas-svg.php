<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'Canvas and SVG - Full Stack Master';
$page_description = 'Learn how to use HTML5 Canvas and SVG together to create rich, interactive graphics for the web.';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;

// Add external resources
$page_extra_head = '
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism-tomorrow.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js"></script>
<link rel="stylesheet" href="' . $base_url . 'tutorials/web-basics/html/css/audio-video.css">
<style>
    .canvas-container, .svg-container {
        border: 1px solid #ddd;
        margin: 1rem 0;
        border-radius: 4px;
        overflow: hidden;
    }
    canvas, svg {
        display: block;
        background: #fff;
    }
    .code-tabs {
        margin: 1.5rem 0;
    }
    .tab-buttons {
        display: flex;
        margin-bottom: -1px;
    }
    .tab-btn {
        padding: 0.5rem 1rem;
        background: #f8f9fa;
        border: 1px solid #dee2e6;
        border-bottom: none;
        cursor: pointer;
        border-radius: 4px 4px 0 0;
        margin-right: 4px;
    }
    .tab-btn.active {
        background: #fff;
        border-bottom: 1px solid #fff;
    }
    .tab-content {
        display: none;
        padding: 1rem;
        border: 1px solid #dee2e6;
        border-radius: 0 0 4px 4px;
        background: #fff;
    }
    .tab-content.active {
        display: block;
    }
    .example-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.5rem;
        margin: 1.5rem 0;
    }
    @media (max-width: 768px) {
        .example-grid {
            grid-template-columns: 1fr;
        }
    }
</style>';

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
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="display-4 fw-bold text-primary">Canvas and SVG</h1>
                <p class="lead">A comprehensive guide to using HTML5 Canvas and SVG together for rich, interactive web graphics.</p>
            </div>
        </div>

        <!-- Introduction -->
        <section class="media-section" id="introduction">
            <h2 class="mb-4">Introduction to Canvas and SVG</h2>
            <p>HTML5 Canvas and SVG are both powerful technologies for creating graphics on the web, each with its own strengths and use cases. This guide will show you how to use them together effectively.</p>
            
            <div class="alert alert-info">
                <i class="bi bi-info-circle-fill me-2"></i>
                <strong>Canvas vs SVG:</strong> Canvas is pixel-based and best for game graphics, image manipulation, and complex animations. SVG is vector-based and ideal for scalable, interactive graphics that need to be resolution-independent.
            </div>
        </section>

        <!-- Basic Canvas Example -->
        <section class="media-section" id="canvas-basics">
            <h2 class="mb-4">Basic Canvas</h2>
            
            <div class="example-card">
                <div class="card-header">HTML5 Canvas Example</div>
                <div class="card-body">
                    <div class="canvas-container">
                        <canvas id="basicCanvas" width="500" height="200"></canvas>
                    </div>
                    
                    <div class="code-tabs">
                        <div class="tab-buttons">
                            <button class="tab-btn active" data-tab="html">HTML</button>
                            <button class="tab-btn" data-tab="js">JavaScript</button>
                        </div>
                        <div class="tab-content active" id="html-tab">
                            <pre><code class="language-html">&lt;canvas id="basicCanvas" width="500" height="200"&gt;&lt;/canvas&gt;</code></pre>
                        </div>
                        <div class="tab-content" id="js-tab">
                            <pre><code class="language-javascript">const canvas = document.getElementById('basicCanvas');
const ctx = canvas.getContext('2d');

// Draw a rectangle
ctx.fillStyle = '#2b5797';
ctx.fillRect(50, 50, 100, 100);

// Draw a circle
ctx.beginPath();
ctx.arc(300, 100, 50, 0, Math.PI * 2);
ctx.fillStyle = '#e74c3c';
ctx.fill();
ctx.closePath();

// Draw text
ctx.font = '24px Arial';
ctx.fillStyle = '#333';
ctx.fillText('Hello Canvas!', 50, 160);</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Basic SVG Example -->
        <section class="media-section" id="svg-basics">
            <h2 class="mb-4">Basic SVG</h2>
            
            <div class="example-card">
                <div class="card-header">SVG Example</div>
                <div class="card-body">
                    <div class="svg-container">
                        <svg width="500" height="200" viewBox="0 0 500 200" xmlns="http://www.w3.org/2000/svg">
                            <!-- Rectangle -->
                            <rect x="50" y="50" width="100" height="100" fill="#2b5797" />
                            
                            <!-- Circle -->
                            <circle cx="300" cy="100" r="50" fill="#e74c3c" />
                            
                            <!-- Text -->
                            <text x="50" y="160" font-family="Arial" font-size="24" fill="#333">
                                Hello SVG!
                            </text>
                        </svg>
                    </div>
                    
                    <div class="code-tabs">
                        <div class="tab-buttons">
                            <button class="tab-btn active" data-tab="svg-html">SVG</button>
                        </div>
                        <div class="tab-content active" id="svg-html-tab">
                            <pre><code class="language-html">&lt;svg width="500" height="200" viewBox="0 0 500 200"&gt;
    &lt;!-- Rectangle --&gt;
    &lt;rect x="50" y="50" width="100" height="100" fill="#2b5797" /&gt;
    
    &lt;!-- Circle --&gt;
    &lt;circle cx="300" cy="100" r="50" fill="#e74c3c" /&gt;
    
    &lt;!-- Text --&gt;
    &lt;text x="50" y="160" font-family="Arial" font-size="24" fill="#333"&gt;
        Hello SVG!
    &lt;/text&gt;
&lt;/svg&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Canvas and SVG Together -->
        <section class="media-section" id="canvas-svg-together">
            <h2 class="mb-4">Using Canvas and SVG Together</h2>
            <p>You can combine the power of both Canvas and SVG in the same application. Here are some approaches:</p>
            
            <h3 class="mt-4">1. SVG as an Image Source for Canvas</h3>
            <div class="example-card">
                <div class="card-body">
                    <div class="canvas-container">
                        <canvas id="svgOnCanvas" width="500" height="200"></canvas>
                    </div>
                    
                    <div class="code-tabs">
                        <div class="tab-buttons">
                            <button class="tab-btn active" data-tab="svg-canvas-html">HTML</button>
                            <button class="tab-btn" data-tab="svg-canvas-js">JavaScript</button>
                            <button class="tab-btn" data-tab="svg-canvas-svg">SVG</button>
                        </div>
                        <div class="tab-content active" id="svg-canvas-html-tab">
                            <pre><code class="language-html">&lt;canvas id="svgOnCanvas" width="500" height="200"&gt;&lt;/canvas&gt;

&lt;!-- Hidden SVG --&gt;
&lt;svg id="svgSource" style="display: none;"&gt;
    &lt;circle cx="50" cy="50" r="40" fill="#3498db" /&gt;
    &lt;rect x="120" y="10" width="80" height="80" fill="#e74c3c" /&gt;
    &lt;polygon points="250,10 290,90 210,90" fill="#2ecc71" /&gt;
&lt;/svg&gt;</code></pre>
                        </div>
                        <div class="tab-content" id="svg-canvas-js-tab">
                            <pre><code class="language-javascript">const canvas = document.getElementById('svgOnCanvas');
const ctx = canvas.getContext('2d');

// Get the SVG element
const svg = document.getElementById('svgSource');

// Create a new Image
const img = new Image();

// Convert SVG to data URL
const svgData = new XMLSerializer().serializeToString(svg);
const svgBlob = new Blob([svgData], {type: 'image/svg+xml;charset=utf-8'});
const url = URL.createObjectURL(svgBlob);

// When the image loads, draw it on canvas
img.onload = function() {
    ctx.drawImage(img, 0, 0);
    
    // Add canvas drawing on top
    ctx.font = '16px Arial';
    ctx.fillStyle = '#333';
    ctx.fillText('SVG drawn on Canvas', 50, 150);
    
    // Clean up
    URL.revokeObjectURL(url);
};

// Set the image source to the SVG data URL
img.src = url;</code></pre>
                        </div>
                        <div class="tab-content" id="svg-canvas-svg-tab">
                            <pre><code class="language-xml">&lt;svg id="svgSource"&gt;
    &lt;circle cx="50" cy="50" r="40" fill="#3498db" /&gt;
    &lt;rect x="120" y="10" width="80" height="80" fill="#e74c3c" /&gt;
    &lt;polygon points="250,10 290,90 210,90" fill="#2ecc71" /&gt;
&lt;/svg&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="mt-5">2. Canvas as an SVG Image</h3>
            <div class="example-card">
                <div class="card-body">
                    <div class="svg-container">
                        <svg width="500" height="200" viewBox="0 0 500 200" xmlns="http://www.w3.org/2000/svg">
                            <text x="10" y="30" font-family="Arial" font-size="16" fill="#333">SVG with Canvas embedded:</text>
                            <foreignObject x="10" y="40" width="480" height="150">
                                <canvas id="canvasForSvg" width="480" height="150" style="display: block;"></canvas>
                            </foreignObject>
                        </svg>
                    </div>
                    
                    <div class="code-tabs">
                        <div class="tab-buttons">
                            <button class="tab-btn active" data-tab="canvas-svg-html">HTML/SVG</button>
                            <button class="tab-btn" data-tab="canvas-svg-js">JavaScript</button>
                        </div>
                        <div class="tab-content active" id="canvas-svg-html-tab">
                            <pre><code class="language-html">&lt;svg width="500" height="200" viewBox="0 0 500 200"&gt;
    &lt;text x="10" y="30" font-family="Arial" font-size="16"&gt;
        SVG with Canvas embedded:
    &lt;/text&gt;
    &lt;foreignObject x="10" y="40" width="480" height="150"&gt;
        &lt;canvas id="canvasForSvg" width="480" height="150"&gt;&lt;/canvas&gt;
    &lt;/foreignObject&gt;
&lt;/svg&gt;</code></pre>
                        </div>
                        <div class="tab-content" id="canvas-svg-js-tab">
                            <pre><code class="language-javascript">// Get the canvas and its context
const canvas = document.getElementById('canvasForSvg');
const ctx = canvas.getContext('2d');

// Set canvas size to match its display size
canvas.width = canvas.offsetWidth;
canvas.height = canvas.offsetHeight;

// Draw on the canvas
ctx.fillStyle = '#f8f9fa';
ctx.fillRect(0, 0, canvas.width, canvas.height);

// Draw shapes
ctx.fillStyle = '#3498db';
ctx.fillRect(20, 20, 100, 60);

ctx.beginPath();
ctx.arc(200, 50, 30, 0, Math.PI * 2);
ctx.fillStyle = '#e74c3c';
ctx.fill();
ctx.closePath();

// Draw text
ctx.font = '16px Arial';
ctx.fillStyle = '#333';
ctx.fillText('Canvas inside SVG!', 250, 50);</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Performance Considerations -->
        <section class="media-section" id="performance">
            <h2 class="mb-4">Performance Considerations</h2>
            
            <div class="alert alert-warning">
                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                <strong>Performance Tip:</strong> Canvas is generally better for complex animations and image manipulation, while SVG is better for interactive, scalable graphics with many individual elements.
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <h4>When to use Canvas:</h4>
                    <ul>
                        <li>Pixel manipulation and image processing</li>
                        <li>Complex animations with many objects</li>
                        <li>Games and data visualization with many elements</li>
                        <li>When you need to work with the pixel data directly</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4>When to use SVG:</h4>
                    <ul>
                        <li>Scalable vector graphics that need to look sharp at any size</li>
                        <li>Interactive charts and diagrams</li>
                        <li>When you need DOM events on individual graphic elements</li>
                        <li>When you need to animate individual parts of a graphic</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Conclusion -->
        <section class="media-section" id="conclusion">
            <h2 class="mb-4">Conclusion</h2>
            <p>Both Canvas and SVG are powerful tools for creating graphics on the web, and they can be used together to create rich, interactive experiences. By understanding the strengths of each technology, you can choose the right tool for the job or combine them for even more powerful solutions.</p>
            
            <div class="alert alert-success">
                <i class="bi bi-lightbulb-fill me-2"></i>
                <strong>Pro Tip:</strong> For complex applications, consider using libraries like D3.js (for SVG) or PixiJS (for Canvas) to simplify development and improve performance.
            </div>
            
            <div class="mt-4">
                <h3>Additional Resources</h3>
                <ul>
                    <li><a href="https://developer.mozilla.org/en-US/docs/Web/API/Canvas_API" target="_blank">MDN Canvas API</a></li>
                    <li><a href="https://developer.mozilla.org/en-US/docs/Web/SVG" target="_blank">MDN SVG</a></li>
                    <li><a href="https://d3js.org/" target="_blank">D3.js - Data-Driven Documents</a></li>
                    <li><a href="https://pixijs.com/" target="_blank">PixiJS - The HTML5 Creation Engine</a></li>
                </ul>
            </div>
        </section>
    </article>
</main>

<script>
// Initialize code tabs
const tabButtons = document.querySelectorAll('.tab-btn');
tabButtons.forEach(button => {
    button.addEventListener('click', () => {
        const tabId = button.getAttribute('data-tab');
        const parent = button.closest('.code-tabs');
        
        // Remove active class from all buttons and content in this tab group
        parent.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
        parent.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
        
        // Add active class to clicked button and corresponding content
        button.classList.add('active');
        document.getElementById(`${tabId}-tab`).classList.add('active');
    });
});

// Initialize canvas examples when the page loads
document.addEventListener('DOMContentLoaded', function() {
    // Basic Canvas Example
    const basicCanvas = document.getElementById('basicCanvas');
    if (basicCanvas) {
        const ctx = basicCanvas.getContext('2d');
        
        // Draw a rectangle
        ctx.fillStyle = '#2b5797';
        ctx.fillRect(50, 50, 100, 100);
        
        // Draw a circle
        ctx.beginPath();
        ctx.arc(300, 100, 50, 0, Math.PI * 2);
        ctx.fillStyle = '#e74c3c';
        ctx.fill();
        ctx.closePath();
        
        // Draw text
        ctx.font = '24px Arial';
        ctx.fillStyle = '#333';
        ctx.fillText('Hello Canvas!', 50, 160);
    }
    
    // SVG on Canvas Example
    const svgOnCanvas = document.getElementById('svgOnCanvas');
    if (svgOnCanvas) {
        const ctx = svgOnCanvas.getContext('2d');
        
        // Get the SVG element
        const svg = document.getElementById('svgSource');
        
        // Create a new Image
        const img = new Image();
        
        // Convert SVG to data URL
        const svgData = new XMLSerializer().serializeToString(svg);
        const svgBlob = new Blob([svgData], {type: 'image/svg+xml;charset=utf-8'});
        const url = URL.createObjectURL(svgBlob);
        
        // When the image loads, draw it on canvas
        img.onload = function() {
            ctx.drawImage(img, 0, 0);
            
            // Add canvas drawing on top
            ctx.font = '16px Arial';
            ctx.fillStyle = '#333';
            ctx.fillText('SVG drawn on Canvas', 50, 150);
            
            // Clean up
            URL.revokeObjectURL(url);
        };
        
        // Set the image source to the SVG data URL
        img.src = url;
    }
    
    // Canvas in SVG Example
    const canvasForSvg = document.getElementById('canvasForSvg');
    if (canvasForSvg) {
        const ctx = canvasForSvg.getContext('2d');
        
        // Set canvas size to match its display size
        canvasForSvg.width = canvasForSvg.offsetWidth;
        canvasForSvg.height = canvasForSvg.offsetHeight;
        
        // Draw on the canvas
        ctx.fillStyle = '#f8f9fa';
        ctx.fillRect(0, 0, canvasForSvg.width, canvasForSvg.height);
        
        // Draw shapes
        ctx.fillStyle = '#3498db';
        ctx.fillRect(20, 20, 100, 60);
        
        ctx.beginPath();
        ctx.arc(200, 50, 30, 0, Math.PI * 2);
        ctx.fillStyle = '#e74c3c';
        ctx.fill();
        ctx.closePath();
        
        // Draw text
        ctx.font = '16px Arial';
        ctx.fillStyle = '#333';
        ctx.fillText('Canvas inside SVG!', 250, 50);
    }
});
</script>

<?php include_file('includes/footer.php'); ?>