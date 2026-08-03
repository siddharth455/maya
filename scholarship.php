<?php
$page_title = "Scholarships & Fee Waivers | Maya Devi University Dehradun";
$page_description = "Explore scholarships and fee waiver schemes at Maya Devi University, Dehradun for Uttarakhand domicile, entrance tests (MDUCET, JEE, NEET, CAT, CLAT, UCEED), merit, and sports.";
$canonical_url = "https://maya.edu.in/scholarship.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>

<?php require "common/header.php"?>

<!-- Breadcrumb & Hero Area -->
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url(assets/uploads/maya-devi.webp);">
        <div class="container">
            <h2>Scholarships & Fee Waivers</h2>
            <p>Empowering bright minds with financial assistance, merit awards, and equal educational opportunities at Maya Devi University.</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i> Scholarships & Fee Waivers</span></li>
            </ul>
        </div>
    </div>
</div>

<!-- Modern Scholarship Banner Section -->
<section class="sch-hero-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
        <div class="sch-hero-content">
          <span class="sch-badge"><i class="fa-solid fa-graduation-cap"></i> Financial Aid 2026-27</span>
          <h1 class="sch-hero-title">Shaping Futures With <span>Merit & Need-Based</span> Scholarships</h1>
          <p class="sch-hero-desc">
            At Maya Devi University, we believe financial constraints should never stand between a talented student and higher education. We offer comprehensive scholarship slabs across various entrance exams, academic achievements, state domicile criteria, and sports excellence.
          </p>
          
          <div class="sch-hero-stats">
            <div class="stat-box">
              <h3>50%</h3>
              <p>Max Tuition Waiver</p>
            </div>
            <div class="stat-box">
              <h3>9+</h3>
              <p>Specialized Slabs</p>
            </div>
            <div class="stat-box">
              <h3>100%</h3>
              <p>Transparent Criteria</p>
            </div>
          </div>

          <div class="sch-hero-btns mt-4">
            <a href="#sch-cards" class="btn-sch-primary"><i class="fa-solid fa-list-check"></i> Explore All Slabs</a>
            <a href="https://admissions.maya.edu.in" target="_blank" class="btn-sch-secondary"><i class="fa-solid fa-paper-plane"></i> Apply For Scholarship</a>
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-12">
        <div class="sch-hero-form-card shadow-lg">
          <div class="sch-form-header">
            <span class="sch-form-badge"><i class="fa-solid fa-file-signature"></i> Admissions 2026</span>
            <h3 class="sch-form-title">Apply For Scholarship</h3>
            <p class="sch-form-sub">Enquire now & claim up to 50% tuition fee waiver</p>
          </div>
          <div class="sch-form-body">
            <div id="ee-form-2" class="hf-body"></div>
            <script src="https://eeconfigstaticfiles.blob.core.windows.net/staticfiles/mdud/ee-form-widget/form-2/widget.js"></script>
            <script>
              (function initEEFormWidget() {
                function loadWidget() {
                  window.ee_form_widget_baseurl = "https://eeconfigstaticfiles.blob.core.windows.net/staticfiles/ee-form-widget/";
                  if (!document.getElementById("__formWidgetCss")) {
                    var link = document.createElement("link");
                    link.id = "__formWidgetCss";
                    link.rel = "stylesheet";
                    link.href = window.ee_form_widget_baseurl + "css/stylesheet.min.css";
                    link.type = "text/css";
                    document.getElementsByTagName("head")[0].appendChild(link);
                  }
                  if (typeof eeFormWidget !== "undefined") {
                    try {
                      var _eeFormWidget = new eeFormWidget();
                      _eeFormWidget.init("mdud", "form-2", "ee-form-2");
                    } catch (e) { console.log(e); }
                  } else {
                    var script = document.createElement("script");
                    script.type = "text/javascript";
                    script.onload = async function () {
                      try {
                        var _eeFormWidget = new eeFormWidget();
                        await _eeFormWidget.init("mdud", "form-2", "ee-form-2");
                      } catch (e) { console.log(e); }
                    };
                    script.src = window.ee_form_widget_baseurl + "js/eeFormWidget.min.js";
                    document.getElementsByTagName("head")[0].appendChild(script);
                  }
                }
                if (document.readyState === "complete" || document.readyState === "interactive") {
                  loadWidget();
                } else {
                  window.addEventListener("DOMContentLoaded", loadWidget);
                }
              })();
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Filter & Quick Navigation Bar -->
<section class="sch-filter-section">
  <div class="container">
    <div class="sch-filter-wrapper">
      <span class="filter-label"><i class="fa-solid fa-filter"></i> Quick Filter:</span>
      <div class="sch-filter-buttons">
        <button class="filter-btn active" data-filter="all">All Schemes</button>
        <button class="filter-btn" data-filter="domicile">Uttarakhand Domicile</button>
        <button class="filter-btn" data-filter="entrance">MDUCET & Entrance Exams</button>
        <button class="filter-btn" data-filter="merit">Academic Merit</button>
        <button class="filter-btn" data-filter="sports">Sports Category</button>
      </div>
    </div>
  </div>
