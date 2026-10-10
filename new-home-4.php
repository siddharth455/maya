<?php
/* ==========================================================================
   Maya Devi University — HOMEPAGE REDESIGN (editorial edition)
   File : new-home-4.php        Preview: /new-home-4.php
   Kit  : common/mx-kit.php  ·  assets/css/mx.css  ·  assets/js/mx.js
   index.php and the earlier drafts (new-home*.php) are untouched.
   All copy, numbers and links below are taken from the live site.
   ========================================================================== */

$page_title       = "Best Private University in Dehradun | Maya Devi University";
$page_description = "Maya Devi University is a leading private university in Dehradun, Uttarakhand offering B.Tech, B.Sc, MBA, MCA, Pharmacy, Nursing and more with modern infrastructure, expert faculty and strong placement support.";
$canonical_url    = "https://maya.edu.in/";
$og_image         = "https://maya.edu.in/assets/uploads/campus-2.jpeg";

require_once __DIR__ . '/common/mx-kit.php';

$DEPT_PAGE = 'new-best-computer-engineering-college-in-dehradun-uttarakhand.php';

/* hero arch slides: [image, caption] */
$hero_slides = [
    ['assets/uploads/h3d/hero-4.webp', 'Students on campus'],
    ['assets/uploads/h3d/maya-3.webp', 'AI &amp; Computer Lab'],
    ['assets/uploads/h3d/campus-6.webp', 'Drone Technology Lab'],
    ['assets/uploads/h3d/hero-1.webp', 'Open-air amphitheatre'],
    ['assets/uploads/h3d/hero-2.webp', 'Sports on the main lawn'],
];

/* [name, link, image, tag] */
$schools = [
    ['Engineering &amp; Technology', 'engineering-at-maya-devi-university.php', 'engineering.webp', 'B.Tech · M.Tech'],
    ['Computer Engineering &amp; Applications', $DEPT_PAGE, 'maya-3.jpeg', 'B.Tech · BCA · MCA'],
    ['Commerce &amp; Management', 'commerce-management-at-maya-devi-university.php', 'campus-4.jpeg', 'BBA · B.Com · MBA'],
    ['Pharmacy', 'pharmacy-at-maya-devi-university.php', 'pharmacy.webp', 'D.Pharm · B.Pharm'],
    ['Nursing', 'nursing-at-maya-devi-university.php', 'nursing.webp', 'GNM · B.Sc'],
    ['Paramedical Sciences', 'paramedical-sciences-at-maya-devi-university.php', 'paramedical.webp', 'Allied health'],
    ['Rehabilitation Sciences', 'rehabilitation-sciences-at-maya-devi-university.php', 'rehab.webp', 'BPT · BOTT'],
    ['Law &amp; Legal Studies', 'law-legal-studies-at-maya-devi-university.php', 'legal.webp', 'BA LLB · LLM'],
    ['Agriculture', 'agriculture-at-maya-devi-university.php', 'agri.webp', 'B.Sc · M.Sc'],
    ['Life &amp; Applied Sciences', 'life-applied-science-at-maya-devi-university.php', 'life-and-allied.webp', 'B.Sc · M.Sc'],
    ['Arts &amp; Humanities', 'arts-humanities-at-maya-devi-university.php', 'arts.webp', 'BA · MA'],
    ['Hotel &amp; Tourism Management', 'hotel-tourism-management-at-maya-devi-university.php', 'hotel.webp', 'BHM · BHMCT'],
    ['Education', 'education-at-maya-devi-university.php', 'education.jpg', 'B.Ed'],
    ['Health Sciences', 'health-sciences-at-maya-devi-university.php', 'health.webp', 'MPH · MHA'],
    ['Skill Development &amp; Vocational', 'skill-development-vocational-studies-at-maya-devi-university.php', 'vocational.webp', 'B.Voc'],
];

