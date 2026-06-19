<?php
// Pull the real photo behind a handful of our own Instagram posts so the
// past-events grid shows actual event imagery instead of flat gradients.
function ig_poster_src(string $post_url): ?string {
    if (preg_match('#instagram\.com/(?:[^/]+/)?(p|reel)/([^/?]+)#', $post_url, $m)) {
        return "https://www.instagram.com/{$m[1]}/{$m[2]}/media/?size=l";
    }
    return null;
}

$event_posters = $instagram_posts ?? [];

$events = [
    [
        'title_key'    => 'event_1_title',
        'date_key'     => 'event_1_date',
        'type_key'     => 'event_1_type',
        'desc_key'     => 'event_1_desc',
        'badge'        => 'badge--expo',
        'gradient'     => 'gradient-event-1',
        'collaborators'=> ['Galerie Lumière', 'Association AfroArts'],
        'poster'       => $event_posters[1] ?? null,
    ],
    [
        'title_key'    => 'event_2_title',
        'date_key'     => 'event_2_date',
        'type_key'     => 'event_2_type',
        'desc_key'     => 'event_2_desc',
        'badge'        => 'badge--concert',
        'gradient'     => 'gradient-event-2',
        'collaborators'=> ['Club Le Métronome', 'DJ Kofi B'],
        'poster'       => $event_posters[4] ?? null,
    ],
    [
        'title_key'    => 'event_3_title',
        'date_key'     => 'event_3_date',
        'type_key'     => 'event_3_type',
        'desc_key'     => 'event_3_desc',
        'badge'        => 'badge--soiree',
        'gradient'     => 'gradient-event-3',
        'collaborators'=> ['Studio Rythmik', 'Collectif Diaspora'],
        'poster'       => $event_posters[2] ?? null,
    ],
    [
        'title_key'    => 'event_4_title',
        'date_key'     => 'event_4_date',
        'type_key'     => 'event_4_type',
        'desc_key'     => 'event_4_desc',
        'badge'        => 'badge--vernissage',
        'gradient'     => 'gradient-event-4',
        'collaborators'=> ['Institut de Cultures Noires', 'Université Paris-VIII'],
        'poster'       => $event_posters[13] ?? null,
    ],
    [
        'title_key'    => 'event_5_title',
        'date_key'     => 'event_5_date',
        'type_key'     => 'event_5_type',
        'desc_key'     => 'event_5_desc',
        'badge'        => 'badge--expo',
        'gradient'     => 'gradient-event-5',
        'collaborators'=> ['Paris Créatif', 'Black Business Network'],
        'poster'       => $event_posters[9] ?? null,
    ],
    [
        'title_key'    => 'event_6_title',
        'date_key'     => 'event_6_date',
        'type_key'     => 'event_6_type',
        'desc_key'     => 'event_6_desc',
        'badge'        => 'badge--soiree',
        'gradient'     => 'gradient-event-6',
        'collaborators'=> ['La Scène Libre', 'Paroles Noires Collectif'],
        'poster'       => $event_posters[6] ?? null,
    ],
    [
        'title_key'    => 'event_7_title',
        'date_key'     => 'event_7_date',
        'type_key'     => 'event_7_type',
        'desc_key'     => 'event_7_desc',
        'badge'        => 'badge--vernissage',
        'gradient'     => 'gradient-event-1',
        'collaborators'=> ['Galerie Lumière', 'Collectif Diaspora'],
        'poster'       => $event_posters[0] ?? null,
    ],
];
?>
<section class="events-section" id="evenements" aria-labelledby="events-title">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-eyebrow"><?= htmlspecialchars(t('events_eyebrow')) ?></span>
            <h2 class="section-title" id="events-title"><?= htmlspecialchars(t('events_title')) ?></h2>
            <p class="section-subtitle"><?= htmlspecialchars(t('events_subtitle')) ?></p>
        </div>

        <div class="events-grid" id="events-grid">
            <?php foreach ($events as $i => $event): ?>
            <article class="event-card <?= $event['gradient'] ?> fade-in" data-delay="<?= $i * 60 ?>" tabindex="0">
                <div class="event-card__image-area">
                    <?php if ($event['poster']): ?>
                    <img class="event-card__poster" src="<?= htmlspecialchars(ig_poster_src($event['poster'])) ?>" alt="<?= htmlspecialchars(t($event['title_key'])) ?>" loading="lazy">
                    <?php else: ?>
                    <div class="event-card__pattern"></div>
                    <?php endif; ?>
                    <div class="event-card__glow"></div>
                    <div class="event-card__hover-overlay">
                        <span class="event-card__hover-text"><?= htmlspecialchars(t('events_view_more')) ?></span>
                    </div>
                    <?php if ($event['poster']): ?>
                    <a class="event-card__ig-link" href="<?= htmlspecialchars($event['poster']) ?>" target="_blank" rel="noopener noreferrer" aria-label="<?= htmlspecialchars(t('ig_cta')) ?>" tabindex="-1"></a>
                    <?php endif; ?>
                </div>
                <div class="event-card__content">
                    <div class="event-card__meta">
                        <span class="event-badge <?= $event['badge'] ?>"><?= htmlspecialchars(t($event['type_key'])) ?></span>
                        <time class="event-card__date"><?= htmlspecialchars(t($event['date_key'])) ?></time>
                    </div>
                    <h3 class="event-card__title"><?= htmlspecialchars(t($event['title_key'])) ?></h3>
                    <p class="event-card__description"><?= htmlspecialchars(t($event['desc_key'])) ?></p>
                    <div class="event-card__footer">
                        <p class="event-card__collaborators">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                            <?= htmlspecialchars(implode(' · ', $event['collaborators'])) ?>
                        </p>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
