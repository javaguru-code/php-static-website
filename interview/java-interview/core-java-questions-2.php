<?php
// Include config first to get helper functions
require_once dirname(__DIR__, 2) . '/includes/config.php';

// Use the base URL from environment
$base_url = get_base_url();

// Page metadata
$page_title = 'Core Java Interview Questions (Part 2) | Full Stack Master';
$page_description = 'More Core Java interview questions with brief placeholder answers. Extend this page with your own content.';

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
                <li class="breadcrumb-item active" aria-current="page">Core Java Questions (Part 2)</li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="mb-4">
            <h1 class="display-4 fw-bold text-primary mb-4">Core Java Interview Questions &mdash; Part 2</h1>

            <div class="alert alert-info">
                <i class="bi bi-info-circle-fill me-2"></i>
                This is a placeholder page for additional Core Java interview questions. Replace the sample questions and answers with your real content.
            </div>

            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    <h2 class="h4 mb-4">Sample Question</h2>
                    <p><strong>Q1. Explain the difference between <code>equals()</code> and <code>==</code> in Java.</strong></p>
                    <p class="mb-3"><em>Placeholder answer:</em> Use this area to describe how <code>==</code> compares references for objects while <code>equals()</code> can be overridden to compare logical equality.</p>

                    <div class="code-example">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h4 class="h6 mb-0">Example</h4>
                            <button class="btn btn-sm btn-outline-secondary copy-code">
                                <i class="bi bi-clipboard"></i> Copy
                            </button>
                        </div>
                        <pre><code class="language-java">String a = new String("hello");
String b = new String("hello");

System.out.println(a == b);        // false: different objects
System.out.println(a.equals(b));   // true: same content</code></pre>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="d-flex justify-content-between mt-4 mb-5">
                <a href="<?= $base_url ?>interview/java-interview/core-java-questions" class="btn btn-outline-primary">
                    <i class="bi bi-arrow-left me-1"></i> Back to Part 1
                </a>
                <a href="<?= $base_url ?>interview/java-interview/" class="btn btn-outline-primary">
                    Java Interview Home <i class="bi bi-arrow-right ms-1"></i>
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
