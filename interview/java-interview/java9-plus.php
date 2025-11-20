<?php
// Include config first to get helper functions
require_once dirname(__DIR__, 2) . '/includes/config.php';

// Use the base URL from environment
$base_url = get_base_url();

// Page metadata
$page_title = 'Java 9 to 25 Features - Java Interview Guide | Full Stack Master';
$page_description = 'High-level overview of important features added in Java 9 through Java 25, including modules, records, sealed classes, and virtual threads.';

// Include header and sidebar
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
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $base_url ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= $base_url ?>interview/java-interview/">Java Interview</a></li>
                <li class="breadcrumb-item active" aria-current="page">Java 9 to 25 Features</li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="mb-4">
            <h1 class="display-4 fw-bold text-primary mb-4">Java 9 to 25 Features</h1>

            <div class="alert alert-info">
                <i class="bi bi-info-circle-fill me-2"></i>
                This page lists major JDK features from Java 9 onwards that are often discussed in modern Java interviews.
            </div>

            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    <h2 class="h4 mb-4">Key Highlights</h2>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item"><strong>Java 9</strong> &mdash; Module System (JPMS), JShell, Stream & Optional enhancements</li>
                        <li class="list-group-item"><strong>Java 10</strong> &mdash; <code>var</code> for local variable type inference</li>
                        <li class="list-group-item"><strong>Java 11</strong> &mdash; new HTTP Client API, <code>String</code> API updates</li>
                        <li class="list-group-item"><strong>Java 14+</strong> &mdash; switch expressions, records, pattern matching, text blocks</li>
                        <li class="list-group-item"><strong>Java 17 (LTS)</strong> &mdash; sealed classes, pattern matching for <code>switch</code>, FFM API</li>
                        <li class="list-group-item"><strong>Java 19-21</strong> &mdash; virtual threads (Project Loom), structured concurrency, record patterns</li>
                    </ul>

                    <p class="mb-0">You can expand this page with code snippets and deeper explanations per version as needed.</p>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="d-flex justify-content-between mt-4">
                <a href="<?= $base_url ?>interview/java-interview/java8-features" class="btn btn-outline-primary">
                    <i class="bi bi-arrow-left me-1"></i> Java 8+ Features
                </a>
                <a href="<?= $base_url ?>interview/java-interview/" class="btn btn-outline-primary">
                    Back to Java Interview Guide <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </article>
</main>

<!-- Initialize code copy functionality -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize code copy buttons
    document.querySelectorAll('.copy-code').forEach(button => {
        button.addEventListener('click', function() {
            const codeBlock = this.closest('.code-example').querySelector('code');
            const code = codeBlock.textContent;

            navigator.clipboard.writeText(code).then(() => {
                const originalText = this.innerHTML;
                this.innerHTML = '<i class="bi bi-check"></i> Copied!';
                setTimeout(() => {
                    this.innerHTML = originalText;
                }, 2000);
            });
        });
    });

    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});
</script>

<?php include_file('includes/footer.php'); ?>
