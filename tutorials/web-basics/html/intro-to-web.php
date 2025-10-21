<?php
// Include config first to get helper functions
require_once __DIR__ . '/../../../includes/config.php';

$page_title = 'Intro to the Web - HTML Tutorial';
$page_description = 'Learn the fundamentals of how the web works, including the request/response cycle and setting up your development environment.';

// Use the base URL from environment
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;

// Load page content definition
$content = include __DIR__ . '/_content/intro-to-web-content.php';

// Include header and sidebar using the base directory
include_file('includes/header.php');
include_file('tutorials/web-basics/html/sidebar.php');
?>

<div class="offcanvas offcanvas-start d-lg-none" id="tutorialSidebar" tabindex="-1">
    <div class="offcanvas-header">
<h5 class="offcanvas-title"><i class="bi bi-globe"></i> HTML Tutorial</h5>
        <button class="btn-close" data-bs-dismiss="offcanvas" type="button"></button>
    </div>
    <div class="offcanvas-body">
        <nav class="nav flex-column">
            <a class="nav-link active" data-bs-dismiss="offcanvas" href="#introduction">Introduction</a>
            <a class="nav-link" data-bs-dismiss="offcanvas" href="#what-is-html">What is HTML?</a>
            <a class="nav-link" data-bs-dismiss="offcanvas" href="#html-example">HTML Example</a>
            <a class="nav-link" data-bs-dismiss="offcanvas" href="#why-learn-html">Why Learn HTML?</a>
        </nav>
    </div>
</div>

<main class="col-lg-9 pt-3 px-lg-4">
    <div class="d-lg-none mb-3">
        <button class="btn btn-primary" data-bs-target="#tutorialSidebar" data-bs-toggle="offcanvas">
            <i class="bi bi-list"></i> Menu
        </button>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="display-4 fw-bold text-primary"><?= $content['sections']['intro']['title'] ?? 'Intro to the Web' ?></h1>
            <p class="lead"><?= $content['sections']['intro']['content'] ?? 'Learn the fundamentals of how the web works' ?></p>
        </div>
    </div>

    <!-- Introduction Section -->
    <div class="card shadow-sm mb-5 border-0">
        <div class="card-body p-4">
            <p class="lead mb-4">To navigate this space successfully—and to build websites and web applications yourself—it's essential to understand what the web is, how it works under the hood, and what tools are involved. This section provides a foundation covering key concepts that will help you become a proficient web developer.</p>
            
            <div class="alert alert-info">
                <h5 class="alert-heading"><i class="bi bi-lightbulb"></i> What You'll Learn</h5>
                <ul class="mb-0">
                    <li>How the web works through the request/response cycle</li>
                    <li>The difference between front-end and back-end development</li>
                    <li>The roles of core web technologies (HTML, CSS, JavaScript)</li>
                    <li>How to set up your development environment</li>
                </ul>
            </div>
        </div>
    </div>

            <!-- Main Content Sections -->
    <?php foreach ($content['sections'] as $sectionId => $section): ?>
        <?php if (isset($section['subsections'])): ?>
            <?php foreach ($section['subsections'] as $subsection): ?>
                <section id="<?= strtolower(str_replace(' ', '-', $subsection['title'])) ?>" class="mb-5">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-primary text-white">
                            <h2 class="h4 mb-0"><?= $subsection['title'] ?></h2>
                        </div>
                        <div class="card-body">
                            <?php if (!empty($subsection['content'])): ?>
                                <p><?= $subsection['content'] ?></p>
                            <?php endif; ?>
                            
                            <?php if (!empty($subsection['points'])): ?>
                                <ul class="mb-4">
                                    <?php foreach ($subsection['points'] as $point): ?>
                                        <li><?= $point ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                            
                            <?php if (!empty($subsection['code'])): ?>
                                <div class="code-block mb-4">
                                    <pre><code class="language-<?= $subsection['code_lang'] ?? 'html' ?>"><?= htmlspecialchars(trim($subsection['code'])) ?></code></pre>
                                </div>
                            <?php endif; ?>
                            
                            <?php if (!empty($subsection['steps'])): ?>
                                <ol class="mb-4">
                                    <?php foreach ($subsection['steps'] as $step): ?>
                                        <li><?= $step ?></li>
                                    <?php endforeach; ?>
                                </ol>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
            <?php endforeach; ?>
        <?php endif; ?>
    <?php endforeach; ?>

    <!-- Navigation Buttons -->
    <div class="d-flex justify-content-between mt-5 mb-4">
        <a href="<?= $base_url ?>tutorials/web-basics/html/" class="btn btn-outline-primary">
            <i class="bi bi-arrow-left"></i> Back to Home
        </a>
        <a href="<?= $base_url ?>tutorials/web-basics/html/html-basics" class="btn btn-primary">
            Next: HTML Basics <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</main>

</div>
</div>
<?php include_file('includes/footer.php'); ?>
