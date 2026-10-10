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
        <!-- Honeypot -->
<input type="text" name="website" style="display:none;">

<!-- Time check -->
<input type="hidden" name="form_time" value="<?php echo time(); ?>">

<!-- Google reCAPTCHA -->
<div class="g-recaptcha mt-2" data-sitekey="6LdCDZIsAAAAAPWaiOOjGFhF3DOJ9Pqv7vneg5kS"></div>
        <label class="consent-box">
          <input type="checkbox" name="privacy_consent" value="yes" required>
          <span>I have read and agree to the <a href="#career-privacy">Privacy Policy for Job Applicants</a> and consent to Maya Devi University processing my personal data for recruitment purposes. *</span>
        </label>

        <div class="submit-box">
          <button type="submit">Submit Application</button>
        </div>

      </form>

    </div>
  </div>
</section>

<!-- PRIVACY POLICY FOR JOB APPLICANTS -->
<section class="career-privacy" id="career-privacy">
  <div class="privacy-inner">
    <h2>Privacy Policy for Job Applicants</h2>
    <p class="privacy-lead">
      Maya Devi University, Dehradun ("the University", "we", "us") respects your privacy.
      This policy explains how we collect, use, store and protect the personal information
      you share with us when you apply for a position through this page. It is in addition
      to our general <a href="privacy-policy.php">Privacy Policy</a>.
    </p>

    <div class="privacy-grid">
      <div class="privacy-item">
        <h3>1. Information We Collect</h3>
        <ul>
          <li>Identity &amp; contact details: name, email address and phone number.</li>
          <li>Professional details: position and department applied for, specialization, qualification, current designation, organization, total experience and notice period.</li>
          <li>Compensation details: current and expected salary.</li>
          <li>Your resume/CV and any information contained in it.</li>
          <li>Technical data such as your IP address, used only to verify the form and prevent spam.</li>
        </ul>
      </div>

      <div class="privacy-item">
        <h3>2. Why We Use Your Information</h3>
        <ul>
          <li>To review and shortlist your application for current or suitable future openings.</li>
          <li>To contact you about interviews, assessments and the status of your application.</li>
          <li>To verify your qualifications, experience and references, where required.</li>
          <li>To meet legal, regulatory and statutory obligations applicable to the University.</li>
          <li>To protect this form from spam and automated misuse.</li>
        </ul>
      </div>

      <div class="privacy-item">
        <h3>3. Legal Basis &amp; Consent</h3>
        <p>
          We process your personal data on the basis of the consent you give when submitting
          this form, in line with the Digital Personal Data Protection Act, 2023 and other
          applicable Indian laws. You may withdraw your consent at any time by writing to us;
          withdrawal will not affect processing already carried out, but we may no longer be
          able to consider your application.
        </p>
      </div>

      <div class="privacy-item">
        <h3>4. Sharing of Information</h3>
        <p>
          We do <strong>not</strong> sell, rent or trade your personal information. Your data is
          accessed only by authorized members of our HR team, selection committees and the
          relevant departments involved in recruitment. We use trusted service providers to
          operate this form &mdash; including Google (reCAPTCHA for spam protection and Google
          Workspace services for securely receiving and storing applications). We may also
          disclose information where required by law or by a competent authority.
        </p>
      </div>

      <div class="privacy-item">
        <h3>5. Data Retention</h3>
        <p>
          We keep your application only for as long as needed for the recruitment process and
          to consider you for future suitable openings, unless you ask us to delete it sooner.
          If you join the University, your information becomes part of your employee record
          and is handled under our internal employment policies. Unsuccessful applications are
          securely deleted once they are no longer required.
        </p>
      </div>

      <div class="privacy-item">
        <h3>6. Data Security</h3>
        <p>
          We use reasonable technical and organizational safeguards, including secure (HTTPS)
          transmission and restricted access, to protect your information against unauthorized
          access, loss, misuse or alteration. However, no method of transmission over the
          internet is completely secure, and we cannot guarantee absolute security.
        </p>
      </div>

      <div class="privacy-item">
        <h3>7. Your Rights</h3>
        <ul>
          <li>Access a summary of the personal data we hold about you.</li>
          <li>Ask us to correct, complete or update inaccurate information.</li>
          <li>Ask us to erase your data or withdraw your consent.</li>
          <li>Raise a grievance about how your data has been handled.</li>
          <li>Nominate another person to exercise these rights on your behalf, as permitted by law.</li>
        </ul>
      </div>

      <div class="privacy-item">
        <h3>8. Your Responsibilities</h3>
        <p>
          Please make sure the information you submit is accurate and complete. Do not include
          sensitive details that are not needed for recruitment (such as bank details, Aadhaar
          number, religion or health information) in your resume. If you share details of
          referees, please ensure they have agreed to be contacted.
        </p>
      </div>
    </div>

    <div class="privacy-contact">
      <h3>Contact &amp; Grievance Redressal</h3>
      <p>
        For any questions, requests to access, correct or delete your data, or to withdraw your
        consent, please contact us:
      </p>
      <p>
        <strong>Maya Devi University</strong><br>
        Selaqui, Pharma City, Dehradun, Uttarakhand &ndash; 248011<br>
        Email: <a href="mailto:info@maya.edu.in">info@maya.edu.in</a> (Subject: "Career Data Request")
      </p>
      <p class="privacy-note">
        We will respond to your request within a reasonable time as required by applicable law.
        We may update this policy from time to time; the latest version will always be available on this page.
      </p>
    </div>
  </div>
</section>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
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

/* Consent checkbox */
.consent-box {
  display: flex;
  align-items: flex-start;
  gap: 10px;
  margin-top: 20px;
  font-size: 13px;
  color: #4b5563;
  line-height: 1.5;
  cursor: pointer;
}

.consent-box input {
  margin-top: 3px;
  flex-shrink: 0;
}

.consent-box a {
  color: #2563eb;
  text-decoration: underline;
}

/* PRIVACY POLICY */
.career-privacy {
  padding: 70px 20px 80px;
  background: #fff;
  scroll-margin-top: 90px;
}

.privacy-inner {
  max-width: 1300px;
  margin: auto;
}

.career-privacy h2 {
  font-size: 32px;
  color: #111827;
  margin-bottom: 14px;
}

.privacy-lead {
  font-size: 16px;
  color: #4b5563;
  line-height: 1.7;
  max-width: 900px;
  margin-bottom: 35px;
}

.career-privacy a {
  color: #2563eb;
}

.privacy-grid {
  display: grid;
  grid-template-columns: repeat(2,1fr);
  gap: 22px;
}

.privacy-item {
  background: #f7fbff;
  border: 1px solid #e5edf7;
  border-radius: 14px;
  padding: 24px;
}

.privacy-item h3,
.privacy-contact h3 {
  font-size: 18px;
  color: #1e40af;
  margin-bottom: 12px;
}

.privacy-item p,
.privacy-item li {
  font-size: 14.5px;
  color: #4b5563;
  line-height: 1.7;
}

.privacy-item ul {
  padding-left: 18px;
  margin: 0;
}

.privacy-contact {
  margin-top: 30px;
  padding: 26px;
  border-radius: 14px;
  background: linear-gradient(120deg,#eef3f9,#f7fbff);
  border-left: 4px solid #2563eb;
}

.privacy-contact p {
  color: #374151;
  line-height: 1.7;
  font-size: 14.5px;
}

.privacy-note {
  font-size: 13px !important;
  color: #6b7280 !important;
  margin-bottom: 0;
}

/* Responsive */
@media(max-width:1000px){
  .privacy-grid {
    grid-template-columns: 1fr;
  }
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
