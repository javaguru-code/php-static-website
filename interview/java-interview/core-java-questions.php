<?php
// Include config first to get helper functions
require_once dirname(__DIR__, 2) . '/includes/config.php';

// Use the base URL from environment
$base_url = get_base_url();

// Page metadata
$page_title = 'Core Java Interview Questions | Full Stack Master';
$page_description = 'Commonly asked Core Java interview questions with detailed answers and code examples.';

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
                <li class="breadcrumb-item active" aria-current="page">Core Java Questions</li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="mb-4">
            <h1 class="display-4 fw-bold text-primary mb-4">Core Java Interview Questions</h1>
            
            <div class="alert alert-info">
                <i class="bi bi-info-circle-fill me-2"></i> 
                This page contains commonly asked Core Java interview questions with detailed answers and code examples.
            </div>
            
            <!-- Question 1 -->
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header bg-primary text-white">
                    <h2 class="h4 mb-0">1. What is the difference between JDK, JRE, and JVM?</h2>
                </div>
                <div class="card-body">
                    <ul>
                        <li><strong>JVM (Java Virtual Machine):</strong> The runtime environment that executes Java bytecode. It's platform-dependent.</li>
                        <li><strong>JRE (Java Runtime Environment):</strong> Contains JVM + core libraries required to run Java applications.</li>
                        <li><strong>JDK (Java Development Kit):</strong> Contains JRE + development tools (compiler, debugger, etc.) needed to develop Java applications.</li>
                    </ul>
                    <p><strong>In short:</strong> JDK = JRE + Development Tools, JRE = JVM + Core Libraries</p>
                    <div class="code-example">
                        <pre><code class="language-java">// Example showing JDK tools and JRE components
public class HelloWorld {
    public static void main(String[] args) {
        System.out.println("Hello, World!");
    }
}

