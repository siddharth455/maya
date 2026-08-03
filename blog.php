<?php
$page_title = "University Blog | Maya Devi University Dehradun";
$page_description = "Read the latest updates, academic news, research insights, and campus activities at Maya Devi University, Dehradun.";
$canonical_url = "https://maya.edu.in/blog.php";
$og_image = "https://maya.edu.in/assets/uploads/maya.webp";
?>
<?php require "common/header.php"?>

<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95" style="background-image:url(assets/uploads/maya.webp);">
        <div class="container">
            <h2>Blogs</h2>
            <p>Explore the latest insights, campus stories, and academic innovations from Maya Devi University — where ideas shape the future.</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Blog Grid</span></li>
            </ul>
        </div>
    </div>
</div>

<div class="event-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <!-- Blog Grid -->
            <div class="col-xl-9 col-lg-8">
                <div class="blog-all-wrap mr-40">
                    <div class="row">

                        <!-- NOTE: this is now a fully static page. To add a new blog post,
                             create a new blog-{slug}.php file (copy an existing one as a template)
                             and add a matching card below. -->

                        <!-- Blog 1: Computer Engineering -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex mb-3">
                            <div class="single-blog d-flex flex-column" style="flex:1;">
                                <div class="blog-img">
                                    <a href="computer-engineering-at-maya-devi-university.php">
                                        <img src="assets/uploads/computer-blog.png" alt="Building Future Technologists: Computer Engineering at Maya Devi University">
                                    </a>
                                </div>
                                <div class="blog-content-wrap d-flex flex-column flex-grow-1">
                                    <span>Computer Engineering</span>
                                    <div class="blog-content flex-grow-1">
                                        <h4>
                                            <a href="computer-engineering-at-maya-devi-university.php">Building Future Technologists: Computer Engineering at Maya Devi University</a>
                                        </h4>
                                        <p>Study B.Tech CSE, AI & ML, Data Science & Cyber Security at Maya Devi University, a top computer engineering college in Dehradun...</p>
                                    </div>
                                    <div class="blog-meta d-flex justify-content-between align-items-center mt-auto">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i> Maya Devi University</a></li>
                                        </ul>
                                        <div class="blog-date">
                                            <a href="#"><i class="fa fa-calendar-o"></i> 2026-01-20</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Blog 2: Agriculture -->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex mb-3">
                            <div class="single-blog d-flex flex-column" style="flex:1;">
                                <div class="blog-img">
                                    <a href="agriculture-at-maya-devi-university.php">
                                        <img src="assets/uploads/blog-agriculture-at-maya-devi-university.webp" alt="Agriculture at Maya Devi University">
                                    </a>
                                </div>
                                <div class="blog-content-wrap d-flex flex-column flex-grow-1">
                                    <span>agriculture</span>
                                    <div class="blog-content flex-grow-1">
                                        <h4>
                                            <a href="agriculture-at-maya-devi-university.php">Agriculture at Maya Devi University</a>
                                        </h4>
                                        <p>About The School of Agriculture and Technology, Maya Devi University, Selaqui, Dehradun is a dynamic academic...</p>
                                    </div>
                                    <div class="blog-meta d-flex justify-content-between align-items-center mt-auto">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i> Maya Devi University</a></li>
                                        </ul>
                                        <div class="blog-date">
                                            <a href="#"><i class="fa fa-calendar-o"></i> 2025-09-07</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar-style">
                    <!-- About Us -->
                    <div class="sidebar-about mb-40">
                        <div class="sidebar-title mb-15"><h4>About Us</h4></div>
                        <p>Maya Devi University, Dehradun, is dedicated to fostering academic excellence and holistic development through innovative education, research, and industry collaboration.</p>

                        <div class="sidebar-social">
                            <ul>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="sidebar-tag-wrap mb-35">
                        <div class="sidebar-title mb-40"><h4>Categories</h4></div>
                        <div class="sidebar-tag">
                            <ul>
                                <li><span class="badge-tag">Computer Engineering</span></li>
                                <li><span class="badge-tag">agriculture</span></li>
                                <li><span class="badge-tag">education</span></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<style>
.single-blog {
    display: flex;
    flex-direction: column;
    height: 100%;
    border: 1px solid #eee;
    border-radius: 8px;
    overflow: hidden;
    background: #fff;
}
.single-blog .blog-img {
    width: 100%;
    height: 200px;
    overflow: hidden;
    flex-shrink: 0;
}
.single-blog .blog-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.single-blog .blog-content-wrap > span {
    display: inline-block !important;
    background-color: #00a651 !important;
    color: #ffffff !important;
    font-size: 13px !important;
    font-weight: 600 !important;
    padding: 4px 12px !important;
    border-radius: 4px !important;
    text-transform: capitalize !important;
    margin-bottom: 10px !important;
    width: fit-content !important;
}
.single-blog .blog-content {
    flex-grow: 2;
}
.badge-tag {
    display:inline-block;
    padding:4px 12px;
    background:#f2f2f2;
    border-radius:3px;
    font-size:13px;
}
</style>

<?php require "common/footer.php"?>
