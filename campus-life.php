<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Life | A Vibrant Environment for Learning & Growth</title>

    <meta name="description" content="Explore our college campus life, including clubs, sports, festivals, hostel experience, food court, innovation centers, leadership programs, cultural activities, and a supportive learning environment.">
 <link rel="shortcut icon" type="image/x-icon" href="assets/uploads/logo/favicon-CqYW0pAm.ico">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php
$page_title = "Campus Life at Maya Devi University | Dehradun";
$page_description = "Explore vibrant campus life at Maya Devi University, Dehradun with modern infrastructure, clubs, sports, and student activities.";
$canonical_url = "https://maya.edu.in/campus-life.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
    </head>

<body>
<style>
    :root {
        --theme-color: #00a651;
    }

    .hero-section {
        background: url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
        min-height: 70vh;
        display: flex;
        align-items: center;
        color: white;
        position: relative;
    }
    .hero-overlay {
        position: absolute;
        inset: 0;
        background: rgba(0,0,0,0.55);
    }
    .hero-content {
        position: relative;
        z-index: 5;
    }

    .section-title {
        font-weight: 700;
        font-size: 2.1rem;
        color: var(--theme-color);
    }

    .btn-primary {
        background-color: var(--theme-color) !important;
        border-color: var(--theme-color) !important;
    }
    .btn-primary:hover {
        background-color: #008f46 !important;
        border-color: #008f46 !important;
    }

    .icon-box {
        padding: 25px;
        border-radius: 10px;
        background: #f8f9fa;
        text-align: center;
        transition: .3s;
        border-top: 4px solid var(--theme-color);
    }
    .icon-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    }

    .gallery img {
        width: 100%;
        height: 230px;
        object-fit: cover;
        border-radius: 8px;
    }

    .facility-img {
        width: 100%;
        border-radius: 8px;
        height: 300px;
        object-fit: cover;
    }

    /* CTA section with green theme */
    .cta-section {
        background-color: var(--theme-color);
        color: white;
    }

    /* If you want green borders */
    .card {
        border: 1px solid #e7e7e7;
    }
    .card-title {
        color: var(--theme-color);
    }

    /* Hover accent for links */
    a:hover {
        color: var(--theme-color) !important;
    }
@media (max-width: 768px) {
   .hero-section {
        background: url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
        min-height: 30vh;
        display: flex;
        align-items: center;
        color: white;
        position: relative;
    }
}
   
</style>

<!-- HEADER INCLUDE -->
<?php require "common/header.php" ?>

<!-- HERO SECTION -->
<section class="hero-section">
    <div class="hero-overlay"></div>
    <div class="container text-center hero-content">
        <h1 class="display-4 fw-bold text-white">Campus Life</h1>
        <p class="lead mt-3 w-75 mx-auto text-white">
            A dynamic and inclusive campus environment designed to inspire creativity, learning, culture, and personal growth.
        </p>
    </div>
</section>


<!-- ABOUT SECTION -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center">A Place Where Students Thrive</h2>
        <p class="text-center w-75 mx-auto">
            Our campus life is more than academics — it’s a blend of innovation, community, culture, and opportunities. 
            Students experience a balanced environment that nurtures skills, encourages participation, and builds lifelong memories.
        </p>
    </div>
</section>


<!-- STUDENT CLUBS & ORGANIZATIONS -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-4">Student Clubs & Organizations</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="assets/uploads/cultural.webp" class="card-img-top">
                    <div class="card-body">
                        <h5 class="fw-bold">Cultural & Arts Club</h5>
                        <p>A hub of creativity that promotes dance, drama, fine arts, music, and cultural festivals throughout the year.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="assets/uploads/technology.webp" class="card-img-top">
                    <div class="card-body">
                        <h5 class="fw-bold">Technology & Coding Club</h5>
                        <p>Workshops, hackathons, AI projects, app development, and robotics — a place for innovators and problem-solvers.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="assets/uploads/sports.webp" class="card-img-top">
                    <div class="card-body">
                        <h5 class="fw-bold">Sports Club & Athletics</h5>
                        <p>Students participate in cricket, football, volleyball, athletics, indoor games, and intercollegiate competitions.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- SPORTS SECTION -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title mb-4 text-center">Sports & Yoga</h2>
        <p class="text-center mb-5">
            Our well-maintained courts, grounds, and fitness centers encourage a healthy and energetic lifestyle for students.
        </p>

        <div class="row g-4">
            <div class="col-md-4"><img class="facility-img" src="assets/uploads/sports-2.webp"></div>
            <div class="col-md-4"><img class="facility-img" src="assets/uploads/sports.webp"></div>
            <div class="col-md-4"><img class="facility-img" src="assets/uploads/yoga.webp"></div>
        </div>
    </div>
</section>


