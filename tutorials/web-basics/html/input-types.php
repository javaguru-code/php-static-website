<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML Input Types - Full Stack Master';
$page_description = 'Comprehensive guide to HTML input types with examples';
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
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
    <h1 class="mb-4">HTML Input Types</h1>
    <p class="lead">A comprehensive guide to HTML input types with examples</p>

    <!-- Text Input -->
    <section class="card mb-4">
        <div class="card-header">
            <h2>1. Text Input (type="text")</h2>
        </div>
        <div class="card-body">
            <p>Single-line text input field. The most basic and commonly used input type.</p>
            <div class="example">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Enter username" class="form-control mb-3">
                <p><strong>Attributes:</strong> <code>placeholder</code>, <code>maxlength</code>, <code>minlength</code>, <code>pattern</code>, <code>required</code></p>
                
                <div class="code-snippet mt-3">
                    <button class="btn btn-sm btn-outline-secondary copy-btn" data-bs-toggle="tooltip" title="Copy code">
                        <i class="bi bi-clipboard"></i> Copy
                    </button>
                    <pre><code class="language-html">&lt;label for="username"&gt;Username:&lt;/label&gt;
&lt;input type="text" id="username" name="username" 
       placeholder="Enter username"
       maxlength="30"
       minlength="3"
       pattern="[A-Za-z0-9]+"
       required&gt;</code></pre>
                </div>
            </div>
        </div>
    </section>

    <!-- Password Input -->
    <section class="card mb-4">
        <div class="card-header">
            <h2>2. Password Input (type="password")</h2>
        </div>
        <div class="card-body">
            <p>Masked input for sensitive information. Characters are shown as dots or asterisks.</p>
            <div class="example">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control mb-3">
                <p><strong>Security Note:</strong> Always use HTTPS when handling passwords.</p>
                
                <div class="code-snippet mt-3">
                    <button class="btn btn-sm btn-outline-secondary copy-btn" data-bs-toggle="tooltip" title="Copy code">
                        <i class="bi bi-clipboard"></i> Copy
                    </button>
                    <pre><code class="language-html">&lt;label for="password"&gt;Password:&lt;/label&gt;
&lt;input type="password" id="password" name="password" 
       minlength="8"
       pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
       title="Must contain at least one number, one uppercase and lowercase letter, and at least 8 or more characters"
       required&gt;</code></pre>
                </div>
            </div>
        </div>
    </section>

    <!-- Email Input -->
    <section class="card mb-4">
        <div class="card-header">
            <h2>3. Email Input (type="email")</h2>
        </div>
        <div class="card-body">
            <p>For email addresses. Includes built-in validation for email format.</p>
            <div class="example">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" multiple class="form-control mb-3">
                <p><strong>Note:</strong> Add <code>multiple</code> attribute to allow multiple email addresses.</p>
                
                <div class="code-snippet mt-3">
                    <button class="btn btn-sm btn-outline-secondary copy-btn" data-bs-toggle="tooltip" title="Copy code">
                        <i class="bi bi-clipboard"></i> Copy
                    </button>
                    <pre><code class="language-html">&lt;!-- Single email --&gt;
&lt;label for="email"&gt;Email:&lt;/label&gt;
&lt;input type="email" id="email" name="email" required&gt;

&lt;!-- Multiple emails --&gt;
&lt;label for="emails"&gt;Email (multiple):&lt;/label&gt;
&lt;input type="email" id="emails" name="emails" multiple&gt;</code></pre>
                </div>
            </div>
        </div>
    </section>

    <!-- Number Input -->
    <section class="card mb-4">
        <div class="card-header">
            <h2>4. Number Input (type="number")</h2>
        </div>
        <div class="card-body">
            <p>For numerical input. Includes spinner controls by default.</p>
            <div class="example">
                <label for="quantity">Quantity (1-10):</label>
                <input type="number" id="quantity" name="quantity" min="1" max="10" step="1" class="form-control mb-3">
                <p><strong>Attributes:</strong> <code>min</code>, <code>max</code>, <code>step</code></p>
                
                <div class="code-snippet mt-3">
                    <button class="btn btn-sm btn-outline-secondary copy-btn" data-bs-toggle="tooltip" title="Copy code">
                        <i class="bi bi-clipboard"></i> Copy
                    </button>
                    <pre><code class="language-html">&lt;label for="quantity"&gt;Quantity (1-10):&lt;/label&gt;
