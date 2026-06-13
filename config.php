<?php
/**
 * Palette Ébène — Configuration
 * Remplissez les valeurs marquées par // Client fills in
 */

define('SITE_NAME',             'Palette Ébène');
define('SITE_URL',              'https://paletteebene.art');
define('SITE_TAGLINE',          "L'Art Qui Nous Rassemble");
define('CONTACT_EMAIL',         'contact@paletteebene.art');

// Instagram
define('INSTAGRAM_HANDLE',      'palette.ebene');
define('INSTAGRAM_USERNAME',    'palette.ebene');
define('INSTAGRAM_PROFILE_URL', 'https://www.instagram.com/palette.ebene/');
define('INSTAGRAM_ACCESS_TOKEN', ''); // Fill in after OAuth setup

// Sample Instagram post URLs (replace with real post URLs)
$instagram_posts = [
    // 'https://www.instagram.com/p/EXAMPLE1/',
    // 'https://www.instagram.com/p/EXAMPLE2/',
    // 'https://www.instagram.com/p/EXAMPLE3/',
    // Add up to 9 post URLs here
];

// Payment
define('REVOLUT_PAYMENT_LINK',  'https://revolut.me/PLACEHOLDER'); // Client fills in

// Google Business
define('GOOGLE_BUSINESS_URL',   'https://g.page/palette-ebene'); // Client fills in

// Next Event
define('NEXT_EVENT_NAME',        'Soirée des Arts — Édition Été 2025');
define('NEXT_EVENT_DATE',        '2025-09-20 20:00:00');
define('NEXT_EVENT_TIME',        '20:00');
define('NEXT_EVENT_LOCATION',    'Paris, France');
define('NEXT_EVENT_VENUE',       'TBA — Paris');
define('NEXT_EVENT_DESCRIPTION', "Une soirée exceptionnelle célébrant les arts visuels, la musique live et la culture afro-diasporique. Rejoignez-nous pour une nuit inoubliable.");
define('NEXT_EVENT_TICKET_LINK', '#contact'); // Replace with ticketing link

// Environnement
define('DEBUG_MODE', false);

// Configuration PHP
if (!DEBUG_MODE) {
    error_reporting(0);
    ini_set('display_errors', 0);
} else {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

// Timezone
date_default_timezone_set('Europe/Paris');
