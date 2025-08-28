<?php require "common/header.php" ?>
<style>
    /* Card Styling */
    .fest-card {
        background: linear-gradient(135deg, #e8f5e9, #f1f8e9);
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .fest-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
    }

    /* Button Styling */
    .btn-fest {
        border-radius: 50px;
        padding: 12px 30px;
        font-weight: 600;
        font-size: 1rem;
        box-shadow: 0 4px 12px rgba(25, 135, 84, 0.3);
        transition: all 0.3s ease;
    }

    .btn-fest:hover {
        background: #157347 !important;
        box-shadow: 0 6px 18px rgba(25, 135, 84, 0.5);
        transform: scale(1.05);
    }

    /* Circle Icons */
    .circle-icon {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #ffffff;
        border: 2px solid #e0e0e0;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .circle-icon i {
        font-size: 2rem;
        transition: color 0.3s ease;
        color: #198754;
    }

    .circle-icon:hover {
        background: #198754;
        transform: translateY(-6px) scale(1.05);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
    }

    .circle-icon:hover i {
        color: #fff;
    }

    .circle-icon.active {
        background: #198754;
        border: none;
        color: #fff;
    }

    .circle-icon.active i {
        color: #fff;
    }

    .section-btn {
        background-color: #e9f5ef;
        color: #0f5132;
        font-weight: 600;
        border-radius: 50px;
        padding: 6px 18px;
        font-size: 14px;
        transition: all 0.3s ease-in-out;
    }

    .section-btn:hover {
        background-color: #198754;
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .section-title {
        font-size: 2.2rem;
        font-weight: 700;
        color: #212529;
    }

    .section-title span {
        color: #198754;
    }

    .section-subtitle {
        font-style: italic;
        color: #495057;
        font-size: 1.1rem;
    }

    .section-text {
        color: #495057;
        font-size: 1rem;
        line-height: 1.7;
        max-width: 800px;
        margin: 0 auto;
    }

    .object-fit-cover {
        object-fit: cover;
    }

    .stat-card {
        background: rgba(255, 255, 255, 0.12);
        border-radius: 16px;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.25);
        transition: all 0.3s ease-in-out;
    }

    .stat-card h3 {
        font-size: 2.2rem;
        margin-bottom: 10px;
    }

    .stat-card p {
        font-size: 1.1rem;
        opacity: 0.9;
    }

    .stat-card:hover {
        background: rgba(255, 255, 255, 0.25);
        transform: translateY(-8px) scale(1.03);
        box-shadow: 0 10px 28px rgba(0, 0, 0, 0.35);
    }

    .circle {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.08);
        /* soft transparent white */
        z-index: 1;
    }

    .circle1 {
        width: 220px;
        height: 220px;
        top: -30px;
        left: -60px;
    }

    .circle2 {
        width: 300px;
        height: 300px;
        bottom: -100px;
        right: -80px;
    }

    section .container {
        position: relative;
        z-index: 2;
    }

    /* Outer section with gradient border */
    .anti-ragging-section {
        background: #fff;
        padding: 60px 20px;
        border-radius: 16px;
        border: 10px solid transparent;
        background-origin: border-box;
        background-clip: content-box, border-box;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        text-align: center;
    }

    .anti-ragging-section h2 {
        font-weight: 700;
        color: #0e4d38;
    }

    .commitment-list {
        text-align: left;
        margin-top: 30px;
    }

    .commitment-list li {
        margin-bottom: 12px;
        font-size: 16px;
    }

    /* Policy Card */
    .policy-card {
        background: #fff5f5;
        border: 2px solid #f3caca;
        border-radius: 12px;
        padding: 25px;
        text-align: center;
        transition: all 0.3s ease;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.05);
    }

    .policy-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.12);
    }

    .policy-card .icon {
        font-size: 40px;
        color: #e63946;
        margin-bottom: 15px;
    }

    .policy-card h5 {
        font-weight: 600;
        margin-bottom: 10px;
    }

    /* Buttons */
    .btn-download {
        background: #e63946;
        color: #fff;
        font-weight: 600;
        border-radius: 8px;
        padding: 10px 20px;
        margin-top: 10px;
        transition: all 0.3s ease;
    }

    .btn-affidavit {
        background: #0e4d38;
        color: #fff;
        font-weight: 600;
        border-radius: 8px;
        padding: 10px 20px;
        margin-top: 10px;
        transition: all 0.3s ease;
    }

    .btn-download:hover {
        background: #c71f2d;
        transform: scale(1.05);
    }

    .btn-affidavit:hover {
        background: #093626;
        transform: scale(1.05);
    }

    .campus-banner {
        background: linear-gradient(rgba(14, 77, 56, 0.85), rgba(14, 77, 56, 0.85)),
            url("https://picsum.photos/1920/600?blur=2") center/cover no-repeat;
        min-height: 350px;
        padding: 80px 20px;
    }

    .campus-banner h1 {
        font-size: 3rem;
        text-transform: uppercase;
    }

    .campus-banner p {
        max-width: 700px;
        margin: auto;
        font-size: 1.2rem;
    }
