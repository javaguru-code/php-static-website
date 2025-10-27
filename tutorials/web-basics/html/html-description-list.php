<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'Full Stack Master - HTML Description List';
$page_description = 'Learn how to create and style description lists in HTML with examples and best practices';
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
    <h1 class="mb-4">HTML Description Lists</h1>
    
    <div class="alert alert-info">
        <i class="fas fa-info-circle me-2"></i>Description lists are used to display name-value pairs, such as terms and definitions, questions and answers, or any other groups of related information.
    </div>

    <section id="basic-description-list" class="mt-5">
        <h2>Basic Description List</h2>
        <p>The <code>&lt;dl&gt;</code> element defines a description list, <code>&lt;dt&gt;</code> defines the term, and <code>&lt;dd&gt;</code> describes each term.</p>
        
        <div class="row">
            <div class="col-md-6">
                <h5>Code Example:</h5>
                <pre><code class="language-html">&lt;dl&gt;
    &lt;dt&gt;HTML&lt;/dt&gt;
    &lt;dd&gt;HyperText Markup Language - the standard markup language for creating web pages.&lt;/dd&gt;
    
    &lt;dt&gt;CSS&lt;/dt&gt;
    &lt;dd&gt;Cascading Style Sheets - used for styling web pages.&lt;/dd&gt;
    
    &lt;dt&gt;JavaScript&lt;/dt&gt;
    &lt;dd&gt;A programming language that enables interactive web pages.&lt;/dd&gt;
&lt;/dl&gt;</code></pre>
            </div>
            <div class="col-md-6">
                <h5>Result:</h5>
                <div class="border p-3 bg-light">
                    <dl>
                        <dt>HTML</dt>
                        <dd>HyperText Markup Language - the standard markup language for creating web pages.</dd>
                        
                        <dt>CSS</dt>
                        <dd>Cascading Style Sheets - used for styling web pages.</dd>
                        
                        <dt>JavaScript</dt>
                        <dd>A programming language that enables interactive web pages.</dd>
                    </dl>
                </div>
            </div>
        </div>
    </section>

    <section id="multiple-descriptions" class="mt-5">
        <h2>Multiple Descriptions</h2>
        <p>You can have multiple <code>&lt;dd&gt;</code> elements for a single <code>&lt;dt&gt;</code> to provide multiple descriptions or values for a term.</p>
        
        <div class="row">
            <div class="col-md-6">
                <h5>Code Example:</h5>
                <pre><code class="language-html">&lt;dl&gt;
    &lt;dt&gt;Coffee&lt;/dt&gt;
    &lt;dd&gt;A hot, caffeinated beverage made from roasted coffee beans.&lt;/dd&gt;
    &lt;dd&gt;A medium to dark brown color.&lt;/dd&gt;
    
    &lt;dt&gt;Tea&lt;/dt&gt;
    &lt;dd&gt;A hot or cold drink made by infusing dried tea leaves in water.&lt;/dd&gt;
    &lt;dd&gt;The afternoon meal in some parts of the UK.&lt;/dd&gt;
&lt;/dl&gt;</code></pre>
            </div>
            <div class="col-md-6">
                <h5>Result:</h5>
                <div class="border p-3 bg-light">
                    <dl>
                        <dt>Coffee</dt>
                        <dd>A hot, caffeinated beverage made from roasted coffee beans.</dd>
                        <dd>A medium to dark brown color.</dd>
                        
                        <dt>Tea</dt>
                        <dd>A hot or cold drink made by infusing dried tea leaves in water.</dd>
                        <dd>The afternoon meal in some parts of the UK.</dd>
                    </dl>
                </div>
            </div>
        </div>
    </section>

    <section id="grouping-terms" class="mt-5">
        <h2>Grouping Terms</h2>
        <p>You can group multiple terms with a single description by using multiple <code>&lt;dt&gt;</code> elements followed by a single <code>&lt;dd&gt;</code>.</p>
        
        <div class="row">
            <div class="col-md-6">
                <h5>Code Example:</h5>
                <pre><code class="language-html">&lt;dl&gt;
    &lt;dt&gt;HTML&lt;/dt&gt;
    &lt;dt&gt;HyperText Markup Language&lt;/dt&gt;
    &lt;dd&gt;The standard markup language for creating web pages.&lt;/dd&gt;
    
    &lt;dt&gt;CSS&lt;/dt&gt;
    &lt;dt&gt;Cascading Style Sheets&lt;/dt&gt;
    &lt;dd&gt;Used for describing the presentation of a document.&lt;/dd&gt;
