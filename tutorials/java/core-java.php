<?php
$page_title = 'Core Java Tutorial - Full Stack Master';
$page_description = 'Full Stack Master - Programming Tutorials';
$base_url = '../../';
$css_path = '../../';
$js_path = '../../';
include '../../includes/header.php';
?>



<div class="container-fluid">
<div class="row">
<aside class="col-lg-3 d-none d-lg-block sidebar-nav p-0">
<div class="sticky-top pt-3" style="top: 70px;">
<div class="sidebar-content px-3">
<h5 class="sidebar-title mb-3"><i class="bi bi-cup-hot"></i> Core Java</h5>
<nav class="nav flex-column">
<a class="nav-link active" href="#introduction">Introduction</a>
<a class="nav-link" href="#basics">Java Basics</a>
<a class="nav-link" href="#oop">OOP Concepts</a>
<a class="nav-link" href="#collections">Collections Framework</a>
<a class="nav-link" href="#exception">Exception Handling</a>
<a class="nav-link" href="#multithreading">Multithreading</a>
</nav>
<hr class="my-3"/>
<h6 class="sidebar-subtitle mb-2">Other Java Topics</h6>
<nav class="nav flex-column small">
<a class="nav-link" href="advanced-java">Advanced Java</a>
<a class="nav-link" href="spring">Spring Framework</a>
<a class="nav-link" href="spring-boot">Spring Boot</a>
<a class="nav-link" href="kafka">Apache Kafka</a>
</nav>
</div>
</div>
</aside>
<div class="offcanvas offcanvas-start d-lg-none" id="tutorialSidebar" tabindex="-1">
<div class="offcanvas-header">
<h5 class="offcanvas-title"><i class="bi bi-cup-hot"></i> Core Java</h5>
<button class="btn-close" data-bs-dismiss="offcanvas" type="button"></button>
</div>
<div class="offcanvas-body">
<nav class="nav flex-column">
<a class="nav-link active" data-bs-dismiss="offcanvas" href="#introduction">Introduction</a>
<a class="nav-link" data-bs-dismiss="offcanvas" href="#basics">Java Basics</a>
<a class="nav-link" data-bs-dismiss="offcanvas" href="#oop">OOP Concepts</a>
<a class="nav-link" data-bs-dismiss="offcanvas" href="#collections">Collections Framework</a>
<a class="nav-link" data-bs-dismiss="offcanvas" href="#exception">Exception Handling</a>
<a class="nav-link" data-bs-dismiss="offcanvas" href="#multithreading">Multithreading</a>
</nav>
</div>
</div>
<main class="col-lg-9 px-md-4 py-4 tutorial-content">
<nav aria-label="breadcrumb" class="mb-4">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="../">Home</a></li>
<li class="breadcrumb-item"><a href="../#tutorials">Tutorials</a></li>
<li class="breadcrumb-item">Java Technologies</li>
<li class="breadcrumb-item active">Core Java</li>
</ol>
</nav>
<article>
<section class="mb-5" id="introduction">
<h1 class="display-5 fw-bold mb-4">Core Java Tutorial</h1>
<p class="lead">
                            Learn Java programming from scratch. Master the fundamentals of Java, object-oriented programming, 
                            collections, exception handling, and multithreading.
                        </p>
<div class="alert alert-info">
<i class="bi bi-info-circle"></i> <strong>What you'll learn:</strong> 
                            Java syntax, OOP principles, data structures, exception handling, multithreading, and best practices.
                        </div>
</section>
<section class="mb-5" id="basics">
<h2 class="mb-3">Java Basics</h2>
<p>Java is a high-level, object-oriented programming language designed to have minimal implementation dependencies.</p>
<h3 class="h4 mt-4">Hello World Program</h3>
<div class="code-block-wrapper mb-3">
<div class="code-block-header"><span class="code-language">Java</span></div>
<pre><code class="language-java">public class HelloWorld {
    public static void main(String[] args) {
        System.out.println("Hello, World!");
    }
}</code></pre>
</div>
<h3 class="h4 mt-4">Variables and Data Types</h3>
<div class="code-block-wrapper mb-3">
<div class="code-block-header"><span class="code-language">Java</span></div>
<pre><code class="language-java">// Primitive data types
int age = 25;
double salary = 50000.50;
boolean isActive = true;
char grade = 'A';

// Reference types
String name = "John Doe";
int[] numbers = {1, 2, 3, 4, 5};

// Constants
final double PI = 3.14159;</code></pre>
</div>
</section>
<section class="mb-5" id="oop">
<h2 class="mb-3">Object-Oriented Programming</h2>
<p>Java is built on four fundamental OOP principles: Encapsulation, Inheritance, Polymorphism, and Abstraction.</p>
<h3 class="h4 mt-4">Classes and Objects</h3>
<div class="code-block-wrapper mb-3">
<div class="code-block-header"><span class="code-language">Java</span></div>
<pre><code class="language-java">public class Student {
    // Fields (Encapsulation)
    private String name;
    private int age;
    
    // Constructor
    public Student(String name, int age) {
        this.name = name;
        this.age = age;
    }
    
    // Getters and Setters
    public String getName() {
        return name;
    }
    
    public void setName(String name) {
        this.name = name;
    }
    
    // Method
    public void displayInfo() {
        System.out.println("Name: " + name + ", Age: " + age);
    }
}