&lt;input type="number" id="quantity" name="quantity"
       min="1" max="10" step="1"
       value="1" required&gt;

&lt;!-- Decimal example --&gt;
&lt;label for="price"&gt;Price:&lt;/label&gt;
&lt;input type="number" id="price" name="price"
       min="0" max="1000" step="0.01"
       placeholder="0.00"&gt;</code></pre>
                </div>
            </div>
        </div>
    </section>

    <!-- Checkbox -->
    <section class="card mb-4">
        <div class="card-header">
            <h2>5. Checkbox (type="checkbox")</h2>
        </div>
        <div class="card-body">
            <p>Allows multiple selections from a set of options.</p>
            <div class="example">
                <p>Select your interests:</p>
                <div class="form-check">
                    <input type="checkbox" id="sports" name="interests" value="sports" class="form-check-input">
                    <label for="sports" class="form-check-label">Sports</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="music" name="interests" value="music" class="form-check-input">
                    <label for="music" class="form-check-label">Music</label>
                </div>
                <p><strong>Note:</strong> Use same <code>name</code> attribute for grouped checkboxes.</p>
                
                <div class="code-snippet mt-3">
                    <button class="btn btn-sm btn-outline-secondary copy-btn" data-bs-toggle="tooltip" title="Copy code">
                        <i class="bi bi-clipboard"></i> Copy
                    </button>
                    <pre><code class="language-html">&lt;!-- Single checkbox --&gt;
&lt;div class="form-check"&gt;
    &lt;input type="checkbox" id="terms" name="terms" required&gt;
    &lt;label for="terms"&gt;I agree to the terms and conditions&lt;/label&gt;
&lt;/div&gt;

&lt;!-- Grouped checkboxes --&gt;
&lt;p&gt;Select your interests:&lt;/p&gt;
&lt;div class="form-check"&gt;
    &lt;input type="checkbox" id="sports" name="interests" value="sports"&gt;
    &lt;label for="sports"&gt;Sports&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check"&gt;
    &lt;input type="checkbox" id="music" name="interests" value="music"&gt;
    &lt;label for="music"&gt;Music&lt;/label&gt;
&lt;/div&gt;

&lt;!-- Pre-selected checkbox --&gt;
&lt;div class="form-check"&gt;
    &lt;input type="checkbox" id="newsletter" name="newsletter" checked&gt;
    &lt;label for="newsletter"&gt;Subscribe to newsletter&lt;/label&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>
        </div>
    </section>

    <!-- Radio Buttons -->
    <section class="card mb-4">
        <div class="card-header">
            <h2>6. Radio Buttons (type="radio")</h2>
        </div>
        <div class="card-body">
            <p>Allows single selection from multiple options.</p>
            <div class="example">
                <p>Select your gender:</p>
                <div class="form-check">
                    <input type="radio" id="male" name="gender" value="male" class="form-check-input">
                    <label for="male" class="form-check-label">Male</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="female" name="gender" value="female" class="form-check-input">
                    <label for="female" class="form-check-label">Female</label>
                </div>
                <p><strong>Note:</strong> Radio buttons with the same <code>name</code> are grouped together.</p>
                
                <div class="code-snippet mt-3">
                    <button class="btn btn-sm btn-outline-secondary copy-btn" data-bs-toggle="tooltip" title="Copy code">
                        <i class="bi bi-clipboard"></i> Copy
                    </button>
                    <pre><code class="language-html">&lt;!-- Basic radio group --&gt;
&lt;p&gt;Select your gender:&lt;/p&gt;
&lt;div class="form-check"&gt;
    &lt;input type="radio" id="male" name="gender" value="male"&gt;
    &lt;label for="male"&gt;Male&lt;/label&gt;
&lt;/div&gt;
&lt;div class="form-check"&gt;
    &lt;input type="radio" id="female" name="gender" value="female"&gt;
    &lt;label for="female"&gt;Female&lt;/label&gt;
&lt;/div&gt;

&lt;!-- Pre-selected option --&gt;
&lt;div class="form-check"&gt;
    &lt;input type="radio" id="option1" name="options" value="1" checked&gt;
    &lt;label for="option1"&gt;Option 1 (pre-selected)&lt;/label&gt;
&lt;/div&gt;

