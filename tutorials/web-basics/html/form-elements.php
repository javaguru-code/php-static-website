<?php
/**
 * Form Elements Tutorial
 * 
 * This file demonstrates various HTML form elements with examples and best practices.
 */

// Include configuration and setup
require_once __DIR__ . '/../../../includes/config.php';

// Set page metadata
$page_title = 'HTML Form Elements - Full Stack Master';
$page_description = 'Comprehensive guide to HTML form elements including inputs, textareas, selects, buttons, and more with detailed examples';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;

// Add Prism.js for code highlighting and custom styles
$page_extra_head = '
<!-- Prism.js for syntax highlighting -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism-tomorrow.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/components/prism-markup-templating.min.js"></script>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Custom styles -->
<link rel="stylesheet" href="' . $base_url . 'tutorials/web-basics/html/css/tutorial-styles.css">

<style>
    /* Form demo styling */
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
    <article>
        <h1 class="mb-4">HTML Form Elements</h1>
        <p class="lead">Learn about all HTML form elements with detailed examples and best practices.</p>
        
        <section class="mb-5">
            <h2>1. The &lt;form&gt; Element</h2>
            <p>The container for all form elements. Defines how the form data will be sent and processed.</p>
            
            <div class="form-demo">
                <h4>Basic Form Structure</h4>
                <pre><code class="language-html">&lt;form action="/submit-form" method="post" novalidate&gt;
    &lt;!-- Form elements go here --&gt;
&lt;/form&gt;</code></pre>
                
                <div class="mt-3">
                    <h5>Key Attributes:</h5>
                    <ul>
                        <li><code>action</code>: URL where the form data is sent</li>
                        <li><code>method</code>: HTTP method (GET or POST)</li>
                        <li><code>enctype</code>: Encoding type for form data (important for file uploads)</li>
                        <li><code>novalidate</code>: Disables HTML5 validation</li>
                        <li><code>autocomplete</code>: Enables/disables browser autocomplete</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <h2>2. Input Elements</h2>
            <p>The <code>&lt;input&gt;</code> element is the most versatile form element, with various types for different data.</p>
            
            <div class="form-demo">
                <h4>Text Input</h4>
                <pre><code class="language-html">&lt;div class="mb-3"&gt;
    &lt;label for="username" class="form-label"&gt;Username:&lt;/label&gt;
    &lt;input type="text" id="username" name="username" class="form-control" required minlength="3"&gt;
    &lt;div class="form-text"&gt;Minimum 3 characters&lt;/div&gt;
&lt;/div&gt;</code></pre>

                <h4 class="mt-4">Password Input</h4>
                <pre><code class="language-html">&lt;div class="mb-3"&gt;
    &lt;label for="password" class="form-label"&gt;Password:&lt;/label&gt;
    &lt;input type="password" id="password" name="password" class="form-control" required 
           pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"&gt;
    &lt;div class="form-text"&gt;Must contain at least one number, one uppercase and lowercase letter, and at least 8 characters&lt;/div&gt;
&lt;/div&gt;</code></pre>

                <h4 class="mt-4">Email Input</h4>
                <pre><code class="language-html">&lt;div class="mb-3"&gt;
    &lt;label for="email" class="form-label"&gt;Email:&lt;/label&gt;
    &lt;input type="email" id="email" name="email" class="form-control" required&gt;
&lt;/div&gt;</code></pre>
            </div>
        </section>

        <section class="mb-5">
            <h2>3. Textarea</h2>
            <p>For multi-line text input.</p>
            
            <div class="form-demo">
                <pre><code class="language-html">&lt;div class="mb-3"&gt;
    &lt;label for="message" class="form-label"&gt;Your Message:&lt;/label&gt;
    &lt;textarea id="message" name="message" rows="4" class="form-control" 
              placeholder="Enter your message here..."&gt;&lt;/textarea&gt;
