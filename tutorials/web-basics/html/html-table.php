<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'Full Stack Master - HTML Tables';
$page_description = 'Learn how to create and style HTML tables with examples and best practices';
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
    <h1 class="mb-4">HTML Tables</h1>
    
    <div class="alert alert-info">
        <i class="fas fa-info-circle me-2"></i>HTML tables are used to display tabular data in a structured format with rows and columns.
    </div>

    <section id="basic-table" class="mt-5">
        <h2>Basic Table Structure</h2>
        <p>A basic HTML table consists of the <code>&lt;table&gt;</code> element, which contains table rows <code>&lt;tr&gt;</code>, table headers <code>&lt;th&gt;</code>, and table data <code>&lt;td&gt;</code> elements.</p>
        
        <div class="row">
            <div class="col-md-6">
                <h5>Code Example:</h5>
                <pre><code class="language-html">&lt;table&gt;
    &lt;tr&gt;
        &lt;th&gt;Name&lt;/th&gt;
        &lt;th&gt;Email&lt;/th&gt;
        &lt;th&gt;Role&lt;/th&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;John Doe&lt;/td&gt;
        &lt;td&gt;john@example.com&lt;/td&gt;
        &lt;td&gt;Developer&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Jane Smith&lt;/td&gt;
        &lt;td&gt;jane@example.com&lt;/td&gt;
        &lt;td&gt;Designer&lt;/td&gt;
    &lt;/tr&gt;
&lt;/table&gt;</code></pre>
            </div>
            <div class="col-md-6">
                <h5>Result:</h5>
                <div class="border p-3 bg-light">
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>john@example.com</td>
                            <td>Developer</td>
                        </tr>
                        <tr>
                            <td>Jane Smith</td>
                            <td>jane@example.com</td>
                            <td>Designer</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section id="table-headers" class="mt-5">
        <h2>Table Headers and Captions</h2>
        <p>Use <code>&lt;thead&gt;</code>, <code>&lt;tbody&gt;</code>, and <code>&lt;tfoot&gt;</code> to group table content. Add a caption with <code>&lt;caption&gt;</code>.</p>
        
        <div class="row">
            <div class="col-md-6">
                <h5>Code Example:</h5>
                <pre><code class="language-html">&lt;table&gt;
    &lt;caption&gt;Monthly Sales Report&lt;/caption&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;Month&lt;/th&gt;
            &lt;th&gt;Sales&lt;/th&gt;
            &lt;th&gt;Expenses&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            <td>January</td>
            <td>$5,000</td>
            <td>$2,500</td>
        &lt;/tr&gt;
        &lt;tr&gt;
            <td>February</td>
            <td>$4,200</td>
            <td>$2,100</td>
        &lt;/tr&gt;
    &lt;/tbody&gt;
    &lt;tfoot&gt;
        &lt;tr&gt;
            <td>Total</td>
            <td>$9,200</td>
            <td>$4,600</td>
        &lt;/tr&gt;
    &lt;/tfoot&gt;
