<?php
$page_title = "Best BCA College in Dehradun 2027 | AI, Data Science | MDU";
$page_description = "BCA admission 2027 at Maya Devi University, Dehradun. 3-year BCA with AI & ML, Data Science and Cyber Security options and project-based learning.";
$canonical_url = "https://maya.edu.in/best-bca-college-in-dehradun-uttarakhand.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";

// Batch 2 SEO content: intro, at-a-glance table, why-choose list and FAQs (schema matches visible FAQs)
require_once "common/course-seo.php";
$seo = course_seo("bca");
$page_schema = ($page_schema ?? "") . seo_faq_schema($seo);

// Course schema (Batch 3): name, overview, credential and duration from this page
require_once "common/course-schema.php";
$page_schema = ($page_schema ?? "") . course_schema([
    "name" => 'Bachelor of Computer Applications (BCA)',
    "description" => seo_plain($seo["intro"][0]),
    "credential" => 'Bachelor\'s degree',
    "time" => "P3Y",
]);
?>
<?php require "common/header.php" ?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" style="background-image:url(assets/uploads/bca.webp);">
        <div class="container">
            <h1 class="seo-banner-h1">Best BCA College in Dehradun – Bachelor of Computer Applications at Maya Devi University</h1>
            <p><?php echo $seo["intro"][0]; ?></p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>BCA</span></li>
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
                        <img src="assets/uploads/bca.webp" alt="Bachelor of Computer Applications (BCA) at Maya Devi University">
                        <div class="course-apply-btn">
                            <a href="https://admissions.maya.edu.in" class="default-btn">APPLY NOW</a>
                        </div>
                    </div>
                    <div class="tab-content jump">
                        <div class="tab-pane active mt-5" id="course-details-1">
                            <div class="over-view-content">
                                <h4>COURSE  DETAILS</h4>
                                <h5>Course Name : Bachelor of Computer Applications (BCA)</h5>
                                <?php echo seo_css(); ?>
                                <div class="seo-intro"><p><?php echo $seo["intro"][1]; ?></p></div>
                                <?php echo seo_glance($seo); ?>
                                <?php echo seo_why($seo); ?>

                                <div class="over-view-list">
                                <h2>Eligibility Criteria</h2>
                                    <div class="sin-over-view-list">
                                       
                                        <div class="course-list-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="course-list-content">
                                            <p>Candidate must have completed 10+2 (Class 12th) or equivalent examination from a recognized board.</p>
                                        </div>
                                    </div>
                                    <div class="sin-over-view-list">
                                        <div class="course-list-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="course-list-content">
                                            <p>There is usually no specific stream requirement, so students from Science, Commerce, or Arts streams are generally eligible.</p>
                                        </div>
                                    </div>
                                    <div class="sin-over-view-list">
                                        <div class="course-list-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="course-list-content">
                                            <p>Some institutes may require Mathematics as a compulsory subject at the 10+2 level. </p>
                                        </div>
                                    </div>
                                </div>
                                <h2>More Details</h2>
                                <div class="course-summary-wrap mt-4">
                                    
                                    <div class="single-course-summary">
                                        <h4>Total Students</h4>
                                        <span><i class="fa fa-user"></i> 60</span>
                                    </div>
                                    <div class="single-course-summary">
                                        <h4>Course Duration</h4>
                                        <span><i class="fa fa-clock-o"></i> 3yrs</span>
                                    </div>
                                    <div class="single-course-summary">
                                        <h4>Course Credits</h4>
                                        <span><i class="fa fa-diamond"></i> 125</span>
                                    </div>
                                    <div class="single-course-summary">
                                        <h4>Total Semester</h4>
                                        <span><i class="fa fa-book"></i> 6</span>
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
                                    <a href="best-bca-ai-ml-college-in-dehradun-uttarakhand.php"><img class="animated" src="assets/uploads/ai.jpeg" alt="Students at computers during a session in a computer lab"></a>
                                </div>
                                <div class="course-content">
                                    <h4><a href="best-bca-ai-ml-college-in-dehradun-uttarakhand.php">BCA with Specialization in AI and ML (AIML)</a></h4>
                                    <p>Specialized BCA program focusing on AI and Machine Learning applications.</p>
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
                                        <a class="default-btn" href="best-bca-ai-ml-college-in-dehradun-uttarakhand.php">APPLY NOW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-course">
                                <div class="course-img">
                                    <a href="best-bca-data-science-college-in-dehradun-uttarakhand.php"><img class="animated" src="assets/uploads/data-science.webp" alt="BCA with Specialization in Data Science at Maya Devi University"></a>
                                </div>
                                <div class="course-content">
                                    <h4><a href="best-bca-data-science-college-in-dehradun-uttarakhand.php">BCA with Specialization in Data Science</a></h4>
                                    <p>BCA program with a focus on data science and analytics for IT applications.</p>
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
                                        <a class="default-btn" href="best-bca-data-science-college-in-dehradun-uttarakhand.php">APPLY NOW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-course">
                                <div class="course-img">
                                    <a href="best-bca-cyber-security-college-in-dehradun-uttarakhand.php"><img class="animated" src="assets/uploads/cyber-security.webp" alt="BCA with Specialization in Cyber Security at Maya Devi University"></a>
                                </div>
                                <div class="course-content">
                                    <h4><a href="best-bca-cyber-security-college-in-dehradun-uttarakhand.php">BCA with Specialization in Cyber Security</a></h4>
                                    <p>BCA program specializing in cyber security for protecting IT systems and data.</p>
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
                                        <a class="default-btn" href="best-bca-cyber-security-college-in-dehradun-uttarakhand.php">APPLY NOW</a>
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
                        <p>Maya Devi University’s BCA program equips students with strong technical skills in programming, software development, and emerging technologies. Supported by modern labs and expert faculty, the program blends theoretical learning with practical projects and industry exposure. Graduates are prepared for careers in software engineering, data science, AI, and other fast-growing technology domains worldwide.</p>
                       
                    </div>
                    
                    <div class="sidebar-category mb-40">
                        <div class="sidebar-title mb-40">
                            <h4>School Category</h4>
                        </div>
                        <div class="category-list">
                            <ul>
                                <li><a href="#">School of Engineering <span>13</span></a></li>
                                <li><a href="#">School of Pharmacy <span>07</span></a></li>
                                <li><a href="#">School of Nursing <span>03</span></a></li>
                                <li><a href="#">School of Commerce & Management <span>09</span></a></li>
                                <li><a href="#">School of Health Sciences <span>10</span></a></li>
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
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="course-list-content">
                                            <p>Programming in C and Java</p>
                                        </div>
                                    </div>
                                    <div class="sin-over-view-list">
                                        <div class="course-list-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="course-list-content">
                                            <p>Web Technologies</p>
                                        </div>
                                    </div>
                                    <div class="sin-over-view-list">
                                        <div class="course-list-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="course-list-content">
                                            <p>Database Management</p>
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
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="course-list-content">
                                            <p>Data Analyst</p>
                                        </div>
                                    </div>
                                    <div class="sin-over-view-list">
                                        <div class="course-list-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="course-list-content">
                                            <p>Business Intelligence (BI) Analyst</p>
                                        </div>
                                    </div>
                                    <div class="sin-over-view-list">
                                        <div class="course-list-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="course-list-content">
                                            <p>Data Engineer (Entry-Level)</p>
                                        </div>
                                    </div>
                                    <div class="sin-over-view-list">
                                        <div class="course-list-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="course-list-content">
                                            <p>Junior Data Scientist</p>
                                        </div>
                                    </div>
                                    <div class="sin-over-view-list">
                                        <div class="course-list-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="course-list-content">
                                            <p>Machine Learning Assistant / Intern</p>
                                        </div>
                                    </div>
                                    <div class="sin-over-view-list">
                                        <div class="course-list-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="course-list-content">
                                            <p>Data Science Consultant (Entry-Level)</p>
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
                <img src="assets/img/brand-logo/1.webp" alt="brand-logo">
            </div>
            <div class="single-brand-logo">
                <img src="assets/img/brand-logo/2.webp" alt="brand-logo">
            </div>
            <div class="single-brand-logo">
                <img src="assets/img/brand-logo/3.webp" alt="brand-logo">
            </div>
            <div class="single-brand-logo">
                <img src="assets/img/brand-logo/4.webp" alt="brand-logo">
            </div>
            <div class="single-brand-logo">
                <img src="assets/img/brand-logo/5.webp" alt="brand-logo">
            </div>
            <div class="single-brand-logo">
                <img src="assets/img/brand-logo/6.webp" alt="brand-logo">
            </div>
            <div class="single-brand-logo">
                <img src="assets/img/brand-logo/7.webp" alt="brand-logo">
            </div>
            <div class="single-brand-logo">
                <img src="assets/img/brand-logo/8.webp" alt="brand-logo">
            </div>
            <div class="single-brand-logo">
                <img src="assets/img/brand-logo/9.webp" alt="brand-logo">
            </div>
            <div class="single-brand-logo">
                <img src="assets/img/brand-logo/10.webp" alt="brand-logo">
            </div>
            <div class="single-brand-logo">
                <img src="assets/img/brand-logo/11.webp" alt="brand-logo">
            </div>
            <div class="single-brand-logo">
                <img src="assets/img/brand-logo/12.webp" alt="brand-logo">
            </div>
            <div class="single-brand-logo">
                <img src="assets/img/brand-logo/13.webp" alt="brand-logo">
            </div>
            <div class="single-brand-logo">
                <img src="assets/img/brand-logo/14.webp" alt="brand-logo">
            </div>
        </div>
    </div>
</div>

<?php require "common/footer.php"?>
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
    $(document).ready(function(){
      $('.brand-logo-active').owlCarousel({
        loop: true,
        margin: 20,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        smartSpeed: 800,
        responsive: {
          0: { items: 2 },
          600: { items: 4 },
          1000: { items: 6 }
        }
      });
    });
</script>