<!-- ============================
  PLACEMENT — Alternate Design (Mosaic + Circles + Timeline)
  Paste this block into your page (HTML + CSS + JS).
============================ -->

<section id="placement-alt" aria-label="Placement Overview" style="padding:48px 16px;">
<h2 id="mdu-timeline-title" class="mdu-tl-title text-center text-white">
           <span>Placement</span> Overview
        </h2>
  <div class="placement-alt-wrap">

    <!-- Left mosaic -->
   <!-- Left mosaic — CLEAN FULL IMAGE SLIDER (No grid) -->
<div class="pa-mosaic" aria-hidden="true">

    <div class="mosaic-slider">
        <div class="mosaic-slide active" style="background-image:url('assets/uploads/icon/place-3.webp')"></div>
        <div class="mosaic-slide" style="background-image:url('assets/uploads/icon/place-4.webp')"></div>
        <div class="mosaic-slide" style="background-image:url('assets/uploads/icon/place-5.webp')"></div>
    </div>

    <div class="mosaic-overlay">
        <div class="mosaic-badge">PLACEMENTS</div>
    </div>

</div>

<script>
  /* ========== AUTO-SLIDE FOR MOSAIC ========== */
(function(){
  let slides = document.querySelectorAll(".mosaic-slide");
  let index = 0;

  slides.forEach((s, i) => {
    s.style.opacity = i === 0 ? "1" : "0";
    s.style.position = "absolute";
    s.style.transition = "opacity 1s ease-in-out";
  });

  setInterval(() => {
    slides[index].style.opacity = "0";
    index = (index + 1) % slides.length;
    slides[index].style.opacity = "1";
  }, 3000);
})();

  </script>

    <!-- Center stats -->
    <div class="pa-center">
      <div class="pa-kicker">Placements</div>
      <h2 class="pa-title">Employers trust our <span>talent</span></h2>
      <p class="pa-desc">Industry-focused training + dedicated placement cell = high-impact offers. A snapshot of recent outcomes.</p>

      <div class="pa-circles" role="list" aria-label="Placement stats">
        <div class="circle" role="listitem">
          <div class="circle-num" data-target="800">0</div>
          <div class="circle-label">Offers</div>
        </div>

        <div class="circle accent" role="listitem">
          <div class="circle-num" data-target="48" data-decimals="2">0</div>
          <div class="circle-label">Highest LPA</div>
        </div>

        <div class="circle" role="listitem">
          <div class="circle-num" data-target="5.48">0</div>
          <div class="circle-label">Avg Package</div>
        </div>
      </div>

      <div class="pa-cta-row">
        <a class="btn btn-primary" href="https://admissions.maya.edu.in/" target="_blank" rel="noopener">Apply Now</a>
      </div>
    </div>

    <!-- Right timeline -->
    <aside class="pa-timeline" aria-labelledby="pa-timeline-h">
      <h3 id="pa-timeline-h">Recent Recruiters</h3>

      <ul class="timeline-list" role="list">
        <li><strong>DeltaX</strong><span>• Internship + Placement • 80 hires</span></li>
        <li><strong>Cloud Analogy</strong><span>• Technical Roles • 50 hires</span></li>
        <li><strong>Coding Ninjas</strong><span>• Graduate Roles • 130 hires</span></li>
        <li><strong>Jubilant Foodworks</strong><span>• Consulting • 40 hires</span></li>
      </ul>

     
    </aside>

  </div>

  <!-- Partners strip -->
  <div class="placement-partners swiper">
  <div class="swiper-wrapper">

    <div class="swiper-slide"><img src="assets/uploads/icon/1.jpg" alt="Pfizer"></div>
    <div class="swiper-slide"><img src="assets/uploads/icon/2.jpg" alt="Glenmark"></div>
    <div class="swiper-slide"><img src="assets/uploads/icon/3.jpg" alt="Cisco"></div>
    <div class="swiper-slide"><img src="assets/uploads/icon/4.jpg" alt="IBM"></div>
    <div class="swiper-slide"><img src="assets/uploads/icon/5.png" alt="Amazon"></div>
    <div class="swiper-slide"><img src="assets/uploads/icon/6.png" alt="Tata"></div>
    <div class="swiper-slide"><img src="assets/uploads/icon/7.jpg" alt="Accenture"></div>
    <div class="swiper-slide"><img src="assets/uploads/icon/8.jpg"></div>
    <div class="swiper-slide"><img src="assets/uploads/icon/9.jpg"></div>
    <div class="swiper-slide"><img src="assets/uploads/icon/10.jpg"></div>
    <div class="swiper-slide"><img src="assets/uploads/icon/11.jpg"></div>
    <div class="swiper-slide"><img src="assets/uploads/icon/12.jpg"></div>
    <div class="swiper-slide"><img src="assets/uploads/icon/13.jpg"></div>
