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
    
    <!-- Debug Info -->
    <script>
        console.log('🔄 Footer script tag executing');
        
        // Ensure base_url is defined
        window.BASE_URL = '<?php echo isset($base_url) ? $base_url : ''; ?>';
        
        // If base_url is not set, try to determine it from the current URL
        if (!window.BASE_URL) {
            const scripts = document.getElementsByTagName('script');
            const currentScript = scripts[scripts.length - 1].src;
            const basePath = currentScript.split('/').slice(0, -3).join('/'); // Go up 3 levels from includes/js/
            window.BASE_URL = basePath + '/';
            console.log('Derived BASE_URL:', window.BASE_URL);
        } else {
            console.log('Using configured BASE_URL:', window.BASE_URL);
        }
        
        // Test if we can load the script
        const script = document.createElement('script');
        script.src = window.BASE_URL + 'js/mobile-sidebar-test.js';
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
    
</body>
</html>
