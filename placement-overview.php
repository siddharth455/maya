<?php
$page_title = "Placement Overview | Maya Devi University Dehradun";
$page_description = "Explore placement overview, recruiters, and career opportunities at Maya Devi University, Dehradun.";
$canonical_url = "https://maya.edu.in/placement-overview.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php"?>
<section class="hero-section" style="background: url('assets/uploads/home-banner.webp') center/cover no-repeat; height:70vh !important;">
  <div class="hero-content">
      <h3 class="display-5 fw-bold text-white">Placement Overview</h3>
      <p class="lead text-white">At Maya Devi University, our Placement Cell is dedicated to guiding students toward <br>successful careers by connecting them with leading industries and fostering professional excellence.</p>
    </div>
  </section>
  <!-- Image Slider Section -->
  <section id="placement-gallery" class="py-5 bg-white">
  <div class="container text-center">
    <h2 class="fw-bold mb-4" style="color:#00a651;">Placement Highlights</h2>

    <div class="slider-wrapper mx-auto rounded-4 shadow-lg overflow-hidden">
      <div class="slider">
        <div class="slide"><img src="assets/uploads/icon/placement-1.jpg" alt="Placement Image 1"></div>
        <div class="slide"><img src="assets/uploads/icon/placement-2.jpg" alt="Placement Image 2"></div>
        <div class="slide"><img src="assets/uploads/icon/placement-3.jpg" alt="Placement Image 3"></div>
        <div class="slide"><img src="assets/uploads/icon/placement-4.jpeg" alt="Placement Image 4"></div>
      </div>
    </div>
  </div>
</section>

<!-- Styles -->
<style>
  #placement-gallery {
    background: #f9fafb;
  }

  .slider-wrapper {
    max-width: 1000px;
    height: 500px;
    position: relative;
  }

  .slider {
    display: flex;
    height: 100%;
    width: 100%;
    transition: transform 1s ease-in-out;
  }

  .slide {
    min-width: 100%;
    height: 100%;
    position: relative;
  }

  .slide img {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
    left: 0;
    top: 0;
  }

  .shadow-lg {
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1) !important;
  }

  @media (max-width: 992px) {
    .slider-wrapper {
      height: 400px;
    }
  }

  @media (max-width: 576px) {
    .slider-wrapper {
      height: 280px;
    }
  }
</style>

<!-- JavaScript for Auto Slide -->
<script>
  const slider = document.querySelector('.slider');
  const slides = document.querySelectorAll('.slide');
  let currentIndex = 0;

  function moveSlide() {
    currentIndex++;
    if (currentIndex >= slides.length) {
      currentIndex = 0;
    }
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
  }

  // Auto slide every 3 seconds
  let slideInterval = setInterval(moveSlide, 3000);

  // Pause on hover
  slider.addEventListener('mouseenter', () => clearInterval(slideInterval));
  slider.addEventListener('mouseleave', () => slideInterval = setInterval(moveSlide, 3000));
</script>


  <!-- Placement Overview Section -->
