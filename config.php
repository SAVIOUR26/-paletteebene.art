<?php
/**
 * Palette Ébène — Configuration
 * Remplissez les valeurs marquées par // Client fills in
 */

define('SITE_NAME',             'Palette Ébène');
define('SITE_URL',              'https://paletteebene.art');
define('CONTACT_EMAIL',         'contact@paletteebene.art');

// Instagram API — obtenez votre token sur developers.facebook.com
define('INSTAGRAM_ACCESS_TOKEN', ''); // Client fills in
define('INSTAGRAM_USERNAME',    'palette.ebene');

// Liens externes — remplacez PLACEHOLDER par vos vraies URLs
define('REVOLUT_PAYMENT_LINK',  'https://revolut.me/PLACEHOLDER'); // Client fills in
define('GOOGLE_BUSINESS_URL',   'https://g.page/palette-ebene');   // Client fills in

// Prochain événement
define('NEXT_EVENT_DATE',       '2025-09-20 20:00:00');
define('NEXT_EVENT_NAME',       'Soirée Ébène Vol. III');
define('NEXT_EVENT_VENUE',      'TBA — Paris');

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
