/* ==========================================================================
   Maya Devi University — new homepage  ·  new-index.php
   Vanilla JS, no libraries. One rAF loop that only runs while something
   is changing (scroll, pointer springs). Reveals are position-based and
   run on phones too; sliders support swipe.
   ========================================================================== */
(function () {
  'use strict';

  var root = document.querySelector('.nx');
  if (!root) return;
  var html = document.documentElement;
  var still = html.classList.contains('nx-still');
  var $ = function (s, c) { return (c || document).querySelector(s); };
  var $$ = function (s, c) { return Array.prototype.slice.call((c || document).querySelectorAll(s)); };
  var clamp = function (v, a, b) { return v < a ? a : v > b ? b : v; };
  var lerp = function (a, b, t) { return a + (b - a) * t; };
  var fine = window.matchMedia('(hover: hover) and (pointer: fine)');
  var vw = window.innerWidth, vh = window.innerHeight;
  var isDesk = function () { return vw >= 1024 && fine.matches; };

  /* ---------------- sticky header offset ---------------- */
  var bar = $('.sticky-bar');
  var topPx = -1;
  function setTop() {
    var t = 0;
    if (bar && getComputedStyle(bar).position === 'fixed') t = bar.offsetHeight;
    if (t !== topPx) { topPx = t; root.style.setProperty('--top', t + 'px'); }
  }

  /* ---------------- hero slider ---------------- */
  var hero = $('[data-hero]');
  function setHeroTop() {
    if (!hero) return;
    var t = hero.getBoundingClientRect().top + window.scrollY;
    if (window.scrollY < 5) root.style.setProperty('--hero-top', Math.max(0, t) + 'px');
  }
  /* generic auto-rotating tab set: used by the hero, leadership and infrastructure */
  function rotator(opts) {
    var items = opts.items, tabs = opts.tabs, cur = 0, timer = null, paused = false;
    function go(i, user) {
      var n = items.length;
      i = (i + n) % n;
      items.forEach(function (el, k) {
        var on = k === i;
        el.classList.toggle('is-on', on);
        if (opts.aria !== false) el.setAttribute('aria-hidden', on ? 'false' : 'true');
        $$('a, button', el).forEach(function (a) { if (!a.closest('[role="tablist"]')) a.tabIndex = on ? 0 : -1; });
      });
      tabs.forEach(function (t, k) {
        t.classList.toggle('is-on', k === i);
        t.classList.toggle('is-done', k < i);
        t.setAttribute('aria-selected', k === i ? 'true' : 'false');
        if (k === i) { var b = $('i b', t); if (b) { b.style.animation = 'none'; void b.offsetWidth; b.style.animation = ''; } }
      });
      cur = i;
      if (opts.onChange) opts.onChange(i);
      if (user) restart();
    }
    function restart() {
      clearTimeout(timer);
      if (paused || still || !opts.delay) return;
      timer = setTimeout(function tick() {
        var box = opts.box.getBoundingClientRect();
        if (document.hidden || box.bottom < 0 || box.top > vh || opts.box.matches(':hover')) { timer = setTimeout(tick, 1200); return; }
        go(cur + 1);
        restart();
      }, opts.delay);
    }
    tabs.forEach(function (t, k) {
      t.addEventListener('click', function () { go(k, true); });
      if (opts.hover) t.addEventListener('mouseenter', function () { if (fine.matches) go(k, true); });
    });
    if (opts.delay) opts.box.style.setProperty('--dur', opts.delay + 'ms');
    restart();
    return {
      go: go, restart: restart,
      next: function () { go(cur + 1, true); }, prev: function () { go(cur - 1, true); },
      pause: function (p) { paused = p; if (p) clearTimeout(timer); else restart(); }
    };
  }
  if (hero) {
    var hr = rotator({ box: hero, items: $$('[data-slide]', hero), tabs: $$('[data-tab]', hero), delay: 7000 });
    $('[data-next]', hero).addEventListener('click', hr.next);
    $('[data-prev]', hero).addEventListener('click', hr.prev);
    var pp = $('[data-pause]', hero);
    pp.addEventListener('click', function () {
      var p = !hero.classList.contains('is-paused');
      hero.classList.toggle('is-paused', p);
      pp.setAttribute('aria-label', p ? 'Play slideshow' : 'Pause slideshow');
      hr.pause(p);
    });
    /* swipe on touch screens */
    var sx = 0, sy = 0;
    hero.addEventListener('touchstart', function (e) { sx = e.touches[0].clientX; sy = e.touches[0].clientY; }, { passive: true });
    hero.addEventListener('touchend', function (e) {
      var dx = e.changedTouches[0].clientX - sx, dy = e.changedTouches[0].clientY - sy;
      if (Math.abs(dx) > 45 && Math.abs(dx) > Math.abs(dy)) { if (dx < 0) hr.next(); else hr.prev(); }
    }, { passive: true });
  }

  /* leadership */
  var lead = $('[data-lead]');
  if (lead) rotator({ box: lead, items: $$('[data-lead-card]', lead), tabs: $$('[data-lead-tab]', lead), delay: 8000 });

  /* infrastructure */
  var infra = $('[data-infra]');
  if (infra) {
    var imgs = $$('[data-infra-img]', infra), cnt = $('[data-infra-count]', infra);
    var total = ('0' + imgs.length).slice(-2);
    rotator({
      box: infra, items: imgs, tabs: $$('[data-infra-tab]', infra), delay: vw >= 768 ? 6000 : 0, hover: true, aria: false,
      onChange: function (i) { cnt.textContent = ('0' + (i + 1)).slice(-2) + ' / ' + total; }
    });
  }

  /* ---------------- reveals + counters (replay on every scroll pass) ----------------
     An element animates in when it enters the viewport and is reset once it has
     left the screen completely, so it plays again the next time it scrolls in. */
  var reveals = $$('[data-up], [data-lines], [data-wipe], [data-card], .nx-mark');
  var counters = $$('[data-count]');
  function markDelays(m, on) {
    $$('.nx-mark__ch > span', m).forEach(function (s, i) { s.style.transitionDelay = on ? (i * 50) + 'ms' : ''; });
  }
  $$('.nx-mark').forEach(function (m) { markDelays(m, true); });
  function revealFrame() {
    for (var i = 0; i < reveals.length; i++) {
      var el = reveals[i];
      var r = el.getBoundingClientRect();
      if (!r.width && !r.height) continue;
      var inView = r.top < vh * 0.9 && r.bottom > 0;
      var gone = r.bottom < -20 || r.top > vh + 20;
      if (inView && !el._in) {
        el._in = true;
        el.classList.add('is-in');
        if (el.classList.contains('nx-mark')) {
          clearTimeout(el._mt);
          el._mt = setTimeout(function (m) { markDelays(m, false); }, 1600, el);
        }
      } else if (gone && el._in) {
        el._in = false;
        el.classList.remove('is-in');
        if (el.classList.contains('nx-mark')) { clearTimeout(el._mt); markDelays(el, true); }
      }
    }
    for (var j = 0; j < counters.length; j++) {
      var c = counters[j];
      var rc = c.getBoundingClientRect();
      if (rc.top < vh * 0.92 && rc.bottom > 0) { if (!c._in) { c._in = true; countUp(c); } }
      else if (rc.bottom < -20 || rc.top > vh + 20) c._in = false;
    }
  }
  function countUp(el) {
    var end = parseFloat(el.getAttribute('data-count'));
    var dec = parseInt(el.getAttribute('data-dec') || '0', 10);
    if (still) return;
    var t0 = performance.now(), dur = 1400, run = (el._run = (el._run || 0) + 1);
    (function step(now) {
      if (run !== el._run) return; // a newer count started
      var k = clamp((now - t0) / dur, 0, 1);
      var v = end * (1 - Math.pow(1 - k, 3));
      el.textContent = dec ? v.toFixed(dec) : Math.round(v).toLocaleString('en-IN');
      if (k < 1) requestAnimationFrame(step);
    })(t0);
  }

  /* ---------------- stacked school cards ---------------- */
  var stackList = $('[data-stack]');
  var stackItems = stackList ? $$('[data-stack-item]', stackList) : [];
  function stackFrame() {
    if (!stackList || still) return;
    var r = stackList.getBoundingClientRect();
    if (r.bottom < 0 || r.top > vh) return;
    var n = stackItems.length;
    var P = clamp(-r.top / Math.max(1, r.height - vh * 0.8), 0, 1);
    for (var i = 0; i < n; i++) {
      var card = stackItems[i].firstElementChild;
      var k = clamp((P - i / n) / (1 - i / n), 0, 1);
      var sc = 1 - (n - 1 - i) * 0.045 * k;
      var veil = 0;
      if (i < n - 1) {
        var nx = stackItems[i + 1].getBoundingClientRect();
        var cur = stackItems[i].getBoundingClientRect();
        veil = 0.55 * clamp(1 - (nx.top - cur.top - 22) / Math.max(1, cur.height), 0, 1);
      }
      card.style.setProperty('--sc', sc.toFixed(4));
      card.style.setProperty('--veil', veil.toFixed(3));
    }
  }
  $$('[data-card]').forEach(function (card) {
    var par = $('[data-card-par]', card);
    if (!par) return;
    par.style.transition = 'transform .9s cubic-bezier(.16,1,.3,1)';
    card.addEventListener('mousemove', function (ev) {
      if (!isDesk()) return;
      var b = card.getBoundingClientRect();
      var x = (ev.clientX - b.left) / b.width - 0.5, y = (ev.clientY - b.top) / b.height - 0.5;
      par.style.setProperty('--px', (x * -22).toFixed(1) + 'px');
      par.style.setProperty('--py', (y * -16).toFixed(1) + 'px');
    });
    card.addEventListener('mouseleave', function () { par.style.setProperty('--px', '0px'); par.style.setProperty('--py', '0px'); });
  });

  /* ---------------- programme finder ---------------- */
  var finder = $('[data-finder]');
  var state = { cluster: 'all', level: 'all', q: '', all: false, hover: null, hoverSlab: null };
  var LIMIT = vw < 768 ? 8 : 12;
  var rows = finder ? $$('[data-row]', finder) : [];
  var chipsWrap = finder && $('[data-chips]', finder);
  var moreBtn = finder && $('[data-more]', finder);
  var emptyMsg = finder && $('[data-empty]', finder);
  var model = finder && $('[data-model]', finder);
  var stage = finder && $('[data-model-stage]', finder);
  var slabs = finder ? $$('[data-slab]', finder) : [];
  var names = {};
  slabs.forEach(function (s) { names[s.getAttribute('data-slab')] = s.getAttribute('aria-label').split(',')[0]; });

  function movePill(wrap) {
    if (!wrap) return;
    var pill = $('[data-pill]', wrap), on = $('.is-on', wrap);
    if (!pill || !on) return;
    pill.style.width = on.offsetWidth + 'px';
    pill.style.height = on.offsetHeight + 'px';
    pill.style.transform = 'translate(' + on.offsetLeft + 'px,' + on.offsetTop + 'px)';
  }
  function setRadio(wrap, attr, val) {
    $$('[' + attr + ']', wrap).forEach(function (b) {
      var on = b.getAttribute(attr) === val;
      b.classList.toggle('is-on', on);
      b.setAttribute('aria-checked', on ? 'true' : 'false');
    });
    movePill(wrap);
  }
  function applyFinder(animate) {
    if (!finder) return;
    var q = state.q.trim().toLowerCase();
    var counts = { all: 0 };
    var shown = 0, matched = 0, k = 0;
    rows.forEach(function (r) {
      var c = r.getAttribute('data-cluster');
      var okLv = state.level === 'all' || r.getAttribute('data-level') === state.level;
      var okQ = !q || r.getAttribute('data-name').indexOf(q) > -1;
      if (okLv && okQ) { counts.all++; counts[c] = (counts[c] || 0) + 1; }
      var ok = okLv && okQ && (state.cluster === 'all' || c === state.cluster);
      if (ok) matched++;
      var vis = ok && (state.all || q || matched <= LIMIT);
      var was = !r.hidden;
      r.hidden = !vis;
      if (vis) {
        shown++;
        if (animate && (!was || animate === 'all')) { r.classList.remove('is-enter'); void r.offsetWidth; r.style.setProperty('--k', Math.min(k++, 14)); r.classList.add('is-enter'); }
      }
    });
    $$('[data-n]', finder).forEach(function (s) { s.textContent = counts[s.getAttribute('data-n')] || 0; });
    emptyMsg.hidden = matched > 0;
    var hiddenLeft = matched - shown;
    moreBtn.hidden = hiddenLeft <= 0;
    if (hiddenLeft > 0) $$('.nx-roll > span', moreBtn).forEach(function (s) { s.textContent = 'Show all ' + matched; });
    movePill(chipsWrap);
    highlight();
  }
  function setCluster(c) {
    state.cluster = c; state.all = false;
    setRadio(chipsWrap, 'data-filter', c);
    applyFinder('all');
  }
  if (finder) {
    chipsWrap.addEventListener('click', function (ev) {
      var b = ev.target.closest('[data-filter]'); if (!b) return;
      setCluster(b.getAttribute('data-filter'));
    });
    var lv = $('[data-levels]', finder);
    lv.addEventListener('click', function (ev) {
      var b = ev.target.closest('[data-level]'); if (!b) return;
      state.level = b.getAttribute('data-level'); state.all = false;
      setRadio(lv, 'data-level', state.level);
      applyFinder('all');
    });
    var find = $('[data-find]', finder);
    var ft;
    find.addEventListener('input', function () { clearTimeout(ft); ft = setTimeout(function () { state.q = find.value; applyFinder(true); }, 120); });
    moreBtn.addEventListener('click', function () { state.all = true; applyFinder(true); });
    // radiogroup arrow keys
    [chipsWrap, lv].forEach(function (g) {
      g.addEventListener('keydown', function (ev) {
        if (['ArrowRight', 'ArrowLeft', 'ArrowDown', 'ArrowUp'].indexOf(ev.key) < 0) return;
        var bs = $$('[role="radio"]', g), i = bs.indexOf(document.activeElement);
        if (i < 0) return;
        ev.preventDefault();
        var n = bs[(i + (ev.key === 'ArrowRight' || ev.key === 'ArrowDown' ? 1 : bs.length - 1)) % bs.length];
        n.focus(); n.click();
      });
    });
    slabs.forEach(function (s) {
      var c = s.getAttribute('data-slab');
      s.addEventListener('click', function () { setCluster(state.cluster === c ? 'all' : c); });
      s.addEventListener('mouseenter', function () { state.hoverSlab = c; highlight(); });
      s.addEventListener('mouseleave', function () { state.hoverSlab = null; highlight(); });
      s.addEventListener('focus', function () { state.hoverSlab = c; highlight(); });
      s.addEventListener('blur', function () { state.hoverSlab = null; highlight(); });
    });
    window.addEventListener('nx:filter', function (ev) { setCluster(ev.detail); });
    $$('[data-to-finder]').forEach(function (b) {
      b.addEventListener('click', function () {
        window.dispatchEvent(new CustomEvent('nx:filter', { detail: b.getAttribute('data-to-finder') }));
        var y = finder.getBoundingClientRect().top + window.scrollY - (topPx || 0) - 10;
        window.scrollTo({ top: y, behavior: still ? 'auto' : 'smooth' });
      });
    });
  }

  /* readout + slab highlight */
  var readText = '';
  function readout(b, s) {
    var box = $('[data-readout]', finder);
    var txt = b + '|' + s;
    if (txt === readText) return;
    readText = txt;
    var old = $('[data-read-line]', box);
    var nl = document.createElement('div');
    nl.className = 'nx-model__line is-pre';
    nl.setAttribute('data-read-line', '');
    nl.innerHTML = '<b></b><span></span>';
    nl.firstChild.textContent = b; nl.lastChild.textContent = s;
    box.appendChild(nl);
    if (old) { old.removeAttribute('data-read-line'); old.classList.add('is-out'); setTimeout(function () { old.remove(); }, 460); }
    requestAnimationFrame(function () { requestAnimationFrame(function () { nl.classList.remove('is-pre'); }); });
  }
  function countFor(c) { var el = $('[data-n="' + c + '"]', finder); return el ? el.textContent : '0'; }
  function highlight() {
    if (!model) return;
    var c = state.hoverSlab || (state.hover && state.hover.getAttribute('data-cluster')) || (state.cluster !== 'all' ? state.cluster : null);
    model.classList.toggle('has-hl', !!c);
    slabs.forEach(function (s) { s.classList.toggle('is-hl', s.getAttribute('data-slab') === c); });
    if (state.hover) {
      readout(state.hover.querySelector('.nx-row__name').textContent, state.hover.querySelector('.nx-row__school').textContent);
    } else if (state.hoverSlab) {
      readout(names[state.hoverSlab], countFor(state.hoverSlab) + ' programmes · click to filter');
    } else if (state.cluster !== 'all') {
      readout(names[state.cluster], countFor(state.cluster) + ' programmes shown');
    } else {
      readout('Five areas, fifteen schools', 'Pick a layer to filter the programmes');
    }
  }

  /* model assembly on scroll + pointer tilt */
  var tilt = { x: 0, y: 0, tx: 0, ty: 0 };
  function modelFrame() {
    if (!stage) return false;
    var r = stage.getBoundingClientRect();
    if (r.bottom < 0 || r.top > vh) return false;
    var t = still ? 1 : clamp((vh - r.top) / (vh * 0.45 + r.height / 2), 0, 1);
    var e = 1 - Math.pow(1 - t, 2);
    stage.style.setProperty('--gap', (74 - 48 * e).toFixed(2));
    stage.style.setProperty('--rz', (-62 + 22 * e).toFixed(2));
    tilt.x += (tilt.tx - tilt.x) * 0.1; tilt.y += (tilt.ty - tilt.y) * 0.1;
    stage.style.setProperty('--tx', tilt.x.toFixed(3));
    stage.style.setProperty('--ty', tilt.y.toFixed(3));
    return Math.abs(tilt.tx - tilt.x) > 0.01 || Math.abs(tilt.ty - tilt.y) > 0.01;
  }
  if (stage && !still) {
    stage.addEventListener('mousemove', function (ev) {
      if (!isDesk()) return;
      var b = stage.getBoundingClientRect();
      tilt.tx = ((ev.clientX - b.left) / b.width - 0.5) * 16;
      tilt.ty = ((ev.clientY - b.top) / b.height - 0.5) * -10;
      kick();
    });
    stage.addEventListener('mouseleave', function () { tilt.tx = 0; tilt.ty = 0; kick(); });
  }

  /* row hover + trailing preview card */
  var peek = $('[data-peek]');
  var pk = { x: 0, y: 0, tx: 0, ty: 0, on: false };
  var rowsWrap = finder && $('[data-rows]', finder);
  if (rowsWrap) {
    rows.forEach(function (r) {
      r.addEventListener('mouseenter', function (ev) {
        if (!fine.matches) return;
        state.hover = r;
        rowsWrap.classList.add('nx-rows-hover');
        rows.forEach(function (o) { o.classList.toggle('is-hover', o === r); });
        highlight();
        if (peek && isDesk()) {
          var c = r.getAttribute('data-cluster');
          $$('[data-peek-img]', peek).forEach(function (im) { im.classList.toggle('is-on', im.getAttribute('data-peek-img') === c); });
          $('[data-peek-name]', peek).textContent = r.querySelector('.nx-row__name').textContent;
          $('[data-peek-school]', peek).textContent = r.querySelector('.nx-row__school').textContent + ' · ' + r.querySelector('.nx-row__lv').textContent;
          if (!pk.on) { pk.x = pk.tx = ev.clientX; pk.y = pk.ty = ev.clientY; }
          pk.on = true;
          peek.classList.add('is-on');
          kick();
        }
      });
      r.addEventListener('mousemove', function (ev) { pk.tx = ev.clientX; pk.ty = ev.clientY; kick(); });
    });
    rowsWrap.addEventListener('mouseleave', function () {
      state.hover = null;
      rowsWrap.classList.remove('nx-rows-hover');
      rows.forEach(function (o) { o.classList.remove('is-hover'); });
      highlight();
      pk.on = false;
      if (peek) peek.classList.remove('is-on');
    });
  }
  function peekFrame() {
    if (!peek || !pk.on) return false;
    pk.x += (pk.tx - pk.x) * 0.2; pk.y += (pk.ty - pk.y) * 0.2;
    peek.style.transform = 'translate3d(' + (pk.x + 32).toFixed(1) + 'px,' + (pk.y - peek.offsetHeight / 2).toFixed(1) + 'px,0)';
    return Math.abs(pk.tx - pk.x) > 0.3 || Math.abs(pk.ty - pk.y) > 0.3;
  }
  window.addEventListener('scroll', function () { if (pk.on) { pk.on = false; peek.classList.remove('is-on'); } }, { passive: true });

  /* ---------------- campus circular reveal ---------------- */
  var site = $('[data-site]');
  var siteStage = site && $('.nx-site__stage', site);
  function siteFrame() {
    if (!site || still) return;
    var r = site.getBoundingClientRect();
    if (r.bottom < 0 || r.top > vh) return;
    var p = clamp(-r.top / Math.max(1, r.height - siteStage.offsetHeight), 0, 1);
    var k = clamp(p / 0.6, 0, 1);
    var veil = clamp((p - 0.45) / 0.2, 0, 1);
    var s = site.style;
    s.setProperty('--cr', (9 + 69 * k).toFixed(2));
    s.setProperty('--cs', (1.4 - 0.4 * k).toFixed(4));
    s.setProperty('--intro', (1 - clamp(p / 0.3, 0, 1)).toFixed(3));
    s.setProperty('--veil', veil.toFixed(3));
    site.classList.toggle('is-open', veil > 0.5);
  }

  /* ---------------- dock ---------------- */
  var dock = $('[data-dock]');
  var dockLinks = dock ? $$('[data-dock-link]', dock) : [];
  var dockSecs = dockLinks.map(function (a) { return document.getElementById(a.getAttribute('data-dock-link')); });
  var dockActive = null;
  if (dock) setTimeout(function () { dock.classList.add('is-on'); }, 1500);
  function dockFrame() {
    if (!dock) return;
    var maxS = document.documentElement.scrollHeight - vh;
    var hb = hero ? hero.getBoundingClientRect().bottom : 0;
    var ft = document.querySelector('.nx-mark');
    var nearEnd = ft ? ft.getBoundingClientRect().top < vh - 40 : false;
    dock.classList.toggle('is-off', hb > vh * 0.35 || nearEnd);
    dock.style.setProperty('--prog', clamp(window.scrollY / Math.max(1, maxS), 0, 1).toFixed(4));
    var act = null;
    for (var i = 0; i < dockSecs.length; i++) {
      var sec = dockSecs[i]; if (!sec) continue;
      var r = sec.getBoundingClientRect();
      if (r.top <= vh / 2 && r.bottom >= vh / 2) act = dockLinks[i];
    }
    if (act === dockActive) return;
    dockActive = act;
    var pill = $('[data-dock-pill]', dock);
    dockLinks.forEach(function (a) { a.classList.toggle('is-on', a === act); });
    if (act && !act.classList.contains('nx-dock__cta')) {
      pill.style.opacity = '1';
      pill.style.width = act.offsetWidth + 'px';
      pill.style.transform = 'translateX(' + act.offsetLeft + 'px)';
    } else { pill.style.opacity = '0'; }
  }
  if (dock) {
    dockLinks.forEach(function (a) {
      a.addEventListener('click', function (ev) {
        var t = document.getElementById(a.getAttribute('data-dock-link'));
        if (!t) return;
        ev.preventDefault();
        window.scrollTo({ top: t.getBoundingClientRect().top + window.scrollY - (topPx || 0), behavior: still ? 'auto' : 'smooth' });
      });
    });
  }
  /* magnetic buttons */
  $$('[data-magnet]').forEach(function (b) {
    b.style.transition = 'transform .45s cubic-bezier(.16,1,.3,1), background .2s, color .2s';
    b.addEventListener('mousemove', function (ev) {
      if (!isDesk()) return;
      var r = b.getBoundingClientRect();
      var f = b.classList.contains('nx-dock__cta') ? 0.2 : 0.06;
      b.style.transform = 'translate(' + ((ev.clientX - r.left - r.width / 2) * f).toFixed(1) + 'px,' + ((ev.clientY - r.top - r.height / 2) * f).toFixed(1) + 'px)';
    });
    b.addEventListener('mouseleave', function () { b.style.transform = ''; });
  });

  /* ---------------- video ---------------- */
  $$('[data-video]').forEach(function (v) {
    var btn = $('button', v);
    btn.addEventListener('click', function () {
      var f = document.createElement('iframe');
      f.src = 'https://www.youtube.com/embed/Gm-KE2N_5ws?autoplay=1&rel=0&playsinline=1';
      f.title = 'Maya Devi University campus video';
      f.allow = 'autoplay; encrypted-media; picture-in-picture';
      f.allowFullscreen = true;
      v.appendChild(f);
      btn.remove();
    });
  });

  /* ---------------- horizontal scrollers (posters, voices) ---------------- */
  function scroller(track, prev, next, counter) {
    if (!track) return;
    var step = function (d) {
      var first = track.firstElementChild;
      var w = first ? first.getBoundingClientRect().width + 16 : track.clientWidth;
      var atEnd = track.scrollLeft + track.clientWidth >= track.scrollWidth - 4;
      if (d > 0 && atEnd) track.scrollTo({ left: 0, behavior: 'smooth' });
      else track.scrollBy({ left: d * w, behavior: 'smooth' });
    };
    if (prev) prev.addEventListener('click', function () { step(-1); });
    if (next) next.addEventListener('click', function () { step(1); });
    if (counter) {
      var n = track.children.length;
      track.addEventListener('scroll', function () {
        var w = track.firstElementChild.getBoundingClientRect().width + 20;
        var i = Math.round(track.scrollLeft / w);
        if (track.scrollLeft + track.clientWidth >= track.scrollWidth - 4) i = n - 1;
        counter.textContent = ('0' + (i + 1)).slice(-2) + ' / ' + ('0' + n).slice(-2);
      }, { passive: true });
    }
  }
  scroller($('[data-posters]'), $('[data-pp]'), $('[data-pn]'));
  scroller($('[data-vtrack]'), $('[data-vp]'), $('[data-vn]'), $('[data-vcount]'));
  var posters = $('[data-posters]');
  if (posters && !still) {
    var auto = setInterval(function () {
      var r = posters.getBoundingClientRect();
      if (document.hidden || r.bottom < 0 || r.top > vh || posters.matches(':hover')) return;
      $('[data-pn]').click();
    }, 3800);
  }

  /* ---------------- gallery + lightbox ---------------- */
  var gal = $('[data-gallery]');
  if (gal) {
    var lb = $('[data-lb]', gal), lbImg = $('[data-lb-img]', gal), lbCap = $('[data-lb-cap]', gal);
    var cur = 0, list = [], opener = null;
    var show = function (i) {
      cur = (i + list.length) % list.length;
      var b = list[cur], im = $('img', b);
      lbImg.src = b.getAttribute('data-zoom'); lbImg.alt = im.alt; lbCap.textContent = im.alt;
    };
    var close = function () { lb.hidden = true; document.body.style.overflow = ''; if (opener) opener.focus(); };
    $$('[data-zoom]', gal).forEach(function (b) {
      b.addEventListener('click', function () {
        list = $$('[data-zoom]', gal);
        opener = b;
        show(list.indexOf(b));
        lb.hidden = false;
        document.body.style.overflow = 'hidden';
        $('[data-lb-x]', lb).focus();
      });
    });
    $('[data-lb-x]', lb).addEventListener('click', close);
    $('[data-lb-p]', lb).addEventListener('click', function () { show(cur - 1); });
    $('[data-lb-n]', lb).addEventListener('click', function () { show(cur + 1); });
    lb.addEventListener('click', function (ev) { if (ev.target === lb) close(); });
    document.addEventListener('keydown', function (ev) {
      if (lb.hidden) return;
      if (ev.key === 'Escape') close();
      if (ev.key === 'ArrowLeft') show(cur - 1);
      if (ev.key === 'ArrowRight') show(cur + 1);
    });
  }

  /* ---------------- frame loop ---------------- */
  var ticking = false;
  function frame() {
    ticking = false;
    setTop();
    var more = false;
    revealFrame();
    stackFrame();
    more = modelFrame() || more;
    more = peekFrame() || more;
    siteFrame();
    dockFrame();
    if (more) kick();
  }
  function kick() { if (!ticking) { ticking = true; requestAnimationFrame(frame); } }
  window.addEventListener('scroll', kick, { passive: true });
  window.addEventListener('resize', function () {
    vw = window.innerWidth; vh = window.innerHeight;
    movePill(chipsWrap);
    kick();
  });

  if (still) { reveals.forEach(function (el) { el.classList.add('is-in'); }); reveals = []; counters = []; }
  setHeroTop();
  applyFinder(false);
  if (document.fonts && document.fonts.ready) document.fonts.ready.then(function () { movePill(chipsWrap); });
  frame();
  window.__nxReady = true;
  /* dev hook: run one frame synchronously (the preview pane can pause rAF) */
  window.__nx = { tick: frame };
})();
