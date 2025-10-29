<?php
require_once __DIR__ . '/../../../includes/config.php';
$page_title = 'HTML Semantic Elements - Full Stack Master';
$page_description = 'Comprehensive guide to HTML5 semantic elements with examples and best practices for better document structure and accessibility.';
$base_url = get_base_url();
$css_path = $base_url;
$js_path = $base_url;

// Add external resources
$page_extra_head = '
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism-tomorrow.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js"></script>
<link rel="stylesheet" href="' . $base_url . 'tutorials/web-basics/html/css/audio-video.css">';

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
                <h1 class="display-4 fw-bold text-primary">HTML5 Semantic Elements</h1>
                <p class="lead">A comprehensive guide to using semantic HTML5 elements for better document structure and accessibility.</p>
            </div>
        </div>

        <!-- Introduction -->
        <section class="media-section" id="introduction">
            <h2 class="mb-4">Introduction to Semantic HTML</h2>
            <p>Semantic HTML introduces meaning to the web page rather than just presentation. It makes web pages more informative and adaptable, allowing browsers and search engines to better interpret content.</p>
            
            <div class="alert alert-info">
                <i class="bi bi-info-circle-fill me-2"></i>
                <strong>Why use Semantic HTML?</strong> Better accessibility, improved SEO, easier to maintain, and better device compatibility.
            </div>
        </section>

        <!-- Document Structure -->
        <section class="media-section" id="document-structure">
            <h2 class="mb-4">Document Structure Elements</h2>
            
            <div class="example-card">
                <div class="card-header">Basic Document Structure</div>
                <div class="card-body">
                    <div class="code-example">
                        <pre><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;Document Title&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;header&gt;
        &lt;h1&gt;Website Header&lt;/h1&gt;
        &lt;nav&gt;Navigation Links&lt;/nav&gt;
    &lt;/header&gt;
    
    &lt;main&gt;
        &lt;article&gt;
            &lt;h2&gt;Article Title&lt;/h2&gt;
            &lt;p&gt;Article content...&lt;/p&gt;
            &lt;section&gt;
                <h3>Section Title</h3>
                <p>Section content...</p>
            &lt;/section&gt;
        &lt;/article&gt;
        
        &lt;aside&gt;
            &lt;h2&gt;Related Content&lt;/h2&gt;
            &lt;p&gt;Additional information...&lt;/p&gt;
        &lt;/aside&gt;
    &lt;/main&gt;
    
    &lt;footer&gt;
        &lt;p&gt;Footer content...&lt;/p&gt;
    &lt;/footer&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- Header Element -->
        <section class="media-section" id="header">
            <h2 class="mb-4">&lt;header&gt; Element</h2>
            <p>Represents introductory content, typically a group of introductory or navigational aids.</p>
            
            <div class="example-card">
                <div class="card-header">Header Example</div>
                <div class="card-body">
                    <div class="code-example">
                        <pre><code class="language-html">&lt;header&gt;
    &lt;h1&gt;Website Title&lt;/h1&gt;
    &lt;nav&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href="#home"&gt;Home&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#about"&gt;About&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#contact"&gt;Contact&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;
