<?php
http_response_code(404);
$page_title = '404 - Page Not Found';
$page_description = 'The page you are looking for could not be found.';
include 'includes/header.php';
?>

    <main class="container my-5">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-1 fw-bold text-primary">404</h1>
                <h2 class="mb-4">Page Not Found</h2>
                <p class="lead mb-4">
                    Sorry, the page you are looking for doesn't exist or has been moved.
                </p>
                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                    <a href="/" class="btn btn-primary btn-lg px-4">
                        <i class="bi bi-house"></i> Go Home
                    </a>
                    <a href="/tutorials/web-basics/html/home" class="btn btn-outline-secondary btn-lg px-4">
                        Browse Tutorials
                    </a>
                </div>
            </div>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
