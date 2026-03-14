<?php
$page_title = "Nursing Assistant Course in Dehradun | Maya Devi University";
$page_description = "Join Nursing Assistant course at Maya Devi University, Dehradun with practical hospital-based training.";
$canonical_url = "https://maya.edu.in/nursing-assistant.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php"?>
  <!-- Hero Section -->
  <section class="hero-section" style="background: url('assets/uploads/sn.jpg') center/cover no-repeat; height:70vh;">
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
      The School of Nursing at Maya Devi University is a center of excellence in nursing education, research, and clinical practice. Established with the goal of producing skilled and compassionate healthcare professionals, the department is known for its rigorous academic standards and hands-on training.
      </p>
      <p>
      At our School of Nursing, our mission is to provide unparalleled education and hands-on training for students aiming to succeed in the dynamic and ever-evolving healthcare sector.Equipped with state-of-the-art infrastructure, a comprehensive and industry-relevant curriculum, immersive learning experiences, and a supportive learning environment, we strive to foster the holistic development of every student.
      </p>
      <p>Our goal is to empower individuals with the confidence and competence needed to excel across a wide spectrum of career opportunities in the healthcare domain.We are dedicated to offering a multifaceted and integrated educational experience, consistently updating our curriculum to reflect the latest trends, innovations, and demands of the global healthcare industry.</p>
    </div>
  <!-- About Section -->
    <!-- Right Image -->
    <div class="col-md-5 text-center">
  <div class="img-container">
    <img src="assets/uploads/nursing.webp" 
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
          <span class="counter" data-target="3">0</span>+
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
  }, { threshold: 0.5 });

  counters.forEach(counter => {
    observer.observe(counter);
  });
});
</script>

<!-- Courses Section -->
<div class="course-area bg-light pt-60 pb-60">
  <div class="container">

    <!-- ================= DIPLOMA / CERTIFICATE PROGRAMS ================= -->
    <div class="section-title text-center mb-50">
      <h2>Diploma & Certificate <span>Programs</span></h2>
      <p>Skill-based healthcare programs designed to prepare students for professional patient care roles.</p>
    </div>

    <div class="row">

      <!-- GNM -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="gnm.php">
              <img src="assets/uploads/gnm.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>General Nursing & Midwifery (GNM)</h4>
            <p>The GNM program is a diploma course focused on professional nursing care, midwifery, and patient management.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="gnm.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- Nursing Assistant -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="nursing-assistant.php">
              <img src="assets/uploads/na.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>Nursing Assistant</h4>
            <p>The Nursing Assistant certificate program trains students in basic patient care and clinical support services.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>1.5 Years</span>
            </div>
            <a class="default-btn btn-block" href="nursing-assistant.php">Apply Now</a>
          </div>
        </div>
      </div>

    </div>

    <!-- ================= UNDERGRADUATE PROGRAMS ================= -->
    <div class="section-title text-center mb-50 mt-40">
      <h2>Undergraduate <span>Programs</span></h2>
      <p>Comprehensive degree programs designed for professional nursing and healthcare careers.</p>
    </div>

    <div class="row">

      <!-- B.Sc Nursing -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="bsc-nursing.php">
              <img src="assets/uploads/nursing-1.jpg" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>B.Sc. Nursing</h4>
            <p>The B.Sc. Nursing program is a four-year undergraduate degree focused on professional nursing care and clinical excellence.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>4 Years</span>
            </div>
            <a class="default-btn btn-block" href="bsc-nursing.php">Apply Now</a>
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
      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">👩‍⚕️</div>
          <h5 class="club-title">Nursing Leadership Club</h5>
          <p class="club-desc">Focuses on developing leadership skills and professional growth in nursing.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🏥</div>
          <h5 class="club-title">Health Awareness Society</h5>
          <p class="club-desc">Organizes community health drives and awareness programs.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🩺</div>
          <h5 class="club-title">Clinical Excellence Forum</h5>
          <p class="club-desc">Promotes best practices in patient care and clinical skills.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🔬</div>
          <h5 class="club-title">Research & Innovation Club</h5>
          <p class="club-desc">Encourages research activities and innovative healthcare solutions.</p>
        </div>
      </div>
    </div>

    <!-- Professional Societies -->
    <h3 class="group-title mt-5 mb-3"><strong>Professional Societies</strong></h3>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">📘</div>
          <h5 class="club-title">Indian Nursing Council</h5>
          <p class="club-desc">Professional body for nursing education and practice standards.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🌐</div>
          <h5 class="club-title">International Council of Nurses</h5>
          <p class="club-desc">Global federation of national nurses associations.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🇺🇸</div>
          <h5 class="club-title">American Nurses Association</h5>
          <p class="club-desc">Professional organization for registered nurses.</p>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- clubs section ends -->
  <section class="global-opportunities py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 style="color:#00a651; font-weight:700;">Global Opportunities</h2>
      <p style="color:#555;">Explore pathways to excel in nursing worldwide</p>
    </div>

    <div class="opportunity-grid">
      <!-- Licensing Exams -->
      <div class="opportunity-box">
        <h4>Licensing Exams</h4>
        <ul>
          <li>NCLEX (USA) – National Council Licensure Examination</li>
          <li>HAAD (UAE) – Health Authority Abu Dhabi</li>
          <li>NMC (UK) – Nursing and Midwifery Council</li>
          <li>CGFNS (USA) – Commission on Graduates of Foreign Nursing Schools</li>
        </ul>
      </div>

      <!-- Higher Education -->
      <div class="opportunity-box">
        <h4>Higher Education</h4>
        <ul>
          <li>Postgraduate Programs Abroad</li>
          <li>Research Fellowships</li>
          <li>Ph.D. Opportunities in Nursing</li>
        </ul>
      </div>

      <!-- Certifications -->
      <div class="opportunity-box">
        <h4>Certifications</h4>
        <ul>
          <li>WHO Certification Programs</li>
          <li>Red Cross Training Programs</li>
          <li>Specialized Nursing Certifications</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<style>
  .opportunity-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
  }

  .opportunity-box {
    background: linear-gradient(135deg, #00a65110, #307AD510);
    border: 1px solid #e5e5e5;
    border-radius: 12px;
    padding: 25px;
    min-height: 260px; /* ensures equal height */
    display: flex;
    flex-direction: column;
    justify-content: center;
    transition: all 0.3s ease;
  }

  .opportunity-box:hover {
    border-color: #00a651;
    transform: translateY(-6px);
    box-shadow: 0 8px 18px rgba(0,0,0,0.08);
  }

  .opportunity-box h4 {
    color: #307AD5;
    font-weight: 600;
    margin-bottom: 15px;
  }

  .opportunity-box ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .opportunity-box ul li {
    position: relative;
    padding-left: 20px;
    margin-bottom: 8px;
    color: #333;
  }

  .opportunity-box ul li::before {
    content: "•";
    position: absolute;
    left: 0;
    color: #00a651;
    font-weight: bold;
  }
</style>

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