&lt;/header&gt;</code></pre>
                    </div>
                    <div class="mt-3">
                        <h5>Attributes:</h5>
                        <ul>
                            <li><code>id</code> - Unique identifier</li>
                            <li><code>class</code> - Space-separated list of classes</li>
                            <li><code>style</code> - Inline CSS styles</li>
                            <li><code>title</code> - Advisory information</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Nav Element -->
        <section class="media-section" id="nav">
            <h2 class="mb-4">&lt;nav&gt; Element</h2>
            <p>Defines a section with navigation links.</p>
            
            <div class="example-card">
                <div class="card-header">Navigation Example</div>
                <div class="card-body">
                    <div class="code-example">
                        <pre><code class="language-html">&lt;nav class="main-nav" aria-label="Main navigation"&gt;
    &lt;ul&gt;
        &lt;li&gt;&lt;a href="#home" class="nav-link active"&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#services" class="nav-link"&gt;Services&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#about" class="nav-link"&gt;About Us&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#contact" class="nav-link"&gt;Contact&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
                    </div>
                    <div class="mt-3">
                        <h5>Common Attributes:</h5>
                        <ul>
                            <li><code>aria-label</code> - Accessible name for the navigation</li>
                            <li><code>aria-labelledby</code> - References the ID of an element that labels the navigation</li>
                            <li>Global attributes like <code>id</code>, <code>class</code>, <code>style</code></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <section class="media-section" id="main-content">
            <h2 class="mb-4">&lt;main&gt; Element</h2>
            <p>Represents the dominant content of the &lt;body&gt; of a document.</p>
            
            <div class="example-card">
                <div class="card-header">Main Content Example</div>
                <div class="card-body">
                    <div class="code-example">
                        <pre><code class="language-html">&lt;main id="main-content" role="main"&gt;
    &lt;h1&gt;Main Content Title&lt;/h1&gt;
    &lt;article&gt;
        &lt;h2&gt;Article Title&lt;/h2&gt;
        &lt;p&gt;Article content goes here...&lt;/p&gt;
    &lt;/article&gt;
    
    &lt;section aria-labelledby="section1"&gt;
        <h2 id="section1">Section Title</h2>
        <p>Section content...</p>
    &lt;/section&gt;
&lt;/main&gt;</code></pre>
                    </div>
                    <div class="mt-3">
                        <h5>Important Notes:</h5>
                        <ul>
                            <li>There should be only one <code>&lt;main&gt;</code> element per document</li>
                            <li>Should not be a descendant of <code>&lt;article&gt;</code>, <code>&lt;aside&gt;</code>, <code>&lt;footer&gt;</code>, <code>&lt;header&gt;</code>, or <code>&lt;nav&gt;</code></li>
                            <li>Use <code>role="main"</code> for better accessibility in older browsers</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Article Element -->
        <section class="media-section" id="article">
            <h2 class="mb-4">&lt;article&gt; Element</h2>
            <p>Represents a self-contained composition in a document, page, application, or site.</p>
            
            <div class="example-card">
                <div class="card-header">Article Example</div>
                <div class="card-body">
                    <div class="code-example">
                        <pre><code class="language-html">&lt;article class="blog-post" itemscope itemtype="http://schema.org/BlogPosting"&gt;
    &lt;header&gt;
        &lt;h1 itemprop="headline"&gt;Blog Post Title&lt;/h1&gt;
        &lt;div class="post-meta"&gt;
            &lt;span itemprop="author" itemscope itemtype="http://schema.org/Person"&gt;
                By &lt;span itemprop="name"&gt;Author Name&lt;/span&gt;
            &lt;/span&gt;
            &lt;time datetime="2023-11-01" itemprop="datePublished"&gt;November 1, 2023&lt;/time&gt;
        &lt;/div&gt;
    &lt;/header&gt;
    
    &lt;div class="post-content" itemprop="articleBody"&gt;
        &lt;p&gt;Article content goes here...&lt;/p&gt;
    &lt;/div&gt;
    
    &lt;footer class="post-footer"&gt;
        &lt;div class="post-tags"&gt;
            &lt;span class="visually-hidden"&gt;Tags:&lt;/span&gt;
            &lt;ul class="tag-list"&gt;
                &lt;li&gt;&lt;a href="/tag/html" rel="tag"&gt;HTML&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href="/tag/semantic" rel="tag"&gt;Semantic Web&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/footer&gt;
