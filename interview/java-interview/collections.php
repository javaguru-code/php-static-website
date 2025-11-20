<?php
// Include config first to get helper functions
require_once dirname(__DIR__, 2) . '/includes/config.php';

// Use the base URL from environment
$base_url = get_base_url();

// Page metadata
$page_title = 'Collections Framework - Java Interview Guide | Full Stack Master';
$page_description = 'Learn about the Java Collections Framework including List, Set, Map, and common implementations for interview preparation.';

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
                <li class="breadcrumb-item active" aria-current="page">Collections Framework</li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="mb-4">
            <h1 class="display-4 fw-bold text-primary mb-4">Collections Framework in Java</h1>

            <div class="alert alert-info">
                <i class="bi bi-info-circle-fill me-2"></i>
                This page is part of the Java Interview Guide. It focuses on core concepts of the Java Collections Framework that are frequently asked in interviews.
            </div>

            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    <h2 class="h4 mb-4">Introduction</h2>
                    <p>
                        The Java Collections Framework provides a set of interfaces and classes to store and manipulate groups of data.
                        Understanding the differences between List, Set, Map and their common implementations is a must for Java interviews.
                    </p>

                    <h3 class="h5 mt-4">Key Interfaces</h3>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item"><strong>List</strong> &mdash; ordered, allows duplicates (e.g., <code>ArrayList</code>, <code>LinkedList</code>)</li>
                        <li class="list-group-item"><strong>Set</strong> &mdash; unique elements, no duplicates (e.g., <code>HashSet</code>, <code>TreeSet</code>)</li>
                        <li class="list-group-item"><strong>Map</strong> &mdash; key-value pairs (e.g., <code>HashMap</code>, <code>LinkedHashMap</code>, <code>TreeMap</code>)</li>
                        <li class="list-group-item"><strong>Queue / Deque</strong> &mdash; FIFO / double-ended queues for ordered processing</li>
                    </ul>

                    <h3 class="h5 mt-4">Sample Code</h3>
                    <div class="code-example mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h4 class="h6 mb-0">Using List, Set, and Map</h4>
                            <button class="btn btn-sm btn-outline-secondary copy-code">
                                <i class="bi bi-clipboard"></i> Copy
                            </button>
                        </div>
                        <pre><code class="language-java">import java.util.*;

public class CollectionsExample {
    public static void main(String[] args) {
        // List example
        List<String> list = new ArrayList<>();
        list.add("A");
        list.add("B");
        list.add("A"); // duplicates allowed

        // Set example
        Set<String> set = new HashSet<>(list); // duplicates removed

        // Map example
        Map<String, Integer> map = new HashMap<>();
        map.put("Alice", 1);
        map.put("Bob", 2);

        System.out.println("List: " + list);
        System.out.println("Set: " + set);
        System.out.println("Map: " + map);
    }
}</code></pre>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="d-flex justify-content-between mt-4">
                <a href="<?= $base_url ?>interview/java-interview/exception-handling" class="btn btn-outline-primary">
                    <i class="bi bi-arrow-left me-1"></i> Exception Handling
                </a>
                <a href="<?= $base_url ?>interview/java-interview/concurrency" class="btn btn-outline-primary">
                    Concurrency & Multithreading <i class="bi bi-arrow-right ms-1"></i>
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
