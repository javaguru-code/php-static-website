# Full Stack Master Website (fsmaster.in)

A modern, production-ready tutorial website built with HTML, CSS, Bootstrap 5.3+, and vanilla JavaScript. Features dark/light mode toggle, multilevel navigation, responsive sidebar, syntax highlighting, and an interactive code runner.

## 🌟 Features

### Core Features
- ✅ **Responsive Design**: Works seamlessly on desktop, tablet, and mobile devices
- ✅ **Dark/Light Mode**: Automatic theme detection with manual toggle and localStorage persistence
- ✅ **Multi-level Navigation**: Bootstrap-powered dropdown menus with hover support (desktop) and click support (mobile)
- ✅ **Tutorial Sidebar**: Persistent left sidebar navigation on tutorial pages with scrollspy
- ✅ **Syntax Highlighting**: Prism.js integration for beautiful code blocks
- ✅ **Interactive Code Runner**: In-browser HTML/CSS/JS sandbox with live preview
- ✅ **Accessibility**: ARIA attributes, keyboard navigation, and semantic HTML5
- ✅ **SEO Ready**: Proper meta tags, semantic structure, and breadcrumbs

### Technical Features
- No build process required (pure HTML/CSS/JS)
- Bootstrap 5.3+ with native dark mode support
- Modular JavaScript with IIFE pattern
- CSS variables for easy theming
- Cross-browser compatible
- Print-friendly styles

---

## 📁 File Structure

```
fsmaster-website/
├── index              # Homepage
├── about              # About page
├── contact            # Contact page
├── README.md              # This file
│
├── css/
│   └── style.css          # Custom styles and theme variables
│
├── js/
│   ├── theme-toggle.js    # Dark/light mode switching
│   ├── navigation.js      # Multi-level dropdown enhancement
│   ├── sidebar.js         # Tutorial sidebar & scrollspy
│   └── code-runner.js     # Interactive code execution
│
├── pages/
│   └── javascript    # Example tutorial page (template)
│
└── assets/
    └── (images, icons, etc.)
```

---

## 🚀 Quick Start

### 1. **Open in Browser**
Simply open `index` in a modern web browser. No build process or server required!

```bash
# Option 1: Double-click index

# Option 2: Use a local server (recommended for development)
# Python 3
python -m http.server 8000

# Python 2
python -m SimpleHTTPServer 8000

# Node.js (with npx)
npx http-server

# Then visit: http://localhost:8000
```

### 2. **Deploy to Production**
Upload all files to your web hosting:
- Via FTP/SFTP
- Via cPanel File Manager
- Via Git deployment (Netlify, Vercel, GitHub Pages)

**Note**: Update social media links in footer and contact information in `contact` before deploying.

---

## 📖 How to Use

### Adding New Tutorial Pages

1. **Copy the template**: Duplicate `pages/javascript` and rename it
2. **Update the content**: 
   - Change `<title>` and meta description
   - Update breadcrumb navigation
   - Replace tutorial content in `<main>`
   - Update sidebar navigation links
3. **Update navigation**: Add the new page to nav dropdowns in all HTML files
4. **Test**: Check dark/light mode, sidebar scrollspy, and mobile responsiveness

**Example**:
```html
<!-- pages/react -->
<title>React Tutorial - Full Stack Master</title>
...
<h1>React Tutorial</h1>
<section id="introduction">
    <h2>Introduction to React</h2>
    <p>React is a JavaScript library...</p>
</section>
```

### Extending the Navigation Menu

1. **Open any HTML file** (e.g., `index`)
2. **Find the navigation section** (look for `<!-- Tutorials Dropdown -->`)
3. **Add new menu items**:

```html
<!-- Add a new top-level dropdown -->
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
        Your Category
    </a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="pages/yourpage">Your Page</a></li>
    </ul>
</li>

<!-- OR add to existing dropdown -->
<li class="dropend">
    <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-star"></i> Your Subcategory
    </a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="pages/topic1">Topic 1</a></li>
        <li><a class="dropdown-item" href="pages/topic2">Topic 2</a></li>
    </ul>
</li>
```

4. **Copy the navigation** to all other HTML files for consistency

### Customizing Colors & Themes

