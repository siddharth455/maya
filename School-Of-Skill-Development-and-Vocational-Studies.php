<?php
$page_title = "School of Skill Development & Vocational Studies | Maya Devi University";
$page_description = "Explore skill-based and vocational programs at Maya Devi University, Dehradun under School of Skill Development.";
$canonical_url = "https://maya.edu.in/School-Of-Skill-Development-and-Vocational-Studies.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php" ?>
<!-- Hero Section -->
<section class="hero-section" style="background: url('assets/uploads/skdvs.jpg') center/cover no-repeat; height:70vh;">
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
        The School of Skill Development and Vocational Studies is committed to empowering individuals with practical, industry-relevant skills. Established with a vision to bridge the gap between education and employability, the school offers a diverse range of programs that focus on hands-on training, real-world application, and lifelong learning.
      </p>
      <p>
        The School of Skill Development and Vocational Studies is committed to empowering individuals with practical, industry-relevant skills. Established with a vision to bridge the gap between education and employability, the school offers a diverse range of programs that focus on hands-on training, real-world application, and lifelong learning.
      </p>
      <p>To become a leading institution in skill-based education, fostering innovation, entrepreneurship, and global employability through excellence in vocational training.</p>
      <a class="default-btn btn-block" href="assets/uploads/fee/MDU — School of Skill Development & Vocational Studies.pdf">Download fee structure</a>
    </div>
    <!-- About Section -->
    <!-- Right Image -->
    <div class="col-md-5 text-center">
      <div class="img-container">
        <img src="assets/uploads/vocational.webp"
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
          <span class="counter" data-target="15">0</span>+
        </h3>
        <p class="mb-0">Programs Offered</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#f6fffa;">
        <i class="fa fa-certificate fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="400">0</span>+
        </h3>
        <p class="mb-0">Students Placed</p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#f9f8ff;">
        <i class="fa fa-briefcase fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="8">0</span>+
        </h3>
        <p class="mb-0">Highest Package (LPA)</p>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#fff8f2;">
        <i class="fa fa-globe fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="50">0</span>+
        </h3>
        <p class="mb-0">Industrial Partners</p>
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

    <!-- ================= UNDERGRADUATE B.VOC PROGRAMS ================= -->
    <div class="section-title text-center mb-50">
      <h2>B.Voc <span>Programs</span></h2>
      <p>Skill-oriented undergraduate programs designed to enhance employability and industry readiness.</p>
    </div>

    <div class="row">

      <!-- B.Voc Agriculture -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="b.voc-agriculture.php"><img src="assets/uploads/agri.webp" alt=""></a>
          </div>
          <div class="course-body">
            <h4>B.Voc Agriculture</h4>
            <p>Practical training in modern agriculture, sustainable farming, and agri-business.</p>
            <div class="course-meta"><span>Credits: 125</span><span>3 Years</span></div>
            <a class="default-btn btn-block" href="b.voc-agriculture.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- B.Voc Aviation -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="b.voc-aviation.php"><img src="assets/uploads/aviation.webp" alt=""></a>
          </div>
          <div class="course-body">
            <h4>B.Voc Aviation</h4>
            <p>Prepares students for careers in airline, airport, and aviation services.</p>
            <div class="course-meta"><span>Credits: 125</span><span>3 Years</span></div>
            <a class="default-btn btn-block" href="b.voc-aviation.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- B.Voc Food Production -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="b.voc-food-production.php"><img src="assets/uploads/food-production.webp" alt=""></a>
          </div>
          <div class="course-body">
            <h4>B.Voc Food Production</h4>
            <p>Training in culinary preparation, kitchen operations, and food safety.</p>
            <div class="course-meta"><span>Credits: 125</span><span>3 Years</span></div>
            <a class="default-btn btn-block" href="b.voc-food-production.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- B.Voc Welding -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="b.voc-welding.php"><img src="assets/uploads/welding.webp" alt=""></a>
          </div>
          <div class="course-body">
            <h4>B.Voc Welding</h4>
            <p>Hands-on training in welding techniques, fabrication, and safety standards.</p>
            <div class="course-meta"><span>Credits: 125</span><span>3 Years</span></div>
            <a class="default-btn btn-block" href="b.voc-welding.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- B.Voc Sales & Marketing -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="b.voc-sales-marketing.php"><img src="assets/uploads/sales.webp" alt=""></a>
          </div>
          <div class="course-body">
            <h4>B.Voc Sales & Marketing</h4>
            <p>Focus on branding, customer engagement, market analysis, and digital tools.</p>
            <div class="course-meta"><span>Credits: 125</span><span>3 Years</span></div>
            <a class="default-btn btn-block" href="b.voc-sales-marketing.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- B.Voc Pharma Assistance -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="b.voc-pharma-assistance.php"><img src="assets/uploads/pharmacy.webp" alt=""></a>
          </div>
          <div class="course-body">
            <h4>B.Voc Pharma Assistance</h4>
            <p>Foundation in pharmacology, medical terminology, and healthcare ethics.</p>
            <div class="course-meta"><span>Credits: 125</span><span>3 Years</span></div>
            <a class="default-btn btn-block" href="b.voc-pharma-assistance.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- B.Voc Bakery & Pastry -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="b.voc-bakery-pastry.php"><img src="assets/uploads/bakery.webp" alt=""></a>
          </div>
          <div class="course-body">
            <h4>B.Voc Bakery & Pastry Arts</h4>
            <p>Hands-on training in breads, pastries, desserts, hygiene, and cost control.</p>
            <div class="course-meta"><span>Credits: 125</span><span>3 Years</span></div>
            <a class="default-btn btn-block" href="b.voc-bakery-pastry.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- B.Voc AIML -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="b.voc-aiml-data-analysis.php"><img src="assets/uploads/data-science.webp" alt=""></a>
          </div>
          <div class="course-body">
            <h4>B.Voc AIML & Data Analysis</h4>
            <p>Introduction to artificial intelligence, machine learning, and data science.</p>
            <div class="course-meta"><span>Credits: 125</span><span>3 Years</span></div>
            <a class="default-btn btn-block" href="b.voc-aiml-data-analysis.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- B.Voc Computer Technology -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="b.voc-computer-technology.php"><img src="assets/uploads/computer.webp" alt=""></a>
          </div>
          <div class="course-body">
            <h4>B.Voc Computer Technology</h4>
            <p>Training in computing systems, software development, and IT infrastructure.</p>
            <div class="course-meta"><span>Credits: 125</span><span>3 Years</span></div>
            <a class="default-btn btn-block" href="b.voc-computer-technology.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- B.Voc Mass Media -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="b.voc-mass-media-production.php"><img src="assets/uploads/media.webp" alt=""></a>
          </div>
          <div class="course-body">
            <h4>B.Voc Mass Media & Production</h4>
            <p>Training in journalism, broadcasting, digital storytelling, and media production.</p>
            <div class="course-meta"><span>Credits: 125</span><span>3 Years</span></div>
            <a class="default-btn btn-block" href="b.voc-mass-media-production.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- B.Voc Finance -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="b.voc-finance-taxation-accounting.php"><img src="assets/uploads/tax.webp" alt=""></a>
          </div>
          <div class="course-body">
            <h4>B.Voc Finance, Taxation & Accounting</h4>
            <p>Skills in financial reporting, taxation compliance, and accounting software.</p>
            <div class="course-meta"><span>Credits: 125</span><span>3 Years</span></div>
            <a class="default-btn btn-block" href="b.voc-finance-taxation-accounting.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- B.Voc E-commerce -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="b.voc-ecommerce-digital-marketing.php"><img src="assets/uploads/digital.webp" alt=""></a>
          </div>
          <div class="course-body">
            <h4>B.Voc E-commerce & Digital Marketing</h4>
            <p>Focus on online business models, digital advertising, and analytics.</p>
            <div class="course-meta"><span>Credits: 125</span><span>3 Years</span></div>
            <a class="default-btn btn-block" href="b.voc-ecommerce-digital-marketing.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- B.Voc Hotel -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="b.voc-hotel-hospitality.php"><img src="assets/uploads/hotel.webp" alt=""></a>
          </div>
          <div class="course-body">
            <h4>B.Voc Hotel & Hospitality Management</h4>
            <p>Training in hotel operations, guest services, and hospitality standards.</p>
            <div class="course-meta"><span>Credits: 125</span><span>3 Years</span></div>
            <a class="default-btn btn-block" href="b.voc-hotel-hospitality.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- B.Voc Patient Care -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="b.voc-patient-healthcare.php"><img src="assets/uploads/patient.webp" alt=""></a>
          </div>
          <div class="course-body">
            <h4>B.Voc Patient & Health Care Management</h4>
            <p>Prepares students for administrative and support roles in healthcare.</p>
            <div class="course-meta"><span>Credits: 125</span><span>3 Years</span></div>
            <a class="default-btn btn-block" href="b.voc-patient-healthcare.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- B.Voc Food Processing -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="b.voc-food-processing-nutrition.php"><img src="assets/uploads/food-1.png" alt=""></a>
          </div>
          <div class="course-body">
            <h4>B.Voc Food Processing & Nutrition Management</h4>
            <p>Focus on food preservation, quality control, and nutrition planning.</p>
            <div class="course-meta"><span>Credits: 125</span><span>3 Years</span></div>
            <a class="default-btn btn-block" href="b.voc-food-processing-nutrition.php">Apply Now</a>
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
      <h2>Student <span>Clubs 🎓</span></h2>
    </div>

    <!-- Student Societies -->
    <div class="row g-4">
      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">💻</div>
          <h5 class="club-title">TechSkill Club</h5>
          <p class="club-desc">Focuses on technical workshops and hackathons.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🌱</div>
          <h5 class="club-title">Green Hands Society</h5>
          <p class="club-desc">Promotes sustainable practices and community outreach.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🚀</div>
          <h5 class="club-title">Entrepreneurship Cell</h5>
          <p class="club-desc">Encourages innovation, startups, and leadership among students.</p>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- clubs section ends -->
