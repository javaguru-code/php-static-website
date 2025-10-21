/* ============================================
   THEME TOGGLE MODULE
   - Handles dark/light mode switching
   - Persists user preference in localStorage
   - Respects system preference by default
   - Smooth transitions between themes
============================================ */

(function() {
    'use strict';

    // ============================================
    // CONSTANTS
    // ============================================
    const THEME_KEY = 'fsmaster-theme';
    const THEME_LIGHT = 'light';
    const THEME_DARK = 'dark';
    const THEME_AUTO = 'auto';

    // ============================================
    // UTILITY FUNCTIONS
    // ============================================

    /**
     * Gets the user's system color scheme preference
     * @returns {string} 'light' or 'dark'
     */
    function getSystemTheme() {
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            return THEME_DARK;
        }
        return THEME_LIGHT;
    }

    /**
     * Gets the stored theme preference from localStorage
     * @returns {string|null} Theme preference or null if not set
     */
    function getStoredTheme() {
        return localStorage.getItem(THEME_KEY);
    }

    /**
     * Stores the theme preference in localStorage
     * @param {string} theme - Theme to store
     */
    function setStoredTheme(theme) {
        localStorage.setItem(THEME_KEY, theme);
    }

    /**
     * Determines which theme to use
     * Priority: stored preference > system preference
     * @returns {string} 'light' or 'dark'
     */
    function getPreferredTheme() {
        const storedTheme = getStoredTheme();
        if (storedTheme) {
            return storedTheme;
        }
        return getSystemTheme();
    }

    /**
     * Applies the theme to the document
     * @param {string} theme - Theme to apply ('light' or 'dark')
     */
    function setTheme(theme) {
        document.documentElement.setAttribute('data-bs-theme', theme);
    }

    /**
     * Toggles between light and dark themes
     * @returns {string} The new theme
     */
    function toggleTheme() {
        const currentTheme = document.documentElement.getAttribute('data-bs-theme');
        const newTheme = currentTheme === THEME_LIGHT ? THEME_DARK : THEME_LIGHT;
        setTheme(newTheme);
        setStoredTheme(newTheme);
        return newTheme;
    }

    // ============================================
    // INITIALIZATION
    // ============================================

    /**
     * Initializes the theme on page load
     * This runs immediately to prevent flash of wrong theme
     */
    function initTheme() {
        const preferredTheme = getPreferredTheme();
        setTheme(preferredTheme);
    }

    /**
     * Sets up the theme toggle button event listener
     */
    function setupThemeToggle() {
        const themeToggleBtn = document.getElementById('themeToggle');
        
        if (!themeToggleBtn) {
            console.warn('Theme toggle button not found');
            return;
        }

        // Add click event listener
        themeToggleBtn.addEventListener('click', function() {
            const newTheme = toggleTheme();
            
            // Optional: Log theme change (can be removed in production)
            console.log(`Theme changed to: ${newTheme}`);
            
            // Optional: Add a subtle animation to the button
            this.classList.add('loading-spinner');
            setTimeout(() => {
                this.classList.remove('loading-spinner');
            }, 300);
        });
    }

    /**
     * Listens for system theme changes and updates if user hasn't set a preference
     */
    function listenForSystemThemeChanges() {
        if (!window.matchMedia) return;

        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
            // Only auto-update if user hasn't set a preference
            const storedTheme = getStoredTheme();
            if (!storedTheme) {
                const newTheme = e.matches ? THEME_DARK : THEME_LIGHT;
                setTheme(newTheme);
                console.log(`System theme changed to: ${newTheme}`);
            }
        });
    }

    // ============================================
    // RUN ON PAGE LOAD
    // ============================================

    // Initialize theme immediately (before DOM is ready) to prevent flash
    initTheme();

    // Set up toggle button and listeners when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            setupThemeToggle();
            listenForSystemThemeChanges();
        });
    } else {
        // DOM is already ready
        setupThemeToggle();
        listenForSystemThemeChanges();
    }

})();

/* ============================================
   USAGE INSTRUCTIONS:
   
   1. Include this script in your HTML:
      <script src="js/theme-toggle.js"></script>
   
   2. Add a toggle button with id="themeToggle":
      <button id="themeToggle">
          <i class="bi bi-moon-stars theme-icon-dark"></i>
          <i class="bi bi-sun theme-icon-light"></i>
      </button>
   
   3. The script will:
      - Check localStorage for saved preference
      - Fall back to system preference if no saved preference
      - Save user's choice when they toggle
      - Apply theme immediately on page load (no flash)
   
   4. To programmatically get current theme:
      document.documentElement.getAttribute('data-bs-theme')
   
   5. To reset to system default:
      localStorage.removeItem('fsmaster-theme')
      Then reload the page
============================================ */
