<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML Lists - Full Stack Master';
$page_description = 'Comprehensive guide to HTML lists including ordered, unordered, description lists, and advanced list styling';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;

// Add Prism.js for code highlighting
$page_extra_head = '
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism-tomorrow.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/components/prism-markup-templating.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    .list-demo {
        background: #f8f9fa;
        padding: 1rem;
        border-radius: 0.25rem;
        margin-bottom: 1rem;
    }
    .list-group-item.active {
        background-color: #0d6efd;
        border-color: #0d6efd;
    }
    .custom-list {
        list-style-type: none;
        padding-left: 1.5rem;
    }
    .custom-list li::before {
        content: "•";
        color: #0d6efd;
        font-weight: bold;
        display: inline-block;
        width: 1em;
        margin-left: -1em;
    }
</style>';

include_file('includes/header.php');
include 'sidebar.php';
?>

<div class="tutorial-content">
    <section class="section">
        <h1 class="mb-4">HTML Lists</h1>
        
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h4">Introduction to HTML Lists</h2>
                <p>HTML provides three types of lists to present information in a structured format. Lists are essential for organizing content and improving readability.</p>
                
                <div class="alert alert-info">
                    <h5 class="alert-heading">Key Points:</h5>
                    <ul class="mb-0">
                        <li>Use <code>&lt;ul&gt;</code> for unordered lists (bullet points)</li>
                        <li>Use <code>&lt;ol&gt;</code> for ordered lists (numbered)</li>
                        <li>Use <code>&lt;dl&gt;</code> for description lists (terms and descriptions)</li>
                        <li>Always include proper nesting and indentation</li>
                    </ul>
                </div>
                
                <h3 class="h5 mt-4">1. Unordered Lists (&lt;ul&gt;)</h3>
                <p>Unordered lists are used when the order of items doesn't matter. They are typically displayed with bullet points.</p>
                
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="h6">HTML Code:</h4>
                        <pre><code class="language-html">&lt;!-- Basic unordered list --&gt;
&lt;ul&gt;
    &lt;li&gt;First item&lt;/li&gt;
    &lt;li&gt;Second item
        &lt;ul&gt;
            &lt;li&gt;Nested item 1&lt;/li&gt;
            &lt;li&gt;Nested item 2&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li&gt;Third item&lt;/li&gt;
&lt;/ul&gt;

<!-- With custom bullet style -->
&lt;ul style="list-style-type: square;"&gt;
    &lt;li&gt;Square bullet&lt;/li&gt;
    &lt;li&gt;Another item&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                    </div>
                    <div class="col-md-6">
                        <h4 class="h6">Live Example:</h4>
                        <div class="list-demo">
                            <h5>Shopping List</h5>
                            <ul class="mb-0">
                                <li>Milk</li>
                                <li>Bread
                                    <ul>
                                        <li>Whole wheat</li>
                                        <li>White</li>
                                    </ul>
                                </li>
                                <li>Eggs</li>
                            </ul>
                            
                            <h5 class="mt-3">Custom Bullets</h5>
                            <ul style="list-style-type: square;" class="mb-0">
                                <li>Task 1</li>
                                <li>Task 2</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <h3 class="h5 mt-4">2. Ordered Lists (&lt;ol&gt;)</h3>
                <p>Ordered lists are used when the sequence of items is important. They are displayed with numbers or letters.</p>
                
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="h6">HTML Code:</h4>
                        <pre><code class="language-html">&lt;!-- Basic ordered list --&gt;
&lt;ol&gt;
    &lt;li&gt;First step&lt;/li&gt;
    &lt;li&gt;Second step
        &lt;ol type="a"&gt;
            &lt;li&gt;Sub-step A&lt;/li&gt;
            &lt;li&gt;Sub-step B&lt;/li&gt;
        &lt;/ol&gt;
    &lt;/li&gt;
    &lt;li&gt;Third step&lt;/li&gt;
&lt;/ol&gt;

<!-- Start from a specific number -->
&lt;ol start="10"&gt;
    &lt;li&gt;Tenth item&lt;/li&gt;
    &lt;li&gt;Eleventh item&lt;/li&gt;
