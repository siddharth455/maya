<?php
$page_title = "Faculty & Staff | Maya Devi University Dehradun";
$page_description = "Meet faculty and staff members of Maya Devi University, Dehradun with academic expertise.";
$canonical_url = "https://maya.edu.in/staff-details-with-photograph.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php" ?>
<div class="breadcrumb-area">
  <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" style="background-image:url(assets/uploads/maya.webp);">
    <div class="container">
      <h2>Staff Details With Photograph</h2>
      <p>Comprehensive information about our dedicated faculty and staff members, including their qualifications, experience, and photographs, showcasing the expertise that drives our academic excellence.</p>
    </div>
  </div>
  <div class="breadcrumb-bottom">
    <div class="container">
      <ul>
        <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>SDP</span></li>
      </ul>
    </div>
  </div>
  <!-- ===== Institutional Development Plan Section ===== -->
  <section class="idp-section">
    <div class="idp-container">
     
      <!-- Document Info -->
      <div class="idp-header">
        <h2 class="idp-title">Faculty Profile Document</h2>
        <p class="idp-description">
          Download the comprehensive faculty profile document containing detailed information about our teaching faculty including qualifications, specializations, and achievements.</p>
        <a href="assets/uploads/pdf/Faculty-Profile.pdf" target="_blank" class="idp-btn">
          <span>📄</span>Download Faculty Profile PDF
        </a>
      </div>

      <!-- Key Development Areas -->
    <div class="idp-key-areas">
  <h3 class="idp-subtitle">Staff Information</h3>
  <div class="idp-grid">

    <div class="idp-card">
      <div class="idp-icon" style="background-color:#e3f0ff;">👩‍🏫</div>
      <h4>Faculty Profiles</h4>
      <p>Detailed profiles of teaching faculty including qualifications, specializations, and achievements.</p>
    </div>

    <div class="idp-card">
      <div class="idp-icon" style="background-color:#e7f8ee;">📸</div>
      <h4>Photographs</h4>
      <p>Professional photographs of all faculty and staff members for easy identification.</p>
    </div>

    <div class="idp-card">
      <div class="idp-icon" style="background-color:#f0eaff;">🎓</div>
      <h4>Qualifications</h4>
      <p>Comprehensive listing of academic qualifications, certifications, and professional credentials.</p>
    </div>

    <div class="idp-card">
      <div class="idp-icon" style="background-color:#fff3e3;">💼</div>
      <h4>Experience</h4>
      <p>Detailed work experience, research contributions, and professional achievements.</p>
    </div>

    <div class="idp-card">
      <div class="idp-icon" style="background-color:#ffeaea;">📚</div>
      <h4>Specializations</h4>
      <p>Subject expertise, research areas, and teaching specializations of faculty members.</p>
    </div>

    <div class="idp-card">
      <div class="idp-icon" style="background-color:#eaf1ff;">📞</div>
      <h4>Contact Information</h4>
      <p>Office locations, contact details, and consultation hours for faculty members.</p>
    </div>

  </div>
</div>



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
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
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
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .idp-subtitle {
      text-align: center;
      color: #00a651;
      font-size: 1.5rem;
      margin-bottom: 30px;
    }

    .idp-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      /* Always 3 in a row */
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
      box-shadow: 0 1px 4px rgba(0, 0, 0, 0.08);
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