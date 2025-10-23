/**
 * Mobile Menu Handler
 * Handles the mobile menu functionality including dropdown toggles
 */

document.addEventListener('DOMContentLoaded', function() {
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    if (!navbarToggler || !navbarCollapse) return;
    
    // Completely disable Bootstrap's collapse plugin for our navbar
    const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
    if (bsCollapse) {
        bsCollapse.dispose();
    }
    
    // Remove data-bs-toggle and data-bs-target to prevent Bootstrap from handling the click
    navbarToggler.removeAttribute('data-bs-toggle');
    navbarToggler.removeAttribute('data-bs-target');
    
    // Initialize our custom collapse functionality
    function toggleMenu(show = null) {
        const isExpanded = navbarToggler.getAttribute('aria-expanded') === 'true';
        const shouldShow = show !== null ? show : !isExpanded;
        
        navbarToggler.setAttribute('aria-expanded', shouldShow);
        if (shouldShow) {
            navbarCollapse.classList.add('show');
            document.body.classList.add('menu-open');
        } else {
            navbarCollapse.classList.remove('show');
            document.body.classList.remove('menu-open');
            
            // Close all dropdowns when closing the menu
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                menu.classList.remove('show');
                const toggle = menu.previousElementSibling;
                if (toggle && toggle.matches('.dropdown-toggle')) {
                    toggle.setAttribute('aria-expanded', 'false');
                }
            });
        }
    }
    
    // Handle menu toggle button click
    navbarToggler.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();
        
        // Toggle the menu
        const isExpanded = navbarToggler.getAttribute('aria-expanded') === 'true';
        toggleMenu(!isExpanded);
        
        // Prevent any other click handlers
        return false;
    }, true); // Use capture phase to ensure we get the event first
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(e) {
        // Don't close if clicking on a dropdown toggle or its children
        if (e.target.closest('.dropdown-toggle')) {
            return;
        }
        
        // Don't close if clicking inside an open dropdown menu
        if (e.target.closest('.dropdown-menu.show')) {
            return;
        }
        
        // Close the navbar if clicking outside
        if (navbarCollapse.classList.contains('show') && 
            !navbarCollapse.contains(e.target) && 
            !navbarToggler.contains(e.target)) {
            toggleMenu(false);
        }
    });
    
    // Handle dropdown toggles
    function handleDropdownClick(e) {
        if (window.innerWidth > 991.98) return true;
        
        e.preventDefault();
        e.stopPropagation();
        
        const parentItem = this.closest('.dropdown');
        const isExpanded = this.getAttribute('aria-expanded') === 'true';
        const dropdownMenu = this.nextElementSibling;
        
        // Make sure the navbar stays open
        if (!navbarCollapse.classList.contains('show')) {
            toggleMenu(true);
        }
        
        // Close all other dropdowns at the same level
        const siblings = Array.from(parentItem.parentElement.children).filter(
            child => child !== parentItem && child.classList.contains('dropdown')
        );
        
        siblings.forEach(sibling => {
            const siblingToggle = sibling.querySelector('.dropdown-toggle');
            const siblingMenu = sibling.querySelector('.dropdown-menu');
            if (siblingToggle && siblingMenu) {
                siblingToggle.setAttribute('aria-expanded', 'false');
                siblingMenu.classList.remove('show');
            }
        });
        
        // Toggle current dropdown
        if (dropdownMenu) {
            if (isExpanded) {
                this.setAttribute('aria-expanded', 'false');
                dropdownMenu.classList.remove('show');
            } else {
                this.setAttribute('aria-expanded', 'true');
                dropdownMenu.classList.add('show');
                
                // Scroll the dropdown into view if needed
                dropdownMenu.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
            
            // Prevent the click from reaching the document
            e.stopImmediatePropagation();
            return false;
        }
        
        return false;
    }
    
    // Initialize dropdown toggles
    document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
        // Remove any existing click handlers to prevent duplicates
        toggle.removeEventListener('click', handleDropdownClick);
        
        // Add our custom click handler
        toggle.addEventListener('click', handleDropdownClick);
        
        // For keyboard navigation
        toggle.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                this.click();
            }
        });
    });
    
    // Close dropdowns when clicking outside on mobile
    document.addEventListener('click', function(e) {
        if (window.innerWidth <= 991.98) {
            const isDropdownToggle = e.target.closest('.dropdown-toggle');
            const isInDropdown = e.target.closest('.dropdown-menu');
            
            if (!isDropdownToggle && !isInDropdown) {
                document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                    menu.classList.remove('show');
                    const toggle = menu.previousElementSibling;
                    if (toggle && toggle.matches('.dropdown-toggle')) {
                        toggle.setAttribute('aria-expanded', 'false');
                    }
                });
            }
        }
    });
    
    // Handle window resize
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            if (window.innerWidth > 991.98) {
                // Reset all dropdowns on desktop
                document.querySelectorAll('.dropdown-menu').forEach(menu => {
                    menu.classList.remove('show');
                });
                document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
                    toggle.setAttribute('aria-expanded', 'false');
                });
                document.body.classList.remove('menu-open');
                
                // Reset the navbar collapse state
                if (navbarCollapse.classList.contains('show')) {
                    toggleMenu(false);
                }
            }
        }, 250);
    });
});
