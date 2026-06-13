<?php
$events = [
    [
        'title'        => 'Vernissage Couleurs du Monde',
        'date'         => 'Mars 2024',
        'type'         => 'Exposition',
        'type_color'   => 'teal',
        'description'  => 'Une exposition collective d\'artistes afro-diasporiques explorant l\'identité à travers la peinture et la sculpture.',
        'collaborators'=> ['Galerie Lumière', 'Association AfroArts'],
        'gradient'     => 'linear-gradient(135deg, #1a0a2e 0%, #6b2d8b 50%, #c45c3a 100%)',
        'emoji'        => '🎨',
    ],
    [
        'title'        => 'Soirée Jazz & Soul',
        'date'         => 'Novembre 2023',
        'type'         => 'Concert',
        'type_color'   => 'gold',
        'description'  => 'Une nuit de jazz live et de soul music avec des artistes venus de toute la diaspora africaine.',
        'collaborators'=> ['Club Le Métronome', 'DJ Kofi B'],
        'gradient'     => 'linear-gradient(135deg, #0d1b2a 0%, #1b4332 50%, #d4a853 100%)',
        'emoji'        => '🎷',
    ],
    [
        'title'        => 'Afrobeats Dance Night',
        'date'         => 'Juillet 2023',
        'type'         => 'Soirée Dansante',
        'type_color'   => 'red',
        'description'  => 'Une explosion de rythmes afrobeats, amapiano et dancehall avec les meilleurs DJs de Paris.',
        'collaborators'=> ['Studio Rythmik', 'Collectif Diaspora'],
        'gradient'     => 'linear-gradient(135deg, #1a0000 0%, #8b1a1a 50%, #ff6b35 100%)',
        'emoji'        => '🕺',
    ],
    [
        'title'        => 'Conférence: Art & Identité',
        'date'         => 'Avril 2023',
        'type'         => 'Conférence',
        'type_color'   => 'purple',
        'description'  => 'Une journée de réflexion sur la place de l\'artiste afro-diasporique dans le monde contemporain.',
        'collaborators'=> ['Institut de Cultures Noires', 'Université Paris-VIII'],
        'gradient'     => 'linear-gradient(135deg, #0a0a1a 0%, #2d1b69 50%, #a855f7 100%)',
        'emoji'        => '🎤',
    ],
    [
        'title'        => 'Marché des Arts Créatifs',
        'date'         => 'Décembre 2023',
        'type'         => 'Marché',
        'type_color'   => 'teal',
        'description'  => 'Un marché festif réunissant créateurs, artisans et artistes afro-diasporiques pour les fêtes.',
        'collaborators'=> ['Paris Créatif', 'Black Business Network'],
        'gradient'     => 'linear-gradient(135deg, #001a1a 0%, #006666 50%, #00d4aa 100%)',
        'emoji'        => '🛍️',
    ],
    [
        'title'        => 'Showcase Poésie Urbaine',
        'date'         => 'Février 2024',
        'type'         => 'Slam/Poésie',
        'type_color'   => 'gold',
        'description'  => 'Une soirée slam et poésie orale célébrant les voix de la diaspora, entre tradition et modernité.',
        'collaborators'=> ['La Scène Libre', 'Paroles Noires Collectif'],
        'gradient'     => 'linear-gradient(135deg, #1a1200 0%, #7a5c00 50%, #d4a853 100%)',
        'emoji'        => '📝',
    ],
];
?>
<section class="section events-section" id="events">
    <div class="section-container">
        <div class="section-header">
            <span class="section-badge">Nos Événements</span>
            <h2 class="section-title">Galerie des <em>Moments</em></h2>
            <p class="section-subtitle">Chaque événement est une célébration — de la culture, de la créativité et de la communauté.</p>
        </div>
        <div class="events-grid" id="events-grid">
            <?php foreach ($events as $i => $event): ?>
            <article class="event-card" data-index="<?= $i ?>" style="--card-gradient: <?= $event['gradient'] ?>">
                <div class="event-card-image" style="background: <?= $event['gradient'] ?>">
                    <span class="event-emoji" aria-hidden="true"><?= $event['emoji'] ?></span>
                    <div class="event-card-overlay"></div>
                    <span class="event-type-badge badge-<?= $event['type_color'] ?>"><?= htmlspecialchars($event['type']) ?></span>
                </div>
                <div class="event-card-body">
                    <time class="event-date"><?= htmlspecialchars($event['date']) ?></time>
                    <h3 class="event-title"><?= htmlspecialchars($event['title']) ?></h3>
                    <p class="event-description"><?= htmlspecialchars($event['description']) ?></p>
                    <div class="event-collaborators">
                        <span class="collab-label">En collaboration avec:</span>
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
