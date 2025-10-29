<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML YouTube Embeds - Full Stack Master';
$page_description = 'Comprehensive guide to embedding and customizing YouTube videos with HTML, including iframe parameters, responsive design, and accessibility.';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;

// Add external resources
$page_extra_head = '
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism-tomorrow.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js"></script>
<link rel="stylesheet" href="' . $base_url . 'tutorials/web-basics/html/css/audio-video.css">';

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
                <h1 class="display-4 fw-bold text-primary">YouTube Video Embeds</h1>
                <p class="lead">A comprehensive guide to embedding and customizing YouTube videos in your web pages.</p>
            </div>
        </div>

        <!-- Basic Embed Section -->
        <section class="media-section" id="basic-embed">
            <h2 class="mb-4">Basic YouTube Embed</h2>
            <p>The simplest way to embed a YouTube video using an iframe:</p>
            
            <div class="example-card">
                <div class="card-header">Basic YouTube Iframe</div>
                <div class="card-body">
                    <div class="code-example">
                        <pre><code class="language-html">&lt;div class="video-container"&gt;
    &lt;iframe 
        width="560" 
        height="315" 
        src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
        title="YouTube video player" 
        frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen&gt;
    &lt;/iframe&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    
                    <div class="mt-4">
                        <h5>Output:</h5>
                        <div class="video-container youtube-container">
                            <iframe 
                                src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                                title="YouTube video player" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <h5>Iframe Attributes Explained:</h5>
                        <table class="attribute-table">
                            <thead>
                                <tr>
                                    <th>Attribute</th>
                                    <th>Description</th>
                                    <th>Values</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>src</code></td>
                                    <td>YouTube video URL with embed code</td>
                                    <td>https://www.youtube.com/embed/VIDEO_ID</td>
                                </tr>
                                <tr>
                                    <td><code>width</code></td>
                                    <td>Width of the video player</td>
                                    <td>Number in pixels (e.g., 560)</td>
                                </tr>
                                <tr>
                                    <td><code>height</code></td>
                                    <td>Height of the video player</td>
                                    <td>Number in pixels (e.g., 315)</td>
                                </tr>
                                <tr>
                                    <td><code>title</code></td>
                                    <td>Accessibility title for the iframe</td>
                                    <td>Descriptive text</td>
                                </tr>
                                <tr>
                                    <td><code>allow</code></td>
                                    <td>Permissions for the iframe</td>
                                    <td>accelerometer, autoplay, clipboard-write, etc.</td>
                                </tr>
                                <tr>
                                    <td><code>allowfullscreen</code></td>
                                    <td>Enables fullscreen mode</td>
                                    <td>Boolean attribute</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- Privacy-Enhanced Mode -->
        <section class="media-section" id="privacy-mode">
            <h2 class="mb-4">Privacy-Enhanced Mode</h2>
            <p>Use YouTube's privacy-enhanced mode to prevent cookies from being set on the user's computer until they click the video.</p>
            
            <div class="example-card">
                <div class="card-header">Privacy-Enhanced YouTube Embed</div>
                <div class="card-body">
                    <div class="code-example">
                        <pre><code class="language-html">&lt;div class="video-container youtube-container"&gt;
    &lt;iframe 
        src="https://www.youtube-nocookie.com/embed/dQw4w9WgXcQ" 
        title="YouTube video player" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen&gt;
    &lt;/iframe&gt;
&lt;/div&gt;</code></pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- Responsive YouTube Embeds -->
        <section class="media-section" id="responsive-embeds">
            <h2 class="mb-4">Responsive YouTube Embeds</h2>
            <p>Make your YouTube embeds responsive using CSS to ensure they work well on all devices.</p>
            
            <div class="example-card">
                <div class="card-header">Responsive YouTube Embed</div>
                <div class="card-body">
                    <div class="code-example">
                        <pre><code class="language-html">&lt;style&gt;
.video-container {
    position: relative;
    padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
    height: 0;
    overflow: hidden;
    max-width: 100%;
}

.video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
}
&lt;/style&gt;

&lt;div class="video-container youtube-container"&gt;
    &lt;iframe 
        src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
        title="YouTube video player" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen&gt;
    &lt;/iframe&gt;
