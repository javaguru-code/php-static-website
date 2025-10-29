<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML5 Audio & Video - Full Stack Master';
$page_description = 'Comprehensive guide to HTML5 Audio and Video elements with examples';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;

// Add external resources
$page_extra_head = '
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism-tomorrow.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js"></script>
<link rel="stylesheet" href="' . $base_url . 'tutorials/web-basics/html/css/audio-video.css">
<script src="' . $base_url . 'tutorials/web-basics/html/js/audio-video.js" defer></script>';

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
                <h1 class="display-4 fw-bold text-primary">HTML5 Audio & Video</h1>
                <p class="lead">A comprehensive guide to embedding and controlling media content in web pages.</p>
            </div>
        </div>

        <!-- Video Element Section -->
        <section class="media-section" id="video-element">
            <h2 class="mb-4">The &lt;video&gt; Element</h2>
            <p>The HTML5 <code>&lt;video&gt;</code> element is used to embed video content in a document.</p>
            
            <div class="example-card">
                <div class="card-header">Basic Video Example</div>
                <div class="card-body">
                    <div class="code-example">
                        <pre><code class="language-html">&lt;video width="640" height="360" controls&gt;
    &lt;source src="video.mp4" type="video/mp4"&gt;
    Your browser does not support the video tag.
&lt;/video&gt;</code></pre>
                    </div>
                    
                    <div class="mt-4">
                        <h5>Output:</h5>
                        <div class="media-container">
                            <video width="100%" controls class="media-preview">
                                <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <h5>Video Attributes:</h5>
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
                                    <td><code>autoplay</code></td>
                                    <td>Start playing automatically</td>
                                    <td>autoplay</td>
                                </tr>
                                <tr>
                                    <td><code>controls</code></td>
                                    <td>Show video controls</td>
                                    <td>controls</td>
                                </tr>
                                <tr>
                                    <td><code>loop</code></td>
                                    <td>Loop the video</td>
                                    <td>loop</td>
                                </tr>
                                <tr>
                                    <td><code>muted</code></td>
                                    <td>Mute the audio</td>
                                    <td>muted</td>
                                </tr>
                                <tr>
                                    <td><code>poster</code></td>
                                    <td>Image shown before video loads</td>
                                    <td>URL of image</td>
                                </tr>
                                <tr>
                                    <td><code>preload</code></td>
                                    <td>How the video should be loaded</td>
                                    <td>auto | metadata | none</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Video with Multiple Sources -->
            <div class="example-card mt-4">
                <div class="card-header">Video with Multiple Sources</div>
                <div class="card-body">
                    <div class="code-example">
                        <pre><code class="language-html">&lt;video width="640" height="360" controls&gt;
    &lt;source src="video.mp4" type="video/mp4"&gt;
    &lt;source src="video.webm" type="video/webm"&gt;
    Your browser does not support the video tag.
&lt;/video&gt;</code></pre>
                    </div>
                    
                    <div class="mt-4">
                        <h5>Output:</h5>
                        <div class="media-container">
                            <video width="100%" controls class="media-preview">
                                <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                <source src="https://www.w3schools.com/html/mov_bbb.ogg" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Audio Element Section -->
        <section class="media-section" id="audio-element">
            <h2 class="mb-4">The &lt;audio&gt; Element</h2>
            <p>The HTML5 <code>&lt;audio&gt;</code> element is used to embed sound content in a document.</p>
            
            <div class="example-card">
                <div class="card-header">Basic Audio Example</div>
                <div class="card-body">
                    <div class="code-example">
                        <pre><code class="language-html">&lt;audio controls&gt;
    &lt;source src="audio.mp3" type="audio/mpeg"&gt;
    Your browser does not support the audio element.
&lt;/audio&gt;</code></pre>
                    </div>
                    
                    <div class="mt-4">
                        <h5>Output:</h5>
                        <div class="media-container">
                            <audio controls class="media-preview">
                                <source src="https://www.w3schools.com/html/horse.mp3" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <h5>Audio Attributes:</h5>
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
                                    <td><code>autoplay</code></td>
                                    <td>Start playing automatically</td>
                                    <td>autoplay</td>
                                </tr>
                                <tr>
                                    <td><code>controls</code></td>
                                    <td>Show audio controls</td>
                                    <td>controls</td>
                                </tr>
                                <tr>
                                    <td><code>loop</code></td>
                                    <td>Loop the audio</td>
                                    <td>loop</td>
                                </tr>
                                <tr>
                                    <td><code>muted</code></td>
                                    <td>Mute the audio</td>
                                    <td>muted</td>
                                </tr>
                                <tr>
                                    <td><code>preload</code></td>
                                    <td>How the audio should be loaded</td>
                                    <td>auto | metadata | none</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- Track Element Section -->
        <section class="media-section" id="track-element">
            <h2 class="mb-4">The &lt;track&gt; Element</h2>
            <p>The <code>&lt;track&gt;</code> element is used to specify text tracks for media elements.</p>
            
            <div class="example-card">
                <div class="card-header">Video with Subtitles</div>
                <div class="card-body">
                    <div class="code-example">
                        <pre><code class="language-html">&lt;video width="640" height="360" controls&gt;
    &lt;source src="video.mp4" type="video/mp4"&gt;
    &lt;track src="subtitles_en.vtt" kind="subtitles" srclang="en" label="English"&gt;
    &lt;track src="subtitles_es.vtt" kind="subtitles" srclang="es" label="Spanish"&gt;
    Your browser does not support the video tag.
