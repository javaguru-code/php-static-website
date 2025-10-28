<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML Forms - Full Stack Master';
$page_description = 'Comprehensive guide to HTML forms including form elements, validation, and best practices';
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
    .form-check-input:checked {
        background-color: #0d6efd;
        border-color: #0d6efd;
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
        <section class="section">
            <h1 class="mb-4">HTML Forms</h1>
            <p class="lead">Learn how to create interactive forms to collect user input using HTML form elements and attributes.</p>
            
            <div class="alert alert-info">
                <i class="bi bi-info-circle-fill me-2"></i>
                <strong>Key Concepts:</strong> Form elements, input types, form attributes, validation, accessibility, and best practices.
            </div>
        </section>

        <section class="section">
            <h2 class="mt-5 mb-3">1. Basic Form Structure</h2>
            <p>Every HTML form starts with the <code>&lt;form&gt;</code> element, which contains form controls like inputs, buttons, and more.</p>
            
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="h5 mb-0">Example: Basic Contact Form</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="h6">HTML Code:</h4>
                            <pre><code class="language-html">&lt;form action="/submit-form" method="POST"&gt;
    &lt;div class="mb-3"&gt;
        &lt;label for="name" class="form-label"&gt;Full Name&lt;/label&gt;
        &lt;input type="text" class="form-control" id="name" name="name" required&gt;
    &lt;/div&gt;
    
    &lt;div class="mb-3"&gt;
        &lt;label for="email" class="form-label"&gt;Email address&lt;/label&gt;
        &lt;input type="email" class="form-control" id="email" name="email" required&gt;
    &lt;/div&gt;
    
    &lt;div class="mb-3">
        &lt;label for="message" class="form-label"&gt;Message&lt;/label&gt;
        &lt;textarea class="form-control" id="message" name="message" rows="3" required&gt;&lt;/textarea&gt;
    &lt;/div&gt;
    
    &lt;button type="submit" class="btn btn-primary"&gt;Submit&lt;/button&gt;
&lt;/form&gt;</code></pre>
                        </div>
                        <div class="col-md-6">
                            <h4 class="h6">Live Example:</h4>
                            <div class="form-demo">
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleName" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="exampleName" placeholder="Enter your name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleEmail" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleEmail" placeholder="name@example.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleMessage" class="form-label">Message</label>
                                        <textarea class="form-control" id="exampleMessage" rows="3" placeholder="Your message here..."></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <h2 class="mt-5 mb-3">2. Common Form Elements</h2>
            <p>HTML provides various form elements to collect different types of user input.</p>
            
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="h5 mb-0">Input Types</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Type</th>
                                    <th>Description</th>
                                    <th>Example</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>text</code></td>
                                    <td>Single-line text input</td>
                                    <td><input type="text" class="form-control form-control-sm" placeholder="Enter text"></td>
                                </tr>
                                <tr>
                                    <td><code>password</code></td>
                                    <td>Masked text input</td>
                                    <td><input type="password" class="form-control form-control-sm" placeholder="Password"></td>
                                </tr>
                                <tr>
                                    <td><code>email</code></td>
                                    <td>Email address input with validation</td>
                                    <td><input type="email" class="form-control form-control-sm" placeholder="email@example.com"></td>
                                </tr>
                                <tr>
                                    <td><code>number</code></td>
                                    <td>Numeric input with spinner</td>
                                    <td><input type="number" class="form-control form-control-sm" placeholder="Enter number"></td>
                                </tr>
                                <tr>
                                    <td><code>date</code></td>
                                    <td>Date picker</td>
                                    <td><input type="date" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><code>checkbox</code></td>
                                    <td>Checkbox for multiple selections</td>
                                    <td><input type="checkbox" class="form-check-input"> Check me</td>
                                </tr>
                                <tr>
                                    <td><code>radio</code></td>
                                    <td>Radio button for single selection</td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="radio1" value="option1" checked>
                                            <label class="form-check-label" for="radio1">Option 1</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="radio2" value="option2">
                                            <label class="form-check-label" for="radio2">Option 2</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>file</code></td>
                                    <td>File upload</td>
                                    <td><input type="file" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><code>color</code></td>
                                    <td>Color picker</td>
                                    <td><input type="color" class="form-control form-control-color"></td>
                                </tr>
                                <tr>
                                    <td><code>range</code></td>
                                    <td>Slider control</td>
                                    <td><input type="range" class="form-range"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="h5 mb-0">Other Form Elements</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="h6">Select Dropdown</h4>
                            <select class="form-select mb-3">
                                <option selected>Select an option</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>

                            <h4 class="h6">Textarea</h4>
                            <textarea class="form-control mb-3" rows="3" placeholder="Enter multi-line text"></textarea>

                            <h4 class="h6">Checkbox Group</h4>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="check1">
                                <label class="form-check-label" for="check1">Checkbox 1</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="check2" checked>
                                <label class="form-check-label" for="check2">Checkbox 2 (pre-checked)</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="h6">Radio Button Group</h4>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioGroup" id="radio1" checked>
                                <label class="form-check-label" for="radio1">Radio 1</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioGroup" id="radio2">
                                <label class="form-check-label" for="radio2">Radio 2</label>
                            </div>

                            <h4 class="h6 mt-3">Datalist</h4>
                            <input class="form-control mb-3" list="browsers" placeholder="Type to search...">
                            <datalist id="browsers">
                                <option value="Chrome">
                                <option value="Firefox">
                                <option value="Safari">
                                <option value="Edge">
                                <option value="Opera">
                            </datalist>

                            <h4 class="h6">File Input</h4>
                            <input type="file" class="form-control mb-3">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <h2 class="mt-5 mb-3">3. Form Validation</h2>
            <p>HTML5 provides built-in form validation using attributes like <code>required</code>, <code>pattern</code>, and input types.</p>
            
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="h5 mb-0">Validation Example</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="h6">HTML Code:</h4>
                            <pre><code class="language-html">&lt;form class="needs-validation" novalidate&gt;
    &lt;div class="mb-3"&gt;
        &lt;label for="validationName" class="form-label"&gt;Full Name&lt;/label&gt;
        &lt;input type="text" class="form-control" id="validationName" required&gt;
        &lt;div class="invalid-feedback"&gt;Please enter your name.&lt;/div&gt;
    &lt;/div&gt;
    
    &lt;div class="mb-3"&gt;
        &lt;label for="validationEmail" class="form-label"&gt;Email&lt;/label&gt;
        &lt;input type="email" class="form-control" id="validationEmail" 
               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required&gt;
        &lt;div class="invalid-feedback"&gt;Please enter a valid email address.&lt;/div&gt;
    &lt;/div&gt;
    
    &lt;div class="mb-3"&gt;
        &lt;label for="validationPassword" class="form-label"&gt;Password&lt;/label&gt;
        &lt;input type="password" class="form-control" id="validationPassword" 
               minlength="8" required&gt;
        &lt;div class="invalid-feedback"&gt;Password must be at least 8 characters.&lt;/div&gt;
    &lt;/div&gt;
    
    &lt;button class="btn btn-primary" type="submit"&gt;Submit&lt;/button&gt;
&lt;/form&gt;

&lt;script&gt;
// Form validation script
(function () {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
})()
&lt;/script&gt;</code></pre>
                        </div>
                        <div class="col-md-6">
                            <h4 class="h6">Live Example:</h4>
                            <div class="form-demo">
                                <form class="needs-validation" novalidate>
                                    <div class="mb-3">
                                        <label for="validationName" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="validationName" required>
                                        <div class="invalid-feedback">Please enter your name.</div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="validationEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="validationEmail" 
                                               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                                        <div class="invalid-feedback">Please enter a valid email address.</div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="validationPassword" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="validationPassword" 
                                               minlength="8" required>
                                        <div class="invalid-feedback">Password must be at least 8 characters.</div>
                                    </div>
                                    
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <h2 class="mt-5 mb-3">4. Form Layouts</h2>
            <p>Create responsive form layouts using Bootstrap's grid system and form classes.</p>
            
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="h5 mb-0">Multi-Column Form</h3>
                </div>
                <div class="card-body">
                    <div class="form-demo">
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName" class="form-label">First name</label>
                                    <input type="text" class="form-control" id="firstName" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName" class="form-label">Last name</label>
                                    <input type="text" class="form-control" id="lastName" required>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" id="username" placeholder="Username" required>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" class="form-control" id="city" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="state" class="form-label">State</label>
                                    <select class="form-select" id="state" required>
                                        <option value="" selected disabled>Choose...</option>
                                        <option>California</option>
                                        <option>New York</option>
                                        <option>Texas</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="zip" class="form-label">Zip</label>
                                    <input type="text" class="form-control" id="zip" required>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms" required>
                                    <label class="form-check-label" for="terms">
                                        Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                            
                            <button class="btn btn-primary" type="submit">Submit Form</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <h2 class="mt-5 mb-3">5. Form Best Practices</h2>
            <div class="card">
                <div class="card-body">
                    <ul>
                        <li><strong>Always use labels</strong> - Every form control should have a corresponding <code>&lt;label&gt;</code> element.</li>
                        <li><strong>Group related fields</strong> - Use <code>&lt;fieldset&gt;</code> and <code>&lt;legend&gt;</code> for grouping.</li>
                        <li><strong>Provide clear validation messages</strong> - Tell users exactly what they need to fix.</li>
                        <li><strong>Make forms keyboard accessible</strong> - Ensure all form elements can be accessed using the Tab key.</li>
                        <li><strong>Use appropriate input types</strong> - This provides better mobile experience and validation.</li>
                        <li><strong>Keep forms simple</strong> - Only ask for necessary information.</li>
                        <li><strong>Use the <code>autocomplete</code> attribute</strong> - Helps users fill out forms faster.</li>
                        <li><strong>Consider mobile users</strong> - Ensure form controls are large enough to tap on mobile devices.</li>
                    </ul>
                </div>
            </div>
        </section>
    </article>
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
                
                // Log form validation status
                console.log('Form validation completed. Valid:', form.checkValidity());
                
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
        
        console.log('Form validation script initialized');
    });
})();
</script>

<!-- Ensure jQuery is loaded if needed by other scripts -->
<script>
// Fallback to load jQuery if not already loaded
if (typeof jQuery === 'undefined') {
    const jqueryScript = document.createElement('script');
    jqueryScript.src = 'https://code.jquery.com/jquery-3.6.0.min.js';
    jqueryScript.integrity = 'sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=';
    jqueryScript.crossOrigin = 'anonymous';
    document.head.appendChild(jqueryScript);
    console.log('jQuery loaded as fallback');
}
</script>

<?php include_file('includes/footer.php'); ?>