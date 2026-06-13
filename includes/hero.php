<section class="hero" id="hero">
    <div class="hero-bg">
        <div class="hero-orb hero-orb-1"></div>
        <div class="hero-orb hero-orb-2"></div>
        <div class="hero-orb hero-orb-3"></div>
    </div>
    <div class="hero-content">
        <div class="hero-badge"><?= t('hero_badge') ?></div>
        <h1 class="hero-title">
            <span class="hero-title-palette">Palette</span>
            <em class="hero-title-ebene">Ébène</em>
        </h1>
        <p class="hero-tagline"><?= htmlspecialchars(t('hero_tagline')) ?></p>
        <p class="hero-subtitle"><?= htmlspecialchars(t('hero_subtitle')) ?></p>
        <div class="hero-actions">
            <a href="#prochain-evenement" class="btn btn-gold btn-lg"><?= htmlspecialchars(t('hero_cta_events')) ?></a>
            <a href="#evenements"         class="btn btn-outline btn-lg"><?= htmlspecialchars(t('hero_cta_gallery')) ?></a>
        </div>
        <div class="hero-stats">
            <div class="hero-stat">
                <span class="hero-stat-number">501</span>
                <span class="hero-stat-label"><?= htmlspecialchars(t('hero_stat_followers')) ?></span>
            </div>
            <div class="hero-stat">
                <span class="hero-stat-number">∞</span>
                <span class="hero-stat-label"><?= htmlspecialchars(t('hero_stat_moments')) ?></span>
            </div>
            <div class="hero-stat">
                <span class="hero-stat-number">❤</span>
                <span class="hero-stat-label"><?= htmlspecialchars(t('hero_stat_community')) ?></span>
            </div>
        </div>
    </div>
    <div class="hero-scroll-hint" aria-hidden="true">
        <span><?= htmlspecialchars(t('hero_scroll')) ?></span>
        <div class="scroll-arrow"></div>
    </div>
</section>
