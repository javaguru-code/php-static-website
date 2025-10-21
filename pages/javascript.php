<?php
$page_title = 'JavaScript Tutorial - Full Stack Master';
$page_description = 'Full Stack Master - Programming Tutorials';
$base_url = '../';
$css_path = '../';
$js_path = '../';
include '../includes/header.php';
?>


<!-- ============================================
         SECTION: Top Navigation Bar
         - Same navigation structure as main pages
    ============================================= -->

<!-- ============================================
         SECTION: Tutorial Layout with Sidebar
         - Left sidebar: Tutorial navigation (desktop), off-canvas (mobile)
         - Right content area: Tutorial content
    ============================================= -->
<div class="container-fluid">
<div class="row">
<!-- ============================================
                 SIDEBAR: Tutorial Navigation
                 - Persistent on desktop (col-lg-3)
                 - Off-canvas on mobile (toggleable)
            ============================================= -->
<aside class="col-lg-3 d-none d-lg-block sidebar-nav p-0">
<div class="sticky-top pt-3" style="top: 70px;">
<div class="sidebar-content px-3">
<h5 class="sidebar-title mb-3">
<i class="bi bi-book"></i> JavaScript Tutorial
                        </h5>
<!-- Tutorial Navigation Menu -->
<nav class="nav flex-column">
<a class="nav-link active" href="#introduction">Introduction</a>
<a class="nav-link" href="#variables">Variables &amp; Data Types</a>
<a class="nav-link" href="#functions">Functions</a>
<a class="nav-link" href="#arrays">Arrays &amp; Objects</a>
<a class="nav-link" href="#async">Async Programming</a>
<a class="nav-link" href="#dom">DOM Manipulation</a>
<a class="nav-link" href="#code-runner">Try Code Online</a>
</nav>
<hr class="my-3"/>
<h6 class="sidebar-subtitle mb-2">Other Tutorials</h6>
<nav class="nav flex-column small">
<a class="nav-link" href="html">HTML</a>
<a class="nav-link" href="css">CSS</a>
<a class="nav-link" href="react">React</a>
<a class="nav-link" href="nodejs">Node.js</a>
</nav>
</div>
</div>
</aside>
<!-- Mobile Off-canvas Sidebar -->
<div class="offcanvas offcanvas-start d-lg-none" id="tutorialSidebar" tabindex="-1">
<div class="offcanvas-header">
<h5 class="offcanvas-title">
<i class="bi bi-book"></i> JavaScript Tutorial
                    </h5>
<button class="btn-close" data-bs-dismiss="offcanvas" type="button"></button>
</div>
<div class="offcanvas-body">
<nav class="nav flex-column">
<a class="nav-link active" data-bs-dismiss="offcanvas" href="#introduction">Introduction</a>
<a class="nav-link" data-bs-dismiss="offcanvas" href="#variables">Variables &amp; Data Types</a>
<a class="nav-link" data-bs-dismiss="offcanvas" href="#functions">Functions</a>
<a class="nav-link" data-bs-dismiss="offcanvas" href="#arrays">Arrays &amp; Objects</a>
<a class="nav-link" data-bs-dismiss="offcanvas" href="#async">Async Programming</a>
<a class="nav-link" data-bs-dismiss="offcanvas" href="#dom">DOM Manipulation</a>
<a class="nav-link" data-bs-dismiss="offcanvas" href="#code-runner">Try Code Online</a>
</nav>
<hr/>
<h6>Other Tutorials</h6>
<nav class="nav flex-column">
<a class="nav-link" href="html">HTML</a>
<a class="nav-link" href="css">CSS</a>
<a class="nav-link" href="react">React</a>
<a class="nav-link" href="nodejs">Node.js</a>
</nav>
</div>
</div>
<!-- ============================================
                 CONTENT AREA: Tutorial Content
                 - Takes remaining space after sidebar
            ============================================= -->
<main class="col-lg-9 px-md-4 py-4 tutorial-content">
<!-- Breadcrumb -->
<nav aria-label="breadcrumb" class="mb-4">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="../">Home</a></li>
<li class="breadcrumb-item"><a href="../#tutorials">Tutorials</a></li>
<li class="breadcrumb-item active">JavaScript</li>
</ol>
</nav>
<!-- Tutorial Content -->
<article>
<!-- Introduction Section -->
<section class="mb-5" id="introduction">
<h1 class="display-5 fw-bold mb-4">JavaScript Tutorial</h1>
<p class="lead">
                            JavaScript is the programming language of the web. Learn JavaScript from basics to advanced concepts 
                            with interactive examples and hands-on practice.
                        </p>
