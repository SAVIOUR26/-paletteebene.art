<?php
$events = [
    [
        'title_key'    => 'event_1_title',
        'date_key'     => 'event_1_date',
        'type_key'     => 'event_1_type',
        'desc_key'     => 'event_1_desc',
        'type_color'   => 'teal',
        'collaborators'=> ['Galerie Lumière', 'Association AfroArts'],
        'gradient'     => 'linear-gradient(135deg, #1a0a2e 0%, #6b2d8b 50%, #c45c3a 100%)',
        'emoji'        => '🎨',
    ],
    [
        'title_key'    => 'event_2_title',
        'date_key'     => 'event_2_date',
        'type_key'     => 'event_2_type',
        'desc_key'     => 'event_2_desc',
        'type_color'   => 'gold',
        'collaborators'=> ['Club Le Métronome', 'DJ Kofi B'],
        'gradient'     => 'linear-gradient(135deg, #0d1b2a 0%, #1b4332 50%, #d4a853 100%)',
        'emoji'        => '🎷',
    ],
    [
        'title_key'    => 'event_3_title',
        'date_key'     => 'event_3_date',
        'type_key'     => 'event_3_type',
        'desc_key'     => 'event_3_desc',
        'type_color'   => 'red',
        'collaborators'=> ['Studio Rythmik', 'Collectif Diaspora'],
        'gradient'     => 'linear-gradient(135deg, #1a0000 0%, #8b1a1a 50%, #ff6b35 100%)',
        'emoji'        => '🕺',
    ],
    [
        'title_key'    => 'event_4_title',
        'date_key'     => 'event_4_date',
        'type_key'     => 'event_4_type',
        'desc_key'     => 'event_4_desc',
        'type_color'   => 'purple',
        'collaborators'=> ['Institut de Cultures Noires', 'Université Paris-VIII'],
        'gradient'     => 'linear-gradient(135deg, #0a0a1a 0%, #2d1b69 50%, #a855f7 100%)',
        'emoji'        => '🎤',
    ],
    [
        'title_key'    => 'event_5_title',
        'date_key'     => 'event_5_date',
        'type_key'     => 'event_5_type',
        'desc_key'     => 'event_5_desc',
        'type_color'   => 'teal',
        'collaborators'=> ['Paris Créatif', 'Black Business Network'],
        'gradient'     => 'linear-gradient(135deg, #001a1a 0%, #006666 50%, #00d4aa 100%)',
        'emoji'        => '🛍️',
    ],
    [
        'title_key'    => 'event_6_title',
        'date_key'     => 'event_6_date',
        'type_key'     => 'event_6_type',
        'desc_key'     => 'event_6_desc',
        'type_color'   => 'gold',
        'collaborators'=> ['La Scène Libre', 'Paroles Noires Collectif'],
        'gradient'     => 'linear-gradient(135deg, #1a1200 0%, #7a5c00 50%, #d4a853 100%)',
        'emoji'        => '📝',
    ],
];
?>
<section class="section events-section" id="evenements" aria-labelledby="events-title">
    <div class="section-container">
        <div class="section-header">
            <span class="section-badge"><?= htmlspecialchars(t('events_eyebrow')) ?></span>
            <h2 class="section-title" id="events-title"><?= htmlspecialchars(t('events_title')) ?></h2>
            <p class="section-subtitle"><?= htmlspecialchars(t('events_subtitle')) ?></p>
        </div>
        <div class="events-grid" id="events-grid">
            <?php foreach ($events as $i => $event): ?>
            <article class="event-card" data-index="<?= $i ?>" style="--card-gradient: <?= $event['gradient'] ?>">
                <div class="event-card-image" style="background: <?= $event['gradient'] ?>">
                    <span class="event-emoji" aria-hidden="true"><?= $event['emoji'] ?></span>
                    <div class="event-card-overlay"></div>
                    <span class="event-type-badge badge-<?= $event['type_color'] ?>"><?= htmlspecialchars(t($event['type_key'])) ?></span>
                </div>
                <div class="event-card-body">
                    <time class="event-date"><?= htmlspecialchars(t($event['date_key'])) ?></time>
                    <h3 class="event-title"><?= htmlspecialchars(t($event['title_key'])) ?></h3>
                    <p class="event-description"><?= htmlspecialchars(t($event['desc_key'])) ?></p>
                    <div class="event-collaborators">
                        <span class="collab-label"><?= htmlspecialchars(t('events_collab')) ?>:</span>
                        <?php foreach ($event['collaborators'] as $collab): ?>
                            <span class="collab-tag"><?= htmlspecialchars($collab) ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
