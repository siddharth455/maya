<?php
$page_title = "Pro Vice Chancelor | Maya Devi University Dehradun";
$page_description = "Know about the Pro Vice Chancellor of Maya Devi University, Dehradun and academic leadership.";
$canonical_url = "https://maya.edu.in/pro-vice-chancelor.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php" ?>

<section class="maya-president-message">
  <div class="maya-president-wrapper">
    <div class="maya-president-header">
      <h2 class="maya-president-heading">Message from the Pro Vice Chancellor</h2>
      <span class="maya-heading-line"></span>
    </div>

    <div class="maya-president-content">
      <div class="maya-president-photo">
        <img src="assets/uploads/pro-vice.jpg" alt="President - Maya Devi University">
      </div>
      <div class="maya-president-text">
      <p> It is a privilege to serve as the Pro Vice Chancellor of Maya Devi University and to work in alignment with our visionary leadership to foster excellence in education, research, and innovation. Our mission is to build a vibrant academic environment that inspires intellectual curiosity, ethical values, and social responsibility among students. </p> <p> At Maya Devi University, we believe in blending tradition with technology — encouraging students to embrace modern disciplines like Artificial Intelligence, Data Science, and Applied Research while remaining rooted in the timeless principles of integrity and compassion. Our focus extends beyond academics to nurturing well-rounded individuals prepared to address global challenges with creativity and purpose. </p> <p> Together, we are shaping a community of thinkers, innovators, and leaders who will contribute meaningfully to society and carry forward the legacy of excellence envisioned by our founders. </p>
        <div class="maya-president-info">
          <h3 class="maya-president-name">Prof. Sandip Vijay</h3>
          <p class="maya-president-designation">Pro Vice Chancellor, Maya Devi University</p>
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