<div class="alert alert-info">
<i class="bi bi-info-circle"></i> <strong>What you'll learn:</strong> 
                            Variables, functions, arrays, objects, async programming, DOM manipulation, and modern ES6+ features.
                        </div>
</section>
<!-- Variables Section -->
<section class="mb-5" id="variables">
<h2 class="mb-3">Variables &amp; Data Types</h2>
<p>JavaScript has three ways to declare variables: <code>var</code>, <code>let</code>, and <code>const</code>.</p>
<!-- Code Example with Syntax Highlighting -->
<div class="code-block-wrapper mb-3">
<div class="code-block-header">
<span class="code-language">JavaScript</span>
</div>
<pre><code class="language-javascript">// Variable declarations
let name = "John Doe";          // String
const age = 30;                 // Number
let isStudent = true;           // Boolean
let grades = [85, 90, 88];      // Array
let person = {                  // Object
    firstName: "John",
    lastName: "Doe"
};

// Template literals (ES6+)
console.log(`My name is ${name} and I'm ${age} years old.`);</code></pre>
</div>
<div class="alert alert-warning">
<i class="bi bi-lightbulb"></i> <strong>Best Practice:</strong> 
                            Use <code>const</code> by default, <code>let</code> when you need to reassign, avoid <code>var</code>.
                        </div>
</section>
<!-- Functions Section -->
<section class="mb-5" id="functions">
<h2 class="mb-3">Functions</h2>
<p>Functions are reusable blocks of code. JavaScript supports multiple ways to define functions.</p>
<div class="code-block-wrapper mb-3">
<div class="code-block-header">
<span class="code-language">JavaScript</span>
</div>
<pre><code class="language-javascript">// Function declaration
function greet(name) {
    return `Hello, ${name}!`;
}

// Arrow function (ES6+)
const greetArrow = (name) =&gt; `Hello, ${name}!`;

// Function with default parameters
const multiply = (a, b = 1) =&gt; a * b;

console.log(greet("Alice"));        // "Hello, Alice!"
console.log(multiply(5, 3));        // 15
console.log(multiply(5));           // 5 (uses default b = 1)</code></pre>
</div>
</section>
<!-- Arrays Section -->
<section class="mb-5" id="arrays">
<h2 class="mb-3">Arrays &amp; Objects</h2>
<p>Arrays and objects are fundamental data structures in JavaScript.</p>
<div class="code-block-wrapper mb-3">
<div class="code-block-header">
<span class="code-language">JavaScript</span>
</div>
<pre><code class="language-javascript">// Array methods
const numbers = [1, 2, 3, 4, 5];

const doubled = numbers.map(n =&gt; n * 2);        // [2, 4, 6, 8, 10]
const evens = numbers.filter(n =&gt; n % 2 === 0); // [2, 4]
const sum = numbers.reduce((acc, n) =&gt; acc + n, 0); // 15

// Object destructuring
const user = { name: "John", age: 30, city: "NYC" };
const { name, age } = user;

// Spread operator
const newUser = { ...user, country: "USA" };</code></pre>
</div>
</section>
<!-- Async Section -->
<section class="mb-5" id="async">
<h2 class="mb-3">Async Programming</h2>
<p>JavaScript handles asynchronous operations using Promises and async/await.</p>
<div class="code-block-wrapper mb-3">
<div class="code-block-header">
<span class="code-language">JavaScript</span>
</div>
<pre><code class="language-javascript">// Async/await example
async function fetchUserData(userId) {
    try {
        const response = await fetch(`/api/users/${userId}`);
        const data = await response.json();
        return data;
    } catch (error) {
        console.error("Error fetching user:", error);
    }
}

// Using the async function
fetchUserData(123).then(user =&gt; {
    console.log(user);
});</code></pre>
</div>
</section>
<!-- DOM Section -->
<section class="mb-5" id="dom">
<h2 class="mb-3">DOM Manipulation</h2>
<p>The Document Object Model (DOM) allows JavaScript to interact with HTML elements.</p>
<div class="code-block-wrapper mb-3">
<div class="code-block-header">
<span class="code-language">JavaScript</span>
</div>
<pre><code class="language-javascript">// Selecting elements
const button = document.querySelector('#myButton');
const items = document.querySelectorAll('.list-item');

