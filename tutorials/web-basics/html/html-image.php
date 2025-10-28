<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML Images - Full Stack Master';
$page_description = 'Comprehensive guide to HTML images, including responsive images, figure elements, and best practices for web development';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;

// Add external CSS and JS files
$page_extra_head = '
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism-tomorrow.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/components/prism-markup-templating.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="' . $base_url . 'tutorials/web-basics/html/css/tutorial-styles.css">
<link rel="stylesheet" href="' . $base_url . 'tutorials/web-basics/html/css/html-image.css">';

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
        <h1 class="mb-4">HTML Images</h1>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4">Understanding HTML Images</h2>
                <p>The HTML <code>&lt;img&gt;</code> tag is used to embed images in web pages. It's a self-closing tag that contains attributes but no content.</p>
                
                <div class="alert alert-info">
                    <h5 class="alert-heading">Key Attributes:</h5>
                    <ul class="mb-0">
                        <li><code>src</code> - Specifies the path to the image (required)</li>
                        <li><code>alt</code> - Provides alternative text for screen readers (required for accessibility)</li>
                        <li><code>width</code> and <code>height</code> - Define the image dimensions</li>
                        <li><code>title</code> - Provides additional information on hover</li>
                    </ul>
                </div>
                
                <h3 class="h5 mt-4">Basic Image Example</h3>
                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h4 class="h6 mb-0">HTML Code:</h4>
                        <button class="btn btn-sm btn-outline-secondary copy-btn" data-bs-toggle="tooltip" title="Copy code">
                            <i class="bi bi-clipboard me-1"></i> Copy
                        </button>
                    </div>
                    <div class="code-snippet mb-4">
                        <pre><code class="language-html">&lt;!-- Basic image with alt text --&gt;
&lt;img src="images/example.jpg" alt="A beautiful landscape"&gt;

<!-- Image with dimensions -->
&lt;img src="images/example.jpg" alt="Landscape" width="800" height="600"&gt;

<!-- Image with title (hover text) -->
&lt;img src="images/example.jpg" alt="Mountain view" title="Beautiful mountain landscape"&gt;</code></pre>
                    </div>
                    
                    <h4 class="h6 mb-2">Live Example:</h4>
                        <div class="img-container">
                            <img src="https://images.pexels.com/photos/302804/pexels-photo-302804.jpeg" alt="Beautiful mountain landscape" class="img-example" title="Mountain landscape" width="400" height="300">
                            <p class="text-muted mt-2 mb-0">Hover over the image to see the title text</p>
                        </div>
                </div>
                
                <h3 class="h5 mt-4">Responsive Images</h3>
                <p>Make images responsive using Bootstrap classes or CSS. Always set <code>max-width: 100%</code> and <code>height: auto</code> to prevent overflow.</p>
                
                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h4 class="h6 mb-0">HTML Code:</h4>
                        <button class="btn btn-sm btn-outline-secondary copy-btn" data-bs-toggle="tooltip" title="Copy code">
                            <i class="bi bi-clipboard me-1"></i> Copy
                        </button>
                    </div>
                    <div class="code-snippet mb-4">
                        <pre><code class="language-html">&lt;!-- Using Bootstrap class for responsive images --&gt;
&lt;img src="images/large.jpg" alt="Responsive image" class="img-fluid"&gt;

<!-- Using inline CSS --&gt;
&lt;img src="images/large.jpg" alt="Responsive image" class="img-fluid"&gt;

<!-- Responsive image with different sources --&gt;
&lt;picture&gt;
    &lt;source media="(min-width: 1200px)" srcset="large.jpg">
    &lt;source media="(min-width: 768px)" srcset="medium.jpg">
    &lt;img src="small.jpg" alt="Responsive image" class="img-fluid"&gt;
