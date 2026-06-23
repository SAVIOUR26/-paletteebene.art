<section class="hero" id="hero">
    <div class="hero__bg" id="hero-bg">
        <div class="hero__gradient-orb hero__gradient-orb--1"></div>
        <div class="hero__gradient-orb hero__gradient-orb--2"></div>
        <div class="hero__gradient-orb hero__gradient-orb--3"></div>

        <svg class="hero__brushstroke" viewBox="0 0 1200 600" preserveAspectRatio="none" aria-hidden="true">
            <defs>
                <linearGradient id="hero-brush-gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%"  stop-color="#D4A853" />
                    <stop offset="50%" stop-color="#8B3A3A" />
                    <stop offset="100%" stop-color="#6a2a6a" />
                </linearGradient>
            </defs>
            <path class="hero__brushstroke-path" d="M -50,420 C 200,250 350,520 600,300 S 950,80 1250,260" />
        </svg>

        <span class="hero__paint-dab hero__paint-dab--1" aria-hidden="true"></span>
        <span class="hero__paint-dab hero__paint-dab--2" aria-hidden="true"></span>
        <span class="hero__paint-dab hero__paint-dab--3" aria-hidden="true"></span>
        <span class="hero__paint-dab hero__paint-dab--4" aria-hidden="true"></span>
        <span class="hero__paint-dab hero__paint-dab--5" aria-hidden="true"></span>
    </div>
    <div class="hero__overlay"></div>

    <div class="hero__content">
        <img class="hero__logo" src="assets/images/logo.svg" alt="Palette Ébène" width="84" height="84">

        <div class="hero__eyebrow">
            <span class="hero__eyebrow-line" aria-hidden="true"></span>
            <span class="hero__eyebrow-text"><?= htmlspecialchars(t('hero_badge')) ?></span>
            <span class="hero__eyebrow-line" aria-hidden="true"></span>
        </div>

        <h1 class="hero__title">
            <span class="hero__title-reveal hero__title-reveal--1">Palette</span>
            <span class="hero__title-reveal hero__title-reveal--2"><em class="hero__title-accent">Ébène</em></span>
        </h1>

        <p class="hero__tagline"><?= htmlspecialchars(t('hero_tagline')) ?></p>
        <p class="hero__subtitle"><?= htmlspecialchars(t('hero_subtitle')) ?></p>

        <div class="hero__actions">
            <a href="#prochain-evenement" class="btn btn--gold btn--lg"><?= htmlspecialchars(t('hero_cta_events')) ?></a>
            <a href="#evenements"         class="btn btn--outline btn--lg"><?= htmlspecialchars(t('hero_cta_gallery')) ?></a>
        </div>

        <div class="hero__stats">
            <div class="hero__stat">
                <span class="hero__stat-number" data-count-to="501">0</span>
                <span class="hero__stat-label"><?= htmlspecialchars(t('hero_stat_followers')) ?></span>
            </div>
            <div class="hero__stat-divider" aria-hidden="true"></div>
            <div class="hero__stat">
                <span class="hero__stat-number">∞</span>
                <span class="hero__stat-label"><?= htmlspecialchars(t('hero_stat_moments')) ?></span>
            </div>
            <div class="hero__stat-divider" aria-hidden="true"></div>
            <div class="hero__stat">
                <span class="hero__stat-number">❤</span>
                <span class="hero__stat-label"><?= htmlspecialchars(t('hero_stat_community')) ?></span>
            </div>
        </div>
    </div>

    <div class="hero__scroll-indicator" aria-hidden="true">
        <span class="hero__scroll-text"><?= htmlspecialchars(t('hero_scroll')) ?></span>
        <svg class="hero__scroll-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="6 9 12 15 18 9"/>
        </svg>
    </div>
</section>