<section id="placement-overview" class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- Left: Overview Content -->
      <div class="col-lg-6" data-animate>
        <h2 class="fw-bold mb-3" style="color:#00a651;">Shaping Futures, Creating Success</h2>
        <p class="text-muted mb-4">
          At <strong>Maya Devi University</strong>, we take pride in empowering our students through a robust and result-driven placement program. 
          Our placement cell acts as a bridge between talent and opportunity, ensuring every student is industry-ready and confident to take on the world.
        </p>

        <div class="row g-3">
          <div class="col-md-6">
            <div class="p-3 bg-white rounded-4 shadow-sm h-100 d-flex align-items-start gap-3">
              <div class="icon fs-3" style="color:#00a651;"><i class="fa-solid fa-chalkboard-user"></i></div>
              <div>
                <h6 class="fw-bold mb-1" style="color:#00a651;">Skill Development</h6>
                <p class="small text-muted mb-0">Personalized workshops to boost confidence and employability.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="p-3 bg-white rounded-4 shadow-sm h-100 d-flex align-items-start gap-3">
              <div class="icon fs-3" style="color:#00a651;"><i class="fa-solid fa-building"></i></div>
              <div>
                <h6 class="fw-bold mb-1" style="color:#00a651;">Corporate Network</h6>
                <p class="small text-muted mb-0">Strong alliances with 500+ reputed companies across diverse sectors.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="p-3 bg-white rounded-4 shadow-sm h-100 d-flex align-items-start gap-3">
              <div class="icon fs-3" style="color:#00a651;"><i class="fa-solid fa-user-tie"></i></div>
              <div>
                <h6 class="fw-bold mb-1" style="color:#00a651;">Career Guidance</h6>
                <p class="small text-muted mb-0">One-on-one mentoring sessions with experienced professionals.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="p-3 bg-white rounded-4 shadow-sm h-100 d-flex align-items-start gap-3">
              <div class="icon fs-3" style="color:#00a651;"><i class="fa-solid fa-comments"></i></div>
              <div>
                <h6 class="fw-bold mb-1" style="color:#00a651;">Mock Interviews</h6>
                <p class="small text-muted mb-0">Rigorous preparation through real-world interview simulations.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right: Stats / Counters -->
      <div class="col-lg-6" data-animate>
        <div class="p-5 rounded-4 shadow-lg bg-white text-center">
          <div class="row g-4">
            <div class="col-6">
              <i class="fa-solid fa-users fa-2x mb-2" style="color:#00a651;"></i>
              <h3 class="fw-bold" style="color:#00a651;"><span class="counter" data-target="1200">1200</span>+</h3>
              <p class="small text-muted mb-0">Students Placed</p>
            </div>
            <div class="col-6">
              <i class="fa-solid fa-sack-dollar fa-2x mb-2" style="color:#00a651;"></i>
              <h3 class="fw-bold" style="color:#00a651;">₹<span class="counter" data-target="5.48">5.48</span> LPA</h3>
              <p class="small text-muted mb-0">Average Package</p>
            </div>
            <div class="col-6">
              <i class="fa-solid fa-trophy fa-2x mb-2" style="color:#00a651;"></i>
              <h3 class="fw-bold" style="color:#00a651;">₹<span class="counter" data-target="48">48</span> LPA</h3>
              <p class="small text-muted mb-0">Highest Package</p>
            </div>
            <div class="col-6">
              <i class="fa-solid fa-calendar-check fa-2x mb-2" style="color:#00a651;"></i>
              <h3 class="fw-bold" style="color:#00a651;"><span class="counter" data-target="15">15</span>+</h3>
              <p class="small text-muted mb-0">Years of Excellence</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Styles -->
<style>
  #placement-overview {
    background: linear-gradient(180deg, #f9fafb 0%, #eefcf3 100%);
    overflow: hidden;
  }

  [data-animate] {
    opacity: 0;
    transform: translateY(40px);
    transition: all 1s ease;
  }
  [data-animate].inview {
    opacity: 1;
    transform: none;
  }

  .counter {
    font-size: 2.2rem;
  }

  .shadow-lg {
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1) !important;
  }

  @media (max-width: 768px) {
    #placement-overview .p-5 {
      padding: 2rem !important;
    }
  }
</style>

<!-- JS for Scroll Animation & Counter -->
<script>
  // Scroll Fade Animation
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('inview');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });
  document.querySelectorAll('[data-animate]').forEach(el => observer.observe(el));

  // Counter Animation
  function animateCounter(counter) {
    const target = parseFloat(counter.getAttribute('data-target'));
    const duration = 2000;
    const startTime = performance.now();

    function update(currentTime) {
      const progress = Math.min((currentTime - startTime) / duration, 1);
      let currentValue = target * progress;
      if (target % 1 !== 0) {
        currentValue = currentValue.toFixed(1);
      } else {
        currentValue = Math.floor(currentValue);
      }
      counter.textContent = currentValue;
      if (progress < 1) requestAnimationFrame(update);
    }
    requestAnimationFrame(update);
  }

  const counterObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.querySelectorAll('.counter').forEach(animateCounter);
        counterObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  document.querySelectorAll('#placement-overview .col-lg-6:last-child').forEach(el => counterObserver.observe(el));
</script>

