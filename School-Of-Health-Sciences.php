<?php
$page_title = "School of Health Sciences | Maya Devi University Dehradun";
$page_description = "School of Health Sciences at Maya Devi University, Dehradun offering nursing and paramedical programs.";
$canonical_url = "https://maya.edu.in/school-of-health-sciences.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
$page_schema = <<<SCHEMA
<script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "ItemList",
 "name": "School of Health Sciences — Maya Devi University, Dehradun",
 "url": "https://maya.edu.in/school-of-health-sciences.php",
 "itemListElement": [
  {
   "@type": "ListItem",
   "position": 1,
   "item": {
    "@type": "Course",
    "name": "Master of Public Health (MPH)",
    "url": "https://maya.edu.in/post-graduate.php",
    "description": "Master of Public Health (MPH) offered by Maya Devi University, Selaqui, Dehradun, Uttarakhand. UGC-recognised private university with IBM partnership and strong placement record.",
    "provider": {
     "@type": "CollegeOrUniversity",
     "name": "Maya Devi University",
     "url": "https://maya.edu.in/"
    },
    "educationalLevel": "Master",
    "hasCourseInstance": {
     "@type": "CourseInstance",
     "courseMode": "Onsite",
     "location": {
      "@type": "Place",
      "name": "Maya Devi University, Selaqui, Dehradun, Uttarakhand"
     }
    }
   }
  },
  {
   "@type": "ListItem",
   "position": 2,
   "item": {
    "@type": "Course",
    "name": "Master of Hospital Administration (MHA)",
    "url": "https://maya.edu.in/post-graduate.php",
    "description": "Master of Hospital Administration (MHA) offered by Maya Devi University, Selaqui, Dehradun, Uttarakhand. UGC-recognised private university with IBM partnership and strong placement record.",
    "provider": {
     "@type": "CollegeOrUniversity",
     "name": "Maya Devi University",
     "url": "https://maya.edu.in/"
    },
    "educationalLevel": "Master",
    "hasCourseInstance": {
     "@type": "CourseInstance",
     "courseMode": "Onsite",
     "location": {
      "@type": "Place",
      "name": "Maya Devi University, Selaqui, Dehradun, Uttarakhand"
     }
    }
   }
  }
 ]
}
</script>
<script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "FAQPage",
 "mainEntity": [
  {
   "@type": "Question",
   "name": "What is the MPH program at Maya Devi University?",
   "acceptedAnswer": {
    "@type": "Answer",
    "text": "The Master of Public Health (MPH) is a 2-year postgraduate program at Maya Devi University focused on epidemiology, health policy, biostatistics, and community health management. It prepares graduates for careers in public health agencies, NGOs, and hospitals."
   }
  }
 ]
}
</script>
SCHEMA;
?>
<?php require "common/header.php" ?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&display=swap" rel="stylesheet">

<style>
/* ============================================================
   ROOT VARIABLES
============================================================ */
:root {
  --forest:    #0d6b52;
  --forest-dk: #094d3b;
  --navy:      #11234f;
  --navy-mid:  #1a3568;
  --teal:      #00a3a3;
  --gold:      #d8a52d;
  --off-white: #f4fbf8;
  --muted:     #5a7a70;
  --card-bg:   rgba(13,107,82,0.05);
  --border:    rgba(13,107,82,0.15);
}
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; }
.shs-page { font-family: 'DM Sans', sans-serif; color: var(--navy); overflow-x: hidden; }

.shs-section  { position: relative; padding: 90px 0; }
.shs-container{ max-width: 1200px; margin: 0 auto; padding: 0 40px; }
@media(max-width:768px){ .shs-container{ padding: 0 20px; } .shs-section{ padding: 60px 0; } }

.shs-label {
  display: inline-flex; align-items: center; gap: 10px;
  font-size: 11px; font-weight: 700; letter-spacing: 3px;
  text-transform: uppercase; color: var(--forest); margin-bottom: 14px;
}
.shs-label::before { content:''; width:24px; height:2px; background:var(--forest); display:block; }

.shs-heading {
  font-family: 'Syne', sans-serif;
  font-size: clamp(2rem,4vw,2.8rem); font-weight: 800;
  line-height: 1.1; letter-spacing: -0.5px; color: var(--navy); margin-bottom: 16px;
}
.shs-heading em   { font-style:normal; color:var(--forest); }
.shs-heading span { font-style:normal; color:var(--teal);   }

.shs-divider { height:1px; background:linear-gradient(90deg,transparent,var(--border),transparent); }

/* ── Scroll reveal ── */
.shs-reveal { opacity:0; transform:translateY(40px); transition:opacity .7s cubic-bezier(.22,1,.36,1),transform .7s cubic-bezier(.22,1,.36,1); }
.shs-reveal.rl  { transform:translateX(-40px); }
.shs-reveal.rr  { transform:translateX(40px);  }
.shs-reveal.vis { opacity:1; transform:none;   }
.d1{transition-delay:.1s}.d2{transition-delay:.2s}.d3{transition-delay:.3s}
.d4{transition-delay:.4s}.d5{transition-delay:.5s}.d6{transition-delay:.6s}

/* ============================================================
   HERO
============================================================ */
.shs-hero {
  min-height: 90vh;
  display: flex; align-items: center; justify-content: center;
  background: url('assets/uploads/shs.jpg') center/cover no-repeat;
  position: relative; overflow: hidden;
}
.shs-hero::before {
  content:''; position:absolute; inset:0;
  background: linear-gradient(135deg,rgba(13,107,82,.88) 0%,rgba(17,35,79,.82) 55%,rgba(9,77,59,.70) 100%);
}
.shs-hero::after {
  content:''; position:absolute; inset:0; z-index:1;
  background-image:
    linear-gradient(rgba(255,255,255,.04) 1px,transparent 1px),
    linear-gradient(90deg,rgba(255,255,255,.04) 1px,transparent 1px);
  background-size:70px 70px;
  animation:meshMove 20s linear infinite;
}
@keyframes meshMove { 0%{background-position:0 0} 100%{background-position:70px 70px} }

.shs-hero-orb { position:absolute; border-radius:50%; filter:blur(80px); pointer-events:none; animation:orbFloat 8s ease-in-out infinite alternate; }
.orb1{ width:500px;height:500px;background:rgba(0,163,163,.15);top:-100px;right:-80px;animation-delay:0s; }
.orb2{ width:300px;height:300px;background:rgba(216,165,45,.12);bottom:60px;left:80px;animation-delay:3s; }
@keyframes orbFloat{ from{transform:translateY(0) scale(1)} to{transform:translateY(-24px) scale(1.05)} }

.shs-hero-content { position:relative;z-index:2;text-align:center;max-width:820px;padding:0 20px; }

