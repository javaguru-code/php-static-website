<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML Input Attributes - Full Stack Master';
$page_description = 'Comprehensive guide to all HTML input attributes with detailed examples and best practices for web development';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;

// Add external CSS and JS files
$page_extra_head = '
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism-tomorrow.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/components/prism-markup-templating.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="' . $base_url . 'tutorials/web-basics/html/css/tutorial-styles.css">
<link rel="stylesheet" href="' . $base_url . 'tutorials/web-basics/html/css/input-attributes.css">
';
include_file('includes/header.php');
include 'sidebar.php';
?>

<main class="col-9 col-lg-9 pt-3 px-lg-4">
    <!-- Mobile menu button - only visible on small screens -->
    <button class="mobile-menu-btn" data-bs-toggle="offcanvas" data-bs-target="#sidebarOffcanvas" aria-controls="sidebarOffcanvas">
        <i class="bi bi-list me-1"></i> Menu
    </button>

    <article class="tutorial-content">
        <h1 class="mb-4">HTML Input Attributes</h1>
        <p class="lead">A comprehensive guide to all HTML input attributes with detailed examples and best practices.</p>

        <section class="mb-5">
            <h2>Core Input Attributes</h2>
            <p>These are the most commonly used attributes that work with most input types.</p>
                        
            <div class="attribute-example">
                <h4>name - Identifies form data after submission</h4>
                <div class="example-demo">
                    <input type="text" name="username" class="form-control mb-2" placeholder="Enter your username">
                    <small class="form-text text-muted">The name attribute is essential for form submission.</small>
                            </div>
                            <pre><code class="language-html">&lt;input type="text" name="username" placeholder="Enter your username"&gt;</code></pre>
                        </div>

                        <div class="attribute-example">
                            <h4>value - Specifies the initial value</h4>
                            <div class="example-demo">
                                <input type="text" value="default@example.com" class="form-control mb-2">
                            </div>
                            <pre><code class="language-html">&lt;input type="text" value="default@example.com"&gt;</code></pre>
                        </div>

                        <div class="attribute-example">
                            <h4>placeholder - Displays hint text</h4>
                            <div class="example-demo">
                                <input type="text" placeholder="Search..." class="form-control mb-2">
                            </div>
                            <pre><code class="language-html">&lt;input type="text" placeholder="Search..."&gt;</code></pre>
                        </div>
                    </section>

                    <section class="mb-5">
                        <h2>Form Validation Attributes</h2>
                        
                        <div class="attribute-example">
                            <h4>required - Makes the field mandatory</h4>
                            <div class="example-demo">
                                <input type="text" required class="form-control mb-2" placeholder="Required field">
                                <small class="form-text text-muted">Cannot be left blank</small>
                            </div>
                            <pre><code class="language-html">&lt;input type="text" required&gt;</code></pre>
                        </div>

                        <div class="attribute-example">
                            <h4>pattern - Validates against a regex pattern</h4>
                            <div class="example-demo">
                                <input type="text" pattern="[A-Za-z]{3,}" class="form-control mb-2" 
                                       placeholder="At least 3 letters">
                                <small class="form-text text-muted">Must contain at least 3 letters (no numbers or special characters)</small>
                            </div>
                            <pre><code class="language-html">&lt;input type="text" pattern="[A-Za-z]{3,}"&gt;</code></pre>
                        </div>

                        <div class="attribute-example">
                            <h4>min</code>, <code>max</code>, and <code>step - Numeric constraints</h4>
                            <div class="example-demo">
                                <input type="number" min="0" max="100" step="5" value="50" class="form-control mb-2">
                                <small class="form-text text-muted">Number between 0-100, in steps of 5</small>
                            </div>
                            <pre><code class="language-html">&lt;input type="number" min="0" max="100" step="5" value="50"&gt;</code></pre>
                        </div>
                    </section>

                    <section class="mb-5">
                        <h2>Input State Attributes</h2>
                        
                        <div class="attribute-example">
                            <h4>readonly - Prevents editing but submits with form</h4>
                            <div class="example-demo">
                                <input type="text" value="Read-only field" readonly class="form-control mb-2">
                            </div>
                            <pre><code class="language-html">&lt;input type="text" value="Read-only field" readonly&gt;</code></pre>
                        </div>

                        <div class="attribute-example">
                            <h4>disabled - Disables the input (not submitted)</h4>
                            <div class="example-demo">
                                <input type="text" value="Disabled field" disabled class="form-control mb-2">
                            </div>
                            <pre><code class="language-html">&lt;input type="text" value="Disabled field" disabled&gt;</code></pre>
                        </div>

                        <div class="attribute-example">
                            <h4>autofocus - Automatically focuses the input on page load</h4>
                            <div class="example-demo">
                                <input type="text" autofocus class="form-control mb-2" placeholder="This field has autofocus">
                            </div>
                            <pre><code class="language-html">&lt;input type="text" autofocus&gt;</code></pre>
                        </div>
                    </section>

                    <section class="mb-5">
                        <h2>Advanced Attributes</h2>
                        
                        <div class="attribute-example">
                            <h4>autocomplete - Controls browser autofill behavior</h4>
                            <div class="example-demo">
                                <input type="email" autocomplete="email" class="form-control mb-2" placeholder="email@example.com">
                                <small class="form-text text-muted">Browser will suggest email addresses</small>
                            </div>
                            <pre><code class="language-html">&lt;input type="email" autocomplete="email"&gt;</code></pre>
                        </div>

                        <div class="attribute-example">
                            <h4>list - Associates with a &lt;datalist&gt; for suggestions</h4>
                            <div class="example-demo">
                                <input list="browsers" class="form-control mb-2" placeholder="Choose a browser">
                                <datalist id="browsers">
                                    <option value="Chrome">
                                    <option value="Firefox">
                                    <option value="Safari">
                                    <option value="Edge">
                                    <option value="Opera">
                                </datalist>
                            </div>
                            <pre><code class="language-html">&lt;input list="browsers"&gt;
