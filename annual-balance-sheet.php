<?php
$page_title = "Annual Balance Sheet | Maya Devi University Dehradun";
$page_description = "Access annual financial reports and balance sheet details of Maya Devi University, Dehradun ensuring transparency and compliance.";
$canonical_url = "https://maya.edu.in/annual-balance-sheet.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php" ?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" style="background-image:url(assets/uploads/maya.webp);">
        <div class="container">
            <h2>Annual Balance Sheet</h2>
            <p>Our Annual Balance Sheet provides a comprehensive overview of the university's financial position, assets, liabilities, and equity, ensuring transparency and accountability in financial management.</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>ABS</span></li>
            </ul>
        </div>
    </div>
    <!-- ===== Institutional Development Plan Section ===== -->
<section class="idp-section">
  <div class="idp-container">

    <!-- Document Info -->
    <div class="idp-header">
      <h2 class="idp-title">Annual Balance Sheet Document</h2>
      <p class="idp-description">
      Download the complete Annual Balance Sheet containing detailed financial statements, asset valuations, liability assessments, and equity analysis.
      </p>
      <a href="assets/uploads/pdf/Annual-Balance-Sheet.pdf" target="_blank" class="idp-btn">
        <span>📄</span> View Balance Sheet Document PDF
      </a>
    </div>

    <!-- Key Development Areas -->
    <div class="idp-key-areas">
      <h3 class="idp-subtitle">Financial Overview</h3>
      <div class="idp-grid">

      <div class="idp-card">
  <div class="idp-icon" style="background-color:#e3f0ff;">💼</div>
  <h4>Assets</h4>
  <p>Comprehensive listing of university assets including infrastructure, equipment, and investments</p>
</div>

<div class="idp-card">
  <div class="idp-icon" style="background-color:#e7f8ee;">💰</div>
  <h4>Revenue</h4>
  <p>Detailed breakdown of income sources including fees, grants, and other revenue streams</p>
</div>

<div class="idp-card">
  <div class="idp-icon" style="background-color:#f0eaff;">📊</div>
  <h4>Expenditures</h4>
  <p>Complete analysis of operational costs, capital investments, and administrative expenses</p>
</div>

<div class="idp-card">
  <div class="idp-icon" style="background-color:#fff3e3;">📉</div>
  <h4>Liabilities</h4>
  <p>Assessment of financial obligations, loans, and other liabilities</p>
</div>

<div class="idp-card">
  <div class="idp-icon" style="background-color:#ffeaea;">🏛️</div>
  <h4>Equity</h4>
  <p>Analysis of university's net worth and equity position</p>
</div>

<div class="idp-card">
  <div class="idp-icon" style="background-color:#eaf1ff;">📈</div>
  <h4>Financial Health</h4>
  <p>Overall assessment of financial stability and growth indicators</p>
</div>


      </div>
    </div>

  </div>
</section>
<section class="governance-principles my-5 py-5">
  <div class="container">
    <div class="principles-card">
      <h2 class="text-center mb-5">Financial Transparency</h2>
      <div class="row">
        <div class="col-md-6">
          <h3><strong>Key Financial Metrics</strong></h3>
         <ol>
            <li>Total assets and asset utilization</li>
            <li>Revenue growth and diversification</li>
            <li>Cost management and efficiency ratios</li>
            <li>Debt-to-equity and liquidity ratios</li>
            <li>Return on investment and profitability</li>
            <li>Budget variance and performance analysis</li>
         </ol>
        </div>
        <div class="col-md-6">
          <h3><strong>Compliance & Standards</strong></h3>
         <ol>
            <li>Adherence to accounting standards and regulations</li>
            <li>External audit and verification processes</li>
            <li>Internal controls and risk management</li>
            <li>Financial reporting and disclosure requirements</li>
            <li>Government compliance and statutory requirements</li>
            <li>Stakeholder communication and transparency</li>
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
  box-shadow: 0 8px 25px rgba(0,0,0,0.1);
}
.principles-card h3  {
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