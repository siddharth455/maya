/* ==========================================================================
   Maya Devi University — "MX" redesign behaviour
   Vanilla JS, no dependencies. Every feature is optional: it only runs when
   its markup is on the page.
   ========================================================================== */
(function () {
  'use strict';

  var root = document.documentElement;
  var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var finePointer = window.matchMedia('(hover: hover) and (pointer: fine)').matches;
  var $ = function (s, c) { return (c || document).querySelector(s); };
  var $$ = function (s, c) { return Array.prototype.slice.call((c || document).querySelectorAll(s)); };
  var clamp = function (v, a, b) { return Math.min(b, Math.max(a, v)); };

  window.__mxReady = true;

  /* ---------- word splitting (keeps <em>, <br>, wrapper spans) ---------- */
  function splitWords(el, wrapClass, onWord) {
    var i = 0;
    (function walk(node) {
      Array.prototype.slice.call(node.childNodes).forEach(function (n) {
        if (n.nodeType === 3) {
          var parts = n.textContent.split(/(\s+)/);
          var frag = document.createDocumentFragment();
          parts.forEach(function (p) {
            if (!p) return;
            if (/^\s+$/.test(p)) { frag.appendChild(document.createTextNode(' ')); return; }
            var w = document.createElement('span');
            w.className = wrapClass;
            if (onWord) onWord(w, p, i, n.parentNode);
            else w.textContent = p;
            w.style.setProperty('--i', i);
            i++;
            frag.appendChild(w);
          });
          node.replaceChild(frag, n);
        } else if (n.nodeType === 1 && n.tagName !== 'BR') {
          walk(n);
        }
      });
    })(el);
    return i;
  }

  $$('[data-mx="split"]').forEach(function (el) {
    el.setAttribute('aria-label', el.textContent.replace(/\s+/g, ' ').trim());
    splitWords(el, 'mx-w', function (w, text) {
      var inner = document.createElement('span');
      inner.textContent = text;
      inner.setAttribute('aria-hidden', 'true');
      w.appendChild(inner);
    });
  });

  /* ---------- statement: words light up with scroll ---------- */
  var statements = $$('[data-mx-words]').map(function (el) {
    var count = splitWords(el, 'mx-sw', function (w, text, i, parent) {
      w.textContent = text;
      if (parent && parent.tagName === 'EM') w.classList.add('g');
    });
    return { el: el, words: $$('.mx-sw', el), n: count, on: -1 };
  });

  /* ---------- sticky header height -> --mx-top ---------- */
  var headerBar = $('.header-bottom');
  var lastTop = -1, lastCls = null;
  function syncTop(force) {
    if (!headerBar) return;
    if (force !== true && headerBar.className === lastCls) return;
    lastCls = headerBar.className;
    /* main.js adds .stick (header.php's own CSS knows .is-sticky); just ask whether it is fixed */
    var h = getComputedStyle(headerBar).position === 'fixed' ? headerBar.offsetHeight : 0;
    if (h !== lastTop) { lastTop = h; root.style.setProperty('--mx-top', h + 'px'); }
  }
  /* main.js toggles .is-sticky in its own scroll handler, so follow the class directly */
  if (headerBar && 'MutationObserver' in window) {
    new MutationObserver(syncTop).observe(headerBar, { attributes: true, attributeFilter: ['class'] });
  }

  /* ---------- reveal on scroll ---------- */
  /* Position-based (not IntersectionObserver): Chrome treats an element hidden by its
     own clip-path as not intersecting, so the image wipes would never start. */
  var pending = [], revealOn = false;
  function checkReveals() {
    if (!revealOn || !pending.length) return;
    var line = window.innerHeight * 0.9;
    for (var i = pending.length - 1; i >= 0; i--) {
      var el = pending[i];
      if (el.closest('[hidden]')) continue;          /* inactive tab panel */
      var r = el.getBoundingClientRect();
      if (r.top < line && r.bottom > 0) { el.classList.add('is-in'); pending.splice(i, 1); }
      else if (r.bottom <= 0) { el.classList.add('is-in'); pending.splice(i, 1); } /* already scrolled past */
    }
  }
  function startReveals() {
    var items = $$('.mx [data-mx]');
    if (reduce) { items.forEach(function (el) { el.classList.add('is-in'); }); return; }
    pending = items.filter(function (el) { return !el.classList.contains('is-in'); });
    revealOn = true;
    checkReveals();
    window.addEventListener('load', checkReveals);
  }
  /* ---------- counters ---------- */
  function fmt(v, dec) {
    return v.toLocaleString('en-IN', { minimumFractionDigits: dec, maximumFractionDigits: dec });
  }
  function runCounter(el) {
    var target = parseFloat(el.getAttribute('data-count'));
    var dec = parseInt(el.getAttribute('data-dec') || '0', 10);
    var pre = el.getAttribute('data-pre') || '';
    var sufHTML = el.getAttribute('data-suf-html') || '';
    var t0 = null, dur = 1800;
    if (reduce) { el.innerHTML = pre + fmt(target, dec) + sufHTML; return; }
    (function step(t) {
      if (!t0) t0 = t;
      var p = clamp((t - t0) / dur, 0, 1);
      var e = 1 - Math.pow(1 - p, 4);
      el.innerHTML = pre + fmt(target * e, dec) + sufHTML;
      if (p < 1) requestAnimationFrame(step);
    })(performance.now());
  }
  var counters = $$('[data-count]');
  if (counters.length && 'IntersectionObserver' in window) {
    var cio = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) { runCounter(e.target); cio.unobserve(e.target); }
      });
    }, { threshold: 0.5 });
    counters.forEach(function (el) { cio.observe(el); });
  }

  /* ---------- scroll loop: progress bar, parallax, statements ---------- */
  var bar = $('.mx-progress i');
  var pars = $$('[data-mx-par]').map(function (el) { return { el: el, f: parseFloat(el.getAttribute('data-mx-par')) || 0.1 }; });
  var docH = 0, vh = window.innerHeight, ticking = false;
  function measure() { docH = document.documentElement.scrollHeight - window.innerHeight; vh = window.innerHeight; }
  function frame() {
    ticking = false;
    syncTop();
    var y = window.pageYOffset;
    if (bar) bar.style.transform = 'scaleX(' + (docH > 0 ? clamp(y / docH, 0, 1) : 0) + ')';
    if (!reduce) {
      for (var i = 0; i < pars.length; i++) {
        var r = pars[i].el.getBoundingClientRect();
        if (r.bottom < -100 || r.top > vh + 100) continue;
        var off = (r.top + r.height / 2 - vh / 2) * -pars[i].f;
        pars[i].el.style.transform = 'translate3d(0,' + off.toFixed(1) + 'px,0)';
      }
    }
    for (var s = 0; s < statements.length; s++) {
      var st = statements[s], rr = st.el.getBoundingClientRect();
      if (rr.bottom < 0 || rr.top > vh) continue;
      var p = clamp((vh * 0.82 - rr.top) / (rr.height + vh * 0.3), 0, 1);
      var on = Math.round(p * st.n);
      if (on !== st.on) {
        for (var w = 0; w < st.words.length; w++) st.words[w].classList.toggle('on', w < on);
        st.on = on;
      }
    }
  }
  function onScroll() { checkReveals(); if (!ticking) { ticking = true; requestAnimationFrame(frame); } }
  window.addEventListener('scroll', onScroll, { passive: true });
  window.addEventListener('resize', function () { measure(); syncTop(true); onScroll(); });
  window.addEventListener('load', function () { measure(); onScroll(); });
  measure(); frame();
  if (reduce) statements.forEach(function (st) { st.words.forEach(function (w) { w.classList.add('on'); }); });

  /* ---------- intro curtain (first page view of the session only) ---------- */
  var curtain = $('.mx-curtain');
  var curtainShown = curtain && !root.classList.contains('mx-seen') && !reduce;
  if (curtainShown) {
    try { sessionStorage.setItem('mxSeen', '1'); } catch (e) {}
    var lift = function () {
      curtain.classList.add('is-gone');
      setTimeout(startReveals, 380);
      setTimeout(function () { curtain.parentNode && curtain.parentNode.removeChild(curtain); }, 1400);
    };
    var waited = false;
    var go = function () { if (waited) return; waited = true; setTimeout(lift, 650); };
    if (document.readyState === 'complete') go();
    else { window.addEventListener('load', go); setTimeout(go, 1800); }
  } else {
    if (curtain && curtain.parentNode) curtain.parentNode.removeChild(curtain);
    startReveals();
  }

  /* ---------- crossfading slides (hero arch) ---------- */
  $$('[data-mx-slides]').forEach(function (box) {
    var imgs = $$('img', box), cap = $('[data-mx-slide-cap]', box.parentNode), i = 0;
    if (imgs.length < 2) return;
    setInterval(function () {
      if (document.hidden) return;
      var next = (i + 1) % imgs.length, img = imgs[next];
      if (img.dataset.src) { img.src = img.dataset.src; img.removeAttribute('data-src'); }
      imgs[i].classList.remove('is-on');
      img.classList.add('is-on');
      if (cap && img.dataset.cap) cap.textContent = img.dataset.cap;
      i = next;
    }, 5200);
  });

  /* ---------- floating preview over the schools index ---------- */
  $$('[data-mx-float]').forEach(function (list) {
    if (!finePointer) return;
    var float = document.createElement('div');
    float.className = 'mx-float';
    float.setAttribute('aria-hidden', 'true');
    var rows = $$('[data-img]', list), imgs = [];
    rows.forEach(function (row, i) {
      var im = document.createElement('img');
      im.alt = ''; im.decoding = 'async'; im.dataset.src = row.getAttribute('data-img');
      float.appendChild(im); imgs.push(im);
      row.addEventListener('mouseenter', function () {
        if (imgs[i].dataset.src) { imgs[i].src = imgs[i].dataset.src; imgs[i].removeAttribute('data-src'); }
        imgs.forEach(function (x, k) { x.classList.toggle('is-on', k === i); });
      });
    });
    document.body.appendChild(float);
    var tx = 0, ty = 0, x = 0, y = 0, raf = 0, active = false;
    function loop() {
      x += (tx - x) * 0.16; y += (ty - y) * 0.16;
      float.style.transform = 'translate3d(' + (x - 150).toFixed(1) + 'px,' + (y - 112).toFixed(1) + 'px,0) scale(' + (active ? 1 : .85) + ') rotate(' + clamp((tx - x) * 0.04, -6, 6).toFixed(2) + 'deg)';
      raf = active || Math.abs(tx - x) > 0.5 ? requestAnimationFrame(loop) : 0;
    }
    list.addEventListener('mouseenter', function (e) { active = true; x = tx = e.clientX; y = ty = e.clientY; float.classList.add('is-on'); if (!raf) raf = requestAnimationFrame(loop); });
    list.addEventListener('mousemove', function (e) { tx = e.clientX; ty = e.clientY; if (!raf) raf = requestAnimationFrame(loop); });
    list.addEventListener('mouseleave', function () { active = false; float.classList.remove('is-on'); });
  });

  /* ---------- tabs ---------- */
  $$('[data-mx-tabs]').forEach(function (tabs) {
    var btns = $$('[role="tab"]', tabs);
    btns.forEach(function (b) {
      b.addEventListener('click', function () {
        btns.forEach(function (o) {
          var on = o === b;
          o.setAttribute('aria-selected', on ? 'true' : 'false');
          o.tabIndex = on ? 0 : -1;
          var p = document.getElementById(o.getAttribute('aria-controls'));
          if (!p) return;
          if (on) {
            p.hidden = false;
            var kids = p.querySelectorAll('[data-mx-stag] > *');
            Array.prototype.forEach.call(kids, function (k, i) { k.style.setProperty('--i', i); });
            p.classList.remove('is-entering'); void p.offsetWidth; p.classList.add('is-entering');
            p.querySelectorAll('[data-mx]').forEach(function (el) { el.classList.add('is-in'); });
            var rail = p.querySelector('[data-mx-rail]');
            if (rail) { rail.scrollLeft = 0; rail.dispatchEvent(new Event('scroll')); }
          } else { p.hidden = true; }
        });
      });
      b.addEventListener('keydown', function (e) {
        var i = btns.indexOf(b), n = null;
        if (e.key === 'ArrowRight') n = btns[(i + 1) % btns.length];
        if (e.key === 'ArrowLeft') n = btns[(i - 1 + btns.length) % btns.length];
        if (n) { e.preventDefault(); n.focus(); n.click(); }
      });
    });
  });

  /* ---------- horizontal rails: buttons, progress, mouse drag ---------- */
  $$('[data-mx-rail]').forEach(function (rail) {
    var wrap = rail.closest('[data-mx-railwrap]') || rail.parentNode;
    var prev = $('[data-rail-prev]', wrap), next = $('[data-rail-next]', wrap), thumb = $('.mx-rail-bar i', wrap);
    function step() { var c = rail.firstElementChild; return c ? c.getBoundingClientRect().width + 24 : 300; }
    function update() {
      var max = rail.scrollWidth - rail.clientWidth;
      if (prev) prev.disabled = rail.scrollLeft <= 2;
      if (next) next.disabled = rail.scrollLeft >= max - 2;
      if (thumb) {
        var w = max > 0 ? rail.clientWidth / rail.scrollWidth : 1;
        thumb.style.width = (w * 100) + '%';
        thumb.style.transform = 'translateX(' + (max > 0 ? (rail.scrollLeft / max) * ((1 - w) / w) * 100 : 0) + '%)';
      }
    }
    if (prev) prev.addEventListener('click', function () { rail.scrollBy({ left: -step(), behavior: 'smooth' }); });
    if (next) next.addEventListener('click', function () { rail.scrollBy({ left: step(), behavior: 'smooth' }); });
    rail.addEventListener('scroll', update, { passive: true });
    window.addEventListener('resize', update);
    update();
    if (!finePointer) return;
    var down = false, sx = 0, sl = 0, moved = false;
    rail.addEventListener('mousedown', function (e) { down = true; moved = false; sx = e.pageX; sl = rail.scrollLeft; });
    window.addEventListener('mousemove', function (e) {
      if (!down) return;
      var dx = e.pageX - sx;
      if (!moved && Math.abs(dx) > 6) { moved = true; rail.classList.add('is-drag'); }
      if (moved) { e.preventDefault(); rail.scrollLeft = sl - dx; }
    });
    window.addEventListener('mouseup', function () {
      if (!down) return; down = false;
      if (moved) setTimeout(function () { rail.classList.remove('is-drag'); }, 30);
    });
    rail.addEventListener('dragstart', function (e) { e.preventDefault(); });
  });

  /* ---------- scrollytelling (sticky image + list) ---------- */
  $$('[data-mx-scrolly]').forEach(function (box) {
    var items = $$('.mx-scrolly__item', box), stage = $$('.mx-scrolly__stage img', box), count = $('[data-scrolly-n]', box);
    if (!items.length || !('IntersectionObserver' in window)) { items.forEach(function (i) { i.classList.add('is-on'); }); return; }
    function setOn(i) {
      items.forEach(function (it, k) { it.classList.toggle('is-on', k === i); });
      stage.forEach(function (im, k) {
        if (k === i && im.dataset.src) { im.src = im.dataset.src; im.removeAttribute('data-src'); }
        im.classList.toggle('is-on', k === i);
      });
      if (count) count.textContent = ('0' + (i + 1)).slice(-2);
    }
    var sio = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) { if (e.isIntersecting) setOn(items.indexOf(e.target)); });
    }, { rootMargin: '-45% 0px -45% 0px' });
    items.forEach(function (it) { sio.observe(it); });
    setOn(0);
  });

  /* ---------- testimonials ---------- */
  $$('[data-mx-voices]').forEach(function (box) {
    var quotes = $$('.mx-voice', box), pics = $$('.mx-voices__pics img', box), n = $('[data-voice-n]', box), i = 0, timer = 0;
    if (quotes.length < 2) return;
    function show(k) {
      k = (k + quotes.length) % quotes.length;
      quotes.forEach(function (q, j) { q.classList.toggle('is-on', j === k); q.setAttribute('aria-hidden', j === k ? 'false' : 'true'); });
      pics.forEach(function (p, j) { p.classList.toggle('was-on', j === i && j !== k); p.classList.toggle('is-on', j === k); });
      if (n) n.textContent = ('0' + (k + 1)).slice(-2);
      i = k;
    }
    function auto() { clearInterval(timer); if (!reduce) timer = setInterval(function () { if (!document.hidden) show(i + 1); }, 7500); }
    var p = $('[data-voice-prev]', box), nx = $('[data-voice-next]', box);
    if (p) p.addEventListener('click', function () { show(i - 1); auto(); });
    if (nx) nx.addEventListener('click', function () { show(i + 1); auto(); });
    box.addEventListener('mouseenter', function () { clearInterval(timer); });
    box.addEventListener('mouseleave', auto);
    show(0); auto();
  });

  /* ---------- YouTube facade ---------- */
  $$('[data-mx-yt]').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var f = document.createElement('iframe');
      f.src = 'https://www.youtube.com/embed/' + btn.getAttribute('data-mx-yt') + '?autoplay=1&mute=1&playsinline=1&rel=0';
      f.title = btn.getAttribute('aria-label') || 'Video';
      f.allow = 'autoplay; encrypted-media; picture-in-picture';
      f.allowFullscreen = true;
      btn.innerHTML = ''; btn.appendChild(f); btn.style.cursor = 'default';
    }, { once: true });
  });

  /* ---------- in-page sub navigation ---------- */
  $$('[data-mx-subnav]').forEach(function (nav) {
    var links = $$('a[href^="#"]', nav);
    var secs = links.map(function (a) { return document.getElementById(a.getAttribute('href').slice(1)); });
    links.forEach(function (a, i) {
      a.addEventListener('click', function (e) {
        var t = secs[i]; if (!t) return;
        e.preventDefault();
        var off = (headerBar ? headerBar.offsetHeight : 0) + nav.offsetHeight + 8;
        window.scrollTo({ top: t.getBoundingClientRect().top + window.pageYOffset - off, behavior: reduce ? 'auto' : 'smooth' });
        history.replaceState(null, '', '#' + t.id);
      });
    });
    if (!('IntersectionObserver' in window)) return;
    var nio = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (!e.isIntersecting) return;
        var k = secs.indexOf(e.target);
        links.forEach(function (a, j) { a.classList.toggle('is-on', j === k); });
        var on = links[k]; if (on && on.parentNode.parentNode.scrollTo) on.parentNode.parentNode.scrollTo({ left: on.offsetLeft - 20, behavior: 'smooth' });
      });
    }, { rootMargin: '-40% 0px -55% 0px' });
    secs.forEach(function (s) { if (s) nio.observe(s); });
  });

  /* ---------- typed terminal lines ---------- */
  $$('[data-mx-type]').forEach(function (box) {
    var lines;
    try { lines = JSON.parse(box.getAttribute('data-mx-type')); } catch (e) { return; }
    var out = $('.mx-term__body', box);
    function esc(s) { return s.replace(/[&<>]/g, function (c) { return { '&': '&amp;', '<': '&lt;', '>': '&gt;' }[c]; }); }
    function render(done, cur) {
      var html = done.map(function (l) { return l.html; }).join('<br>');
      if (cur !== null) html += (html ? '<br>' : '') + cur + '<span class="c"></span>';
      out.innerHTML = html;
    }
    if (reduce) { render(lines.map(function (l) { return { html: (l.p ? '<span class="p">$</span> ' : '') + esc(l.t) }; }), ''); return; }
    var started = false;
    function play() {
      if (started) return; started = true;
      var done = [], li = 0, ci = 0;
      (function tick() {
        if (li >= lines.length) { render(done, ''); return; }
        var l = lines[li], pre = l.p ? '<span class="p">$</span> ' : '';
        if (!l.p) { done.push({ html: esc(l.t) }); li++; render(done, null); return setTimeout(tick, 260); }
        ci++;
        render(done, pre + esc(l.t.slice(0, ci)));
        if (ci >= l.t.length) { done.push({ html: pre + esc(l.t) }); li++; ci = 0; return setTimeout(tick, 420); }
        setTimeout(tick, 34 + Math.random() * 40);
      })();
    }
    if ('IntersectionObserver' in window) {
      var tio = new IntersectionObserver(function (en) { if (en[0].isIntersecting) { setTimeout(play, curtainShown ? 1500 : 700); tio.disconnect(); } });
      tio.observe(box);
    } else play();
  });
})();