// Adding event listeners
button.addEventListener('click', () =&gt; {
    console.log('Button clicked!');
});

// Creating and appending elements
const newDiv = document.createElement('div');
newDiv.textContent = 'Hello World';
newDiv.classList.add('highlight');
document.body.appendChild(newDiv);</code></pre>
</div>
</section>
<!-- ============================================
                         SECTION: Interactive Code Runner
                         - Textarea for HTML/CSS/JS input
                         - Run button to execute code
                         - Output iframe for results
                    ============================================= -->
<section class="mb-5" id="code-runner">
<h2 class="mb-3">
<i class="bi bi-play-circle"></i> Try JavaScript Online
                        </h2>
<p>Write and run JavaScript code directly in your browser. Try the examples above or write your own!</p>
<div class="card shadow-sm">
<div class="card-header bg-body-secondary">
<div class="d-flex justify-content-between align-items-center">
<span><i class="bi bi-code-slash"></i> Code Editor</span>
<div>
<button class="btn btn-success btn-sm" id="runCode">
<i class="bi bi-play-fill"></i> Run Code
                                        </button>
<button class="btn btn-outline-secondary btn-sm" id="clearCode">
<i class="bi bi-x-circle"></i> Clear
                                        </button>
</div>
</div>
</div>
<div class="card-body p-0">
<!-- Code Input Tabs -->
<ul class="nav nav-tabs px-3 pt-2" role="tablist">
<li class="nav-item">
<button class="nav-link active" data-bs-target="#htmlTab" data-bs-toggle="tab">HTML</button>
</li>
<li class="nav-item">
<button class="nav-link" data-bs-target="#cssTab" data-bs-toggle="tab">CSS</button>
</li>
<li class="nav-item">
<button class="nav-link" data-bs-target="#jsTab" data-bs-toggle="tab">JavaScript</button>
</li>
</ul>
<!-- Tab Content -->
<div class="tab-content">
<div class="tab-pane fade show active" id="htmlTab">
<textarea class="code-input" id="htmlCode" placeholder="Enter HTML code here...">
&lt;h1&gt;Hello World&lt;/h1&gt;
&lt;button id="btn"&gt;Click Me&lt;/button&gt;
&lt;p id="output"&gt;&lt;/p&gt;</textarea>
</div>
<div class="tab-pane fade" id="cssTab">
<textarea class="code-input" id="cssCode" placeholder="Enter CSS code here...">
h1 { color: #007bff; }
button { 
    padding: 10px 20px;
    background: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}</textarea>
</div>
<div class="tab-pane fade" id="jsTab">
<textarea class="code-input" id="jsCode" placeholder="Enter JavaScript code here...">
document.getElementById('btn').addEventListener('click', () =&gt; {
    document.getElementById('output').textContent = 'Button clicked!';
});</textarea>
</div>
</div>
</div>
</div>
<!-- Output Frame -->
<div class="card shadow-sm mt-3">
<div class="card-header bg-body-secondary">
<i class="bi bi-window"></i> Output
                            </div>
<div class="card-body p-0">
<iframe class="code-output-frame" id="outputFrame" sandbox="allow-scripts"></iframe>
</div>
</div>
<div class="alert alert-info mt-3">
<i class="bi bi-shield-check"></i> <strong>Safe Environment:</strong> 
                            The code runs in a sandboxed iframe for security. Only HTML, CSS, and JavaScript are supported.
                        </div>
</section>
<!-- Navigation Buttons -->
<div class="d-flex justify-content-between mt-5 pt-4 border-top">
<a class="btn btn-outline-secondary" href="css">
<i class="bi bi-arrow-left"></i> Previous: CSS
                        </a>
<a class="btn btn-outline-secondary" href="react">
                            Next: React <i class="bi bi-arrow-right"></i>
</a>
</div>
</article>
</main>
</div>
</div>
<!-- Footer -->


<!-- Prism.js for Syntax Highlighting -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-core.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/autoloader/prism-autoloader.min.js"></script>
<!-- Custom JavaScript -->
<script src="../js/theme-toggle.js"></script>
<script src="../js/navigation.js"></script>
<script src="../js/sidebar.js"></script>
<script src="../js/code-runner.js"></script>


<?php include '../includes/footer.php'; ?>