<section id="placement-journey" class="py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold text-center mb-5" style="color:#00a651;">Placement Journey</h2>
    <p class="text-center text-muted mb-5">Our structured placement preparation process ensures students are well-equipped to face industry challenges and secure rewarding career opportunities.</p>

    <div class="row g-4 justify-content-center">
      <!-- Step 1 -->
      <div class="col-md-6 col-lg-3" data-animate>
        <div class="journey-card text-center p-4 rounded-4 shadow-lg">
          <div class="journey-icon mx-auto mb-3" style="background:#00a651;"><i class="fa-solid fa-clipboard-list"></i></div>
          <h5 class="fw-bold mb-2" style="color:#00a651;">Skill Assessment</h5>
          <p class="text-muted small">Comprehensive evaluation of technical and soft skills to identify strengths and areas for improvement.</p>
          <div class="step-number">1</div>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="col-md-6 col-lg-3" data-animate>
        <div class="journey-card text-center p-4 rounded-4 shadow-lg">
          <div class="journey-icon mx-auto mb-3" style="background:#00a651;"><i class="fa-solid fa-chalkboard-user"></i></div>
          <h5 class="fw-bold mb-2" style="color:#00a651;">Specialized Training</h5>
          <p class="text-muted small">Tailored workshops, mock interviews, industry talks, and aptitude preparation sessions.</p>
          <div class="step-number">2</div>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="col-md-6 col-lg-3" data-animate>
        <div class="journey-card text-center p-4 rounded-4 shadow-lg">
          <div class="journey-icon mx-auto mb-3" style="background:#00a651;"><i class="fa-solid fa-building"></i></div>
          <h5 class="fw-bold mb-2" style="color:#00a651;">Campus Recruitment</h5>
          <p class="text-muted small">Annual placement drives with prominent companies across various sectors and industries.</p>
          <div class="step-number">3</div>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="col-md-6 col-lg-3" data-animate>
        <div class="journey-card text-center p-4 rounded-4 shadow-lg">
          <div class="journey-icon mx-auto mb-3" style="background:#00a651;"><i class="fa-solid fa-user-tie"></i></div>
          <h5 class="fw-bold mb-2" style="color:#00a651;">Career Mentoring</h5>
          <p class="text-muted small">Ongoing guidance and support even after placement to ensure career growth and success.</p>
          <div class="step-number">4</div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Styles -->
<style>
  #placement-journey {
    background: #f9fafb;
  }

  .journey-card {
    background: #fff;
    position: relative;
    overflow: hidden;
    transition: transform 0.4s, box-shadow 0.4s;
  }

  .journey-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
  }

  .journey-icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
  }

  .step-number {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 3rem;
    font-weight: bold;
    color: rgba(0,166,81,0.1);
  }

  [data-animate] {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s ease;
  }

  [data-animate].inview {
    opacity: 1;
    transform: none;
  }

  @media (max-width: 992px) {
    .step-number {
      font-size: 2.5rem;
    }
  }

  @media (max-width: 576px) {
    .step-number {
      font-size: 2rem;
    }
  }
</style>

<!-- Scroll Animation -->
<script>
  // Use unique observer variable to avoid conflicts
  const journeyCardObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        entry.target.classList.add('inview');
        journeyCardObserver.unobserve(entry.target);
      }
    });
  }, {threshold:0.2});

  document.querySelectorAll('#placement-journey [data-animate]').forEach(el => journeyCardObserver.observe(el));
</script>
<section id="placement-partners" class="py-5 text-center bg-white">
  <div class="container">
    <h2 class="fw-bold mb-3" style="color:#00a651;">Our Esteemed Placement Partners</h2>
    <p class="text-muted mb-5" style="max-width:750px;margin:auto;">
      Partnering with global industry leaders, we empower our graduates to launch impactful careers with the world’s most innovative companies.
    </p>

    <div class="partner-slider">
      <div class="partner-track">
        <!-- Add as many logos as you like -->
        <img src="assets/uploads/icon/1.jpg" alt="Pfizer">
        <img src="assets/uploads/icon/2.jpg" alt="Pfizer">
       <img src="assets/uploads/icon/3.jpg" alt="Pfizer">
        <img src="assets/uploads/icon/4.jpg" alt="Pfizer">
        <img src="assets/uploads/icon/5.png" alt="Pfizer">
        <img src="assets/uploads/icon/6.png" alt="Pfizer">
        <img src="assets/uploads/icon/7.jpg" alt="Pfizer">
        <img src="assets/uploads/icon/8.jpg" alt="Pfizer">
        <img src="assets/uploads/icon/9.jpg" alt="Pfizer">
        <img src="assets/uploads/icon/10.jpg" alt="Pfizer">
        <img src="assets/uploads/icon/11.jpg" alt="Pfizer">
        <img src="assets/uploads/icon/12.jpg" alt="Pfizer">
        <img src="assets/uploads/icon/13.jpg" alt="Pfizer">
        <img src="assets/uploads/icon/14.jpg" alt="Pfizer">
        <img src="assets/uploads/icon/15.jpg" alt="Pfizer">
        <img src="assets/uploads/icon/16.jpg" alt="Pfizer">
        <img src="assets/uploads/icon/17.jpg" alt="Pfizer">
        <img src="assets/uploads/icon/18.jpg" alt="Pfizer">
        <img src="assets/uploads/icon/19.jpg" alt="Pfizer">
        <img src="assets/uploads/icon/20.jpg" alt="Pfizer">
        <img src="assets/uploads/icon/21.jpg" alt="Pfizer">
        <img src="assets/uploads/icon/22.jpg" alt="Pfizer">
        <img src="assets/uploads/icon/23.jpg" alt="Pfizer">
        <img src="assets/uploads/icon/24.jpg" alt="Pfizer">
        <img src="assets/uploads/icon/25.jpg" alt="Pfizer">
        <img src="assets/uploads/icon/26.jpg" alt="Pfizer">
        <img src="assets/uploads/icon/27.jpg" alt="Pfizer">
        <img src="assets/uploads/icon/28.jpg" alt="Pfizer">
      </div>
    </div>
  </div>
