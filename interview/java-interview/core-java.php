<?php
// Include config first to get helper functions
require_once dirname(__DIR__, 2) . '/includes/config.php';

// Use the base URL from environment
$base_url = get_base_url();

// Page metadata
$page_title = 'Core Java - Java Interview Guide | Full Stack Master';
$page_description = 'Learn about Core Java concepts including data types, variables, operators, and control flow in Java programming language.';

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
                <li class="breadcrumb-item active" aria-current="page">Core Java</li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="mb-4">
            <h1 class="display-4 fw-bold text-primary mb-4">Core Java Fundamentals</h1>
            
            <div class="alert alert-info">
                <i class="bi bi-info-circle-fill me-2"></i> This page covers the fundamental concepts of Core Java that every developer should know.
            </div>
            
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    <h2 class="h4 mb-4">Introduction to Core Java</h2>
                    <p>Core Java is the fundamental part of the Java programming language that is used to develop general-purpose applications. It includes basic concepts that form the foundation of the Java programming language.</p>
                    
                    <h3 class="h5 mt-4">Key Features of Core Java</h3>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item">
                            <strong>Platform Independent:</strong> Write once, run anywhere (WORA) capability
                        </li>
                        <li class="list-group-item">
                            <strong>Object-Oriented:</strong> Based on the concept of objects and classes
                        </li>
                        <li class="list-group-item">
                            <strong>Simple and Familiar:</strong> Easy to learn with a syntax similar to C++
                        </li>
                        <li class="list-group-item">
                            <strong>Robust:</strong> Strong memory management and exception handling
                        </li>
                        <li class="list-group-item">
                            <strong>Secure:</strong> Built-in security features and sandbox environment
                        </li>
                    </ul>
                    
                    <h3 class="h5 mt-4">Data Types in Java</h3>
                    <p>Java is a statically-typed language, which means all variables must be declared before they can be used.</p>
                    
                    <div class="table-responsive mb-4">
                        <table class="table table-bordered table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>Data Type</th>
                                    <th>Size</th>
                                    <th>Description</th>
                                    <th>Example</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>byte</code></td>
                                    <td>8-bit</td>
                                    <td>Stores whole numbers from -128 to 127</td>
                                    <td><code>byte b = 100;</code></td>
                                </tr>
                                <tr>
                                    <td><code>short</code></td>
                                    <td>16-bit</td>
                                    <td>Stores whole numbers from -32,768 to 32,767</td>
                                    <td><code>short s = 10000;</code></td>
                                </tr>
                                <tr>
                                    <td><code>int</code></td>
                                    <td>32-bit</td>
                                    <td>Stores whole numbers from -2^31 to 2^31-1</td>
                                    <td><code>int i = 100000;</code></td>
                                </tr>
                                <tr>
                                    <td><code>long</code></td>
                                    <td>64-bit</td>
                                    <td>Stores whole numbers from -2^63 to 2^63-1</td>
                                    <td><code>long l = 100000L;</code></td>
                                </tr>
                                <tr>
                                    <td><code>float</code></td>
                                    <td>32-bit</td>
                                    <td>Stores fractional numbers with 6-7 decimal digits</td>
                                    <td><code>float f = 3.14f;</code></td>
                                </tr>
                                <tr>
                                    <td><code>double</code></td>
                                    <td>64-bit</td>
                                    <td>Stores fractional numbers with 15 decimal digits</td>
                                    <td><code>double d = 3.14159;</code></td>
                                </tr>
                                <tr>
                                    <td><code>boolean</code></td>
                                    <td>1-bit</td>
                                    <td>Stores true or false values</td>
                                    <td><code>boolean flag = true;</code></td>
                                </tr>
                                <tr>
                                    <td><code>char</code></td>
                                    <td>16-bit</td>
                                    <td>Stores a single character/letter or ASCII values</td>
                                    <td><code>char c = 'A';</code></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <h3 class="h5 mt-4">Variables in Java</h3>
                    <p>Variables are containers for storing data values. In Java, there are different types of variables:</p>
                    
                    <div class="code-example mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h4 class="h6 mb-0">Variable Declaration Example</h4>
                            <button class="btn btn-sm btn-outline-secondary copy-code">
                                <i class="bi bi-clipboard"></i> Copy
                            </button>
                        </div>
                        <pre><code class="language-java">public class VariablesExample {
    // Instance variable
    int instanceVar = 10;
    
    // Static variable
    static String staticVar = "Hello";
    
    public void method() {
        // Local variable
        int localVar = 20;
        System.out.println("Local variable: " + localVar);
    }
    
    public static void main(String[] args) {
        VariablesExample obj = new VariablesExample();
        System.out.println("Instance variable: " + obj.instanceVar);
        System.out.println("Static variable: " + staticVar);
        obj.method();
    }
}</code></pre>
                    </div>
                    
                    <h3 class="h5 mt-4">Operators in Java</h3>
                    <p>Java provides various types of operators that can be used according to the need:</p>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">Arithmetic Operators</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li><code>+</code> Addition</li>
                                        <li><code>-</code> Subtraction</li>
                                        <li><code>*</code> Multiplication</li>
                                        <li><code>/</code> Division</li>
                                        <li><code>%</code> Modulus (remainder)</li>
                                        <li><code>++</code> Increment</li>
                                        <li><code>--</code> Decrement</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">Relational Operators</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li><code>==</code> Equal to</li>
                                        <li><code>!=</code> Not equal to</li>
                                        <li><code>></code> Greater than</li>
                                        <li><code><</code> Less than</li>
                                        <li><code>>=</code> Greater than or equal to</li>
                                        <li><code><=</code> Less than or equal to</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="alert alert-warning mt-4">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>
                        <strong>Important:</strong> Understanding these core concepts is essential before moving on to more advanced Java topics.
                    </div>
                </div>
            </div>
            
            <!-- Navigation Buttons -->
            <div class="d-flex justify-content-between mt-4">
                <a href="<?= $base_url ?>interview/java-interview/" class="btn btn-outline-primary">
                    <i class="bi bi-arrow-left me-1"></i> Back to Java Interview Guide
                </a>
                <a href="#" class="btn btn-outline-primary">
                    Next: OOPs Concepts <i class="bi bi-arrow-right ms-1"></i>
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
