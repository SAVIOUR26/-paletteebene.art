<?php
require_once 'config.php';

// Route handling — all requests go here via .htaccess
$page = $_GET['page'] ?? 'home';
$allowed_pages = ['home', 'events', 'about', 'contact'];
if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Palette Ébène — <?= htmlspecialchars(SITE_TAGLINE) ?> — Vernissages, soirées culturelles et expositions afro-diasporiques à Paris.">
    <meta name="theme-color" content="#2C1810">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars(SITE_NAME) ?> — <?= htmlspecialchars(SITE_TAGLINE) ?>">
    <meta property="og:description" content="Arts africains et de la diaspora, célébrés avec élégance. Vernissages, soirées culturelles et expositions à Paris.">
    <meta property="og:image" content="<?= SITE_URL ?>/assets/images/og-image.jpg">
    <meta property="og:url" content="<?= SITE_URL ?>">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:site_name" content="<?= htmlspecialchars(SITE_NAME) ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars(SITE_NAME) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars(SITE_TAGLINE) ?> — Arts africains et de la diaspora.">

    <!-- Canonical -->
    <link rel="canonical" href="<?= SITE_URL ?>">

    <!-- Favicon (SVG inline data URI) -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Ccircle cx='32' cy='32' r='30' fill='%232C1810' stroke='%23D4A853' stroke-width='2'/%3E%3Cellipse cx='34' cy='36' rx='18' ry='14' fill='%232C1810' stroke='%23D4A853' stroke-width='1.5'/%3E%3Ccircle cx='24' cy='28' r='5' fill='%231a0f0a'/%3E%3Ccircle cx='36' cy='26' r='4' fill='%23D4A853'/%3E%3Ccircle cx='44' cy='32' r='3.5' fill='%238B2020'/%3E%3Ccircle cx='42' cy='40' r='3.5' fill='%235C1E7A'/%3E%3Ccircle cx='34' cy='44' r='3' fill='%231A6B6B'/%3E%3Ctext x='34' y='38' font-family='Georgia' font-size='10' font-weight='bold' fill='%23D4A853' text-anchor='middle' dominant-baseline='middle'%3EPE%3C/text%3E%3C/svg%3E">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400;1,700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title><?= htmlspecialchars(SITE_NAME) ?> — <?= htmlspecialchars(SITE_TAGLINE) ?></title>
</head>
<body class="page-<?= htmlspecialchars($page) ?>">

<?php include 'includes/nav.php'; ?>

<?php if ($page === 'home'): ?>
    <?php include 'includes/hero.php'; ?>
    <?php include 'includes/events.php'; ?>
    <?php include 'includes/next_event.php'; ?>
    <?php include 'includes/about.php'; ?>
    <?php include 'includes/instagram_feed.php'; ?>
    <?php include 'includes/contact_section.php'; ?>
<?php elseif ($page === 'events'): ?>
    <div style="padding-top: var(--nav-height);">
    <?php include 'includes/events.php'; ?>
    </div>
<?php elseif ($page === 'about'): ?>
    <div style="padding-top: var(--nav-height);">
    <?php include 'includes/about.php'; ?>
    </div>
<?php elseif ($page === 'contact'): ?>
    <div style="padding-top: var(--nav-height);">
    <?php include 'includes/contact_section.php'; ?>
    </div>
<?php endif; ?>

<?php include 'includes/footer.php'; ?>

</body>
</html>