&lt;/video&gt;</code></pre>
                    </div>
                    
                    <div class="mt-3">
                        <h5>Track Attributes:</h5>
                        <ul>
                            <li><code>src</code>: URL of the track file (WebVTT format)</li>
                            <li><code>kind</code>: subtitles, captions, descriptions, chapters, or metadata</li>
                            <li><code>srclang</code>: Language of the track text data</li>
                            <li><code>label</code>: Title of the track shown to the user</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Media Events and API -->
        <section class="media-section" id="media-api">
            <h2 class="mb-4">Media Events and JavaScript API</h2>
            <p>Control media elements using JavaScript.</p>
            
            <div class="example-card">
                <div class="card-header">Custom Media Controls</div>
                <div class="card-body">
                    <div class="code-example">
                        <pre><code class="language-html">&lt;video id="customVideo" width="100%"&gt;
    &lt;source src="video.mp4" type="video/mp4"&gt;
    Your browser does not support the video tag.
&lt;/video&gt;
&lt;div class="media-controls"&gt;
    &lt;button class="btn btn-primary me-2" onclick="playPause('customVideo')"&gt;
        &lt;i class="fas fa-play"&gt;&lt;/i&gt; Play/Pause
    &lt;/button&gt;
    &lt;button class="btn btn-secondary me-2" onclick="document.getElementById('customVideo').currentTime += 5"&gt;
        &lt;i class="fas fa-forward"&gt;&lt;/i&gt; +5s
    &lt;/button&gt;
    &lt;button class="btn btn-secondary me-2" onclick="document.getElementById('customVideo').currentTime -= 5"&gt;
        &lt;i class="fas fa-backward"&gt;&lt;/i&gt; -5s
    &lt;/button&gt;
    &lt;input type="range" min="0" max="1" step="0.1" value="1" 
           onchange="document.getElementById('customVideo').volume = this.value"
           class="form-range w-25 d-inline-block align-middle">
