<?php
// Include config first to get helper functions
require_once dirname(__DIR__, 3) . '/includes/config.php';

$base_url = get_base_url();
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>

<div class="container-fluid">
<div class="row">
<aside class="col-lg-3 d-none d-lg-block sidebar-nav p-0">
<div class="sticky-top pt-3 sticky-sidebar">
<div class="sidebar-content px-3">
<h5 class="sidebar-title mb-3"><i class="bi bi-globe"></i> HTML Tutorials</h5>

<!-- Getting Started -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Getting Started</h6>
  <nav class="nav flex-column">
    <a class="nav-link <?= ($current_page == 'html-tutorial') ? 'active' : '' ?>"  href="<?= $base_url ?>tutorials/web-basics/html/">
      <i class="bi bi-book"></i> HTML Tutorial
    </a>
    <a class="nav-link <?= ($current_page == 'what-is-html') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/what-is-html">
      <i class="bi bi-info-circle"></i> What is HTML
    </a>
    <a class="nav-link <?= ($current_page == 'html-text-editors') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-text-editors">
      <i class="bi bi-pencil"></i> Text Editors
    </a>
    
  </nav>
</div>

<!-- HTML Basics -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">HTML Basics</h6>
  <nav class="nav flex-column">
  <a class="nav-link <?= ($current_page == 'html-building-blocks') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-building-blocks">
      <i class="bi bi-boxes"></i>Building  Blocks
    </a>
    <a class="nav-link <?= ($current_page == 'html-tags') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-tags">
      <i class="bi bi-tag"></i> Tags
    </a>
    <a class="nav-link <?= ($current_page == 'html-elements') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-elements">
      <i class="bi bi-code"></i> Elements
    </a>
      <a class="nav-link <?= ($current_page == 'html-attributes') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-attributes">
      <i class="bi bi-list-ul"></i> Attributes
    </a>
    <a class="nav-link <?= ($current_page == 'html-comments') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-comments">
      <i class="bi bi-chat-dots"></i> Comments
    </a>
  </nav>
</div>

<!-- HTML Content -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Content Structure</h6>
  <nav class="nav flex-column">
    <a class="nav-link <?= ($current_page == 'html-heading') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-heading">
      <i class="bi bi-type-h1"></i> Headings
    </a>
    <a class="nav-link <?= ($current_page == 'html-paragraph') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-paragraph">
      <i class="bi bi-paragraph"></i> Paragraphs
    </a>
    <a class="nav-link <?= ($current_page == 'html-phrase-tags') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-phrase-tags">
      <i class="bi bi-quote"></i> Phrase Tags
    </a>
    <a class="nav-link <?= ($current_page == 'html-anchor') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-anchor">
      <i class="bi bi-link-45deg"></i> Links
    </a>
    <a class="nav-link <?= ($current_page == 'html-image') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-image">
      <i class="bi bi-image"></i> Images
    </a>
  </nav>
</div>

<!-- HTML Lists -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Lists</h6>
  <nav class="nav flex-column">
    <a class="nav-link <?= ($current_page == 'html-lists') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-lists">
      <i class="bi bi-list-ul"></i> All Lists
    </a>
    <a class="nav-link <?= ($current_page == 'html-ordered-list') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-ordered-list">
      <i class="bi bi-list-ol"></i> Ordered Lists
    </a>
    <a class="nav-link <?= ($current_page == 'html-unordered-list') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-unordered-list">
      <i class="bi bi-list"></i> Unordered Lists
    </a>
    <a class="nav-link <?= ($current_page == 'html-description-list') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-description-list">
      <i class="bi bi-text-left"></i> Description Lists
    </a>
  </nav>
</div>

<!-- HTML Tables -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Tables</h6>
  <nav class="nav flex-column">
    <a class="nav-link <?= ($current_page == 'html-table') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-table">
      <i class="bi bi-table"></i> HTML Tables
    </a>
  </nav>
</div>

