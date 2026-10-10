/* ==========================================================================
   Maya Devi University — 3D homepage, PHOTO-RICH EDITION (new-home-2.php)
   Small add-on to home3d.js: hero photo slideshow, photo parallax, CTA depth.
   ========================================================================== */
(function () {
  'use strict';

  var d = document, w = window;
  var reduce = w.matchMedia && w.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var canHover = w.matchMedia && w.matchMedia('(hover: hover) and (pointer: fine)').matches;
  var $$ = function (s, c) { return Array.prototype.slice.call((c || d).querySelectorAll(s)); };

  /* ------------------------------------------------------------------
     1. Hero slideshow — first slide is inline; the rest load after page load
     ------------------------------------------------------------------ */
  var slides = $$('.h3d-hero__slides i');
  if (slides.length > 1) {
    var loadRest = function () {
      slides.forEach(function (s) {
        var src = s.getAttribute('data-bg');
        if (!src) { return; }
        var im = new Image();
        im.onload = function () { s.style.backgroundImage = "url('" + src + "')"; s.removeAttribute('data-bg'); };
        im.src = src;
      });
    };
    if (d.readyState === 'complete') { setTimeout(loadRest, 300); }
    else { w.addEventListener('load', function () { setTimeout(loadRest, 300); }); }

    if (!reduce) {
      var cur = 0;
      setInterval(function () {
        if (d.hidden) { return; }
        var next = (cur + 1) % slides.length;
        if (slides[next].hasAttribute('data-bg')) { return; }   // not loaded yet
        slides[cur].classList.remove('is-on');
        slides[next].classList.add('is-on');
        cur = next;
      }, 6500);
    }
  }

  /* ------------------------------------------------------------------
     2. Photo parallax — backgrounds drift slower than the page
     ------------------------------------------------------------------ */
  var layers = $$('[data-parallax]');
  if (layers.length && !reduce) {
    var vh = w.innerHeight, ticking = false;
    var update = function () {
      ticking = false;
      layers.forEach(function (el) {
        var r = el.parentNode.getBoundingClientRect();
        if (r.bottom < -240 || r.top > vh + 240) { return; }
        var p = (r.top + r.height / 2 - vh / 2) / vh;
        el.style.transform = 'translate3d(0,' + (p * -90).toFixed(1) + 'px,0) scale(1.06)';
      });
    };
    var request = function () { if (!ticking) { ticking = true; requestAnimationFrame(update); } };
    w.addEventListener('scroll', request, { passive: true });
    w.addEventListener('resize', function () { vh = w.innerHeight; request(); });
    update();
  }

  /* ------------------------------------------------------------------
     3. CTA cut-outs lean toward the pointer
     ------------------------------------------------------------------ */
  var cta = d.querySelector('.h3d-cta');
  var cuts = $$('.h3dv-cut');
  if (cta && cuts.length && canHover && !reduce) {
    cta.addEventListener('pointermove', function (e) {
      var r = cta.getBoundingClientRect();
      var nx = ((e.clientX - r.left) / r.width - 0.5) * 2;
      cuts.forEach(function (c) { c.style.setProperty('--cx', (nx * (parseFloat(c.getAttribute('data-depth')) || 20)).toFixed(1) + 'px'); });
    }, { passive: true });
    cta.addEventListener('pointerleave', function () { cuts.forEach(function (c) { c.style.setProperty('--cx', '0px'); }); });
  }
})();
