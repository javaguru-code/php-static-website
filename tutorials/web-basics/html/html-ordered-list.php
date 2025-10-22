<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'Full Stack Master - HTML Ordered List';
$page_description = 'Learn how to create and style ordered lists in HTML with examples and best practices';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;
include_file('includes/header.php');
include 'sidebar.php';
?>

<div class="tutorial-content">
    <h1 class="mb-4">HTML Ordered Lists</h1>
    
    <div class="alert alert-info">
        <i class="fas fa-info-circle me-2"></i>Ordered lists are used to present information in a numbered sequence, such as step-by-step instructions or ranked items.
    </div>

    <section id="basic-ordered-list" class="mt-5">
        <h2>Basic Ordered List</h2>
        <p>The <code>&lt;ol&gt;</code> element defines an ordered list, and each item is defined with the <code>&lt;li&gt;</code> (list item) element.</p>
        
        <div class="row">
            <div class="col-md-6">
                <h5>Code Example:</h5>
                <pre><code class="language-html">&lt;ol&gt;
    &lt;li&gt;First item&lt;/li&gt;
    &lt;li&gt;Second item&lt;/li&gt;
    &lt;li&gt;Third item&lt;/li&gt;
&lt;/ol&gt;</code></pre>
            </div>
            <div class="col-md-6">
                <h5>Result:</h5>
                <div class="border p-3 bg-light">
                    <ol>
                        <li>First item</li>
                        <li>Second item</li>
                        <li>Third item</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section id="list-types" class="mt-5">
        <h2>List Numbering Types</h2>
        <p>You can change the numbering style using the <code>type</code> attribute:</p>
        
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Example</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>type="1"</code></td>
                        <td>Default. Numbers (1, 2, 3, 4)</td>
                        <td><ol type="1" class="mb-0"><li>One</li><li>Two</li></ol></td>
                    </tr>
                    <tr>
                        <td><code>type="A"</code></td>
                        <td>Uppercase letters (A, B, C, D)</td>
                        <td><ol type="A" class="mb-0"><li>One</li><li>Two</li></ol></td>
                    </tr>
                    <tr>
                        <td><code>type="a"</code></td>
                        <td>Lowercase letters (a, b, c, d)</td>
                        <td><ol type="a" class="mb-0"><li>One</li><li>Two</li></ol></td>
                    </tr>
                    <tr>
                        <td><code>type="I"</code></td>
                        <td>Uppercase Roman numerals (I, II, III, IV)</td>
                        <td><ol type="I" class="mb-0"><li>One</li><li>Two</li></ol></td>
                    </tr>
                    <tr>
                        <td><code>type="i"</code></td>
                        <td>Lowercase Roman numerals (i, ii, iii, iv)</td>
                        <td><ol type="i" class="mb-0"><li>One</li><li>Two</li></ol></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="alert alert-warning mt-3">
            <i class="fas fa-exclamation-triangle me-2"></i>
            The <code>type</code> attribute is not supported in HTML5. Use CSS <code>list-style-type</code> instead for better compatibility.
        </div>
    </section>

    <section id="start-attribute" class="mt-5">
        <h2>Start Attribute</h2>
        <p>The <code>start</code> attribute specifies the starting number of the first item in an ordered list.</p>
        
        <div class="row">
            <div class="col-md-6">
                <h5>Code Example:</h5>
                <pre><code class="language-html">&lt;ol start="5"&gt;
    &lt;li&gt;Item 5&lt;/li&gt;
    &lt;li&gt;Item 6&lt;/li&gt;
    &lt;li&gt;Item 7&lt;/li&gt;
&lt;/ol&gt;</code></pre>
            </div>
            <div class="col-md-6">
                <h5>Result:</h5>
                <div class="border p-3 bg-light">
                    <ol start="5">
                        <li>Item 5</li>
                        <li>Item 6</li>
                        <li>Item 7</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section id="reversed-attribute" class="mt-5">
        <h2>Reversed Attribute</h2>
        <p>The <code>reversed</code> attribute specifies that the list order should be descending (9, 8, 7...).</p>
        
        <div class="row">
            <div class="col-md-6">
                <h5>Code Example:</h5>
                <pre><code class="language-html">&lt;ol reversed&gt;
    &lt;li&gt;Third item&lt;/li&gt;
    &lt;li&gt;Second item&lt;/li&gt;
    &lt;li&gt;First item&lt;/li&gt;