#### CSS Variables (Light Mode)
Edit `css/style.css`:
```css
:root {
    --hero-gradient-start: #667eea;    /* Hero section start color */
    --hero-gradient-end: #764ba2;      /* Hero section end color */
    --code-bg: #f8f9fa;                /* Code block background */
    --sidebar-bg: #f8f9fa;             /* Sidebar background */
}
```

#### CSS Variables (Dark Mode)
```css
[data-bs-theme="dark"] {
    --hero-gradient-start: #434343;
    --hero-gradient-end: #000000;
    --code-bg: #1e1e1e;
    --sidebar-bg: #212529;
}
```

#### Bootstrap Colors
Bootstrap's theme colors are controlled via its CSS. To customize further, override Bootstrap variables or add custom utility classes.

---

## 🎨 Customization Guide

### Changing the Logo/Brand
Replace in all HTML files:
```html
<a class="navbar-brand fw-bold" href="index">
    <i class="bi bi-code-square"></i> Your Brand
</a>
```

### Adding Social Media Links
Update footer in all HTML files:
```html
<a href="https://github.com/yourusername" class="text-decoration-none me-3">
    <i class="bi bi-github"></i>
</a>
```

### Modifying Code Runner Languages
The code runner currently supports HTML, CSS, and JavaScript. To add more:
1. Add new tabs in `pages/javascript`
2. Extend `code-runner.js` to handle additional languages
3. Consider using external APIs for server-side languages (e.g., Python, Java)

### Changing Syntax Highlighter Theme
In tutorial pages, change Prism.js theme:
```html
<!-- Replace this line -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-tomorrow.min.css" rel="stylesheet" />

<!-- With another theme, e.g., -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-okaidia.min.css" rel="stylesheet" />
```

Available themes: prism, prism-dark, prism-funky, prism-okaidia, prism-twilight, prism-coy, prism-solarizedlight, prism-tomorrow

---

## ⚙️ How It Works

### Dark/Light Mode (`theme-toggle.js`)
1. Checks `localStorage` for saved theme preference
2. Falls back to system preference (`prefers-color-scheme`)
3. Applies theme via `data-bs-theme` attribute on `<html>`
4. Bootstrap 5.3+ handles color changes automatically
5. Custom CSS variables handle additional elements

### Navigation (`navigation.js`)
- Desktop: Hover to open dropdowns (CSS + JS enhancement)
- Mobile: Click to toggle dropdowns
- Keyboard navigation: Enter/Space/Arrow keys
- Auto-close on mobile when link clicked
- Active page highlighting

### Sidebar (`sidebar.js`)
- **Scrollspy**: Highlights current section based on scroll position
- **Smooth scrolling**: Animates to section on click
- **Persistence**: Remembers sidebar scroll position via `sessionStorage`
- **Mobile**: Off-canvas sidebar with Bootstrap
- **Keyboard shortcuts**: Alt+Up/Down to navigate sections

### Code Runner (`code-runner.js`)
- Combines HTML/CSS/JS inputs into a complete document
- Injects code into sandboxed `<iframe>`
- Security: `sandbox="allow-scripts"` prevents malicious code from accessing parent page
- Error handling: Catches and displays JS errors
- Console output: Overrides `console.log` to display in iframe
- Keyboard shortcuts: Ctrl+Enter to run, Ctrl+Shift+C to clear

---

## 🔧 Browser Compatibility

| Browser | Version | Supported |
|---------|---------|-----------|
| Chrome | 90+ | ✅ |
| Firefox | 88+ | ✅ |
| Safari | 14+ | ✅ |
| Edge | 90+ | ✅ |
| Opera | 76+ | ✅ |

**Note**: Bootstrap 5.3+ requires modern browsers. IE11 is not supported.

---

## 📱 Responsive Breakpoints

Following Bootstrap 5.3+ breakpoints:

| Size | Width | Behavior |
|------|-------|----------|
| xs | <576px | Stacked layout, off-canvas sidebar |
| sm | ≥576px | Stacked layout |
| md | ≥768px | Partial grid layout |
| lg | ≥992px | Full desktop layout, persistent sidebar |
| xl | ≥1200px | Wider content |
| xxl | ≥1400px | Maximum width |

