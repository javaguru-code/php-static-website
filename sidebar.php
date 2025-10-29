<?php
/**
 * Default Sidebar Template
 * This file is loaded by mobile-sidebar.js when a more specific sidebar is not found
 */
?>
<nav class="sidebar-nav">
    <div class="list-group">
        <a href="/" class="list-group-item list-group-item-action">Home</a>
        
        <!-- Tutorials Section -->
        <div class="list-group">
            <a href="#tutorials" class="list-group-item list-group-item-action" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="tutorials">
                Tutorials <i class="bi bi-chevron-down float-end"></i>
            </a>
            <div class="collapse" id="tutorials">
                <div class="list-group">
                    <a href="/tutorials/java/core-java" class="list-group-item list-group-item-action">Java Technologies</a>
                    <a href="/tutorials/mern-stack/angular" class="list-group-item list-group-item-action">MEAN/MERN Stack</a>
                    <a href="/tutorials/web-basics/html" class="list-group-item list-group-item-action">Web Basics</a>
                    <a href="/tutorials/tools/git" class="list-group-item list-group-item-action">Tools</a>
                </div>
            </div>
        </div>
        
        <!-- Interview Section -->
        <div class="list-group">
            <a href="#interview" class="list-group-item list-group-item-action" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="interview">
                Interview <i class="bi bi-chevron-down float-end"></i>
            </a>
            <div class="collapse" id="interview">
                <div class="list-group">
                    <a href="/interview/java-interview" class="list-group-item list-group-item-action">Java Interview</a>
                    <a href="/interview/javascript-interview" class="list-group-item list-group-item-action">JavaScript Interview</a>
                    <a href="/interview/react-interview" class="list-group-item list-group-item-action">React Interview</a>
                    <a href="/interview/system-design" class="list-group-item list-group-item-action">System Design</a>
                </div>
            </div>
        </div>
        
        <a href="/about" class="list-group-item list-group-item-action">About</a>
        <a href="/contact" class="list-group-item list-group-item-action">Contact</a>
    </div>
</nav>

<!-- Add Bootstrap's JavaScript for dropdown functionality -->
<script>
// Initialize Bootstrap dropdowns
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all dropdown toggles
    var dropdownElementList = [].slice.call(document.querySelectorAll('[data-bs-toggle="dropdown"]'));
    var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
        return new bootstrap.Dropdown(dropdownToggleEl);
    });
});
</script>
