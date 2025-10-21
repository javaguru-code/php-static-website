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

            // Desktop: Hover behavior (CSS handles most, but we can enhance)
            if (!isMobileViewport()) {
                dropdown.addEventListener('mouseenter', function() {
                    // Add a small delay to prevent accidental triggers
                    this.hoverTimeout = setTimeout(() => {
                        if (!menu.classList.contains('show')) {
                            toggle.click();
                        }
                    }, 100);
                });

                dropdown.addEventListener('mouseleave', function() {
                    clearTimeout(this.hoverTimeout);
                    // Keep menu open if mouse is over it
                    setTimeout(() => {
                        if (!dropdown.matches(':hover')) {
                            if (menu.classList.contains('show')) {
                                toggle.click();
                            }
                        }
                    }, 200);
                });
            }

            // Mobile: Click behavior (Bootstrap handles this by default)
            // We just need to ensure proper toggling
            if (isMobileViewport()) {
                toggle.addEventListener('click', function(e) {
                    // On mobile, prevent navigation if there's a submenu
                    if (dropdown.classList.contains('dropend') && !menu.classList.contains('show')) {
                        e.preventDefault();
                    }
                });
            }
        });
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
                        toggle.click();
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
        setupMultilevelDropdowns();
        preventDropdownCloseOnClick();
        closeNavbarOnClick();
        highlightActivePage();
        addKeyboardNavigation();
        handleResponsiveChanges();

        console.log('Navigation module initialized');
    }

    // Run on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
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