</section>

<style>
#placement-partners {
  background: linear-gradient(135deg, #fafff9, #e4f8ec);
  overflow: hidden;
}

/* Main container */
.partner-slider {
  position: relative;
  max-width: 1000px;
  margin: auto;
  height: 220px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}

/* Track with duplicated images for infinite loop */
.partner-track {
  display: flex;
  align-items: center;
  gap: 50px;
  animation: slideLoop 25s linear infinite;
}

.partner-track img {
  width: 130px;
  height: 130px;
  object-fit: contain;
  background: white;
  border-radius: 15px;
  box-shadow: 0 6px 20px rgba(0,0,0,0.1);
  opacity: 0.8;
  transform: scale(0.9);
  transition: transform 0.8s ease, opacity 0.8s ease;
  filter: grayscale(0.3);
}

/* Hover effect */
.partner-track img:hover {
  transform: scale(1.15);
  opacity: 1;
  filter: none;
  box-shadow: 0 10px 40px rgba(0,166,81,0.3);
}

/* Animation */
@keyframes slideLoop {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}

/* Responsive */
@media (max-width:768px) {
  .partner-track img { width: 90px; height: 90px; gap: 30px; }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const track = document.querySelector(".partner-track");
  // Clone track for seamless infinite effect
  const clone = track.cloneNode(true);
  track.parentElement.appendChild(clone);
});
</script>

<section id="placement-overview" class="py-5 position-relative">
  <div class="container">
    <!-- Heading -->
    <div class="text-center mb-5">
      <h2 class="fw-bold" style="color:#00a651;">Our Successful Placements</h2>
      <p class="text-muted" style="max-width:750px; margin:auto;">
        Celebrating the achievements of our talented students who have secured positions in leading global companies through dedication, skill, and hard work.
      </p>
    </div>

    <!-- Gallery Grid -->
    <div class="placement-grid">
      <!-- 16 Placement Images -->
      <div class="placement-card"><img src="assets/uploads/icon/place-1.webp" alt="Placed Student"></div>
      <div class="placement-card"><img src="assets/uploads/icon/place-2.webp" alt="Placed Student"></div>
      <div class="placement-card"><img src="assets/uploads/icon/place-3.webp" alt="Placed Student"></div>
      <div class="placement-card"><img src="assets/uploads/icon/place-4.webp" alt="Placed Student"></div>
      <div class="placement-card"><img src="assets/uploads/icon/place-5.webp" alt="Placed Student"></div>
      <div class="placement-card"><img src="assets/uploads/icon/place-6.webp" alt="Placed Student"></div>
      <div class="placement-card"><img src="assets/uploads/icon/place-7.webp" alt="Placed Student"></div>
      <div class="placement-card"><img src="assets/uploads/icon/place-8.webp" alt="Placed Student"></div>
      <div class="placement-card"><img src="assets/uploads/icon/place-9.webp" alt="Placed Student"></div>
      <div class="placement-card"><img src="assets/uploads/icon/place-10.webp" alt="Placed Student"></div>
      <div class="placement-card"><img src="assets/uploads/icon/place-11.webp" alt="Placed Student"></div>
      <div class="placement-card"><img src="assets/uploads/icon/place-12.webp" alt="Placed Student"></div>
      <div class="placement-card"><img src="assets/uploads/icon/place-13.webp" alt="Placed Student"></div>
      <div class="placement-card"><img src="assets/uploads/icon/place-14.webp" alt="Placed Student"></div>
      <div class="placement-card"><img src="assets/uploads/icon/place-15.webp" alt="Placed Student"></div>
      <div class="placement-card"><img src="assets/uploads/icon/place-16.webp" alt="Placed Student"></div>
    </div>
  </div>
</section>

<style>
/* Background & Layout */
#placement-overview {
  background: linear-gradient(135deg, #f8fff9, #e6f7ee);
  overflow: hidden;
}

/* Grid Layout */
.placement-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
  gap: 25px;
  justify-items: center;
}

