<?php
$event_date = NEXT_EVENT_DATE;
$event_name = NEXT_EVENT_NAME;
$event_venue = NEXT_EVENT_VENUE;

// Format the display date
$dt = new DateTime($event_date);
$formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::SHORT);
$display_date = $formatter ? $formatter->format($dt) : $dt->format('d/m/Y H:i');
// Fallback if intl not available
if (!extension_loaded('intl')) {
    $months_fr = ['', 'janvier', 'février', 'mars', 'avril', 'mai', 'juin',
                  'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];
    $display_date = $dt->format('j') . ' ' . $months_fr[(int)$dt->format('n')] . ' ' . $dt->format('Y') . ' à ' . $dt->format('H\hi');
}
?>
<section class="next-event" id="prochain-evenement" aria-labelledby="next-event-title">
    <!-- Decorative background elements -->
    <div class="next-event__bg" aria-hidden="true">
        <div class="next-event__bg-circle next-event__bg-circle--1"></div>
        <div class="next-event__bg-circle next-event__bg-circle--2"></div>
        <div class="next-event__bg-texture"></div>
    </div>

    <div class="next-event__container">
        <!-- Eyebrow -->
        <div class="next-event__eyebrow fade-in">
            <div class="next-event__pulse-dot" aria-hidden="true">
                <span class="pulse-ring"></span>
                <span class="pulse-dot"></span>
            </div>
            <span>Prochain événement</span>
        </div>

        <!-- Title -->
        <h2 class="next-event__title fade-in" id="next-event-title">
            <?= htmlspecialchars($event_name) ?>
        </h2>

        <!-- Date & Venue -->
        <div class="next-event__details fade-in">
            <div class="next-event__detail">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                    <line x1="16" y1="2" x2="16" y2="6"/>
                    <line x1="8" y1="2" x2="8" y2="6"/>
                    <line x1="3" y1="10" x2="21" y2="10"/>
                </svg>
                <time datetime="<?= htmlspecialchars($event_date) ?>"><?= htmlspecialchars($display_date) ?></time>
            </div>
            <div class="next-event__detail">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                    <circle cx="12" cy="10" r="3"/>
                </svg>
                <span><?= htmlspecialchars($event_venue) ?></span>
            </div>
        </div>

        <!-- Countdown -->
        <div class="countdown fade-in" id="countdown" data-event-date="<?= htmlspecialchars($event_date) ?>" role="timer" aria-live="polite" aria-label="Compte à rebours">
            <div class="countdown__box">
                <span class="countdown__number" id="countdown-days">--</span>
                <span class="countdown__label">Jours</span>
            </div>
            <div class="countdown__separator" aria-hidden="true">:</div>
            <div class="countdown__box">
                <span class="countdown__number" id="countdown-hours">--</span>
                <span class="countdown__label">Heures</span>
            </div>
            <div class="countdown__separator" aria-hidden="true">:</div>
            <div class="countdown__box">
                <span class="countdown__number" id="countdown-minutes">--</span>
                <span class="countdown__label">Minutes</span>
            </div>
            <div class="countdown__separator" aria-hidden="true">:</div>
            <div class="countdown__box">
                <span class="countdown__number" id="countdown-seconds">--</span>
                <span class="countdown__label">Secondes</span>
            </div>
        </div>

        <!-- CTA -->
        <div class="next-event__cta fade-in">
            <a href="<?= htmlspecialchars(REVOLUT_PAYMENT_LINK) ?>" class="btn btn--reserve" target="_blank" rel="noopener noreferrer">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M20 12V22H4V12"/>
                    <path d="M22 7H2v5h20V7z"/>
                    <path d="M12 22V7"/>
                    <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"/>
                    <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"/>
                </svg>
                <span>Réserver ma place</span>
            </a>
            <p class="next-event__cta-note">Paiement sécurisé via Revolut</p>
        </div>
    </div>
</section>
