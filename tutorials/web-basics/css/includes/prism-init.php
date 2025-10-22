<?php
/**
 * Prism.js initialization (safe, no asset injection)
 * Mirrors the HTML tutorials setup.
 */

echo <<<HTML
<script>
  document.addEventListener("DOMContentLoaded", function() {
    if (typeof Prism !== "undefined" && Prism && typeof Prism.highlightAll === "function") {
      Prism.highlightAll();
    }
  });
</script>
HTML;

?>
