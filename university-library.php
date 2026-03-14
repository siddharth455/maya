<?php
$page_title = "University Library | Maya Devi University Dehradun";
$page_description = "Explore the modern university library at Maya Devi University, Dehradun with digital resources.";
$canonical_url = "https://maya.edu.in/university-library.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php"; ?>

<!-- HERO SECTION -->
<section class="hero-section" style="background: url('assets/uploads/library-1.jpeg') center/cover no-repeat; height:70vh !important;">
  <div class="hero-content">
    <h3 class="display-5 fw-bold text-white">University Library</h3>
    <p class="lead text-white">
      A hub of knowledge, research, and academic excellence supporting learning across all disciplines.
    </p>
  </div>
</section>

<!-- ABOUT LIBRARY -->
<section class="library-section reveal">
  <div class="library-container">
    <h2 class="section-title">About the Library</h2>
    <p class="section-subtitle">
      The Maya Devi University Library provides access to a rich collection of academic resources,
      modern learning spaces, and digital facilities to support students, faculty, and researchers.
    </p>
  </div>
</section>

<!-- LIBRARY FEATURES -->
<section class="library-features">
  <div class="features-grid">

    <div class="feature-card reveal">
      <h4>Extensive Book Collection</h4>
      <p>Thousands of textbooks, reference books, journals, and research publications across disciplines.</p>
    </div>

    <div class="feature-card reveal">
      <h4>Digital Library</h4>
      <p>Access to e-books, online journals, databases, and digital repositories for research and study.</p>
    </div>

    <div class="feature-card reveal">
      <h4>Reading & Study Areas</h4>
      <p>Quiet and comfortable reading spaces designed to enhance focus and learning.</p>
    </div>

    <div class="feature-card reveal">
      <h4>Research Support</h4>
      <p>Dedicated support for research, project work, and academic referencing.</p>
    </div>

    <div class="feature-card reveal">
      <h4>Computer & Internet Access</h4>
      <p>Well-equipped computer systems with high-speed internet connectivity.</p>
    </div>

    <div class="feature-card reveal">
      <h4>Experienced Library Staff</h4>
      <p>Qualified professionals to assist students and faculty with academic resources.</p>
    </div>

  </div>
</section>

<!-- LIBRARY GALLERY -->
<section class="library-gallery">
  <h2 class="section-title reveal">Library Gallery</h2>
  <p class="section-subtitle reveal">
    A glimpse into our modern library spaces, resources, and learning environment.
  </p>

  <div class="gallery-grid">
    <div class="gallery-item reveal">
      <img src="assets/uploads/library.png" alt="Library Reading Area">
    </div>
    <div class="gallery-item reveal">
      <img src="assets/uploads/library-2.jpeg" alt="Library Book Collection">
    </div>
    <div class="gallery-item reveal">
      <img src="assets/uploads/library-3.jpg" alt="Digital Library">
    </div>
  </div>
</section>

<!-- LIBRARY TIMINGS -->
<section class="library-timings reveal">
  <h2 class="section-title">Library Timings</h2>
  <div class="timings-box">
    <p><strong>Monday – Friday:</strong> 9:00 AM – 7:00 PM</p>
    <p><strong>Saturday:</strong> 9:00 AM – 5:00 PM</p>
    <p><strong>Sunday & Holidays:</strong> Closed</p>
  </div>
</section>

<?php require "common/footer.php"; ?>

<!-- ANIMATION SCRIPT -->
<script>
  const revealItems = document.querySelectorAll(".reveal");

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
      }
    });
  }, { threshold: 0.15 });

  revealItems.forEach(item => observer.observe(item));
</script>

<style>

/* ---------- REVEAL ANIMATION ---------- */
.reveal {
  opacity: 0;
  transform: translateY(40px);
  transition: all 0.8s ease;
}

.reveal.show {
  opacity: 1;
  transform: translateY(0);
}

/* ---------- HERO ---------- */
.hero-content {
  animation: heroFade 1.2s ease forwards;
}

@keyframes heroFade {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* ---------- ABOUT ---------- */
.library-section {
  padding: 90px 40px 40px;
  background: #f8fbff;
  text-align: center;
}

.library-container {
  max-width: 900px;
  margin: auto;
}

.section-title {
  font-size: 36px;
  font-weight: 700;
  color: #0b1f33;
  margin-bottom: 15px;
}

.section-subtitle {
  font-size: 16px;
  color: #5f738c;
  line-height: 1.7;
}

/* ---------- FEATURES ---------- */
.library-features {
  padding: 70px 40px 100px;
  background: #ffffff;
}

.features-grid {
  max-width: 1200px;
  margin: auto;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(360px, 1fr));
  gap: 30px;
}

.feature-card {
  background: linear-gradient(180deg, #ffffff, #f4f8ff);
  padding: 35px 30px;
  border-radius: 20px;
  box-shadow: 0 20px 40px rgba(11, 31, 51, 0.08);
  transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.feature-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 35px 70px rgba(30, 136, 229, 0.25);
}

.feature-card h4 {
  font-size: 18px;
  color: #0b1f33;
  margin-bottom: 10px;
}

.feature-card p {
  font-size: 14px;
  color: #5f738c;
  line-height: 1.6;
}

/* ---------- GALLERY ---------- */
.library-gallery {
  padding: 10px 40px;
  background: #ffffff;
  text-align: center;
}

.gallery-grid {
  max-width: 1200px;
  margin: 60px auto 0;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 30px;
}

.gallery-item {
  border-radius: 20px;
  overflow: hidden;
  position: relative;
  box-shadow: 0 25px 50px rgba(11, 31, 51, 0.12);
}

.gallery-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.6s ease;
}

.gallery-item:hover img {
  transform: scale(1.15);
}

.gallery-item::after {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(
    180deg,
    rgba(11, 31, 51, 0) 40%,
    rgba(11, 31, 51, 0.55)
  );
  opacity: 0;
  transition: opacity 0.4s ease;
}

.gallery-item:hover::after {
  opacity: 1;
}

/* ---------- TIMINGS ---------- */
.library-timings {
  padding: 90px 40px;
  background: linear-gradient(180deg, #eef4ff, #f8fbff);
  text-align: center;
}

.timings-box {
  max-width: 520px;
  margin: 30px auto 0;
  background: #ffffff;
  padding: 35px;
  border-radius: 20px;
  box-shadow: 0 25px 50px rgba(11, 31, 51, 0.12);
}

.timings-box p {
  font-size: 15px;
  color: #0b1f33;
  margin-bottom: 12px;
}

/* ---------- RESPONSIVE ---------- */
@media (max-width: 600px) {
  .section-title {
    font-size: 28px;
  }
}

</style>