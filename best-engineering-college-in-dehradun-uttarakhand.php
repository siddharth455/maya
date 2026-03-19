<?php
$page_title = "Best Engineering College in Dehradun Uttarakhand | Maya Devi University";
$page_description = "Maya Devi University is recognized as one of the best engineering colleges in Dehradun offering B.Tech programs with strong placement support.";
$canonical_url = "https://maya.edu.in/best-engineering-college-in-dehradun-uttarakhand.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php"?>
  <!-- Hero Section -->
  <section class="hero-section" style="background: url('assets/uploads/se.jpg') center/cover no-repeat; height:70vh;">
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
      The School of Engineering at Maya Devi University is committed to driving technological progress by combining academic rigor with innovation and societal responsibility. Guided by a vision to be a hub of excellence and discovery, the School nurtures future engineers who are not only skilled professionals but also ethical leaders—capable of designing solutions that benefit humanity.
      </p>
      <p>
      Our programs are crafted to provide a dynamic and immersive learning experience, blending strong fundamentals with exposure to emerging technologies. With state-of-the-art infrastructure, research-driven teaching, and industry collaboration, students gain the technical expertise, creativity, and problem-solving mindset required to excel in a rapidly evolving world.
      </p>
      <p>Through global perspectives, hands-on projects, industrial visits, and a focus on sustainability and inclusivity, the School equips students to tackle real-world challenges with confidence. By fostering innovation, critical thinking, and holistic development, we prepare engineers who are ready to shape a better, future-ready world through technology.</p>
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
          <span class="counter" data-target="10">0</span>+
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

      <!-- B.Tech Civil -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="b.tech-civil-engineering.php">
              <img src="assets/uploads/civil.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>B.Tech Civil Engineering</h4>
            <p>Training students in civil engineering, structural design, and professional engineering skills.</p>
            <div class="course-meta"><span>Credits: 176</span><span>4 Years</span></div>
            <a class="default-btn btn-block" href="b.tech-civil-engineering.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- Civil Structural -->
      <!-- <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="b-tech-civil-structural-engineering.php">
              <img src="assets/uploads/b.tech-civil.jpg" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>B.Tech Civil (Structural Engineering)</h4>
            <p>Focused on structural design, analysis, and construction skills.</p>
            <div class="course-meta"><span>Credits: 125</span><span>4 Years</span></div>
            <a class="default-btn btn-block" href="b-tech-civil-structural-engineering.php">Apply Now</a>
          </div>
        </div>
      </div> -->

      <!-- Civil LE -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="b.tech-civil-engineering-le.php">
              <img src="assets/uploads/civil-le.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>B.Tech Civil (Lateral Entry)</h4>
            <p>Focused on structural design, analysis, and construction skills.</p>
            <div class="course-meta"><span>Credits: 132</span><span>4 Years</span></div>
            <a class="default-btn btn-block" href="b.tech-civil-engineering-le.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- Mechanical -->
      <!-- <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="b.tech-mechanical-engineering.php">
              <img src="assets/uploads/b.tech-mechanical.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>B.Tech Mechanical Engineering</h4>
            <p>Mechanical systems, electronics, and professional engineering skills.</p>
            <div class="course-meta"><span>Credits: 176</span><span>4 Years</span></div>
            <a class="default-btn btn-block" href="b.tech-mechanical-engineering.php">Apply Now</a>
          </div>
        </div>
      </div> -->

      <!-- Mechatronics -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="b.tech-mechatronics-and-robotics.php">
              <img src="assets/uploads/robots.jpeg" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>B.Tech Mechanical (Mechatronics)</h4>
            <p>Mechanical systems integrated with electronics and robotics.</p>
            <div class="course-meta"><span>Credits: 176</span><span>4 Years</span></div>
            <a class="default-btn btn-block" href="b.tech-mechatronics-and-robotics.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- Mechanical LE -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="mechanical-engineering-le.php">
              <img src="assets/uploads/mechanical-le.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>B.Tech Mechanical (Lateral Entry)</h4>
            <p>Advanced mechanical systems and design skills.</p>
            <div class="course-meta"><span>Credits: 132</span><span>3 Years</span></div>
            <a class="default-btn btn-block" href="mechanical-engineering-le.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- ECE -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="b.tech-electronics-and-communication-engineering.php">
              <img src="assets/uploads/b.tech-electric-2.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>B.Tech Electronics & Communication</h4>
            <p>Communication systems, electronics, and embedded engineering.</p>
            <div class="course-meta"><span>Credits: 176</span><span>4 Years</span></div>
            <a class="default-btn btn-block" href="b.tech-electronics-and-communication-engineering.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- VLSI -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="b.tech-electronics-and-communication-engineering-vlsi-embedded.php">
              <img src="assets/uploads/b.tech-electric.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>B.Tech ECE (VLSI & Embedded)</h4>
            <p>VLSI design, embedded systems, and electronics engineering.</p>
            <div class="course-meta"><span>Credits: 176</span><span>4 Years</span></div>
            <a class="default-btn btn-block" href="b.tech-electronics-and-communication-engineering-vlsi-embedded.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- Robotics AI -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="b.tech-electronics-and-communication-engineering-robotics-ai.php">
              <img src="assets/uploads/b.tech-electric-3.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>B.Tech ECE (Robotics & AI)</h4>
            <p>Robotics systems, artificial intelligence, and automation.</p>
            <div class="course-meta"><span>Credits: 176</span><span>4 Years</span></div>
            <a class="default-btn btn-block" href="b.tech-electronics-and-communication-engineering-robotics-ai.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- Aerospace -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="b.tech-aerospace-engineering.php">
              <img src="assets/uploads/aero.jpg" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>B.Tech Aerospace Engineering</h4>
            <p>Aerodynamics, propulsion, aircraft structures, and space technology.</p>
            <div class="course-meta"><span>Credits: 176</span><span>4 Years</span></div>
            <a class="default-btn btn-block" href="b.tech-aerospace-engineering.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- ECE LE -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="b.tech-electronics-and-communication-engineering-le.php">
              <img src="assets/uploads/b.tech-electric-2.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>B.Tech ECE (Lateral Entry)</h4>
            <p>Electronics and networking systems for communication.</p>
            <div class="course-meta"><span>Credits: 132</span><span>4 Years</span></div>
            <a class="default-btn btn-block" href="b.tech-electronics-and-communication-engineering-le.php">Apply Now</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<div class="course-area bg-white pt-60 pb-60">
  <div class="container">

    <div class="section-title text-center mb-50">
      <h2>Postgraduate <span>Programs</span></h2>
    </div>

    <div class="row">

      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="m.tech-structural-engineering.php">
              <img src="assets/uploads/b.tech-civil.jpg" alt="">
            </a>
           
          </div>
          <div class="course-body">
            <h4>M.Tech Structural Engineering</h4>
            <p>Advanced structural design, analysis, and construction.</p>
            <div class="course-meta"><span>Credits: 80</span><span>2 Years</span></div>
            <a class="default-btn btn-block" href="m.tech-structural-engineering.php">Apply Now</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="m.tech-mechanical-engineering.php">
              <img src="assets/uploads/mtech-mechanical.webp" alt="">
            </a>
           
          </div>
          <div class="course-body">
            <h4>M.Tech Mechanical Engineering</h4>
            <p>Advanced mechanical systems, design, and research.</p>
            <div class="course-meta"><span>Credits: 80</span><span>2 Years</span></div>
            <a class="default-btn btn-block" href="m.tech-mechanical-engineering.php">Apply Now</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<div class="course-area bg-light pt-60 pb-60">
  <div class="container">

    <div class="section-title text-center mb-50">
      <h2>Doctoral <span>Program</span></h2>
    </div>

    <div class="row justify-content-center">

      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="best-university-for-phd-in-dehradun-uttarakhand.php">
              <img src="assets/uploads/phd.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>Ph.D. Program</h4>
            <p>Full-time doctoral research focused on advanced study and original research.</p>
            <div class="course-meta"><span>Credits: 125</span><span>2 Years</span></div>
            <a class="default-btn btn-block" href="best-university-for-phd-in-dehradun-uttarakhand.php">Apply Now</a>
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
      <h2>Opportunities <span>& Pathways 🎓</span></h2>
    </div>
    <div class="row g-4">
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">📚</div>
          <h5 class="club-title">Higher Studies</h5>
          <p class="club-desc">Students can pursue M. Tech, M.S and PhD Programs in India and Abroad.</p>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">💡</div>
          <h5 class="club-title">Innovation & Incubation</h5>
          <p class="club-desc">Innovation incubators and accelerators to support creative ideas and projects.</p>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🏢</div>
          <h5 class="club-title">Jobs in PSUs</h5>
          <p class="club-desc">Opportunities in PSUs such as BHEL, NTPC, ISRO, and DRDO.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">📊</div>
          <h5 class="club-title">Management Careers</h5>
          <p class="club-desc">Pursue an MBA for leadership and managerial roles across industries.</p>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🔬</div>
          <h5 class="club-title">Research Scientist</h5>
          <p class="club-desc">Work as a research scientist in reputed R&D centers.</p>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-6">
        <div class="club-card">
          <div class="club-icon">🚀</div>
          <h5 class="club-title">Entrepreneurship</h5>
          <p class="club-desc">Launching technology ventures and startups to drive innovation.</p>
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