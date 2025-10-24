// Test script to verify JavaScript loading
console.log('✅ Test script loaded successfully!');

document.addEventListener('DOMContentLoaded', function() {
    console.log('✅ DOM is fully loaded');
    
    // Test if we can find the mobile sidebar elements
    const sidebarOffcanvas = document.getElementById('sidebarOffcanvas');
    const mobileSidebarContent = document.getElementById('mobileSidebarContent');
    
    console.log('Elements found:', {
        sidebarOffcanvas: !!sidebarOffcanvas,
        mobileSidebarContent: !!mobileSidebarContent
    });
});
