<?php
$page_title = "Chief Vigilance Officer (CVO) | Maya Devi University Dehradun";
$page_description = "Learn about the Chief Vigilance Officer (CVO) at Maya Devi University, Dehradun ensuring transparency and ethical governance.";
$canonical_url = "https://maya.edu.in/CVO.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php" ?>

<section class="maya-president-message">
  <div class="maya-president-wrapper">
    <div class="maya-president-header">
      <h2 class="maya-president-heading">Message from the Chief Vigilance Officer</h2>
      <span class="maya-heading-line"></span>
    </div>

    <div class="maya-president-content">
      <div class="maya-president-photo">
        <img src="assets/uploads/" alt="CVO - Maya Devi University">
      </div>
      <div class="maya-president-text">
      <p> At Maya Devi University, transparency, integrity, and ethical conduct form the foundation of our institutional values. As the Chief Vigilance Officer, my foremost responsibility is to uphold these principles across all levels of administration and academia. </p> <p> We are committed to fostering a culture of honesty, accountability, and good governance. Our vigilance framework not only prevents misconduct but also promotes awareness and proactive participation among faculty, staff, and students to ensure a corruption-free environment. </p> 
        <div class="maya-president-info">
          <h3 class="maya-president-name">Mr. Vinod Kumar Thakur</h3>
          <p class="maya-president-designation">Chief Vigilance Officer, Maya Devi University</p>
          <p class="maya-president-designation">ao@maya.edu.in</p>
          <p class="maya-president-designation">8279844944</p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.maya-president-message {
  padding: 100px 20px;
  background-color: #f9f9f9;
  font-family: "Poppins", sans-serif;
  text-align: center;
  overflow: hidden;
}

/* Heading */
.maya-president-header {
  margin-bottom: 50px;
}

.maya-president-heading {
  font-size: 2.6rem;
  font-weight: 700;
  color: #111;
  margin-bottom: 10px;
  position: relative;
}

.maya-heading-line {
  display: block;
  width: 80px;
  height: 4px;
  background: #c19b3f;
  margin: 0 auto;
  border-radius: 2px;
}

/* Content Layout */
.maya-president-content {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 60px;
  max-width: 1100px;
  margin: 0 auto;
  flex-wrap: wrap;
}

/* Image Styling */
.maya-president-photo img {
  width: 300px;
  height: 300px;
  object-fit: cover;
  border-radius: 50%;
  border: 6px solid #fff;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
  transition: transform 0.6s ease;
}

.maya-president-photo img:hover {
  transform: scale(1.05);
}

/* Text Styling */
.maya-president-text {
  max-width: 550px;
  text-align: left;
  color: #444;
  font-size: 1rem;
  line-height: 1.8;
}

.maya-president-info {
  margin-top: 25px;
}

.maya-president-name {
  font-size: 1.3rem;
  font-weight: 700;
  color: #000;
  margin-bottom: 5px;
}

.maya-president-designation {
  font-size: 1rem;
  color: #777;
}

/* Responsive */
@media (max-width: 768px) {
  .maya-president-content {
    flex-direction: column;
    text-align: center;
    gap: 30px;
  }
  .maya-president-text {
    text-align: center;
  }
  .maya-president-photo img {
    width: 220px;
    height: 220px;
  }
  .maya-president-heading {
    font-size: 2rem;
  }
}
</style>

<?php require "common/footer.php" ?>
