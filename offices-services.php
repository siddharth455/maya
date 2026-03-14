<?php
$page_title = "University Offices & Services | Maya Devi University Dehradun";
$page_description = "Explore university offices and student support services at Maya Devi University, Dehradun.";
$canonical_url = "https://maya.edu.in/offices-services.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php" ?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" style="background-image:url(assets/uploads/maya.webp);">
        <div class="container">
            <h2>Offices and Services</h2>
            <p>Dedicated offices and comprehensive services ensuring excellence in every aspect of university operations</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Offices & Services</span></li>
            </ul>
        </div>
    </div>
    <!-- ===================== COMMITTEES SECTION ===================== -->
    <section class="governance-structure-section py-5">
        <div class="container text-center">
            <h2 class="section-title mb-3">Our Administrative Offices</h2>
            <p class="section-description mb-5">
            Maya Devi University maintains dedicated administrative offices that ensure efficient operations, student welfare, and institutional excellence across all departments. </p>

            <div class="row justify-content-center">

                <!-- 1. Finance Committee -->
                <div class="col-md-4 mb-4">
                    <div class="gov-card">
                        <div class="gov-icon"><i class="fas fa-coins"></i></div>
                        <h4>Chief Financial Officer</h4>
                        <p>Oversees all financial operations, budgeting, and fiscal management of the university.</p>
                        <button class="gov-btn" onclick="openModal('financeCommitteeModal')">Click to View More</button>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
    <div class="gov-card">
        <div class="gov-icon"><i class="fas fa-user-graduate"></i></div>
        <h4>Dean Student Welfare</h4>
        <p>Ensures comprehensive student welfare, development, and support services.</p>
        <button class="gov-btn" onclick="openModal('deanStudentWelfareModal')">Click to View More</button>
    </div>
</div>

<div class="col-md-4 mb-4">
    <div class="gov-card">
        <div class="gov-icon"><i class="fas fa-shield-alt"></i></div>
        <h4>Chief Proctor</h4>
        <p>Maintains discipline, security, and order on campus for a safe learning environment.</p>
        <button class="gov-btn" onclick="openModal('chiefProctorModal')">Click to View More</button>
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
               
            </div>
        </div>
    </section>

   
    <div id="iccModal" class="gov-modal">
        <div class="gov-modal-content">
            <span class="gov-close" onclick="closeModal('iccModal')">&times;</span>
            <h3>RE-CONSTITUTION OF INTERNAL COMPLAINT COMMITTEE (ICC)</h3>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Name</th>
                        <th>Designation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Prof (Dr.) Shivani Jaggi</td>
                        <td>Dean, SoAS</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Mrs. Deepa Chawla</td>
                        <td>Asso. Dean, SoHM</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Dr. Naveen Kumar</td>
                        <td>Asst. Professor, SoAT</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Dr. Priya</td>
                        <td>Asst. Professor, SoAT</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Mrs. Rekha Chauhan</td>
                        <td>Asst. Professor, SoPH</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Dr. Rekha Joshi</td>
                        <td>Asst. Professor, SoAS</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Ms. Sabnam Khan</td>
                        <td>Asst Prof, SoED</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Mr. Jitendra Kumar Pandey</td>
                        <td>Deputy Registrar</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Mr. Ankit Saklani</td>
                        <td>Office Assistant</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="grievanceModal" class="gov-modal">
        <div class="gov-modal-content">
            <span class="gov-close" onclick="closeModal('grievanceModal')">&times;</span>
            <h3>STUDENTS' GRIEVANCE REDRESSAL COMMITTEE</h3>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Name</th>
                        <th>Designation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Prof. (Dr.) Asad Ahmad</td>
                        <td>Dean Students' Welfare</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Prof (Dr.) Shivani Jaggi</td>
                        <td>Dean, SoAS</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Prof. (Dr.) Rajul Dutt</td>
                        <td>Dean, SoCM</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Prof. (Dr.) Vikram Singh</td>
                        <td>SoPH</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Mr. Sandeep Kumar Yadav</td>
                        <td>B.Pharm (2021-25)</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Ms. Nitisha Thakur</td>
                        <td>MBA (2024-26)</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Mr. J K Pandey</td>
                        <td>Deputy Director</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="sedgsCellModal" class="gov-modal">
        <div class="gov-modal-content">
            <span class="gov-close" onclick="closeModal('sedgsCellModal')">&times;</span>
            <h3>RE-CONSTITUTION OF SEDGs CELL</h3>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Name</th>
                        <th>Designation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Prof. (Dr.) Asad Ahmad</td>
                        <td>Dean Students' Welfare</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Prof.(Dr.) Khoob Singh</td>
                        <td>Dean, SoEC</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Prof.(Dr.) Shivani Jaggi</td>
                        <td>In-charge, ICC</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Prof.(Dr.) Vikram Singh</td>
                        <td>Director IQAC</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Mr. Rituraj Das</td>
                        <td>Asst. Professor, SoMC, SC/ST Representative</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Mr. Anant Prakash Mehra</td>
                        <td>Asst. Professor, SoAR</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Rishiman</td>
                        <td>Student of B.Pharm, 2022-26 Batch</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Zeenat Praveen</td>
                        <td>Student of Research, 2024 Batch</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Mr. J K Pandey</td>
                        <td>Deputy Registrar</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="antiRaggingModal" class="gov-modal">
        <div class="gov-modal-content">
            <span class="gov-close" onclick="closeModal('antiRaggingModal')">&times;</span>
            <h3>ANTI-RAGGING COMMITTEE</h3>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Name</th>
                        <th>Designation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Dr. Shivani Jaggi</td>
                        <td>Prof, SoAS</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Dr. Vikram Singh</td>
                        <td>Dean, SoPH</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Dr. Ram Bhawan Singh</td>
                        <td>Dean, SoCEA</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Krishna Ballabh Pokhriyal</td>
                        <td>Dean, SoE</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Dr. Rajul Dutt</td>
                        <td>Dean SoCM</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Dr. Asad Ahmed</td>
                        <td>Dean Students' Welfare</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Dr. Ajay Chaurasia</td>
                        <td>Asso Prof SoCM</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Dr. Rekha Joshi</td>
                        <td>Asst Prof, SoLAS</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Mrs. Deepa Chawla</td>
                        <td>Asso. Dean, SoHTM</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Wardens</td>
                        <td>Girls & Boys Hostel</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Mr. J K Pandey</td>
                        <td>Deputy Registrar</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

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
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gov-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
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
            background-color: rgba(0, 0, 0, 0.5);
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
            max-height: 600px;
            /* 👈 Limit modal height */
            overflow-y: auto;
            /* 👈 Enable internal scrolling */
            scrollbar-width: thin;
            /* 👈 Optional: sleek scrollbar */
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
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Governance Principles */
        .governance-principles {
            background: #f8f9fc;
        }

        .principles-card {
            background: #fff;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
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