<div class="swiper-slide"><img src="assets/uploads/icon/14.jpg"></div>
<div class="swiper-slide"><img src="assets/uploads/icon/15.jpg"></div>
<div class="swiper-slide"><img src="assets/uploads/icon/16.jpg"></div>
<div class="swiper-slide"><img src="assets/uploads/icon/17.jpg"></div>
<div class="swiper-slide"><img src="assets/uploads/icon/18.jpg"></div>
<div class="swiper-slide"><img src="assets/uploads/icon/19.jpg"></div>
<div class="swiper-slide"><img src="assets/uploads/icon/20.jpg"></div>
<div class="swiper-slide"><img src="assets/uploads/icon/21.jpg"></div>
<div class="swiper-slide"><img src="assets/uploads/icon/22.jpg"></div>
<div class="swiper-slide"><img src="assets/uploads/icon/23.jpg"></div>
<div class="swiper-slide"><img src="assets/uploads/icon/24.jpg"></div>
<div class="swiper-slide"><img src="assets/uploads/icon/25.jpg"></div>
<div class="swiper-slide"><img src="assets/uploads/icon/26.jpg"></div>
<div class="swiper-slide"><img src="assets/uploads/icon/27.jpg"></div>
<div class="swiper-slide"><img src="assets/uploads/icon/28.jpg"></div>
  </div>
</div>

</section>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  new Swiper('.placement-partners', {
    loop: true,
    slidesPerView: 'auto',   // 👈 required for logo line
    spaceBetween: 24,
    speed: 3000,
    autoplay: {
      delay: 0,
      disableOnInteraction: false
    },
    allowTouchMove: false
  });
});
</script>


<!-- Scoped CSS: drop into your stylesheet -->
<style>
  /* ===== PARTNERS SLIDER FIX ===== */
.placement-partners {
  margin-top: 18px;
  padding-top: 12px;
  border-top: 1px dashed rgba(255,255,255,0.04);
  overflow: hidden;
}

.placement-partners .swiper-slide {
  display: flex;
  align-items: center;
  justify-content: center;
   width: auto !important;   /* 👈 KEY FIX */
}

.placement-partners img {
  height: 52px;
  object-fit: contain;
  background: #fff;
  padding: 6px;
  border-radius: 8px;
  box-shadow: 0 8px 30px rgba(0,0,0,0.25);
}

  /* theme */
  #placement-alt { --g1: #0A1121; --g2: #03516B; --green: #00a651; font-family: system-ui, -apple-system, "Segoe UI", Roboto, Arial; }
  .placement-alt-wrap { max-width:1200px; margin:0 auto; display:grid; grid-template-columns: 1fr 460px 320px; gap:24px; align-items:start; }

  /* background */
  #placement-alt { background: linear-gradient(45deg,var(--g1),var(--g2)); color:#fff; border-radius:14px; padding:36px; box-sizing:border-box; }

  /* Left mosaic */
/* ===== CLEAN FULL IMAGE MOSAIC SLIDER (NO GRID) ===== */

