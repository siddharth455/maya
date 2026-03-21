<?php
$page_title = "School of Health Sciences | Maya Devi University Dehradun";
$page_description = "School of Health Sciences at Maya Devi University, Dehradun offering nursing and paramedical programs.";
$canonical_url = "https://maya.edu.in/School-Of-Health-Sciences.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php" ?>
<!-- Hero Section -->
<section class="hero-section" style="background: url('assets/uploads/shs.jpg') center/cover no-repeat; height:70vh;">
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
        The School of Health Sciences at Maya Devi University is dedicated to nurturing future healthcare professionals through rigorous academic programs and hands-on training. Established with a mission to advance health education and research, the department focuses on clinical excellence, innovation, and community service.
      </p>
      <p>
        Our programs are designed to meet the evolving needs of the healthcare industry, ensuring students are well-prepared for impactful careers.With a strong emphasis on practical learning, interdisciplinary collaboration, and community engagement, the department offers a nurturing environment where students can thrive both academically and professionally.
      </p>
      <p>Our faculty comprises experienced clinicians and researchers who mentor students to become compassionate, competent, and globally competitive healthcare providers.</p>
    </div>
    <!-- About Section -->
    <!-- Right Image -->
    <div class="col-md-5 text-center">
      <div class="img-container">
        <img src="assets/uploads/health.webp"
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
          <span class="counter" data-target="500">0</span>+
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
      <p>Industry-focused undergraduate programs designed for clinical, diagnostic, and healthcare management careers.</p>
    </div>

    <div class="row">

      <!-- BHA -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="hospital-administration.php">
              <img src="assets/uploads/bha.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>Bachelor of Hospital Administration (BHA)</h4>
            <p>Focuses on hospital operations, healthcare management, and administrative leadership.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="hospital-administration.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- BPH -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="public-health.php">
              <img src="assets/uploads/bph.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>Bachelor of Public Health (BPH)</h4>
            <p>Focuses on community health, public health management, and program administration.</p>
            <div class="course-meta">
              <span>Credits: 125</span>
              <span>3 Years</span>
            </div>
            <a class="default-btn btn-block" href="public-health.php">Apply Now</a>
          </div>
        </div>
      </div>

    </div>

    <!-- ================= POSTGRADUATE PROGRAMS ================= -->
    <div class="section-title text-center mb-50 mt-40">
      <h2>Postgraduate <span>Programs</span></h2>
      <p>Advanced healthcare management and public health programs for leadership roles.</p>
    </div>

    <div class="row">

      <!-- MPH -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="master-in-public-health.php">
              <img src="assets/uploads/mph.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>Master of Public Health (MPH)</h4>
            <p>Focuses on epidemiology, public health leadership, and healthcare program management.</p>
            <div class="course-meta">
              <span>Credits: 60</span>
              <span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="master-in-public-health.php">Apply Now</a>
          </div>
        </div>
      </div>

      <!-- MHA -->
      <div class="col-lg-3 col-md-6 mb-30">
        <div class="course-card">
          <div class="course-img">
            <a href="master-in-hospital-administration.php">
              <img src="assets/uploads/mha.webp" alt="">
            </a>
          </div>
          <div class="course-body">
            <h4>Master of Hospital Administration (MHA)</h4>
            <p>Advanced training in hospital operations, healthcare leadership, and strategic management.</p>
            <div class="course-meta">
              <span>Credits: 60</span>
              <span>2 Years</span>
            </div>
            <a class="default-btn btn-block" href="master-in-hospital-administration.php">Apply Now</a>
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
      <h2>Student <span>& Clubs 🎓</span></h2>
    </div>

    <!-- Student Clubs -->
    <div class="row g-4">
      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">💻</div>
          <h5 class="club-title">HealthTech Club</h5>
          <p class="club-desc">Explores the integration of technology and healthcare to improve patient care and innovation.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🌍</div>
          <h5 class="club-title">Public Health Society</h5>
          <p class="club-desc">Works on awareness, prevention, and community health initiatives for societal well-being.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🩺</div>
          <h5 class="club-title">Clinical Skills Club</h5>
          <p class="club-desc">Provides hands-on training sessions to strengthen core clinical and patient care skills.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🥗</div>
          <h5 class="club-title">Wellness & Nutrition Club</h5>
          <p class="club-desc">Promotes healthy living through balanced nutrition, fitness, and overall wellness programs.</p>
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
          <div class="club-icon">🧪</div>
          <h5 class="club-title">Medical Laboratory Technician</h5>
          <p class="club-desc">Conducts lab tests to help diagnose and treat diseases.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">💉</div>
          <h5 class="club-title">Anaesthesia Technician</h5>
          <p class="club-desc">Assists anesthesiologists in patient care before and after surgery.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🩻</div>
          <h5 class="club-title">Radiology Technician</h5>
          <p class="club-desc">Operates imaging equipment to diagnose medical conditions.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">💧</div>
          <h5 class="club-title">Dialysis Technician</h5>
          <p class="club-desc">Provides care for patients undergoing kidney dialysis treatment.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🛠️</div>
          <h5 class="club-title">Operation Theatre Technician</h5>
          <p class="club-desc">Supports surgical teams by managing OT instruments and setup.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">❤️</div>
          <h5 class="club-title">Cardiac Care Technician</h5>
          <p class="club-desc">Assists in diagnosing and treating heart-related conditions.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🏥</div>
          <h5 class="club-title">Hospital Administrator</h5>
          <p class="club-desc">Manages hospital operations, staff, and healthcare services.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🌍</div>
          <h5 class="club-title">Public Health Specialist</h5>
          <p class="club-desc">Works on disease prevention and health promotion programs.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🤝</div>
          <h5 class="club-title">Healthcare Consultant</h5>
          <p class="club-desc">Advises hospitals and organizations to improve healthcare systems.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">🔬</div>
          <h5 class="club-title">Research Scientist</h5>
          <p class="club-desc">Conducts medical and scientific research for innovation.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">✅</div>
          <h5 class="club-title">Quality Control Specialist</h5>
          <p class="club-desc">Ensures healthcare services meet quality and safety standards.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 d-flex">
        <div class="club-card flex-fill">
          <div class="club-icon">📊</div>
          <h5 class="club-title">Clinical Research Associate</h5>
          <p class="club-desc">Monitors clinical trials to ensure accuracy and compliance.</p>
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
$dept = "Health Sciences"; // change dynamically if needed

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