<section class="contact-section" id="contact" aria-labelledby="contact-title">
    <div class="contact-section__container">

        <!-- Left: Contact Form -->
        <div class="contact-section__form-col fade-in">
            <div class="section-header section-header--left">
                <span class="section-eyebrow"><?= htmlspecialchars(t('contact_eyebrow')) ?></span>
                <h2 class="section-title" id="contact-title"><?= htmlspecialchars(t('contact_title')) ?></h2>
                <div class="section-divider section-divider--left" aria-hidden="true"></div>
            </div>

            <p class="contact-section__intro"><?= htmlspecialchars(t('contact_intro')) ?></p>

            <form id="contact-form" class="contact-form" novalidate
                  aria-label="<?= htmlspecialchars(t('contact_title')) ?>"
                  data-msg-success="<?= htmlspecialchars(t('contact_success')) ?>"
                  data-msg-error="<?= htmlspecialchars(t('contact_error')) ?>"
                  data-msg-net="<?= htmlspecialchars(t('contact_net_error')) ?>"
                  data-msg-sending="<?= htmlspecialchars(t('contact_sending')) ?>">
                <div class="contact-form__honeypot" aria-hidden="true">
                    <label for="website"><?= htmlspecialchars(t('contact_honeypot')) ?></label>
                    <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                </div>

                <div class="contact-form__group">
                    <label class="contact-form__label" for="contact-name">
                        <?= htmlspecialchars(t('contact_name_lbl')) ?>
                        <span class="contact-form__required" aria-label="<?= htmlspecialchars(t('contact_required')) ?>">*</span>
                    </label>
                    <input
                        class="contact-form__input"
                        type="text"
                        id="contact-name"
                        name="name"
                        placeholder="<?= htmlspecialchars(t('contact_name_ph')) ?>"
                        required
                        autocomplete="name"
                        aria-required="true"
                        maxlength="100"
                    >
                    <span class="contact-form__error" id="name-error" role="alert" aria-live="polite"></span>
                </div>

                <div class="contact-form__group">
                    <label class="contact-form__label" for="contact-email">
                        <?= htmlspecialchars(t('contact_email_lbl')) ?>
                        <span class="contact-form__required" aria-label="<?= htmlspecialchars(t('contact_required')) ?>">*</span>
                    </label>
                    <input
                        class="contact-form__input"
                        type="email"
                        id="contact-email"
                        name="email"
                        placeholder="<?= htmlspecialchars(t('contact_email_ph')) ?>"
                        required
                        autocomplete="email"
                        aria-required="true"
                        maxlength="150"
                    >
                    <span class="contact-form__error" id="email-error" role="alert" aria-live="polite"></span>
                </div>

                <div class="contact-form__group">
                    <label class="contact-form__label" for="contact-subject">
                        <?= htmlspecialchars(t('contact_subject_lbl')) ?>
                        <span class="contact-form__required" aria-label="<?= htmlspecialchars(t('contact_required')) ?>">*</span>
                    </label>
                    <select
                        class="contact-form__input contact-form__select"
                        id="contact-subject"
                        name="subject"
                        required
                        aria-required="true"
                    >
                        <option value="" disabled selected><?= htmlspecialchars(t('contact_subject_ph')) ?></option>
                        <option value="collab"><?= htmlspecialchars(t('contact_subj_collab')) ?></option>
                        <option value="event"><?= htmlspecialchars(t('contact_subj_event')) ?></option>
                        <option value="info"><?= htmlspecialchars(t('contact_subj_info')) ?></option>
                        <option value="press"><?= htmlspecialchars(t('contact_subj_press')) ?></option>
                        <option value="payment"><?= htmlspecialchars(t('contact_subj_payment')) ?></option>
                        <option value="other"><?= htmlspecialchars(t('contact_subj_other')) ?></option>
                    </select>
                    <span class="contact-form__error" id="subject-error" role="alert" aria-live="polite"></span>
                </div>

                <div class="contact-form__group">
                    <label class="contact-form__label" for="contact-message">
                        <?= htmlspecialchars(t('contact_msg_lbl')) ?>
                        <span class="contact-form__required" aria-label="<?= htmlspecialchars(t('contact_required')) ?>">*</span>
                    </label>
                    <textarea
                        class="contact-form__input contact-form__textarea"
                        id="contact-message"
                        name="message"
                        placeholder="<?= htmlspecialchars(t('contact_msg_ph')) ?>"
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
                    <span class="contact-form__submit-text"><?= htmlspecialchars(t('contact_submit')) ?></span>
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
                <h3 class="contact-info__title"><?= htmlspecialchars(t('contact_info_title')) ?></h3>

                <div class="contact-info__item">
                    <div class="contact-info__icon" aria-hidden="true">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                    </div>
                    <div class="contact-info__content">
                        <span class="contact-info__label"><?= htmlspecialchars(t('contact_email_lbl2')) ?></span>
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
                        <span class="contact-info__label"><?= htmlspecialchars(t('contact_loc_lbl')) ?></span>
                        <span class="contact-info__value"><?= htmlspecialchars(t('contact_loc_val')) ?></span>
                    </div>
                </div>

                <div class="contact-info__item">
                    <div class="contact-info__icon" aria-hidden="true">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                            <circle cx="12" cy="12" r="4"/>
                            <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/>
                        </svg>
                    </div>
                    <div class="contact-info__content">
                        <span class="contact-info__label"><?= htmlspecialchars(t('contact_ig_lbl')) ?></span>
                        <a href="https://www.instagram.com/<?= htmlspecialchars(INSTAGRAM_USERNAME) ?>/"
                           target="_blank" rel="noopener noreferrer" class="contact-info__value">
                            @<?= htmlspecialchars(INSTAGRAM_USERNAME) ?>
                        </a>
                    </div>
                </div>

                <div class="contact-info__actions">
                    <a href="<?= htmlspecialchars(GOOGLE_BUSINESS_URL) ?>"
                       target="_blank" rel="noopener noreferrer"
                       class="btn btn--outline contact-info__btn"
                       aria-label="<?= htmlspecialchars(t('contact_google')) ?>">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.133 0 12.48 0 5.867 0 .307 5.387.307 12s5.56 12 12.173 12c3.573 0 6.267-1.173 8.373-3.36 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.053H12.48z"/>
                        </svg>
                        <?= htmlspecialchars(t('contact_google')) ?>
                    </a>

                    <a href="<?= htmlspecialchars(REVOLUT_PAYMENT_LINK) ?>"
                       target="_blank" rel="noopener noreferrer"
                       class="btn btn--reserve contact-info__btn"
                       aria-label="<?= htmlspecialchars(t('contact_revolut')) ?>">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"/>
                            <line x1="1" y1="10" x2="23" y2="10"/>
                        </svg>
                        <?= htmlspecialchars(t('contact_revolut')) ?>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
