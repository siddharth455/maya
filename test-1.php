<?php
$page_title = "Best Computer Engineering College in Dehradun | Maya Devi University";
$page_description = "Looking for the best Computer Engineering college in Dehradun? Maya Devi University offers industry-focused B.Tech CSE programs with top placements.";
$canonical_url = "https://maya.edu.in/best-computer-engineering-college-in-dehradun-uttarakhand.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php"?>
  <!-- Hero Section -->
  <section class="hero-section" style="background: url('assets/uploads/sca.jpg') center/contain no-repeat; ">
  <div class="hero-content">
     
    </div>
  </section>

  <!-- About Section -->
<section class="container py-5">
<div class="section-title  pb-20">
    <h2>School <span>Overview</h2>
    </div>
  <div class="row">
    <!-- Left Text -->
    <div class="col-md-7">
      <p>
      The School of Computer Applications at Maya Devi University is dedicated to shaping the future of technology by blending academic excellence with ethical responsibility. Anchored in a vision to be a leading center of innovation and knowledge, the School empowers students to become globally responsible digital leaders—equipped with technical expertise, creative problem-solving skills, and a strong moral compass.
      </p>
      <p>
      Our programs are designed to foster a dynamic learning environment that promotes innovation, critical thinking, and lifelong learning. We seamlessly integrate emerging technologies with core human values to ensure our graduates are not only proficient in cutting-edge tools but also driven by integrity, compassion, and a commitment to social good.
      </p>
      <p>Through a global perspective, hands-on experiences, and a focus on sustainability and inclusivity, the School prepares students to address real-world challenges and shape a better, tech-enabled future for all.</p>
      <a class="default-btn btn-block" href="assets/uploads/fee/MDU — School of Computer Engineering & Applications.pdf">Download fee structure</a>
    </div>
  <!-- About Section -->
    <!-- Right Image -->
    <div class="col-md-5 text-center">
  <div class="img-container">
    <img src="assets/uploads/engineering.webp" 
         alt="School of Engineering" 
         class="responsive-img">
  </div>
</div>

</section>

  <!-- Achievements Section -->
  <section class="container" id="achievements">
  <div class="section-title pb-20">
    <h2>Our <span>Achievements</span></h2>
  </div>
  <div class="row g-4 text-center mt-4">
    
    <!-- Card 1 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#f0f8ff;">
        <i class="fa fa-users fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="8">0</span>+
        </h3>
        <p class="mb-0">Programs Offered</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#f6fffa;">
        <i class="fa fa-certificate fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="1000">0</span>+
        </h3>
        <p class="mb-0">Students Placed</p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#f9f8ff;">
        <i class="fa fa-briefcase fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="48">0</span>+
        </h3>
        <p class="mb-0">Highest Package (LPA)</p>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#fff8f2;">
        <i class="fa fa-globe fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="100">0</span>+
        </h3>
        <p class="mb-0">Industry Partners</p>
      </div>
    </div>
    
  </div>
</section>

<!-- Counter Script -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".counter");
  const duration = 1000; // total animation time (ms)

  const animateCounter = (counter) => {
    const target = +counter.getAttribute("data-target");
    const start = 0;
    const startTime = performance.now();

    const updateCount = (currentTime) => {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);
      counter.innerText = Math.floor(progress * target);

      if (progress < 1) {
        requestAnimationFrame(updateCount);
      } else {
        counter.innerText = target; // ensure exact number at end
      }
    };

    requestAnimationFrame(updateCount);
  };

  // Animate only when section is visible
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(counter => {
    observer.observe(counter);
  });
});
</script>