/* Each Card */
.placement-card {
  width: 100%;
  height: 280px;
  border-radius: 20px;
  overflow: hidden;
  position: relative;
  cursor: pointer;
  background: rgba(255, 255, 255, 0.25);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(8px);
  transform: scale(0.9);
  opacity: 0;
  transition: transform 0.6s ease, opacity 0.8s ease;
}

/* Image Styling */
.placement-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.7s ease;
}

/* Hover Effect */
.placement-card:hover img {
  transform: scale(1.1);
}

.placement-card::after {
  content: "Placed";
  position: absolute;
  bottom: -40px;
  left: 0;
  width: 100%;
  text-align: center;
  font-weight: bold;
  letter-spacing: 1px;
  color: #fff;
  background: rgba(0, 166, 81, 0.9);
  padding: 10px 0;
  border-top-left-radius: 20px;
  border-top-right-radius: 20px;
  transition: bottom 0.4s ease;
}

.placement-card:hover::after {
  bottom: 0;
}

/* Scroll Animation */
.placement-card.visible {
  transform: scale(1);
  opacity: 1;
}

/* Responsive */
@media (max-width: 768px) {
  .placement-card {
    height: 220px;
  }
}
</style>

<script>
// Unique observer variable to prevent conflicts
const placementObserver = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    }
  });
}, { threshold: 0.2 });

// Observe each placement card
document.querySelectorAll('.placement-card').forEach(card => {
  placementObserver.observe(card);
});
</script>
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<section class="container py-5">
  <div class="section-title pb-20  mb-4">
    <h2 style="font-weight:700;">Student <span style="color:#00a651;">Testimonials</span></h2>
  </div>

  <!-- Swiper Slider -->
  <div class="swiper testimonial-slider">
    <div class="swiper-wrapper">

      <!-- Testimonial 1 -->
      <div class="swiper-slide">
        <div class="testimonial text-center p-4 shadow-sm rounded bg-white">
          <img src="assets/uploads/testimoni-1.jpeg" alt="Riya Sharma" class="testimonial-img mb-3">
          <p>"The School of Engineering provided me with excellent opportunities to learn, explore, and innovate. I secured a placement at Microsoft with 42 LPA package!"</p>
          <h6 class="mt-2 fw-semibold">- Riya Sharma (CSE)</h6>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="swiper-slide">
        <div class="testimonial text-center p-4 shadow-sm rounded bg-white">
          <img src="assets/uploads/testimoni-2.jpeg" alt="Arjun Verma" class="testimonial-img mb-3">
          <p>"State-of-the-art labs and practical exposure gave me an edge in the industry. Truly grateful for the faculty and support at MDU."</p>
          <h6 class="mt-2 fw-semibold">- Arjun Verma (Mechanical)</h6>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="swiper-slide">
        <div class="testimonial text-center p-4 shadow-sm rounded bg-white">
          <img src="assets/uploads/testimoni-3.jpeg" alt="Sneha Gupta" class="testimonial-img mb-3">
          <p>"Amazing mentors and inclusive culture. I gained not only knowledge but also confidence to excel in my career."</p>
          <h6 class="mt-2 fw-semibold">- Sneha Gupta (MCA)</h6>
        </div>
      </div>

      <!-- Testimonial 4 -->
      <div class="swiper-slide">
        <div class="testimonial text-center p-4 shadow-sm rounded bg-white">
          <img src="assets/uploads/testimoni-4.jpeg" alt="Rahul Singh" class="testimonial-img mb-3">
          <p>"Industry exposure and guidance from experienced faculty helped me achieve my goals with confidence."</p>
          <h6 class="mt-2 fw-semibold">- Rahul Singh (Civil)</h6>
        </div>
      </div>

    </div>

    <!-- Pagination -->
    <div class="swiper-pagination mt-3"></div>
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
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      768: { slidesPerView: 2 },
      1024: { slidesPerView: 3 },
    },
  });
</script>

<style>
/* Basic styling */
.testimonial {
  transition: all 0.4s ease;
  height: 300px;
  border-top: 4px solid #00a651;
}
.testimonial:hover {
  transform: translateY(-10px);
  box-shadow: 0 10px 30px rgba(0,166,81,0.2);
}

/* Image styling */
.testimonial-img {
  width: 90px;
  height: 90px;
  border-radius: 50%;
  object-fit: cover;
  border: 3px solid #00a651;
  transition: 0.4s ease;
}
.testimonial:hover .testimonial-img {
  transform: scale(1.1);
}

/* Pagination dots */
.swiper-pagination-bullet {
  background: #00a651 !important;
  opacity: 0.5;
  transition: opacity 0.3s ease;
}
.swiper-pagination-bullet-active {
  opacity: 1;
  background: #00a651 !important;
}
</style>

<?php require "common/footer.php"?>