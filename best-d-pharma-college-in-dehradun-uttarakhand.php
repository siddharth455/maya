<?php
$page_title = "Best D.Pharm College in Dehradun 2027 | PCI Approved | MDU";
$page_description = "D.Pharm admission 2027 at Maya Devi University, Dehradun. 2-year PCI-approved Diploma in Pharmacy with 500 hours of practical training. Check eligibility.";
$canonical_url = "https://maya.edu.in/best-d-pharma-college-in-dehradun-uttarakhand.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";

// Batch 2 SEO content: intro, at-a-glance table, why-choose list and FAQs (schema matches visible FAQs)
require_once "common/course-seo.php";
$seo = course_seo("dpharm");
$page_schema = ($page_schema ?? "") . seo_faq_schema($seo);

// Course schema (Batch 3): name, overview, credential and duration from this page
require_once "common/course-schema.php";
$page_schema = ($page_schema ?? "") . course_schema([
    "name" => 'Diploma in Pharmacy (D.Pharm)',
    "description" => seo_plain($seo["intro"][0]),
    "credential" => 'Diploma',
    "time" => "P2Y",
]);
?>
<?php require "common/header.php" ?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" style="background-image:url(assets/uploads/d.pharmacy.jpeg);">
        <div class="container">
            <h1 class="seo-banner-h1">Best D.Pharm College in Dehradun – Diploma in Pharmacy at Maya Devi University</h1>
            <p><?php echo $seo["intro"][0]; ?></p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Diploma in Pharmacy</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="course-details-area pt-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="course-left-wrap mr-40">
                    <div class="apply-area">
                        <img src="assets/uploads/d.pharmacy.jpeg" alt="Diploma in Pharmacy at Maya Devi University">
                        <div class="course-apply-btn">
                            <a href="https://admissions.maya.edu.in" class="default-btn">APPLY NOW</a>
                        </div>
                    </div>
                    <div class="tab-content jump">
                        <div class="tab-pane active mt-5" id="course-details-1">
                            <div class="over-view-content">
                                <h4>COURSE DETAILS</h4>
                                <h5>Course Name : Diploma in Pharmacy</h5>
                                <?php echo seo_css(); ?>
                                <div class="seo-intro"><p><?php echo $seo["intro"][1]; ?></p></div>
                                <?php echo seo_glance($seo); ?>
                                <?php echo seo_why($seo); ?>

                                <div class="over-view-list">
                                    <h2>Eligibility Criteria</h2>
                                    <div class="sin-over-view-list">

                                        <div class="course-list-icon">
                                            <i class="fa fa-check"></i> .
                                        </div>
                                        <div class="course-list-content">
                                            <p>Minimum age: 17 years as of 31st December.</p>
                                        </div>
                                    </div>
                                    <div class="sin-over-view-list">
                                        <div class="course-list-icon">
                                            <i class="fa fa-check"></i> .
                                        </div>
                                        <div class="course-list-content">
                                            <p>10+2 with PCB/PCM from a recognised board</p>
                                        </div>
                                    </div>
                                    <div class="sin-over-view-list">
                                        <div class="course-list-icon">
                                            <i class="fa fa-check"></i> .
                                        </div>
                                        <div class="course-list-content">
                                            <p>Mathematics or Biology from recognized board.</p>
                                        </div>
                                    </div>
                                    <div class="sin-over-view-list">
                                        <div class="course-list-icon">
                                            <i class="fa fa-check"></i> .
                                        </div>
                                        <div class="course-list-content">
                                            <p>General Category: Minimum 50% marks.</p>
                                        </div>
                                    </div>
                                    <div class="sin-over-view-list">
                                        <div class="course-list-icon">
                                            <i class="fa fa-check"></i> .
                                        </div>
                                        <div class="course-list-content">
                                            <p> SC/ST Category: Minimum 45% marks.</p>
                                        </div>
                                    </div>
                                </div>
                                <h2>More Details</h2>
                                <div class="course-summary-wrap mt-4">

                                    <div class="single-course-summary">
                                        <h4>Approved seats –for session 2026-2027 </h4>
                                        <span><i class="fa fa-user"></i> 60</span>
                                    </div>
                                    <div class="single-course-summary">
                                        <h4>Program duration</h4>
                                        <span><i class="fa fa-clock-o"></i> 2years/4sem</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="related-course pt-70">
                        <div class="related-title mb-45 mrg-bottom-small">
                            <h3>Related Course</h3>

                        </div>
                        <div class="related-slider-active">
                            <div class="single-course">
                                <div class="course-img">
                                    <a href="best-b-pharma-colleges-in-dehradun-uttarakhand.php"><img class="animated" src="assets/uploads/pharmacy.webp" alt="Bachelor in pharmacy at Maya Devi University"></a>
                                </div>
                                <div class="course-content">
                                    <h4><a href="best-b-pharma-colleges-in-dehradun-uttarakhand.php">Bachelor in pharmacy</a></h4>
                                    <p>The B.Pharm program provides in-depth knowledge of pharmaceutical sciences, drug development, and professional pharmacy practice.</p>
                                </div>
                                <div class="course-position-content">
                                    <div class="credit-duration-wrap">
                                        <div class="sin-credit-duration">
                                            <i class="fa fa-diamond"></i>
                                            <span>Credits : 125</span>
                                        </div>
                                        <div class="sin-credit-duration">
                                            <i class="fa fa-clock-o"></i>
                                            <span>Duration : 4yrs</span>
                                        </div>
                                    </div>
                                    <div class="course-btn">
                                        <a class="default-btn" href="best-b-pharma-colleges-in-dehradun-uttarakhand.php">APPLY NOW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-course">
                                <div class="course-img">
                                    <a href="bachelor-pharmacy-lateral-entry.php"><img class="animated" src="assets/uploads/pharmacy-le.jpg" alt="Bachelor of pharmacy (Lateral Entry) at Maya Devi University"></a>
                                </div>
                                <div class="course-content">
                                    <h4><a href="bachelor-pharmacy-lateral-entry.php">Bachelor of pharmacy (Lateral Entry)</a></h4>
                                    <p>The B.Pharm Lateral Entry program is a three-year course focusing on pharmaceutical sciences, drug development, and pharmacy practice.</p>
                                </div>
                                <div class="course-position-content">
                                    <div class="credit-duration-wrap">
                                        <div class="sin-credit-duration">
                                            <i class="fa fa-diamond"></i>
                                            <span>Credits : 125</span>
                                        </div>
                                        <div class="sin-credit-duration">
                                            <i class="fa fa-clock-o"></i>
                                            <span>Duration : 3yrs</span>
                                        </div>
                                    </div>
                                    <div class="course-btn">
                                        <a class="default-btn" href="bachelor-pharmacy-lateral-entry.php">APPLY NOW</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-3 col-lg-4">
                <div class="sidebar-style sidebar-res-mrg-none">

                    <div class="sidebar-about mb-40">
                        <div class="sidebar-title mb-15">
                            <h4>About Us</h4>
                        </div>
                        <p>Maya Devi University’s Diploma in Pharmacy program provides comprehensive knowledge and practical training in pharmacology, pharmaceutical chemistry, and drug formulation. Diploma Holders are prepared for careers in community and hospital pharmacies, pharmaceutical research, and healthcare management, contributing to safe and effective medication use and healthcare innovation.</p>

                    </div>

                    <div class="sidebar-category mb-40">
                        <div class="sidebar-title mb-40">
                            <h4>School Category</h4>
                        </div>
                        <div class="category-list">
                            <ul>
                                <li><a href="best-engineering-college-in-dehradun-Uttarakhand.php">School of Engineering <span>13</span></a></li>
                                <li><a href="pharmacy.php">School of Pharmacy <span>07</span></a></li>
                                <li><a href="Nursing.php">School of Nursing <span>03</span></a></li>
                                <li><a href="management-and-commerce.php">School of Commerce & Management <span>09</span></a></li>
                                <li><a href="school-of-health-sciences.php">School of Health Sciences <span>10</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-recent-course-wrap mb-40">
                        <div class="sidebar-title mb-40">
                            <h4>Key Features</h4>
                        </div>
                        <div class="over-view-list">

                            <div class="sin-over-view-list">

                                <div class="course-list-icon">
                                    <i class="fa fa-check"></i> .
                                </div>
                                <div class="course-list-content">
                                    <p>Minimum Qualification to become a registered Pharmacist, Practice Oriented Curriculum, Mandatory Practical training (app.500 hrs) in hospital or Pharmacy</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="over-view-list">
                        <div class="sidebar-title mb-40">
                            <h4>Career Prospects</h4>
                        </div>
                        <div class="sin-over-view-list">

                            <div class="course-list-icon">
                                <i class="fa fa-check"></i> .
                            </div>
                            <div class="course-list-content">
                                <p>Retail Pharmacist, Hospital Pharmacist, Defense Services, Pharmaceutical Manufacturing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo seo_faq($seo); ?>