<!-- IBM Section Styles -->
<style>
  /* ── IBM Section ── */
  @import url('https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&family=Space+Mono:wght@400;700&display=swap');

  .ibm-section {
    position: relative;
    overflow: hidden;
    padding: 90px 0 100px;
    background: #0a0f2e;
    font-family: 'Sora', sans-serif;
  }

  /* Animated background mesh */
  .ibm-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(ellipse 60% 50% at 20% 30%, rgba(15, 98, 254, 0.28) 0%, transparent 70%),
      radial-gradient(ellipse 50% 60% at 80% 70%, rgba(0, 163, 163, 0.22) 0%, transparent 70%),
      radial-gradient(ellipse 40% 40% at 50% 10%, rgba(17, 35, 79, 0.6) 0%, transparent 80%);
    pointer-events: none;
    z-index: 0;
  }

  /* Floating grid lines */
  .ibm-section::after {
    content: '';
    position: absolute;
    inset: 0;
    background-image:
      linear-gradient(rgba(15, 98, 254, 0.06) 1px, transparent 1px),
      linear-gradient(90deg, rgba(15, 98, 254, 0.06) 1px, transparent 1px);
    background-size: 48px 48px;
    pointer-events: none;
    z-index: 0;
    animation: gridShift 20s linear infinite;
  }

  @keyframes gridShift {
    0%   { background-position: 0 0; }
    100% { background-position: 48px 48px; }
  }

  .ibm-container {
    max-width: 1100px;
    margin: 0 auto;
    padding: 0 28px;
    position: relative;
    z-index: 1;
  }

  /* ── Header ── */
  .ibm-header {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 18px;
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.7s ease, transform 0.7s ease;
  }
  .ibm-header.ibm-visible { opacity: 1; transform: translateY(0); }

  .ibm-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(15, 98, 254, 0.18);
    border: 1px solid rgba(15, 98, 254, 0.45);
    color: #fff;
    font-family: 'Space Mono', monospace;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    padding: 6px 14px;
    border-radius: 999px;
  }
  .ibm-badge::before {
    content: '';
    width: 7px; height: 7px;
    border-radius: 50%;
    background: #fff;
    animation: pulse 2s ease-in-out infinite;
  }
  @keyframes pulse {
    0%, 100% { box-shadow: 0 0 0 0 rgba(15,98,254,0.7); }
    50%       { box-shadow: 0 0 0 6px rgba(15,98,254,0); }
  }

  .ibm-eyebrow {
    font-family: 'Space Mono', monospace;
    font-size: 12px;
    font-weight: 600;
    color: #00a651;
    letter-spacing: 0.15em;
    text-transform: uppercase;
  }

  .ibm-title {
    font-size: clamp(28px, 4.5vw, 52px);
    font-weight: 800;
    color: #fff;
    line-height: 1.1;
    margin: 0 0 16px;
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.7s ease 0.1s, transform 0.7s ease 0.1s;
  }
  .ibm-title.ibm-visible { opacity: 1; transform: translateY(0); }
  .ibm-title span { color: #0f62fe; }

  .ibm-subtitle {
    font-size: 16px;
    color: rgba(255,255,255,0.65);
    max-width: 580px;
    line-height: 1.7;
    margin: 0 0 48px;
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.7s ease 0.2s, transform 0.7s ease 0.2s;
  }
  .ibm-subtitle.ibm-visible { opacity: 1; transform: translateY(0); }

  /* ── Chips ── */
  .ibm-chips {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 52px;
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.7s ease 0.3s, transform 0.7s ease 0.3s;
  }
  .ibm-chips.ibm-visible { opacity: 1; transform: translateY(0); }

  .ibm-chip {
    padding: 9px 16px;
    border-radius: 999px;
    background: rgba(15, 98, 254, 0.12);
    border: 1px solid rgba(15, 98, 254, 0.35);
    color: #93c5fd;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 0.02em;
    transition: background 0.25s, border-color 0.25s, color 0.25s, transform 0.2s;
  }
  .ibm-chip:hover {
    background: rgba(15, 98, 254, 0.28);
    border-color: rgba(15, 98, 254, 0.7);
    color: #fff;
    transform: translateY(-2px);
  }

  /* ── Grid Cards ── */
  .ibm-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 18px;
    margin-bottom: 28px;
  }

  .ibm-card {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 20px;
    padding: 28px 24px;
    position: relative;
    overflow: hidden;
    transition: background 0.3s, border-color 0.3s, transform 0.3s;
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.6s ease, transform 0.6s ease, background 0.3s, border-color 0.3s;
  }
  .ibm-card.ibm-visible { opacity: 1; transform: translateY(0); }
  .ibm-card:nth-child(1) { transition-delay: 0.05s; }
  .ibm-card:nth-child(2) { transition-delay: 0.15s; }
  .ibm-card:nth-child(3) { transition-delay: 0.25s; }

  .ibm-card:hover {
    background: rgba(15, 98, 254, 0.1);
    border-color: rgba(15, 98, 254, 0.4);
    transform: translateY(-6px);
  }

  /* Glowing top accent */
  .ibm-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 2px;
    background: linear-gradient(90deg, transparent, #0f62fe, #00a3a3, transparent);
    opacity: 0;
    transition: opacity 0.3s;
  }
  .ibm-card:hover::before { opacity: 1; }

  .ibm-card-icon {
    width: 44px; height: 44px;
    border-radius: 12px;
    background: rgba(15, 98, 254, 0.15);
    border: 1px solid rgba(15, 98, 254, 0.3);
    display: flex; align-items: center; justify-content: center;
    font-size: 20px;
    margin-bottom: 16px;
  }

  .ibm-card h3 {
    font-size: 16px;
    font-weight: 700;
    color: #fff;
    margin: 0 0 10px;
  }

  .ibm-card p {
    font-size: 14px;
    color: rgba(255,255,255,0.55);
    line-height: 1.65;
    margin: 0;
  }

  /* ── IBM Note ── */
  .ibm-note {
    background: rgba(0, 163, 163, 0.07);
    border: 1px solid rgba(0, 163, 163, 0.25);
    border-left: 3px solid #00a3a3;
    border-radius: 16px;
    padding: 22px 26px;
    display: flex;
    gap: 18px;
    align-items: flex-start;
    margin-bottom: 44px;
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.7s ease 0.35s, transform 0.7s ease 0.35s;
  }
  .ibm-note.ibm-visible { opacity: 1; transform: translateY(0); }

  .ibm-note-icon {
    font-size: 26px; flex-shrink: 0; margin-top: 2px;
  }

  .ibm-note strong {
    display: block;
    font-size: 14px;
    font-weight: 700;
    color: #67e8f9;
    margin-bottom: 6px;
    font-family: 'Space Mono', monospace;
    letter-spacing: 0.05em;
    text-transform: uppercase;
  }

  .ibm-note p {
    font-size: 14px;
    color: rgba(255,255,255,0.6);
    line-height: 1.65;
    margin: 0;
  }

  /* ── CTA ── */
  .ibm-cta-row {
    display: flex;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.7s ease 0.45s, transform 0.7s ease 0.45s;
  }
  .ibm-cta-row.ibm-visible { opacity: 1; transform: translateY(0); }

  .ibm-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: linear-gradient(135deg, #0f62fe, #004ec1);
    color: #fff;
    font-size: 14px;
    font-weight: 700;
    padding: 14px 28px;
    border-radius: 12px;
    text-decoration: none;
    letter-spacing: 0.03em;
    position: relative;
    overflow: hidden;
    transition: transform 0.2s, box-shadow 0.2s;
    box-shadow: 0 8px 24px rgba(15,98,254,0.4);
  }
  .ibm-cta-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 32px rgba(15,98,254,0.55);
    color: #fff;
    text-decoration: none;
  }
  .ibm-cta-btn::after {
    content: '→';
    font-size: 16px;
    transition: transform 0.2s;
  }
  .ibm-cta-btn:hover::after { transform: translateX(4px); }

  .ibm-cta-link {
    color: rgba(255,255,255,0.5);
    font-size: 13px;
    font-weight: 600;
    text-decoration: none;
    letter-spacing: 0.04em;
    transition: color 0.2s;
  }
  .ibm-cta-link:hover { color: #fff; }

  /* ── Responsive ── */
  @media (max-width: 800px) {
    .ibm-grid { grid-template-columns: 1fr; }
    .ibm-section { padding: 60px 0 70px; }
  }

  @media (max-width: 600px) {
    .ibm-title { font-size: 26px; }
    .ibm-note { flex-direction: column; gap: 10px; }
  }
</style>

<!-- IBM Partnership Section -->
<section class="ibm-section">
  <div class="ibm-container">

    <!-- Header -->
    <div class="ibm-header ibm-animate">
      <span class="ibm-badge">Partnership</span>
      <span class="ibm-eyebrow">MDU × IBM</span>
    </div>

    <h2 class="ibm-title ibm-animate">
      Engineering that feels<br><span>ready for the next decade.</span>
    </h2>

    <p class="ibm-subtitle ibm-animate">
      The integrated B.Tech CSE pathway and IBM-linked technical learning create a stronger route to specialization and employability — built for what industry actually demands.
    </p>

    <!-- Program Chips -->
    <div class="ibm-chips ibm-animate">
      <span class="ibm-chip">Integrated B.Tech CSE with IBM</span>
      <span class="ibm-chip">Data Science</span>
      <span class="ibm-chip">AI Python Programming</span>
      <span class="ibm-chip">Advanced AI for IT Students</span>
      <span class="ibm-chip">Cybersecurity</span>
      <span class="ibm-chip">Robotics & AI</span>
    </div>

    <!-- 3-Column Grid -->
    <div class="ibm-grid">
      <div class="ibm-card ibm-animate">
        <div class="ibm-card-icon">🚀</div>
        <h3>Future Skills</h3>
        <p>Move beyond theory with future-tech language, real project exposure, and stronger market positioning from day one.</p>
      </div>
      <div class="ibm-card ibm-animate">
        <div class="ibm-card-icon">💼</div>
        <h3>Career Value</h3>
        <p>Choose a premium engineering pathway with clearer long-term relevance — designed with industry outcomes in mind.</p>
      </div>
      <div class="ibm-card ibm-animate">
        <div class="ibm-card-icon">🔷</div>
        <h3>IBM Advantage</h3>
        <p>Build an engineering profile that combines degree depth with industry-facing readiness, backed by IBM's global credibility.</p>
      </div>
    </div>

    <!-- IBM Note -->
    <div class="ibm-note ibm-animate">
      <span class="ibm-note-icon">🔹</span>
      <div>
        <strong>About IBM</strong>
        <p>IBM is a globally recognized technology company known for innovation in artificial intelligence, analytics, enterprise technology, and digital transformation. That association adds stronger credibility and modern relevance to the student journey at MDU.</p>
      </div>
    </div>

    <!-- CTA -->
    <div class="ibm-cta-row ibm-animate">
      <a href="b.tech-CS_IBM.php" class="ibm-cta-btn">Explore B.Tech CSE with IBM</a>
      <a href="assets/uploads/fee/MDU — School of Computer Engineering & Applications.pdf" class="ibm-cta-link">Download fee structure ↗</a>
    </div>

  </div>
</section>

<!-- IBM Section Animation Script -->
<script>
(function () {
  const animItems = document.querySelectorAll('.ibm-animate');
  if (!animItems.length) return;

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('ibm-visible');
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.18 }
  );

  animItems.forEach((el) => observer.observe(el));
})();
</script>
<!-- Courses Section -->
<div class="course-area bg-light pt-60 pb-60">
    <div class="container">

        <div class="section-title text-center mb-50">
            <h2>Undergraduate <span>Programs</span></h2>
            <p>Industry-focused undergraduate programs combining knowledge and practical skills.</p>
        </div>

        <div class="row">

            <!-- BCA AI & ML -->
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="course-card">
                    <div class="course-img">
                        <a href="bachelor-of-computer-application-AI-&-ML.php">
                            <img src="assets/uploads/ai.jpeg" alt="">
                        </a>
                    </div>
                    <div class="course-body">
                        <h4><a href="bachelor-of-computer-application-AI-&-ML.php">BCA in AI & ML</a></h4>
                        <p>Shaping tech leaders with expertise in Artificial Intelligence and Machine Learning.</p>
                        <div class="course-meta">
                            <span>Credits: 120</span>
                            <span>3 Years</span>
                        </div>
                        <a class="default-btn btn-block" href="bachelor-of-computer-application-AI-&-ML.php">Apply Now</a>
                    </div>
                </div>
            </div>

            <!-- BCA Data Science -->
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="course-card">
                    <div class="course-img">
                        <a href="bachelor-of-computer-application-Data-Science.php">
                            <img src="assets/uploads/data-science.webp" alt="">
                        </a>
                    </div>
                    <div class="course-body">
                        <h4><a href="bachelor-of-computer-application-Data-Science.php">BCA in Data Science</a></h4>
                        <p>Shaping future tech & data leaders with expertise in Analytics and Data Science.</p>
                        <div class="course-meta">
                            <span>Credits: 120</span>
                            <span>3 Years</span>
                        </div>
                        <a class="default-btn btn-block" href="bachelor-of-computer-application-Data-Science.php">Apply Now</a>
                    </div>
                </div>
            </div>

            <!-- BCA Cyber Security -->
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="course-card">
                    <div class="course-img">
                        <a href="bachelor-of-computer-application-cyber-security.php">
                            <img src="assets/uploads/cyber-security.webp" alt="">
                        </a>
                    </div>
                    <div class="course-body">
                        <h4><a href="bachelor-of-computer-application-cyber-security.php">BCA in Cyber Security</a></h4>
                        <p>An undergraduate program focused on computer applications and digital security.</p>
                        <div class="course-meta">
                            <span>Credits: 120</span>
                            <span>4 Years</span>
                        </div>
                        <a class="default-btn btn-block" href="bachelor-of-computer-application-cyber-security.php">Apply Now</a>
                    </div>
                </div>
            </div>

            <!-- B.Sc IT -->
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="course-card">
                    <div class="course-img">
                        <a href="bachelor-of-science-in-information-technology.php">
                            <img src="assets/uploads/it.webp" alt="">
                        </a>
                    </div>
                    <div class="course-body">
                        <h4><a href="bachelor-of-science-in-information-technology.php">B.Sc Information Technology</a></h4>
                        <p>An undergraduate program focused on information technology and its applications.</p>
                        <div class="course-meta">
                            <span>Credits: 120</span>
                            <span>4 Years</span>
                        </div>
                        <a class="default-btn btn-block" href="bachelor-of-science-in-information-technology.php">Apply Now</a>
                    </div>
                </div>
            </div>

            <!-- B.Sc CS -->
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="course-card">
                    <div class="course-img">
                        <a href="bachelor-of-science-in-computer-science.php">
                            <img src="assets/uploads/cs.webp" alt="">
                        </a>
                    </div>
                    <div class="course-body">
                        <h4><a href="bachelor-of-science-in-computer-science.php">B.Sc Computer Science</a></h4>
                        <p>An undergraduate program focused on information technology and its applications.</p>
                        <div class="course-meta">
                            <span>Credits: 120</span>
                            <span>4 Years</span>
                        </div>
                        <a class="default-btn btn-block" href="bachelor-of-science-in-computer-science.php">Apply Now</a>
                    </div>
                </div>
            </div>

            <!-- B.Tech LE -->
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="course-card">
                    <div class="course-img">
                        <a href="b.tech-LE.php">
                            <img src="assets/uploads/b-tech-le.webp" alt="">
                        </a>
                    </div>
                    <div class="course-body">
                        <h4><a href="b.tech-LE.php">B.Tech (Lateral Entry)</a></h4>
                        <p>An undergraduate program focused on information technology and its applications.</p>
                        <div class="course-meta">
                            <span>Credits: 127</span>
                            <span>4 Years</span>
                        </div>
                        <a class="default-btn btn-block" href="b.tech-LE.php">Apply Now</a>
                    </div>
                </div>
            </div>

            <!-- B.Tech CSE -->
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="course-card">
                    <div class="course-img">
                        <a href="b.tech-CSE.php">
                            <img src="assets/uploads/computer.webp" alt="">
                        </a>
                    </div>
                    <div class="course-body">
                        <h4><a href="b.tech-CSE.php">B.Tech Computer Science Engineering</a></h4>
                        <p>An undergraduate program focused on information technology and its applications.</p>
                        <div class="course-meta">
                            <span>Credits: 177</span>
                            <span>4 Years</span>
                        </div>
                        <a class="default-btn btn-block" href="b.tech-CSE.php">Apply Now</a>
                    </div>
                </div>
            </div>

            <!-- B.Tech AI ML -->
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="course-card">
                    <div class="course-img">
                        <a href="b.tech-AI-ML.php">
                            <img src="assets/uploads/ai.jpeg" alt="">
                        </a>
                    </div>
                    <div class="course-body">
                        <h4><a href="b.tech-AI-ML.php">B.Tech AI & ML</a></h4>
                        <p>An undergraduate program focused on information technology and its applications.</p>
                        <div class="course-meta">
                            <span>Credits: 177</span>
                            <span>4 Years</span>
                        </div>
                        <a class="default-btn btn-block" href="b.tech-AI-ML.php">Apply Now</a>
                    </div>
                </div>
            </div>

            <!-- B.Tech Data Science -->
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="course-card">
                    <div class="course-img">
                        <a href="b.tech-data_science.php">
                            <img src="assets/uploads/data-science.webp" alt="">
                        </a>
                    </div>
                    <div class="course-body">
                        <h4><a href="b.tech-data_science.php">B.Tech Data Science</a></h4>
                        <p>An undergraduate program focused on information technology and its applications.</p>
                        <div class="course-meta">
                            <span>Credits: 177</span>
                            <span>4 Years</span>
                        </div>
                        <a class="default-btn btn-block" href="b.tech-data_science.php">Apply Now</a>
                    </div>
                </div>
            </div>

            <!-- B.Tech Cyber -->
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="course-card">
                    <div class="course-img">
                        <a href="b.tech-cyber_security.php">
                            <img src="assets/uploads/cyber-security.webp" alt="">
                        </a>
                    </div>
                    <div class="course-body">
                        <h4><a href="b.tech-cyber_security.php">B.Tech Cyber Security</a></h4>
                        <p>An undergraduate program focused on information technology and its applications.</p>
                        <div class="course-meta">
                            <span>Credits: 177</span>
                            <span>4 Years</span>
                        </div>
                        <a class="default-btn btn-block" href="b.tech-cyber_security.php">Apply Now</a>
                    </div>
                </div>
            </div>

            <!-- B.Tech IBM -->
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="course-card">
                    <div class="course-img">
                        <a href="b.tech-CS_IBM.php">
                            <img src="assets/uploads/ibm.webp" alt="">
                        </a>
                    </div>
                    <div class="course-body">
                        <h4><a href="b.tech-CS_IBM.php">B.Tech CSE with IBM</a></h4>
                        <p>An undergraduate program focused on information technology and its applications.</p>
                        <div class="course-meta">
                            <span>Credits: 177</span>
                            <span>4 Years</span>
                        </div>
                        <a class="default-btn btn-block" href="b.tech-CS_IBM.php">Apply Now</a>
                    </div>
                </div>
            </div>

            <!-- EVT -->
            <!-- <div class="col-lg-3 col-md-6 mb-30">
                <div class="course-card">
                    <div class="course-img">
                        <a href="b.tech-EVT.php">
                            <img src="assets/uploads/evt.jpg" alt="">
                        </a>
                    </div>
                    <div class="course-body">
                        <h4><a href="b.tech-EVT.php">B.Tech Electric Vehicle Technology</a></h4>
                        <p>An undergraduate program focused on Electric and battery vehicle technology.</p>
                        <div class="course-meta">
                            <span>Credits: 125</span>
                            <span>4 Years</span>
                        </div>
                        <a class="default-btn btn-block" href="b.tech-EVT.php">Apply Now</a>
                    </div>
                </div>
            </div> -->

            <!-- HFCT -->
            <!-- <div class="col-lg-3 col-md-6 mb-30">
                <div class="course-card">
                    <div class="course-img">
                        <a href="B.Tech-HFCT.php">
                            <img src="assets/uploads/hvct.webp" alt="">
                        </a>
                    </div>
                    <div class="course-body">
                        <h4><a href="B.Tech-HFCT.php">B.Tech Hydrogen Fuel Cell Technology</a></h4>
                        <p>An undergraduate program focused on Hydrogen Fuel Cell Technology.</p>
                        <div class="course-meta">
                            <span>Credits: 125</span>
                            <span>4 Years</span>
                        </div>
                        <a class="default-btn btn-block" href="B.Tech-HFCT.php">Apply Now</a>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</div>
