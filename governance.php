<?php
$page_title = "University Governance | Maya Devi University Dehradun";
$page_description = "Learn about governance structure and administrative framework at Maya Devi University, Dehradun.";
$canonical_url = "https://maya.edu.in/governance.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php" ?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" style="background-image:url(assets/uploads/maya.webp);">
        <div class="container">
            <h2>About Governance</h2>
            <p>Understanding the governance structure that drives excellence at Maya Devi University</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Governance</span></li>
            </ul>
        </div>
    </div>
    <!-- Governance Structure Section -->
<section class="governance-structure-section py-5">
  <div class="container text-center">
    <h2 class="section-title mb-3">Our Governance Structure</h2>
    <p class="section-description mb-5">
      Maya Devi University operates under a well-defined governance structure that ensures
      transparency, accountability, and excellence in all aspects of academic and administrative operations.
    </p>

    <div class="row justify-content-center">
      <!-- BOG Card -->
      <div class="col-md-5 mb-4">
        <div class="gov-card">
          <div class="gov-icon">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h4>BOG (Board of Governors)</h4>
          <p>
            The Board of Governors is the supreme governing body of Maya Devi University,
            responsible for overall policy formulation, strategic planning, and institutional development.
          </p>
          <button class="gov-btn" onclick="openModal('bogModal')">Click to View More</button>
        </div>
      </div>

      <!-- BOM Card -->
      <div class="col-md-5 mb-4">
        <div class="gov-card">
          <div class="gov-icon">
            <i class="fas fa-building"></i>
          </div>
          <h4>BOM (Board of Management)</h4>
          <p>
            The Board of Management oversees the day-to-day operations and implementation
            of policies formulated by the Board of Governors.
          </p>
          <button class="gov-btn" onclick="openModal('bomModal')">Click to View More</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- BOG Modal -->
<div id="bogModal" class="gov-modal">
  <div class="gov-modal-content">
    <span class="gov-close" onclick="closeModal('bogModal')">&times;</span>
    <h3>Board of Governors</h3>
    <table class="table table-bordered mt-3">
      <thead>
        <tr>
            <th>S.No.</th>
          <th>Name</th>
          <th>Designation</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td>1</td>
            <td>Sh. M.L. Juyal</td>
            <td>President</td>
            <td>Chairperson</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Prof. Dr. Ashish Semwal</td>
            <td>Vice Chancellor</td>
            <td>Member Secretary</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Dr. D C Nainwal</td>
            <td>Principal, Govt. Degree College, Doiwala, Dehradun</td>
            <td>Visitor Nominee</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Prof. H C Purohit</td>
            <td>Doon University, Dehradun</td>
            <td>Visitor Nominee</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Dr. Vijay Dhasmana</td>
            <td>Distinguished Academician & administrator</td>
            <td>President Nominee</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Mr. Gurubachan Singh Raina</td>
            <td>Finance Expert</td>
            <td>President Nominee</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Mr. Ashwani Kalra</td>
            <td>Advocate</td>
            <td>President Nominee</td>
        </tr>
        <tr>
            <td>8</td>
            <td>Mrs. Prabha Juyal</td>
            <td>Philanthropist</td>
            <td>Sponsoring Body Nominee</td>
        </tr>
        <tr>
            <td>9</td>
            <td>Dr. Tripti Juyal Semwal</td>
            <td>Academician & Administrator</td>
            <td>Sponsoring Body Nominee</td>
        </tr>
        <tr>
            <td>10</td>
            <td>Mr. Saurabh Juyal</td>
            <td>Professional</td>
            <td>Sponsoring Body Nominee</td>
        </tr>
        <tr>
            <td>11</td>
            <td>Dr. Sita Juyal</td>
            <td>Academician</td>
            <td>Sponsoring Body Nominee</td>
        </tr>
        <tr>
            <td>12</td>
            <td>Mr. Saksham Juyal</td>
            <td>Entrepreneur</td>
            <td>Sponsoring Body Nominee</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- BOM Modal -->
