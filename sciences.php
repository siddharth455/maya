<?php
$page_title = "Science Programs in Dehradun | Maya Devi University";
$page_description = "Explore science programs at Maya Devi University, Dehradun including B.Sc and M.Sc courses.";
$canonical_url = "https://maya.edu.in/sciences.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php" ?>
<!-- Hero Section -->
<section class="hero-section" style="background: url('assets/uploads/sals.jpg') center/cover no-repeat; height:70vh;">
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
        The School of Life and Applied Sciences at Maya Devi University, Dehradun, is committed to advancing scientific education and research through its well-structured undergraduate, postgraduate, and doctoral programs. It offers B.Sc. and M.Sc. programs.The school also provides opportunities for Ph.D. research in various branches of applied sciences.
      </p>
      <p>
        With a team of highly qualified and experienced faculty, the school emphasizes both theoretical knowledge and practical skills through laboratory-based learning and project work. Students benefit from modern infrastructure, including well-equipped labs, digital resources, and a rich academic environment.
      </p>
      <p>The school encourages innovation, interdisciplinary learning, and career readiness, supported by an active placement cell. Through academic rigor, research initiatives, and industry engagement, the School of Applied Sciences plays a vital role in preparing students for impactful careers in science and technology.</p>
      <a class="default-btn btn-block" href="assets/uploads/fee/Life_Applied_Sciences_m.pdf">Download fee structure</a>
    </div>
    <!-- About Section -->
    <!-- Right Image -->
    <div class="col-md-5 text-center">
      <div class="img-container">
        <img src="assets/uploads/life-and-allied.webp"
          alt="School of Life and Applied Sciences"
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
          <span class="counter" data-target="29">0</span>+
        </h3>
        <p class="mb-0">Programs Offered</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#f6fffa;">
        <i class="fa fa-certificate fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="750">0</span>+
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
      <p>Industry-focused undergraduate science programs with strong theoretical and practical foundations.</p>
    </div>

    <div class="row">

      <div class="col-lg-3 col-md-6 mb-30"><div class="course-card"><div class="course-img"><a href="bsc-environmental-science-hons.php"><img src="assets/uploads/evs-2.webp"></a></div><div class="course-body"><h4>B.Sc. Environmental Science (Hons.)</h4><p>Advanced study of environmental systems and sustainability.</p><div class="course-meta"><span>Credits: 176</span><span>4 Years</span></div><a class="default-btn btn-block" href="bsc-environmental-science-hons.php">Apply Now</a></div></div></div>

      <div class="col-lg-3 col-md-6 mb-30"><div class="course-card"><div class="course-img"><a href="bsc-physics-hons.php"><img src="assets/uploads/physics.webp"></a></div><div class="course-body"><h4>B.Sc. Physics (Hons.)</h4><p>In-depth theoretical and experimental physics.</p><div class="course-meta"><span>Credits: 176</span><span>4 Years</span></div><a class="default-btn btn-block" href="bsc-physics-hons.php">Apply Now</a></div></div></div>

      <div class="col-lg-3 col-md-6 mb-30"><div class="course-card"><div class="course-img"><a href="bsc-botany-hons.php"><img src="assets/uploads/botany-2.webp"></a></div><div class="course-body"><h4>B.Sc. Botany (Hons.)</h4><p>Advanced plant biology and research.</p><div class="course-meta"><span>Credits: 176</span><span>4 Years</span></div><a class="default-btn btn-block" href="bsc-botany-hons.php">Apply Now</a></div></div></div>

      <div class="col-lg-3 col-md-6 mb-30"><div class="course-card"><div class="course-img"><a href="bsc-zoology-hons.php"><img src="assets/uploads/zoology.webp"></a></div><div class="course-body"><h4>B.Sc. Zoology (Hons.)</h4><p>Advanced animal biology and genetics.</p><div class="course-meta"><span>Credits: 176</span><span>4 Years</span></div><a class="default-btn btn-block" href="bsc-zoology-hons.php">Apply Now</a></div></div></div>

      <div class="col-lg-3 col-md-6 mb-30"><div class="course-card"><div class="course-img"><a href="bsc-chemistry-hons.php"><img src="assets/uploads/chemistry-2.webp"></a></div><div class="course-body"><h4>B.Sc. Chemistry (Hons.)</h4><p>Advanced chemical principles and analysis.</p><div class="course-meta"><span>Credits: 176</span><span>4 Years</span></div><a class="default-btn btn-block" href="bsc-chemistry-hons.php">Apply Now</a></div></div></div>

      <div class="col-lg-3 col-md-6 mb-30"><div class="course-card"><div class="course-img"><a href="bsc-mathematics-hons.php"><img src="assets/uploads/physics.webp"></a></div><div class="course-body"><h4>B.Sc. Mathematics (Hons.)</h4><p>Advanced theoretical and applied mathematics.</p><div class="course-meta"><span>Credits: 176</span><span>4 Years</span></div><a class="default-btn btn-block" href="bsc-mathematics-hons.php">Apply Now</a></div></div></div>

      <div class="col-lg-3 col-md-6 mb-30"><div class="course-card"><div class="course-img"><a href="bsc-forensic-hons.php"><img src="assets/uploads/forensic-2.webp"></a></div><div class="course-body"><h4>B.Sc. Forensic Science (Hons.)</h4><p>Advanced forensic analysis and techniques.</p><div class="course-meta"><span>Credits: 176</span><span>4 Years</span></div><a class="default-btn btn-block" href="bsc-forensic-hons.php">Apply Now</a></div></div></div>

      <div class="col-lg-3 col-md-6 mb-30"><div class="course-card"><div class="course-img"><a href="bsc-microbiology-hons.php"><img src="assets/uploads/micro.webp"></a></div><div class="course-body"><h4>B.Sc. Microbiology (Hons.)</h4><p>Advanced microbial studies and research.</p><div class="course-meta"><span>Credits: 176</span><span>4 Years</span></div><a class="default-btn btn-block" href="bsc-microbiology-hons.php">Apply Now</a></div></div></div>

      <div class="col-lg-3 col-md-6 mb-30"><div class="course-card"><div class="course-img"><a href="bsc-biotechnology-hons.php"><img src="assets/uploads/biotechnology.webp"></a></div><div class="course-body"><h4>B.Sc. Biotechnology (Hons.)</h4><p>Advanced biotechnology and applied research.</p><div class="course-meta"><span>Credits: 176</span><span>4 Years</span></div><a class="default-btn btn-block" href="bsc-biotechnology-hons.php">Apply Now</a></div></div></div>

    </div>

    <!-- ================= POSTGRADUATE PROGRAMS ================= -->
    <div class="section-title text-center mb-50 mt-40">
      <h2>Postgraduate <span>Programs</span></h2>
      <p>Advanced science programs focused on specialization and research.</p>
    </div>

    <div class="row">

      <div class="col-lg-3 col-md-6 mb-30"><div class="course-card"><div class="course-img"><a href="msc-physics.php"><img src="assets/uploads/physics.webp"></a></div><div class="course-body"><h4>M.Sc. Physics</h4><p>Advanced study in physical sciences.</p><div class="course-meta"><span>Credits: 88</span><span>2 Years</span></div><a class="default-btn btn-block" href="msc-physics.php">Apply Now</a></div></div></div>

      <div class="col-lg-3 col-md-6 mb-30"><div class="course-card"><div class="course-img"><a href="msc-chemistry.php"><img src="assets/uploads/chemistry.webp"></a></div><div class="course-body"><h4>M.Sc. Chemistry</h4><p>Advanced chemical sciences and research.</p><div class="course-meta"><span>Credits: 88</span><span>2 Years</span></div><a class="default-btn btn-block" href="msc-chemistry.php">Apply Now</a></div></div></div>

      <div class="col-lg-3 col-md-6 mb-30"><div class="course-card"><div class="course-img"><a href="msc-mathematics.php"><img src="assets/uploads/bsc-pcm-img1.jpg"></a></div><div class="course-body"><h4>M.Sc. Mathematics</h4><p>Advanced mathematical sciences.</p><div class="course-meta"><span>Credits: 88</span><span>2 Years</span></div><a class="default-btn btn-block" href="msc-mathematics.php">Apply Now</a></div></div></div>

      <div class="col-lg-3 col-md-6 mb-30"><div class="course-card"><div class="course-img"><a href="msc-botany.php"><img src="assets/uploads/botany-3.webp"></a></div><div class="course-body"><h4>M.Sc. Botany</h4><p>Advanced plant sciences.</p><div class="course-meta"><span>Credits: 88</span><span>2 Years</span></div><a class="default-btn btn-block" href="msc-botany.php">Apply Now</a></div></div></div>

      <div class="col-lg-3 col-md-6 mb-30"><div class="course-card"><div class="course-img"><a href="msc-zoology.php"><img src="assets/uploads/zoology.webp"></a></div><div class="course-body"><h4>M.Sc. Zoology</h4><p>Advanced animal biology.</p><div class="course-meta"><span>Credits: 88</span><span>2 Years</span></div><a class="default-btn btn-block" href="msc-zoology.php">Apply Now</a></div></div></div>

      <div class="col-lg-3 col-md-6 mb-30"><div class="course-card"><div class="course-img"><a href="msc-forensic-science.php"><img src="assets/uploads/forensic-3.webp"></a></div><div class="course-body"><h4>M.Sc. Forensic Science</h4><p>Advanced forensic investigation techniques.</p><div class="course-meta"><span>Credits: 88</span><span>2 Years</span></div><a class="default-btn btn-block" href="msc-forensic-science.php">Apply Now</a></div></div></div>

      <div class="col-lg-3 col-md-6 mb-30"><div class="course-card"><div class="course-img"><a href="msc-microbiology.php"><img src="assets/uploads/micro.webp"></a></div><div class="course-body"><h4>M.Sc. Microbiology</h4><p>Advanced microbial sciences.</p><div class="course-meta"><span>Credits: 88</span><span>2 Years</span></div><a class="default-btn btn-block" href="msc-microbiology.php">Apply Now</a></div></div></div>

      <div class="col-lg-3 col-md-6 mb-30"><div class="course-card"><div class="course-img"><a href="msc-biotechnology.php"><img src="assets/uploads/biotechnology.webp"></a></div><div class="course-body"><h4>M.Sc. Biotechnology</h4><p>Modern biotechnology and applications.</p><div class="course-meta"><span>Credits: 88</span><span>2 Years</span></div><a class="default-btn btn-block" href="msc-biotechnology.php">Apply Now</a></div></div></div>

      <div class="col-lg-3 col-md-6 mb-30"><div class="course-card"><div class="course-img"><a href="msc-environmental-science.php"><img src="assets/uploads/evs-3.webp"></a></div><div class="course-body"><h4>M.Sc. Environmental Science</h4><p>Advanced environmental studies.</p><div class="course-meta"><span>Credits: 88</span><span>2 Years</span></div><a class="default-btn btn-block" href="msc-environmental-science.php">Apply Now</a></div></div></div>

    </div>

    <!-- ================= DOCTORAL PROGRAM ================= -->
    <div class="section-title text-center mb-50 mt-40">
      <h2>Doctoral <span>Program</span></h2>
      <p>Research-focused doctoral program for academic excellence.</p>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="best-university-for-phd-in-dehradun-uttarakhand.php">
              <img src="assets/uploads/phd.webp">
            </a>
          </div>
          <div class="course-body">
            <h4>Ph.D Program</h4>
            <p>Advanced doctoral research with academic and industry impact.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="best-university-for-phd-in-dehradun-uttarakhand.php">Apply Now</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>


