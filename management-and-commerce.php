<?php
$page_title = "Management & Commerce Programs in Dehradun | Maya Devi University";
$page_description = "Explore Management and Commerce programs at Maya Devi University, Dehradun with industry-focused curriculum and placement support.";
$canonical_url = "https://maya.edu.in/management-and-commerce.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
$page_schema = <<<SCHEMA
<script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "ItemList",
 "name": "School of Commerce & Management — Maya Devi University, Dehradun",
 "url": "https://maya.edu.in/management-and-commerce.php",
 "itemListElement": [
  {
   "@type": "ListItem",
   "position": 1,
   "item": {
    "@type": "Course",
    "name": "BBA (Bachelor of Business Administration)",
    "url": "https://maya.edu.in/undergraduate-course.php",
    "description": "BBA (Bachelor of Business Administration) offered by Maya Devi University, Selaqui, Dehradun, Uttarakhand. UGC-recognised private university with IBM partnership and strong placement record.",
    "provider": {
     "@type": "CollegeOrUniversity",
     "name": "Maya Devi University",
     "url": "https://maya.edu.in/"
    },
    "educationalLevel": "Bachelor",
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
    "name": "B.Com (Bachelor of Commerce)",
    "url": "https://maya.edu.in/undergraduate-course.php",
    "description": "B.Com (Bachelor of Commerce) offered by Maya Devi University, Selaqui, Dehradun, Uttarakhand. UGC-recognised private university with IBM partnership and strong placement record.",
    "provider": {
     "@type": "CollegeOrUniversity",
     "name": "Maya Devi University",
     "url": "https://maya.edu.in/"
    },
    "educationalLevel": "Bachelor",
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
   "position": 3,
   "item": {
    "@type": "Course",
    "name": "MBA (Master of Business Administration)",
    "url": "https://maya.edu.in/post-graduate.php",
    "description": "MBA (Master of Business Administration) offered by Maya Devi University, Selaqui, Dehradun, Uttarakhand. UGC-recognised private university with IBM partnership and strong placement record.",
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
   "position": 4,
   "item": {
    "@type": "Course",
    "name": "M.Com (Master of Commerce)",
    "url": "https://maya.edu.in/post-graduate.php",
    "description": "M.Com (Master of Commerce) offered by Maya Devi University, Selaqui, Dehradun, Uttarakhand. UGC-recognised private university with IBM partnership and strong placement record.",
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
   "name": "What MBA specializations are offered at Maya Devi University?",
   "acceptedAnswer": {
    "@type": "Answer",
    "text": "Maya Devi University offers MBA with specializations in Marketing, Finance, Human Resources, and Operations Management. The program is a 2-year full-time course."
   }
  },
  {
   "@type": "Question",
   "name": "What is the eligibility for MBA at Maya Devi University?",
   "acceptedAnswer": {
    "@type": "Answer",
    "text": "For MBA admission at Maya Devi University, candidates must hold a bachelor's degree with minimum 50% marks. Scores from CAT, MAT, or CMAT are accepted. Direct admission is also available based on merit."
   }
  },
  {
   "@type": "Question",
   "name": "What companies recruit MBA students from Maya Devi University?",
   "acceptedAnswer": {
    "@type": "Answer",
    "text": "MBA graduates from Maya Devi University are recruited by companies such as Amazon, Deloitte, American Express, HDFC Bank, Axis Bank, and various multinational consulting firms."
   }
  }
 ]
}
</script>
SCHEMA;
?>
<?php require "common/header.php"?>

<link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&display=swap" rel="stylesheet">
<style>
:root {
  --navy: #0a1628;
  --navy-mid: #11234f;
  --blue-ibm: #0f62fe;
  --teal: #00a3a3;
  --gold: #d8a52d;
  --emerald: #00875a;
  --white: #ffffff;
  --off-white: #f0f4ff;
  --text-muted: #8899bb;
  --card-bg: rgba(17,35,79,0.5);
  --glass: rgba(15,98,254,0.08);
  --border: rgba(15,98,254,0.2);
}

*, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }
html { scroll-behavior: smooth; }

main {
  background: var(--navy);
  color: var(--white);
  font-family: 'DM Sans', sans-serif;
  overflow-x: hidden;
}

main::before {
  content: '';
  position: fixed; inset: 0;
  background-image:
    linear-gradient(rgba(15,98,254,0.03) 1px, transparent 1px),
    linear-gradient(90deg, rgba(15,98,254,0.03) 1px, transparent 1px);
  background-size: 60px 60px;
  pointer-events: none; z-index: 0;
}

/* ── HERO ── */
.hero {
  min-height: 100vh;
  display: flex; align-items: center; justify-content: center;
  position: relative;
  background: linear-gradient(135deg, #0a1628 0%, #0d1f4a 50%, #081630 100%);
  overflow: hidden;
  padding: 20px;
}
.hero::after {
  content: '';
  position: absolute; inset: 0;
  background: radial-gradient(ellipse 80% 60% at 60% 50%, rgba(15,98,254,0.12) 0%, transparent 70%),
              radial-gradient(ellipse 50% 40% at 20% 80%, rgba(0,163,163,0.08) 0%, transparent 60%);
}
.hero-orb {
  position: absolute;
  border-radius: 50%;
  filter: blur(80px);
  animation: orb-float 8s ease-in-out infinite;
}
.hero-orb-1 { width: 500px; height: 500px; background: rgba(0,135,90,0.12); top: -100px; right: -100px; animation-delay: 0s; }
.hero-orb-2 { width: 300px; height: 300px; background: rgba(0,163,163,0.1); bottom: 50px; left: 100px; animation-delay: 3s; }
.hero-orb-3 { width: 200px; height: 200px; background: rgba(216,165,45,0.1); top: 200px; left: 300px; animation-delay: 5s; }
@keyframes orb-float {
  0%,100% { transform: translateY(0) scale(1); }
  50% { transform: translateY(-30px) scale(1.05); }
}
.hero-content {
  position: relative; z-index: 2;
  max-width: 1000px; width: 90%;
  text-align: center;
}
.hero-badge {
  display: inline-flex; align-items: center; gap: 8px;
  background: rgba(0,135,90,0.15);
  border: 1px solid rgba(0,135,90,0.4);
  border-radius: 100px;
  padding: 8px 20px;
  font-size: 13px; font-weight: 500; letter-spacing: 0.5px;
  color: #5ecfb1;
  margin-bottom: 32px;
  animation: fade-up 0.8s ease both;
}
.hero-badge span { width: 6px; height: 6px; background: var(--emerald); border-radius: 50%; animation: pulse-dot 2s ease-in-out infinite; }
@keyframes pulse-dot { 0%,100%{opacity:1;transform:scale(1)} 50%{opacity:0.5;transform:scale(1.4)} }
.hero h1 {
  font-family: 'Syne', sans-serif;
  font-size: clamp(2.2rem, 8vw, 4rem);
  font-weight: 800;
  color: #fff;
  line-height: 1.1;
  letter-spacing: -0.02em;
  margin-bottom: 24px;
  animation: fade-up 0.8s 0.15s ease both;
  overflow-wrap: break-word;
  word-wrap: break-word;
}
.hero h1 em { font-style: normal; color: var(--gold); }
.hero h1 span { color: var(--teal); }
.hero-sub {
  font-size: 1.15rem; font-weight: 300; color: var(--text-muted);
  line-height: 1.7; max-width: 640px; margin: 0 auto 40px;
  animation: fade-up 0.8s 0.3s ease both;
}
.hero-cta-group {
  display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;
  animation: fade-up 0.8s 0.45s ease both;
}
.btn-primary {
  padding: 14px 32px;
  background: linear-gradient(135deg, var(--emerald), #006644);
  color: #fff; font-family: 'Syne', sans-serif; font-weight: 600;
  border: none; border-radius: 6px; cursor: pointer;
  font-size: 0.95rem; letter-spacing: 0.3px;
  transition: all 0.3s ease;
  text-decoration: none; display: inline-flex; align-items: center; gap: 8px;
  box-shadow: 0 8px 30px rgba(0,135,90,0.3);
}
.btn-primary:hover { transform: translateY(-3px); box-shadow: 0 16px 40px rgba(0,135,90,0.5); }
.btn-outline {
  padding: 14px 32px;
  background: transparent; color: var(--white);
  border: 1px solid var(--border);
  border-radius: 6px; cursor: pointer;
  font-family: 'Syne', sans-serif; font-weight: 600; font-size: 0.95rem;
  transition: all 0.3s ease; text-decoration: none;
  display: inline-flex; align-items: center; gap: 8px;
}
.btn-outline:hover { background: var(--glass); border-color: var(--emerald); transform: translateY(-3px); }

/* ── ANIMATIONS ── */
.reveal { opacity: 0; transform: translateY(48px); transition: opacity 0.7s cubic-bezier(.22,1,.36,1), transform 0.7s cubic-bezier(.22,1,.36,1); }
.reveal.visible { opacity: 1; transform: translateY(0); }
.reveal-left { opacity: 0; transform: translateX(-48px); transition: opacity 0.7s cubic-bezier(.22,1,.36,1), transform 0.7s cubic-bezier(.22,1,.36,1); }
.reveal-left.visible { opacity: 1; transform: translateX(0); }
.reveal-right { opacity: 0; transform: translateX(48px); transition: opacity 0.7s cubic-bezier(.22,1,.36,1), transform 0.7s cubic-bezier(.22,1,.36,1); }
.reveal-right.visible { opacity: 1; transform: translateX(0); }
.delay-1 { transition-delay: 0.1s; }
.delay-2 { transition-delay: 0.2s; }
.delay-3 { transition-delay: 0.3s; }
.delay-4 { transition-delay: 0.4s; }
.delay-5 { transition-delay: 0.5s; }
.delay-6 { transition-delay: 0.6s; }
@keyframes fade-up {
  from { opacity:0; transform:translateY(30px); }
  to { opacity:1; transform:translateY(0); }
}

/* ── LAYOUT ── */
section { position: relative; z-index: 1; }
.section-inner { max-width: 1200px; margin: 0 auto; padding: 0 40px; }
.section-pad { padding: 100px 0; }
.section-label {
  font-size: 11px; font-weight: 700; letter-spacing: 3px;
  text-transform: uppercase; color: var(--emerald);
  margin-bottom: 16px;
  display: flex; align-items: center; gap: 10px;
}
.section-label::before { content: ''; width: 24px; height: 2px; background: var(--emerald); display: block; }
.section-maya {
  font-family: 'Syne', sans-serif;
  font-size: clamp(2rem, 4vw, 3rem);
  font-weight: 800; line-height: 1.1; letter-spacing: -1px;
  color: #fff; margin-bottom: 16px;
}
.section-maya em { font-style: normal; color: var(--gold); }
.section-maya span { color: var(--teal); }
.divider { height: 1px; background: linear-gradient(90deg, transparent, var(--border), transparent); }

/* ── ABOUT ── */
.about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; }
.about-text p { color: var(--text-muted); line-height: 1.8; font-size: 1.02rem; margin-bottom: 20px; }
.about-img-wrap {
  position: relative; border-radius: 16px; overflow: hidden;
  box-shadow: 0 30px 80px rgba(0,0,0,0.5);
}
.about-img-wrap img { width: 100%; display: block; height: 400px; object-fit: cover; }
.about-img-wrap::before {
  content: '';
  position: absolute; inset: 0;
  background: linear-gradient(to bottom, transparent 60%, rgba(10,22,40,0.8));
  z-index: 1;
}
.about-badge-float {
  position: absolute; bottom: 24px; left: 24px; z-index: 2;
  background: rgba(0,135,90,0.9); backdrop-filter: blur(10px);
  border-radius: 10px; padding: 16px 20px;
}
.about-badge-float strong { display: block; font-family: 'Syne', sans-serif; font-size: 1.8rem; font-weight: 800; }
.about-badge-float span { font-size: 0.8rem; color: rgba(255,255,255,0.75); }
.about-corner-tag {
  position: absolute; top: -16px; right: -16px;
  background: linear-gradient(135deg, var(--gold), #c8941d);
  color: #1a0f00; font-family: 'Syne', sans-serif; font-weight: 700;
  font-size: 0.72rem; letter-spacing: 1.5px;
  padding: 10px 18px; border-radius: 8px; text-transform: uppercase;
}

/* ── STATS ── */
.stats-section {
  background: linear-gradient(135deg, rgba(0,135,90,0.06), rgba(0,163,163,0.04));
  border-top: 1px solid var(--border); border-bottom: 1px solid var(--border);
}
.stats-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 0; }
.stat-item {
  padding: 56px 40px; text-align: center;
  border-right: 1px solid var(--border);
  position: relative; overflow: hidden;
  transition: background 0.3s ease;
}
.stat-item:last-child { border-right: none; }
.stat-item::before {
  content: ''; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);
  width: 0; height: 2px; background: var(--emerald); transition: width 0.5s ease;
}
.stat-item:hover { background: rgba(0,135,90,0.06); }
.stat-item:hover::before { width: 100%; }
.stat-icon { font-size: 2rem; margin-bottom: 16px; display: block; }
.stat-num {
  font-family: 'Syne', sans-serif; font-size: 3.5rem; font-weight: 800; line-height: 1;
  background: linear-gradient(135deg, #fff 40%, #5ecfb1);
  -webkit-background-clip: text; -webkit-text-fill-color: transparent;
}
.stat-suffix { color: var(--emerald); }
.stat-label { font-size: 0.88rem; color: var(--text-muted); margin-top: 8px; letter-spacing: 0.3px; }

/* ── COURSE TABS ── */
.course-tabs {
  display: flex; gap: 4px;
  background: rgba(255,255,255,0.04);
  border: 1px solid var(--border);
  border-radius: 10px; padding: 4px;
  margin-bottom: 48px; width: fit-content;
}
.tab-btn {
  padding: 10px 28px;
  background: transparent; color: var(--text-muted);
  border: none; border-radius: 7px; cursor: pointer;
  font-family: 'Syne', sans-serif; font-weight: 600; font-size: 0.9rem;
  transition: all 0.3s ease;
}
.tab-btn.active { background: var(--emerald); color: #fff; box-shadow: 0 4px 20px rgba(0,135,90,0.4); }
.tab-content { display: none; }
.tab-content.active { display: grid; }
.courses-grid { grid-template-columns: repeat(4, 1fr); gap: 20px; }
.pg-grid { grid-template-columns: repeat(3, 1fr); gap: 20px; }
.phd-grid { grid-template-columns: repeat(1, 320px); gap: 20px; }

/* ── COURSE CARDS ── */
.course-card-maya {
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-radius: 16px; overflow: hidden;
  transition: all 0.4s cubic-bezier(.22,1,.36,1);
  cursor: pointer; position: relative;
}
.course-card-maya::before {
  content: '';
  position: absolute; inset: 0;
  background: linear-gradient(135deg, rgba(0,135,90,0.15), transparent);
  opacity: 0; transition: opacity 0.3s ease; pointer-events: none;
}
.course-card-maya:hover { transform: translateY(-8px) scale(1.01); border-color: rgba(0,135,90,0.5); box-shadow: 0 24px 60px rgba(0,0,0,0.4), 0 0 0 1px rgba(0,135,90,0.3); }
.course-card-maya:hover::before { opacity: 1; }
.course-img-maya { height: 160px; overflow: hidden; }
.course-img-maya img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; }
.course-card-maya:hover .course-img-maya img { transform: scale(1.08); }
.course-main-maya { padding: 20px; }
.course-tag { display: inline-block; font-size: 10px; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; color: var(--teal); margin-bottom: 10px; }
.course-main-maya h4 { font-family: 'Syne', sans-serif; font-size: 1rem; font-weight: 700; margin-bottom: 8px; line-height: 1.3; color: #fff; }
.course-main-maya p { font-size: 0.82rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 16px; }
.course-meta-maya {
  display: flex; justify-content: space-between;
  font-size: 0.78rem; color: var(--text-muted);
  margin-bottom: 16px; padding: 10px 0; border-top: 1px solid var(--border);
}
.course-cta {
  display: block; width: 100%; padding: 10px;
  background: linear-gradient(135deg, var(--emerald), #006644);
  color: #fff; border: none; border-radius: 6px; cursor: pointer;
  font-family: 'Syne', sans-serif; font-weight: 600; font-size: 0.85rem;
  text-align: center; text-decoration: none;
  transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(0,135,90,0.3);
}
.course-cta:hover { box-shadow: 0 8px 25px rgba(0,135,90,0.5); }

/* ── IBM SECTION ── */
.ibm-section {
  background: linear-gradient(135deg, #0a1628 0%, #0d1f4a 60%, #061228 100%);
  border-top: 1px solid var(--border); border-bottom: 1px solid var(--border);
  overflow: hidden; position: relative;
}
.ibm-section::before {
  content: '';
  position: absolute; top: -200px; right: -200px;
  width: 600px; height: 600px;
  background: radial-gradient(circle, rgba(15,98,254,0.12) 0%, transparent 70%);
  pointer-events: none;
}
.ibm-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; }
.ibm-badge-strip { display: flex; align-items: center; gap: 14px; margin-bottom: 28px; }
.ibm-logo-badge {
  background: #fff; padding: 8px 18px; border-radius: 8px;
  font-family: 'Syne', sans-serif; font-size: 1.5rem; font-weight: 800;
  color: #0f62fe; letter-spacing: -0.5px;
}
.ibm-x { font-size: 1.2rem; color: var(--text-muted); font-weight: 300; }
.mdu-text { font-family: 'Syne', sans-serif; font-weight: 700; font-size: 1rem; color: var(--white); }
.ibm-heading {
  font-family: 'Syne', sans-serif;
  font-size: clamp(2rem, 3.5vw, 2.8rem); font-weight: 800;
  color: #fff; line-height: 1.1; letter-spacing: -1px; margin-bottom: 20px;
}
.ibm-heading em { font-style: normal; color: var(--gold); }
.ibm-desc { color: var(--text-muted); line-height: 1.8; margin-bottom: 32px; font-size: 1rem; }
.ibm-chips { display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 36px; }
.ibm-chip {
  padding: 8px 16px;
  background: rgba(15,98,254,0.12); border: 1px solid rgba(15,98,254,0.25);
  border-radius: 100px; font-size: 12px; font-weight: 500; color: #7eb3ff;
  transition: all 0.3s ease;
}
.ibm-chip:hover { background: rgba(15,98,254,0.25); border-color: var(--blue-ibm); transform: translateY(-2px); }
.ibm-about-note {
  background: rgba(15,98,254,0.06);
  border: 1px solid rgba(15,98,254,0.2);
  border-radius: 12px; padding: 20px 24px;
  margin-bottom: 32px;
  font-size: 0.88rem; color: var(--text-muted); line-height: 1.7;
}
.ibm-about-note strong { color: #fff; display: block; margin-bottom: 6px; font-family: 'Syne', sans-serif; }
.ibm-features-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
.ibm-feat {
  background: rgba(15,98,254,0.06); border: 1px solid var(--border);
  border-radius: 12px; padding: 24px; transition: all 0.3s ease;
}
.ibm-feat:hover { background: rgba(15,98,254,0.12); transform: translateY(-4px); }
.ibm-feat-icon { font-size: 1.6rem; margin-bottom: 12px; }
.ibm-feat h5 { font-family: 'Syne', sans-serif; font-size: 0.95rem; font-weight: 700; margin-bottom: 8px; color: #fff; }
.ibm-feat p { font-size: 0.82rem; color: var(--text-muted); line-height: 1.6; }
.btn-ibm {
  padding: 14px 32px;
  background: linear-gradient(135deg, var(--blue-ibm), #0050d8);
  color: #fff; font-family: 'Syne', sans-serif; font-weight: 600;
  border: none; border-radius: 6px; cursor: pointer;
  font-size: 0.95rem; letter-spacing: 0.3px;
  transition: all 0.3s ease;
  text-decoration: none; display: inline-flex; align-items: center; gap: 8px;
  box-shadow: 0 8px 30px rgba(15,98,254,0.3);
}
.btn-ibm:hover { transform: translateY(-3px); box-shadow: 0 16px 40px rgba(15,98,254,0.5); }

/* ── CAREER PROSPECTS ── */
.careers-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
.career-card {
  background: var(--card-bg); border: 1px solid var(--border);
  border-radius: 16px; padding: 28px;
  transition: all 0.4s cubic-bezier(.22,1,.36,1);
  position: relative; overflow: hidden;
}
.career-card::after {
  content: ''; position: absolute; bottom: 0; left: 0; right: 0;
  height: 3px; background: linear-gradient(90deg, var(--emerald), var(--teal));
  transform: scaleX(0); transition: transform 0.4s ease; transform-origin: left;
}
.career-card:hover { transform: translateY(-6px); border-color: rgba(0,135,90,0.4); box-shadow: 0 20px 50px rgba(0,0,0,0.4); }
.career-card:hover::after { transform: scaleX(1); }
.career-icon { font-size: 2.2rem; margin-bottom: 14px; display: block; }
.career-card h5 { font-family: 'Syne', sans-serif; font-size: 1rem; font-weight: 700; margin-bottom: 8px; color: #fff; }
.career-card p { font-size: 0.83rem; color: var(--text-muted); line-height: 1.65; }

/* ── WHY CHOOSE ── */
.why-section { background: radial-gradient(ellipse 100% 80% at 50% 50%, rgba(0,135,90,0.04) 0%, transparent 70%); }
.why-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; }
.why-features { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
.why-feat {
  background: var(--card-bg); border: 1px solid var(--border);
  border-radius: 14px; padding: 24px;
  transition: all 0.4s ease; position: relative; overflow: hidden;
}
.why-feat::before {
  content: ''; position: absolute; top: 0; left: 0; width: 3px; height: 0;
  background: linear-gradient(to bottom, var(--emerald), var(--teal));
  transition: height 0.5s ease;
}
.why-feat:hover { transform: translateX(6px); }
.why-feat:hover::before { height: 100%; }
.why-feat-icon { font-size: 1.8rem; margin-bottom: 12px; }
.why-feat h5 { font-family: 'Syne', sans-serif; font-size: 0.95rem; font-weight: 700; margin-bottom: 8px; color: #fff; }
.why-feat p { font-size: 0.82rem; color: var(--text-muted); line-height: 1.6; }
.why-visual { position: relative; }
.why-img-wrap { border-radius: 20px; overflow: hidden; box-shadow: 0 40px 80px rgba(0,0,0,0.5); }
.why-img-wrap img { width: 100%; display: block; height: 420px; object-fit: cover; }
.why-float-card {
  position: absolute; bottom: -20px; right: -20px;
  background: linear-gradient(135deg, var(--navy-mid), #0d1f4a);
  border: 1px solid var(--border); border-radius: 14px;
  padding: 20px 24px; box-shadow: 0 20px 50px rgba(0,0,0,0.4);
}
.why-float-card strong { display: block; font-family: 'Syne', sans-serif; font-size: 2rem; font-weight: 800; color: var(--gold); }
.why-float-card span { font-size: 0.8rem; color: var(--text-muted); }

/* ── TESTIMONIALS ── */
.testimonials-section { background: linear-gradient(135deg, rgba(0,163,163,0.03), transparent); }
.testimonials-track { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
.testi-card {
  background: var(--card-bg); border: 1px solid var(--border);
  border-radius: 20px; padding: 32px;
  transition: all 0.4s ease; position: relative;
  height: 100%; display: flex; flex-direction: column;
}
.testi-card::before {
  content: '"';
  position: absolute; top: 16px; right: 24px;
  font-family: 'Syne', sans-serif; font-size: 5rem; font-weight: 800;
  color: rgba(0,135,90,0.15); line-height: 1;
}
.testi-card:hover { transform: translateY(-6px); box-shadow: 0 24px 60px rgba(0,0,0,0.4); border-color: rgba(0,135,90,0.3); }
.testi-avatar { width: 56px; height: 56px; border-radius: 50%; object-fit: cover; margin-bottom: 20px; border: 2px solid var(--emerald); flex-shrink: 0; }
.testi-text { font-size: 0.92rem; color: var(--off-white); line-height: 1.75; margin-bottom: 20px; font-style: italic; flex: 1; }
.testi-name { font-family: 'Syne', sans-serif; font-weight: 700; font-size: 0.95rem; }
.testi-prog { font-size: 0.8rem; color: var(--text-muted); margin-top: 2px; }
.testi-stars { color: var(--gold); font-size: 0.85rem; margin-bottom: 12px; letter-spacing: 2px; }
.swiper-slide { height: auto !important; display: flex !important; }
.swiper-slide .testi-card { height: 100% !important; flex: 1; }

/* ── BLOG ── */
.blog-section { background: linear-gradient(135deg, #0a1628 0%, #0d1f4a 60%, #061228 100%); }
.single-blog {
  background: var(--navy);
  display: flex;
  flex-direction: column;
  border: 1px solid #fff !important;
  border-radius: 8px;
  overflow: hidden;
  margin: 10px;
  height: 100%;
}
.blog-img { flex: 0 0 200px; overflow: hidden; }
.blog-img img { width: 100%; height: 100%; object-fit: cover; }
.blog-content-wrap { display: flex; flex-direction: column; flex: 1; padding: 15px; background: var(--navy); }
.blog-content { flex: 1; }
.blog-active::after { content: ""; display: block; clear: both; }

/* Slick arrows styling */
.b-navigation {
  position: absolute;
  top: -70px;
  right: 40px;
  width: 40px;
  height: 40px;
  border: 1px solid var(--border);
  border-radius: 50%;
  display: flex !important;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.3s ease;
  z-index: 10;
  color: #fff;
}
.b-navigation-next { right: 0; }
.b-navigation:hover { background: var(--emerald); border-color: var(--emerald); }
@media (max-width: 768px) { .b-navigation { display: none !important; } }

/* ── CTA BANNER ── */
.cta-banner { background: linear-gradient(135deg, var(--emerald) 0%, #006644 50%, #004d33 100%); position: relative; overflow: hidden; }
.cta-banner::before {
  content: '';
  position: absolute; inset: 0;
  background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.04'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.cta-inner {
  display: flex; align-items: center; justify-content: space-between;
  flex-wrap: wrap; gap: 32px;
  max-width: 1200px; margin: 0 auto; padding: 80px 40px;
  position: relative; z-index: 1;
}
.cta-text h2 { font-family: 'Syne', sans-serif; font-size: clamp(1.8rem, 3vw, 2.4rem); font-weight: 800; margin-bottom: 12px; color: #fff; }
.cta-text p { color: rgba(255,255,255,0.8); font-size: 1rem; max-width: 500px; line-height: 1.6; }
.btn-white {
  padding: 16px 40px; background: #fff; color: var(--emerald);
  border: none; border-radius: 6px; cursor: pointer;
  font-family: 'Syne', sans-serif; font-weight: 700; font-size: 1rem;
  transition: all 0.3s ease; text-decoration: none;
  box-shadow: 0 8px 30px rgba(0,0,0,0.2); white-space: nowrap;
}
.btn-white:hover { transform: translateY(-3px); box-shadow: 0 16px 40px rgba(0,0,0,0.3); }

/* ── SWIPER TESTIMONIAL ── */
.swiper-testimonial { padding-bottom: 50px !important; }
.swiper-testimonial .testi-card { margin: 0; }

/* ── RESPONSIVE ── */
@media (max-width: 1200px) {
  .courses-grid { grid-template-columns: repeat(3, 1fr); }
  .stats-grid { grid-template-columns: repeat(4, 1fr); }
  .careers-grid { grid-template-columns: repeat(3, 1fr); }
  .blog-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 1024px) {
  .about-grid, .ibm-grid, .why-grid { grid-template-columns: 1fr; gap: 48px; }
  .stats-grid { grid-template-columns: repeat(2, 1fr); }
  .stat-item { border-bottom: 1px solid var(--border); }
  .courses-grid { grid-template-columns: repeat(2, 1fr); }
  .pg-grid { grid-template-columns: repeat(2, 1fr); }
  .careers-grid { grid-template-columns: repeat(2, 1fr); }
  .blog-grid { grid-template-columns: repeat(2, 1fr); }
  .testimonials-track { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
  .section-inner { padding: 0 20px; }
  .section-pad { padding: 60px 0; }
  .courses-grid, .pg-grid, .careers-grid, .why-features { grid-template-columns: 1fr; }
  .ibm-features-grid { grid-template-columns: 1fr; }
  .blog-grid { grid-template-columns: 1fr; }
  .course-tabs { flex-direction: column; width: 100%; border-radius: 12px; }
  .tab-btn { width: 100%; text-align: center; }
  .cta-inner { text-align: center; justify-content: center; }
  .hero h1 { font-size: clamp(1.8rem, 10vw, 2.5rem); line-height: 1.2; }
  .hero-content { width: 100%; max-width: 100%; }
  .stat-num { font-size: 2.8rem; }
}
@media (max-width: 480px) {
  .stats-grid { grid-template-columns: 1fr; }
  .stat-item { border-right: none; }
  .hero-cta-group { flex-direction: column; width: 100%; }
  .btn-primary, .btn-outline { width: 100%; justify-content: center; }
}
</style>
<main>

<!-- ═══════════════════════ HERO ═══════════════════════ -->
<section class="hero">
  <div class="hero-orb hero-orb-1"></div>
  <div class="hero-orb hero-orb-2"></div>
  <div class="hero-orb hero-orb-3"></div>
  <div class="hero-content">
    <div class="hero-badge"><span></span> Dehradun's Premier Business School</div>
    <h1>Commerce &amp; Management<br>with an <em>IBM-powered</em><br><span>edge.</span></h1>
    <p class="hero-sub">Business careers now demand analytics, GenAI fluency, marketing intelligence, and sharper decision-making. MDU helps students build that advantage.</p>
    <div class="hero-cta-group">
      <a href="https://admissions.maya.edu.in" class="btn-primary">Apply Now →</a>
      <a href="#courses" class="btn-outline">Explore Programs</a>
    </div>
  </div>
</section>

<!-- ═══════════════════════ ABOUT ═══════════════════════ -->
<section id="about" class="section-pad">
  <div class="section-inner">
    <div class="about-grid">
      <div class="about-text reveal-left">
        <div class="section-label">School Overview</div>
        <h2 class="section-maya">Where Business Meets<br><em>Purpose</em></h2>
        <p>The School of Commerce and Management at Maya Devi University is dedicated to shaping future leaders by blending academic excellence with innovation, ethics, and social responsibility. With a vision to be a center of excellence in business education, the School prepares students to become competent professionals and visionary leaders.</p>
        <p>Our programs are designed to deliver a dynamic and practical learning experience, integrating strong theoretical foundations with real-world business exposure. Supported by modern infrastructure, industry collaborations, and research-driven teaching, students develop critical management skills, entrepreneurial thinking, and strategic problem-solving abilities.</p>
        <p>Through case studies, internships, global perspectives, industrial visits, and an emphasis on sustainability and inclusivity, the School empowers students to address real-world business challenges with confidence.</p>
        <br>
        <a href="assets/uploads/fee/Commerce_Management_m.pdf" class="btn-outline">Download Fee Structure ↓</a>
      </div>
      <div class="reveal-right" style="position:relative;">
        <div class="about-img-wrap">
          <img src="assets/uploads/e-school.webp" alt="School of Commerce and Management" onerror="this.style.background='linear-gradient(135deg,#0d1f4a,#0a1628)';this.style.display='block';this.src=''">
          <div class="about-badge-float">
            <strong>2024</strong>
            <span>Established</span>
          </div>
        </div>
        <div class="about-corner-tag">Top Ranked</div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- ═══════════════════════ STATS ═══════════════════════ -->
<section class="stats-section">
  <div class="stats-grid">
    <div class="stat-item reveal delay-1">
      <span class="stat-icon">📚</span>
      <div class="stat-num"><span class="counter-num" data-target="20">20</span><span class="stat-suffix">+</span></div>
      <div class="stat-label">Programs Offered</div>
    </div>
    <div class="stat-item reveal delay-2">
      <span class="stat-icon">🏆</span>
      <div class="stat-num"><span class="counter-num" data-target="600">600</span><span class="stat-suffix">+</span></div>
      <div class="stat-label">Students Placed</div>
    </div>
    <div class="stat-item reveal delay-3">
      <span class="stat-icon">💼</span>
      <div class="stat-num"><span class="counter-num" data-target="22">22</span><span class="stat-suffix"> LPA</span></div>
      <div class="stat-label">Highest Package</div>
    </div>
    <div class="stat-item reveal delay-4">
      <span class="stat-icon">🌐</span>
      <div class="stat-num"><span class="counter-num" data-target="75">75</span><span class="stat-suffix">+</span></div>
      <div class="stat-label">Industry Partners</div>
    </div>
  </div>
</section>

<!-- ═══════════════════════ COURSES ═══════════════════════ -->
<section id="courses" class="section-pad">
  <div class="section-inner">
    <div class="reveal" style="margin-bottom:48px;">
      <div class="section-label">Academic Programs</div>
      <h2 class="section-maya">Industry-Focused<br><em>Degrees</em> That Matter</h2>
    </div>
    <div class="reveal delay-2">
      <div class="course-tabs">
        <button class="tab-btn active" onclick="switchTab('ug', this)">Undergraduate</button>
        <button class="tab-btn" onclick="switchTab('pg', this)">Masters Programs</button>
        <button class="tab-btn" onclick="switchTab('phd', this)">Doctoral</button>
      </div>
    </div>

    <!-- UG COURSES -->
    <div id="tab-ug" class="tab-content active courses-grid">
      <div class="course-card-maya reveal delay-1">
        <div class="course-img-maya"><img src="assets/uploads/bba.jpg" alt="BBA Human Resource"></div>
        <div class="course-main-maya">
          <span class="course-tag">BBA</span>
          <h4>BBA Human Resource</h4>
          <p>BBA in Human Resource Management trains students in recruitment, employee relations, training, and leadership skills.</p>
          <div class="course-meta-maya"><span>⚡ 125 Credits</span><span>📅 3 Years</span></div>
          <a href="bachelor-of-business-administration.php" class="course-cta">Apply Now</a>
        </div>
      </div>
      <div class="course-card-maya reveal delay-2">
        <div class="course-img-maya"><img src="assets/uploads/bba-1.jpg" alt="BBA FinTech"></div>
        <div class="course-main-maya">
          <span class="course-tag">BBA</span>
          <h4>BBA FinTech</h4>
          <p>Focuses on financial planning, investment analysis, budgeting, and corporate decision-making.</p>
          <div class="course-meta-maya"><span>⚡ 125 Credits</span><span>📅 3 Years</span></div>
          <a href="bachelor-of-business-administration.php" class="course-cta">Apply Now</a>
        </div>
      </div>
      <div class="course-card-maya reveal delay-3">
        <div class="course-img-maya"><img src="assets/uploads/bba-2.jpeg" alt="BBA Marketing"></div>
        <div class="course-main-maya">
          <span class="course-tag">BBA</span>
          <h4>BBA Marketing Management</h4>
          <p>Develops expertise in market research, branding, sales strategies, and digital marketing.</p>
          <div class="course-meta-maya"><span>⚡ 125 Credits</span><span>📅 3 Years</span></div>
          <a href="bachelor-of-business-administration.php" class="course-cta">Apply Now</a>
        </div>
      </div>
      <div class="course-card-maya reveal delay-4">
        <div class="course-img-maya"><img src="assets/uploads/bba-3.jpeg" alt="BBA Digital Marketing"></div>
        <div class="course-main-maya">
          <span class="course-tag">BBA</span>
          <h4>BBA Digital Marketing</h4>
          <p>Trains students in SEO, social media marketing, content creation, and digital branding.</p>
          <div class="course-meta-maya"><span>⚡ 125 Credits</span><span>📅 3 Years</span></div>
          <a href="bachelor-of-business-administration.php" class="course-cta">Apply Now</a>
        </div>
      </div>
      <div class="course-card-maya reveal delay-1">
        <div class="course-img-maya"><img src="assets/uploads/aviation.webp" alt="BBA Aviation"></div>
        <div class="course-main-maya">
          <span class="course-tag">BBA</span>
          <h4>BBA Aviation Management</h4>
          <p>Prepares students for airline operations, airport management, and aviation business roles.</p>
          <div class="course-meta-maya"><span>⚡ 125 Credits</span><span>📅 3 Years</span></div>
          <a href="bachelor-of-business-administration.php" class="course-cta">Apply Now</a>
        </div>
      </div>
      <div class="course-card-maya reveal delay-2">
        <div class="course-img-maya"><img src="assets/uploads/bba-5.jpg" alt="BBA Logistics"></div>
        <div class="course-main-maya">
          <span class="course-tag">BBA</span>
          <h4>BBA Logistic Management</h4>
          <p>Develops expertise in supply chain, transportation, and operations management.</p>
          <div class="course-meta-maya"><span>⚡ 125 Credits</span><span>📅 3 Years</span></div>
          <a href="bachelor-of-business-administration.php" class="course-cta">Apply Now</a>
        </div>
      </div>
      <div class="course-card-maya reveal delay-3">
        <div class="course-img-maya"><img src="assets/uploads/bba-6.jpg" alt="BBA Business Analytics"></div>
        <div class="course-main-maya">
          <span class="course-tag">BBA</span>
          <h4>BBA Business Analytics</h4>
          <p>Develops expertise in business intelligence and industry-focused analytical applications.</p>
          <div class="course-meta-maya"><span>⚡ 125 Credits</span><span>📅 3 Years</span></div>
          <a href="bachelor-of-business-administration.php" class="course-cta">Apply Now</a>
        </div>
      </div>
      <div class="course-card-maya reveal delay-4">
        <div class="course-img-maya"><img src="assets/uploads/bba-7.jpg" alt="BBA Travel Tourism"></div>
        <div class="course-main-maya">
          <span class="course-tag">BBA</span>
          <h4>BBA Travel &amp; Tourism Management</h4>
          <p>Develops expertise in tourism, tour management, destination marketing, and hospitality.</p>
          <div class="course-meta-maya"><span>⚡ 125 Credits</span><span>📅 3 Years</span></div>
          <a href="bachelor-of-business-administration.php" class="course-cta">Apply Now</a>
        </div>
      </div>
      <div class="course-card-maya reveal delay-1">
        <div class="course-img-maya"><img src="assets/uploads/bcom.jpg" alt="BCom Finance"></div>
        <div class="course-main-maya">
          <span class="course-tag">B.Com</span>
          <h4>B.Com (Hons) – Finance</h4>
          <p>Develops expertise in financial analysis, investments, accounting, and corporate finance.</p>
          <div class="course-meta-maya"><span>⚡ 125 Credits</span><span>📅 3 Years</span></div>
          <a href="bachelor-of-commerce.php" class="course-cta">Apply Now</a>
        </div>
      </div>
      <div class="course-card-maya reveal delay-2">
        <div class="course-img-maya"><img src="assets/uploads/tax.webp" alt="BCom Taxation"></div>
        <div class="course-main-maya">
          <span class="course-tag">B.Com</span>
          <h4>B.Com (Hons) – Taxation</h4>
          <p>Focuses on tax planning, compliance, auditing, and financial reporting.</p>
          <div class="course-meta-maya"><span>⚡ 125 Credits</span><span>📅 3 Years</span></div>
          <a href="bachelor-of-commerce.php" class="course-cta">Apply Now</a>
        </div>
      </div>
      <div class="course-card-maya reveal delay-3">
        <div class="course-img-maya"><img src="assets/uploads/accounting.jpg" alt="BCom Accounting"></div>
        <div class="course-main-maya">
          <span class="course-tag">B.Com</span>
          <h4>B.Com (Hons) – Accounting</h4>
          <p>Builds skills in bookkeeping, auditing, financial reporting, and corporate accounting.</p>
          <div class="course-meta-maya"><span>⚡ 125 Credits</span><span>📅 3 Years</span></div>
          <a href="bachelor-of-commerce.php" class="course-cta">Apply Now</a>
        </div>
      </div>
    </div>

    <!-- PG / MASTERS COURSES -->
    <div id="tab-pg" class="tab-content pg-grid">
      <div class="course-card-maya reveal delay-1">
        <div class="course-img-maya"><img src="assets/uploads/Agribusiness-Management.jpg" alt="MBA Agri Business"></div>
        <div class="course-main-maya">
          <span class="course-tag">MBA</span>
          <h4>MBA – Agri Business Management</h4>
          <p>Two-year postgraduate program focused on agribusiness operations, agricultural marketing, rural finance, and supply chain management.</p>
          <div class="course-meta-maya"><span>⚡ 80 Credits</span><span>📅 2 Years</span></div>
          <a href="best-masters-of-business-administration-agri-business-management-college-in-dehradun.php" class="course-cta">Apply Now</a>
        </div>
      </div>
      <div class="course-card-maya reveal delay-2">
        <div class="course-img-maya"><img src="assets/uploads/mba-business.jpg" alt="MBA Business Analytics"></div>
        <div class="course-main-maya">
          <span class="course-tag">MBA</span>
          <h4>MBA – Business Analytics</h4>
          <p>Two-year postgraduate program focused on data analysis, predictive modeling, and data-driven strategic decision-making.</p>
          <div class="course-meta-maya"><span>⚡ 80 Credits</span><span>📅 2 Years</span></div>
          <a href="best-masters-of-business-administration-business-analytics-college-in-dehradun.php" class="course-cta">Apply Now</a>
        </div>
      </div>
      <div class="course-card-maya reveal delay-3">
        <div class="course-img-maya"><img src="assets/uploads/mba-digital.jpg" alt="MBA Digital Marketing"></div>
        <div class="course-main-maya">
          <span class="course-tag">MBA</span>
          <h4>MBA – Digital Marketing</h4>
          <p>Two-year postgraduate program focused on digital strategy, SEO, social media marketing, and online brand management.</p>
          <div class="course-meta-maya"><span>⚡ 80 Credits</span><span>📅 2 Years</span></div>
          <a href="best-masters-of-business-administration-digital-marketing-college-in-dehradun.php" class="course-cta">Apply Now</a>
        </div>
      </div>
      <div class="course-card-maya reveal delay-4">
        <div class="course-img-maya"><img src="assets/uploads/mba-fintech.webp" alt="MBA FinTech"></div>
        <div class="course-main-maya">
          <span class="course-tag">MBA</span>
          <h4>MBA – FinTech</h4>
          <p>Two-year postgraduate program focused on digital banking, blockchain, financial analytics, and financial technology innovation.</p>
          <div class="course-meta-maya"><span>⚡ 80 Credits</span><span>📅 2 Years</span></div>
          <a href="best-masters-of-business-administration-fintech-college-in-dehradun.php" class="course-cta">Apply Now</a>
        </div>
      </div>
      <div class="course-card-maya reveal delay-1">
        <div class="course-img-maya"><img src="assets/uploads/mba-hr.jpg" alt="MBA HR"></div>
        <div class="course-main-maya">
          <span class="course-tag">MBA</span>
          <h4>MBA – Human Resource Management</h4>
          <p>Two-year postgraduate program focused on talent management, organizational behavior, and strategic HR practices.</p>
          <div class="course-meta-maya"><span>⚡ 80 Credits</span><span>📅 2 Years</span></div>
          <a href="best-masters-of-business-administration-human-resource-college-in-dehradun.php" class="course-cta">Apply Now</a>
        </div>
      </div>
      <div class="course-card-maya reveal delay-2">
        <div class="course-img-maya"><img src="assets/uploads/mba-logistic.jpg" alt="MBA Logistics"></div>
        <div class="course-main-maya">
          <span class="course-tag">MBA</span>
          <h4>MBA – Logistic Management</h4>
          <p>Two-year postgraduate program focused on supply chain management, transportation planning, and logistics operations.</p>
          <div class="course-meta-maya"><span>⚡ 80 Credits</span><span>📅 2 Years</span></div>
          <a href="best-masters-of-business-administration-logistic-management-college-in-dehradun.php" class="course-cta">Apply Now</a>
        </div>
      </div>
      <div class="course-card-maya reveal delay-3">
        <div class="course-img-maya"><img src="assets/uploads/mba-marketing.webp" alt="MBA Marketing"></div>
        <div class="course-main-maya">
          <span class="course-tag">MBA</span>
          <h4>MBA – Marketing Management</h4>
          <p>Two-year postgraduate program focused on consumer behavior, branding, market research, and strategic marketing.</p>
          <div class="course-meta-maya"><span>⚡ 80 Credits</span><span>📅 2 Years</span></div>
          <a href="best-masters-of-business-administration-marketing-management-college-in-dehradun.php" class="course-cta">Apply Now</a>
        </div>
      </div>
      <div class="course-card-maya reveal delay-4">
        <div class="course-img-maya"><img src="assets/uploads/mba-pharma.jpg" alt="MBA Pharma"></div>
        <div class="course-main-maya">
          <span class="course-tag">MBA</span>
          <h4>MBA – Pharmaceutical Management</h4>
          <p>Two-year postgraduate program focused on pharmaceutical marketing, healthcare management, and regulatory affairs.</p>
          <div class="course-meta-maya"><span>⚡ 80 Credits</span><span>📅 2 Years</span></div>
          <a href="best-masters-of-business-administration-pharmaceutical-management-college-in-dehradun.php" class="course-cta">Apply Now</a>
        </div>
      </div>
      <div class="course-card-maya reveal delay-1">
        <div class="course-img-maya"><img src="assets/uploads/mba-sports.png" alt="MBA Sports"></div>
        <div class="course-main-maya">
          <span class="course-tag">MBA</span>
          <h4>MBA – Sports Management</h4>
          <p>Two-year postgraduate program focused on sports marketing, event management, sports finance, and athlete management.</p>
          <div class="course-meta-maya"><span>⚡ 80 Credits</span><span>📅 2 Years</span></div>
          <a href="best-masters-of-business-administration-sports-management-college-in-dehradun.php" class="course-cta">Apply Now</a>
        </div>
      </div>
      <div class="course-card-maya reveal delay-2">
        <div class="course-img-maya"><img src="assets/uploads/mba-travel.jpg" alt="MBA Travel Tourism"></div>
        <div class="course-main-maya">
          <span class="course-tag">MBA</span>
          <h4>MBA – Travel &amp; Tourism</h4>
          <p>Two-year postgraduate program focused on tourism management, hospitality operations, and destination marketing.</p>
          <div class="course-meta-maya"><span>⚡ 80 Credits</span><span>📅 2 Years</span></div>
          <a href="best-masters-of-business-administration-travel-and-tourism-college-in-dehradun.php" class="course-cta">Apply Now</a>
        </div>
      </div>
      <div class="course-card-maya reveal delay-3">
        <div class="course-img-maya"><img src="assets/uploads/m-com.jpg" alt="MCom"></div>
        <div class="course-main-maya">
          <span class="course-tag">M.Com</span>
          <h4>Masters of Commerce (M.Com)</h4>
          <p>Two-year postgraduate program focused on advanced studies in commerce, finance, accounting, and business management.</p>
          <div class="course-meta-maya"><span>⚡ 96 Credits</span><span>📅 2 Years</span></div>
          <a href="best-master-of-commerce-college-in-dehradun.php" class="course-cta">Apply Now</a>
        </div>
      </div>
    </div>

    <!-- PHD -->
    <div id="tab-phd" class="tab-content phd-grid">
      <div class="course-card-maya reveal delay-1">
        <div class="course-img-maya"><img src="assets/uploads/phd.webp" alt="PhD Program"></div>
        <div class="course-main-maya">
          <span class="course-tag">Doctoral</span>
          <h4>Ph.D Program</h4>
          <p>Full-time doctoral research program focused on advanced study and original research in management and commerce domains.</p>
          <div class="course-meta-maya"><span>⚡ 125 Credits</span><span>📅 Min. 2 Years</span></div>
          <a href="best-university-for-phd-in-dehradun-uttarakhand.php" class="course-cta">Apply Now</a>
        </div>
      </div>
    </div>

  </div>
</section>
<section id="emversity" class="emv-section section-pad">
  <div class="emv-noise"></div>
  <div class="emv-glow-orb emv-orb-a"></div>
  <div class="emv-glow-orb emv-orb-b"></div>
  <div class="emv-particles-wrap" id="emvDots"></div>
 
  <div class="section-inner emv-inner">
 
    <!-- ── TOP LABEL (matches page style) ── -->
    <div class="reveal" style="margin-bottom:48px;">
      <div class="section-label">Industry Skilling Partner</div>
      <h2 class="section-maya">Powered by <em>Emversity</em></h2>
      <p style="color:var(--text-muted);line-height:1.8;max-width:600px;font-size:1rem;margin-top:12px;">
        Every student at MDU gets access to Emversity's industry-grade skilling ecosystem — bridging academics with real employability.
      </p>
    </div>
 
    <!-- ── FEATURE CARDS ── -->
    <div class="emv-cards-row reveal delay-1">
 
      <div class="emv-card">
        <div class="emv-card-icon-ring">
          <svg viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="7" y="11" width="30" height="22" rx="4" stroke="var(--gold)" stroke-width="2"/>
            <path d="M15 22h14M15 17h9" stroke="var(--gold)" stroke-width="2" stroke-linecap="round"/>
            <circle cx="33" cy="13" r="4.5" fill="var(--navy-mid)"/>
            <path d="M32 13l1 1 2-2" stroke="var(--emerald)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h5>Industry-Aligned Curriculum</h5>
        <p>Courses co-designed with top employers to match real-world management and commerce skill demands.</p>
        <div class="emv-card-bar"></div>
      </div>
 
      <div class="emv-card">
        <div class="emv-card-icon-ring">
          <svg viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="22" cy="15" r="7" stroke="var(--gold)" stroke-width="2"/>
            <path d="M9 36c0-7.18 5.82-13 13-13s13 5.82 13 13" stroke="var(--gold)" stroke-width="2" stroke-linecap="round"/>
            <path d="M31 10l2.5 2.5L38 8" stroke="var(--emerald)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h5>Sessions by Industry Experts</h5>
        <p>Live masterclasses and workshops led by professionals from leading business and tech organizations.</p>
        <div class="emv-card-bar"></div>
      </div>
 
      <div class="emv-card">
        <div class="emv-card-icon-ring">
          <svg viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="8" y="14" width="16" height="18" rx="2" stroke="var(--gold)" stroke-width="2"/>
            <path d="M24 21h8a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H24" stroke="var(--gold)" stroke-width="2"/>
            <circle cx="16" cy="10" r="3.5" stroke="var(--gold)" stroke-width="2"/>
            <path d="M32 13l4-4M34 9h4.5v4.5" stroke="var(--emerald)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h5>AR &amp; VR Skill Labs</h5>
        <p>Next-gen immersive labs on campus for business simulations and experiential learning environments.</p>
        <div class="emv-card-bar"></div>
      </div>
 
      <div class="emv-card">
        <div class="emv-card-icon-ring">
          <svg viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 29c0-2.5 1.8-4.5 4.5-5.5l6.5-2.5 6.5 2.5c2.7 1 4.5 3 4.5 5.5" stroke="var(--gold)" stroke-width="2" stroke-linecap="round"/>
            <circle cx="22" cy="15" r="5.5" stroke="var(--gold)" stroke-width="2"/>
            <path d="M7 33h30" stroke="var(--gold)" stroke-width="2" stroke-linecap="round"/>
            <path d="M18 37.5h8" stroke="var(--emerald)" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </div>
        <h5>Internship Assistance</h5>
        <p>Dedicated placement support through Emversity's network ensuring guaranteed internship opportunities.</p>
        <div class="emv-card-bar"></div>
      </div>
 
    </div>
 
    <!-- ── FREE LAPTOP BANNER ── -->
    <div class="emv-offer-banner reveal delay-2">
 
      <div class="emv-offer-left">
        <div class="emv-laptop-svg-wrap">
          <svg viewBox="0 0 100 70" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="10" y="5" width="80" height="50" rx="6" fill="var(--navy-mid)" stroke="var(--gold)" stroke-width="1.5"/>
            <rect x="17" y="11" width="66" height="38" rx="2" fill="url(#mgGrad)"/>
            <rect x="0" y="59" width="100" height="8" rx="3" fill="#0d1f4a"/>
            <rect x="38" y="55" width="24" height="5" rx="2" fill="var(--gold)"/>
            <!-- Tiny bar chart on screen -->
            <rect x="28" y="34" width="6" height="10" rx="1" fill="var(--emerald)" opacity=".8"/>
            <rect x="37" y="28" width="6" height="16" rx="1" fill="var(--teal)" opacity=".8"/>
            <rect x="46" y="22" width="6" height="22" rx="1" fill="var(--emerald)" opacity=".9"/>
            <rect x="55" y="31" width="6" height="13" rx="1" fill="var(--gold)" opacity=".8"/>
            <rect x="64" y="25" width="6" height="19" rx="1" fill="var(--teal)" opacity=".7"/>
            <defs>
              <linearGradient id="mgGrad" x1="17" y1="11" x2="83" y2="49" gradientUnits="userSpaceOnUse">
                <stop offset="0%" stop-color="#0a1628"/>
                <stop offset="100%" stop-color="#11234f"/>
              </linearGradient>
            </defs>
          </svg>
        </div>
        <div class="emv-offer-text">
          <span class="emv-free-pill">FREE</span>
          <h3>Laptop <span>Offer!</span></h3>
          <p>For the <strong>First 20 Admissions</strong> — get a brand-new laptop absolutely free with your enrollment at MDU.</p>
        </div>
      </div>
 
      <div class="emv-offer-right">
        <a href="https://admissions.maya.edu.in" class="btn-primary emv-grab-btn">
          Grab Your Seat
          <svg viewBox="0 0 20 20" fill="none" width="16" height="16"><path d="M4 10h12M11 5l5 5-5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <p class="emv-urgency">⚡ Limited seats — don't miss out!</p>
      </div>
 
      <!-- Animated shine sweep -->
      <div class="emv-banner-shine"></div>
    </div>
 
    <!-- ── EMVERSITY LOGO STRIP ── -->
    <div class="emv-logo-strip reveal delay-3">
  <span class="emv-collab-label">In collaboration with</span>
  <div class="emv-logo-box">
    <svg viewBox="0 0 260 52" fill="none" xmlns="http://www.w3.org/2000/svg"
         aria-label="Emversity — Industry Skilling Partner"
         style="width:220px; height:auto; display:block;">
 
      <!-- Double-chevron brand mark (faithful to screenshot: navy + gold) -->
      <polyline points="6,26 20,8 34,26"
                stroke="#0f1f45" stroke-width="5"
                stroke-linecap="round" stroke-linejoin="round" fill="none"/>
      <polyline points="20,26 34,8 48,26"
                stroke="#d8a52d" stroke-width="5"
                stroke-linecap="round" stroke-linejoin="round" fill="none"/>
 
      <!-- Wordmark -->
      <text x="58" y="34"
            font-family="'Syne','Montserrat','Segoe UI',sans-serif"
            font-weight="800"
            font-size="23"
            fill="#0f1f45"
            letter-spacing="0.5">EMVERSITY</text>
 
      <!-- Tagline -->
      <text x="58" y="47"
            font-family="'DM Sans','Segoe UI',sans-serif"
            font-weight="500"
            font-size="9"
            fill="#666"
            letter-spacing="2">INDUSTRY SKILLING PARTNER</text>
    </svg>
  </div>
</div>
 
  </div>
</section>
<div class="divider"></div>
<!-- ═══════════════════════ END EMVERSITY SECTION ═══════════════════════ -->
 
 
 
 
<!-- ══ STYLES — paste inside your existing <style> tag ══ -->
<style>
/* ============================================================
   EMVERSITY SECTION  —  Commerce & Management page
============================================================ */
.emv-section {
  position: relative;
  background: linear-gradient(160deg, #0a1628 0%, #0b1c40 55%, #071120 100%);
  overflow: hidden;
}
 
/* Ambient orbs */
.emv-glow-orb {
  position: absolute;
  border-radius: 50%;
  filter: blur(90px);
  pointer-events: none;
  animation: emvOrbFloat 9s ease-in-out infinite alternate;
}
.emv-orb-a {
  width: 480px; height: 480px;
  background: radial-gradient(circle, rgba(0,135,90,0.14) 0%, transparent 70%);
  top: -120px; right: -80px;
}
.emv-orb-b {
  width: 320px; height: 320px;
  background: radial-gradient(circle, rgba(216,165,45,0.1) 0%, transparent 70%);
  bottom: 0; left: -60px;
  animation-delay: 4s;
}
@keyframes emvOrbFloat {
  from { transform: translateY(0) scale(1); }
  to   { transform: translateY(-28px) scale(1.06); }
}
 
/* Noise texture overlay */
.emv-noise {
  position: absolute; inset: 0; pointer-events: none;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
  opacity: 0.6;
}
 
/* Floating particles */
.emv-particles-wrap { position: absolute; inset: 0; pointer-events: none; }
.emv-dot {
  position: absolute; border-radius: 50%;
  background: rgba(216,165,45,0.55);
  animation: emvDotRise linear infinite;
}
@keyframes emvDotRise {
  0%   { transform: translateY(0); opacity: 0.7; }
  100% { transform: translateY(-140px) scale(0.3); opacity: 0; }
}
 
.emv-inner { position: relative; z-index: 2; }
 
/* ── FEATURE CARDS ── */
.emv-cards-row {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
  margin-bottom: 36px;
}
@media (max-width: 1024px) { .emv-cards-row { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 580px)  { .emv-cards-row { grid-template-columns: 1fr; } }
 
.emv-card {
  background: var(--card-bg);
  border: 1px solid var(--border);
  border-radius: 16px;
  padding: 28px 22px 24px;
  position: relative;
  overflow: hidden;
  transition: transform 0.35s cubic-bezier(.22,1,.36,1),
              border-color 0.35s ease,
              box-shadow 0.35s ease;
}
.emv-card:hover {
  transform: translateY(-8px);
  border-color: rgba(0,135,90,0.5);
  box-shadow: 0 24px 60px rgba(0,0,0,0.45), 0 0 0 1px rgba(0,135,90,0.25);
}
.emv-card:hover .emv-card-bar { width: 100%; }
 
.emv-card-bar {
  position: absolute; bottom: 0; left: 0;
  height: 2px; width: 0;
  background: linear-gradient(90deg, var(--emerald), var(--teal));
  transition: width 0.5s ease;
}
 
.emv-card-icon-ring {
  width: 54px; height: 54px;
  border-radius: 14px;
  background: rgba(216,165,45,0.08);
  border: 1px solid rgba(216,165,45,0.2);
  display: flex; align-items: center; justify-content: center;
  margin-bottom: 18px;
  transition: background 0.3s ease, border-color 0.3s ease;
}
.emv-card:hover .emv-card-icon-ring {
  background: rgba(0,135,90,0.15);
  border-color: rgba(0,135,90,0.4);
}
.emv-card-icon-ring svg { width: 30px; height: 30px; }
 
.emv-card h5 {
  font-family: 'Syne', sans-serif;
  font-size: 0.97rem; font-weight: 700;
  color: #fff; margin-bottom: 8px; line-height: 1.3;
}
.emv-card p {
  font-size: 0.82rem; color: var(--text-muted);
  line-height: 1.65; margin: 0;
}
 
/* ── FREE LAPTOP BANNER ── */
.emv-offer-banner {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 28px;
  background: linear-gradient(120deg,
    rgba(0,135,90,0.10) 0%,
    rgba(216,165,45,0.08) 50%,
    rgba(0,163,163,0.07) 100%);
  border: 1px solid rgba(216,165,45,0.3);
  border-radius: 20px;
  padding: 36px 40px;
  margin-bottom: 48px;
  overflow: hidden;
}
 
/* Shine sweep */
.emv-banner-shine {
  position: absolute; top: -50%; left: -30%;
  width: 50%; height: 200%;
  background: linear-gradient(115deg,
    transparent 30%,
    rgba(255,255,255,0.04) 50%,
    transparent 70%);
  animation: emvShine 5s ease-in-out infinite;
  pointer-events: none;
}
@keyframes emvShine {
  0%   { transform: translateX(-100%) rotate(15deg); }
  55%  { transform: translateX(400%) rotate(15deg); }
  100% { transform: translateX(400%) rotate(15deg); }
}
 
.emv-offer-left {
  display: flex; align-items: center;
  gap: 28px; flex: 1; min-width: 260px;
}
 
.emv-laptop-svg-wrap svg {
  width: 100px; height: auto;
  filter: drop-shadow(0 8px 24px rgba(0,135,90,0.4));
  animation: emvLapFloat 3.5s ease-in-out infinite;
}
@keyframes emvLapFloat {
  0%, 100% { transform: translateY(0); }
  50%       { transform: translateY(-9px); }
}
 
.emv-free-pill {
  display: inline-block;
  background: var(--gold);
  color: #1a0f00;
  font-family: 'Syne', sans-serif;
  font-size: 10px; font-weight: 800;
  letter-spacing: 2.5px; text-transform: uppercase;
  padding: 4px 14px; border-radius: 50px;
  margin-bottom: 10px;
}
.emv-offer-text h3 {
  font-family: 'Syne', sans-serif;
  font-size: clamp(1.4rem, 3vw, 2rem);
  font-weight: 800; color: #fff;
  line-height: 1.15; margin-bottom: 10px;
}
.emv-offer-text h3 span { color: var(--gold); }
.emv-offer-text p { color: var(--text-muted); font-size: 0.88rem; line-height: 1.6; margin: 0; }
.emv-offer-text p strong { color: var(--gold); }
 
.emv-offer-right { text-align: center; }
 
/* Reuse .btn-primary from page but override size */
.emv-grab-btn {
  font-size: 0.95rem !important;
  padding: 14px 30px !important;
  box-shadow: 0 8px 28px rgba(0,135,90,0.4) !important;
}
.emv-urgency {
  color: var(--text-muted); font-size: 12px;
  margin-top: 12px; margin-bottom: 0;
  letter-spacing: 0.3px;
}
 
/* ── LOGO STRIP ── */
.emv-logo-strip {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 20px;
  flex-wrap: wrap;
}
.emv-collab-label {
  font-size: 12px;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: var(--text-muted, #8899bb);
  font-family: 'DM Sans', sans-serif;
}
.emv-logo-box {
  background: #fff;
  border-radius: 14px;
  padding: 12px 28px;           /* more breathing room */
  display: inline-flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 24px rgba(0,0,0,0.25);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  overflow: visible;             /* never clip the SVG */
  min-width: 260px;              /* guarantees enough space */
}
.emv-logo-box:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 36px rgba(0,0,0,0.35);
}
.emv-logo-box svg {
  width: 220px;
  height: auto;
  display: block;
  overflow: visible;             /* SVG itself won't clip either */
}
 
/* ── RESPONSIVE TWEAKS ── */
@media (max-width: 768px) {
  .emv-offer-banner { padding: 28px 20px; }
  .emv-offer-left { flex-direction: column; align-items: flex-start; gap: 16px; }
  .emv-laptop-svg-wrap svg { width: 70px; }
}
</style>
 
 
<!-- ══ JAVASCRIPT — paste INSIDE your existing <script> block at the bottom ══ -->
<script>
/* ── Emversity floating dots ── */
(function () {
  var wrap = document.getElementById('emvDots');
  if (!wrap) return;
  for (var i = 0; i < 20; i++) {
    var d = document.createElement('span');
    d.className = 'emv-dot';
    var size = Math.random() * 4 + 2;
    d.style.cssText = [
      'width:' + size + 'px',
      'height:' + size + 'px',
      'left:' + (Math.random() * 100) + '%',
      'top:' + (Math.random() * 100) + '%',
      'animation-duration:' + (Math.random() * 7 + 4) + 's',
      'animation-delay:' + (Math.random() * 6) + 's',
      'opacity:' + (Math.random() * 0.5 + 0.15)
    ].join(';');
    wrap.appendChild(d);
  }
})();
</script>
<div class="divider"></div>

<!-- ═══════════════════════ IBM SECTION ═══════════════════════ -->
<section id="ibm" class="ibm-section section-pad">
  <div class="section-inner">
    <div class="ibm-grid">
      <div class="reveal-left">
        <div class="ibm-badge-strip">
          <div class="ibm-logo-badge">IBM</div>
          <span class="ibm-x">×</span>
          <span class="mdu-text">Maya Devi University</span>
        </div>
        <h2 class="ibm-heading">Commerce &amp; Management<br>with an <em>IBM-powered edge.</em></h2>
        <p class="ibm-desc">Business careers now demand analytics, GenAI fluency, marketing intelligence, and sharper decision-making. The integrated IBM-linked pathway creates a stronger route to specialization and employability.</p>
        <div class="ibm-chips">
          <span class="ibm-chip">GenAI for B.Com</span>
          <span class="ibm-chip">GenAI for BBA/MBA</span>
          <span class="ibm-chip">AI in Business Analytics</span>
          <span class="ibm-chip">AI in Marketing</span>
          <span class="ibm-chip">Data Analytics &amp; Data Science</span>
          <span class="ibm-chip">FinTech &amp; Blockchain</span>
        </div>
        <div class="ibm-about-note">
          <strong>About IBM</strong>
          IBM is a globally recognized technology company known for innovation in artificial intelligence, analytics, enterprise technology, and digital transformation. That association adds stronger credibility and modern relevance to the student journey at MDU.
        </div>
        <a href="bachelor-of-business-administration.php" class="btn-ibm">Explore IBM-Linked Pathways →</a>
      </div>
      <div class="ibm-features-grid reveal-right">
        <div class="ibm-feat">
          <div class="ibm-feat-icon">🚀</div>
          <h5>Future Skills</h5>
          <p>Learn how business, analytics, and AI work together in the real market—gaining advantage over traditional graduates.</p>
        </div>
        <div class="ibm-feat">
          <div class="ibm-feat-icon">💎</div>
          <h5>Career Value</h5>
          <p>Build a management or commerce profile with stronger job relevance and future value in a tech-driven economy.</p>
        </div>
        <div class="ibm-feat">
          <div class="ibm-feat-icon">🏢</div>
          <h5>IBM Advantage</h5>
          <p>Create a business-ready profile shaped by modern tools, digital thinking, and future-facing market relevance.</p>
        </div>
        <div class="ibm-feat">
          <div class="ibm-feat-icon">🌍</div>
          <h5>Global Recognition</h5>
          <p>IBM's global presence in AI, analytics, and digital transformation adds premium credibility to your degree.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- ═══════════════════════ CAREER PROSPECTS ═══════════════════════ -->
<section id="careers" class="section-pad">
  <div class="section-inner">
    <div class="reveal" style="margin-bottom:48px;">
      <div class="section-label">Opportunities</div>
      <h2 class="section-maya">Career <span>Prospects 🚀</span></h2>
    </div>
    <div class="careers-grid">
      <div class="career-card reveal delay-1">
        <span class="career-icon">📊</span>
        <h5>Business Analyst</h5>
        <p>Analyze data and trends to provide insights for strategic decision-making across industries.</p>
      </div>
      <div class="career-card reveal delay-2">
        <span class="career-icon">📈</span>
        <h5>Marketing Manager</h5>
        <p>Design and implement marketing campaigns to promote products and services effectively.</p>
      </div>
      <div class="career-card reveal delay-3">
        <span class="career-icon">💼</span>
        <h5>Financial Consultant</h5>
        <p>Guide clients on investments, savings, and financial planning for long-term growth.</p>
      </div>
      <div class="career-card reveal delay-4">
        <span class="career-icon">🤝</span>
        <h5>HR Manager</h5>
        <p>Manage recruitment, training, and employee relations in organizations of all sizes.</p>
      </div>
      <div class="career-card reveal delay-1">
        <span class="career-icon">🏦</span>
        <h5>Investment Banker</h5>
        <p>Assist businesses with raising capital and managing mergers &amp; acquisitions.</p>
      </div>
      <div class="career-card reveal delay-2">
        <span class="career-icon">🧩</span>
        <h5>Management Consultant</h5>
        <p>Advise companies on improving efficiency and solving complex business challenges.</p>
      </div>
      <div class="career-card reveal delay-3">
        <span class="career-icon">🌐</span>
        <h5>Digital Marketing Specialist</h5>
        <p>Drive online presence through SEO, social media, and high-impact digital campaigns.</p>
      </div>
      <div class="career-card reveal delay-4">
        <span class="career-icon">📢</span>
        <h5>Business Development Manager</h5>
        <p>Identify new opportunities and build partnerships to expand business growth.</p>
      </div>
      <div class="career-card reveal delay-1">
        <span class="career-icon">🎯</span>
        <h5>Corporate Strategist</h5>
        <p>Formulate strategies to help companies achieve their long-term goals and vision.</p>
      </div>
      <div class="career-card reveal delay-2">
        <span class="career-icon">🚀</span>
        <h5>Entrepreneur</h5>
        <p>Launch and manage innovative ventures to create business value and social impact.</p>
      </div>
      <div class="career-card reveal delay-3">
        <span class="career-icon">⚙️</span>
        <h5>Operations Manager</h5>
        <p>Oversee daily operations ensuring efficiency, productivity, and quality delivery.</p>
      </div>
      <div class="career-card reveal delay-4">
        <span class="career-icon">📂</span>
        <h5>Project Manager</h5>
        <p>Plan, execute, and deliver projects while managing resources and timelines effectively.</p>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- ═══════════════════════ WHY CHOOSE US ═══════════════════════ -->
<section class="section-pad why-section">
  <div class="section-inner">
    <div class="why-grid">
      <div>
        <div class="reveal">
          <div class="section-label">Why MDU</div>
          <h2 class="section-maya">Why <em>Choose</em><br>Us? 🌟</h2>
          <p style="color:var(--text-muted);line-height:1.8;margin-bottom:40px;font-size:1rem;">Choosing the right place to pursue your education is a life-changing decision. At MDU, we go beyond conventional learning by offering an ecosystem of innovation, creativity, and global opportunities.</p>
        </div>
        <div class="why-features">
          <div class="why-feat reveal delay-1">
            <div class="why-feat-icon">🚀</div>
            <h5>Excellence in Education &amp; Innovation</h5>
            <p>A future-ready curriculum that balances theory with practical learning, ensuring students graduate with strong knowledge and essential skills.</p>
          </div>
          <div class="why-feat reveal delay-2">
            <div class="why-feat-icon">⚖️</div>
            <h5>Ethics Meets Knowledge</h5>
            <p>Beyond academics, we emphasize building responsible individuals who act with integrity, guided by strong values and social responsibility.</p>
          </div>
          <div class="why-feat reveal delay-3">
            <div class="why-feat-icon">🌍</div>
            <h5>Global Readiness</h5>
            <p>Exposure to diverse ideas, collaborations, and real-world experiences prepares students to thrive in a connected global environment.</p>
          </div>
          <div class="why-feat reveal delay-4">
            <div class="why-feat-icon">🔬</div>
            <h5>Research &amp; Creativity</h5>
            <p>We encourage curiosity, exploration, and innovative thinking, nurturing a spirit of discovery across all disciplines.</p>
          </div>
          <div class="why-feat reveal delay-5">
            <div class="why-feat-icon">🤝</div>
            <h5>Supportive, Inclusive Environment</h5>
            <p>A welcoming culture where every student is supported, mentored, and empowered to grow personally and professionally.</p>
          </div>
          <div class="why-feat reveal delay-6">
            <div class="why-feat-icon">📚</div>
            <h5>Commitment to Lifelong Learning</h5>
            <p>Education here inspires curiosity, critical thinking, and a passion for continuous growth throughout life.</p>
          </div>
        </div>
      </div>
      <div class="why-visual reveal-right">
        <div class="why-img-wrap">
          <img src="assets/uploads/computer.jpg" alt="Why Choose MDU" onerror="this.style.background='linear-gradient(135deg,#0d1f4a,#0a1628)';this.style.height='420px';this.src=''">
        </div>
        <div class="why-float-card">
          <strong>22 LPA</strong>
          <span>Highest Package</span>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- ═══════════════════════ TESTIMONIALS ═══════════════════════ -->
<section class="section-pad testimonials-section">
  <div class="section-inner">
    <div class="reveal" style="margin-bottom:48px;">
      <div class="section-label">Student Stories</div>
      <h2 class="section-maya">What Our <em>Students</em> Say</h2>
    </div>

    <!-- Swiper Testimonials -->
    <div class="swiper swiper-testimonial">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="testi-card">
            <div class="testi-stars">★★★★★</div>
            <img src="assets/uploads/testimoni-1.jpeg" alt="Riya Sharma" class="testi-avatar" onerror="this.style.display='none'">
            <p class="testi-text">"The School of Engineering provided me with excellent opportunities to learn, explore, and innovate. I secured a placement at Microsoft with a 42 LPA package!"</p>
            <div class="testi-name">Riya Sharma</div>
            <div class="testi-prog">BBA – Marketing</div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testi-card">
            <div class="testi-stars">★★★★★</div>
            <img src="assets/uploads/testimoni-2.jpeg" alt="Arjun Verma" class="testi-avatar" onerror="this.style.display='none'">
            <p class="testi-text">"State-of-the-art labs and practical exposure gave me an edge in the industry. Truly grateful for the faculty and support at MDU."</p>
            <div class="testi-name">Arjun Verma</div>
            <div class="testi-prog">MBA – Finance</div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testi-card">
            <div class="testi-stars">★★★★★</div>
            <img src="assets/uploads/testimoni-3.jpeg" alt="Sneha Gupta" class="testi-avatar" onerror="this.style.display='none'">
            <p class="testi-text">"Amazing mentors and inclusive culture. I gained not only knowledge but also confidence to excel in my career."</p>
            <div class="testi-name">Sneha Gupta</div>
            <div class="testi-prog">M.Com – Accounting</div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testi-card">
            <div class="testi-stars">★★★★★</div>
            <img src="assets/uploads/testimoni-4.jpeg" alt="Rahul Mehta" class="testi-avatar" onerror="this.style.display='none'">
            <p class="testi-text">"The placement cell at MDU is excellent. The exposure I got through internships and industry visits was unmatched."</p>
            <div class="testi-name">Rahul Mehta</div>
            <div class="testi-prog">BBA – Human Resource</div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- ═══════════════════════ BLOG (PHP DRIVEN - PLACEHOLDER) ═══════════════════════ -->
<!-- NOTE: In production, this section is PHP-driven. The markup below mirrors the original PHP output structure with the new dark design. -->
<section class="section-pad blog-section" id="blog">
  <div class="section-inner">
    <div class="reveal" style="margin-bottom:48px;">
      <div class="section-label">Know More</div>
      <h2 class="section-maya">Our <em>Blog</em></h2>
      <p style="color:var(--text-muted); margin-top:8px;">Insights and updates from Maya Devi University.</p>
    </div>
    <!-- PHP blog loop will render .blog-card-maya items here in production -->
    <!-- Static placeholder cards shown for design preview -->
    <!-- Blog section removed: no static blog post currently tagged for this department. -->

  </div>
</section>
<style>
  .event-area-maya{
    background: linear-gradient(135deg, #0a1628 0%, #0d1f4a 60%, #061228 100%);
  }
  .single-blog-maya{
    border: 1px solid #fff;
  }
.blog-active .single-blog {
  background: var(--navy);
    display: flex;
    flex-direction: column;
    border: 1px solid #fff !important;
    border-radius: 8px;
    overflow: hidden;
    margin: 10px;
    height: 100%;
}

.blog-active .blog-img {
    flex: 0 0 200px;
    overflow: hidden;
}

.blog-active .blog-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.blog-active .blog-content-wrap {
    display: flex;
    flex-direction: column;
    flex: 1;
    padding: 15px;
}
.blog-active .blog-content {
    flex: 1;
}
.blog-active::after {
    content: "";
    display: block;
    clear: both;
}
</style>
<!-- ═══════════════════════ CTA BANNER ═══════════════════════ -->
<section class="cta-banner">
  <div class="cta-inner">
    <div class="cta-text reveal-left">
      <h2>Ready to Shape Your Future?</h2>
      <p>Join thousands of students who've launched transformative careers through MDU's industry-aligned Commerce &amp; Management programs. Applications are open for 2025–26.</p>
    </div>
    <a href="https://admissions.maya.edu.in" class="btn-white reveal-right">Apply Now →</a>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
// ── SCROLL REVEAL ──
const revealAll = () => {
  document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(el => {
    const rect = el.getBoundingClientRect();
    const inView = rect.top < window.innerHeight * 0.88 && rect.bottom > window.innerHeight * 0.12;
    if (inView) el.classList.add('visible');
    else el.classList.remove('visible');
  });
};
window.addEventListener('scroll', revealAll, { passive: true });
window.addEventListener('resize', revealAll);
revealAll();

// ── COUNTER ──
let countersStarted = false;
const runCounters = () => {
  document.querySelectorAll('.counter-num').forEach(counter => {
    const target = +counter.getAttribute('data-target');
    const duration = 1800;
    const startTime = performance.now();
    const update = (t) => {
      const elapsed = t - startTime;
      const progress = Math.min(elapsed / duration, 1);
      const eased = 1 - Math.pow(1 - progress, 3);
      counter.textContent = Math.floor(eased * target);
      if (progress < 1) requestAnimationFrame(update);
      else counter.textContent = target;
    };
    requestAnimationFrame(update);
  });
};
const statsObs = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting && !countersStarted) {
      countersStarted = true;
      runCounters();
    }
  });
}, { threshold: 0.3 });
const statsSection = document.querySelector('.stats-section');
if (statsSection) statsObs.observe(statsSection);

// ── TAB SWITCH ──
function switchTab(id, btn) {
  document.querySelectorAll('.tab-content').forEach(t => { t.classList.remove('active'); t.style.display = 'none'; });
  document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  const target = document.getElementById('tab-' + id);
  target.classList.add('active');
  target.style.display = 'grid';
  setTimeout(revealAll, 50);
}
document.getElementById('tab-ug').style.display = 'grid';
document.getElementById('tab-pg').style.display = 'none';
document.getElementById('tab-phd').style.display = 'none';

// ── SWIPER ──
new Swiper('.swiper-testimonial', {
  slidesPerView: 1,
  spaceBetween: 24,
  loop: true,
  autoplay: { delay: 4000, disableOnInteraction: false },
  pagination: { el: '.swiper-pagination', clickable: true },
  breakpoints: {
    768: { slidesPerView: 2 },
    1024: { slidesPerView: 3 }
  }
});

// ── SLICK OVERRIDE ──
if ($.fn.slick) {
    $('.blog-active').slick('unslick').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<span class="b-navigation b-navigation-prev "><i class="fa fa-angle-left"></i></span>',
        nextArrow: '<span class="b-navigation b-navigation-next active"><i class="fa fa-angle-right"></i></span>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            }
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
      <summary class="mdu-faq-q">What MBA specializations are offered at Maya Devi University?</summary>
      <p class="mdu-faq-a">Maya Devi University offers MBA with specializations in Marketing, Finance, Human Resources, and Operations Management. The program is a 2-year full-time course.</p>
    </details>
    <details class="mdu-faq-item">
      <summary class="mdu-faq-q">What is the eligibility for MBA at Maya Devi University?</summary>
      <p class="mdu-faq-a">For MBA admission at Maya Devi University, candidates must hold a bachelor's degree with minimum 50% marks. Scores from CAT, MAT, or CMAT are accepted. Direct admission is also available based on merit.</p>
    </details>
    <details class="mdu-faq-item">
      <summary class="mdu-faq-q">What companies recruit MBA students from Maya Devi University?</summary>
      <p class="mdu-faq-a">MBA graduates from Maya Devi University are recruited by companies such as Amazon, Deloitte, American Express, HDFC Bank, Axis Bank, and various multinational consulting firms.</p>
    </details>
</section>

<?php require "common/footer.php"?>
</main>
</html>