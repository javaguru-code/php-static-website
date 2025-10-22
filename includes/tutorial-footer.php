        </main> <!-- Close main content area -->
    </div> <!-- Close row -->
</div> <!-- Close container-fluid -->

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
  window.BASE_URL = "<?php echo function_exists('get_base_url') ? rtrim(get_base_url(), '/') . '/' : '/' ?>";
</script>

<!-- Custom JavaScript -->
<script src="<?php echo asset('js/theme-toggle.js'); ?>"></script>
<script src="<?php echo asset('js/navigation.js'); ?>"></script>
<script src="<?php echo asset('js/chat.js'); ?>"></script>
<script src="<?php echo asset('js/code-editor.js'); ?>"></script>

<!-- Initialize Bootstrap tooltips -->
<script>
  // Initialize tooltips
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });

  // Initialize popovers
  var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
  var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl);
  });

  // Close mobile menu when clicking on a nav link
  document.querySelectorAll('.offcanvas .nav-link').forEach(link => {
    link.addEventListener('click', () => {
      const offcanvas = document.querySelector('.offcanvas.show');
      if (offcanvas) {
        const bsOffcanvas = bootstrap.Offcanvas.getInstance(offcanvas);
        if (bsOffcanvas) {
          bsOffcanvas.hide();
        }
      }
    });
  });
</script>

</body>
</html>
