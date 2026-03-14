<?php
$page_title = "Sports & Athletics | Maya Devi University Dehradun";
$page_description = "Discover sports facilities and athletic programs at Maya Devi University, Dehradun.";
$canonical_url = "https://maya.edu.in/sports.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php" ?>

<section class="hero-section">
    <div class="hero-overlay"></div>
    <div class="container text-center hero-content">
        <h1 class="display-4 fw-bold text-white">Clubs & Student Life</h1>
        <p class="lead mt-3 w-75 mx-auto text-white">
           Discover diverse student clubs that inspire passion, teamwork, creativity, and meaningful engagement across campus.
        </p>
    </div>
</section>

<section class="sports-page">

  <div class="container">

    <!-- Header -->
    <div class="sports-header">
      <h1>Sports at Maya Devi University</h1>
      <p>
        Sports at Maya Devi University are an integral part of campus life.
        The university promotes physical fitness, discipline, teamwork, and
        leadership through structured sports programs and modern facilities.
      </p>
    </div>

    <!-- Sports Cards -->
    <div class="sports-grid">
      <div class="sports-card">
        <span class="card-accent"></span>
        <h3>Outdoor Sports</h3>
        <p>
          Football, Cricket, Volleyball, Athletics, Kabaddi and other outdoor
          sports that develop endurance, teamwork, and competitive spirit.
        </p>
      </div>

      <div class="sports-card">
        <span class="card-accent"></span>
        <h3>Indoor Sports</h3>
        <p>
          Badminton, Table Tennis, Chess, Carrom and indoor games that enhance
          focus, agility, and strategic thinking.
        </p>
      </div>

      <div class="sports-card">
        <span class="card-accent"></span>
        <h3>Fitness & Training</h3>
        <p>
          Well-equipped gymnasium, yoga sessions, fitness programs, and guided
          training to promote holistic physical and mental wellness.
        </p>
      </div>
    </div>

    <!-- Facilities -->
    <div class="sports-section">
      <h2>Sports Facilities</h2>
      <p>
        The university provides modern sports infrastructure to support both
        recreational and competitive activities, encouraging participation at
        inter-college and university levels.
      </p>

      <ul class="sports-list">
        <li>Spacious outdoor playgrounds</li>
        <li>Indoor sports complex</li>
        <li>Modern gymnasium & fitness center</li>
        <li>Professional coaching support</li>
        <li>Annual sports meets & tournaments</li>
      </ul>
    </div>

  </div>

  <!-- ✅ FULL-WIDTH GALLERY (KEY FIX) -->
  <div class="container-fluid px-4">
    <div class="sports-section">
      <h2 class="text-center">Sports Gallery</h2>
      <p class="text-center">
        A glimpse of sports activities, tournaments, and training sessions at
        Maya Devi University.
      </p>

      <div class="sports-gallery">
        <img src="assets/uploads/maya-7.jpeg" alt="Sports Activity">
        <img src="assets/uploads/maya-8.jpeg" alt="Sports Activity">
         <img src="assets/uploads/maya-11.jpeg" alt="Sports Activity">
        <img src="assets/uploads/sports.webp" alt="Sports Activity">
        <img src="assets/uploads/sports-2.webp" alt="Sports Activity">
        <img src="assets/uploads/sports-3.jpg" alt="Sports Activity">
        <img src="assets/uploads/sports-4.jpg" alt="Sports Activity">
        <img src="assets/uploads/sports-5.jpg" alt="Sports Activity">
        <img src="assets/uploads/sports-6.jpg" alt="Sports Activity">
        <img src="assets/uploads/sports-7.jpg" alt="Sports Activity">
        <img src="assets/uploads/sports-8.jpg" alt="Sports Activity">
        <img src="assets/uploads/sports-9.jpg" alt="Sports Activity">

      </div>
    </div>
  </div>

  <div class="container">
    <!-- CTA -->
    <div class="sports-cta text-center">
      <a href="contact.php">Join Our Sports Community</a>
    </div>
  </div>

</section>

<?php require "common/footer.php" ?>

<style>
/* SPORTS PAGE */
.sports-page {
  padding: 80px 0;
  background: #ffffff;
  font-family: system-ui, -apple-system, "Segoe UI", Roboto, Arial;
}

/* Header */
.sports-header {
  max-width: 900px;
  margin-bottom: 60px;
}

.sports-header h1 {
  font-size: 40px;
  font-weight: 800;
  margin-bottom: 14px;
  color: #111;
}

.sports-header p {
  font-size: 17px;
  line-height: 1.7;
  color: #555;
}

/* Cards */
.sports-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 30px;
  margin-bottom: 70px;
}

.sports-card {
  position: relative;
  background: #ffffff;
  border-radius: 14px;
  padding: 30px;
  border: 1px solid #e6e6e6;
  transition: transform 0.35s ease, box-shadow 0.35s ease;
}

.sports-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 18px 45px rgba(0,0,0,0.12);
}

.card-accent {
  position: absolute;
  top: 0;
  left: 0;
  width: 6px;
  height: 100%;
  background: #00a651;
  border-radius: 14px 0 0 14px;
}

/* Sections */
.sports-section {
  max-width: 1100px;
  margin: 0 auto 60px;
}

.sports-list li {
  margin-bottom: 8px;
}

/* GALLERY */
.sports-gallery {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 18px;
  margin-top: 25px;
}

.sports-gallery img {
  width: 100%;
  height: 280px;
  object-fit: cover;
  border-radius: 12px;
  transition: transform 0.35s ease, box-shadow 0.35s ease;
}

.sports-gallery img:hover {
  transform: scale(1.05);
  box-shadow: 0 16px 35px rgba(0,0,0,0.25);
}

/* CTA */
.sports-cta a {
  display: inline-block;
  padding: 14px 40px;
  background: #00a651;
  color: #fff;
  text-decoration: none;
  font-weight: 600;
  border-radius: 6px;
}

/* Responsive */
@media (max-width: 992px) {
  .sports-gallery { grid-template-columns: repeat(2, 1fr); }
}

@media (max-width: 576px) {
  .sports-gallery { grid-template-columns: 1fr; }
}

    .hero-section {
        background: url('assets/uploads/sports-banner.webp') center/cover no-repeat;
        min-height: 70vh;
        display: flex;
        align-items: center;
        color: white;
        position: relative;
    }
    .hero-overlay {
        position: absolute;
        inset: 0;
        background: rgba(0,0,0,0.55);
    }
    .hero-content {
        position: relative;
        z-index: 5;
    }

    .section-title {
        font-weight: 700;
        font-size: 2.1rem;
        color: var(--theme-color);
    }
    @media (max-width: 768px) {
   .hero-section {
        background: url('assets/uploads/sports-banner.webp') center/cover no-repeat;
        min-height: 30vh;
        display: flex;
        align-items: center;
        color: white;
        position: relative;
    }
}
</style>