&lt;!-- Disabled option --&gt;
&lt;div class="form-check"&gt;
    &lt;input type="radio" id="option2" name="options" value="2" disabled&gt;
    &lt;label for="option2"&gt;Option 2 (disabled)&lt;/label&gt;
&lt;/div&gt;</code></pre>
                </div>
            </div>
        </div>
    </section>

    <!-- File Upload -->
    <section class="card mb-4">
        <div class="card-header">
            <h2>7. File Upload (type="file")</h2>
        </div>
        <div class="card-body">
            <p>Allows users to select and upload files.</p>
            <div class="example">
                <label for="fileUpload" class="form-label">Upload your resume (PDF only, max 5MB):</label>
                <input type="file" id="fileUpload" name="resume" accept=".pdf" class="form-control mb-3">
                <p><strong>Attributes:</strong> <code>accept</code> (file types), <code>multiple</code> (for multiple files)</p>
                
                <div class="code-snippet mt-3">
                    <button class="btn btn-sm btn-outline-secondary copy-btn" data-bs-toggle="tooltip" title="Copy code">
                        <i class="bi bi-clipboard"></i> Copy
                    </button>
                    <pre><code class="language-html">&lt;!-- Basic file upload --&gt;
&lt;label for="file"&gt;Choose a file:&lt;/label&gt;
&lt;input type="file" id="file" name="file"&gt;

&lt;!-- Multiple files --&gt;
&lt;label for="files"&gt;Select multiple files:&lt;/label&gt;
&lt;input type="file" id="files" name="files" multiple&gt;

&lt;!-- Specific file types --&gt;
&lt;label for="image"&gt;Upload image (JPG, PNG, GIF):&lt;/label&gt;
&lt;input type="file" id="image" name="image" 
       accept="image/jpeg, image/png, image/gif"&gt;

&lt;!-- With size limit (client-side) --&gt;
&lt;label for="document"&gt;Upload document (max 5MB):&lt;/label&gt;
&lt;input type="file" id="document" name="document" 
       onchange="checkFileSize(this)"&gt;

&lt;script&gt;
function checkFileSize(input) {
    if (input.files[0].size > 5 * 1024 * 1024) {
        alert('File is too large! Maximum size is 5MB.');
        input.value = '';
    }
}
&lt;/script&gt;</code></pre>
                </div>
            </div>
        </div>
    </section>

    <!-- Date and Time Inputs -->
    <section class="card mb-4">
        <div class="card-header">
            <h2>8. Date and Time Inputs</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="date" class="form-label">Date:</label>
                    <input type="date" id="date" name="date" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="time" class="form-label">Time:</label>
                    <input type="time" id="time" name="time" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="datetime" class="form-label">Date and Time:</label>
                    <input type="datetime-local" id="datetime" name="datetime" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="month" class="form-label">Month:</label>
                    <input type="month" id="month" name="month" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="week" class="form-label">Week:</label>
                    <input type="week" id="week" name="week" class="form-control">
                </div>
            </div>
            
            <div class="code-snippet mt-3">
                <button class="btn btn-sm btn-outline-secondary copy-btn" data-bs-toggle="tooltip" title="Copy code">
                    <i class="bi bi-clipboard"></i> Copy
                </button>
                <pre><code class="language-html">&lt;!-- Date input --&gt;
&lt;label for="birthday"&gt;Birthday:&lt;/label&gt;
&lt;input type="date" id="birthday" name="birthday"
       min="1900-01-01" max="2025-12-31"&gt;

&lt;!-- Time input --&gt;
&lt;label for="appt"&gt;Select a time:&lt;/label&gt;
&lt;input type="time" id="appt" name="appt"
       min="09:00" max="18:00" required&gt;

&lt;!-- Date and time --&gt;
&lt;label for="meeting"&gt;Meeting time:&lt;/label&gt;
&lt;input type="datetime-local" id="meeting" name="meeting"
       min="2025-10-28T09:00" max="2025-12-31T18:00"&gt;

&lt;!-- Month and year --&gt;
&lt;label for="month"&gt;Select month:&lt;/label&gt;
&lt;input type="month" id="month" name="month"&gt;

&lt;!-- Week --&gt;
&lt;label for="week"&gt;Select week:&lt;/label&gt;
&lt;input type="week" id="week" name="week"&gt;

