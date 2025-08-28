<?php require "common/header.php"?>
  <!-- Hero Section -->
  <section class="hero-section">
  <section class="hero-section" style="background: url('assets/uploads/home-banner.webp') center/cover no-repeat; height:70vh;">
      <h3 class="display-5 fw-bold text-white">School of Management and Commerce</h3>
      <p class="lead text-white">Empowering future business leaders with comprehensive management education<br> and practical skills. Join us in shaping the future of business and commerce.</p>
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
      The School of Commerce and Management at Maya Devi University is dedicated to shaping future leaders by blending academic excellence with innovation, ethics, and social responsibility. With a vision to be a center of excellence in business education, the School prepares students to become competent professionals and visionary leaders—capable of making impactful decisions that drive economic growth and societal progress.
      </p>
      <p>
      Our programs are designed to deliver a dynamic and practical learning experience, integrating strong theoretical foundations with real-world business exposure. Supported by modern infrastructure, industry collaborations, and research-driven teaching, students develop critical management skills, entrepreneurial thinking, and strategic problem-solving abilities.
      </p>
      <p>Through case studies, internships, global perspectives, industrial visits, and an emphasis on sustainability and inclusivity, the School empowers students to address real-world business challenges with confidence.</p>
    </div>
  <!-- About Section -->
    <!-- Right Image -->
    <div class="col-md-5 text-center">
  <div class="img-container">
    <img src="assets/uploads/e-school.webp" 
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
          <span class="counter" data-target="20">0</span>+
        </h3>
        <p class="mb-0">Programs Offered</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#f6fffa;">
        <i class="fa fa-certificate fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="600">0</span>+
        </h3>
        <p class="mb-0">Students Placed</p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#f9f8ff;">
        <i class="fa fa-briefcase fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="22">0</span>+
        </h3>
        <p class="mb-0">Highest Package (LPA)</p>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#fff8f2;">
        <i class="fa fa-globe fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="75">0</span>+
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
  <!-- Dean's Message -->
  <section class="container">
    <div class="row align-items-center">
      <div class="col-md-4">
        <img src="assets/uploads/vikram-singh.jpg" class="img-fluid " alt="Dean">
      </div>
      <div class="col-md-8">
      <div class="section-title  pb-20">
        <h2>Dean's <span>Welcome Note</span></h2>
      </div>
      <p>Welcome Students!</p>
        <p>At the School of Management & Commerce, we offer a dynamic learning environment that combines theoretical knowledge with practical insights. Our programs, including MBA, BBA, B.Com and M.Com, are designed to equip students with the critical thinking, leadership, and technical skills needed to excel in today's competitive global market. We emphasize innovation, research, and real-world applications to ensure that our graduates are prepared to lead organizations, drive business strategies, and contribute meaningfully to society.</p>
        <p>The School of Management & Commerce takes pride in its holistic approach to education, where we focus on the personal growth of each student, enhancing their leadership qualities, communication skills, and ethical standards. Our vision is to produce graduates who are not only competent professionals but also responsible global citizens.</p>
        <h5 class="fw-bold mt-3">- Dr. Parikshit Kala</h5>
        <h5 class="fw-bold">Dean, School of Management & Commerce<br>
        Maya Devi University</h5>
      </div>
      </div>
    </div>
  </section>
<!-- clubs section -->
<section class="clubs-section py-5">
  <div class="container">
    <div class="section-title pb-50">
      <h2>Career <span>Prospects 🚀</span></h2>
    </div>
    <div class="row g-4">
      
      <div class="col-lg-3 col-md-4 col-sm-6 d-flex">
        <div class="club-card h-100 d-flex flex-column text-center p-3">
          <div class="club-icon mb-2">📊</div>
          <h5 class="club-title">Business Analyst</h5>
          <p class="club-desc flex-grow-1">Analyze data and trends to provide insights for strategic decision-making.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 d-flex">
        <div class="club-card h-100 d-flex flex-column text-center p-3">
          <div class="club-icon mb-2">📈</div>
          <h5 class="club-title">Marketing Manager</h5>
          <p class="club-desc flex-grow-1">Design and implement marketing campaigns to promote products and services.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 d-flex">
        <div class="club-card h-100 d-flex flex-column text-center p-3">
          <div class="club-icon mb-2">💼</div>
          <h5 class="club-title">Financial Consultant</h5>
          <p class="club-desc flex-grow-1">Guide clients on investments, savings, and financial planning.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 d-flex">
        <div class="club-card h-100 d-flex flex-column text-center p-3">
          <div class="club-icon mb-2">🤝</div>
          <h5 class="club-title">HR Manager</h5>
          <p class="club-desc flex-grow-1">Manage recruitment, training, and employee relations in organizations.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 d-flex">
        <div class="club-card h-100 d-flex flex-column text-center p-3">
          <div class="club-icon mb-2">🏦</div>
          <h5 class="club-title">Investment Banker</h5>
          <p class="club-desc flex-grow-1">Assist businesses with raising capital and managing mergers & acquisitions.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 d-flex">
        <div class="club-card h-100 d-flex flex-column text-center p-3">
          <div class="club-icon mb-2">🧩</div>
          <h5 class="club-title">Management Consultant</h5>
          <p class="club-desc flex-grow-1">Advise companies on improving efficiency and solving business challenges.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 d-flex">
        <div class="club-card h-100 d-flex flex-column text-center p-3">
          <div class="club-icon mb-2">🌐</div>
          <h5 class="club-title">Digital Marketing Specialist</h5>
          <p class="club-desc flex-grow-1">Drive online presence through SEO, social media, and digital campaigns.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 d-flex">
        <div class="club-card h-100 d-flex flex-column text-center p-3">
          <div class="club-icon mb-2">📢</div>
          <h5 class="club-title">Business Development Manager</h5>
          <p class="club-desc flex-grow-1">Identify new opportunities and build partnerships to expand business growth.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 d-flex">
        <div class="club-card h-100 d-flex flex-column text-center p-3">
          <div class="club-icon mb-2">🎯</div>
          <h5 class="club-title">Corporate Strategist</h5>
          <p class="club-desc flex-grow-1">Formulate strategies to help companies achieve long-term goals.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 d-flex">
        <div class="club-card h-100 d-flex flex-column text-center p-3">
          <div class="club-icon mb-2">🚀</div>
          <h5 class="club-title">Entrepreneur</h5>
          <p class="club-desc flex-grow-1">Launch and manage innovative ventures to create business value.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 d-flex">
        <div class="club-card h-100 d-flex flex-column text-center p-3">
          <div class="club-icon mb-2">⚙️</div>
          <h5 class="club-title">Operations Manager</h5>
          <p class="club-desc flex-grow-1">Oversee daily operations ensuring efficiency and productivity.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 d-flex">
        <div class="club-card h-100 d-flex flex-column text-center p-3">
          <div class="club-icon mb-2">📂</div>
          <h5 class="club-title">Project Manager</h5>
          <p class="club-desc flex-grow-1">Plan, execute, and deliver projects while managing resources and timelines.</p>
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