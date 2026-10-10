<?php
/* ==========================================================================
   Maya Devi University — NEW HOMEPAGE (test build)
   File:  new-index.php
   CSS :  assets/css/new-home.css   (separate, self-contained, namespaced .nx-)
   Note:  index.php is untouched. Preview at  /new-index.php
   ========================================================================== */

/* --- SEO variables consumed by common/header.php --------------------------- */
$page_title       = "Best Private University in Dehradun | Maya Devi University";
$page_description = "Maya Devi University is a leading private university in Dehradun, Uttarakhand offering B.Tech, B.Sc, MBA, MCA, Pharmacy, Nursing and more with modern infrastructure, expert faculty and strong placement support.";
$canonical_url    = "https://maya.edu.in/";
$og_image         = "https://maya.edu.in/assets/uploads/campus-2.jpeg";

/* --- Content data --------------------------------------------------------- */
$nx_programs = [
    'diploma' => [
        'label' => 'Diploma',
        'intro' => 'Practical, industry-relevant training that puts job-ready skills in your hands.',
        'more'  => 'Diploma-course.php',
        'items' => [
            ['Diploma in Pharmacy', 'best-d-pharma-college-in-dehradun-uttarakhand.php', 'assets/uploads/d.pharmacy.jpeg', '125', '2 Years', 'Trains students in pharmaceutical sciences, drug formulation and practical pharmacy skills.'],
            ['Diploma in Bakery &amp; Confectionary', 'diploma-in-confectionary.php', 'assets/uploads/bakery.webp', '125', '2 Years', 'A two-year course focusing on baking techniques, pastry arts, confectionery production and dessert presentation.'],
            ['Diploma in Food Production', 'diploma-in-food-production.php', 'assets/uploads/dhm.webp', '125', '2 Years', 'Focuses on culinary techniques, kitchen operations, food preparation and professional cookery standards.'],
            ['General Nursing and Midwifery (GNM)', 'gnm.php', 'assets/uploads/gnm.webp', '125', '3 Years', 'A diploma course training students in professional nursing, midwifery and patient care.'],
        ],
    ],
    'ug' => [
        'label' => 'Undergraduate',
        'intro' => 'Academic depth blended with real-world exposure and strong career foundations.',
        'more'  => 'undergraduate-course.php',
        'items' => [
            ['B.Tech. with Specialization in AI &amp; ML', 'b-tech-ai-ml.php', 'assets/uploads/ai.jpeg', '125', '4 Years', 'A focused program in Artificial Intelligence and Machine Learning covering neural networks and intelligent systems.'],
            ['B.Tech. with Specialization in Cyber Security', 'b.tech-cyber_security.php', 'assets/uploads/cyber-security.webp', '125', '4 Years', 'Specialised program in cyber security and digital forensics with IBM, focusing on threat detection and mitigation.'],
            ['B.Tech. Computer Science &amp; Engineering', 'b-tech-cse.php', 'assets/uploads/computer.webp', '125', '4 Years', 'Core program in computer science covering programming, algorithms, system design and software engineering.'],
            ['B.Tech. with Specialization in Data Science', 'b.tech-data_science.php', 'assets/uploads/data-science.webp', '125', '4 Years', 'Focused program on data science with IBM, covering data analysis, visualization and predictive modelling.'],
        ],
    ],
    'pg' => [
        'label' => 'Postgraduate',
        'intro' => 'Advanced expertise and research-driven learning for leadership roles.',
        'more'  => 'post-graduate.php',
        'items' => [
            ['M.Tech. in Structural Engineering', 'm.tech-structural-engineering.php', 'assets/uploads/b.tech-civil.jpg', '125', '2 Years', 'A two-year program focusing on advanced structural design, analysis and construction technologies.'],
            ['M.Tech. in Mechanical Engineering', 'm.tech-mechanical-engineering.php', 'assets/uploads/mtech-mechanical.webp', '125', '2 Years', 'Advanced study of design, development and construction of mechanical systems and thermal sciences.'],
            ['Master in Agriculture', 'master-in-agriculture.php', 'assets/uploads/agriculture.webp', '125', '2 Years', 'Advanced training in crop production, soil management and sustainable farming for research and leadership roles.'],
            ['M.Sc. in Genetics and Plant Breeding', 'genetics-and-plant-breeding.php', 'assets/uploads/genetics.webp', '125', '2 Years', 'Focuses on advanced plant genetics, crop improvement and research skills for modern agriculture.'],
        ],
    ],
];

$nx_blogs = [
    ['Best Universities for PhD in Dehradun (2026 Guide): Top Doctoral Programs, Research Scope &amp; Admissions', 'best-universities-for-phd-in-dehradun.php', 'assets/uploads/phd-blog.png', 'Research &amp; Doctoral Studies', '2026-05-10', '10 May 2026', 'Looking for the best universities for PhD in Dehradun? Explore Maya Devi University and other top PhD colleges with details on eligibility, admission process and scholarships.'],
    ['Best Nursing College in Dehradun for BSc &amp; GNM: Admission, Fees, Courses &amp; Career Opportunities (2026)', 'best-nursing-college-in-dehradun-bsc-gnm.php', 'assets/uploads/nursing-gnm-blog.png', 'Nursing', '2026-05-05', '05 May 2026', 'Explore the best nursing college in Dehradun offering B.Sc Nursing, GNM, ANM and M.Sc Nursing. Compare courses, eligibility, placements and career scope.'],
    ['B.Tech in Civil Engineering in Uttarakhand: Course Details, Top Colleges, Admission Process &amp; Fees (2026)', 'btech-civil-engineering-uttarakhand.php', 'assets/uploads/civil-blog.png', 'Engineering', '2026-04-30', '30 Apr 2026', 'Learn about course structure, career scope, fees, admission process and top colleges for B.Tech Civil Engineering in Uttarakhand.'],
    ['Best Private B.Ed Colleges in Dehradun: Admission, Fees, Eligibility, Entrance Exams &amp; Career Scope (2026)', 'private-bed-colleges-dehradun.php', 'assets/uploads/bed-blog.png', 'Education', '2026-04-26', '26 Apr 2026', 'Explore the best private B.Ed colleges in Dehradun for 2026 — eligibility, admission process, fees, entrance exams and placements.'],
    ['BBA Colleges in Dehradun: Course Details, Admission Process, Fees, Placements &amp; Career Scope (2026)', 'bba-colleges-in-dehradun.php', 'assets/uploads/bba-blog.png', 'Commerce &amp; Management', '2026-03-30', '30 Mar 2026', 'A detailed look at BBA course structure, fees, placements and career scope at the best BBA colleges in Dehradun.'],
    ['Restoring Lives, Rebuilding Abilities: The Ashtvakra School of Rehabilitation at Maya Devi University', 'rehabilitation-sciences-at-maya-devi-university.php', 'assets/uploads/rehabilitation-blog.png', 'Rehabilitation Sciences', '2026-03-25', '25 Mar 2026', 'Study rehabilitation sciences, physiotherapy and allied rehab programs at the Ashtvakra School of Rehabilitation, Dehradun.'],
];

$nx_events = [
    ['Mushroom Cultivation Training Session Encourages Agri-Entrepreneurship and Skill Development', 'event-mushroom-cultivation-training.php', 'assets/uploads/event-mushroom-cultivation-training.webp', 'Agriculture', '2026-05-11', '11 May 2026', 'The Department of Botany under the School of Life and Applied Sciences organised a hands-on training session on mushroom cultivation for students.'],
    ['School of Law and Legal Studies Students Visit Suddhowala Jail for Academic Exposure', 'event-jail-visit-law-students.php', 'assets/uploads/event-jail-visit-law-students.webp', 'Law', '2026-05-09', '09 May 2026', 'Students of the School of Law and Legal Studies participated in an educational visit as part of their practical learning in legal studies.'],
    ['Students Participate in Academic Exposure Visit at AIIMS Rishikesh', 'event-aiims-rishikesh-visit.php', 'assets/uploads/event-aiims-rishikesh-visit.webp', 'Health Sciences', '2026-05-07', '07 May 2026', 'An insightful visit exploring the future of anaesthesia through innovation, artificial intelligence and hands-on learning experiences.'],
    ['Students Visit Regional Sericulture Research Station, Sahaspur', 'event-sericulture-research-visit.php', 'assets/uploads/event-sericulture-research-visit.webp', 'Agriculture', '2026-05-06', '06 May 2026', 'An educational visit giving practical exposure to the sericulture industry and its role in sustainable agriculture.'],
];

