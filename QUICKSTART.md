# 🚀 Quick Start Guide - FS Master Website

## ✅ What You Have

A complete, production-ready tutorial website with:
- ✅ Homepage with hero section and featured tutorials
- ✅ About page
- ✅ Contact page with form
- ✅ JavaScript tutorial page (template for other tutorials)
- ✅ Dark/Light mode toggle (persists in localStorage)
- ✅ Multi-level navigation dropdowns
- ✅ Responsive sidebar on tutorial pages
- ✅ Interactive code runner (HTML/CSS/JS)
- ✅ Syntax highlighting with Prism.js
- ✅ Fully responsive (mobile, tablet, desktop)

## 📂 Your Files

```
C:\Users\abhay\fsmaster-website\
├── index           ← Homepage
├── about           ← About page
├── contact         ← Contact page
├── README.md            ← Full documentation
├── QUICKSTART.md        ← This file
│
├── css/
│   └── style.css        ← All custom styles
│
├── js/
│   ├── theme-toggle.js  ← Dark/light mode
│   ├── navigation.js    ← Navigation menus
│   ├── sidebar.js       ← Tutorial sidebar
│   └── code-runner.js   ← Code execution
│
└── pages/
    └── javascript  ← Tutorial template
```

## 🎯 Test It Now!

### Option 1: Double-click `index`
Just open it in your browser!

### Option 2: Run a local server
```bash
# Using Python 3
cd C:\Users\abhay\fsmaster-website
python -m http.server 8000

# Then open: http://localhost:8000
```

## 🧪 Things to Try

1. **Toggle Dark/Light Mode**: Click the moon/sun button in top-right
2. **Test Navigation**: Hover over "Tutorials" dropdown (desktop)
3. **View Tutorial Page**: Click on any tutorial link
4. **Try Code Runner**: 
   - Go to pages/javascript
   - Scroll to "Try JavaScript Online"
   - Click "Run Code" button
5. **Test Mobile**: Resize browser window or use DevTools

## 📝 Next Steps

### 1. Customize Branding
- Replace "FS Master" with your brand name in all HTML files
- Update social media links in footers
- Update contact info in contact

### 2. Add More Tutorial Pages
- Copy `pages/javascript` to `pages/react`
- Update the content
- Add link to navigation menu in all HTML files

### 3. Add Your Content
- Replace placeholder tutorial content
- Add your own code examples
- Update feature cards on homepage

### 4. Before Deploying
- [ ] Update all social media links
- [ ] Update contact email/info
- [ ] Add your logo/favicon
- [ ] Test all links
- [ ] Test on real mobile devices
- [ ] Check all pages in dark mode

## 🌐 Deploy to Production

### Option 1: Netlify (Easiest)
1. Create account at netlify.com
2. Drag and drop the `fsmaster-website` folder
3. Done! You get a free .netlify.app domain

### Option 2: GitHub Pages
1. Create a GitHub repo
2. Push all files
3. Enable GitHub Pages in repo settings
4. Your site: `username.github.io/repo-name`

### Option 3: Traditional Hosting
1. Use FTP/SFTP client (FileZilla)
2. Upload all files to your web server
3. Make sure index is in the root directory

## 📖 Learn More

- **Full Documentation**: See README.md
- **Bootstrap Docs**: https://getbootstrap.com/docs/5.3/
- **Bootstrap Icons**: https://icons.getbootstrap.com/

## 💡 Quick Tips

1. **Add new pages**: Copy existing HTML, change content
2. **Change colors**: Edit CSS variables in `css/style.css`
3. **Modify menu**: Edit navigation in all HTML files
4. **Debug issues**: Open browser console (F12)

## 🆘 Common Issues

**Q: Dark mode doesn't work?**
A: Clear browser cache, check console for errors

**Q: Code runner not working?**
A: Make sure you're on the javascript page and scripts are loaded

**Q: Dropdowns not showing?**
A: Check that Bootstrap JS is loaded before custom scripts

**Q: Mobile sidebar not appearing?**
A: Look for the menu icon in the navbar on small screens

## 🎓 File Purposes

| File | Purpose |
|------|---------|
| `index` | Homepage with hero and featured tutorials |
| `about` | About page (mission, what you offer) |
| `contact` | Contact form and info |
| `pages/javascript` | Tutorial template with sidebar & code runner |
| `css/style.css` | All custom CSS, theme variables |
| `js/theme-toggle.js` | Dark/light mode functionality |
| `js/navigation.js` | Multi-level dropdown enhancements |
| `js/sidebar.js` | Tutorial sidebar scrollspy & navigation |
| `js/code-runner.js` | Interactive code execution in iframe |

## ✨ Features Explained

### Dark/Light Mode
- Automatically detects system preference
- Saves user choice in localStorage
- Smooth transitions between modes
- Works with Bootstrap's native dark mode

### Multi-level Navigation
- Hover to open on desktop
- Click to open on mobile
- Supports unlimited nesting
- Keyboard accessible

### Tutorial Sidebar
- Auto-highlights current section (scrollspy)
- Smooth scrolling to sections
- Off-canvas on mobile
- Remembers scroll position

### Code Runner
- Sandboxed iframe for security
- Runs HTML, CSS, and JavaScript
- Shows console.log output
- Displays errors nicely
- Keyboard shortcuts (Ctrl+Enter to run)

## 🎉 You're Ready!

Your website is fully functional and production-ready. Just customize the content and deploy!

**Happy coding! 🚀**