// Usage
Student student = new Student("Alice", 20);
student.displayInfo();</code></pre>
</div>
<h3 class="h4 mt-4">Inheritance</h3>
<div class="code-block-wrapper mb-3">
<div class="code-block-header"><span class="code-language">Java</span></div>
<pre><code class="language-java">// Parent class
class Animal {
    protected String name;
    
    public void eat() {
        System.out.println(name + " is eating");
    }
}

// Child class
class Dog extends Animal {
    public Dog(String name) {
        this.name = name;
    }
    
    public void bark() {
        System.out.println(name + " is barking");
    }
}

// Usage
Dog dog = new Dog("Buddy");
dog.eat();  // Inherited method
dog.bark(); // Own method</code></pre>
</div>
</section>
<section class="mb-5" id="collections">
<h2 class="mb-3">Collections Framework</h2>
<p>Java Collections Framework provides data structures and algorithms to store and manipulate groups of objects.</p>
<div class="code-block-wrapper mb-3">
<div class="code-block-header"><span class="code-language">Java</span></div>
<pre><code class="language-java">import java.util.*;

// ArrayList - Dynamic array
List&lt;String&gt; names = new ArrayList&lt;&gt;();
names.add("Alice");
names.add("Bob");
names.add("Charlie");

// HashMap - Key-value pairs
Map&lt;String, Integer&gt; ages = new HashMap&lt;&gt;();
ages.put("Alice", 25);
ages.put("Bob", 30);

// HashSet - Unique elements
Set&lt;Integer&gt; uniqueNumbers = new HashSet&lt;&gt;();
uniqueNumbers.add(1);
uniqueNumbers.add(2);
uniqueNumbers.add(1); // Duplicate, won't be added

// Iterating
for (String name : names) {
    System.out.println(name);
}</code></pre>
</div>
</section>
<section class="mb-5" id="exception">
<h2 class="mb-3">Exception Handling</h2>
<p>Exception handling in Java is a mechanism to handle runtime errors and maintain normal application flow.</p>
<div class="code-block-wrapper mb-3">
<div class="code-block-header"><span class="code-language">Java</span></div>
<pre><code class="language-java">// Try-catch block
try {
    int result = 10 / 0; // ArithmeticException
} catch (ArithmeticException e) {
    System.out.println("Error: " + e.getMessage());
} finally {
    System.out.println("This always executes");
}

// Multiple catch blocks
try {
    String str = null;
    str.length(); // NullPointerException
} catch (NullPointerException e) {
    System.out.println("Null pointer error");
} catch (Exception e) {
    System.out.println("General error");
}

// Custom exceptions
class CustomException extends Exception {
    public CustomException(String message) {
        super(message);
    }
}

public void validate(int age) throws CustomException {
    if (age &lt; 18) {
        throw new CustomException("Age must be 18 or above");
    }
}</code></pre>
</div>
</section>
<section class="mb-5" id="multithreading">
<h2 class="mb-3">Multithreading</h2>
<p>Multithreading allows concurrent execution of two or more threads for maximum CPU utilization.</p>
<div class="code-block-wrapper mb-3">
<div class="code-block-header"><span class="code-language">Java</span></div>
<pre><code class="language-java">// Method 1: Extending Thread class
class MyThread extends Thread {
    public void run() {
        System.out.println("Thread is running");
    }
}

// Method 2: Implementing Runnable interface
class MyRunnable implements Runnable {
    public void run() {
        for (int i = 0; i &lt; 5; i++) {
            System.out.println(Thread.currentThread().getName() + ": " + i);
            try {
                Thread.sleep(1000);
            } catch (InterruptedException e) {
                e.printStackTrace();
            }
        }
    }
}

// Usage
MyThread thread1 = new MyThread();
thread1.start();

Thread thread2 = new Thread(new MyRunnable());
thread2.start();</code></pre>
</div>
</section>
<div class="d-flex justify-content-between mt-5 pt-4 border-top">
<a class="btn btn-outline-secondary" href="../">
<i class="bi bi-arrow-left"></i> Back to Home
                        </a>
<a class="btn btn-outline-secondary" href="advanced-java">
                            Next: Advanced Java <i class="bi bi-arrow-right"></i>
</a>
</div>
</article>
</main>
</div>
</div>

<script crossorigin="anonymous" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-core.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/autoloader/prism-autoloader.min.js"></script>
<script src="../js/theme-toggle.js"></script>
<script src="../js/navigation.js"></script>
<script src="../js/mobile-sidebar.js"></script>


<?php include '../../includes/footer.php'; ?>
