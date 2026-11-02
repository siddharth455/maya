/* ==========================================================================
   Maya Devi University — homepage edition 2 behaviour  (index-2.php)
   Replayable reveals + counters, hero slideshow + program search,
   campus-tour modal, events slider, program explorer filter, poster deck,
   stacking pillars, stories slider.
   ========================================================================== */
(function () {
  'use strict';

  var d = document, w = window, root = d.documentElement;
  var reduce = w.matchMedia && w.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var $ = function (s, c) { return (c || d).querySelector(s); };
  var $$ = function (s, c) { return Array.prototype.slice.call((c || d).querySelectorAll(s)); };
  var clamp = function (v, a, b) { return Math.min(b, Math.max(a, v)); };
  var vh = w.innerHeight;
  var onScreen = function (el) { var r = el.getBoundingClientRect(); return r.bottom > 0 && r.top < vh && !d.hidden; };

  w.__ixReady = true;
  root.classList.remove('ix-fail');

  $$('.ix [data-stagger]').forEach(function (p) {
    Array.prototype.forEach.call(p.children, function (c, i) { c.style.setProperty('--i', i); });
  });

  /* ---------------------------------------------------------------
     Counters — restart every time they come back into view
     --------------------------------------------------------------- */
  function countUp(el) {
    var run = (el.__run || 0) + 1;
    el.__run = run;
    var to = parseFloat(el.getAttribute('data-count'));
    var dec = parseInt(el.getAttribute('data-dec') || '0', 10);
    var pre = el.getAttribute('data-pre') || '', suf = el.getAttribute('data-suf') || '';
    var fmt = function (v) { return pre + (dec ? v.toFixed(dec) : Math.round(v).toLocaleString('en-IN')) + suf; };
    if (reduce) { el.textContent = fmt(to); return; }
    var t0 = null;
    (function tick(ts) {
      if (el.__run !== run) { return; }
      if (ts) {
        if (t0 === null) { t0 = ts; }
        var p = clamp((ts - t0) / 1500, 0, 1);
        el.textContent = fmt(to * (1 - Math.pow(1 - p, 4)));
        if (p >= 1) { return; }
      } else { el.textContent = fmt(0); }
      requestAnimationFrame(tick);
    })();
  }

  /* ---------------------------------------------------------------
     Reveals — toggled both ways so animations replay on every pass
     --------------------------------------------------------------- */
  var watched = $$('.ix [data-r], .ix [data-stagger], .ix .ix-course, .ix .ix-gal, .ix [data-count]');
  if (reduce) { watched.forEach(function (el) { el.classList.add('is-in'); }); watched = []; }

  function show(el) {
    if (el.__in) { return; }
    el.__in = true;
    el.classList.add('is-in');
    if (el.hasAttribute('data-count')) { countUp(el); }
  }
  function hide(el) {
    if (!el.__in) { return; }
    el.__in = false;
    el.classList.remove('is-in');
    if (el.hasAttribute('data-count')) { el.__run = (el.__run || 0) + 1; }
  }
  function checkReveals() {
    var line = vh * 0.92;
    for (var i = 0; i < watched.length; i++) {
      var el = watched[i], r = el.getBoundingClientRect();
      if (!r.height && !r.width) { continue; }            /* filtered out / hidden */
      if ((r.top < line || r.bottom <= vh) && r.top < vh && r.bottom > vh * 0.04) { show(el); }
      else if (r.bottom < 0 || r.top > vh) { hide(el); }  /* fully off screen */
    }
  }

  /* ---------------------------------------------------------------
     Sticky header offset (main.js toggles .stick on .header-bottom)
     --------------------------------------------------------------- */
  var ixRoot = $('.ix');
  var header = $('.header-bottom');
  function measureTop() {
    var t = 0;
    if (header) {
      var pos = getComputedStyle(header).position;
      if (pos === 'fixed' || pos === 'sticky') { t = header.offsetHeight; }
    }
    ixRoot.style.setProperty('--top', t + 'px');
  }
  if (header && 'MutationObserver' in w) {
    new MutationObserver(measureTop).observe(header, { attributes: true, attributeFilter: ['class'] });
  }

  /* ---------------------------------------------------------------
     Hero slideshow
     --------------------------------------------------------------- */
  var hero = $('[data-hero]');
  var slides = $$('.ix-slide');
  var dots = $$('.ix-hero__dots button');
  var copies = $$('[data-hcopy]');
  var slideCur = 0, slideTimer = null;
  function goSlide(i) {
    var prev = slideCur;
    slideCur = (i + slides.length) % slides.length;
    if (prev === slideCur) { return; }
    /* text for each photo: old copy slides away upward, new copy rises in */
    copies.forEach(function (c, k) {
      var on = k === slideCur;
      clearTimeout(c.__t);
      if (k === prev) {
        c.classList.add('is-leaving');
        c.classList.remove('is-on');
        c.__t = setTimeout(function () { c.classList.remove('is-leaving'); }, 650);
      } else if (!on) {
        c.classList.remove('is-on', 'is-leaving');
      }
      c.setAttribute('aria-hidden', on ? 'false' : 'true');
      var link = $('.ix-hcopy__link', c);
      if (link) { link.tabIndex = on ? 0 : -1; }
    });
    var next = copies[slideCur];
    if (next) {
      next.classList.remove('is-leaving');
      setTimeout(function () { if (slideCur === copies.indexOf(next)) { next.classList.add('is-on'); } }, 250);
    }
    slides.forEach(function (s, k) {
      var on = k === slideCur;
      if (on && !s.classList.contains('is-on')) { var im = $('img', s); im.style.animation = 'none'; void im.offsetWidth; im.style.animation = ''; }
      s.classList.toggle('is-on', on);
    });
    dots.forEach(function (b, k) { b.classList.toggle('is-on', k === slideCur); b.setAttribute('aria-selected', k === slideCur ? 'true' : 'false'); });
  }
  function slideAuto() {
    clearInterval(slideTimer);
    if (reduce || slides.length < 2) { return; }
    slideTimer = setInterval(function () { if (hero && onScreen(hero)) { goSlide(slideCur + 1); } }, 7000);
  }
  dots.forEach(function (b, k) { b.addEventListener('click', function () { goSlide(k); slideAuto(); }); });
  slideAuto();

  /* Hero search: jump to the best-matching program or school page */
  var search = $('[data-search]');
  if (search) {
    var index = $$('.ix-course').map(function (c) { var a = $('h3 a', c); return { t: a.textContent.toLowerCase(), u: a.getAttribute('href') }; })
      .concat($$('.ix-school-grid a').map(function (a) { return { t: $('.ix-school__name', a).textContent.replace('School of', '').toLowerCase(), u: a.getAttribute('href') }; }));
    search.addEventListener('submit', function (e) {
      e.preventDefault();
      var q = $('input', search).value.trim().toLowerCase();
      if (!q) { $('input', search).focus(); return; }
      var words = q.split(/\s+/);
      var best = null, bestScore = 0;
      index.forEach(function (it) {
        var s = 0;
        words.forEach(function (wd) { if (it.t.indexOf(wd) > -1) { s++; } });
        if (it.t.indexOf(q) > -1) { s += 2; }
        if (s > bestScore) { bestScore = s; best = it; }
      });
      w.location.href = best ? best.u : 'colleges-departments.php';
    });
  }

  /* Campus tour modal */
  var modal = $('#ixTour');
  var tourBtns = $$('[data-tour]'), tourBtn = null;
  function closeTour() { if (!modal) { return; } modal.hidden = true; $('[data-tour-frame]', modal).innerHTML = ''; if (tourBtn) { tourBtn.focus(); } }
  if (modal && tourBtns.length) {
    tourBtns.forEach(function (b) { b.addEventListener('click', function () {
      tourBtn = b;
      var f = d.createElement('iframe');
      f.src = 'https://www.youtube.com/embed/Gm-KE2N_5ws?autoplay=1&playsinline=1&rel=0';
      f.title = 'Maya Devi University campus tour';
      f.allow = 'autoplay; encrypted-media; picture-in-picture';
      f.allowFullscreen = true;
      $('[data-tour-frame]', modal).appendChild(f);
      modal.hidden = false;
      $('[data-tour-close]', modal).focus();
    }); });
    $('[data-tour-close]', modal).addEventListener('click', closeTour);
    modal.addEventListener('click', function (e) { if (e.target === modal) { closeTour(); } });
    d.addEventListener('keydown', function (e) { if (e.key === 'Escape' && !modal.hidden) { closeTour(); } });
  }

  /* ---------------------------------------------------------------
     Simple sliders (events card, stories)
     --------------------------------------------------------------- */
  function slider(wrap, trackSel, prevSel, nextSel, perView, auto) {
    if (!wrap) { return; }
    var track = $(trackSel, wrap), items = Array.prototype.slice.call(track.children), cur = 0, timer = null;
    function per() { return typeof perView === 'function' ? perView() : perView; }
    function go(i) {
      var max = Math.max(0, items.length - per());
      cur = i > max ? 0 : (i < 0 ? max : i);
      var step = items[1] ? items[1].offsetLeft - items[0].offsetLeft : items[0].offsetWidth;
      track.style.transform = 'translateX(' + (-cur * step) + 'px)';
    }
    function restart() {
      clearInterval(timer);
      if (reduce || !auto) { return; }
      timer = setInterval(function () { if (onScreen(wrap)) { go(cur + 1); } }, auto);
    }
    $(prevSel, wrap).addEventListener('click', function () { go(cur - 1); restart(); });
    $(nextSel, wrap).addEventListener('click', function () { go(cur + 1); restart(); });
    w.addEventListener('resize', function () { go(cur); });
    restart();
  }
  slider($('[data-happen]'), '[data-happen-track]', '[data-happen-prev]', '[data-happen-next]', 1, 5000);
  slider($('[data-stories]'), '[data-story-track]', '[data-story-prev]', '[data-story-next]', function () {
    return w.matchMedia('(max-width: 991px)').matches ? 1 : 2;
  }, 6500);

  /* ---------------------------------------------------------------
     Program explorer: level tabs + text filter
     --------------------------------------------------------------- */
  var explore = $('[data-explore]');
  if (explore) {
    var tabs = $$('[data-level]', $('.ix-filter__tabs', explore));
    var input = $('[data-filter-input]', explore);
    var courses = $$('.ix-course', explore);
    var none = $('[data-courses-none]', explore);
    var level = 'all';
    var apply = function () {
      var q = (input.value || '').trim().toLowerCase(), shown = 0;
      courses.forEach(function (c) {
        var ok = (level === 'all' || c.getAttribute('data-level') === level) && (!q || c.getAttribute('data-text').indexOf(q) > -1);
        c.hidden = !ok;
        hide(c);                                  /* re-run the rise-in for what remains */
        if (ok) { c.style.setProperty('--i', shown % 4); shown++; }
      });
      none.hidden = shown > 0;
      requestAnimationFrame(function () { requestAnimationFrame(frame); });
    };
    tabs.forEach(function (t) {
      t.addEventListener('click', function () {
        level = t.getAttribute('data-level');
        tabs.forEach(function (o) { o.setAttribute('aria-selected', o === t ? 'true' : 'false'); });
        apply();
      });
    });
    input.addEventListener('input', apply);
    courses.forEach(function (c, i) { c.style.setProperty('--i', i % 4); });
  }

  /* ---------------------------------------------------------------
     Learn by doing: tabs swap the big photo (auto-advances in view)
     --------------------------------------------------------------- */
  var learn = $('[data-learn]');
  if (learn) {
    var lTabs = $$('[data-learn-tab]', learn);
    var lSlides = $$('[data-learn-slide]', learn);
    var lCur = 0, lTimer = null, lHover = false;
    var lGo = function (i) {
      lCur = (i + lTabs.length) % lTabs.length;
      lTabs.forEach(function (t, k) { t.setAttribute('aria-selected', k === lCur ? 'true' : 'false'); });
      lSlides.forEach(function (s, k) { s.classList.toggle('is-on', k === lCur); s.setAttribute('aria-hidden', k === lCur ? 'false' : 'true'); });
    };
    var lAuto = function () {
      clearInterval(lTimer);
      if (reduce) { return; }
      lTimer = setInterval(function () { if (!lHover && onScreen(learn)) { lGo(lCur + 1); } }, 5000);
    };
    lTabs.forEach(function (t, k) {
      t.addEventListener('click', function () { lGo(k); lAuto(); });
      t.addEventListener('mouseenter', function () { if (w.matchMedia('(hover: hover)').matches) { lGo(k); lAuto(); } });
    });
    learn.addEventListener('mouseenter', function () { lHover = true; });
    learn.addEventListener('mouseleave', function () { lHover = false; });
    lAuto();
  }

  /* ---------------------------------------------------------------
     Campus life gallery: category filter + lightbox
     --------------------------------------------------------------- */
  var gallery = $('[data-gallery]');
  var lb = $('#ixLightbox');
  if (gallery && lb) {
    var gBtns = $$('.ix-gallery__filters [data-gcat]', gallery);
    var gItems = $$('.ix-gal', gallery);
    var lbImg = $('[data-lb-img]', lb), lbCap = $('[data-lb-cap]', lb);
    var lbList = [], lbCur = 0, lbLast = null;
    gBtns.forEach(function (b) {
      b.addEventListener('click', function () {
        var cat = b.getAttribute('data-gcat'), n = 0;
        gBtns.forEach(function (o) { o.setAttribute('aria-selected', o === b ? 'true' : 'false'); });
        gItems.forEach(function (it) {
          var ok = cat === 'all' || it.getAttribute('data-gcat') === cat;
          it.hidden = !ok;
          hide(it);
          if (ok) { it.style.setProperty('--i', n % 8); n++; }
        });
        requestAnimationFrame(function () { requestAnimationFrame(frame); });
      });
    });
    var lbShow = function (i) {
      lbCur = (i + lbList.length) % lbList.length;
      var im = $('img', lbList[lbCur]);
      lbImg.style.animation = 'none'; void lbImg.offsetWidth; lbImg.style.animation = '';
      lbImg.src = im.getAttribute('src');
      lbImg.alt = im.alt;
      lbCap.textContent = im.alt;
    };
    var lbClose = function () { lb.hidden = true; d.body.style.overflow = ''; if (lbLast) { lbLast.focus(); } };
    gItems.forEach(function (it) {
      $('button', it).addEventListener('click', function () {
        lbList = gItems.filter(function (x) { return !x.hidden; });
        lbLast = this;
        lbShow(lbList.indexOf(it));
        lb.hidden = false;
        d.body.style.overflow = 'hidden';
        $('[data-lb-close]', lb).focus();
      });
    });
    $('[data-lb-close]', lb).addEventListener('click', lbClose);
    $('[data-lb-prev]', lb).addEventListener('click', function () { lbShow(lbCur - 1); });
    $('[data-lb-next]', lb).addEventListener('click', function () { lbShow(lbCur + 1); });
    lb.addEventListener('click', function (e) { if (e.target === lb) { lbClose(); } });
    d.addEventListener('keydown', function (e) {
      if (lb.hidden) { return; }
      if (e.key === 'Escape') { lbClose(); }
      if (e.key === 'ArrowRight') { lbShow(lbCur + 1); }
      if (e.key === 'ArrowLeft') { lbShow(lbCur - 1); }
    });
  }

  /* ---------------------------------------------------------------
     Placement poster deck
     --------------------------------------------------------------- */
  var deck = $('[data-deck]');
  if (deck) {
    var cards = $$('.ix-deck__card', deck);
    var count = $('[data-deck-count]', deck);
    var cur = 0, n = cards.length, timer = null, hover = false;
    var pad = function (v) { return (v < 10 ? '0' : '') + v; };
    var paint = function (leaving) {
      cards.forEach(function (c, i) {
        var k = (i - cur + n) % n;
        if (i === leaving) { c.style.transform = 'translate(-115%, 20px) rotate(-14deg)'; c.style.opacity = '0'; c.style.zIndex = n + 1; return; }
        c.style.zIndex = n - k;
        c.style.opacity = k < 3 ? '1' : '0';
        c.style.transform = 'translate(' + (k * 12) + 'px,' + (k * -10) + 'px) rotate(' + (k * 3) + 'deg) scale(' + (1 - k * 0.04) + ')';
        c.setAttribute('aria-hidden', k === 0 ? 'false' : 'true');
      });
      if (count) { count.textContent = pad(cur + 1) + ' / ' + pad(n); }
    };
    var go = function (dir) {
      var leaving = dir > 0 ? cur : null;
      cur = (cur + dir + n) % n;
      paint(leaving);
      if (leaving !== null) { setTimeout(function () { paint(); }, 520); }
    };
    var restart = function () {
      clearInterval(timer);
      if (reduce) { return; }
      timer = setInterval(function () { if (!hover && onScreen(deck)) { go(1); } }, 3200);
    };
    $('[data-deck-next]', deck).addEventListener('click', function () { go(1); restart(); });
    $('[data-deck-prev]', deck).addEventListener('click', function () { go(-1); restart(); });
    deck.addEventListener('mouseenter', function () { hover = true; });
    deck.addEventListener('mouseleave', function () { hover = false; });
    paint();
    restart();
  }

  /* ---------------------------------------------------------------
     Pillars: each card shrinks back as the next one slides over it
     --------------------------------------------------------------- */
  var pillars = $$('.ix-pillar');
  function pillarScroll() {
    if (reduce || !pillars.length) { return; }
    for (var i = 0; i < pillars.length - 1; i++) {
      var me = pillars[i], next = pillars[i + 1];
      var a = me.getBoundingClientRect(), b = next.getBoundingClientRect();
      if (a.bottom < -200 || a.top > vh) { continue; }
      var p = clamp((a.top + a.height - b.top) / a.height, 0, 1);
      me.style.transform = 'scale(' + (1 - p * 0.07).toFixed(4) + ')';
      me.style.filter = p > 0 ? 'brightness(' + (1 - p * 0.35).toFixed(3) + ')' : '';
    }
  }

  /* ---------------------------------------------------------------
     Engine
     --------------------------------------------------------------- */
  var ticking = false;
  function frame() {
    ticking = false;
    checkReveals();
    pillarScroll();
  }
  function request() { if (!ticking) { ticking = true; requestAnimationFrame(frame); } }

  w.addEventListener('scroll', request, { passive: true });
  w.addEventListener('resize', function () { vh = w.innerHeight; measureTop(); request(); });
  w.addEventListener('load', request);

  measureTop();
  frame();

  /* dev hooks for testing while the preview pane is hidden */
  w.__ix = { tick: frame, revealAll: function () { watched.forEach(show); } };
})();
