<?php
$page_title = "Hotel Management & Tourism in Dehradun | Maya Devi University";
$page_description = "Study Hotel Management and Tourism at Maya Devi University, Dehradun with hospitality industry exposure.";
$canonical_url = "https://maya.edu.in/hotel-management-and-tourism.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php"?>
  <!-- Hero Section -->
  <section class="hero-section" style="background: url('assets/uploads/shm.jpg') center/cover no-repeat; height:70vh;">
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
      The Department of Hotel Management was established in 2012 under the umbrella of the Maya Devi Educational Foundation. Since its inception, the department has been committed to nurturing talent and shaping future leaders in the Hospitality and Tourism industry.
      </p>
      <p>
      Our goal is to empower individuals with the confidence and competence needed to excel across a wide spectrum of career opportunities in the hospitality domain.At SOHM, our mission is to provide unparalleled education and hands-on training for students aiming to succeed in the vibrant and ever-evolving Hospitality & Tourism sector.
      </p>
      <p>We are dedicated to offering a multifaceted and integrated educational experience, consistently updating our curriculum to reflect the latest trends, innovations, and demands of the global hospitality industry.
      Join us at SOHM—where your journey to a successful career in the Hospitality and Tourism industry begins</p>
    </div>
  <!-- About Section -->
    <!-- Right Image -->
    <div class="col-md-5 text-center">
  <div class="img-container">
    <img src="assets/uploads/hotel.webp" 
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
          <span class="counter" data-target="9">0</span>+
        </h3>
        <p class="mb-0">Programs Offered</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-3 col-6">
      <div class="stat-card p-4 rounded shadow-sm h-100" style="background:#f6fffa;">
        <i class="fa fa-certificate fa-2x text-success mb-3"></i>
        <h3 class="fw-bold">
          <span class="counter" data-target="356">0</span>+
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
      <h2>Certification <span>Programs</span></h2>
      <p>Skill-focused certification programs designed for careers in hotel management.</p>
    </div>

    <div class="row">

      <!-- Diploma Bakery & Confectionery -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="certification-in-hotel-management.php">
              <img src="assets/uploads/hm.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>Certification in Hotel Management</h4>
            <p>Focuses on operations, administration, marketing basics, and hospitality service.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>1 Years</span>
            </div>
            <a class="default-btn btn-block" href="certification-in-hotel-management.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- Diploma Food Production -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="Advanced-certification-in-hotel-management.php">
              <img src="assets/uploads/bhmct-le.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>Advance Certification in Hotel Management</h4>
            <p>The (ACHM) is an extensive One-year Certification program aimed at equipping students for fulfilling careers in the hospitality sector.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="Advanced-certification-in-hotel-management.php">Apply Now</a>
          </div>
        </div>
      </div>

    </div>
    <!-- ================= DIPLOMA PROGRAMS ================= -->
    <div class="section-title text-center mb-50">
      <h2>Diploma <span>Programs</span></h2>
      <p>Skill-focused diploma programs designed for careers in hospitality and culinary arts.</p>
    </div>

    <div class="row">

      <!-- Diploma Bakery & Confectionery -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="diploma-in-confectionary.php">
              <img src="assets/uploads/bakery.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>Diploma in Bakery & Confectionery</h4>
            <p>Focuses on baking techniques, pastry arts, confectionery production, and dessert presentation.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="diploma-in-confectionary.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- Diploma Food Production -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="diploma-in-food-production.php">
              <img src="assets/uploads/dhm.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>Diploma in Food Production</h4>
            <p>Emphasizes culinary techniques, kitchen operations, food preparation, and professional cookery.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="diploma-in-food-production.php">Apply Now</a>
          </div>
        </div>
      </div>

    </div>

    <!-- ================= UNDERGRADUATE PROGRAMS ================= -->
    <div class="section-title text-center mb-50 mt-40">
      <h2>Undergraduate <span>Programs</span></h2>
      <p>Comprehensive undergraduate programs in hotel management and hospitality.</p>
    </div>

    <div class="row">

      <!-- BHM -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="bhm-colleges-in-dehradun-uttarakhand.php">
              <img src="assets/uploads/hm-le.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>Bachelor in Hotel Management</h4>
            <p>Focuses on hospitality operations, catering services, and management skills.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="bhm-colleges-in-dehradun-uttarakhand.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- BHMCT -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="BHMCT-colleges-in-dehradun-uttarakhand.php">
              <img src="assets/uploads/bhmct.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>BHMCT</h4>
            <p>Combines hotel management, catering technology, food production, and hospitality operations.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>4 Years</span>
            </div>
            <a class="default-btn btn-block" href="BHMCT-colleges-in-dehradun-uttarakhand.php">Apply Now</a>
          </div>
        </div>
      </div>

    </div>

    <!-- ================= POSTGRADUATE PROGRAMS ================= -->
    <div class="section-title text-center mb-50 mt-40">
      <h2>Postgraduate <span>Programs</span></h2>
      <p>Advanced hospitality programs for leadership and managerial excellence.</p>
    </div>

    <div class="row">

      <!-- MHM -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="master-of-hotel-management.php">
              <img src="assets/uploads/mhm.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>Master of Hotel Management</h4>
            <p>Advanced training in hospitality operations, culinary management, and professional standards.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="master-of-hotel-management.php">Apply Now</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="master-of-hotel-management-and-tourism.php">
              <img src="assets/uploads/mhmt.png" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>Master of Hotel Management and Tourism</h4>
            <p>The MHMT program is tailored to empower students with advanced expertise required for managerial roles in the hospitality sector.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="master-of-hotel-management-and-tourism.php">Apply Now</a>
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
      <h2>Student <span>Clubs 🌟</span></h2>
    </div>
    <div class="row g-4 text-center">

      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="club-card h-100 p-3">
          <div class="club-icon mb-2">👨‍🍳</div>
          <h5 class="club-title">Culinary Club</h5>
          <p class="club-desc">A space for food enthusiasts to explore cooking, baking, and culinary creativity.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="club-card h-100 p-3">
          <div class="club-icon mb-2">🏅</div>
          <h5 class="club-title">Sports Club</h5>
          <p class="club-desc">Encourages fitness, teamwork, and participation in indoor and outdoor sports events.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="club-card h-100 p-3">
          <div class="club-icon mb-2">🏨</div>
          <h5 class="club-title">Hospitality Club</h5>
          <p class="club-desc">Promotes hospitality skills, event management, and service excellence among students.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="club-card h-100 p-3">
          <div class="club-icon mb-2">🌸</div>
          <h5 class="club-title">Ikebana Club</h5>
          <p class="club-desc">Dedicated to the Japanese art of flower arrangement, fostering creativity and aesthetics.</p>
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
        Choosing Hotel Management and Tourism at Maya
Devi University, Dehradun means stepping into a world of global opportunities.
The program offers industry-focused education with a perfect blend of theory and practical exposure.
Experienced faculty members mentor students with real-world hospitality insights and professional
guidance.
        </p>
        <p class="text-muted">State-of-the-art training labs simulate actual hotel and tourism environments.
Regular industrial visits, internships, and live projects enhance hands-on learning.
The curriculum is regularly updated to match current hospitality and tourism trends.
Strong industry connections support excellent internship and placement opportunities.
Students develop leadership, communication, and customer service excellence.
The scenic Dehradun location provides an inspiring learning atmosphere.
At Maya Devi University, your journey toward a successful hospitality and tourism career truly begins.
</p>
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
<?php
// Load blogs
$dataFile = __DIR__ . "/admin/data/blogs.json";
$blogs = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];

// SET DEPARTMENT TAG
$dept = "HM"; // change dynamically if needed

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