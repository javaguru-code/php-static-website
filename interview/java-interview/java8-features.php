<?php
// Include config first to get helper functions
require_once dirname(__DIR__, 2) . '/includes/config.php';

// Use the base URL from environment
$base_url = get_base_url();

// Page metadata
$page_title = 'Java 8+ Features - Java Interview Guide | Full Stack Master';
$page_description = 'Overview of important Java 8 and later features such as lambdas, streams, Optional, and the new date/time API.';

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
                <li class="breadcrumb-item active" aria-current="page">Java 8+ Features</li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="mb-4">
            <h1 class="display-4 fw-bold text-primary mb-4">Java 8+ Features</h1>

            <div class="alert alert-info">
                <i class="bi bi-info-circle-fill me-2"></i>
                This page summarizes key language and library features introduced in Java 8 and later releases that are common in interviews.
            </div>

            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    <h2 class="h4 mb-4">Core Java 8 Features</h2>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item"><strong>Lambda expressions</strong> for functional-style code</li>
                        <li class="list-group-item"><strong>Functional interfaces</strong> such as <code>Function</code>, <code>Predicate</code>, <code>Supplier</code></li>
                        <li class="list-group-item"><strong>Streams API</strong> for processing collections declaratively</li>
                        <li class="list-group-item"><strong>Optional</strong> to represent optional values</li>
                        <li class="list-group-item"><strong>New Date/Time API</strong> in <code>java.time</code></li>
                    </ul>

                    <h3 class="h5 mt-4">Lambda & Stream Example</h3>
                    <div class="code-example mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h4 class="h6 mb-0">Filtering with Streams</h4>
                            <button class="btn btn-sm btn-outline-secondary copy-code">
                                <i class="bi bi-clipboard"></i> Copy
                            </button>
                        </div>
                        <pre><code class="language-java">import java.util.*;
import java.util.stream.*;

public class StreamFilterExample {
    public static void main(String[] args) {
        List<Integer> numbers = Arrays.asList(1, 2, 3, 4, 5, 6);

        List<Integer> evens = numbers.stream()
                                     .filter(n -> n % 2 == 0)
                                     .collect(Collectors.toList());

        System.out.println("Even numbers: " + evens);
    }
}</code></pre>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="d-flex justify-content-between mt-4">
                <a href="<?= $base_url ?>interview/java-interview/concurrency" class="btn btn-outline-primary">
                    <i class="bi bi-arrow-left me-1"></i> Concurrency & Multithreading
                </a>
                <a href="<?= $base_url ?>interview/java-interview/java9-plus" class="btn btn-outline-primary">
                    Java 9 to 25 Features <i class="bi bi-arrow-right ms-1"></i>
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
