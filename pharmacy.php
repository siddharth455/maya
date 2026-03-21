<?php
$page_title = "Pharmacy College in Dehradun | Maya Devi University";
$page_description = "Join Pharmacy programs at Maya Devi University, Dehradun including B.Pharm, D.Pharm and M.Pharm with advanced labs.";
$canonical_url = "https://maya.edu.in/pharmacy.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php"?>
  <!-- Hero Section -->
  <section class="hero-section" style="background: url('assets/uploads/sp.jpg') center/cover no-repeat; height:70vh;">
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
      The Pharmacy department in a Maya Devi University (School of Pharmacy) is an academic unit dedicated to the education, training, and research in the field of pharmaceutical sciences. It plays a crucial role in preparing students to become qualified pharmacists, researchers, and professionals in various sectors of healthcare and industry.
      </p>
      <p>
      It has well equipped laboratories namely Pharmaceutics lab, Pharma-chemistry lab, Human Anatomy and Physiology lab, Pharmacognosy lab, Pharmacology lab, Microbiology lab, Central Instrumentation Lab, Pharmacy Practice lab, Machine Room, Museum.
      </p>
      <p>It also has well equipped class rooms with seminar corridor, library with latest text books and Pharmaceutical journals, boys' common room, girls' common room, faculty rooms hostel and transport facilities.</p>
    </div>
  <!-- About Section -->
    <!-- Right Image -->
    <div class="col-md-5 text-center">
  <div class="img-container">
    <img src="assets/uploads/pharmacy.webp" 
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
          <span class="counter" data-target="7">0</span>+
        </h3>
        <p class="mb-0">Programs Offered</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#f6fffa;">
        <i class="fa fa-certificate fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="134">0</span>+
        </h3>
        <p class="mb-0">Students Placed</p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#f9f8ff;">
        <i class="fa fa-briefcase fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="16">0</span>+
        </h3>
        <p class="mb-0">Highest Package (LPA)</p>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#fff8f2;">
        <i class="fa fa-globe fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="35">0</span>+
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

    <!-- ================= DIPLOMA PROGRAMS ================= -->
    <div class="section-title text-center mb-50">
      <h2>Diploma <span>Programs</span></h2>
      <p>Foundation-level programs focused on practical pharmaceutical education.</p>
    </div>

    <div class="row">

      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="best-d-pharma-college-in-dehradun-uttarakhand.php">
              <img src="assets/uploads/d.pharmacy.jpeg" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>Diploma in Pharmacy</h4>
            <p>The Diploma in Pharmacy program trains students in pharmaceutical sciences, drug formulation, and practical pharmacy skills.</p>
            <div class="course-meta">
              <span>Credits: Not Applicable</span>
              <span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="best-d-pharma-college-in-dehradun-uttarakhand.php">Apply Now</a>
          </div>
        </div>
      </div>

    </div>

    <!-- ================= UNDERGRADUATE PROGRAMS ================= -->
    <div class="section-title text-center mb-50 mt-40">
      <h2>Undergraduate <span>Programs</span></h2>
      <p>Comprehensive undergraduate programs building strong pharmaceutical foundations.</p>
    </div>

    <div class="row">

      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="best-b-pharma-colleges-in-dehradun-uttarakhand.php">
              <img src="assets/uploads/pharmacy.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>Bachelor of Pharmacy</h4>
            <p>The B.Pharm program provides in-depth knowledge of pharmaceutical sciences, drug development, and professional pharmacy practice.</p>
            <div class="course-meta">
              <span>Credits:  211 - Applicable for students studied Remedial Mathematics 212-Applicable for students Studied Remedial Biology</span>
              <span>4 Years</span>
            </div>
            <a class="default-btn btn-block" href="best-b-pharma-colleges-in-dehradun-uttarakhand.php">Apply Now</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="bachelor-pharmacy-lateral-entry.php">
              <img src="assets/uploads/pharmacy-le.jpg" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>B.Pharm (Lateral Entry)</h4>
            <p>The B.Pharm Lateral Entry program focuses on pharmaceutical sciences, drug development, and pharmacy practice.</p>
            <div class="course-meta">
              <span>Credits: 158</span>
              <span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="bachelor-pharmacy-lateral-entry.php">Apply Now</a>
          </div>
        </div>
      </div>

    </div>

    <!-- ================= POSTGRADUATE PROGRAMS ================= -->
    <div class="section-title text-center mb-50 mt-40">
      <h2>Postgraduate <span>Programs</span></h2>
      <p>Advanced programs emphasizing specialization, research, and innovation.</p>
    </div>

    <div class="row">

      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="master-pharmacy-pharmaceutics.php">
              <img src="assets/uploads/mpharm.jpg" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>Master of Pharmacy</h4>
            <p>The M.Pharm program offers advanced training in pharmaceutical sciences and drug development.</p>
            <div class="course-meta">
              <span>Credits: Minimum 95  Maximum 100</span>
              <span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="master-pharmacy-pharmaceutics.php">Apply Now</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="master-pharmacy-pharmacology.php">
              <img src="assets/uploads/pharma-cology.jpg" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>M.Pharm – Pharmacology</h4>
            <p>Training in drug studies, pharmacological research, and clinical evaluation.</p>
            <div class="course-meta">
              <span>Credits: Minimum 95  Maximum 100</span>
              <span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="master-pharmacy-pharmacology.php">Apply Now</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="master-pharmacy-pharmaceutics-chemistry.php">
              <img src="assets/uploads/pharmacy.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>M.Pharm – Pharmaceutical Chemistry</h4>
            <p>Focuses on the design, synthesis, and analysis of drugs for R&D careers.</p>
            <div class="course-meta">
              <span>Credits: Minimum 95  Maximum 100</span>
              <span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="master-pharmacy-pharmaceutics-chemistry.php">Apply Now</a>
          </div>
        </div>
      </div>

    </div>

    <!-- ================= DOCTORAL PROGRAM ================= -->
    <div class="section-title text-center mb-50 mt-40">
      <h2>Doctoral <span>Program</span></h2>
      <p>Advanced clinical and research-focused doctoral education.</p>
    </div>

    <div class="row">

      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="DoctorPharmacy.php">
              <img src="assets/uploads/pharm-d.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>Doctor of Pharmacy (Pharm D)</h4>
            <p>The Pharm D program focuses on clinical practice and patient care, preparing students for healthcare careers.</p>
            <div class="course-meta">
              <span>Credits: 173 hrs</span>
              <span>6 Years</span>
            </div>
            <a class="default-btn btn-block" href="DoctorPharmacy.php">Apply Now</a>
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
    <div class="section-title pb-50">
      <h2>Global <span>Pharmacy Pathways 💊</span></h2>
    </div>
    <div class="row g-4">
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🌍</div>
          <h5 class="club-title">FPGEE</h5>
          <p class="club-desc">Foreign Pharmacy Graduate Equivalency Exam for international practice opportunities.</p>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🇬🇧</div>
          <h5 class="club-title">GPhC Exam (UK)</h5>
          <p class="club-desc">Registration exam for pharmacists aspiring to work in the United Kingdom.</p>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🇺🇸</div>
          <h5 class="club-title">NAPLEX (USA)</h5>
          <p class="club-desc">North American Pharmacist Licensure Examination for practice in the U.S.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🇨🇦</div>
          <h5 class="club-title">PEBC (Canada)</h5>
          <p class="club-desc">Qualifying exam for pharmacists to register and work in Canada.</p>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🎓</div>
          <h5 class="club-title">Postgraduate Programs</h5>
          <p class="club-desc">Opportunities for advanced studies in pharmacy and healthcare abroad.</p>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🔬</div>
          <h5 class="club-title">Research Fellowships</h5>
          <p class="club-desc">Engage in fellowships focused on cutting-edge pharmaceutical research.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">📖</div>
          <h5 class="club-title">Ph.D. Opportunities</h5>
          <p class="club-desc">Pursue doctoral studies in pharmacy, drug discovery, and life sciences.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🏥</div>
          <h5 class="club-title">Clinical Pharmacy (FCCP)</h5>
          <p class="club-desc">Certification for expertise in clinical pharmacy and patient care practices.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">⚖️</div>
          <h5 class="club-title">Regulatory Affairs</h5>
          <p class="club-desc">Professional certifications in regulatory compliance and drug approval processes.</p>
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
<!-- award section starts  -->
<section class="awards-section py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold"><i class="bi bi-trophy-fill text-success"></i> Awards & Recognitions</h2>
      <p class="text-muted">Celebrating our achievements in research, innovation, and excellence</p>
    </div>

    <div class="row g-4">
      <!-- Left Column: Patents -->
      <div class="col-lg-7">
        <div class="card shadow-sm h-100 border-0 rounded-4">
          <div class="card-body p-4">
            <h4 class="fw-semibold mb-4 text-success">Department Patents</h4>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">1. Dissolution Testing Apparatus To Simulate Colonic BioEnvironment</li>
              <li class="list-group-item">2. Portable Electro Spinning Device For Development Of Nanofibres</li>
              <li class="list-group-item">3. T-Maze Apparatus For Detection Of Locomotor Activity</li>
              <li class="list-group-item">4. Variable Speed Rotating Drum</li>
              <li class="list-group-item">5. Oil Filled Coverslip For Microscope</li>
              <li class="list-group-item">6. Gas Chromatography Mass Spectrometer Apparatus</li>
              <li class="list-group-item">7. Modified Silverson Mixer Emulsifier For Nanoparticle Synthesis</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Right Column: Recognition -->
      <div class="col-lg-5">
        <div class="card shadow-sm h-100 border-0 rounded-4 text-center">
          <div class="card-body p-4">
            <div class="mb-3">
              <i class="bi bi-award-fill fs-1 text-warning"></i>
            </div>
            <h4 class="fw-semibold">Department Recognition</h4>
            <p class="text-muted mb-4">Our department has been recognized for excellence in research and innovation</p>
            <div class="certificate-box border rounded-3 shadow-sm p-2 bg-white mx-auto" 
     style="width:150px; height:225px; overflow:hidden;">
  <img src="assets/uploads/pharmacy-award.png" 
       alt="Certificate" 
       class="img-fluid rounded" 
       style="width:100%; height:100%; object-fit:cover;">