&lt;/picture&gt;</code></pre>
                    </div>
                    
                    <h4 class="h6 mb-2">Live Example:</h4>
                        <div class="img-container">
                            <img src="https://images.pexels.com/photos/417074/pexels-photo-417074.jpeg" alt="Mountain landscape at sunset" class="img-fluid rounded" loading="lazy">
                            <p class="text-muted mt-2 mb-0">This image will scale with the viewport width</p>
                        </div>
                </div>
                
                <h3 class="h5 mt-4">Image Alignment and Styling</h3>
                <p>Use Bootstrap classes or CSS to align and style your images:</p>
                
                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h4 class="h6 mb-0">HTML Code:</h4>
                        <button class="btn btn-sm btn-outline-secondary copy-btn" data-bs-toggle="tooltip" title="Copy code">
                            <i class="bi bi-clipboard me-1"></i> Copy
                        </button>
                    </div>
                    <div class="code-snippet mb-4">
                        <pre><code class="language-html">&lt;!-- Centered image --&gt;
&lt;div class="text-center"&gt;
    &lt;img src="image.jpg" alt="Centered image" class="img-fluid"&gt;
&lt;/div&gt;

<!-- Rounded image -->
&lt;img src="image.jpg" alt="Rounded image" class="rounded"&gt;

<!-- Circular image (must be square) -->
&lt;img src="avatar.jpg" alt="Profile" class="rounded-circle" width="150" height="150"&gt;

<!-- Image with border -->
&lt;img src="image.jpg" alt="Bordered image" class="img-thumbnail"&gt;</code></pre>
                    </div>
                    
                    <h4 class="h6 mb-2">Live Example:</h4>
                        <div class="text-center mb-3">
                            <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg" alt="Profile picture" class="img-thumbnail rounded-circle d-inline-block" width="100" height="100" loading="lazy">
                        </div>
                        <div class="d-flex justify-content-between">
                            <img src="https://images.pexels.com/photos/268533/pexels-photo-268533.jpeg" alt="Mountain lake" class="rounded me-2" width="100" height="100" loading="lazy">
                            <img src="https://images.pexels.com/photos/1323550/pexels-photo-1323550.jpeg" alt="Ocean wave" class="rounded-circle me-2" width="100" height="100" loading="lazy">
                            <img src="https://images.pexels.com/photos/2662116/pexels-photo-2662116.jpeg" alt="Mountain range" class="img-thumbnail" width="100" height="100" loading="lazy">
                        </div>
                </div>
                
                <h3 class="h5 mt-4">Figure and Figcaption</h3>
                <p>Use the <code>&lt;figure&gt;</code> element to mark up photos, diagrams, illustrations, etc., with an optional <code>&lt;figcaption&gt;</code>.</p>
                
                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h4 class="h6 mb-0">HTML Code:</h4>
                        <button class="btn btn-sm btn-outline-secondary copy-btn" data-bs-toggle="tooltip" title="Copy code">
                            <i class="bi bi-clipboard me-1"></i> Copy
                        </button>
                    </div>
                    <div class="code-snippet mb-4">
                        <pre><code class="language-html">&lt;figure class="figure"&gt;
    &lt;img src="image.jpg" class="figure-img img-fluid rounded" alt="A beautiful landscape"&gt;
    &lt;figcaption class="figure-caption"&gt;A beautiful landscape with mountains and a lake.&lt;/figcaption&gt;
&lt;/figure&gt;

<!-- Right-aligned figure with smaller text -->
&lt;figure class="figure float-end ms-3" class="figure figure-float"&gt;
    &lt;img src="image.jpg" class="figure-img img-fluid" alt="Example"&gt;
    &lt;figcaption class="figure-caption text-end"&gt;Right-aligned figure.&lt;/figcaption&gt;