&lt;datalist id="browsers"&gt;
    &lt;option value="Chrome"&gt;
    &lt;option value="Firefox"&gt;
    &lt;option value="Safari"&gt;
    &lt;option value="Edge"&gt;
    &lt;option value="Opera"&gt;
&lt;/datalist&gt;</code></pre>
                        </div>

                        <div class="attribute-example">
                            <h4>multiple - Allows multiple values (for email and file inputs)</h4>
                            <div class="example-demo">
                                <input type="file" multiple class="form-control mb-2">
                                <small class="form-text text-muted">Hold Ctrl/Cmd to select multiple files</small>
                            </div>
                            <pre><code class="language-html">&lt;input type="file" multiple&gt;</code></pre>
                        </div>
                    </section>

                    <section class="mb-5">
                        <h2>Form Submission Attributes</h2>
                        
                        <div class="attribute-example">
                            <h4>form - Associates input with a form (when outside the form)</h4>
                            <div class="example-demo">
                                <form id="myForm" class="mb-3">
                                    <input type="text" name="username" class="form-control mb-2" placeholder="Username">
                                </form>
                                <input type="password" name="password" form="myForm" class="form-control mb-2" placeholder="Password (outside form)">
                            </div>
                            <pre><code class="language-html">&lt;form id="myForm"&gt;
    &lt;input type="text" name="username"&gt;
&lt;/form&gt;
&lt;input type="password" name="password" form="myForm"&gt;</code></pre>
                        </div>

                        <div class="attribute-example">
                            <h4>formaction,formmethod, formtarget - Override form attributes</h4>
                            <div class="example-demo">
                                <form class="mb-3">
                                    <input type="text" name="search" class="form-control mb-2" placeholder="Search">
                                    <button type="submit" class="btn btn-primary me-2">Search</button>
                                    <button type="submit" formaction="/save-search" formmethod="post" class="btn btn-secondary">
                                        Save Search
                                    </button>
                                </form>
                            </div>
                            <pre><code class="language-html">&lt;form&gt;
    &lt;input type="text" name="search"&gt;
    &lt;button type="submit"&gt;Search&lt;/button&gt;
    &lt;button type="submit" formaction="/save-search" formmethod="post"&gt;
        Save Search
    &lt;/button&gt;