&lt;/ol&gt;</code></pre>
            </div>
            <div class="col-md-6">
                <h5>Result:</h5>
                <div class="border p-3 bg-light">
                    <ol reversed>
                        <li>Third item</li>
                        <li>Second item</li>
                        <li>First item</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section id="nested-lists" class="mt-5">
        <h2>Nested Ordered Lists</h2>
        <p>You can nest ordered lists to create hierarchical structures, like outlines or multi-level step-by-step instructions.</p>
        
        <div class="row">
            <div class="col-md-6">
                <h5>Code Example:</h5>
                <pre><code class="language-html">&lt;ol&gt;
    &lt;li&gt;First main item
        &lt;ol type="a"&gt;
            &lt;li&gt;First sub-item&lt;/li&gt;
            &lt;li&gt;Second sub-item&lt;/li&gt;
        &lt;/ol&gt;
    &lt;/li&gt;
    &lt;li&gt;Second main item
        &lt;ol type="i"&gt;
            &lt;li&gt;First sub-point&lt;/li&gt;
            &lt;li&gt;Second sub-point&lt;/li&gt;
        &lt;/ol&gt;
    &lt;/li&gt;
&lt;/ol&gt;</code></pre>
            </div>
            <div class="col-md-6">
                <h5>Result:</h5>
                <div class="border p-3 bg-light">
                    <ol>
                        <li>First main item
                            <ol type="a">
                                <li>First sub-item</li>
                                <li>Second sub-item</li>
                            </ol>
                        </li>
                        <li>Second main item
                            <ol type="i">
                                <li>First sub-point</li>
                                <li>Second sub-point</li>
                            </ol>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section id="styling-with-css" class="mt-5">
        <h2>Styling Ordered Lists with CSS</h2>
        <p>You can customize the appearance of ordered lists using CSS. Here are some common styling options:</p>
        
        <h4 class="mt-4">1. Changing List Style Type</h4>
        <div class="row">
            <div class="col-md-6">
                <pre><code class="language-css">/* Using CSS to style ordered lists */
ol.custom-style {
    list-style-type: upper-roman;
    padding-left: 2rem;
}

ol.custom-style li {
    margin-bottom: 0.5rem;
    padding-left: 0.5rem;
}

ol.colored-numbers {
    list-style: none;
    counter-reset: item;
    padding-left: 0;
}

ol.colored-numbers li {
    counter-increment: item;
    margin-bottom: 0.5rem;
    position: relative;
    padding-left: 2.5rem;
}

ol.colored-numbers li:before {
    content: counter(item);
    background: #0d6efd;
    color: white;
    font-weight: bold;
    border-radius: 50%;
    width: 1.8rem;
    height: 1.8rem;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    left: 0;
    top: 0;
}</code></pre>
            </div>
            <div class="col-md-6">
                <h5>Result:</h5>
                <div class="border p-3 bg-light">
                    <ol class="custom-style">
                        <li>Roman numerals</li>
                        <li>With custom spacing</li>
                    </ol>
                    
                    <ol class="colored-numbers">
                        <li>Styled numbers</li>
                        <li>With custom counters</li>
                        <li>And hover effects</li>
                    </ol>
                </div>
            </div>
        </div>
        
        <h4 class="mt-4">2. Horizontal Ordered List</h4>
        <div class="row">
            <div class="col-md-6">
                <pre><code class="language-css">/* Horizontal list */
ol.horizontal-list {
    display: flex;
    gap: 1rem;
    list-style: none;
    padding: 0;
    margin: 0;
}