&lt;/div&gt;</code></pre>
            </div>
        </section>

        <section class="mb-5">
            <h2>4. Select Dropdown</h2>
            <p>For selecting one or more options from a dropdown list.</p>
            
            <div class="form-demo">
                <h4>Single Selection</h4>
                <pre><code class="language-html">&lt;div class="mb-3"&gt;
    &lt;label for="country" class="form-label"&gt;Country:&lt;/label&gt;
    &lt;select id="country" name="country" class="form-select"&gt;
        &lt;option value=""&gt;Select a country...&lt;/option&gt;
        &lt;option value="us"&gt;United States&lt;/option&gt;
        &lt;option value="ca"&gt;Canada&lt;/option&gt;
        &lt;option value="uk"&gt;United Kingdom&lt;/option&gt;
        &lt;option value="au"&gt;Australia&lt;/option&gt;
    &lt;/select&gt;
&lt;/div&gt;</code></pre>

                <h4 class="mt-4">Multiple Selection</h4>
                <pre><code class="language-html">&lt;div class="mb-3"&gt;
    &lt;label for="interests" class="form-label"&gt;Interests (select multiple):&lt;/label&gt;
    &lt;select id="interests" name="interests[]" class="form-select" multiple size="4"&gt;
        &lt;option value="sports"&gt;Sports&lt;/option&gt;
        &lt;option value="music"&gt;Music&lt;/option&gt;
        &lt;option value="reading"&gt;Reading&lt;/option&gt;
        &lt;option value="travel"&gt;Travel&lt;/option&gt;
        &lt;option value="gaming"&gt;Gaming&lt;/option&gt;
    &lt;/select&gt;
    &lt;div class="form-text"&gt;Hold Ctrl/Cmd to select multiple options&lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
        </section>

        <section class="mb-5">
            <h2>5. Checkboxes and Radio Buttons</h2>
            
            <div class="form-demo">
                <h4>Checkbox Group</h4>
                <pre><code class="language-html">&lt;div class="mb-3"&gt;
    &lt;label class="form-label d-block"&gt;Select your interests:&lt;/label&gt;
    &lt;div class="form-check"&gt;
        &lt;input class="form-check-input" type="checkbox" id="interest1" name="interests[]" value="sports"&gt;
        &lt;label class="form-check-label" for="interest1"&gt;Sports&lt;/label&gt;
    &lt;/div&gt;
    &lt;div class="form-check"&gt;
        &lt;input class="form-check-input" type="checkbox" id="interest2" name="interests[]" value="music"&gt;
        &lt;label class="form-check-label" for="interest2"&gt;Music&lt;/label&gt;
    &lt;/div&gt;
    &lt;div class="form-check"&gt;
        &lt;input class="form-check-input" type="checkbox" id="interest3" name="interests[]" value="reading" checked&gt;
        &lt;label class="form-check-label" for="interest3"&gt;Reading&lt;/label&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>

                <h4 class="mt-4">Radio Button Group</h4>
                <div class="mb-3">
                    <label class="form-label d-block">Select your gender:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="male" name="gender" value="male" checked>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="female" name="gender" value="female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="other" name="gender" value="other">
                        <label class="form-check-label" for="other">Other</label>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <h2>6. Buttons</h2>
            <p>Different types of form buttons and their uses.</p>
            
            <div class="form-demo">
                <pre><code class="language-html">&lt;!-- Submit Button --&gt;
&lt;button type="submit" class="btn btn-primary"&gt;Submit Form&lt;/button&gt;

&lt;!-- Reset Button --&gt;
&lt;button type="reset" class="btn btn-secondary ms-2"&gt;Reset Form&lt;/button&gt;

&lt;!-- Regular Button --&gt;
&lt;button type="button" class="btn btn-outline-secondary ms-2"&gt;Cancel&lt;/button&gt;

&lt;!-- File Upload Button --&gt;
&lt;div class="mt-3"&gt;
    &lt;label for="file-upload" class="form-label"&gt;Upload File:&lt;/label&gt;
    &lt;input type="file" id="file-upload" name="file" class="form-control"&gt;
