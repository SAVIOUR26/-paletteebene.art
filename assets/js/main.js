/* Palette Ébène — Main JavaScript */

/* ── Instagram "Show more / Show less" ──────────────────── */
(function () {
  const btn     = document.getElementById('ig-load-more-btn');
  const moreGrid = document.getElementById('ig-grid-more');
  if (!btn || !moreGrid) return;

  btn.addEventListener('click', function () {
    const expanded = this.getAttribute('aria-expanded') === 'true';

    if (!expanded) {
      moreGrid.hidden = false;
      moreGrid.classList.add('ig-grid-revealed');
      this.setAttribute('aria-expanded', 'true');
      this.innerHTML = `
        <svg class="ig-load-more__icon ig-load-more__icon--up" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <polyline points="18 15 12 9 6 15"/>
        </svg>
        ${this.dataset.labelLess}`;
    } else {
      moreGrid.hidden = true;
      moreGrid.classList.remove('ig-grid-revealed');
      this.setAttribute('aria-expanded', 'false');
      this.innerHTML = `
        <svg class="ig-load-more__icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <polyline points="6 9 12 15 18 9"/>
        </svg>
        ${this.dataset.labelMore}`;
      // Scroll back up to the feed section smoothly
      document.getElementById('instagram')?.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  });
})();

/* ── Hero: mouse parallax on orbs + animated stat count-up ─ */
(function () {
  const hero = document.getElementById('hero');
  const bg   = document.getElementById('hero-bg');
  if (!hero || !bg) return;

  const orbs = bg.querySelectorAll('.hero__gradient-orb');
  const isTouch = window.matchMedia('(pointer: coarse)').matches;

  if (!isTouch && orbs.length) {
    hero.addEventListener('pointermove', (e) => {
      const x = (e.clientX / window.innerWidth  - 0.5) * 2;
      const y = (e.clientY / window.innerHeight - 0.5) * 2;
      orbs.forEach((orb, i) => {
        const strength = (i + 1) * 10;
        orb.style.transform = `translate(${x * strength}px, ${y * strength}px)`;
      });
    });
    hero.addEventListener('pointerleave', () => {
      orbs.forEach(orb => { orb.style.transform = ''; });
    });
  }

  const counters = hero.querySelectorAll('[data-count-to]');
  if (!counters.length) return;

  const animateCount = (el) => {
    const target = parseInt(el.dataset.countTo, 10);
    const duration = 1400;
    const start = performance.now();
    function step(now) {
      const progress = Math.min((now - start) / duration, 1);
      const eased = 1 - Math.pow(1 - progress, 3);
      el.textContent = Math.round(eased * target);
      if (progress < 1) requestAnimationFrame(step);
    }
    requestAnimationFrame(step);
  };

  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      animateCount(entry.target);
      counterObserver.unobserve(entry.target);
    });
  }, { threshold: 0.5 });

  counters.forEach(el => counterObserver.observe(el));
})();

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

  const statusEl  = document.getElementById('contact-form-status');
  const submitBtn = document.getElementById('contact-submit-btn');
  const submitText    = submitBtn ? submitBtn.querySelector('.contact-form__submit-text') : null;
  const submitSpinner = submitBtn ? submitBtn.querySelector('.contact-form__submit-spinner') : null;

  // i18n strings from PHP data attributes
  const msgSuccess = form.dataset.msgSuccess || 'Message sent!';
  const msgError   = form.dataset.msgError   || 'An error occurred.';
  const msgNet     = form.dataset.msgNet     || 'Connection error.';
  const msgSending = form.dataset.msgSending || 'Sending…';

  function setStatus(type, msg) {
    if (!statusEl) return;
    statusEl.className = 'contact-form__status contact-form__status--' + type;
    statusEl.textContent = msg;
    statusEl.hidden = false;
    statusEl.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  }

  function setBusy(busy) {
    if (!submitBtn) return;
    submitBtn.disabled = busy;
    if (submitText) {
      submitText.hidden = busy;
      if (!busy) submitText.textContent = form.dataset.msgSubmit || submitText.textContent;
    }
    if (submitSpinner) submitSpinner.hidden = !busy;
  }

  // Character count for textarea
  const textarea  = form.querySelector('#contact-message');
  const charCount = document.getElementById('message-count');
  if (textarea && charCount) {
    textarea.addEventListener('input', () => {
      charCount.textContent = textarea.value.length + ' / 2000';
    });
  }

  form.addEventListener('submit', async function (e) {
    e.preventDefault();
    if (statusEl) statusEl.hidden = true;
    setBusy(true);

    try {
      const body = new FormData(form);
      const res  = await fetch('/contact.php', { method: 'POST', body });
      const data = await res.json();

      if (data.success) {
        setStatus('success', data.message ?? msgSuccess);
        form.reset();
        if (charCount) charCount.textContent = '0 / 2000';
      } else {
        const msg = data.errors
          ? data.errors.join(' ')
          : (data.message ?? msgError);
        setStatus('error', msg);
      }
    } catch {
      setStatus('error', msgNet);
    } finally {
      setBusy(false);
    }
  });
})();