&lt;/figure&gt;</code></pre>
                    </div>
                    
                    <h4 class="h6 mb-2">Live Example:</h4>
                        <figure class="figure">
                            <img src="https://images.pexels.com/photos/4171485/pexels-photo-4171485.jpeg" class="figure-img img-fluid rounded" alt="Mountain landscape with lake" loading="lazy">
                            <figcaption class="figure-caption">This is an example of a figure with a caption below the image.</figcaption>
                        </figure>
                </div>
                
                <h3 class="h5 mt-4">Image Maps</h3>
                <p>Create clickable areas on an image using the <code>&lt;map&gt;</code> and <code>&lt;area&gt;</code> elements.</p>
                
                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h4 class="h6 mb-0">HTML Code:</h4>
                        <button class="btn btn-sm btn-outline-secondary copy-btn" data-bs-toggle="tooltip" title="Copy code">
                            <i class="bi bi-clipboard me-1"></i> Copy
                        </button>
                    </div>
                    <div class="code-snippet mb-4">
                        <pre><code class="language-html">&lt;img src="workplace.jpg" alt="Workplace" usemap="#workmap" width="400" height="379"&gt;

&lt;map name="workmap"&gt;
    &lt;area shape="rect" coords="34,44,270,350" alt="Computer" href="computer.htm"&gt;
    &lt;area shape="rect" coords="290,172,333,250" alt="Phone" href="phone.htm"&gt;
    &lt;area shape="circle" coords="337,300,44" alt="Coffee" href="coffee.htm"&gt;
&lt;/map&gt;</code></pre>
                    </div>
                    
                    <h4 class="h6 mb-2">Live Example:</h4>
                        <div class="img-container">
                            <img src="https://images.pexels.com/photos/380769/pexels-photo-380769.jpeg" alt="Office workspace with computer" usemap="#workmap" class="img-fluid rounded">
                            <map name="workmap">
                                <area shape="rect" coords="34,44,270,350" alt="Computer" href="#" onclick="alert('Computer clicked!'); return false;">
                                <area shape="rect" coords="290,172,333,250" alt="Phone" href="#" onclick="alert('Phone clicked!'); return false;">
                                <area shape="circle" coords="337,300,44" alt="Coffee" href="#" onclick="alert('Coffee clicked!'); return false;">
                            </map>
                            <p class="text-muted mt-2 mb-0">Click on the computer, phone, or coffee cup to see the effect</p>
                        </div>
                </div>
                
                <h3 class="h5 mt-4">Downloading Images</h3>
                <p>There are several ways to allow users to download images from your website. Here are the most common methods:</p>
                
                <div class="mb-4">
                    <h4 class="h5 mb-3">1. Using the download attribute</h4>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="h6 mb-0">HTML Code:</h5>
                        <button class="btn btn-sm btn-outline-secondary copy-btn" data-bs-toggle="tooltip" title="Copy code">
                            <i class="bi bi-clipboard me-1"></i> Copy
                        </button>
                    </div>
                    <div class="code-snippet mb-4">
                        <pre><code class="language-html">&lt;!-- Basic download --&gt;
&lt;a href="images/photo.jpg" download&gt;
    &lt;img src="images/photo-thumb.jpg" alt="Download this image"&gt;
&lt;/a&gt;

<!-- With custom filename -->
&lt;a href="images/photo.jpg" download="custom-filename.jpg"&gt;
    Download with custom filename
&lt;/a&gt;

<!-- Download button with icon -->
&lt;a href="images/photo.jpg" download class="btn btn-primary"&gt;
    &lt;i class="fas fa-download me-2"&gt;&lt;/i&gt;Download Image