&lt;/div&gt;</code></pre>
            </div>
        </section>

        <section class="mb-5">
            <h2>7. Fieldset and Legend</h2>
            <p>For grouping related form controls.</p>
            
            <div class="form-demo">
                <pre><code class="language-html">&lt;fieldset class="border p-3 mb-4"&gt;
    &lt;legend class="w-auto px-2"&gt;Contact Information&lt;/legend&gt;
    
    &lt;div class="row g-3"&gt;
        &lt;div class="col-md-6"&gt;
            &lt;label for="firstName" class="form-label"&gt;First Name&lt;/label&gt;
            &lt;input type="text" id="firstName" name="firstName" class="form-control" required&gt;
        &lt;/div&gt;
        
        &lt;div class="col-md-6"&gt;
            &lt;label for="lastName" class="form-label"&gt;Last Name&lt;/label&gt;
            &lt;input type="text" id="lastName" name="lastName" class="form-control" required&gt;
        &lt;/div&gt;
        
        &lt;div class="col-12"&gt;
            &lt;label for="email" class="form-label"&gt;Email&lt;/label&gt;
            &lt;input type="email" id="email" name="email" class="form-control" required&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/fieldset&gt;</code></pre>
            </div>
        </section>

        <section class="mb-5">
            <h2>8. Datalist Element</h2>
            <p>Provides an "autocomplete" feature for input elements.</p>
            
            <div class="form-demo">
                <pre><code class="language-html">&lt;div class="mb-3"&gt;
    &lt;label for="browser" class="form-label"&gt;Choose your browser from the list:&lt;/label&gt;
    &lt;input list="browsers" id="browser" name="browser" class="form-control"&gt;
    &lt;datalist id="browsers"&gt;
        &lt;option value="Chrome"&gt;
        &lt;option value="Firefox"&gt;
        &lt;option value="Safari"&gt;
        &lt;option value="Edge"&gt;
        &lt;option value="Opera"&gt;
    &lt;/datalist&gt;
&lt;/div&gt;</code></pre>
            </div>
        </section>

        <section class="mb-5">
            <h2>9. Output Element</h2>
            <p>Represents the result of a calculation or user action.</p>
            
            <div class="form-demo">
                <pre><code class="language-html">&lt;form oninput="result.value=parseInt(a.value)+parseInt(b.value)"&gt;
    &lt;div class="row g-3"&gt;
        &lt;div class="col-md-4"&gt;
            &lt;input type="range" id="a" name="a" value="50" class="form-range"&gt;
            &lt;div class="d-flex justify-content-between"&gt;
                &lt;span&gt;0&lt;/span&gt;
                &lt;span&gt;100&lt;/span&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        
        &lt;div class="col-md-4"&gt;
            &lt;input type="number" id="b" name="b" value="50" class="form-control"&gt;
        &lt;/div&gt;
        
        &lt;div class="col-md-4"&gt;
            &lt;div class="input-group"&gt;
                <span class="input-group-text">Result:</span>
                &lt;output name="result" for="a b" class="form-control"&gt;100&lt;/output&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/form&gt;</code></pre>
            </div>
        </section>

        <section class="mb-5">
            <h2>10. Form Validation</h2>
            <p>HTML5 provides built-in form validation.</p>
            
            <div class="form-demo">
                <form class="needs-validation" novalidate>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">First name</label>
                            <input type="text" class="form-control" id="validationCustom01" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="validationCustom02" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </div>
                </form>
                
                <div class="mt-4">
                    <h5>Common Validation Attributes:</h5>
                    <ul>
                        <li><code>required</code>: Field must be filled out</li>
                        <li><code>minlength</code>/<code>maxlength</code>: Minimum/maximum number of characters</li>
                        <li><code>min</code>/<code>max</code>: Minimum/maximum value for number inputs</li>
                        <li><code>pattern</code>: Regular expression pattern the input must match</li>
                        <li><code>type="email"</code>/<code>type="url"</code>: Valid email/URL format</li>
                    </ul>
                </div>
            </div>
        </section>
    </article>
</main>

<script>
// Form validation script
function () {
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
}
</script>

<?php include_file('includes/footer.php'); ?>