<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>School of Computer Applications | Maya Devi University</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;600&family=IBM+Plex+Sans:wght@300;400;500;600;700&family=IBM+Plex+Serif:wght@400;600&display=swap" rel="stylesheet">
<style>
:root {
  --ibm-blue: #0f62fe;
  --ibm-dark: #11234f;
  --ibm-teal: #00a3a3;
  --ibm-gold: #d8a52d;
  --ibm-white: #f4f4f4;
  --ibm-black: #161616;
  --ibm-gray-10: #f4f4f4;
  --ibm-gray-20: #e0e0e0;
  --ibm-gray-50: #8d8d8d;
  --ibm-gray-80: #393939;
  --ibm-gray-90: #262626;
  --ibm-gray-100: #161616;
  --ibm-blue-light: #d0e2ff;
  --ibm-teal-light: #9ef0f0;
  --gradient-main: linear-gradient(135deg, #11234f 0%, #0f62fe 50%, #00a3a3 100%);
}

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

html { scroll-behavior: smooth; }

body {
  font-family: 'IBM Plex Sans', sans-serif;
  background: var(--ibm-black);
  color: var(--ibm-white);
  overflow-x: hidden;
  cursor: none;
}

/* Custom Cursor */
.cursor-dot {
  width: 8px; height: 8px;
  background: var(--ibm-blue);
  border-radius: 50%;
  position: fixed;
  top: 0; left: 0;
  pointer-events: none;
  z-index: 9999;
  transition: transform 0.1s ease;
}
.cursor-ring {
  width: 36px; height: 36px;
  border: 1.5px solid var(--ibm-teal);
  border-radius: 50%;
  position: fixed;
  top: 0; left: 0;
  pointer-events: none;
  z-index: 9998;
  transition: transform 0.18s ease, width 0.2s, height 0.2s, border-color 0.2s;
}
body:hover .cursor-ring { opacity: 1; }

/* Scroll animations */
.reveal {
  opacity: 0;
  transform: translateY(40px);
  transition: opacity 0.7s cubic-bezier(.4,0,.2,1), transform 0.7s cubic-bezier(.4,0,.2,1);
}
.reveal.visible {
  opacity: 1;
  transform: translateY(0);
}
.reveal-left {
  opacity: 0;
  transform: translateX(-50px);
  transition: opacity 0.7s cubic-bezier(.4,0,.2,1), transform 0.7s cubic-bezier(.4,0,.2,1);
}
.reveal-left.visible { opacity: 1; transform: translateX(0); }
.reveal-right {
  opacity: 0;
  transform: translateX(50px);
  transition: opacity 0.7s cubic-bezier(.4,0,.2,1), transform 0.7s cubic-bezier(.4,0,.2,1);
}
.reveal-right.visible { opacity: 1; transform: translateX(0); }
.reveal-scale {
  opacity: 0;
  transform: scale(0.88);
  transition: opacity 0.7s cubic-bezier(.4,0,.2,1), transform 0.7s cubic-bezier(.4,0,.2,1);
}
.reveal-scale.visible { opacity: 1; transform: scale(1); }

/* Delay helpers */
.d1 { transition-delay: 0.1s; }
.d2 { transition-delay: 0.2s; }
.d3 { transition-delay: 0.3s; }
.d4 { transition-delay: 0.4s; }
.d5 { transition-delay: 0.5s; }
.d6 { transition-delay: 0.6s; }

/* ─── HERO ─── */
.hero {
  min-height: 100vh;
  background: var(--gradient-main);
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: center;
  overflow: hidden;
}
.hero-grid {
  position: absolute; inset: 0;
  background-image:
    linear-gradient(rgba(255,255,255,0.04) 1px, transparent 1px),
    linear-gradient(90deg, rgba(255,255,255,0.04) 1px, transparent 1px);
  background-size: 60px 60px;
  animation: gridFloat 20s linear infinite;
}
@keyframes gridFloat {
  0% { transform: translateY(0); }
  100% { transform: translateY(60px); }
}
.hero-orb {
  position: absolute;
  border-radius: 50%;
  filter: blur(80px);
  animation: orbPulse 6s ease-in-out infinite alternate;
}
.hero-orb-1 { width: 500px; height: 500px; background: rgba(0,163,163,0.25); top: -100px; right: -100px; }
.hero-orb-2 { width: 380px; height: 380px; background: rgba(15,98,254,0.3); bottom: -80px; left: -60px; animation-delay: -3s; }
.hero-orb-3 { width: 260px; height: 260px; background: rgba(216,165,45,0.2); top: 40%; left: 40%; animation-delay: -1.5s; }
@keyframes orbPulse {
  from { transform: scale(1) translateY(0); opacity: 0.6; }
  to { transform: scale(1.15) translateY(-20px); opacity: 1; }
}

.hero-inner {
  position: relative; z-index: 2;
  max-width: 1200px;
  margin: 0 auto;
  padding: 100px 40px 60px;
  display: flex;
  align-items: center;
  gap: 60px;
}
.hero-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 6px 16px;
  border: 1px solid rgba(255,255,255,0.3);
  border-radius: 2px;
  font-family: 'IBM Plex Mono', monospace;
  font-size: 11px;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: var(--ibm-teal-light);
  margin-bottom: 24px;
  animation: fadeSlideDown 0.8s ease both;
}
.hero-badge::before {
  content: '';
  width: 6px; height: 6px;
  background: var(--ibm-teal);
  border-radius: 50%;
  animation: blink 1.4s ease-in-out infinite;
}
@keyframes blink { 0%,100% { opacity: 1; } 50% { opacity: 0.2; } }
@keyframes fadeSlideDown {
  from { opacity: 0; transform: translateY(-20px); }
  to { opacity: 1; transform: translateY(0); }
}

.hero-title {
  font-family: 'IBM Plex Serif', serif;
  font-size: clamp(2.8rem, 6vw, 5.5rem);
  font-weight: 600;
  line-height: 1.05;
  color: #fff;
  animation: fadeSlideUp 0.9s 0.2s ease both;
}
.hero-title span {
  display: block;
  color: transparent;
  -webkit-text-stroke: 1px rgba(255,255,255,0.5);
  font-style: italic;
}
@keyframes fadeSlideUp {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}

