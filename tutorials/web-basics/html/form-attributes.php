<?php
/**
 * Form Attributes Tutorial
 * 
 * This file demonstrates various HTML form attributes with examples and best practices.
 */

// Include configuration and setup
require_once __DIR__ . '/../../../includes/config.php';

// Set page metadata
$page_title = 'HTML Form Attributes - Full Stack Master';
$page_description = 'Comprehensive guide to all HTML form attributes with detailed examples and best practices for web development';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;

// Add Prism.js for code highlighting
$page_extra_head = '
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism-tomorrow.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/components/prism-markup-templating.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="' . $base_url . 'tutorials/web-basics/html/css/tutorial-styles.css">
<style>
    .form-demo {
        background-color: #f8f9fa;
        padding: 1.5rem;
        border-radius: 0.5rem;
        margin-bottom: 1.5rem;
    }
    .form-preview {
        border: 1px solid #dee2e6;
        border-radius: 0.375rem;
        padding: 1.5rem;
        margin-top: 1rem;
    }
    .attribute-example {
        margin-bottom: 2.5rem;
        padding: 1.5rem;
        background-color: #fff;
        border-radius: 0.5rem;
        box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075);
    }
    .attribute-example h3 {
        margin-top: 0;
        color: #0d6efd;
        border-bottom: 2px solid #dee2e6;
        padding-bottom: 0.5rem;
        margin-bottom: 1.5rem;
    }
    .attribute-example .demo {
        margin: 1.5rem 0;
        padding: 1.5rem;
        background-color: #f8f9fa;
        border-radius: 0.375rem;
        border: 1px solid #e9ecef;
    }
    .code-tabs {
        margin: 1.5rem 0;
    }
    .code-tabs .nav-tabs {
        margin-bottom: -1px;
    }
    .tab-content {
        border: 1px solid #dee2e6;
        border-top: none;
        border-radius: 0 0 0.375rem 0.375rem;
        padding: 1rem;
        background-color: #f8f9fa;
    }
    .form-badge {
        font-size: 0.8em;
        padding: 0.25em 0.6em;
        border-radius: 0.25rem;
        margin-left: 0.5rem;
    }
</style>';

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
                <h1 class="display-4 fw-bold text-primary">HTML Form Attributes</h1>
                <p class="lead">A comprehensive guide to all HTML form attributes with detailed examples and best practices.</p>
            </div>
        </div>

        <div class="alert alert-info">
            <h5><i class="fas fa-info-circle me-2"></i> About Form Attributes</h5>
            <p class="mb-0">Form attributes control how form data is submitted and processed. Understanding these attributes is essential for building effective and secure web forms.</p>
        </div>

        <!-- Action Attribute -->
        <section class="mb-5" id="action-attribute">
            <h2 class="mb-4"><code>action</code> Attribute</h2>
            <p>Specifies where to send the form data when the form is submitted.</p>
            
            <div class="card mb-4 border-primary">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">
                        <i class="fas fa-paper-plane me-2"></i>Form Action Example
                        <small class="d-block mt-1" action="/submit-form"</small>
                    </h5>
                </div>
                <div class="card-body">
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle me-2"></i>
                        This form will submit to: <code>/submit-form</code>
                    </div>
                    <form action="/submit-form" method="post" class="mb-3">
                        <div class="mb-3">
                            <label for="username" class="form-label">
                                <i class="fas fa-user me-1"></i> Username
                            </label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">
                            <i class="fas fa-paper-plane me-2"></i> Submit Form
                        </button>
                    </form>
                    <div class="alert alert-light border">
                        <small class="text-muted">
                            <i class="fas fa-code me-1"></i>
                            Form will submit to: <code>/submit-form</code> using POST method
                        </small>
                    </div>
                </div>
                <div class="card-footer bg-light">
                    <pre><code class="language-html">&lt;form action="/submit-form" method="post"&gt;
    &lt;input type="text" name="username" required&gt;
    &lt;button type="submit"&gt;Submit&lt;/button&gt;