.pa-mosaic {
    position: relative;
    height: 520px !important;
    border-radius: 14px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* slider area */
.mosaic-slider {
    position: absolute;
    inset: 0;
    width: 90%;
    height: 90%;
}

/* slides */
.mosaic-slide {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    background-size: contain !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
    opacity: 0;
    transition: opacity 1s ease-in-out;
}

.mosaic-slide.active {
    opacity: 1;
}

/* badge */
.mosaic-overlay {
    position: absolute;
    inset: 0;
    display:flex;
    align-items:flex-start;
    justify-content:flex-start;
    pointer-events:none;
    padding:18px;
}

.mosaic-badge {
    background:rgba(0,0,0,0.35);
    backdrop-filter:blur(6px);
    padding:8px 12px;
    border-radius:10px;
    font-weight:900;
    color:#fff;
}

/* ===== MOBILE FIX ===== */
@media (max-width: 700px) {
    .pa-mosaic {
        height: 340px !important;
    }
    .mosaic-slide {
        background-size: cover !important;
        background-position: center !important;
    }
    .mosaic-badge {
        font-size: 12px;
        padding: 6px 10px;
        margin: 10px;
    }
}

/* Enlarged grid layout */
.mosaic-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-template-rows: repeat(4, 1fr);  /* more rows for extra vertical height */
  gap: 14px;
  width: 100%;
  height: 100%;
  padding: 14px;
  box-sizing: border-box;
}

/* Each image cell directly scales with height */
.mcell {
  background-size: contain;
  background-position: center;
  border-radius: 14px;
  height: 580px;
  box-shadow: 0 20px 55px rgba(0,0,0,0.45);
  transition: transform .45s ease, box-shadow .45s ease;
}

/* Adjusted cell spans for better tall/hero structure */
.mcell.big   { grid-column: 1 / span 2; grid-row: 1 / span 2; }
.mcell.tall  { grid-row: 3 / span 2; }
.mcell.wide  { grid-column: 1 / span 2; height: 160px; }
.mcell.small { height: 160px; }

/* Hover effect amplified */
.mcell:hover {
  transform: translateY(-8px) scale(1.03);
  box-shadow: 0 30px 80px rgba(0,0,0,0.6);
}

/* Badge stays same */
.mosaic-overlay {
  position: absolute;
  inset: 0;
  display:flex;
  align-items:flex-start;
  justify-content:flex-start;
  pointer-events:none;
  padding:18px;
}

.mosaic-badge {
  background:rgba(0,0,0,0.35);
  backdrop-filter:blur(6px);
  padding:8px 12px;
  border-radius:10px;
  font-weight:900;
  letter-spacing:1px;
  color:#fff;
  border:1px solid rgba(255,255,255,0.08);
}
/* ========== MOBILE OPTIMIZED MOSAIC SLIDER ========== */