.hero-desc {
  font-size: 1.1rem;
  line-height: 1.75;
  color: rgba(255,255,255,0.75);
  max-width: 520px;
  margin-top: 20px;
  animation: fadeSlideUp 0.9s 0.35s ease both;
}

.hero-chips {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin-top: 28px;
  animation: fadeSlideUp 0.9s 0.5s ease both;
}
.hero-chip {
  padding: 7px 14px;
  background: rgba(255,255,255,0.1);
  border: 1px solid rgba(255,255,255,0.2);
  border-radius: 2px;
  font-family: 'IBM Plex Mono', monospace;
  font-size: 11px;
  color: #fff;
  letter-spacing: 0.5px;
  transition: background 0.2s, border-color 0.2s, transform 0.2s;
}
.hero-chip:hover { background: rgba(15,98,254,0.35); border-color: var(--ibm-blue); transform: translateY(-2px); }

.hero-cta-row {
  display: flex;
  gap: 16px;
  margin-top: 36px;
  animation: fadeSlideUp 0.9s 0.6s ease both;
}
.btn-primary {
  padding: 14px 28px;
  background: var(--ibm-blue);
  color: #fff;
  border: none;
  border-radius: 2px;
  font-family: 'IBM Plex Sans', sans-serif;
  font-size: 14px;
  font-weight: 600;
  cursor: pointer;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  transition: background 0.2s, transform 0.2s, box-shadow 0.2s;
  letter-spacing: 0.3px;
}
.btn-primary:hover { background: #0353e9; transform: translateY(-2px); box-shadow: 0 8px 24px rgba(15,98,254,0.4); }
.btn-outline {
  padding: 14px 28px;
  background: transparent;
  color: #fff;
  border: 1.5px solid rgba(255,255,255,0.5);
  border-radius: 2px;
  font-family: 'IBM Plex Sans', sans-serif;
  font-size: 14px;
  font-weight: 500;
  cursor: pointer;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  transition: border-color 0.2s, background 0.2s, transform 0.2s;
}
.btn-outline:hover { border-color: #fff; background: rgba(255,255,255,0.1); transform: translateY(-2px); }

.hero-logo-col {
  flex-shrink: 0;
  animation: fadeSlideUp 0.9s 0.4s ease both;
}
.logo-ring {
  width: 460px; height: 460px;
  border-radius: 50%;
  border: 2px solid rgba(255,255,255,0.2);
  padding: 6px;
  background: rgba(255,255,255,0.07);
  backdrop-filter: blur(10px);
  animation: rotateSlow 20s linear infinite;
}
.logo-ring img { width: 100%; height: 100%; border-radius: 50%; object-fit: cover; }
@keyframes rotateSlow { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
.logo-ring img { animation: rotateSlow 20s linear infinite reverse; }

/* Scroll indicator */
.scroll-indicator {
  position: absolute;
  bottom: 32px; left: 50%;
  transform: translateX(-50%);
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 8px;
  opacity: 0.5;
  animation: fadeSlideUp 1s 1s ease both;
}
.scroll-indicator span {
  font-family: 'IBM Plex Mono', monospace;
  font-size: 10px;
  letter-spacing: 2px;
  text-transform: uppercase;
}
.scroll-line {
  width: 1px; height: 40px;
  background: linear-gradient(to bottom, #fff, transparent);
  animation: scrollPulse 1.8s ease-in-out infinite;
}
@keyframes scrollPulse { 0%,100% { transform: scaleY(1); opacity: 0.5; } 50% { transform: scaleY(1.4); opacity: 1; } }

/* ─── SECTION WRAPPER ─── */
section {
  padding: 96px 40px;
}
.section-inner {
  max-width: 1200px;
  margin: 0 auto;
}
.section-label {
  font-family: 'IBM Plex Mono', monospace;
  font-size: 11px;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: var(--ibm-teal);
  margin-bottom: 12px;
  display: flex;
  align-items: center;
  gap: 10px;
}
.section-label::before {
  content: '';
  display: inline-block;
  width: 24px; height: 1px;
  background: var(--ibm-teal);
}
.section-title {
  font-family: 'IBM Plex Serif', serif;
  font-size: clamp(2rem, 4vw, 3.2rem);
  font-weight: 600;
  line-height: 1.15;
  color: #fff;
  margin-bottom: 16px;
}
.section-title em {
  font-style: italic;
  color: transparent;
  -webkit-text-stroke: 1px rgba(255,255,255,0.5);
}
.section-sub {
  font-size: 1.05rem;
  line-height: 1.7;
  color: rgba(255,255,255,0.6);
  max-width: 620px;
}

/* ─── ABOUT ─── */
.about-section { background: #1a1a1a; }
.about-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
  align-items: center;
  margin-top: 48px;
}
.about-text p {
  font-size: 1.02rem;
  line-height: 1.8;
  color: rgba(255,255,255,0.7);
  margin-bottom: 16px;
}
.about-download {
  margin-top: 28px;
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 12px 24px;
  border: 1.5px solid var(--ibm-blue);
  color: var(--ibm-blue);
  border-radius: 2px;
  font-size: 13px;
  font-weight: 600;
  text-decoration: none;
  transition: background 0.2s, color 0.2s, transform 0.2s;
  font-family: 'IBM Plex Sans', sans-serif;
}
.about-download:hover { background: var(--ibm-blue); color: #fff; transform: translateY(-2px); }
.about-img-wrap {
  position: relative;
}
.about-img-frame {
  position: relative;
  border-radius: 4px;
  overflow: hidden;
}
.about-img-frame::before {
  content: '';
  position: absolute;
  inset: 0;
  background: var(--gradient-main);
  opacity: 0.3;
  z-index: 1;
}
.about-img-frame img { width: 100%; display: block; border-radius: 4px; }
.about-tag {
  position: absolute;
  bottom: -16px; right: -16px;
  background: var(--ibm-blue);
  color: #fff;
  padding: 14px 20px;
  border-radius: 2px;
  font-family: 'IBM Plex Mono', monospace;
  font-size: 11px;
  letter-spacing: 1px;
  z-index: 2;
}
.about-tag strong { display: block; font-size: 24px; font-family: 'IBM Plex Sans', sans-serif; font-weight: 700; }

/* ─── STATS ─── */
.stats-section { background: #161616; }
.stats-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 2px;
  margin-top: 48px;
  border: 1px solid rgba(255,255,255,0.08);
}
.stat-card {
  padding: 40px 32px;
  background: #1c1c1c;
  border: 1px solid rgba(255,255,255,0.06);
  position: relative;
  overflow: hidden;
  transition: background 0.3s, transform 0.3s;
}
.stat-card::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0;
  width: 0; height: 3px;
  background: var(--ibm-blue);
  transition: width 0.4s ease;
}
.stat-card:hover { background: #222; transform: translateY(-4px); }
.stat-card:hover::after { width: 100%; }
.stat-icon {
  width: 40px; height: 40px;
  margin-bottom: 20px;
  color: var(--ibm-teal);
}
.stat-num {
  font-family: 'IBM Plex Mono', monospace;
  font-size: 3rem;
  font-weight: 600;
  color: #fff;
  line-height: 1;
  display: flex;
  align-items: baseline;
  gap: 2px;
}
.stat-num .plus { font-size: 1.6rem; color: var(--ibm-blue); }
.stat-label {
  font-size: 13px;
  color: rgba(255,255,255,0.5);
  margin-top: 8px;
  letter-spacing: 0.5px;
}

/* ─── IBM HIGHLIGHT ─── */
.ibm-section {
  background: var(--gradient-main);
  position: relative;
  overflow: hidden;
}
.ibm-section::before {
  content: '';
  position: absolute; inset: 0;
  background-image:
    linear-gradient(rgba(255,255,255,0.04) 1px, transparent 1px),
    linear-gradient(90deg, rgba(255,255,255,0.04) 1px, transparent 1px);
  background-size: 40px 40px;
}
.ibm-inner {
  position: relative; z-index: 1;
}
.ibm-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 64px;
  align-items: center;
  margin-top: 40px;
}
.ibm-chips {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin: 24px 0;
}
.ibm-chip {
  padding: 8px 16px;
  background: rgba(255,255,255,0.12);
  border: 1px solid rgba(255,255,255,0.25);
  border-radius: 2px;
  font-family: 'IBM Plex Mono', monospace;
  font-size: 11px;
  color: #fff;
  letter-spacing: 0.5px;
  transition: background 0.2s, transform 0.2s;
}
.ibm-chip:hover { background: rgba(255,255,255,0.22); transform: translateY(-2px); }
.ibm-boxes {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 16px;
}
.ibm-box {
  padding: 24px;
  background: rgba(255,255,255,0.08);
  border: 1px solid rgba(255,255,255,0.15);
  border-radius: 4px;
  backdrop-filter: blur(10px);
  transition: background 0.2s, transform 0.25s;
}
.ibm-box:hover { background: rgba(255,255,255,0.15); transform: translateY(-4px); }
.ibm-box-icon { font-size: 1.8rem; margin-bottom: 10px; }
.ibm-box h4 { font-size: 14px; font-weight: 600; color: #fff; margin-bottom: 6px; }
.ibm-box p { font-size: 12.5px; color: rgba(255,255,255,0.65); line-height: 1.6; }
.ibm-about {
  margin-top: 24px;
  padding: 20px 24px;
  background: rgba(216,165,45,0.15);
  border-left: 3px solid var(--ibm-gold);
  border-radius: 2px;
}
.ibm-about strong { display: block; color: var(--ibm-gold); font-size: 13px; margin-bottom: 6px; letter-spacing: 0.5px; }
.ibm-about p { font-size: 13px; color: rgba(255,255,255,0.7); line-height: 1.65; }

/* ─── PROGRAMS ─── */
.programs-section { background: #161616; }
.programs-tabs {
  display: flex;
  gap: 4px;
  margin: 36px 0 32px;
  border-bottom: 1px solid rgba(255,255,255,0.1);
  padding-bottom: 0;
}
.prog-tab {
  padding: 12px 20px;
  background: transparent;
  border: none;
  color: rgba(255,255,255,0.5);
  font-family: 'IBM Plex Sans', sans-serif;
  font-size: 13px;
  font-weight: 500;
  cursor: pointer;
  border-bottom: 3px solid transparent;
  margin-bottom: -1px;
  transition: color 0.2s, border-color 0.2s;
  letter-spacing: 0.3px;
}
.prog-tab.active { color: var(--ibm-blue); border-bottom-color: var(--ibm-blue); }
.prog-tab:hover:not(.active) { color: rgba(255,255,255,0.8); }
.programs-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 16px;
}
.programs-grid.pg { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; }
.prog-panel { display: none; }
.prog-panel.active { display: block; }
.course-card {
  background: #1e1e1e;
  border: 1px solid rgba(255,255,255,0.07);
  border-radius: 4px;
  overflow: hidden;
  transition: transform 0.3s, border-color 0.3s, box-shadow 0.3s;
  cursor: pointer;
}
.course-card:hover { transform: translateY(-6px); border-color: var(--ibm-blue); box-shadow: 0 12px 40px rgba(15,98,254,0.2); }
.course-img {
  height: 160px;
  overflow: hidden;
  position: relative;
}
.course-img img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; }
.course-card:hover .course-img img { transform: scale(1.07); }
.course-img::after {
  content: '';
  position: absolute; inset: 0;
  background: linear-gradient(to bottom, transparent 50%, #1e1e1e);
}
.course-body { padding: 18px; }
.course-body h4 { font-size: 14px; font-weight: 600; color: #fff; margin-bottom: 8px; line-height: 1.4; }
.course-body p { font-size: 12px; color: rgba(255,255,255,0.5); line-height: 1.6; margin-bottom: 12px; }
.course-meta {
  display: flex;
  justify-content: space-between;
  font-family: 'IBM Plex Mono', monospace;
  font-size: 10px;
  color: rgba(255,255,255,0.4);
  margin-bottom: 14px;
  padding-top: 10px;
  border-top: 1px solid rgba(255,255,255,0.06);
}
.course-btn {
  display: block;
  width: 100%;
  padding: 9px;
  background: transparent;
  border: 1px solid rgba(255,255,255,0.15);
  color: rgba(255,255,255,0.7);
  border-radius: 2px;
  font-size: 12px;
  font-weight: 500;
  text-align: center;
  text-decoration: none;
  transition: background 0.2s, border-color 0.2s, color 0.2s;
  font-family: 'IBM Plex Sans', sans-serif;
  cursor: pointer;
}
.course-btn:hover { background: var(--ibm-blue); border-color: var(--ibm-blue); color: #fff; }

/* ─── CLUBS ─── */
.clubs-section { background: #1a1a1a; }
.clubs-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  margin-top: 48px;
}
.club-card {
  padding: 32px 28px;
  background: #1e1e1e;
  border: 1px solid rgba(255,255,255,0.07);
  border-radius: 4px;
  transition: transform 0.3s, border-color 0.3s, background 0.3s;
  position: relative;
  overflow: hidden;
}
.club-card::before {
  content: '';
  position: absolute;
  top: 0; left: 0;
  width: 3px; height: 0;
  background: var(--ibm-teal);
  transition: height 0.4s ease;
}
.club-card:hover { transform: translateY(-5px); border-color: rgba(0,163,163,0.3); background: #242424; }
.club-card:hover::before { height: 100%; }
.club-icon { font-size: 2.2rem; margin-bottom: 14px; }
.club-card h5 { font-size: 15px; font-weight: 600; color: #fff; margin-bottom: 8px; }
.club-card p { font-size: 13px; color: rgba(255,255,255,0.55); line-height: 1.65; }

/* ─── WHY CHOOSE ─── */
.why-section { background: #161616; }
.why-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
  align-items: start;
  margin-top: 48px;
}
.why-features {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 16px;
  margin-top: 20px;
}
.feature-box {
  padding: 24px;
  background: #1e1e1e;
  border: 1px solid rgba(255,255,255,0.07);
  border-radius: 4px;
  transition: transform 0.3s, border-color 0.3s;
}
.feature-box:hover { transform: translateY(-4px); border-color: rgba(15,98,254,0.3); }
.feature-icon { font-size: 1.5rem; margin-bottom: 10px; }
.feature-box h5 { font-size: 13px; font-weight: 600; color: #fff; margin-bottom: 6px; }
.feature-box p { font-size: 12px; color: rgba(255,255,255,0.5); line-height: 1.65; }
.why-visual {
  position: relative;
  height: 500px;
}
.why-img {
  width: 100%; height: 360px;
  object-fit: cover;
  border-radius: 4px;
}
.why-floating-card {
  position: absolute;
  bottom: 0; right: -20px;
  background: var(--ibm-blue);
  color: #fff;
  padding: 20px 24px;
  border-radius: 4px;
  max-width: 220px;
  box-shadow: 0 20px 50px rgba(15,98,254,0.4);
  animation: floatCard 4s ease-in-out infinite alternate;
}
@keyframes floatCard { from { transform: translateY(0); } to { transform: translateY(-10px); } }
.why-floating-card h4 { font-size: 28px; font-weight: 700; margin-bottom: 4px; }
.why-floating-card p { font-size: 12px; opacity: 0.85; }

/* ─── TESTIMONIALS ─── */
.testimonials-section { background: #1a1a1a; }
.testimonials-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  margin-top: 48px;
}
.testimonial-card {
  padding: 28px;
  background: #1e1e1e;
  border: 1px solid rgba(255,255,255,0.07);
  border-radius: 4px;
  position: relative;
  transition: transform 0.3s, border-color 0.3s;
}
.testimonial-card::before {
  content: '"';
  position: absolute;
  top: 16px; right: 20px;
  font-family: 'IBM Plex Serif', serif;
  font-size: 4rem;
  color: rgba(15,98,254,0.2);
  line-height: 1;
}
.testimonial-card:hover { transform: translateY(-5px); border-color: rgba(15,98,254,0.25); }
.testimonial-avatar {
  width: 52px; height: 52px;
  border-radius: 50%;
  object-fit: cover;
  margin-bottom: 14px;
  border: 2px solid var(--ibm-blue);
}
.testimonial-card p { font-size: 13.5px; line-height: 1.75; color: rgba(255,255,255,0.7); margin-bottom: 16px; }
.testimonial-name { font-size: 13px; font-weight: 600; color: var(--ibm-teal-light); }

/* ─── FOOTER BAR ─── */
.footer-bar {
  background: #0a0a0a;
  padding: 32px 40px;
  border-top: 1px solid rgba(255,255,255,0.08);
  text-align: center;
}
.footer-bar p {
  font-family: 'IBM Plex Mono', monospace;
  font-size: 11px;
  color: rgba(255,255,255,0.3);
  letter-spacing: 1px;
}
.footer-bar a { color: var(--ibm-blue); text-decoration: none; }

/* ─── RESPONSIVE ─── */
@media (max-width: 1024px) {
  .stats-grid { grid-template-columns: repeat(2, 1fr); }
  .programs-grid { grid-template-columns: repeat(2, 1fr); }
  .programs-grid.pg { grid-template-columns: repeat(2, 1fr); }
  .clubs-grid { grid-template-columns: repeat(2, 1fr); }
  .testimonials-grid { grid-template-columns: repeat(2, 1fr); }
  .why-features { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
  section { padding: 64px 24px; }
  .hero-inner { flex-direction: column-reverse; padding: 80px 24px 60px; gap: 32px; }
  .about-grid, .ibm-grid, .why-grid { grid-template-columns: 1fr; }
  .ibm-boxes { grid-template-columns: 1fr; }
  .stats-grid { grid-template-columns: 1fr 1fr; }
  .programs-grid, .programs-grid.pg { grid-template-columns: 1fr 1fr; }
  .clubs-grid { grid-template-columns: 1fr; }
  .testimonials-grid { grid-template-columns: 1fr; }
  .hero-cta-row { flex-direction: column; }
  .why-visual { height: auto; }
  .why-floating-card { position: relative; right: 0; margin-top: 16px; max-width: 100%; }
}
@media (max-width: 480px) {
  .programs-grid, .programs-grid.pg { grid-template-columns: 1fr; }
  .stats-grid { grid-template-columns: 1fr; }
}

/* Number counter */
.counting { animation: none; }
</style>
</head>
<body>
<div class="cursor-dot" id="dot"></div>
<div class="cursor-ring" id="ring"></div>

<!-- ─── HERO ─── -->
<section class="hero" style="padding:0;">
  <div class="hero-grid"></div>
  <div class="hero-orb hero-orb-1"></div>
  <div class="hero-orb hero-orb-2"></div>
  <div class="hero-orb hero-orb-3"></div>

  <div class="hero-inner">
    <div class="hero-content" style="flex:1;">
      <div class="hero-badge">MDU × IBM · School of Computer Applications</div>
      <h1 class="hero-title">
        Engineering for
        <span>the Next Decade.</span>
      </h1>
      <p class="hero-desc">
        The School of Computer Applications at Maya Devi University shapes tomorrow's digital leaders — blending academic excellence with IBM-powered technical learning, ethical responsibility, and global readiness.
      </p>
      <div class="hero-chips">
        <span class="hero-chip">B.Tech CSE</span>
        <span class="hero-chip">AI & ML</span>
        <span class="hero-chip">Data Science</span>
        <span class="hero-chip">Cybersecurity</span>
        <span class="hero-chip">IBM Pathway</span>
        <span class="hero-chip">MCA</span>
      </div>
      <div class="hero-cta-row">
        <a href="https://admissions.maya.edu.in" class="btn-primary">
          Apply Now
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <a href="#programs" class="btn-outline">
          Explore Programs
        </a>
      </div>
    </div>
    <div class="hero-logo-col">
      <div class="logo-ring">
        <img src="https://maya.edu.in/assets/uploads/campus-2.jpeg" alt="Maya Devi University">
      </div>
    </div>
  </div>

  <div class="scroll-indicator">
    <span>Scroll</span>
    <div class="scroll-line"></div>
  </div>
</section>

<!-- ─── ABOUT ─── -->
<section class="about-section">
  <div class="section-inner">
    <div class="reveal">
      <div class="section-label">School Overview</div>
      <h2 class="section-title">Where Technology Meets <em>Ethics.</em></h2>
    </div>
    <div class="about-grid">
      <div class="about-text reveal-left">
        <p>The School of Computer Applications at Maya Devi University is dedicated to shaping the future of technology by blending academic excellence with ethical responsibility. Anchored in a vision to be a leading center of innovation and knowledge, the School empowers students to become globally responsible digital leaders.</p>
        <p>Our programs are designed to foster a dynamic learning environment that promotes innovation, critical thinking, and lifelong learning. We seamlessly integrate emerging technologies with core human values — ensuring our graduates are not only proficient in cutting-edge tools but also driven by integrity and a commitment to social good.</p>
        <p>Through a global perspective, hands-on experiences, and a focus on sustainability and inclusivity, the School prepares students to address real-world challenges and shape a better, tech-enabled future for all.</p>
        <a href="assets/uploads/fee/MDU — School of Computer Engineering & Applications.pdf" class="about-download">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4M7 10l5 5 5-5M12 15V3"/></svg>
          Download Fee Structure
        </a>
      </div>
      <div class="about-img-wrap reveal-right">
        <div class="about-img-frame">
          <img src="https://maya.edu.in/assets/uploads/engineering.webp" alt="School of Engineering" onerror="this.src='https://picsum.photos/600/450?grayscale'">
          <div class="about-tag" style="position:absolute;bottom:-16px;right:-16px;z-index:3;">
            <strong>15+</strong>
            Programs Offered
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ─── STATS ─── -->
<section class="stats-section">
  <div class="section-inner">
    <div class="reveal">
      <div class="section-label">Our Achievements</div>
      <h2 class="section-title">Numbers That <em>Speak.</em></h2>
    </div>
    <div class="stats-grid">
      <div class="stat-card reveal d1">
        <svg class="stat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
        <div class="stat-num"><span class="counter" data-target="8">0</span><span class="plus">+</span></div>
        <div class="stat-label">Programs Offered</div>
      </div>
      <div class="stat-card reveal d2">
        <svg class="stat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
        <div class="stat-num"><span class="counter" data-target="1000">0</span><span class="plus">+</span></div>
        <div class="stat-label">Students Placed</div>
      </div>
      <div class="stat-card reveal d3">
        <svg class="stat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
        <div class="stat-num"><span class="counter" data-target="48">0</span><span class="plus">+</span></div>
        <div class="stat-label">Highest Package (LPA)</div>
      </div>
      <div class="stat-card reveal d4">
        <svg class="stat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        <div class="stat-num"><span class="counter" data-target="100">0</span><span class="plus">+</span></div>
        <div class="stat-label">Industry Partners</div>
      </div>
    </div>
  </div>
</section>

<!-- ─── IBM HIGHLIGHT ─── -->
<section class="ibm-section">
  <div class="section-inner ibm-inner">
    <div class="reveal">
      <div class="section-label" style="color:var(--ibm-gold);">MDU × IBM Partnership</div>
      <h2 class="section-title" style="color:#fff;">IBM-Linked <em>Opportunities.</em></h2>
    </div>
    <div class="ibm-grid">
      <div class="reveal-left">
        <p style="color:rgba(255,255,255,0.75);line-height:1.8;font-size:1.02rem;">The integrated B.Tech CSE pathway and IBM-linked technical learning create a stronger route to specialization and employability. Move beyond theory with future-tech language, project exposure, and stronger market positioning.</p>
        <div class="ibm-chips">
          <span class="ibm-chip">Integrated B.Tech CSE with IBM</span>
          <span class="ibm-chip">Data Science</span>
          <span class="ibm-chip">AI Python Programming</span>
          <span class="ibm-chip">Advanced AI for IT Students</span>
          <span class="ibm-chip">Cybersecurity</span>
          <span class="ibm-chip">Robotics & AI</span>
        </div>
        <div class="ibm-about">
          <strong>About IBM</strong>
          <p>IBM is a globally recognized technology company known for innovation in artificial intelligence, analytics, enterprise technology, and digital transformation. That association adds stronger credibility and modern relevance to the student journey at MDU.</p>
        </div>
      </div>
      <div class="reveal-right">
        <div class="ibm-boxes">
          <div class="ibm-box d1 reveal-scale">
            <div class="ibm-box-icon">🚀</div>
            <h4>Future Skills</h4>
            <p>Move beyond theory with future-tech language, project exposure, and stronger market positioning.</p>
          </div>
          <div class="ibm-box d2 reveal-scale">
            <div class="ibm-box-icon">💼</div>
            <h4>Career Value</h4>
            <p>Choose a more premium engineering pathway with clearer long-term relevance.</p>
          </div>
          <div class="ibm-box d3 reveal-scale">
            <div class="ibm-box-icon">🔵</div>
            <h4>IBM Advantage</h4>
            <p>Build an engineering profile that combines degree depth with industry-facing readiness.</p>
          </div>
          <div class="ibm-box d4 reveal-scale">
            <div class="ibm-box-icon">🌐</div>
            <h4>Global Network</h4>
            <p>Connect with IBM's worldwide ecosystem for internships, projects, and placement support.</p>
          </div>
        </div>
        <a href="b.tech-CS_IBM.php" class="btn-primary" style="margin-top:24px;display:inline-flex;">
          Explore B.Tech CSE with IBM
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ─── PROGRAMS ─── -->
<section class="programs-section" id="programs">
  <div class="section-inner">
    <div class="reveal">
      <div class="section-label">Academic Programs</div>
      <h2 class="section-title">Industry-Focused <em>Degrees.</em></h2>
      <p class="section-sub">From B.Sc to B.Tech to MCA — programs designed for the demands of modern industry.</p>
    </div>

    <div class="programs-tabs reveal">
      <button class="prog-tab active" onclick="switchTab('ug', this)">Undergraduate</button>
      <button class="prog-tab" onclick="switchTab('pg', this)">Postgraduate</button>
    </div>

    <!-- UG Programs -->
    <div class="prog-panel active" id="panel-ug">
      <div class="programs-grid" id="ug-grid">
        <div class="course-card reveal d1">
          <div class="course-img"><img src="https://maya.edu.in/assets/uploads/ai.jpeg" alt="BCA AI ML" onerror="this.src='https://picsum.photos/400/200?grayscale&random=1'"></div>
          <div class="course-body">
            <h4>BCA in AI & Machine Learning</h4>
            <p>Shaping tech leaders with expertise in Artificial Intelligence and Machine Learning.</p>
            <div class="course-meta"><span>120 Credits</span><span>3 Years</span></div>
            <a href="bachelor-of-computer-application-AI-&-ML.php" class="course-btn">Apply Now →</a>
          </div>
        </div>
        <div class="course-card reveal d2">
          <div class="course-img"><img src="https://maya.edu.in/assets/uploads/data-science.webp" alt="BCA Data Science" onerror="this.src='https://picsum.photos/400/200?grayscale&random=2'"></div>
          <div class="course-body">
            <h4>BCA in Data Science</h4>
            <p>Shaping future tech & data leaders with expertise in Analytics and Data Science.</p>
            <div class="course-meta"><span>120 Credits</span><span>3 Years</span></div>
            <a href="bachelor-of-computer-application-Data-Science.php" class="course-btn">Apply Now →</a>
          </div>
        </div>
        <div class="course-card reveal d3">
          <div class="course-img"><img src="https://maya.edu.in/assets/uploads/cyber-security.webp" alt="BCA Cyber" onerror="this.src='https://picsum.photos/400/200?grayscale&random=3'"></div>
          <div class="course-body">
            <h4>BCA in Cyber Security</h4>
            <p>An undergraduate program focused on computer applications and digital security.</p>
            <div class="course-meta"><span>120 Credits</span><span>4 Years</span></div>
            <a href="bachelor-of-computer-application-cyber-security.php" class="course-btn">Apply Now →</a>
          </div>
        </div>
        <div class="course-card reveal d4">
          <div class="course-img"><img src="https://maya.edu.in/assets/uploads/it.webp" alt="BSc IT" onerror="this.src='https://picsum.photos/400/200?grayscale&random=4'"></div>
          <div class="course-body">
            <h4>B.Sc Information Technology</h4>
            <p>An undergraduate program focused on information technology and its applications.</p>
            <div class="course-meta"><span>120 Credits</span><span>4 Years</span></div>
            <a href="bachelor-of-science-in-information-technology.php" class="course-btn">Apply Now →</a>
          </div>
        </div>
        <div class="course-card reveal d1">
          <div class="course-img"><img src="https://maya.edu.in/assets/uploads/cs.webp" alt="BSc CS" onerror="this.src='https://picsum.photos/400/200?grayscale&random=5'"></div>
          <div class="course-body">
            <h4>B.Sc Computer Science</h4>
            <p>Comprehensive undergraduate program with strong fundamentals in computer science.</p>
            <div class="course-meta"><span>120 Credits</span><span>4 Years</span></div>
            <a href="bachelor-of-science-in-computer-science.php" class="course-btn">Apply Now →</a>
          </div>
        </div>
        <div class="course-card reveal d2">
          <div class="course-img"><img src="https://maya.edu.in/assets/uploads/computer.webp" alt="BTech CSE" onerror="this.src='https://picsum.photos/400/200?grayscale&random=6'"></div>
          <div class="course-body">
            <h4>B.Tech CSE</h4>
            <p>Flagship engineering program focused on software, systems, and emerging tech.</p>
            <div class="course-meta"><span>177 Credits</span><span>4 Years</span></div>
            <a href="b.tech-CSE.php" class="course-btn">Apply Now →</a>
          </div>
        </div>
        <div class="course-card reveal d3">
          <div class="course-img"><img src="https://maya.edu.in/assets/uploads/ai.jpeg" alt="BTech AIML" onerror="this.src='https://picsum.photos/400/200?grayscale&random=7'"></div>
          <div class="course-body">
            <h4>B.Tech AI & ML</h4>
            <p>Specialized engineering program in artificial intelligence and machine learning.</p>
            <div class="course-meta"><span>177 Credits</span><span>4 Years</span></div>
            <a href="b.tech-AI-ML.php" class="course-btn">Apply Now →</a>
          </div>
        </div>
        <div class="course-card reveal d4">
          <div class="course-img"><img src="https://maya.edu.in/assets/uploads/ibm.webp" alt="BTech IBM" onerror="this.src='https://picsum.photos/400/200?grayscale&random=8'"></div>
          <div class="course-body">
            <h4>B.Tech CSE with IBM</h4>
            <p>Premium pathway combining engineering fundamentals with IBM industry programs.</p>
            <div class="course-meta"><span>177 Credits</span><span>4 Years</span></div>
            <a href="b.tech-CS_IBM.php" class="course-btn">Apply Now →</a>
          </div>
        </div>
      </div>
    </div>

    <!-- PG Programs -->
    <div class="prog-panel" id="panel-pg">
      <div class="programs-grid pg" id="pg-grid">
        <div class="course-card reveal d1">
          <div class="course-img"><img src="https://maya.edu.in/assets/uploads/aiml-2.webp" alt="MCA AIML" onerror="this.src='https://picsum.photos/400/200?grayscale&random=9'"></div>
          <div class="course-body">
            <h4>MCA — AI & Machine Learning</h4>
            <p>Advanced program in artificial intelligence and machine learning applications.</p>
            <div class="course-meta"><span>88 Credits</span><span>2 Years</span></div>
            <a href="mca-aiml.php" class="course-btn">Apply Now →</a>
          </div>
        </div>
        <div class="course-card reveal d2">
          <div class="course-img"><img src="https://maya.edu.in/assets/uploads/mca-data.webp" alt="MCA DS" onerror="this.src='https://picsum.photos/400/200?grayscale&random=10'"></div>
          <div class="course-body">
            <h4>MCA — Data Science</h4>
            <p>Postgraduate specialization in data analytics, visualization, and big data.</p>
            <div class="course-meta"><span>88 Credits</span><span>2 Years</span></div>
            <a href="mca-data-science.php" class="course-btn">Apply Now →</a>
          </div>
        </div>
        <div class="course-card reveal d3">
          <div class="course-img"><img src="https://maya.edu.in/assets/uploads/mca-cyber.webp" alt="MCA Cyber" onerror="this.src='https://picsum.photos/400/200?grayscale&random=11'"></div>
          <div class="course-body">
            <h4>MCA — Cyber Security</h4>
            <p>Advanced study in cybersecurity, ethical hacking, and digital forensics.</p>
            <div class="course-meta"><span>88 Credits</span><span>2 Years</span></div>
            <a href="mca-cyber-security.php" class="course-btn">Apply Now →</a>
          </div>
        </div>
        <div class="course-card reveal d4">
          <div class="course-img"><img src="https://maya.edu.in/assets/uploads/mtech-cse.webp" alt="MTech" onerror="this.src='https://picsum.photos/400/200?grayscale&random=12'"></div>
          <div class="course-body">
            <h4>M.Tech CSE (AI/DS/Cyber)</h4>
            <p>Research-oriented master's in CSE with specialization tracks.</p>
            <div class="course-meta"><span>88 Credits</span><span>2 Years</span></div>
            <a href="mtech-specializations-cse-AI-ML.php" class="course-btn">Apply Now →</a>
          </div>
        </div>
        <div class="course-card reveal d5">
          <div class="course-img"><img src="https://maya.edu.in/assets/uploads/computer.webp" alt="MSc CS" onerror="this.src='https://picsum.photos/400/200?grayscale&random=13'"></div>
          <div class="course-body">
            <h4>M.Sc Computer Science</h4>
            <p>Science-based postgraduate program with strong theoretical foundations.</p>
            <div class="course-meta"><span>88 Credits</span><span>2 Years</span></div>
            <a href="msc-computer-science.php" class="course-btn">Apply Now →</a>
          </div>
        </div>
        <div class="course-card reveal d6">
          <div class="course-img"><img src="https://maya.edu.in/assets/uploads/mca.webp" alt="MCA" onerror="this.src='https://picsum.photos/400/200?grayscale&random=14'"></div>
          <div class="course-body">
            <h4>MCA — Master of Computer Applications</h4>
            <p>Comprehensive postgraduate applications program for the tech industry.</p>
            <div class="course-meta"><span>88 Credits</span><span>2 Years</span></div>
            <a href="mca.php" class="course-btn">Apply Now →</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ─── CLUBS ─── -->
<section class="clubs-section">
  <div class="section-inner">
    <div class="reveal">
      <div class="section-label">Student Life</div>
      <h2 class="section-title">Clubs & <em>Societies.</em></h2>
    </div>
    <div class="clubs-grid">
      <div class="club-card reveal d1">
        <div class="club-icon">🤖</div>
        <h5>AI & Robotics Society</h5>
        <p>Innovating with artificial intelligence and robotics through projects, competitions, and industry workshops.</p>
      </div>
      <div class="club-card reveal d2">
        <div class="club-icon">🛡️</div>
        <h5>CyberSec Club</h5>
        <p>Learn, practice, and explore ethical hacking & cybersecurity challenges in a hands-on environment.</p>
      </div>
      <div class="club-card reveal d3">
        <div class="club-icon">💻</div>
        <h5>Web & App Developers Hub</h5>
        <p>A community for passionate coders building modern apps & web solutions with cutting-edge stacks.</p>
      </div>
      <div class="club-card reveal d4">
        <div class="club-icon">🌍</div>
        <h5>Tech4Good Society</h5>
        <p>Using technology to solve social issues & create meaningful, sustainable change in communities.</p>
      </div>
      <div class="club-card reveal d5">
        <div class="club-icon">🎤</div>
        <h5>TechTalks & Toastmasters</h5>
        <p>Sharpen your speaking, debating, and technical presentation skills with like-minded peers.</p>
      </div>
      <div class="club-card reveal d6">
        <div class="club-icon">🎮</div>
        <h5>Game Dev & AR/VR Club</h5>
        <p>Explore immersive worlds with AR/VR projects and gaming innovations using Unity and Unreal.</p>
      </div>
    </div>
  </div>
</section>

<!-- ─── WHY CHOOSE ─── -->
<section class="why-section">
  <div class="section-inner">
    <div class="reveal">
      <div class="section-label">Why Choose Us</div>
      <h2 class="section-title">Built for the <em>Future.</em></h2>
    </div>
    <div class="why-grid">
      <div>
        <p class="section-sub reveal" style="margin-bottom:0;">At the School of Computer Applications, MDU, we go beyond conventional learning — offering an ecosystem of innovation, creativity, and global opportunities.</p>
        <div class="why-features">
          <div class="feature-box reveal d1">
            <div class="feature-icon">🚀</div>
            <h5>Excellence in Education</h5>
            <p>Future-ready curriculum in AI, cybersecurity, data science, and cloud computing.</p>
          </div>
          <div class="feature-box reveal d2">
            <div class="feature-icon">⚖️</div>
            <h5>Ethics Meets Technology</h5>
            <p>Building responsible leaders who innovate with integrity and social responsibility.</p>
          </div>
          <div class="feature-box reveal d3">
            <div class="feature-icon">🌍</div>
            <h5>Global Readiness</h5>
            <p>International collaborations and real-world projects for a connected workforce.</p>
          </div>
          <div class="feature-box reveal d4">
            <div class="feature-icon">🔬</div>
            <h5>Research & Creativity</h5>
            <p>Research, innovation, and product development in every discipline and semester.</p>
          </div>
          <div class="feature-box reveal d5">
            <div class="feature-icon">🤝</div>
            <h5>Inclusive Environment</h5>
            <p>Every student is heard, supported, and mentored — personally and professionally.</p>
          </div>
          <div class="feature-box reveal d6">
            <div class="feature-icon">📚</div>
            <h5>Lifelong Learning</h5>
            <p>Education that builds curiosity, critical thinking, and continuous growth for life.</p>
          </div>
        </div>
        <a href="https://admissions.maya.edu.in" class="btn-primary reveal" style="margin-top:32px;display:inline-flex;">
          Start Your Journey →
        </a>
      </div>
      <div class="why-visual reveal-right">
        <img src="https://maya.edu.in/assets/uploads/computer.jpg" alt="Why Choose MDU" class="why-img" onerror="this.src='https://picsum.photos/600/400?grayscale'">
        <div class="why-floating-card">
          <h4>48+ LPA</h4>
          <p>Highest Placement Package Achieved</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ─── TESTIMONIALS ─── -->
<section class="testimonials-section">
  <div class="section-inner">
    <div class="reveal">
      <div class="section-label">Student Stories</div>
      <h2 class="section-title">What Our <em>Students Say.</em></h2>
    </div>
    <div class="testimonials-grid">
      <div class="testimonial-card reveal d1">
        <img src="https://maya.edu.in/assets/uploads/testimoni-1.jpeg" alt="Riya Sharma" class="testimonial-avatar" onerror="this.src='https://ui-avatars.com/api/?name=Riya+Sharma&background=0f62fe&color=fff'">
        <p>"The School of Engineering provided me with excellent opportunities to learn, explore, and innovate. I secured a placement at Microsoft with a 42 LPA package!"</p>
        <div class="testimonial-name">Riya Sharma — B.Tech CSE</div>
      </div>
      <div class="testimonial-card reveal d2">
        <img src="https://maya.edu.in/assets/uploads/testimoni-2.jpeg" alt="Arjun Verma" class="testimonial-avatar" onerror="this.src='https://ui-avatars.com/api/?name=Arjun+Verma&background=00a3a3&color=fff'">
        <p>"State-of-the-art labs and practical exposure gave me an edge in the industry. Truly grateful for the faculty and support at MDU. Career-defining experience."</p>
        <div class="testimonial-name">Arjun Verma — B.Tech Mechanical</div>
      </div>
      <div class="testimonial-card reveal d3">
        <img src="https://maya.edu.in/assets/uploads/testimoni-3.jpeg" alt="Sneha Gupta" class="testimonial-avatar" onerror="this.src='https://ui-avatars.com/api/?name=Sneha+Gupta&background=d8a52d&color=fff'">
        <p>"Amazing mentors and inclusive culture. I gained not only knowledge but also the confidence to excel in my career. MDU truly transforms students."</p>
        <div class="testimonial-name">Sneha Gupta — MCA</div>
      </div>
    </div>
  </div>
</section>


<script>
// ─── Cursor
const dot = document.getElementById('dot');
const ring = document.getElementById('ring');
let mx = 0, my = 0, rx = 0, ry = 0;
document.addEventListener('mousemove', e => { mx = e.clientX; my = e.clientY; });
function animateCursor() {
  dot.style.transform = `translate(${mx-4}px, ${my-4}px)`;
  rx += (mx - rx) * 0.12;
  ry += (my - ry) * 0.12;
  ring.style.transform = `translate(${rx-18}px, ${ry-18}px)`;
  requestAnimationFrame(animateCursor);
}
animateCursor();
document.querySelectorAll('a, button, .course-card, .stat-card, .club-card, .feature-box').forEach(el => {
  el.addEventListener('mouseenter', () => { ring.style.width = '52px'; ring.style.height = '52px'; ring.style.borderColor = 'var(--ibm-blue)'; });
  el.addEventListener('mouseleave', () => { ring.style.width = '36px'; ring.style.height = '36px'; ring.style.borderColor = 'var(--ibm-teal)'; });
});

// ─── Scroll reveal (fires every time element enters/leaves viewport)
function checkReveal() {
  document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale').forEach(el => {
    const rect = el.getBoundingClientRect();
    if (rect.top < window.innerHeight * 0.88 && rect.bottom > 0) {
      el.classList.add('visible');
    } else {
      el.classList.remove('visible');
    }
  });
}
window.addEventListener('scroll', checkReveal, { passive: true });
window.addEventListener('resize', checkReveal);
checkReveal();

// ─── Number counter (re-runs every time stat card enters viewport)
function startCounters() {
  document.querySelectorAll('.stat-card').forEach(card => {
    const rect = card.getBoundingClientRect();
    if (rect.top < window.innerHeight * 0.9 && rect.bottom > 0) {
      card.querySelectorAll('.counter').forEach(c => {
        if (c.dataset.running) return;
        c.dataset.running = '1';
        const target = +c.getAttribute('data-target');
        const duration = 1200;
        const start = performance.now();
        function step(now) {
          const p = Math.min((now - start) / duration, 1);
          const ease = 1 - Math.pow(1 - p, 3);
          c.textContent = Math.floor(ease * target);
          if (p < 1) requestAnimationFrame(step);
          else { c.textContent = target; delete c.dataset.running; }
        }
        requestAnimationFrame(step);
      });
    } else {
      card.querySelectorAll('.counter').forEach(c => {
        c.textContent = '0';
        delete c.dataset.running;
      });
    }
  });
}
window.addEventListener('scroll', startCounters, { passive: true });
startCounters();

// ─── Program tab switching
function switchTab(id, btn) {
  document.querySelectorAll('.prog-tab').forEach(t => t.classList.remove('active'));
  document.querySelectorAll('.prog-panel').forEach(p => p.classList.remove('active'));
  btn.classList.add('active');
  document.getElementById('panel-' + id).classList.add('active');
  // Trigger reveal check for newly visible cards
  setTimeout(checkReveal, 50);
}
</script>
</body>
</html>