&lt;/dl&gt;</code></pre>
            </div>
            <div class="col-md-6">
                <h5>Result:</h5>
                <div class="border p-3 bg-light">
                    <dl>
                        <dt>HTML</dt>
                        <dt>HyperText Markup Language</dt>
                        <dd>The standard markup language for creating web pages.</dd>
                        
                        <dt>CSS</dt>
                        <dt>Cascading Style Sheets</dt>
                        <dd>Used for describing the presentation of a document.</dd>
                    </dl>
                </div>
            </div>
        </div>
    </section>

    <section id="styling-with-css" class="mt-5">
        <h2>Styling Description Lists with CSS</h2>
        <p>You can customize the appearance of description lists using CSS. Here are some common styling options:</p>
        
        <h4 class="mt-4">1. Horizontal Layout</h4>
        <div class="row">
            <div class="col-md-6">
                <pre><code class="language-css">/* Horizontal description list */
dl.horizontal {
    display: grid;
    grid-template-columns: max-content auto;
    gap: 0.5rem 1.5rem;
}

dl.horizontal dt {
    font-weight: 600;
    grid-column-start: 1;
}

dl.horizontal dd {
    margin: 0;
    grid-column-start: 2;
}

/* Add a border between items */
dl.horizontal > *:not(:last-child) {
    margin-bottom: 0.75rem;
    padding-bottom: 0.75rem;
    border-bottom: 1px solid #dee2e6;
}</code></pre>
            </div>
            <div class="col-md-6">
                <h5>Result:</h5>
                <div class="border p-3 bg-light">
                    <dl class="horizontal">
                        <dt>Name:</dt>
                        <dd>John Doe</dd>
                        
                        <dt>Email:</dt>
                        <dd>john@example.com</dd>
                        
                        <dt>Location:</dt>
                        <dd>New York, USA</dd>
                        
                        <dt>Skills:</dt>
                        <dd>HTML, CSS, JavaScript, PHP</dd>
                    </dl>
                </div>
            </div>
        </div>
        
        <h4 class="mt-4">2. Card Layout</h4>
        <div class="row">
            <div class="col-md-6">
                <pre><code class="language-css">/* Card layout for description lists */
dl.card-list {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 1rem;
    margin: 0;
    padding: 0;
}

dl.card-list > div {
    background: white;
    border: 1px solid #dee2e6;
    border-radius: 0.5rem;
    padding: 1.25rem;
    transition: transform 0.2s, box-shadow 0.2s;
}

dl.card-list > div:hover {
    transform: translateY(-3px);
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
}

dl.card-list dt {
    font-weight: 600;
    color: #0d6efd;
    font-size: 1.1rem;
    margin-bottom: 0.5rem;
}

dl.card-list dd {
    margin-left: 0;
    color: #6c757d;
}</code></pre>
            </div>
            <div class="col-md-6">
                <h5>Result:</h5>
                <div class="border p-3 bg-light">
                    <dl class="card-list">
                        <div>
                            <dt>Web Development</dt>
                            <dd>Building and maintaining websites and web applications.</dd>
                        </div>
                        <div>
                            <dt>UI/UX Design</dt>
                            <dd>Creating user interfaces with a focus on user experience.</dd>
                        </div>
                        <div>
                            <dt>Mobile Development</dt>
                            <dd>Building applications for mobile devices.</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </section>

    <section id="practical-examples" class="mt-5">
        <h2>Practical Examples</h2>
        
        <div class="row">
            <div class="col-md-6">
                <h4>FAQ Section</h4>
                <pre><code class="language-html">&lt;h3&gt;Frequently Asked Questions&lt;/h3&gt;
&lt;dl class="faq"&gt;
    &lt;div class="faq-item"&gt;
        &lt;dt&gt;What is HTML?&lt;/dt&gt;
        &lt;dd&gt;HTML (HyperText Markup Language) is the standard markup language for creating web pages.&lt;/dd&gt;
    &lt;/div&gt;
    &lt;div class="faq-item"&gt;
        &lt;dt&gt;What is CSS used for?&lt;/dt&gt;
        &lt;dd&gt;CSS (Cascading Style Sheets) is used for styling and layout of web pages.&lt;/dd&gt;
    &lt;/div&gt;
    &lt;div class="faq-item"&gt;
        &lt;dt&gt;What is JavaScript?&lt;/dt&gt;
        &lt;dd&gt;JavaScript is a programming language that enables interactive web pages.&lt;/dd&gt;
    &lt;/div&gt;
&lt;/dl&gt;</code></pre>
            </div>
            <div class="col-md-6">
                <h4>Product Specifications</h4>
                <pre><code class="language-html">&lt;h3&gt;Product Specifications&lt;/h3&gt;
&lt;dl class="specs"&gt;
    &lt;div class="spec-item"&gt;
        &lt;dt&gt;Brand&lt;/dt&gt;
        &lt;dd&gt;TechMaster&lt;/dd&gt;
    &lt;/div&gt;
    &lt;div class="spec-item"&gt;
        &lt;dt&gt;Model&lt;/dt&gt;
        &lt;dd&gt;TM-2023&lt;/dd&gt;
    &lt;/div&gt;
    &lt;div class="spec-item"&gt;
        &lt;dt&gt;Dimensions&lt;/dt&gt;
        &lt;dd&gt;12.3 x 8.6 x 0.7 inches&lt;/dd&gt;
    &lt;/div&gt;
    &lt;div class="spec-item"&gt;
        &lt;dt&gt;Weight&lt;/dt&gt;
        &lt;dd&gt;2.8 pounds&lt;/dd&gt;
    &lt;/div&gt;
