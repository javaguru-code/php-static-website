<?php
// Include config first to get helper functions
require_once dirname(__DIR__, 2) . '/includes/config.php';

// Use the base URL from environment
$base_url = get_base_url();

// Page metadata
$page_title = 'JVM, JRE, JDK - Java Interview Guide | Full Stack Master';
$page_description = 'Learn about JVM, JRE, and JDK - core components of Java platform. Understand their differences, responsibilities, and how they work together.';

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
                <li class="breadcrumb-item active" aria-current="page">JVM, JRE, JDK</li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="mb-4">
            <h1 class="display-4 fw-bold text-primary mb-4">JVM, JRE, and JDK</h1>
            
            <div class="alert alert-info">
                <i class="bi bi-info-circle-fill me-2"></i> Understanding JVM, JRE, and JDK is fundamental to Java development. These components work together to compile and run Java applications.
            </div>
            
            <!-- Overview Section -->
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    <h2 class="h4 mb-4">Overview</h2>
                    
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="mb-0">JDK (Java Development Kit)</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">A software development environment used for developing Java applications and applets. It includes JRE and development tools.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="mb-0">JRE (Java Runtime Environment)</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Provides the minimum requirements for executing a Java application; consists of the JVM, core classes, and supporting files.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="mb-0">JVM (Java Virtual Machine)</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">An abstract machine that provides a runtime environment in which Java bytecode can be executed.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="alert alert-secondary">
                        <i class="bi bi-lightbulb-fill me-2"></i>
                        <strong>Key Relationship:</strong> JDK = JRE + Development Tools | JRE = JVM + Class Libraries
                    </div>
                </div>
            </div>
            
            <!-- Interview Questions -->
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    <h2 class="h4 mb-4">Interview Questions</h2>
                    
                    <!-- Question 1 -->
                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">1. What is the difference between JVM, JRE, and JDK?</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Component</th>
                                            <th>Description</th>
                                            <th>Purpose</th>
                                            <th>Contains</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>JDK</strong></td>
                                            <td>Java Development Kit</td>
                                            <td>For development and compilation</td>
                                            <td>JRE + Development Tools (javac, java, javadoc, etc.)</td>
                                        </tr>
                                        <tr>
                                            <td><strong>JRE</strong></td>
                                            <td>Java Runtime Environment</td>
                                            <td>For running Java applications</td>
                                            <td>JVM + Class Libraries + Other Components</td>
                                        </tr>
                                        <tr>
                                            <td><strong>JVM</strong></td>
                                            <td>Java Virtual Machine</td>
                                            <td>Runtime environment for bytecode</td>
                                            <td>Provides runtime environment to execute Java bytecode</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 2 -->
                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">2. What are the main responsibilities of JVM?</h5>
                        </div>
                        <div class="card-body">
                            <p>The Java Virtual Machine (JVM) has several key responsibilities:</p>
                            <ul>
                                <li><strong>Class Loading:</strong> Loads .class files into memory</li>
                                <li><strong>Bytecode Verification:</strong> Verifies the bytecode for security and integrity</li>
                                <li><strong>Memory Management:</strong> Manages memory allocation and garbage collection</li>
                                <li><strong>Execution:</strong> Executes the bytecode using interpreter and JIT compiler</li>
                                <li><strong>Runtime Environment:</strong> Provides runtime environment for Java applications</li>
                                <li><strong>Security:</strong> Implements security features like bytecode verification and security manager</li>
                                <li><strong>Platform Independence:</strong> Provides platform independence by abstracting the underlying OS</li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Question 3 -->
                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">3. Is JVM platform-dependent or platform-independent? Explain.</h5>
                        </div>
                        <div class="card-body">
                            <p>The JVM is <strong>platform-dependent</strong> but enables Java to be <strong>platform-independent</strong>:</p>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-3">
                                        <div class="card-header bg-light">
                                            <h6 class="mb-0">JVM is Platform-Dependent</h6>
                                        </div>
                                        <div class="card-body">
                                            <p>The JVM itself is implemented differently for each operating system and hardware architecture. You need a specific JVM for Windows, Linux, macOS, etc.</p>
                                            <p>Example: <code>jvm.dll</code> (Windows), <code>libjvm.so</code> (Linux), <code>libjvm.dylib</code> (macOS)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header bg-light">
                                            <h6 class="mb-0">Java is Platform-Independent</h6>
                                        </div>
                                        <div class="card-body">
                                            <p>Java source code is compiled to bytecode (.class files) that can run on any JVM, regardless of the underlying platform. This is the "Write Once, Run Anywhere" (WORA) principle.</p>
                                            <p>Example: The same .class file can run on Windows JVM, Linux JVM, or macOS JVM without recompilation.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 4 -->
                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">4. Can you run a Java program without JDK?</h5>
                        </div>
                        <div class="card-body">
                            <p>Yes, you can run a Java program without JDK, but you need at least the JRE (Java Runtime Environment) installed. Here's the breakdown:</p>
                            
                            <ul>
                                <li><strong>To develop and compile Java programs:</strong> You need JDK (which includes JRE)</li>
                                <li><strong>To only run Java programs:</strong> You only need JRE</li>
                            </ul>
                            
                            <p>However, in practice, most modern Java distributions (like OpenJDK) don't provide a separate JRE anymore. The JDK is the standard installation, and you can use it to both develop and run Java applications.</p>
                            
                            <div class="alert alert-warning">
                                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                <strong>Note:</strong> Since Java 9, the JRE has been phased out in favor of the JDK, which includes all necessary components for both development and runtime.
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 5 -->
                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">5. What is the role of the Java compiler in the JDK?</h5>
                        </div>
                        <div class="card-body">
                            <p>The Java compiler (<code>javac</code>) is a key component of the JDK with the following responsibilities:</p>
                            
                            <ol>
                                <li><strong>Source Code Compilation:</strong> Converts Java source code (<code>.java</code> files) into bytecode (<code>.class</code> files)</li>
                                <li><strong>Syntax Checking:</strong> Validates the syntax of the source code</li>
                                <li><strong>Type Checking:</strong> Verifies type safety and proper usage of variables and methods</li>
                                <li><strong>Annotation Processing:</strong> Processes annotations in the source code</li>
                                <li><strong>Generating Debug Information:</strong> Includes line numbers and source file information for debugging</li>
                            </ol>
                            
                            <p>Example compilation command:</p>
                            <pre><code class="language-bash">javac HelloWorld.java  # Produces HelloWorld.class</code></pre>
                        </div>
                    </div>
                    
                    <!-- Question 6 -->
                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">6. What is the difference between a Java class file and source file?</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Aspect</th>
                                            <th>Source File (.java)</th>
                                            <th>Class File (.class)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>Extension</strong></td>
                                            <td><code>.java</code></td>
                                            <td><code>.class</code></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Content</strong></td>
                                            <td>Human-readable Java source code</td>
                                            <td>Bytecode (binary format) that JVM can execute</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Creation</strong></td>
                                            <td>Written by developers</td>
                                            <td>Generated by Java compiler (javac)</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Readability</strong></td>
                                            <td>Human-readable</td>
                                            <td>Not human-readable (can be decompiled)</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Execution</strong></td>
                                            <td>Cannot be executed directly</td>
                                            <td>Can be executed by JVM</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 7 -->
                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">7. What are the main memory areas managed by JVM?</h5>
                        </div>
                        <div class="card-body">
                            <p>The JVM divides memory into several runtime data areas:</p>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-3">
                                        <div class="card-header bg-light">
                                            <h6 class="mb-0">1. Method Area</h6>
                                        </div>
                                        <div class="card-body">
                                            <p>Stores class structure, constants, and method data. Shared among all threads.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="card mb-3">
                                        <div class="card-header bg-light">
                                            <h6 class="mb-0">2. Heap</h6>
                                        </div>
                                        <div class="card-body">
                                            <p>Runtime data area where objects are allocated. Shared among all threads.</p>
                                            <ul class="mb-0">
                                                <li>Young Generation (Eden, S0, S1)</li>
                                                <li>Old Generation (Tenured)</li>
                                                <li>Permanent Generation (Metaspace in Java 8+)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="card mb-3">
                                        <div class="card-header bg-light">
                                            <h6 class="mb-0">3. Stack</h6>
                                        </div>
                                        <div class="card-body">
                                            <p>Stores frames for each method call. Each thread has its own stack.</p>
                                            <p>Contains local variables, method parameters, and return values.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="card">
                                        <div class="card-header bg-light">
                                            <h6 class="mb-0">4. PC Registers & Native Method Stack</h6>
                                        </div>
                                        <div class="card-body">
                                            <p><strong>PC Register:</strong> Tracks the current execution point for each thread.</p>
                                            <p class="mb-0"><strong>Native Method Stack:</strong> Used for native methods (written in other languages).</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 8 -->
                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">8. What is bytecode in Java?</h5>
                        </div>
                        <div class="card-body">
                            <p>Bytecode is the intermediate representation of Java source code that is executed by the JVM. It's a set of instructions that are:</p>
                            
                            <ul>
                                <li><strong>Platform-independent:</strong> Same bytecode runs on any JVM, regardless of the underlying hardware/OS</li>
                                <li><strong>Compact:</strong> More compact than source code</li>
                                <li><strong>Verifiable:</strong> Can be verified by the JVM for security</li>
                                <li><strong>Portable:</strong> Can be transferred across networks</li>
                            </ul>
                            
                            <p>Example of bytecode (from <code>javap -c</code> output):</p>
                            <pre><code class="language-java">public static void main(java.lang.String[]);
  Code:
     0: getstatic     #2  // Field java/lang/System.out:Ljava/io/PrintStream;
     3: ldc           #3  // String Hello, World!
     5: invokevirtual #4  // Method java/io/PrintStream.println:(Ljava/lang/String;)V
     8: return</code></pre>
                        </div>
                    </div>
                    
                    <!-- Question 9 -->
                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">9. How does JVM perform garbage collection?</h5>
                        </div>
                        <div class="card-body">
                            <p>Garbage Collection (GC) in JVM is an automatic memory management process that identifies and removes objects that are no longer in use. Here's how it works:</p>
                            
                            <h6>Garbage Collection Process:</h6>
                            <ol>
                                <li><strong>Marking:</strong> Identifies which objects are in use and which are not</li>
                                <li><strong>Deletion:</strong> Removes unused objects (normal deletion or with compaction)</li>
                                <li><strong>Compacting:</strong> Moves remaining objects to make memory contiguous</li>
                            </ol>
                            
                            <h6 class="mt-4">Generational Garbage Collection:</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header bg-light">
                                            <h6 class="mb-0">Young Generation</h6>
                                        </div>
                                        <div class="card-body">
                                            <ul class="mb-0">
                                                <li>New objects are created here</li>
                                                <li>Collected by <strong>Minor GC</strong></li>
                                                <li>Divided into Eden and Survivor spaces</li>
                                                <li>Uses <strong>Copying</strong> algorithm</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header bg-light">
                                            <h6 class="mb-0">Old Generation</h6>
                                        </div>
                                        <div class="card-body">
                                            <ul class="mb-0">
                                                <li>Long-lived objects are promoted here</li>
                                                <li>Collected by <strong>Major GC</strong> (or Full GC)</li>
                                                <li>Larger in size</li>
                                                <li>Uses <strong>Mark-Sweep-Compact</strong> algorithm</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="alert alert-info mt-3">
                                <i class="bi bi-info-circle-fill me-2"></i>
                                <strong>Note:</strong> Different GC algorithms are available (Serial, Parallel, CMS, G1, ZGC, Shenandoah) with different characteristics for throughput, pause times, and memory overhead.
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 10 -->
                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">10. What is the difference between JIT compiler and JVM interpreter?</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Aspect</th>
                                            <th>JIT Compiler</th>
                                            <th>Interpreter</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>Execution</strong></td>
                                            <td>Compiles bytecode to native machine code at runtime</td>
                                            <td>Reads and executes bytecode line by line</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Performance</strong></td>
                                            <td>Faster execution after initial compilation</td>
                                            <td>Slower execution as it interprets each instruction</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Startup Time</strong></td>
                                            <td>Slower startup due to compilation overhead</td>
                                            <td>Faster startup as no compilation is needed</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Memory Usage</strong></td>
                                            <td>Higher memory usage (stores compiled code)</td>
                                            <td>Lower memory usage</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Optimization</strong></td>
                                            <td>Can perform advanced optimizations</td>
                                            <td>Limited optimization capabilities</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <p class="mt-3">Modern JVMs use both in combination:</p>
                            <ol>
                                <li>Initially, bytecode is interpreted for fast startup</li>
                                <li>Frequently executed code (hot spots) are compiled to native code by the JIT compiler</li>
                                <li>The compiled code is cached for future use</li>
                            </ol>
                        </div>
                    </div>
                    
                    <!-- Question 11 -->
                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">11. What are the different types of JVM in the market?</h5>
                        </div>
                        <div class="card-body">
                            <p>There are several JVM implementations available, each with different characteristics:</p>
                            
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>JVM</th>
                                            <th>Vendor</th>
                                            <th>Key Features</th>
                                            <th>License</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>HotSpot</strong></td>
                                            <td>Oracle, OpenJDK</td>
                                            <td>Most widely used, good balance of features</td>
                                            <td>GPLv2+CE</td>
                                        </tr>
                                        <tr>
                                            <td><strong>OpenJ9 (Eclipse OpenJ9)</strong></td>
                                            <td>Eclipse Foundation (originally IBM)</td>
                                            <td>Low memory footprint, fast startup</td>
                                            <td>EPL-2.0</td>
                                        </tr>
                                        <tr>
                                            <td><strong>GraalVM</strong></td>
                                            <td>Oracle</td>
                                            <td>High-performance, polyglot capabilities</td>
                                            <td>GPLv2+CE</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Azul Zing</strong></td>
                                            <td>Azul Systems</td>
                                            <td>Low-latency GC (C4), enterprise features</td>
                                            <td>Commercial</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Amazon Corretto</strong></td>
                                            <td>Amazon</td>
                                            <td>No-cost, multi-platform, long-term support</td>
                                            <td>GPLv2+CE</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Microsoft Build of OpenJDK</strong></td>
                                            <td>Microsoft</td>
                                            <td>Optimized for Windows and Azure</td>
                                            <td>GPLv2+CE</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="alert alert-info mt-3">
                                <i class="bi bi-info-circle-fill me-2"></i>
                                <strong>Note:</strong> Most modern JVMs are based on OpenJDK, which is the reference implementation of the Java Platform, Standard Edition.
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 12 -->
                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">12. How does the ClassLoader work in JVM?</h5>
                        </div>
                        <div class="card-body">
                            <p>The ClassLoader is responsible for loading Java classes into the JVM at runtime. It follows a delegation model and has a hierarchical structure:</p>
                            
                            <h6>ClassLoader Hierarchy:</h6>
                            <ol>
                                <li><strong>Bootstrap ClassLoader (Primordial)</strong>
                                    <ul>
                                        <li>Written in native code (not Java)</li>
                                        <li>Loads core Java classes (java.lang.*, etc.) from rt.jar or modules</li>
                                        <li>Part of the JVM</li>
                                    </ul>
                                </li>
                                <li><strong>Extension ClassLoader</strong>
                                    <ul>
                                        <li>Child of Bootstrap ClassLoader</li>
                                        <li>Loads classes from Java extension directories</li>
                                        <li>Implemented by <code>sun.misc.Launcher$ExtClassLoader</code></li>
                                    </ul>
                                </li>
                                <li><strong>Application/System ClassLoader</strong>
                                    <ul>
                                        <li>Child of Extension ClassLoader</li>
                                        <li>Loads application classes from the classpath</li>
                                        <li>Implemented by <code>sun.misc.Launcher$AppClassLoader</code></li>
                                    </ul>
                                </li>
                                <li><strong>Custom ClassLoaders</strong>
                                    <ul>
                                        <li>Can be created by extending <code>java.lang.ClassLoader</code></li>
                                        <li>Used for loading classes from custom sources (network, encrypted files, etc.)</li>
                                        <li>Example: Web application servers use custom ClassLoaders for each webapp</li>
                                    </ul>
                                </li>
                            </ol>
                            
                            <h6 class="mt-4">Class Loading Process:</h6>
                            <ol>
                                <li><strong>Loading:</strong> Finds and loads the binary representation of a class</li>
                                <li><strong>Linking:</strong>
                                    <ul>
                                        <li>Verification: Ensures the class is valid</li>
                                        <li>Preparation: Allocates memory for class variables</li>
                                        <li>Resolution: Converts symbolic references to direct references</li>
                                    </ul>
                                </li>
                                <li><strong>Initialization:</strong> Executes static initializers and initializes static fields</li>
                            </ol>
                            
                            <div class="alert alert-warning mt-3">
                                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                <strong>Note:</strong> The ClassLoader follows the "parent-delegation model" - it delegates the class loading request to its parent first before attempting to load the class itself.
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 13 -->
                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">13. What happens when you run 'java MyProgram' command?</h5>
                        </div>
                        <div class="card-body">
                            <p>When you run <code>java MyProgram</code>, the following sequence of events occurs:</p>
                            
                            <ol>
                                <li><strong>Command Parsing:</strong>
                                    <ul>
                                        <li>The shell parses the command and invokes the <code>java</code> launcher</li>
                                        <li>JRE's <code>bin/java</code> executable is executed</li>
                                    </ul>
                                </li>
                                <li><strong>JVM Initialization:</strong>
                                    <ul>
                                        <li>JVM loads and initializes the native libraries</li>
                                        <li>Sets up the initial memory structures (heap, stack, etc.)</li>
                                        <li>Initializes the bootstrap class loader</li>
                                    </ul>
                                </li>
                                <li><strong>Class Loading:</strong>
                                    <ul>
                                        <li>Bootstrap class loader loads core Java classes</li>
                                        <li>Extension class loader loads extension classes</li>
                                        <li>Application class loader loads the <code>MyProgram</code> class and its dependencies</li>
                                    </ul>
                                </li>
                                <li><strong>Bytecode Verification:</strong>
                                    <ul>
                                        <li>Bytecode verifier checks the code for security and integrity</li>
                                        <li>Ensures the code follows Java's safety rules</li>
                                    </ul>
                                </li>
                                <li><strong>Execution:</strong>
                                    <ul>
                                        <li>JVM locates the <code>main</code> method in <code>MyProgram</code> class</li>
                                        <li>Creates the initial thread (main thread)</li>
                                        <li>Starts executing the <code>main</code> method</li>
                                        <li>Bytecode is either interpreted or compiled to native code by the JIT compiler</li>
                                    </ul>
                                </li>
                                <li><strong>Runtime:</strong>
                                    <ul>
                                        <li>Garbage Collection runs as needed to free memory</li>
                                        <li>JIT compiler optimizes frequently executed code</li>
                                    </ul>
                                </li>
                                <li><strong>Termination:</strong>
                                    <ul>
                                        <li>When the <code>main</code> method completes, the JVM starts the shutdown sequence</li>
                                        <li>All daemon threads are terminated</li>
                                        <li>JVM exits with status code (0 for normal termination)</li>
                                    </ul>
                                </li>
                            </ol>
                        </div>
                    </div>
                    
                    <!-- Question 14 -->
                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">14. Can JVM execute code written in other languages? If yes, how?</h5>
                        </div>
                        <div class="card-body">
                            <p>Yes, the JVM can execute code written in other languages through several mechanisms:</p>
                            
                            <h6>1. JVM Languages</h6>
                            <p>Many languages are designed to run on the JVM and can be compiled to Java bytecode:</p>
                            <ul>
                                <li><strong>Kotlin</strong> - Modern, concise language with full Java interoperability</li>
                                <li><strong>Scala</strong> - Functional and object-oriented language</li>
                                <li><strong>Groovy</strong> - Dynamic language with scripting capabilities</li>
                                <li><strong>Clojure</strong> - Lisp dialect for the JVM</li>
                                <li><strong>JRuby, Jython</strong> - Ruby and Python implementations for the JVM</li>
                            </ul>
                            
                            <h6 class="mt-4">2. Java Native Interface (JNI)</h6>
                            <p>Allows Java code to call and be called by native applications and libraries written in other languages (C, C++, etc.):</p>
                            <pre><code class="language-java">public class NativeExample {
    // Native method declaration
    public native void callNativeMethod();
    
    // Load native library
    static {
        System.loadLibrary("NativeLibrary");
    }
    
    public static void main(String[] args) {
        new NativeExample().callNativeMethod();
    }
}</code></pre>
                            
                            <h6 class="mt-4">3. Java Native Access (JNA)</h6>
                            <p>Simpler alternative to JNI that allows Java programs to access native shared libraries without writing any JNI code:</p>
                            <pre><code class="language-java">import com.sun.jna.Library;
