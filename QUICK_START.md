# Quick Start Guide - PHP Website

## 🚀 Get Started in 3 Minutes

### Step 1: Start PHP Server
```bash
cd E:\production\fsmaster\static\html\static-fsmaster
php -S localhost:8000
```

### Step 2: Open Browser
Navigate to: `http://localhost:8000`

### Step 3: Test Features
✅ Homepage loads
✅ Navigation works
✅ Theme toggle works
✅ All pages accessible

## 📁 File Structure

```
static-fsmaster/
├── index.php          ← Homepage
├── about.php          ← About page
├── contact.php        ← Contact page
├── 404.php            ← Error page
├── includes/          ← Reusable components
│   ├── header.php     ← Navigation header
│   └── footer.php     ← Footer with scripts
├── api/               ← API endpoints
│   └── contact.php    ← Contact form handler
├── tutorials/         ← Tutorial pages (PHP)
├── interview/         ← Interview pages (PHP)
├── css/               ← Stylesheets
├── js/                ← JavaScript files
└── .htaccess          ← URL routing
```

## 🔧 Contact Form Setup

1. Create `.env` file in root:
```env
SENDGRID_API_KEY=your_key_here
EMAIL_FROM=noreply@fsmaster.in
```

2. Test contact form:
   - Go to: `http://localhost:8000/contact`
   - Fill form and submit
   - Check console for logs

## 📝 How to Edit Pages

### Edit Homepage (index.php)
```php
<?php
$page_title = 'Your Custom Title';
include 'includes/header.php';
?>

<!-- Your content here -->

<?php include 'includes/footer.php'; ?>
```

### Edit Navigation (includes/header.php)
Edit once, changes apply to all pages!

### Edit Footer (includes/footer.php)
Edit once, changes apply to all pages!

## 🎨 Styles & Scripts

All original styles and scripts are preserved:
- ✅ Bootstrap 5.3.3
- ✅ Bootstrap Icons
- ✅ Custom CSS (css/style.css)
- ✅ Theme Toggle (js/theme-toggle.js)
- ✅ Navigation (js/navigation.js)

## 🔗 URLs

### Clean URLs (Extensionless)
- `/` → index.php
- `/about` → about.php
- `/contact` → contact.php
- `/tutorials/java/core-java` → tutorials/java/core-java.php

### API Endpoints
- `POST /api/contact` → api/contact.php

## ✅ Everything Works

✅ All 174 PHP files created
✅ All styles maintained
✅ All JavaScript working
✅ Navigation functional
✅ Theme toggle active
✅ Contact form ready
✅ SEO friendly URLs
✅ Mobile responsive

## 📚 Need More Info?

- **Full Documentation**: `PHP_CONVERSION_README.md`
- **Completion Summary**: `CONVERSION_COMPLETE.txt`
- **Conversion Script**: `convert-to-php.ps1`

## 🎉 You're Ready!

Your website is now fully PHP-based with all original features intact. Start developing! 🚀