---

## ⌨️ Keyboard Shortcuts

### Global
- **Tab**: Navigate between interactive elements
- **Enter/Space**: Activate buttons and links

### Navigation Dropdowns
- **Enter/Space**: Open/close dropdown
- **Arrow Down**: Navigate to next item
- **Arrow Up**: Navigate to previous item
- **Escape**: Close dropdown

### Tutorial Sidebar
- **Alt + Arrow Up**: Previous section
- **Alt + Arrow Down**: Next section

### Code Runner
- **Ctrl/Cmd + Enter**: Run code
- **Ctrl/Cmd + Shift + C**: Clear code
- **Tab**: Insert 4 spaces (in code textarea)

---

## 🛠️ Troubleshooting

### Dark Mode Not Working
1. Check browser console for errors
2. Ensure `theme-toggle.js` is loaded
3. Verify `data-bs-theme` attribute on `<html>`
4. Clear browser cache and localStorage

### Multi-level Dropdowns Not Showing
1. Ensure Bootstrap JS is loaded correctly
2. Check `navigation.js` is included
3. Verify dropdown HTML structure matches Bootstrap 5.3+ format
4. Test in different browsers

### Code Runner Not Executing
1. Check browser console for errors
2. Ensure iframe has `sandbox="allow-scripts"`
3. Verify all input fields have correct IDs
4. Test with simple code first

### Sidebar Scrollspy Not Working
1. Ensure section IDs match sidebar href attributes
2. Check `sidebar.js` is loaded
3. Verify tutorial page has correct HTML structure
4. Check browser console for errors

---

## 📊 Performance Tips

1. **Optimize images**: Use WebP format, lazy loading
2. **Minify assets**: Minify CSS/JS for production
3. **CDN**: Use CDNs for Bootstrap, icons, and libraries
4. **Caching**: Set proper cache headers on server
5. **Remove unused**: Comment out unused Bootstrap components

---

## 🔐 Security Considerations

### Code Runner Sandbox
- Uses `sandbox="allow-scripts"` attribute
- Prevents access to parent page
- No form submission allowed
- No top-level navigation
- Isolated localStorage/sessionStorage

### XSS Protection
- All user input is escaped before display
- Error messages sanitized
- Code runner uses iframe isolation

### Best Practices
- Always validate/sanitize user input if you add forms
- Keep Bootstrap and dependencies updated
- Use HTTPS in production
- Implement CSP headers on server

---

## 📚 Dependencies

### Required (Loaded via CDN)
- **Bootstrap 5.3.3**: CSS and JS
- **Bootstrap Icons 1.11.3**: Icon font
- **Prism.js 1.29.0**: Syntax highlighting (tutorial pages only)

### Optional
- Any HTTP server for local development
- Git for version control

---

## 🎯 Future Enhancements

Possible additions:
- [ ] Search functionality
- [ ] User authentication
- [ ] Comment system
- [ ] Dark mode for code runner output
- [ ] More code runner languages (Python, Java via API)
- [ ] Progress tracking
- [ ] Quiz/assessment system
- [ ] PDF export for tutorials
- [ ] RSS feed
- [ ] Sitemap generation

---

## 📝 License

This project is created for educational purposes. Feel free to use and modify as needed for your tutorials website.

---

## 🙋 Support

For issues or questions:
1. Check the troubleshooting section above
2. Review code comments in individual files
3. Check Bootstrap 5.3 documentation: https://getbootstrap.com/docs/5.3/
4. Open an issue or contact via the Contact page

---

## 🎓 Credits

- **Bootstrap**: https://getbootstrap.com/
- **Bootstrap Icons**: https://icons.getbootstrap.com/
- **Prism.js**: https://prismjs.com/
- **Inspiration**: fsmaster.in

---

## 📅 Version History

### v1.0.0 (Current)
- ✅ Initial release
- ✅ Homepage, About, Contact pages
- ✅ JavaScript tutorial page template
- ✅ Dark/light mode toggle
- ✅ Multi-level navigation
- ✅ Tutorial sidebar with scrollspy
- ✅ Interactive code runner
- ✅ Fully responsive design
- ✅ Accessibility features

---

**Built with ❤️ for the programming education community**