/* [title, link, image, credits, duration, text] */
$programs = [
    'diploma' => ['Diploma', 'Diploma-course.php', [
        ['Diploma in Pharmacy', 'best-d-pharma-college-in-dehradun-uttarakhand.php', 'assets/uploads/d.pharmacy.jpeg', '125', '2 Years', 'Trains students in pharmaceutical sciences, drug formulation and practical pharmacy skills.'],
        ['Diploma in Bakery &amp; Confectionary', 'diploma-in-confectionary.php', 'assets/uploads/bakery.webp', '125', '2 Years', 'Baking techniques, pastry arts, confectionery production and dessert presentation.'],
        ['Diploma in Food Production', 'diploma-in-food-production.php', 'assets/uploads/dhm.webp', '125', '2 Years', 'Culinary techniques, kitchen operations, food preparation and professional cookery standards.'],
        ['General Nursing and Midwifery (GNM)', 'gnm.php', 'assets/uploads/gnm.webp', '125', '3 Years', 'Trains students in professional nursing, midwifery and patient care.'],
    ]],
    'ug' => ['Undergraduate', 'undergraduate-course.php', [
        ['B.Tech. with Specialization in AI &amp; ML', 'b-tech-ai-ml.php', 'assets/uploads/ai.jpeg', '125', '4 Years', 'Artificial Intelligence and Machine Learning, covering neural networks and intelligent systems.'],
        ['BCA with Specialization in AI &amp; ML', 'new-bachelor-of-computer-application-ai-and-ml.php', 'assets/uploads/maya-3.jpeg', '120', '3 Years', 'Computer applications with in-depth AI and ML, from programming to deep learning and NLP.'],
        ['B.Tech. with Specialization in Cyber Security', 'b.tech-cyber_security.php', 'assets/uploads/cyber-security.webp', '125', '4 Years', 'Cyber security and digital forensics with IBM, focusing on threat detection and mitigation.'],
        ['B.Tech. Computer Science &amp; Engineering', 'b-tech-cse.php', 'assets/uploads/computer.webp', '125', '4 Years', 'Programming, algorithms, system design and software engineering.'],
        ['B.Tech. with Specialization in Data Science', 'b.tech-data_science.php', 'assets/uploads/data-science.webp', '125', '4 Years', 'Data science with IBM, covering data analysis, visualization and predictive modelling.'],
    ]],
    'pg' => ['Postgraduate', 'post-graduate.php', [
        ['M.Tech. in Structural Engineering', 'm.tech-structural-engineering.php', 'assets/uploads/b.tech-civil.jpg', '125', '2 Years', 'Advanced structural design, analysis and construction technologies.'],
        ['M.Tech. in Mechanical Engineering', 'm.tech-mechanical-engineering.php', 'assets/uploads/mtech-mechanical.webp', '125', '2 Years', 'Design, development and construction of mechanical systems and thermal sciences.'],
        ['Master in Agriculture', 'master-in-agriculture.php', 'assets/uploads/agriculture.webp', '125', '2 Years', 'Crop production, soil management and sustainable farming for research and leadership roles.'],
        ['M.Sc. in Genetics and Plant Breeding', 'genetics-and-plant-breeding.php', 'assets/uploads/genetics.webp', '125', '2 Years', 'Plant genetics, crop improvement and research skills for modern agriculture.'],
    ]],
];

$facilities = [
    ['Advanced Computer &amp; Technology Labs', 'Well-equipped labs supporting programming, AI, machine learning, analytics, robotics and digital innovation.', 'assets/uploads/maya-3.jpeg'],
    ['Central Library &amp; E-Resource Hub', 'Books, journals, research papers, digital learning platforms and study areas to support academic and competitive exam preparation.', 'assets/uploads/library-2.jpeg'],
    ['Health &amp; Wellness Centre', 'On-campus medical support with tie-ups for emergency care and routine health checkups.', 'assets/uploads/social.webp'],
    ['Auditorium &amp; Seminar Halls', 'Designed for conferences, workshops, cultural programs and guest lectures.', 'assets/uploads/auditorium.jpg'],
    ['Secure &amp; Comfortable Hostels', 'Separate hostels for boys and girls with modern amenities, 24x7 security, study spaces and recreational zones.', 'assets/uploads/hostel.jpg'],
    ['Transport Facilities', 'University-managed buses connecting major areas in Dehradun, ensuring safe and convenient travel.', 'assets/uploads/transport.webp'],
];

/* [size, image, tag, title, link] */
$bento = [
    ['xl',   'maya-8.jpeg',     'Sports',      'Play. Compete. Win.',      'sports.php'],
    ['',     'cultural.webp',   'Culture',     'Cultural evenings',        'campus-life.php'],
    ['tall', 'sports.webp',     'Fitness',     'Cycling &amp; fitness',    'sports.php'],
    ['',     'maya-7.jpeg',     'Clubs',       'Chess &amp; indoor games', 'club.php'],
    ['wide', 'transport.webp',  'Commute',     'University buses',         'campus-life.php'],
    ['',     'food-court.webp', 'Dining',      'Food court',               'campus-life.php'],
    ['',     'maya-5.jpeg',     'Hospitality', 'Culinary labs',            'hotel-tourism-management-at-maya-devi-university.php'],
];

