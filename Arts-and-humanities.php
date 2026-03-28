<?php
$page_title = "Arts & Humanities Courses in Dehradun | Maya Devi University";
$page_description = "Explore Arts and Humanities programs at Maya Devi University, Dehradun designed to develop creativity, research skills, and critical thinking.";
$canonical_url = "https://maya.edu.in/Arts-and-humanities.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php" ?>
<!-- Hero Section -->
<section class="hero-section" style="background: url('assets/uploads/home-banner.webp') center/cover no-repeat; height:70vh;">
  <div class="hero-content">
    <h3 class="display-5 fw-bold text-white">School of Arts and Humanities</h3>
    <p class="lead text-white">Shaping Tomorrow's Leaders at Maya Devi University</p>
    <a href="https://admissions.maya.edu.in" class="btn btn-primary">Apply Now</a>
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
        The Faculty of Arts, Humanities, and Social Sciences at Maya Devi University is a multidisciplinary academic hub offering diverse programs such as B.A. in Humanities, M.Sc. in Clinical Psychology, and M.A. in Fine Arts. The faculty houses key departments including Hindi Literature, English Literature, Psychology, Political Science, Geography and Sociology.
      </p>
      <p>
        Each department is committed to academic excellence, creative exploration and social relevance, preparing students for dynamic careers and meaningful societal contributions. The faculty's mission is to foster intellectual curiosity, critical thinking, cultural appreciation, and ethical leadership through an inclusive and holistic educational approach.
      </p>
      <p>With a strong emphasis on interdisciplinary learning, the programs aim to develop students' analytical abilities, communication skills, and understanding of both human behavior and societal structures.</p>
      <a class="default-btn btn-block" href="assets/uploads/fee/MDU — School of Arts & Humanities.pdf">Download fee structure</a>
    </div>
    <!-- About Section -->
    <!-- Right Image -->
    <div class="col-md-5 text-center">
      <div class="img-container">
        <img src="assets/uploads/arts.webp"
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
          <span class="counter" data-target="27">0</span>+
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
          <span class="counter" data-target="12">0</span>+
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
    }, {
      threshold: 0.5
    });

    counters.forEach(counter => {
      observer.observe(counter);
    });
  });
</script>