$nx_schools = [
    ['Engineering &amp; Technology', 'engineering-at-maya-devi-university.php', 'fa-cogs'],
    ['Computer Applications', 'computer-engineering-at-maya-devi-university.php', 'fa-laptop'],
    ['Commerce &amp; Management', 'commerce-management-at-maya-devi-university.php', 'fa-line-chart'],
    ['Pharmacy', 'pharmacy-at-maya-devi-university.php', 'fa-medkit'],
    ['Nursing', 'nursing-at-maya-devi-university.php', 'fa-heartbeat'],
    ['Paramedical Sciences', 'paramedical-sciences-at-maya-devi-university.php', 'fa-stethoscope'],
    ['Rehabilitation Sciences', 'rehabilitation-sciences-at-maya-devi-university.php', 'fa-wheelchair'],
    ['Law &amp; Legal Studies', 'law-legal-studies-at-maya-devi-university.php', 'fa-balance-scale'],
    ['Agriculture', 'agriculture-at-maya-devi-university.php', 'fa-leaf'],
    ['Life &amp; Applied Sciences', 'life-applied-science-at-maya-devi-university.php', 'fa-flask'],
    ['Arts &amp; Humanities', 'arts-humanities-at-maya-devi-university.php', 'fa-paint-brush'],
    ['Hotel &amp; Tourism Management', 'hotel-tourism-management-at-maya-devi-university.php', 'fa-cutlery'],
    ['Education', 'education-at-maya-devi-university.php', 'fa-graduation-cap'],
    ['Health Sciences', 'health-sciences-at-maya-devi-university.php', 'fa-plus-square'],
    ['Skill Development &amp; Vocational', 'skill-development-vocational-studies-at-maya-devi-university.php', 'fa-wrench'],
];

$nx_testimonials = [
    [
        'name'    => 'Riya Sharma',
        'program' => 'B.Tech Computer Science &amp; AI',
        'company' => 'Placed at Amazon &middot; ₹18.5 LPA',
        'image'   => 'assets/uploads/testimoni-1.jpeg',
        'rating'  => 5,
        'quote'   => 'The hands-on training in AI/ML labs and continuous mentorship by industry experts at Maya Devi University shaped my confidence and technical skill set. The placement training cell guided me through every interview round!'
    ],
    [
        'name'    => 'Arjun Verma',
        'program' => 'Master of Business Administration (MBA)',
        'company' => 'Placed at Deloitte &middot; ₹14.0 LPA',
        'image'   => 'assets/uploads/testimoni-2.jpeg',
        'rating'  => 5,
        'quote'   => 'The case-study pedagogy, corporate live projects and leadership development workshops transformed my career trajectory. The scenic Dehradun campus creates the perfect environment for focused learning.'
    ],
    [
        'name'    => 'Sneha Rawat',
        'program' => 'B.Sc Nursing &amp; Healthcare',
        'company' => 'Clinical Training at AIIMS &amp; Max Healthcare',
        'image'   => 'assets/uploads/testimoni-3.jpeg',
        'rating'  => 5,
        'quote'   => 'From advanced simulation laboratories to direct clinical exposure at top multi-specialty hospitals, our professors give personal attention to every student. Maya Devi University truly empowers future medical leaders.'
    ],
    [
        'name'    => 'Rohan Bhatt',
        'program' => 'Bachelor of Pharmacy (B.Pharm)',
        'company' => 'Placed at Pfizer &middot; Research Associate',
        'image'   => 'assets/uploads/testimoni-4.jpeg',
        'rating'  => 5,
        'quote'   => 'The high-end pharmacology research labs and direct pharmaceutical industry partnerships gave me real formulation experience right from my third year. MDU delivers true academic excellence.'
    ]
];

$nx_faqs = [
    [
        'q' => 'Is Maya Devi University UGC recognised and approved by statutory councils?',
        'a' => 'Yes. Maya Devi University, Dehradun is established under the Uttarakhand State Legislature Act and recognised by the University Grants Commission (UGC). Its professional programs are approved by statutory bodies including PCI (Pharmacy Council of India), INC (Indian Nursing Council), BCI (Bar Council of India), and NCTE.'
    ],
    [
        'q' => 'What is the highest and average placement package at Maya Devi University?',
        'a' => 'Maya Devi University has a stellar placement track record with the highest package reaching ₹48.00 LPA and an average package of ₹5.5 LPA. Over 250+ top global recruiters participate in annual campus placements including Amazon, IBM, Cisco, Deloitte, Pfizer, Glenmark, and Tata.'
    ],
    [
        'q' => 'Are scholarships available for meritorious and Uttarakhand domicile students?',
        'a' => 'Yes, MDU offers merit-based scholarships up to 100% on tuition fees for students with high academic scores in 10+2 / graduation or national entrance tests. Special scholarships are also available for Uttarakhand domicile candidates, defense wards, single girl child, and sports achievers.'
    ],
    [
        'q' => 'What hostel and transport facilities are provided on campus?',
        'a' => 'The university provides separate, secure, and modern residential hostels for boys and girls with 24&times;7 security, high-speed Wi-Fi, hygienic mess food, gym, and recreational areas. In addition, university-managed fleet buses cover all major routes and neighborhoods across Dehradun, Rishikesh, and Haridwar.'
    ],
    [
        'q' => 'How can I apply for admissions for the 2026 academic session?',
        'a' => 'You can apply online in less than 5 minutes through the official admissions portal at admissions.maya.edu.in. Alternatively, you can visit the university campus at Selaqui, Dehradun or connect with our admission counselling team via phone or WhatsApp for personalized guidance.'
    ]
];

$nx_recruiters = [
    ['assets/uploads/icon/5.png', 'Amazon'],
    ['assets/uploads/icon/4.jpg', 'IBM'],
    ['assets/uploads/icon/3.jpg', 'Cisco'],
    ['assets/uploads/icon/deloite.jpg', 'Deloitte'],
    ['assets/uploads/icon/1.jpg', 'Pfizer'],
    ['assets/uploads/icon/2.jpg', 'Glenmark'],
    ['assets/uploads/icon/6.png', 'Tata'],
    ['assets/uploads/icon/7.jpg', 'Accenture'],
    ['assets/uploads/icon/nvidia.jpg', 'NVIDIA'],
    ['assets/uploads/icon/oberai.jpg', 'Oberoi Hotels'],
    ['assets/uploads/icon/goorej.jpg', 'Godrej'],
    ['assets/uploads/icon/8.jpg', 'DeltaX'],
    ['assets/uploads/icon/9.jpg', 'Cloud Analogy'],
    ['assets/uploads/icon/10.jpg', 'Coding Ninjas'],
    ['assets/uploads/icon/11.jpg', 'Jubilant Foodworks'],
    ['assets/uploads/icon/12.jpg', 'Wipro'],
];

require "common/header.php";
?>

<!-- New homepage stylesheet (separate file, safe to remove) -->
<link rel="stylesheet" href="assets/css/new-home.css">

<!-- Scroll progress bar -->
<div class="nx-progress" aria-hidden="true"><div class="nx-progress__bar" id="nxProgress"></div></div>

