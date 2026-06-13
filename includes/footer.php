<footer class="site-footer" id="footer">
    <div class="footer-container">
        <div class="footer-brand">
            <img src="assets/images/logo.svg" alt="Palette Ébène" width="60" height="60">
            <h2 class="footer-title">Palette <em>Ébène</em></h2>
            <p class="footer-tagline"><?= SITE_TAGLINE ?></p>
        </div>
        <div class="footer-links">
            <h3>Navigation</h3>
            <ul>
                <li><a href="#hero">Accueil</a></li>
                <li><a href="#events">Événements</a></li>
                <li><a href="#about">À Propos</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <div class="footer-social">
            <h3>Suivez-nous</h3>
            <a href="<?= INSTAGRAM_PROFILE_URL ?>" target="_blank" rel="noopener" class="social-link social-instagram" aria-label="Instagram @palette.ebene">
                <svg viewBox="0 0 24 24" fill="currentColor" width="28" height="28"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/></svg>
                @palette.ebene
            </a>
            <a href="<?= GOOGLE_BUSINESS_URL ?>" target="_blank" rel="noopener" class="social-link social-google" aria-label="Google Business">
                <svg viewBox="0 0 24 24" fill="currentColor" width="28" height="28"><path d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.133 0 12.48 0 5.867 0 .307 5.387.307 12s5.56 12 12.173 12c3.573 0 6.267-1.173 8.373-3.36 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.053H12.48z"/></svg>
                Google Business
            </a>
        </div>
        <div class="footer-payment">
            <h3>Paiement</h3>
            <a href="<?= REVOLUT_PAYMENT_LINK ?>" target="_blank" rel="noopener" class="btn btn-gold btn-sm">
                💳 Payer via Revolut
            </a>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?= date('Y') ?> Palette Ébène. Tous droits réservés. | <a href="mailto:<?= CONTACT_EMAIL ?>">contact@paletteebene.art</a></p>
    </div>
</footer>