<div id="bomModal" class="gov-modal">
  <div class="gov-modal-content">
    <span class="gov-close" onclick="closeModal('bomModal')">&times;</span>
    <h3>Board of Management</h3>
    <table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>S.No.</th>
          <th>Name</th>
          <th>Designation</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td>1</td>
            <td>Prof.(Dr.) Ashish Semwal</td>
            <td>Vice Chancellor</td>
            <td>Chairperson</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Prof.(Dr.) Sandip Vijay</td>
            <td>Pro-Vice Chancellor (Academic)</td>
            <td>Member</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Ms. Prabha Juyal</td>
            <td>Sponsoring Body Nominee</td>
            <td>Member</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Dr. Tripti Juyal Semwal</td>
            <td>Sponsoring Body Nominee</td>
            <td>Member</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Mr. Saurabh Juyal</td>
            <td>Sponsoring Body Nominee</td>
            <td>Member</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Dr. Sita Juyal</td>
            <td>Sponsoring Body Nominee</td>
            <td>Member</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Mr. Saksham Juyal</td>
            <td>Sponsoring Body Nominee</td>
            <td>Member</td>
        </tr>
        <tr>
            <td>8</td>
            <td>Prof.(Dr.) Vikram Singh</td>
            <td>Dean, SoPH</td>
            <td>President Nominee</td>
        </tr>
        <tr>
            <td>9</td>
            <td>Er. Gaurav Tomar</td>
            <td>Director PR</td>
            <td>President Nominee</td>
        </tr>
        <tr>
            <td>10</td>
            <td>Mr. Vijay Singh</td>
            <td>Deputy Fin Offr</td>
            <td>President Nominee</td>
        </tr>
        <tr>
            <td>11</td>
            <td>Prof.(Dr.) J S Rana</td>
            <td>Vice Chancellor Nominee</td>
            <td>Member</td>
        </tr>
        <tr>
            <td>12</td>
            <td>Prof. Pachauri ji</td>
            <td>Vice Chancellor Nominee</td>
            <td>Member</td>
        </tr>
        <tr>
            <td>13</td>
            <td>Mr. Gurubachan Singh Raina</td>
            <td>Finance Officer</td>
            <td>Member Secretary</td>
        </tr>
        <tr>
            <td>14</td>
            <td>Mrs. Ambika Juyal</td>
            <td>Registrar</td>
            <td>Member Secretary</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- Governance Principles Section -->
<section class="governance-principles my-5 py-5">
  <div class="container">
    <div class="principles-card">
      <h2 class="text-center mb-5">Governance Principles</h2>
      <div class="row">
        <div class="col-md-6">
          <h3><strong>Transparency & Accountability</strong></h3>
          <p>
            Our governance structure ensures complete transparency in decision-making processes and maintains strict accountability at all levels. Regular meetings, documented procedures, and clear communication channels uphold these principles.
          </p>
        </div>
        <div class="col-md-6">
          <h3><strong>Excellence & Innovation</strong></h3>
          <p>
            The governance bodies work collaboratively to foster academic excellence, promote research and innovation, and ensure the university remains at the forefront of educational advancement.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CSS -->
<style>
/* Section Titles */
.section-title {
  font-weight: 700;
  font-size: 2rem;
  color: #0a2a66;
}
.section-description {
  color: #555;
  font-size: 1rem;
  max-width: 750px;
  margin: 0 auto;
}

/* Governance Cards */
.gov-card {
  background: #fff;
  padding: 30px;
  border-radius: 15px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.gov-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}
.gov-icon {
  background: #eaf4fc;
  width: 80px;
  height: 80px;
  margin: 0 auto 20px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.gov-icon i {
  font-size: 30px;
  color: #006a4e;
}
.gov-card h4 {
  color: #0a2a66;
  font-weight: 700;
  margin-bottom: 15px;
}
.gov-card p {
  color: #555;
  min-height: 80px;
}
.gov-btn {
  background-color: #00a651;
  color: #fff;
  border: none;
  padding: 12px 25px;
  border-radius: 8px;
  transition: 0.3s;
}
.gov-btn:hover {
  background-color: #004c35;
}

/* Modal */
.gov-modal {
  display: none;
  position: fixed;
  z-index: 1050;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.5);
  justify-content: center;
  align-items: center;
}
/* Limit popup height and make table scrollable */
.gov-modal-content {
  background-color: #fff;
  padding: 30px;
  border-radius: 15px;
  width: 70%;
  max-width: 800px;
  position: relative;
  animation: fadeIn 0.3s ease;
  max-height: 600px;              /* 👈 Limit modal height */
  overflow-y: auto;               /* 👈 Enable internal scrolling */
  scrollbar-width: thin;          /* 👈 Optional: sleek scrollbar */
  scrollbar-color: #006a4e #f0f0f0;
}

/* Optional (for Chrome/Safari): customize scrollbar style */
.gov-modal-content::-webkit-scrollbar {
  width: 8px;
}
.gov-modal-content::-webkit-scrollbar-thumb {
  background-color: #006a4e;
  border-radius: 10px;
}
.gov-modal-content::-webkit-scrollbar-track {
  background: #f0f0f0;
}

.gov-close {
  position: absolute;
  top: 15px;
  right: 20px;
  font-size: 28px;
  color: #333;
  cursor: pointer;
}
.gov-close:hover {
  color: #006a4e;
}
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(-20px); }
  to { opacity: 1; transform: translateY(0); }
}

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
.principles-card h3 {
  color: #0a2a66;
  margin-bottom: 15px;
}
.principles-card p {
  color: #333;
  line-height: 1.7;
}
</style>

<!-- JS -->
<script>
function openModal(id) {
  document.getElementById(id).style.display = "flex";
}
function closeModal(id) {
  document.getElementById(id).style.display = "none";
}
window.onclick = function(event) {
  const modals = document.querySelectorAll('.gov-modal');
  modals.forEach(modal => {
    if (event.target === modal) {
      modal.style.display = "none";
    }
  });
}
</script>


<?php require "common/footer.php" ?>