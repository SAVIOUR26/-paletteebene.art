<?php
// Build the lang-switch URL
$switch_lang = t('lang_other_code');
$switch_label = t('lang_other');
$lang_switch_url = '?lang=' . $switch_lang;
?>
<header class="site-header" id="site-header" role="banner">
    <nav class="navbar" aria-label="<?= t('nav_home') ?>">
        <div class="navbar__inner">
            <!-- Logo -->
            <a href="#hero" class="navbar__logo" aria-label="Palette Ébène">
                <img src="assets/images/logo.svg" alt="Palette Ébène" width="44" height="44">
                <div class="navbar__logo-text">
                    <span class="navbar__logo-name">Palette <em>Ébène</em></span>
                </div>
            </a>

            <!-- Desktop menu -->
            <ul class="navbar__menu" role="list">
                <li><a href="#hero"                 class="navbar__link"><?= t('nav_home') ?></a></li>
                <li><a href="#evenements"            class="navbar__link"><?= t('nav_events') ?></a></li>
                <li><a href="#prochain-evenement"    class="navbar__link"><?= t('nav_next_event') ?></a></li>
                <li><a href="#a-propos"              class="navbar__link"><?= t('nav_about') ?></a></li>
                <li>
                    <a href="https://www.instagram.com/<?= htmlspecialchars(INSTAGRAM_USERNAME) ?>/"
                       class="navbar__link navbar__link--instagram"
                       target="_blank" rel="noopener noreferrer"
                       aria-label="Instagram @<?= INSTAGRAM_USERNAME ?>">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                            <circle cx="12" cy="12" r="4"/>
                            <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/>
                        </svg>
                        Instagram
                    </a>
                </li>
                <li><a href="#contact" class="navbar__link navbar__cta"><?= t('nav_contact') ?></a></li>

                <!-- Language switcher -->
                <li>
                    <a href="<?= htmlspecialchars($lang_switch_url) ?>"
                       class="navbar__lang-switch"
                       aria-label="Switch to <?= htmlspecialchars($switch_label) ?>">
                        <span class="lang-switch__globe" aria-hidden="true">🌐</span>
                        <span><?= htmlspecialchars($switch_label) ?></span>
                    </a>
                </li>
            </ul>

            <!-- Hamburger button -->
            <div class="navbar__right-group">
                <!-- Mobile lang switch -->
                <a href="<?= htmlspecialchars($lang_switch_url) ?>"
                   class="navbar__lang-switch navbar__lang-switch--mobile"
                   aria-label="Switch to <?= htmlspecialchars($switch_label) ?>">
                    <span class="lang-switch__globe" aria-hidden="true">🌐</span>
                    <span><?= htmlspecialchars($switch_label) ?></span>
                </a>

                <button
                    class="navbar__hamburger"
                    id="hamburger-btn"
                    aria-label="<?= htmlspecialchars(t('nav_open_menu')) ?>"
                    aria-expanded="false"
                    aria-controls="mobile-menu"
                    type="button"
                >
                    <span class="hamburger__line"></span>
                    <span class="hamburger__line"></span>
                    <span class="hamburger__line"></span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Mobile fullscreen menu -->
    <div class="navbar__mobile" id="mobile-menu" hidden role="dialog" aria-modal="true" aria-label="<?= htmlspecialchars(t('nav_open_menu')) ?>">
        <button class="navbar__mobile-close" id="mobile-close" aria-label="<?= htmlspecialchars(t('nav_close_menu')) ?>" type="button">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
        </button>
        <ul class="navbar__mobile-list" role="list">
            <li><a href="#hero"               class="navbar__mobile-link"><?= t('nav_home') ?></a></li>
            <li><a href="#evenements"         class="navbar__mobile-link"><?= t('nav_events') ?></a></li>
            <li><a href="#prochain-evenement" class="navbar__mobile-link"><?= t('nav_next_event') ?></a></li>
            <li><a href="#a-propos"           class="navbar__mobile-link"><?= t('nav_about') ?></a></li>
            <li><a href="#instagram"          class="navbar__mobile-link">Instagram</a></li>
            <li><a href="#contact"            class="navbar__mobile-link navbar__mobile-cta"><?= t('nav_contact') ?></a></li>
        </ul>
    </div>
</header>