<!-- Courses Section -->
<div class="course-area bg-light pt-60 pb-60">
  <div class="container">

    <!-- ================= UNDERGRADUATE PROGRAMS ================= -->
    <div class="section-title text-center mb-50">
      <h2>Undergraduate <span>Programs</span></h2>
      <p>Comprehensive undergraduate programs in arts, humanities, and social sciences.</p>
    </div>

    <div class="row">

      <!-- BA Psychology -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="ba-psychology.php"><img src="assets/uploads/ba-1.webp" alt="Course Image"></a>
          </div>
          <div class="course-body">
            <h4>BA Psychology</h4>
            <p>Develops skills in mental health understanding, assessment, and emotional well-being support.</p>
            <div class="course-meta">
              <span>Credits: 132</span><span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="ba-psychology.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- BA Clinical Psychology -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="ba-clinical-psychology.php"><img src="assets/uploads/ba-2.webp" alt="Course Image"></a>
          </div>
          <div class="course-body">
            <h4>BA Clinical Psychology</h4>
            <p>Focuses on mental health assessment and therapeutic techniques.</p>
            <div class="course-meta">
              <span>Credits: 132</span><span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="ba-clinical-psychology.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- BA Hindi Literature -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="ba-hindi-literature.php"><img src="assets/uploads/ba-3.webp" alt="Course Image"></a>
          </div>
          <div class="course-body">
            <h4>BA Hindi Literature</h4>
            <p>Prepares students for careers in education, writing, and cultural studies.</p>
            <div class="course-meta">
              <span>Credits: 132</span><span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="ba-hindi-literature.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- BA Sociology -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="ba-sociology.php"><img src="assets/uploads/ba-4.webp" alt="Course Image"></a>
          </div>
          <div class="course-body">
            <h4>BA Sociology</h4>
            <p>Analyzes social structures, culture, and community dynamics.</p>
            <div class="course-meta">
              <span>Credits: 132</span><span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="ba-sociology.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- BA English Literature -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="ba-english-literature.php"><img src="assets/uploads/ba-3.webp" alt="Course Image"></a>
          </div>
          <div class="course-body">
            <h4>BA English Literature</h4>
            <p>In-depth study of English literature across six semesters.</p>
            <div class="course-meta">
              <span>Credits: 132</span><span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="ba-english-literature.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- BA Economics -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="ba-economics.php"><img src="assets/uploads/ba-6.webp" alt="Course Image"></a>
          </div>
          <div class="course-body">
            <h4>BA Economics</h4>
            <p>Foundations of economic theory and applied economics.</p>
            <div class="course-meta">
              <span>Credits: 132</span><span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="ba-economics.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- BA Yoga -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="ba-yoga.php"><img src="assets/uploads/ba-7.webp" alt="Course Image"></a>
          </div>
          <div class="course-body">
            <h4>BA Yoga</h4>
            <p>Combines traditional yoga practices with modern wellness studies.</p>
            <div class="course-meta">
              <span>Credits: 132</span><span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="ba-yoga.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- BA Geography -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="ba-geography.php"><img src="assets/uploads/ba-9.webp" alt="Course Image"></a>
          </div>
          <div class="course-body">
            <h4>BA Geography</h4>
            <p>Study of physical, human, and environmental geography.</p>
            <div class="course-meta">
              <span>Credits: 132</span><span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="ba-geography.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- BA Journalism -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="ba-journalism-and-mass-communication.php"><img src="assets/uploads/ba-12.webp" alt="Course Image"></a>
          </div>
          <div class="course-body">
            <h4>BA Journalism & Mass Communication</h4>
            <p>Professional training in media, journalism, and communication.</p>
            <div class="course-meta">
              <span>Credits: 132</span><span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="ba-journalism-and-mass-communication.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- BA Fine Arts -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="ba-fine-arts.php"><img src="assets/uploads/ba-10.webp" alt="Course Image"></a>
          </div>
          <div class="course-body">
            <h4>BA Fine Arts</h4>
            <p>Creative education in visual and applied arts.</p>
            <div class="course-meta">
              <span>Credits: 132</span><span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="ba-fine-arts.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- BA Maths -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="ba-mathematics.php"><img src="assets/uploads/ba-11.webp" alt="Course Image"></a>
          </div>
          <div class="course-body">
            <h4>BA Mathematics</h4>
            <p>Study of mathematical concepts and analytical reasoning.</p>
            <div class="course-meta">
              <span>Credits: 132</span><span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="ba-mathematics.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- BA Political Science -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="ba-political-science.php"><img src="assets/uploads/ba-5.webp" alt="Course Image"></a>
          </div>
          <div class="course-body">
            <h4>BA Political Science</h4>
            <p>Study of political systems, governance, and public policy.</p>
            <div class="course-meta">
              <span>Credits: 132</span><span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="ba-political-science.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- BA History -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="ba-history.php"><img src="assets/uploads/ba-8.jpg" alt="Course Image"></a>
          </div>
          <div class="course-body">
            <h4>BA History</h4>
            <p>Exploration of historical events, civilizations, and cultures.</p>
            <div class="course-meta">
              <span>Credits: 132</span><span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="ba-history.php">Apply Now</a>
          </div>
        </div>
      </div>

    </div>

    <!-- ================= POSTGRADUATE PROGRAMS ================= -->
    <div class="section-title text-center mb-50 mt-40">
      <h2>Postgraduate <span>Programs</span></h2>
      <p>Advanced postgraduate programs for academic and professional specialization.</p>
    </div>

    <div class="row">

      <!-- MA Clinical Psychology -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="ma-clinical-psychology.php"><img src="assets/uploads/ma-3.webp" alt="Course Image"></a>
          </div>
          <div class="course-body">
            <h4>MA Clinical Psychology</h4>
            <p>Advanced training in clinical assessment and therapeutic practices.</p>
            <div class="course-meta">
              <span>Credits: 125</span><span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="ma-clinical-psychology.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- MA Psychology -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="ma-psychology.php"><img src="assets/uploads/ma-2.webp" alt="Course Image"></a>
          </div>
          <div class="course-body">
            <h4>MA Psychology</h4>
            <p>In-depth study of psychological theories and research methods.</p>
            <div class="course-meta">
              <span>Credits: 125</span><span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="ma-psychology.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- MA Sociology -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="ma-sociology.php"><img src="assets/uploads/ma-6.webp" alt="Course Image"></a>
          </div>
          <div class="course-body">
            <h4>MA Sociology</h4>
            <p>Advanced sociological theory and research training.</p>
            <div class="course-meta">
              <span>Credits: 125</span><span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="ma-sociology.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- MA Hindi -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="ma-hindi-literature.php"><img src="assets/uploads/ma-5.webp" alt="Course Image"></a>
          </div>
          <div class="course-body">
            <h4>MA Hindi Literature</h4>
            <p>Advanced literary studies and research in Hindi literature.</p>
            <div class="course-meta">
              <span>Credits: 125</span><span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="ma-hindi-literature.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- MA Political Science -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="ma-political-science.php"><img src="assets/uploads/ma-1.webp" alt="Course Image"></a>
          </div>
          <div class="course-body">
            <h4>MA Political Science</h4>
            <p>Advanced political theory and governance studies.</p>
            <div class="course-meta">
              <span>Credits: 125</span><span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="ma-political-science.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- MA Yoga -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="ma-yoga.php"><img src="assets/uploads/ba-7.webp" alt="Course Image"></a>
          </div>
          <div class="course-body">
            <h4>MA Yoga</h4>
            <p>Advanced yogic studies and wellness education.</p>
            <div class="course-meta">
              <span>Credits: 125</span><span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="ma-yoga.php">Apply Now</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="ma-evs.php"><img src="assets/uploads/ma-11.jpg" alt="Course Image"></a>
          </div>
          <div class="course-body">
            <h4>MA Environmental Science</h4>
            <p>Advanced Environmental studies and nature education.</p>
            <div class="course-meta">
              <span>Credits: 132</span><span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="ma-evs.php">Apply Now</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="ma-journalism-and-mass-communication.php"><img src="assets/uploads/ma-10.jpg" alt="Course Image"></a>
          </div>
          <div class="course-body">
            <h4>MA Journalism & Mass Communication</h4>
            <p>Advanced Journalism studies and communication education.</p>
            <div class="course-meta">
              <span>Credits: 132</span><span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="ma-journalism-and-mass-communication.php">Apply Now</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="ma-fine-arts.php"><img src="assets/uploads/ma-9.jpeg" alt="Course Image"></a>
          </div>
          <div class="course-body">
            <h4>MA Fine Arts</h4>
            <p>Advanced Fine Arts studies and wellness education.</p>
            <div class="course-meta">
              <span>Credits: 132</span><span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="ma-fine-arts.php">Apply Now</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="ma-economics.php"><img src="assets/uploads/ma-8.jpg" alt="Course Image"></a>
          </div>
          <div class="course-body">
            <h4>MA Economics</h4>
            <p>Advanced Economic studies and wellness education.</p>
            <div class="course-meta">
              <span>Credits: 132</span><span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="ma-economics.php">Apply Now</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="ma-english.php"><img src="assets/uploads/ma-7.jpg" alt="Course Image"></a>
          </div>
          <div class="course-body">
            <h4>MA English</h4>
            <p>Advanced English Literature studies and wellness education.</p>
            <div class="course-meta">
              <span>Credits: 132</span><span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="ma-english.php">Apply Now</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="ma-maths.php"><img src="assets/uploads/ba-11.webp" alt="Course Image"></a>
          </div>
          <div class="course-body">
            <h4>MA Mathematics</h4>
            <p>Advanced Mathematics studies and wellness education.</p>
            <div class="course-meta">
              <span>Credits: 88/44</span><span>1/2 Years</span>
            </div>
            <a class="default-btn btn-block" href="ma-maths.php">Apply Now</a>
          </div>
        </div>
      </div>

    </div>

    <!-- ================= DOCTORAL PROGRAM ================= -->
    <div class="section-title text-center mb-50 mt-40">
      <h2>Doctoral <span>Program</span></h2>
      <p>Research-focused doctoral program for advanced academic contribution.</p>
    </div>

    <div class="row">

      <!-- PhD -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="best-university-for-phd-in-dehradun-uttarakhand.php">
              <img src="assets/uploads/phd.webp" alt="Course Image">
            </a>
          </div>
          <div class="course-body">
            <h4>PhD Program</h4>
            <p>Doctoral research program focused on original research and academic excellence.</p>
            <div class="course-meta">
              <span>Credits: 125</span><span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="best-university-for-phd-in-dehradun-uttarakhand.php">Apply Now</a>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>



