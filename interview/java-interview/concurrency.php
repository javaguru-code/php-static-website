<?php
// Include config first to get helper functions
require_once dirname(__DIR__, 2) . '/includes/config.php';

// Use the base URL from environment
$base_url = get_base_url();

// Page metadata
$page_title = 'Concurrency & Multithreading - Java Interview Guide | Full Stack Master';
$page_description = 'Learn core Java concurrency and multithreading concepts such as threads, synchronization, and executors for interview preparation.';

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
                <li class="breadcrumb-item active" aria-current="page">Concurrency & Multithreading</li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="mb-4">
            <h1 class="display-4 fw-bold text-primary mb-4">Concurrency & Multithreading in Java</h1>

            <div class="alert alert-info">
                <i class="bi bi-info-circle-fill me-2"></i>
                This page introduces the key multithreading and concurrency concepts that regularly appear in Java interviews.
            </div>

            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    <h2 class="h4 mb-4">Core Concepts</h2>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item"><strong>Thread lifecycle</strong> &mdash; NEW, RUNNABLE, BLOCKED, WAITING, TIMED_WAITING, TERMINATED</li>
                        <li class="list-group-item"><strong>Creating threads</strong> via <code>Thread</code> and <code>Runnable</code></li>
                        <li class="list-group-item"><strong>synchronized</strong>, <strong>volatile</strong>, and intrinsic locks</li>
                        <li class="list-group-item"><strong>Executor framework</strong> and thread pools</li>
                    </ul>

                    <h3 class="h5 mt-4">Sample Code</h3>
                    <div class="code-example mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h4 class="h6 mb-0">Creating a Thread with Runnable</h4>
                            <button class="btn btn-sm btn-outline-secondary copy-code">
                                <i class="bi bi-clipboard"></i> Copy
                            </button>
                        </div>
                        <pre><code class="language-java">public class RunnableExample {
    public static void main(String[] args) {
        Runnable task = () -> {
            System.out.println("Running in: " + Thread.currentThread().getName());
        };

        Thread thread = new Thread(task, "Worker-1");
        thread.start();

        System.out.println("Main thread: " + Thread.currentThread().getName());
    }
}</code></pre>
                    </div>

                    <h3 class="h5 mt-4">Executor Framework Example</h3>
                    <div class="code-example mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h4 class="h6 mb-0">Using ExecutorService</h4>
                            <button class="btn btn-sm btn-outline-secondary copy-code">
                                <i class="bi bi-clipboard"></i> Copy
                            </button>
                        </div>
                        <pre><code class="language-java">import java.util.concurrent.*;

public class ExecutorExample {
    public static void main(String[] args) {
        ExecutorService executor = Executors.newFixedThreadPool(2);

        for (int i = 0; i < 5; i++) {
            int taskId = i;
            executor.submit(() -> {
                System.out.println("Task " + taskId + " running in " + Thread.currentThread().getName());
            });
        }

        executor.shutdown();
    }
}</code></pre>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="d-flex justify-content-between mt-4">
                <a href="<?= $base_url ?>interview/java-interview/collections" class="btn btn-outline-primary">
                    <i class="bi bi-arrow-left me-1"></i> Collections Framework
                </a>
                <a href="<?= $base_url ?>interview/java-interview/java8-features" class="btn btn-outline-primary">
                    Java 8+ Features <i class="bi bi-arrow-right ms-1"></i>
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