<div class="course-area bg-white pt-60 pb-60">
    <div class="container">

        <div class="section-title text-center mb-50">
            <h2>Postgraduate <span>Programs</span></h2>
            <p>Advanced programs focused on specialization and research excellence.</p>
        </div>

        <div class="row">

            <div class="col-lg-3 col-md-6 mb-30">
                <div class="course-card">
                    <div class="course-img">
                        <a href="mca-aiml.php">
                            <img src="assets/uploads/aiml-2.webp" alt="">
                        </a>
                    </div>
                    <div class="course-body">
                        <h4><a href="mca-aiml.php">MCA AI & ML</a></h4>
                        <p>An undergraduate program focused on information technology and its applications.</p>
                        <div class="course-meta">
                            <span>Credits: 88</span>
                            <span>4 Years</span>
                        </div>
                        <a class="default-btn btn-block" href="mca-aiml.php">Apply Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-30">
                <div class="course-card">
                    <div class="course-img">
                        <a href="mca-data-science.php">
                            <img src="assets/uploads/mca-data.webp" alt="">
                        </a>
                    </div>
                    <div class="course-body">
                        <h4><a href="mca-data-science.php">MCA Data Science</a></h4>
                        <p>An undergraduate program focused on information technology and its applications.</p>
                        <div class="course-meta">
                            <span>Credits: 88</span>
                            <span>4 Years</span>
                        </div>
                        <a class="default-btn btn-block" href="mca-data-science.php">Apply Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-30">
                <div class="course-card">
                    <div class="course-img">
                        <a href="mca-cyber-security.php">
                            <img src="assets/uploads/mca-cyber.webp" alt="">
                        </a>
                    </div>
                    <div class="course-body">
                        <h4><a href="mca-cyber-security.php">MCA Cyber Security</a></h4>
                        <p>An undergraduate program focused on information technology and its applications.</p>
                        <div class="course-meta">
                            <span>Credits: 88</span>
                            <span>4 Years</span>
                        </div>
                        <a class="default-btn btn-block" href="mca-cyber-security.php">Apply Now</a>
                    </div>
                </div>
            </div>

            <!-- <div class="col-lg-3 col-md-6 mb-30">
                <div class="course-card">
                    <div class="course-img">
                        <a href="mtech-cse.php">
                            <img src="assets/uploads/computer.jpg" alt="">
                        </a>
                        <span class="badge-pg">PG</span>
                    </div>
                    <div class="course-body">
                        <h4><a href="mtech-cse.php">M.Tech CSE</a></h4>
                        <p>An undergraduate program focused on information technology and its applications.</p>
                        <div class="course-meta">
                            <span>Credits: 88</span>
                            <span>4 Years</span>
                        </div>
                        <a class="default-btn btn-block" href="mtech-cse.php">Apply Now</a>
                    </div>
                </div>
            </div> -->

            <div class="col-lg-3 col-md-6 mb-30">
                <div class="course-card">
                    <div class="course-img">
                        <a href="mtech-specializations-cse-AI-ML.php">
                            <img src="assets/uploads/mtech-cse.webp" alt="">
                        </a>
                    </div>
                    <div class="course-body">
                        <h4><a href="mtech-specializations-cse-AI-ML.php">M.Tech CSE (AI/DS/Cyber)</a></h4>
                        <p>An undergraduate program focused on information technology and its applications.</p>
                        <div class="course-meta">
                            <span>Credits: 88</span>
                            <span>4 Years</span>
                        </div>
                        <a class="default-btn btn-block" href="mtech-specializations-cse-AI-ML.php">Apply Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-30">
                <div class="course-card">
                    <div class="course-img">
                        <a href="msc-computer-science.php">
                            <img src="assets/uploads/computer.webp" alt="">
                        </a>
                    </div>
                    <div class="course-body">
                        <h4><a href="msc-computer-science.php">M.Sc Computer Science</a></h4>
                        <p>An undergraduate program focused on information technology and its applications.</p>
                        <div class="course-meta">
                            <span>Credits: 88</span>
                            <span>4 Years</span>
                        </div>
                        <a class="default-btn btn-block" href="msc-computer-science.php">Apply Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-30">
                <div class="course-card">
                    <div class="course-img">
                        <a href="mca.php">
                            <img src="assets/uploads/mca.webp" alt="">
                        </a>
                    </div>
                    <div class="course-body">
                        <h4><a href="mca.php">MCA</a></h4>
                        <p>An undergraduate program focused on information technology and its applications.</p>
                        <div class="course-meta">
                            <span>Credits: 88</span>
                            <span>4 Years</span>
                        </div>
                        <a class="default-btn btn-block" href="mca.php">Apply Now</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<style>
  .course-card {
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    height: 100%;
}