</style>
</head>

<body>

    <section class="campus-banner d-flex align-items-center text-center text-white">
        <div class="container">
            <h1 class="fw-bold text-white">Campus Life</h1>
            <p class="lead mt-3 text-white">
                Discover the vibrant community, state-of-the-art facilities, and unforgettable experiences that await you.
            </p>
        </div>
    </section>

    <div class="container my-5">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center p-4 bg-light border rounded shadow-sm">

            <!-- Left: Icon + Text -->
            <div class="d-flex align-items-center mb-3 mb-md-0">
                <div class="me-3 fs-3 text-success">⚡</div>
                <div>
                    <h5 class="mb-1 fw-bold text-success">Fest Registration Now Open!</h5>
                    <p class="mb-0 text-muted">Don't miss out on the biggest cultural event of the year.</p>
                </div>
            </div>

            <!-- Right: Button -->
            <a href="#" class="btn btn-success shadow-sm">
                Register Now →
            </a>
        </div>
    </div>

    <div class="container my-5 text-center">
        <!-- Heading -->
        <h2 class="fw-bold display-5">
            A <span class="text-success">Vibrant</span> University Experience
        </h2>

        <!-- Paragraph -->
        <p class="mt-3 fs-5 text-muted">
            At our university, campus life is a dynamic blend of academic excellence, cultural
            diversity, and personal growth. Explore our world-class facilities, engage in
            exciting activities, and join a community that inspires greatness.
        </p>
    </div>

    <div class="container">
        <div class="container my-5 text-center">
            <!-- Card -->
            <div class="fest-card mb-5">
                <h3 class="fw-bold text-success mb-3">Ready to Join the Fest?</h3>
                <p class="text-muted fs-5">
                    Be part of the most anticipated cultural celebration. Register now to showcase your talents and
                    create unforgettable memories!
                </p>
                <a href="#" class="btn btn-success btn-fest">
                    <i class="bi bi-lightning-charge-fill me-2"></i> Register for Fest
                </a>
            </div>

            <!-- Icon Row -->
            <div class="row justify-content-center g-4">
                <div class="col-4 col-md-2">
                    <div class="d-flex flex-column align-items-center">
                        <div class="circle-icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <p class="mt-2 mb-0">Campus</p>
                    </div>
                </div>

                <div class="col-4 col-md-2">
                    <div class="d-flex flex-column align-items-center">
                        <div class="circle-icon active">
                            <i class="bi bi-house-door-fill"></i>
                        </div>
                        <p class="mt-2 mb-0 text-success fw-bold">Hostel</p>
                    </div>
                </div>

                <div class="col-4 col-md-2">
                    <div class="d-flex flex-column align-items-center">
                        <div class="circle-icon">
                            <i class="bi bi-person"></i>
                        </div>
                        <p class="mt-2 mb-0">Sports</p>
                    </div>
                </div>

                <div class="col-4 col-md-2">
                    <div class="d-flex flex-column align-items-center">
                        <div class="circle-icon">
                            <i class="bi bi-bell"></i>
                        </div>
                        <p class="mt-2 mb-0">Fest</p>
                    </div>
                </div>

                <div class="col-4 col-md-2">
                    <div class="d-flex flex-column align-items-center">
                        <div class="circle-icon">
                            <i class="bi bi-book"></i>
                        </div>
                        <p class="mt-2 mb-0">Library</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="py-5 text-center">
        <div class="container">
            <!-- Button -->
            <a href="#" class="section-btn d-inline-block mb-3">Explore Hostel</a>

            <!-- Heading -->
            <h2 class="section-title mb-3">Hostel <span>Life</span></h2>

            <!-- Subtitle -->
            <p class="section-subtitle mb-4">
                "Experience comfortable and modern living in our thoughtfully designed hostels, tailored to support student success."
            </p>

            <!-- Description -->
            <p class="section-text">
                Our hostels provide a home away from home, with spacious rooms, high-speed internet, and vibrant common areas for socializing and relaxation.
                With 24/7 security and dedicated staff, we ensure a safe and nurturing environment where students can focus on their academic and personal growth.
            </p>
        </div>
    </section>

    <div class="container my-5">
        <div class="row g-3">
            <!-- Left big image -->
            <div class="col-lg-6">
                <img src="images/hostel1.jpg" class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover" alt="Main Hostel Image">
            </div>

            <!-- Right side grid -->
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6">
                        <img src="images/hostel2.jpg" class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover" alt="Hostel Life 1">
                    </div>
                    <div class="col-6">
                        <img src="images/hostel3.jpg" class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover" alt="Hostel Life 2">
                    </div>
                    <div class="col-6">
                        <img src="images/hostel4.jpg" class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover" alt="Hostel Life 3">
                    </div>
                    <div class="col-6">
                        <img src="images/hostel5.jpg" class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover" alt="Hostel Life 4">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="py-5 container-fluid container position-relative overflow-hidden" style="background-color: #00a651; border-radius: 16px;">

        <!-- Background Circles -->
        <div class="circle circle1"></div>
        <div class="circle circle2"></div>
        <div class="circle circle3"></div>

        <div class="container text-center text-white position-relative">
            <h2 class="fw-bold mb-4 display-6 text-white">Join Our Vibrant Community</h2>
            <p class="mb-5 lead text-white" style="max-width: 780px; margin: auto; line-height: 1.8;">
                Experience a transformative journey where academic excellence meets personal growth.
                Our campus life provides endless opportunities to discover your passions, forge lifelong friendships,
                and build the foundation for your future success.
            </p>

            <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <div class="p-5 stat-card text-white">
                        <h3 class="fw-bold text-white">95%</h3>
                        <p class="mb-0 text-white">Student Satisfaction</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-5 stat-card text-white">
                        <h3 class="fw-bold text-white">50+</h3>
                        <p class="mb-0 text-white">Student Organizations</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-5 stat-card text-white">
                        <h3 class="fw-bold text-white">100%</h3>
                        <p class="mb-0 text-white">WiFi Coverage</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="anti-ragging-section container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="mb-3">
                    <i class="bi bi-exclamation-triangle-fill text-danger" style="font-size: 50px;"></i>
                </div>
                <h2>Anti Ragging</h2>
                <p class="mt-3">
                    We maintain a zero-tolerance policy against ragging. Our comprehensive anti-ragging
                    measures ensure a safe and welcoming environment for all students.
                </p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6 commitment-list">
                <h5 class="fw-bold mb-3">Our Commitment</h5>
                <ul class="list-unstyled">
                    <li><i class="bi bi-check2-circle text-success me-2"></i> Strict enforcement of anti-ragging policies</li>
                    <li><i class="bi bi-check2-circle text-success me-2"></i> 24/7 helpline for reporting incidents</li>
                    <li><i class="bi bi-check2-circle text-success me-2"></i> Regular awareness programs and workshops</li>
                    <li><i class="bi bi-check2-circle text-success me-2"></i> Immediate action against any reported cases</li>
                </ul>
            </div>

            <div class="col-md-6">
                <div class="policy-card">
                    <div class="icon">
                        <i class="bi bi-file-earmark-text-fill"></i>
                    </div>
                    <h5>Anti Ragging Policy</h5>
                    <p>Download our comprehensive anti-ragging policy document</p>
                    <a href="#" class="btn btn-download d-block"><i class="bi bi-file-earmark-pdf me-2"></i>Download PDF</a>
                    <a href="#" class="btn btn-affidavit d-block mt-2"><i class="bi bi-file-earmark-check me-2"></i>Anti-Ragging Affidavit Form</a>
                </div>
            </div>
        </div>
    </section>

    <section class="anti-ragging-section container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="mb-3">
                    <!-- <i class="bi bi-exclamation-triangle-fill text-danger" style="font-size: 50px;"></i> -->
                </div>
                <h2>International Complaint Committee (ICC)</h2>
                <p class="mt-3">
                    Our ICC ensures a safe and inclusive environment for all students, addressing complaints related to harassment and discrimination.
                </p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6 commitment-list">
                <h5 class="fw-bold mb-3">Committee Functions</h5>
                <ul class="list-unstyled">
                    <li><i class="bi bi-check2-circle text-success me-2"></i>Address complaints of sexual harassment</li>
                    <li><i class="bi bi-check2-circle text-success me-2"></i>Provide support and counseling services</li>
                    <li><i class="bi bi-check2-circle text-success me-2"></i>Conduct awareness and prevention programs</li>
                    <li><i class="bi bi-check2-circle text-success me-2"></i>Ensure confidentiality and fair investigation</li>
                </ul>
            </div>

            <div class="col-md-6">
                <div class="policy-card">
                    <div class="icon">
                        <i class="bi bi-file-earmark-text-fill" style="color:#007bff;"></i>
                    </div>
                    <h5>ICC Guidelines</h5>
                    <p>Download our ICC policy and complaint procedures</p>
                    <a href="#" class="btn btn-affidavit d-block mt-2"><i class="bi bi-file-earmark-check me-2"></i>Download PDF</a>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
<?php require "common/footer.php" ?>