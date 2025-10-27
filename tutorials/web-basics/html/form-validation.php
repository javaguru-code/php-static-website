<?php
/**
 * Form Validation Tutorial
 * 
 * This file provides a comprehensive guide to HTML5 form validation with examples.
 */

// Include configuration and setup
require_once __DIR__ . '/../../../includes/config.php';

// Set page metadata
$page_title = 'HTML5 Form Validation - Full Stack Master';
$page_description = 'Comprehensive guide to HTML5 form validation with detailed examples and best practices';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;

// Add Prism.js for code highlighting and custom styles
$page_extra_head = '
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism-tomorrow.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/components/prism-markup-templating.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="css/form-validation.css">';

include_file('includes/header.php');
include 'sidebar.php';
?>

<main class="col-12 col-lg-9 pt-3 px-lg-4">
    <article class="tutorial-content">
        <h1 class="mb-4">HTML5 Form Validation</h1>
        <p class="lead">A comprehensive guide to client-side form validation using HTML5 attributes and JavaScript.</p>

        <div class="alert alert-info">
            <h5><i class="fas fa-info-circle me-2"></i>About Form Validation</h5>
            <p class="mb-0">Form validation ensures that user input is correct and complete before submission, improving user experience and data quality.</p>
        </div>

        <section class="validation-example">
            <h2>1. Required Fields</h2>
            <p>The <code>required</code> attribute specifies that an input field must be filled out before submitting the form.</p>
            
            <div class="demo">
                <form class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="username" class="form-label required">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required 
                               placeholder="Enter your username">
                        <div class="invalid-feedback">
                            Please provide a username.
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            
            <h5>Example Code:</h5>
            <pre><code class="language-html">&lt;form class="needs-validation" novalidate&gt;
    &lt;div class="mb-3"&gt;
        &lt;label for="username" class="form-label"&gt;Username *&lt;/label&gt;
        &lt;input type="text" class="form-control" id="username" name="username" required&gt;
        &lt;div class="invalid-feedback"&gt;
            Please provide a username.
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button type="submit" class="btn btn-primary"&gt;Submit&lt;/button&gt;
&lt;/form&gt;</code></pre>
            
            <div class="alert alert-warning mt-3">
                <h6><i class="fas fa-exclamation-triangle me-2"></i>Important Notes</h6>
                <ul class="mb-0">
                    <li>Always provide clear error messages with <code>invalid-feedback</code></li>
                    <li>Use the <code>novalidate</code> attribute on the form to prevent default browser validation</li>
                    <li>Server-side validation is still required for security</li>
                </ul>
            </div>
        </section>

        <section class="validation-example">
            <h2>2. Input Type Validation</h2>
            <p>HTML5 provides several input types that include built-in validation.</p>
            
            <div class="demo">
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label required">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required
                                   placeholder="example@domain.com">
                            <div class="invalid-feedback">
                                Please provide a valid email address.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="url" class="form-label">Website</label>
                            <input type="url" class="form-control" id="url" name="url"
                                   placeholder="https://example.com">
                            <div class="invalid-feedback">
                                Please enter a valid URL.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" id="phone" name="phone"
                                   pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                   placeholder="123-456-7890">
                            <div class="invalid-feedback">
                                Please provide a valid phone number (123-456-7890).
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="password" class="form-label required">Password</label>
                            <input type="password" class="form-control" id="password" name="password" 
                                   minlength="8" required>
                            <div class="invalid-feedback">
                                Password must be at least 8 characters long.
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            
            <h5>Example Code:</h5>
            <pre><code class="language-html">&lt;!-- Email Validation --&gt;
&lt;input type="email" class="form-control" id="email" name="email" required&gt;

<!-- URL Validation -->
&lt;input type="url" class="form-control" id="url" name="url"&gt;

<!-- Phone Number with Pattern -->
&lt;input type="tel" class="form-control" id="phone" name="phone"
       pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"&gt;

