<?php
$page_title = "Careers at Maya Devi University | Dehradun";
$page_description = "Explore career opportunities at Maya Devi University, Dehradun and join a leading institution committed to academic excellence.";
$canonical_url = "https://maya.edu.in/career.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php" ?>

<section class="career-wrapper">

  <div class="career-layout">

    <!-- LEFT CONTENT -->
    <div class="career-content">
      <div class="content-inner">
        <h1>Build Your Career With Excellence</h1>

        <p class="intro">
          At Maya Devi University, Dehradun, we believe education transforms lives.
          We are committed to academic distinction, research innovation, and
          institutional leadership. If you are passionate about teaching,
          research, administration, or technical excellence — we invite you to
          become part of our growing academic ecosystem.
        </p>

        <div class="content-box">
          <h3>Academic Leadership</h3>
          <p>
            Faculty positions available across Engineering, Law, Management,
            Pharmacy, Humanities and emerging interdisciplinary domains.
            We seek individuals who combine research excellence with
            student mentorship.
          </p>
        </div>

        <div class="content-box">
          <h3>Technical & Laboratory Expertise</h3>
          <p>
            Join our state-of-the-art laboratories and contribute to
            innovation-driven learning environments.
          </p>
        </div>

        <div class="content-box">
          <h3>Administrative & Institutional Support</h3>
          <p>
            Drive operational excellence and strategic growth in a
            future-ready academic institution.
          </p>
        </div>

        <div class="highlight">
          <h4 class="text-white">Why Work With Us?</h4>
          <ul>
            <li>✔ Research & Growth Opportunities</li>
            <li>✔ Modern Infrastructure & Digital Classrooms</li>
            <li>✔ Competitive & Transparent Compensation</li>
            <li>✔ Collaborative Academic Culture</li>
          </ul>
        </div>

      </div>
    </div>

    <!-- RIGHT FORM (UNCHANGED STRUCTURE) -->
    <div class="career-form-container">

      <h2>Apply Now</h2>
      <p class="mandatory">(*All fields are mandatory)</p>

      <form action="send_application.php" method="POST" enctype="multipart/form-data">

        <div class="form-grid">

          <div class="form-group">
            <label>Position Applied For *</label>
            <select name="position" required>
              <option value="">- Select -</option>
              <option>Academics</option>
              <option>Lab Technician</option>
              <option>Administration & Support</option>
              <option>Others</option>
            </select>
          </div>

          <div class="form-group">
            <label>Department *</label>
            <select name="department" required>
              <option value="">-- Select Department --</option>
              <option>Computer Science</option>
              <option>Vocational</option>
              <option>Arts Studies</option>
              <option>Nursing</option>
              <option>Health Science</option>
              <option>Life & Applied Science</option>
              <option>Education</option>
              <option>Agriculture</option>
              <option>Ashtvakra</option>
              <option>Paramedical</option>
              <option>Management</option>
              <option>Pharmacy</option>
              <option>Law</option>
              <option>Engineering</option>
              <option>Hotel Management</option>
              <option>Others</option>
            </select>
          </div>

          <div class="form-group">
            <label>Specialization *</label>
            <input type="text" name="specialization" required>
          </div>

          <div class="form-group">
            <label>Name *</label>
            <input type="text" name="name" required>
          </div>

          <div class="form-group">
            <label>Email *</label>
            <input type="email" name="email" required>
          </div>

          <div class="form-group">
            <label>Phone *</label>
            <input type="tel" name="phone" required>
          </div>

          <div class="form-group">
            <label>Qualification *</label>
            <select name="qualification" required>
              <option value="">- Select -</option>
              <option>Ph.D</option>
              <option>Post Graduate</option>
              <option>Graduate</option>
              <option>Diploma</option>
            </select>
          </div>

          <div class="form-group">
            <label>Current Designation *</label>
            <input type="text" name="designation" required>
          </div>

          <div class="form-group">
            <label>Total Experience *</label>
            <input type="text" name="experience" placeholder="Ex: 5 years" required>
          </div>

          <div class="form-group">
            <label>Current Salary *</label>
            <input type="text" name="current_salary" required>
          </div>

          <div class="form-group">
            <label>Current Organization *</label>
            <input type="text" name="organization" required>
          </div>

          <div class="form-group">
            <label>Expected Salary *</label>
            <input type="text" name="expected_salary" required>
          </div>

          <div class="form-group">
            <label>Notice Period *</label>
            <select name="notice_period" required>
              <option value="">-- Select --</option>
              <option>Immediate</option>
              <option>15 Days</option>
              <option>1 Month</option>
              <option>2 Months</option>
            </select>
          </div>

          <div class="form-group full-width">
            <label>Upload Resume *</label>
            <input type="file" name="resume" accept=".pdf,.doc,.docx" required>
          </div>

        </div>

        <div class="submit-box">
          <button type="submit">Submit Application</button>
        </div>

      </form>

    </div>
  </div>
