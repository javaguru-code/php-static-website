<?php
/**
 * Prism.js initialization (safe, no asset injection)
 * This file intentionally avoids echoing CSS/JS assets to prevent duplicate loads.
 * It only triggers highlighting once the DOM is ready, if Prism is present.
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
