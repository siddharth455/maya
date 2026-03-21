<?php
$page_title = "Agriculture Courses in Dehradun | Maya Devi University";
$page_description = "Study Agriculture at Maya Devi University, Dehradun with practical field training, modern labs, and industry-focused curriculum.";
$canonical_url = "https://maya.edu.in/agriculture.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php" ?>
<!-- Hero Section -->
<section class="hero-section" style="background: url('assets/uploads/sat.jpg') center/cover no-repeat; height:70vh;">
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
        The School of Agriculture and Technology, Maya Devi University, Selaqui, Dehradun is a dynamic academic and research institution committed to advancing sustainable agricultural practices, technological innovation and rural development. The department of Agriculture was established in 2013 and School of Agriculture & Technology in 2024.
      </p>
      <p>
        The school addresses the evolving challenges in food production, environmental sustainability and technological advancement and plays a vital role in training the next generation of professionals in agriculture and allied sciences. Rooted in a tradition of excellence and practical learning, the school offers programs that integrate modern scientific knowledge with hands-on experience in areas such as plant breeding, crop and soil science, horticultural sciences, agricultural engineering, food technology, microbiology, biochemistry, plant biotechnology and environmental management.
      </p>
      <p>The School of Agriculture follows a robust and nationally aligned
curriculum strictly based on the Indian Council of Agricultural Research (ICAR) Sixth
Deans’ Committee recommendations. All academic programmes of the School are designed,
structured, and implemented in accordance with ICAR norms, guidelines, and credit
requirements, ensuring uniformity, quality, and relevance in agricultural education.
The School offers undergraduate, postgraduate, and doctoral programmes that include
foundation courses, core courses, elective courses, practicals, seminars, research work, and
compulsory experiential components such as Rural Agricultural Work Experience (RAWE),
Student READY programme, in-plant training, and research projects, as prescribed by
ICAR.”
</p>
    </div>
    <!-- About Section -->
    <!-- Right Image -->
    <div class="col-md-5 text-center">
      <div class="img-container">
        <img src="assets/uploads/agriculture.webp"
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
          <span class="counter" data-target="11">0</span>+
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
        <p class="mb-0">Students Enrolled</p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#f9f8ff;">
        <i class="fa fa-briefcase fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="21">0</span>+
        </h3>
        <p class="mb-0">Highest Package (LPA)</p>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#fff8f2;">
        <i class="fa fa-globe fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="80">0</span>+
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
      <p>Industry-aligned undergraduate programs designed as per ICAR norms to build strong foundations in agriculture and food sciences.</p>
    </div>

    <div class="row">

      <!-- B.Sc Agriculture -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="bsc-agriculture-colleges-in-dehradun-uttarakhand.php">
              <img src="assets/uploads/agri.webp" alt="Course Image">
            </a>
          </div>
          <div class="course-body">
            <h4>B.Sc. in Agriculture (Hons.)</h4>
            <p>Focuses on crop production, soil management, and modern farming techniques for careers in agriculture and agribusiness.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>4 Years</span>
            </div>
            <a class="default-btn btn-block" href="bsc-agriculture-colleges-in-dehradun-uttarakhand.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- B.Sc Horticulture -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="bsc-horticulture-colleges-in-dehradun-uttarakhand.php">
              <img src="assets/uploads/horticulture-1.jpg" alt="Course Image">
            </a>
          </div>
          <div class="course-body">
            <h4>B.Sc. in Horticulture (Hons.)</h4>
            <p>Focuses on modern horticulture techniques, nursery management, landscape design, and post-harvest management</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>4 Years</span>
            </div>
            <a class="default-btn btn-block" href="bsc-horticulture-colleges-in-dehradun-uttarakhand.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- B.Sc Food Technology -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="food-technology.php">
              <img src="assets/uploads/food.webp" alt="Course Image">
            </a>
          </div>
          <div class="course-body">
            <h4>Bachelor in Food Technology</h4>
            <p>Focuses on food processing, preservation, quality control, and production skills for the food industry.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="food-technology.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- B.Sc Food Technology Hons -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="food-technology.php">
              <img src="assets/uploads/food.webp" alt="Course Image">
            </a>
          </div>
          <div class="course-body">
            <h4>Bachelor in Food Technology (Hons.)</h4>
            <p>Emphasizes advanced food processing, quality assurance, research, and production skills.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>4 Years</span>
            </div>
            <a class="default-btn btn-block" href="food-technology.php">Apply Now</a>
          </div>
        </div>
      </div>

       <!-- B.tech Food Technology -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="b-tech-food-technology.php">
              <img src="assets/uploads/food-technology.jpg" alt="Course Image">
            </a>
          </div>
          <div class="course-body">
            <h4>B.tech Food Technology</h4>
            <p>Emphasizes advanced food processing laboratories, pilot plants, and industry-based projects enhances technical, analytical, and managerial competencies.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>4 Years</span>
            </div>
            <a class="default-btn btn-block" href="b-tech-food-technology.php">Apply Now</a>
          </div>
        </div>
      </div>

    </div>

    <!-- ================= POSTGRADUATE PROGRAMS ================= -->
    <div class="section-title text-center mb-50 mt-40">
      <h2>Postgraduate <span>Programs</span></h2>
      <p>Advanced programs focused on research, sustainability, and leadership in agriculture and allied sciences.</p>
    </div>

    <div class="row">

      <!-- M.Sc Agriculture -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="master-in-agriculture.php">
              <img src="assets/uploads/agriculture.webp" alt="Course Image">
            </a>
          </div>
          <div class="course-body">
            <h4>Master in Agriculture</h4>
            <p>Advanced training in crop production, soil management, and sustainable farming for research and leadership roles.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="master-in-agriculture.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- M.Sc Horticulture -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="horticulture-colleges-in-dehradun-uttarakhand.php">
              <img src="assets/uploads/horticulture.webp" alt="Course Image">
            </a>
          </div>
          <div class="course-body">
            <h4>Master in Horticulture</h4>
            <p>Focuses on advanced plant cultivation, crop management, and sustainable horticultural practices.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="horticulture-colleges-in-dehradun-uttarakhand.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- M.Sc Genetics & Plant Breeding -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="genetics-and-plant-breeding.php">
              <img src="assets/uploads/genetics.webp" alt="Course Image">
            </a>
          </div>
          <div class="course-body">
            <h4>M.Sc. Genetics & Plant Breeding</h4>
            <p>Focuses on plant genetics, crop improvement, and research skills for modern agriculture.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="genetics-and-plant-breeding.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- M.Sc Food Technology -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="master-in-food-technology.php">
              <img src="assets/uploads/food-2.webp" alt="Course Image">
            </a>
          </div>
          <div class="course-body">
            <h4>Master in Food Technology</h4>
            <p>Provides in-depth knowledge and hands-on skills in food processing, preservation, and quality assurance.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="master-in-food-technology.php">Apply Now</a>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>

