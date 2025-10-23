/* ============================================
   NAVIGATION MODULE
   - Handles multi-level dropdown menus
   - Mobile-friendly interactions
   - Accessibility enhancements
============================================ */

(function() {
    'use strict';

    // ============================================
    // UTILITY FUNCTIONS
    // ============================================

    /**
     * Checks if device is mobile/touch device
     * @returns {boolean}
     */
    function isMobileDevice() {
        return ('ontouchstart' in window) || (navigator.maxTouchPoints > 0);
    }

    /**
     * Checks if viewport is in mobile size
     * @returns {boolean}
     */
    function isMobileViewport() {
        return window.innerWidth < 992; // Bootstrap lg breakpoint
    }

    // Helper to close sibling submenus (for mobile nested menus)
    function closeSiblingSubmenus(currentToggle) {
        const parentMenu = currentToggle.closest('.dropdown-menu');
        if (!parentMenu) return;
        parentMenu.querySelectorAll(':scope > .dropend .dropdown-menu.show').forEach(sm => {
            if (sm !== currentToggle.nextElementSibling) {
                sm.classList.remove('show');
            }
        });
    }

    // ============================================
    // DROPDOWN FUNCTIONALITY
    // ============================================

    /**
     * Enhances multi-level dropdown behavior
     * On desktop: hover to show, click to navigate
     * On mobile: click to show/hide
     */
    function setupMultilevelDropdowns() {
        const dropdowns = document.querySelectorAll('.dropdown, .dropend');

        dropdowns.forEach(dropdown => {
            const toggle = dropdown.querySelector('[data-bs-toggle="dropdown"]');
            const menu = dropdown.querySelector('.dropdown-menu');

            if (!toggle || !menu) return;

            // Desktop: Hover behavior
            if (!isMobileViewport()) {
                dropdown.addEventListener('mouseenter', function() {
                    this.hoverTimeout = setTimeout(() => {
                        if (!menu.classList.contains('show')) {
                            toggle.click();
                        }
                    }, 100);
                });

                dropdown.addEventListener('mouseleave', function() {
                    clearTimeout(this.hoverTimeout);
                    setTimeout(() => {
                        if (!dropdown.matches(':hover')) {
                            if (menu.classList.contains('show')) {
                                toggle.click();
                            }
                        }
                    }, 200);
                });
            }
        });

        // Mobile: Handle nested dropdowns manually
        if (isMobileViewport()) {
            // Top-level dropdown toggles inside navbar (e.g., "Tutorials")
            document.querySelectorAll('.navbar .nav-item.dropdown > .dropdown-toggle').forEach(topToggle => {
                topToggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    const menu = this.nextElementSibling;
                    // Close other open menus first
                    document.querySelectorAll('.navbar .dropdown-menu.show').forEach(m => {
                        if (m !== menu) m.classList.remove('show');
                    });
                    if (menu && menu.classList.contains('dropdown-menu')) {
                        menu.classList.toggle('show');
                        this.setAttribute('aria-expanded', menu.classList.contains('show'));
                    }
                });
            });

            // Nested dropdown toggles (submenus)
            document.querySelectorAll('.dropdown-menu .dropdown-toggle').forEach(nestedToggle => {
                nestedToggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    const submenu = this.nextElementSibling;
                    if (submenu && submenu.classList.contains('dropdown-menu')) {
                        // Close sibling submenus
                        closeSiblingSubmenus(this);
                        // Toggle this submenu
                        submenu.classList.toggle('show');
                        this.setAttribute('aria-expanded', submenu.classList.contains('show'));
                    }
                });
            });

            // Close dropdowns when clicking outside (mobile only)
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.navbar')) {
                    document.querySelectorAll('.navbar .dropdown-menu.show').forEach(m => m.classList.remove('show'));
                }
            });

            // Prevent dropdown menus from closing when clicked inside
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                menu.addEventListener('click', function(e) {
                    e.stopPropagation();
                });
            });
        }
    }

    /**
     * Prevents dropdown from closing when clicking inside it
     * Useful for dropdowns with forms or interactive content
     */
    function preventDropdownCloseOnClick() {
        const dropdownMenus = document.querySelectorAll('.dropdown-menu');

        dropdownMenus.forEach(menu => {
            menu.addEventListener('click', function(e) {
                // Stop propagation for certain elements (forms, buttons inside dropdown)
                if (e.target.closest('.dropdown-item-no-close')) {
                    e.stopPropagation();
                }
            });
        });
    }

    // ============================================
    // NAVBAR COLLAPSE BEHAVIOR
    // ============================================

    /**
     * Closes mobile navbar when clicking on a link
     */
    function closeNavbarOnClick() {
        const navbarCollapse = document.querySelector('.navbar-collapse');
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                // Only close if in mobile view
                if (isMobileViewport() && navbarCollapse.classList.contains('show')) {
                    const toggleBtn = document.querySelector('.navbar-toggler');
                    if (toggleBtn) {
                        toggleBtn.click();
                    }
                }
            });
        });
    }

    // ============================================
    // ACTIVE LINK HIGHLIGHTING
    // ============================================

    /**
     * Highlights the current page in navigation
     */
    function highlightActivePage() {
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link, .dropdown-item');

        navLinks.forEach(link => {
            const linkPath = new URL(link.href, window.location.origin).pathname;
            
            // Exact match
            if (linkPath === currentPath) {
                link.classList.add('active');
                
                // Also highlight parent dropdown if this is a dropdown item
                const parentDropdown = link.closest('.dropdown');
                if (parentDropdown) {
                    const parentToggle = parentDropdown.querySelector('.nav-link.dropdown-toggle');
                    if (parentToggle) {
                        parentToggle.classList.add('active');
                    }
                }
            }
        });
    }

    // ============================================
    // ACCESSIBILITY ENHANCEMENTS
    // ============================================

    /**
     * Adds keyboard navigation support for dropdowns
     */
    function addKeyboardNavigation() {
        const dropdownToggles = document.querySelectorAll('[data-bs-toggle="dropdown"]');

        dropdownToggles.forEach(toggle => {
            toggle.addEventListener('keydown', function(e) {
                const dropdown = this.closest('.dropdown, .dropend');
                const menu = dropdown?.querySelector('.dropdown-menu');

                if (!menu) return;

                // Enter or Space: Toggle dropdown
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    this.click();
                }

                // Arrow Down: Open dropdown and focus first item
                if (e.key === 'ArrowDown') {
                    e.preventDefault();
                    if (!menu.classList.contains('show')) {
                        this.click();
                    }
                    setTimeout(() => {
                        const firstItem = menu.querySelector('.dropdown-item');
                        if (firstItem) firstItem.focus();
                    }, 100);
                }

                // Escape: Close dropdown
                if (e.key === 'Escape') {
                    if (menu.classList.contains('show')) {
                        this.click();
                        this.focus();
                    }
                }
            });
        });

        // Navigate within dropdown items
        const dropdownItems = document.querySelectorAll('.dropdown-item');
        dropdownItems.forEach(item => {
            item.addEventListener('keydown', function(e) {
                const menu = this.closest('.dropdown-menu');
                const items = Array.from(menu.querySelectorAll('.dropdown-item'));
                const currentIndex = items.indexOf(this);

                // Arrow Down: Next item
                if (e.key === 'ArrowDown') {
                    e.preventDefault();
                    const nextIndex = (currentIndex + 1) % items.length;
                    items[nextIndex].focus();
                }

                // Arrow Up: Previous item
                if (e.key === 'ArrowUp') {
                    e.preventDefault();
                    const prevIndex = (currentIndex - 1 + items.length) % items.length;
                    items[prevIndex].focus();
                }
            });
        });
    }

    // ============================================
    // SIDEBAR: Mobile offcanvas from desktop sidebar
    // ============================================
    function setupMobileSidebarOffcanvas() {
        const sidebar = document.querySelector('aside.sidebar-nav');
        if (!sidebar) return;

        const fillOffcanvas = () => {
            const offcanvas = document.getElementById('sidebarOffcanvas');
            if (!offcanvas) return;
            const body = offcanvas.querySelector('.sidebar-offcanvas-body');
            if (!body) return;
            const src = sidebar.querySelector('.sidebar-content') || sidebar;
            if (src) {
                // Always refresh content to ensure latest links are visible (even if placeholder comment exists)
                body.innerHTML = src.innerHTML;
            }
        };

        const ensureButton = () => {
            if (!isMobileViewport()) return;
            const existingButton = document.querySelector('[data-bs-target="#sidebarOffcanvas"]');
            if (!existingButton) {
                const mainContent = document.querySelector('main');
                if (mainContent) {
                    const btn = document.createElement('button');
                    btn.id = 'sidebarToggleBtn';
                    btn.type = 'button';
                    btn.className = 'btn btn-outline-secondary btn-sm d-lg-none sidebar-toggle-btn';
                    btn.setAttribute('data-bs-toggle', 'offcanvas');
                    btn.setAttribute('data-bs-target', '#sidebarOffcanvas');
                    btn.setAttribute('aria-controls', 'sidebarOffcanvas');
                    btn.innerHTML = '<i class="bi bi-list"></i> Topics';
                    mainContent.prepend(btn);
                }
            }
        };

        // Initial population and button setup
        fillOffcanvas();
        ensureButton();

        // Populate when the offcanvas is about to show (ensures fresh content)
        document.addEventListener('show.bs.offcanvas', (e) => {
            if (e.target && e.target.id === 'sidebarOffcanvas') {
                fillOffcanvas();
            }
        });

        // Re-evaluate on resize
        window.addEventListener('resize', () => {
            setTimeout(() => {
                if (isMobileViewport()) {
                    ensureButton();
                }
            }, 100);
        });
    }

    // ============================================
    // RESPONSIVE BEHAVIOR
    // ============================================

    /**
     * Handles responsive changes (e.g., window resize)
     */
    function handleResponsiveChanges() {
        let resizeTimeout;
        
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                // Close all dropdowns on resize to prevent positioning issues
                const openDropdowns = document.querySelectorAll('.dropdown-menu.show');
                openDropdowns.forEach(menu => {
                    const toggle = menu.previousElementSibling;
                    if (toggle) {
                        // If nested submenu (no Bootstrap instance), just remove show class
                        if (toggle.closest('.dropdown-menu')) {
                            menu.classList.remove('show');
                        } else {
                            toggle.click();
                        }
                    }
                });

                // Re-setup dropdown behavior based on new viewport size
                setupMultilevelDropdowns();
            }, 250);
        });
    }

    // ============================================
    // INITIALIZATION
    // ============================================

    /**
     * Initialize all navigation functionality
     */
    function init() {
        // Only initialize desktop dropdowns if not on mobile
        if (!isMobileViewport()) {
            setupMultilevelDropdowns();
        }
        
        preventDropdownCloseOnClick();
        closeNavbarOnClick();
        highlightActivePage();
        setupMobileSidebarOffcanvas();
        handleResponsiveChanges();
        
        // Listen for window resize to handle mobile/desktop transitions
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                if (isMobileViewport()) {
                    // Clean up desktop dropdowns if resized to mobile
                    document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                        menu.classList.remove('show');
                    });
                } else {
                    // Initialize desktop dropdowns if resized to desktop
                    setupMultilevelDropdowns();
                }
            }, 250);
        });
    }

    // Only initialize if not on mobile (let mobile-menu.js handle mobile)
    if (!isMobileViewport()) {
        init();
    } else {
        // Still need to run these for mobile
        highlightActivePage();
        setupMobileSidebarOffcanvas();
        
        // Remove any existing click handlers from dropdown toggles
        document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
            // Clone the node to remove all event listeners
            const newToggle = toggle.cloneNode(true);
            toggle.parentNode.replaceChild(newToggle, toggle);
        });
    }
})();

/* ============================================
   USAGE NOTES:
   
   1. This script works with Bootstrap 5.3+ dropdowns
   2. Requires Bootstrap's JS for basic dropdown functionality
   3. Enhances with:
      - Hover behavior on desktop
      - Mobile-friendly click behavior
      - Keyboard navigation
      - Active page highlighting
   
   4. HTML Structure:
      <li class="dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Menu</a>
          <ul class="dropdown-menu">
              <li class="dropend">
                  <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown">Submenu</a>
                  <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Item</a></li>
                  </ul>
              </li>
          </ul>
      </li>
============================================ */