&lt;/form&gt;</code></pre>
                </div>
            </div>

            <div class="alert alert-warning">
                <h6><i class="fas fa-exclamation-triangle me-2"></i> Important Notes</h6>
                <ul class="mb-0">
                    <li>If omitted, the form submits to the current page URL</li>
                    <li>Can be a relative or absolute URL</li>
                    <li>Always validate form data on the server-side</li>
                </ul>
            </div>
        </section>

        <!-- Method Attribute -->
        <section class="mb-5" id="method-attribute">
            <h2 class="mb-4"><span>method</span> Attribute</h2>
            <p>Defines the HTTP method used to send form data (GET or POST).</p>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">GET Method</h5>
                        </div>
                        <div class="card-body">
                            <form action="/search" method="get">
                                <div class="input-group">
                                    <input type="search" name="q" class="form-control" placeholder="Search..." required>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                            <small class="text-muted">Data is visible in URL: /search?q=term</small>
                        </div>
                        <div class="card-footer bg-light">
                            <pre><code class="language-html">&lt;form action="/search" method="get"&gt;
    &lt;input type="search" name="q" required&gt;
    &lt;button type="submit"&gt;Search&lt;/button&gt;
&lt;/form&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">POST Method</h5>
                        </div>
                        <div class="card-body">
                            <form action="/login" method="post">
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Login</button>
                            </form>
                            <small class="text-muted">Data is sent in the request body (not visible in URL)</small>
                        </div>
                        <div class="card-footer bg-light">
                            <pre><code class="language-html">&lt;form action="/login" method="post"&gt;
    &lt;input type="email" name="email" required&gt;
    &lt;input type="password" name="password" required&gt;
    &lt;button type="submit"&gt;Login&lt;/button&gt;
&lt;/form&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>

            <div class="alert alert-info mt-4">
                <h6><i class="fas fa-lightbulb me-2"></i> When to use GET vs POST</h6>
                <ul class="mb-0">
                    <li><strong>Use GET for:</strong> Search forms, filters, bookmarkable URLs</li>
                    <li><strong>Use POST for:</strong> Login forms, sensitive data, large data, file uploads</li>
                </ul>
            </div>
        </section>

        <!-- Enctype Attribute -->
        <section class="mb-5" id="enctype-attribute">
            <h2 class="mb-4"><code>enctype</code> Attribute</h2>
            <p>Specifies how form data should be encoded before sending it to the server.</p>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">Default</h5>
                            <small class="text-muted">application/x-www-form-urlencoded</small>
                        </div>
                        <div class="card-body">
                            <form action="/submit" method="post">
                                <div class="mb-3">
                                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                                </div>
                                <button type="submit" class="btn btn-outline-primary w-100">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">File Upload</h5>
                            <small class="text-muted">multipart/form-data</small>
                        </div>
                        <div class="card-body">
                            <form action="/upload" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <input type="file" name="file" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-outline-primary w-100">Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">Plain Text</h5>
                            <small class="text-muted">text/plain</small>
                        </div>
                        <div class="card-body">
                            <form action="/submit" method="post" enctype="text/plain">
                                <div class="mb-3">
                                    <textarea name="comment" class="form-control" placeholder="Your comment" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-outline-primary w-100">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Target Attribute -->
        <section class="mb-5" id="target-attribute">
            <h2 class="mb-4"><code>target</code> Attribute</h2>
            <p>Specifies where to display the response after form submission.</p>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">Same Tab (<code>_self</code>)</h5>
                        </div>
                        <div class="card-body">
                            <form action="/preview" method="post" target="_self">
                                <div class="input-group">
                                    <input type="text" name="preview" class="form-control" placeholder="Enter text to preview">
                                    <button type="submit" class="btn btn-primary">Preview</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">New Tab (<code>_blank</code>)</h5>
                        </div>
                        <div class="card-body">
                            <form action="/print" method="post" target="_blank" rel="noopener noreferrer">
                                <button type="submit" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-print me-2"></i> Print Preview
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Autocomplete Attribute -->
        <section class="mb-5" id="autocomplete-attribute">
            <h2 class="mb-4"><code>autocomplete</code> Attribute</h2>
            <p>Controls whether the browser should provide autofill suggestions for form fields.</p>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">Autocomplete On</h5>
                        </div>
                        <div class="card-body">
                            <form action="/signup" method="post" autocomplete="on">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">Autocomplete Off</h5>
                        </div>
                        <div class="card-body">
                            <form action="/login" method="post" autocomplete="off">
                                <div class="mb-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" autocomplete="new-password" required>
                                </div>
                                <button type="submit" class="btn btn-outline-primary w-100">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Novalidate Attribute -->
        <section class="mb-5" id="novalidate-attribute">
            <h2 class="mb-4"><code>novalidate</code> Attribute</h2>
            <p>Prevents the browser's default form validation, allowing for custom validation.</p>
            
            <div class="card">
                <div class="card-header bg-light">
                    <h5 class="mb-0">Custom Form Validation</h5>
                </div>
                <div class="card-body">
                    <form id="customValidation" novalidate>
                        <div class="mb-3">
                            <label for="customEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="customEmail" required>
                            <div class="invalid-feedback">
                                Please provide a valid email address.
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit with Custom Validation</button>
                    </form>
                </div>
                <div class="card-footer bg-light">
                    <pre><code class="language-html">&lt;form novalidate&gt;
    &lt;input type="email" required&gt;
    &lt;div class="invalid-feedback"&gt;
        Please provide a valid email address.
    &lt;/div&gt;
    &lt;button type="submit"&gt;Submit&lt;/button&gt;