$voices = [
    ['Arti Sharma', 'School of Computer Engineering &amp; Applications', 'assets/uploads/bba-2.jpeg',
     'Studying at Maya Devi University has been a truly transformative journey. The dedicated faculty, advanced infrastructure, and practical learning approach have shaped my skills and confidence.'],
    ['Harshit Tiwari', 'School of Commerce &amp; Management', 'assets/uploads/testimoni-2.jpeg',
     'The supportive mentors, innovative teaching methods, and ample opportunities for growth have helped me discover my true potential. From academic excellence to personality development, the university has guided me every step of the way.'],
    ['Anchal', 'School of Commerce &amp; Management', 'assets/uploads/st-3.jpg',
     'Maya Devi University has provided me with the perfect balance of academic learning and practical exposure. I am proud to be a part of an institution that truly prepares its students for global opportunities.'],
    ['Priyanshi Tomar', 'School of Commerce &amp; Management', 'assets/uploads/girl-3.jpeg',
     'The exposure to real-world projects and industry interactions has made me confident to step into my professional career with strong skills and determination.'],
];

/* [title, link, image, category, iso date, date] */
$news = [
    ['Searching Eyes Internal Hackathon 2026', 'event-searching-eyes-hackathon-2026.php', 'assets/uploads/event-searching-eyes-hackathon-2026.webp', 'Computer Engineering', '', 'Event'],
    ['Mushroom Cultivation Training Session Encourages Agri-Entrepreneurship and Skill Development', 'event-mushroom-cultivation-training.php', 'assets/uploads/event-mushroom-cultivation-training.webp', 'Agriculture', '2026-05-11', '11 May 2026'],
    ['School of Law and Legal Studies Students Visit Suddhowala Jail for Academic Exposure', 'event-jail-visit-law-students.php', 'assets/uploads/event-jail-visit-law-students.webp', 'Law', '2026-05-09', '09 May 2026'],
    ['Students Participate in Academic Exposure Visit at AIIMS Rishikesh', 'event-aiims-rishikesh-visit.php', 'assets/uploads/event-aiims-rishikesh-visit.webp', 'Health Sciences', '2026-05-07', '07 May 2026'],
    ['Best Universities for PhD in Dehradun (2026 Guide)', 'best-universities-for-phd-in-dehradun.php', 'assets/uploads/phd-blog.png', 'Research', '2026-05-10', '10 May 2026'],
];

$ranks = [
    ['assets/uploads/icon/rank-1.webp', 'WURI Ranking'],
    ['assets/uploads/icon/rank-2.png',  'Times Higher Education'],
    ['assets/uploads/icon/rank-3.png',  'NIRF'],
    ['assets/uploads/icon/rank-4.webp', 'THE Impact Rankings'],
    ['assets/uploads/icon/rank-5.png',  'Ranking &amp; accreditation'],
];

/* recruiter logos exactly as on placement.php */
$logos = [];
for ($i = 1; $i <= 26; $i++) { $logos[] = 'assets/uploads/icon/' . $i . (in_array($i, [5, 6], true) ? '.png' : '.jpg'); }
$logos_a = array_slice($logos, 0, 13);
$logos_b = array_slice($logos, 13);

$posters = [1, 2, 3, 4, 5, 6, 7, 8, 11, 12];

$faqs = [
    ['Is Maya Devi University recognised by the UGC?',
     'Yes. Maya Devi University, Dehradun is recognised by the University Grants Commission (UGC). You can view the recognition documents on our <a href="university-recognition.php">University Recognition</a> page.'],
    ['What are the placement highlights at Maya Devi University?',
     'Recent placement outcomes include 800+ offers, a highest package of ₹48.00 LPA and an average package of ₹5.5 LPA. See the full <a href="placement.php">placement record</a>.'],
    ['How can I apply for admission?',
     'Apply online through the official admissions portal at <a href="https://admissions.maya.edu.in" rel="noopener">admissions.maya.edu.in</a>, or reach our admission counsellors from the <a href="contact.php">Contact</a> page.'],
    ['Are scholarships available?',
     'Maya Devi University offers scholarships for eligible students. Criteria and details are listed on the <a href="scholarship.php">Scholarship</a> page.'],
    ['What hostel and transport facilities are available on campus?',
     'Separate hostels for boys and girls with modern amenities, 24x7 security, study spaces and recreational zones. University-managed buses connect major areas of Dehradun.'],
];

