<?php
// Include config first to get helper functions
require_once dirname(__DIR__, 3) . '/includes/config.php';

// Use the base URL from environment
$base_url = get_base_url();

// Page metadata
$page_title = 'PAGE_TITLE - Java Interview Guide | Full Stack Master';
$page_description = 'PAGE_DESCRIPTION';

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
                <li class="breadcrumb-item active" aria-current="page">PAGE_TITLE</li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="mb-4">
            <h1 class="display-4 fw-bold text-primary mb-4">PAGE_HEADING</h1>
            
            <div class="alert alert-info">
                <i class="bi bi-info-circle-fill me-2"></i> This page is part of our comprehensive Java Interview Guide. 
                <a href="<?= $base_url ?>interview/java-interview/" class="alert-link">View all topics</a>.
            </div>
            
            <!-- Page content will go here -->
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    <h2 class="h4 mb-4">Introduction</h2>
                    <p>This is a template page for the Java Interview Guide. Replace this content with your specific topic content.</p>
                    
                    <h3 class="h5 mt-4">Key Points</h3>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item">Point 1</li>
                        <li class="list-group-item">Point 2</li>
                        <li class="list-group-item">Point 3</li>
                    </ul>
                    
                    <div class="code-example mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h4 class="h6 mb-0">Example Code</h4>
                            <button class="btn btn-sm btn-outline-secondary copy-code">
                                <i class="bi bi-clipboard"></i> Copy
                            </button>
                        </div>
                        <pre><code class="language-java">// Example code will go here
public class Example {
    public static void main(String[] args) {
        System.out.println("Hello, Java!");
    }
}</code></pre>
                    </div>
                </div>
            </div>
            
            <!-- Navigation Buttons -->
            <div class="d-flex justify-content-between mt-4">
                <a href="#" class="btn btn-outline-primary">
                    <i class="bi bi-arrow-left me-1"></i> Previous Topic
                </a>
                <a href="#" class="btn btn-outline-primary">
                    Next Topic <i class="bi bi-arrow-right ms-1"></i>
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