<!-- HTML Advanced -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Advanced HTML</h6>
  <nav class="nav flex-column">
    <a class="nav-link <?= ($current_page == 'html-head') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-head">
      <i class="bi bi-file-earmark-text"></i> Head Element
    </a>
    <a class="nav-link <?= ($current_page == 'html-layout') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-layout">
      <i class="bi bi-layout-three-columns"></i> Page Layout
    </a>
    <a class="nav-link <?= ($current_page == 'html-iframes') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-iframes">
      <i class="bi bi-window"></i> Iframes
    </a>
    <a class="nav-link <?= ($current_page == 'html-javascript') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-javascript">
      <i class="bi bi-braces"></i> JavaScript
    </a>
  </nav>
</div>

<!-- HTML Styling -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">Styling</h6>
  <nav class="nav flex-column">
    <a class="nav-link <?= ($current_page == 'html-with-css') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-with-css">
      <i class="bi bi-brush"></i> CSS with HTML
    </a>
    <a class="nav-link <?= ($current_page == 'html-classes') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-classes">
      <i class="bi bi-layers"></i> Classes
    </a>
    <a class="nav-link <?= ($current_page == 'html-id-attribute') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-id-attribute">
      <i class="bi bi-tag"></i> ID Attribute
    </a>
    <a class="nav-link <?= ($current_page == 'html-responsive') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-responsive">
      <i class="bi bi-phone"></i> Responsive Design
    </a>
  </nav>
</div>

<!-- HTML References -->
<div class="sidebar-section mb-4">
  <h6 class="sidebar-section-title">References</h6>
  <nav class="nav flex-column">
    <a class="nav-link <?= ($current_page == 'html-entities') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-entities">
      <i class="bi bi-type"></i> HTML Entities
    </a>
    <a class="nav-link <?= ($current_page == 'html-symbols') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-symbols">
      <i class="bi bi-award"></i> Symbols
    </a>
    <a class="nav-link <?= ($current_page == 'html-charset') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-charset">
      <i class="bi bi-translate"></i> Character Sets
    </a>
    <a class="nav-link <?= ($current_page == 'html-url-encode') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/html-url-encode">
      <i class="bi bi-link-45deg"></i> URL Encoding
    </a>
  </nav>
</div>

<!-- SEO Best Practices -->
<div class="sidebar-section">
  <h6 class="sidebar-section-title">SEO & Best Practices</h6>
  <nav class="nav flex-column">
    <a class="nav-link <?= ($current_page == 'meta-tags') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/meta-tags">
      <i class="bi bi-search"></i> Meta Tags
    </a>
    <a class="nav-link <?= ($current_page == 'semantic-seo') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/semantic-seo">
      <i class="bi bi-diagram-3"></i> Semantic HTML
    </a>
    <a class="nav-link <?= ($current_page == 'sitemap') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/html/sitemap">
      <i class="bi bi-sitemap"></i> Sitemaps
    </a>
  </nav>
</div>

<style>
.sidebar-section {
  margin-bottom: 1.5rem;
  border-bottom: 1px solid #e9ecef;
  padding-bottom: 1rem;
}
.sidebar-section:last-child {
  border-bottom: none;
}
.sidebar-section-title {
  font-size: 0.85rem;
  text-transform: uppercase;
  color: #6c757d;
  font-weight: 600;
  margin-bottom: 0.5rem;
  padding: 0.25rem 0.5rem;
  background-color: #f8f9fa;
  border-radius: 0.25rem;
}
.nav-link {
  padding: 0.35rem 0.5rem;
  font-size: 0.9rem;
  border-radius: 0.25rem;
  margin-bottom: 0.15rem;
}
.nav-link i {
  width: 20px;
  text-align: center;
  margin-right: 0.5rem;
  opacity: 0.8;
}
.nav-link:hover, .nav-link.active {
  background-color: #e9ecef;
}
</style>

</div>
</div>
</aside>