&lt;/table&gt;</code></pre>
            </div>
            <div class="col-md-6">
                <h5>Result:</h5>
                <div class="border p-3 bg-light">
                    <table class="table">
                        <caption>Monthly Sales Report</caption>
                        <thead class="table-dark">
                            <tr>
                                <th>Month</th>
                                <th>Sales</th>
                                <th>Expenses</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>January</td>
                                <td>$5,000</td>
                                <td>$2,500</td>
                            </tr>
                            <tr>
                                <td>February</td>
                                <td>$4,200</td>
                                <td>$2,100</td>
                            </tr>
                        </tbody>
                        <tfoot class="table-secondary">
                            <tr>
                                <td><strong>Total</strong></td>
                                <td><strong>$9,200</strong></td>
                                <td><strong>$4,600</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section id="column-row-span" class="mt-5">
        <h2>Column and Row Spanning</h2>
        <p>Use the <code>colspan</code> and <code>rowspan</code> attributes to make cells span multiple columns or rows.</p>
        
        <div class="row">
            <div class="col-md-6">
                <h5>Code Example:</h5>
                <pre><code class="language-html">&lt;table class="table"&gt;
    &lt;caption&gt;Class Schedule&lt;/caption&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th rowspan="2"&gt;Time&lt;/th&gt;
            &lt;th colspan="5" class="text-center"&gt;Days of the Week&lt;/th&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;th&gt;Monday&lt;/th&gt;
            &lt;th&gt;Tuesday&lt;/th&gt;
            &lt;th&gt;Wednesday&lt;/th&gt;
            &lt;th&gt;Thursday&lt;/th&gt;
            &lt;th&gt;Friday&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;9:00 AM&lt;/td&gt;
            &lt;td&gt;Math&lt;/td&gt;
            &lt;td&gt;Science&lt;/td&gt;
            &lt;td&gt;Math&lt;/td&gt;
            &lt;td&gt;Science&lt;/td&gt;
            &lt;td&gt;PE&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;10:00 AM&lt;/td&gt;
            &lt;td colspan="2" class="text-center"&gt;English&lt;/td&gt;
            &lt;td&gt;History&lt;/td&gt;
            &lt;td rowspan="2"&gt;Art&lt;/td&gt;
            &lt;td&gt;Music&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;11:00 AM&lt;/td&gt;
            &lt;td&gt;History&lt;/td>
            &lt;td&gt;Geography&lt;/td>
            &lt;td&gt;English&lt;/td>
            <td>--</td>
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
            </div>
            <div class="col-md-6">
                <h5>Result:</h5>
                <div class="border p-3 bg-light">
                    <table class="table table-bordered">
                        <caption>Class Schedule</caption>
                        <thead class="table-dark">
                            <tr>
                                <th rowspan="2" class="align-middle">Time</th>
                                <th colspan="5" class="text-center">Days of the Week</th>
                            </tr>
                            <tr>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>9:00 AM</td>
                                <td>Math</td>
                                <td>Science</td>
                                <td>Math</td>
                                <td>Science</td>
                                <td>PE</td>
                            </tr>
                            <tr>
                                <td>10:00 AM</td>
                                <td colspan="2" class="text-center bg-light">English</td>
                                <td>History</td>
                                <td rowspan="2" class="bg-light align-middle">Art</td>
                                <td>Music</td>
                            </tr>
                            <tr>
                                <td>11:00 AM</td>
                                <td>History</td>
                                <td>Geography</td>
                                <td>English</td>
                                <td>--</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="alert alert-warning mt-4">
            <i class="fas fa-exclamation-triangle me-2"></i>
            <strong>Important:</strong> When using <code>colspan</code> or <code>rowspan</code>, remember to adjust the number of cells in subsequent rows to maintain the table's structure.
        </div>
    </section>

    <section id="table-borders" class="mt-5">
        <h2>HTML Table with Border</h2>
        <p>Borders can be added to tables using CSS. The old <code>border</code> attribute is deprecated in HTML5.</p>
        
        <div class="row">
            <div class="col-md-6">
                <h5>Modern CSS Approach:</h5>
                <pre><code class="language-html">&lt;style&gt;
    .bordered-table {
        border-collapse: collapse;
        width: 100%;
    }
    .bordered-table th, 
    .bordered-table td {
        border: 1px solid #dee2e6;
        padding: 8px;
    }
&lt;/style&gt;

&lt;table class="bordered-table"&gt;
    &lt;tr&gt;&lt;th&gt;Header 1&lt;/th&gt;&lt;th&gt;Header 2&lt;/th&gt;&lt;/tr&gt;
    &lt;tr&gt;&lt;td&gt;Data 1&lt;/td&gt;&lt;td&gt;Data 2&lt;/td&gt;&lt;/tr&gt;
&lt;/table&gt;</code></pre>
            </div>
            <div class="col-md-6">
                <h5>Deprecated (Avoid):</h5>
                <pre><code class="language-html">&lt;!-- Deprecated - Do not use --&gt;
&lt;table border="1"&gt;
    &lt;tr&gt;&lt;th&gt;Header 1&lt;/th&gt;&lt;th&gt;Header 2&lt;/th&gt;&lt;/tr&gt;
    &lt;tr&gt;&lt;td&gt;Data 1&lt;/td&gt;&lt;td&gt;Data 2&lt;/td&gt;&lt;/tr&gt;
