<?php
$events = [
    [
        'name'          => 'Vernissage Ébène Vol. I',
        'date'          => 'Mars 2024',
        'type'          => 'Vernissage',
        'type_color'    => 'badge--gold',
        'gradient'      => 'linear-gradient(135deg, #2C1810 0%, #6B3A2A 40%, #D4A853 100%)',
        'description'   => 'Ouverture grandiose de la première édition — une plongée au cœur de l\'art contemporain africain.',
        'collaborators' => ['Atelier Kōra', 'Galerie Noire', 'DJ Sankofa'],
        'attendees'     => '120+',
    ],
    [
        'name'          => 'Nuit des Cultures',
        'date'          => 'Juin 2024',
        'type'          => 'Soirée Culturelle',
        'type_color'    => 'badge--purple',
        'gradient'      => 'linear-gradient(135deg, #1A0A2E 0%, #8B2FC9 50%, #C0392B 100%)',
        'description'   => 'Une nuit inoubliable mêlant musique live, spoken word et installations visuelles.',
        'collaborators' => ['Collectif Lumières', 'Poètes de Rue', 'Orchestre Baobab'],
        'attendees'     => '200+',
    ],
    [
        'name'          => 'Exposition Diaspora',
        'date'          => 'Août 2024',
        'type'          => 'Exposition',
        'type_color'    => 'badge--teal',
        'gradient'      => 'linear-gradient(135deg, #0D3333 0%, #1A7A7A 45%, #D4A853 100%)',
        'description'   => 'Deux semaines d\'exposition réunissant 15 artistes de la diaspora africaine mondiale.',
        'collaborators' => ['Maison des Arts', 'Africa Now', 'Fondation Diaspora'],
        'attendees'     => '350+',
    ],
    [
        'name'          => 'Soirée Jazz & Canvas',
        'date'          => 'Octobre 2024',
        'type'          => 'Performance',
        'type_color'    => 'badge--red',
        'gradient'      => 'linear-gradient(135deg, #3D0C0C 0%, #C0392B 45%, #2C1810 100%)',
        'description'   => 'Jazz live en direct pendant que des artistes peignent sur scène — une fusion unique.',
        'collaborators' => ['Jazz Collectif Paris', 'Studio Canvas', 'Bar Le Monde'],
        'attendees'     => '180+',
    ],
    [
        'name'          => 'Ébène Noël',
        'date'          => 'Décembre 2024',
        'type'          => 'Soirée Culturelle',
        'type_color'    => 'badge--gold',
        'gradient'      => 'linear-gradient(135deg, #1A0A0A 0%, #2C1810 30%, #8B2FC9 70%, #D4A853 100%)',
        'description'   => 'Célébration de fin d\'année avec vente d\'art, musique et gastronomie afro-caribéenne.',
        'collaborators' => ['Saveurs d\'Afrique', 'Marché Artisanal', 'Chorale Ubuntu'],
        'attendees'     => '250+',
    ],
    [
        'name'          => 'Masques & Mémoires',
        'date'          => 'Février 2025',
        'type'          => 'Vernissage',
        'type_color'    => 'badge--teal',
        'gradient'      => 'linear-gradient(135deg, #0D1A33 0%, #1A3A7A 40%, #8B2FC9 75%, #D4A853 100%)',
        'description'   => 'Exploration des masques rituels africains à travers l\'art contemporain et la mémoire collective.',
        'collaborators' => ['Musée du Quai Branly', 'Artistes Réunis', 'Dr. Aminata Diallo'],
        'attendees'     => '300+',
    ],
];
?>
<section class="events" id="evenements" aria-labelledby="events-title">
    <div class="events__container">
        <!-- Section Header -->
        <div class="section-header fade-in">
            <span class="section-eyebrow">Notre parcours</span>
            <h2 class="section-title" id="events-title">Événements Passés</h2>
            <p class="section-subtitle">Six moments d'exception qui ont marqué la scène culturelle parisienne.</p>
            <div class="section-divider" aria-hidden="true"></div>
        </div>

        <!-- Events Grid -->
        <div class="events__grid" role="list">
            <?php foreach ($events as $index => $event): ?>
            <article
                class="event-card fade-in"
                role="listitem"
                data-index="<?= $index ?>"
                tabindex="0"
                aria-label="<?= htmlspecialchars($event['name']) ?> — <?= htmlspecialchars($event['date']) ?>"
            >
                <!-- Card Visual -->
                <div class="event-card__visual" style="background: <?= $event['gradient'] ?>;" aria-hidden="true">
                    <div class="event-card__overlay"></div>
                    <div class="event-card__attendees">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                        <span><?= htmlspecialchars($event['attendees']) ?></span>
                    </div>
                    <div class="event-card__monogram"><?= mb_substr($event['name'], 0, 1) ?></div>
                </div>

                <!-- Card Content -->
                <div class="event-card__content">
                    <div class="event-card__meta">
                        <span class="badge <?= $event['type_color'] ?>"><?= htmlspecialchars($event['type']) ?></span>
                        <time class="event-card__date"><?= htmlspecialchars($event['date']) ?></time>
                    </div>

                    <h3 class="event-card__title"><?= htmlspecialchars($event['name']) ?></h3>
                    <p class="event-card__description"><?= htmlspecialchars($event['description']) ?></p>

                    <!-- Collaborators -->
                    <div class="event-card__collaborators">
                        <span class="event-card__collaborators-label">Avec :</span>
                        <ul class="event-card__collaborators-list" role="list">
                            <?php foreach ($event['collaborators'] as $collab): ?>
                            <li><?= htmlspecialchars($collab) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <!-- Hover expand indicator -->
                <div class="event-card__expand" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8"/>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                        <line x1="11" y1="8" x2="11" y2="14"/>
                        <line x1="8" y1="11" x2="14" y2="11"/>
                    </svg>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