&lt;/article&gt;</code></pre>
                    </div>
                    <div class="mt-3">
                        <h5>Common Use Cases:</h5>
                        <ul>
                            <li>Forum posts</li>
                            <li>Blog posts</li>
                            <li>News stories</li>
                            <li>Comments</li>
                            <li>Product cards</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Element -->
        <section class="media-section" id="section">
            <h2 class="mb-4">&lt;section&gt; Element</h2>
            <p>Represents a standalone section of content that doesn't have a more specific semantic element to represent it.</p>
            
            <div class="example-card">
                <div class="card-header">Section Example</div>
                <div class="card-body">
                    <div class="code-example">
                        <pre><code class="language-html">&lt;section class="features" aria-labelledby="features-heading"&gt;
    &lt;h2 id="features-heading"&gt;Key Features&lt;/h2&gt;
    
    &lt;div class="feature-grid"&gt;
        &lt;article class="feature"&gt;
            &lt;h3&gt;Feature One&lt;/h3&gt;
            &lt;p&gt;Description of feature one...&lt;/p&gt;
        &lt;/article&gt;
        
        &lt;article class="feature"&gt;
            &lt;h3&gt;Feature Two&lt;/h3&gt;
            &lt;p&gt;Description of feature two...&lt;/p&gt;
        &lt;/article&gt;
        
        &lt;article class="feature"&gt;
            &lt;h3&gt;Feature Three&lt;/h3&gt;
            &lt;p&gt;Description of feature three...&lt;/p&gt;
        &lt;/article&gt;
    &lt;/div&gt;
&lt;/section&gt;</code></pre>
                    </div>
                    <div class="mt-3">
                        <h5>When to Use &lt;section&gt; vs &lt;article&gt;:</h5>
                        <ul>
                            <li>Use <code>&lt;article&gt;</code> for content that makes sense on its own and could be distributed independently</li>
                            <li>Use <code>&lt;section&gt;</code> for grouping related content that doesn't make sense on its own</li>
                            <li>Always include a heading (h1-h6) as a direct child of <code>&lt;section&gt;</code> for better document structure</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Aside Element -->
        <section class="media-section" id="aside">
            <h2 class="mb-4">&lt;aside&gt; Element</h2>
            <p>Represents a portion of a document whose content is only indirectly related to the document's main content.</p>
            
            <div class="example-card">
                <div class="card-header">Aside Example</div>
                <div class="card-body">
                    <div class="code-example">
                        <pre><code class="language-html">&lt;aside class="sidebar" aria-label="Related articles"&gt;
    &lt;h2&gt;Related Articles&lt;/h2&gt;
    &lt;ul class="related-posts"&gt;
        &lt;li&gt;
            &lt;article&gt;
                &lt;h3&gt;&lt;a href="/related-article-1"&gt;Related Article 1&lt;/a&gt;&lt;/h3&gt;
                &lt;p&gt;Brief description of the related article...&lt;/p&gt;
            &lt;/article&gt;
        &lt;/li&gt;
        &lt;li&gt;
            <article>
                <h3><a href="/related-article-2">Related Article 2</a></h3>
                <p>Brief description of the related article...</p>
            </article>
        &lt;/li&gt;
    &lt;/ul&gt;
    
    &lt;div class="advertisement"&gt;
        &lt;h3>Advertisement&lt;/h3>
        &lt;div class="ad-content"&gt;
            &lt;!-- Ad content goes here -->
        &lt;/div>
    &lt;/div&gt;