import com.sun.jna.Native;

public class JNAExample {
    public interface CLibrary extends Library {
        // Load standard C library
        CLibrary INSTANCE = Native.load("c", CLibrary.class);
        
        // Map to printf function
        void printf(String format, Object... args);
    }
    
    public static void main(String[] args) {
        CLibrary.INSTANCE.printf("Hello from C via JNA!\n");
    }
}</code></pre>
                            
                            <h6 class="mt-4">4. GraalVM Polyglot API</h6>
                            <p>GraalVM provides a polyglot API that allows running code from multiple languages in the same application:</p>
                            <pre><code class="language-java">import org.graalvm.polyglot.*;

public class PolyglotExample {
    public static void main(String[] args) {
        // Run JavaScript
        try (Context context = Context.create()) {
            Value result = context.eval("js", "'Hello from ' + 'JavaScript'");
            System.out.println(result.asString());  // Output: Hello from JavaScript
        }
        
        // Run Python
        try (Context context = Context.create()) {
            Value result = context.eval("python", "'Hello from Python'.upper()");
            System.out.println(result.asString());  // Output: HELLO FROM PYTHON
        }
    }
}</code></pre>
                        </div>
                    </div>
                    
                    <!-- Question 15 -->
                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">15. What are the differences between HotSpot JVM and OpenJ9 JVM?</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Aspect</th>
                                            <th>HotSpot JVM</th>
                                            <th>OpenJ9 JVM</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>Origin</strong></td>
                                            <td>Originally developed by Sun Microsystems, now part of OpenJDK</td>
                                            <td>Originally developed by IBM as J9, now open-sourced as Eclipse OpenJ9</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Memory Footprint</strong></td>
                                            <td>Generally uses more memory</td>
                                            <td>Designed for low memory footprint (up to 50% less than HotSpot)</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Startup Time</strong></td>
                                            <td>Slower startup time</td>
                                            <td>Faster startup time (up to 50% faster)</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Garbage Collection</strong></td>
                                            <td>G1 (default), Parallel, CMS, ZGC, Shenandoah</td>
                                            <td>Balanced, Gencon, Metronome, Opennest</td>
                                        </tr>
                                        <tr>
                                            <td><strong>JIT Compilation</strong></td>
                                            <td>C1 (client), C2 (server) compilers</td>
                                            <td>Single optimizing JIT compiler with multiple tiers</td>
                                        </tr>
                                        <tr>
                                            <td><strong>AOT Compilation</strong></td>
                                            <td>Limited AOT support (jaotc tool)</td>
                                            <td>Better AOT support with Shared Classes Cache</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Container Support</strong></td>
                                            <td>Good, but higher base memory usage</td>
                                            <td>Excellent, with features specifically for containers</td>
                                        </tr>
                                        <tr>
                                            <td><strong>License</strong></td>
                                            <td>GPLv2 with Classpath Exception</td>
                                            <td>Eclipse Public License 2.0</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Use Cases</strong></td>
                                            <td>General purpose, enterprise applications</td>
                                            <td>Cloud-native, microservices, containers, resource-constrained environments</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="alert alert-info mt-3">
                                <i class="bi bi-info-circle-fill me-2"></i>
                                <strong>Note:</strong> The choice between HotSpot and OpenJ9 depends on your specific requirements. OpenJ9 is often better for cloud and containerized environments due to its lower memory footprint and faster startup times, while HotSpot might be preferred for its mature optimization for long-running applications.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Summary -->
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    <h2 class="h4 mb-4">Summary</h2>
                    <p>Understanding JVM, JRE, and JDK is crucial for any Java developer. Here are the key takeaways:</p>
                    
                    <ul>
                        <li><strong>JDK</strong> is the development environment for building applications, applets, and components</li>
                        <li><strong>JRE</strong> provides the runtime environment for executing Java applications</li>
                        <li><strong>JVM</strong> is the engine that executes Java bytecode</li>
                        <li>JVM provides platform independence through the "Write Once, Run Anywhere" principle</li>
                        <li>Memory management and garbage collection are handled automatically by the JVM</li>
                        <li>Different JVM implementations (HotSpot, OpenJ9, etc.) offer various optimizations for different use cases</li>
                    </ul>
                    
                    <div class="alert alert-success">
                        <i class="bi bi-lightbulb-fill me-2"></i>
                        <strong>Tip:</strong> When preparing for interviews, focus on understanding the relationship between these components, how class loading works, memory management, and garbage collection concepts.
                    </div>
                </div>
            </div>
        </div>
    </article>
</main>

<!-- Include the main JavaScript file -->
<script src="<?= $base_url ?>js/main.js"></script>

<?php include_file('includes/footer.php'); ?>
