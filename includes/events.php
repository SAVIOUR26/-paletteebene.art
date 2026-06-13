<?php
/**
 * Palette Ébène — Past Events Gallery
 */

$past_events = [
    [
        'name'          => 'Soirée Ébène Vol. I',
        'date'          => '15 Mars 2024',
        'type'          => 'Soirée Culturelle',
        'type_class'    => 'badge--soiree',
        'collaborators' => 'DJ Wax & Collectif Couleurs',
        'gradient'      => 'gradient-event-1',
        'description'   => 'Une première soirée fondatrice célébrant les artistes de la diaspora africaine.',
    ],
    [
        'name'          => 'Vernissage Afrotopia',
        'date'          => '22 Avril 2024',
        'type'          => 'Vernissage',
        'type_class'    => 'badge--vernissage',
        'collaborators' => 'Galerie Lumières & Awa Diallo',
        'gradient'      => 'gradient-event-2',
        'description'   => 'Exposition de peintures et sculptures d\'artistes contemporains africains.',
    ],
    [
        'name'          => 'Rythmes & Couleurs',
        'date'          => '7 Juin 2024',
        'type'          => 'Concert',
        'type_class'    => 'badge--concert',
        'collaborators' => 'Ensemble Mandingue & Percujam',
        'gradient'      => 'gradient-event-3',
        'description'   => 'Concert fusion mêlant musiques traditionnelles et contemporaines d\'Afrique.',
    ],
    [
        'name'          => 'Soirée Ébène Vol. II',
        'date'          => '14 Septembre 2024',
        'type'          => 'Soirée Culturelle',
        'type_class'    => 'badge--soiree',
        'collaborators' => 'Kossi Art & Collectif Palette',
        'gradient'      => 'gradient-event-4',
        'description'   => 'Retour triomphal avec performances live, installations et poésie spoken word.',
    ],
    [
        'name'          => 'Exposition Racines',
        'date'          => '3 Novembre 2024',
        'type'          => 'Exposition',
        'type_class'    => 'badge--expo',
        'collaborators' => 'Maison des Arts & Diaspora Créative',
        'gradient'      => 'gradient-event-5',
        'description'   => 'Une exposition photographique sur les traditions et la modernité africaine.',
    ],
    [
        'name'          => 'Gala de Fin d\'Année',
        'date'          => '14 Décembre 2024',
        'type'          => 'Soirée Culturelle',
        'type_class'    => 'badge--soiree',
        'collaborators' => 'Tous nos artistes partenaires',
        'gradient'      => 'gradient-event-6',
        'description'   => 'Soirée de clôture festive réunissant l\'ensemble de la communauté Palette Ébène.',
    ],
];
?>
<section class="events-section" id="evenements" aria-labelledby="events-title">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-eyebrow">Notre histoire</span>
            <h2 class="section-title" id="events-title">Nos Événements Passés</h2>
            <p class="section-subtitle">
                Chaque événement est une célébration unique de la richesse culturelle africaine et de sa diaspora.
            </p>
        </div>

        <div class="events-grid">
            <?php foreach ($past_events as $index => $event): ?>
            <article class="event-card <?= $event['gradient'] ?> fade-in"
                     data-delay="<?= $index * 100 ?>"
                     role="article"
                     aria-label="<?= htmlspecialchars($event['name']) ?>">

                <div class="event-card__image-area" aria-hidden="true">
                    <div class="event-card__pattern"></div>
                    <div class="event-card__glow"></div>
                </div>

                <div class="event-card__content">
                    <div class="event-card__meta">
                        <span class="event-badge <?= $event['type_class'] ?>">
                            <?= htmlspecialchars($event['type']) ?>
                        </span>
                        <time class="event-card__date"><?= htmlspecialchars($event['date']) ?></time>
                    </div>

                    <h3 class="event-card__title"><?= htmlspecialchars($event['name']) ?></h3>
                    <p class="event-card__description"><?= htmlspecialchars($event['description']) ?></p>

                    <div class="event-card__footer">
                        <div class="event-card__collaborators">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                <circle cx="9" cy="7" r="4"/>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                            </svg>
                            <?= htmlspecialchars($event['collaborators']) ?>
                        </div>
                    </div>
                </div>

                <div class="event-card__hover-overlay" aria-hidden="true">
                    <span class="event-card__hover-text">Voir plus</span>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