.course-card:hover {
    transform: translateY(-6px);
}

.course-img img {
    width: 100%;
    height: 220px;
    object-fit: cover;
}

.course-body {
    padding: 20px;
}

.course-body h4 {
    font-size: 18px;
    margin-bottom: 10px;
}

.course-meta {
    display: flex;
    justify-content: space-between;
    font-size: 14px;
    margin: 15px 0;
    color: #666;
}

.badge-pg {
    position: absolute;
    top: 15px;
    right: 15px;
    background: #ff5a5f;
    color: #fff;
    padding: 5px 10px;
    font-size: 12px;
    border-radius: 20px;
}

  </style>
<!-- clubs section -->
<section class="clubs-section py-5">
  <div class="container">
  <div class="section-title  pb-50">
    <h2>Clubs <span>& Societies 🎓 </span></h2>
  </div>
    <div class="row g-4">
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🤖</div>
          <h5 class="club-title">AI & Robotics Society</h5>
          <p class="club-desc">Innovating with artificial intelligence and robotics through projects and workshops.</p>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🛡️</div>
          <h5 class="club-title">CyberSec Club</h5>
          <p class="club-desc">Learn, practice, and explore ethical hacking & cybersecurity challenges.</p>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">💻</div>
          <h5 class="club-title">Web & App Developers Hub</h5>
          <p class="club-desc">A community for passionate coders building modern apps & web solutions.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🌍</div>
          <h5 class="club-title">Tech4Good Society</h5>
          <p class="club-desc">Using technology to solve social issues & create meaningful change.</p>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🎤</div>
          <h5 class="club-title">TechTalks & Toastmasters</h5>
          <p class="club-desc">Sharpen your speaking, debating, and presentation skills with peers.</p>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🎮</div>
          <h5 class="club-title">Game Dev & AR/VR Club</h5>
          <p class="club-desc">Explore immersive worlds with AR/VR projects and gaming innovations.</p>
        </div>
      </div>
      
    </div>
  </div>
