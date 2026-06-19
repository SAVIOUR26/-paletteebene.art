<?php
// $instagram_posts is loaded from config.php (all 58 real post URLs)
$initial_count = defined('INSTAGRAM_INITIAL_COUNT') ? INSTAGRAM_INITIAL_COUNT : 9;
$total         = count($instagram_posts);
$visible       = array_slice($instagram_posts, 0, $initial_count);
$hidden        = array_slice($instagram_posts, $initial_count);
$remaining     = count($hidden);

// Build a direct iframe embed URL (Instagram's own embed endpoint —
// renders the real photo/video without depending on embed.js executing
// in time, which is what was leaving the skeleton placeholders stuck).
function ig_embed_src(string $post_url): string {
    if (preg_match('#instagram\.com/(?:[^/]+/)?(p|reel)/([^/?]+)#', $post_url, $m)) {
        return "https://www.instagram.com/{$m[1]}/{$m[2]}/embed/captioned/";
    }
    return $post_url;
}

// i18n
$label_view_on_ig = ($current_lang ?? 'fr') === 'en' ? 'View on Instagram' : 'Voir sur Instagram';
$label_show_more  = ($current_lang ?? 'fr') === 'en'
    ? "Show all {$total} posts"
    : "Voir les {$total} publications";
$label_show_less  = ($current_lang ?? 'fr') === 'en' ? 'Show less' : 'Réduire';
?>
<section class="instagram-section" id="instagram" aria-labelledby="instagram-title">
    <div class="container">

        <div class="section-header fade-in">
            <span class="section-eyebrow"><?= htmlspecialchars(t('ig_eyebrow')) ?></span>
            <h2 class="section-title" id="instagram-title">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="vertical-align:middle;margin-right:10px;">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                    <circle cx="12" cy="12" r="4"/>
                    <circle cx="17.5" cy="6.5" r="1.5" fill="currentColor" stroke="none"/>
                </svg>
                @<?= htmlspecialchars(INSTAGRAM_USERNAME) ?>
            </h2>
            <p class="section-subtitle"><?= htmlspecialchars(t('ig_subtitle')) ?></p>
            <p class="ig-post-count">
                <span class="ig-count-badge"><?= $total ?></span>
                <?= ($current_lang ?? 'fr') === 'en' ? 'posts' : 'publications' ?>
            </p>
        </div>

        <!-- Initial 9 posts — always visible -->
        <div class="instagram-embed-grid" id="ig-grid-visible">
            <?php foreach ($visible as $i => $post_url): ?>
            <div class="ig-embed-wrap fade-in" data-delay="<?= $i * 60 ?>">
                <iframe
                    class="ig-embed-frame"
                    src="<?= htmlspecialchars(ig_embed_src($post_url)) ?>"
                    loading="lazy"
                    allowtransparency="true"
                    title="<?= htmlspecialchars(t('ig_eyebrow')) ?> — @<?= htmlspecialchars(INSTAGRAM_USERNAME) ?>"
                ></iframe>
            </div>
            <?php endforeach; ?>
        </div>

        <?php if ($remaining > 0): ?>
        <!-- Remaining posts — hidden until "Show more" clicked -->
        <div class="instagram-embed-grid instagram-embed-grid--hidden" id="ig-grid-more" hidden>
            <?php foreach ($hidden as $post_url): ?>
            <div class="ig-embed-wrap">
                <iframe
                    class="ig-embed-frame"
                    src="<?= htmlspecialchars(ig_embed_src($post_url)) ?>"
                    loading="lazy"
                    allowtransparency="true"
                    title="<?= htmlspecialchars(t('ig_eyebrow')) ?> — @<?= htmlspecialchars(INSTAGRAM_USERNAME) ?>"
                ></iframe>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Show more / Show less toggle -->
        <div class="ig-load-more fade-in" id="ig-load-more-wrap">
            <button
                class="btn btn--outline ig-load-more__btn"
                id="ig-load-more-btn"
                aria-expanded="false"
                aria-controls="ig-grid-more"
                data-label-more="<?= htmlspecialchars($label_show_more) ?>"
                data-label-less="<?= htmlspecialchars($label_show_less) ?>">
                <svg class="ig-load-more__icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <polyline points="6 9 12 15 18 9"/>
                </svg>
                <?= htmlspecialchars($label_show_more) ?>
            </button>
        </div>
        <?php endif; ?>

        <!-- Follow CTA -->
        <div class="instagram-cta fade-in">
            <a href="<?= htmlspecialchars(INSTAGRAM_PROFILE_URL) ?>"
               class="btn btn--instagram"
               target="_blank"
               rel="noopener noreferrer"
               aria-label="<?= htmlspecialchars(t('ig_cta')) ?>">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                    <circle cx="12" cy="12" r="4"/>
                    <circle cx="17.5" cy="6.5" r="1.5" fill="currentColor" stroke="none"/>
                </svg>
                <?= htmlspecialchars(t('ig_cta')) ?>
            </a>
        </div>

    </div>
</section>
