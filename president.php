<?php
$page_title = "President | Maya Devi University Dehradun";
$page_description = "Message from the President of Maya Devi University, Dehradun highlighting vision and academic excellence.";
$canonical_url = "https://maya.edu.in/president.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php" ?>

<section class="maya-president-message">
  <div class="maya-president-wrapper">
    <div class="maya-president-header">
      <h2 class="maya-president-heading">Message from the President</h2>
      <span class="maya-heading-line"></span>
    </div>

    <div class="maya-president-content">
      <div class="maya-president-photo">
        <img src="assets/uploads/president.png" alt="President - Maya Devi University">
      </div>
      <div class="maya-president-text">
        <p>
        Maya Devi University is committed to academic excellence, research, and inclusive values. Since its inception in 2010, the university has evolved significantly, establishing itself as a leading institution in North India. With over 11,000 alumni, it emphasizes practical, research-driven education that promotes independent thinking and problem-solving.
        </p>
<p>Students are encouraged to pursue self-sufficient learning grounded in scientific and philosophical knowledge. The university fosters creativity through academic curiosity, aiming to develop future researchers and entrepreneurs.</p>
        <div class="maya-president-info">
          <h3 class="maya-president-name">Manohar Lal Juyal</h3>
          <p class="maya-president-designation">President, Maya Devi University</p>
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