&lt;/table&gt;</code></pre>
            </div>
        </div>
    </section>

    <section id="deprecated-attributes" class="mt-5">
        <h2>Deprecated Tags and Attributes</h2>
        <div class="alert alert-warning">
            <i class="fas fa-exclamation-triangle me-2"></i>
            The following table-related attributes are deprecated in HTML5. Use CSS instead.
        </div>
        
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Deprecated Attribute</th>
                        <th>Modern CSS Alternative</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>border</code></td>
                        <td><code>border</code> property</td>
                        <td>Use <code>border</code> in CSS</td>
                    </tr>
                    <tr>
                        <td><code>cellpadding</code></td>
                        <td><code>padding</code> on <code>td, th</code></td>
                        <td>Use <code>padding</code> in CSS</td>
                    </tr>
                    <tr>
                        <td><code>cellspacing</code></td>
                        <td><code>border-spacing</code> or <code>border-collapse</code></td>
                        <td>Use CSS <code>border-spacing</code> or <code>border-collapse: collapse</code></td>
                    </tr>
                    <tr>
                        <td><code>width</code>, <code>height</code></td>
                        <td><code>width</code>, <code>height</code> in CSS</td>
                        <td>Use CSS <code>width</code> and <code>height</code> properties</td>
                    </tr>
                    <tr>
                        <td><code>bgcolor</code></td>
                        <td><code>background-color</code></td>
                        <td>Use CSS <code>background-color</code> property</td>
                    </tr>
                    <tr>
                        <td><code>align</code>, <code>valign</code></td>
                        <td><code>text-align</code>, <code>vertical-align</code></td>
                        <td>Use CSS text alignment properties</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section id="cell-padding" class="mt-5">
        <h2>HTML Table with Cell Padding</h2>
        <p>Cell padding creates space between the cell content and its borders.</p>
        
        <div class="row">
            <div class="col-md-6">
                <h5>CSS Approach:</h5>
                <pre><code class="language-html">&lt;style&gt;
    .padded-table {
        border-collapse: collapse;
        width: 100%;
    }
    .padded-table th, 
    .padded-table td {
        border: 1px solid #ddd;
        padding: 15px;  /* Adjust padding as needed */
        text-align: left;
    }
&lt;/style&gt;

&lt;table class="padded-table"&gt;
    &lt;tr&gt;&lt;th&gt;Header 1&lt;/th&gt;&lt;th&gt;Header 2&lt;/th&gt;&lt;/tr&gt;
    &lt;tr&gt;&lt;td&gt;Data 1&lt;/td&gt;&lt;td&gt;Data 2&lt;/td&gt;&lt;/tr&gt;
&lt;/table&gt;</code></pre>
            </div>
            <div class="col-md-6">
                <h5>Deprecated (Avoid):</h5>
                <pre><code class="language-html">&lt;!-- Deprecated - Do not use --&gt;
&lt;table cellpadding="15"&gt;
    &lt;tr&gt;&lt;th&gt;Header 1&lt;/th&gt;&lt;th&gt;Header 2&lt;/th&gt;&lt;/tr&gt;
    &lt;tr&gt;&lt;td&gt;Data 1&lt;/td&gt;&lt;td&gt;Data 2&lt;/td&gt;&lt;/tr&gt;
&lt;/table&gt;</code></pre>
            </div>
        </div>
    </section>

    <section id="colspan-example" class="mt-5">
        <h2>Table with colspan</h2>
        <p>The <code>colspan</code> attribute makes a cell span multiple columns.</p>
        
        <div class="row">
            <div class="col-md-6">
                <pre><code class="language-html">&lt;table class="table table-bordered"&gt;
    &lt;tr&gt;
        &lt;th colspan="2"&gt;Full Name&lt;/th&gt;
        &lt;th&gt;Age&lt;/th&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;John&lt;/td&gt;
        &lt;td&gt;Doe&lt;/td&gt;
        &lt;td rowspan="2"&gt;28&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td colspan="2"&gt;Jane Smith (colspan=2)&lt;/td&gt;
    &lt;/tr&gt;
