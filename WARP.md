# WARP.md

This file provides guidance to WARP (warp.dev) when working with code in this repository.

## Project Overview

This is a static tutorial website for Full Stack Master (fsmaster.in) - a modern, production-ready educational platform built with HTML, CSS, Bootstrap 5.3+, and vanilla JavaScript. The website features comprehensive programming tutorials across multiple technologies with dark/light mode support, responsive design, and interactive code execution.

## Architecture Overview

### Core Structure
- **Static Website**: Pure HTML/CSS/JS with no build process required
- **Bootstrap 5.3+ Framework**: Provides responsive design and dark mode support
- **Modular JavaScript**: IIFE pattern for component isolation
- **CSS Variables**: Custom theming system for consistent styling
- **Multi-level Navigation**: Bootstrap-powered dropdown menus with hover/click support

### Component Architecture
1. **Theme System** (`js/theme-toggle.js`, CSS variables)
   - Automatic system preference detection
   - localStorage persistence
   - Bootstrap native dark mode integration

2. **Navigation System** (`js/navigation.js`)
   - Multi-level dropdown menus
   - Desktop hover + mobile click support
   - Keyboard accessibility

3. **Interactive Code Runner** (`js/code-runner.js`)
   - CodeMirror integration for syntax highlighting
   - Sandboxed iframe execution
   - HTML/CSS/JS live preview

4. **Tutorial System**
   - Sidebar navigation with scrollspy
   - Breadcrumb navigation
   - Responsive off-canvas mobile menu

## Development Commands

### Local Development
```powershell
# Option 1: Simple file serving (double-click index)
# Works directly in browser - no server required

# Option 2: Local HTTP server (recommended for development)
# Python 3
python -m http.server 8000

# Python 2  
python -m SimpleHTTPServer 8000

# Node.js
npx http-server

# Then visit: http://localhost:8000
```

### Page Generation
```powershell
# Generate all tutorial pages automatically
python generate_pages.py

# Update navigation across all pages
python sync_navbars.py

# Update navbar paths for tutorials
python update_navbars.py
```

### File Management
```powershell
# No build process - direct file editing
# CSS: Edit css/style.css for styling changes
# JS: Edit individual component files in js/ directory
# HTML: Edit templates or use Python generators
```

## File Structure & Organization

```
static-fsmaster/
├── index              # Homepage with hero and featured tutorials
├── about              # About page
├── contact            # Contact page with form
├── css/
│   ├── style.css          # Custom styles with CSS variables
│   └── code-editor.css    # Code runner specific styles
├── js/
│   └── code-runner.js     # Interactive code execution system
├── tutorials/             # Generated tutorial pages
│   ├── java/              # Java technology tutorials
│   ├── mern-stack/        # MEAN/MERN stack tutorials  
│   ├── web-basics/        # HTML/CSS/JS fundamentals
│   ├── tools/             # Development tools
│   └── interview/         # Interview preparation
├── pages/                 # Legacy folder (can be deleted)
├── generate_pages.py      # Automated page generation
├── sync_navbars.py        # Navigation synchronization
└── update_navbars.py      # Navbar path updates
```

## Key Development Patterns

### CSS Architecture
- **CSS Variables**: All theming done through CSS custom properties in `:root` and `[data-bs-theme="dark"]`
- **Utility Classes**: Custom utility classes complement Bootstrap's system
- **Component Scoping**: Each major component has dedicated CSS sections
- **Responsive Design**: Mobile-first approach with Bootstrap breakpoints

### JavaScript Patterns
- **IIFE Pattern**: Each component wrapped in immediately invoked function expressions
- **Event Delegation**: Efficient event handling for dynamic content
- **Theme Management**: Automatic detection and manual toggle with localStorage
- **Modular Architecture**: Each JS file handles specific functionality

### HTML Template System
- **Python Generators**: Use `generate_pages.py` to create consistent page structures
- **Navigation Sync**: `sync_navbars.py` ensures consistent navigation across all pages
- **Component Reuse**: Consistent header/footer/sidebar patterns across pages