&lt;/form&gt;</code></pre>
                        </div>
                    </section>

                    <section class="mb-5">
                        <h2>Additional Attributes</h2>
                        
                        <div class="attribute-example">
                            <h4>minlength  and  maxlength - Length constraints</h4>
                            <div class="example-demo">
                                <input type="text" minlength="3" maxlength="10" class="form-control mb-2" 
                                       placeholder="3-10 characters">
                                <small class="form-text text-muted">Must be between 3 and 10 characters</small>
                            </div>
                            <pre><code class="language-html">&lt;input type="text" minlength="3" maxlength="10"&gt;</code></pre>
                        </div>

                        <div class="attribute-example">
                            <h4>size - Specifies the visible width in characters</h4>
                            <div class="example-demo">
                                <input type="text" size="30" class="form-control d-inline-block w-auto mb-2">
                            </div>
                            <pre><code class="language-html">&lt;input type="text" size="30"&gt;</code></pre>
                        </div>
                    </section>

                    <div class="alert alert-info">
                        <h5><i class="fas fa-lightbulb me-2"></i>Best Practices</h5>
                        <ul class="mb-0">
                            <li>Always include a <code>name</code> attribute for form submission</li>
                            <li>Use <code>required</code> for mandatory fields</li>
                            <li>Provide helpful <code>placeholder</code> text for better UX</li>
                            <li>Use appropriate input types (<code>type="email"</code>, <code>type="number"</code>, etc.)</li>
                            <li>Validate both client-side and server-side</li>
                        </ul>
                    </div>
                </article>
            </div>
        </main>


<script>
// Form validation script
(function() {
    'use strict';
    
    // Wait for the DOM to be fully loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Get all forms with the .needs-validation class
        const forms = document.querySelectorAll('.needs-validation');
        
        // Loop over each form and add validation
        Array.from(forms).forEach(function(form) {
            form.addEventListener('submit', function(event) {
                // Check if form is valid
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                
                // Add was-validated class to show validation feedback
                form.classList.add('was-validated');
                
            }, false);
            
            // Optional: Add real-time validation on input change
            const inputs = form.querySelectorAll('input, select, textarea');
            inputs.forEach(function(input) {
                input.addEventListener('input', function() {
                    if (input.checkValidity()) {
                        input.classList.remove('is-invalid');
                        input.classList.add('is-valid');
                    } else {
                        input.classList.remove('is-valid');
                        input.classList.add('is-invalid');
                    }
                });
            });
        });
    });
})();
</script>

<script>
// Add copy functionality to all copy buttons
document.addEventListener('DOMContentLoaded', function() {
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Add click event for copy buttons
    document.querySelectorAll('.copy-btn').forEach(button => {
        button.addEventListener('click', function() {
            const codeBlock = this.closest('.code-snippet').querySelector('code');
            const code = codeBlock.textContent;
            
            navigator.clipboard.writeText(code).then(() => {
                // Change button text temporarily
                const originalText = this.innerHTML;
                this.innerHTML = '<i class="bi bi-check"></i> Copied!';
                
                // Reset button text after 2 seconds
                setTimeout(() => {
                    this.innerHTML = originalText;
                }, 2000);
            }).catch(err => {
                console.error('Failed to copy text: ', err);
            });
        });
    });
    
    // Re-run Prism highlighting after dynamic content is loaded
    if (typeof Prism !== 'undefined') {
        Prism.highlightAll();
    }
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/plugins/autoloader/prism-autoloader.min.js"></script>

<?php include_file('includes/footer.php'); ?>