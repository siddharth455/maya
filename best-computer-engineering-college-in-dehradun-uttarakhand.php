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
                        <span class="badge-pg">PG</span>
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
                        <span class="badge-pg">PG</span>
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
                        <span class="badge-pg">PG</span>
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
                        <span class="badge-pg">PG</span>
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
                        <span class="badge-pg">PG</span>
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
                        <span class="badge-pg">PG</span>
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
                    ?>
                        <div class="single-blog">
                            <div class="blog-img" style="height:200px; overflow:hidden;">
                                <a href="blog-single.php?id=<?= $id ?>">
                                    <img src="<?= $img ?>" alt="<?= $title ?>" style="width:100%; height:100%; object-fit:cover;">
                                </a>
                            </div>

                            <div class="blog-content-wrap" style="display:flex; flex-direction:column; height:100%;">
                                <?php if (!empty($tags)) echo "<span>" . htmlspecialchars($tags[0]) . "</span>"; ?>

                                <div class="blog-content" style="flex-grow:1;">
                                    <h4>
                                        <a href="blog-single.php?id=<?= $id ?>"><?= $title ?></a>
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