</section>

<!-- User Provided Scholarship Cards Section -->
<section id="sch-cards" aria-label="Scholarships">
    <div class="sc-wrapper">

      <header class="sc-head">
        <h2>Scholarships & Fee Waivers</h2>
        <p class="sc-lead">Tap any card to open its detailed slabs. Tables open directly beneath the card for a compact, scannable layout.</p>
      </header>

      <div class="sc-grid" role="list">
        <!-- Card 1 (Merit exact table) -->
        <div class="sc-card" role="listitem" data-index="1" data-category="domicile">
          <button class="sc-card-btn" aria-expanded="false" aria-controls="sc-panel-1">
            <div class="sc-left">
              <div class="sc-number">01</div>
              <div class="sc-title-wrap">
                <div class="sc-title">SCHOLARSHIP FOR DOMICILE STUDENTS OF UTTARAKHAND</div>
                <div class="sc-sub">Academic Excellence — score slabs</div>
              </div>
            </div>
            <div class="sc-right">
              <div class="sc-amt">Up to <strong>50%</strong></div>
              <div class="sc-caret">▾</div>
            </div>
          </button>

          <div id="sc-panel-1" class="sc-panel" role="region" aria-hidden="true">
            <div class="sc-table-wrap">
              <p>Maya Devi University (MDU) also offers the “Merit Cum Means Scholarship for Domicile Students of Uttrakhand ” as envisaged in the Uttrakhand Private Universities Act.</p>
            </div>
          </div>
        </div>

        <!-- Card 2 (Need-based example) -->
        <div class="sc-card" role="listitem" data-index="2" data-category="entrance">
          <button class="sc-card-btn" aria-expanded="false" aria-controls="sc-panel-2">
            <div class="sc-left">
              <div class="sc-number">02</div>
              <div class="sc-title-wrap">
                <div class="sc-title">ON THE BASIS OF MDUCET 2025</div>
                <div class="sc-sub">MDU Exam slabs</div>
              </div>
            </div>
            <div class="sc-right">
              <div class="sc-amt">Varies</div>
              <div class="sc-caret">▾</div>
            </div>
          </button>

          <div id="sc-panel-2" class="sc-panel" role="region" aria-hidden="true">
            <div class="sc-table-wrap">
              <table class="sc-table">
                <thead>
                  <tr>
                    <th>Scores</th>
                    <th>Scholarship</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>95% or above</td>
                    <td>50% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>90-94.99%</td>
                    <td>40% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>80-89.99%</td>
                    <td>30% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>70-79.99%</td>
                    <td>20% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>65-69.99%</td>
                    <td>10% of Tuition Fee</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="sc-card" role="listitem" data-index="3" data-category="merit">
          <button class="sc-card-btn" aria-expanded="false" aria-controls="sc-panel-3">
            <div class="sc-left">
              <div class="sc-number">03</div>
              <div class="sc-title-wrap">
                <div class="sc-title">ON THE BASIS OF MERIT/ PERCENTAGE IN QUALIFYING EXAMINATION</div>
                <div class="sc-sub">Achievement-based slabs</div>
              </div>
            </div>
            <div class="sc-right">
              <div class="sc-amt">Up to 50%</div>
              <div class="sc-caret">▾</div>
            </div>
          </button>

          <div id="sc-panel-3" class="sc-panel" role="region" aria-hidden="true">
            <div class="sc-table-wrap">
              <table class="sc-table">
                <thead>
                  <tr>
                    <th>Achievement</th>
                    <th>Concession</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>95% or above</td>
                    <td>50% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>90-94.99%</td>
                    <td>40% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>80-89.99%</td>
                    <td>30% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>70-79.99%</td>
                    <td>20% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>65-69.99%</td>
                    <td>10% of Tuition Fee</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="sc-card" role="listitem" data-index="4" data-category="entrance">
          <button class="sc-card-btn" aria-expanded="false" aria-controls="sc-panel-4">
            <div class="sc-left">
              <div class="sc-number">04</div>
              <div class="sc-title-wrap">
                <div class="sc-title">ON THE BASIS OF PERFORMANCE IN NATIONAL-LEVEL ENTRANCE TESTS</div>
                <div class="sc-sub">Exam Type: JEE (Main) - Joint Entrance Examination</div>
              </div>
            </div>
            <div class="sc-right">
              <div class="sc-amt">₹50k/yr</div>
              <div class="sc-caret">▾</div>
            </div>
          </button>

          <div id="sc-panel-4" class="sc-panel" role="region" aria-hidden="true">
            <div class="sc-table-wrap">
              <table class="sc-table">
                <thead>
                  <tr>
                    <th>Scores</th>
                    <th>Scholarship</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Percentile ≥ 95</td>
                    <td>50% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>Percentile 90 - 94.99</td>
                    <td>40% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>Percentile 85 - 89.99</td>
                    <td>30% of Tuition Fee</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="sc-card" role="listitem" data-index="5" data-category="entrance">
          <button class="sc-card-btn" aria-expanded="false" aria-controls="sc-panel-5">
            <div class="sc-left">
              <div class="sc-number">05</div>
              <div class="sc-title-wrap">
                <div class="sc-title">B.Pharmacy, Paramedical & Allied Health Programs, Agriculture & Other Biology-Based Programs</div>
                <div class="sc-sub">Exam Type: NEET - National Eligibility-cum-Entrance Test</div>
              </div>
            </div>
            <div class="sc-right">
              <div class="sc-amt">Up to 50%</div>
              <div class="sc-caret">▾</div>
            </div>
          </button>

          <div id="sc-panel-5" class="sc-panel" role="region" aria-hidden="true">
            <div class="sc-table-wrap">
              <table class="sc-table">
                <thead>
                  <tr>
                    <th>Scores</th>
                    <th>Scholarship</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Rank ≤ 75000</td>
                    <td>50% tuition</td>
                  </tr>
                  <tr>
                    <td>Rank 75001 - 150000</td>
                    <td>40% tuition</td>
                  </tr>
                  <tr>
                    <td>Rank 150001 - 200000</td>
                    <td>30% tuition</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="sc-card" role="listitem" data-index="6" data-category="entrance">
          <button class="sc-card-btn" aria-expanded="false" aria-controls="sc-panel-6">
            <div class="sc-left">
              <div class="sc-number">06</div>
              <div class="sc-title-wrap">
                <div class="sc-title">B.Pharmacy, Paramedical & Allied Health Programs, Agriculture & Other Biology-Based Programs</div>
                <div class="sc-sub">Exam Type: CAT/ XAT/ MAT/ CMAT/ NMAT</div>
              </div>
            </div>
            <div class="sc-right">
              <div class="sc-amt">Up to 50%</div>
              <div class="sc-caret">▾</div>
            </div>
          </button>
          <div id="sc-panel-6" class="sc-panel" role="region" aria-hidden="true">
            <div class="sc-table-wrap">
              <table class="sc-table">
                <thead>
                  <tr>
                    <th>Scores</th>
                    <th>Scholarship</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>CAT/ XAT Percentile ≥ 90</td>
                    <td>50% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>MAT/ CMAT Percentile ≥ 95</td>
                    <td>50% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>NMAT Score ≥ 280</td>
                    <td>50% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>CAT/ XAT Percentile ≥ 85</td>
                    <td>40% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>MAT/ CMAT Percentile ≥ 90</td>
                    <td>40% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>NMAT Score ≥ 260</td>
                    <td>40% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>CAT/ XAT Percentile ≥ 80</td>
                    <td>30% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>MAT/ CMAT Percentile ≥ 85</td>
                    <td>30% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>NMAT Score ≥ 240</td>
                    <td>30% of Tuition Fee</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Card 7 -->
        <div class="sc-card" role="listitem" data-index="7" data-category="entrance">
          <button class="sc-card-btn" aria-expanded="false" aria-controls="sc-panel-7">
            <div class="sc-left">
              <div class="sc-number">07</div>
              <div class="sc-title-wrap">
                <div class="sc-title">B.Pharmacy, Paramedical & Allied Health Programs, Agriculture & Other Biology-Based Programs
                  LLB, BA LLB, BBA LLB</div>
                <div class="sc-sub">Exam Type: CLAT - Common Law Admission Test</div>
              </div>
            </div>
            <div class="sc-right">
              <div class="sc-amt">Up to 50%</div>
              <div class="sc-caret">▾</div>
            </div>
          </button>
          <div id="sc-panel-7" class="sc-panel" role="region" aria-hidden="true">
            <div class="sc-table-wrap">
              <table class="sc-table">
                <thead>
                  <tr>
                    <th>Scores</th>
                    <th>Scholarship</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Rank ≤ 50</td>
                    <td>50% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>Rank 51 - 100</td>
                    <td>40% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>Rank 101 - 200</td>
                    <td>30% of Tuition Fee</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Card 8 -->
        <div class="sc-card" role="listitem" data-index="8" data-category="entrance">
          <button class="sc-card-btn" aria-expanded="false" aria-controls="sc-panel-8">
            <div class="sc-left">
              <div class="sc-number">08</div>
              <div class="sc-title-wrap">
                <div class="sc-title">B.A. Film & Television Studies, B.Sc. Animation, VFX & Gaming, Bachelor of Design (B.Design)</div>
                <div class="sc-sub">Exam Type: NIFT Entrance Exam / NID DAT / UCEED</div>
              </div>
            </div>
            <div class="sc-right">
              <div class="sc-amt">Up to 50%</div>
              <div class="sc-caret">▾</div>
            </div>
          </button>
          <div id="sc-panel-8" class="sc-panel" role="region" aria-hidden="true">
            <div class="sc-table-wrap">
              <table class="sc-table">
                <thead>
                  <tr>
                    <th>Scores</th>
                    <th>Scholarship</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>NIFT Rank ≤ 1500</td>
                    <td>50% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>NID DAT Rank ≤ 500</td>
                    <td>50% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>UCEED Rank ≤ 1000</td>
                    <td>50% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>NIFT Rank 1501 - 3000</td>
                    <td>40% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>NID DAT Rank 501 - 1000</td>
                    <td>40% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>UCEED Rank 1001 - 2000</td>
                    <td>40% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>NIFT Rank 3001 - 5000</td>
                    <td>30% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>NID DAT Rank 1001 - 1500</td>
                    <td>30% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>UCEED Rank 2001 - 3000</td>
                    <td>30% of Tuition Fee</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Card 9 -->
        <div class="sc-card" role="listitem" data-index="9" data-category="sports">
          <button class="sc-card-btn" aria-expanded="false" aria-controls="sc-panel-9">
            <div class="sc-left">
              <div class="sc-number">09</div>
              <div class="sc-title-wrap">
                <div class="sc-title">ON THE BASIS OF PERFORMANCE IN SPORTS</div>
                <div class="sc-sub">Showing gesture in sports</div>
              </div>
            </div>
            <div class="sc-right">
              <div class="sc-amt">upto 50%</div>
              <div class="sc-caret">▾</div>
            </div>
          </button>
          <div id="sc-panel-9" class="sc-panel" role="region" aria-hidden="true">
            <div class="sc-table-wrap">
              <table class="sc-table">
                <thead>
                  <tr>
                    <th>CATEGORY</th>
                    <th>Scholarship Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>International Players</td>
                    <td>50% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>National Medal Winners</td>
                    <td>30% of Tuition Fee</td>
                  </tr>
                  <tr>
                    <td>National Participation</td>
                    <td>20% of Tuition Fee</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div> <!-- /.sc-grid -->
    </div> <!-- /.sc-wrapper -->