</section>

  <!-- clubs section ends -->
  <!-- Why Choose Us -->
  <section class="why-choose-us py-5">
  <div class="container">
    <div class="row align-items-center mb-5">
      <div class="col-lg-7">
        <div class="section-title pb-20">
        <h2>Why <span>Choose Us 🌟 ?</span></h2>
        </div>
        <p class="text-muted">
        Choosing the right place to pursue your education is a life-changing decision—one that shapes not just your academic journey but also your personal and professional future. At the School of Computer Applications, Maya Devi University, we go beyond conventional learning by offering an ecosystem of innovation, creativity, and global opportunities.
        </p>
        <p class="text-muted">Our focus is on preparing students to thrive in a fast-evolving digital world where adaptability, critical thinking, and ethical leadership matter as much as technical expertise. With state-of-the-art infrastructure, hands-on industry exposure, and mentorship from accomplished faculty, we ensure that every learner is equipped to transform ideas into impactful realities.</p>
        <a href="https://admissions.maya.edu.in" class="btn btn-success btn-lg mt-3">Apply Now →</a>
      </div>
      <div class="col-lg-5 text-center">
        <img src="assets/uploads/computer.jpg" 
             alt="Why Choose Us" 
             class="img-fluid rounded shadow" 
             style="max-height:380px; object-fit:cover; width:100%;">
      </div>
    </div>

    <!-- Feature Points -->
    <div class="row gy-4">
      <div class="col-md-6">
        <div class="feature-box">
          <span class="feature-icon">🚀</span>
          <h5>Excellence in Education & Innovation</h5>
          <p>
            We offer a future-ready curriculum blending theory with hands-on practice in 
            AI, cybersecurity, data science, and cloud computing—ensuring students graduate 
            with cutting-edge skills.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="feature-box">
          <span class="feature-icon">⚖️</span>
          <h5>Ethics Meets Technology</h5>
          <p>
            Beyond technical expertise, we emphasize building responsible leaders who 
            innovate with integrity, guided by strong ethical values and social responsibility.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="feature-box">
          <span class="feature-icon">🌍</span>
          <h5>Global Readiness</h5>
          <p>
            International collaborations, industry exposure, and real-world projects prepare 
            our students for a connected, global workforce and professional agility.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="feature-box">
          <span class="feature-icon">🔬</span>
          <h5>Research & Creativity</h5>
          <p>
            Opportunities for research, innovation, and product development encourage 
            exploration, experimentation, and creative problem-solving in every discipline.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="feature-box">
          <span class="feature-icon">🤝</span>
          <h5>Supportive, Inclusive Environment</h5>
          <p>
            A diverse, inclusive learning culture where every student is heard, supported, 
            and mentored—personally, academically, and professionally.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="feature-box">
          <span class="feature-icon">📚</span>
          <h5>Commitment to Lifelong Learning</h5>
          <p>
            Education here goes beyond degrees—it builds a mindset of curiosity, 
            critical thinking, and continuous growth for life.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- Student Testimonials -->
  <!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<section class="container py-5">
    <div class="section-title pb-20">
  <h2>Student <span>Testimonials</span></h2>
  </div>
  <!-- Swiper Slider -->
  <div class="swiper testimonial-slider">
    <div class="swiper-wrapper">

      <!-- Testimonial 1 -->
      <div class="swiper-slide">
        <div class="testimonial text-center p-4 shadow-sm rounded bg-white">
          <img src="assets/uploads/testimoni-1.jpeg" alt="Riya Sharma" class="testimonial-img mb-3">
          <p>"The School of Engineering provided me with excellent opportunities to learn, explore, and innovate. I secured a placement at Microsoft with 42 LPA package!"</p>
          <h6 class="mt-2">- Riya Sharma (CSE)</h6>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="swiper-slide">
        <div class="testimonial text-center p-4 shadow-sm rounded bg-white">
          <img src="assets/uploads/testimoni-2.jpeg" alt="Arjun Verma" class="testimonial-img mb-3">
          <p>"State-of-the-art labs and practical exposure gave me an edge in the industry. Truly grateful for the faculty and support at MDU."</p>
          <h6 class="mt-2">- Arjun Verma (Mechanical)</h6>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="swiper-slide">
        <div class="testimonial text-center p-4 shadow-sm rounded bg-white">
          <img src="assets/uploads/testimoni-3.jpeg" alt="Student" class="testimonial-img mb-3">
          <p>"Amazing mentors and inclusive culture. I gained not only knowledge but also confidence to excel in my career."</p>
          <h6 class="mt-2">- Sneha Gupta (MCA)</h6>
        </div>
      </div>

      <!-- Testimonial 4 -->
      <div class="swiper-slide">
        <div class="testimonial text-center p-4 shadow-sm rounded bg-white">
          <img src="assets/uploads/testimoni-4.jpeg" alt="Arjun Verma" class="testimonial-img mb-3">
          <p>"State-of-the-art labs and practical exposure gave me an edge in the industry. Truly grateful for the faculty and support at MDU."</p>
          <h6 class="mt-2">- Arjun Verma (Mechanical)</h6>
        </div>
      </div>

    </div>

    <!-- Pagination -->
    <div class="swiper-pagination"></div>

  </div>