<!-- Password with Minimum Length -->
&lt;input type="password" class="form-control" id="password" name="password" 
       minlength="8" required&gt;</code></pre>
        </section>

        <section class="validation-example">
            <h2>3. Constraint Validation</h2>
            <p>HTML5 provides several attributes to constrain input values.</p>
            
            <div class="demo">
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="age" class="form-label">Age (18-100)</label>
                            <input type="number" class="form-control" id="age" name="age" 
                                   min="18" max="100" step="1">
                            <div class="invalid-feedback">
                                Age must be between 18 and 100.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="quantity" class="form-label">Quantity (multiples of 5)</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" 
                                   min="0" max="100" step="5" value="0">
                            <div class="invalid-feedback">
                                Quantity must be a multiple of 5 (0, 5, 10, ...).
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="rating" class="form-label">Rating (0-10)</label>
                            <input type="range" class="form-range" id="rating" name="rating" 
                                   min="0" max="10" step="0.5" value="5">
                            <div class="text-center" id="ratingValue">5.0</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="file" class="form-label">Upload File (Max 5MB)</label>
                        <input class="form-control" type="file" id="file" name="file" 
                               accept=".jpg,.jpeg,.png,.pdf" 
                               data-max-size="5242880">
                        <div class="invalid-feedback">
                            Please upload a valid image or PDF (max 5MB).
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            
            <h5>Example Code:</h5>
            <pre><code class="language-html">&lt;!-- Number Range --&gt;
&lt;input type="number" min="18" max="100" step="1"&gt;

<!-- Step Value -->
&lt;input type="number" min="0" max="100" step="5"&gt;

<!-- File Upload with Accept -->
&lt;input type="file" accept=".jpg,.jpeg,.png,.pdf"&gt;</code></pre>
        </section>

        <section class="validation-example">
            <h2>4. Pattern Matching</h2>
            <p>Use the <code>pattern</code> attribute to validate against a regular expression.</p>
            
            <div class="demo">
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="zipcode" class="form-label">ZIP Code (US)</label>
                            <input type="text" class="form-control" id="zipcode" name="zipcode"
                                   pattern="^\d{5}(-\d{4})?$" 
                                   title="Please enter a valid US ZIP code (e.g., 12345 or 12345-6789)">
                            <div class="invalid-feedback">
                                Please enter a valid US ZIP code (e.g., 12345 or 12345-6789).
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="creditcard" class="form-label">Credit Card</label>
                            <input type="text" class="form-control" id="creditcard" name="creditcard"
                                   pattern="^\d{4}[- ]?\d{4}[- ]?\d{4}[- ]?\d{4}$"
                                   placeholder="1234 5678 9012 3456">
                            <div class="invalid-feedback">
                                Please enter a valid 16-digit credit card number.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" id="username" name="username"
                                   pattern="[a-zA-Z0-9_]{4,20}"
                                   title="4-20 characters, letters, numbers, and underscores only">
                        </div>
                        <div class="invalid-feedback">
                            Username must be 4-20 characters long and can only contain letters, numbers, and underscores.
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            
            <h5>Example Code:</h5>
            <pre><code class="language-html">&lt;!-- US ZIP Code --&gt;
&lt;input type="text" pattern="^\d{5}(-\d{4})?$" 
       title="Please enter a valid US ZIP code (e.g., 12345 or 12345-6789)"&gt;

<!-- Credit Card -->
&lt;input type="text" pattern="^\d{4}[- ]?\d{4}[- ]?\d{4}[- ]?\d{4}$"
       placeholder="1234 5678 9012 3456"&gt;

<!-- Username with Custom Pattern -->
&lt;input type="text" pattern="[a-zA-Z0-9_]{4,20}"
       title="4-20 characters, letters, numbers, and underscores only"&gt;</code></pre>
        </section>

        <section class="validation-example">
            <h2>5. Custom Validation with JavaScript</h2>
            <p>For more complex validation, use JavaScript's Constraint Validation API.</p>
            
            <div class="demo">
                <form id="customValidationForm" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required
                               pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$">
                        <div class="form-text">
                            Must contain at least 8 characters, one uppercase, one lowercase, and one number.
                        </div>
                        <div class="invalid-feedback" id="passwordError">
                            Password does not meet requirements.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                        <div class="invalid-feedback">
                            Passwords do not match.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="birthdate" class="form-label">Birthdate</label>
                        <input type="date" class="form-control" id="birthdate" name="birthdate" required
                               max="<?php echo date('Y-m-d'); ?>">
                        <div class="invalid-feedback">
                            Please enter a valid birthdate.
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                            <label class="form-check-label" for="terms">
                                I agree to the terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            
            <h5>JavaScript Validation Code:</h5>
            <pre><code class="language-javascript">// Form validation