<!-- global opportunities start  -->
<section class="global-opportunities  pt-40">
  <div class="container">
    <div class="section-title text-center">
      <h2>🌍 Global <span>Opportunities</span></h2>
      <p>Expanding horizons with higher studies, international careers, and global collaborations.</p>
    </div>

    <div class="timeline mt-5">

      <div class="timeline-item">
        <div class="timeline-icon">🎓</div>
        <div class="timeline-content">
          <h5>Higher Studies & Research</h5>
          <p>Postgraduate students are mentored for higher studies and research in top-ranking global institutions.</p>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-icon">📘</div>
        <div class="timeline-content">
          <h5>Global Education Pathways</h5>
          <p>The curriculum aligns with international standards, preparing students for GRE, TOEFL, and IELTS.</p>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-icon">⚗️</div>
        <div class="timeline-content">
          <h5>Chemistry Careers</h5>
          <p>Opportunities as Research Chemists, Medicinal Chemists, Food Chemists, QC Chemists, and more worldwide.</p>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-icon">🌱</div>
        <div class="timeline-content">
          <h5>Life Science Careers</h5>
          <p>Graduates in Environmental Science, Botany, Zoology, Microbiology, and Biotechnology find roles globally.</p>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-icon">🐾</div>
        <div class="timeline-content">
          <h5>Global Conservation</h5>
          <p>Zoologists contribute to conservation initiatives with WWF, UNEP, and CITES worldwide.</p>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-icon">🔬</div>
        <div class="timeline-content">
          <h5>International Research</h5>
          <p>Research opportunities with ZSI, WWI, DRDO, UCOST, CSIR, ICAR, and global collaborations.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- global opportunities end  -->
