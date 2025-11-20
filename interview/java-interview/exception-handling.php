<?php
// Include config first to get helper functions
require_once '../../includes/config.php';

// Use the base URL from environment
$base_url = get_base_url();

// Page metadata
$page_title = 'Exception Handling - Java Interview Guide | Full Stack Master';
$page_description = 'Learn about Exception Handling in Java including try-catch blocks, throw, throws, and custom exceptions.';

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
                <li class="breadcrumb-item active" aria-current="page">Exception Handling</li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="mb-4">
            <h1 class="display-4 fw-bold text-primary mb-4">Exception Handling in Java</h1>
            
            <div class="alert alert-info">
                <i class="bi bi-info-circle-fill me-2"></i> Learn how to handle errors and exceptions in Java effectively.
            </div>
            
            <!-- Exception Hierarchy -->
            <section id="exception-hierarchy" class="mb-5">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h2 class="h4 mb-0">Exception Hierarchy</h2>
                    </div>
                    <div class="card-body">
                        <p>In Java, exceptions are objects that represent errors or other exceptional conditions that may occur during program execution. The Java exception hierarchy is as follows:</p>
                        
                        <div class="text-center my-4">
                            <img src="<?= $base_url ?>images/exception-hierarchy.png" alt="Java Exception Hierarchy" class="img-fluid border rounded" style="max-width: 100%; height: auto;">
                            <p class="text-muted mt-2">Figure: Java Exception Hierarchy</p>
                        </div>
                        
                        <ul>
                            <li><strong>Throwable</strong>: The root class of the exception hierarchy</li>
                            <li><strong>Error</strong>: Represents serious problems that a reasonable application should not try to catch (e.g., <code>OutOfMemoryError</code>, <code>StackOverflowError</code>)</li>
                            <li><strong>Exception</strong>: Represents conditions that a reasonable application might want to catch
                                <ul>
                                    <li><strong>RuntimeException</strong>: Unchecked exceptions (e.g., <code>NullPointerException</code>, <code>ArrayIndexOutOfBoundsException</code>)</li>
                                    <li>Other checked exceptions (e.g., <code>IOException</code>, <code>SQLException</code>)</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Checked vs Unchecked Exceptions -->
            <section id="checked-unchecked" class="mb-5">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h2 class="h4 mb-0">Checked vs Unchecked Exceptions</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Feature</th>
                                        <th>Checked Exceptions</th>
                                        <th>Unchecked Exceptions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Inheritance</td>
                                        <td>Extend <code>Exception</code> (but not <code>RuntimeException</code>)</td>
                                        <td>Extend <code>RuntimeException</code> or <code>Error</code></td>
                                    </tr>
                                    <tr>
                                        <td>Handling</td>
                                        <td>Must be handled using try-catch or declared with throws</td>
                                        <td>Not required to be handled or declared</td>
                                    </tr>
                                    <tr>
                                        <td>When occurs</td>
                                        <td>Compile-time</td>
                                        <td>Runtime</td>
                                    </tr>
                                    <tr>
                                        <td>Example</td>
                                        <td><code>IOException</code>, <code>SQLException</code></td>
                                        <td><code>NullPointerException</code>, <code>ArrayIndexOutOfBoundsException</code></td>
                                    </tr>
                                    <tr>
                                        <td>Recovery</td>
                                        <td>Can be recovered</td>
                                        <td>Indicates programming errors, hard to recover</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Try-Catch-Finally -->
            <section id="try-catch-finally" class="mb-5">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h2 class="h4 mb-0">Try-Catch-Finally Block</h2>
                    </div>
                    <div class="card-body">
                        <p>The <code>try-catch-finally</code> block is used to handle exceptions in Java. The <code>finally</code> block is optional and is always executed, whether an exception occurs or not.</p>
                        
                        <div class="code-example mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h4 class="h6 mb-0">Example: Try-Catch-Finally</h4>
                                <button class="btn btn-sm btn-outline-secondary copy-code">
                                    <i class="bi bi-clipboard"></i> Copy
                                </button>
                            </div>
                            <pre><code class="language-java">import java.io.*;

