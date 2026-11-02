/* ==========================================================================
   Maya Devi University — homepage edition 3 · index-3.php
   Light interactions only: hero slider, card rails, programme chooser,
   journey highlight, poster fade, admission steps, counters, fade-ins.
   No dependencies.
   ========================================================================== */
(function () {
  'use strict';

  var root = document.querySelector('.i3');
  if (!root) { return; }
  var $ = function (s, c) { return (c || document).querySelector(s); };
  var $$ = function (s, c) { return Array.prototype.slice.call((c || document).querySelectorAll(s)); };
  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var vh = window.innerHeight;
  var onScroll = [];

  /* auto-advancing set with goto / next / prev */
  function cycler(count, show, ms) {
    var i = 0, t = 0;
    function go(n) { i = (n + count) % count; show(i); restart(); }
    function restart() { clearTimeout(t); if (!reduced && ms) { t = setTimeout(function () { if (document.hidden) { restart(); } else { go(i + 1); } }, ms); } }
    restart();
    return { go: go, next: function () { go(i + 1); }, prev: function () { go(i - 1); } };
  }
  function rail(track, prev, next) {
    if (!track) { return; }
    function step() { var c = track.firstElementChild; return c ? c.getBoundingClientRect().width + 20 : 300; }
    if (prev) { prev.addEventListener('click', function () { track.scrollBy({ left: -step(), behavior: 'smooth' }); }); }
    if (next) {
      next.addEventListener('click', function () {
        if (track.scrollLeft + track.clientWidth >= track.scrollWidth - 8) { track.scrollTo({ left: 0, behavior: 'smooth' }); }
        else { track.scrollBy({ left: step(), behavior: 'smooth' }); }
      });
    }
  }

  /* sticky header offset (main.js toggles .stick on .header-bottom) */
  var header = $('.header-bottom');
  onScroll.push(function () {
    var t = 0;
    if (header) { var p = getComputedStyle(header).position; if (p === 'fixed' || p === 'sticky') { t = header.offsetHeight; } }
    root.style.setProperty('--top', t + 'px');
  });

  /* hero slider */
  var hero = $('[data-hero]', root);
  var slides = $$('[data-slide]', hero), dots = $$('[data-dot]', hero);
  var heroC = cycler(slides.length, function (n) {
    slides.forEach(function (s, k) { s.classList.toggle('is-on', k === n); });
    dots.forEach(function (d, k) { d.classList.toggle('is-on', k === n); });
  }, 6000);
  dots.forEach(function (d, k) { d.addEventListener('click', function () { heroC.go(k); }); });
  $('[data-prev]', hero).addEventListener('click', heroC.prev);
  $('[data-next]', hero).addEventListener('click', heroC.next);
  var sx = null;
  hero.addEventListener('touchstart', function (e) { sx = e.touches[0].clientX; }, { passive: true });
  hero.addEventListener('touchend', function (e) {
    if (sx === null) { return; }
    var dx = e.changedTouches[0].clientX - sx; sx = null;
    if (Math.abs(dx) > 50) { if (dx < 0) { heroC.next(); } else { heroC.prev(); } }
  });

  /* welcome section — campus video loads only when played */
  $$('[data-video]', root).forEach(function (box) {
    var btn = $('button', box);
    btn.addEventListener('click', function () {
      var f = document.createElement('iframe');
      f.src = 'https://www.youtube.com/embed/Gm-KE2N_5ws?autoplay=1&rel=0&playsinline=1';
      f.title = 'Maya Devi University campus video';
      f.allow = 'autoplay; encrypted-media; picture-in-picture; fullscreen';
      f.allowFullscreen = true;
      box.appendChild(f);
      btn.remove();
    });
  });

  /* rails */
  rail($('[data-sc-rail]', root), $('[data-sc-prev]', root), $('[data-sc-next]', root));
  rail($('[data-ev-rail]', root), $('[data-ev-prev]', root), $('[data-ev-next]', root));

  /* "education that's personal" — highlight the card in view */
  var jnav = $$('[data-jnav]', root), jcards = $$('[data-jcard]', root);
  onScroll.push(function () {
    if (!jcards.length) { return; }
    var best = 0, bestD = Infinity;
    jcards.forEach(function (c, k) { var r = c.getBoundingClientRect(); var d = Math.abs(r.top + r.height / 2 - vh / 2); if (d < bestD) { bestD = d; best = k; } });
    jnav.forEach(function (b, k) { b.classList.toggle('is-on', k === best); });
  });
  jnav.forEach(function (b, k) {
    b.addEventListener('click', function () {
      var r = jcards[k].getBoundingClientRect();
      window.scrollBy({ top: r.top + r.height / 2 - vh / 2, behavior: reduced ? 'auto' : 'smooth' });
    });
  });

  /* programme chooser — levels, search, "+ more" */
  var progs = $('[data-progs]', root);
  var levelBtns = $$('[data-level]', progs), panes = $$('[data-pane]', progs);
  var find = $('[data-find]', progs), empty = $('[data-empty]', progs);
  var level = 'ug';
  function filter() {
    var q = (find.value || '').trim().toLowerCase().replace(/\./g, '');
    progs.classList.toggle('is-search', !!q);
    var total = 0;
    panes.forEach(function (p) {
      var hits = 0;
      $$('[data-school]', p).forEach(function (s) {
        var sh = 0, schoolName = $('h3', s).textContent.toLowerCase();
        $$('[data-prog]', s).forEach(function (li) {
          var ok = !q || li.getAttribute('data-prog').replace(/\./g, '').indexOf(q) > -1 || schoolName.indexOf(q) > -1;
          li.hidden = !ok; if (ok) { sh++; }
        });
        s.hidden = sh === 0; hits += sh;
      });
      p.hidden = (q ? false : p.getAttribute('data-pane') !== level) || hits === 0;
      if (!p.hidden) { total += hits; }
    });
    empty.hidden = total > 0;
  }
  levelBtns.forEach(function (b) {
    b.addEventListener('click', function () {
      level = b.getAttribute('data-level'); find.value = '';
      levelBtns.forEach(function (x) { var on = x === b; x.classList.toggle('is-on', on); x.setAttribute('aria-selected', on ? 'true' : 'false'); });
      filter();
    });
  });
  find.addEventListener('input', filter);
  $$('[data-more]', progs).forEach(function (b) { b.addEventListener('click', function () { b.closest('[data-school]').classList.add('is-open'); }); });

  /* placement posters */
  var fade = $('[data-poster-fade]', root);
  if (fade) {
    var pimgs = $$('img', fade);
    var pc = cycler(pimgs.length, function (n) { pimgs.forEach(function (im, k) { im.classList.toggle('is-on', k === n); }); }, 4000);
    $('[data-po-prev]', root).addEventListener('click', pc.prev);
    $('[data-po-next]', root).addEventListener('click', pc.next);
  }

  /* admission steps */
  var stepBtns = $$('[data-step]', root), stepRows = $$('[data-step-row]', root);
  if (stepBtns.length) {
    var sc = cycler(stepBtns.length, function (n) {
      stepBtns.forEach(function (b, k) { b.classList.toggle('is-on', k === n); b.setAttribute('aria-selected', k === n ? 'true' : 'false'); });
      stepRows.forEach(function (r, k) { r.classList.toggle('is-on', k <= n); });
    }, 3500);
    stepBtns.forEach(function (b, k) { b.addEventListener('click', function () { sc.go(k); }); });
  }

  /* counters (once) */
  var counters = $$('[data-count]', root).map(function (el) { return { el: el, to: parseFloat(el.getAttribute('data-count')), done: false }; });
  onScroll.push(function () {
    counters.forEach(function (c) {
      if (c.done) { return; }
      var r = c.el.getBoundingClientRect();
      if (r.top < vh * 0.9 && r.bottom > 0) {
        c.done = true;
        if (reduced) { c.el.textContent = c.to.toLocaleString('en-IN'); return; }
        var t0 = Date.now();
        (function step() {
          var p = Math.min(1, Math.max(0, (Date.now() - t0) / 1500));
          c.el.textContent = Math.round(c.to * (1 - Math.pow(1 - p, 3))).toLocaleString('en-IN');
          if (p < 1) { setTimeout(step, 30); }
        })();
      }
    });
  });

  /* gentle fade-in, once */
  var reveals = $$('[data-r]', root);
  onScroll.push(function () {
    reveals = reveals.filter(function (el) {
      var r = el.getBoundingClientRect();
      if (r.top < vh * 0.94) { el.classList.add('is-in'); return false; }
      return true;
    });
  });

  var ticking = false;
  function tick() { ticking = false; for (var i = 0; i < onScroll.length; i++) { onScroll[i](); } }
  window.addEventListener('scroll', function () { if (!ticking) { ticking = true; requestAnimationFrame(tick); } }, { passive: true });
  window.addEventListener('resize', function () { vh = window.innerHeight; tick(); });
  window.addEventListener('load', tick);
  tick();

  window.__i3Ready = true;
  window.__i3 = { tick: tick };
})();