ol.horizontal-list li {
    background: #f8f9fa;
    padding: 0.5rem 1rem;
    border-radius: 4px;
    border: 1px solid #dee2e6;
}</code></pre>
            </div>
            <div class="col-md-6">
                <h5>Result:</h5>
                <div class="border p-3 bg-light">
                    <ol class="horizontal-list">
                        <li>Step 1</li>
                        <li>Step 2</li>
                        <li>Step 3</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section id="best-practices" class="mt-5">
        <h2>Best Practices</h2>
        <div class="card">
            <div class="card-body">
                <ul class="mb-0">
                    <li>Use ordered lists when the sequence of items is important (e.g., step-by-step instructions, rankings, or any other sequence that would make sense if numbered).</li>
                    <li>For better accessibility, use semantic HTML5 elements and ARIA attributes when necessary.</li>
                    <li>Consider using CSS for styling rather than HTML attributes like <code>type</code> and <code>start</code> for better control and compatibility.</li>
                    <li>Keep list items concise and parallel in structure for better readability.</li>
                    <li>Use proper indentation for nested lists to maintain code readability.</li>
                    <li>For long lists, consider adding navigation anchors or a table of contents.</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="accessibility" class="mt-5">
        <h2>Accessibility Considerations</h2>
        <div class="card">
            <div class="card-body">
                <ul>
                    <li>Screen readers will announce the presence of a list and the number of items.</li>
                    <li>Use the <code>aria-label</code> or <code>aria-labelledby</code> attribute to provide additional context if needed.</li>
                    <li>For complex nested lists, consider using <code>role="list"</code> and <code>role="listitem"</code> for better screen reader support.</li>
                    <li>Ensure sufficient color contrast between the list markers and the background.</li>
                    <li>If using custom list markers with CSS, ensure they are visible and properly aligned in different screen sizes and zoom levels.</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="browser-support" class="mt-5">
        <h2>Browser Support</h2>
        <p>Ordered lists are well-supported across all modern browsers. However, some CSS properties for styling lists may have varying levels of support:</p>
        <ul>
            <li><strong>Good support:</strong> Basic <code>&lt;ol&gt;</code> and <code>&lt;li&gt;</code> elements</li>
            <li><strong>Good support:</strong> <code>list-style-type</code> with common values</li>
            <li><strong>Varies:</strong> More exotic list-style types like <code>trad-chinese-informal</code></li>
            <li><strong>Modern browsers:</strong> <code>reversed</code> attribute and <code>start</code> with negative numbers</li>
        </ul>
        <p>Always test your ordered lists across different browsers and devices to ensure consistent rendering.</p>
    </section>

    <div class="d-flex justify-content-between mt-5">
        <a href="html-lists.php" class="btn btn-outline-primary">
            <i class="fas fa-arrow-left me-2"></i>Previous: HTML Lists
        </a>
        <a href="html-unordered-list.php" class="btn btn-primary">
            Next: Unordered Lists <i class="fas fa-arrow-right ms-2"></i>
        </a>
    </div>
</div>

<!-- Custom CSS for this page -->
<style>
.custom-style {
    list-style-type: upper-roman;
    padding-left: 2rem;
}

.custom-style li {
    margin-bottom: 0.5rem;
    padding-left: 0.5rem;
}

.colored-numbers {
    list-style: none;
    counter-reset: item;
    padding-left: 0;
}

.colored-numbers li {
    counter-increment: item;
    margin-bottom: 0.5rem;
    position: relative;
    padding-left: 2.5rem;
}

.colored-numbers li:before {
    content: counter(item);
    background: #0d6efd;
    color: white;
    font-weight: bold;
    border-radius: 50%;
    width: 1.8rem;
    height: 1.8rem;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    left: 0;
    top: 0;
    transition: all 0.3s ease;
}

.colored-numbers li:hover:before {
    background: #0b5ed7;
    transform: scale(1.1);
}

.horizontal-list {
    display: flex;
    gap: 1rem;
    list-style: none;
    padding: 0;
    margin: 0;
    flex-wrap: wrap;
}

.horizontal-list li {
    background: #f8f9fa;
    padding: 0.5rem 1rem;
    border-radius: 4px;
    border: 1px solid #dee2e6;
    transition: all 0.2s ease;
}

.horizontal-list li:hover {
    background: #e9ecef;
    transform: translateY(-2px);
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

section {
    scroll-margin-top: 80px;
}
</style>

<?php include_file('includes/footer.php'); ?>