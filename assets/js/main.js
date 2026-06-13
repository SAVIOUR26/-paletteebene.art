/* Palette Ébène — Main JavaScript */

/* ── Sticky Nav ─────────────────────────────────────────── */
(function () {
  const header = document.getElementById('site-header');
  if (!header) return;
  const onScroll = () => header.classList.toggle('scrolled', window.scrollY > 40);
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
})();

/* ── Mobile Nav ─────────────────────────────────────────── */
(function () {
  const btn  = document.getElementById('hamburger-btn');
  const menu = document.getElementById('mobile-menu');
  if (!btn || !menu) return;

  const open = () => {
    menu.hidden = false;
    btn.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
  };
  const close = () => {
    menu.hidden = true;
    btn.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  };

  btn.addEventListener('click', () => menu.hidden ? open() : close());

  menu.querySelectorAll('.navbar__mobile-link').forEach(link => {
    link.addEventListener('click', close);
  });

  document.addEventListener('keydown', e => { if (e.key === 'Escape') close(); });
})();

/* ── Smooth Scroll for anchor links ─────────────────────── */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    const target = document.querySelector(this.getAttribute('href'));
    if (!target) return;
    e.preventDefault();
    const navHeight = document.getElementById('site-header')?.offsetHeight ?? 72;
    const top = target.getBoundingClientRect().top + window.scrollY - navHeight - 8;
    window.scrollTo({ top, behavior: 'smooth' });
  });
});

/* ── Fade-in on scroll (IntersectionObserver) ───────────── */
(function () {
  const els = document.querySelectorAll('.fade-in');
  if (!els.length) return;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      const delay = parseInt(entry.target.dataset.delay ?? 0, 10);
      setTimeout(() => entry.target.classList.add('visible'), delay);
      observer.unobserve(entry.target);
    });
  }, { threshold: 0.12 });

  els.forEach(el => observer.observe(el));
})();

/* ── Countdown Timer ────────────────────────────────────── */
(function () {
  const el = document.getElementById('countdown');
  if (!el) return;

  const rawDate = el.dataset.eventDate;
  if (!rawDate) return;

  const target = new Date(rawDate).getTime();
  const dEl = document.getElementById('countdown-days');
  const hEl = document.getElementById('countdown-hours');
  const mEl = document.getElementById('countdown-minutes');
  const sEl = document.getElementById('countdown-seconds');

  function pad(n) { return String(n).padStart(2, '0'); }

  function tick(numEl, val) {
    if (!numEl) return;
    const old = numEl.textContent;
    const str = pad(val);
    if (old !== str) {
      numEl.textContent = str;
      numEl.classList.remove('tick');
      void numEl.offsetWidth; // reflow
      numEl.classList.add('tick');
    }
  }

  function update() {
    const now  = Date.now();
    const diff = target - now;

    if (diff <= 0) {
      if (dEl) dEl.textContent = '00';
      if (hEl) hEl.textContent = '00';
      if (mEl) mEl.textContent = '00';
      if (sEl) sEl.textContent = '00';
      return;
    }

    const days    = Math.floor(diff / 86400000);
    const hours   = Math.floor((diff % 86400000) / 3600000);
    const minutes = Math.floor((diff % 3600000)  / 60000);
    const seconds = Math.floor((diff % 60000)    / 1000);

    tick(dEl, days);
    tick(hEl, hours);
    tick(mEl, minutes);
    tick(sEl, seconds);
  }

  update();
  setInterval(update, 1000);
})();

/* ── Active nav link on scroll ──────────────────────────── */
(function () {
  const sections = document.querySelectorAll('section[id]');
  const links    = document.querySelectorAll('.navbar__link, .navbar__mobile-link');
  if (!sections.length || !links.length) return;

  const navH = () => document.getElementById('site-header')?.offsetHeight ?? 72;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      links.forEach(link => {
        link.classList.toggle(
          'active',
          link.getAttribute('href') === `#${entry.target.id}`
        );
      });
    });
  }, { rootMargin: `-${navH() + 10}px 0px -60% 0px` });

  sections.forEach(s => observer.observe(s));
})();

/* ── Contact form AJAX submit ───────────────────────────── */
(function () {
  const form = document.getElementById('contact-form');
  if (!form) return;

  form.addEventListener('submit', async function (e) {
    e.preventDefault();
    const btn      = form.querySelector('button[type="submit"]');
    const feedback = document.getElementById('form-feedback');
    if (!btn || !feedback) return;

    btn.disabled = true;
    btn.textContent = 'Envoi en cours…';
    feedback.className = 'form-feedback';
    feedback.textContent = '';

    try {
      const body = new FormData(form);
      const res  = await fetch('/contact.php', { method: 'POST', body });
      const data = await res.json();

      if (data.success) {
        feedback.className = 'form-feedback success';
        feedback.textContent = data.message ?? 'Message envoyé ! Nous vous répondrons bientôt.';
        form.reset();
      } else {
        feedback.className = 'form-feedback error';
        feedback.textContent = data.message ?? 'Une erreur est survenue. Veuillez réessayer.';
      }
    } catch {
      feedback.className = 'form-feedback error';
      feedback.textContent = 'Erreur de connexion. Veuillez vérifier votre réseau.';
    } finally {
      btn.disabled = false;
      btn.textContent = 'Envoyer le message';
    }
  });
})();