&lt;/table&gt;</code></pre>
            </div>
            <div class="col-md-6">
                <div class="border p-3 bg-light">
                    <table class="table table-bordered">
                        <tr>
                            <th colspan="2" class="text-center">Full Name</th>
                            <th>Age</th>
                        </tr>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td rowspan="2" class="text-center align-middle">28</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center bg-light">Jane Smith (colspan=2)</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section id="rowspan-example" class="mt-5">
        <h2>Table with rowspan</h2>
        <p>The <code>rowspan</code> attribute makes a cell span multiple rows.</p>
        
        <div class="row">
            <div class="col-md-6">
                <pre><code class="language-html">&lt;table class="table table-bordered"&gt;
    &lt;tr&gt;
        &lt;th rowspan="3"&gt;Week 1&lt;/th&gt;
        &lt;td&gt;Monday&lt;/td&gt;
        &lt;td&gt;9:00 AM - 5:00 PM&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Tuesday&lt;/td&gt;
        &lt;td&gt;10:00 AM - 6:00 PM&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Wednesday&lt;/td&gt;
        &lt;td&gt;9:00 AM - 5:00 PM&lt;/td&gt;
    &lt;/tr&gt;
&lt;/table&gt;</code></pre>
            </div>
            <div class="col-md-6">
                <div class="border p-3 bg-light">
                    <table class="table table-bordered">
                        <tr>
                            <th rowspan="3" class="align-middle text-center">Week 1</th>
                            <td>Monday</td>
                            <td>9:00 AM - 5:00 PM</td>
                        </tr>
                        <tr>
                            <td>Tuesday</td>
                            <td>10:00 AM - 6:00 PM</td>
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td>9:00 AM - 5:00 PM</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section id="table-caption" class="mt-5">
        <h2>HTML Table with Caption</h2>
        <p>The <code>&lt;caption&gt;</code> element provides a title for the table and should be placed immediately after the opening <code>&lt;table&gt;</code> tag.</p>
        
        <div class="row">
            <div class="col-md-6">
                <pre><code class="language-html">&lt;table class="table table-bordered"&gt;
    &lt;caption&gt;Monthly Sales Report - Q1 2023&lt;/caption&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;Month&lt;/th&gt;
            &lt;th&gt;Sales&lt;/th&gt;
            &lt;th&gt;Expenses&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;January&lt;/td&gt;
            &lt;td&gt;$10,000&lt;/td&gt;
            &lt;td&gt;$7,000&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;February&lt;/td&gt;
            &lt;td&gt;$12,000&lt;/td&gt;
            &lt;td&gt;$8,000&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
            </div>
            <div class="col-md-6">
                <div class="border p-3 bg-light">
                    <table class="table table-bordered">
                        <caption class="text-center fw-bold">Monthly Sales Report - Q1 2023</caption>
                        <thead class="table-dark">
                            <tr>
                                <th>Month</th>
                                <th>Sales</th>
                                <th>Expenses</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>January</td>
                                <td>$10,000</td>
                                <td>$7,000</td>
                            </tr>
                            <tr>
                                <td>February</td>
                                <td>$12,000</td>
                                <td>$8,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section id="nested-tables" class="mt-5">
        <h2>Nested Tables</h2>
        <div class="alert alert-warning">
            <i class="fas fa-exclamation-triangle me-2"></i>
            While possible, nested tables should be used sparingly as they can make the HTML complex and harder to maintain.
            Consider using CSS Grid or Flexbox for complex layouts instead.
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <pre><code class="language-html">&lt;table class="table table-bordered"&gt;
    &lt;tr&gt;
        <th>Department</th>
        <th>Team Members</th>
    &lt;/tr&gt;
    &lt;tr&gt;
        <td>Development</td>
        <td>
            &lt;table class="table table-sm mb-0"&gt;
                &lt;tr&gt;&lt;th&gt;Name&lt;/th&gt;&lt;th&gt;Role&lt;/th&gt;&lt;/tr&gt;
                &lt;tr&gt;&lt;td&gt;John&lt;/td&gt;&lt;td&gt;Lead Developer&lt;/td&gt;&lt;/tr&gt;
                &lt;tr&gt;&lt;td&gt;Sarah&lt;/td&gt;&lt;td&gt;Frontend Dev&lt;/td&gt;&lt;/tr&gt;
            &lt;/table&gt;
        &lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        <td>Design</td>
        <td>
            &lt;table class="table table-sm mb-0"&gt;
                &lt;tr&gt;&lt;th&gt;Name&lt;/th&gt;&lt;th&gt;Role&lt;/th&gt;&lt;/tr&gt;
                &lt;tr&gt;&lt;td&gt;Mike&lt;/td&gt;&lt;td&gt;UI/UX Designer&lt;/td&gt;&lt;/tr&gt;
            &lt;/table&gt;
        &lt;/td&gt;
    &lt;/tr&gt;
