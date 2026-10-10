/* ==========================================================================
   Maya Devi University — 3D homepage behaviour  (new-home.php)
   - WebGL hero globe (three.js, optional — page works without it)
   - Damped scroll engine driving the 3D scroll scenes
   - Cover-flow, rotating school ring, testimonial deck, tilt cards
   ========================================================================== */
(function () {
  'use strict';

  var d = document, w = window;
  var root = d.documentElement;
  var reduce = w.matchMedia && w.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var canHover = w.matchMedia && w.matchMedia('(hover: hover) and (pointer: fine)').matches;
  var isSmall = function () { return w.matchMedia('(max-width: 767px)').matches; };

  var $ = function (s, c) { return (c || d).querySelector(s); };
  var $$ = function (s, c) { return Array.prototype.slice.call((c || d).querySelectorAll(s)); };
  var clamp = function (v, a, b) { return Math.min(b, Math.max(a, v)); };
  var ease = function (t) { return 1 - Math.pow(1 - t, 3); };

  w.__h3dReady = true;
  root.classList.remove('h3d-fail');

  /* Shared state read by the WebGL hero */
  var heroK = 0;

  /* ------------------------------------------------------------------
     1. SPLIT HEADINGS into 3D flipping letters
     ------------------------------------------------------------------ */
  function splitHeading(el) {
    var label = el.textContent.replace(/\s+/g, ' ').trim();
    el.setAttribute('aria-label', label);
    var ci = 0;
    (function walk(node) {
      Array.prototype.slice.call(node.childNodes).forEach(function (n) {
        if (n.nodeType === 3) {
          var frag = d.createDocumentFragment();
          n.nodeValue.split(/(\s+)/).forEach(function (tok) {
            if (!tok) { return; }
            if (/^\s+$/.test(tok)) { frag.appendChild(d.createTextNode(' ')); return; }
            var word = d.createElement('span');
            word.className = 'h3d-w';
            word.setAttribute('aria-hidden', 'true');
            tok.split('').forEach(function (ch) {
              var c = d.createElement('span');
              c.className = 'h3d-c';
              c.style.setProperty('--ci', Math.min(ci++, 46));
              c.textContent = ch;
              word.appendChild(c);
            });
            frag.appendChild(word);
          });
          node.replaceChild(frag, n);
        } else if (n.nodeType === 1) {
          walk(n);
        }
      });
    })(el);
  }
  $$('[data-h3d-split]').forEach(splitHeading);

  /* ------------------------------------------------------------------
     2. REVEAL ON SCROLL
     ------------------------------------------------------------------ */
  $$('[data-r-stagger]').forEach(function (p) {
    Array.prototype.forEach.call(p.children, function (c, i) { c.style.setProperty('--i', i); });
  });

  var revealEls = $$('[data-r], [data-r-stagger]');
  if (!('IntersectionObserver' in w)) {
    revealEls.forEach(function (el) { el.classList.add('is-in'); });
  } else {
    var ro = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) { e.target.classList.add('is-in'); ro.unobserve(e.target); }
      });
    }, { threshold: 0.01, rootMargin: '0px 0px -60px 0px' });
    revealEls.forEach(function (el) { ro.observe(el); });
  }

  /* ------------------------------------------------------------------
     3. COUNTERS
     ------------------------------------------------------------------ */
  function fmt(v, dec) { return dec ? v.toFixed(dec) : Math.round(v).toLocaleString('en-IN'); }
  function paint(el, v) {
    el.textContent = (el.getAttribute('data-pre') || '') + fmt(v, +el.getAttribute('data-dec') || 0) + (el.getAttribute('data-suf') || '');
  }
  var counters = $$('[data-count]');
  if ('IntersectionObserver' in w && !reduce) {
    counters.forEach(function (el) { paint(el, 0); });
    var co = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (!e.isIntersecting) { return; }
        co.unobserve(e.target);
        var el = e.target, to = parseFloat(el.getAttribute('data-count')) || 0, t0 = null;
        (function tick(ts) {
          if (t0 === null) { t0 = ts; }
          var p = clamp((ts - t0) / 1900, 0, 1);
          paint(el, to * ease(p));
          if (p < 1) { requestAnimationFrame(tick); } else { paint(el, to); }
        })(performance.now());
      });
    }, { threshold: 0.3 });
    counters.forEach(function (el) { co.observe(el); });
  }

  /* ------------------------------------------------------------------
     4. SCROLL ENGINE — damped progress for scroll-driven 3D scenes
     ------------------------------------------------------------------ */
  var scenes = [];
  var vh = w.innerHeight, sy = w.pageYOffset, ticking = false;
  var progressBar = $('#h3dProgress'), topBtn = $('#h3dTopBtn');

  function addScene(el, fn) { if (el) { scenes.push({ el: el, fn: fn, top: 0, h: 0 }); } }

  function measure() {
    vh = w.innerHeight;
    scenes.forEach(function (s) {
      var r = s.el.getBoundingClientRect();
      s.top = r.top + w.pageYOffset;
      s.h = r.height;
    });
  }

  function step() {
    ticking = false;
    var target = w.pageYOffset;
    sy += (target - sy) * (reduce ? 1 : 0.13);
    if (Math.abs(target - sy) < 0.2) { sy = target; }

    for (var i = 0; i < scenes.length; i++) {
      var s = scenes[i];
      var p = (sy + vh - s.top) / (vh + s.h);
      if (p > -0.1 && p < 1.1) { s.fn(clamp(p, 0, 1), sy, s); }
    }

    if (progressBar) {
      var max = (root.scrollHeight - vh) || 1;
      progressBar.style.transform = 'scaleX(' + clamp(target / max, 0, 1).toFixed(4) + ')';
    }
    if (topBtn) { topBtn.classList.toggle('is-on', target > 900); }

    if (sy !== target) { request(); }
  }
  function request() { if (!ticking) { ticking = true; requestAnimationFrame(step); } }
  w.addEventListener('scroll', request, { passive: true });

  if (!reduce) {
    /* Hero: content recedes into depth, background drifts */
    var hero = $('#h3dHero'), heroInner = $('[data-h3d-hero-inner]'), heroBg = $('.h3d-hero__bg');
    addScene(hero, function (p, y, s) {
      /* recede only as the hero's bottom edge nears the top of the screen (works for tall mobile stacks too) */
      var k = clamp(1 - (s.top + s.h - y) / (vh * 0.6), 0, 1);
      heroK = k;
      if (heroInner) {
        heroInner.style.transform = 'perspective(1400px) translate3d(0,' + (k * 70).toFixed(1) + 'px,' + (-k * 220).toFixed(1) + 'px) rotateX(' + (k * 6).toFixed(2) + 'deg)';
        heroInner.style.opacity = (1 - k * 1.25).toFixed(3);
      }
      if (heroBg) { heroBg.style.transform = 'translate3d(0,' + (k * 110).toFixed(1) + 'px,0) scale(' + (1 + k * 0.06).toFixed(3) + ')'; }
    });

    /* About: the screen lies back in 3D and flattens as it centres */
    var screen = $('[data-h3d-screen]');
    addScene($('[data-h3d-scene]'), function (p) {
      var k = 1 - ease(clamp((p - 0.1) / 0.38, 0, 1));
      screen.style.setProperty('--sx', (k * 28).toFixed(2) + 'deg');
      screen.style.setProperty('--sy', (k * 10).toFixed(2) + 'deg');
      screen.style.setProperty('--ss', (1 - k * 0.14).toFixed(3));
    });

    /* Decorative CSS-3D solids drift against the scroll */
    $$('.h3d-bgfx').forEach(function (bg) {
      addScene(bg.parentNode, function (p) { bg.style.setProperty('--py', ((p - 0.5) * 240).toFixed(1)); });
    });

    /* Gallery: tilted wall straightens as it centres, columns slide */
    var wallPlane = $('.h3d-wall__plane'), wallCols = $$('.h3d-wall__col');
    addScene($('[data-h3d-wall]'), function (p) {
      var f = clamp(Math.abs(p - 0.5) * 2.4, 0, 1);
      wallPlane.style.setProperty('--wx', (8 + f * 26).toFixed(2) + 'deg');
      wallPlane.style.setProperty('--wz', (-3 - f * 9).toFixed(2) + 'deg');
      wallPlane.style.setProperty('--wy', ((p - 0.5) * -16).toFixed(2) + 'deg');
      wallPlane.style.setProperty('--ws', (1 - f * 0.1).toFixed(3));
      wallCols.forEach(function (c) {
        c.style.setProperty('--cy', ((p - 0.5) * 190 * (+c.getAttribute('data-speed') || 1)).toFixed(1) + 'px');
      });
    });

    /* Facilities: cards stack, buried cards recede in depth */
    var stack = $('[data-h3d-stack]');
    if (stack) {
      var cards = $$('.h3d-scard', stack);
      cards.forEach(function (c, i) { c.style.setProperty('--n', i); });
      addScene(stack, function () {
        var depth = new Array(cards.length);
        for (var i = 0; i < cards.length; i++) { depth[i] = 0; }
        for (var j = 1; j < cards.length; j++) {
          var prev = cards[j - 1], stick = parseFloat(getComputedStyle(prev).top) || 0;
          var h = prev.offsetHeight;
          var t = clamp((h - (cards[j].getBoundingClientRect().top - stick)) / Math.max(h - 18, 1), 0, 1);
          for (var m = 0; m < j; m++) { depth[m] += t; }
        }
        cards.forEach(function (c, i) {
          c.style.setProperty('--sc', (1 - depth[i] * 0.045).toFixed(4));
          c.style.setProperty('--br', clamp(1 - depth[i] * 0.1, 0.72, 1).toFixed(3));
        });
      });
    }

    /* Admissions: the path draws itself, steps light up */
    var path = $('[data-h3d-path]');
    if (path) {
      var steps = $$('.h3d-step', path), line = $('.h3d-path__line', path);
      addScene(path, function (p) {
        var fill = clamp((p - 0.16) / 0.36, 0, 1);
        path.style.setProperty('--p', fill.toFixed(3));
        var lineOn = line && getComputedStyle(line).display !== 'none';
        steps.forEach(function (s, i) {
          var on = lineOn ? fill + 0.04 >= i / (steps.length - 1) : s.getBoundingClientRect().top < vh * 0.78;
          s.classList.toggle('is-on', on);
        });
      });
    }
  }

  var mTimer;
  function remeasure() { measure(); request(); }
  w.addEventListener('resize', function () { clearTimeout(mTimer); mTimer = setTimeout(remeasure, 120); });
  w.addEventListener('load', remeasure);
  if (d.fonts && d.fonts.ready) { d.fonts.ready.then(remeasure); }
  if ('ResizeObserver' in w) {
    var lastH = 0;
    new ResizeObserver(function () {
      var h = root.scrollHeight;
      if (Math.abs(h - lastH) > 4) { lastH = h; remeasure(); }
    }).observe(d.body);
  }
  measure();
  request();

  /* ------------------------------------------------------------------
     5. TILT CARDS (hover devices)
     ------------------------------------------------------------------ */
  if (canHover && !reduce) {
    $$('[data-tilt]').forEach(function (el) {
      var raf = null, ev = null;
      function apply() {
        raf = null;
        var r = el.getBoundingClientRect();
        var px = clamp((ev.clientX - r.left) / r.width, 0, 1), py = clamp((ev.clientY - r.top) / r.height, 0, 1);
        el.style.setProperty('--ty', ((px - 0.5) * 16).toFixed(2) + 'deg');
        el.style.setProperty('--tx', ((0.5 - py) * 14).toFixed(2) + 'deg');
        el.style.setProperty('--gx', (px * 100).toFixed(1) + '%');
        el.style.setProperty('--gy', (py * 100).toFixed(1) + '%');
        el.style.setProperty('--tz', '14px');
      }
      el.addEventListener('pointermove', function (e) {
        ev = e; el.classList.add('is-tilting');
        if (!raf) { raf = requestAnimationFrame(apply); }
      });
      el.addEventListener('pointerleave', function () {
        el.classList.remove('is-tilting');
        el.style.setProperty('--tx', '0deg'); el.style.setProperty('--ty', '0deg'); el.style.setProperty('--tz', '0px');
      });
    });

    /* Layered stages follow the pointer */
    $$('[data-h3d-stage]').forEach(function (stage) {
      var zone = stage.closest('section') || stage;
      var tx = 0, ty = 0, cx = 0, cy = 0, raf = null;
      function loop() {
        cx += (tx - cx) * 0.08; cy += (ty - cy) * 0.08;
        stage.style.setProperty('--rx', (-cy * 8).toFixed(2) + 'deg');
        stage.style.setProperty('--ry', (cx * 12).toFixed(2) + 'deg');
        raf = (Math.abs(tx - cx) > 0.002 || Math.abs(ty - cy) > 0.002) ? requestAnimationFrame(loop) : null;
      }
      zone.addEventListener('pointermove', function (e) {
        var r = zone.getBoundingClientRect();
        tx = ((e.clientX - r.left) / r.width - 0.5) * 2;
        ty = ((e.clientY - r.top) / r.height - 0.5) * 2;
        if (!raf) { raf = requestAnimationFrame(loop); }
      }, { passive: true });
      zone.addEventListener('pointerleave', function () { tx = 0; ty = 0; if (!raf) { raf = requestAnimationFrame(loop); } });
    });
  }

  /* ------------------------------------------------------------------
     6. PROGRAMS — 3D cover-flow
     ------------------------------------------------------------------ */
  function Flow(rootEl) {
    var stage = $('.h3d-flow__stage', rootEl);
    var cards = $$('.h3d-pcard', stage);
    var dotsWrap = $('.h3d-flow__dots', rootEl);
    var prev = $('[data-flow-prev]', rootEl), next = $('[data-flow-next]', rootEl);
    var n = cards.length, active = Math.floor((n - 1) / 2), entered = false;

    var dots = cards.map(function (c, i) {
      var b = d.createElement('button');
      b.type = 'button'; b.setAttribute('role', 'tab');
      b.setAttribute('aria-label', 'Show program ' + (i + 1));
      b.addEventListener('click', function () { go(i); });
      dotsWrap.appendChild(b);
      return b;
    });

    function layout() {
      if (!cards[0].offsetWidth) { return; }
      var cw = cards[0].offsetWidth, sm = isSmall();
      var gap = cw * (sm ? 0.6 : 0.68), depth = sm ? 110 : 160, rot = sm ? 34 : 42, hMax = 0;
      cards.forEach(function (c, i) {
        var off = entered ? i - active : 0, a = Math.abs(off);
        c.style.transform = 'translate3d(-50%,0,0) translate3d(' + (off * gap).toFixed(1) + 'px,0,' + (-a * depth) + 'px) rotateY(' + clamp(-off * rot, -62, 62) + 'deg) scale(' + (1 - a * 0.05).toFixed(3) + ')';
        c.style.opacity = a > 2 ? 0 : (1 - a * 0.12).toFixed(2);
        c.style.zIndex = 20 - a;
        c.style.pointerEvents = a > 2 ? 'none' : 'auto';
        c.classList.toggle('is-active', off === 0);
        c.classList.toggle('is-side', off !== 0);
        $$('.h3d-pcard__body a, .h3d-pcard__cta', c).forEach(function (l) { l.tabIndex = off === 0 ? 0 : -1; });
        hMax = Math.max(hMax, c.offsetHeight);
      });
      stage.style.height = (hMax + 50) + 'px';
      dots.forEach(function (b, i) { b.setAttribute('aria-selected', i === active ? 'true' : 'false'); });
      prev.disabled = active === 0; next.disabled = active === n - 1;
      prev.style.opacity = prev.disabled ? 0.4 : 1; next.style.opacity = next.disabled ? 0.4 : 1;
    }
    function go(i) { active = clamp(i, 0, n - 1); entered = true; layout(); }

    prev.addEventListener('click', function () { go(active - 1); });
    next.addEventListener('click', function () { go(active + 1); });
    stage.addEventListener('keydown', function (e) {
      if (e.key === 'ArrowLeft') { e.preventDefault(); go(active - 1); }
      if (e.key === 'ArrowRight') { e.preventDefault(); go(active + 1); }
    });

    /* drag / swipe */
    var down = false, sx = 0, moved = false;
    stage.addEventListener('pointerdown', function (e) {
      if (e.pointerType === 'mouse' && e.button !== 0) { return; }
      down = true; moved = false; sx = e.clientX;
    });
    w.addEventListener('pointermove', function (e) {
      if (!down) { return; }
      if (Math.abs(e.clientX - sx) > 10) { moved = true; stage.classList.add('is-drag'); }
    });
    w.addEventListener('pointerup', function (e) {
      if (!down) { return; }
      down = false; stage.classList.remove('is-drag');
      var dx = e.clientX - sx;
      if (dx < -50) { go(active + 1); } else if (dx > 50) { go(active - 1); }
    });
    stage.addEventListener('click', function (e) {
      if (moved) { e.preventDefault(); e.stopPropagation(); moved = false; return; }
      var card = e.target.closest ? e.target.closest('.h3d-pcard') : null;
      if (card && !card.classList.contains('is-active')) { e.preventDefault(); go(cards.indexOf(card)); }
    }, true);

    layout();
    this.show = function () {
      layout();
      if (!entered) { requestAnimationFrame(function () { requestAnimationFrame(function () { entered = true; layout(); }); }); }
    };
    this.layout = layout;
    this.isEntered = function () { return entered; };
    w.addEventListener('resize', function () { layout(); });
    if ('IntersectionObserver' in w) {
      var fo = new IntersectionObserver(function (es) {
        if (es[0].isIntersecting && !entered && cards[0].offsetWidth) { entered = true; layout(); fo.disconnect(); }
      }, { threshold: 0.25 });
      fo.observe(rootEl);
    } else { entered = true; layout(); }
  }

  var flows = {};
  $$('[data-h3d-flow]').forEach(function (el) {
    var panel = el.closest('.h3d-panel');
    flows[panel.id] = new Flow(el);
  });

  /* Tabs */
  var tabs = $$('.h3d-tab');
  function selectTab(tab) {
    tabs.forEach(function (t) {
      var on = t === tab, panel = d.getElementById(t.getAttribute('aria-controls'));
      t.setAttribute('aria-selected', on ? 'true' : 'false');
      t.tabIndex = on ? 0 : -1;
      if (panel) { panel.hidden = !on; }
      if (on && flows[panel.id]) { flows[panel.id].show(); }
    });
  }
  tabs.forEach(function (tab, i) {
    tab.addEventListener('click', function () { selectTab(tab); });
    tab.addEventListener('keydown', function (e) {
      var nx = null;
      if (e.key === 'ArrowRight') { nx = tabs[(i + 1) % tabs.length]; }
      if (e.key === 'ArrowLeft') { nx = tabs[(i - 1 + tabs.length) % tabs.length]; }
      if (nx) { e.preventDefault(); nx.focus(); selectTab(nx); }
    });
  });

  /* ------------------------------------------------------------------
     7. SCHOOLS — rotating 3D ring
     ------------------------------------------------------------------ */
  (function () {
    var ring = $('[data-h3d-ring]');
    if (!ring) { return; }
    var cyl = $('.h3d-ring__cyl', ring), panels = $$('.h3d-ring__panel', ring), N = panels.length;
    var step = 360 / N, R = 400, angle = 0, vel = 0, auto = reduce ? 0 : 5.5, hovering = false;
    var visible = false, running = false, last = 0, lastY = w.pageYOffset;
    var down = false, sx = 0, moved = false, lastX = 0;

    function build() {
      var pw = parseFloat(getComputedStyle(ring).getPropertyValue('--pw')) || 176;
      R = Math.round((pw / 2) / Math.tan(Math.PI / N) + 26);
      cyl.style.setProperty('--R', R + 'px');
      cyl.style.setProperty('--step', step + 'deg');
      panels.forEach(function (p, i) { p.style.setProperty('--i', i); });
      render();
    }
    function render() {
      cyl.style.transform = 'translateZ(' + (-R) + 'px) rotateY(' + angle.toFixed(2) + 'deg)';
      for (var i = 0; i < N; i++) {
        var a = ((i * step + angle) % 360 + 540) % 360 - 180;
        var f = Math.abs(a) / 110;
        panels[i].style.opacity = clamp(1 - f * 0.7, 0.25, 1).toFixed(2);
        panels[i].style.pointerEvents = Math.abs(a) > 92 ? 'none' : 'auto';
      }
    }
    function loop(ts) {
      if (!running) { return; }
      requestAnimationFrame(loop);
      var dt = Math.min((ts - last) / 1000, 0.05); last = ts;
      var cy = w.pageYOffset, dy = cy - lastY; lastY = cy;
      if (!down) {
        angle += (hovering ? 0 : auto) * dt + dy * 0.16 + vel * dt;
        vel *= Math.pow(0.02, dt);
        if (Math.abs(vel) < 0.05) { vel = 0; }
      }
      render();
    }
    function start() { if (!running && visible) { running = true; last = performance.now(); lastY = w.pageYOffset; requestAnimationFrame(loop); } }
    function stop() { running = false; }

    ring.addEventListener('pointerenter', function () { hovering = canHover; });
    ring.addEventListener('pointerleave', function () { hovering = false; });
    ring.addEventListener('pointerdown', function (e) { down = true; moved = false; sx = lastX = e.clientX; vel = 0; });
    w.addEventListener('pointermove', function (e) {
      if (!down) { return; }
      var dx = e.clientX - lastX; lastX = e.clientX;
      if (Math.abs(e.clientX - sx) > 6) { moved = true; ring.classList.add('is-drag'); }
      angle += dx * 0.32; vel = dx * 14;
    });
    w.addEventListener('pointerup', function () { down = false; ring.classList.remove('is-drag'); });
    ring.addEventListener('click', function (e) { if (moved) { e.preventDefault(); moved = false; } }, true);

    if ('IntersectionObserver' in w) {
      new IntersectionObserver(function (es) {
        visible = es[0].isIntersecting;
        visible ? start() : stop();
      }, { threshold: 0 }).observe(ring);
    } else { visible = true; start(); }
    w.addEventListener('resize', build);
    build();
  })();

  /* ------------------------------------------------------------------
     8. TESTIMONIAL DECK
     ------------------------------------------------------------------ */
  (function () {
    var deck = $('[data-h3d-deck]');
    if (!deck) { return; }
    var cards = $$('.h3d-tcard', deck), n = cards.length, active = 0, timer = null, paused = false, inView = false;
    var dotsWrap = $('[data-deck-dots]', deck);
    var dots = cards.map(function (c, i) {
      var b = d.createElement('button');
      b.type = 'button'; b.setAttribute('aria-label', 'Show story ' + (i + 1));
      b.addEventListener('click', function () { go(i); });
      dotsWrap.appendChild(b);
      return b;
    });

    function layout() {
      cards.forEach(function (c, i) {
        var off = (i - active + n) % n;
        c.style.transform = 'translate3d(' + (off * 30) + 'px,' + (off * -16) + 'px,' + (-off * 90) + 'px) rotateY(' + (off * -5) + 'deg)';
        c.style.opacity = off < 3 ? (1 - off * 0.26).toFixed(2) : 0;
        c.style.filter = off ? 'brightness(' + (1 - off * 0.07).toFixed(2) + ')' : 'none';
        c.style.zIndex = n - off;
        c.style.pointerEvents = off === 0 ? 'auto' : 'none';
        c.setAttribute('aria-hidden', off === 0 ? 'false' : 'true');
      });
      dots.forEach(function (b, i) { b.setAttribute('aria-selected', i === active ? 'true' : 'false'); });
    }
    function go(i) { active = (i + n) % n; layout(); restart(); }
    function restart() {
      clearTimeout(timer);
      if (reduce || paused || !inView) { return; }
      timer = setTimeout(function () { go(active + 1); }, 7500);
    }
    $('[data-deck-prev]', deck).addEventListener('click', function () { go(active - 1); });
    $('[data-deck-next]', deck).addEventListener('click', function () { go(active + 1); });
    deck.addEventListener('mouseenter', function () { paused = true; clearTimeout(timer); });
    deck.addEventListener('mouseleave', function () { paused = false; restart(); });
    deck.addEventListener('focusin', function () { paused = true; clearTimeout(timer); });
    deck.addEventListener('focusout', function () { paused = false; restart(); });

    var sx = 0;
    deck.addEventListener('pointerdown', function (e) { sx = e.clientX; });
    deck.addEventListener('pointerup', function (e) {
      var dx = e.clientX - sx;
      if (dx < -50) { go(active + 1); } else if (dx > 50) { go(active - 1); }
    });

    layout();
    if ('IntersectionObserver' in w) {
      new IntersectionObserver(function (es) { inView = es[0].isIntersecting; restart(); }, { threshold: 0.3 }).observe(deck);
    }
  })();

  /* ------------------------------------------------------------------
     9. VIDEO FACADE (loads YouTube only on click)
     ------------------------------------------------------------------ */
  (function () {
    var wrap = $('#h3dVideo'), btn = $('#h3dVideoBtn');
    if (!wrap) { return; }
    function play() {
      if ($('iframe', wrap)) { return; }
      var f = d.createElement('iframe');
      f.src = 'https://www.youtube.com/embed/Gm-KE2N_5ws?autoplay=1&mute=1&playsinline=1&rel=0';
      f.title = 'Maya Devi University campus tour';
      f.allow = 'autoplay; encrypted-media; picture-in-picture; fullscreen';
      f.allowFullscreen = true;
      f.style.cssText = 'position:absolute;inset:0;width:100%;height:100%;border:0;z-index:5;';
      wrap.appendChild(f);
      if (btn) { btn.remove(); }
      var badge = $('.h3d-screen__badge', wrap); if (badge) { badge.style.display = 'none'; }
    }
    wrap.addEventListener('click', play);
  })();

  /* ------------------------------------------------------------------
     10. FAQ ACCORDION
     ------------------------------------------------------------------ */
  var faqs = $$('.h3d-faq__item');
  faqs.forEach(function (item) {
    var b = $('.h3d-faq__q', item);
    b.addEventListener('click', function () {
      var was = item.classList.contains('is-open');
      faqs.forEach(function (o) { o.classList.remove('is-open'); $('.h3d-faq__q', o).setAttribute('aria-expanded', 'false'); });
      if (!was) { item.classList.add('is-open'); b.setAttribute('aria-expanded', 'true'); }
    });
  });

  /* ------------------------------------------------------------------
     11. In-page anchors + back to top
     ------------------------------------------------------------------ */
  $$('.h3d a[href^="#"]').forEach(function (a) {
    a.addEventListener('click', function (e) {
      var id = a.getAttribute('href');
      if (id.length < 2) { return; }
      var t = $(id);
      if (!t) { return; }
      e.preventDefault();
      t.scrollIntoView({ behavior: reduce ? 'auto' : 'smooth', block: 'start' });
    });
  });
  if (topBtn) {
    topBtn.addEventListener('click', function (e) { e.preventDefault(); w.scrollTo({ top: 0, behavior: reduce ? 'auto' : 'smooth' }); });
  }

  /* ------------------------------------------------------------------
     12. HERO — WebGL "knowledge globe"  (skipped if three.js is missing)
     ------------------------------------------------------------------ */
  function initHeroGL() {
    var wrap = $('[data-h3d-canvas]'), heroEl = $('#h3dHero');
    if (!wrap || !heroEl || !w.THREE) { return; }
    var T = w.THREE, renderer;
    try {
      renderer = new T.WebGLRenderer({ alpha: true, antialias: (w.devicePixelRatio || 1) < 1.25 && !isSmall(), powerPreference: 'high-performance' });
    } catch (err) { return; }

    var mobile = isSmall();
    var pr = Math.min(w.devicePixelRatio || 1, mobile ? 1.25 : 1.5);
    renderer.setPixelRatio(pr);
    renderer.setClearColor(0x000000, 0);
    wrap.appendChild(renderer.domElement);

    var GREEN = 0x00a651, GREEN_L = 0x35d987, NAVY_L = 0x2b4a92;
    var scene = new T.Scene();
    scene.fog = new T.FogExp2(0x0a1229, 0.026);
    var camera = new T.PerspectiveCamera(48, 1, 0.1, 120);
    var CAM_Z = 12;
    camera.position.set(0, 0, CAM_Z);

    scene.add(new T.AmbientLight(0x9db4ff, 0.65));
    var key = new T.PointLight(GREEN, 2.6, 60); key.position.set(7, 5, 8); scene.add(key);
    var fill = new T.PointLight(0xffffff, 1.2, 60); fill.position.set(-8, -4, 9); scene.add(fill);

    var world = new T.Group(); scene.add(world);
    var globe = new T.Group(); world.add(globe);

    /* soft round sprite for points */
    var tc = d.createElement('canvas'); tc.width = tc.height = 64;
    var tx = tc.getContext('2d'), grd = tx.createRadialGradient(32, 32, 0, 32, 32, 32);
    grd.addColorStop(0, 'rgba(255,255,255,1)'); grd.addColorStop(0.35, 'rgba(255,255,255,.85)'); grd.addColorStop(1, 'rgba(255,255,255,0)');
    tx.fillStyle = grd; tx.fillRect(0, 0, 64, 64);
    var dotTex = new T.CanvasTexture(tc);

    /* globe: solid core + wire + nodes */
    var RADIUS = 2.4;
    var ico = new T.IcosahedronGeometry(RADIUS, 3);
    globe.add(new T.Mesh(new T.IcosahedronGeometry(RADIUS - 0.08, 2), new T.MeshStandardMaterial({
      color: 0x16295a, roughness: 0.6, metalness: 0.25, emissive: 0x0b1a3f, flatShading: true, transparent: true, opacity: 0.94
    })));
    globe.add(new T.LineSegments(new T.WireframeGeometry(ico), new T.LineBasicMaterial({ color: GREEN_L, transparent: true, opacity: 0.3, blending: T.AdditiveBlending })));
    globe.add(new T.Mesh(new T.SphereGeometry(RADIUS + 0.35, 40, 40), new T.MeshBasicMaterial({ color: GREEN, transparent: true, opacity: 0.07, side: T.BackSide, blending: T.AdditiveBlending, depthWrite: false })));

    var pa = ico.attributes.position, seen = {}, pts = [];
    for (var i = 0; i < pa.count; i++) {
      var x = pa.getX(i), y = pa.getY(i), z = pa.getZ(i), k = x.toFixed(3) + ',' + y.toFixed(3) + ',' + z.toFixed(3);
      if (!seen[k]) { seen[k] = 1; pts.push(x, y, z); }
    }
    var pg = new T.BufferGeometry(), cols = [], cG = new T.Color(GREEN_L), cW = new T.Color(0xffffff);
    pg.setAttribute('position', new T.Float32BufferAttribute(pts, 3));
    for (i = 0; i < pts.length / 3; i++) { var c = Math.random() < 0.3 ? cW : cG; cols.push(c.r, c.g, c.b); }
    pg.setAttribute('color', new T.Float32BufferAttribute(cols, 3));
    globe.add(new T.Points(pg, new T.PointsMaterial({ size: 0.16, map: dotTex, vertexColors: true, transparent: true, depthWrite: false, blending: T.AdditiveBlending })));

    /* hubs + glowing arcs with travelling dots */
    var hubIdx = [], hubPos = [], hubCount = mobile ? 6 : 9, total = pts.length / 3;
    while (hubIdx.length < hubCount) {
      var r0 = Math.floor(Math.random() * total);
      if (hubIdx.indexOf(r0) < 0) { hubIdx.push(r0); hubPos.push(new T.Vector3(pts[r0 * 3], pts[r0 * 3 + 1], pts[r0 * 3 + 2])); }
    }
    var hubGeo = new T.BufferGeometry().setFromPoints(hubPos);
    var hubMat = new T.PointsMaterial({ size: 0.42, map: dotTex, color: GREEN_L, transparent: true, depthWrite: false, blending: T.AdditiveBlending });
    globe.add(new T.Points(hubGeo, hubMat));

    var curves = [], dotPos = new Float32Array(hubCount * 3);
    for (i = 0; i < hubCount; i++) {
      var a = hubPos[i], b = hubPos[(i + 3) % hubCount], mid = a.clone().add(b).multiplyScalar(0.5);
      mid.normalize().multiplyScalar(RADIUS + a.distanceTo(b) * 0.38);
      var cv = new T.QuadraticBezierCurve3(a.clone(), mid, b.clone());
      curves.push(cv);
      globe.add(new T.Line(new T.BufferGeometry().setFromPoints(cv.getPoints(48)), new T.LineBasicMaterial({ color: GREEN_L, transparent: true, opacity: 0.5, blending: T.AdditiveBlending })));
    }
    var dotGeo = new T.BufferGeometry();
    dotGeo.setAttribute('position', new T.BufferAttribute(dotPos, 3));
    globe.add(new T.Points(dotGeo, new T.PointsMaterial({ size: 0.3, map: dotTex, color: 0xffffff, transparent: true, depthWrite: false, blending: T.AdditiveBlending })));

    /* orbit rings with satellites */
    var rings = [];
    function addRing(r, tilt, spd, color, op) {
      var g = new T.Group();
      g.add(new T.Mesh(new T.TorusGeometry(r, 0.014, 8, 200), new T.MeshBasicMaterial({ color: color, transparent: true, opacity: op })));
      var sat = new T.Mesh(new T.SphereGeometry(0.1, 16, 16), new T.MeshBasicMaterial({ color: 0xffffff }));
      var pivot = new T.Group(); sat.position.set(r, 0, 0); pivot.add(sat); g.add(pivot);
      g.rotation.set(tilt[0], tilt[1], tilt[2]);
      g.userData = { pivot: pivot, spd: spd };
      world.add(g); rings.push(g);
    }
    addRing(3.5, [1.25, 0.2, 0.3], 0.5, GREEN_L, 0.6);
    addRing(4.2, [0.5, 0.7, 0], -0.32, 0xffffff, 0.3);
    addRing(4.9, [1.6, -0.4, 0.6], 0.22, NAVY_L, 0.7);

    /* floating polyhedra */
    var floaters = [], palette = [GREEN, GREEN_L, 0xffffff, NAVY_L];
    var geos = [new T.OctahedronGeometry(1), new T.TetrahedronGeometry(1.1), new T.IcosahedronGeometry(1, 0), new T.BoxGeometry(1.2, 1.2, 1.2), new T.TorusGeometry(0.8, 0.28, 10, 24)];
    for (i = 0; i < (mobile ? 8 : 15); i++) {
      var m = new T.Mesh(geos[i % geos.length], new T.MeshStandardMaterial({
        color: palette[i % palette.length], roughness: 0.32, metalness: 0.45, flatShading: true, transparent: true, opacity: 0.9
      }));
      var sc = 0.22 + Math.random() * 0.42;
      m.scale.setScalar(sc);
      m.position.set((Math.random() - 0.5) * 20, (Math.random() - 0.5) * 11, -Math.random() * 14 + 2);
      m.userData = { by: m.position.y, ph: Math.random() * 6.28, sp: 0.4 + Math.random() * 0.7, rx: (Math.random() - 0.5) * 0.9, ry: (Math.random() - 0.5) * 0.9 };
      scene.add(m); floaters.push(m);
    }

    /* starfield dust */
    var dustN = mobile ? 260 : 620, dp = new Float32Array(dustN * 3);
    for (i = 0; i < dustN; i++) { dp[i * 3] = (Math.random() - 0.5) * 48; dp[i * 3 + 1] = (Math.random() - 0.5) * 28; dp[i * 3 + 2] = -Math.random() * 40 + 6; }
    var dustGeo = new T.BufferGeometry(); dustGeo.setAttribute('position', new T.BufferAttribute(dp, 3));
    var dust = new T.Points(dustGeo, new T.PointsMaterial({ size: 0.07, map: dotTex, color: 0xffffff, transparent: true, opacity: 0.6, depthWrite: false, blending: T.AdditiveBlending }));
    scene.add(dust);

    /* layout: park the globe exactly behind the CSS student stage */
    function layout() {
      var r = wrap.getBoundingClientRect(), W = Math.max(1, r.width), H = Math.max(1, r.height);
      renderer.setSize(W, H, false);
      camera.aspect = W / H; camera.updateProjectionMatrix();
      var st = $('.h3d-stage', heroEl), visH = 2 * CAM_Z * Math.tan(T.MathUtils.degToRad(camera.fov / 2)), visW = visH * camera.aspect;
      if (st) {
        var sr = st.getBoundingClientRect();
        var cx = (sr.left + sr.width / 2 - r.left) / W, cy = (sr.top + sr.height / 2 - r.top) / H;
        world.position.set((cx - 0.5) * visW, (0.5 - cy) * visH * 1.0 - 0.1, 0);
        var px = Math.min(sr.width, sr.height) * 0.98;
        world.scale.setScalar(clamp((px * (visH / H)) / (RADIUS * 2), 0.5, 1.5));
      }
    }

    /* interaction */
    var mx = 0, my = 0, smx = 0, smy = 0;
    if (canHover) {
      heroEl.addEventListener('pointermove', function (e) {
        var r = heroEl.getBoundingClientRect();
        mx = ((e.clientX - r.left) / r.width - 0.5) * 2;
        my = ((e.clientY - r.top) / r.height - 0.5) * 2;
      }, { passive: true });
    }

    var clock = new T.Clock(), running = false, onScreen = true, tmp = new T.Vector3();
    function update(t, dt) {
      smx += (mx - smx) * 0.05; smy += (my - smy) * 0.05;
      var idle = canHover ? 0 : Math.sin(t * 0.3) * 0.5;

      globe.rotation.y = t * 0.11 + heroK * 1.9 + smx * 0.35;
      globe.rotation.x = smy * 0.16 + heroK * 0.3;

      rings.forEach(function (g) { g.userData.pivot.rotation.z += g.userData.spd * dt; g.rotation.z += g.userData.spd * dt * 0.12; });
      floaters.forEach(function (m) {
        var u = m.userData;
        m.rotation.x += u.rx * dt; m.rotation.y += u.ry * dt;
        m.position.y = u.by + Math.sin(t * u.sp + u.ph) * 0.35;
      });
      hubMat.size = 0.4 + Math.sin(t * 2.2) * 0.08;
      for (var j = 0; j < curves.length; j++) {
        curves[j].getPoint((t * 0.16 + j * 0.13) % 1, tmp);
        dotPos[j * 3] = tmp.x; dotPos[j * 3 + 1] = tmp.y; dotPos[j * 3 + 2] = tmp.z;
      }
      dotGeo.attributes.position.needsUpdate = true;

      dust.position.z = heroK * 9;
      dust.rotation.y = t * 0.012;
      camera.position.x += ((smx * 0.9 + idle) - camera.position.x) * 0.05;
      camera.position.y += ((-smy * 0.6) - camera.position.y) * 0.05;
      camera.position.z = CAM_Z - heroK * 5;
      camera.lookAt(0, 0, 0);
      key.position.x = 7 + smx * 3;
    }
    /* adaptive resolution: if frames run slow (integrated GPUs), quietly render fewer pixels */
    var ema = 16, lastAdapt = 0;
    function adapt(raw) {
      if (raw > 0.25) { return; }                 /* ignore tab-switch spikes */
      var now = clock.elapsedTime;
      if (now < 4) { return; }                    /* page is still loading / shaders compiling */
      ema += (raw * 1000 - ema) * 0.05;
      if (ema > 30 && now - lastAdapt > 2.5) {
        lastAdapt = now; ema = 16;                /* re-measure after every change */
        if (pr > 0.8) { pr = Math.max(0.75, pr - 0.25); renderer.setPixelRatio(pr); layout(); }
        else { dust.visible = false; floaters.forEach(function (m, i) { m.visible = i % 2 === 0; }); }
      }
    }
    function frame() {
      if (!running) { return; }
      requestAnimationFrame(frame);
      var raw = clock.getDelta(), dt = Math.min(raw, 0.05);
      update(clock.elapsedTime, dt);
      adapt(raw);
      renderer.render(scene, camera);
    }
    function start() { if (!running && onScreen && !d.hidden && !reduce) { running = true; clock.getDelta(); requestAnimationFrame(frame); } }
    function stop() { running = false; }

    layout();
    update(2, 0.016);
    renderer.render(scene, camera);

    if ('ResizeObserver' in w) { new ResizeObserver(layout).observe(wrap); } else { w.addEventListener('resize', layout); }
    if ('IntersectionObserver' in w) {
      new IntersectionObserver(function (es) { onScreen = es[0].isIntersecting; onScreen ? start() : stop(); }, { threshold: 0 }).observe(heroEl);
    }
    d.addEventListener('visibilitychange', function () { d.hidden ? stop() : start(); });
    start();
    heroEl.classList.add('is-gl');
  }

  /* three.js arrives after this file — poll briefly, then give up quietly */
  var glTries = 0;
  (function waitForThree() {
    if (w.THREE) { initHeroGL(); }
    else if (glTries++ < 240) { setTimeout(waitForThree, 50); }
  })();
})();
