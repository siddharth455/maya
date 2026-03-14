<?php
$page_title = "Student Clubs & Activities | Maya Devi University Dehradun";
$page_description = "Explore student clubs and extracurricular activities at Maya Devi University, Dehradun promoting leadership, creativity, and teamwork.";
$canonical_url = "https://maya.edu.in/club.php";
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
<section class="py-5" style="background:#f8f9fa;">
  <div class="container">

    <!-- Page Title -->
    <div class="text-center mb-5">
      <h2 class="fw-bold">Student Clubs & Activities</h2>
      <p class="text-muted w-75 mx-auto">
        Our vibrant clubs foster creativity, leadership, innovation, and community engagement—helping students grow beyond academics.
      </p>
    </div>

    <div class="row g-4">

      <!-- CLUB CARD -->
      <!-- Repeat structure for all clubs -->

      <div class="col-lg-4 col-md-6">
        <div class="club-card">
          <div class="club-icon">🛡️</div>
          <h5>CyberSec Club</h5>
          <p>Learn, practice, and explore ethical hacking and cybersecurity challenges.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="club-card">
          <div class="club-icon">🎮</div>
          <h5>Game Dev & AR/VR Club</h5>
          <p>Explore immersive worlds through AR/VR projects and game development.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="club-card">
          <div class="club-icon">🏅</div>
          <h5>Sports Club</h5>
          <p>Promotes fitness, teamwork, and participation in indoor and outdoor sports.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="club-card">
          <div class="club-icon">🎨</div>
          <h5>Art & Culture Club</h5>
          <p>Encourages creativity through music, dance, theatre, and cultural events.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="club-card">
          <div class="club-icon">❤️</div>
          <h5>Health Care Club</h5>
          <p>Spreads awareness on health, wellness, medical camps, and blood drives.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="club-card">
          <div class="club-icon">🌱</div>
          <h5>Clean & Green Club</h5>
          <p>Focuses on sustainability, plantation drives, and campus cleanliness.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="club-card">
          <div class="club-icon">👩‍🎓</div>
          <h5>Women Empowerment Club</h5>
          <p>Promotes equality, leadership, and awareness initiatives.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="club-card">
          <div class="club-icon">🍳</div>
          <h5>Culinary Club</h5>
          <p>A creative space for food lovers to explore cooking and baking.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="club-card">
          <div class="club-icon">🌍</div>
          <h5>Language Clubs</h5>
          <p>Encourages learning and practicing diverse languages and cultures.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="club-card">
          <div class="club-icon">🤝</div>
          <h5>Community Engagement Club</h5>
          <p>Works on social service and community development initiatives.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="club-card">
          <div class="club-icon">♿</div>
          <h5>Inclusive Education Club</h5>
          <p>Advocates for disability awareness and inclusive learning.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
    .club-card {
  background: #ffffff;
  border-radius: 16px;
  padding: 25px;
  text-align: center;
  height: 100%;
  box-shadow: 0 8px 24px rgba(0,0,0,0.08);
  transition: transform 0.35s ease, box-shadow 0.35s ease;
}

.club-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 18px 40px rgba(0,0,0,0.15);
}

.club-icon {
  width: 70px;
  height: 70px;
  border-radius: 14px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 32px;
  color: #fff;
  margin: 0 auto 15px;
}

.club-card h5 {
  font-weight: 700;
  margin-bottom: 10px;
}

.club-card p {
  font-size: 14.5px;
  color: #555;
}

     .hero-section {
        background: url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
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
        background: url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
        min-height: 30vh;
        display: flex;
        align-items: center;
        color: white;
        position: relative;
    }
}
    </style>
<?php require "common/footer.php" ?>