&lt;/a&gt;</code></pre>
                    </div>
                    
                    <h4 class="h6 mb-2">Live Example:</h4>
                        <div class="p-3 border rounded text-center">
                            <img src="https://images.pexels.com/photos/3225517/pexels-photo-3225517.jpeg" alt="Mountain landscape with lake" class="img-fluid rounded mb-3" loading="lazy">
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="https://via.placeholder.com/300x200" download class="btn btn-primary btn-sm">
                                    <i class="fas fa-download me-1"></i>Download
                                </a>
                                <a href="https://via.placeholder.com/300x200" download="custom-image.jpg" class="btn btn-outline-secondary btn-sm">
                                    <i class="fas fa-file-download me-1"></i>Save As
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-12">
                        <h4 class="h6">2. Using JavaScript</h4>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h5 class="h6 mb-0">HTML & JavaScript Code:</h5>
                            <button class="btn btn-sm btn-outline-secondary copy-btn" data-bs-toggle="tooltip" title="Copy code">
                                <i class="bi bi-clipboard me-1"></i> Copy
                            </button>
                        </div>
                        <div class="code-snippet mb-4">
                            <pre><code class="language-html">&lt;button onclick="downloadImage('https://example.com/image.jpg', 'my-image.jpg')"&gt;
    Download with JavaScript
&lt;/button&gt;

&lt;script&gt;
function downloadImage(url, filename) {
    // Create a temporary anchor element
    const a = document.createElement('a');
    a.href = url;
    a.download = filename || 'downloaded-image.jpg';
    
    // Trigger the download
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}
&lt;/script&gt;</code></pre>
                        </div>
                        <div class="example-output">
                            <button onclick="downloadImage('https://via.placeholder.com/300x200', 'my-image.jpg')">Download with JavaScript</button>
                        </div>
                    </div>
                </div>

                <div class="alert alert-info">
                    <h5 class="alert-heading">Important Notes:</h5>
                    <ul class="mb-0">
                        <li>The <code>download</code> attribute works for same-origin URLs or <code>blob:</code> and <code>data:</code> URLs</li>
                        <li>For cross-origin images, you'll need to use a server-side solution or convert the image to a data URL</li>
                        <li>Always provide alternative text and proper labels for download buttons</li>
                        <li>Consider the file size when allowing downloads - offer different resolutions if needed</li>
                    </ul>
                </div>

                <h3 class="h5 mt-4">Lazy Loading Images</h3>
                <p>Improve page load performance by lazy loading images that are not in the viewport.</p>
                
                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h4 class="h6 mb-0">HTML Code:</h4>
                        <button class="btn btn-sm btn-outline-secondary copy-btn" data-bs-toggle="tooltip" title="Copy code">
                            <i class="bi bi-clipboard me-1"></i> Copy
                        </button>
                    </div>
                    <div class="code-snippet mb-4">
                        <pre><code class="language-html">&lt;!-- Native lazy loading (modern browsers) --&gt;
&lt;img src="image.jpg" loading="lazy" alt="Lazy loaded image"&gt;

<!-- Lazy loading with fallback -->
&lt;img 
    src="placeholder.jpg" 
    data-src="actual-image.jpg" 
    alt="Lazy loaded with fallback" 
    class="lazyload"
    loading="lazy"
&gt;

<!-- Using Intersection Observer API for older browsers -->
&lt;script&gt;
    document.addEventListener("DOMContentLoaded", function() {
        const lazyImages = [].slice.call(document.querySelectorAll("img.lazyload"));
        
        if ("IntersectionObserver" in window) {
            let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        let lazyImage = entry.target;
                        lazyImage.src = lazyImage.dataset.src;
                        lazyImage.classList.remove("lazyload");
                        lazyImageObserver.unobserve(lazyImage);
                    }
                });
            });

            lazyImages.forEach(function(lazyImage) {
                lazyImageObserver.observe(lazyImage);
            });
        }
    });
&lt;/script&gt;</code></pre>
                    </div>
                    
                    <h4 class="h6 mb-2">Live Example:</h4>
                        <div class="example-output">
                            <img src="https://via.placeholder.com/300x200" alt="Lazy loaded image" loading="lazy">
                            <p class="small text-muted mt-2 mb-0">This image will be lazy loaded when it comes into view.</p>
                        </div>
                </div>
        margin: 1rem;
        padding: 0.5rem;
        background: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 0.25rem;
    }
    
    .text-wrap {
        text-align: justify;
    }
&lt;/style&gt;

