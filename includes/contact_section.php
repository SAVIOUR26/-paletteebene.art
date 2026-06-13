<?php
/**
 * Palette Ébène — Contact Section
 */
?>
<section class="contact-section" id="contact" aria-labelledby="contact-title">
    <div class="contact-section__container">

        <!-- Left: Contact Form -->
        <div class="contact-section__form-col fade-in">
            <div class="section-header section-header--left">
                <span class="section-eyebrow">Nous écrire</span>
                <h2 class="section-title" id="contact-title">Contactez-nous</h2>
                <div class="section-divider section-divider--left" aria-hidden="true"></div>
            </div>

            <p class="contact-section__intro">
                Une question, une collaboration, une envie de rejoindre l'aventure Palette Ébène ? Nous vous répondons sous 48h.
            </p>

            <form id="contact-form" class="contact-form" novalidate aria-label="Formulaire de contact">
                <!-- Honeypot anti-spam field -->
                <div class="contact-form__honeypot" aria-hidden="true">
                    <label for="website">Ne pas remplir</label>
                    <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                </div>

                <div class="contact-form__group">
                    <label class="contact-form__label" for="contact-name">
                        Nom complet <span class="contact-form__required" aria-label="requis">*</span>
                    </label>
                    <input
                        class="contact-form__input"
                        type="text"
                        id="contact-name"
                        name="name"
                        placeholder="Votre nom"
                        required
                        autocomplete="name"
                        aria-required="true"
                        maxlength="100"
                    >
                    <span class="contact-form__error" id="name-error" role="alert" aria-live="polite"></span>
                </div>

                <div class="contact-form__group">
                    <label class="contact-form__label" for="contact-email">
                        Adresse e-mail <span class="contact-form__required" aria-label="requis">*</span>
                    </label>
                    <input
                        class="contact-form__input"
                        type="email"
                        id="contact-email"
                        name="email"
                        placeholder="votre@email.com"
                        required
                        autocomplete="email"
                        aria-required="true"
                        maxlength="150"
                    >
                    <span class="contact-form__error" id="email-error" role="alert" aria-live="polite"></span>
                </div>

                <div class="contact-form__group">
                    <label class="contact-form__label" for="contact-subject">
                        Sujet <span class="contact-form__required" aria-label="requis">*</span>
                    </label>
                    <select
                        class="contact-form__input contact-form__select"
                        id="contact-subject"
                        name="subject"
                        required
                        aria-required="true"
                    >
                        <option value="" disabled selected>Choisissez un sujet</option>
                        <option value="Collaboration artistique">Collaboration artistique</option>
                        <option value="Réservation événement">Réservation événement</option>
                        <option value="Partenariat">Partenariat</option>
                        <option value="Presse & Médias">Presse &amp; Médias</option>
                        <option value="Autre">Autre</option>
                    </select>
                    <span class="contact-form__error" id="subject-error" role="alert" aria-live="polite"></span>
                </div>

                <div class="contact-form__group">
                    <label class="contact-form__label" for="contact-message">
                        Message <span class="contact-form__required" aria-label="requis">*</span>
                    </label>
                    <textarea
                        class="contact-form__input contact-form__textarea"
                        id="contact-message"
                        name="message"
                        placeholder="Votre message…"
                        required
                        aria-required="true"
                        rows="5"
                        maxlength="2000"
                    ></textarea>
                    <span class="contact-form__char-count" id="message-count" aria-live="polite">0 / 2000</span>
                    <span class="contact-form__error" id="message-error" role="alert" aria-live="polite"></span>
                </div>

                <div id="contact-form-status" class="contact-form__status" role="alert" aria-live="polite" hidden></div>

                <button type="submit" class="btn btn--gold contact-form__submit" id="contact-submit-btn">
                    <span class="contact-form__submit-text">Envoyer le message</span>
                    <span class="contact-form__submit-spinner" aria-hidden="true" hidden>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="spin">
                            <circle cx="12" cy="12" r="10" stroke-dasharray="31.4" stroke-dashoffset="10"/>
                        </svg>
                    </span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="contact-form__submit-icon">
                        <line x1="22" y1="2" x2="11" y2="13"/>
                        <polygon points="22 2 15 22 11 13 2 9 22 2"/>
                    </svg>
                </button>
            </form>
        </div>

        <!-- Right: Contact Info -->
        <div class="contact-section__info-col fade-in">
            <div class="contact-info">
                <h3 class="contact-info__title">Restons en contact</h3>

                <div class="contact-info__item">
                    <div class="contact-info__icon" aria-hidden="true">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                    </div>
                    <div class="contact-info__content">
                        <span class="contact-info__label">Email</span>
                        <a href="mailto:<?= CONTACT_EMAIL ?>" class="contact-info__value">
                            <?= htmlspecialchars(CONTACT_EMAIL) ?>
                        </a>
                    </div>
                </div>

                <div class="contact-info__item">
                    <div class="contact-info__icon" aria-hidden="true">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                    </div>
                    <div class="contact-info__content">
                        <span class="contact-info__label">Localisation</span>
                        <span class="contact-info__value">Paris, France</span>
                    </div>
                </div>

                <div class="contact-info__item">
                    <div class="contact-info__icon" aria-hidden="true">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                    </div>
                    <div class="contact-info__content">
                        <span class="contact-info__label">Réponse sous</span>
                        <span class="contact-info__value">48 heures</span>
                    </div>
                </div>

                <div class="contact-info__actions">
                    <a href="<?= htmlspecialchars(GOOGLE_BUSINESS_URL) ?>"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="btn btn--outline contact-info__btn"
                       aria-label="Voir notre fiche Google Business">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.133 0 12.48 0 5.867 0 .307 5.387.307 12s5.56 12 12.173 12c3.573 0 6.267-1.173 8.373-3.36 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.053H12.48z"/>
                        </svg>
                        Google Business
                    </a>

                    <a href="<?= htmlspecialchars(REVOLUT_PAYMENT_LINK) ?>"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="btn btn--reserve contact-info__btn"
                       aria-label="Réserver et payer via Revolut">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"/>
                            <line x1="1" y1="10" x2="23" y2="10"/>
                        </svg>
                        Payer via Revolut
                    </a>
                </div>

                <!-- Social follow -->
                <div class="contact-info__social">
                    <p class="contact-info__social-label">Suivez-nous</p>
                    <a href="https://www.instagram.com/<?= htmlspecialchars(INSTAGRAM_USERNAME) ?>/"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="contact-info__instagram-link">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                            <circle cx="12" cy="12" r="4"/>
                            <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/>
                        </svg>
                        @<?= htmlspecialchars(INSTAGRAM_USERNAME) ?>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