&lt;/ol&gt;</code></pre>
                    </div>
                    <div class="col-md-6">
                        <h4 class="h6">Live Example:</h4>
                        <div class="list-demo">
                            <h5>Recipe Steps</h5>
                            <ol class="mb-0">
                                <li>Preheat oven to 350°F (175°C)</li>
                                <li>Mix dry ingredients
                                    <ol type="a">
                                        <li>Flour</li>
                                        <li>Baking powder</li>
                                        <li>Salt</li>
                                    </ol>
                                </li>
                                <li>Add wet ingredients</li>
                                <li>Bake for 30 minutes</li>
                            </ol>
                            
                            <h5 class="mt-3">Countdown</h5>
                            <ol start="5" class="mb-0">
                                <li>Five</li>
                                <li>Four</li>
                                <li>Three</li>
                            </ol>
                        </div>
                    </div>
                </div>
                
                <h3 class="h5 mt-4">3. Description Lists (&lt;dl&gt;)</h3>
                <p>Description lists are used for name-value pairs, like terms and definitions or questions and answers.</p>
                
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="h6">HTML Code:</h4>
                        <pre><code class="language-html">&lt;dl&gt;
    &lt;dt&gt;HTML&lt;/dt&gt;
    &lt;dd&gt;HyperText Markup Language - the standard markup language for web pages&lt;/dd&gt;
    
    &lt;dt&gt;CSS&lt;/dt&gt;
    &lt;dd&gt;Cascading Style Sheets - used for styling web pages&lt;/dd&gt;
    
    &lt;dt&gt;JavaScript&lt;/dt&gt;
    &lt;dd&gt;A programming language for interactive web content&lt;/dd&gt;
&lt;/dl&gt;

<!-- With multiple descriptions per term -->
&lt;dl&gt;
    &lt;dt&gt;Breakfast&lt;/dt&gt;
    &lt;dd&gt;8:00 AM - 10:00 AM&lt;/dd&gt;
    
    &lt;dt&gt;Lunch&lt;/dt&gt;
    &lt;dd&gt;12:00 PM - 2:00 PM&lt;/dd&gt;
    &lt;dd&gt;Weekend Brunch: 11:00 AM - 3:00 PM&lt;/dd&gt;
&lt;/dl&gt;</code></pre>
                    </div>
                    <div class="col-md-6">
                        <h4 class="h6">Live Example:</h4>
                        <div class="list-demo">
                            <h5>Web Technologies</h5>
                            <dl class="mb-0">
                                <dt>HTML</dt>
                                <dd>Structures web content</dd>
                                
                                <dt>CSS</dt>
                                <dd>Styles the web content</dd>
                                
                                <dt>JavaScript</dt>
                                <dd>Adds interactivity to web pages</dd>
                            </dl>
                            
                            <h5 class="mt-3">Store Hours</h5>
                            <dl class="mb-0">
                                <dt>Monday - Friday</dt>
                                <dd>9:00 AM - 9:00 PM</dd>
                                
                                <dt>Saturday</dt>
                                <dd>10:00 AM - 10:00 PM</dd>
                                
                                <dt>Sunday</dt>
                                <dd>11:00 AM - 7:00 PM</dd>
                                <dd>Closed on major holidays</dd>
                            </dl>
                        </div>
                    </div>
                </div>
                
                <h3 class="h5 mt-4">4. Styling Lists with CSS</h3>
                <p>Customize the appearance of your lists using CSS to match your design.</p>
                
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="h6">HTML & CSS Code:</h4>
                        <pre><code class="language-html">&lt;style&gt;
    .custom-list {
        list-style-type: none;
        padding-left: 1.5rem;
    }
    .custom-list li {
        position: relative;
        padding-left: 1.5rem;
        margin-bottom: 0.5rem;
    }
    .custom-list li::before {
        content: "\f00c"; /* Font Awesome check icon */
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        color: #28a745;
        position: absolute;
        left: 0;
    }
    
    .horizontal-list {
        list-style: none;
        padding: 0;
        display: flex;
        gap: 1rem;
    }
    .horizontal-list li {
        background: #f8f9fa;
        padding: 0.5rem 1rem;
        border-radius: 4px;
    }
