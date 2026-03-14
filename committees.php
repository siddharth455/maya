<?php
$page_title = "University Committees | Maya Devi University Dehradun";
$page_description = "Learn about university committees at Maya Devi University, Dehradun ensuring academic governance and student welfare.";
$canonical_url = "https://maya.edu.in/committees.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php" ?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" style="background-image:url(assets/uploads/maya.webp);">
        <div class="container">
            <h2>About Committees</h2>
            <p>Specialized committees working together to ensure excellence in every aspect of university operations</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Committees</span></li>
            </ul>
        </div>
    </div>
 <!-- ===================== COMMITTEES SECTION ===================== -->
<section class="governance-structure-section py-5">
  <div class="container text-center">
    <h2 class="section-title mb-3">University Committees</h2>
    <p class="section-description mb-5">
      Maya Devi University functions through various committees dedicated to governance, academics, research, welfare, and institutional development.
    </p>

    <div class="row justify-content-center">
      <!-- 1. Planning Board -->
      <div class="col-md-4 mb-4">
        <div class="gov-card">
          <div class="gov-icon"><i class="fas fa-project-diagram"></i></div>
          <h4>Planning Board</h4>
          <p>Oversees long-term strategic planning and institutional growth, aligning development with the university’s vision and mission.</p>
          <button class="gov-btn" onclick="openModal('planningBoardModal')">Click to View More</button>
        </div>
      </div>

      <!-- 2. Academic Council -->
      <div class="col-md-4 mb-4">
        <div class="gov-card">
          <div class="gov-icon"><i class="fas fa-graduation-cap"></i></div>
          <h4>Academic Council</h4>
          <p>Formulates and reviews academic policies, curricula, and quality assurance standards across all programs.</p>
          <button class="gov-btn" onclick="openModal('academicCouncilModal')">Click to View More</button>
        </div>
      </div>

      <!-- 3. Examination Committee -->
      <div class="col-md-4 mb-4">
        <div class="gov-card">
          <div class="gov-icon"><i class="fas fa-file-alt"></i></div>
          <h4>Examination Committee</h4>
          <p>Ensures smooth conduct of examinations, evaluation, and result declaration with transparency and efficiency.</p>
          <button class="gov-btn" onclick="openModal('examCommitteeModal')">Click to View More</button>
        </div>
      </div>

      <!-- 4. Admission Committee -->
      <div class="col-md-4 mb-4">
        <div class="gov-card">
          <div class="gov-icon"><i class="fas fa-user-check"></i></div>
          <h4>Admission Committee</h4>
          <p>Manages student admission processes, eligibility criteria, and merit-based selection for various courses.</p>
          <button class="gov-btn" onclick="openModal('admissionCommitteeModal')">Click to View More</button>
        </div>
      </div>

      <!-- 5. Finance Committee -->
      <div class="col-md-4 mb-4">
        <div class="gov-card">
          <div class="gov-icon"><i class="fas fa-coins"></i></div>
          <h4>Finance Committee</h4>
          <p>Supervises budgeting, fund allocation, and financial planning to ensure fiscal discipline and accountability.</p>
          <button class="gov-btn" onclick="openModal('financeCommitteeModal')">Click to View More</button>
        </div>
      </div>

      <!-- 6. Fee Fixation Committee -->
      <div class="col-md-4 mb-4">
        <div class="gov-card">
          <div class="gov-icon"><i class="fas fa-rupee-sign"></i></div>
          <h4>Fee Fixation Committee</h4>
          <p>Reviews and finalizes fee structures, ensuring affordability and compliance with regulatory guidelines.</p>
          <button class="gov-btn" onclick="openModal('feeFixationCommitteeModal')">Click to View More</button>
        </div>
      </div>

      <!-- 7. Internal Complaint Committee -->
      <div class="col-md-4 mb-4">
        <div class="gov-card">
          <div class="gov-icon"><i class="fas fa-balance-scale"></i></div>
          <h4>Internal Complaint Committee</h4>
          <p>Addresses complaints related to workplace harassment and ensures a safe and inclusive environment.</p>
          <button class="gov-btn" onclick="openModal('iccModal')">Click to View More</button>
        </div>
      </div>

      <!-- 8. Student Grievance Redressal Committee -->
      <div class="col-md-4 mb-4">
        <div class="gov-card">
          <div class="gov-icon"><i class="fas fa-comments"></i></div>
          <h4>Student Grievance Redressal Committee</h4>
          <p>Resolves student grievances fairly and promptly to promote harmony and trust on campus.</p>
          <button class="gov-btn" onclick="openModal('grievanceModal')">Click to View More</button>
        </div>
      </div>

      <!-- 9. Women Cell -->
      <div class="col-md-4 mb-4">
        <div class="gov-card">
          <div class="gov-icon"><i class="fas fa-female"></i></div>
          <h4>Women Cell</h4>
          <p>Empowers women through awareness, equality initiatives, and programs promoting safety and leadership.</p>
          <button class="gov-btn" onclick="openModal('womenCellModal')">Click to View More</button>
        </div>
      </div>

      <!-- 10. Minority Cell -->
      <div class="col-md-4 mb-4">
        <div class="gov-card">
          <div class="gov-icon"><i class="fas fa-handshake"></i></div>
          <h4>Minority Cell</h4>
          <p>Ensures representation and welfare of minority communities through support and inclusivity programs.</p>
          <button class="gov-btn" onclick="openModal('minorityCellModal')">Click to View More</button>
        </div>
      </div>

      <!-- 11. SEDGs Cell -->
      <div class="col-md-4 mb-4">
        <div class="gov-card">
          <div class="gov-icon"><i class="fas fa-users"></i></div>
          <h4>SEDGs Cell</h4>
          <p>Supports socially and economically disadvantaged groups by providing equal opportunities and resources.</p>
          <button class="gov-btn" onclick="openModal('sedgsCellModal')">Click to View More</button>
        </div>
      </div>

      <!-- 12. Anti-Ragging Committee -->
      <div class="col-md-4 mb-4">
        <div class="gov-card">
          <div class="gov-icon"><i class="fas fa-ban"></i></div>
          <h4>Anti-Ragging Committee</h4>
          <p>Prevents ragging through strict policies and creates a friendly, secure, and welcoming campus environment.</p>
          <button class="gov-btn" onclick="openModal('antiRaggingModal')">Click to View More</button>
        </div>
      </div>

      <!-- 13. Proctorial Board -->
      <div class="col-md-4 mb-4">
        <div class="gov-card">
          <div class="gov-icon"><i class="fas fa-user-shield"></i></div>
          <h4>Proctorial Board</h4>
          <p>Maintains discipline, monitors student conduct, and ensures adherence to university rules and values.</p>
          <button class="gov-btn" onclick="openModal('proctorialModal')">Click to View More</button>
        </div>
      </div>

      <!-- 14. Research Degree Committee -->
      <div class="col-md-4 mb-4">
        <div class="gov-card">
          <div class="gov-icon"><i class="fas fa-microscope"></i></div>
          <h4>Research Degree Committee (RDC)</h4>
          <p>Evaluates and approves research proposals, guiding scholars in maintaining academic and ethical standards.</p>
          <button class="gov-btn" onclick="openModal('rdcModal')">Click to View More</button>
        </div>
      </div>

      <!-- 15. Research & Ethics Committee -->
      <div class="col-md-4 mb-4">
        <div class="gov-card">
          <div class="gov-icon"><i class="fas fa-flask"></i></div>
          <h4>Research & Ethics Committee</h4>
          <p>Ensures integrity, transparency, and ethical compliance in all research activities and projects.</p>
          <button class="gov-btn" onclick="openModal('ethicsModal')">Click to View More</button>
        </div>
      </div>

      <!-- 16. IQAC Cell -->
      <div class="col-md-4 mb-4">
        <div class="gov-card">
          <div class="gov-icon"><i class="fas fa-chart-line"></i></div>
          <h4>IQAC Cell</h4>
          <p>Internal Quality Assurance Cell ensures continual improvement in academic and administrative performance.</p>
          <button class="gov-btn" onclick="openModal('iqacModal')">Click to View More</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== EMPTY MODALS (Tables will be unique for each) ========== -->
