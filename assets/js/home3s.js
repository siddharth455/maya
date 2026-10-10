/* ==========================================================================
   Maya Devi University — 3D SCROLL EXPERIENCE  (new-home-3.php)
   1. Journey engine: scroll -> camera flying down the photo corridor
   2. Pinned horizontal 3D programs scroller
   3. Facilities scrollytelling, voices, news, FAQ, video, parallax
   No dependencies. Without JS / with reduced motion the page stays a normal stacked page.
   ========================================================================== */
(function () {
  'use strict';

  var d = document, w = window, root = d.documentElement;
  var reduce = w.matchMedia && w.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var canHover = w.matchMedia && w.matchMedia('(hover: hover) and (pointer: fine)').matches;

  var $ = function (s, c) { return (c || d).querySelector(s); };
  var $$ = function (s, c) { return Array.prototype.slice.call((c || d).querySelectorAll(s)); };
  var clamp = function (v, a, b) { return Math.min(b, Math.max(a, v)); };
  var smooth = function (t) { return t * t * (3 - 2 * t); };
  var inOut = function (t) { return t < 0.5 ? 4 * t * t * t : 1 - Math.pow(-2 * t + 2, 3) / 2; };
  var easeOut = function (t) { return 1 - Math.pow(1 - t, 3); };

  var main = $('.h3s');
  if (!main) { return; }
  w.__h3sReady = true;
  root.classList.remove('h3s-fail');

  /* ------------------------------------------------------------------
     0. Split the headline into flipping letters
     ------------------------------------------------------------------ */
  $$('[data-split]').forEach(function (el) {
    el.setAttribute('aria-label', el.textContent.replace(/\s+/g, ' ').trim());
    var ci = 0;
    (function walk(node) {
      Array.prototype.slice.call(node.childNodes).forEach(function (n) {
        if (n.nodeType === 3) {
          var frag = d.createDocumentFragment();
          n.nodeValue.split(/(\s+)/).forEach(function (tok) {
            if (!tok) { return; }
            if (/^\s+$/.test(tok)) { frag.appendChild(d.createTextNode(' ')); return; }
            var word = d.createElement('span');
            word.className = 'w'; word.setAttribute('aria-hidden', 'true');
            tok.split('').forEach(function (ch) {
              var c = d.createElement('span');
              c.className = 'c'; c.style.setProperty('--ci', Math.min(ci++, 40)); c.textContent = ch;
              word.appendChild(c);
            });
            frag.appendChild(word);
          });
          node.replaceChild(frag, n);
        } else if (n.nodeType === 1) { walk(n); }
      });
    })(el);
  });

  /* stagger delays for the data-in reveals inside each layer */
  $$('.h3s-layer, .h3s-blk').forEach(function (blk) {
    $$('[data-in]', blk).forEach(function (el, i) { el.style.setProperty('--d', (0.08 * i + 0.1).toFixed(2)); });
  });

  /* ------------------------------------------------------------------
     Counters
     ------------------------------------------------------------------ */
  function fmt(v, dec) { return dec ? v.toFixed(dec) : Math.round(v).toLocaleString('en-IN'); }
  function paint(el, v) { el.textContent = (el.getAttribute('data-pre') || '') + fmt(v, +el.getAttribute('data-dec') || 0) + (el.getAttribute('data-suf') || ''); }
  function runCounters(scope) {
    $$('[data-count]', scope).forEach(function (el) {
      var to = parseFloat(el.getAttribute('data-count')) || 0, t0 = null;
      if (reduce) { paint(el, to); return; }
      cancelAnimationFrame(el.__raf || 0);
      (function tick(ts) {
        if (t0 === null) { t0 = ts; }
        var p = clamp((ts - t0) / 1800, 0, 1);
        paint(el, to * easeOut(p));
        if (p < 1) { el.__raf = requestAnimationFrame(tick); } else { paint(el, to); }
      })(performance.now());
    });
  }

  /* ------------------------------------------------------------------
     1. THE JOURNEY
     ------------------------------------------------------------------ */
  var journey = $('#h3sJourney'), stage = $('#h3sStage'), world = $('#h3sWorld'), camera = $('#h3sCamera');
  var scenes = $$('[data-scene]'), N = scenes.length;
  var D = 1800;                     // depth of one station (px)
  var live = false;
  var geo = { top: 0, height: 0, stageH: 0, hdr: 96 };
  var sy = w.pageYOffset, ticking = false;
  var state = scenes.map(function () { return { o: -1, wo: -1, vis: null, on: null, asm: -1, ex: -1, arc: 999, px: 999 }; });
  var introT0 = 0, introDone = false;                     // the welcome station flies in once on load
  var FLY = null;                                         // entrance vectors per direction (built in layout)
  var ARC_DIRS = ['l', 'tr', 'b', 'r', 'tl', 'bl', 'br'];
  var hudNow = $('#h3sNow'), hudName = $('#h3sName'), dots = $$('.h3s-rail button');
  var lastIdx = -1;
  var mx = 0, my = 0, smx = 0, smy = 0, lastPO = '';
  var docH = root.scrollHeight, lastP = -1, lastProgP = -1;
  var warp = $('.h3s-warp');

  /* Per-scene handles, cached once. Opacity and motion are written straight onto the
     elements (never as inherited CSS variables) so a frame only touches what changed. */
  var KS = [-1, 1, 1.7, -0.7, 0.9];                       // drift factor of each station-6 photo
  var parts = scenes.map(function (sc) {
    return {
      layers: $$('.h3s-layer', sc).filter(function (l) { return !l.classList.contains('h3s-layer--3d'); }),
      cards: $$('.h3s-school, .h3s-arc__card', sc),
      planes: $$('.h3s-wall, .h3s-floor', sc),
      fly: $$('.h3s-layer[data-fly]', sc).map(function (l) { return { el: l, dir: l.getAttribute('data-fly'), delay: parseFloat(l.getAttribute('data-delay')) || 0 }; }),
      schools: $$('.h3s-school', sc).map(function (c, k) {
        var s = c.style;
        return { el: c, delay: (k % 5) * 0.05, dx: parseFloat(s.getPropertyValue('--dx')) || 0, dy: parseFloat(s.getPropertyValue('--dy')) || 0, dz: parseFloat(s.getPropertyValue('--dz')) || 0, rx: parseFloat(s.getPropertyValue('--rx')) || 0, ry: parseFloat(s.getPropertyValue('--ry')) || 0 };
      }),
      arcCards: $$('.h3s-arc__card', sc).map(function (c, k) { return { el: c, dir: ARC_DIRS[k % ARC_DIRS.length], delay: k * 0.07 }; }),
      arc: $('.h3s-arc', sc),
      shots: $$('.h3s-shot', sc)
    };
  });
  function setOpacity(list, v) {
    var val = v >= 0.999 ? '' : v.toFixed(3);
    for (var i = 0; i < list.length; i++) { list[i].style.opacity = val; }
  }

  /* Where each piece of a station starts from. Distances scale with the stage so it works on any screen. */
  function buildFly() {
    var W = stage.clientWidth, H = stage.clientHeight;
    FLY = {
      tr:  { x: 0.80 * W,  y: -0.90 * H, z: -500,  ax: '0 0 1', a: 12 },
      tl:  { x: -0.80 * W, y: -0.90 * H, z: -500,  ax: '0 0 1', a: -12 },
      l:   { x: -1.00 * W, y: 0.06 * H,  z: -300,  ax: '0 1 0', a: -58 },
      r:   { x: 1.00 * W,  y: -0.06 * H, z: -300,  ax: '0 1 0', a: 58 },
      b:   { x: 0,         y: 0.95 * H,  z: -300,  ax: '1 0 0', a: -38 },
      t:   { x: 0,         y: -0.95 * H, z: -300,  ax: '1 0 0', a: 38 },
      bl:  { x: -0.80 * W, y: 0.90 * H,  z: -400,  ax: '0 0 1', a: -10 },
      br:  { x: 0.80 * W,  y: 0.90 * H,  z: -400,  ax: '0 0 1', a: 10 },
      far: { x: 0,         y: 0,         z: -1300, ax: '0 0 1', a: 0 }
    };
  }
  /* k = 1 → fully "away" (entrance pose), 0 → resting, negative → drifting off the opposite way */
  function applyFly(el, v, k) {
    if (Math.abs(k) < 0.002) { el.style.translate = ''; el.style.rotate = ''; return; }
    el.style.translate = (v.x * k).toFixed(1) + 'px ' + (v.y * k).toFixed(1) + 'px ' + (v.z * k).toFixed(1) + 'px';
    el.style.rotate = v.a ? v.ax + ' ' + (v.a * k).toFixed(2) + 'deg' : '';
  }
  function applyScene(pt, asm, ex) {
    var i, it, e, k;
    for (i = 0; i < pt.fly.length; i++) {
      it = pt.fly[i];
      e = smooth(clamp((asm - it.delay) / (1 - it.delay), 0, 1));
      applyFly(it.el, FLY[it.dir] || FLY.b, (1 - e) - 0.28 * ex);
    }
    for (i = 0; i < pt.schools.length; i++) {
      it = pt.schools[i];
      e = smooth(clamp((asm - it.delay) / (1 - it.delay), 0, 1)); k = 1 - e;
      it.el.style.transform = k < 0.002 ? '' :
        'translate3d(' + (it.dx * k).toFixed(1) + 'px,' + (it.dy * k).toFixed(1) + 'px,' + (it.dz * k).toFixed(1) + 'px) rotateX(' + (it.rx * k).toFixed(1) + 'deg) rotateY(' + (it.ry * k).toFixed(1) + 'deg)';
    }
    for (i = 0; i < pt.arcCards.length; i++) {
      it = pt.arcCards[i];
      e = smooth(clamp((asm - it.delay) / (1 - it.delay), 0, 1)); k = 1 - e;
      var v = FLY[it.dir] || FLY.b;
      it.el.style.transform = k < 0.002 ? '' :
        'translate3d(' + (v.x * k).toFixed(1) + 'px,' + (v.y * k).toFixed(1) + 'px,' + (v.z * k).toFixed(1) + 'px) rotate' + (v.ax === '0 0 1' ? 'Z' : v.ax === '0 1 0' ? 'Y' : 'X') + '(' + (v.a * k * 1.4).toFixed(1) + 'deg)';
    }
  }

  function measureHeader() {
    var hb = $('.header-bottom');
    var h = hb ? hb.getBoundingClientRect().height : 0;
    var before = geo.hdr;
    if (h >= 56 && h <= 130) { main.style.setProperty('--hdr', Math.round(h) + 'px'); geo.hdr = Math.round(h); }
    else { geo.hdr = parseFloat(getComputedStyle(main).getPropertyValue('--hdr')) || 96; }
    return geo.hdr !== before;
  }

  function layout() {
    if (!live) { return; }
    measureHeader();
    var vh = w.innerHeight, sw = stage.clientWidth, sh = stage.clientHeight;
    var narrow = w.innerWidth < 992;
    main.style.setProperty('--xw', Math.round(narrow ? sw * 0.62 : sw * 0.44) + 'px');
    main.style.setProperty('--yh', Math.round(sh * 0.48) + 'px');
    main.style.setProperty('--seg', D + 'px');
    scenes.forEach(function (s, i) { s.style.transform = 'translateZ(' + (-i * D) + 'px)'; });
    geo.stageH = sh;
    geo.height = (N - 1) * vh * 2.0 + sh;
    journey.style.height = Math.round(geo.height) + 'px';
    geo.top = journey.getBoundingClientRect().top + w.pageYOffset;
    progLayout();
    docH = root.scrollHeight;
    buildFly();
    lastP = -1; lastProgP = -1;
    for (var k = 0; k < state.length; k++) { state[k].o = -1; state[k].wo = -1; state[k].asm = -1; state[k].ex = -1; state[k].arc = 999; state[k].px = 999; }
    request();
  }

  /* scroll progress (0..1) -> camera distance, with a dwell at every station */
  function camAt(p) {
    var s = p * (N - 1), i = Math.min(Math.floor(s), N - 2), f = clamp(s - i, 0, 1);
    var g = inOut(clamp((f - 0.2) / 0.6, 0, 1));
    return D * (i + 0.1 * f + 0.9 * g);
  }

  function frameJourney() {
    var p = clamp((sy - (geo.top - geo.hdr)) / Math.max(1, geo.height - geo.stageH), 0, 1);
    if (Math.abs(p - lastP) < 0.00002) { return; }          // nothing moved: do no work
    lastP = p;
    var cam = camAt(p);

    /* flight feel: a gentle camera roll, a small dolly-zoom and a green glow while between stations */
    var sN = p * (N - 1), i0 = Math.min(Math.floor(sN), N - 2), fN = clamp(sN - i0, 0, 1);
    var bump = lite ? 0 : Math.sin(Math.PI * clamp((fN - 0.2) / 0.6, 0, 1));
    var roll = bump * 1.1 * (i0 % 2 ? -1 : 1);
    world.style.transform = 'translate3d(0,0,' + cam.toFixed(1) + 'px) rotateZ(' + roll.toFixed(3) + 'deg)';
    if (!lite) {
      camera.style.perspective = (1100 - bump * 130).toFixed(0) + 'px';
      if (warp) { warp.style.opacity = (bump * 0.85).toFixed(3); }
    }

    for (var i = 0; i < N; i++) {
      var rel = cam - i * D, st = state[i], sc = scenes[i], pt = parts[i];
      var fin = smooth(clamp((rel + 1.02 * D) / (0.6 * D), 0, 1));
      var fout = 1 - smooth(clamp((rel - 0.12 * D) / (0.28 * D), 0, 1));
      var o = fin * fout;
      /* corridor walls only need to exist for the nearest couple of stations */
      var wo = smooth(clamp((rel + 1.95 * D) / (0.7 * D), 0, 1)) * (1 - smooth(clamp((rel - 0.5 * D) / (0.35 * D), 0, 1)));
      var vis = o > 0.005 || wo > 0.005;

      if (vis !== st.vis) { sc.classList.toggle('is-vis', vis); st.vis = vis; }
      if (!vis) { continue; }
      if (Math.abs(o - st.o) > 0.004) { setOpacity(pt.layers, o); setOpacity(pt.cards, o); st.o = o; }
      if (Math.abs(wo - st.wo) > 0.004) { setOpacity(pt.planes, wo); st.wo = wo; }

      var on = rel > -0.45 * D && rel < 0.35 * D;
      if (on !== st.on) {
        sc.classList.toggle('is-on', on); st.on = on;
        if (on) { runCounters(sc); }
      }

      /* scene-local motion, driven by how far the camera is through this station */
      var lp = clamp((rel + 0.5 * D) / D, 0, 1);

      /* entrance: every piece flies in from its own side as the station approaches, and
         drifts off the opposite way as you leave. The welcome station does it once on load. */
      var asm;
      if (i === 0) {
        var ia = clamp((performance.now() - introT0) / 1700, 0, 1);
        if (ia >= 1) { introDone = true; }
        asm = reduce ? 1 : smooth(ia);
      } else {
        asm = smooth(clamp((rel + 0.95 * D) / (0.9 * D), 0, 1));
      }
      var ex = smooth(clamp((rel - 0.03 * D) / (0.32 * D), 0, 1));
      if (Math.abs(asm - st.asm) > 0.003 || Math.abs(ex - st.ex) > 0.003) {
        st.asm = asm; st.ex = ex;
        applyScene(pt, asm, ex);
      }

      if (i === 4) {                                   // the placement gallery leans slightly with the flight
        var arc = (lp - 0.5) * -9 + smx * 3;
        if (Math.abs(arc - st.arc) > 0.05 && pt.arc) { pt.arc.style.setProperty('--arc', arc.toFixed(2)); st.arc = arc; }
      } else if (i === 5) {                            // photos drift past each other
        var px = (lp - 0.5) * 90;
        if (Math.abs(px - st.px) > 0.3) {
          st.px = px;
          for (var m = 0; m < pt.shots.length; m++) { pt.shots[m].style.translate = (px * (KS[m] || 1)).toFixed(1) + 'px 0'; }
        }
      }
    }

    var idx = clamp(Math.round(cam / D), 0, N - 1);
    if (idx !== lastIdx) {
      lastIdx = idx;
      if (hudNow) { hudNow.textContent = ('0' + (idx + 1)).slice(-2); }
      if (hudName) { hudName.textContent = scenes[idx].getAttribute('data-title') || ''; }
      dots.forEach(function (b, k) { b.classList.toggle('is-on', k === idx); });
    }
  }

  /* ------------------------------------------------------------------
     2. Programs — pinned horizontal 3D scroller
     ------------------------------------------------------------------ */
  var prog = $('[data-prog]'), track = $('#h3sTrack'), progView = $('.h3s-prog__view'), progPin = $('.h3s-prog__pin');
  var pcards = track ? $$('.h3s-pc', track) : [];
  var progBar = $('#h3sProgBar'), progNow = $('#h3sProgNow');
  var pg = { top: 0, height: 0, pinH: 0, overflow: 0, centers: [] };
  var lastProgNow = -1;

  function progLayout() {
    if (!live || !prog || !track) { return; }
    prog.style.height = '';
    pg.pinH = progPin.offsetHeight;
    var vw = progView.clientWidth;
    var pad = parseFloat(getComputedStyle(track).paddingLeft) || 0;
    pg.overflow = Math.max(0, track.scrollWidth - vw);
    pg.height = pg.pinH + pg.overflow * 1.05 + 40;
    prog.style.height = Math.round(pg.height) + 'px';
    pg.top = prog.getBoundingClientRect().top + w.pageYOffset;
    pg.vw = vw;
    pg.centers = pcards.map(function (c) { return c.offsetLeft + c.offsetWidth / 2; });
  }

  function frameProg() {
    if (!prog || !live) { return; }
    var vhh = w.innerHeight;
    if (sy < pg.top - vhh * 1.3 || sy > pg.top + pg.height + vhh) { return; }   // far away: skip
    var p = clamp((sy - (pg.top - geo.hdr)) / Math.max(1, pg.height - pg.pinH), 0, 1);
    if (Math.abs(p - lastProgP) < 0.00002) { return; }
    lastProgP = p;
    var tx = -p * pg.overflow;
    track.style.transform = 'translate3d(' + tx.toFixed(1) + 'px,0,0)';
    var half = pg.vw / 2, best = 0, bd = 1e9;
    for (var i = 0; i < pcards.length; i++) {
      var dist = (pg.centers[i] + tx - half) / half;      // -1 .. 1 across the view
      var ad = Math.abs(dist);
      if (ad < bd) { bd = ad; best = i; }
      var ry = clamp(-dist * 30, -42, 42), z = -Math.min(ad, 1.4) * 170, s = 1 - Math.min(ad, 1.3) * 0.07;
      pcards[i].style.transform = 'translate3d(0,0,' + z.toFixed(0) + 'px) rotateY(' + ry.toFixed(1) + 'deg) scale(' + s.toFixed(3) + ')';
    }
    if (progBar) { progBar.style.transform = 'scaleX(' + p.toFixed(4) + ')'; }
    if (progNow && best !== lastProgNow) { lastProgNow = best; progNow.textContent = ('0' + (best + 1)).slice(-2); }
  }

  /* ------------------------------------------------------------------
     Master loop
     ------------------------------------------------------------------ */
  var topBtn = $('#h3sTopBtn'), bar = $('#h3sBar');

  var lastT = 0, slow = 0, lite = false, topOn = null;
  function step(ts) {
    ticking = false;
    var target = w.pageYOffset;
    var dtms = lastT ? Math.min(ts - lastT, 64) : 16.7;
    /* auto lite mode: if scroll frames stay slow, drop the costliest effects */
    if (live && !lite && sy !== target && lastT) {
      if (dtms > 42) { slow++; } else { slow = Math.max(0, slow - 1); }
      if (slow > 30) { lite = true; root.classList.add('h3s-lite'); if (warp) { warp.style.opacity = 0; } camera.style.perspective = ''; }
    }
    lastT = ts;
    /* frame-rate independent smoothing (about 85ms time constant) */
    sy += (target - sy) * (reduce ? 1 : 1 - Math.exp(-dtms / 85));
    if (Math.abs(target - sy) < 0.3) { sy = target; }

    if (live && !geo.stuckDone && target > 240) {
      var hb2 = $('.header-bottom');
      if (hb2 && hb2.classList.contains('stick')) { geo.stuckDone = true; if (measureHeader()) { layout(); } }
    }
    if (live) {
      smx += (mx - smx) * 0.08; smy += (my - smy) * 0.08;
      var po = (50 + smx * 6).toFixed(1) + '% ' + (50 + smy * 5).toFixed(1) + '%';
      if (po !== lastPO) { lastPO = po; camera.style.perspectiveOrigin = po; }
      if (!introDone) { lastP = -1; }                       // keep frames coming while the welcome flies in
      frameJourney();
      frameProg();
    }
    if (bar) { bar.style.transform = 'scaleX(' + clamp(target / Math.max(1, docH - w.innerHeight), 0, 1).toFixed(4) + ')'; }
    var tOn = target > 900;
    if (topBtn && tOn !== topOn) { topOn = tOn; topBtn.classList.toggle('is-on', tOn); }

    if (sy !== target || Math.abs(mx - smx) > 0.004 || Math.abs(my - smy) > 0.004 || (live && !introDone)) { request(); }
    else { lastT = 0; }
  }
  function request() { if (!ticking) { ticking = true; requestAnimationFrame(step); } }
  w.addEventListener('scroll', request, { passive: true });
  /* dev hook: settle the engine synchronously (used for automated checks) */
  w.__h3s = { settle: function (n) { for (var k = 0; k < (n || 40); k++) { step(performance.now() + k * 16); } } };

  if (canHover && !reduce) {
    stage.addEventListener('pointermove', function (e) {
      var r = stage.getBoundingClientRect();
      mx = ((e.clientX - r.left) / r.width - 0.5) * 2;
      my = ((e.clientY - r.top) / r.height - 0.5) * 2;
      request();
    }, { passive: true });
    stage.addEventListener('pointerleave', function () { mx = 0; my = 0; request(); });
  }

  /* start */
  if (journey && !reduce) {
    live = true;
    root.classList.add('h3s-live');
    introT0 = performance.now();
    layout();
    var rt;
    w.addEventListener('resize', function () { clearTimeout(rt); rt = setTimeout(layout, 120); });
    w.addEventListener('load', layout);
    if (d.fonts && d.fonts.ready) { d.fonts.ready.then(layout); }
  } else {
    scenes.forEach(function (s) { s.classList.add('is-on'); });
  }
  request();
  if ('ResizeObserver' in w) { new ResizeObserver(function () { docH = root.scrollHeight; }).observe(d.body); }

  /* decode wall photos during idle time so arriving at a station never hitches */
  w.addEventListener('load', function () {
    var imgs = $$('.h3s-cell img, .h3s-school img, .h3s-arc__card img'), k = 0;
    var idle = function (fn) { return w.requestIdleCallback ? w.requestIdleCallback(fn) : setTimeout(fn, 60); };
    (function next() {
      if (k >= imgs.length) { return; }
      var im = imgs[k++];
      (im.decode ? im.decode() : Promise.resolve()).catch(function () {}).then(function () { idle(next); });
    })();
  });

  /* journey station buttons (rail) */
  dots.forEach(function (b) {
    b.addEventListener('click', function () {
      var i = +b.getAttribute('data-goto');
      var y = geo.top - geo.hdr + (i / (N - 1)) * (geo.height - geo.stageH) + 2;
      w.scrollTo({ top: y, behavior: reduce ? 'auto' : 'smooth' });
    });
  });

  /* in-page anchors */
  $$('.h3s a[href^="#"]').forEach(function (a) {
    a.addEventListener('click', function (e) {
      var id = a.getAttribute('href'); if (id.length < 2) { return; }
      var t = $(id); if (!t) { return; }
      e.preventDefault();
      var y = t.getBoundingClientRect().top + w.pageYOffset - geo.hdr + 1;
      w.scrollTo({ top: y, behavior: reduce ? 'auto' : 'smooth' });
    });
  });
  if (topBtn) { topBtn.addEventListener('click', function (e) { e.preventDefault(); w.scrollTo({ top: 0, behavior: reduce ? 'auto' : 'smooth' }); }); }

  /* ------------------------------------------------------------------
     3a. Video facade
     ------------------------------------------------------------------ */
  (function () {
    var wrap = $('#h3sVideo'), btn = $('#h3sVideoBtn');
    if (!wrap) { return; }
    wrap.addEventListener('click', function () {
      if ($('iframe', wrap)) { return; }
      var f = d.createElement('iframe');
      f.src = 'https://www.youtube.com/embed/Gm-KE2N_5ws?autoplay=1&mute=1&playsinline=1&rel=0';
      f.title = 'Maya Devi University campus tour';
      f.allow = 'autoplay; encrypted-media; picture-in-picture; fullscreen'; f.allowFullscreen = true;
      f.style.cssText = 'position:absolute;inset:0;width:100%;height:100%;border:0;z-index:5;';
      wrap.appendChild(f);
      if (btn) { btn.remove(); }
      var badge = $('.h3s-screen__badge', wrap); if (badge) { badge.style.display = 'none'; }
    });
  })();

  /* ------------------------------------------------------------------
     3b. Facilities scrollytelling
     ------------------------------------------------------------------ */
  (function () {
    var items = $$('[data-fac-item]'), imgs = $$('.h3s-fac__img'), no = $('#h3sFacNo');
    if (!items.length || !('IntersectionObserver' in w)) { return; }
    var io = new IntersectionObserver(function (es) {
      es.forEach(function (e) {
        if (!e.isIntersecting) { return; }
        var i = +e.target.getAttribute('data-fac-item');
        items.forEach(function (it, k) { it.classList.toggle('is-on', k === i); });
        imgs.forEach(function (im, k) { im.classList.toggle('is-on', k === i); });
        if (no) { no.textContent = ('0' + (i + 1)).slice(-2); }
      });
    }, { rootMargin: '-42% 0px -42% 0px', threshold: 0 });
    items.forEach(function (it) { io.observe(it); });
  })();

  /* ------------------------------------------------------------------
     3c. Student voices
     ------------------------------------------------------------------ */
  (function () {
    var box = $('[data-voices]'); if (!box) { return; }
    var cards = $$('.h3s-voice', box), n = cards.length, a = 0, timer = null, paused = false, inView = false;
    var dotsWrap = $('[data-voice-dots]', box);
    var bs = cards.map(function (c, i) {
      var b = d.createElement('button'); b.type = 'button'; b.setAttribute('aria-label', 'Show story ' + (i + 1));
      b.addEventListener('click', function () { go(i); }); dotsWrap.appendChild(b); return b;
    });
    function show() {
      cards.forEach(function (c, i) { c.classList.toggle('is-on', i === a); c.setAttribute('aria-hidden', i === a ? 'false' : 'true'); });
      bs.forEach(function (b, i) { b.setAttribute('aria-selected', i === a ? 'true' : 'false'); });
    }
    function restart() { clearTimeout(timer); if (reduce || paused || !inView) { return; } timer = setTimeout(function () { go(a + 1); }, 8000); }
    function go(i) { a = (i + n) % n; show(); restart(); }
    $('[data-voice-prev]', box).addEventListener('click', function () { go(a - 1); });
    $('[data-voice-next]', box).addEventListener('click', function () { go(a + 1); });
    box.addEventListener('mouseenter', function () { paused = true; clearTimeout(timer); });
    box.addEventListener('mouseleave', function () { paused = false; restart(); });
    box.addEventListener('focusin', function () { paused = true; clearTimeout(timer); });
    box.addEventListener('focusout', function () { paused = false; restart(); });
    show();
    if ('IntersectionObserver' in w) { new IntersectionObserver(function (es) { inView = es[0].isIntersecting; restart(); }, { threshold: 0.3 }).observe(box); }
  })();

  /* ------------------------------------------------------------------
     3d. Drag-to-scroll strips (blog)
     ------------------------------------------------------------------ */
  $$('[data-hscroll]').forEach(function (el) {
    var down = false, sx = 0, sl = 0, moved = false;
    el.addEventListener('pointerdown', function (e) { if (e.pointerType !== 'mouse') { return; } down = true; moved = false; sx = e.clientX; sl = el.scrollLeft; });
    w.addEventListener('pointermove', function (e) {
      if (!down) { return; }
      var dx = e.clientX - sx;
      if (Math.abs(dx) > 6) { moved = true; el.classList.add('is-drag'); }
      el.scrollLeft = sl - dx;
    });
    w.addEventListener('pointerup', function () { down = false; el.classList.remove('is-drag'); });
    el.addEventListener('click', function (e) { if (moved) { e.preventDefault(); moved = false; } }, true);
  });

  /* ------------------------------------------------------------------
     3e. FAQ
     ------------------------------------------------------------------ */
  var qs = $$('.h3s-q');
  qs.forEach(function (q) {
    var b = $('.h3s-q__b', q);
    b.addEventListener('click', function () {
      var was = q.classList.contains('is-open');
      qs.forEach(function (o) { o.classList.remove('is-open'); $('.h3s-q__b', o).setAttribute('aria-expanded', 'false'); });
      if (!was) { q.classList.add('is-open'); b.setAttribute('aria-expanded', 'true'); }
    });
  });

  /* ------------------------------------------------------------------
     3f. Soft 3D reveal for the sections after the journey + photo parallax
     ------------------------------------------------------------------ */
  var rv = $$('.h3s-fac__intro, .h3s-voices__head, .h3s-voices__stage, .h3s-news__head, .h3s-post, .h3s-ev, .h3s-q, .h3s-prog__head, .h3s-end__in');
  if ('IntersectionObserver' in w && !reduce) {
    var postN = 0, evN = 0, qN = 0;
    rv.forEach(function (el, i) {
      el.classList.add('h3s-rv');
      el.style.setProperty('--rd', ((i % 4) * 0.07).toFixed(2) + 's');
      var from = '';
      if (el.classList.contains('h3s-post')) { from = ['l', 'tr', '', 'r', 'tl'][postN++ % 5]; }
      else if (el.classList.contains('h3s-ev')) { from = (evN++ % 2) ? 'r' : 'l'; }
      else if (el.classList.contains('h3s-q')) { from = (qN++ % 2) ? 'tr' : 'tl'; }
      else if (el.classList.contains('h3s-voices__stage')) { from = 'r'; }
      else if (el.classList.contains('h3s-fac__intro') || el.classList.contains('h3s-voices__head') || el.classList.contains('h3s-prog__head')) { from = 'tl'; }
      else if (el.classList.contains('h3s-news__head')) { from = 'bl'; }
      if (from) { el.setAttribute('data-from', from); }
    });
    var rio = new IntersectionObserver(function (es) {
      es.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('in'); rio.unobserve(e.target); } });
    }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });
    rv.forEach(function (el) { rio.observe(el); });
  }

  var par = $$('[data-bgpar]');
  if (par.length && !reduce) {
    var pt = false;
    var upd = function () {
      pt = false;
      par.forEach(function (el) {
        var r = el.parentNode.getBoundingClientRect(), vh = w.innerHeight;
        if (r.bottom < -200 || r.top > vh + 200) { return; }
        el.style.transform = 'translate3d(0,' + (((r.top + r.height / 2 - vh / 2) / vh) * -80).toFixed(1) + 'px,0) scale(1.06)';
      });
    };
    w.addEventListener('scroll', function () { if (!pt) { pt = true; requestAnimationFrame(upd); } }, { passive: true });
    upd();
  }
})();