</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- award section ends  -->


<!-- club section  -->
<section class="clubs-section py-5">
  <div class="container">
    <div class="section-title pb-50">
      <h2>Student <span>Clubs 🌟</span></h2>
    </div>
    <div class="row g-4">
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🏅</div>
          <h5 class="club-title">Sports Club</h5>
          <p class="club-desc">Promotes fitness, teamwork, and participation in indoor and outdoor sports activities.</p>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🎨</div>
          <h5 class="club-title">Art & Culture Club</h5>
          <p class="club-desc">Encourages creativity through music, dance, theater, and cultural events on campus.</p>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">❤️</div>
          <h5 class="club-title">Health Care Club</h5>
          <p class="club-desc">Spreads awareness on health, wellness, and organizes medical camps & blood donation drives.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🌱</div>
          <h5 class="club-title">Clean & Green Club</h5>
          <p class="club-desc">Focuses on sustainability, plantation drives, and campus cleanliness initiatives.</p>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">👩‍🎓</div>
          <h5 class="club-title">Women Empowerment Club</h5>
          <p class="club-desc">Works towards equality, leadership, and awareness programs for women empowerment.</p>
        </div>
      </div>
      
    </div>
  </div>
<!-- club section ends  -->

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
$dept = "Pharmacy"; // change dynamically if needed

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