<?php require "application-process.php" ?>
<div class="brand-logo-area pt-45 pb-130">
    <div class="container">
        <h2 class="text-center mt-3 mb-3">Industry Partner</h2>
        <div class="brand-logo-active owl-carousel">
            <div class="single-brand-logo">
                <img src="assets/img/brand-logo/1.webp" alt="Max Healthcare – recruiter at Maya Devi University">
            </div>
            <div class="single-brand-logo">
                <img src="assets/img/brand-logo/2.webp" alt="Abbott – recruiter at Maya Devi University">
            </div>
            <div class="single-brand-logo">
                <img src="assets/img/brand-logo/3.webp" alt="Aloha on the Ganges – recruiter at Maya Devi University">
            </div>
            <div class="single-brand-logo">
                <img src="assets/img/brand-logo/4.webp" alt="Apollo Pharmacy – recruiter at Maya Devi University">
            </div>
            <div class="single-brand-logo">
                <img src="assets/img/brand-logo/5.webp" alt="Bajaj Finserv – recruiter at Maya Devi University">
            </div>
            <div class="single-brand-logo">
                <img src="assets/img/brand-logo/6.webp" alt="Four Points by Sheraton – recruiter at Maya Devi University">
            </div>
            <div class="single-brand-logo">
                <img src="assets/img/brand-logo/7.webp" alt="Geetanjali Homestate – recruiter at Maya Devi University">
            </div>
            <div class="single-brand-logo">
                <img src="assets/img/brand-logo/8.webp" alt="Jagran Solutions – recruiter at Maya Devi University">
            </div>
            <div class="single-brand-logo">
                <img src="assets/img/brand-logo/9.webp" alt="Justdial – recruiter at Maya Devi University">
            </div>
            <div class="single-brand-logo">
                <img src="assets/img/brand-logo/10.webp" alt="Marriott International – recruiter at Maya Devi University">
            </div>
            <div class="single-brand-logo">
                <img src="assets/img/brand-logo/11.webp" alt="Nectar Lifesciences (NecLife) – recruiter at Maya Devi University">
            </div>
            <div class="single-brand-logo">
                <img src="assets/img/brand-logo/12.webp" alt="PAN Seeds – recruiter at Maya Devi University">
            </div>
            <div class="single-brand-logo">
                <img src="assets/img/brand-logo/13.webp" alt="Paytm – recruiter at Maya Devi University">
            </div>
            <div class="single-brand-logo">
                <img src="assets/img/brand-logo/14.webp" alt="PlanetSpark – recruiter at Maya Devi University">
            </div>
        </div>
    </div>
</div>

<?php require "common/footer.php" ?>
<style>
    .single-brand-logo img {
        width: 150px;
        height: 100px;
        object-fit: contain;
        display: block;
        margin: auto;
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $('.brand-logo-active').owlCarousel({
            loop: true,
            margin: 20,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            smartSpeed: 800,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 6
                }
            }
        });
    });
</script>