$page_schema = '<script type="application/ld+json">' . json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => array_map(function ($f) {
        return ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => strip_tags($f[1])]];
    }, $faqs),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

require "common/header.php";
mx_head();
?>

<main class="mx" id="mxTop">
    <div class="mx-progress" aria-hidden="true"><i></i></div>

    <div class="mx-curtain" aria-hidden="true">
        <div class="mx-curtain__word"><span>Maya Devi <em>University</em></span></div>
        <div class="mx-curtain__bar"><i></i></div>
        <div class="mx-curtain__meta"><span>Selaqui, Dehradun</span><span>Empower · Educate · Excel</span></div>
    </div>

    <!-- ================= HERO ================= -->
    <section class="mx-hero" aria-label="Introduction">
        <div class="mx-wrap">

            <div class="mx-hero__grid">
                <div>
                    <h1 class="mx-h1 mx-hero__title" data-mx="split">
                        <span class="mx-line">Empower.</span>
                        <span class="mx-line mx-line--in">Educate.</span>
                        <span class="mx-line"><em>Excel.</em></span>
                    </h1>
                    <div class="mx-hero__copy">
                        <p class="mx-lead" data-mx style="--d:.45s">Maya Devi University offers quality education, expert guidance and a vibrant campus life to prepare you for a successful future — in the green foothills of Uttarakhand.</p>
                        <div class="mx-actions" data-mx style="--d:.55s">
                            <a class="mx-btn mx-btn--solid" href="https://admissions.maya.edu.in" rel="noopener"><span>Apply now</span><?php echo mx_icon('arrow'); ?></a>
                            <a class="mx-btn" href="#programs"><span>Find a program</span><?php echo mx_icon('arrow-d'); ?></a>
                        </div>
                    </div>
                </div>

                <div class="mx-arch" data-mx="fade" style="--d:.2s">
                    <span class="mx-arch__line" aria-hidden="true"></span>
                    <div class="mx-arch__frame" data-mx-slides>
                        <?php foreach ($hero_slides as $i => $s): ?>
                            <img <?php echo $i === 0 ? 'src="' . $s[0] . '" class="is-on" fetchpriority="high"' : 'data-src="' . $s[0] . '"'; ?> data-cap="<?php echo strip_tags(html_entity_decode($s[1])); ?>" alt="<?php echo $i === 0 ? 'Three students of Maya Devi University on campus' : ''; ?>" width="900" height="1100">
                        <?php endforeach; ?>
                    </div>
                    <span class="mx-arch__cap" data-mx-slide-cap><?php echo $hero_slides[0][1]; ?></span>
                    <a class="mx-badge" href="https://admissions.maya.edu.in" rel="noopener" aria-label="Apply for admission 2026–27">
                        <svg class="mx-badge__ring" viewBox="0 0 100 100" aria-hidden="true"><defs><path id="mxRing" d="M50 50m-38 0a38 38 0 1 1 76 0a38 38 0 1 1-76 0"/></defs><text><textPath href="#mxRing">Admissions open · 2026–27 · Apply ·</textPath></text></svg>
                        <?php echo mx_icon('arrow'); ?>
                    </a>
                </div>
            </div>

            <div class="mx-stats">
                <div data-mx style="--d:.1s"><strong data-count="120" data-suf-html="<sup>+</sup>">120<sup>+</sup></strong><span>Programs across 15 schools</span></div>
                <div data-mx style="--d:.2s"><strong data-count="12000" data-suf-html="<sup>+</sup>">12,000<sup>+</sup></strong><span>Alumni</span></div>
                <div data-mx style="--d:.3s"><strong data-count="35" data-suf-html="<sup>+</sup>">35<sup>+</sup></strong><span>Doctoral faculty</span></div>
                <div data-mx style="--d:.4s"><strong data-count="800" data-suf-html="<sup>+</sup>">800<sup>+</sup></strong><span>Placement offers</span></div>
            </div>
        </div>
    </section>

    <!-- ================= TICKER ================= -->
    <div class="mx-ticker" aria-hidden="true">
        <div class="mx-ticker__track">
            <?php for ($k = 0; $k < 2; $k++) foreach ($schools as $s) echo '<span>' . $s[0] . '</span>'; ?>
        </div>
    </div>

    <!-- ================= ABOUT ================= -->
    <section class="mx-sec" id="about">
        <div class="mx-wrap">
            <div class="mx-about">
                <div><span class="mx-kicker" data-mx><b>01</b> About MDU</span></div>
                <div>
                    <p class="mx-statement" data-mx-words>A premier institution in the scenic foothills of Uttarakhand, dedicated to world-class education and <em>holistic development.</em></p>
                </div>
            </div>
            <div class="mx-about__foot">
                <button type="button" class="mx-video" data-mx="clip" data-mx-yt="Gm-KE2N_5ws" aria-label="Play the aerial campus tour of Maya Devi University">
                    <img src="assets/uploads/h3d/hero-1.webp" alt="" width="1700" height="1133" loading="lazy">
                    <span class="mx-video__play"><?php echo mx_icon('play'); ?></span>
                    <span class="mx-video__cap">Aerial campus tour</span>
                </button>
                <div class="mx-body" data-mx style="--d:.15s">
                    <p>The university offers a dynamic learning environment supported by modern infrastructure, experienced faculty, and industry-aligned programs.</p>
                    <p>With a focus on academic excellence, research, and innovation, Maya Devi University prepares students to excel in their chosen fields while nurturing values, leadership skills, and a global perspective.</p>
                    <p style="margin-top:28px"><a class="mx-link" href="about-us.php" style="color:var(--mx-ink)">More about the university <?php echo mx_icon('arrow-ur'); ?></a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= SCHOOLS ================= -->
    <section class="mx-sec mx-sec--white" id="schools">
        <div class="mx-wrap">
            <div class="mx-head">
                <div class="mx-head__side"><span class="mx-kicker" data-mx><b>02</b> Schools</span></div>
                <h2 class="mx-h2" data-mx="split">Fifteen schools. <em>One campus</em> where they meet.</h2>
            </div>
            <div class="mx-index" data-mx-float>
                <?php foreach ($schools as $i => $s): $img = mx_img('assets/uploads/' . $s[2]); ?>
                    <a class="mx-index__row" href="<?php echo $s[1]; ?>" data-img="<?php echo $img; ?>" data-mx style="--d:<?php echo min($i, 6) * 0.04; ?>s">
                        <span class="mx-index__n"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
                        <span class="mx-index__name">School of <?php echo $s[0]; ?></span>
                        <span class="mx-index__tag"><?php echo $s[3]; ?></span>
                        <span class="mx-index__go"><?php echo mx_icon('arrow'); ?></span>
                        <img class="mx-index__thumb" src="<?php echo $img; ?>" alt="" loading="lazy" width="64" height="64">
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ================= PROGRAMS ================= -->
    <section class="mx-sec" id="programs">
        <div class="mx-wrap">
            <div class="mx-head">
                <div class="mx-head__side"><span class="mx-kicker" data-mx><b>03</b> Programs</span></div>
                <div>
                    <h2 class="mx-h2" data-mx="split">Choose where you <em>start.</em></h2>
                    <div class="mx-head__row" style="margin-top:32px">
                        <div class="mx-tabs" role="tablist" aria-label="Program level" data-mx-tabs data-mx>
                            <?php $first = true; foreach ($programs as $key => $g): ?>
                                <button type="button" role="tab" id="tab-<?php echo $key; ?>" aria-controls="panel-<?php echo $key; ?>" aria-selected="<?php echo $key === 'ug' ? 'true' : 'false'; ?>" tabindex="<?php echo $key === 'ug' ? '0' : '-1'; ?>"><?php echo $g[0]; ?></button>
                            <?php endforeach; ?>
                        </div>
                        <a class="mx-link" href="course.php" data-mx>All 120+ programs <?php echo mx_icon('arrow-ur'); ?></a>
                    </div>
                </div>
            </div>

            <?php foreach ($programs as $key => $g): ?>
                <div class="mx-panel" id="panel-<?php echo $key; ?>" role="tabpanel" aria-labelledby="tab-<?php echo $key; ?>" <?php echo $key === 'ug' ? '' : 'hidden'; ?> data-mx-railwrap>
                    <div class="mx-rail" data-mx-rail data-mx-stag>
                        <?php foreach ($g[2] as $i => $c): ?>
                            <article class="mx-card" data-mx style="--d:<?php echo $i * 0.08; ?>s">
                                <div class="mx-card__img">
                                    <img src="<?php echo mx_img($c[2]); ?>" alt="" loading="lazy" width="640" height="480">
                                    <span class="mx-card__tag"><?php echo $g[0]; ?></span>
                                </div>
                                <div class="mx-card__body">
                                    <h3 class="mx-card__title"><a href="<?php echo $c[1]; ?>"><?php echo $c[0]; ?></a></h3>
                                    <p class="mx-card__text"><?php echo $c[5]; ?></p>
                                    <div class="mx-card__meta">
                                        <span><?php echo mx_icon('credit'); ?><?php echo $c[3]; ?> credits</span>
                                        <span><?php echo mx_icon('clock'); ?><?php echo $c[4]; ?></span>
                                        <span class="mx-card__go"><?php echo mx_icon('arrow'); ?></span>
                                    </div>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                    <div class="mx-rail-foot">
                        <div class="mx-rail-bar"><i></i></div>
                        <div class="mx-rail-nav">
                            <button type="button" data-rail-prev aria-label="Previous programs"><?php echo mx_icon('prev'); ?></button>
                            <button type="button" data-rail-next aria-label="Next programs"><?php echo mx_icon('arrow'); ?></button>
                        </div>
                        <a class="mx-link" href="<?php echo $g[1]; ?>">All <?php echo strtolower($g[0]); ?> <?php echo mx_icon('arrow-ur'); ?></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ================= PLACEMENTS ================= -->
    <section class="mx-sec mx-sec--dark" id="placements">
        <div class="mx-wrap">
            <div class="mx-head">
                <div class="mx-head__side"><span class="mx-kicker" data-mx><b>04</b> Placements</span></div>
                <h2 class="mx-h2" data-mx="split">Degrees that turn into <em>offer letters.</em></h2>
            </div>
            <div class="mx-figs">
                <div data-mx><strong data-count="48" data-dec="2" data-pre="₹" data-suf-html=" <small style='font-size:.35em'>LPA</small>">₹48.00 <small style="font-size:.35em">LPA</small></strong><span>Highest package</span></div>
                <div data-mx style="--d:.12s"><strong data-count="800" data-suf-html="+">800+</strong><span>Offers made</span></div>
                <div data-mx style="--d:.24s"><strong data-count="5.5" data-dec="1" data-pre="₹" data-suf-html=" <small style='font-size:.35em'>LPA</small>">₹5.5 <small style="font-size:.35em">LPA</small></strong><span>Average package</span></div>
            </div>
        </div>

        <div style="margin-top:clamp(48px,6vw,80px)" aria-label="Our recruiters">
            <div class="mx-logos"><div class="mx-logos__track">
                <?php for ($k = 0; $k < 2; $k++) foreach ($logos_a as $l) echo '<figure><img src="' . $l . '" alt="' . ($k ? '' : 'Recruiter logo') . '" loading="lazy" width="140" height="60"></figure>'; ?>
            </div></div>
            <div class="mx-logos mx-logos--rev"><div class="mx-logos__track">
                <?php for ($k = 0; $k < 2; $k++) foreach ($logos_b as $l) echo '<figure><img src="' . $l . '" alt="' . ($k ? '' : 'Recruiter logo') . '" loading="lazy" width="140" height="60"></figure>'; ?>
            </div></div>
        </div>

        <div class="mx-wrap" data-mx-railwrap style="margin-top:clamp(56px,7vw,96px)">
            <div class="mx-head__row" style="margin-bottom:28px">
                <h3 class="mx-h3" data-mx>Recently placed</h3>
                <a class="mx-link" href="placement.php" data-mx>Full placement record <?php echo mx_icon('arrow-ur'); ?></a>
            </div>
            <div class="mx-rail" data-mx-rail style="grid-auto-columns:minmax(220px,calc((100% - 96px)/5))">
                <?php foreach ($posters as $p): ?>
                    <a class="mx-poster" href="placement.php"><img src="<?php echo mx_img('assets/uploads/icon/place-' . $p . '.webp'); ?>" alt="Placement announcement of a Maya Devi University student" loading="lazy" width="520" height="520"></a>
                <?php endforeach; ?>
            </div>
            <div class="mx-rail-foot">
                <div class="mx-rail-bar"><i></i></div>
                <div class="mx-rail-nav">
                    <button type="button" data-rail-prev aria-label="Previous"><?php echo mx_icon('prev'); ?></button>
                    <button type="button" data-rail-next aria-label="Next"><?php echo mx_icon('arrow'); ?></button>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= FACILITIES (scrollytelling) ================= -->
    <section class="mx-sec" id="facilities">
        <div class="mx-wrap">
            <div class="mx-head">
                <div class="mx-head__side"><span class="mx-kicker" data-mx><b>05</b> Campus</span></div>
                <h2 class="mx-h2" data-mx="split">Built for the <em>everyday</em> of student life.</h2>
            </div>
            <div class="mx-scrolly" data-mx-scrolly>
                <div class="mx-scrolly__stage" aria-hidden="true">
                    <?php foreach ($facilities as $i => $f): ?>
                        <img <?php echo $i === 0 ? 'src' : 'data-src'; ?>="<?php echo mx_img($f[2]); ?>" alt="" width="900" height="1000" <?php echo $i ? '' : 'loading="lazy"'; ?>>
                    <?php endforeach; ?>
                    <span class="mx-scrolly__count"><b data-scrolly-n>01</b> / <?php echo str_pad(count($facilities), 2, '0', STR_PAD_LEFT); ?></span>
                </div>
                <div>
                    <?php foreach ($facilities as $i => $f): ?>
                        <div class="mx-scrolly__item">
                            <div class="mx-scrolly__pic"><img src="<?php echo mx_img($f[2]); ?>" alt="" loading="lazy" width="800" height="500"></div>
                            <div class="mx-scrolly__n"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></div>
                            <h3><?php echo $f[0]; ?></h3>
                            <p><?php echo $f[1]; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= LIFE ================= -->
    <section class="mx-sec mx-sec--tight mx-sec--paper2" id="life">
        <div class="mx-wrap">
            <div class="mx-head">
                <div class="mx-head__side"><span class="mx-kicker" data-mx><b>06</b> Life at MDU</span></div>
                <div class="mx-head__row">
                    <h2 class="mx-h2" data-mx="split">More than <em>classrooms.</em></h2>
                    <a class="mx-link" href="campus-life.php" data-mx>Campus life <?php echo mx_icon('arrow-ur'); ?></a>
                </div>
            </div>
            <div class="mx-bento">
                <?php foreach ($bento as $i => $b): ?>
                    <a class="mx-tile<?php echo $b[0] ? ' mx-tile--' . $b[0] : ''; ?>" href="<?php echo $b[4]; ?>" data-mx="clip" style="--d:<?php echo ($i % 4) * 0.1; ?>s">
                        <img src="<?php echo mx_img('assets/uploads/' . $b[1]); ?>" alt="" loading="lazy" width="800" height="600">
                        <span class="mx-tile__cap"><span><small><?php echo $b[2]; ?></small><b><?php echo $b[3]; ?></b></span><?php echo mx_icon('arrow'); ?></span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ================= VOICES ================= -->
    <section class="mx-sec" id="voices">
        <div class="mx-wrap">
            <div class="mx-voices" data-mx-voices>
                <div class="mx-voices__pics" data-mx="clip">
                    <?php foreach ($voices as $i => $v): ?>
                        <img src="<?php echo mx_img($v[2]); ?>" alt="<?php echo $v[0]; ?>" loading="lazy" width="600" height="750"<?php echo $i === 0 ? ' class="is-on"' : ''; ?>>
                    <?php endforeach; ?>
                </div>
                <div>
                    <span class="mx-kicker" data-mx><b>07</b> Student voices</span>
                    <div class="mx-voices__q" style="margin-top:28px" data-mx>
                        <?php foreach ($voices as $i => $v): ?>
                            <figure class="mx-voice<?php echo $i === 0 ? ' is-on' : ''; ?>">
                                <blockquote><?php echo $v[3]; ?></blockquote>
                                <figcaption><b><?php echo $v[0]; ?></b><span><?php echo $v[1]; ?></span></figcaption>
                            </figure>
                        <?php endforeach; ?>
                    </div>
                    <div class="mx-voices__nav">
                        <div class="mx-rail-nav">
                            <button type="button" data-voice-prev aria-label="Previous story"><?php echo mx_icon('prev'); ?></button>
                            <button type="button" data-voice-next aria-label="Next story"><?php echo mx_icon('arrow'); ?></button>
                        </div>
                        <span class="mx-voices__count"><b data-voice-n>01</b> / <?php echo str_pad(count($voices), 2, '0', STR_PAD_LEFT); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= NEWS ================= -->
    <section class="mx-sec mx-sec--white" id="news">
        <div class="mx-wrap">
            <div class="mx-head">
                <div class="mx-head__side"><span class="mx-kicker" data-mx><b>08</b> Happening</span></div>
                <div class="mx-head__row">
                    <h2 class="mx-h2" data-mx="split">News from <em>campus.</em></h2>
                    <a class="mx-link" href="event.php" data-mx>All events <?php echo mx_icon('arrow-ur'); ?></a>
                </div>
            </div>
            <div class="mx-news">
                <a class="mx-feature" href="<?php echo $news[0][1]; ?>" data-mx>
                    <div class="mx-feature__img"><img src="<?php echo $news[0][2]; ?>" alt="<?php echo $news[0][0]; ?>" loading="lazy" width="1600" height="838"></div>
                    <div class="mx-meta"><b><?php echo $news[0][3]; ?></b><span><?php echo $news[0][5]; ?></span></div>
                    <h3><?php echo $news[0][0]; ?></h3>
                    <p>An internal hackathon organised by the School of Computer Applications &amp; Engineering.</p>
                </a>
                <div class="mx-list">
                    <?php foreach (array_slice($news, 1) as $i => $n): ?>
                        <a href="<?php echo $n[1]; ?>" data-mx style="--d:<?php echo $i * 0.08; ?>s">
                            <div>
                                <h4><?php echo $n[0]; ?></h4>
                                <div class="mx-meta"><b><?php echo $n[3]; ?></b><time datetime="<?php echo $n[4]; ?>"><?php echo $n[5]; ?></time></div>
                            </div>
                            <img src="<?php echo mx_img($n[2]); ?>" alt="" loading="lazy" width="112" height="112">
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="mx-ranks" style="margin-top:clamp(56px,7vw,96px)" data-mx>
                <?php foreach ($ranks as $r): ?>
                    <figure><img src="<?php echo $r[0]; ?>" alt="<?php echo strip_tags(html_entity_decode($r[1])); ?>" loading="lazy" width="90" height="46"><figcaption><?php echo $r[1]; ?></figcaption></figure>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ================= ADMISSION STEPS ================= -->
    <section class="mx-sec mx-sec--green" id="admissions">
        <div class="mx-wrap">
            <div class="mx-head">
                <div class="mx-head__side"><span class="mx-kicker" data-mx><b>09</b> Admissions</span></div>
                <h2 class="mx-h2" data-mx="split">Four steps to <em>joining us.</em></h2>
            </div>
            <ol class="mx-steps">
                <?php foreach (mx_steps() as $i => $s): ?>
                    <li class="mx-step" data-mx style="--d:<?php echo $i * 0.15; ?>s">
                        <div class="mx-step__n"><b><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></b><i></i></div>
                        <div><h3><?php echo $s[0]; ?></h3><p><?php echo $s[1]; ?></p></div>
                    </li>
                <?php endforeach; ?>
            </ol>
        </div>
    </section>

    <!-- ================= FAQ ================= -->
    <section class="mx-sec" id="faq">
        <div class="mx-wrap mx-faq">
            <div>
                <span class="mx-kicker" data-mx><b>10</b> Questions</span>
                <h2 class="mx-h2" style="margin-top:20px" data-mx="split">Asked <em>often.</em></h2>
                <p class="mx-body" style="margin-top:20px" data-mx>Still unsure? <a class="mx-link" href="contact.php" style="color:var(--mx-ink)">Talk to admissions <?php echo mx_icon('arrow-ur'); ?></a></p>
            </div>
            <div class="mx-faq__list">
                <?php foreach ($faqs as $i => $f): ?>
                    <details data-mx style="--d:<?php echo $i * 0.06; ?>s"<?php echo $i === 0 ? ' open' : ''; ?>>
                        <summary><?php echo $f[0]; ?><?php echo mx_icon('plus'); ?></summary>
                        <p class="mx-faq__a"><?php echo $f[1]; ?></p>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ================= CTA ================= -->
    <section class="mx-sec mx-sec--dark mx-cta">
        <span class="mx-cta__mark" aria-hidden="true" data-mx-par="0.08"></span>
        <div class="mx-wrap mx-cta__grid">
            <h2 class="mx-cta__big" data-mx="split">Your next chapter starts in <em>Selaqui.</em></h2>
            <div class="mx-cta__side" data-mx style="--d:.3s">
                <p>Applications are open for 2026–27. Apply online in minutes, or speak with a counsellor first.</p>
                <div class="mx-actions">
                    <a class="mx-btn mx-btn--green" href="https://admissions.maya.edu.in" rel="noopener"><span>Apply now</span><?php echo mx_icon('arrow'); ?></a>
                    <a class="mx-btn mx-btn--light" href="contact.php"><span>Contact us</span></a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php mx_foot(); ?>
<?php require "common/footer.php"; ?>
