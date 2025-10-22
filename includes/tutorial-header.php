<?php 
require_once __DIR__ . '/config.php';
// Ensure $base_url is defined
if (!isset($base_url)) {
    $base_url = '/';
    // Try to get base URL from config if available
    if (function_exists('get_base_url')) {
        $base_url = get_base_url();
    }
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo isset($page_description) ? htmlspecialchars($page_description) : 'Full Stack Master - Learn programming with comprehensive tutorials on Java, MEAN/MERN Stack, and modern web technologies.'; ?>">
    <title><?php echo isset($page_title) ? htmlspecialchars($page_title) : 'Full Stack Master - Programming Tutorials'; ?></title>
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('css/code-editor.css'); ?>">
    
    <!-- Prism.js Syntax Highlighting -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-tomorrow.min.css" />
    
    <!-- Bootstrap 5.3+ CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <?php if (!empty($page_extra_head)) { echo $page_extra_head; } ?>
    
    <style>
        /* Ensure proper spacing for fixed navbar */
        body {
            padding-top: 56px;
        }
        
        @media (min-width: 992px) {
            body {
                padding-top: 0;
            }
        }
        
        /* Smooth scrolling for anchor links */
        html {
            scroll-behavior: smooth;
        }
        
        /* Improve code block appearance */
        pre[class*="language-"] {
            border-radius: 0.5rem;
            margin: 1.5rem 0;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
        }
        
        /* Better table styling */
        .table {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.05);
        }
        
        .table th {
            background-color: #f8f9fa;
            font-weight: 600;
        }
        
        /* Improve alert styling */
        .alert {
            border: none;
            border-left: 4px solid;
        }
        
        .alert-primary {
            border-left-color: #0d6efd;
        }
        
        .alert-success {
            border-left-color: #198754;
        }
        
        .alert-warning {
            border-left-color: #ffc107;
        }
        
        .alert-danger {
            border-left-color: #dc3545;
        }
        
        .alert-info {
            border-left-color: #0dcaf0;
        }
    </style>
</head>
<body>
    <!-- ============================================
         SECTION: Top Navigation Bar
         - Responsive navbar with brand, multi-level dropdowns
         - Includes dark/light mode toggle
         - Collapses to hamburger on mobile
    ============================================= -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
        <div class="container-fluid">
            <!-- Brand/Logo -->
            <a class="navbar-brand fw-bold text-gradient" href="<?php echo $base_url; ?>">
                <i class="bi bi-code-square"></i> FS Master
            </a>
            
            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- Home -->
                    <li class="nav-item">
                        <a class="nav-link <?php echo (isset($active_page) && $active_page == 'home') ? 'active' : ''; ?>" href="<?php echo $base_url; ?>">
                            <i class="bi bi-house-door d-lg-none me-2"></i>Home
                        </a>
                    </li>
                    
                    <!-- Tutorials Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="tutorialsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-journal-bookmark d-lg-none me-2"></i>Tutorials
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg" aria-labelledby="tutorialsDropdown">
                            <li><a class="dropdown-item <?php echo (strpos($_SERVER['REQUEST_URI'], '/tutorials/web-basics/html/') !== false) ? 'active' : ''; ?>" href="<?php echo $base_url; ?>tutorials/web-basics/html/">
                                <i class="bi bi-globe me-2"></i> HTML Tutorials
                            </a></li>
                            <li><a class="dropdown-item" href="#">
                                <i class="bi bi-braces me-2"></i> JavaScript Tutorials
                            </a></li>
                            <li><a class="dropdown-item" href="#">
                                <i class="bi bi-brush me-2"></i> CSS Tutorials
                            </a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">
                                <i class="bi bi-journal-code me-2"></i> View All Tutorials
                            </a></li>
                        </ul>
                    </li>
                    
                    <!-- Resources -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-collection d-lg-none me-2"></i>Resources
                        </a>
                    </li>
                    
                    <!-- Blog -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-newspaper d-lg-none me-2"></i>Blog
                        </a>
                    </li>
                </ul>
                
                <!-- Right-aligned items -->
                <div class="d-flex">
                    <!-- Search Button -->
                    <div class="nav-item me-2">
                        <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#searchCollapse" aria-expanded="false" aria-controls="searchCollapse">
                            <i class="bi bi-search">
                                <span class="d-none d-lg-inline ms-1">Search</span>
                            </i>
                        </button>
                    </div>
                    
                    <!-- Theme Toggle -->
                    <div class="nav-item">
                        <button class="btn btn-link text-dark" id="themeToggle" title="Toggle theme">
                            <i class="bi bi-moon-stars"></i>
                            <span class="d-lg-none ms-2">Toggle Theme</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Search Bar (Collapsible) -->
    <div class="collapse bg-light" id="searchCollapse">
        <div class="container py-3">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search tutorials..." aria-label="Search">
                <button class="btn btn-primary" type="submit">
                    <i class="bi bi-search me-1"></i> Search
                </button>
            </form>
        </div>
    </div>
    
    <!-- Main container for sidebar and content -->
    <div class="container-fluid">
        <div class="row flex-nowrap">
    
    <!-- Bootstrap 5.3+ JS Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- Mobile menu fix -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize all dropdown toggles
        var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
        var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
            return new bootstrap.Dropdown(dropdownToggleEl, {
                autoClose: true
            });
        });
        
        // Close mobile menu when clicking on a dropdown item
        var navLinks = document.querySelectorAll('.nav-link, .dropdown-item');
        var menuToggler = document.querySelector('.navbar-toggler');
        var navbarCollapse = document.getElementById('mainNavbar');
        var bsCollapse = new bootstrap.Collapse(navbarCollapse, {toggle: false});
        
        navLinks.forEach(function(navLink) {
            navLink.addEventListener('click', function(e) {
                if (window.innerWidth < 992) { // Only on mobile
                    // Don't close if it's a dropdown toggle
                    if (!this.classList.contains('dropdown-toggle')) {
                        bsCollapse.hide();
                    }
                }
            });
        });
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            if (window.innerWidth < 992 && 
                !event.target.closest('.navbar') && 
                navbarCollapse.classList.contains('show')) {
                bsCollapse.hide();
            }
        });
        
        // Prevent dropdown from closing when clicking inside
        document.querySelectorAll('.dropdown-menu').forEach(function(element) {
            element.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        });
    });
    </script>
