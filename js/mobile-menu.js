/**
 * Mobile Menu Handler
 * Handles the mobile menu functionality including dropdown toggles
 */

function initializeMobileMenu() {
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    if (!navbarToggler || !navbarCollapse) {
        // If elements not found yet, try again after a short delay
        setTimeout(initializeMobileMenu, 100);
        return;
    }
    
    // Completely disable Bootstrap's collapse plugin for our navbar
    const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
    if (bsCollapse) {
        bsCollapse.dispose();
    }
    
    // Remove data-bs-toggle and data-bs-target to prevent Bootstrap from handling the click
    navbarToggler.removeAttribute('data-bs-toggle');
    navbarToggler.removeAttribute('data-bs-target');
    
    // Make sure the navbar is visible on desktop by default
    if (window.innerWidth > 991.98) {
        navbarCollapse.classList.add('show');
    }
    
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
    function handleToggleClick(e) {
        e.preventDefault();
        e.stopPropagation();
        
        // Toggle the menu
        const isExpanded = navbarToggler.getAttribute('aria-expanded') === 'true';
        toggleMenu(!isExpanded);
        
        return false;
    }
    
    // Remove any existing event listeners to prevent duplicates
    navbarToggler.removeEventListener('click', handleToggleClick);
    navbarToggler.addEventListener('click', handleToggleClick, true);
    
    // Close mobile menu when clicking outside
    function handleDocumentClick(e) {
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
    }
    
    document.removeEventListener('click', handleDocumentClick);
    document.addEventListener('click', handleDocumentClick);
    
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
    function initializeDropdowns() {
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
    }
    
    // Initialize dropdowns now and on dynamic content changes
    initializeDropdowns();
    
    // Handle window resize
    let resizeTimer;
    function handleResize() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            // If resized to desktop, ensure menu is visible
            if (window.innerWidth > 991.98) {
                navbarCollapse.classList.add('show');
                navbarToggler.setAttribute('aria-expanded', 'true');
                document.body.classList.remove('menu-open');
            } else {
                // If resized to mobile, reset the menu state
                if (navbarCollapse.classList.contains('show')) {
                    navbarCollapse.classList.remove('show');
                    navbarToggler.setAttribute('aria-expanded', 'false');
                }
            }
            
            // Re-initialize dropdowns after resize
            initializeDropdowns();
        }, 250);
    }
    
    window.removeEventListener('resize', handleResize);
    window.addEventListener('resize', handleResize);
    
    // Initial setup based on viewport
    if (window.innerWidth > 991.98) {
        navbarCollapse.classList.add('show');
        navbarToggler.setAttribute('aria-expanded', 'true');
    } else {
        navbarCollapse.classList.remove('show');
        navbarToggler.setAttribute('aria-expanded', 'false');
    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', initializeMobileMenu);

// Also initialize if script is loaded after DOM is already loaded
if (document.readyState === 'complete' || document.readyState === 'interactive') {
    setTimeout(initializeMobileMenu, 1);
}