/* ── Gallery Lightbox ───────────────────────────────────── */
(function () {
  const cards = document.querySelectorAll('.event-card');
  if (!cards.length) return;

  let lightbox = null;

  function closeLightbox() {
    if (lightbox) {
      lightbox.remove();
      lightbox = null;
      document.body.style.overflow = '';
    }
  }

  function openLightbox(card) {
    const title       = card.querySelector('.event-card__title')?.textContent ?? '';
    const date        = card.querySelector('.event-card__date')?.textContent ?? '';
    const desc        = card.querySelector('.event-card__description')?.textContent ?? '';
    const badge       = card.querySelector('.event-badge')?.outerHTML ?? '';
    const collab      = card.querySelector('.event-card__collaborators')?.textContent.trim() ?? '';
    const gradClass   = Array.from(card.classList).find(c => c.startsWith('gradient-')) ?? '';

    lightbox = document.createElement('div');
    lightbox.className = 'lightbox';
    lightbox.setAttribute('role', 'dialog');
    lightbox.setAttribute('aria-modal', 'true');
    lightbox.setAttribute('aria-label', title);

    lightbox.innerHTML = `
      <div class="lightbox__backdrop"></div>
      <div class="lightbox__card">
        <div class="lightbox__image-area event-card__image-area ${gradClass}">
          <div class="event-card__pattern"></div>
          <div class="event-card__glow"></div>
          <button class="lightbox__close" aria-label="Fermer">&times;</button>
        </div>
        <div class="lightbox__content">
          <div class="event-card__meta" style="margin-bottom:0.75rem">
            ${badge}
            <time style="font-size:0.8rem;color:rgba(245,240,232,0.55)">${date}</time>
          </div>
          <h3 style="font-family:var(--font-display);font-size:1.6rem;color:var(--color-cream);margin-bottom:0.75rem">${title}</h3>
          <p style="font-size:0.95rem;color:rgba(245,240,232,0.7);line-height:1.7;margin-bottom:1rem">${desc}</p>
          <p style="font-size:0.8rem;color:rgba(245,240,232,0.45)">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="vertical-align:middle;margin-right:5px"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            ${collab}
          </p>
        </div>
      </div>`;

    document.body.appendChild(lightbox);
    document.body.style.overflow = 'hidden';

    lightbox.querySelector('.lightbox__backdrop').addEventListener('click', closeLightbox);
    lightbox.querySelector('.lightbox__close').addEventListener('click', closeLightbox);
  }

  cards.forEach(card => {
    card.addEventListener('click', () => openLightbox(card));
    card.setAttribute('tabindex', '0');
    card.addEventListener('keydown', e => {
      if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); openLightbox(card); }
    });
  });

  document.addEventListener('keydown', e => {
    if (e.key === 'Escape' && lightbox) closeLightbox();
  });
})();

