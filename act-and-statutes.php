<?php
$page_title = "Act & Statutes | Maya Devi University Dehradun";
$page_description = "View the official Act and Statutes of Maya Devi University, Dehradun ensuring academic transparency and governance standards.";
$canonical_url = "https://maya.edu.in/act-and-statutes.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php" ?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" style="background-image:url(assets/uploads/maya.webp);">
        <div class="container">
            <h2>Act and Statutes</h2>
            <p>The Act and Statutes of Maya Devi University establish the legal framework, governance structure, and regulatory provisions that guide our institution's operations and academic excellence.</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Act and Statutes</span></li>
            </ul>
        </div>
    </div>
    <!-- ===== Institutional Development Plan Section ===== -->
<section class="idp-section">
  <div class="idp-container">

    <!-- Document Info -->
    <div class="idp-header">
      <h2 class="idp-title">Act and Statutes Document</h2>
      <p class="idp-description">
      Download the complete Act and Statutes document containing the legal framework, governance policies, academic regulations, and institutional guidelines.
      </p>
      <a href="assets/uploads/pdf/act-status-document.pdf" target="_blank" class="idp-btn">
        <span>📄</span> View Act and Statutes Document PDF
      </a>
    </div>

    <!-- Key Development Areas -->
    <div class="idp-key-areas">
      <h3 class="idp-subtitle">Key Components</h3>
      <div class="idp-grid">

      <div class="idp-card">
  <div class="idp-icon" style="background-color:#e3f0ff;">⚖️</div>
  <h4>Legal Framework</h4>
  <p>Comprehensive legal provisions establishing the university's authority and jurisdiction</p>
</div>

<div class="idp-card">
  <div class="idp-icon" style="background-color:#e7f8ee;">🏛️</div>
  <h4>Governance Structure</h4>
  <p>Clear organizational hierarchy and decision-making processes</p>
</div>

<div class="idp-card">
  <div class="idp-icon" style="background-color:#f0eaff;">📚</div>
  <h4>Academic Regulations</h4>
  <p>Detailed academic policies, procedures, and quality standards</p>
</div>

<div class="idp-card">
  <div class="idp-icon" style="background-color:#fff3e3;">🎓</div>
  <h4>Student Rights</h4>
  <p>Comprehensive provisions protecting student rights and welfare</p>
</div>

<div class="idp-card">
  <div class="idp-icon" style="background-color:#ffeaea;">🗂️</div>
  <h4>Administrative Policies</h4>
  <p>Clear guidelines for administrative procedures and operations</p>
</div>

<div class="idp-card">
  <div class="idp-icon" style="background-color:#eaf1ff;">✅</div>
  <h4>Quality Assurance</h4>
  <p>Mechanisms for maintaining academic excellence and standards</p>
</div>


      </div>
    </div>

  </div>
</section>

<style>
/* ===== Institutional Development Plan Styles ===== */

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