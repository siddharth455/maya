<?php
$page_title = "Colleges & Departments | Maya Devi University Dehradun";
$page_description = "Explore colleges and departments at Maya Devi University, Dehradun offering diverse academic programs.";
$canonical_url = "https://maya.edu.in/colleges-departments.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php"?>

<section class="hero-section" style="background: url('assets/uploads/home-banner.webp') center/cover no-repeat; height:70vh !important;">
  <div class="hero-content">
      <h3 class="display-5 fw-bold text-white">Schools & Departments</h3>
      <p class="lead text-white">
        At Maya Devi University, our Placement Cell is dedicated to guiding students toward <br>
        successful careers by connecting them with leading industries and fostering professional excellence.
      </p>
  </div>
</section>

<section class="departments-section">
  <h2 class="section-title">Our Schools & Departments</h2>
  <p class="section-subtitle">
    Explore our diverse academic schools designed to shape future professionals.
  </p>

  <div class="departments-grid">

    <a href="best-computer-engineering-college-in-dehradun-uttarakhand.php" class="dept-card">School of Computer Engineering & Applications</a>
    <a href="best-engineering-college-in-dehradun-uttarakhand.php" class="dept-card">School of Engineering</a>
    <a href="pharmacy.php" class="dept-card">School of Pharmacy</a>
    <a href="management-and-commerce.php" class="dept-card">School of Commerce & Management</a>
    <a href="sciences.php" class="dept-card">School of Life & Applied Science</a>
    <a href="hotel-management-and-tourism.php" class="dept-card">School of Hotel Management & Tourism</a>
    <a href="school-of-education.php" class="dept-card">School of Education</a>
    <a href="Nursing.php" class="dept-card">School of Nursing</a>
    <a href="agriculture.php" class="dept-card">School of Agriculture & Technology</a>
    <a href="school-of-paramedical-sciences.php" class="dept-card">School of Paramedical Sciences</a>
    <a href="school-of-health-sciences.php" class="dept-card">School of Health Science</a>
    <a href="arts-and-humanities.php" class="dept-card">School of Arts & Humanities</a>
    <a href="school-of-legal-studies.php" class="dept-card">School of Law & Legal Studies</a>
    <a href="school-of-rehabilitation-sciences.php" class="dept-card">Ashtvakra School of Rehabilitation</a>
    <a href="school-of-skill-development-and-vocational-studies.php" class="dept-card">School of Skill Development & Vocational Studies</a>

  </div>
</section>

<?php require "common/footer.php"?>

<style>

.departments-section {
  padding: 90px 40px;
  background: linear-gradient(180deg, #f8fbff, #eef4ff);
  text-align: center;
}

.section-title {
  font-size: 36px;
  font-weight: 700;
  color: #0b1f33;
  margin-bottom: 10px;
}

.section-subtitle {
  font-size: 16px;
  color: #5f738c;
  max-width: 650px;
  margin: 0 auto 60px;
}

.departments-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 30px;
  max-width: 1200px;
  margin: auto;
  text-align: center;
  align-items: center;
  align-self: center;
  align-content: center;
}

/* Card */
.dept-card {
  background: #ffffff;
  padding: 35px 25px;
  border-radius: 18px;
  font-size: 16px;
  font-weight: 600;
  color: #0b1f33;
  box-shadow: 0 20px 40px rgba(11, 31, 51, 0.08);
  position: relative;
  overflow: hidden;
  cursor: pointer;
  transform: translateY(40px);
  opacity: 0;
  animation: fadeUp 0.8s ease forwards;
  text-decoration: none;
  z-index: 1;
}

/* Gradient overlay */
.dept-card::before {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(120deg, #1e88e5, #42a5f5);
  opacity: 0;
  transition: opacity 0.4s ease;
  z-index: -1;
}

/* Hover */
.dept-card:hover::before {
  opacity: 1;
}

.dept-card:hover {
  color: #ffffff;
  transform: translateY(-8px) scale(1.03);
  box-shadow: 0 30px 60px rgba(30, 136, 229, 0.35);
}

/* Animation */
@keyframes fadeUp {
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

/* Stagger animation */
.dept-card:nth-child(1) { animation-delay: 0.05s; }
.dept-card:nth-child(2) { animation-delay: 0.1s; }
.dept-card:nth-child(3) { animation-delay: 0.15s; }
.dept-card:nth-child(4) { animation-delay: 0.2s; }
.dept-card:nth-child(5) { animation-delay: 0.25s; }
.dept-card:nth-child(6) { animation-delay: 0.3s; }
.dept-card:nth-child(7) { animation-delay: 0.35s; }
.dept-card:nth-child(8) { animation-delay: 0.4s; }
.dept-card:nth-child(9) { animation-delay: 0.45s; }
.dept-card:nth-child(10){ animation-delay: 0.5s; }
.dept-card:nth-child(11){ animation-delay: 0.55s; }
.dept-card:nth-child(12){ animation-delay: 0.6s; }
.dept-card:nth-child(13){ animation-delay: 0.65s; }
.dept-card:nth-child(14){ animation-delay: 0.7s; }
.dept-card:nth-child(15){ animation-delay: 0.75s; }

/* Responsive */
@media (max-width: 600px) {
  .section-title {
    font-size: 28px;
  }
}

</style>