<main class="nx" id="nxTop">

    <!-- =====================================================================
         HERO
         ===================================================================== -->
    <section class="nx-hero" aria-label="Maya Devi University introduction">
        <div class="nx-hero__bg" aria-hidden="true">
            <div class="nx-hero__slide is-active" style="background-image:url('assets/uploads/home-banner-1.jpeg');"></div>
            <div class="nx-hero__slide" style="background-image:url('assets/uploads/index-banner.jpeg');"></div>
            <div class="nx-hero__slide" style="background-image:url('assets/uploads/index-banner-2.jpeg');"></div>
            <div class="nx-hero__slide" style="background-image:url('assets/uploads/index-banner-3.jpeg');"></div>
        </div>
        <div class="nx-hero__wash" aria-hidden="true"></div>
        <div class="nx-hero__grid" aria-hidden="true"></div>
        <span class="nx-hero__orb nx-hero__orb--a" aria-hidden="true"></span>
        <span class="nx-hero__orb nx-hero__orb--b" aria-hidden="true"></span>

        <div class="nx-shell nx-shell--wide nx-hero__inner">

            <div class="nx-hero__copy">
                <span class="nx-eyebrow nx-eyebrow--light" data-nx-anim="down">Dehradun &middot; Uttarakhand &middot; UGC Recognised</span>

                <h1 class="nx-hero__title" data-nx-anim="up" style="--nx-d:80ms">
                    Empower. Educate.<br>
                    <span class="nx-rotator" id="nxRotator" aria-hidden="true">
                        <span class="is-active">Excel.</span>
                        <span>Innovate.</span>
                        <span>Lead.</span>
                        <span>Create.</span>
                    </span>
                    <em class="nx-sr">Excel.</em>
                </h1>

                <p class="nx-hero__lead" data-nx-anim="up" style="--nx-d:180ms">
                    Maya Devi University offers quality education, expert guidance and a vibrant campus life —
                    preparing you for a successful future in the scenic foothills of Uttarakhand.
                </p>

                <div class="nx-hero__actions" data-nx-anim="up" style="--nx-d:260ms">
                    <a class="nx-btn nx-btn--primary" href="https://admissions.maya.edu.in" rel="noopener">
                        Apply for Admission <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </a>
                    <a class="nx-btn nx-btn--glass" href="#nx-programs">
                        Explore Programs <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                </div>

                <ul class="nx-hero__trust" data-nx-stagger>
                    <li><strong data-nx-count="120" data-nx-suffix="+">0</strong><span>Programs</span></li>
                    <li><strong data-nx-count="12000" data-nx-suffix="+">0</strong><span>Alumni</span></li>
                    <li><strong data-nx-count="35" data-nx-suffix="+">0</strong><span>Doctoral Faculty</span></li>
                    <li><strong data-nx-count="15" data-nx-suffix="">0</strong><span>Schools</span></li>
                </ul>
            </div>

            <div class="nx-hero__aside">
                <div class="nx-hero__stack" data-nx-stagger>
                    <article class="nx-glasscard">
                        <div class="nx-glasscard__icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                        <h3>World-Class Education</h3>
                        <p>A cutting-edge curriculum aligned with global academic standards.</p>
                    </article>
                    <article class="nx-glasscard">
                        <div class="nx-glasscard__icon"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                        <h3>Placement Support</h3>
                        <p>Dedicated training &amp; placement cell with strong industry connections.</p>
                    </article>
                    <article class="nx-glasscard">
                        <div class="nx-glasscard__icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                        <h3>Global Opportunities</h3>
                        <p>International exposure, internships and academic collaborations.</p>
                    </article>
                </div>
            </div>

        </div>

        <div class="nx-hero__cue" aria-hidden="true"><i></i><span>Scroll</span></div>
    </section>

    <!-- =====================================================================
         ACCREDITATION MARQUEE
         ===================================================================== -->
    <section class="nx-marquee" aria-label="Rankings and accreditations">
        <p class="nx-marquee__label">Rankings &amp; Accreditations</p>
        <?php
        $nx_ranks = [
            ['assets/uploads/icon/rank-1.webp', 'WURI Ranking'],
            ['assets/uploads/icon/rank-2.png',  'Times Higher Education Rankings'],
            ['assets/uploads/icon/rank-3.png',  'NIRF Ranking'],
            ['assets/uploads/icon/rank-4.webp', 'THE Impact Rankings'],
            ['assets/uploads/icon/rank-5.png',  'Accreditation Body'],
        ];
        ?>
        <div class="nx-marquee__track">
            <?php for ($pass = 0; $pass < 2; $pass++): ?>
                <div class="nx-marquee__group"<?php echo $pass ? ' aria-hidden="true"' : ''; ?>>
                    <?php foreach ($nx_ranks as $r): ?>
                        <div class="nx-marquee__item">
                            <img loading="lazy" src="<?php echo $r[0]; ?>" alt="<?php echo $r[1]; ?> &mdash; Maya Devi University" width="160" height="74">
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endfor; ?>
        </div>
    </section>

    <!-- =====================================================================
         ABOUT + CAMPUS TOUR VIDEO
         ===================================================================== -->
    <section class="nx-sec" id="nx-about" aria-labelledby="nx-about-title">
        <div class="nx-shell">

            <div class="nx-head nx-head--center" data-nx-anim="up">
                <span class="nx-eyebrow">About the University</span>
                <h2 id="nx-about-title">A campus where <span class="nx-grad-text">innovation meets inspiration</span></h2>
                <p>Take a breathtaking aerial tour of our state-of-the-art campus, set amidst lush greenery and modern architecture in Dehradun.</p>
            </div>

            <div class="nx-about__grid">
                <div class="nx-video" data-nx-anim="left" id="nxVideo">
                    <span class="nx-video__badge"><i class="fa fa-play-circle" aria-hidden="true"></i> Campus Tour &middot; 4K HD</span>
                    <img class="nx-video__thumb" src="https://i.ytimg.com/vi/Gm-KE2N_5ws/hqdefault.jpg" onerror="this.onerror=null;this.src='assets/uploads/campus-bg.jpeg';" alt="Aerial campus tour of Maya Devi University, Dehradun" width="1280" height="720" loading="lazy">
                    <button type="button" class="nx-video__btn" id="nxVideoBtn" aria-label="Play the Maya Devi University campus tour video">
                        <span class="nx-video__play"><i class="fa fa-play" aria-hidden="true"></i></span>
                    </button>
                    <span class="nx-video__caption">Watch the official campus tour &bull; Dehradun</span>
                </div>

                <div data-nx-anim="right" style="--nx-d:120ms">
                    <span class="nx-rule" aria-hidden="true"></span>
                    <h3 style="font-size:clamp(1.35rem,2.2vw,1.85rem);">Maya Devi University, Dehradun</h3>
                    <p>
                        A premier institution dedicated to delivering world-class education and fostering holistic development.
                        Nestled in the scenic foothills of Uttarakhand, the university offers a dynamic learning environment
                        supported by modern infrastructure, experienced faculty and industry-aligned programs.
                    </p>
                    <p>
                        With a focus on academic excellence, research and innovation, we prepare students to excel in their
                        chosen fields while nurturing values, leadership skills and a global perspective — shaping future-ready
                        professionals who contribute meaningfully to society.
                    </p>
                    <a class="nx-btn nx-btn--ghost" href="about-us.php" style="margin-top:12px;">
                        More About Us <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <div class="nx-features" data-nx-stagger>
                <article class="nx-feature">
                    <div class="nx-feature__icon"><i class="fa fa-flask" aria-hidden="true"></i></div>
                    <h3>Modern Facilities</h3>
                    <p>State-of-the-art laboratories, libraries and learning spaces designed for the future.</p>
                </article>
                <article class="nx-feature">
                    <div class="nx-feature__icon"><i class="fa fa-leaf" aria-hidden="true"></i></div>
                    <h3>Green Campus</h3>
                    <p>Sustainability at the core with lush gardens, solar power and eco-friendly architecture.</p>
                </article>
                <article class="nx-feature">
                    <div class="nx-feature__icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                    <h3>Student Life</h3>
                    <p>Vibrant community spaces that foster collaboration, creativity and personal growth.</p>
                </article>
            </div>

        </div>
    </section>

    <!-- =====================================================================
         LEGACY / ANIMATED COUNTERS
         ===================================================================== -->
    <section class="nx-sec nx-legacy" aria-labelledby="nx-legacy-title">
        <div class="nx-shell">
            <div class="nx-legacy__grid">

                <div>
                    <div class="nx-head" data-nx-anim="up" style="margin-bottom:34px;">
                        <span class="nx-eyebrow nx-eyebrow--light">Our Legacy</span>
                        <h2 id="nx-legacy-title">An illustrious legacy <span class="nx-grad-text">we shape</span></h2>
                        <p>Numbers that reflect a decade of academic ambition, mentorship and student success.</p>
                    </div>

                    <div class="nx-counters" data-nx-stagger>
                        <article class="nx-counter">
                            <span class="nx-counter__num" data-nx-count="120" data-nx-suffix="+">0</span>
                            <h3>Programs</h3>
                            <p>Industry-oriented undergraduate &amp; postgraduate programs focused on employability.</p>
                        </article>
                        <article class="nx-counter">
                            <span class="nx-counter__num" data-nx-count="100" data-nx-suffix="+">0</span>
                            <h3>Stalwarts</h3>
                            <p>Industry stalwarts and mentors collaborating with students &amp; faculty.</p>
                        </article>
                        <article class="nx-counter">
                            <span class="nx-counter__num" data-nx-count="35" data-nx-suffix="+">0</span>
                            <h3>Doctoral Faculty</h3>
                            <p>Research-active doctoral faculty guiding projects &amp; publications.</p>
                        </article>
                        <article class="nx-counter">
                            <span class="nx-counter__num" data-nx-count="12000" data-nx-suffix="+">0</span>
                            <h3>Alumni</h3>
                            <p>A strong alumni network across industries and geographies.</p>
                        </article>
                    </div>
                </div>

                <figure class="nx-legacy__media" data-nx-anim="push" style="margin:0;">
                    <img src="assets/uploads/girl-3.jpeg" alt="Students on the Maya Devi University campus in Dehradun" loading="lazy" width="800" height="1000">
                    <figcaption class="nx-legacy__badge">
                        <strong>1,890+ students</strong> learning and growing alongside a vibrant student body from across India and beyond.
                    </figcaption>
                </figure>

            </div>
        </div>
    </section>

    <!-- =====================================================================
         PROGRAMS (tabbed)
         ===================================================================== -->
    <section class="nx-sec nx-sec--tint" id="nx-programs" aria-labelledby="nx-programs-title">
        <div class="nx-shell">

            <div class="nx-head nx-head--center" data-nx-anim="up">
                <span class="nx-eyebrow">Academic Programs</span>
                <h2 id="nx-programs-title">Find the <span class="nx-grad-text">course that fits you</span></h2>
                <p>From skill-first diplomas to research-driven master's degrees — explore programs built around industry demand.</p>
            </div>

            <div class="nx-tabs" role="tablist" aria-label="Program levels" data-nx-anim="up">
                <?php $first = true; foreach ($nx_programs as $key => $group): ?>
                    <button type="button" class="nx-tab" role="tab"
                            id="nx-tab-<?php echo $key; ?>"
                            aria-controls="nx-panel-<?php echo $key; ?>"
                            aria-selected="<?php echo $first ? 'true' : 'false'; ?>"
                            tabindex="<?php echo $first ? '0' : '-1'; ?>">
                        <?php echo $group['label']; ?>
                    </button>
                <?php $first = false; endforeach; ?>
            </div>

            <?php $first = true; foreach ($nx_programs as $key => $group): ?>
                <div class="nx-panel" role="tabpanel"
                     id="nx-panel-<?php echo $key; ?>"
                     aria-labelledby="nx-tab-<?php echo $key; ?>"
                     <?php echo $first ? '' : 'hidden'; ?>>

                    <p class="nx-head nx-head--center" style="margin-bottom:32px;"><?php echo $group['intro']; ?></p>

                    <div class="nx-cards" data-nx-stagger>
                        <?php foreach ($group['items'] as $c): ?>
                            <article class="nx-course">
                                <div class="nx-course__media">
                                    <span class="nx-course__tag"><?php echo $group['label']; ?></span>
                                    <a href="<?php echo $c[1]; ?>" tabindex="-1" aria-hidden="true">
                                        <img loading="lazy" src="<?php echo $c[2]; ?>" alt="<?php echo html_entity_decode(strip_tags($c[0]), ENT_QUOTES, 'UTF-8'); ?> at Maya Devi University, Dehradun" width="600" height="375">
                                    </a>
                                </div>
                                <div class="nx-course__body">
                                    <h3><a href="<?php echo $c[1]; ?>"><?php echo $c[0]; ?></a></h3>
                                    <p><?php echo $c[5]; ?></p>
                                </div>
                                <div class="nx-course__meta">
                                    <span><i class="fa fa-diamond" aria-hidden="true"></i> Credits: <?php echo $c[3]; ?></span>
                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $c[4]; ?></span>
                                </div>
                                <div class="nx-course__foot">
                                    <a class="nx-btn nx-btn--primary nx-btn--sm" href="<?php echo $c[1]; ?>">
                                        View Program <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>

                    <div class="nx-panel__more">
                        <a class="nx-btn nx-btn--ghost" href="<?php echo $group['more']; ?>">
                            See all <?php echo $group['label']; ?> courses <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            <?php $first = false; endforeach; ?>

        </div>
    </section>

    <!-- =====================================================================
         SCHOOLS
         ===================================================================== -->
    <section class="nx-sec" aria-labelledby="nx-schools-title">
        <div class="nx-shell">
            <div class="nx-head nx-head--center" data-nx-anim="up">
                <span class="nx-eyebrow">Colleges &amp; Departments</span>
                <h2 id="nx-schools-title">Fifteen schools, <span class="nx-grad-text">one campus</span></h2>
                <p>Every school at Maya Devi University runs its own labs, faculty and industry partnerships.</p>
            </div>

            <div class="nx-schools" data-nx-stagger>
                <?php foreach ($nx_schools as $s): ?>
                    <a class="nx-school" href="<?php echo $s[1]; ?>">
                        <i class="fa <?php echo $s[2]; ?>" aria-hidden="true"></i>
                        <span><?php echo $s[0]; ?></span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         PLACEMENTS & TOP RECRUITERS SHOWCASE
         ===================================================================== -->
    <section class="nx-sec nx-sec--tint" id="nx-placements" aria-labelledby="nx-placements-title">
        <div class="nx-shell nx-shell--wide">

            <div class="nx-head nx-head--center" data-nx-anim="up">
                <span class="nx-eyebrow">Placements &amp; Career Support</span>
                <h2 id="nx-placements-title">Industry leaders trust <span class="nx-grad-text">our talent</span></h2>
                <p>Industry-aligned training, summer internships and a dedicated Corporate Resource Cell translate into high-impact career starts.</p>
            </div>

            <div class="nx-place-stats" data-nx-stagger>
                <div class="nx-place-card">
                    <span class="nx-place-card__val" data-nx-count="800" data-nx-suffix="+">0</span>
                    <h3>Placement Offers</h3>
                    <p>Annual job and internship offers extended to final-year students.</p>
                </div>
                <div class="nx-place-card nx-place-card--accent">
                    <span class="nx-place-card__val">₹48.00 LPA</span>
                    <h3>Highest Package</h3>
                    <p>Highest international &amp; national offer secured by our graduates.</p>
                </div>
                <div class="nx-place-card">
                    <span class="nx-place-card__val">₹5.50 LPA</span>
                    <h3>Average Package</h3>
                    <p>Steady year-on-year growth across engineering, management &amp; pharmacy.</p>
                </div>
                <div class="nx-place-card">
                    <span class="nx-place-card__val" data-nx-count="250" data-nx-suffix="+">0</span>
                    <h3>Hiring Partners</h3>
                    <p>Leading MNCs, hospitals, research institutes &amp; tech enterprises.</p>
                </div>
            </div>

            <div class="nx-recruiters" data-nx-anim="up">
                <div class="nx-recruiters__head">
                    <h3><i class="fa fa-briefcase" aria-hidden="true"></i> Leading Campus Recruiters</h3>
                    <span class="nx-recruiters__badge">250+ Fortune 500 &amp; National Employers</span>
                </div>

                <div class="nx-ticker" style="margin-bottom:16px;">
                    <div class="nx-ticker__track">
                        <?php for ($p = 0; $p < 2; $p++): ?>
                            <?php foreach ($nx_recruiters as $rec): ?>
                                <div class="nx-logo-pill">
                                    <img loading="lazy" src="<?php echo $rec[0]; ?>" alt="<?php echo $rec[1]; ?> &mdash; Recruiter at Maya Devi University">
                                </div>
                            <?php endforeach; ?>
                        <?php endfor; ?>
                    </div>
                </div>

                <div class="nx-ticker">
                    <div class="nx-ticker__track nx-ticker__track--reverse">
                        <?php for ($p = 0; $p < 2; $p++): ?>
                            <?php foreach (array_reverse($nx_recruiters) as $rec): ?>
                                <div class="nx-logo-pill">
                                    <img loading="lazy" src="<?php echo $rec[0]; ?>" alt="<?php echo $rec[1]; ?> &mdash; Recruiter at Maya Devi University">
                                </div>
                            <?php endforeach; ?>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>

            <div class="nx-panel__more" style="margin-top:32px;">
                <a class="nx-btn nx-btn--ghost" href="placement.php">
                    Explore Detailed Placement Record <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </a>
            </div>

        </div>
    </section>

    <!-- =====================================================================
         FACILITIES BENTO
         ===================================================================== -->
    <section class="nx-sec nx-sec--grad" aria-labelledby="nx-facility-title">
        <div class="nx-shell">
            <div class="nx-head nx-head--center" data-nx-anim="up">
                <span class="nx-eyebrow">Campus Infrastructure</span>
                <h2 id="nx-facility-title">Modern facilities that <span class="nx-grad-text">empower every student</span></h2>
                <p>Labs, libraries, hostels and health support — everything you need within one secure campus.</p>
            </div>

            <div class="nx-bento" data-nx-stagger>

                <article class="nx-bento__item nx-bento__item--tall nx-bento__item--photo">
                    <img loading="lazy" src="assets/uploads/robots.jpeg" alt="Advanced computer and robotics laboratory at Maya Devi University" width="800" height="600">
                    <div class="nx-bento__icon"><i class="fa fa-desktop" aria-hidden="true"></i></div>
                    <h3>Advanced Computer &amp; Technology Labs</h3>
                    <p>Well-equipped labs supporting programming, AI, machine learning, analytics, robotics and digital innovation.</p>
                </article>

                <article class="nx-bento__item nx-bento__item--tall nx-bento__item--photo">
                    <img loading="lazy" src="assets/uploads/library-2.jpeg" alt="Central library and e-resource hub at Maya Devi University" width="800" height="600">
                    <div class="nx-bento__icon"><i class="fa fa-book" aria-hidden="true"></i></div>
                    <h3>Central Library &amp; E-Resource Hub</h3>
                    <p>Books, journals, research papers, digital learning platforms and quiet study areas for academic and competitive exam preparation.</p>
                </article>

                <article class="nx-bento__item">
                    <div class="nx-bento__icon"><i class="fa fa-heartbeat" aria-hidden="true"></i></div>
                    <h3>Health &amp; Wellness Centre</h3>
                    <p>On-campus medical support with tie-ups for emergency care and routine health checkups.</p>
                </article>

                <article class="nx-bento__item">
                    <div class="nx-bento__icon"><i class="fa fa-microphone" aria-hidden="true"></i></div>
                    <h3>Auditorium &amp; Seminar Halls</h3>
                    <p>Multi-functional spaces for conferences, workshops, cultural programs and guest lectures.</p>
                </article>

                <article class="nx-bento__item">
                    <div class="nx-bento__icon"><i class="fa fa-bed" aria-hidden="true"></i></div>
                    <h3>Secure &amp; Comfortable Hostels</h3>
                    <p>Separate hostels for boys and girls with modern amenities, 24&times;7 security, study spaces and recreational zones.</p>
                </article>

                <article class="nx-bento__item nx-bento__item--wide">
                    <div class="nx-bento__icon"><i class="fa fa-bus" aria-hidden="true"></i></div>
                    <h3>Transport Facilities</h3>
                    <p>University-managed buses connecting major areas in Dehradun, ensuring safe and convenient travel every day.</p>
                </article>

                <article class="nx-bento__item nx-bento__item--wide nx-bento__item--photo">
                    <img loading="lazy" src="assets/uploads/hostel.jpg" alt="Student hostel accommodation at Maya Devi University, Dehradun" width="800" height="500">
                    <div class="nx-bento__icon"><i class="fa fa-shield" aria-hidden="true"></i></div>
                    <h3>A Safe, Residential Campus</h3>
                    <p>Round-the-clock security, mess facilities and a supportive residential community at Selaqui, Dehradun.</p>
                </article>

            </div>
        </div>
    </section>

    <!-- =====================================================================
         4-STEP ADMISSION JOURNEY
         ===================================================================== -->
    <section class="nx-sec nx-sec--tint" id="nx-admissions" aria-labelledby="nx-admissions-title">
        <div class="nx-shell">

            <div class="nx-head nx-head--center" data-nx-anim="up">
                <span class="nx-eyebrow">Admissions 2026</span>
                <h2 id="nx-admissions-title">Your 4-step journey to <span class="nx-grad-text">Maya Devi University</span></h2>
                <p>A simple, transparent and student-friendly admission process designed to get you started quickly.</p>
            </div>

            <div class="nx-journey-grid" data-nx-stagger>
                <div class="nx-journey-card">
                    <div class="nx-journey-card__step">01</div>
                    <div class="nx-journey-card__icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div>
                    <h3>Submit Application</h3>
                    <p>Complete the quick online application form with your academic details and program choice.</p>
                    <div class="nx-journey-card__foot">
                        <i class="fa fa-check-circle" aria-hidden="true"></i> Instant Digital Form
                    </div>
                </div>

                <div class="nx-journey-card">
                    <div class="nx-journey-card__step">02</div>
                    <div class="nx-journey-card__icon"><i class="fa fa-file-text-o" aria-hidden="true"></i></div>
                    <h3>Document Verification</h3>
                    <p>Upload your academic marksheets, certificates and ID proofs for swift eligibility validation.</p>
                    <div class="nx-journey-card__foot">
                        <i class="fa fa-check-circle" aria-hidden="true"></i> 24h Review Window
                    </div>
                </div>

                <div class="nx-journey-card">
                    <div class="nx-journey-card__step">03</div>
                    <div class="nx-journey-card__icon"><i class="fa fa-comments-o" aria-hidden="true"></i></div>
                    <h3>Counselling &amp; Merit</h3>
                    <p>Connect with expert academic counsellors to evaluate scholarship eligibility and career pathways.</p>
                    <div class="nx-journey-card__foot">
                        <i class="fa fa-check-circle" aria-hidden="true"></i> Up to 100% Scholarship
                    </div>
                </div>

                <div class="nx-journey-card">
                    <div class="nx-journey-card__step">04</div>
                    <div class="nx-journey-card__icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                    <h3>Confirm &amp; Join MDU</h3>
                    <p>Receive your official Admission Offer Letter, secure your seat, and step onto our lush campus!</p>
                    <div class="nx-journey-card__foot">
                        <i class="fa fa-check-circle" aria-hidden="true"></i> Welcome to Campus
                    </div>
                </div>
            </div>

            <div class="nx-panel__more" style="margin-top:38px;">
                <a class="nx-btn nx-btn--primary" href="https://admissions.maya.edu.in" rel="noopener">
                    Apply Online for 2026 <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </a>
                <a class="nx-btn nx-btn--ghost" href="contact.php" style="margin-left:12px;">
                    Talk to a Counsellor <i class="fa fa-phone" aria-hidden="true"></i>
                </a>
            </div>

        </div>
    </section>

    <!-- =====================================================================
         WHY MAYA DEVI UNIVERSITY
         ===================================================================== -->
    <section class="nx-sec" aria-labelledby="nx-why-title">
        <div class="nx-shell">
            <div class="nx-why" data-nx-anim="push">

                <div class="nx-why__copy">
                    <span class="nx-eyebrow nx-eyebrow--light">Excellence &amp; Innovation</span>
                    <h2 id="nx-why-title">Why Maya Devi University stands out</h2>
                    <p>
                        We deliver world-class education through experienced faculty, modern infrastructure and global exposure.
                        Our focus on academic excellence and holistic development empowers students to thrive in their careers.
                    </p>

                    <ul class="nx-why__list">
                        <li>
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            <div><strong>Top Placements &amp; Global Opportunities</strong>
                            <span>World-class faculty and cutting-edge programs that prepare students for successful careers.</span></div>
                        </li>
                        <li>
                            <i class="fa fa-building" aria-hidden="true"></i>
                            <div><strong>State-of-the-art Infrastructure</strong>
                            <span>Modern labs, digital classrooms and world-class facilities designed to inspire innovation.</span></div>
                        </li>
                        <li>
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <div><strong>International Collaborations</strong>
                            <span>Exchange programs and research initiatives with leading global institutions.</span></div>
                        </li>
                        <li>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <div><strong>The 8 Abilities Framework</strong>
                            <span>A comprehensive approach to developing well-rounded, future-ready individuals.</span></div>
                        </li>
                    </ul>

                    <div class="nx-hero__actions" style="margin-bottom:0;">
                        <a class="nx-btn nx-btn--primary" href="https://admissions.maya.edu.in" rel="noopener">Apply Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        <a class="nx-btn nx-btn--glass" href="placement.php">Placement Record</a>
                    </div>
                </div>

                <div class="nx-why__media">
                    <img loading="lazy" src="assets/uploads/campus-2.jpeg" alt="Maya Devi University campus, recognised among the best universities in Dehradun" width="900" height="700">
                </div>

            </div>
        </div>
    </section>

    <!-- =====================================================================
         CAMPUS GALLERY
         ===================================================================== -->
    <section class="nx-sec nx-sec--tint" aria-labelledby="nx-gallery-title">
        <div class="nx-shell nx-shell--wide">
            <div class="nx-head nx-head--center" data-nx-anim="up">
                <span class="nx-eyebrow">Campus Gallery</span>
                <h2 id="nx-gallery-title">Moments that make <span class="nx-grad-text">MDU life</span></h2>
                <p>A collection of moments that reflect learning, creativity, collaboration and everyday life on campus.</p>
            </div>

            <div class="nx-gallery" data-nx-stagger>
                <a class="nx-gallery__cell" href="campus-life.php">
                    <img loading="lazy" src="assets/uploads/campus-9.jpeg" alt="Campus life at Maya Devi University, Dehradun" width="900" height="700">
                    <span class="nx-gallery__cap"><small>Community</small>Campus Life</span>
                </a>
                <a class="nx-gallery__cell" href="computer-engineering-at-maya-devi-university.php">
                    <img loading="lazy" src="assets/uploads/ai.jpeg" alt="Advanced AI lab at Maya Devi University" width="600" height="450">
                    <span class="nx-gallery__cap"><small>Technology</small>Advanced AI Labs</span>
                </a>
                <a class="nx-gallery__cell" href="university-library.php">
                    <img loading="lazy" src="assets/uploads/library-2.jpeg" alt="Central library at Maya Devi University" width="600" height="450">
                    <span class="nx-gallery__cap"><small>Learning</small>Central Library</span>
                </a>
                <a class="nx-gallery__cell" href="colleges-departments.php">
                    <img loading="lazy" src="assets/uploads/robots.jpeg" alt="Robotics and advanced laboratories at Maya Devi University" width="600" height="900">
                    <span class="nx-gallery__cap"><small>Research</small>Advanced Laboratories</span>
                </a>
                <a class="nx-gallery__cell" href="campus-life.php">
                    <img loading="lazy" src="assets/uploads/hostel.jpg" alt="Hostel life at Maya Devi University, Dehradun" width="900" height="450">
                    <span class="nx-gallery__cap"><small>Residential</small>Hostel Life</span>
                </a>
            </div>

            <div class="nx-panel__more">
                <a class="nx-btn nx-btn--ghost" href="campus-life.php">Explore More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         STUDENT TESTIMONIALS & SUCCESS STORIES
         ===================================================================== -->
    <section class="nx-sec" id="nx-testimonials" aria-labelledby="nx-testi-title">
        <div class="nx-shell">

            <div class="nx-head nx-head--center" data-nx-anim="up">
                <span class="nx-eyebrow">Student Voices</span>
                <h2 id="nx-testi-title">Stories of ambition, <span class="nx-grad-text">learning &amp; success</span></h2>
                <p>Hear directly from our students and alumni about life, academics, faculty mentorship and campus placements at Maya Devi University.</p>
            </div>

            <div class="nx-testi-grid" data-nx-stagger>
                <?php foreach ($nx_testimonials as $t): ?>
                    <article class="nx-testi-card">
                        <div>
                            <div class="nx-testi-card__quote"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
                            <div class="nx-testi-card__stars" aria-label="<?php echo $t['rating']; ?> out of 5 stars">
                                <?php for ($s = 0; $s < $t['rating']; $s++): ?>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                <?php endfor; ?>
                            </div>
                            <p class="nx-testi-card__text">“<?php echo $t['quote']; ?>”</p>
                        </div>

                        <div class="nx-testi-card__author">
                            <img loading="lazy" class="nx-testi-card__avatar" src="<?php echo $t['image']; ?>" alt="<?php echo $t['name']; ?> &mdash; Student at Maya Devi University" width="100" height="100">
                            <div class="nx-testi-card__meta">
                                <strong><?php echo $t['name']; ?></strong>
                                <span><?php echo $t['program']; ?></span>
                                <span class="nx-testi-card__tag"><i class="fa fa-check-circle" aria-hidden="true"></i> <?php echo $t['company']; ?></span>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <!-- =====================================================================
         CAMPUS LIFE GLASS TILES
         ===================================================================== -->
    <section class="nx-sec nx-life" aria-labelledby="nx-life-title">
        <img class="nx-life__bg" loading="lazy" src="assets/uploads/campus-1.webp" alt="" aria-hidden="true" width="1600" height="900">
        <div class="nx-shell">
            <div class="nx-head nx-head--center" data-nx-anim="up">
                <span class="nx-eyebrow nx-eyebrow--light">Welcome to Campus Living</span>
                <h2 id="nx-life-title">A lively, inclusive and engaging campus</h2>
                <p>Explore a vibrant and inspiring environment filled with creativity, sports, culture and world-class facilities.</p>
            </div>

            <div class="nx-life__grid" data-nx-stagger>
                <a class="nx-life__card" href="club.php">
                    <span class="nx-life__emoji" aria-hidden="true">&#127917;</span>
                    <h3>Clubs &amp; Activities</h3>
                    <p>Numerous student clubs foster creativity, leadership and cultural expression.</p>
                    <span class="nx-link">Explore clubs <span aria-hidden="true">&rarr;</span></span>
                </a>
                <a class="nx-life__card" href="sports.php">
                    <span class="nx-life__emoji" aria-hidden="true">&#9917;</span>
                    <h3>Sports &amp; Fitness</h3>
                    <p>Top-tier sports facilities, tournaments and a fitness culture that keeps students active.</p>
                    <span class="nx-link">View facilities <span aria-hidden="true">&rarr;</span></span>
                </a>
                <a class="nx-life__card" href="campus-life.php">
                    <span class="nx-life__emoji" aria-hidden="true">&#127979;</span>
                    <h3>Modern Facilities</h3>
                    <p>Advanced labs, digital library, smart classrooms and collaborative learning spaces.</p>
                    <span class="nx-link">See campus <span aria-hidden="true">&rarr;</span></span>
                </a>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         BLOG
         ===================================================================== -->
    <section class="nx-sec" aria-labelledby="nx-blog-title">
        <div class="nx-shell">
            <div class="nx-head nx-head--center" data-nx-anim="up">
                <span class="nx-eyebrow">From the Blog</span>
                <h2 id="nx-blog-title">Insights &amp; <span class="nx-grad-text">admission guides</span></h2>
                <p>Course guides, admission timelines and career advice from the Maya Devi University editorial team.</p>
            </div>

            <div class="nx-posts nx-posts--feature" data-nx-stagger>
                <?php foreach (array_slice($nx_blogs, 0, 5) as $b): ?>
                    <article class="nx-post">
                        <div class="nx-post__media">
                            <span class="nx-post__cat"><?php echo $b[3]; ?></span>
                            <a href="<?php echo $b[1]; ?>" tabindex="-1" aria-hidden="true">
                                <img loading="lazy" src="<?php echo $b[2]; ?>" alt="<?php echo html_entity_decode(strip_tags($b[0]), ENT_QUOTES, 'UTF-8'); ?>" width="600" height="338">
                            </a>
                        </div>
                        <div class="nx-post__body">
                            <h3><a href="<?php echo $b[1]; ?>"><?php echo $b[0]; ?></a></h3>
                            <p><?php echo $b[6]; ?></p>
                            <div class="nx-post__foot">
                                <time datetime="<?php echo $b[4]; ?>"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $b[5]; ?></time>
                                <span class="nx-link">Read <span aria-hidden="true">&rarr;</span></span>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <div class="nx-panel__more">
                <a class="nx-btn nx-btn--ghost" href="blog.php">Read all articles <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         EVENTS
         ===================================================================== -->
    <section class="nx-sec nx-sec--tint" aria-labelledby="nx-events-title">
        <div class="nx-shell">
            <div class="nx-head nx-head--center" data-nx-anim="up">
                <span class="nx-eyebrow">Campus Events</span>
                <h2 id="nx-events-title">Celebrating ideas, <span class="nx-grad-text">culture and connections</span></h2>
                <p>Workshops, industry visits, training sessions and cultural programs happening across our schools.</p>
            </div>

            <div class="nx-timeline" data-nx-stagger>
                <?php foreach ($nx_events as $e): ?>
                    <?php
                    // "11 May 2026" -> day / month for the date stamp
                    $parts = explode(' ', $e[5]);
                    $ev_day   = $parts[0] ?? '';
                    $ev_month = $parts[1] ?? '';
                    ?>
                    <a class="nx-tl" href="<?php echo $e[1]; ?>">
                        <time class="nx-tl__date" datetime="<?php echo $e[4]; ?>">
                            <b><?php echo $ev_day; ?></b>
                            <span><?php echo $ev_month; ?></span>
                        </time>
                        <div class="nx-tl__thumb">
                            <img loading="lazy" src="<?php echo $e[2]; ?>" alt="<?php echo html_entity_decode(strip_tags($e[0]), ENT_QUOTES, 'UTF-8'); ?> — Maya Devi University" width="400" height="300">
                        </div>
                        <div class="nx-tl__body">
                            <span class="nx-tl__cat"><?php echo $e[3]; ?></span>
                            <h3><?php echo $e[0]; ?></h3>
                            <p><?php echo $e[6]; ?></p>
                        </div>
                        <span class="nx-tl__go" aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                    </a>
                <?php endforeach; ?>
            </div>

            <div class="nx-panel__more">
                <a class="nx-btn nx-btn--ghost" href="event.php">All events <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         FREQUENTLY ASKED QUESTIONS (ACCORDION)
         ===================================================================== -->
    <section class="nx-sec" id="nx-faq" aria-labelledby="nx-faq-title">
        <div class="nx-shell">

            <div class="nx-head nx-head--center" data-nx-anim="up">
                <span class="nx-eyebrow">Got Questions?</span>
                <h2 id="nx-faq-title">Frequently Asked <span class="nx-grad-text">Questions</span></h2>
                <p>Find quick answers to common queries regarding admissions, recognition, courses, scholarships, and campus facilities.</p>
            </div>

            <div class="nx-faq-wrap" data-nx-stagger>
                <?php $f_idx = 1; foreach ($nx_faqs as $faq): ?>
                    <div class="nx-faq-item<?php echo $f_idx === 1 ? ' is-open' : ''; ?>">
                        <button type="button" class="nx-faq-btn" aria-expanded="<?php echo $f_idx === 1 ? 'true' : 'false'; ?>">
                            <span><?php echo $faq['q']; ?></span>
                            <span class="nx-faq-btn__icon" aria-hidden="true"><i class="fa fa-plus"></i></span>
                        </button>
                        <div class="nx-faq-content">
                            <p><?php echo $faq['a']; ?></p>
                        </div>
                    </div>
                <?php $f_idx++; endforeach; ?>
            </div>

            <div class="nx-panel__more" style="margin-top:34px;">
                <p style="color:var(--nx-muted); font-size:14.5px; margin-bottom:12px;">Have more questions? Our admissions office is here to assist you.</p>
                <a class="nx-btn nx-btn--ghost" href="contact.php">
                    Contact Admission Helpdesk <i class="fa fa-phone" aria-hidden="true"></i>
                </a>
            </div>

        </div>
    </section>

    <!-- =====================================================================
         FINAL CTA
         ===================================================================== -->
    <section class="nx-cta">
        <div class="nx-shell">
            <div class="nx-cta__inner" data-nx-anim="zoom">
                <h2>Admissions for 2026 are open</h2>
                <p>Take the next step towards a career you are proud of. Talk to our admission counsellors or apply online in minutes.</p>
                <div class="nx-cta__actions">
                    <a class="nx-btn nx-btn--glass" href="https://admissions.maya.edu.in" rel="noopener">Apply Online <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    <a class="nx-btn nx-btn--glass" href="contact.php">Talk to a Counsellor</a>
                    <a class="nx-btn nx-btn--glass" href="fee-structure.php">Fee Structure</a>
                </div>
            </div>
        </div>
    </section>