&lt;/table&gt;</code></pre>
            </div>
            <div class="col-md-6">
                <div class="border p-3 bg-light">
                    <table class="table table-bordered">
                        <tr>
                            <th>Department</th>
                            <th>Team Members</th>
                        </tr>
                        <tr>
                            <td>Development</td>
                            <td class="p-0">
                                <table class="table table-sm mb-0">
                                    <tr class="table-secondary">
                                        <th>Name</th>
                                        <th>Role</th>
                                    </tr>
                                    <tr>
                                        <td>John</td>
                                        <td>Lead Developer</td>
                                    </tr>
                                    <tr>
                                        <td>Sarah</td>
                                        <td>Frontend Dev</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>Design</td>
                            <td class="p-0">
                                <table class="table table-sm mb-0">
                                    <tr class="table-secondary">
                                        <th>Name</th>
                                        <th>Role</th>
                                    </tr>
                                    <tr>
                                        <td>Mike</td>
                                        <td>UI/UX Designer</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="alert alert-info mt-3">
            <i class="fas fa-info-circle me-2"></i>
            <strong>Tip:</strong> For better accessibility, always provide a summary of the table structure when using nested tables.
        </div>
    </section>

    <section id="responsive-tables" class="mt-5">
        <h2>Responsive Tables</h2>
        <p>Making tables responsive ensures they work well on all screen sizes. Here are several approaches:</p>

        <h3 class="mt-4">1. Horizontal Scrolling</h3>
        <p>Wrap your table in a <code>div</code> with <code>table-responsive</code> class to enable horizontal scrolling on small screens.</p>
        
        <div class="row">
            <div class="col-12">
                <h5>Code Example:</h5>
                <pre><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table table-bordered"&gt;
        &lt;!-- Table content --&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
            </div>
        </div>

        <h3 class="mt-4">2. Stacked Layout on Mobile</h3>
        <p>Transform table rows into cards on small screens using CSS Grid or Flexbox.</p>
        
        <div class="row">
            <div class="col-md-6">
                <h5>CSS:</h5>
                <pre><code class="language-css">.responsive-table {
    width: 100%;
    border-collapse: collapse;
}