public class ExceptionHandlingExample {
    public static void main(String[] args) {
        FileInputStream file = null;
        
        try {
            // Code that might throw an exception
            file = new FileInputStream("nonexistent.txt");
            int data = file.read();
            System.out.println("File content: " + data);
            
        } catch (FileNotFoundException e) {
            // Handle FileNotFoundException
            System.err.println("Error: File not found - " + e.getMessage());
            
        } catch (IOException e) {
            // Handle other I/O exceptions
            System.err.println("I/O Error: " + e.getMessage());
            
        } catch (Exception e) {
            // Catch any other exceptions
            System.err.println("Unexpected error: " + e.getMessage());
            
        } finally {
            // This block always executes
            System.out.println("Finally block executed");
            
            // Close resources
            if (file != null) {
                try {
                    file.close();
                    System.out.println("File stream closed successfully");
                } catch (IOException e) {
                    System.err.println("Error closing file: " + e.getMessage());
                }
            }
        }
        
        System.out.println("Program continues after exception handling");
    }
}</code></pre>
                        </div>
                        
                        <div class="alert alert-warning">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                            <strong>Important:</strong> Always close resources in the <code>finally</code> block or use try-with-resources (Java 7+) to ensure proper resource management.
                        </div>
                    </div>
                </div>
            </section>

            <!-- Try-With-Resources -->
            <section id="try-with-resources" class="mb-5">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h2 class="h4 mb-0">Try-With-Resources (Java 7+)</h2>
                    </div>
                    <div class="card-body">
                        <p>Java 7 introduced the try-with-resources statement, which ensures that each resource is closed at the end of the statement. Any object that implements <code>java.lang.AutoCloseable</code> can be used as a resource.</p>
                        
                        <div class="code-example mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h4 class="h6 mb-0">Example: Try-With-Resources</h4>
                                <button class="btn btn-sm btn-outline-secondary copy-code">
                                    <i class="bi bi-clipboard"></i> Copy
                                </button>
                            </div>
                            <pre><code class="language-java">import java.io.*;

public class TryWithResourcesExample {
    public static void main(String[] args) {
        // Try-with-resources automatically closes the resources
        try (FileInputStream input = new FileInputStream("example.txt");
             FileOutputStream output = new FileOutputStream("output.txt")) {
            
            int data;
            while ((data = input.read()) != -1) {
                output.write(data);
            }
            System.out.println("File copied successfully");
            
        } catch (FileNotFoundException e) {
            System.err.println("Error: File not found - " + e.getMessage());
        } catch (IOException e) {
            System.err.println("I/O Error: " + e.getMessage());
        }
        // No need for finally block to close resources
    }
}

// Custom resource implementing AutoCloseable
class CustomResource implements AutoCloseable {
    private String name;
    
    public CustomResource(String name) {
        this.name = name;
        System.out.println("Creating " + name);
    }
    
    public void doSomething() {
        System.out.println("Using " + name);
    }
    
    @Override
    public void close() {
        System.out.println("Closing " + name);
    }
}

class CustomResourceExample {
    public static void main(String[] args) {
        try (CustomResource res1 = new CustomResource("Resource1");
             CustomResource res2 = new CustomResource("Resource2")) {
            
            res1.doSomething();
            res2.doSomething();
            
        } // close() is called automatically for both resources
    }
}</code></pre>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Throw and Throws -->
            <section id="throw-throws" class="mb-5">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h2 class="h4 mb-0">Throw and Throws</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">throw</h5>
                                    </div>
                                    <div class="card-body">
                                        <p>The <code>throw</code> keyword is used to explicitly throw an exception from a method or block of code.</p>
                                        <pre><code class="language-java">public class ThrowExample {
    public static void validateAge(int age) {
        if (age < 18) {
            // Throw an exception if age is less than 18
            throw new ArithmeticException("Not eligible to vote");
        } else {
            System.out.println("Eligible to vote");
        }
    }
    
    public static void main(String[] args) {
        try {
            validateAge(15); // This will throw an exception
        } catch (ArithmeticException e) {
            System.out.println("Exception caught: " + e.getMessage());
        }
    }
}</code></pre>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-3">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">throws</h5>
                                    </div>
                                    <div class="card-body">
                                        <p>The <code>throws</code> keyword is used in a method signature to declare that the method might throw the specified exceptions.</p>
                                        <pre><code class="language-java">import java.io.*;

public class ThrowsExample {
    // Method declares that it might throw IOException
    public static void readFile(String filename) throws IOException {
        FileReader file = new FileReader(filename);
        // Read file content
        file.close();
    }
    
    public static void main(String[] args) {
        try {
            readFile("nonexistent.txt");
        } catch (IOException e) {
            System.out.println("Error reading file: " + e.getMessage());
        }
    }
}</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Custom Exceptions -->
            <section id="custom-exceptions" class="mb-5">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h2 class="h4 mb-0">Custom Exceptions</h2>
                    </div>
                    <div class="card-body">
                        <p>You can create your own exception classes by extending the <code>Exception</code> class (for checked exceptions) or <code>RuntimeException</code> class (for unchecked exceptions).</p>
                        
                        <div class="code-example mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h4 class="h6 mb-0">Example: Custom Exceptions</h4>
                                <button class="btn btn-sm btn-outline-secondary copy-code">
                                    <i class="bi bi-clipboard"></i> Copy
                                </button>
                            </div>
                            <pre><code class="language-java">// Custom checked exception
class InsufficientFundsException extends Exception {
    private double amount;
    
    public InsufficientFundsException(double amount) {
        super("Insufficient funds: $" + amount);
        this.amount = amount;
    }
    
    public double getAmount() {
        return amount;
    }
}

// Custom unchecked exception
class InvalidTransactionException extends RuntimeException {
    public InvalidTransactionException(String message) {
        super(message);
    }
}

class BankAccount {
    private double balance;
    
    public BankAccount(double initialBalance) {
        this.balance = initialBalance;
    }
    
