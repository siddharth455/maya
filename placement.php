<div class="container-students mt-3">
  <!-- Left Content -->
  <div class="text-content">
  <div class="section-title">
            <h2 class="title">About <span>Maya Devi Placement</span></h2>
            <p>Getting You Industry Ready With The Most Leading Careers</p>
            </div>
            <p>Maya Devi University is committed to providing students with a transformative educational experience that blends academic excellence, practical learning, and holistic development. With strong partnerships across industries and institutions, the university creates personalized learning paths, empowering students to pursue their goals with confidence and purpose.</p>

<p>The university’s dedicated career development cell offers placement support, expert counseling, and skill-building workshops to ensure students are industry-ready. From internships to full-time opportunities with top organizations, Maya Devi University not only builds professional competence but also fosters leadership, adaptability, and innovation for lifelong success.</p>
<p>With a strong record of placements and a focus on research-driven learning, Maya Devi University ensures that every student graduates with the skills, confidence, and vision to make a lasting impact in their chosen field.</p>

  </div>

  <!-- Right Side Slider -->
<!-- Right Side Image Slider -->
<div class="slider-container">
  <div class="swiper studentImageSwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="assets/uploads/icon/place-1.webp" alt="Student 1" class="student-slide-img" />
      </div>
      <div class="swiper-slide">
        <img src="assets/uploads/icon/place-2.webp" alt="Student 2" class="student-slide-img" />
      </div>
      <div class="swiper-slide">
        <img src="assets/uploads/icon/place-3.webp" alt="Student 3" class="student-slide-img" />
      </div>
      <div class="swiper-slide">
        <img src="assets/uploads/icon/place-4.webp" alt="Student 4" class="student-slide-img" />
      </div>
      <div class="swiper-slide">
        <img src="assets/uploads/icon/place-5.webp" alt="Student 5" class="student-slide-img" />
      </div>
      <div class="swiper-slide">
        <img src="assets/uploads/icon/place-6.webp" alt="Student 6" class="student-slide-img" />
      </div>
      <div class="swiper-slide">
        <img src="assets/uploads/icon/place-7.webp" alt="Student 7" class="student-slide-img" />
      </div>
      <div class="swiper-slide">
        <img src="assets/uploads/icon/place-8.webp" alt="Student 8" class="student-slide-img" />
      </div>
      <!-- Add more slides as needed -->
    </div>
    <!-- Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</div>

</div>
<!-- Placement Verticals Section -->
<div class="placement-verticals container">
<div class="section-title mb-75">
            <h2 class="title">Placement <span>Verticals</span></h2>
            <p>Bridging The Gap By Aligning With The Industry</p>
            </div>
  <div class="icon-row mt-4">
    <div class="icon-card">
      <img src="assets/uploads/icon/practice.webp" alt="Training & Placements">
      <p>Training & Placements</p>
    </div>
    <div class="icon-card">
      <img src="assets/uploads/icon/integration.webp" alt="Work Integrated Programs">
      <p>Work Integrated Programs</p>
    </div>
    <div class="icon-card">
      <img src="assets/uploads/icon/industrial.webp" alt="Industry Collaborations">
      <p>Industry Collaborations</p>
    </div>
    <div class="icon-card">
      <img src="assets/uploads/icon/outstanding.webp" alt="Centers of Excellence">
      <p>Centers of Excellence</p>
    </div>
  </div>

  <div class="icon-row">
    <div class="icon-card">
      <img src="assets/uploads/icon/users.webp" alt="Executive Development Programs">
      <p>Executive Development <br>Programs</p>
    </div>
    <div class="icon-card">
      <img src="assets/uploads/icon/community_1.webp" alt="Industry Visits">
      <p>Industry Visits</p>
    </div>
    <div class="icon-card">
      <img src="assets/uploads/icon/building_1.webp" alt="Industry Advisory Board">
      <p>Industry Advisory Board</p>
    </div>
    <div class="icon-card">
      <img src="assets/uploads/icon/creative-team.webp" alt="Career Competencies">
      <p>Career Competencies</p>
    </div>
    <div class="icon-card">
      <img src="assets/uploads/icon/document.webp" alt="Skill Development">
      <p>Skill Development</p>
    </div>
  </div>
 

</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  const studentImageSwiper = new Swiper('.studentImageSwiper', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
  });
</script>



<style>
  .slider-container {
  flex-shrink: 0;
  width: 350px;
  height: 500px;
}

.studentImageSwiper {
  width: 100%;
  height: 100%;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.student-slide-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  border-radius: 8px;
}

    .text-custom {
  font-size: 28px;
  font-weight: bold;
}

.topCompanies-block {
  display: flex;
  flex-wrap: nowrap;
  overflow-x: auto;
  gap: 20px;
  padding: 30px 0;
  scroll-behavior: smooth;
}

.topCompaniesLogo-slider {
  flex: 0 0 auto;
  width: 160px;
  height: 100px;
  display: flex;
  align-items: center;
  justify-content: center
}

.logo-img-company img.lazy-img {
  max-height: 80px;
  max-width: 100%;
  object-fit: contain;
}

.icon-row {
  display: flex;
  flex-wrap: wrap;
  gap: 40px 90px;
  margin-bottom: 40px;
}

.icon-card {
  width: 140px;
  text-align: center;
}

.icon-card img {
  height: 60px;
  margin-bottom: 12px;
}
.icon-card {
  display: flex;
  flex-direction: column;
  align-items: center;
  max-width: 140px;
  text-align: center;
}

.icon-card img {
  height: 60px;
  margin-bottom: 12px;
}

.icon-card p {
  font-size: 14px;
  color: #111827;
}

.container-students {
  display: flex;
  flex-wrap: wrap;
  padding: 40px;
  gap: 40px;
  justify-content: center;
  align-items: flex-start;
}

.text-content {
  flex: 1;
  min-width: 300px;
  max-width: 800px;
}

.title {
  font-size: 28px;
  font-weight: bold;
}

.subtitle {
  font-size: 24px;
  margin-top: 10px;
  margin-bottom: 20px;
}

.text-content p {
  font-size: 16px;
  line-height: 1.6;
  margin-bottom: 20px;
}

.slider-container {
  flex-shrink: 0;
  width: 370px;
  height: 400px;
}

.swiper {
  width: 100%;
  height: 100%;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.slide-card {
  background-color: #ff8c3f;
  color: #fff;
  padding: 20px;
  height: 100%;
  text-align: center;
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.quote {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 20px;
}

.student-img {
  width: 120px;
  height: 160px;
  object-fit: cover;
  margin: 0 auto;
  border: 3px solid #000;
  border-radius: 6px;
}

.name-tag {
  background: linear-gradient(to right, #c471ed, #12c2e9);
  color: white;
  font-weight: bold;
  padding: 6px 12px;
  border-radius: 15px;
  margin: 10px auto;
  width: fit-content;
}

.selected-in {
  font-size: 14px;
  margin-top: 10px;
}

.company-logo {
  width: 100px;
  margin: 10px auto 0;
}

@media (max-width: 1024px) {
  .container {
    flex-direction: column;
    align-items: center;
  }

  .slider-container {
    width: 100%;
    max-width: 300px;
    height: auto;
  }
  .icon-row {
  justify-content: center;
}
}

</style>