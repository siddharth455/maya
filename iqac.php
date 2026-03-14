<?php
$page_title = "IQAC | Maya Devi University Dehradun";
$page_description = "Internal Quality Assurance Cell (IQAC) at Maya Devi University, Dehradun ensuring academic excellence.";
$canonical_url = "https://maya.edu.in/iqac.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php" ?>
<div class="breadcrumb-area">
  <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" style="background-image:url(assets/uploads/maya.webp);">
    <div class="container">
      <h2>Internal Quality Assurance Cell (IQAC)</h2>
      <p>The Internal Quality Assurance Cell (IQAC) is a quality monitoring and enhancement mechanism established to ensure continuous improvement in the quality of education and academic performance.</p>
    </div>
  </div>
  <div class="breadcrumb-bottom">
    <div class="container">
      <ul>
        <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>IQAC</span></li>
      </ul>
    </div>
  </div>
  <!-- ===== Institutional Development Plan Section ===== -->
  <section class="idp-section">
    <div class="idp-container">
      <!-- Document Info -->
      <div class="idp-header">
        <h2 class="idp-title">IQAC Document</h2>
        <p class="idp-description">
          Download the complete IQAC document containing detailed information about our quality assurance processes, policies, and procedures.</p>
        <a href="assets/uploads/pdf/IQAC-Document.pdf" target="_blank" class="idp-btn">
          <span>📄</span>Download IQAC Document PDF
        </a>
      </div>

      <!-- Key Development Areas -->
    
    </div>
  </section>
  <section class="governance-principles my-5 py-5">
    <div class="container">
      <div class="principles-card">
        <h2 class="text-center mb-5">About IQAC</h2>
        <div class="row">
          <div class="col-md-6">
            <h3><strong>Objectives</strong></h3>
            <ol>
              <li>To develop a system for conscious, consistent and catalytic action to improve the academic and administrative performance of the institution</li>
              <li>To promote measures for institutional functioning towards quality enhancement through internalization of quality culture and institutionalization of best practices</li>
              <li>To provide a sound basis for decision-making to improve institutional functioning</li>
            </ol>
          </div>
          <div class="col-md-6">
            <h3><strong>Functions</strong></h3>
            <ol>
              <li>Development and application of quality benchmarks/parameters for various academic and administrative activities</li>
              <li>Facilitating the creation of a learner-centric environment conducive to quality education</li>
              <li>Arrangement for feedback response from students, parents and other stakeholders on quality-related institutional processes</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  <style>
    /* ===== Institutional Development Plan Styles ===== */
    /* Governance Principles */
    .governance-principles {
      background: #f8f9fc;
    }

    .principles-card {
      background: #fff;
      padding: 50px;
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }

    .principles-card h3 {
      color: #0a2a66;
      margin-bottom: 15px;
    }

    .principles-card p {
      color: #333;
      line-height: 1.7;
    }

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