## Content Management

### Adding New Tutorials
1. **Using Python Script** (Recommended):
   ```python
   # Edit PAGES dictionary in generate_pages.py
   'category': [
       ('filename', 'Title', 'Description'),
   ]
   # Run: python generate_pages.py
   ```

2. **Manual Creation**:
   - Copy existing tutorial page
   - Update title, meta description, content
   - Add to navigation dropdowns
   - Run `sync_navbars.py` to update all pages

### Navigation Updates
- Edit navigation in `index` (master template)
- Run `sync_navbars.py` to propagate to all pages
- Multi-level dropdowns support unlimited nesting

### Styling Customization
```css
/* Light mode colors */
:root {
    --hero-gradient-start: #08495e;
    --accent-pink: #fa1ed2;
    --accent-red: #d9071c;
}

/* Dark mode colors */
[data-bs-theme="dark"] {
    --hero-gradient-start: #000000;
    /* Same accent colors for consistency */
}
```

## Browser Compatibility & Performance

### Supported Browsers
- Chrome 90+, Firefox 88+, Safari 14+, Edge 90+
- Bootstrap 5.3+ requirement (IE11 not supported)

### Performance Features
- No build process overhead
- CDN-delivered dependencies (Bootstrap, icons, Prism.js)
- Optimized CSS with minimal custom code
- Lazy-loaded syntax highlighting
- Efficient JavaScript with minimal DOM manipulation

## Deployment

### Static Hosting (Recommended)
```powershell
# Netlify (drag & drop or CLI)
netlify deploy --prod

# Vercel
vercel --prod

# GitHub Pages  
git push origin main
# Enable GitHub Pages in repo settings
```

### Traditional Hosting
- Upload entire directory via FTP/SFTP
- Ensure index is in web root
- No server-side requirements

## Testing & Quality Assurance

### Manual Testing Checklist
- [ ] Dark/light mode toggle functionality
- [ ] Multi-level navigation on desktop and mobile
- [ ] Tutorial sidebar navigation and scrollspy
- [ ] Code runner execution and output
- [ ] Responsive design across breakpoints
- [ ] All internal links working
- [ ] Form submissions (contact page)

### Cross-browser Testing
- Test in Chrome, Firefox, Safari, Edge
- Check mobile responsiveness on real devices
- Verify accessibility with keyboard navigation
- Test with screen readers for ARIA compliance

### Performance Testing
- Check page load speeds
- Verify CDN resource loading
- Test with slow network connections
- Monitor Core Web Vitals

## Security Considerations

### Code Runner Sandbox
- Uses `sandbox="allow-scripts"` attribute for iframe isolation
- Prevents access to parent page and cross-origin requests
- User code executed in completely isolated environment

### Content Security
- All user input properly escaped
- No server-side code execution
- Static file serving only
- HTTPS recommended for production

## Future Enhancements

### Potential Additions
- Search functionality across tutorials
- User progress tracking system
- Interactive quiz/assessment features
- PDF export capabilities
- Comment/discussion system
- Advanced code runner with more languages

### Technical Improvements
- Service worker for offline functionality
- PWA capabilities
- Advanced code completion
- Real-time collaboration features
- Analytics integration

## Troubleshooting

### Common Issues
- **Dark mode not persisting**: Clear localStorage, check theme-toggle.js loading
- **Navigation dropdowns not working**: Ensure Bootstrap JS loads before custom scripts
- **Code runner not executing**: Verify iframe sandbox attribute and script loading
- **Mobile sidebar not showing**: Check offcanvas ID matches button target
- **Broken links after changes**: Run sync_navbars.py to update navigation

### Debugging Tools
- Browser DevTools Console for JavaScript errors
- Network tab for failed resource loading
- Responsive design mode for mobile testing
- Accessibility inspector for ARIA compliance