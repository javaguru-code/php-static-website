<?php
$page_title = '{PAGE_TITLE} - Full Stack Master';
$page_description = 'Full Stack Master - Programming Tutorials';
$base_url = '../../../';
$css_path = '../../../';
$js_path = '../../../';
include '../../../includes/header.php';
?>




    <!-- Navigation will be added by sync_navbars.py -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <aside class="col-lg-3 d-none d-lg-block sidebar-nav p-0">
                <div class="sticky-top pt-3 sticky-sidebar">
                    <div class="sidebar-content px-3">
                        <h5 class="sidebar-title mb-3"><i class="bi-globe"></i> HTML</h5>
                        <!-- HTML Home -->
                        <nav class="nav flex-column">
                            <a class="nav-link {HOME_ACTIVE}" href="index">
                                <i class="bi bi-house"></i> Home
                            </a>
                        </nav>

                        <!-- HTML Fundamentals -->
                        <nav class="nav flex-column">
                            <a class="nav-link {BASICS_ACTIVE}" href="html-basics"><i class="bi bi-code"></i> HTML Basics & Structure</a>
                            <a class="nav-link {ELEMENTS_ACTIVE}" href="html-elements">HTML Elements</a>
                            <a class="nav-link {ATTRIBUTES_ACTIVE}" href="html-attributes">HTML Attributes</a>
                            <a class="nav-link {COMMENTS_ACTIVE}" href="html-comments">HTML Comments</a>
                        </nav>

                        <!-- Text & Content -->
                        <nav class="nav flex-column">
                            <a class="nav-link {HEADINGS_ACTIVE}" href="headings-paragraphs"><i class="bi bi-text-left"></i> Headings & Paragraphs</a>
                            <a class="nav-link {TEXT_ACTIVE}" href="text-formatting">Text Formatting</a>
                            <a class="nav-link {LISTS_ACTIVE}" href="lists">HTML Lists</a>
                            <a class="nav-link {IMAGES_ACTIVE}" href="images">Images</a>
                            <a class="nav-link {LINKS_ACTIVE}" href="links">Links</a>
                            <a class="nav-link {TABLES_ACTIVE}" href="tables">Tables</a>
                        </nav>

                        <!-- Forms & Input -->
                        <nav class="nav flex-column">
                            <a class="nav-link {FORMS_ACTIVE}" href="forms"><i class="bi bi-ui-checks"></i> HTML Forms</a>
                            <a class="nav-link {INPUT_ACTIVE}" href="input-types">Input Types</a>
                            <a class="nav-link {FORMELEMENTS_ACTIVE}" href="form-elements">Form Elements</a>
                            <a class="nav-link {VALIDATION_ACTIVE}" href="form-validation">Form Validation</a>
                        </nav>

                        <!-- Media & Graphics -->
                        <nav class="nav flex-column">
                            <a class="nav-link {MEDIA_ACTIVE}" href="audio-video"><i class="bi bi-play-circle"></i> Audio & Video</a>
                            <a class="nav-link {CANVAS_ACTIVE}" href="canvas-svg">Canvas & SVG</a>
                            <a class="nav-link {RESPONSIVE_IMAGES_ACTIVE}" href="responsive-images">Responsive Images</a>
                        </nav>

                        <!-- HTML5 Features -->
                        <nav class="nav flex-column">
                            <a class="nav-link {SEMANTIC_ACTIVE}" href="semantic-elements"><i class="bi bi-code-square"></i> Semantic Elements</a>
                            <a class="nav-link {HTML5API_ACTIVE}" href="html5-api">HTML5 APIs</a>
                            <a class="nav-link {STORAGE_ACTIVE}" href="local-storage">Local Storage</a>
                            <a class="nav-link {GEO_ACTIVE}" href="geolocation">Geolocation</a>
                        </nav>

                        <!-- Responsive Design -->
                        <nav class="nav flex-column">
                            <a class="nav-link {MEDIA_QUERIES_ACTIVE}" href="media-queries"><i class="bi bi-phone"></i> Media Queries</a>
                            <a class="nav-link {FLEXBOX_ACTIVE}" href="flexbox">Flexbox</a>
                            <a class="nav-link {GRID_ACTIVE}" href="grid">CSS Grid</a>
                            <a class="nav-link {RESPONSIVE_TYPE_ACTIVE}" href="responsive-typography">Responsive Typography</a>
                        </nav>

                        <!-- Accessibility -->
                        <nav class="nav flex-column">
                            <a class="nav-link {ARIA_ACTIVE}" href="aria"><i class="bi bi-universal-access"></i> ARIA</a>
                            <a class="nav-link {SEMANTIC_HTML_ACTIVE}" href="semantic-html">Semantic HTML</a>
                            <a class="nav-link {KEYBOARD_ACTIVE}" href="keyboard-navigation">Keyboard Navigation</a>
                        </nav>

                        <!-- SEO Best Practices -->
                        <nav class="nav flex-column">
                            <a class="nav-link {META_ACTIVE}" href="meta-tags"><i class="bi bi-search"></i> Meta Tags</a>
                            <a class="nav-link {SEMANTIC_SEO_ACTIVE}" href="semantic-seo">Semantic SEO</a>
                            <a class="nav-link {SITEMAP_ACTIVE}" href="sitemap">Sitemaps</a>
                        </nav>
                    </div>
                </div>
            </aside>

            <!-- Mobile Sidebar -->
            <div class="offcanvas offcanvas-start d-lg-none" id="tutorialSidebar" tabindex="-1">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title"><i class="bi-globe"></i> HTML</h5>
                    <button class="btn-close" data-bs-dismiss="offcanvas" type="button"></button>
                </div>
                <div class="offcanvas-body">
                    <!-- Mobile sidebar content will be synced by the script -->
                </div>
            </div>

            <!-- Main Content -->
            <main class="col-lg-9 pt-3 px-lg-4">
                <div class="d-lg-none mb-3">
                    <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#tutorialSidebar">
                        <i class="bi bi-list"></i> Menu
                    </button>
                </div>
                
                <article class="tutorial-content">
                    <h1>{PAGE_TITLE}</h1>
                    <div class="lead mb-4">
                        {PAGE_DESCRIPTION}
                    </div>

                    <section>
                        <h2>Overview</h2>
                        <p>
                            {OVERVIEW_CONTENT}
                        </p>
                    </section>

                    <!-- Code example section -->
                    <section class="mt-4">
                        <h2>Examples</h2>
                        <pre><code class="language-html">
{CODE_EXAMPLE}
                        </code></pre>
                    </section>

                    <!-- Best practices section -->
                    <section class="mt-4">
                        <h2>Best Practices</h2>
                        <ul>
                            {BEST_PRACTICES}
                        </ul>
                    </section>
                </article>

                <!-- Navigation buttons -->
                <div class="d-flex justify-content-between mt-5">
                    <a href="{PREV_PAGE}" class="btn btn-outline-primary">
                        <i class="bi bi-arrow-left"></i> Previous
                    </a>
                    <a href="{NEXT_PAGE}" class="btn btn-outline-primary">
                        Next <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </main>
        </div>
    </div>

    <!-- Footer -->
    

    <!-- Scripts -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/xml/xml.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/javascript/javascript.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/css/css.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/addon/edit/closetag.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/addon/edit/closebrackets.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/addon/edit/matchbrackets.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-html.min.js"></script>
    <script src="../../../js/theme-toggle.js"></script>
    <script src="../../../js/navigation.js"></script>
    <script src="../../../js/code-runner.js"></script>


<?php include '../../../includes/footer.php'; ?>
