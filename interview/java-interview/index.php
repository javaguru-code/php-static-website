<?php
// Include config first to get helper functions
require_once   '../../includes/config.php';

// Use the base URL from environment
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;

$page_title = 'Java Interview Guide - Full Stack Master';
$page_description = 'Prepare for Java interviews with our comprehensive guide. Covers core Java concepts, OOPs, Collections, Multithreading, and more.';

// Include header and sidebar using the base directory
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
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="display-4 fw-bold text-primary">Java Interview Guide</h1>
                <p class="lead">
                    This comprehensive Java interview guide is designed to help you prepare for technical interviews by covering 
                    all the essential Java concepts, from basic to advanced. Whether you're a beginner or an experienced developer, 
                    this guide will help you master the concepts most frequently tested in Java interviews.
                </p>
            </div>
        </div>

        <!-- Introduction -->
        <section id="introduction" class="mb-5">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h2 class="h4 mb-0"><i class="bi bi-info-circle me-2"></i>Introduction</h2>
                </div>
                <div class="card-body">
                    <p>Java interviews typically test core programming concepts, problem-solving ability, knowledge of JVM, and real-world experience with APIs and frameworks. This guide organizes questions by topic to help you prepare systematically.</p>
                </div>
            </div>
        </section>

        <!-- Core Java Fundamentals -->
        <section id="core-java" class="mb-5">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h2 class="h4 mb-0"><i class="bi bi-gear me-2"></i>Core Java Fundamentals</h2>
                    <a href="<?= $base_url ?>interview/java-interview/core-java" class="btn btn-sm btn-light">View Details</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    JVM, JRE, JDK differences
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    Data Types & Variables
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    Operators & Control Flow
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    Arrays & String Handling
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    Memory Model basics
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    Stack vs Heap memory
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    Exception Handling
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    Java 8+ Features
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- OOP Concepts -->
        <section id="oop-concepts" class="mb-5">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h2 class="h4 mb-0"><i class="bi bi-box-seam me-2"></i>OOP Concepts</h2>
                    <a href="<?= $base_url ?>interview/java-interview/oop-concepts" class="btn btn-sm btn-light">View Details</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">Core Concepts</h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Classes & Objects</li>
                                    <li class="list-group-item">Encapsulation</li>
                                    <li class="list-group-item">Inheritance</li>
                                    <li class="list-group-item">Polymorphism</li>
                                    <li class="list-group-item">Abstraction</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">Advanced Topics</h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Interfaces vs Abstract Classes</li>
                                    <li class="list-group-item">Composition vs Aggregation</li>
                                    <li class="list-group-item">Method Overloading & Overriding</li>
                                    <li class="list-group-item">SOLID Principles</li>
                                    <li class="list-group-item">Design Patterns</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Exception Handling -->
        <section id="exception-handling" class="mb-5">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h2 class="h4 mb-0"><i class="bi bi-exclamation-triangle me-2"></i>Exception Handling</h2>
                    <a href="<?= $base_url ?>interview/java-interview/exception-handling" class="btn btn-sm btn-light">View Details</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">Exception Types</h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Checked Exceptions</li>
                                    <li class="list-group-item">Unchecked Exceptions</li>
                                    <li class="list-group-item">Errors</li>
                                    <li class="list-group-item">Custom Exceptions</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">Handling Mechanisms</h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">try-catch-finally</li>
                                    <li class="list-group-item">throw & throws</li>
                                    <li class="list-group-item">try-with-resources</li>
                                    <li class="list-group-item">Best Practices</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Collections Framework -->
        <section id="collections" class="mb-5">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h2 class="h4 mb-0"><i class="bi bi-collection me-2"></i>Collections Framework</h2>
                    <a href="<?= $base_url ?>interview/java-interview/collections" class="btn btn-sm btn-light">View Details</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-3">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">Core Interfaces</h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">List</li>
                                    <li class="list-group-item">Set</li>
                                    <li class="list-group-item">Map</li>
                                    <li class="list-group-item">Queue</li>
                                    <li class="list-group-item">Deque</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-3">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">Common Implementations</h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">ArrayList vs LinkedList</li>
                                    <li class="list-group-item">HashSet vs TreeSet</li>
                                    <li class="list-group-item">HashMap vs LinkedHashMap</li>
                                    <li class="list-group-item">ConcurrentHashMap</li>
                                    <li class="list-group-item">CopyOnWriteArrayList</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">Advanced Topics</h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Iterator vs ListIterator</li>
                                    <li class="list-group-item">Comparable vs Comparator</li>
                                    <li class="list-group-item">Fail-Fast vs Fail-Safe</li>
                                    <li class="list-group-item">Java 8+ Stream API</li>
                                    <li class="list-group-item">Concurrent Collections</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Concurrency & Multithreading -->
        <section id="concurrency" class="mb-5">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h2 class="h4 mb-0"><i class="bi bi-cpu me-2"></i>Concurrency & Multithreading</h2>
                    <a href="<?= $base_url ?>interview/java-interview/concurrency" class="btn btn-sm btn-light">View Details</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">Core Concepts</h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Thread lifecycle & states</li>
                                    <li class="list-group-item">Runnable vs Thread</li>
                                    <li class="list-group-item">synchronized & volatile</li>
                                    <li class="list-group-item">wait(), notify(), notifyAll()</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">Advanced Topics</h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Executor Framework</li>
                                    <li class="list-group-item">ThreadPoolExecutor</li>
                                    <li class="list-group-item">Future & CompletableFuture</li>
                                    <li class="list-group-item">Fork/Join Framework</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Java 8+ Features -->
        <section id="java8-features" class="mb-5">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h2 class="h4 mb-0"><i class="bi bi-stars me-2"></i>Java 8+ Features</h2>
                    <a href="<?= $base_url ?>interview/java-interview/java8-features" class="btn btn-sm btn-light">View Details</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-3">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">Functional Programming</h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Lambda Expressions</li>
                                    <li class="list-group-item">Functional Interfaces</li>
                                    <li class="list-group-item">Method References</li>
                                    <li class="list-group-item">Optional Class</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-3">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">Streams API</h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Stream Operations</li>
                                    <li class="list-group-item">Intermediate & Terminal Ops</li>
                                    <li class="list-group-item">Collectors</li>
                                    <li class="list-group-item">Parallel Streams</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">Other Features</h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">New Date/Time API</li>
                                    <li class="list-group-item">Default Methods</li>
                                    <li class="list-group-item">CompletableFuture</li>
                                    <li class="list-group-item">Nashorn JavaScript Engine</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Java 9-25 Features -->
        <section id="java9-plus" class="mb-5">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h2 class="h4 mb-0"><i class="bi bi-arrow-up-circle me-2"></i>Java 9 to 25 Features</h2>
                    <a href="<?= $base_url ?>interview/java-interview/java9-plus" class="btn btn-sm btn-light">View Details</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">Java 9-11 (LTS)</h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Module System (JPMS)</li>
                                    <li class="list-group-item">JShell</li>
                                    <li class="list-group-item">HTTP/2 Client</li>
                                    <li class="list-group-item">var keyword (local variables)</li>
                                    <li class="list-group-item">New Collection Factory Methods</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">Java 12-17 (LTS)</h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Switch Expressions</li>
                                    <li class="list-group-item">Text Blocks</li>
                                    <li class="list-group-item">Records</li>
                                    <li class="list-group-item">Sealed Classes</li>
                                    <li class="list-group-item">Pattern Matching</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">Java 18-21 (LTS)</h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Virtual Threads (Project Loom)</li>
                                    <li class="list-group-item">Structured Concurrency</li>
                                    <li class="list-group-item">Record Patterns</li>
                                    <li class="list-group-item">Pattern Matching for switch</li>
                                    <li class="list-group-item">Sequenced Collections</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">Java 22-25</h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">String Templates</li>
                                    <li class="list-group-item">Stream Gatherers</li>
                                    <li class="list-group-item">FFM API Finalization</li>
                                    <li class="list-group-item">Pattern Matching Evolution</li>
                                    <li class="list-group-item">New GC Optimizations</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                    
                    <h5 class="mt-4">Key topics in Core Java:</h5>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item"><i class="bi bi-check-circle text-primary me-2"></i> Java Basics: Data types, variables, operators</li>
                        <li class="list-group-item"><i class="bi bi-check-circle text-primary me-2"></i> Control Flow: if-else, switch, loops</li>
                        <li class="list-group-item"><i class="bi bi-check-circle text-primary me-2"></i> Methods and their usage</li>
                        <li class="list-group-item"><i class="bi bi-check-circle text-primary me-2"></i> Arrays and Strings</li>
                        <li class="list-group-item"><i class="bi bi-check-circle text-primary me-2"></i> Exception Handling</li>
                    </ul>
                </div>
            </div>
        </section>


    </article>
</main>

<!-- Include the main JavaScript file -->
<script src="<?= $base_url ?>js/main.js"></script>

<!-- Initialize any page-specific JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
        
        // Copy code button functionality
        document.querySelectorAll('.copy-code-btn').forEach(button => {
            button.addEventListener('click', function() {
                const codeBlock = this.parentElement.nextElementSibling;
                const code = codeBlock.querySelector('code').innerText;
                navigator.clipboard.writeText(code).then(() => {
                    const originalText = this.innerHTML;
                    this.innerHTML = '<i class="bi bi-check"></i> Copied!';
                    setTimeout(() => {
                        this.innerHTML = originalText;
                    }, 2000);
                });
            });
        });
    });
</script>

<?php include_file('includes/footer.php'); ?>
