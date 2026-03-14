<?php
$page_title = "Doctoral (PhD) Programs in Dehradun | Maya Devi University";
$page_description = "Pursue doctoral (PhD) programs at Maya Devi University, Dehradun with research-driven curriculum and expert supervision.";
$canonical_url = "https://maya.edu.in/doctoral.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php" ?>
<section class="ug-courses-section">
  <div class="container">
  <div class="section-title  pb-20">
    <h2>Postgraduate <span>Course</h2>
    </div>

   
    <!-- School 1 -->
    <div class="school">
      <h2 class="school-name">School of Pharmacy</h2>
      <ul class="courses-list">
        <li><a href="DoctorPharmacy.php">Pharm D - Doctor of Pharmacy</a></li>
      </ul>
    </div>
    </div>

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
  background-color: #fff;
  padding: 10px 15px;
  border-radius: 8px;
  transition: all 0.3s ease;
  flex: 1 1 200px; /* responsive width */
  text-align: center;
}
.courses-list li:hover {
  background-color: #004080;
}

.courses-list li:hover a {
  color: #fff;
}
</style>
<?php require "common/footer.php" ?>