</main>

<a class="nx-top" href="#nxTop" id="nxTopBtn" aria-label="Back to top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

<!-- =========================================================================
     STRUCTURED DATA (SEO)
     ========================================================================= -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "Maya Devi University",
  "url": "https://maya.edu.in/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://maya.edu.in/blog.php?s={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>

<script type="application/ld+json">
<?php
$nx_ld_items = [];
$nx_pos = 1;
foreach ($nx_programs as $group) {
    foreach ($group['items'] as $c) {
        $nx_ld_items[] = [
            "@type"    => "ListItem",
            "position" => $nx_pos++,
            "name"     => html_entity_decode(strip_tags($c[0]), ENT_QUOTES, 'UTF-8'),
            "url"      => "https://maya.edu.in/" . $c[1],
        ];
    }
}
echo json_encode([
    "@context"        => "https://schema.org",
    "@type"           => "ItemList",
    "name"            => "Programs offered by Maya Devi University, Dehradun",
    "itemListElement" => $nx_ld_items,
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Is Maya Devi University a recognised private university in Dehradun?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Maya Devi University, Selaqui, Dehradun is a recognised private university in Uttarakhand offering UGC-recognised undergraduate, postgraduate, diploma and doctoral programs across 15 schools."
      }
    },
    {
      "@type": "Question",
      "name": "Which courses does Maya Devi University offer?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The university offers more than 120 programs including B.Tech, BCA, BBA, B.Com, B.Sc, B.Pharm, D.Pharm, B.Sc Nursing, GNM, BA LLB, M.Tech, MBA, MCA, M.Sc and PhD across engineering, management, pharmacy, nursing, paramedical, law, agriculture, arts and hotel management."
      }
    },
    {
      "@type": "Question",
      "name": "Where is the Maya Devi University campus located?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The campus is located at Selaqui, Pharma City, Dehradun, Uttarakhand 248011, with university-managed transport connecting major areas of Dehradun."
      }
    },
    {
      "@type": "Question",
      "name": "How do I apply for admission to Maya Devi University?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Applications can be submitted online through the official admissions portal at admissions.maya.edu.in, or by contacting the admission counselling team through the Contact Us page."
      }
    }
  ]
}
</script>

