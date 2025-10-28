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
    
    <!-- Bootstrap 5.3+ CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/code-editor.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/mobile-sidebar.css">
    
    <!-- Prism.js Syntax Highlighting -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-tomorrow.min.css" />

    <?php if (!empty($page_extra_head)) { echo $page_extra_head; } ?>
</head>
<body>
   
    <!-- ============================================
         SECTION: Top Navigation Bar
         - Responsive navbar with brand, multi-level dropdowns
         - Includes dark/light mode toggle
         - Collapses to hamburger on mobile
    ============================================= -->
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary sticky-top shadow-sm">
        <div class="container-fluid">
            <!-- Brand/Logo -->
            <a class="navbar-brand fw-bold text-gradient" href="<?php echo $base_url; ?>">
                <i class="bi bi-code-square"></i> FS Master
            </a>
            
            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler d-lg-none" type="button" id="mobileMenuToggle" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Navigation Items -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <!-- Home -->
                    <li class="nav-item">
                        <a class="nav-link <?php echo (isset($active_page) && $active_page == 'home') ? 'active' : ''; ?>" href="<?php echo $base_url; ?>">Home</a>
                    </li>
                    
                    <!-- Tutorials Dropdown with Multi-level Support -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="tutorialsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tutorials
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg" aria-labelledby="tutorialsDropdown">
                            <!-- Java Technologies Sub-menu -->
                            <li class="dropend">
                                <a class="dropdown-item dropdown-toggle" href="#" id="javaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-cup-hot"></i> Java Technologies
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="javaDropdown">
                                    <li><a class="dropdown-item" href="<?php echo isset($base_url) ? $base_url : ''; ?>tutorials/java/core-java">Core Java</a></li>
                                    <li><a class="dropdown-item" href="<?php echo isset($base_url) ? $base_url : ''; ?>tutorials/java/advanced-java">Advanced Java</a></li>
                                    <li><a class="dropdown-item" href="<?php echo isset($base_url) ? $base_url : ''; ?>tutorials/java/kafka">Apache Kafka</a></li>
                                    <li><a class="dropdown-item" href="<?php echo isset($base_url) ? $base_url : ''; ?>tutorials/java/spring">Spring Framework</a></li>
                                    <li><a class="dropdown-item" href="<?php echo isset($base_url) ? $base_url : ''; ?>tutorials/java/spring-boot">Spring Boot</a></li>
                                </ul>
                            </li>
                            
                            <!-- MEAN/MERN Stack Sub-menu -->
                            <li class="dropend">
                                <a class="dropdown-item dropdown-toggle" href="#" id="stackDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-layers"></i> MEAN/MERN Stack
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="stackDropdown">
                                    <li><a class="dropdown-item" href="<?php echo isset($base_url) ? $base_url : ''; ?>tutorials/mern-stack/angular">Angular</a></li>
                                    <li><a class="dropdown-item" href="<?php echo isset($base_url) ? $base_url : ''; ?>tutorials/mern-stack/react">React</a></li>
                                    <li><a class="dropdown-item" href="<?php echo isset($base_url) ? $base_url : ''; ?>tutorials/mern-stack/nodejs">Node.js</a></li>
                                    <li><a class="dropdown-item" href="<?php echo isset($base_url) ? $base_url : ''; ?>tutorials/mern-stack/mongodb">MongoDB</a></li>
                                    <li><a class="dropdown-item" href="<?php echo isset($base_url) ? $base_url : ''; ?>tutorials/mern-stack/mysql">MySQL</a></li>
                                </ul>
                            </li>
                            
                            <!-- Web Basics Sub-menu -->
                            <li class="dropend">
                                <a class="dropdown-item dropdown-toggle" href="#" id="webBasicsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-globe"></i> Web Basics
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="webBasicsDropdown">
                                    <li><a class="dropdown-item" href="<?php echo isset($base_url) ? $base_url : ''; ?>tutorials/web-basics/html/">HTML</a></li>
                                    <li><a class="dropdown-item" href="<?php echo isset($base_url) ? $base_url : ''; ?>tutorials/web-basics/css">CSS</a></li>
                                    <li><a class="dropdown-item" href="<?php echo isset($base_url) ? $base_url : ''; ?>tutorials/web-basics/javascript">JavaScript</a></li>
                                    <li><a class="dropdown-item" href="<?php echo isset($base_url) ? $base_url : ''; ?>tutorials/web-basics/tailwind">Tailwind CSS</a></li>
                                </ul>
                            </li>
                            
                            <!-- Tools Sub-menu -->
                            <li class="dropend">
                                <a class="dropdown-item dropdown-toggle" href="#" id="toolsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-tools"></i> Tools
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="toolsDropdown">
                                    <li><a class="dropdown-item" href="<?php echo isset($base_url) ? $base_url : ''; ?>tutorials/tools/git">Git</a></li>
                                    <li><a class="dropdown-item" href="<?php echo isset($base_url) ? $base_url : ''; ?>tutorials/tools/jira">Jira</a></li>
                                    <li><a class="dropdown-item" href="<?php echo isset($base_url) ? $base_url : ''; ?>tutorials/tools/docker">Docker</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                    <!-- Interview Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="interviewDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Interview
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="interviewDropdown">
                            <li><a class="dropdown-item" href="<?php echo isset($base_url) ? $base_url : ''; ?>interview/java-interview">Java Interview</a></li>
                            <li><a class="dropdown-item" href="<?php echo isset($base_url) ? $base_url : ''; ?>interview/javascript-interview">JavaScript Interview</a></li>
                            <li><a class="dropdown-item" href="<?php echo isset($base_url) ? $base_url : ''; ?>interview/react-interview">React Interview</a></li>
                            <li><a class="dropdown-item" href="<?php echo isset($base_url) ? $base_url : ''; ?>interview/system-design">System Design</a></li>
                        </ul>
                    </li>
                    
                    <!-- About -->
                    <li class="nav-item">
                        <a class="nav-link <?php echo (isset($active_page) && $active_page == 'about') ? 'active' : ''; ?>" href="<?php echo isset($base_url) ? $base_url : ''; ?>about">About</a>
                    </li>
                    
                    <!-- Contact -->
                    <li class="nav-item">
                        <a class="nav-link <?php echo (isset($active_page) && $active_page == 'contact') ? 'active' : ''; ?>" href="<?php echo isset($base_url) ? $base_url : ''; ?>contact">Contact</a>
                    </li>
                    
                    <!-- Chat Button -->
                    <!-- <li class="nav-item ms-lg-3">