&lt;/style&gt;

&lt;ul class="custom-list"&gt;
    &lt;li&gt;Custom bullet points&lt;/li&gt;
    &lt;li&gt;Using CSS pseudo-elements&lt;/li&gt;
    &lt;li&gt;Fully customizable&lt;/li&gt;
&lt;/ul&gt;

&lt;ul class="horizontal-list"&gt;
    &lt;li&gt;Home&lt;/li&gt;
    &lt;li&gt;About&lt;/li&gt;
    &lt;li&gt;Services&lt;/li&gt;
    &lt;li&gt;Contact&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                    </div>
                    <div class="col-md-6">
                        <h4 class="h6">Live Example:</h4>
                        <div class="list-demo">
                            <h5>Custom Styled List</h5>
                            <ul class="custom-list">
                                <li>Custom bullet points</li>
                                <li>Using CSS pseudo-elements</li>
                                <li>Fully customizable</li>
                            </ul>
                            
                            <h5 class="mt-4">Horizontal Navigation</h5>
                            <ul class="horizontal-list">
                                <li>Home</li>
                                <li>About</li>
                                <li>Services</li>
                                <li>Contact</li>
                            </ul>
                            
                            <h5 class="mt-4">Breadcrumb Navigation</h5>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Category</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Current Page</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                
                <h3 class="h5 mt-4">5. Nested Lists</h3>
                <p>You can nest lists of different types to create complex structures.</p>
                
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="h6">HTML Code:</h4>
                        <pre><code class="language-html">&lt;ol&gt;
    &lt;li&gt;First Level
        &lt;ul&gt;
            &lt;li&gt;Second Level
                &lt;ol type="a"&gt;
                    &lt;li&gt;Third Level A&lt;/li&gt;
                    &lt;li&gt;Third Level B&lt;/li&gt;
                &lt;/ol&gt;
            &lt;/li&gt;
            &lt;li&gt;Second Level Item 2&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li&gt;First Level Item 2
        &lt;dl&gt;
            &lt;dt&gt;Term&lt;/dt&gt;
            &lt;dd&gt;Definition&lt;/dd&gt;
        &lt;/dl&gt;
    &lt;/li&gt;
&lt;/ol&gt;</code></pre>
                    </div>
                    <div class="col-md-6">
                        <h4 class="h6">Live Example:</h4>
                        <div class="list-demo">
                            <ol class="mb-0">
                                <li>Web Development
                                    <ul>
                                        <li>Frontend
                                            <ol type="a">
                                                <li>HTML</li>
                                                <li>CSS</li>
                                                <li>JavaScript</li>
                                            </ol>
                                        </li>
                                        <li>Backend</li>
                                    </ul>
                                </li>
                                <li>Mobile Development
                                    <dl>
                                        <dt>iOS</dt>
                                        <dd>Swift, Objective-C</dd>
                                        <dt>Android</dt>
                                        <dd>Kotlin, Java</dd>
                                    </dl>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                
                <div class="alert alert-success mt-4">
                    <h5 class="alert-heading">Best Practices:</h5>
                    <ul class="mb-0">
                        <li>Use semantic HTML elements for better accessibility</li>
                        <li>Keep nesting to a reasonable level (2-3 levels deep)</li>
                        <li>Use CSS to style lists for better visual hierarchy</li>
                        <li>Ensure proper contrast for text and list markers</li>
                        <li>Test your lists with screen readers for accessibility</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>

    <div class="d-flex justify-content-between mt-5">
        <a href="html-anchor.php" class="btn btn-outline-primary">
            <i class="fas fa-arrow-left me-2"></i>Previous: HTML Anchor
        </a>
        <a href="html-ordered-list.php" class="btn btn-primary">
            Next: Ordered Lists <i class="fas fa-arrow-right ms-2"></i>
        </a>
    </div>

<?php include_file('includes/footer.php'); ?>