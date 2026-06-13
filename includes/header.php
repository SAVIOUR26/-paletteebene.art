<?php
/**
 * Palette Ébène — HTML Head / Header
 */
$page_title = $page_title ?? (SITE_NAME . ' — L\'art africain et de la diaspora');
$page_desc  = $page_desc  ?? 'Palette Ébène célèbre l\'art africain et de la diaspora avec des vernissages, soirées culturelles et expositions.';
$page_url   = $page_url   ?? SITE_URL;
$page_image = $page_image ?? SITE_URL . '/assets/images/og-image.jpg';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?= htmlspecialchars($page_title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page_desc) ?>">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Palette Ébène">
    <meta name="theme-color" content="#2C1810">

    <!-- Open Graph -->
    <meta property="og:type"        content="website">
    <meta property="og:url"         content="<?= htmlspecialchars($page_url) ?>">
    <meta property="og:title"       content="<?= htmlspecialchars($page_title) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page_desc) ?>">
    <meta property="og:image"       content="<?= htmlspecialchars($page_image) ?>">
    <meta property="og:locale"      content="fr_FR">
    <meta property="og:site_name"   content="<?= SITE_NAME ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card"        content="summary_large_image">
    <meta name="twitter:title"       content="<?= htmlspecialchars($page_title) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($page_desc) ?>">
    <meta name="twitter:image"       content="<?= htmlspecialchars($page_image) ?>">

    <!-- Canonical -->
    <link rel="canonical" href="<?= htmlspecialchars($page_url) ?>">

    <!-- SVG Favicon inline -->
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='20' fill='%232C1810'/><text y='.9em' font-size='70' x='50%' text-anchor='middle' dominant-baseline='hanging' font-family='serif' fill='%23D4A853'>PE</text></svg>">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;0,900;1,400;1,700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Palette Ébène",
        "url": "<?= SITE_URL ?>",
        "description": "<?= htmlspecialchars($page_desc) ?>",
        "email": "<?= CONTACT_EMAIL ?>",
        "sameAs": [
            "https://www.instagram.com/<?= INSTAGRAM_USERNAME ?>"
        ]
    }
    </script>
</head>
<body>