<!-- Just copy-paste your BOG/BOM modal table structure inside each as you fill later -->
<div id="planningBoardModal" class="gov-modal">
    <div class="gov-modal-content">
        <span class="gov-close" onclick="closeModal('planningBoardModal')">&times;</span
        ><h3>Planning Board</h3>
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
                    <td>Prof.(Dr.) Ashish Semwal</td>
                    <td>Vice Chancellor</td>
                    <td>Co-Chairperson</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Dr. Tripti Juyal Semwal</td>
                    <td>Sponsoring Body Nominee</td>
                    <td>Member</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Mr. Saurabh Juyal</td>
                    <td>Sponsoring Body Nominee</td>
                    <td>Member</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Mr. Gurubachan Singh Raina</td>
                    <td>Finance Officer</td>
                    <td>Member</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Dr. Vikram Singh</td>
                    <td>Director, IQAC</td>
                    <td>Member</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Ar. Manish Saini</td>
                    <td>President Nominee</td>
                    <td>Member</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Mr S C Dobhal</td>
                    <td>President Nominee</td>
                    <td>Member</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Mrs. Ambika Juyal</td>
                    <td>Registrar</td>
                    <td>Member Secretary</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Repeat the same empty modal for others -->
<div id="academicCouncilModal" class="gov-modal">
    <div class="gov-modal-content">
        <span class="gov-close" onclick="closeModal('academicCouncilModal')">&times;</span>
        <h3>Academic Council</h3>
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
                    <td>Co-Chairperson</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Dr. Tripti Juyal Semwal</td>
                    <td>Vice President</td>
                    <td>Member (Special Invitee)</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Prof. (Dr.) Ram Bhawan Singh</td>
                    <td>Dean, SoECA</td>
                    <td>Member</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Prof (Dr.) Khoob Singh</td>
                    <td>Dean SoEC</td>
                    <td>Member</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Prof (Dr.) Vikram Singh</td>
                    <td>Dean SoPH</td>
                    <td>Member</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Prof (Dr.) Rajul Dutt</td>
                    <td>Dean SoCM</td>
                    <td>Member</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Dr. Shivani Jaggi</td>
                    <td>Dean, SoAS</td>
                    <td>Member</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Dr. Sita Juyal</td>
                    <td>Principal, SoED</td>
                    <td>Member</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Dr Sunil Kumar Panwar</td>
                    <td>Professor, SoHM</td>
                    <td>Member</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Prof. (Dr.) Meenakshi</td>
                    <td>Dean R&D</td>
                    <td>Member</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Dr. Ashok Kumar Ahuja</td>
                    <td>Retd. Prof. of Civil Engg. IIT Roorkee</td>
                    <td>Member (President's Nominee)</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Prof. M S M Rawat</td>
                    <td>Former VC, HNBGU</td>
                    <td>Member (President's Nominee)</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Dr. Anita Rawat Rana</td>
                    <td>Professor, RUSSA, Doon University, Dehradun</td>
                    <td>Member (President's Nominee)</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Dr. Saraswati Prakash Bhatt</td>
                    <td>HoD, SoPH</td>
                    <td>Member</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Dr. Asad Ahmed</td>
                    <td>Assistant Professor, SoLAS</td>
                    <td>Member VC Nominee</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Dr Versha</td>
                    <td>Asso. Professor, SoLAS</td>
                    <td>Member VC Nominee</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Dr. Ajay Chourasia</td>
                    <td>Asso. Professor, SoCM</td>
                    <td>Member VC Nominee</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>Dr. RekhaJoshi</td>
                    <td>Asst. Professor, SoLAS</td>
                    <td>Member VC Nominee</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>Mrs. Ambika Juyal</td>
                    <td>Registrar</td>
                    <td>Member</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- Repeat the same empty modal for others -->
<div id="examCommitteeModal" class="gov-modal">
  <div class="gov-modal-content">
    <span class="gov-close" onclick="closeModal('examCommitteeModal')">&times;</span>
    <h3>COMPOSITION OF THE BOARD OF EXAMINATION</h3><table class="table table-bordered mt-3">
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
          <td>Prof. (Dr.) Ashish Semwal</td>
          <td>Vice Chancellor</td>
          <td>Chairperson</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Prof. (Dr.) Ram Bhawan Singh</td>
          <td>Dean, SoECA</td>
          <td>Dean Member</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Prof. (Dr.) Vikram Singh</td>
          <td>Dean, SoPH</td>
          <td>Member</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Prof. (Dr.) Shivani Jaggi</td>
          <td>Dean, SoAS</td>
          <td>Member</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Dr. Priya</td>
          <td>HoD, SoAT</td>
          <td>Member</td>
        </tr>
        <tr>
          <td>6</td>
          <td>Mrs. Deepa Chawla</td>
          <td>HoD, SoHM</td>
          <td>Member</td>
        </tr>
        <tr>
          <td>7</td>
          <td>Dr. Sita Juyal</td>
          <td>Principal, SoED</td>
          <td>Member</td>
        </tr>
        <tr>
          <td>8</td>
          <td>Mrs. Ambika Juyal</td>
          <td>Registrar</td>
          <td>Member</td>
        </tr>
        <tr>
          <td>9</td>
          <td>Dr. Asad Ahmed</td>
          <td>DSW</td>
          <td>Member</td>
        </tr>
        <tr>
          <td>10</td>
          <td>Prof. (Dr.) Khoob Singh</td>
          <td>CoE</td>
          <td>Member Secretary</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- (Do the same for all remaining committees as needed) -->
<div id="admissionCommitteeModal" class="gov-modal">
  <div class="gov-modal-content">
    <span class="gov-close" onclick="closeModal('admissionCommitteeModal')">&times;</span>
    <h3>COMPOSITION OF ADMISSION COMMITTEE</h3><table class="table table-bordered mt-3">
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
          <td>Dr. Tripti Juyal Semwal</td>
          <td>Vice President</td>
          <td>Member</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Prof.(Dr.) Khoob Singh</td>
          <td>Dean, SoEC</td>
          <td>Member</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Dr. Sarvesh Rustogi</td>
          <td>Director Admission</td>
          <td>Member</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Prof. (Dr.) Asad Ahmed</td>
          <td>Dean Students' Welfare</td>
          <td>Chairperson</td>
        </tr>
        <tr>
          <td>6</td>
          <td>Mr. Saurabh Juyal</td>
          <td>BoG Nominee</td>
          <td>Member</td>
        </tr>
        <tr>
          <td>7</td>
          <td>Mr. Gurubachan Singh Raina</td>
          <td>BoM Nominee</td>
          <td>Member</td>
        </tr>
        <tr>
          <td>8</td>
          <td>Er. Gaurav Tomar</td>
          <td>President Nominee</td>
          <td>Member</td>
        </tr>
        <tr>
          <td>9</td>
          <td>Mrs. Ambika Juyal</td>
          <td>Registrar</td>
          <td>Member Secretary</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<div id="financeCommitteeModal" class="gov-modal">
  <div class="gov-modal-content">
    <span class="gov-close" onclick="closeModal('financeCommitteeModal')">&times;</span>
    <h3>COMPOSITION OF FINANCE COMMITTEE</h3><table class="table table-bordered mt-3">
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
          <td>Prof.(Dr.) Ashish Semwal</td>
          <td>Vice Chancellor</td>
          <td>Co-Chairperson</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Dr. Tripti Juyal Semwal</td>
          <td>Sponsoring Body Nominee</td>
          <td>Member</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Mr. Saurabh Juyal</td>
          <td>BoG Nominee</td>
          <td>Member</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Prof. (Dr.) Ram Bhawan Singh</td>
          <td>Dean, SoECA</td>
          <td>President's Nominee</td>
        </tr>
        <tr>
          <td>6</td>
          <td>Mr. Dawar Daksh</td>
          <td>BoG Nominee as outside expert</td>
          <td>Member</td>
        </tr>
        <tr>
          <td>7</td>
          <td>Mrs. Ambika Juyal</td>
          <td>Registrar</td>
          <td>Member</td>
        </tr>
        <tr>
          <td>8</td>
          <td>Mr. Gurubachan Singh Raina</td>
          <td>Finance Officer</td>
          <td>Member Secretary</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<div id="feeFixationCommitteeModal" class="gov-modal">
  <div class="gov-modal-content">
    <span class="gov-close" onclick="closeModal('feeFixationCommitteeModal')">&times;</span>
    <h3>COMPOSITION OF FEE FIXATION COMMITTEE</h3><table class="table table-bordered mt-3">
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
          <td>Prof.(Dr.)Ashish Semwal</td>
          <td>Vice Chancellor</td>
          <td>Chairperson</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Dr. Tripti Juyal Semwal</td>
          <td>Vice President</td>
          <td>Member</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Prof.(Dr.) Khoob Singh</td>
          <td>Academic Council Nominee</td>
          <td>Member</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Mr. Saurabh Juyal</td>
          <td>BoG Nominee</td>
          <td>Member</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Mr. Vinod Binjola</td>
          <td>Accounts Expert</td>
          <td>President's Nominee</td>
        </tr>
        <tr>
          <td>6</td>
          <td>Mrs. Ambika Juyal</td>
          <td>Registrar</td>
          <td>Member</td>
        </tr>
        <tr>
          <td>7</td>
          <td>Mr. Daksh Dawarr</td>
          <td>CA (External Auditor)</td>
          <td>External Expert</td>
        </tr>
        <tr>
          <td>8</td>
          <td>Mr. Gurubachan Singh Raina</td>
          <td>Finance Officer</td>
          <td>BoM Nominee Member Secretary</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<div id="iccModal" class="gov-modal">
  <div class="gov-modal-content">
    <span class="gov-close" onclick="closeModal('iccModal')">&times;</span>
    <h3>RE-CONSTITUTION OF INTERNAL COMPLAINT COMMITTEE (ICC)</h3><table class="table table-bordered mt-3">
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
      <td>Prof (Dr.) Shivani Jaggi</td>
      <td>Dean, SoAS</td>
      <td>Chairperson</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Mrs. Deepa Chawla</td>
      <td>Asso. Dean, SoHM</td>
      <td>Co Chairperson</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Dr. Naveen Kumar</td>
      <td>Asst. Professor, SoAT</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Dr. Priya</td>
      <td>Asst. Professor, SoAT</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>5</td>
      <td>Mrs. Rekha Chauhan</td>
      <td>Asst. Professor, SoPH</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>6</td>
      <td>Dr. Rekha Joshi</td>
      <td>Asst. Professor, SoAS</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>7</td>
      <td>Ms. Sabnam Khan</td>
      <td>Asst Prof, SoED</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>8</td>
      <td>Mr. Jitendra Kumar Pandey</td>
      <td>Deputy Registrar</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>9</td>
      <td>Mr. Ankit Saklani</td>
      <td>Office Assistant</td>
      <td>Member</td>
    </tr>
  </tbody>
  </table>
  </div>
</div>
<div id="grievanceModal" class="gov-modal">
  <div class="gov-modal-content">
    <span class="gov-close" onclick="closeModal('grievanceModal')">&times;</span>
    <h3>STUDENTS' GRIEVANCE REDRESSAL COMMITTEE</h3><table class="table table-bordered mt-3">
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
      <td>Prof. (Dr.) Asad Ahmad</td>
      <td>Dean Students' Welfare</td>
      <td>Chairperson</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Prof (Dr.) Shivani Jaggi</td>
      <td>Dean, SoAS</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Prof. (Dr.) Rajul Dutt</td>
      <td>Dean, SoCM</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Prof. (Dr.) Vikram Singh</td>
      <td>SoPH</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>5</td>
      <td>Mr. Sandeep Kumar Yadav</td>
      <td>B.Pharm (2021-25)</td>
      <td>Special Invitee</td>
    </tr>
    <tr>
      <td>6</td>
      <td>Ms. Nitisha Thakur</td>
      <td>MBA (2024-26)</td>
      <td>Special Invitee</td>
    </tr>
    <tr>
      <td>7</td>
      <td>Mr. J K Pandey</td>
      <td>Deputy Director</td>
      <td>Member Secretary</td>
    </tr>
  </tbody>
</table>
  </div>
</div>
<div id="sedgsCellModal" class="gov-modal">
  <div class="gov-modal-content">
    <span class="gov-close" onclick="closeModal('sedgsCellModal')">&times;</span>
    <h3>RE-CONSTITUTION OF SEDGs CELL</h3><table class="table table-bordered mt-3">
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
      <td>Prof. (Dr.) Asad Ahmad</td>
      <td>Dean Students' Welfare</td>
      <td>Chairperson</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Prof.(Dr.) Khoob Singh</td>
      <td>Dean, SoEC</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Prof.(Dr.) Shivani Jaggi</td>
      <td>In-charge, ICC</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Prof.(Dr.) Vikram Singh</td>
      <td>Director IQAC</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>5</td>
      <td>Mr. Rituraj Das</td>
      <td>Asst. Professor, SoMC, SC/ST Representative</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>6</td>
      <td>Mr. Anant Prakash Mehra</td>
      <td>Asst. Professor, SoAR</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>7</td>
      <td>Rishiman</td>
      <td>Student of B.Pharm, 2022-26 Batch</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>8</td>
      <td>Zeenat Praveen</td>
      <td>Student of Research, 2024 Batch</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>9</td>
      <td>Mr. J K Pandey</td>
      <td>Deputy Registrar</td>
      <td>Member Secretary</td>
    </tr>
  </tbody>
</table>
  </div>
</div>
<div id="antiRaggingModal" class="gov-modal">
  <div class="gov-modal-content">
    <span class="gov-close" onclick="closeModal('antiRaggingModal')">&times;</span>
    <h3>ANTI-RAGGING COMMITTEE</h3><table class="table table-bordered mt-3">
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
      <td>Dr. Shivani Jaggi</td>
      <td>Prof, SoAS</td>
      <td>Chairperson</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Dr. Vikram Singh</td>
      <td>Dean, SoPH</td>
      <td>Co-Chairperson</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Dr. Ram Bhawan Singh</td>
      <td>Dean, SoCEA</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Krishna Ballabh Pokhriyal</td>
      <td>Dean, SoE</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>5</td>
      <td>Dr. Rajul Dutt</td>
      <td>Dean SoCM</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>6</td>
      <td>Dr. Asad Ahmed</td>
      <td>Dean Students' Welfare</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>7</td>
      <td>Dr. Ajay Chaurasia</td>
      <td>Asso Prof SoCM</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>8</td>
      <td>Dr. Rekha Joshi</td>
      <td>Asst Prof, SoLAS</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>9</td>
      <td>Mrs. Deepa Chawla</td>
      <td>Asso. Dean, SoHTM</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>10</td>
      <td>Wardens</td>
      <td>Girls & Boys Hostel</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>11</td>
      <td>Mr. J K Pandey</td>
      <td>Deputy Registrar</td>
      <td>Member Secretary</td>
    </tr>
  </tbody>
</table>
  </div>
</div>
<div id="proctorialModal" class="gov-modal">
  <div class="gov-modal-content">
    <span class="gov-close" onclick="closeModal('proctorialModal')">&times;</span>
    <h3>RE-CONSTITUTION OF PROCTORIAL BOARD</h3><table class="table table-bordered mt-3">
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
      <td>Krishna Ballabh Pokhriyal</td>
      <td>Dean, SoEG</td>
      <td>Chief Proctor</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Dr. Varsha Upadhyay</td>
      <td>Asst. Professor, SoAS</td>
      <td>Proctor</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Dr. Saraswati Prakash Bhatt</td>
      <td>Asst. Prof., SoPH</td>
      <td>Proctor</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Mr. Gopal Singh Negi</td>
      <td>Asst. Prof., SoHM</td>
      <td>Proctor</td>
    </tr>
    <tr>
      <td>5</td>
      <td>Dr. Ajay Chaurasia</td>
      <td>Asso. Prof., SoMC</td>
      <td>Proctor</td>
    </tr>
    <tr>
      <td>6</td>
      <td>Dr. Vikas Kumar</td>
      <td>Professor, SoAH</td>
      <td>Proctor</td>
    </tr>
    <tr>
      <td>7</td>
      <td>Dr. Ananya Gupta</td>
      <td>Asst. Prof., SoAH</td>
      <td>Proctor</td>
    </tr>
    <tr>
      <td>8</td>
      <td>Dr. Harish Dutt Sharma</td>
      <td>Asst. Prof., SoCSE</td>
      <td>Proctor</td>
    </tr>
    <tr>
      <td>9</td>
      <td>Mr. Narendra Singh</td>
      <td>Research Scholar</td>
      <td>Student Representative</td>
    </tr>
    <tr>
      <td>10</td>
      <td>Mrs. Namrata Semwal</td>
      <td>Research Scholar</td>
      <td>Student Representative</td>
    </tr>
  </tbody>
</table>
  </div>
</div>
<div id="rdcModal" class="gov-modal">
  <div class="gov-modal-content">
    <span class="gov-close" onclick="closeModal('rdcModal')">&times;</span>
    <h3>RESEARCH DEGREE COMMITTEE (RDC)</h3><table class="table table-bordered mt-3">
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
      <td>Prof. (Dr.) Ashish Semwal</td>
      <td>Vice Chancellor</td>
      <td>Chairperson</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Prof.(Dr.) Shivani Jaggi</td>
      <td>Dean, SoAS</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Prof.(Dr.) Khoob Singh</td>
      <td>Dean, SoE</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Prof.(Dr.) Parikshit Kala</td>
      <td>CoE</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>5</td>
      <td>Prof.(Dr.) Vikram Singh</td>
      <td>Dean Research & Innovation</td>
      <td>Member Secretary</td>
    </tr>
  </tbody>
</table>
  </div>
</div>
<div id="ethicsModal" class="gov-modal">
  <div class="gov-modal-content">
    <span class="gov-close" onclick="closeModal('ethicsModal')">&times;</span>
    <h3>Research & Ethics Committee</h3><table class="table table-bordered mt-3">
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
      <td>Prof. (Dr.) Sandip Vijay</td>
      <td>Pro Vice Chancellor</td>
      <td>Chair Person</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Prof.(Dr.) Shivani Jaggi</td>
      <td>Dean, School of Life & Applied Sciences</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Prof.(Dr.) Vikram Singh</td>
      <td>Dean, School of Pharmacy</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Dr. Rita</td>
      <td>School of Arts & Humanities</td>
      <td>Member</td>
    </tr>
    <tr>
      <td>5</td>
      <td>Prof. (Dr.) Meenakshi</td>
      <td>Dean, Research Studies</td>
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
      <h2 class="text-center mb-5">Committee Coordination</h2>
      <div class="row">
        <div class="col-md-6">
          <h3><strong>Collaborative Approach</strong></h3>
          <p>
          All committees work in coordination to ensure seamless operations and maintain the highest standards of academic excellence. Regular meetings and cross-committee communication ensure effective implementation of policies and programs.
          </p>
        </div>
        <div class="col-md-6">
          <h3><strong>Student-Centric Focus</strong></h3>
          <p>
          Every committee prioritizes student welfare and development. From academic excellence to personal well-being, our committees ensure comprehensive support for all students throughout their educational journey.
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
.principles-card h3  {
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