&lt;!-- Setting default value --&gt;
&lt;label for="event"&gt;Event date:&lt;/label&gt;
&lt;input type="date" id="event" name="event"
       value="2025-12-31"&gt;</code></pre>
            </div>
        </div>
    </section>

    <!-- Range Input -->
    <section class="card mb-4">
        <div class="card-header">
            <h2>9. Range Input (type="range")</h2>
        </div>
        <div class="card-body">
            <p>A slider control for selecting a value from a range.</p>
            <div class="example">
                <label for="volume" class="form-label">Volume: <span id="volumeValue">50</span>%</label>
                <input type="range" id="volume" name="volume" min="0" max="100" value="50" class="form-range" oninput="document.getElementById('volumeValue').textContent = this.value">
                <p><strong>Attributes:</strong> <code>min</code>, <code>max</code>, <code>step</code></p>
                
                <div class="code-snippet mt-3">
                    <button class="btn btn-sm btn-outline-secondary copy-btn" data-bs-toggle="tooltip" title="Copy code">
                        <i class="bi bi-clipboard"></i> Copy
                    </button>
                    <pre><code class="language-html">&lt;!-- Basic range input --&gt;
&lt;label for="volume"&gt;Volume: &lt;span id="volumeValue"&gt;50&lt;/span&gt;%&lt;/label&gt;
&lt;input type="range" id="volume" name="volume" 
       min="0" max="100" value="50"
       oninput="document.getElementById('volumeValue').textContent = this.value"&gt;

&lt;!-- With steps --&gt;
&lt;label for="brightness"&gt;Brightness: &lt;span id="brightnessValue"&gt;5&lt;/span&gt;&lt;/label&gt;
&lt;input type="range" id="brightness" name="brightness"
       min="1" max="10" step="1" value="5"
       oninput="document.getElementById('brightnessValue').textContent = this.value"&gt;

&lt;!-- Vertical slider --&gt;
&lt;div style="height: 200px;"&gt;
    &lt;input type="range" id="vslider" name="vslider"
           min="0" max="100" value="50"
           orient="vertical"
           style="width: 100px; height: 100%;"&gt;
&lt;/div&gt;

&lt;!-- Range with data list for tick marks --&gt;
&lt;label for="customRange"&gt;Custom range:&lt;/label&gt;
&lt;input type="range" id="customRange" name="customRange"
       min="0" max="100" step="10" value="50"
       list="tickmarks"&gt;
&lt;datalist id="tickmarks"&gt;
    &lt;option value="0" label="0%"&gt;&lt;/option&gt;
    &lt;option value="25"&gt;&lt;/option&gt;
    &lt;option value="50" label="50%"&gt;&lt;/option&gt;
    &lt;option value="75"&gt;&lt;/option&gt;
    &lt;option value="100" label="100%"&gt;&lt;/option&gt;
&lt;/datalist&gt;</code></pre>
                </div>
            </div>
        </div>
    </section>

    <!-- Color Picker -->
    <section class="card mb-4">
        <div class="card-header">
            <h2>10. Color Picker (type="color")</h2>
        </div>
        <div class="card-body">
            <p>Allows users to select a color.</p>
            <div class="example">
                <label for="bgcolor" class="form-label">Choose a background color:</label>
                <input type="color" id="bgcolor" name="bgcolor" value="#ff0000" class="form-control form-control-color">
                
                <div class="code-snippet mt-3">
                    <button class="btn btn-sm btn-outline-secondary copy-btn" data-bs-toggle="tooltip" title="Copy code">
                        <i class="bi bi-clipboard"></i> Copy
                    </button>
                    <pre><code class="language-html">&lt;!-- Basic color picker --&gt;
&lt;label for="color"&gt;Choose a color:&lt;/label&gt;
&lt;input type="color" id="color" name="color" value="#ff0000"&gt;

&lt;!-- With default color --&gt;
&lt;label for="bgcolor"&gt;Background color:&lt;/label&gt;
&lt;input type="color" id="bgcolor" name="bgcolor" value="#ffffff"&gt;

&lt;!-- With transparency (using JavaScript) --&gt;
&lt;label for="transparent"&gt;Color with alpha:&lt;/label&gt;
&lt;input type="color" id="transparent" name="transparent" 
       oninput="document.body.style.backgroundColor = this.value + '80'"&gt;