&lt;/form&gt;

&lt;script&gt;
// Custom validation
const form = document.querySelector('form');
form.addEventListener('submit', function(event) {
    if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
    }
    form.classList.add('was-validated');
});
&lt;/script&gt;</code></pre>
                </div>
            </div>
        </section>

        <!-- Form Attributes Reference -->
        <section class="mb-5">
            <h2 class="mb-4">Form Attributes Reference</h2>
            
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>Attribute</th>
                            <th>Description</th>
                            <th>Values</th>
                            <th>Example</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>action</code></td>
                            <td>Where to send form data</td>
                            <td>URL</td>
                            <td><code>action="/submit"</code></td>
                        </tr>
                        <tr>
                            <td><code>method</code></td>
                            <td>HTTP method for form submission</td>
                            <td>get, post</td>
                            <td><code>method="post"</code></td>
                        </tr>
                        <tr>
                            <td><code>enctype</code></td>
                            <td>How form data is encoded</td>
                            <td>application/x-www-form-urlencoded,<br>multipart/form-data,<br>text/plain</td>
                            <td><code>enctype="multipart/form-data"</code></td>
                        </tr>
                        <tr>
                            <td><code>target</code></td>
                            <td>Where to display response</td>
                            <td>_self, _blank, _parent, _top</td>
                            <td><code>target="_blank"</code></td>
                        </tr>
                        <tr>
                            <td><code>autocomplete</code></td>
                            <td>Enable/disable autocomplete</td>
                            <td>on, off</td>
                            <td><code>autocomplete="off"</code></td>
                        </tr>
                        <tr>
                            <td><code>novalidate</code></td>
                            <td>Disable browser validation</td>
                            <td>novalidate</td>
                            <td><code>novalidate</code></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <div class="alert alert-success">
            <h5><i class="fas fa-check-circle me-2"></i> Form Submission Best Practices</h5>
            <ul class="mb-0">
                <li>Always use <code>method="post"</code> for forms that change data on the server</li>
                <li>Include <code>enctype="multipart/form-data"</code> for file uploads</li>
                <li>Use proper input types and validation attributes</li>
                <li>Implement server-side validation in addition to client-side validation</li>
                <li>Provide clear error messages</li>
                <li>Use HTTPS for all form submissions</li>
            </ul>
        </div>
    </article>
</main>

<script>
// Enable form validation
(function() {
    'use strict';
    
    // Fetch all forms that need validation
    var forms = document.querySelectorAll('.needs-validation, #customValidation');
    
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms).forEach(function(form) {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
})();
</script>

<?php include_file('includes/footer.php'); ?>