&lt;/div&gt;</code></pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- YouTube URL Parameters -->
        <section class="media-section" id="url-parameters">
            <h2 class="mb-4">YouTube URL Parameters</h2>
            <p>Customize the YouTube player using URL parameters.</p>
            
            <div class="example-card">
                <div class="card-header">Common URL Parameters</div>
                <div class="card-body">
                    <table class="attribute-table">
                        <thead>
                            <tr>
                                <th>Parameter</th>
                                <th>Description</th>
                                <th>Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>autoplay</code></td>
                                <td>Automatically start the video</td>
                                <td><code>?autoplay=1</code></td>
                            </tr>
                            <tr>
                                <td><code>mute</code></td>
                                <td>Mute the video by default</td>
                                <td><code>?mute=1</code></td>
                            </tr>
                            <tr>
                                <td><code>loop</code></td>
                                <td>Loop the video</td>
                                <td><code>?loop=1</code></td>
                            </tr>
                            <tr>
                                <td><code>controls</code></td>
                                <td>Show player controls (0 or 1)</td>
                                <td><code>?controls=0</code></td>
                            </tr>
                            <tr>
                                <td><code>start</code></td>
                                <td>Start the video at a specific time (in seconds)</td>
                                <td><code>?start=45</code></td>
                            </tr>
                            <tr>
                                <td><code>end</code></td>
                                <td>End the video at a specific time (in seconds)</td>
                                <td><code>?end=120</code></td>
                            </tr>
                            <tr>
                                <td><code>rel</code></td>
                                <td>Show related videos (0 or 1)</td>
                                <td><code>?rel=0</code></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Playlist Embed -->
        <section class="media-section" id="playlist-embed">
            <h2 class="mb-4">Playlist Embed</h2>
            <p>Embed a YouTube playlist using the playlist parameter.</p>
            
            <div class="example-card">
                <div class="card-header">YouTube Playlist Embed</div>
                <div class="card-body">
                    <div class="code-example">
                        <pre><code class="language-html">&lt;div class="video-container"&gt;
    &lt;iframe 
        width="560" 
        height="315" 
        src="https://www.youtube.com/embed/videoseries?list=PLx0sYbCqOb8TBPRdmBHs5Iftvv9TPboYG" 
        title="YouTube playlist player" 
        frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen&gt;
    &lt;/iframe&gt;
&lt;/div&gt;</code></pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- Accessibility Best Practices -->
        <section class="media-section" id="accessibility">
            <h2 class="mb-4">Accessibility Best Practices</h2>
            
            <div class="card mb-4">
                <div class="card-header bg-light">
                    <h5 class="mb-0">Accessibility Guidelines</h5>
                </div>
                <div class="card-body">
                    <ul>
                        <li><strong>Always include a title:</strong> The <code>title</code> attribute is essential for screen readers.</li>
                        <li><strong>Provide captions:</strong> Ensure your videos have accurate captions.</li>
                        <li><strong>Keyboard navigation:</strong> Ensure all controls are keyboard-accessible.</li>
                        <li><strong>Transcripts:</strong> Provide a transcript for users who can't access the video.</li>
                        <li><strong>Color contrast:</strong> Ensure any text in the video has sufficient contrast.</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Performance Considerations -->
        <section class="media-section" id="performance">
            <h2 class="mb-4">Performance Considerations</h2>
            
            <div class="card">
                <div class="card-header bg-light">
                    <h5 class="mb-0">Optimizing YouTube Embeds</h5>
                </div>
                <div class="card-body">
                    <ul>
                        <li><strong>Lazy loading:</strong> Use <code>loading="lazy"</code> on iframes to defer loading.</li>
                        <li><strong>Thumbnail preview:</strong> Show a thumbnail image first, then load the iframe on click.</li>
                        <li><strong>Minimize autoplay:</strong> Avoid autoplaying videos, especially with sound.</li>
                        <li><strong>Consider the lite-youtube-embed library:</strong> For better performance, use a lightweight alternative.</li>
                    </ul>
                </div>
            </div>
        </section>
    </article>
</main>

<!-- JavaScript for interactive examples -->
<script>
// Example of programmatic control
function loadVideo(videoId, elementId) {
    const container = document.getElementById(elementId);
    container.innerHTML = `
        <div class="video-container">
            <iframe 
                width="560" 
                height="315" 
                src="https://www.youtube.com/embed/${videoId}?autoplay=1" 
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
        </div>
    `;
}
</script>

<?php include_file('includes/footer.php'); ?>