&lt;/aside&gt;</code></pre>
                    </div>
                    <div class="mt-3">
                        <h5>Common Uses:</h5>
                        <ul>
                            <li>Sidebars</li>
                            <li>Pull quotes</li>
                            <li>Advertising</li>
                            <li>Groups of navigation elements</li>
                            <li>Other content that is separate from the main content</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Element -->
        <section class="media-section" id="footer">
            <h2 class="mb-4">&lt;footer&gt; Element</h2>
            <p>Represents a footer for its nearest sectioning content or sectioning root element.</p>
            
            <div class="example-card">
                <div class="card-header">Footer Example</div>
                <div class="card-body">
                    <div class="code-example">
                        <pre><code class="language-html">&lt;footer class="site-footer" role="contentinfo"&gt;
    &lt;div class="footer-content"&gt;
        &lt;div class="footer-section"&gt;
            &lt;h2 class="footer-heading"&gt;About Us&lt;/h2&gt;
            &lt;p&gt;Company information and description.&lt;/p&gt;
        &lt;/div&gt;
        
        &lt;div class="footer-section"&gt;
            <h2 class="footer-heading">Quick Links</h2>
            &lt;nav aria-label="Footer navigation"&gt;
                &lt;ul class="footer-links"&gt;
                    &lt;li&gt;&lt;a href="/about"&gt;About Us&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href="/services"&gt;Services&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href="/contact"&gt;Contact&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href="/privacy"&gt;Privacy Policy&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/nav&gt;
        &lt;/div&gt;
        
        &lt;div class="footer-section"&gt;
            <h2 class="footer-heading">Contact Info</h2>
            &lt;address&gt;
                123 Example St&lt;br&gt;
                City, State 12345&lt;br&gt;
                &lt;a href="mailto:info@example.com"&gt;info@example.com&lt;/a&gt;
            &lt;/address&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    
    &lt;div class="footer-bottom"&gt;
        &lt;p&gt;&copy; 2023 Your Company. All rights reserved.&lt;/p&gt;
    &lt;/div&gt;
&lt;/footer&gt;</code></pre>
                    </div>
                    <div class="mt-3">
                        <h5>Best Practices:</h5>
                        <ul>
                            <li>Include a <code>role="contentinfo"</code> for the main site footer</li>
                            <li>Group related links together in logical sections</li>
                            <li>Include copyright information and legal links</li>
                            <li>Make sure all interactive elements are keyboard accessible</li>
                            <li>Consider adding a "back to top" link for long pages</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Figure and Figcaption -->
        <section class="media-section" id="figure">
            <h2 class="mb-4">&lt;figure&gt; and &lt;figcaption&gt; Elements</h2>
            <p>Used to group media content with a caption.</p>
            
            <div class="example-card">
                <div class="card-header">Figure Example</div>
                <div class="card-body">
                    <div class="code-example">
                        <pre><code class="language-html">&lt;figure class="image-figure"&gt;
    &lt;img src="image.jpg" 
         alt="Description of the image" 
         width="800" 
         height="450" 
         loading="lazy"&gt;
    &lt;figcaption&gt;
        A beautiful landscape with mountains and a lake. &lt;cite&gt;Photo by Photographer Name&lt;/cite&gt;
    &lt;/figcaption&gt;
&lt;/figure&gt;

&lt;figure class="code-figure"&gt;
    &lt;pre&gt;&lt;code&gt;function helloWorld() {
    console.log('Hello, World!');
}&lt;/code&gt;&lt;/pre&gt;
    &lt;figcaption&gt;Example JavaScript function&lt;/figcaption&gt;
&lt;/figure&gt;</code></pre>
                    </div>
                    <div class="mt-3">
                        <h5>Best Practices:</h5>
                        <ul>
                            <li>Always include meaningful alt text for images</li>
                            <li>Use <code>&lt;figcaption&gt;</code> to provide context or attribution</li>
                            <li>Can be used with images, code snippets, quotes, etc.</li>
                            <li>Consider using the <code>loading="lazy"</code> attribute for offscreen images</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Time Element -->
        <section class="media-section" id="time">
            <h2 class="mb-4">&lt;time&gt; Element</h2>
            <p>Represents a specific period in time and can include a machine-readable datetime attribute.</p>
            
            <div class="example-card">
                <div class="card-header">Time Example</div>
                <div class="card-body">
                    <div class="code-example">
                        <pre><code class="language-html">&lt;article class="event"&gt;
    &lt;h2&gt;Upcoming Event&lt;/h2&gt;
    &lt;p&gt;
        &lt;time datetime="2023-12-25T00:00"&gt;December 25, 2023&lt;/time&gt;
    &lt;/p&gt;