</section>

<!-- How to Apply Timeline Section -->
<section class="sch-steps-section py-5">
  <div class="container">
    <div class="section-title text-center mb-5">
      <h2>How To <span>Claim Your Scholarship</span></h2>
      <p>Follow four simple steps to get your scholarship applied directly to your tuition fees</p>
    </div>

    <div class="row g-4">
      <div class="col-lg-3 col-md-6">
        <div class="step-card">
          <div class="step-num">1</div>
          <div class="step-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
          <h4>Check Slabs</h4>
          <p>Review the score and rank slabs above for your program & exam to find your eligibility level.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="step-card">
          <div class="step-num">2</div>
          <div class="step-icon"><i class="fa-solid fa-file-pen"></i></div>
          <h4>Apply Online</h4>
          <p>Fill out the Maya Devi University application form online via our official admissions portal.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="step-card">
          <div class="step-num">3</div>
          <div class="step-icon"><i class="fa-solid fa-upload"></i></div>
          <h4>Submit Documents</h4>
          <p>Upload your qualifying marksheets, entrance rank cards, or sports certificates for verification.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="step-card">
          <div class="step-num">4</div>
          <div class="step-icon"><i class="fa-solid fa-circle-check"></i></div>
          <h4>Fee Adjustment</h4>
          <p>Upon verification, your scholarship percentage is automatically deducted from your tuition fee.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Scholarship CTA Banner -->