&lt;div class="text-wrap"&gt;
    &lt;img src="image.jpg" alt="Wrapped text" class="spaced-image float-start me-3"&gt;
    &lt;p&gt;This text wraps around the image with proper spacing...&lt;/p&gt;
&lt;/div&gt;

<!-- Using CSS Grid for image galleries -->
&lt;div class="image-gallery"&gt;
    &lt;img src="image1.jpg" alt="Gallery item 1"&gt;
    &lt;img src="image2.jpg" alt="Gallery item 2"&gt;
    &lt;img src="image3.jpg" alt="Gallery item 3"&gt;
&lt;/div&gt;

&lt;style&gt;
    .image-gallery {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 1rem;
        margin: 1rem 0;
    }
    
    .image-gallery img {
        width: 100%;
        height: auto;
        border-radius: 0.25rem;
        transition: transform 0.3s ease;
    }
    
    .image-gallery img:hover {
        transform: scale(1.03);
    }
&lt;/style&gt;</code></pre>
                    </div>
                    <div class="col-md-6">
                        <h4 class="h6">Spacing Techniques:</h4>
                        <ul>
                            <li><strong>Margin</strong>: Use <code>m-*</code> (Bootstrap) or <code>margin</code> (CSS) for outer spacing</li>
                            <li><strong>Padding</strong>: Use <code>p-*</code> (Bootstrap) or <code>padding</code> (CSS) for inner spacing</li>
                            <li><strong>Gap</strong>: Use <code>gap-*</code> (Bootstrap) or <code>gap</code> (CSS Grid/Flexbox) for consistent spacing between items</li>
                            <li><strong>Flexbox/Grid</strong>: Use modern layout methods for precise control over image positioning</li>
                        </ul>
                        
                        <div class="mt-3 p-3 border rounded">
                            <h5 class="h6">Live Example:</h5>
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://images.pexels.com/photos/1239291/pexels-photo-1239291.jpeg" alt="Mountain lake" class="rounded me-3" width="80" loading="lazy">
                                <p class="mb-0">This image has margin on the right (<code>me-3</code>) and is vertically centered with flexbox.</p>
                            </div>
                            
                            <div class="d-grid gap-3" class="image-grid">
                                <img src="https://images.pexels.com/photos/2387418/pexels-photo-2387418.jpeg" alt="Mountain peak" class="img-thumbnail" loading="lazy">
                                <img src="https://images.pexels.com/photos/1287145/pexels-photo-1287145.jpeg" alt="Forest path" class="img-thumbnail" loading="lazy">
                                <img src="https://images.pexels.com/photos/210205/pexels-photo-210205.jpeg" alt="Desert landscape" class="img-thumbnail" loading="lazy">
                            </div>
                            <p class="small text-muted mt-2 mb-0">Image gallery with consistent spacing using CSS Grid</p>
                        </div>
                    </div>
                </div>

                <h3 class="h5 mt-4">Image Optimization Checklist</h3>
            </div>
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check1" checked>
                    <label class="form-check-label" for="check1">
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check2" checked>
                    <label class="form-check-label" for="check2">
                        Compress images without significant quality loss
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check3">
                    <label class="form-check-label" for="check3">
                        Use responsive images with srcset and sizes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check4">
                    <label class="form-check-label" for="check4">
                        Implement lazy loading for below-the-fold images
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check5">
                    <label class="form-check-label" for="check5">
                        Use descriptive alt text for accessibility
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check6">
                    <label class="form-check-label" for="check6">
                        Specify width and height to prevent layout shifts
                    </label>
                </div>
            </div>
        </div>
        
        <div class="alert alert-success">
            <h5 class="alert-heading">Remember:</h5>
            <p class="mb-0">Images are a crucial part of web design, but they can also significantly impact your site's performance. Always optimize your images and use modern techniques like responsive images and lazy loading to ensure fast loading times and a good user experience.</p>
        </div>
    </section>
</div>

<?php include_file('includes/footer.php'); ?>