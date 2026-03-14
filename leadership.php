<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Leadership</title>
    <?php
$page_title = "University Leadership | Maya Devi University Dehradun";
$page_description = "Meet the leadership team guiding Maya Devi University, Dehradun towards academic excellence and innovation.";
$canonical_url = "https://maya.edu.in/leadership.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>

</head>
<body>
<?php require "common/header.php"?>
<section class="doctoral-hero">
    <div class="container-research">
        <h1>Our Leadership</h1>
        <p> At our core, we believe leadership is about more than authority—it’s about vision, responsibility, and inspiration.
        True leaders empower teams, nurture innovation, and turn challenges into stepping stones for success. Through strong
        leadership, we strive to guide growth, create impact, and shape a brighter future for individuals and communities alike.</p>
    </div>
</section>
<div class="achievement-area pb-90 pt-50">
  <div class="container">
    
    <!-- Leadership Grid -->
    <div class="row g-4">

      <!-- President -->
      <div class="col-lg-12">
        <div class="leadership-card d-flex align-items-stretch shadow-sm rounded overflow-hidden">
          <div class="leadership-img col-lg-5 p-0">
            <img src="assets/uploads/president.png" alt="President" class="img-fluid w-100 h-100 object-fit-cover">
          </div>
          <div class="leadership-content col-lg-7 p-4 bg-light position-relative">
            <p>
              Maya Devi University is committed to academic excellence, research, and inclusive values. Since its inception in 2010,
              the university has evolved significantly, establishing itself as a leading institution in North India. With over
              11,000 alumni, it emphasizes practical, research-driven education that promotes independent thinking and problem-solving.
              Students are encouraged to pursue self-sufficient learning grounded in scientific and philosophical knowledge. The university
              fosters creativity through academic curiosity, aiming to develop future researchers and entrepreneurs.
            </p>
            <div class="testi-info mt-3">
              <h5 class="mb-1">Manohar Lal Juyal</h5>
              <span class="text-muted">President, Maya Devi University</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Vice President -->
      <div class="col-lg-12">
        <div class="leadership-card d-flex align-items-stretch shadow-sm rounded overflow-hidden flex-lg-row-reverse">
          <div class="leadership-img col-lg-5 p-0">
            <img src="assets/uploads/vc.png" alt="Vice President" class="img-fluid w-100 h-100 object-fit-cover">
          </div>
          <div class="leadership-content col-lg-7 p-4 bg-light position-relative">
            <p>
              I am grateful to the divine and to Shri Manohar Lal Juyal, President of Maya Devi University, for the opportunity
              to serve as the first Vice President of the University. Our faculty and staff are deeply committed to supporting
              students in their academic, professional, cultural, and spiritual journeys. At Maya Devi University, students experience
              a thoughtful and inclusive environment designed to help them grow into principled leaders and engaged citizens.
            </p>
            <div class="testi-info mt-3">
              <h5 class="mb-1">Dr. Tripti Juyal Semwal</h5>
              <span class="text-muted">Vice President, Maya Devi University</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Vice Chancellor -->
      <div class="col-lg-12">
        <div class="leadership-card d-flex align-items-stretch shadow-sm rounded overflow-hidden">
          <div class="leadership-img col-lg-5 p-0">
            <img src="assets/uploads/vc-2.jpeg" alt="Vice Chancellor" class="img-fluid w-100 h-100 object-fit-cover">
          </div>
          <div class="leadership-content col-lg-7 p-4 bg-light position-relative">
            <p>
              I am honored to serve as the founding Vice Chancellor of Maya Devi University, sharing a vision aligned with our
              President to place national interest, character-building, and innovation at the forefront. Our goal is to nurture
              future technocrats, researchers, and entrepreneurs who are driven by knowledge, values, and societal responsibility.
              We empower students to explore disciplines like technology, arts, and philosophy while promoting harmony between traditional
              values and modern advancements. The university is advancing in fields like AI, data science, drones, and applied sciences,
              with a focus on real-world applications in agriculture, hospitality, and entrepreneurship.
            </p>
            <div class="testi-info mt-3">
              <h5 class="mb-1">Prof. (Dr.) Ashish Semwal</h5>
              <span class="text-muted">Vice Chancellor, Maya Devi University</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<style>
    .leadership-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  min-height: 400px;
}
.leadership-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}
.leadership-content p {
  font-size: 15px;
  line-height: 1.6;
}
.leadership-img img {
  object-fit: cover;
  height: 100%;
}
/* Mobile Fix for Leadership Section */
@media (max-width: 991px) {

  .leadership-card {
    flex-direction: column !important;
    min-height: auto;
  }

  .leadership-img,
  .leadership-content {
    width: 100% !important;
    max-width: 100% !important;
  }

  .leadership-img img {
    width: 100%;
    height: auto;
    object-fit: cover;
  }

  .leadership-content {
    padding: 20px !important;
  }

  /* Fix reversed card on mobile */
  .flex-lg-row-reverse {
    flex-direction: column !important;
  }

}
@media (max-width: 576px) {
  .leadership-content p {
    font-size: 14px;
    line-height: 1.6;
  }

  .testi-info h5 {
    font-size: 16px;
  }
}

    </style>

<?php require "common/footer.php"?>
<style>
    .container-research {
    width: 90%;
    max-width: 1200px;
    margin: auto;
}

/* Hero */
.doctoral-hero {
    background: linear-gradient(135deg, #25d067ff, #01203eff);
    color: #fff !important;
    padding: 70px 0;
    text-align: center;
}

.doctoral-hero h1 {
    font-size: 42px;
    margin-bottom: 10px;
    color: #fff !important;
}
.doctoral-hero p {
    color: #fff !important;
}
</style>