/* ========= MOBILE OPTIMIZATION ========= */

  /* center content */
  .pa-center { padding:8px 12px; }
  .pa-kicker { font-weight:800; color:rgba(255,255,255,0.9); margin-bottom:6px; letter-spacing:0.6px; }
  .pa-title { font-size:26px; margin:0 0 8px; font-weight:900; line-height:1.05; color:#fff; }
  .pa-title span { color: var(--green); }
  .pa-desc { color: rgba(255,255,255,0.88); font-weight:600; margin-bottom:16px; max-width:420px; }

  .pa-cta-row { display:flex; gap:12px; margin-bottom:18px; flex-wrap:wrap; }
  .btn { padding:10px 16px; border-radius:999px; text-decoration:none; font-weight:900; display:inline-block; }
  .btn-primary { background: linear-gradient(90deg,var(--green),#028a47); color:#fff; border:0; }
  .btn-light { background: rgba(255,255,255,0.06); color:#fff; border:1px solid rgba(255,255,255,0.12); }

  /* circles */
  .pa-circles { display:flex; gap:14px; margin-bottom:16px; align-items:center; }
  .circle { width:116px; height:116px; border-radius:999px; background: rgba(255,255,255,0.06); display:flex; flex-direction:column; align-items:center; justify-content:center; box-shadow: inset 0 -6px 16px rgba(0,0,0,0.25); transition: transform .3s ease; }
  .circle:hover { transform: translateY(-6px); }
  .circle.accent { background: linear-gradient(90deg, rgba(255,255,255,0.06), rgba(255,255,255,0.02)); border: 1px solid rgba(255,255,255,0.12); }
  .circle-num { font-size:22px; font-weight:900; color:#fff; }
  .circle-label { font-size:12px; color:rgba(255,255,255,0.92); font-weight:800; margin-top:6px; }

  /* right timeline */
  .pa-timeline { background: rgba(255,255,255,0.04); padding:16px; border-radius:12px; min-height:420px; box-shadow: 0 10px 30px rgba(0,0,0,0.3); }
  .pa-timeline h3 { margin:0 0 12px; color: #fff; font-size:18px; }
  .timeline-list { list-style:none; padding:0; margin:0; display:grid; gap:12px; }
  .timeline-list li { display:flex; flex-direction:column; gap:6px; padding:10px; border-radius:8px; background: rgba(0,0,0,0.06); font-weight:800; color:#fff; }
  .timeline-list li span { font-weight:700; color: rgba(255,255,255,0.85); font-size:13px; opacity:0.95; }

  .timeline-footer { display:flex; gap:12px; margin-top:18px; align-items:center; justify-content:flex-start; }
  .mini-stat { background: rgba(255,255,255,0.03); padding:10px 12px; border-radius:8px; text-align:center; }
  .mini-stat strong { display:block; font-size:16px; font-weight:900; color:#fff; }
  .mini-stat small { display:block; color:rgba(255,255,255,0.9); font-weight:700; }

  /* partners */
  .placement-partners { margin-top:18px; padding-top:12px; border-top: 1px dashed rgba(255,255,255,0.04); }
  .partners-inner { display:flex; gap:14px; align-items:center; justify-content:flex-start; overflow:hidden; padding:8px 0; }
  .partners-inner img { height:52px; object-fit:contain; background:#fff; padding:6px; border-radius:8px; box-shadow: 0 8px 30px rgba(0,0,0,0.25); }

  /* responsive */
  @media (max-width: 1100px) {
    .placement-alt-wrap { grid-template-columns: 1fr 1fr; grid-auto-rows: auto; gap:16px; }
    .pa-mosaic { height:320px; order:1; }
    .pa-center { order:2; }
    .pa-timeline { order:3; min-height: auto; }
  }
  @media (max-width:700px) {
    .placement-alt-wrap { grid-template-columns:1fr; }
    .pa-mosaic { height:300px; }
    .mcell.big { grid-column: auto; grid-row:auto; }
    .mosaic-grid { gap:8px; padding:8px; }
    .pa-circles { justify-content:flex-start; gap:10px; flex-wrap:wrap; }
    .circle { width:96px; height:96px; }
    .partners-inner img { height:44px; }
    .pa-title { font-size:20px; }
  }

  /* prevent overflow */
  #placement-alt, #placement-alt * { box-sizing: border-box; max-width: 100%; }
</style>

<!-- Scoped JS: counters & small parallax on mosaic -->
<script>
(function(){
  // counters
  const counters = document.querySelectorAll('#placement-alt .circle-num');
  const io = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;
        const target = parseFloat(el.dataset.target || '0');
        const decimals = parseInt(el.dataset.decimals || '0', 10);
        const duration = 1400;
        const start = performance.now();
        function step(now) {
          const t = Math.min((now - start) / duration, 1);
          // easeOutCubic
          const eased = 1 - Math.pow(1 - t, 3);
          const val = eased * target;
          el.textContent = decimals > 0 ? val.toFixed(decimals) : Math.floor(val);
          if (t < 1) requestAnimationFrame(step);
        }
        requestAnimationFrame(step);
        io.unobserve(el);
      }
    });
  }, { threshold: 0.45 });

  counters.forEach(c => io.observe(c));

  // small mosaic subtle parallax on mousemove
  const mosaic = document.querySelector('.pa-mosaic');
  if (mosaic) {
    mosaic.addEventListener('mousemove', (e) => {
      const rect = mosaic.getBoundingClientRect();
      const cx = rect.left + rect.width/2;
      const cy = rect.top + rect.height/2;
      const dx = (e.clientX - cx) / rect.width;
      const dy = (e.clientY - cy) / rect.height;
      const cells = mosaic.querySelectorAll('.mcell');
      cells.forEach((c, i) => {
        const r = (i % 2 === 0) ? 8 : 5;
        c.style.transform = `translate3d(${dx * r}px, ${dy * r}px, 0)`;
      });
    });
    mosaic.addEventListener('mouseleave', () => {
      mosaic.querySelectorAll('.mcell').forEach(c => c.style.transform = '');
    });
  }
})();
</script>