</section>
<?php
// Load blogs
$dataFile = __DIR__ . "/admin/data/blogs.json";
$blogs = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];

// SET DEPARTMENT TAG
$dept = "CSE"; // change dynamically if needed

// FILTER BLOGS BY TAG
$filteredBlogs = [];
foreach ($blogs as $id => $b) {
    if (!empty($b['tags']) && in_array($dept, $b['tags'])) {
        $filteredBlogs[$id] = $b;
    }
}

// LATEST BLOGS (limit 8 for slider)
$latestBlogs = array_slice(array_reverse($filteredBlogs, true), 0, 10, true);
?>

<?php if (!empty($latestBlogs)): ?>  <!-- 🔥 MAIN CONDITION -->

<div class="event-area bg-img default-overlay pt-10 pb-10">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-12">
                <div class="section-title-3 mb-45 mrg-bottom-small">
                    <h2>Our <span>Blog</span></h2>
                    <p>Insights and updates from Maya Devi University.</p>
                </div>

                <div class="blog-active">
                    
                    <?php foreach ($latestBlogs as $id => $b):
    $img = $b['image'] ?? 'assets/img/blog/default.jpg';
    $title = $b['title'] ?? '';
    $excerpt = substr(strip_tags($b['content']), 0, 80) . '...';
    $author = $b['author'] ?? 'Admin';
    $date = $b['date'] ?? '';
    $tags = $b['tags'] ?? [];

    // ✅ SLUG
   $slugText = $b['slug'] ?? $title;