<!-- clubs section -->
<section class="career-options-section py-5">
  <div class="container">
    <div class="section-title pb-50">
      <h2>Career <span>Options 🌱</span></h2>
    </div>
    <div class="row g-4">

      <div class="col-md-3 col-sm-6">
        <div class="club-card">
          <div class="club-icon">👨‍🔬</div>
          <h5 class="club-title">Agricultural Scientist</h5>
          <p class="club-desc">Conducts research to improve crop yield, soil health, and sustainable farming practices.</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🥗</div>
          <h5 class="club-title">Food Technologist</h5>
          <p class="club-desc">Ensures food safety, quality, and innovation in the production of food products.</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🌾</div>
          <h5 class="club-title">Agronomist</h5>
          <p class="club-desc">Focuses on soil management, crop production, and sustainable agriculture methods.</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🌸</div>
          <h5 class="club-title">Horticulturist</h5>
          <p class="club-desc">Specializes in growing fruits, vegetables, flowers, and ornamental plants.</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🌱</div>
          <h5 class="club-title">Plant Breeder</h5>
          <p class="club-desc">Develops new plant varieties with higher yield, disease resistance, and adaptability.</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="club-card">
          <div class="club-icon">📊</div>
          <h5 class="club-title">Agricultural Consultant</h5>
          <p class="club-desc">Advises farmers and agribusinesses on modern farming techniques and strategies.</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🔬</div>
          <h5 class="club-title">Research Scientist</h5>
          <p class="club-desc">Conducts studies in labs and fields to advance agricultural science.</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🚜</div>
          <h5 class="club-title">Farm Manager</h5>
          <p class="club-desc">Oversees daily farming operations, resource management, and productivity goals.</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🏢</div>
          <h5 class="club-title">Agricultural Officer</h5>
          <p class="club-desc">Works with government and institutions to support agricultural policies and schemes.</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="club-card">
          <div class="club-icon">✅</div>
          <h5 class="club-title">Quality Control Specialist</h5>
          <p class="club-desc">Ensures agricultural and food products meet required standards and certifications.</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="club-card">
          <div class="club-icon">💼</div>
          <h5 class="club-title">Agricultural Entrepreneur</h5>
          <p class="club-desc">Builds innovative agri-business ventures in farming, food, and allied industries.</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🌍</div>
          <h5 class="club-title">Agricultural Extension Officer</h5>
          <p class="club-desc">Connects research with farmers to implement modern practices in rural areas.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- clubs section ends -->

