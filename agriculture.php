<?php require "common/header.php"?>
  <!-- Hero Section -->
  <section class="hero-section" style="background: url('assets/uploads/home-banner.webp') center/cover no-repeat; height:70vh;">
  <div class="hero-content">
      <h3 class="display-5 fw-bold text-white">School of Agriculture & Technology</h3>
      <p class="lead text-white">Shaping Tomorrow's Digital Leaders at Maya Devi University</p>
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
      The School of Agriculture and Technology, Maya Devi University, Selaqui, Dehradun is a dynamic academic and research institution committed to advancing sustainable agricultural practices, technological innovation and rural development. The department of Agriculture was established in 2013 and school of Agriculture & Technology in 2024.
      </p>
      <p>
      The school addresses the evolving challenges in food production, environmental sustainability and technological advancement and plays a vital role in training the next generation of professionals in agriculture and allied sciences. Rooted in a tradition of excellence and practical learning, the school offers programs that integrate modern scientific knowledge with hands-on experience in areas such as plant breeding, crop and soil science, horticultural sciences, agricultural engineering, food technology, microbiology, biochemistry, plant biotechnology and environmental management.
      </p>
      <p>The curriculum is designed to meet the needs of a rapidly changing agricultural landscape and to equip students with the skills to drive innovation and impact.</p>
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
        <img src="assets/uploads/himanshu.webp" class="img-fluid " alt="Dean">
      </div>
      <div class="col-md-8">
      <div class="section-title  pb-20">
        <h2>Dean's <span>Welcome Note</span></h2>
      </div>
      <p>Welcome Students!</p>
        <p>Welcome to another exciting chapter in your academic journey here at the School of Agriculture and Technology. Whether you are just beginning or continuing your studies, know that you are part of a vibrant and growing community dedicated to innovation, sustainability and the betterment of our world through agricultural science.</p>
        <p>Our school is a hub of knowledge, discovery, and impact. We offer a wide array of programs and courses designed to give you a strong foundation in both traditional and modern agricultural sciences. I encourage each of you to make the most of the opportunities here: engage in research, connect with our dedicated faculty, participate in internships, and collaborate with your peers. Together, we can advance solutions that make a real difference in communities locally and globally.</p>
        <h5 class="fw-bold mt-3">- Prof. (Dr.) Himanshu Saini</h5>
        <h5 class="fw-bold">Dean, School of Agriculture & Technology<br>
        Maya Devi University</h5>
      </div>
      </div>
    </div>
  </section>
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
            <td><strong>Prof. (Dr.) Himanshu Saini</strong></td>
            <td>National Summit of Institutional Leaders NSIL - 2025</td>
            <td>March 01–02, 2025</td>
            <td>VBUSS, Doon University, Dehradun & Dept. of Higher Education, Govt. of Uttarakhand</td>
          </tr>
          <tr>
            <td>2</td>
            <td><strong>Prof. (Dr.) Himanshu Saini</strong></td>
            <td>One day workshop on ‘The Art of Writing Research/Review Publications and Research Proposals’</td>
            <td>January 04, 2025</td>
            <td>Maya Devi University, Dehradun</td>
          </tr>
          <tr>
            <td>3</td>
            <td><strong>Prof. (Dr.) Himanshu Saini</strong></td>
            <td>Krishi Vigyan Mela - 2.0</td>
            <td>December 10–11, 2024</td>
            <td>Maya Devi University, Dehradun</td>
          </tr>
          <tr>
            <td>4</td>
            <td><strong>Prof. (Dr.) Himanshu Saini</strong></td>
            <td>National Conference on ‘New Education Policy - India Towards Developed Nation by 2047’</td>
            <td>October 05, 2024</td>
            <td>Maya Devi University, Dehradun</td>
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
  overflow-x: auto; /* Enables horizontal scroll on small screens */
  -webkit-overflow-scrolling: touch;
}

.table {
  border-radius: 12px;
  overflow: hidden;
}

.table thead {
  background: #00703c; /* dark green theme */
  color: #fff;
}

.table-hover tbody tr:hover {
  background: #f1fdf5; /* soft green hover */
}

    </style>
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