&lt;/article&gt;

&lt;div class="opening-hours"&gt;
    &lt;p&gt;We're open from 
        &lt;time&gt;09:00&lt;/time&gt; to 
        &lt;time&gt;17:00&lt;/time&gt; Monday to Friday.
    &lt;/p&gt;
    &lt;p&gt;
        Closed on &lt;time datetime="2023-12-25"&gt;Christmas Day&lt;/time&gt;.
    &lt;/p&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="mt-3">
                        <h5>Datetime Attribute Formats:</h5>
                        <ul>
                            <li><code>YYYY</code> - Year (e.g., 2023)</li>
                            <li><code>YYYY-MM</code> - Year and month (e.g., 2023-12)</li>
                            <li><code>YYYY-MM-DD</code> - Complete date (e.g., 2023-12-25)</li>
                            <li><code>YYYY-MM-DDThh:mm</code> - Date and time (e.g., 2023-12-25T14:30)</li>
                            <li><code>hh:mm</code> - Time only (e.g., 14:30)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mark Element -->
        <section class="media-section" id="mark">
            <h2 class="mb-4">&lt;mark&gt; Element</h2>
            <p>Represents text which is marked or highlighted for reference or notation purposes.</p>
            
            <div class="example-card">
                <div class="card-header">Mark Example</div>
                <div class="card-body">
                    <div class="code-example">
                        <pre><code class="language-html">&lt;p&gt;Search results for "semantic HTML":&lt;/p&gt;
&lt;article&gt;
    &lt;h3&gt;Understanding Semantic HTML&lt;/h3&gt;
    &lt;p&gt;
        &lt;mark&gt;Semantic HTML&lt;/mark&gt; introduces meaning to the web page rather than just presentation.
        It makes web pages more informative and adaptable, allowing browsers and search engines to
        better interpret content. When you use &lt;mark&gt;semantic elements&lt;/mark&gt;, you're providing
        additional meaning about the type of content they contain.
    &lt;/p&gt;
&lt;/article&gt;</code></pre>
                    </div>
                    <div class="mt-3">
                        <h5>Common Use Cases:</h5>
                        <ul>
                            <li>Highlighting search terms in search results</li>
                            <li>Marking important content for reference</li>
                            <li>Drawing attention to specific parts of quoted text</li>
                            <li>Noting content that's relevant to the user's current activity</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Details and Summary Elements -->
        <section class="media-section" id="details-summary">
            <h2 class="mb-4">&lt;details&gt; and &lt;summary&gt; Elements</h2>
            <p>Creates a disclosure widget in which information is visible only when the widget is toggled into an "open" state.</p>
            
            <div class="example-card">
                <div class="card-header">Details/Summary Example</div>
                <div class="card-body">
                    <div class="code-example">
                        <pre><code class="language-html">&lt;details class="faq-item"&gt;
    &lt;summary class="faq-question"&gt;
        What is semantic HTML?
        &lt;span class="details-marker" aria-hidden="true"&gt;+&lt;/span&gt;
    &lt;/summary&gt;
    &lt;div class="faq-answer"&gt;
        &lt;p&gt;Semantic HTML introduces meaning to the web page rather than just presentation. 
        It uses HTML markup to reinforce the semantics, or meaning, of the content rather 
        than just defining its appearance.&lt;/p&gt;
    &lt;/div&gt;
&lt;/details&gt;

&lt;details class="spoiler-warning" open&gt;
    &lt;summary&gt;Spoiler Alert! (Click to reveal)&lt;/summary&gt;
    &lt;p&gt;In the end, the main character discovers that it was all a dream!&lt;/p&gt;