<!-- CAMPUS FACILITIES -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title mb-4 text-center">World-Class Facilities</h2>

        <div class="row g-4">
            <div class="col-md-6">
                <h4 class="fw-bold">Modern Library & Digital Learning Center</h4>
                <p>
                    Our library provides access to thousands of books, journals, e-resources, group study 
                    rooms, and quiet spaces — creating the perfect academic atmosphere.
                </p>
            </div>
            <div class="col-md-6">
                <img src="assets/uploads/library.png" class="facility-img">
            </div>

            <div class="col-md-6">
                <img src="assets/uploads/b.tech-electric-2.webp" class="facility-img">
            </div>
            <div class="col-md-6">
                <h4 class="fw-bold">Laboratories & Research Spaces</h4>
                <p>
                    Equipped with the latest tools and technology, our labs encourage students to engage in 
                    hands-on learning and innovative research.
                </p>
            </div>

            <div class="col-md-6">
                <h4 class="fw-bold">Hostels & Student Residences</h4>
                <p>
                    Comfortable and secure accommodation with modern amenities, recreational rooms, and 
                    friendly residential staff ensures a homely environment.
                </p>
            </div>
            <div class="col-md-6">
                <img src="assets/uploads/hostel.jpg" class="facility-img">
            </div>
        </div>
    </div>
</section>
<!-- NEW SECTION: HEALTH & WELLNESS -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-4">Health & Wellness</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="icon-box shadow-sm">
                    <h5 class="fw-bold">On-Campus Medical Center</h5>
                    <p>Qualified medical professionals available for routine checkups and emergencies.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="icon-box shadow-sm">
                    <h5 class="fw-bold">Fitness & Gym</h5>
                    <p>A fully equipped gym helping students maintain fitness and well-being.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="icon-box shadow-sm">
                    <h5 class="fw-bold">Counseling & Support</h5>
                    <p>Professional counselors provide academic, emotional, and personal guidance.</p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- NEW SECTION: CAMPUS FESTIVALS & EVENTS -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-4">Campus Festivals & Events</h2>
        <p class="text-center w-75 mx-auto mb-5">
            Our college hosts a wide range of festivals, annual events, competitions, and celebrations that bring the entire 
            community together with enthusiasm and creativity.
        </p>

        <div class="row g-4">
            <div class="col-md-6">
                <img class="facility-img" src="assets/uploads/event.webp">
            </div>

            <div class="col-md-6">
                <h4 class="fw-bold">Annual Cultural Festival</h4>
                <p>Music, dance, drama, talent shows, and numerous artistic competitions celebrated with vibrant energy.</p>

                <h4 class="fw-bold mt-4">Technical Fest & Hackathons</h4>
                <p>Innovation challenges, coding marathons, project presentations, and robotic competitions.</p>

                <h4 class="fw-bold mt-4">Sports Week</h4>
                <p>A massive event featuring inter-department and intercollegiate matches in multiple sports.</p>
            </div>
        </div>
    </div>
</section>


<!-- NEW SECTION: CANTEEN & FOOD COURT -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-4">Canteen & Food Court</h2>

        <div class="row g-4">
            <div class="col-md-6">
                <p>
                    Our food court offers hygienic meals, snacks, beverages, and cuisine options for students. 
                    From quick bites to full meals, it’s a favorite hangout spot during breaks.
                </p>
                <ul>
                    <li>Affordable and nutritious meals</li>
                    <li>Indoor & outdoor seating</li>
                    <li>Multiple cuisine counters</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img class="facility-img" src="assets/uploads/food-court.webp">
            </div>
        </div>
    </div>
</section>


<!-- NEW SECTION: TRANSPORTATION -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-4">Transportation</h2>

        <p class="text-center mb-4">
            The college provides safe and reliable transportation facilities for students coming from nearby towns and cities.
        </p>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="icon-box shadow-sm">
                    <h5 class="fw-bold">College Buses</h5>
                    <p>Covering major routes with trained drivers and attendants.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="icon-box shadow-sm">
                    <h5 class="fw-bold">Parking Area</h5>
                    <p>Designated parking for bikes, bicycles, and cars with security monitoring.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="icon-box shadow-sm">
                    <h5 class="fw-bold">Accessibility</h5>
                    <p>Easy connectivity to railway stations, bus stands, and city transit points.</p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- GALLERY SECTION -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-4">Campus Gallery</h2>

        <div class="row g-4 gallery">
            <div class="col-md-3"><img src="assets/uploads/campus-1.webp"></div>
            <div class="col-md-3"><img src="assets/uploads/transport.webp"></div>
            <div class="col-md-3"><img src="assets/uploads/auditorium.jpg"></div>
            <div class="col-md-3"><img src="assets/uploads/ba-7.webp"></div>
            <div class="col-md-3"><img src="assets/uploads/ai.jpeg"></div>
            <div class="col-md-3"><img src="assets/uploads/campus-3.jpeg"></div>
            <div class="col-md-3"><img src="assets/uploads/campus-4.jpeg"></div>
            <div class="col-md-3"><img src="assets/uploads/campus-5.jpeg"></div>
             <div class="col-md-3"><img src="assets/uploads/campus-6.jpeg"></div>
            <div class="col-md-3"><img src="assets/uploads/campus-7.jpeg"></div>
            <div class="col-md-3"><img src="assets/uploads/campus-8.jpeg"></div>
            <div class="col-md-3"><img src="assets/uploads/campus-9.jpeg"></div>
        </div>
    </div>
</section>


<!-- CTA -->
<section class="py-5 text-center text-white" style="background-color: #00a651;">
    <div class="container">
        <h2 class="fw-bold text-white">Ready to Experience Our Campus?</h2>
        <p class="lead mb-4 text-white">Visit us and explore the energy, culture, and opportunities waiting for you.</p>
        <a href="https://admissions.maya.edu.in" class="btn btn-light btn-lg fw-bold">Contact Admissions</a>
    </div>
</section>


<!-- FOOTER INCLUDE -->
<?php require "common/footer.php" ?>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