&lt;!-- Color palette with predefined options --&gt;
&lt;label for="theme"&gt;Select theme color:&lt;/label&gt;
&lt;input type="color" id="theme" name="theme" list="themeColors"&gt;
&lt;datalist id="themeColors"&gt;
    &lt;option value="#ff0000"&gt;Red&lt;/option&gt;
    &lt;option value="#00ff00"&gt;Green&lt;/option&gt;
    &lt;option value="#0000ff"&gt;Blue&lt;/option&gt;
    &lt;option value="#ffff00"&gt;Yellow&lt;/option&gt;
    &lt;option value="#ff00ff"&gt;Magenta&lt;/option&gt;
&lt;/datalist&gt;</code></pre>
                </div>
            </div>
        </div>
    </section>

    <!-- Search Input -->
    <section class="card mb-4">
        <div class="card-header">
            <h2>11. Search Input (type="search")</h2>
        </div>
        <div class="card-body">
            <p>Styled specifically for search inputs, with a clear button in some browsers.</p>
            <div class="example">
                <div class="input-group mb-3">
                    <input type="search" id="siteSearch" name="q" placeholder="Search..." class="form-control">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
                
                <div class="code-snippet mt-3">
                    <button class="btn btn-sm btn-outline-secondary copy-btn" data-bs-toggle="tooltip" title="Copy code">
                        <i class="bi bi-clipboard"></i> Copy
                    </button>
                    <pre><code class="language-html">&lt;!-- Basic search --&gt;
&lt;label for="search"&gt;Search:&lt;/label&gt;
&lt;input type="search" id="search" name="q"&gt;

&lt;!-- Search with button --&gt;
&lt;div class="input-group"&gt;
    &lt;input type="search" id="siteSearch" name="q" 
           placeholder="Search..." required&gt;
    &lt;button type="submit"&gt;Search&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Search with autocomplete --&gt;
&lt;label for="autocomplete"&gt;Search products:&lt;/label&gt;
&lt;input type="search" id="autocomplete" name="q"
       list="products" autocomplete="off"&gt;
&lt;datalist id="products"&gt;
    &lt;option value="Laptop"&gt;
    &lt;option value="Smartphone"&gt;
    &lt;option value="Tablet"&gt;
    &lt;option value="Headphones"&gt;
    &lt;option value="Smartwatch"&gt;
&lt;/datalist&gt;

&lt;!-- Search with pattern --&gt;
&lt;label for="searchId"&gt;Search by ID (e.g., ABC-123):&lt;/label&gt;
&lt;input type="search" id="searchId" name="searchId"
       pattern="[A-Za-z]{3}-[0-9]{3}"
       title="Please use format: ABC-123"&gt;</code></pre>
                </div>
            </div>
        </div>
    </section>

    <!-- Hidden Input -->
    <section class="card mb-4">
        <div class="card-header">
            <h2>12. Hidden Input (type="hidden")</h2>
        </div>
        <div class="card-body">
            <p>Not visible to users but sent with form submission.</p>
            <div class="example">
                <input type="hidden" id="userId" name="userId" value="12345">
                <p><strong>Use case:</strong> Storing user IDs, session tokens, or other data that doesn't need user interaction.</p>
                
                <div class="code-snippet mt-3">
                    <button class="btn btn-sm btn-outline-secondary copy-btn" data-bs-toggle="tooltip" title="Copy code">
                        <i class="bi bi-clipboard"></i> Copy
                    </button>
                    <pre><code class="language-html">&lt;!-- Basic hidden field --&gt;
&lt;input type="hidden" id="userId" name="userId" value="12345"&gt;

&lt;!-- Hidden field with timestamp --&gt;
&lt;input type="hidden" id="timestamp" name="timestamp"&gt;
&lt;script&gt;
    document.getElementById('timestamp').value = new Date().toISOString();
&lt;/script&gt;

&lt;!-- Hidden CSRF token --&gt;
&lt;input type="hidden" name="_token" value="a1b2c3d4e5f6g7h8i9j0"&gt;

&lt;!-- Hidden fields for pagination --&gt;
&lt;input type="hidden" name="page" value="1"&gt;
&lt;input type="hidden" name="itemsPerPage" value="10"&gt;