<!-- clubs section -->
<section class="clubs-section py-5">
  <div class="container">
    <div class="section-title pb-50">
      <h2>Student <span>Clubs & Societies 🌟</span></h2>
    </div>

    <!-- Clubs Section -->
    <h4 class="mb-4 text-primary fw-bold fs-3">Clubs</h4>
    <div class="row g-4 text-center">

      <div class="col-lg-4 col-md-6">
        <div class="club-card h-100 p-3">
          <div class="club-icon mb-2">🏅</div>
          <h5 class="club-title">Sports Clubs</h5>
          <p class="club-desc">Promotes health, teamwork, and competitive spirit through various sports activities.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="club-card h-100 p-3">
          <div class="club-icon mb-2">📘</div>
          <h5 class="club-title">Academic Clubs</h5>
          <p class="club-desc">Focused on knowledge sharing, study groups, and academic competitions.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="club-card h-100 p-3">
          <div class="club-icon mb-2">🎭</div>
          <h5 class="club-title">Cultural Clubs</h5>
          <p class="club-desc">Celebrates arts, traditions, and diverse cultural expressions.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="club-card h-100 p-3">
          <div class="club-icon mb-2">💼</div>
          <h5 class="club-title">Career Exploration</h5>
          <p class="club-desc">Guides students towards career choices, internships, and industry exposure.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="club-card h-100 p-3">
          <div class="club-icon mb-2">🎨</div>
          <h5 class="club-title">Hobby Clubs</h5>
          <p class="club-desc">Encourages students to pursue hobbies like photography, music, or painting.</p>
        </div>
      </div>
    </div>

    <!-- Societies Section -->
    <h4 class="mt-5 mb-4 text-primary fw-bold fs-3">Societies</h4>
    <div class="row g-4 text-center">

      <div class="col-lg-4 col-md-6">
        <div class="club-card h-100 p-3">
          <div class="club-icon mb-2">🧪</div>
          <h5 class="club-title">Indian Chemical Society</h5>
          <p class="club-desc">Dedicated to advancing chemical sciences and fostering collaboration in India.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="club-card h-100 p-3">
          <div class="club-icon mb-2">🔬</div>
          <h5 class="club-title">Institute of Chemistry of Ireland</h5>
          <p class="club-desc">Promotes chemical research, education, and professional growth in Ireland.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="club-card h-100 p-3">
          <div class="club-icon mb-2">🌎</div>
          <h5 class="club-title">American Chemical Society</h5>
          <p class="club-desc">Global leader in chemistry, supporting research and innovation worldwide.</p>
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
          Choosing the right place to pursue your education is a life-changing decision—one that shapes not only your academic journey but also your personal and professional future. At our institution, we go beyond conventional learning by offering an ecosystem of innovation, creativity, and global opportunities.
        </p>
        <p class="text-muted">Our focus is on preparing students to thrive in a fast-evolving world where adaptability, critical thinking, and ethical leadership matter as much as subject expertise. With state-of-the-art infrastructure, hands-on industry exposure, and mentorship from accomplished faculty, we ensure that every learner is equipped to transform ideas into impactful realities.</p>
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
            We provide a future-ready curriculum that balances theory with practical learning,
            ensuring students graduate with strong knowledge and essential skills for success.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="feature-box">
          <span class="feature-icon">⚖️</span>
          <h5>Ethics Meets Knowledge</h5>
          <p>
            Beyond academics, we emphasize building responsible individuals who act with integrity,
            guided by strong values and social responsibility.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="feature-box">
          <span class="feature-icon">🌍</span>
          <h5>Global Readiness</h5>
          <p>
            Exposure to diverse ideas, collaborations, and real-world experiences prepares
            students to thrive in a connected and dynamic global environment.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="feature-box">
          <span class="feature-icon">🔬</span>
          <h5>Research & Creativity</h5>
          <p>
            We encourage curiosity, exploration, and innovative thinking, nurturing a spirit of
            discovery and creative problem-solving across all disciplines.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="feature-box">
          <span class="feature-icon">🤝</span>
          <h5>Supportive, Inclusive Environment</h5>
          <p>
            A welcoming and inclusive culture where every student is supported, mentored,
            and empowered to grow personally, academically, and professionally.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="feature-box">
          <span class="feature-icon">📚</span>
          <h5>Commitment to Lifelong Learning</h5>
          <p>
            Education here inspires curiosity, critical thinking, and a passion for continuous
            growth—preparing students for success throughout life.
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
$dept = "Life & Applied"; // change dynamically if needed

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