<section class="sch-cta-section my-5">
  <div class="container">
    <div class="sch-cta-inner text-center text-white">
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <h2 class="text-white">Ready to Unlock Your Scholarship at Maya Devi University?</h2>
          <p class="text-white">Admissions for 2026-27 are now open. Apply early to secure your merit and entrance exam fee waivers.</p>
          <div class="cta-buttons">
            <a href="https://admissions.maya.edu.in" target="_blank" class="btn btn-light btn-lg text-primary font-weight-bold shadow me-md-3 mb-3 mb-md-0 px-4 py-3">Apply Now Online <i class="fa-solid fa-arrow-right"></i></a>
            <a href="contact.php" class="btn btn-outline-light btn-lg font-weight-bold px-4 py-3">Contact Admissions Office</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Premium Styling for Scholarship Page -->
<style>
/* ==================================================
   1. HERO & BANNER STYLING
   ================================================== */
.sch-hero-section {
  padding: 65px 0 60px;
  background: linear-gradient(135deg, #f4f8fc 0%, #e9eff7 100%);
  position: relative;
  overflow: hidden;
}
.sch-badge {
  display: inline-block;
  background: rgba(48, 122, 213, 0.12);
  color: #307AD5;
  font-weight: 700;
  padding: 8px 18px;
  border-radius: 50px;
  font-size: 14px;
  margin-bottom: 20px;
  letter-spacing: 0.5px;
}
.sch-hero-title {
  font-size: 42px;
  font-weight: 800;
  color: #1a202c;
  line-height: 1.25;
  margin-bottom: 20px;
}
.sch-hero-title span {
  color: #00a651;
  position: relative;
}
.sch-hero-desc {
  font-size: 16px;
  color: #5a6a85;
  line-height: 1.7;
  margin-bottom: 30px;
}
.sch-hero-stats {
  display: flex;
  gap: 25px;
  border-top: 1px solid rgba(0, 0, 0, 0.08);
  padding-top: 25px;
}
.stat-box h3 {
  font-size: 32px;
  font-weight: 800;
  color: #307AD5;
  margin-bottom: 4px;
}
.stat-box p {
  font-size: 13px;
  color: #64748b;
  font-weight: 600;
  margin: 0;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}
.sch-hero-btns {
  display: flex;
  gap: 15px;
  flex-wrap: wrap;
}
.btn-sch-primary {
  background: #307AD5;
  color: #ffffff !important;
  padding: 14px 28px;
  border-radius: 8px;
  font-weight: 700;
  font-size: 15px;
  text-decoration: none;
  transition: all 0.3s ease;
  box-shadow: 0 4px 15px rgba(48, 122, 213, 0.3);
  display: inline-flex;
  align-items: center;
  gap: 8px;
}
.btn-sch-primary:hover {
  background: #1f61b5;
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(48, 122, 213, 0.4);
}
.btn-sch-secondary {
  background: #00a651;
  color: #ffffff !important;
  padding: 14px 28px;
  border-radius: 8px;
  font-weight: 700;
  font-size: 15px;
  text-decoration: none;
  transition: all 0.3s ease;
  box-shadow: 0 4px 15px rgba(0, 166, 81, 0.3);
  display: inline-flex;
  align-items: center;
  gap: 8px;
}
.btn-sch-secondary:hover {
  background: #008842;
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(0, 166, 81, 0.4);
}
.sch-hero-form-card {
  background: #ffffff;
  border-radius: 20px;
  padding: 24px 20px 20px;
  border: 1px solid rgba(48, 122, 213, 0.18);
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
  position: relative;
}
.sch-form-header {
  text-align: center;
  margin-bottom: 18px;
  padding-bottom: 14px;
  border-bottom: 1px dashed #e2e8f0;
}
.sch-form-badge {
  display: inline-block;
  background: rgba(0, 166, 81, 0.1);
  color: #00a651;
  font-weight: 700;
  font-size: 13px;
  padding: 4px 14px;
  border-radius: 50px;
  margin-bottom: 8px;
}
.sch-form-title {
  font-size: 22px;
  font-weight: 800;
  color: #1e293b;
  margin-bottom: 4px;
}
.sch-form-sub {
  font-size: 13px;
  color: #64748b;
  margin: 0;
}
.sch-form-body {
  min-height: 320px;
}
/* ExtraaEdge Form 2 styling & checkbox alignment fix */
#ee-form-2 input[type="checkbox"] {
  width: 16px !important;
  height: 16px !important;
  min-width: 16px !important;
  min-height: 16px !important;
  max-width: 16px !important;
  max-height: 16px !important;
  display: inline-block !important;
  margin-right: 8px !important;
  vertical-align: middle !important;
  cursor: pointer !important;
  appearance: checkbox !important;
  -webkit-appearance: checkbox !important;
  background: #fff !important;
  border: 1px solid #ccc !important;
}
#ee-form-2 label {
  display: inline-flex !important;
  align-items: flex-start !important;
  text-align: left !important;
  font-size: 12px !important;
  line-height: 1.4 !important;
  color: #555 !important;
  cursor: pointer !important;
}
#ee-form-2 label input[type="checkbox"] {
  margin-top: 2px !important;
  flex-shrink: 0 !important;
}