<!-- clubs section -->
<section class="clubs-section py-5">
  <div class="container">
    <div class="section-title pb-50">
      <h2>Clubs <span>& Societies 🎓</span></h2>
    </div>

    <!-- Student Clubs -->
    <h3 class="group-title mb-3"><strong>Student Clubs</strong></h3>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">✍️</div>
          <h5 class="club-title">Creative Writing Club / Literary Society</h5>
          <p class="club-desc">Encourages writing, poetry, and literary expression.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🗣️</div>
          <h5 class="club-title">Debating and Oratory Society</h5>
          <p class="club-desc">Promotes debating, public speaking, and critical thinking skills.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">📚</div>
          <h5 class="club-title">Book Club</h5>
          <p class="club-desc">A community for book enthusiasts and reading circles.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🌍</div>
          <h5 class="club-title">Language Clubs</h5>
          <p class="club-desc">Celebrates learning and practicing different languages.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🎭</div>
          <h5 class="club-title">Drama and Theatre Club</h5>
          <p class="club-desc">Brings stage performances and creative storytelling to life.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🎶</div>
          <h5 class="club-title">Music and Fine Arts Society</h5>
          <p class="club-desc">Encourages music, painting, and artistic expression.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🎬</div>
          <h5 class="club-title">Film and Media Club</h5>
          <p class="club-desc">Explores cinema, photography, and digital storytelling.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">📰</div>
          <h5 class="club-title">Student Magazine / Newsletter Team</h5>
          <p class="club-desc">Publishes creative and informative student content.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🤝</div>
          <h5 class="club-title">Community Engagement Club</h5>
          <p class="club-desc">Works on social service and community development initiatives.</p>
        </div>
      </div>
    </div>

    <!-- Societies -->
    <h3 class="group-title mt-5 mb-3"><strong>Societies</strong></h3>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🎨</div>
          <h5 class="club-title">Cultural Heritage Society</h5>
          <p class="club-desc">Preserves and promotes diverse cultural traditions.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">💡</div>
          <h5 class="club-title">Philosophy Forum / Thinkers' Circle</h5>
          <p class="club-desc">Encourages philosophical discussions and critical ideas.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🏛️</div>
          <h5 class="club-title">History and Heritage Club</h5>
          <p class="club-desc">Explores history and promotes heritage awareness.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">⚖️</div>
          <h5 class="club-title">Social Justice / Human Rights Society</h5>
          <p class="club-desc">Advocates equality, justice, and human rights awareness.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🎓</div>
          <h5 class="club-title">Alumni and Career Cell</h5>
          <p class="club-desc">Strengthens alumni connections and career support networks.</p>
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

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
$dept = "Arts"; // change dynamically if needed

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
      delay: 4000, // 4 seconds per slide
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 2
      }, // Tablet
      1024: {
        slidesPerView: 3
      } // Desktop
    }
  });
</script>
<?php require "common/footer.php" ?>