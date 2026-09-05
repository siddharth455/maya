<?php
$page_title = "Diploma Courses in Dehradun | Maya Devi University";
$page_description = "Explore diploma courses at Maya Devi University, Dehradun offering skill-based education and industry-focused training programs.";
$canonical_url = "https://maya.edu.in/Diploma-course.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php" ?>
<section class="ug-courses-section">
  <div class="container">
  <div class="section-title  pb-20">
    <h2>Diploma <span>Course</h2>
    </div>

   
    <!-- School 1 -->
    <div class="school">
      <h2 class="school-name">School of Pharmacy</h2>
      <ul class="courses-list">
        <li><a href="best-d-pharma-college-in-dehradun-uttarakhand.php">D.Pharm - Diploma in Pharmacy</a></li>
      </ul>
    </div>

    <!-- School 2 -->
    <div class="school">
      <h2 class="school-name">School of Hotel Management and Tourism</h2>
      <ul class="courses-list">
      <li><a href="diploma-in-food-production.php">DFP - Diploma in Food Production</a></li>
      <li><a href="diploma-in-confectionary.php">DFP - Diploma in Bakery & Confectionary</a></li>
      </ul>
    </div>

    <!-- School 3 -->
    <div class="school">
      <h2 class="school-name">School of Nursing</h2>
      <ul class="courses-list">
        <li><a href="gnm.php">GNM - General Nursing & Midwifery</a></li>
        <!-- <li><a href="nursing-assistant.php">Nursing Assistant</a></li> -->
      </ul>
    </div>

    <!-- School 4 -->
    <!-- <div class="school">
      <h2 class="school-name">School of Paramedical</h2>
      <ul class="courses-list">
        <li><a href="dialysis-technology.php">Diploma in Dialysis</a></li>
      </ul>
    </div> -->

    <!-- School 5 -->
    <!-- <div class="school">
      <h2 class="school-name">Ashtavakra School of Rehabilitation</h2>
      <ul class="courses-list">
        <li><a href="early-child-special-edu.php">Early child Special Edu. (Hearing Impairment)</a></li>
        <li><a href="early-rehabilitation-therapy.php">Early Rehabilitation Therapy (Mental Retardation)</a></li>
        <li><a href="prosthetics-orthotics.php">Prosthetics & Orthotics</a></li>
        <li><a href="hearing-language-speech.php">Hearing language & Speech</a></li>
        <li><a href="indian-sign-language.php">Indian Sign Language</a></li>
      </ul>
    </div> -->

  </div>
</section>

<style>
.ug-courses-section {
  padding: 50px 20px;
  background-color: #f9f9f9;
}
.school {
  margin-bottom: 30px;
}
.school-name{
    text-align: center;
    color: #00a651;
    font-weight: 500;
}
.courses-list {
  list-style: none;
  padding-left: 0;
  display: flex;
  flex-wrap: wrap;
  gap: 15px;
}

.courses-list li {
  background-color: #004080;
  color: #fff;
  padding: 10px 15px;
  border-radius: 8px;
  transition: all 0.3s ease;
  flex: 1 1 200px; /* responsive width */
  text-align: center;
}
.courses-list li:hover {
  background-color: #00a651;
}

.courses-list li:hover a {
  color: #fff;
}
</style>
<?php require "common/footer.php" ?>