<section class="clubs-section py-5">
  <div class="container">
    <div class="section-title pb-50">
      <h2>Career <span>Options 💼</span></h2>
    </div>

    <!-- Career Options -->
    <div class="row g-4">
      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🌾</div>
          <h5 class="club-title">Agriculture Specialist</h5>
          <p class="club-desc">Expert in modern farming techniques, crop management, and agri-business.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">✈️</div>
          <h5 class="club-title">Aviation Professional</h5>
          <p class="club-desc">Careers in piloting, air traffic control, or aviation management.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🔧</div>
          <h5 class="club-title">Welding Technician</h5>
          <p class="club-desc">Specialist in welding, fabrication, and metal joining technologies.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🍲</div>
          <h5 class="club-title">Food Production Manager</h5>
          <p class="club-desc">Oversees food processing, safety, and quality standards in production units.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">💼</div>
          <h5 class="club-title">Sales & Marketing Executive</h5>
          <p class="club-desc">Drives business growth through sales strategies and market research.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">💊</div>
          <h5 class="club-title">Pharmaceutical Assistant</h5>
          <p class="club-desc">Supports pharmacists in dispensing medicines and patient care.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🥐</div>
          <h5 class="club-title">Bakery & Pastry Chef</h5>
          <p class="club-desc">Creates artisan breads, pastries, and desserts in culinary arts.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">📊</div>
          <h5 class="club-title">Data Analyst</h5>
          <p class="club-desc">Analyzes data to provide insights for decision-making and business strategies.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🖥️</div>
          <h5 class="club-title">Computer Technician</h5>
          <p class="club-desc">Installs, repairs, and maintains computer systems and networks.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🎥</div>
          <h5 class="club-title">Media Professional</h5>
          <p class="club-desc">Works in journalism, broadcasting, film, or digital content creation.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">📉</div>
          <h5 class="club-title">Financial Analyst</h5>
          <p class="club-desc">Evaluates financial data to guide investments and business strategies.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">📱</div>
          <h5 class="club-title">Digital Marketing Specialist</h5>
          <p class="club-desc">Promotes brands online through SEO, social media, and campaigns.</p>
        </div>
      </div>
    </div>
  </div>
</section>




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
$dept = "Vocational"; // change dynamically if needed

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