&lt;/div&gt;</code></pre>
                    </div>
                    
                    <div class="mt-4">
                        <h5>Output:</h5>
                        <div class="media-container">
                            <video id="customVideo" width="100%" class="media-preview">
                                <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="media-controls">
                                <button class="btn btn-primary me-2" onclick="playPause('customVideo')">
                                    <i class="fas fa-play"></i> Play/Pause
                                </button>
                                <button class="btn btn-secondary me-2" onclick="document.getElementById('customVideo').currentTime += 5">
                                    <i class="fas fa-forward"></i> +5s
                                </button>
                                <button class="btn btn-secondary me-2" onclick="document.getElementById('customVideo').currentTime -= 5">
                                    <i class="fas fa-backward"></i> -5s
                                </button>
                                <input type="range" min="0" max="1" step="0.1" value="1" 
                                       onchange="document.getElementById('customVideo').volume = this.value"
                                       class="form-range w-25 d-inline-block align-middle">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Responsive Media -->
        <section class="media-section" id="responsive-media">
            <h2 class="mb-4">Responsive Media</h2>
            <p>Make your media responsive using CSS.</p>
            
            <div class="example-card">
                <div class="card-header">Responsive Video</div>
                <div class="card-body">
                    <div class="code-example">
                        <pre><code class="language-html">&lt;div class="video-container"&gt;
    &lt;video controls&gt;
        &lt;source src="video.mp4" type="video/mp4"&gt;
        Your browser does not support the video tag.
    &lt;/video&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    
                    <div class="mt-4">
                        <h5>Output:</h5>
                        <div class="video-container">
                            <video controls class="media-preview">
                                <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Best Practices Section -->
        <section class="media-section" id="best-practices">
            <h2 class="mb-4">Best Practices for Audio & Video</h2>
            
            <div class="card mb-4">
                <div class="card-header bg-light">
                    <h5 class="mb-0">1. File Optimization</h5>
                </div>
                <div class="card-body">
                    <ul class="mb-0">
                        <li><strong>Use appropriate formats:</strong> MP4 (H.264) for video and MP3 for audio have the best browser support.</li>
                        <li><strong>Optimize file sizes:</strong> Compress videos without significant quality loss using tools like HandBrake or FFmpeg.</li>
                        <li><strong>Provide multiple sources:</strong> Include WebM and MP4 for video, and OGG and MP3 for audio for better compatibility.</li>
                        <li><strong>Use appropriate dimensions:</strong> Don't use larger dimensions than needed for the display size.</li>
                    </ul>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header bg-light">
                    <h5 class="mb-0">2. Performance Considerations</h5>
                </div>
                <div class="card-body">
                    <ul class="mb-0">
                        <li><strong>Lazy loading:</strong> Use <code>loading="lazy"</code> for offscreen videos.</li>
                        <li><strong>Preload strategically:</strong> Use <code>preload="metadata"</code> or <code>preload="none"</code> for better page load performance.</li>
                        <li><strong>Consider using a CDN:</strong> For better delivery of media files, especially for global audiences.</li>
                        <li><strong>Implement lazy loading:</strong> Only load media when it's about to come into the viewport.</li>
                    </ul>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header bg-light">
                    <h5 class="mb-0">3. Accessibility</h5>
                </div>
                <div class="card-body">
                    <ul class="mb-0">
                        <li><strong>Always provide captions/subtitles:</strong> Use the <code>&lt;track&gt;</code> element for video content.</li>
                        <li><strong>Add transcripts:</strong> Provide text alternatives for audio content.</li>
                        <li><strong>Keyboard navigation:</strong> Ensure all controls are keyboard-accessible.</li>
                        <li><strong>ARIA labels:</strong> Add appropriate ARIA attributes for screen readers.</li>
                        <li><strong>Color contrast:</strong> Ensure text in captions has sufficient contrast.</li>
                    </ul>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header bg-light">
                    <h5 class="mb-0">4. User Experience</h5>
                </div>
                <div class="card-body">
                    <ul class="mb-0">
                        <li><strong>Show duration:</strong> Always display the total duration of the media.</li>
                        <li><strong>Provide custom controls:</strong> For a consistent experience across browsers.</li>
                        <li><strong>Show loading states:</strong> Indicate when media is buffering.</li>
                        <li><strong>Responsive design:</strong> Ensure media scales properly on all devices.</li>
                        <li><strong>Autoplay carefully:</strong> If using autoplay, ensure it's muted and consider the user's data preferences.</li>
                    </ul>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header bg-light">
                    <h5 class="mb-0">5. SEO Optimization</h5>
                </div>
                <div class="card-body">
                    <ul class="mb-0">
                        <li><strong>Use semantic HTML:</strong> Properly structure your media elements.</li>
                        <li><strong>Add schema markup:</strong> Use VideoObject schema for better search engine understanding.</li>
                        <li><strong>Provide text alternatives:</strong> Include transcripts and descriptions.</li>
                        <li><strong>Optimize file names:</strong> Use descriptive, keyword-rich file names.</li>
                        <li><strong>Create a video sitemap:</strong> Helps search engines discover your video content.</li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-header bg-light">
                    <h5 class="mb-0">6. Advanced Techniques</h5>
                </div>
                <div class="card-body">
                    <ul class="mb-0">
                        <li><strong>Adaptive streaming:</strong> Implement HLS or DASH for better quality streaming.</li>
                        <li><strong>Offline support:</strong> Use Service Workers to cache media for offline viewing.</li>
                        <li><strong>Background playback:</strong> Use the Web Audio API for background audio in mobile apps.</li>
                        <li><strong>Media Session API:</strong> Enhance media controls in mobile browsers and devices.</li>
                        <li><strong>Analytics:</strong> Track media engagement with events like play, pause, and complete.</li>
                    </ul>
                </div>
            </div>
        </section>
    </article>
</main>

<!-- JavaScript for custom controls -->
<script>
// Play/Pause function
function playPause(mediaId) {
    const media = document.getElementById(mediaId);
    const button = event?.target.closest('button');
    
    if (media) {
        if (media.paused) {
            media.play();
            if (button) {
                const icon = button.querySelector('i');
                if (icon) icon.className = 'fas fa-pause';
            }
        } else {
            media.pause();
            if (button) {
                const icon = button.querySelector('i');
                if (icon) icon.className = 'fas fa-play';
            }
        }
    }
}

// Update time display
function updateTime(media, timeElement) {
    if (timeElement) {
        const minutes = Math.floor(media.currentTime / 60);
        const seconds = Math.floor(media.currentTime % 60);
        timeElement.textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
    }
}

// Initialize media elements
document.addEventListener('DOMContentLoaded', function() {
    // Add event listeners to all media elements
    document.querySelectorAll('video, audio').forEach(media => {
        // Add play/pause event listeners
        media.addEventListener('play', function() {
            this.classList.add('playing');
        });
        
        media.addEventListener('pause', function() {
            this.classList.remove('playing');
        });
        
        // Handle keyboard controls
        media.addEventListener('keydown', function(e) {
            if (e.code === 'Space') {
                e.preventDefault();
                if (this.paused) {
                    this.play();
                } else {
                    this.pause();
                }
            }
        });
    });
});
</script>

<?php include_file('includes/footer.php'); ?>