</section>

<?php require "common/footer.php" ?>

<style>

/* Background */
.career-wrapper {
  padding: 80px 20px;
  background: linear-gradient(120deg,#eef3f9,#f7fbff);
}

/* Layout */
.career-layout {
  max-width: 1300px;
  margin: auto;
  display: flex;
  gap: 60px;
}

/* LEFT SIDE */
.career-content {
  flex: 1.1;
}

.content-inner {
  position: sticky;
  top: 100px;
}

.career-content h1 {
  font-size: 40px;
  margin-bottom: 20px;
  color: #111827;
  line-height: 1.2;
}

.intro {
  font-size: 16px;
  margin-bottom: 30px;
  color: #4b5563;
  line-height: 1.7;
}

.content-box {
  background: #fff;
  padding: 22px;
  border-radius: 14px;
  margin-bottom: 20px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.05);
  transition: all 0.3s ease;
}

.content-box:hover {
  transform: translateY(-6px);
}

.highlight {
  margin-top: 25px;
  padding: 25px;
  border-radius: 14px;
  background: linear-gradient(135deg,#2563eb,#1e40af);
  color: #fff;
}

.highlight ul {
  padding-left: 20px;
  line-height: 1.8;
}

/* RIGHT FORM */
.career-form-container {
  flex: 1;
  background: #fff;
  padding: 40px;
  border-radius: 16px;
  box-shadow: 0 15px 35px rgba(0,0,0,0.1);
}

.career-form-container h2 {
  text-align: center;
  margin-bottom: 8px;
}

.mandatory {
  text-align: center;
  color: #dc2626;
  margin-bottom: 25px;
}

.form-grid {
  display: grid;
  grid-template-columns: repeat(2,1fr);
  gap: 18px;
}

.form-group {
  display: flex;
  flex-direction: column;
}

.form-group label {
  font-size: 13px;
  margin-bottom: 6px;
  font-weight: 500;
}

.form-group input,
.form-group select {
  padding: 11px;
  border-radius: 8px;
  border: 1px solid #d1d5db;
  transition: 0.3s;
}

.form-group input:focus,
.form-group select:focus {
  border-color: #2563eb;
  box-shadow: 0 0 0 3px rgba(37,99,235,0.2);
  outline: none;
}

.full-width {
  grid-column: span 2;
}

.submit-box {
  margin-top: 25px;
  text-align: center;
}

.submit-box button {
  background: linear-gradient(135deg,#2563eb,#1e40af);
  color: #fff;
  padding: 13px 40px;
  border: none;
  border-radius: 30px;
  cursor: pointer;
  font-size: 15px;
  transition: 0.3s;
}

.submit-box button:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 20px rgba(37,99,235,0.3);
}

/* Responsive */
@media(max-width:1000px){
  .career-layout {
    flex-direction: column;
  }
  .content-inner {
    position: relative;
    top: 0;
  }
}

@media(max-width:600px){
  .form-grid {
    grid-template-columns: 1fr;
  }
  .full-width {
    grid-column: span 1;
  }
}

</style>
