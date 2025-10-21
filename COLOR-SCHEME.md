# FS Master - Color Scheme Documentation

## 🎨 Color Palette

### Light Mode Background Gradient
Beautiful multi-color gradient for hero sections and backgrounds:
- **Start:** `#08495e` (Deep Teal)
- **Mid 1:** `#86f0ec` (Bright Cyan)
- **Mid 2:** `#2d8ded` (Vibrant Blue)
- **End:** `#9d2ded` (Purple Magenta)

**CSS Usage:**
```css
background: linear-gradient(135deg, 
    #08495e 0%, 
    #86f0ec 25%, 
    #2d8ded 50%, 
    #9d2ded 100%);
```

### Dark Mode Background
Pure black gradient for elegant dark mode:
- **Background:** `#000000` to `#1a1a1a` (Black gradient)

### Accent Colors (Text, Headings, Buttons)
Vibrant pink and red for standout elements:
- **Primary Pink:** `#fa1ed2` (Hot Pink)
- **Light Pink:** `#f28ab4` (Soft Pink)
- **Accent Red:** `#d9071c` (Crimson Red)

**CSS Usage:**
```css
/* Gradient for buttons and headings */
background: linear-gradient(135deg, #fa1ed2, #d9071c);
```

## 📐 Design System

### Where Colors Are Applied

#### 1. **Hero Sections**
- Light mode: Beautiful 4-color gradient (`#08495e` → `#86f0ec` → `#2d8ded` → `#9d2ded`)
- Dark mode: Black gradient with subtle variations
- Text: White with shadow for readability

#### 2. **Headings (h1-h6)**
- Gradient text effect: Pink (`#fa1ed2`) to Red (`#d9071c`)
- Bold, eye-catching typography
- Exception: Hero headings remain white

#### 3. **Buttons**
- **Primary Buttons:** Gradient from pink to red
- **Hover Effect:** Reverses gradient and lifts with pink shadow
- **Outline Buttons:** Pink border that fills on hover

#### 4. **Links & Navigation**
- Default color: `#fa1ed2` (Hot Pink)
- Hover color: `#d9071c` (Crimson Red)
- Active nav items: Gradient background with white text

#### 5. **Cards**
- Hover: Gradient border (pink → light pink → red)
- Shadow: Pink-tinted glow
- Title: Gradient text effect

#### 6. **Code Blocks**
- Border: Subtle pink tint
- Header: Light gradient background
- Inline code: Pink background with gradient

#### 7. **Icons**
- Primary icons: `#fa1ed2`
- Hover: Scale and rotate animation
- Accent variations using the pink/red palette

#### 8. **Alerts**
- Info: Pink gradient background
- Warning: Red gradient background
- Border: Solid accent color on left

## 🎭 Theme Support

### Light Mode
```css
--hero-gradient-start: #08495e;
--hero-gradient-mid-1: #86f0ec;
--hero-gradient-mid-2: #2d8ded;
--hero-gradient-end: #9d2ded;

--accent-pink: #fa1ed2;
--accent-pink-light: #f28ab4;
--accent-red: #d9071c;
```

### Dark Mode
```css
--hero-gradient-start: #000000;
--hero-gradient-mid-1: #0a0a0a;
--hero-gradient-mid-2: #1a1a1a;
--hero-gradient-end: #000000;

/* Accent colors remain the same for consistency */
--accent-pink: #fa1ed2;
--accent-pink-light: #f28ab4;
--accent-red: #d9071c;
```

## ✨ Special Effects

### Animations
- **Hero Section:** Pulsing radial gradient overlay (15s cycle)
- **Text:** Fade-in-up animation on page load
- **Buttons:** Shine effect on hover
- **Cards:** Lift and scale with gradient border reveal
- **Icons:** Scale and rotate on card hover

### Gradients Used
1. **Hero Background:** 4-color gradient (teal → cyan → blue → purple)
2. **Buttons:** 2-color gradient (pink → red)
3. **Headings:** 2-color gradient text (pink → red)
4. **Card Borders:** 3-color gradient (pink → light pink → red)
5. **Hover Effects:** Translucent gradient backgrounds

### Shadows
- **Cards:** Pink-tinted shadows (`rgba(250, 30, 210, 0.3)`)
- **Buttons:** Pink glow on hover
- **Text:** Subtle shadow in hero for readability

## 🚀 Implementation

All colors are defined as CSS custom properties in `css/style.css`:

```css
:root {
    /* Light mode */
    --hero-gradient-start: #08495e;
    --hero-gradient-mid-1: #86f0ec;
    --hero-gradient-mid-2: #2d8ded;
    --hero-gradient-end: #9d2ded;
    
    --accent-pink: #fa1ed2;
    --accent-pink-light: #f28ab4;
    --accent-red: #d9071c;
}

[data-bs-theme="dark"] {
    /* Dark mode */
    --hero-gradient-start: #000000;
    --hero-gradient-mid-1: #0a0a0a;
    --hero-gradient-mid-2: #1a1a1a;
    --hero-gradient-end: #000000;
    
    /* Accents stay the same */
}
```

## 📱 Responsive Design

The color scheme works seamlessly across all devices:
- Colors remain consistent
- Gradients scale properly
- Hover effects disabled on touch devices
- Dark mode toggle available on all pages

## 🎯 Brand Identity

This vibrant color scheme creates a modern, energetic brand identity:
- **Professional:** Deep teal and blue base
- **Dynamic:** Bright cyan and purple accents
- **Bold:** Hot pink and crimson for CTAs
- **Memorable:** Unique gradient combinations

Perfect for a tech education platform that wants to stand out!