<section class="clubs-societies-section py-5">
  <div class="container">
    <div class="section-title pb-50">
      <h2>Student <span>Clubs & Societies 🌾</span></h2>
    </div>
    <div class="row g-4">

      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🏃‍♂️</div>
          <h5 class="club-title">Agri-Sport</h5>
          <p class="club-desc">Promotes fitness and teamwork through agriculture-themed sports and outdoor activities.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🌾</div>
          <h5 class="club-title">The Crop Crew</h5>
          <p class="club-desc">A student-led group focusing on crop science, farming practices, and sustainable agriculture.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🌟</div>
          <h5 class="club-title">The Golden Grains</h5>
          <p class="club-desc">Celebrates agricultural heritage, food security, and innovation in grain production.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Why Choose Us -->
<section class="why-choose-us py-5">
  <div class="container">
    <div class="row align-items-center mb-5">
  <div class="col-lg-12">
    <div class="section-title pb-20">
      <h2>Why <span>Choose Us ?</span></h2>
    </div>

    <p class="text-muted">
      In a world facing increasing population and climate challenges, the demand for skilled
      professionals in agriculture and technology is higher than ever. SoAT prepares you to be
      a part of the solution.
    </p>

    <h5 class="mt-4">🌍 Global Demand</h5>
    <p class="text-muted">
      Graduates are sought after worldwide in government agencies, agribusiness, research, and
      international NGOs.
    </p>

    <h5 class="mt-3">🧪 Hands-On Experience</h5>
    <p class="text-muted">
      From on-campus farms to high-tech labs, gain practical skills for real-world challenges in
      food systems and Agri-tech entrepreneurship.
    </p>

    <h5 class="mt-3">🚀 Innovation & Impact</h5>
    <p class="text-muted">
      We foster creative thinking, supporting startups and research projects that shape the
      future of agriculture and tackle global issues like food insecurity.
    </p>

    <a href="https://admissions.maya.edu.in" class="btn btn-success btn-lg mt-3">
      Apply Now →
    </a>
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
<section class="awards-section py-5">
  <div class="container">
    <div class="section-title mb-4">
      <h2 class="fw-bold">🏆 Awards <span>& Recognitions</span></h2>
      <p class="text-muted">
        The School of Agriculture and Technology has consistently demonstrated excellence in education, research, and community engagement,
        earning numerous awards and recognitions. These accolades highlight the school’s commitment to innovation, sustainability, and academic distinction.
      </p>
    </div>

    <!-- Responsive Table Wrapper -->
    <div class="table-responsive">
      <table class="table table-hover align-middle shadow-sm rounded">
        <thead class="table-dark">
          <tr>
            <th>Sr. No.</th>
            <th>Name of Faculty</th>
            <th>Name of Awards/Recognition</th>
            <th>Date & Year</th>
            <th>Name of Awarding Agency</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td><strong>Dr. Sarvesh Rastogi</strong></td>
            <td>Excellent Researcher Award</td>
            <td>2025</td>
            <td>Scientific Laurels</td>
          </tr>
          <tr>
            <td>2</td>
            <td><strong>Dr. DS Rawat</strong></td>
            <td>Uttarakhand Gaurav Award</td>
            <td>2026</td>
            <td>UK World Record</td>
          </tr>
          <tr>
            <td>3</td>
            <td><strong>Dr. Naveen</strong></td>
            <td>Best Researcher Award</td>
            <td>2025</td>
            <td>Analytical Chemistry</td>
          </tr>
          <tr>
            <td>4</td>
            <td><strong>Dr. Vinay</strong></td>
            <td>Best Oral Presentation Award</td>
            <td>2025</td>
            <td>Agro Environment Developmental Society (AEDS) UP</td>
          </tr>
           <tr>
            <td>5</td>
            <td><strong>Dr. Vinay</strong></td>
            <td>Best Thesis Award</td>
            <td>2025</td>
            <td>Agro Environment Developmental Society (AEDS) UP</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>
<style>
  .awards-section {
    background: #f9fdf9;
  }

  .table-responsive {
    border-radius: 12px;
    overflow-x: auto;
    /* Enables horizontal scroll on small screens */
    -webkit-overflow-scrolling: touch;
  }

  .table {
    border-radius: 12px;
    overflow: hidden;
  }

  .table thead {
    background: #00703c;
    /* dark green theme */
    color: #fff;
  }

  .table-hover tbody tr:hover {
    background: #f1fdf5;
    /* soft green hover */
  }
</style>
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
$dept = "Agriculture"; // change dynamically if needed

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