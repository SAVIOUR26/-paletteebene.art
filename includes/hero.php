<?php
/**
 * Palette Ébène — Hero Section
 */
?>
<section class="hero" id="accueil" aria-label="Bienvenue">
    <div class="hero__bg" aria-hidden="true">
        <div class="hero__gradient-orb hero__gradient-orb--1"></div>
        <div class="hero__gradient-orb hero__gradient-orb--2"></div>
        <div class="hero__gradient-orb hero__gradient-orb--3"></div>
    </div>

    <div class="hero__overlay" aria-hidden="true"></div>

    <div class="hero__content">
        <div class="hero__eyebrow fade-in" data-delay="0">
            <span class="hero__eyebrow-line"></span>
            <span class="hero__eyebrow-text">Vernissages &amp; Soirées Culturelles</span>
            <span class="hero__eyebrow-line"></span>
        </div>

        <h1 class="hero__title">
            <span class="hero__title-reveal hero__title-reveal--1">Palette</span>
            <span class="hero__title-reveal hero__title-reveal--2 hero__title-accent">Ébène</span>
        </h1>

        <p class="hero__tagline fade-in" data-delay="600">
            L'art africain et de la diaspora,<br>
            <em>célébré avec élégance</em>
        </p>

        <p class="hero__subtitle fade-in" data-delay="800">
            African &amp; Diaspora Arts — Curated Cultural Experiences Across Europe
        </p>

        <div class="hero__actions fade-in" data-delay="1000">
            <a href="#evenements" class="btn btn--gold btn--lg hero__cta">
                Découvrir nos événements
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <line x1="5" y1="12" x2="19" y2="12"/>
                    <polyline points="12,5 19,12 12,19"/>
                </svg>
            </a>
            <a href="#contact" class="btn btn--outline btn--lg hero__secondary">
                Nous contacter
            </a>
        </div>

        <div class="hero__stats fade-in" data-delay="1200">
            <div class="hero__stat">
                <span class="hero__stat-number">501+</span>
                <span class="hero__stat-label">Abonnés Instagram</span>
            </div>
            <div class="hero__stat-divider" aria-hidden="true"></div>
            <div class="hero__stat">
                <span class="hero__stat-number">6+</span>
                <span class="hero__stat-label">Événements organisés</span>
            </div>
            <div class="hero__stat-divider" aria-hidden="true"></div>
            <div class="hero__stat">
                <span class="hero__stat-number">∞</span>
                <span class="hero__stat-label">Cultures célébrées</span>
            </div>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="hero__scroll-indicator" aria-hidden="true">
        <span class="hero__scroll-text">Défiler</span>
        <div class="hero__scroll-arrow">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="12" y1="5" x2="12" y2="19"/>
                <polyline points="19,12 12,19 5,12"/>
            </svg>
        </div>
    </div>
</section>