// To compile (requires JDK): javac HelloWorld.java
// To run (requires JRE): java HelloWorld</code></pre>
                    </div>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header bg-primary text-white">
                    <h2 class="h4 mb-0">2. What is the difference between a compiled and interpreted language?</h2>
                </div>
                <div class="card-body">
                    <p>Java is both compiled and interpreted:</p>
                    <ul>
                        <li><strong>Compilation:</strong> Java source code (.java) is compiled into bytecode (.class) by the Java compiler (javac).</li>
                        <li><strong>Interpretation:</strong> The JVM interprets the bytecode at runtime, converting it into machine code.</li>
                    </ul>
                    <p>This two-step process provides platform independence (Write Once, Run Anywhere).</p>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>Compiled Languages</th>
                                    <th>Interpreted Languages</th>
                                    <th>Java (Both)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Directly compiled to machine code</td>
                                    <td>Executed line by line</td>
                                    <td>Compiled to bytecode, then interpreted</td>
                                </tr>
                                <tr>
                                    <td>Faster execution</td>
                                    <td>Slower execution</td>
                                    <td>Moderate execution speed</td>
                                </tr>
                                <tr>
                                    <td>Platform dependent</td>
                                    <td>Platform independent</td>
                                    <td>Platform independent (write once, run anywhere)</td>
                                </tr>
                                <tr>
                                    <td>Examples: C, C++</td>
                                    <td>Examples: Python, JavaScript</td>
                                    <td>Java, C#</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header bg-primary text-white">
                    <h2 class="h4 mb-0">3. Explain the Java Memory Model.</h2>
                </div>
                <div class="card-body">
                    <p>The Java Memory Model (JMM) defines how threads interact through memory and what behaviors are allowed in multithreaded code:</p>
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Memory Areas:</h5>
                            <ul>
                                <li><strong>Heap Memory:</strong> Stores objects and their instance variables</li>
                                <li><strong>Stack Memory:</strong> Stores local variables and method call information</li>
                                <li><strong>Method Area:</strong> Stores class structures, method data, and static variables</li>
                                <li><strong>PC Registers:</strong> Holds the address of the currently executing instruction</li>
                                <li><strong>Native Method Stack:</strong> For native method calls</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="text-center">
                                <img src="<?= $base_url ?>images/java-memory-model.png" alt="Java Memory Model" class="img-fluid border rounded">
                                <p class="text-muted mt-2">Figure: Java Memory Model</p>
                            </div>
                        </div>
                    </div>
                    <div class="code-example mt-3">
                        <pre><code class="language-java">public class MemoryExample {
    // Static variable - stored in Method Area
    static int staticVar = 10;
    
    // Instance variable - stored in Heap
    int instanceVar = 20;
    
    public void method() {
        // Local variable - stored in Stack
        int localVar = 30;
        System.out.println(localVar);
    }
    
    public static void main(String[] args) {
        MemoryExample obj = new MemoryExample();
        obj.method();
    }
}</code></pre>
                    </div>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header bg-primary text-white">
                    <h2 class="h4 mb-0">4. What is a ClassLoader? Name its types.</h2>
                </div>
                <div class="card-body">
                    <p>ClassLoader is a subsystem of JVM that loads class files. Types include:</p>
                    <ul>
                        <li><strong>Bootstrap ClassLoader:</strong> 
                            <ul>
                                <li>Loads core Java API classes (rt.jar)</li>
                                <li>Written in native code (not Java)</li>
                                <li>Parent of all class loaders</li>
                            </ul>
                        </li>
                        <li><strong>Extension ClassLoader:</strong>
                            <ul>
                                <li>Child of Bootstrap ClassLoader</li>
                                <li>Loads classes from extension directories (jre/lib/ext)</li>
                            </ul>
                        </li>
                        <li><strong>Application/System ClassLoader:</strong>
                            <ul>
                                <li>Child of Extension ClassLoader</li>
                                <li>Loads classes from the application classpath</li>
                            </ul>
                        </li>
                    </ul>
                    <div class="code-example">
                        <pre><code class="language-java">public class ClassLoaderExample {
    public static void main(String[] args) {
        // Print class loaders
        System.out.println("String class loader: " + 
            String.class.getClassLoader());  // null (loaded by Bootstrap)
            
        System.out.println("Current class loader: " + 
            ClassLoaderExample.class.getClassLoader());  // AppClassLoader
            
        System.out.println("Parent of AppClassLoader: " + 
            ClassLoaderExample.class.getClassLoader().getParent());  // ExtClassLoader
    }
}</code></pre>
                    </div>
                </div>
            </div>

            <!-- Question 5 -->
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header bg-primary text-white">
                    <h2 class="h4 mb-0">5. What is the difference between Stack and Heap memory?</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>Stack Memory</th>
                                    <th>Heap Memory</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Stores primitive variables and object references</td>
                                    <td>Stores actual objects and arrays</td>
                                </tr>
                                <tr>
                                    <td>Fixed size, faster access</td>
                                    <td>Dynamic size, slower access</td>
                                </tr>
                                <tr>
                                    <td>Thread-specific</td>
                                    <td>Shared among all threads</td>
                                </tr>
                                <tr>
                                    <td>Automatically managed (LIFO)</td>
                                    <td>Managed by Garbage Collector</td>
                                </tr>
                                <tr>
                                    <td>StackOverflowError when full</td>
                                    <td>OutOfMemoryError when full</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="code-example mt-3">
                        <pre><code class="language-java">public class StackHeapExample {
    // Instance variable - stored in Heap
    int instanceVar = 10;
    
    public void method() {
        // Local variable - stored in Stack
        int localVar = 20;
        
        // Object - stored in Heap, reference in Stack
        String str = new String("Hello");
        
        // Array - stored in Heap, reference in Stack
        int[] numbers = new int[5];
    }
    
    public static void main(String[] args) {
        // Reference variable in Stack, object in Heap
        StackHeapExample obj = new StackHeapExample();
        obj.method();
    }
}</code></pre>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="d-flex justify-content-between mt-4 mb-5">
                <a href="<?= $base_url ?>interview/java-interview/core-java" class="btn btn-outline-primary">
                    <i class="bi bi-arrow-left me-1"></i> Back to Core Java
                </a>
                <a href="<?= $base_url ?>interview/java-interview/core-java-questions-2" class="btn btn-primary">
                    Next: More Questions <i class="bi bi-arrow-right ms-1"></i>
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
});
</script>

<?php include_file('includes/footer.php'); ?>
