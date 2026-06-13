<?php
require_once __DIR__ . '/config.php';

// Page metadata
$page_title  = SITE_NAME . ' — ' . SITE_TAGLINE;
$page_desc   = 'Palette Ébène célèbre l\'art africain et de la diaspora avec des vernissages, soirées culturelles et expositions à Paris et en Europe.';
$page_url    = SITE_URL;
$page_image  = SITE_URL . '/assets/images/og-image.jpg';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
require_once __DIR__ . '/includes/hero.php';
require_once __DIR__ . '/includes/events.php';
require_once __DIR__ . '/includes/next_event.php';
require_once __DIR__ . '/includes/about.php';
require_once __DIR__ . '/includes/instagram_feed.php';
require_once __DIR__ . '/includes/contact_section.php';
require_once __DIR__ . '/includes/footer.php';
