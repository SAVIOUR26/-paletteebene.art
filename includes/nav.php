<?php
/**
 * Palette Ébène — Navigation
 */
?>
<header class="site-header" id="site-header" role="banner">
    <nav class="navbar" aria-label="Navigation principale">
        <div class="navbar__inner">

            <!-- Logo -->
            <a href="/" class="navbar__logo" aria-label="Palette Ébène — Accueil">
                <img src="/assets/images/logo.svg" alt="Palette Ébène" width="160" height="52" loading="eager">
            </a>

            <!-- Desktop Menu -->
            <ul class="navbar__menu" role="list">
                <li><a href="#accueil"           class="navbar__link">Accueil</a></li>
                <li><a href="#evenements"         class="navbar__link">Événements</a></li>
                <li><a href="#prochain-evenement" class="navbar__link">Prochain Événement</a></li>
                <li><a href="#a-propos"           class="navbar__link">À propos</a></li>
                <li>
                    <a href="https://www.instagram.com/<?= INSTAGRAM_USERNAME ?>"
                       class="navbar__link navbar__link--instagram"
                       target="_blank" rel="noopener noreferrer"
                       aria-label="Suivre sur Instagram">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                            <circle cx="12" cy="12" r="4"/>
                            <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/>
                        </svg>
                        Instagram
                    </a>
                </li>
                <li>
                    <a href="#contact" class="navbar__link navbar__cta">Contact</a>
                </li>
            </ul>

            <!-- Hamburger (mobile) -->
            <button class="navbar__hamburger" id="hamburger-btn" aria-label="Ouvrir le menu" aria-expanded="false" aria-controls="mobile-menu">
                <span class="hamburger__line"></span>
                <span class="hamburger__line"></span>
                <span class="hamburger__line"></span>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="navbar__mobile" id="mobile-menu" role="dialog" aria-label="Menu mobile" hidden>
            <ul class="navbar__mobile-list" role="list">
                <li><a href="#accueil"           class="navbar__mobile-link">Accueil</a></li>
                <li><a href="#evenements"         class="navbar__mobile-link">Événements</a></li>
                <li><a href="#prochain-evenement" class="navbar__mobile-link">Prochain Événement</a></li>
                <li><a href="#a-propos"           class="navbar__mobile-link">À propos</a></li>
                <li>
                    <a href="https://www.instagram.com/<?= INSTAGRAM_USERNAME ?>"
                       class="navbar__mobile-link"
                       target="_blank" rel="noopener noreferrer">
                        Instagram @<?= INSTAGRAM_USERNAME ?>
                    </a>
                </li>
                <li><a href="#contact" class="navbar__mobile-link navbar__mobile-cta">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>
