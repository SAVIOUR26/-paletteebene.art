<?php
/**
 * Palette Ébène — Site Configuration
 * Fill in the constants below before deployment.
 */

define('SITE_NAME', 'Palette Ébène');
define('SITE_URL', 'https://paletteebene.art');
define('SITE_TAGLINE', "L'Art Qui Nous Rassemble");
define('CONTACT_EMAIL', 'contact@paletteebene.art');

// Instagram API — obtain from developers.facebook.com
define('INSTAGRAM_ACCESS_TOKEN', ''); // Client fills in
define('INSTAGRAM_USERNAME', 'palette.ebene');
define('INSTAGRAM_PROFILE_URL', 'https://www.instagram.com/palette.ebene/');

// Payment & Business links — client fills in
define('REVOLUT_PAYMENT_LINK', 'https://revolut.me/PLACEHOLDER'); // Client fills in
define('GOOGLE_BUSINESS_URL', 'https://g.page/palette-ebene');    // Client fills in

// Next event details
define('NEXT_EVENT_DATE',  '2025-09-20 20:00:00');
define('NEXT_EVENT_NAME',  'Soirée Ébène Vol. III');
define('NEXT_EVENT_VENUE', 'TBA — Paris');
define('NEXT_EVENT_TIME',  '20:00');
define('NEXT_EVENT_DESCRIPTION', "Une soirée exceptionnelle célébrant les arts visuels, la musique live et la culture afro-diasporique. Rejoignez-nous pour une nuit inoubliable.");
define('NEXT_EVENT_TICKET_LINK', '#contact');

// CSRF session name
define('CSRF_TOKEN_NAME', 'pe_csrf_token');

// Mail settings
define('MAIL_FROM_NAME',  'Palette Ébène');
define('MAIL_FROM_EMAIL', 'noreply@paletteebene.art');

// Debug mode — set to false in production
define('DEBUG_MODE', false);

// Timezone
date_default_timezone_set('Europe/Paris');

// Error reporting
if (!DEBUG_MODE) {
    error_reporting(0);
    ini_set('display_errors', 0);
} else {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

// Sample Instagram post URLs (replace with real post URLs)
$instagram_posts = [
    // 'https://www.instagram.com/p/EXAMPLE1/',
    // 'https://www.instagram.com/p/EXAMPLE2/',
    // 'https://www.instagram.com/p/EXAMPLE3/',
];
