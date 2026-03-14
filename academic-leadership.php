<?php
$page_title = "Academic Leadership | Maya Devi University Dehradun";
$page_description = "Meet the academic leadership team at Maya Devi University, Dehradun guiding excellence in education, innovation, and research.";
$canonical_url = "https://maya.edu.in/academic-leadership.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>

<?php require "common/header.php" ?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" style="background-image:url(assets/uploads/maya.webp);">
        <div class="container">
            <h2>Academic Leadership</h2>
            <p>Our Academic Leadership provides strategic direction and scholarly oversight to advance the university’s teaching, research, and academic excellence.</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>AL</span></li>
            </ul>
        </div>
    </div>
    <!-- ===== Institutional Development Plan Section ===== -->
<section class="idp-section">
  <div class="idp-container">
 <div class="idp-header">
      <h2 class="idp-title">Academic Leadership</h2>
      <p class="idp-description">
      Our Academic Leadership team comprises distinguished educators, researchers, and administrators who guide the university's academic vision and ensure excellence in education and research.
      </p>
    </div>
    <!-- Document Info -->
    <div class="idp-header">
      <h2 class="idp-title">Faculty List Document</h2>
      <p class="idp-description">
      Download the complete list of faculty and staff members as of October 15, 2025, showcasing our academic leadership and teaching excellence.
      </p>
      <a href="assets/uploads/pdf/List-of-Staff-as-on-15-Oct-2025.pdf" target="_blank" class="idp-btn">
        <span>📄</span>Download Faculty list PDF
      </a>
    </div>

</section>

<style>
.idp-section {
  background-color: #f8f9f8;
  padding: 50px 20px;
  display: flex;
  justify-content: center;
}

.idp-container {
  width: 100%;
  max-width: 1200px;
}

.idp-header {
  background: #fff;
  text-align: center;
  padding: 40px 30px;
  border-radius: 16px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  margin-bottom: 40px;
}

.idp-title {
  color: #0f3b2f;
  margin-bottom: 12px;
  font-size: 1.8rem;
}

.idp-description {
  color: #444;
  margin-bottom: 25px;
  line-height: 1.5;
}

.idp-btn {
  background-color: #00a651;
  color: white;
  text-decoration: none;
  padding: 12px 25px;
  border-radius: 8px;
  font-weight: 500;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  transition: background 0.3s ease;
}

.idp-btn:hover {
  background-color: #135c47;
}

/* Key Areas */
.idp-key-areas {
  background: #fff;
  border-radius: 16px;
  padding: 40px 30px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.idp-subtitle {
  text-align: center;
  color: #00a651;
  font-size: 1.5rem;
  margin-bottom: 30px;
}

.idp-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr); /* Always 3 in a row */
  gap: 25px;
}

@media (max-width: 900px) {
  .idp-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 600px) {
  .idp-grid {
    grid-template-columns: 1fr;
  }
}

.idp-card {
  background: #f9fafb;
  border-radius: 12px;
  padding: 25px;
  box-shadow: 0 1px 4px rgba(0,0,0,0.08);
  text-align: center;
  transition: transform 0.2s ease;
}

.idp-card:hover {
  transform: translateY(-4px);
}

.idp-icon {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 15px;
  font-size: 22px;
}

.idp-card h4 {
  color: #0f3b2f;
  margin-bottom: 8px;
}

.idp-card p {
  color: #555;
  font-size: 14px;
  line-height: 1.5;
}
</style>

    <?php require "common/footer.php" ?>