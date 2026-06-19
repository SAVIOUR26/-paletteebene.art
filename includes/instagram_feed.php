<?php
// $instagram_posts is loaded from config.php (all 58 real post URLs)
$initial_count = defined('INSTAGRAM_INITIAL_COUNT') ? INSTAGRAM_INITIAL_COUNT : 9;
$total         = count($instagram_posts);
$visible       = array_slice($instagram_posts, 0, $initial_count);
$hidden        = array_slice($instagram_posts, $initial_count);
$remaining     = count($hidden);

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
                <blockquote
                    class="instagram-media"
                    data-instgrm-permalink="<?= htmlspecialchars($post_url) ?>"
                    data-instgrm-version="14"
                    style="background:#fff;border:0;border-radius:3px;box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15);margin:1px;max-width:540px;min-width:326px;padding:0;width:calc(100% - 2px);">
                    <div style="padding:16px;">
                        <a href="<?= htmlspecialchars($post_url) ?>"
                           style="background:#fff;line-height:0;padding:0;text-align:center;text-decoration:none;width:100%;"
                           target="_blank" rel="noopener noreferrer">
                            <!-- Loading skeleton shown until embed.js replaces it -->
                            <div style="display:flex;align-items:center;gap:14px;margin-bottom:12px;">
                                <div style="background:#f0ece4;border-radius:50%;width:40px;height:40px;flex-shrink:0;"></div>
                                <div style="flex:1;">
                                    <div style="background:#f0ece4;border-radius:4px;height:12px;width:80px;margin-bottom:6px;"></div>
                                    <div style="background:#f0ece4;border-radius:4px;height:10px;width:55px;"></div>
                                </div>
                            </div>
                            <div style="background:linear-gradient(135deg,#2C1810,#6a2a6a);padding:30% 0;border-radius:4px;margin-bottom:12px;"></div>
                            <div style="color:#3897f0;font-family:Arial,sans-serif;font-size:14px;font-weight:600;text-align:center;">
                                <?= htmlspecialchars($label_view_on_ig) ?>
                            </div>
                        </a>
                    </div>
                </blockquote>
            </div>
            <?php endforeach; ?>
        </div>

        <?php if ($remaining > 0): ?>
        <!-- Remaining posts — hidden until "Show more" clicked -->
        <div class="instagram-embed-grid instagram-embed-grid--hidden" id="ig-grid-more" hidden>
            <?php foreach ($hidden as $post_url): ?>
            <div class="ig-embed-wrap">
                <blockquote
                    class="instagram-media"
                    data-instgrm-permalink="<?= htmlspecialchars($post_url) ?>"
                    data-instgrm-version="14"
                    style="background:#fff;border:0;border-radius:3px;box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15);margin:1px;max-width:540px;min-width:326px;padding:0;width:calc(100% - 2px);">
                    <div style="padding:16px;">
                        <a href="<?= htmlspecialchars($post_url) ?>"
                           style="background:#fff;line-height:0;padding:0;text-align:center;text-decoration:none;width:100%;"
                           target="_blank" rel="noopener noreferrer">
                            <div style="display:flex;align-items:center;gap:14px;margin-bottom:12px;">
                                <div style="background:#f0ece4;border-radius:50%;width:40px;height:40px;flex-shrink:0;"></div>
                                <div style="flex:1;">
                                    <div style="background:#f0ece4;border-radius:4px;height:12px;width:80px;margin-bottom:6px;"></div>
                                    <div style="background:#f0ece4;border-radius:4px;height:10px;width:55px;"></div>
                                </div>
                            </div>
                            <div style="background:linear-gradient(135deg,#2C1810,#6a2a6a);padding:30% 0;border-radius:4px;margin-bottom:12px;"></div>
                            <div style="color:#3897f0;font-family:Arial,sans-serif;font-size:14px;font-weight:600;text-align:center;">
                                <?= htmlspecialchars($label_view_on_ig) ?>
                            </div>
                        </a>
                    </div>
                </blockquote>
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
