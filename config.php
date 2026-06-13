<?php
// =========================================================
// Palette Ébène — Site Configuration
// =========================================================

// Site Identity
define('SITE_NAME', 'Palette Ébène');
define('SITE_URL', 'https://paletteebene.art');
define('SITE_TAGLINE', "L'Art Qui Nous Rassemble");

// Contact
define('CONTACT_EMAIL', 'contact@paletteebene.art');

// Instagram
define('INSTAGRAM_USERNAME', 'palette.ebene');
define('INSTAGRAM_HANDLE', 'palette.ebene');
define('INSTAGRAM_PROFILE_URL', 'https://www.instagram.com/palette.ebene/');
define('INSTAGRAM_ACCESS_TOKEN', ''); // Fill in after OAuth setup for auto-fetch

// Payment — replace with your actual Revolut.me link
define('REVOLUT_PAYMENT_LINK', 'https://revolut.me/PLACEHOLDER');

// Google Business — replace with your actual Google Business URL
define('GOOGLE_BUSINESS_URL', 'https://g.page/palette-ebene');

// Next Event
define('NEXT_EVENT_NAME', 'Soirée Ébène Vol. III');
define('NEXT_EVENT_DATE', '2025-09-20 20:00:00');
define('NEXT_EVENT_VENUE', 'TBA — Paris');
define('NEXT_EVENT_TIME', '20:00');
define('NEXT_EVENT_LOCATION', 'Paris, France');
define('NEXT_EVENT_DESCRIPTION', "Une soirée exceptionnelle célébrant les arts visuels, la musique live et la culture afro-diasporique. Rejoignez-nous pour une nuit inoubliable.");
define('NEXT_EVENT_TICKET_LINK', '#contact');

// ── Real Instagram posts from @palette.ebene (most recent first) ──
// The feed section shows the first 9 by default; clicking "See more"
// reveals all posts below. Add or remove URLs here as new posts are published.
$instagram_posts = [
    // Posts 1–10 (most recent)
    'https://www.instagram.com/palette.ebene/reel/DF-yUlot0s4/',
    'https://www.instagram.com/palette.ebene/p/DF5IEm_tAvX/',
    'https://www.instagram.com/palette.ebene/reel/DF2iRzgNmJm/',
    'https://www.instagram.com/palette.ebene/p/DFr5nwCtAjN/',
    'https://www.instagram.com/palette.ebene/reel/DFpTBSSNTHY/',
    'https://www.instagram.com/palette.ebene/p/DFm0B6GNB0E/',
    'https://www.instagram.com/palette.ebene/reel/DFTXpXTNs5Y/',
    'https://www.instagram.com/palette.ebene/p/DE_64XENH77/',
    'https://www.instagram.com/palette.ebene/reel/DE8VtuZtWwa/',
    'https://www.instagram.com/palette.ebene/p/DDoutopN9Lp/',
    // Posts 11–20
    'https://www.instagram.com/palette.ebene/reel/DDUzwzANIlp/',
    'https://www.instagram.com/palette.ebene/p/DDR1XaitKnh/',
    'https://www.instagram.com/palette.ebene/reel/DDP30sxNB7K/',
    'https://www.instagram.com/palette.ebene/p/DDNRFU-NhMI/',
    'https://www.instagram.com/palette.ebene/reel/DDFSjngt3XV/',
    'https://www.instagram.com/palette.ebene/p/DDADQmNttRb/',
    'https://www.instagram.com/palette.ebene/reel/DC9yiPstZZ4/',
    'https://www.instagram.com/palette.ebene/p/DC6vjYytDIW/',
    'https://www.instagram.com/palette.ebene/reel/DCrVrqjN0g3/',
    'https://www.instagram.com/palette.ebene/p/DClylr2NcDM/',
    // Posts 21–30
    'https://www.instagram.com/palette.ebene/p/DCewsQjNUqw/',
    'https://www.instagram.com/palette.ebene/reel/DCb90FNNGpx/',
    'https://www.instagram.com/palette.ebene/p/DCZbZwUNAi7/',
    'https://www.instagram.com/palette.ebene/reel/DCTxtwXtsSj/',
    'https://www.instagram.com/palette.ebene/p/DCRWiERNRgq/',
    'https://www.instagram.com/palette.ebene/reel/DCLjdMRt0uc/',
    'https://www.instagram.com/palette.ebene/p/DB1zLaXNZpX/',
    'https://www.instagram.com/palette.ebene/reel/DBtCeKet9D4/',
    'https://www.instagram.com/palette.ebene/p/DKT6EzAtyXz/',
    'https://www.instagram.com/palette.ebene/reel/DKO4TfWsvUA/',
    // Posts 31–40
    'https://www.instagram.com/palette.ebene/p/DKHTuBYNTIx/',
    'https://www.instagram.com/palette.ebene/reel/DKBt1mPNh6b/',
    'https://www.instagram.com/palette.ebene/p/DJ4P3EDM-ME/',
    'https://www.instagram.com/palette.ebene/reel/DJ1f-FQMBUT/',
    'https://www.instagram.com/palette.ebene/reel/DJvxuDCNu2e/',
    'https://www.instagram.com/palette.ebene/p/DJjefBot7Lb/',
    'https://www.instagram.com/palette.ebene/reel/DJgl_gxtxy5/',
    'https://www.instagram.com/palette.ebene/reel/DJY8VuPtRz9/',
    'https://www.instagram.com/palette.ebene/reel/DJOU7oINvzI/',
    'https://www.instagram.com/palette.ebene/reel/DJGyocpt55H/',
    // Posts 41–50
    'https://www.instagram.com/palette.ebene/p/DJFB1Q5N-pc/',
    'https://www.instagram.com/palette.ebene/p/DJCayX1tPhr/',
    'https://www.instagram.com/palette.ebene/reel/DI4HY8SN4_X/',
    'https://www.instagram.com/palette.ebene/p/DI0jWuQNimj/',
    'https://www.instagram.com/palette.ebene/reel/DIySeh9t0bI/',
    'https://www.instagram.com/palette.ebene/p/DIvuelvNNaY/',
    'https://www.instagram.com/palette.ebene/reel/DIaoUfQt-L8/',
    'https://www.instagram.com/palette.ebene/reel/DIZDpE4tkrj/',
    'https://www.instagram.com/palette.ebene/p/DH3LbystWX-/',
    'https://www.instagram.com/palette.ebene/reel/DHllzkyts8F/',
    // Posts 51–58
    'https://www.instagram.com/palette.ebene/p/DHiZg04tSuM/',
    'https://www.instagram.com/palette.ebene/reel/DHgor0otICE/',
    'https://www.instagram.com/palette.ebene/reel/DHSqvFINNGm/',
    'https://www.instagram.com/palette.ebene/p/DHI0JdONJVV/',
    'https://www.instagram.com/palette.ebene/reel/DHCWLexN8Rv/',
    'https://www.instagram.com/palette.ebene/p/DGYJaW3t9oV/',
    'https://www.instagram.com/palette.ebene/reel/DGQXUDgtJEs/',
    'https://www.instagram.com/palette.ebene/p/DGJNwbTNhND/',
];

// How many posts to show before "See more" button
define('INSTAGRAM_INITIAL_COUNT', 9);
