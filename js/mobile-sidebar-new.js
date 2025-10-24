/**
 * Mobile Sidebar Handler
 * Loads the sidebar content from sidebar.php into the mobile offcanvas menu
 */

console.log('🔄 mobile-sidebar-new.js: Script loaded');

(function() {
    'use strict';
    
    console.log('ℹ️ mobile-sidebar-new.js: IIFE executing');

    // Main initialization function
    function init() {
        console.log('🔍 mobile-sidebar-new.js: init() called');
        console.log('🚀 Mobile Sidebar: Initializing...');
        
        const sidebarOffcanvas = document.getElementById('sidebarOffcanvas');
        const mobileSidebarContent = document.getElementById('mobileSidebarContent');
        
        if (!sidebarOffcanvas || !mobileSidebarContent) {
            console.warn('Mobile Sidebar: Required elements not found, will retry...');
            setTimeout(init, 100);
            return;
        }
        
        loadSidebarContent();
        
        function loadSidebarContent() {
            console.log('Mobile Sidebar: Loading content...');
            
            // Get the current path to determine the correct sidebar to load
            const pathSegments = window.location.pathname.split('/').filter(Boolean);
            let sidebarPath = 'sidebar.php'; // Default sidebar path
            
            // If we're in a tutorial section, load the specific sidebar
            if (pathSegments.includes('tutorials') && pathSegments.length >= 3) {
                const tutorialsIndex = pathSegments.indexOf('tutorials');
                const tutorialPath = pathSegments.slice(tutorialsIndex, tutorialsIndex + 3).join('/');
                sidebarPath = `/${tutorialPath}/sidebar.php`;
            }
            
            console.log(`Mobile Sidebar: Loading from ${sidebarPath}`);
            
            // Load the sidebar content
            fetch(sidebarPath)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.text();
                })
                .then(html => {
                    // Create a temporary container to parse the HTML
                    const temp = document.createElement('div');
                    temp.innerHTML = html;
                    
                    // Find the sidebar content
                    let sidebarContent = temp.querySelector('.sidebar, .sidebar-nav, .sidebar-content, nav, aside');
                    
                    if (!sidebarContent) {
                        // If we can't find a specific sidebar element, use the entire response
                        sidebarContent = temp;
                    }
                    
                    // Update the mobile sidebar content
                    mobileSidebarContent.innerHTML = '';
                    mobileSidebarContent.appendChild(sidebarContent);
                    
                    console.log('Mobile Sidebar: Content loaded successfully');
                    initMobileDropdowns();
                })
                .catch(error => {
                    console.error('Mobile Sidebar: Error loading content:', error);
                    mobileSidebarContent.innerHTML = `
                        <div class="p-3">
                            <div class="alert alert-warning">
                                <h5>Error loading menu</h5>
                                <p>${error.message || 'Unknown error'}</p>
                            </div>
                        </div>`;
                });
        }
        
        function initMobileDropdowns() {
            const dropdownToggles = mobileSidebarContent.querySelectorAll('.dropdown-toggle');
            
            dropdownToggles.forEach(toggle => {
                toggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    const parentItem = this.closest('.dropdown');
                    const isExpanded = this.getAttribute('aria-expanded') === 'true';
                    const dropdownMenu = this.nextElementSibling;
                    
                    // Toggle the dropdown
                    if (dropdownMenu && (dropdownMenu.classList.contains('dropdown-menu') || dropdownMenu.classList.contains('nav'))) {
                        if (isExpanded) {
                            this.setAttribute('aria-expanded', 'false');
                            dropdownMenu.style.display = 'none';
                        } else {
                            this.setAttribute('aria-expanded', 'true');
                            dropdownMenu.style.display = 'block';
                        }
                    }
                });
                
                // Set initial state
                const dropdownMenu = toggle.nextElementSibling;
                if (dropdownMenu && (dropdownMenu.classList.contains('dropdown-menu') || dropdownMenu.classList.contains('nav'))) {
                    dropdownMenu.style.display = 'none';
                }
            });
            
            // Make all links in the sidebar work normally
            const links = mobileSidebarContent.querySelectorAll('a:not(.dropdown-toggle)');
            links.forEach(link => {
                link.addEventListener('click', function() {
                    const offcanvas = bootstrap.Offcanvas.getInstance(sidebarOffcanvas);
                    if (offcanvas) {
                        offcanvas.hide();
                    }
                });
            });
            
            console.log('Mobile Sidebar: Dropdowns initialized');
        }
    }
    
    // Start the initialization
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        // DOMContentLoaded has already fired
        setTimeout(init, 0);
    }
    
    console.log('✅ Mobile Sidebar: Script loaded');
})();