&lt;/details&gt;</code></pre>
                    </div>
                    <div class="mt-3">
                        <h5>Attributes and Notes:</h5>
                        <ul>
                            <li><code>open</code> - Boolean attribute that indicates whether the details will be shown to the user</li>
                            <li>The first child <code>&lt;summary&gt;</code> element is used as the label for the disclosure widget</li>
                            <li>Can be styled with CSS to create custom accordions and disclosure widgets</li>
                            <li>Consider adding ARIA attributes for enhanced accessibility in complex implementations</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Accessibility Considerations -->
        <section class="media-section" id="accessibility">
            <h2 class="mb-4">Accessibility with Semantic HTML</h2>
            <p>Semantic HTML is the foundation of web accessibility. Here's how to ensure your semantic markup is accessible:</p>
            
            <div class="example-card">
                <div class="card-header">Accessibility Best Practices</div>
                <div class="card-body">
                    <div class="code-example">
                        <pre><code class="language-html">&lt;!-- Landmark roles for screen readers -->
&lt;header role="banner"&gt;...&lt;/header&gt;
&lt;nav role="navigation" aria-label="Main navigation"&gt;...&lt;/nav&gt;
&lt;main role="main" id="main-content" tabindex="-1"&gt;...&lt;/main&gt;
&lt;aside role="complementary" aria-label="Related content"&gt;...&lt;/aside&gt;
&lt;footer role="contentinfo"&gt;...&lt;/footer&gt;

<!-- Skip link for keyboard users -->
&lt;a href="#main-content" class="skip-link"&gt;Skip to main content&lt;/a&gt;

<!-- ARIA landmarks for complex widgets -->
&lt;div role="search"&gt;
    &lt;h2 class="visually-hidden"&gt;Search this site&lt;/h2&gt;
    &lt;form&gt;...&lt;/form&gt;
&lt;/div&gt;

<!-- Proper heading structure -->
&lt;h1&gt;Page Title&lt;/h1&gt;
&lt;h2&gt;Section Title&lt;/h2&gt;
&lt;h3&gt;Subsection Title&lt;/h3&gt;</code></pre>
                    </div>
                    <div class="mt-3">
                        <h5>Key Accessibility Practices:</h5>
                        <ul>
                            <li>Use proper heading structure (h1-h6 in order)</li>
                            <li>Include ARIA landmarks and labels where appropriate</li>
                            <li>Ensure all interactive elements are keyboard accessible</li>
                            <li>Provide text alternatives for non-text content</li>
                            <li>Use semantic elements for their intended purpose</li>
                            <li>Test with screen readers and keyboard navigation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Conclusion -->
        <section class="media-section" id="conclusion">
            <h2 class="mb-4">Conclusion</h2>
            <p>Semantic HTML is a powerful tool for creating accessible, maintainable, and SEO-friendly web pages. By using the appropriate semantic elements, you can improve the structure and meaning of your content, making it more understandable for both users and machines.</p>
            
            <div class="alert alert-success">
                <i class="bi bi-lightbulb-fill me-2"></i>
                <strong>Pro Tip:</strong> Always validate your HTML using the <a href="https://validator.w3.org/" target="_blank">W3C Markup Validation Service</a> to ensure proper semantic structure and catch any potential issues.
            </div>
            
            <div class="mt-4">
                <h3>Additional Resources</h3>
                <ul>
                    <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element" target="_blank">MDN HTML Element Reference</a></li>
                    <li><a href="https://www.w3.org/TR/html52/dom.html#kinds-of-content" target="_blank">W3C HTML5.2 Specification</a></li>
                    <li><a href="https://webaim.org/techniques/semanticstructure/" target="_blank">WebAIM: Semantic Structure</a></li>
                    <li><a href="https://www.w3.org/WAI/tutorials/page-structure/" target="_blank">WAI-ARIA Authoring Practices</a></li>
                </ul>
            </div>
        </section>
    </article>
</main>

<?php
include_file('includes/footer.php');
?>
