<section class="about" id="a-propos" aria-labelledby="about-title">
    <div class="about__container">
        <!-- Left: Decorative column -->
        <div class="about__decorative fade-in" aria-hidden="true">
            <div class="about__vertical-line"></div>
            <div class="about__geo-art">
                <!-- Geometric African-inspired art element -->
                <svg width="220" height="320" viewBox="0 0 220 320" xmlns="http://www.w3.org/2000/svg">
                    <!-- Outer ring -->
                    <circle cx="110" cy="110" r="90" stroke="#D4A853" stroke-width="1.5" fill="none" opacity="0.3"/>
                    <circle cx="110" cy="110" r="70" stroke="#D4A853" stroke-width="1" fill="none" opacity="0.2"/>
                    <!-- Central palette shape -->
                    <ellipse cx="110" cy="115" rx="55" ry="42" fill="#2C1810" stroke="#D4A853" stroke-width="1.5"/>
                    <!-- Thumb hole -->
                    <circle cx="80" cy="95" r="12" fill="#1a0f0a"/>
                    <!-- Paint blobs on palette -->
                    <circle cx="115" cy="88" r="8" fill="#D4A853" opacity="0.9"/>
                    <circle cx="135" cy="100" r="7" fill="#8B3A3A" opacity="0.9"/>
                    <circle cx="130" cy="120" r="7" fill="#6a2a6a" opacity="0.9"/>
                    <circle cx="110" cy="130" r="7" fill="#2a6a6a" opacity="0.9"/>
                    <circle cx="90" cy="120" r="6" fill="#F5F0E8" opacity="0.7"/>
                    <!-- Paintbrush diagonal -->
                    <line x1="150" y1="60" x2="185" y2="30" stroke="#D4A853" stroke-width="3" stroke-linecap="round"/>
                    <polygon points="185,20 178,35 192,35" fill="#D4A853"/>
                    <!-- Decorative triangles (kente-inspired) -->
                    <polygon points="110,30 125,55 95,55" fill="#D4A853" opacity="0.6"/>
                    <polygon points="40,160 65,185 40,210" fill="#D4A853" opacity="0.4"/>
                    <polygon points="180,160 205,185 180,210" fill="#D4A853" opacity="0.4"/>
                    <!-- Bottom diamond pattern -->
                    <rect x="95" y="200" width="30" height="30" transform="rotate(45 110 215)" fill="none" stroke="#D4A853" stroke-width="1.5" opacity="0.5"/>
                    <rect x="101" y="206" width="18" height="18" transform="rotate(45 110 215)" fill="#D4A853" opacity="0.2"/>
                    <!-- Dots pattern -->
                    <circle cx="55" cy="160" r="2.5" fill="#D4A853" opacity="0.6"/>
                    <circle cx="70" cy="175" r="2" fill="#D4A853" opacity="0.4"/>
                    <circle cx="165" cy="160" r="2.5" fill="#D4A853" opacity="0.6"/>
                    <circle cx="150" cy="175" r="2" fill="#D4A853" opacity="0.4"/>
                    <!-- PE monogram -->
                    <text x="110" y="119" font-family="Georgia, serif" font-size="22" font-weight="bold" fill="#D4A853" text-anchor="middle" opacity="0.9">PE</text>
                    <!-- Adinkra-inspired symbol at bottom -->
                    <g transform="translate(85, 240)" opacity="0.7">
                        <circle cx="25" cy="25" r="20" fill="none" stroke="#D4A853" stroke-width="1.5"/>
                        <circle cx="25" cy="25" r="12" fill="none" stroke="#D4A853" stroke-width="1"/>
                        <line x1="25" y1="5" x2="25" y2="45" stroke="#D4A853" stroke-width="1.5"/>
                        <line x1="5" y1="25" x2="45" y2="25" stroke="#D4A853" stroke-width="1.5"/>
                        <line x1="11" y1="11" x2="39" y2="39" stroke="#D4A853" stroke-width="1"/>
                        <line x1="39" y1="11" x2="11" y2="39" stroke="#D4A853" stroke-width="1"/>
                    </g>
                </svg>
            </div>
            <div class="about__vertical-line about__vertical-line--bottom"></div>
        </div>

        <!-- Right: Story text -->
        <div class="about__content fade-in">
            <div class="section-header section-header--left">
                <span class="section-eyebrow"><?= htmlspecialchars(t('about_eyebrow')) ?></span>
                <h2 class="section-title" id="about-title"><?= htmlspecialchars(t('about_title')) ?></h2>
                <div class="section-divider section-divider--left" aria-hidden="true"></div>
            </div>

            <div class="about__text">
                <p class="about__lead"><?= th('about_lead') ?></p>
                <p><?= th('about_p1') ?></p>
                <p><?= th('about_p2') ?></p>

                <div class="about__values">
                    <div class="about__value">
                        <div class="about__value-icon" aria-hidden="true">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#D4A853" stroke-width="2">
                                <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                                <path d="M2 17l10 5 10-5"/>
                                <path d="M2 12l10 5 10-5"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="about__value-title"><?= htmlspecialchars(t('about_val1_title')) ?></h3>
                            <p><?= htmlspecialchars(t('about_val1_text')) ?></p>
                        </div>
                    </div>
                    <div class="about__value">
                        <div class="about__value-icon" aria-hidden="true">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#D4A853" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <path d="M12 8v4l3 3"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="about__value-title"><?= htmlspecialchars(t('about_val2_title')) ?></h3>
                            <p><?= htmlspecialchars(t('about_val2_text')) ?></p>
                        </div>
                    </div>
                    <div class="about__value">
                        <div class="about__value-icon" aria-hidden="true">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#D4A853" stroke-width="2">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                <circle cx="9" cy="7" r="4"/>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="about__value-title"><?= htmlspecialchars(t('about_val3_title')) ?></h3>
                            <p><?= htmlspecialchars(t('about_val3_text')) ?></p>
                        </div>
                    </div>
                </div>

                <div class="about__stats-row">
                    <div class="about__stat-item">
                        <span class="about__stat-number"><?= htmlspecialchars(t('about_stat1_num')) ?></span>
                        <span class="about__stat-label"><?= htmlspecialchars(t('about_stat1_lbl')) ?></span>
                    </div>
                    <div class="about__stat-item">
                        <span class="about__stat-number"><?= htmlspecialchars(t('about_stat2_num')) ?></span>
                        <span class="about__stat-label"><?= htmlspecialchars(t('about_stat2_lbl')) ?></span>
                    </div>
                    <div class="about__stat-item">
                        <span class="about__stat-number"><?= htmlspecialchars(t('about_stat3_num')) ?></span>
                        <span class="about__stat-label"><?= htmlspecialchars(t('about_stat3_lbl')) ?></span>
                    </div>
                    <div class="about__stat-item">
                        <span class="about__stat-number"><?= htmlspecialchars(t('about_stat4_num')) ?></span>
                        <span class="about__stat-label"><?= htmlspecialchars(t('about_stat4_lbl')) ?></span>
                    </div>
                </div>

                <a href="#contact" class="btn btn--primary btn--small">
                    <span><?= htmlspecialchars(t('about_cta')) ?></span>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"/>
                        <polyline points="12 5 19 12 12 19"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
