<?php
// Include config
require_once __DIR__ . '/../../../includes/config.php';

$page_title = 'CSS Tutorial - Full Stack Master';
$page_description = 'Master CSS from basics to advanced with practical examples and modern techniques.';

// Base paths
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;

// Header and sidebar
include_file('includes/header.php');
include_file('tutorials/web-basics/css/sidebar.php');
?>

<main class="col-9 col-lg-9 pt-3 px-lg-4">

    <!-- Hero Section -->
    <section class="hero-section py-4">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12">
                    <h1 class="display-5 fw-bold mb-2">
                        <i class="bi bi-filetype-css text-primary"></i> CSS Tutorial
                    </h1>
                    <p class="lead mb-3">Learn to style beautiful, responsive web pages with modern CSS.</p>
                    <a class="btn btn-primary btn-sm" href="<?= $base_url ?>tutorials/web-basics/css/css-introduction">
                        Start Learning <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Topics Grid (from home.php) -->
    <section class="py-3">
        <div class="container-fluid">
            <h2 class="h4 mb-3">CSS Topics</h2>
            <div class="row g-3">
                <!-- Basics -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><i class="bi bi-book text-primary"></i> CSS Basics</h5>
                            <ul class="list-unstyled mb-0">
                                <li><a href="<?= $base_url ?>tutorials/web-basics/css/css-introduction" class="text-decoration-none">CSS Introduction</a></li>
                                <li><a href="<?= $base_url ?>tutorials/web-basics/css/what-is-css" class="text-decoration-none">What is CSS</a></li>
                                <li><a href="<?= $base_url ?>tutorials/web-basics/css/css-syntax" class="text-decoration-none">CSS Syntax</a></li>
                                <li><a href="<?= $base_url ?>tutorials/web-basics/css/css-selector" class="text-decoration-none">CSS Selectors</a></li>
                                <li><a href="<?= $base_url ?>tutorials/web-basics/css/how-to-add-css" class="text-decoration-none">How to Add CSS</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Typography -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><i class="bi bi-fonts text-success"></i> Text & Typography</h5>
                            <ul class="list-unstyled mb-0">
                                <li><a href="<?= $base_url ?>tutorials/web-basics/css/css-font" class="text-decoration-none">CSS Font</a></li>
                                <li><a href="<?= $base_url ?>tutorials/web-basics/css/css-font-size" class="text-decoration-none">Font Size</a></li>
                                <li><a href="<?= $base_url ?>tutorials/web-basics/css/css-font-family" class="text-decoration-none">Font Family</a></li>
                                <li><a href="<?= $base_url ?>tutorials/web-basics/css/css-text-align" class="text-decoration-none">Text Align</a></li>
                                <li><a href="<?= $base_url ?>tutorials/web-basics/css/css-text-decoration" class="text-decoration-none">Text Decoration</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Box model -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><i class="bi bi-box text-warning"></i> Box Model & Layout</h5>
                            <ul class="list-unstyled mb-0">
                                <li><a href="<?= $base_url ?>tutorials/web-basics/css/css-box-model" class="text-decoration-none">Box Model</a></li>
                                <li><a href="<?= $base_url ?>tutorials/web-basics/css/css-margin" class="text-decoration-none">Margin</a></li>
                                <li><a href="<?= $base_url ?>tutorials/web-basics/css/css-padding" class="text-decoration-none">Padding</a></li>
                                <li><a href="<?= $base_url ?>tutorials/web-basics/css/css-border" class="text-decoration-none">Border</a></li>
                                <li><a href="<?= $base_url ?>tutorials/web-basics/css/css-grid" class="text-decoration-none">CSS Grid</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
</div>
</div>

<?php include_file('includes/footer.php'); ?>