.shs-hero-badge {
  display:inline-flex;align-items:center;gap:10px;
  background:rgba(255,255,255,.10);border:1px solid rgba(255,255,255,.25);
  border-radius:100px;padding:8px 22px;font-size:13px;font-weight:500;
  color:rgba(255,255,255,.9);margin-bottom:28px;backdrop-filter:blur(10px);
  animation:fadeUp .8s ease both;
}
.shs-hero-badge span{ width:7px;height:7px;border-radius:50%;background:#5ecfb1;animation:pulseDot 2s infinite; }
@keyframes pulseDot{ 0%,100%{transform:scale(1);opacity:1} 50%{transform:scale(1.5);opacity:.5} }

.shs-hero-content h1 {
  font-family:'Syne',sans-serif;font-size:clamp(2.4rem,7vw,4.2rem);font-weight:800;
  line-height:1.08;letter-spacing:-.02em;color:#fff;margin-bottom:22px;
  animation:fadeUp .8s .15s ease both;
}
.shs-hero-content h1 em{ font-style:normal;color:#5ecfb1; }
.shs-hero-content p {
  font-size:1.12rem;line-height:1.75;color:rgba(255,255,255,.75);
  max-width:600px;margin:0 auto 36px;animation:fadeUp .8s .3s ease both;
}
.shs-hero-btns{ display:flex;gap:16px;justify-content:center;flex-wrap:wrap;animation:fadeUp .8s .45s ease both; }

.shs-btn-primary {
  padding:14px 34px;background:linear-gradient(135deg,var(--forest),var(--forest-dk));
  color:#fff;font-family:'Syne',sans-serif;font-weight:700;border:none;border-radius:8px;
  cursor:pointer;font-size:.95rem;text-decoration:none;display:inline-flex;align-items:center;gap:8px;
  box-shadow:0 8px 28px rgba(13,107,82,.45);transition:all .3s ease;
}
.shs-btn-primary:hover{ transform:translateY(-3px);box-shadow:0 16px 40px rgba(13,107,82,.6);color:#fff; }

.shs-btn-outline {
  padding:14px 34px;background:rgba(255,255,255,.08);backdrop-filter:blur(10px);
  color:#fff;border:1px solid rgba(255,255,255,.3);border-radius:8px;cursor:pointer;
  font-family:'Syne',sans-serif;font-weight:700;font-size:.95rem;
  text-decoration:none;display:inline-flex;align-items:center;gap:8px;transition:all .3s ease;
}
.shs-btn-outline:hover{ background:rgba(255,255,255,.18);transform:translateY(-3px);color:#fff; }

.shs-scroll-hint {
  position:absolute;bottom:32px;left:50%;transform:translateX(-50%);z-index:3;
  display:flex;flex-direction:column;align-items:center;gap:8px;
  color:rgba(255,255,255,.45);font-size:11px;letter-spacing:2px;text-transform:uppercase;
  animation:fadeUp 1s 1s ease both;
}
.shs-scroll-hint span{ width:1px;height:40px;background:linear-gradient(to bottom,rgba(255,255,255,.5),transparent);animation:scrollPulse 2s ease-in-out infinite; }
@keyframes scrollPulse{ 0%,100%{opacity:1;transform:scaleY(1)} 50%{opacity:.3;transform:scaleY(.6)} }
@keyframes fadeUp{ from{opacity:0;transform:translateY(28px)} to{opacity:1;transform:none} }

/* ============================================================
   ABOUT
============================================================ */
.shs-about{ background:var(--off-white); }
.shs-about-grid{ display:grid;grid-template-columns:1fr 1fr;gap:72px;align-items:center; }
@media(max-width:1024px){ .shs-about-grid{ grid-template-columns:1fr;gap:48px; } }

.shs-about-text p{ color:var(--muted);line-height:1.85;font-size:1rem;margin-bottom:18px; }

.shs-download-btn {
  display:inline-flex;align-items:center;gap:10px;padding:13px 28px;
  border:1.5px solid var(--forest);border-radius:8px;color:var(--forest);
  font-family:'Syne',sans-serif;font-weight:700;font-size:.9rem;
  text-decoration:none;margin-top:8px;transition:all .3s ease;
}
.shs-download-btn:hover{ background:var(--forest);color:#fff;transform:translateY(-2px); }

.shs-about-visual{ position:relative; }
.shs-about-img-wrap{ border-radius:20px;overflow:hidden;box-shadow:0 30px 70px rgba(17,35,79,.2);position:relative; }
.shs-about-img-wrap img{ width:100%;height:420px;object-fit:cover;display:block;transition:transform .6s ease; }
.shs-about-img-wrap:hover img{ transform:scale(1.04); }
.shs-about-img-wrap::after{ content:'';position:absolute;inset:0;background:linear-gradient(to bottom,transparent 55%,rgba(9,77,59,.7)); }

.shs-float-badge {
  position:absolute;bottom:24px;left:24px;z-index:2;
  background:linear-gradient(135deg,var(--forest),var(--forest-dk));
  border-radius:14px;padding:18px 22px;color:#fff;
  box-shadow:0 10px 30px rgba(13,107,82,.4);
}
.shs-float-badge strong{ display:block;font-family:'Syne',sans-serif;font-size:2rem;font-weight:800; }
.shs-float-badge span  { font-size:.8rem;opacity:.8; }

.shs-corner-tag {
  position:absolute;top:-16px;right:-16px;
  background:linear-gradient(135deg,var(--gold),#c8941d);
  color:#1a0f00;font-family:'Syne',sans-serif;font-weight:700;
  font-size:.72rem;letter-spacing:1.5px;padding:10px 18px;border-radius:8px;text-transform:uppercase;
}

/* ============================================================
   STATS
============================================================ */
.shs-stats{ background:linear-gradient(135deg,var(--navy) 0%,#0d1f4a 60%,#081630 100%);padding:0; }
.shs-stats-grid{ display:grid;grid-template-columns:repeat(4,1fr); }
@media(max-width:768px){ .shs-stats-grid{ grid-template-columns:repeat(2,1fr); } }
@media(max-width:480px){ .shs-stats-grid{ grid-template-columns:1fr; } }

.shs-stat {
  padding:60px 32px;text-align:center;border-right:1px solid rgba(255,255,255,.08);
  position:relative;overflow:hidden;transition:background .3s ease;
}
.shs-stat:last-child{ border-right:none; }
.shs-stat::before{ content:'';position:absolute;bottom:0;left:50%;transform:translateX(-50%);width:0;height:3px;background:linear-gradient(90deg,var(--forest),var(--teal));transition:width .5s ease; }
.shs-stat:hover{ background:rgba(13,107,82,.08); }
.shs-stat:hover::before{ width:100%; }
.shs-stat-icon{ font-size:2rem;display:block;margin-bottom:14px; }
.shs-stat-num{ font-family:'Syne',sans-serif;font-size:3.2rem;font-weight:800;line-height:1;background:linear-gradient(135deg,#fff 40%,#5ecfb1);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text; }
.shs-stat-suffix{ color:var(--forest); }
.shs-stat-label{ font-size:.85rem;color:rgba(255,255,255,.45);margin-top:8px;letter-spacing:.3px; }

/* ============================================================
   COURSES
============================================================ */
.shs-courses{ background:var(--off-white); }

.shs-tab-row{ display:flex;gap:4px;background:rgba(17,35,79,.06);border:1px solid var(--border);border-radius:10px;padding:4px;width:fit-content;margin-bottom:48px; }
.shs-tab{ padding:10px 28px;border:none;border-radius:7px;background:transparent;color:var(--muted);font-family:'Syne',sans-serif;font-weight:700;font-size:.88rem;cursor:pointer;transition:all .3s ease; }
.shs-tab.active{ background:var(--forest);color:#fff;box-shadow:0 4px 18px rgba(13,107,82,.35); }
@media(max-width:600px){ .shs-tab-row{flex-direction:column;width:100%;} .shs-tab{text-align:center;} }

.shs-tab-pane{ display:none; }
.shs-tab-pane.active{ display:grid; }
.shs-ug-grid{ grid-template-columns:repeat(4,1fr);gap:22px; }
.shs-pg-grid{ grid-template-columns:repeat(4,1fr);gap:22px; }
@media(max-width:1024px){ .shs-ug-grid,.shs-pg-grid{ grid-template-columns:repeat(2,1fr); } }
@media(max-width:580px) { .shs-ug-grid,.shs-pg-grid{ grid-template-columns:1fr; } }

.shs-course-card{ background:#fff;border:1px solid var(--border);border-radius:18px;overflow:hidden;transition:all .4s cubic-bezier(.22,1,.36,1);position:relative; }
.shs-course-card::after{ content:'';position:absolute;bottom:0;left:0;right:0;height:3px;background:linear-gradient(90deg,var(--forest),var(--teal));transform:scaleX(0);transform-origin:left;transition:transform .4s ease; }
.shs-course-card:hover{ transform:translateY(-8px);box-shadow:0 24px 60px rgba(13,107,82,.18);border-color:rgba(13,107,82,.3); }
.shs-course-card:hover::after{ transform:scaleX(1); }
.shs-course-img{ height:170px;overflow:hidden; }
.shs-course-img img{ width:100%;height:100%;object-fit:cover;transition:transform .5s ease; }
.shs-course-card:hover .shs-course-img img{ transform:scale(1.07); }
.shs-course-body{ padding:22px; }
.shs-course-tag{ font-size:10px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;color:var(--forest);display:block;margin-bottom:8px; }
.shs-course-body h4{ font-family:'Syne',sans-serif;font-size:.98rem;font-weight:700;margin-bottom:8px;line-height:1.3;color:var(--navy); }
.shs-course-body p { font-size:.82rem;color:var(--muted);line-height:1.65;margin-bottom:14px; }
.shs-course-meta{ display:flex;justify-content:space-between;font-size:.76rem;color:var(--muted);padding:10px 0;border-top:1px solid var(--border);margin-bottom:14px; }
.shs-course-cta{ display:block;width:100%;padding:10px;background:linear-gradient(135deg,var(--forest),var(--forest-dk));color:#fff;border:none;border-radius:7px;cursor:pointer;font-family:'Syne',sans-serif;font-weight:700;font-size:.85rem;text-align:center;text-decoration:none;transition:all .3s ease;box-shadow:0 4px 16px rgba(13,107,82,.3); }
.shs-course-cta:hover{ box-shadow:0 8px 28px rgba(13,107,82,.5);color:#fff; }

/* ============================================================
   IBM SECTION
============================================================ */
.shs-ibm{ background:linear-gradient(135deg,var(--navy) 0%,#0d1f4a 55%,#061228 100%);overflow:hidden;position:relative; }
.shs-ibm-orb-a{ position:absolute;top:-200px;right:-200px;width:600px;height:600px;background:radial-gradient(circle,rgba(13,107,82,.18) 0%,transparent 70%);border-radius:50%;pointer-events:none;animation:orbFloat 10s ease-in-out infinite alternate; }
.shs-ibm-orb-b{ position:absolute;bottom:-150px;left:-100px;width:400px;height:400px;background:radial-gradient(circle,rgba(0,163,163,.1) 0%,transparent 70%);border-radius:50%;pointer-events:none;animation:orbFloat 12s ease-in-out infinite alternate-reverse; }

.shs-ibm-grid{ display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center;position:relative;z-index:2; }
@media(max-width:1024px){ .shs-ibm-grid{ grid-template-columns:1fr;gap:48px; } }

.shs-ibm-badge-row{ display:flex;align-items:center;gap:14px;margin-bottom:24px; }
.shs-ibm-logo{ background:#fff;padding:8px 18px;border-radius:8px;font-family:'Syne',sans-serif;font-size:1.5rem;font-weight:800;color:#0f62fe;letter-spacing:-.5px; }
.shs-ibm-x  { font-size:1.2rem;color:rgba(255,255,255,.3); }
.shs-mdu-txt{ font-family:'Syne',sans-serif;font-weight:700;font-size:.95rem;color:#fff; }

.shs-ibm-heading{ font-family:'Syne',sans-serif;font-size:clamp(1.8rem,3.5vw,2.6rem);font-weight:800;color:#fff;line-height:1.1;letter-spacing:-1px;margin-bottom:18px; }
.shs-ibm-heading em{ font-style:normal;color:#5ecfb1; }
.shs-ibm-desc{ color:rgba(255,255,255,.6);line-height:1.8;margin-bottom:28px;font-size:.98rem; }

.shs-chips{ display:flex;flex-wrap:wrap;gap:10px;margin-bottom:32px; }
.shs-chip{ padding:8px 16px;background:rgba(13,107,82,.2);border:1px solid rgba(13,107,82,.4);border-radius:100px;font-size:12px;font-weight:600;color:#5ecfb1;transition:all .3s ease;cursor:default; }
.shs-chip:hover{ background:rgba(13,107,82,.4);border-color:var(--forest);transform:translateY(-2px); }

.shs-ibm-note{ background:rgba(13,107,82,.1);border:1px solid rgba(13,107,82,.25);border-radius:14px;padding:20px 24px;margin-bottom:28px;font-size:.88rem;color:rgba(255,255,255,.6);line-height:1.75; }
.shs-ibm-note strong{ color:#fff;display:block;margin-bottom:6px;font-family:'Syne',sans-serif;font-size:.95rem; }

.shs-ibm-cta{ display:inline-flex;align-items:center;gap:10px;padding:14px 32px;background:linear-gradient(135deg,var(--forest),var(--forest-dk));color:#fff;font-family:'Syne',sans-serif;font-weight:700;border:none;border-radius:8px;cursor:pointer;font-size:.95rem;text-decoration:none;box-shadow:0 8px 28px rgba(13,107,82,.4);transition:all .3s ease; }
.shs-ibm-cta:hover{ transform:translateY(-3px);box-shadow:0 16px 40px rgba(13,107,82,.6);color:#fff; }

.shs-ibm-boxes{ display:grid;grid-template-columns:1fr 1fr;gap:16px; }
@media(max-width:580px){ .shs-ibm-boxes{ grid-template-columns:1fr; } }

.shs-ibm-box{ background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.1);border-radius:16px;padding:26px;transition:all .4s ease;position:relative;overflow:hidden; }
.shs-ibm-box::before{ content:'';position:absolute;top:0;left:0;width:3px;height:0;background:linear-gradient(to bottom,var(--forest),var(--teal));transition:height .5s ease; }
.shs-ibm-box:hover{ background:rgba(13,107,82,.15);transform:translateX(6px);border-color:rgba(13,107,82,.4); }
.shs-ibm-box:hover::before{ height:100%; }
.shs-ibm-box-icon{ font-size:1.7rem;margin-bottom:12px;display:block; }
.shs-ibm-box h5{ font-family:'Syne',sans-serif;font-size:.95rem;font-weight:700;margin-bottom:8px;color:#fff; }
.shs-ibm-box p { font-size:.82rem;color:rgba(255,255,255,.55);line-height:1.65; }

/* ============================================================
   CLUBS & CAREERS
============================================================ */
.shs-clubs  { background:var(--off-white); }
.shs-careers{ background:#fff; }

.shs-cards-grid{ display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin-top:8px; }
@media(max-width:1024px){ .shs-cards-grid{ grid-template-columns:repeat(2,1fr); } }
@media(max-width:580px) { .shs-cards-grid{ grid-template-columns:1fr; } }

.shs-mini-card{ background:#fff;border:1px solid var(--border);border-radius:16px;padding:26px;transition:all .4s cubic-bezier(.22,1,.36,1);position:relative;overflow:hidden; }
.shs-clubs .shs-mini-card{ background:var(--off-white); }
.shs-mini-card::after{ content:'';position:absolute;bottom:0;left:0;right:0;height:3px;background:linear-gradient(90deg,var(--forest),var(--teal));transform:scaleX(0);transform-origin:left;transition:transform .4s ease; }
.shs-mini-card:hover{ transform:translateY(-6px);box-shadow:0 20px 50px rgba(13,107,82,.15);border-color:rgba(13,107,82,.3); }
.shs-mini-card:hover::after{ transform:scaleX(1); }
.shs-mini-card-icon{ font-size:2rem;margin-bottom:12px;display:block; }
.shs-mini-card h5{ font-family:'Syne',sans-serif;font-size:.97rem;font-weight:700;margin-bottom:8px;color:var(--navy); }
.shs-mini-card p { font-size:.82rem;color:var(--muted);line-height:1.65; }

/* ============================================================
   WHY CHOOSE US
============================================================ */
.shs-why{ background:linear-gradient(135deg,var(--off-white) 0%,#e8f7f2 100%); }
.shs-why-grid{ display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center; }
@media(max-width:1024px){ .shs-why-grid{ grid-template-columns:1fr;gap:48px; } }

.shs-why-features{ display:grid;grid-template-columns:1fr 1fr;gap:18px;margin-top:32px; }
@media(max-width:580px){ .shs-why-features{ grid-template-columns:1fr; } }

.shs-why-feat{ background:#fff;border:1px solid var(--border);border-radius:14px;padding:22px;transition:all .4s ease;position:relative;overflow:hidden; }
.shs-why-feat::before{ content:'';position:absolute;top:0;left:0;width:3px;height:0;background:linear-gradient(to bottom,var(--forest),var(--teal));transition:height .5s ease; }
.shs-why-feat:hover{ transform:translateX(6px);box-shadow:0 10px 30px rgba(13,107,82,.12); }
.shs-why-feat:hover::before{ height:100%; }
.shs-why-feat-icon{ font-size:1.6rem;margin-bottom:10px;display:block; }
.shs-why-feat h5{ font-family:'Syne',sans-serif;font-size:.92rem;font-weight:700;margin-bottom:6px;color:var(--navy); }
.shs-why-feat p { font-size:.8rem;color:var(--muted);line-height:1.6; }

.shs-why-visual{ position:relative; }
.shs-why-img-wrap{ border-radius:20px;overflow:hidden;box-shadow:0 30px 70px rgba(17,35,79,.18); }
.shs-why-img-wrap img{ width:100%;height:420px;object-fit:cover;display:block; }
.shs-why-float{ position:absolute;bottom:-20px;right:-20px;background:linear-gradient(135deg,var(--navy),var(--navy-mid));border:1px solid rgba(255,255,255,.1);border-radius:14px;padding:20px 26px;box-shadow:0 20px 50px rgba(17,35,79,.3); }
.shs-why-float strong{ display:block;font-family:'Syne',sans-serif;font-size:1.9rem;font-weight:800;color:var(--gold); }
.shs-why-float span  { font-size:.78rem;color:rgba(255,255,255,.55); }

.shs-apply-btn{ display:inline-flex;align-items:center;gap:10px;padding:14px 32px;margin-top:28px;background:linear-gradient(135deg,var(--forest),var(--forest-dk));color:#fff;font-family:'Syne',sans-serif;font-weight:700;border:none;border-radius:8px;cursor:pointer;font-size:.95rem;text-decoration:none;box-shadow:0 8px 28px rgba(13,107,82,.35);transition:all .3s ease; }
.shs-apply-btn:hover{ transform:translateY(-3px);box-shadow:0 16px 40px rgba(13,107,82,.55);color:#fff; }

/* ============================================================
   TESTIMONIALS
============================================================ */
.shs-testimonials{ background:var(--navy); }
.shs-testi-card{ background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.1);border-radius:20px;padding:32px;transition:all .4s ease;position:relative;height:100%;display:flex;flex-direction:column; }
.shs-testi-card::before{ content:'"';position:absolute;top:16px;right:24px;font-family:'Syne',sans-serif;font-size:5rem;font-weight:800;color:rgba(13,107,82,.2);line-height:1; }
.shs-testi-card:hover{ transform:translateY(-6px);box-shadow:0 24px 60px rgba(0,0,0,.4);border-color:rgba(13,107,82,.3); }
.shs-testi-avatar{ width:54px;height:54px;border-radius:50%;object-fit:cover;margin-bottom:18px;border:2px solid var(--forest); }
.shs-testi-stars{ color:var(--gold);font-size:.85rem;margin-bottom:12px;letter-spacing:2px; }
.shs-testi-text{ font-size:.92rem;color:rgba(255,255,255,.75);line-height:1.75;margin-bottom:18px;font-style:italic;flex:1; }
.shs-testi-name{ font-family:'Syne',sans-serif;font-weight:700;font-size:.95rem;color:#fff; }
.shs-testi-prog{ font-size:.8rem;color:rgba(255,255,255,.4);margin-top:2px; }

/* ============================================================
   BLOG
============================================================ */
.shs-blog{ background:linear-gradient(135deg,var(--navy) 0%,#0d1f4a 60%,#061228 100%); }
.blog-active .single-blog{ display:flex;flex-direction:column;border:1px solid rgba(255,255,255,.12)!important;border-radius:12px;overflow:hidden;background:rgba(255,255,255,.04);margin:10px;height:100%;transition:all .3s ease; }
.blog-active .single-blog:hover{ transform:translateY(-4px);border-color:rgba(13,107,82,.4)!important;box-shadow:0 16px 40px rgba(0,0,0,.3); }
.blog-active .blog-img{ flex:0 0 200px;overflow:hidden; }
.blog-active .blog-img img{ width:100%;height:100%;object-fit:cover; }
.blog-active .blog-content-wrap{ display:flex;flex-direction:column;flex:1;padding:15px; }
.blog-active .blog-content{ flex:1; }
.blog-active .blog-content h4 a{ color:#fff!important; }
.blog-active .blog-content p   { color:rgba(255,255,255,.6)!important; }
.blog-active .blog-meta a,.blog-active .blog-date a{ color:rgba(255,255,255,.45)!important; }
.blog-active::after{ content:"";display:block;clear:both; }

/* ============================================================
   CTA BANNER
============================================================ */
.shs-cta{ background:linear-gradient(135deg,var(--forest) 0%,var(--forest-dk) 50%,#004d33 100%);position:relative;overflow:hidden; }
.shs-cta::before{ content:'';position:absolute;inset:0;background:url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none'%3E%3Cg fill='%23ffffff' fill-opacity='0.04'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E"); }
.shs-cta-inner{ display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:32px;max-width:1200px;margin:0 auto;padding:80px 40px;position:relative;z-index:1; }
@media(max-width:768px){ .shs-cta-inner{ padding:60px 20px;text-align:center;justify-content:center; } }
.shs-cta-inner h2{ font-family:'Syne',sans-serif;font-size:clamp(1.8rem,3vw,2.4rem);font-weight:800;margin-bottom:12px;color:#fff; }
.shs-cta-inner p{ color:rgba(255,255,255,.8);font-size:1rem;max-width:500px;line-height:1.6; }
.shs-btn-white{ padding:16px 40px;background:#fff;color:var(--forest);border:none;border-radius:8px;cursor:pointer;font-family:'Syne',sans-serif;font-weight:700;font-size:1rem;transition:all .3s ease;text-decoration:none;box-shadow:0 8px 30px rgba(0,0,0,.2);white-space:nowrap; }
.shs-btn-white:hover{ transform:translateY(-3px);box-shadow:0 16px 40px rgba(0,0,0,.3);color:var(--forest); }
</style>

<div class="shs-page">

<!-- ═══════════════════════ HERO ═══════════════════════ -->
<section class="shs-hero">
  <div class="shs-hero-orb orb1"></div>
  <div class="shs-hero-orb orb2"></div>
  <div class="shs-hero-content">
    <div class="shs-hero-badge"><span></span> Dehradun's Premier Health Sciences School</div>
    <h1>Healthcare Education<br>with a <em>Smarter,</em><br>Future-Facing Context.</h1>
    <p>Health and nursing students can study with stronger awareness of diagnostics, informatics, monitoring, and AI-linked care systems.</p>
    <div class="shs-hero-btns">
      <a href="https://admissions.maya.edu.in" class="shs-btn-primary">Apply Now →</a>
      <a href="#courses" class="shs-btn-outline">Explore Programs</a>
    </div>
  </div>
  <div class="shs-scroll-hint">Scroll <span></span></div>
</section>

<!-- ═══════════════════════ ABOUT ═══════════════════════ -->
<section class="shs-section shs-about" id="about">
  <div class="shs-container">
    <div class="shs-about-grid">
      <div class="shs-about-text shs-reveal rl">
        <div class="shs-label">School Overview</div>
        <h2 class="shs-heading">Where Healthcare<br>Meets <em>Purpose</em></h2>
        <p>The School of Health Sciences at Maya Devi University is dedicated to nurturing future healthcare professionals through rigorous academic programs and hands-on training. Established with a mission to advance health education and research, the department focuses on clinical excellence, innovation, and community service.</p>
        <p>Our programs are designed to meet the evolving needs of the healthcare industry, ensuring students are well-prepared for impactful careers. With a strong emphasis on practical learning, interdisciplinary collaboration, and community engagement, the department offers a nurturing environment where students can thrive both academically and professionally.</p>
        <p>Our faculty comprises experienced clinicians and researchers who mentor students to become compassionate, competent, and globally competitive healthcare providers.</p>
        <a class="shs-download-btn" href="assets/uploads/fee/Health_Sciences_m.pdf">⬇ Download Fee Structure</a>
      </div>
      <div class="shs-about-visual shs-reveal rr" style="position:relative;">
        <div class="shs-about-img-wrap">
          <img src="assets/uploads/health.webp" alt="School of Health Sciences">
          <div class="shs-float-badge">
            <strong>10+</strong>
            <span>Programs Offered</span>
          </div>
        </div>
        <div class="shs-corner-tag">Top Ranked</div>
      </div>
    </div>
  </div>
</section>

<div class="shs-divider"></div>

<!-- ═══════════════════════ STATS ═══════════════════════ -->
<section class="shs-stats">
  <div class="shs-stats-grid">
    <div class="shs-stat shs-reveal d1">
      <span class="shs-stat-icon">📚</span>
      <div class="shs-stat-num"><span class="shs-counter" data-target="10">10</span><span class="shs-stat-suffix">+</span></div>
      <div class="shs-stat-label">Programs Offered</div>
    </div>
    <div class="shs-stat shs-reveal d2">
      <span class="shs-stat-icon">🏆</span>
      <div class="shs-stat-num"><span class="shs-counter" data-target="500">500</span><span class="shs-stat-suffix">+</span></div>
      <div class="shs-stat-label">Students Placed</div>
    </div>
    <div class="shs-stat shs-reveal d3">
      <span class="shs-stat-icon">💼</span>
      <div class="shs-stat-num"><span class="shs-counter" data-target="16">16</span><span class="shs-stat-suffix"> LPA</span></div>
      <div class="shs-stat-label">Highest Package</div>
    </div>
    <div class="shs-stat shs-reveal d4">
      <span class="shs-stat-icon">🌐</span>
      <div class="shs-stat-num"><span class="shs-counter" data-target="100">100</span><span class="shs-stat-suffix">+</span></div>
      <div class="shs-stat-label">Industry Partners</div>
    </div>
  </div>
</section>

<!-- ═══════════════════════ COURSES ═══════════════════════ -->
<section class="shs-section shs-courses" id="courses">
  <div class="shs-container">
    <div class="shs-reveal" style="margin-bottom:48px;">
      <div class="shs-label">Academic Programs</div>
      <h2 class="shs-heading">Industry-Focused<br><em>Degrees</em> That Matter</h2>
    </div>
    <div class="shs-reveal d2">
      <div class="shs-tab-row">
        <button class="shs-tab active" onclick="shsTab('ug',this)">Undergraduate</button>
        <button class="shs-tab" onclick="shsTab('pg',this)">Postgraduate</button>
      </div>
    </div>

    <!-- UG -->
    <div id="shs-tab-ug" class="shs-tab-pane active shs-ug-grid">
      <div class="shs-course-card shs-reveal d1">
        <div class="shs-course-img"><img src="assets/uploads/bha.webp" alt="BHA"></div>
        <div class="shs-course-body">
          <span class="shs-course-tag">UG</span>
          <h4>Bachelor of Hospital Administration (BHA)</h4>
          <p>Focuses on hospital operations, healthcare management, and administrative leadership.</p>
          <div class="shs-course-meta"><span>⚡ 125 Credits</span><span>📅 3 Years</span></div>
          <a href="hospital-administration.php" class="shs-course-cta">Apply Now</a>
        </div>
      </div>
      <div class="shs-course-card shs-reveal d2">
        <div class="shs-course-img"><img src="assets/uploads/bph.webp" alt="BPH"></div>
        <div class="shs-course-body">
          <span class="shs-course-tag">UG</span>
          <h4>Bachelor of Public Health (BPH)</h4>
          <p>Focuses on community health, public health management, and program administration.</p>
          <div class="shs-course-meta"><span>⚡ 125 Credits</span><span>📅 3 Years</span></div>
          <a href="public-health.php" class="shs-course-cta">Apply Now</a>
        </div>
      </div>
    </div>

    <!-- PG -->
    <div id="shs-tab-pg" class="shs-tab-pane shs-pg-grid">
      <div class="shs-course-card shs-reveal d1">
        <div class="shs-course-img"><img src="assets/uploads/mph.webp" alt="MPH"></div>
        <div class="shs-course-body">
          <span class="shs-course-tag">PG</span>
          <h4>Master of Public Health (MPH)</h4>
          <p>Focuses on epidemiology, public health leadership, and healthcare program management.</p>
          <div class="shs-course-meta"><span>⚡ 60 Credits</span><span>📅 2 Years</span></div>
          <a href="master-in-public-health.php" class="shs-course-cta">Apply Now</a>
        </div>
      </div>
      <div class="shs-course-card shs-reveal d2">
        <div class="shs-course-img"><img src="assets/uploads/mha.webp" alt="MHA"></div>
        <div class="shs-course-body">
          <span class="shs-course-tag">PG</span>
          <h4>Master of Hospital Administration (MHA)</h4>
          <p>Advanced training in hospital operations, healthcare leadership, and strategic management.</p>
          <div class="shs-course-meta"><span>⚡ 60 Credits</span><span>📅 2 Years</span></div>
          <a href="master-in-hospital-administration.php" class="shs-course-cta">Apply Now</a>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="shs-divider"></div>

<!-- ═══════════════════════ IBM SECTION ═══════════════════════ -->
<section class="shs-section shs-ibm" id="ibm">
  <div class="shs-ibm-orb-a"></div>
  <div class="shs-ibm-orb-b"></div>
  <div class="shs-container">
    <div class="shs-ibm-grid">

      <!-- Left -->
      <div class="shs-reveal rl">
        <div class="shs-ibm-badge-row">
          <div class="shs-ibm-logo">IBM</div>
          <span class="shs-ibm-x">×</span>
          <span class="shs-mdu-txt">Maya Devi University</span>
        </div>
        <h2 class="shs-ibm-heading">Healthcare education with<br><em>smarter, future-facing context.</em></h2>
        <p class="shs-ibm-desc">Health and nursing students can study with stronger awareness of diagnostics, informatics, monitoring, and AI-linked care systems — gaining meaningful career advantage in a rapidly evolving healthcare landscape.</p>

        <div class="shs-chips">
          <span class="shs-chip">IBM AI with Health Informatics</span>
          <span class="shs-chip">AI in Medical Diagnostics</span>
          <span class="shs-chip">AI in Radiology</span>
          <span class="shs-chip">AI in Cardiac Diagnostics</span>
          <span class="shs-chip">AI in Eye Diagnostics</span>
          <span class="shs-chip">Foundation of AI in Nursing Care</span>
        </div>

        <div class="shs-ibm-note">
          <strong>About IBM</strong>
          IBM is a globally recognized technology company known for innovation in artificial intelligence, analytics, enterprise technology, and digital transformation. That association adds stronger credibility and modern relevance to the student journey at MDU.
        </div>

        <a href="hospital-administration.php" class="shs-ibm-cta">Discover IBM-Linked Pathways →</a>
      </div>

      <!-- Right -->
      <div class="shs-ibm-boxes shs-reveal rr">
        <div class="shs-ibm-box">
          <span class="shs-ibm-box-icon">🚀</span>
          <h5>Future Skills</h5>
          <p>Understand how healthcare and technology increasingly work together in modern care systems.</p>
        </div>
        <div class="shs-ibm-box">
          <span class="shs-ibm-box-icon">💎</span>
          <h5>Career Value</h5>
          <p>A health sciences degree that is current, practical, and future-aware for a tech-driven world.</p>
        </div>
        <div class="shs-ibm-box">
          <span class="shs-ibm-box-icon">🏢</span>
          <h5>IBM Advantage</h5>
          <p>Add meaningful career context to health programs through domain-linked innovation exposure.</p>
        </div>
        <div class="shs-ibm-box">
          <span class="shs-ibm-box-icon">🌍</span>
          <h5>Global Recognition</h5>
          <p>IBM's global presence in AI and digital transformation adds premium credibility to your degree.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<div class="shs-divider"></div>

<!-- ═══════════════════════ CLUBS ═══════════════════════ -->
<section class="shs-section shs-clubs">
  <div class="shs-container">
    <div class="shs-reveal" style="margin-bottom:40px;">
      <div class="shs-label">Campus Life</div>
      <h2 class="shs-heading">Student <em>Clubs</em> 🎓</h2>
    </div>
    <div class="shs-cards-grid">
      <div class="shs-mini-card shs-reveal d1"><span class="shs-mini-card-icon">💻</span><h5>HealthTech Club</h5><p>Explores the integration of technology and healthcare to improve patient care and innovation.</p></div>
      <div class="shs-mini-card shs-reveal d2"><span class="shs-mini-card-icon">🌍</span><h5>Public Health Society</h5><p>Works on awareness, prevention, and community health initiatives for societal well-being.</p></div>
      <div class="shs-mini-card shs-reveal d3"><span class="shs-mini-card-icon">🩺</span><h5>Clinical Skills Club</h5><p>Provides hands-on training sessions to strengthen core clinical and patient care skills.</p></div>
      <div class="shs-mini-card shs-reveal d4"><span class="shs-mini-card-icon">🥗</span><h5>Wellness &amp; Nutrition Club</h5><p>Promotes healthy living through balanced nutrition, fitness, and overall wellness programs.</p></div>
    </div>
  </div>
</section>

<div class="shs-divider"></div>

<!-- ═══════════════════════ CAREERS ═══════════════════════ -->
<section class="shs-section shs-careers">
  <div class="shs-container">
    <div class="shs-reveal" style="margin-bottom:40px;">
      <div class="shs-label">Opportunities</div>
      <h2 class="shs-heading">Career <span>Options</span> 💼</h2>
    </div>
    <div class="shs-cards-grid">
      <div class="shs-mini-card shs-reveal d1"><span class="shs-mini-card-icon">🧪</span><h5>Medical Laboratory Technician</h5><p>Conducts lab tests to help diagnose and treat diseases.</p></div>
      <div class="shs-mini-card shs-reveal d2"><span class="shs-mini-card-icon">💉</span><h5>Anaesthesia Technician</h5><p>Assists anesthesiologists in patient care before and after surgery.</p></div>
      <div class="shs-mini-card shs-reveal d3"><span class="shs-mini-card-icon">🩻</span><h5>Radiology Technician</h5><p>Operates imaging equipment to diagnose medical conditions.</p></div>
      <div class="shs-mini-card shs-reveal d4"><span class="shs-mini-card-icon">💧</span><h5>Dialysis Technician</h5><p>Provides care for patients undergoing kidney dialysis treatment.</p></div>
      <div class="shs-mini-card shs-reveal d1"><span class="shs-mini-card-icon">🛠️</span><h5>Operation Theatre Technician</h5><p>Supports surgical teams by managing OT instruments and setup.</p></div>
      <div class="shs-mini-card shs-reveal d2"><span class="shs-mini-card-icon">❤️</span><h5>Cardiac Care Technician</h5><p>Assists in diagnosing and treating heart-related conditions.</p></div>
      <div class="shs-mini-card shs-reveal d3"><span class="shs-mini-card-icon">🏥</span><h5>Hospital Administrator</h5><p>Manages hospital operations, staff, and healthcare services.</p></div>
      <div class="shs-mini-card shs-reveal d4"><span class="shs-mini-card-icon">🌍</span><h5>Public Health Specialist</h5><p>Works on disease prevention and health promotion programs.</p></div>
      <div class="shs-mini-card shs-reveal d1"><span class="shs-mini-card-icon">🤝</span><h5>Healthcare Consultant</h5><p>Advises hospitals and organizations to improve healthcare systems.</p></div>
      <div class="shs-mini-card shs-reveal d2"><span class="shs-mini-card-icon">🔬</span><h5>Research Scientist</h5><p>Conducts medical and scientific research for innovation.</p></div>
      <div class="shs-mini-card shs-reveal d3"><span class="shs-mini-card-icon">✅</span><h5>Quality Control Specialist</h5><p>Ensures healthcare services meet quality and safety standards.</p></div>
      <div class="shs-mini-card shs-reveal d4"><span class="shs-mini-card-icon">📊</span><h5>Clinical Research Associate</h5><p>Monitors clinical trials to ensure accuracy and compliance.</p></div>
    </div>
  </div>
</section>

<div class="shs-divider"></div>

<!-- ═══════════════════════ WHY CHOOSE US ═══════════════════════ -->
<section class="shs-section shs-why">
  <div class="shs-container">
    <div class="shs-why-grid">
      <div>
        <div class="shs-reveal">
          <div class="shs-label">Why MDU</div>
          <h2 class="shs-heading">Why <em>Choose</em> Us 🌟?</h2>
          <p style="color:var(--muted);line-height:1.85;font-size:1rem;">Choosing the right place to pursue your education is a life-changing decision. At the School of Health Sciences, MDU, we go beyond conventional learning by offering an ecosystem of clinical excellence, innovation, and global opportunities.</p>
          <a href="https://admissions.maya.edu.in" class="shs-apply-btn">Apply Now →</a>
        </div>
        <div class="shs-why-features">
          <div class="shs-why-feat shs-reveal d1"><span class="shs-why-feat-icon">🚀</span><h5>Excellence in Education &amp; Innovation</h5><p>Future-ready curriculum blending theory with hands-on clinical practice ensuring cutting-edge skills.</p></div>
          <div class="shs-why-feat shs-reveal d2"><span class="shs-why-feat-icon">⚖️</span><h5>Ethics Meets Healthcare</h5><p>We build responsible healthcare leaders who act with integrity and strong ethical values.</p></div>
          <div class="shs-why-feat shs-reveal d3"><span class="shs-why-feat-icon">🌍</span><h5>Global Readiness</h5><p>International collaborations and real-world projects prepare students for a global workforce.</p></div>
          <div class="shs-why-feat shs-reveal d4"><span class="shs-why-feat-icon">🔬</span><h5>Research &amp; Creativity</h5><p>Research opportunities encourage exploration and creative problem-solving in every discipline.</p></div>
          <div class="shs-why-feat shs-reveal d5"><span class="shs-why-feat-icon">🤝</span><h5>Supportive, Inclusive Environment</h5><p>A welcoming culture where every student is supported and empowered to grow.</p></div>
          <div class="shs-why-feat shs-reveal d6"><span class="shs-why-feat-icon">📚</span><h5>Commitment to Lifelong Learning</h5><p>Education here builds a mindset of curiosity, critical thinking, and continuous growth.</p></div>
        </div>
      </div>
      <div class="shs-why-visual shs-reveal rr">
        <div class="shs-why-img-wrap">
          <img src="assets/uploads/computer.jpg" alt="Why Choose MDU">
        </div>
        <div class="shs-why-float">
          <strong>16 LPA</strong>
          <span>Highest Package</span>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="shs-divider"></div>

<!-- ═══════════════════════ TESTIMONIALS ═══════════════════════ -->
<section class="shs-section shs-testimonials">
  <div class="shs-container">
    <div class="shs-reveal" style="margin-bottom:48px;">
      <div class="shs-label" style="color:#5ecfb1;">--</div>
      <h2 class="shs-heading" style="color:#fff;">Student <em style="color:#5ecfb1;">Testimonials</em></h2>
    </div>
    <div class="swiper testimonial-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="height:auto;display:flex;">
          <div class="shs-testi-card">
            <div class="shs-testi-stars">★★★★★</div>
            <img src="assets/uploads/testimoni-1.jpeg" alt="Riya Sharma" class="shs-testi-avatar">
            <p class="shs-testi-text">"The School of Engineering provided me with excellent opportunities to learn, explore, and innovate. I secured a placement at Microsoft with 42 LPA package!"</p>
            <div class="shs-testi-name">Riya Sharma</div>
            <div class="shs-testi-prog">CSE</div>
          </div>
        </div>
        <div class="swiper-slide" style="height:auto;display:flex;">
          <div class="shs-testi-card">
            <div class="shs-testi-stars">★★★★★</div>
            <img src="assets/uploads/testimoni-2.jpeg" alt="Arjun Verma" class="shs-testi-avatar">
            <p class="shs-testi-text">"State-of-the-art labs and practical exposure gave me an edge in the industry. Truly grateful for the faculty and support at MDU."</p>
            <div class="shs-testi-name">Arjun Verma</div>
            <div class="shs-testi-prog">Mechanical</div>
          </div>
        </div>
        <div class="swiper-slide" style="height:auto;display:flex;">
          <div class="shs-testi-card">
            <div class="shs-testi-stars">★★★★★</div>
            <img src="assets/uploads/testimoni-3.jpeg" alt="Sneha Gupta" class="shs-testi-avatar">
            <p class="shs-testi-text">"Amazing mentors and inclusive culture. I gained not only knowledge but also confidence to excel in my career."</p>
            <div class="shs-testi-name">Sneha Gupta</div>
            <div class="shs-testi-prog">MCA</div>
          </div>
        </div>
        <div class="swiper-slide" style="height:auto;display:flex;">
          <div class="shs-testi-card">
            <div class="shs-testi-stars">★★★★★</div>
            <img src="assets/uploads/testimoni-4.jpeg" alt="Arjun Verma" class="shs-testi-avatar">
            <p class="shs-testi-text">"State-of-the-art labs and practical exposure gave me an edge in the industry. Truly grateful for the faculty and support at MDU."</p>
            <div class="shs-testi-name">Arjun Verma</div>
            <div class="shs-testi-prog">Mechanical</div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<div class="shs-divider"></div>

<!-- Department Blog Feature Section -->
<section class="section-pad event-area-maya">
  <div class="container">
    <div class="reveal mb-4">
      <div class="section-label text-white">Department Insights & Articles</div>
      <h2 class="section-maya text-white">Latest From <em>School of Health Sciences</em></h2>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-12 mb-4">
        <div class="dept-blog-card">
          <div class="dept-blog-img">
            <a href="health-sciences-at-maya-devi-university.php">
              <img src="assets/uploads/health-blog.png" alt="The Backbone of Modern Healthcare">
            </a>
          </div>
          <div class="dept-blog-body">
            <h4 class="dept-blog-title">
              <a href="health-sciences-at-maya-devi-university.php">The Backbone of Modern Healthcare: The School of Health Sciences at Maya Devi University</a>
            </h4>
            <p class="dept-blog-excerpt">Study BPT, BMLT & allied health programs at Maya Devi University, a leading health sciences college in Dehradun, Uttarakhand with clinical training...</p>
            <div class="dept-blog-footer">
              <span class="dept-blog-date"><i class="fa fa-calendar-o"></i> Mar 05, 2026</span>
              <a href="health-sciences-at-maya-devi-university.php" class="dept-blog-btn">Read Full Article &rarr;</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .event-area-maya {
    background: linear-gradient(135deg, #0a1628 0%, #0d1f4a 60%, #061228 100%);
    padding: 60px 0;
  }
  .dept-blog-card {
    background: #ffffff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    height: 100%;
    max-width: 540px;
  }
  .dept-blog-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
  }
  .dept-blog-img {
    position: relative;
    width: 100%;
    height: 220px;
    max-height: 220px;
    overflow: hidden;
  }
  .dept-blog-img a {
    display: block;
    width: 100%;
    height: 100%;
  }
  .dept-blog-img img {
    width: 100% !important;
    height: 100% !important;
    max-height: 220px !important;
    object-fit: cover !important;
    transition: transform 0.5s ease;
  }
  .dept-blog-card:hover .dept-blog-img img {
    transform: scale(1.06);
  }
  .dept-blog-badge {
    position: absolute;
    top: 15px;
    left: 15px;
    background: #00a651;
    color: #ffffff !important;
    font-size: 12px;
    font-weight: 700;
    padding: 5px 14px;
    border-radius: 4px;
    text-transform: uppercase;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
    z-index: 2;
  }
  .dept-blog-body {
    padding: 24px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
    background: #ffffff;
  }
  .dept-blog-title {
    font-size: 1.15rem;
    font-weight: 700;
    line-height: 1.45;
    margin-bottom: 12px;
  }
  .dept-blog-title a {
    color: #1e293b !important;
    text-decoration: none;
    transition: color 0.3s ease;
  }
  .dept-blog-title a:hover {
    color: #00a651 !important;
  }
  .dept-blog-excerpt {
    color: #64748b !important;
    font-size: 0.9rem;
    line-height: 1.6;
    margin-bottom: 20px;
    flex-grow: 1;
  }
  .dept-blog-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-top: 1px solid #f1f5f9;
    padding-top: 16px;
    margin-top: auto;
  }
  .dept-blog-date {
    color: #94a3b8 !important;
    font-size: 0.85rem;
    font-weight: 500;
  }
  .dept-blog-btn {
    color: #00a651 !important;
    font-weight: 700;
    font-size: 0.9rem;
    text-decoration: none;
    transition: all 0.3s ease;
  }
  .dept-blog-btn:hover {
    color: #008f45 !important;
    text-decoration: underline;
  }
</style>

<!-- ═══════════════════════ CTA BANNER ═══════════════════════ -->
<section class="shs-cta">
  <div class="shs-cta-inner">
    <div class="shs-reveal rl">
      <h2>Ready to Shape Your Future?</h2>
      <p>Join thousands of students who've launched transformative careers through MDU's industry-aligned Health Sciences programs. Applications are open for 2026-27.</p>
    </div>
    <a href="https://admissions.maya.edu.in" class="shs-btn-white shs-reveal rr">Apply Now →</a>
  </div>
</section>

</div><!-- /.shs-page -->

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
/* ── SCROLL REVEAL ── */
const shsReveal = () => {
  document.querySelectorAll('.shs-reveal').forEach(el => {
    const r = el.getBoundingClientRect();
    if (r.top < window.innerHeight * 0.9 && r.bottom > 0) el.classList.add('vis');
    else el.classList.remove('vis');
  });
};
window.addEventListener('scroll', shsReveal, { passive: true });
window.addEventListener('resize', shsReveal);
shsReveal();

/* ── COUNTER ── */
let shsDone = false;
const shsRunCounters = () => {
  document.querySelectorAll('.shs-counter').forEach(el => {
    const target = +el.dataset.target;
    const start  = performance.now();
    const dur    = 1800;
    const tick   = (now) => {
      const p     = Math.min((now - start) / dur, 1);
      const eased = 1 - Math.pow(1 - p, 3);
      el.textContent = Math.floor(eased * target);
      if (p < 1) requestAnimationFrame(tick); else el.textContent = target;
    };
    requestAnimationFrame(tick);
  });
};
new IntersectionObserver((entries) => {
  entries.forEach(e => { if (e.isIntersecting && !shsDone) { shsDone = true; shsRunCounters(); } });
}, { threshold: 0.3 }).observe(document.querySelector('.shs-stats'));

/* ── TAB SWITCH ── */
function shsTab(id, btn) {
  document.querySelectorAll('.shs-tab-pane').forEach(p => { p.classList.remove('active'); p.style.display = 'none'; });
  document.querySelectorAll('.shs-tab').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  const pane = document.getElementById('shs-tab-' + id);
  pane.classList.add('active'); pane.style.display = 'grid';
  setTimeout(shsReveal, 60);
}
document.getElementById('shs-tab-ug').style.display = 'grid';
document.getElementById('shs-tab-pg').style.display = 'none';

/* ── SWIPER ── */
new Swiper('.testimonial-slider', {
  slidesPerView: 1, spaceBetween: 24, loop: true,
  autoplay: { delay: 4000, disableOnInteraction: false },
  pagination: { el: '.swiper-pagination', clickable: true },
  breakpoints: { 768: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } }
});

/* ── BLOG SLICK ── */
if (typeof $ !== 'undefined' && $.fn.slick) {
  $('.blog-active').slick({
    infinite: true, slidesToShow: 3, slidesToScroll: 1,
    prevArrow: '<span class="b-navigation b-navigation-prev"><i class="fa fa-angle-left"></i></span>',
    nextArrow: '<span class="b-navigation b-navigation-next active"><i class="fa fa-angle-right"></i></span>',
    responsive: [
      { breakpoint: 1024, settings: { slidesToShow: 2 } },
      { breakpoint: 768,  settings: { slidesToShow: 1 } }
    ]
  });
}
</script>

<section class="mdu-faq-section" id="faq">
  <style>
    .mdu-faq-section{max-width:900px;margin:60px auto;padding:0 20px;font-family:inherit;}
    .mdu-faq-section h2{font-size:28px;font-weight:700;margin-bottom:24px;color:#0a1628;}
    .mdu-faq-item{background:#ffffff;border:1px solid #e2e6ef;border-radius:10px;
      padding:16px 20px;margin-bottom:14px;box-shadow:0 1px 3px rgba(0,0,0,0.04);}
    .mdu-faq-q{font-weight:600;font-size:16px;color:#0a1628;cursor:pointer;list-style:none;}
    .mdu-faq-q::-webkit-details-marker{display:none;}
    .mdu-faq-q::after{content:"+";float:right;font-weight:700;color:#0f62fe;}
    .mdu-faq-item[open] .mdu-faq-q::after{content:"\2212";}
    .mdu-faq-a{margin-top:10px;color:#4a5568;line-height:1.7;font-size:15px;}
  </style>
  <h2>Frequently Asked Questions</h2>
    <details class="mdu-faq-item">
      <summary class="mdu-faq-q">What is the MPH program at Maya Devi University?</summary>
      <p class="mdu-faq-a">The Master of Public Health (MPH) is a 2-year postgraduate program at Maya Devi University focused on epidemiology, health policy, biostatistics, and community health management. It prepares graduates for careers in public health agencies, NGOs, and hospitals.</p>
    </details>
</section>

<?php require "common/footer.php" ?>