/* Stack rows on mobile */
@media (max-width: 768px) {
    .responsive-table, 
    .responsive-table thead, 
    .responsive-table tbody, 
    .responsive-table th, 
    .responsive-table td, 
    .responsive-table tr { 
        display: block; 
    }
    
    .responsive-table thead tr { 
        position: absolute;
        top: -9999px;
        left: -9999px;
    }
    
    .responsive-table tr { 
        border: 1px solid #ddd;
        margin-bottom: 1rem;
    }
    
    .responsive-table td { 
        border: none;
        border-bottom: 1px solid #eee; 
        position: relative;
        padding-left: 50%;
        text-align: left;
    }
    
    .responsive-table td:before { 
        position: absolute;
        left: 10px;
        width: 45%;
        padding-right: 10px;
        white-space: nowrap;
        content: attr(data-label);
        font-weight: bold;
    }
}</code></pre>
            </div>
            <div class="col-md-6">
                <h5>HTML:</h5>
                <pre><code class="language-html">&lt;table class="responsive-table table"&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;Product&lt;/th&gt;
            &lt;th&gt;Category&lt;/th&gt;
            &lt;th&gt;Price&lt;/th&gt;
            &lt;th&gt;Stock&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td data-label="Product"&gt;Laptop&lt;/td&gt;
            &lt;td data-label="Category"&gt;Electronics&lt;/td&gt;
            &lt;td data-label="Price"&gt;$999.99&lt;/td&gt;
            &lt;td data-label="Stock"&gt;15&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td data-label="Product"&gt;Smartphone&lt;/td&gt;
            &lt;td data-label="Category"&gt;Electronics&lt;/td&gt;
            &lt;td data-label="Price"&gt;$699.99&lt;/td&gt;
            &lt;td data-label="Stock"&gt;32&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
            </div>
        </div>

        <h3 class="mt-4">3. Hide Less Important Columns</h3>
        <p>Hide non-essential columns on smaller screens using responsive utility classes.</p>
        
        <div class="row">
            <div class="col-12">
                <pre><code class="language-html">&lt;table class="table"&gt;
    &lt;tr&gt;
        &lt;th&gt;Name&lt;/th&gt;
        &lt;th class="d-none d-md-table-cell"&gt;Email&lt;/th&gt;  &lt;!-- Hidden on mobile --&gt;
        &lt;th class="d-none d-sm-table-cell"&gt;Phone&lt;/th&gt;  &lt;!-- Hidden on xs --&gt;
        &lt;th&gt;Actions&lt;/th&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;John Doe&lt;/td&gt;
        &lt;td class="d-none d-md-table-cell"&gt;john@example.com&lt;/td&gt;
        &lt;td class="d-none d-sm-table-cell"&gt;(555) 123-4567&lt;/td&gt;
        &lt;td&gt;&lt;button class="btn btn-sm btn-primary"&gt;View&lt;/button&gt;&lt;/td&gt;
    &lt;/tr&gt;
&lt;/table&gt;</code></pre>
            </div>
        </div>

        <h3 class="mt-4">4. Responsive Table with Toggle Rows</h3>
        <p>Show/hide additional details on click for a cleaner mobile view.</p>
        
        <div class="row">
            <div class="col-12">
                <pre><code class="language-html">&lt;table class="table table-hover"&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;Order #&lt;/th&gt;
            &lt;th&gt;Customer&lt;/th&gt;
            &lt;th class="text-end"&gt;Total&lt;/th&gt;
            &lt;th class="text-center"&gt;Status&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr data-bs-toggle="collapse" data-bs-target="#order1"&gt;
            &lt;td&gt;#1001&lt;/td&gt;
            &lt;td&gt;John Smith&lt;/td&gt;
            &lt;td class="text-end"&gt;$129.99&lt;/td&gt;
            &lt;td class="text-center"&gt;&lt;span class="badge bg-success"&gt;Shipped&lt;/span&gt;&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr class="collapse" id="order1"&gt;
            &lt;td colspan="4" class="bg-light"&gt;
                &lt;div class="p-3"&gt;
                    &lt;h6&gt;Order Details&lt;/h6&gt;
                    &lt;ul class="mb-0"&gt;
                        &lt;li&gt;Product: Laptop&lt;/li&gt;
                        &lt;li&gt;Quantity: 1&lt;/li&gt;
                        &lt;li&gt;Tracking: #1Z999AA1234567890&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
            </div>
        </div>

        <div class="alert alert-info mt-4">
            <i class="fas fa-info-circle me-2"></i>
            <strong>Best Practices for Responsive Tables:</strong>
            <ul class="mt-2">
                <li>Prioritize content - show the most important data on mobile</li>
                <li>Use appropriate touch targets (min 44×44px)</li>
                <li>Consider using cards or lists for very complex data on mobile</li>
                <li>Test on multiple devices and screen sizes</li>
                <li>Consider using a dedicated table library like DataTables for complex requirements</li>
            </ul>
        </div>
    </section>

    <div class="d-flex justify-content-between mt-5">
        <a href="html-description-list.php" class="btn btn-outline-primary">
            <i class="fas fa-arrow-left me-2"></i>Previous: Description Lists
        </a>
        <a href="#" class="btn btn-primary disabled">
            Next: Table Styling <i class="fas fa-arrow-right ms-2"></i>
        </a>
    </div>
</div>

<?php include_file('includes/footer.php'); ?>