/* ==================================================
   2. QUICK FILTER SECTION
   ================================================== */
.sch-filter-section {
  padding: 25px 0;
  background: #ffffff;
  border-bottom: 1px solid #e2e8f0;
}
.sch-filter-wrapper {
  display: flex;
  align-items: center;
  gap: 15px;
  flex-wrap: wrap;
}
.filter-label {
  font-weight: 700;
  color: #475569;
  font-size: 15px;
}
.sch-filter-buttons {
  display: flex;
  gap: 10px;
  flex-wrap: wrap;
}
.filter-btn {
  background: #f1f5f9;
  border: 1px solid #cbd5e1;
  color: #475569;
  padding: 8px 18px;
  border-radius: 30px;
  font-weight: 600;
  font-size: 14px;
  cursor: pointer;
  transition: all 0.3s ease;
}
.filter-btn:hover, .filter-btn.active {
  background: #307AD5;
  color: #ffffff;
  border-color: #307AD5;
  box-shadow: 0 4px 12px rgba(48, 122, 213, 0.25);
}

/* ==================================================
   3. SCHOLARSHIP CARDS SECTION (#sch-cards)
   ================================================== */
#sch-cards {
  padding: 60px 0 80px;
  background: #ffffff !important;
}
.sc-wrapper {
  max-width: 1140px;
  margin: 0 auto;
  padding: 0 20px;
}
.sc-head {
  text-align: center;
  margin-bottom: 45px;
}
.sc-head h2 {
  font-size: 36px;
  font-weight: 800;
  color: #1e293b;
  margin-bottom: 12px;
  position: relative;
  display: inline-block;
}
.sc-head h2::after {
  content: "";
  display: block;
  width: 60px;
  height: 4px;
  background: #00a651;
  margin: 10px auto 0;
  border-radius: 2px;
}
.sc-lead {
  font-size: 16px;
  color: #64748b;
  max-width: 680px;
  margin: 0 auto;
  line-height: 1.6;
}

