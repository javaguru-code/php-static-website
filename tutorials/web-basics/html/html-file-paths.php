<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'Full Stack Master - Html File Paths';
$page_description = 'Full Stack Master - Programming Tutorials';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;
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
        <section class="section">
            <h1 class="mb-4">HTML File Paths</h1>
            <p>File paths are used to link external resources such as images, videos, style sheets, JavaScript files, and other web pages. Understanding how to properly reference these files is crucial for web development.</p>
        </section>

        <section class="section">
            <h2 class="mt-5 mb-3">Types of File Paths</h2>
            <p>There are two main types of file paths in HTML:</p>
            <ul>
                <li><strong>Absolute File Paths</strong> - The full URL to an internet file</li>
                <li><strong>Relative File Paths</strong> - Path relative to the current web page's location</li>
            </ul>
        </section>

        <section class="section">
            <h2 class="mt-5 mb-3">Absolute File Paths</h2>
            <p>An absolute file path is the full URL to an internet file. It always includes the domain name and the full path to the file.</p>
            <div class="code-block">
                <pre><code class="language-html">&lt;img src="https://www.example.com/images/picture.jpg" alt="Example Image"&gt;
&lt;link rel="stylesheet" href="https://www.example.com/css/styles.css"&gt;
&lt;script src="https://www.example.com/js/script.js"&gt;&lt;/script&gt;</code></pre>
            </div>
            <div class="alert alert-info mt-3">
                <i class="bi bi-info-circle-fill me-2"></i>
                <strong>Note:</strong> While absolute paths work, they make your website less portable. If your domain changes, you'll need to update all these paths.
            </div>
        </section>

        <section class="section">
            <h2 class="mt-5 mb-3">Relative File Paths</h2>
            <p>Relative paths are defined based on the location of the current web page. They are more flexible and commonly used in web development.</p>
            
            <h3 class="mt-4">Same Folder</h3>
            <p>If the file is in the same folder as the current page, just use the file name.</p>
            <div class="code-block">
                <pre><code class="language-html">&lt;img src="logo.png" alt="Logo"&gt;
&lt;a href="about.html"&gt;About Us&lt;/a&gt;</code></pre>
            </div>

            <h3 class="mt-4">Folder Inside Current Folder</h3>
            <p>If the file is in a subfolder, specify the folder name followed by a forward slash and then the file name.</p>
            <div class="code-block">
                <pre><code class="language-html">&lt;img src="images/photo.jpg" alt="Photo"&gt;
&lt;script src="js/script.js"&gt;&lt;/script&gt;</code></pre>
            </div>

            <h3 class="mt-4">Parent Folder</h3>
            <p>Use <code>../</code> to move up one folder level.</p>
            <div class="code-block">
                <pre><code class="language-html">&lt;img src="../images/logo.png" alt="Logo"&gt;
&lt;link rel="stylesheet" href="../css/styles.css"&gt;</code></pre>
            </div>

            <h3 class="mt-4">Root-Relative Paths</h3>
            <p>Paths that start with a forward slash <code>/</code> are relative to the root of the website.</p>
            <div class="code-block">
                <pre><code class="language-html">&lt;img src="/images/header.jpg" alt="Header"&gt;
&lt;link rel="stylesheet" href="/css/main.css"&gt;</code></pre>
            </div>
        </section>

        <section class="section">
            <h2 class="mt-5 mb-3">Best Practices</h2>
            <ul>
                <li>Use relative paths for resources within your website for better portability</li>
                <li>Be consistent with your path structure throughout the project</li>
                <li>Use lowercase letters for file and folder names to avoid case-sensitivity issues</li>
                <li>Use hyphens (-) instead of spaces in file and folder names</li>
                <li>Keep your directory structure organized and logical</li>
            </ul>
        </section>

        <section class="section">
            <h2 class="mt-5 mb-3">Common Mistakes to Avoid</h2>
            <div class="alert alert-warning">
                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                <strong>Watch out for these common issues:</strong>
                <ul class="mt-2 mb-0">
                    <li>Forgetting the file extension (e.g., <code>.html</code>, <code>.jpg</code>, <code>.css</code>)</li>
                    <li>Using backslashes (<code>\</code>) instead of forward slashes (<code>/</code>)</li>
                    <li>Case sensitivity issues (especially when deploying to case-sensitive servers)</li>
                    <li>Incorrect relative paths when moving files between directories</li>
                </ul>
            </div>
        </section>
    </article>
</main>

<?php include_file('includes/footer.php'); ?>