    public void withdraw(double amount) throws InsufficientFundsException {
        if (amount <= 0) {
            throw new InvalidTransactionException("Withdrawal amount must be positive");
        }
        
        if (amount > balance) {
            double needed = amount - balance;
            throw new InsufficientFundsException(needed);
        }
        
        balance -= amount;
        System.out.println("Withdrew $" + amount + ". New balance: $" + balance);
    }
    
    public double getBalance() {
        return balance;
    }
}

public class CustomExceptionDemo {
    public static void main(String[] args) {
        BankAccount account = new BankAccount(1000);
        
        try {
            // This will throw InsufficientFundsException
            account.withdraw(1500);
        } catch (InsufficientFundsException e) {
            System.err.println("Error: " + e.getMessage());
            System.err.println("You need $" + e.getAmount() + " more to complete this transaction.");
        } catch (InvalidTransactionException e) {
            System.err.println("Transaction error: " + e.getMessage());
        }
        
        // This will throw InvalidTransactionException (unchecked)
        try {
            account.withdraw(-100);
        } catch (Exception e) {
            System.err.println("Error: " + e.getMessage());
        }
    }
}</code></pre>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Best Practices -->
            <section id="best-practices" class="mb-5">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h2 class="h4 mb-0">Exception Handling Best Practices</h2>
                    </div>
                    <div class="card-body">
                        <ol>
                            <li><strong>Use specific exceptions</strong>: Catch the most specific exception first, then more general ones.</li>
                            <li><strong>Don't catch <code>Throwable</code></strong>: It catches all errors, which are not meant to be caught.</li>
                            <li><strong>Don't ignore exceptions</strong>: At least log the exception if you can't handle it.</li>
                            <li><strong>Use try-with-resources</strong>: For better resource management with <code>AutoCloseable</code> resources.</li>
                            <li><strong>Include cause when wrapping exceptions</strong>: Use the constructor that takes a <code>Throwable</code> parameter.</li>
                            <li><strong>Document exceptions</strong>: Use <code>@throws</code> in JavaDoc to document exceptions.</li>
                            <li><strong>Avoid empty catch blocks</strong>: At least log the exception.</li>
                            <li><strong>Don't expose sensitive information</strong>: In exception messages, avoid exposing sensitive data.</li>
                            <li><strong>Use custom exceptions</strong>: When you need to provide more specific information about an error.</li>
                            <li><strong>Fail fast</strong>: Validate inputs early and throw exceptions as soon as possible.</li>
                        </ol>
                        
                        <div class="code-example">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h4 class="h6 mb-0">Example: Good Exception Handling</h4>
                                <button class="btn btn-sm btn-outline-secondary copy-code">
                                    <i class="bi bi-clipboard"></i> Copy
                                </button>
                            </div>
                            <pre><code class="language-java">import java.io.*;
import java.util.logging.*;

public class GoodExceptionHandling {
    private static final Logger logger = Logger.getLogger(GoodExceptionHandling.class.getName());
    
    /**
     * Reads the first line from a file.
     * @param filename the name of the file to read
     * @return the first line of the file
     * @throws FileNotFoundException if the file does not exist
     * @throws IOException if an I/O error occurs
     */
    public static String readFirstLine(String filename) throws IOException {
        // Validate input early
        if (filename == null || filename.trim().isEmpty()) {
            throw new IllegalArgumentException("Filename cannot be null or empty");
        }
        
        // Use try-with-resources to ensure resources are closed
        try (BufferedReader reader = new BufferedReader(new FileReader(filename))) {
            return reader.readLine();
        } // No need for finally block with try-with-resources
    }
    
    public static void main(String[] args) {
        try {
            String line = readFirstLine("config.txt");
            System.out.println("First line: " + line);
            
        } catch (FileNotFoundException e) {
            // Log the exception with context
            logger.log(Level.SEVERE, "Configuration file not found", e);
            System.err.println("Error: Configuration file not found. Please check the file path.");
            
        } catch (IOException e) {
            // Log the full exception with stack trace
            logger.log(Level.SEVERE, "Error reading configuration file", e);
            System.err.println("Error: Unable to read configuration file. Please check file permissions.");
            
        } catch (IllegalArgumentException e) {
            // User input validation error
            logger.log(Level.WARNING, "Invalid filename provided", e);
            System.err.println("Error: " + e.getMessage());
            
        } catch (Exception e) {
            // Catch-all for any other unexpected exceptions
            logger.log(Level.SEVERE, "An unexpected error occurred", e);
            System.err.println("An unexpected error occurred. Please contact support.");
        }
    }
}</code></pre>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Navigation Buttons -->
            <div class="d-flex justify-content-between mt-4">
                <a href="<?= $base_url ?>interview/java-interview/oops-concepts" class="btn btn-outline-primary">
                    <i class="bi bi-arrow-left me-1"></i> OOP Concepts
                </a>
                <a href="#" class="btn btn-outline-primary">
                    Next: Collections Framework <i class="bi bi-arrow-right ms-1"></i>
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