&lt;/dl&gt;</code></pre>
            </div>
        </div>
    </section>

    <section id="best-practices" class="mt-5">
        <h2>Best Practices</h2>
        <div class="card">
            <div class="card-body">
                <ul class="mb-0">
                    <li>Use description lists for name-value pairs where the relationship between terms and descriptions is important.</li>
                    <li>Keep terms (<code>&lt;dt&gt;</code>) concise and descriptive.</li>
                    <li>Use proper semantic structure - don't use description lists just for indentation or visual styling.</li>
                    <li>For accessibility, ensure the relationship between terms and descriptions is clear and logical.</li>
                    <li>Consider using CSS Grid or Flexbox for more complex layouts.</li>
                    <li>Test your description lists on different screen sizes to ensure they're responsive.</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="accessibility" class="mt-5">
        <h2>Accessibility Considerations</h2>
        <div class="card">
            <div class="card-body">
                <ul>
                    <li>Screen readers will announce the relationship between terms and descriptions.</li>
                    <li>Use the <code>aria-label</code> or <code>aria-labelledby</code> attribute to provide additional context if needed.</li>
                    <li>Ensure sufficient color contrast between text and background for better readability.</li>
                    <li>When using custom styling, maintain a clear visual hierarchy between terms and descriptions.</li>
                    <li>Test with screen readers to ensure the semantic relationship is properly conveyed.</li>
                </ul>
            </div>
        </div>
    </section>

    <div class="d-flex justify-content-between mt-5">
        <a href="html-unordered-list.php" class="btn btn-outline-primary">
            <i class="fas fa-arrow-left me-2"></i>Previous: Unordered Lists
        </a>
        <a href="#" class="btn btn-primary disabled">
            Next: HTML Tables <i class="fas fa-arrow-right ms-2"></i>
        </a>
    </div>
</div>

<!-- Custom CSS for this page -->
<style>
/* Horizontal description list */
dl.horizontal {
    display: grid;
    grid-template-columns: max-content auto;
    gap: 0.5rem 1.5rem;
}

dl.horizontal dt {
    font-weight: 600;
    grid-column-start: 1;
}

dl.horizontal dd {
    margin: 0;
    grid-column-start: 2;
}

/* Add a border between items */
dl.horizontal > *:not(:last-child) {
    margin-bottom: 0.75rem;
    padding-bottom: 0.75rem;
    border-bottom: 1px solid #dee2e6;
}

/* Card layout for description lists */
dl.card-list {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 1rem;
    margin: 0;
    padding: 0;
}

dl.card-list > div {
    background: white;
    border: 1px solid #dee2e6;
    border-radius: 0.5rem;
    padding: 1.25rem;
    transition: transform 0.2s, box-shadow 0.2s;
}

dl.card-list > div:hover {
    transform: translateY(-3px);
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
}

dl.card-list dt {
    font-weight: 600;
    color: #0d6efd;
    font-size: 1.1rem;
    margin-bottom: 0.5rem;
}

dl.card-list dd {
    margin-left: 0;
    color: #6c757d;
}

/* FAQ Styling */
dl.faq {
    border: 1px solid #dee2e6;
    border-radius: 0.5rem;
    overflow: hidden;
}

.faq-item {
    padding: 1rem 1.25rem;
    border-bottom: 1px solid #dee2e6;
    transition: background-color 0.2s;
}

.faq-item:last-child {
    border-bottom: none;
}

.faq-item:hover {
    background-color: #f8f9fa;
}

.faq-item dt {
    font-weight: 600;
    color: #0d6efd;
    cursor: pointer;
    position: relative;
    padding-right: 1.5rem;
}

.faq-item dt::after {
    content: "\f078";
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    font-size: 0.8em;
    color: #6c757d;
    transition: transform 0.3s;
}

.faq-item:hover dt::after {
    transform: translateY(-50%) rotate(180deg);
}

.faq-item dd {
    margin: 0.5rem 0 0 0;
    color: #6c757d;
    display: none;
}

.faq-item:hover dd {
    display: block;
}

/* Product specs */
dl.specs {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 0.75rem 1.5rem;
}

.spec-item {
    display: contents;
}

.spec-item dt {
    font-weight: 500;
    color: #6c757d;
    grid-column: 1;
}

.spec-item dd {
    margin: 0;
    font-weight: 500;
    grid-column: 2;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    dl.specs {
        grid-template-columns: 1fr;
    }
    
    .spec-item {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
        padding: 0.5rem 0;
        border-bottom: 1px solid #dee2e6;
    }
    
    .spec-item:last-child {
        border-bottom: none;
    }
}

section {
    scroll-margin-top: 80px;
}
</style>

<?php include_file('includes/footer.php'); ?>