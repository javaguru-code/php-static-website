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
          <h5 class="sidebar-title mb-3"><i class="bi bi-palette"></i> CSS Tutorials</h5>

          <!-- Getting Started -->
          <div class="sidebar-section mb-4">
            <h6 class="sidebar-section-title">Getting Started</h6>
            <nav class="nav flex-column">
              <a class="nav-link <?= ($current_page == 'index' || $current_page == 'home' || $current_page == '') ? 'active' : '' ?>"  href="<?= $base_url ?>tutorials/web-basics/css/">
                <i class="bi bi-book"></i> CSS Tutorial
              </a>
              <a class="nav-link <?= ($current_page == 'css-introduction') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-introduction">
                <i class="bi bi-info-circle"></i> CSS Introduction
              </a>
              <a class="nav-link <?= ($current_page == 'what-is-css') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/what-is-css">
                <i class="bi bi-question-circle"></i> What is CSS
              </a>
              <a class="nav-link <?= ($current_page == 'how-to-add-css') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/how-to-add-css">
                <i class="bi bi-link-45deg"></i> How to Add CSS
              </a>
            </nav>
          </div>

          <!-- CSS Basics -->
          <div class="sidebar-section mb-4">
            <h6 class="sidebar-section-title">CSS Basics</h6>
            <nav class="nav flex-column">
              <a class="nav-link <?= ($current_page == 'css-syntax') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-syntax">
                <i class="bi bi-braces"></i> CSS Syntax
              </a>
              <a class="nav-link <?= ($current_page == 'css-selector') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-selector">
                <i class="bi bi-cursor"></i> Selectors
              </a>
              <a class="nav-link <?= ($current_page == 'css-comments') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-comments">
                <i class="bi bi-chat-dots"></i> Comments
              </a>
              <a class="nav-link <?= ($current_page == 'inline-css') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/inline-css">
                <i class="bi bi-type"></i> Inline CSS
              </a>
              <a class="nav-link <?= ($current_page == 'internal-css') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/internal-css">
                <i class="bi bi-file-earmark-text"></i> Internal CSS
              </a>
              <a class="nav-link <?= ($current_page == 'external-css') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/external-css">
                <i class="bi bi-file-earmark-code"></i> External CSS
              </a>
            </nav>
          </div>

          <!-- Text & Typography -->
          <div class="sidebar-section mb-4">
            <h6 class="sidebar-section-title">Text & Typography</h6>
            <nav class="nav flex-column">
              <a class="nav-link <?= ($current_page == 'css-font') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-font"><i class="bi bi-fonts"></i> Font</a>
              <a class="nav-link <?= ($current_page == 'css-font-size') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-font-size">Font Size</a>
              <a class="nav-link <?= ($current_page == 'css-font-family') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-font-family">Font Family</a>
              <a class="nav-link <?= ($current_page == 'css-font-weight') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-font-weight">Font Weight</a>
              <a class="nav-link <?= ($current_page == 'css-font-stretch') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-font-stretch">Font Stretch</a>
              <a class="nav-link <?= ($current_page == 'css-font-variant') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-font-variant">Font Variant</a>
              <a class="nav-link <?= ($current_page == 'css-text-align') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-text-align">Text Align</a>
              <a class="nav-link <?= ($current_page == 'css-text-decoration') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-text-decoration">Text Decoration</a>
              <a class="nav-link <?= ($current_page == 'css-text-transform') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-text-transform">Text Transform</a>
              <a class="nav-link <?= ($current_page == 'css-text-indent') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-text-indent">Text Indent</a>
              <a class="nav-link <?= ($current_page == 'css-text-stroke') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-text-stroke">Text Stroke</a>
              <a class="nav-link <?= ($current_page == 'css-text-shadow') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-text-shadow">Text Shadow</a>
              <a class="nav-link <?= ($current_page == 'css-text-overflow') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-text-overflow">Text Overflow</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-letter-spacing">Letter Spacing</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-word-spacing">Word Spacing</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-word-wrap">Word Wrap</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-word-break">Word Break</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-line-height">Line Height</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-writing-mode">Writing Mode</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-text-orientation">Text Orientation</a>
            </nav>
          </div>

          <!-- Colors & Backgrounds -->
          <div class="sidebar-section mb-4">
            <h6 class="sidebar-section-title">Colors & Backgrounds</h6>
            <nav class="nav flex-column">
              <a class="nav-link <?= ($current_page == 'css-colors') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-colors"><i class="bi bi-palette"></i> Colors</a>
              <a class="nav-link <?= ($current_page == 'css-background') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-background">Background</a>
              <a class="nav-link <?= ($current_page == 'css-background-color') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-background-color">Background Color</a>
              <a class="nav-link <?= ($current_page == 'css-background-attachment') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-background-attachment">Background Attachment</a>
              <a class="nav-link <?= ($current_page == 'css-background-size') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-background-size">Background Size</a>
              <a class="nav-link <?= ($current_page == 'css-background-clip') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-background-clip">Background Clip</a>
              <a class="nav-link <?= ($current_page == 'css-background-origin') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-background-origin">Background Origin</a>
              <a class="nav-link <?= ($current_page == 'css-background-blend-mode') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-background-blend-mode">Background Blend Mode</a>
            </nav>
          </div>

          <!-- Box Model & Layout -->
          <div class="sidebar-section mb-4">
            <h6 class="sidebar-section-title">Box Model & Layout</h6>
            <nav class="nav flex-column">
              <a class="nav-link <?= ($current_page == 'css-box-model') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-box-model"><i class="bi bi-box"></i> Box Model</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-margin">Margin</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-padding">Padding</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-border">Border</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-border-radius">Border Radius</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-border-collapse">Border Collapse</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-border-spacing">Border Spacing</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-border-image">Border Image</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-outline">Outline</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-box-shadow">Box Shadow</a>
            </nav>
          </div>

          <!-- Positioning & Display -->
          <div class="sidebar-section mb-4">
            <h6 class="sidebar-section-title">Positioning & Display</h6>
            <nav class="nav flex-column">
              <a class="nav-link <?= ($current_page == 'css-display') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-display"><i class="bi bi-bounding-box"></i> Display</a>
              <a class="nav-link <?= ($current_page == 'css-position') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/css-position">Position</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-top">Top</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-right">Right</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-bottom">Bottom</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-left">Left</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-float">Float</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-clearfix">Clearfix</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-overflow">Overflow</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-visibility">Visibility</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-opacity">Opacity</a>
            </nav>
          </div>

          <!-- Dimensions -->
          <div class="sidebar-section mb-4">
            <h6 class="sidebar-section-title">Dimensions</h6>
            <nav class="nav flex-column">
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-width">Width</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-height">Height</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-max-width">Max Width</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-max-height">Max Height</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-min-width">Min Width</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-min-height">Min Height</a>
            </nav>
          </div>

          <!-- Alignment -->
          <div class="sidebar-section mb-4">
            <h6 class="sidebar-section-title">Alignment</h6>
            <nav class="nav flex-column">
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-horizontal-align">Horizontal Align</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-vertical-align">Vertical Align</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-justify-content">Justify Content</a>
            </nav>
          </div>

          <!-- Effects & Filters -->
          <div class="sidebar-section mb-4">
            <h6 class="sidebar-section-title">Effects & Filters</h6>
            <nav class="nav flex-column">
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-filter">Filter</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-hover">Hover</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-transition-delay">Transition Delay</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-transform-origin">Transform Origin</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-text-effects">Text Effects</a>
            </nav>
          </div>

          <!-- Images & Media -->
          <div class="sidebar-section mb-4">
            <h6 class="sidebar-section-title">Images & Media</h6>
            <nav class="nav flex-column">
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-images">Images</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-object-fit">Object Fit</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-object-position">Object Position</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-icons">Icons</a>
            </nav>
          </div>

          <!-- Lists & Tables -->
          <div class="sidebar-section mb-4">
            <h6 class="sidebar-section-title">Lists & Tables</h6>
            <nav class="nav flex-column">
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-lists">Lists</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-table">Tables</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-counter">Counter</a>
            </nav>
          </div>

          <!-- UI Components -->
          <div class="sidebar-section mb-4">
            <h6 class="sidebar-section-title">UI Components</h6>
            <nav class="nav flex-column">
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-buttons">Buttons</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-checkbox-style">Checkbox</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-radio-button">Radio Button</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-navigation-bar">Navigation Bar</a>
            </nav>
          </div>

          <!-- Advanced / Misc -->
          <div class="sidebar-section">
            <h6 class="sidebar-section-title">Advanced / Misc</h6>
            <nav class="nav flex-column">
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-grid">Grid</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-columns">Columns</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-important">!important</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-specificity">Specificity</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-nth-selector">Nth Selector</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-quotes">Quotes</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-root">:root</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-variables">Variables</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-pointer-events">Pointer Events</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-resize">Resize</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-overlay">Overlay</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-zoom">Zoom</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-hyphens">Hyphens</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-calc">calc()</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-cubic-bezier">cubic-bezier()</a>
              <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-descendant-selector">Descendant Selector</a>
            </nav>
          </div>

          <style>
            .sidebar-section { margin-bottom: 1.5rem; border-bottom: 1px solid #e9ecef; padding-bottom: 1rem; }
            .sidebar-section:last-child { border-bottom: none; }
            .sidebar-section-title { font-size: 0.85rem; text-transform: uppercase; color: #6c757d; font-weight: 600; margin-bottom: 0.5rem; padding: 0.25rem 0.5rem; background-color: #f8f9fa; border-radius: 0.25rem; }
            .nav-link { padding: 0.35rem 0.5rem; font-size: 0.9rem; border-radius: 0.25rem; margin-bottom: 0.15rem; }
            .nav-link i { width: 20px; text-align: center; margin-right: 0.5rem; opacity: 0.8; }
            .nav-link:hover, .nav-link.active { background-color: #e9ecef; }
          </style>

        </div>
      </div>
    </aside>