<!-- =========================================================================
     NEW HOMEPAGE JS — robust animations, video player & FAQ accordion
     ========================================================================= -->
<script>
(function () {
  "use strict";

  var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ------------------------------------------------------------------
     1. SCROLL REVEAL
     ------------------------------------------------------------------ */
  var revealTargets = document.querySelectorAll('[data-nx-anim], [data-nx-stagger]');

  if (!('IntersectionObserver' in window) || reduce) {
    Array.prototype.forEach.call(revealTargets, function (el) { el.classList.add('nx-in'); });
  } else {
    var revealObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('nx-in');
        }
      });
    }, { threshold: 0.05, rootMargin: '0px 0px -30px 0px' });

    Array.prototype.forEach.call(revealTargets, function (el) { revealObserver.observe(el); });
  }

  /* ------------------------------------------------------------------
     2. COUNTERS — smooth count-up
     ------------------------------------------------------------------ */
  var counters = document.querySelectorAll('[data-nx-count]');

  function runCounter(el) {
    var target = parseFloat(el.getAttribute('data-nx-count')) || 0;
    var suffix = el.getAttribute('data-nx-suffix') || '';
    var duration = 1600;
    var start = null;

    if (el._nxRaf) { cancelAnimationFrame(el._nxRaf); }

    function step(ts) {
      if (start === null) { start = ts; }
      var p = Math.min((ts - start) / duration, 1);
      var eased = 1 - Math.pow(1 - p, 3);           // easeOutCubic
      var value = Math.floor(eased * target);
      el.textContent = value.toLocaleString('en-IN') + (p === 1 ? suffix : '');
      if (p < 1) { el._nxRaf = requestAnimationFrame(step); }
      else { el.textContent = target.toLocaleString('en-IN') + suffix; }
    }
    el._nxRaf = requestAnimationFrame(step);
  }

  if (!('IntersectionObserver' in window) || reduce) {
    Array.prototype.forEach.call(counters, function (el) {
      el.textContent = (parseFloat(el.getAttribute('data-nx-count')) || 0).toLocaleString('en-IN') + (el.getAttribute('data-nx-suffix') || '');
    });
  } else {
    var countObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          runCounter(entry.target);
        }
      });
    }, { threshold: 0.2 });
    Array.prototype.forEach.call(counters, function (el) { countObserver.observe(el); });
  }

  /* ------------------------------------------------------------------
     3. HERO — background crossfade + rotating word
     ------------------------------------------------------------------ */
  var slides = document.querySelectorAll('.nx-hero__slide');
  if (slides.length > 1 && !reduce) {
    var s = 0;
    setInterval(function () {
      slides[s].classList.remove('is-active');
      s = (s + 1) % slides.length;
      slides[s].classList.add('is-active');
    }, 5200);
  }

  var rotator = document.getElementById('nxRotator');
  if (rotator && !reduce) {
    var words = rotator.querySelectorAll('span');
    var w = 0;
    setInterval(function () {
      words[w].classList.remove('is-active');
      words[w].classList.add('is-out');
      var prev = words[w];
      setTimeout(function () { prev.classList.remove('is-out'); }, 650);
      w = (w + 1) % words.length;
      words[w].classList.add('is-active');
    }, 2600);
  }

  /* ------------------------------------------------------------------
     3b. HERO — glass cards drift with the pointer (desktop only)
     ------------------------------------------------------------------ */
  var aside = document.querySelector('.nx-hero__aside');
  if (aside && !reduce && window.matchMedia('(hover: hover) and (min-width: 1025px)').matches) {
    var hero = document.querySelector('.nx-hero');
    var tx = 0, ty = 0, cx = 0, cy = 0, pRaf = null;

    function drift() {
      cx += (tx - cx) * 0.08;
      cy += (ty - cy) * 0.08;
      aside.style.setProperty('--mx', cx.toFixed(3));
      aside.style.setProperty('--my', cy.toFixed(3));
      if (Math.abs(tx - cx) > 0.01 || Math.abs(ty - cy) > 0.01) {
        pRaf = requestAnimationFrame(drift);
      } else { pRaf = null; }
    }
    function kick() { if (!pRaf) { pRaf = requestAnimationFrame(drift); } }

    hero.addEventListener('mousemove', function (ev) {
      var r = hero.getBoundingClientRect();
      tx = ((ev.clientX - r.left) / r.width - 0.5) * 2;   // -1 .. 1
      ty = ((ev.clientY - r.top) / r.height - 0.5) * 2;
      kick();
    }, { passive: true });

    hero.addEventListener('mouseleave', function () { tx = 0; ty = 0; kick(); });
  }

  /* ------------------------------------------------------------------
     4. PROGRAM TABS — instant switch, no page reload
     ------------------------------------------------------------------ */
  var tabs = document.querySelectorAll('.nx-tab');

  function selectTab(tab) {
    Array.prototype.forEach.call(tabs, function (t) {
      var on = (t === tab);
      t.setAttribute('aria-selected', on ? 'true' : 'false');
      t.tabIndex = on ? 0 : -1;
      var panel = document.getElementById(t.getAttribute('aria-controls'));
      if (!panel) { return; }
      panel.hidden = !on;
      if (on) {
        Array.prototype.forEach.call(panel.querySelectorAll('[data-nx-anim], [data-nx-stagger]'), function (el) {
          el.classList.remove('nx-in');
          void el.offsetWidth;
          el.classList.add('nx-in');
        });
      }
    });
  }

  Array.prototype.forEach.call(tabs, function (tab, i) {
    tab.addEventListener('click', function () { selectTab(tab); });
    tab.addEventListener('keydown', function (ev) {
      var next = null;
      if (ev.key === 'ArrowRight') { next = tabs[(i + 1) % tabs.length]; }
      if (ev.key === 'ArrowLeft')  { next = tabs[(i - 1 + tabs.length) % tabs.length]; }
      if (next) { ev.preventDefault(); next.focus(); selectTab(next); }
    });
  });

  /* ------------------------------------------------------------------
     5. YOUTUBE FACADE — loads iframe on click (keeps LCP super fast)
     ------------------------------------------------------------------ */
  var videoBtn = document.getElementById('nxVideoBtn');
  var videoWrap = document.getElementById('nxVideo');

  function playCampusTour() {
    if (!videoWrap || videoWrap.querySelector('iframe')) return;
    var iframe = document.createElement('iframe');
    iframe.src = 'https://www.youtube.com/embed/Gm-KE2N_5ws?autoplay=1&mute=0&playsinline=1&rel=0';
    iframe.title = 'Maya Devi University campus tour';
    iframe.loading = 'eager';
    iframe.allow = 'autoplay; encrypted-media; picture-in-picture';
    iframe.allowFullscreen = true;
    iframe.style.cssText = 'position:absolute;inset:0;width:100%;height:100%;border:0;z-index:10;';
    videoWrap.appendChild(iframe);
    if (videoBtn) videoBtn.remove();
    var badge = videoWrap.querySelector('.nx-video__badge');
    var cap = videoWrap.querySelector('.nx-video__caption');
    if (badge) badge.style.display = 'none';
    if (cap) cap.style.display = 'none';
  }

  if (videoBtn) {
    videoBtn.addEventListener('click', function (ev) {
      ev.stopPropagation();
      playCampusTour();
    });
  }
  if (videoWrap) {
    videoWrap.style.cursor = 'pointer';
    videoWrap.addEventListener('click', function (ev) {
      if (!videoWrap.querySelector('iframe')) {
        playCampusTour();
      }
    });
  }

  /* ------------------------------------------------------------------
     6. FAQ ACCORDIONS
     ------------------------------------------------------------------ */
  var faqItems = document.querySelectorAll('.nx-faq-item');
  Array.prototype.forEach.call(faqItems, function (item) {
    var btn = item.querySelector('.nx-faq-btn');
    if (!btn) return;
    btn.addEventListener('click', function () {
      var wasOpen = item.classList.contains('is-open');
      Array.prototype.forEach.call(faqItems, function (other) {
        other.classList.remove('is-open');
        var otherBtn = other.querySelector('.nx-faq-btn');
        if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
      });
      if (!wasOpen) {
        item.classList.add('is-open');
        btn.setAttribute('aria-expanded', 'true');
      }
    });
  });

  /* ------------------------------------------------------------------
     7. SCROLL PROGRESS BAR + BACK TO TOP
     ------------------------------------------------------------------ */
  var bar = document.getElementById('nxProgress');
  var topBtn = document.getElementById('nxTopBtn');
  var ticking = false;

  function onScroll() {
    var doc = document.documentElement;
    var max = (doc.scrollHeight - doc.clientHeight) || 1;
    var pct = (doc.scrollTop || document.body.scrollTop) / max * 100;
    if (bar) { bar.style.width = pct + '%'; }
    if (topBtn) { topBtn.classList.toggle('is-on', (doc.scrollTop || 0) > 700); }
    ticking = false;
  }

  window.addEventListener('scroll', function () {
    if (!ticking) { ticking = true; requestAnimationFrame(onScroll); }
  }, { passive: true });
  onScroll();

  if (topBtn) {
    topBtn.addEventListener('click', function (ev) {
      ev.preventDefault();
      window.scrollTo({ top: 0, behavior: reduce ? 'auto' : 'smooth' });
    });
  }

  /* ------------------------------------------------------------------
     8. Smooth in-page anchors
     ------------------------------------------------------------------ */
  Array.prototype.forEach.call(document.querySelectorAll('.nx a[href^="#"]'), function (a) {
    a.addEventListener('click', function (ev) {
      var id = a.getAttribute('href');
      if (id.length < 2) { return; }
      var target = document.querySelector(id);
      if (!target) { return; }
      ev.preventDefault();
      target.scrollIntoView({ behavior: reduce ? 'auto' : 'smooth', block: 'start' });
    });
  });

})();
</script>

<?php require "common/footer.php"; ?>