$slugText = strtolower($slugText);
$slug = preg_replace('/[^a-z0-9]+/', '-', $slugText);
$slug = trim($slug, '-');
?>
    <div class="single-blog">
        <div class="blog-img" style="height:200px; overflow:hidden;">
            <a href="blog/<?= $slug ?>">
                <img src="<?= $img ?>" alt="<?= $title ?>" style="width:100%; height:100%; object-fit:cover;">
            </a>
        </div>

        <div class="blog-content-wrap" style="display:flex; flex-direction:column; height:100%;">
            <?php if (!empty($tags)) echo "<span>" . htmlspecialchars($tags[0]) . "</span>"; ?>

            <div class="blog-content" style="flex-grow:1;">
                <h4>
                    <a href="blog/<?= $slug ?>"><?= $title ?></a>
                </h4>
                <p><?= $excerpt ?></p>

                <div class="blog-meta">
                    <ul>
                        <li><a href="#"><i class="fa fa-user"></i> <?= $author ?></a></li>
                        <li><a href="#"><i class="fa fa-comments-o"></i> 0</a></li>
                    </ul>
                </div>
            </div>

            <div class="blog-date">
                <a href="#"><i class="fa fa-calendar-o"></i> <?= $date ?></a>
            </div>
        </div>
    </div>
<?php endforeach; ?>

                </div>
            </div>

        </div>
    </div>
</div>

<?php endif; ?>  <!-- 🔥 END CONDITION -->

<style>
.blog-active .single-blog {
    display: flex;
    flex-direction: column;
    border: 1px solid #eee;
    border-radius: 8px;
    overflow: hidden;
    background: #fff;
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

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
 var swiper = new Swiper(".testimonial-slider", {
  slidesPerView: 1,
  spaceBetween: 20,
  loop: true,
  autoplay: {
    delay: 4000,   // 4 seconds per slide
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    768: { slidesPerView: 2 }, // Tablet
    1024: { slidesPerView: 3 } // Desktop
  }
});

</script>
<?php require "common/footer.php"?>