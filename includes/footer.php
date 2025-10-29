  </main>
  <!-- ============================================
         SECTION: Footer
         - Copyright and social links
    ============================================= -->
    <footer class="bg-body-tertiary py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <p class="mb-0">&copy; 2025 FS Master. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="text-decoration-none me-3"><i class="bi bi-github"></i></a>
                    <a href="#" class="text-decoration-none me-3"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-decoration-none"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
            crossorigin="anonymous"></script>
    
    <!-- Custom JavaScript with Debugging -->
    <script>
       
        document.querySelectorAll('script[src]').forEach(script => {
            console.log('-', script.src);
        });
        
        // Log viewport info
        console.log('=== Viewport Info ===');
        console.log('Viewport width:', window.innerWidth, 'px');
        console.log('Viewport height:', window.innerHeight, 'px');
        console.log('Device pixel ratio:', window.devicePixelRatio);
        
        // Log Bootstrap components
        console.log('=== Bootstrap Components ===');
        console.log('Dropdown:', typeof bootstrap.Dropdown);
        console.log('Collapse:', typeof bootstrap.Collapse);
        console.log('Offcanvas:', typeof bootstrap.Offcanvas);
        
        // Log DOM elements
        console.log('=== DOM Elements ===');
        console.log('Navbar toggler:', document.querySelector('.navbar-toggler') ? 'Found' : 'Not found');
        console.log('Navbar collapse:', document.getElementById('navbarNav') ? 'Found' : 'Not found');
        console.log('Dropdown toggles:', document.querySelectorAll('.dropdown-toggle').length, 'found');
        
        // Log window load state
        console.log('Document readyState:', document.readyState);
        
        // Add error logging for window.onerror
        window.onerror = function(message, source, lineno, colno, error) {
            console.error('=== WINDOW ERROR ===');
            console.error('Message:', message);
            console.error('Source:', source);
            console.error('Line:', lineno);
            console.error('Column:', colno);
            console.error('Error:', error);
            return true; // Prevent default error handling
        };
        // Initialize tooltips and popovers
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize all tooltips
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });

            // Initialize all popovers
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
            var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl);
            });

            // Debug: Log all dropdown toggles
            console.log('=== DEBUG: Found', document.querySelectorAll('.dropdown-toggle').length, 'dropdown toggles ===');
            document.querySelectorAll('.dropdown-toggle').forEach((toggle, index) => {
                console.log(`Toggle #${index + 1}:`, {
                    id: toggle.id || 'no-id',
                    href: toggle.getAttribute('href'),
                    'data-bs-toggle': toggle.getAttribute('data-bs-toggle'),
                    'aria-expanded': toggle.getAttribute('aria-expanded'),
                    nextElement: toggle.nextElementSibling ? toggle.nextElementSibling.tagName : 'none'
                });
            });

            // Initialize Bootstrap dropdowns
            const dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
            const dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
                // Initialize Bootstrap dropdown
                const dropdown = new bootstrap.Dropdown(dropdownToggleEl, {
                    autoClose: true
                });
                
                // Add mobile-specific handling
                if (window.innerWidth < 992) {
                    const dropdownMenu = dropdownToggleEl.nextElementSibling;
                    if (dropdownMenu && dropdownMenu.classList.contains('dropdown-menu')) {
                        // Prevent default Bootstrap behavior on mobile
                        dropdownToggleEl.setAttribute('data-bs-auto-close', 'outside');
                        
                        // Add click handler for mobile
                        dropdownToggleEl.addEventListener('click', function(e) {
                            if (window.innerWidth >= 992) return;
                            
                            e.preventDefault();
                            e.stopPropagation();
                            
                            // Toggle the dropdown
                            const isOpen = dropdownMenu.classList.contains('show');
                            
                            // Close all dropdowns first
                            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                                menu.classList.remove('show');
                            });
                            
                            // Toggle the clicked one if it wasn't open
                            if (!isOpen) {
                                dropdownToggleEl.classList.add('show');
                                dropdownMenu.classList.add('show');
                            }
                            
                            // Update ARIA attributes
                            const expanded = !isOpen;
                            dropdownToggleEl.setAttribute('aria-expanded', expanded);
                            dropdownMenu.setAttribute('data-bs-popper', expanded ? 'static' : 'none');
                            
                            console.log('Toggled dropdown:', {
                                id: dropdownToggleEl.id || 'no-id',
                                isOpen: !isOpen,
                                ariaExpanded: expanded
                            });
                        });
                    }
                }
                
                return dropdown;
            });
            
            // Handle window resize to update behavior
            let isMobileView = window.innerWidth < 992;
            window.addEventListener('resize', function() {
                const newIsMobileView = window.innerWidth < 992;
                if (newIsMobileView !== isMobileView) {
                    isMobileView = newIsMobileView;
                    console.log('Viewport changed to:', isMobileView ? 'mobile' : 'desktop');
                    
                    // Reset dropdowns on viewport change
                    document.querySelectorAll('.dropdown-menu').forEach(menu => {
                        menu.classList.remove('show');
                    });
                }
            });

            // Close dropdowns when clicking outside (mobile only)
            console.log('Setting up click-outside handler for mobile');
            document.addEventListener('click', function(e) {
                if (window.innerWidth >= 992) return;
                
                const clickedElement = e.target;
                const isDropdownToggle = clickedElement.matches('.dropdown-toggle') || 
                                      clickedElement.closest('.dropdown-toggle');
                const isInsideDropdown = clickedElement.closest('.dropdown-menu');
                
                if (!isDropdownToggle && !isInsideDropdown) {
                    console.log('Click outside dropdown - closing all dropdowns');
                    document.querySelectorAll('.dropdown-menu, .dropdown-toggle').forEach(element => {
                        element.classList.remove('show');
                        if (element.matches('.dropdown-toggle')) {
                            element.setAttribute('aria-expanded', 'false');
                        }
                    });
                    
                    // Reset popper positioning
                    document.querySelectorAll('.dropdown-menu').forEach(menu => {
                        menu.removeAttribute('data-bs-popper');
                    });
                }
            });
            
            // Handle keyboard navigation
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && window.innerWidth < 992) {
                    console.log('Escape key pressed - closing all dropdowns');
                    document.querySelectorAll('.dropdown-menu, .dropdown-toggle').forEach(element => {
                        element.classList.remove('show');
                        if (element.matches('.dropdown-toggle')) {
                            element.setAttribute('aria-expanded', 'false');
                        }
                    });
                }
            });

            // Add styles for better mobile dropdown experience
            const style = document.createElement('style');
            style.textContent = `
                @media (max-width: 991.98px) {
                    .navbar-collapse {
                        background: #fff;
                        padding: 1rem;
                        margin-top: 0.5rem;
                        border-radius: 0.25rem;
                        box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
                    }
                    .dropdown-menu {
                        position: static !important;
                        margin: 0.25rem 0 0.25rem 1rem;
                        border: none;
                        box-shadow: none;
                        background-color: rgba(0,0,0,0.02);
                    }
                    .dropdown-item {
                        padding: 0.5rem 1.5rem;
                    }
                    .dropdown-toggle::after {
                        float: right;
                        margin-top: 0.5em;
                    }
                }
            `;
            document.head.appendChild(style);
        });
    </script>
    
    <script>
        // Ensure base_url is defined
        window.BASE_URL = '<?php echo isset($base_url) ? $base_url : ''; ?>';
        
        // If base_url is not set, try to determine it from the current URL
        if (!window.BASE_URL) {
            const scripts = document.getElementsByTagName('script');
            const currentScript = scripts[scripts.length - 1].src;
            const basePath = currentScript.split('/').slice(0, -3).join('/');
            window.BASE_URL = basePath + '/';
            console.log('Derived BASE_URL:', window.BASE_URL);
        }

        // Initialize tooltips and popovers
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize all tooltips
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });

            // Initialize all popovers
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
            var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl);
            });

            // Handle mobile menu toggle
            const mobileMenuToggle = document.getElementById('mobileMenuToggle');
            if (mobileMenuToggle) {
                mobileMenuToggle.addEventListener('click', function() {
                    const offcanvas = new bootstrap.Offcanvas(document.getElementById('sidebarOffcanvas'));
                    offcanvas.toggle();
                });
            }

            // Function to handle dropdown toggle
            function handleDropdownToggle(e) {
                // Only for mobile view
                if (window.innerWidth >= 992) return;
                
                const dropdownToggle = e.target.closest('.dropdown-toggle');
                if (!dropdownToggle) return;
                
                e.preventDefault();
                e.stopPropagation();
                
                const dropdownMenu = dropdownToggle.nextElementSibling;
                if (!dropdownMenu || !dropdownMenu.classList.contains('dropdown-menu')) return;
                
                // Toggle the dropdown
                dropdownMenu.classList.toggle('show');
                
                // Add a class to indicate this is a parent dropdown
                if (dropdownMenu.querySelector('.dropdown-menu')) {
                    dropdownToggle.parentElement.classList.add('has-submenu');
                }
                
                // Close other dropdowns at the same level
                const parentItem = dropdownToggle.closest('.dropdown-menu');
                if (parentItem) {
                    // For nested dropdowns
                    parentItem.querySelectorAll('.dropdown-menu').forEach(menu => {
                        if (menu !== dropdownMenu) {
                            menu.classList.remove('show');
                        }
                    });
                } else {
                    // For top-level dropdowns
                    document.querySelectorAll('.navbar-nav > .dropdown > .dropdown-menu').forEach(menu => {
                        if (menu !== dropdownMenu) {
                            menu.classList.remove('show');
                        }
                    });
                }
            }

            // Initialize dropdowns for mobile
            document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
                toggle.addEventListener('click', handleDropdownToggle);
                
                // Add chevron for dropdowns with submenus
                if (toggle.nextElementSibling && toggle.nextElementSibling.classList.contains('dropdown-menu')) {
                    const chevron = document.createElement('i');
                    chevron.className = 'bi bi-chevron-down ms-1';
                    toggle.appendChild(chevron);
                }
            });

            // Close dropdowns when clicking outside
            document.addEventListener('click', function(e) {
                if (window.innerWidth >= 992) return;
                
                if (!e.target.closest('.dropdown-menu') && !e.target.matches('.dropdown-toggle')) {
                    document.querySelectorAll('.dropdown-menu').forEach(menu => {
                        menu.classList.remove('show');
                    });
                }
            });
            
            // Add styles for better mobile dropdown experience
            const style = document.createElement('style');
            style.textContent = `
                @media (max-width: 991.98px) {
                    .dropdown-menu {
                        position: static !important;
                        margin: 0.25rem 0 0.25rem 1rem;
                        border: none;
                        box-shadow: none;
                        background-color: rgba(0,0,0,0.02);
                    }
                    .dropdown-item {
                        padding: 0.5rem 1.5rem;
                    }
                    .dropdown-toggle::after {
                        display: none;
                    }
                    .dropdown-menu .dropdown-toggle .bi-chevron-down {
                        transition: transform 0.2s;
                    }
                    .dropdown-menu.show > .dropdown-item > .dropdown-toggle .bi-chevron-down {
                        transform: rotate(180deg);
                    }
                    .has-submenu > .dropdown-menu {
                        display: none;
                    }
                    .has-submenu > .dropdown-menu.show {
                        display: block;
                    }
                }
            `;
            document.head.appendChild(style);
        });
  
        script.onload = function() {
            console.log('✅ Test script loaded successfully');
        };
        script.onerror = function() {
            console.error('❌ Failed to load test script');
            console.log('Trying to load from full path: ' + window.location.origin + '/fsmaster/js/mobile-sidebar-test.js');
            
            // Try with full path
            const fullPathScript = document.createElement('script');
            fullPathScript.src = window.location.origin + '/fsmaster/js/mobile-sidebar-test.js';
            document.head.appendChild(fullPathScript);
        };
        document.head.appendChild(script);
    </script>

    <!-- Bootstrap 5.3+ JS Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- Prism.js Syntax Highlighting -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-javascript.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-python.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-java.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-php.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-css.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-json.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-markup-templating.min.js"></script>
    
    <!-- Global base URL for JS -->
    <script>
      window.BASE_URL = "<?php echo function_exists('get_base_url') ? rtrim(get_base_url(), '/') . '/' : '/'; ?>";
    </script>

    <!-- Custom JavaScript -->
    <script src="<?php echo asset('js/theme-toggle.js'); ?>"></script>
    <script src="<?php echo asset('js/navigation.js'); ?>"></script>
    <script src="<?php echo asset('js/chat.js'); ?>"></script>
    <script src="<?php echo asset('js/code-editor.js'); ?>"></script>
    <script src="<?php echo asset('js/mobile-menu.js'); ?>"></script>
    
    <!-- Mobile Sidebar JavaScript -->
    <script src="<?php echo isset($base_url) ? $base_url : ''; ?>js/mobile-sidebar.js"></script>
    
    <script>
        // Initialize mobile sidebar when DOM is fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof initMobileSidebar === 'function') {
                initMobileSidebar();
            } else if (window.mobileSidebar && typeof window.mobileSidebar.init === 'function') {
                window.mobileSidebar.init();
            }
        });
    </script>
</body>
</html>
