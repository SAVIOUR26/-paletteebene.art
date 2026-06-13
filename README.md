# Palette Ébène — Vitrine Website

Professional vitrine website for **Palette Ébène** (@palette.ebene), celebrating African and diaspora arts through cultural events in Paris and Europe.

🌐 **Live site:** https://paletteebene.art

---

## Features

- **Hero section** — Full-viewport animated landing with brand tagline
- **Events gallery** — Past events showcase with type badges and collaborator credits
- **Next event** — Live countdown timer with Revolut payment link
- **About** — Brand story with geometric African-inspired artwork
- **Instagram feed** — Embedded posts or placeholder grid linking to @palette.ebene
- **Contact form** — AJAX form with PHP mail() handler
- **Google Business & Revolut links** — Configured in `config.php`
- Mobile-first, fully responsive design
- SEO: Open Graph, Twitter Card, JSON-LD structured data
- No external CSS frameworks — pure vanilla PHP + CSS + JS

---

## Tech Stack

- **PHP 8.x** (no framework)
- Vanilla CSS with custom properties
- Vanilla JavaScript (IntersectionObserver, Fetch API)
- Google Fonts: Playfair Display + Inter
- Apache `.htaccess` for clean URL routing

---

## Project Structure

```
/
├── index.php                  # Main entrypoint & router
├── contact.php                # Contact form handler (returns JSON)
├── config.php                 # ⚙️ All site configuration
├── .htaccess                  # Apache URL rewriting
├── includes/
│   ├── nav.php                # Sticky navigation
│   ├── header.php             # <head> meta tags
│   ├── hero.php               # Hero section
│   ├── events.php             # Past events grid
│   ├── next_event.php         # Next event + countdown
│   ├── about.php              # About / brand story
│   ├── instagram_feed.php     # Instagram embed section
│   ├── contact_section.php    # Contact form + links
│   └── footer.php             # Footer
├── assets/
│   ├── css/style.css          # All styles (~600 lines)
│   ├── js/main.js             # All JS (nav, countdown, form, scroll)
│   └── images/
│       └── logo.svg           # Brand logo
```

---

## Setup & Configuration

### 1. Clone and configure

Edit `config.php` and fill in the placeholders:

```php
// Payment — get your link from revolut.me/your-username
define('REVOLUT_PAYMENT_LINK', 'https://revolut.me/YOUR_REVOLUT_LINK');

// Google Business — find it in Google Business Profile manager
define('GOOGLE_BUSINESS_URL', 'https://g.page/YOUR_BUSINESS');

// Contact email
define('CONTACT_EMAIL', 'contact@paletteebene.art');
```

### 2. Add Instagram post URLs (optional)

In `config.php`, uncomment and add real post URLs to show embedded posts:

```php
$instagram_posts = [
    'https://www.instagram.com/p/YOUR_POST_1/',
    'https://www.instagram.com/p/YOUR_POST_2/',
    'https://www.instagram.com/p/YOUR_POST_3/',
    // up to 9 posts
];
```

If left empty, the site shows a styled placeholder grid linking to the profile.

### 3. Update next event details

```php
define('NEXT_EVENT_NAME', 'Soirée Ébène Vol. III');
define('NEXT_EVENT_DATE', '2025-09-20');
define('NEXT_EVENT_TIME', '20:00');
define('NEXT_EVENT_LOCATION', 'Paris, France');
```

### 4. Mail (contact form)

The contact form uses PHP `mail()`. On the server, ensure PHP mail is configured or swap in an SMTP library (e.g., PHPMailer) in `contact.php`.

---

## Deployment at paletteebene.art

### Apache (recommended)

1. Upload all files to the document root (e.g., `/var/www/html/paletteebene.art/`)
2. Ensure `mod_rewrite` is enabled: `a2enmod rewrite && systemctl reload apache2`
3. Set `AllowOverride All` in your vhost config for `.htaccess` to work
4. Set `DEBUG_MODE` to `false` in `config.php`
5. Set correct permissions: `chmod 644 *.php includes/*.php assets/css/*.css assets/js/*.js`

### Nginx

Add to your server block:

```nginx
location / {
    try_files $uri $uri/ /index.php?$query_string;
}
location ~ \.php$ {
    fastcgi_pass unix:/var/run/php/php8.x-fpm.sock;
    fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    include fastcgi_params;
}
```

### SSL

Use Let's Encrypt: `certbot --apache -d paletteebene.art -d www.paletteebene.art`

---

## Brand Colors

| Name   | Hex       | Usage                    |
|--------|-----------|--------------------------|
| Ebony  | `#2C1810` | Background, dark surfaces |
| Gold   | `#D4A853` | Accents, CTAs, headings  |
| Cream  | `#F5F0E8` | Body text, light surfaces |

---

## License

All rights reserved — Palette Ébène © 2024-2025
