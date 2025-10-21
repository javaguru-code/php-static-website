<?php
$page_title = 'Color Scheme Reference - FS Master';
$page_description = 'Full Stack Master - Programming Tutorials';
$base_url = '';
$css_path = '';
$js_path = '';
include 'includes/header.php';
?>




    <div class="container py-5">
        <h1 class="text-center mb-5">FS Master Color Scheme Reference</h1>
        
        <!-- Gradient Demos -->
        <section class="mb-5">
            <h2>Hero Section Gradients</h2>
            
            <h3 class="h4 mt-4 mb-3">Light Mode Gradient</h3>
            <div class="gradient-demo" style="background: linear-gradient(135deg, #08495e 0%, #86f0ec 25%, #2d8ded 50%, #9d2ded 100%);">
                Beautiful Gradient Background
            </div>
            
            <h3 class="h4 mt-5 mb-3">Dark Mode Gradient</h3>
            <div class="gradient-demo" style="background: linear-gradient(135deg, #000000 0%, #0a0a0a 25%, #1a1a1a 50%, #000000 100%);">
                Elegant Black Background
            </div>
        </section>

        <!-- Individual Colors -->
        <section class="mb-5">
            <h2 class="mb-4">Background Gradient Colors</h2>
            <div class="row g-3">
                <div class="col-md-3">
                    <div class="color-box" style="background: #08495e;">
                        #08495e<br><small>Deep Teal</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="color-box" style="background: #86f0ec;">
                        #86f0ec<br><small>Bright Cyan</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="color-box" style="background: #2d8ded;">
                        #2d8ded<br><small>Vibrant Blue</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="color-box" style="background: #9d2ded;">
                        #9d2ded<br><small>Purple Magenta</small>
                    </div>
                </div>
            </div>
        </section>

        <!-- Accent Colors -->
        <section class="mb-5">
            <h2 class="mb-4">Accent Colors (Text, Headings, Buttons)</h2>
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="color-box" style="background: #fa1ed2;">
                        #fa1ed2<br><small>Hot Pink</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="color-box" style="background: #f28ab4;">
                        #f28ab4<br><small>Soft Pink</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="color-box" style="background: #d9071c;">
                        #d9071c<br><small>Crimson Red</small>
                    </div>
                </div>
            </div>
        </section>

        <!-- Accent Gradient -->
        <section class="mb-5">
            <h2 class="mb-4">Accent Gradient (Buttons & Headings)</h2>
            <div class="gradient-demo" style="background: linear-gradient(135deg, #fa1ed2, #d9071c);">
                Pink to Red Gradient
            </div>
        </section>

        <!-- Component Examples -->
        <section class="mb-5">
            <h2 class="mb-4">Component Examples</h2>
            
            <h3 class="h4 mb-3">Headings</h3>
            <h1>Heading 1 with Gradient</h1>
            <h2>Heading 2 with Gradient</h2>
            <h3>Heading 3 with Gradient</h3>
            
            <h3 class="h4 mt-5 mb-3">Buttons</h3>
            <button class="btn btn-primary me-2 mb-2">Primary Button</button>
            <button class="btn btn-outline-primary mb-2">Outline Button</button>
            
            <h3 class="h4 mt-5 mb-3">Cards</h3>
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="card hover-lift">
                        <div class="card-body">
                            <div class="text-primary mb-2">
                                <i class="bi bi-palette" style="font-size: 2rem;"></i>
                            </div>
                            <h5 class="card-title">Card Title</h5>
                            <p class="card-text">This card has hover effects with gradient border.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card hover-lift">
                        <div class="card-body">
                            <div class="text-success mb-2">
                                <i class="bi bi-code-square" style="font-size: 2rem;"></i>
                            </div>
                            <h5 class="card-title">Another Card</h5>
                            <p class="card-text">Hover to see the gradient border animation.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card hover-lift">
                        <div class="card-body">
                            <div class="text-danger mb-2">
                                <i class="bi bi-star-fill" style="font-size: 2rem;"></i>
                            </div>
                            <h5 class="card-title">Featured Card</h5>
                            <p class="card-text">Beautiful cards with vibrant accents.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <h3 class="h4 mt-5 mb-3">Links</h3>
            <p>This is a paragraph with <a href="#">a link that changes color on hover</a>.</p>
            
            <h3 class="h4 mt-5 mb-3">Code Blocks</h3>
            <div class="code-block-wrapper">
                <div class="code-block-header"><span class="code-language">CSS</span> Example</div>
                <pre><code>background: linear-gradient(135deg, #fa1ed2, #d9071c);</code></pre>
            </div>
            
            <h3 class="h4 mt-5 mb-3">Inline Code</h3>
            <p>Use the <code>color</code> property to apply styles.</p>
            
            <h3 class="h4 mt-5 mb-3">Alerts</h3>
            <div class="alert alert-info">
                <i class="bi bi-info-circle"></i> This is an info alert with gradient background.
            </div>
            <div class="alert alert-warning">
                <i class="bi bi-exclamation-triangle"></i> This is a warning alert with gradient background.
            </div>
        </section>

        <!-- Theme Toggle -->
        <section class="mb-5 text-center">
            <h2 class="mb-4">Theme Toggle</h2>
            <button id="themeToggle" class="btn btn-outline-secondary btn-lg">
                <i class="bi bi-moon-stars theme-icon-dark"></i>
                <i class="bi bi-sun theme-icon-light"></i>
                Toggle Dark Mode
            </button>
        </section>
    </div>

    
    


<?php include 'includes/footer.php'; ?>
