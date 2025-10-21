<?php
// Include config
require_once dirname(__DIR__, 3) . '/includes/config.php';

$base_url = get_base_url();
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>

<div class="container-fluid">
  <div class="row">
    <aside class="col-lg-3 d-none d-lg-block sidebar-nav p-0">
      <div class="sticky-top pt-3 sticky-sidebar">
        <div class="sidebar-content px-3">
          <h5 class="sidebar-title mb-3"><i class="bi bi-palette"></i> CSS</h5>
          <!-- Home -->
          <nav class="nav flex-column">
            <a class="nav-link <?= ($current_page == 'index' || $current_page == 'home' || $current_page == '') ? 'active' : '' ?>" href="<?= $base_url ?>tutorials/web-basics/css/">
              <i class="bi bi-house"></i> Home
            </a>
          </nav>

          <!-- CSS Basics -->
          <nav class="nav flex-column">
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-introduction">CSS Introduction</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/what-is-css">What is CSS</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-syntax">CSS Syntax</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-selector">CSS Selectors</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/how-to-add-css">How to Add CSS</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/inline-css">Inline CSS</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/internal-css">Internal CSS</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/external-css">External CSS</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-comments">CSS Comments</a>
          </nav>

          <!-- Text & Typography -->
          <nav class="nav flex-column">
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-font">CSS Font</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-font-size">Font Size</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-font-family">Font Family</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-font-weight">Font Weight</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-font-stretch">Font Stretch</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-font-variant">Font Variant</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-text-align">Text Align</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-text-decoration">Text Decoration</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-text-transform">Text Transform</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-text-indent">Text Indent</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-text-stroke">Text Stroke</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-text-shadow">Text Shadow</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-text-overflow">Text Overflow</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-letter-spacing">Letter Spacing</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-word-spacing">Word Spacing</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-word-wrap">Word Wrap</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-word-break">Word Break</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-line-height">Line Height</a>
          </nav>

          <!-- Colors & Backgrounds -->
          <nav class="nav flex-column">
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-colors">CSS Colors</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-background">CSS Background</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-background-color">Background Color</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-background-attachment">Background Attachment</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-background-size">Background Size</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-background-clip">Background Clip</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-background-origin">Background Origin</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-background-blend-mode">Background Blend Mode</a>
          </nav>

          <!-- Box Model & Layout -->
          <nav class="nav flex-column">
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-box-model">CSS Box Model</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-margin">CSS Margin</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-padding">CSS Padding</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-border">CSS Border</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-border-radius">Border Radius</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-border-collapse">Border Collapse</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-border-spacing">Border Spacing</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-border-image">Border Image</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-outline">CSS Outline</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-box-shadow">Box Shadow</a>
          </nav>

          <!-- Positioning & Display -->
          <nav class="nav flex-column">
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-display">CSS Display</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-position">CSS Position</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-top">Top Property</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-right">Right Property</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-bottom">Bottom Property</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-left">Left Property</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-float">CSS Float</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-clearfix">CSS Clearfix</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-overflow">CSS Overflow</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-visibility">CSS Visibility</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-opacity">CSS Opacity</a>
          </nav>

          <!-- Dimensions -->
          <nav class="nav flex-column">
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-width">CSS Width</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-height">CSS Height</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-max-width">Max Width</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-max-height">Max Height</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-min-width">Min Width</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-min-height">Min Height</a>
          </nav>

          <!-- Alignment -->
          <nav class="nav flex-column">
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-horizontal-align">Horizontal Align</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-vertical-align">Vertical Align</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-justify-content">Justify Content</a>
          </nav>

          <!-- Effects & Filters -->
          <nav class="nav flex-column">
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-filter">CSS Filter</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-hover">CSS Hover</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-transition-delay">Transition Delay</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-transform-origin">Transform Origin</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-text-effects">Text Effects</a>
          </nav>

          <!-- Images & Media -->
          <nav class="nav flex-column">
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-images">CSS Images</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-object-fit">Object Fit</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-object-position">Object Position</a>
          </nav>

          <!-- Lists & Tables -->
          <nav class="nav flex-column">
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-lists">CSS Lists</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-table">CSS Table</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-counter">CSS Counter</a>
          </nav>

          <!-- UI Components -->
          <nav class="nav flex-column">
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-buttons">CSS Buttons</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-checkbox-style">Checkbox Style</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-radio-button">Radio Button</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-navigation-bar">Navigation Bar</a>
          </nav>

          <!-- Advanced / Misc -->
          <nav class="nav flex-column">
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-grid">CSS Grid</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-columns">CSS Columns</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-important">!important</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-specificity">Specificity</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-nth-selector">Nth Selector</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-quotes">Quotes</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-root">:root</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-variables">CSS Variables</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-pointer-events">Pointer Events</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-resize">Resize</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-overlay">Overlay</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-zoom">Zoom</a>
            <a class="nav-link" href="<?= $base_url ?>tutorials/web-basics/css/css-hyphens">Hyphens</a>
          </nav>
        </div>
      </div>
    </aside>