const form = document.getElementById('customValidationForm');
const password = document.getElementById('password');
const confirmPassword = document.getElementById('confirmPassword');

// Custom validation for password confirmation
function validatePassword() {
    if (password.value !== confirmPassword.value) {
        confirmPassword.setCustomValidity("Passwords do not match");
    } else {
        confirmPassword.setCustomValidity("");
    }
}

// Event listeners
password.addEventListener('change', validatePassword);
confirmPassword.addEventListener('keyup', validatePassword);

// Form submission
form.addEventListener('submit', function(event) {
    if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
    }
    
    form.classList.add('was-validated');
}, false);

// Custom validation for date (must be in the past)
const birthdate = document.getElementById('birthdate');
birthdate.addEventListener('input', function() {
    const selectedDate = new Date(this.value);
    const today = new Date();
    
    if (selectedDate > today) {
        this.setCustomValidity('Birthdate cannot be in the future');
    } else {
        this.setCustomValidity('');
    }
});</code></pre>
        </section>

        <section class="validation-example">
            <h2>6. Form Validation Reference</h2>
            
            <div class="table-responsive">
                <table class="table table-bordered validation-table">
                    <thead class="table-light">
                        <tr>
                            <th>Attribute</th>
                            <th>Description</th>
                            <th>Example</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>required</code></td>
                            <td>Specifies that an input field must be filled out</td>
                            <td><code>&lt;input required&gt;</code></td>
                        </tr>
                        <tr>
                            <td><code>minlength</code></td>
                            <td>Specifies the minimum number of characters</td>
                            <td><code>&lt;input minlength="3"&gt;</code></td>
                        </tr>
                        <tr>
                            <td><code>maxlength</code></td>
                            <td>Specifies the maximum number of characters</td>
                            <td><code>&lt;input maxlength="10"&gt;</code></td>
                        </tr>
                        <tr>
                            <td><code>min</code></td>
                            <td>Specifies the minimum value for number/date inputs</td>
                            <td><code>&lt;input type="number" min="1"&gt;</code></td>
                        </tr>
                        <tr>
                            <td><code>max</code></td>
                            <td>Specifies the maximum value for number/date inputs</td>
                            <td><code>&lt;input type="date" max="2023-12-31"&gt;</code></td>
                        </tr>
                        <tr>
                            <td><code>pattern</code></td>
                            <td>Specifies a regular expression pattern to validate against</td>
                            <td><code>&lt;input pattern="[A-Za-z]{3}"&gt;</code></td>
                        </tr>
                        <tr>
                            <td><code>type</code></td>
                            <td>Specifies the input type (email, url, tel, etc.)</td>
                            <td><code>&lt;input type="email"&gt;</code></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <div class="alert alert-success">
            <h5><i class="fas fa-check-circle me-2"></i>Form Validation Best Practices</h5>
            <ul class="mb-0">
                <li>Always validate on both client and server sides</li>
                <li>Provide clear, specific error messages</li>
                <li>Use appropriate input types for better mobile experience</li>
                <li>Validate early and often (on blur, change, and submit)</li>
                <li>Don't rely solely on client-side validation for security</li>
                <li>Consider accessibility when styling validation states</li>
            </ul>
        </div>
    </article>
</main>

<script>
// Enable form validation for all forms with .needs-validation class
(function() {
    'use strict';
    
    // Fetch all forms that need validation
    const forms = document.querySelectorAll('.needs-validation');
    
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            
            form.classList.add('was-validated');
        }, false);
    });
    
    // Custom validation for the password confirmation example
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirmPassword');
    
    if (password && confirmPassword) {
        function validatePassword() {
            if (password.value !== confirmPassword.value) {
                confirmPassword.setCustomValidity("Passwords do not match");
            } else {
                confirmPassword.setCustomValidity("");
            }
        }
        
        password.addEventListener('change', validatePassword);
        confirmPassword.addEventListener('keyup', validatePassword);
    }
    
    // Update rating value display
    const ratingInput = document.getElementById('rating');
    const ratingValue = document.getElementById('ratingValue');
    
    if (ratingInput && ratingValue) {
        ratingInput.addEventListener('input', function() {
            ratingValue.textContent = this.value;
        });
    }
})();
</script>

<?php include_file('includes/footer.php'); ?>