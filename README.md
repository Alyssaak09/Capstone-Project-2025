# Fill My Cup of Faith (Capstone Fall 2025)

**Fill My Cup of Faith** is a Christian-based website created to uplift individuals—especially women and men of faith—through Bible studies, devotionals, podcasts, and faith-inspired products. It fosters spiritual growth, community, and encouragement.

---

## Core Features

- **Content Types**:
  - **Blog Posts** – Articles on Christian life
  - **Bible Studies** – Structured Scripture guides
  - **Devotionals** – Daily/weekly encouragement
  - **Podcasts** – Faith-based audio/video content
  - **Resources** – Tools, downloads, book recs
  - **Community** – Forums, events, fellowships
  - **Products** – Mugs, stationery, décor (via WooCommerce)

---

## Roles & Access

### Admin
- Manage all content, products, and design
- Upload podcasts, control UX
- (Optional) Schedule posts, view analytics

### User (Visitor)
- Browse/share content
- Subscribe via email (no login)
- (Optional) Comment or join forums

### Customer (Shopper)
- Browse and buy products (guest checkout)
- (Optional) Create account, get updates

---

## Tech Stack

- **Platform**: WordPress (Child theme of Astra)  
- **Hosting**: Web Hosting Canada  
- **Stack**: LAMP (Linux, Apache, MySQL, PHP)  
- **Plugins**:
  - WooCommerce (E-commerce)
  - Printful (Print-on-demand)
  - PowerPress / Podlove (Podcast)
  - Mailchimp (Newsletter)
  - AddThis (Social sharing)
  - MemberPress / WP-Members (Access control)

---

## Theme Dev

- **Child Theme** built on the default **WordPress Astra** theme
- Allows custom styling, layout overrides, and extended functionality
- **Folder Structure**:

  - /assets/ → Custom CSS, JS, images
  - /template-parts/ → Modified or additional components
  - /inc/ → Custom PHP functions
  - style.css → Child theme metadata & overrides
  - functions.php → Enqueue scripts, setup child theme
---

- **Naming Conventions**:
- `lowercase-hyphenated` filenames (e.g., `page-about.php`)
- Prefix functions (e.g., `faiththeme_custom_footer()`)
- Follow WordPress hierarchy and naming for overrides

---

## Status: In Development