/* Grid & Cards */
.sc-grid {
  display: flex;
  flex-direction: column;
  gap: 18px;
}
.sc-card {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 14px;
  overflow: hidden;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
  transition: all 0.3s ease;
}
.sc-card:hover {
  border-color: #cbd5e1;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
  transform: translateY(-2px);
}
.sc-card.is-open {
  border-color: #307AD5;
  box-shadow: 0 10px 30px rgba(48, 122, 213, 0.12);
}

/* Card Button / Header */
.sc-card-btn {
  width: 100%;
  background: none;
  border: none;
  padding: 22px 26px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  text-align: left;
  cursor: pointer;
  outline: none;
  transition: background 0.2s ease;
}
.sc-card-btn:hover {
  background: #f8fafc;
}
.sc-left {
  display: flex;
  align-items: center;
  gap: 20px;
  flex: 1;
}
.sc-number {
  width: 48px;
  height: 48px;
  border-radius: 12px;
  background: linear-gradient(135deg, #307AD5 0%, #1e5cb3 100%);
  color: #ffffff;
  font-weight: 800;
  font-size: 18px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 10px rgba(48, 122, 213, 0.25);
  flex-shrink: 0;
}
.sc-card:nth-child(even) .sc-number {
  background: linear-gradient(135deg, #00a651 0%, #00823f 100%);
  box-shadow: 0 4px 10px rgba(0, 166, 81, 0.25);
}
.sc-title-wrap {
  display: flex;
  flex-direction: column;
  gap: 4px;
}
.sc-title {
  font-size: 16px;
  font-weight: 700;
  color: #0f172a;
  line-height: 1.4;
  text-transform: uppercase;
  letter-spacing: 0.3px;
}
.sc-sub {
  font-size: 13px;
  color: #64748b;
  font-weight: 500;
}
.sc-right {
  display: flex;
  align-items: center;
  gap: 18px;
  margin-left: 15px;
}
.sc-amt {
  background: rgba(48, 122, 213, 0.09);
  color: #307AD5;
  font-weight: 700;
  font-size: 14px;
  padding: 8px 16px;
  border-radius: 50px;
  white-space: nowrap;
  border: 1px solid rgba(48, 122, 213, 0.2);
}
.sc-amt strong {
  font-size: 16px;
  color: #00a651;
}
.sc-caret {
  font-size: 18px;
  color: #94a3b8;
  transition: transform 0.3s ease;
  display: inline-block;
}
.sc-card.is-open .sc-caret {
  transform: rotate(180deg);
  color: #307AD5;
}

/* Panel Content */
.sc-panel {
  max-height: 0;
  opacity: 0;
  overflow: hidden;
  transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.3s ease, padding 0.3s ease;
  background: #fafcff;
  border-top: 1px solid transparent;
}
.sc-card.is-open .sc-panel {
  max-height: 900px;
  opacity: 1;
  border-top-color: #e2e8f0;
}
.sc-table-wrap {
  padding: 24px 26px;
}
.sc-table-wrap p {
  margin: 0;
  font-size: 15px;
  line-height: 1.7;
  color: #334155;
  background: #ffffff;
  padding: 16px 20px;
  border-radius: 10px;
  border-left: 4px solid #00a651;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
}

/* Tables */
.sc-table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
  background: #ffffff;
  border-radius: 10px;
  overflow: hidden;
  border: 1px solid #e2e8f0;
  box-shadow: 0 2px 8px rgba(0,0,0,0.02);
}
.sc-table th, .sc-table td {
  padding: 14px 20px;
  text-align: left;
  font-size: 14px;
}
.sc-table th {
  background: linear-gradient(135deg, #307AD5 0%, #1e5cb3 100%);
  color: #ffffff;
  font-weight: 700;
  text-transform: uppercase;
  font-size: 13px;
  letter-spacing: 0.5px;
}
.sc-table td {
  color: #334155;
  font-weight: 600;
  border-bottom: 1px solid #f1f5f9;
}
.sc-table tbody tr:nth-child(even) td {
  background: #f8fafc;
}
.sc-table tbody tr:hover td {
  background: #edf5ff;
  color: #1e3a8a;
}
.sc-table tbody tr:last-child td {
  border-bottom: none;
}

/* ==================================================
   4. HOW TO APPLY & STEPS STYLING
   ================================================== */
.sch-steps-section {
  background: #f8fafc;
}
.step-card {
  background: #ffffff;
  border-radius: 16px;
  padding: 30px 24px;
  text-align: center;
  border: 1px solid #e2e8f0;
  position: relative;
  height: 100%;
  transition: all 0.3s ease;
}
.step-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
  border-color: #307AD5;
}
.step-num {
  position: absolute;
  top: 15px;
  right: 20px;
  font-size: 28px;
  font-weight: 900;
  color: rgba(48, 122, 213, 0.12);
}
.step-icon {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background: rgba(48, 122, 213, 0.1);
  color: #307AD5;
  font-size: 24px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 20px;
}
.step-card:nth-child(even) .step-icon {
  background: rgba(0, 166, 81, 0.1);
  color: #00a651;
}
.step-card h4 {
  font-size: 18px;
  font-weight: 700;
  color: #1e293b;
  margin-bottom: 10px;
}
.step-card p {
  font-size: 14px;
  color: #64748b;
  line-height: 1.6;
  margin: 0;
}

/* ==================================================
   5. CTA SECTION
   ================================================== */
.sch-cta-section {
  padding: 0 15px;
}
.sch-cta-inner {
  background: linear-gradient(135deg, #307AD5 0%, #1e5cb3 50%, #00a651 100%);
  border-radius: 24px;
  padding: 55px 30px;
  box-shadow: 0 15px 35px rgba(48, 122, 213, 0.25);
}
.sch-cta-inner h2 {
  font-size: 34px;
  font-weight: 800;
  margin-bottom: 15px;
}
.sch-cta-inner p {
  font-size: 17px;
  opacity: 0.95;
  margin-bottom: 30px;
  max-width: 700px;
  margin-left: auto;
  margin-right: auto;
}

/* ==================================================
   6. RESPONSIVE BREAKPOINTS
   ================================================== */
@media (max-width: 991px) {
  .sch-hero-title {
    font-size: 32px;
  }
  .sch-floating-badge {
    position: relative;
    top: auto !important;
    bottom: auto !important;
    left: auto !important;
    right: auto !important;
    margin: 10px auto;
    display: inline-flex;
  }
}
@media (max-width: 768px) {
  .sc-card-btn {
    padding: 16px 18px;
    flex-direction: column;
    align-items: flex-start;
    gap: 15px;
  }
  .sc-right {
    width: 100%;
    justify-content: space-between;
    margin-left: 0;
    border-top: 1px dashed #e2e8f0;
    padding-top: 12px;
  }
  .sc-number {
    width: 40px;
    height: 40px;
    font-size: 15px;
  }
  .sc-title {
    font-size: 14px;
  }
  .sc-table-wrap {
    padding: 16px;
    overflow-x: auto;
  }
  .sc-table th, .sc-table td {
    padding: 10px 12px;
    font-size: 13px;
  }
  .sch-hero-stats {
    flex-wrap: wrap;
  }
}
</style>

<!-- Accordion and Filter Interactive JavaScript -->
<script>
document.addEventListener("DOMContentLoaded", function () {
  
  // 1. ACCORDION EXPAND / COLLAPSE
  const cards = document.querySelectorAll(".sc-card");

  cards.forEach(card => {
    const btn = card.querySelector(".sc-card-btn");
    const panel = card.querySelector(".sc-panel");

    btn.addEventListener("click", function () {
      const isOpen = card.classList.contains("is-open");

      // Close all other panels for accordion behavior (optional - keep compact)
      cards.forEach(c => {
        if (c !== card) {
          c.classList.remove("is-open");
          c.querySelector(".sc-card-btn").setAttribute("aria-expanded", "false");
          c.querySelector(".sc-panel").setAttribute("aria-hidden", "true");
        }
      });

      // Toggle current panel
      if (isOpen) {
        card.classList.remove("is-open");
        btn.setAttribute("aria-expanded", "false");
        panel.setAttribute("aria-hidden", "true");
      } else {
        card.classList.add("is-open");
        btn.setAttribute("aria-expanded", "true");
        panel.setAttribute("aria-hidden", "false");
      }
    });
  });

  // 2. QUICK FILTER BUTTONS
  const filterBtns = document.querySelectorAll(".filter-btn");

  filterBtns.forEach(btn => {
    btn.addEventListener("click", function () {
      filterBtns.forEach(b => b.classList.remove("active"));
      this.classList.add("active");

      const filterValue = this.getAttribute("data-filter");

      cards.forEach(card => {
        const category = card.getAttribute("data-category");

        if (filterValue === "all" || category === filterValue) {
          card.style.display = "block";
          card.style.opacity = "1";
        } else {
          card.style.display = "none";
          card.style.opacity = "0";
        }
      });
    });
  });

  // Open first card by default for user guidance
  if (cards.length > 0) {
    cards[0].classList.add("is-open");
    cards[0].querySelector(".sc-card-btn").setAttribute("aria-expanded", "true");
    cards[0].querySelector(".sc-panel").setAttribute("aria-hidden", "false");
  }

});
</script>

<?php require "common/footer.php"?>