<button id="chatOpenBtn" class="btn btn-primary btn-sm" aria-label="Open chat" data-bs-toggle="modal" data-bs-target="#chatModal">
                            <i class="bi bi-chat-dots"></i> Chat
                        </button>
                    </li> -->
                    
                    <!-- Theme Toggle Button -->
                    <li class="nav-item ms-lg-3">
                        <button id="themeToggle" class="btn btn-outline-secondary btn-sm" aria-label="Toggle theme">
                            <i class="bi bi-moon-stars theme-icon-dark"></i>
                            <i class="bi bi-sun theme-icon-light"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Global mobile sidebar offcanvas placeholder (content is injected on pages that have a sidebar) -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarOffcanvas" aria-labelledby="sidebarOffcanvasLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarOffcanvasLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0" id="mobileSidebarContent">
            <!-- Sidebar content will be injected here on mobile -->
        </div>
    </div>

    <!-- Mobile Menu Toggle Button (visible only on mobile) -->
    <div class="d-lg-none position-fixed bottom-3 end-3 zindex-1030">
        <button id="mobileMenuToggle" class="btn btn-primary rounded-circle p-3 shadow" data-bs-toggle="offcanvas" data-bs-target="#sidebarOffcanvas" aria-controls="sidebarOffcanvas">
            <i class="bi bi-list fs-4"></i>
        </button>
    </div>

    <!-- Main Content Wrapper -->
    <main class="col-9 col-lg-12 pt-3 px-lg-4">
    
    <!-- Chat Modal -->
<!-- <div class="modal fade" id="chatModal" tabindex="-1" aria-labelledby="chatModalLabel" aria-hidden="true" data-api-url="<?php echo asset('ajax/openai.php'); ?>">
      <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="chatModalLabel"><i class="bi bi-robot me-2"></i>AI Chat Assistant</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-0 d-flex flex-column" style="height: 65vh;">
            <div id="chatMessages" class="flex-grow-1 overflow-auto p-3" style="background: var(--bs-body-bg);"></div>
            <div class="border-top p-2">
              <form id="chatForm" class="d-flex gap-2">
                <textarea id="chatInput" class="form-control" rows="2" placeholder="Ask anything about code, get examples..." required></textarea>
                <button id="chatSendBtn" type="submit" class="btn btn-primary align-self-end">
                  <span class="send-label"><i class="bi bi-send"></i></span>
                  <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div> -->