&lt;!-- Hidden field for tracking source --&gt;
&lt;input type="hidden" name="source" value="homepage"&gt;</code></pre>
                </div>
            </div>
        </div>
    </section>

    <!-- Submit and Reset Buttons -->
    <section class="card mb-4">
        <div class="card-header">
            <h2>13. Submit & Reset Buttons</h2>
        </div>
        <div class="card-body">
            <div class="example">
                <button type="submit" class="btn btn-primary me-2">Submit Form</button>
                <button type="reset" class="btn btn-secondary">Reset Form</button>
                <button type="button" class="btn btn-outline-primary ms-2" onclick="alert('Button clicked!')">Regular Button</button>
                <p class="mt-2"><strong>Note:</strong> <code>type="submit"</code> submits the form, <code>type="reset"</code> resets form fields, and <code>type="button"</code> is a clickable button with no default behavior.</p>
                
                <div class="code-snippet mt-3">
                    <button class="btn btn-sm btn-outline-secondary copy-btn" data-bs-toggle="tooltip" title="Copy code">
                        <i class="bi bi-clipboard"></i> Copy
                    </button>
                    <pre><code class="language-html">&lt;!-- Submit button --&gt;
&lt;button type="submit"&gt;Save Changes&lt;/button&gt;

&lt;!-- Reset button --&gt;
&lt;button type="reset"&gt;Reset Form&lt;/button&gt;

&lt;!-- Regular button with click handler --&gt;
&lt;button type="button" onclick="alert('Hello!')"&gt;Click Me&lt;/button&gt;

&lt;!-- Button with icon --&gt;
&lt;button type="submit"&gt;
    &lt;i class="bi bi-save"&gt;&lt;/i&gt; Save
&lt;/button&gt;

&lt;!-- Disabled button --&gt;
&lt;button type="submit" disabled&gt;Processing...&lt;/button&gt;

&lt;!-- Button with form attributes --&gt;
&lt;button type="submit" 
        form="myForm" 
        formaction="/process.php" 
        formmethod="post"
        formenctype="multipart/form-data"
        formtarget="_blank"
        formnovalidate&gt;
    Submit to New Window
&lt;/button&gt;

&lt;!-- Button with confirmation --&gt;
&lt;button type="submit" onclick="return confirm('Are you sure?')"&gt;
    Delete Account
&lt;/button&gt;</code></pre>
                </div>
            </div>
        </div>
    </section>

    <div class="alert alert-info mt-4">
        <h4>Form Submission Notes:</h4>
        <ul>
            <li>Always use proper <code>name</code> attributes for form controls to ensure data is sent to the server.</li>
            <li>Use appropriate input types for better mobile experience and validation.</li>
            <li>Always validate input on both client and server side.</li>
            <li>Use <code>label</code> elements with <code>for</code> attributes for better accessibility.</li>
        </ul>
    </div>
</article>
</main>
<style>
/* Style for code snippets */
.code-snippet {
    position: relative;
    background: #f8f9fa;
    border-radius: 4px;
    padding: 1rem;
    margin: 1rem 0;
    border: 1px solid #dee2e6;
}

.code-snippet pre {
    margin: 0;
    padding: 0;
    background: none;
}

.code-snippet .copy-btn {
    position: absolute;
    top: 0.5rem;
    right: 0.5rem;
    z-index: 10;
}

/* Make code blocks scrollable */
pre code {
    display: block;
    overflow-x: auto;
    padding: 1em;
    color: #333;
    background: #f8f9fa;
}

/* Syntax highlighting for code */
.token.comment,
.token.prolog,
.token.doctype,
.token.cdata {
    color: #6a9955;
}

.token.punctuation {
    color: #d4d4d4;
}

.token.property,
.token.tag,
.token.boolean,
.token.number,
.token.constant,
.token.symbol,
.token.deleted {
    color: #b5cea8;
}

.token.selector,
.token.attr-name,
.token.string,
.token.char,
.token.builtin,
.token.inserted {
    color: #ce9178;
}

.token.operator,
.token.entity,
.token.url,
.language-css .token.string,
.style .token.string {
    color: #d4d4d4;
}

.token.atrule,
.token.attr-value,
.token.keyword {
    color: #569cd6;
}

.token.function,
.token.class-name {
    color: #dcdcaa;
}
</style>

<script>
// Simple script to demonstrate range input functionality
const rangeInput = document.getElementById('volume');
const rangeValue = document.getElementById('volumeValue');

if (rangeInput && rangeValue) {
    rangeInput.addEventListener('input', function() {
        rangeValue.textContent = this.value;
    });
}

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
            const codeBlock = this.nextElementSibling;
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
});
</script>

<?php include_file('includes/footer.php'); ?>