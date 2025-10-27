<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML Attributes - Full Stack Master';
$page_description = 'Comprehensive guide to HTML attributes including global attributes, event attributes, and element-specific attributes';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>
<main class="col-12 col-lg-9 pt-3 px-lg-4">
    <div class="d-lg-none mb-3">
        <button class="btn btn-primary" data-bs-target="#sidebarOffcanvas" data-bs-toggle="offcanvas">
            <i class="bi bi-list"></i> Menu
        </button>
    </div>

    <article class="tutorial-content">
    <section class="section">
        <h1 class="mb-4">HTML Attributes</h1>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4">Understanding HTML Attributes</h2>
                <p>HTML attributes provide additional information about HTML elements. They are always specified in the start tag and usually come in name/value pairs like: <code>name="value"</code>.</p>
                
                <div class="alert alert-info">
                    <h5>Basic Attribute Syntax:</h5>
                    <pre><code class="language-html">&lt;tagname attribute="value"&gt;Content&lt;/tagname&gt;</code></pre>
                    <p class="mb-0">Some attributes don't require a value and can be written as just the attribute name (boolean attributes).</p>
                </div>
                
                <h3 class="h5 mt-4">Key Points About Attributes</h3>
                <ul>
                    <li>All HTML elements can have attributes</li>
                    <li>Attributes provide additional information about elements</li>
                    <li>Attributes are always specified in the start tag</li>
                    <li>Attributes usually come in name/value pairs: <code>name="value"</code></li>
                </ul>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4">1. Global Attributes</h2>
                <p>Global attributes are attributes that can be used on any HTML element.</p>
                
                <div class="table-responsive mb-4">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Attribute</th>
                                <th>Description</th>
                                <th>Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>class</code></td>
                                <td>Specifies one or more class names for an element (used to point to a class in a style sheet)</td>
                                <td><code>&lt;div class="container"&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>id</code></td>
                                <td>Specifies a unique id for an element</td>
                                <td><code>&lt;div id="header"&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>style</code></td>
                                <td>Specifies an inline CSS style for an element</td>
                                <td><code>&lt;p style="color:blue;"&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>title</code></td>
                                <td>Specifies extra information about an element (shown as a tooltip)</td>
                                <td><code>&lt;p title="Tooltip text"&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>data-*</code></td>
                                <td>Used to store custom data private to the page or application</td>
                                <td><code>&lt;div data-user-id="123"&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>hidden</code></td>
                                <td>Specifies that an element is not yet, or is no longer, relevant</td>
                                <td><code>&lt;p hidden&gt;This is hidden&lt;/p&gt;</code></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4">2. Form Attributes</h2>
                <p>Attributes specifically used with form elements.</p>
                
                <div class="table-responsive mb-4">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Attribute</th>
                                <th>Description</th>
                                <th>Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>action</code></td>
                                <td>Specifies where to send the form-data when a form is submitted</td>
                                <td><code>&lt;form action="/submit"&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>method</code></td>
                                <td>Specifies the HTTP method to use when sending form-data (get/post)</td>
                                <td><code>&lt;form method="post"&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>name</code></td>
                                <td>Specifies the name of an input element</td>
                                <td><code>&lt;input name="username"&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>value</code></td>
                                <td>Specifies the value of an input element</td>
                                <td><code>&lt;input value="Default"&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>placeholder</code></td>
                                <td>Specifies a short hint that describes the expected value of an input field</td>
                                <td><code>&lt;input placeholder="Enter name"&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>required</code></td>
                                <td>Specifies that an input field must be filled out before submitting the form</td>
                                <td><code>&lt;input required&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>disabled</code></td>
                                <td>Specifies that an input element should be disabled</td>
                                <td><code>&lt;input disabled&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>readonly</code></td>
                                <td>Specifies that an input field is read-only</td>
                                <td><code>&lt;input readonly&gt;</code></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4">3. Image & Media Attributes</h2>
                <p>Attributes used with images and media elements.</p>
                
                <div class="table-responsive mb-4">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Attribute</th>
                                <th>Description</th>
                                <th>Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>src</code></td>
                                <td>Specifies the path to the image/media file</td>
                                <td><code>&lt;img src="image.jpg"&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>alt</code></td>
                                <td>Specifies an alternate text for an image</td>
                                <td><code>&lt;img src="img.jpg" alt="Description"&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>width</code>/<code>height</code></td>
                                <td>Specifies the width/height of an image, in pixels</td>
                                <td><code>&lt;img src="img.jpg" width="500"&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>controls</code></td>
                                <td>Specifies that audio/video controls should be displayed</td>
                                <td><code>&lt;video controls&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>autoplay</code></td>
                                <td>Specifies that the audio/video will start playing as soon as it is ready</td>
                                <td><code>&lt;video autoplay&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>loop</code></td>
                                <td>Specifies that the audio/video will start over again, every time it is finished</td>
                                <td><code>&lt;audio loop&gt;</code></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4">4. Link & Anchor Attributes</h2>
                <p>Attributes used with hyperlinks and anchor tags.</p>
                
                <div class="table-responsive mb-4">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Attribute</th>
                                <th>Description</th>
                                <th>Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>href</code></td>
                                <td>Specifies the URL of the page the link goes to</td>
                                <td><code>&lt;a href="https://example.com"&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>target</code></td>
                                <td>Specifies where to open the linked document</td>
                                <td><code>&lt;a target="_blank"&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>download</code></td>
                                <td>Specifies that the target will be downloaded when a user clicks on the hyperlink</td>
                                <td><code>&lt;a href="file.pdf" download&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>rel</code></td>
                                <td>Specifies the relationship between the current document and the linked document</td>
                                <td><code>&lt;a rel="nofollow"&gt;</code></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4">5. Table Attributes</h2>
                <p>Attributes used with table elements.</p>
                
                <div class="table-responsive mb-4">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Attribute</th>
                                <th>Description</th>
                                <th>Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>colspan</code></td>
                                <td>Specifies the number of columns a table cell should span</td>
                                <td><code>&lt;td colspan="2"&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>rowspan</code></td>
                                <td>Specifies the number of rows a table cell should span</td>
                                <td><code>&lt;td rowspan="2"&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>headers</code></td>
                                <td>Specifies one or more header cells a cell is related to</td>
                                <td><code>&lt;td headers="name"&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>scope</code></td>
                                <td>Specifies whether a header cell is a header for a column, row, or group of columns or rows</td>
                                <td><code>&lt;th scope="col"&gt;</code></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4">6. Boolean Attributes</h2>
                <p>Boolean attributes can have only one value, which is the same as the attribute name.</p>
                
                <div class="table-responsive mb-4">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Attribute</th>
                                <th>Description</th>
                                <th>Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>disabled</code></td>
                                <td>Specifies that an element should be disabled</td>
                                <td><code>&lt;button disabled&gt;Click&lt;/button&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>readonly</code></td>
                                <td>Specifies that an input field is read-only</td>
                                <td><code>&lt;input readonly&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>required</code></td>
                                <td>Specifies that an input field must be filled out</td>
                                <td><code>&lt;input required&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>autofocus</code></td>
                                <td>Specifies that an element should automatically get focus when the page loads</td>
                                <td><code>&lt;input autofocus&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>multiple</code></td>
                                <td>Specifies that multiple options can be selected at once</td>
                                <td><code>&lt;select multiple&gt;</code></td>
                            </tr>
                            <tr>
                                <td><code>checked</code></td>
                                <td>Specifies that an &lt;input&gt; element should be pre-selected when the page loads</td>
                                <td><code>&lt;input type="checkbox" checked&gt;</code></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="alert alert-info">
                    <h5>Note on Boolean Attributes:</h5>
                    <p>In HTML, boolean attributes can be written in several ways:</p>
                    <ul class="mb-0">
                        <li><code>disabled</code> (recommended)</li>
                        <li><code>disabled=""</code></li>
                        <li><code>disabled="disabled"</code></li>
                    </ul>
                    <p class="mb-0 mt-2">The first form is the most concise and is generally preferred in HTML5.</p>
                </div>
            </div>
        </div>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4 mb-4">7. Data Attributes</h2>
                <p>Custom data attributes allow you to store extra information in HTML elements.</p>
                
                <div class="example-box p-3 bg-light rounded mb-4">
                    <h5>Example of Data Attributes:</h5>
                    <pre><code class="language-html">&lt;div 
    id="user-profile"
    data-user-id="12345"
    data-role="admin"
    data-registration-date="2023-01-15"&gt;
    User Profile
&lt;/div&gt;</code></pre>
                </div>
                
                <h5>Accessing Data Attributes in JavaScript:</h5>
                <pre><code class="language-javascript">// Using dataset
const profile = document.getElementById('user-profile');
console.log(profile.dataset.userId);     // "12345"
console.log(profile.dataset.role);       // "admin"
console.log(profile.dataset.registrationDate); // "2023-01-15"</code></pre>
                
                <div class="alert alert-info mt-4">
                    <h5>Best Practices for Data Attributes:</h5>
                    <ul class="mb-0">
                        <li>Always prefix custom attributes with <code>data-</code></li>
                        <li>Use kebab-case for multi-word attribute names (e.g., <code>data-user-id</code>)</li>
                        <li>Don't store large amounts of data in data attributes</li>
                        <li>Consider using <code>JSON.parse()</code> for complex data structures</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include_file('includes/footer.php'); ?>