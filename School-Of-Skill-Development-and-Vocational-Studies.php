<?php require "common/header.php"?>
  <!-- Hero Section -->
  <section class="hero-section" style="background: url('assets/uploads/home-banner.webp') center/cover no-repeat; height:70vh;">
  <div class="hero-content">
      <h3 class="display-5 fw-bold text-white">School of Skill Development <br>and Vocational Studies</h3>
      <p class="lead text-white">Empowering Individuals with Practical, Industry-Relevant Skills at Maya Devi University</p>
      <a href="https://admission.maya.edu.in/" class="btn btn-primary">Apply Now</a>
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
  }, { threshold: 0.5 });

  counters.forEach(counter => {
    observer.observe(counter);
  });
});
</script>

<!-- Courses Section -->
<div class="course-area bg-img pt-40">
    <div class="container">
        <div class="section-title mb-75 course-mrg-small">
            <h2>Our <span>Programs</span></h2>
            <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
        <div class="course-slider-active-3">
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details.php"><img class="animated" src="assets/img/course/course-1.jpg" alt=""></a>
                    <span>Addmission Going On</span>
                </div>
                <div class="course-content">
                    <h4><a href="course-details.php">Apparel Manufacturing</a></h4>
                    <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                            <i class="fa fa-diamond"></i>
                            <span>Credits : 125</span>
                        </div>
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : 4yrs</span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="#">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details.php"><img class="animated" src="assets/img/course/course-2.jpg" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="course-details.php">Grphic Design & Multimedia</a></h4>
                    <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                            <i class="fa fa-diamond"></i>
                            <span>Credits : 125</span>
                        </div>
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : 4yrs</span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="#">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details.php"><img class="animated" src="assets/img/course/course-3.jpg" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="course-details.php">Computer  Engineering</a></h4>
                    <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                            <i class="fa fa-diamond"></i>
                            <span>Credits : 125</span>
                        </div>
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : 4yrs</span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="#">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details.php"><img class="animated" src="assets/img/course/course-4.jpg" alt=""></a>
                    <span>Post Graduation Course</span>
                </div>
                <div class="course-content">
                    <h4><a href="course-details.php">Fashion & Technology</a></h4>
                    <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                            <i class="fa fa-diamond"></i>
                            <span>Credits : 125</span>
                        </div>
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : 4yrs</span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="#">APPLY NOW</a>
                    </div>
                </div>
            </div>
            <div class="single-course">
                <div class="course-img">
                    <a href="course-details.php"><img class="animated" src="assets/img/course/course-2.jpg" alt=""></a>
                </div>
                <div class="course-content">
                    <h4><a href="course-details.php">Apparel Manufacturing</a></h4>
                    <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                            <i class="fa fa-diamond"></i>
                            <span>Credits : 125</span>
                        </div>
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration : 4yrs</span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="#">APPLY NOW</a>
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
        <a href="https://admission.maya.edu.in/" class="btn btn-success btn-lg mt-3">Apply Now →</a>
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