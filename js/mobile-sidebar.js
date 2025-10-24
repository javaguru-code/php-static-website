/**
 * Mobile Sidebar Handler
 * Loads the sidebar content from sidebar.php into the mobile offcanvas menu
 */

// Use a self-executing function to avoid global scope pollution
(function() {
    'use strict';
    
    // Main initialization function
    function init() {
        console.group('🚀 Mobile Sidebar Initialization');
        console.log('DOM fully loaded, initializing mobile sidebar...');
        
        const sidebarOffcanvas = document.getElementById('sidebarOffcanvas');
        const mobileSidebarContent = document.getElementById('mobileSidebarContent');
        
        console.log('Looking for sidebar elements...');
        console.log('- sidebarOffcanvas:', sidebarOffcanvas ? 'Found' : 'Not found');
        console.log('- mobileSidebarContent:', mobileSidebarContent ? 'Found' : 'Not found');
        
        if (!sidebarOffcanvas || !mobileSidebarContent) {
            console.warn('Required elements not found, will retry...');
            // If elements not found yet, try again after a short delay
            setTimeout(() => {
                console.log('Retrying initialization...');
                init();
            }, 100);
            return;
        }
        
        console.log('Sidebar elements found, loading content...');
        loadSidebarContent();
        
        // Function to load sidebar content
        function loadSidebarContent() {
        const sidebarOffcanvas = document.getElementById('sidebarOffcanvas');
        const mobileSidebarContent = document.getElementById('mobileSidebarContent');
        
        console.log('Looking for sidebar elements...');
        console.log('- sidebarOffcanvas:', sidebarOffcanvas ? 'Found' : 'Not found');
        console.log('- mobileSidebarContent:', mobileSidebarContent ? 'Found' : 'Not found');
        
        if (!sidebarOffcanvas || !mobileSidebarContent) {
            console.warn('Required elements not found, will retry...');
            // If elements not found yet, try again after a short delay
            setTimeout(() => {
                console.log('Retrying initialization...');
                initializeMobileSidebar();
            }, 100);
            return;
        }
        
        console.log('Sidebar elements found, loading content...');
        
        // Function to load sidebar content
        function loadSidebarContent() {
            console.group('🔍 loadSidebarContent');
            
            // Get the current path to determine the correct sidebar to load
            const pathSegments = window.location.pathname.split('/').filter(Boolean);
            console.log('Current path segments:', pathSegments);
            
            let sidebarPath = 'sidebar.php'; // Default sidebar path
            
            // If we're in a tutorial section, load the specific sidebar
            if (pathSegments.includes('tutorials') && pathSegments.length >= 3) {
                const tutorialsIndex = pathSegments.indexOf('tutorials');
                console.log('Found tutorials at index:', tutorialsIndex);
                
                if (tutorialsIndex !== -1) {
                    // Get the path segments after 'tutorials' (up to 2 more segments for language)
                    const tutorialPath = pathSegments.slice(tutorialsIndex, tutorialsIndex + 3).join('/');
                    sidebarPath = `/${tutorialPath}/sidebar.php`;
                    console.log('Built sidebar path:', sidebarPath);
                }
            } else {
                console.log('Not in a tutorial section or invalid path structure');
            }
            
            console.log('Final sidebar path:', sidebarPath);
            
            // Create a timestamp for this request
            const requestId = 'req_' + Date.now();
            console.log(`[${requestId}] Starting fetch for sidebar content`);
            
            // Load the sidebar content
            return fetch(sidebarPath, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-Request-ID': requestId
                },
                cache: 'no-cache' // Prevent caching issues
            })
                .then(response => {
                    console.log(`[${requestId}] Response status:`, response.status, response.statusText);
                    console.log(`[${requestId}] Response URL:`, response.url);
                    console.log(`[${requestId}] Response headers:`, [...response.headers.entries()]);
                    
                    if (!response.ok) {
                        console.warn(`[${requestId}] Sidebar not found at:`, sidebarPath);
                        // If the specific sidebar isn't found, fall back to the default
                        if (sidebarPath !== 'sidebar.php') {
                            console.log(`[${requestId}] Trying fallback to default sidebar.php`);
                            return fetch('sidebar.php', {
                                headers: { 'X-Requested-With': 'XMLHttpRequest', 'X-Request-ID': requestId + '-fallback' }
                            });
                        }
                        throw new Error(`[${requestId}] Sidebar not found and no fallback available`);
                    }
                    return response;
                })
                .then(response => {
                    if (!response) throw new Error('No response received');
                    return response.text().then(html => {
                        console.log(`[${requestId}] Received HTML (${html.length} chars)`);
                        console.log(`[${requestId}] First 200 chars:`, html.substring(0, 200));
                        return html;
                    });
                })
                .then(html => {
                    console.log(`[${requestId}] Processing HTML content`);
                    
                    // Create a temporary container to parse the HTML
                    const temp = document.createElement('div');
                    temp.innerHTML = html;
                    
                    console.log(`[${requestId}] Temporary container created`);
                    
                    // Find the sidebar content - look for the sidebar-nav or sidebar-content
                    let sidebarContent = temp.querySelector('.sidebar-nav, .sidebar-content, .sidebar');
                    console.log(`[${requestId}] Found sidebar content:`, !!sidebarContent);
                    
                    if (!sidebarContent) {
                        console.log(`[${requestId}] No sidebar content found with standard selectors, trying fallback`);
                        // Try to find any element that might contain the sidebar
                        const possibleSidebars = temp.querySelectorAll('div, aside, nav');
                        console.log(`[${requestId}] Found ${possibleSidebars.length} potential sidebar elements`);
                        
                        // Look for an element with sidebar-like structure
                        for (const el of possibleSidebars) {
                            if (el.querySelector('a, .nav-link')) {
                                sidebarContent = el;
                                console.log(`[${requestId}] Found potential sidebar content by link presence`);
                                break;
                            }
                        }
                        
                        // If we still can't find the sidebar content, use the body
                        if (!sidebarContent) {
                            const body = temp.querySelector('body');
                            if (body && body.firstElementChild) {
                                console.log(`[${requestId}] Using first child of body as fallback`);
                                sidebarContent = body.firstElementChild;
                            } else {
                                console.log(`[${requestId}] Using entire temp container as fallback`);
                                sidebarContent = temp;
                            }
                        }
                    }
                    
                    console.log(`[${requestId}] Updating mobile sidebar content`);
                    
                    // Make a clone to avoid any potential issues with the original
                    const sidebarClone = sidebarContent.cloneNode(true);
                    
                    // Update the mobile sidebar content
                    mobileSidebarContent.innerHTML = '';
                    mobileSidebarContent.appendChild(sidebarClone);
                    
                    console.log(`[${requestId}] Content updated, initializing dropdowns`);
                    
                    // Initialize dropdown toggles
                    initMobileDropdowns();
                    
                    console.log(`[${requestId}] Initialization complete`);
                })
                .catch(error => {
                    console.error(`[${requestId}] Error loading sidebar:`, error);
                    mobileSidebarContent.innerHTML = `
                        <div class="p-3">
                            <div class="alert alert-warning">
                                <h5>Error loading menu</h5>
                                <p>${error.message || 'Unknown error'}</p>
                                <p class="small text-muted">Request ID: ${requestId}</p>
                            </div>
                        </div>`;
                })
                .finally(() => {
                    console.groupEnd();
                });
        }
        
        // Initialize dropdown toggles in the mobile sidebar
        function initMobileDropdowns() {
            const dropdownToggles = mobileSidebarContent.querySelectorAll('.dropdown-toggle');
            
            dropdownToggles.forEach(toggle => {
                // Remove any existing click handlers
                const newToggle = toggle.cloneNode(true);
                toggle.parentNode.replaceChild(newToggle, toggle);
                
                // Add click handler for dropdown toggles
                newToggle.addEventListener('click', function(e) {
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
                const dropdownMenu = newToggle.nextElementSibling;
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
        }
        
        // Load the sidebar content when the offcanvas is shown
        sidebarOffcanvas.addEventListener('show.bs.offcanvas', function() {
            loadSidebarContent();
        });
        
        // Initial load if the offcanvas is already open
        if (sidebarOffcanvas.classList.contains('show')) {
            loadSidebarContent();
        }
    }
    
    // Initialize the mobile sidebar
    initializeMobileSidebar();
});
