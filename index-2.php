<?php
/* ==========================================================================
   Maya Devi University — homepage, edition 2
   File : index-2.php
   CSS  : assets/css/index-2.css   (everything namespaced .ix-)
   JS   : assets/js/index-2.js
   Font : Manrope (+ Noticia Text italic for accent words)
   Layout patterns follow the reference sites the client chose:
   cuchd.in (inset hero + search bar, legacy stats + news, stacking
   photo pillars, placement dashboard, stories panel), paruluniversity.ac.in
   (program explorer), dbuu.ac.in / iuu.ac (schools grid, logo row,
   call-us band), dituniversity.edu.in (italic accent words, admission band).
   Photos: compressed copies in assets/uploads/ix/ — none are used on the
   current homepage. index.php is untouched.
   ========================================================================== */

$page_title       = "Best Private University in Dehradun | Maya Devi University";
$page_description = "Maya Devi University is a leading private university in Dehradun, Uttarakhand offering B.Tech, B.Sc, MBA, MCA, Pharmacy, Nursing and more with modern infrastructure, expert faculty and strong placement support.";
$canonical_url    = "https://maya.edu.in/";
$og_image         = "https://maya.edu.in/assets/uploads/campus-2.jpeg";

function ix_asset($path) {
    $t = @filemtime(__DIR__ . '/' . $path);
    return $path . ($t ? '?v=' . $t : '');
}
function ix_img($name) { return 'assets/uploads/ix/' . $name . '.webp'; }

function ix_icon($name, $class = '') {
    static $p = [
        'arrow'    => '<path d="M5 12h14M13 6l6 6-6 6"/>',
        'arrow-ur' => '<path d="M7 17 17 7M8 7h9v9"/>',
        'play'     => '<path d="M7 4.5v15l12-7.5z" fill="currentColor" stroke="none"/>',
        'phone'    => '<path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2z"/>',
        'clock'    => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
        'chev-l'   => '<path d="m15 18-6-6 6-6"/>',
        'chev-r'   => '<path d="m9 18 6-6-6-6"/>',
        'plus'     => '<path d="M12 5v14M5 12h14"/>',
        'search'   => '<circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/>',
        'pin'      => '<path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/>',
        'cal'      => '<rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/>',
        'quote'    => '<path d="M10 7H6a2 2 0 0 0-2 2v4h4v4H4M20 7h-4a2 2 0 0 0-2 2v4h4v4h-4" />',
        'check'    => '<path d="m5 12 5 5L20 7"/>',
        'cap'      => '<path d="M22 10 12 5 2 10l10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5M22 10v6"/>',
        'wrench'   => '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.8-3.8a6 6 0 0 1-7.9 7.9l-6.9 6.9a2.1 2.1 0 0 1-3-3l6.9-6.9a6 6 0 0 1 7.9-7.9z"/>',
        'laptop'   => '<path d="M20 16V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v9m16 0H4m16 0 1.3 2.6a1 1 0 0 1-.9 1.4H3.6a1 1 0 0 1-.9-1.4L4 16"/>',
        'trend'    => '<path d="m22 7-8.5 8.5-5-5L2 17"/><path d="M16 7h6v6"/>',
        'pill'     => '<path d="m10.5 20.5 10-10a4.95 4.95 0 1 0-7-7l-10 10a4.95 4.95 0 1 0 7 7zM8.5 8.5l7 7"/>',
        'pulse'    => '<path d="M22 12h-4l-3 9L9 3l-3 9H2"/>',
        'steth'    => '<path d="M4.8 2.3A.3.3 0 1 0 5 2H4a2 2 0 0 0-2 2v5a6 6 0 0 0 12 0V4a2 2 0 0 0-2-2h-1a.2.2 0 1 0 .3.3M8 15v1a6 6 0 0 0 12 0v-4"/><circle cx="20" cy="10" r="2"/>',
        'rehab'    => '<circle cx="16" cy="4" r="1"/><path d="m18 19 1-7-6 1M5 8l3-3 5.5 3-2.4 3.5M4.2 14.5a5 5 0 0 0 6.9 6M13.8 17.5a5 5 0 0 0-6.9-6"/>',
        'scale'    => '<path d="m16 16 3-8 3 8c-.9.7-1.9 1-3 1s-2.1-.3-3-1zM2 16l3-8 3 8c-.9.7-1.9 1-3 1s-2.1-.3-3-1zM7 21h10M12 3v18M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"/>',
        'leaf'     => '<path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.5 19 2c1 2 2 4.2 2 8 0 5.5-4.8 10-10 10z"/><path d="M2 21c0-3 1.9-5.4 5.1-6C9.5 14.5 12 13 13 12"/>',
        'flask'    => '<path d="M10 2v7.5a2 2 0 0 1-.2.9L4.7 20.5a1 1 0 0 0 .9 1.5h12.8a1 1 0 0 0 .9-1.5l-5.1-10.1a2 2 0 0 1-.2-.9V2M8.5 2h7M7 16h10"/>',
        'palette'  => '<circle cx="13.5" cy="6.5" r=".6"/><circle cx="17.5" cy="10.5" r=".6"/><circle cx="8.5" cy="7.5" r=".6"/><circle cx="6.5" cy="12.5" r=".6"/><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.9 0 1.6-.7 1.6-1.7 0-.4-.2-.8-.4-1.1-.3-.3-.4-.7-.4-1.1a1.6 1.6 0 0 1 1.7-1.7H16c3 0 5.6-2.5 5.6-5.6C22 6 17.5 2 12 2z"/>',
        'utensils' => '<path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2M7 2v20M21 15V2a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3zm0 0v7"/>',
        'cross'    => '<path d="M11 2a2 2 0 0 0-2 2v5H4a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h5v5a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-5h5a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2h-5V4a2 2 0 0 0-2-2z"/>',
        'briefcase'=> '<rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>',
    ];
    return '<svg class="ix-i ' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">' . ($p[$name] ?? '') . '</svg>';
}

/* ---------------- Content (facts from the live site) ---------------- */

/* Hero slides — each photo carries its own headline, text and link.
   [image, label, [line1, line2, accent line3], lead, link url, link label, opens tour?] */
$ix_slides = [
    ['hero-friends', 'Campus life', ['Classmates', 'today.', 'Friends for life.'],
     'Study groups on the lawns, late chats before exams, a 12,000+ strong alumni network after — at MDU you find your people.',
     'campus-life.php', 'See campus life', false],
    ['hero-coding', 'Engineering &amp; technology', ['Code.', 'Build.', 'Innovate.'],
     'B.Tech in CSE, AI &amp; ML, Data Science and Cyber Security &mdash; with specialisations offered with IBM and hands-on computer labs.',
     'engineering-at-maya-devi-university.php', 'Explore B.Tech programs', false],
    ['campus-aerial', 'Selaqui, Dehradun', ['Empower.', 'Educate.', 'Excel.'],
     'A green campus in the foothills of Uttarakhand with modern infrastructure, experienced faculty and industry-aligned programs.',
     '#', 'Take the campus tour', true],
];

/* Programs: [title, url, image, level label, duration, school, summary] */
$ix_programs = [
    ['B.Tech. with Specialization in AI &amp; ML', 'b-tech-ai-ml.php', 'coding', 'ug', '4 Years', 'Engineering', 'Neural networks, machine learning and intelligent systems.'],
    ['B.Tech. Computer Science &amp; Engineering', 'b-tech-cse.php', 'computer-lab', 'ug', '4 Years', 'Engineering', 'Programming, algorithms, system design and software engineering.'],
    ['B.Tech. with Specialization in Cyber Security', 'b.tech-cyber_security.php', 'code-lab', 'ug', '4 Years', 'Engineering', 'Cyber security and digital forensics with IBM.'],
    ['B.Tech. with Specialization in Data Science', 'b.tech-data_science.php', 'ai-lab', 'ug', '4 Years', 'Engineering', 'Data analysis, visualisation and predictive modelling with IBM.'],
    ['M.Tech. in Structural Engineering', 'm.tech-structural-engineering.php', 'structure', 'pg', '2 Years', 'Engineering', 'Advanced structural design, analysis and construction technologies.'],
    ['M.Tech. in Mechanical Engineering', 'm.tech-mechanical-engineering.php', 'mech-class', 'pg', '2 Years', 'Engineering', 'Mechanical systems, design and thermal sciences.'],
    ['Master in Agriculture', 'master-in-agriculture.php', 'field', 'pg', '2 Years', 'Agriculture', 'Crop production, soil management and sustainable farming.'],
    ['M.Sc. in Genetics and Plant Breeding', 'genetics-and-plant-breeding.php', 'learn-bio', 'pg', '2 Years', 'Agriculture', 'Plant genetics, crop improvement and research skills.'],
    ['Diploma in Pharmacy', 'best-d-pharma-college-in-dehradun-uttarakhand.php', 'pharma', 'diploma', '2 Years', 'Pharmacy', 'Pharmaceutical sciences, drug formulation and practical pharmacy.'],
    ['Diploma in Bakery &amp; Confectionary', 'diploma-in-confectionary.php', 'kitchen', 'diploma', '2 Years', 'Hotel Management', 'Baking, pastry arts and confectionery production.'],
    ['Diploma in Food Production', 'diploma-in-food-production.php', 'food-prod', 'diploma', '2 Years', 'Hotel Management', 'Culinary techniques, kitchen operations and cookery standards.'],
    ['General Nursing and Midwifery (GNM)', 'gnm.php', 'nursing-care', 'diploma', '3 Years', 'Nursing', 'Professional nursing, midwifery and patient care.'],
];
$ix_levels = ['all' => 'All programs', 'ug' => 'Undergraduate', 'pg' => 'Postgraduate', 'diploma' => 'Diploma'];
$ix_level_more = ['ug' => 'undergraduate-course.php', 'pg' => 'post-graduate.php', 'diploma' => 'Diploma-course.php'];

$ix_schools = [
    ['Engineering &amp; Technology', 'engineering-at-maya-devi-university.php', 'wrench'],
    ['Computer Engineering &amp; Applications', 'computer-engineering-at-maya-devi-university.php', 'laptop'],
    ['Commerce &amp; Management', 'commerce-management-at-maya-devi-university.php', 'trend'],
    ['Pharmacy', 'pharmacy-at-maya-devi-university.php', 'pill'],
    ['Nursing', 'nursing-at-maya-devi-university.php', 'pulse'],
    ['Paramedical Sciences', 'paramedical-sciences-at-maya-devi-university.php', 'steth'],
    ['Rehabilitation Sciences', 'rehabilitation-sciences-at-maya-devi-university.php', 'rehab'],
    ['Law &amp; Legal Studies', 'law-legal-studies-at-maya-devi-university.php', 'scale'],
    ['Agriculture', 'agriculture-at-maya-devi-university.php', 'leaf'],
    ['Life &amp; Applied Sciences', 'life-applied-science-at-maya-devi-university.php', 'flask'],
    ['Arts &amp; Humanities', 'arts-humanities-at-maya-devi-university.php', 'palette'],
    ['Hotel &amp; Tourism Management', 'hotel-tourism-management-at-maya-devi-university.php', 'utensils'],
    ['Education', 'education-at-maya-devi-university.php', 'cap'],
    ['Health Sciences', 'health-sciences-at-maya-devi-university.php', 'cross'],
    ['Skill Development &amp; Vocational', 'skill-development-vocational-studies-at-maya-devi-university.php', 'briefcase'],
];

/* Stacking "pillars" — copy from the live site's facility text */
$ix_pillars = [
    ['pillar-lab', 'Advanced Computer &amp; Technology Labs', 'Well-equipped labs supporting programming, AI, machine learning, analytics, robotics and digital innovation.'],
    ['campus-aerial', 'A Green Campus in the Foothills', 'Sustainability at the core with lush gardens, solar power and eco-friendly architecture.'],
    ['pillar-library', 'Central Library &amp; E-Resource Hub', 'Books, journals, research papers, digital learning platforms and study areas for academic and competitive exam preparation.'],
    ['pillar-gym', 'Sports, Gym &amp; Fitness', 'A gymnasium and fitness centre, sports grounds and guided fitness programs for every student.'],
    ['pillar-yoga', 'Wellness &amp; Yoga', 'Regular yoga sessions and a health &amp; wellness centre with tie-ups for emergency care and routine check-ups.'],
    ['stage', 'Culture, Clubs &amp; Events', 'Cultural programs, workshops, conferences and guest lectures in our auditorium and seminar halls.'],
];

/* "Learn by doing" tabs — [tab label, image, heading, text, link, link label] */
$ix_learn = [
    ['Science labs', 'learn-bio', 'Microscopes before textbooks', 'Life and applied science students spend real hours in the lab — handling equipment, running experiments and recording results the way researchers do.', 'life-applied-science-at-maya-devi-university.php', 'School of Life &amp; Applied Sciences'],
    ['Electronics &amp; engineering', 'learn-electronics', 'Build it, test it, fix it', 'Engineering students learn on oscilloscopes, circuit boards and workbenches, guided by faculty who have done the work themselves.', 'engineering-at-maya-devi-university.php', 'School of Engineering &amp; Technology'],
    ['Physics practicals', 'learn-physics', 'Theory you can see', 'Practical sessions turn classroom formulas into experiments you set up, measure and explain.', 'sciences.php', 'Sciences at MDU'],
    ['Hospitality training', 'learn-hospitality', 'Service, the professional way', 'Hotel management students train in service, front office and housekeeping on campus before they step into the industry.', 'hotel-tourism-management-at-maya-devi-university.php', 'School of Hotel &amp; Tourism'],
    ['Field work', 'field', 'Learning in the field', 'Agriculture and horticulture students work in fields and polyhouses — planting, measuring and observing crops first-hand.', 'agriculture-at-maya-devi-university.php', 'School of Agriculture'],
];

/* Campus life gallery — [image, caption, category] */
$ix_gallery = [
    ['g-class', 'A lecture in session', 'academics'],
    ['g-lab', 'Lab work in pairs', 'labs'],
    ['g-martial', 'Martial arts on the ground', 'sports'],
    ['g-bar', 'Beverage service training', 'hospitality'],
    ['g-exam', 'Exam hall focus', 'academics'],
    ['g-carnival', 'Winter &amp; New Year carnival lunch', 'events'],
    ['g-chem', 'Chemistry practicals', 'labs'],
    ['g-ground', 'Volleyball on the main ground', 'sports'],
    ['g-housekeeping', 'Housekeeping practicals', 'hospitality'],
    ['g-reading', 'Between classes', 'campus'],
    ['g-boxing', 'Boxing practice', 'sports'],
    ['g-lounge', 'Study lounge', 'campus'],
    ['g-event', 'Lamp lighting at a university event', 'events'],
    ['g-workshop', 'Workshop session', 'academics'],
    ['g-reception', 'Main reception', 'campus'],
    ['g-record', 'Celebrating a student record holder', 'events'],
];
$ix_gallery_cats = ['all' => 'All', 'academics' => 'Academics', 'labs' => 'Labs', 'sports' => 'Sports', 'hospitality' => 'Hospitality', 'events' => 'Events', 'campus' => 'Campus'];

/* Life @MDU photo strip */
$ix_strip = [
    ['g-student1', 'kabaddi', 'g-chem', 'stage', 'g-lounge', 'volleyball', 'learn-physics', 'g-carnival', 'yoga'],
    ['gym', 'g-student2', 'sci-lab', 'g-ground', 'learn-hospitality', 'g-reading', 'computer-lab', 'g-martial', 'field'],
];

$ix_voices = [
    ['Arti Sharma', 'School of Computer Engineering &amp; Applications',
     'Studying at Maya Devi University has been a truly transformative journey. The dedicated faculty, advanced infrastructure, and practical learning approach have shaped my skills and confidence.'],
    ['Harshit Tiwari', 'School of Commerce &amp; Management',
     'The supportive mentors, innovative teaching methods, and ample opportunities for growth have helped me discover my true potential.'],
    ['Anchal', 'School of Commerce &amp; Management',
     'The perfect balance of academic learning and practical exposure. I am proud to be part of an institution that truly prepares its students for global opportunities.'],
    ['Priyanshi Tomar', 'School of Commerce &amp; Management',
     'The exposure to real-world projects and industry interactions has made me confident to step into my professional career.'],
];

/* Admission steps exactly as on application-process.php */
$ix_steps = [
    ['Registration Form', 'Register with basic contact and personal details.'],
    ['Application Form', 'Fill in your information and upload documents.'],
    ['Pay Application Fee', 'Secure online payment to submit your application.'],
    ['Verification &amp; Admission', 'Receive your admission instructions after verification.'],
];

/* Events not shown on the current homepage */
$ix_events = [
    ['International Conference on Sustainable Agriculture — Day 1', 'event-international-agriculture-conference.php', 'event-international-agriculture-conference', 'Agriculture', '05 May 2026'],
    ['Educational Visit to Agrijoy Hydroponics Farm', 'event-hydroponics-farm-visit.php', 'event-hydroponics-farm-visit', 'Agriculture', '23 Mar 2026'],
    ['Searching Eyes Internal Hackathon 2026', 'event-searching-eyes-hackathon-2026.php', 'event-searching-eyes-hackathon-2026', 'Technology', '27 Feb 2026'],
    ['Holi Celebration at the School of Hotel Management', 'event-holi-celebration-hotel-management.php', 'event-holi-celebration-hotel-management', 'Hotel Management', '26 Feb 2026'],
];

$ix_ranks = ['rank-1.webp', 'rank-2.png', 'rank-3.png', 'rank-4.webp', 'rank-5.png'];

$ix_recruiters = [];
for ($i = 1; $i <= 26; $i++) {
    $ext = in_array($i, [5, 6], true) ? 'png' : 'jpg';
    $ix_recruiters[] = 'assets/uploads/icon/' . $i . '.' . $ext;
}

/* Placement posters not shown on the current homepage */
$ix_posters = [];
foreach ([1, 2, 6, 7, 8, 11, 12, 13, 14, 15, 16] as $n) { $ix_posters[] = ix_img('place-' . $n); }

$ix_faqs = [
    ['Is Maya Devi University recognised by the UGC?',
     'Yes. Maya Devi University, Dehradun is recognised by the University Grants Commission (UGC). See the documents on our <a href="university-recognition.php">University Recognition</a> page.'],
    ['What are the placement highlights?',
     'Recent outcomes include 800+ offers, a highest package of ₹48 LPA and an average package of ₹5.5 LPA. See the full <a href="placement.php">placement record</a>.'],
    ['How do I apply for admission?',
     'Apply online at <a href="https://admissions.maya.edu.in" rel="noopener">admissions.maya.edu.in</a>, call <a href="tel:+917351441144">+91 73514 41144</a>, or reach our counsellors from the <a href="contact.php">Contact</a> page.'],
    ['Are scholarships available?',
     'Yes, for eligible students. Criteria are listed on the <a href="scholarship.php">Scholarship</a> page, and our counsellors can tell you what you qualify for.'],
    ['What hostel and transport facilities are there?',
     'Separate hostels for boys and girls with modern amenities, 24x7 security, study spaces and recreational zones. University-managed buses connect major areas of Dehradun.'],
];

$ix_faq_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => array_map(function ($f) {
        return ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => strip_tags($f[1])]];
    }, $ix_faqs),
];

require "common/header.php";
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Noticia+Text:ital,wght@1,400;1,700&display=swap" rel="stylesheet">
<link rel="preload" href="<?php echo ix_img('hero-friends'); ?>" as="image">
<link rel="stylesheet" href="<?php echo ix_asset('assets/css/index-2.css'); ?>">
<script>
(function () {
  var r = document.documentElement;
  r.classList.add('ix-js');
  setTimeout(function () { if (!window.__ixReady) r.classList.add('ix-fail'); }, 4000);
})();
</script>
<script type="application/ld+json"><?php echo json_encode($ix_faq_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>

<main class="ix" id="ixTop">

<!-- =====================================================================
     HERO — inset photo card with search bar (CU pattern)
     ===================================================================== -->
<section class="ix-hero" aria-label="Welcome to Maya Devi University" data-hero>
    <div class="ix-hero__card">
        <div class="ix-hero__slides" aria-hidden="true">
            <?php foreach ($ix_slides as $i => $s): ?>
                <figure class="ix-slide<?php echo $i ? '' : ' is-on'; ?>"><img src="<?php echo ix_img($s[0]); ?>" alt="" <?php echo $i ? 'loading="lazy"' : 'fetchpriority="high"'; ?>></figure>
            <?php endforeach; ?>
        </div>
        <div class="ix-hero__shade" aria-hidden="true"></div>

        <div class="ix-hero__body">
            <ul class="ix-badges" data-r>
                <li>UGC recognised</li>
                <li>Selaqui, Dehradun</li>
                <li>Admissions 2026&ndash;27</li>
            </ul>
            <h1 class="ix-sr">Maya Devi University, Dehradun &mdash; Empower. Educate. Excel.</h1>
            <div class="ix-hcopies" data-r="copies" aria-live="polite">
                <?php foreach ($ix_slides as $i => $s): ?>
                <div class="ix-hcopy<?php echo $i ? '' : ' is-on'; ?>" data-hcopy="<?php echo $i; ?>"<?php echo $i ? ' aria-hidden="true"' : ''; ?>>
                    <p class="ix-hcopy__label"><i aria-hidden="true"></i><?php echo $s[1]; ?></p>
                    <p class="ix-hero__title">
                        <span class="ix-line"><span><?php echo $s[2][0]; ?></span></span>
                        <span class="ix-line"><span><?php echo $s[2][1]; ?></span></span>
                        <span class="ix-line"><span><em><?php echo $s[2][2]; ?></em></span></span>
                    </p>
                    <p class="ix-hero__lead"><?php echo $s[3]; ?></p>
                    <?php if ($s[6]): ?>
                        <button type="button" class="ix-hcopy__link" data-tour><?php echo $s[5]; ?> <?php echo ix_icon('play'); ?></button>
                    <?php else: ?>
                        <a class="ix-hcopy__link" href="<?php echo $s[4]; ?>"<?php echo $i ? ' tabindex="-1"' : ''; ?>><?php echo $s[5]; ?> <?php echo ix_icon('arrow'); ?></a>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="ix-hero__dots" role="tablist" aria-label="Hero photos">
            <?php foreach ($ix_slides as $i => $s): ?>
                <button type="button" role="tab" aria-label="Slide <?php echo $i + 1; ?>: <?php echo strip_tags(html_entity_decode($s[1])); ?>" aria-selected="<?php echo $i ? 'false' : 'true'; ?>" class="<?php echo $i ? '' : 'is-on'; ?>"><i></i></button>
            <?php endforeach; ?>
        </div>

        <div class="ix-hero__bar" data-r style="--d:.6s">
            <button type="button" class="ix-pill ix-pill--line" data-tour>
                <span>View campus tour</span><b><?php echo ix_icon('play'); ?></b>
            </button>
            <form class="ix-search" action="colleges-departments.php" method="get" data-search role="search">
                <?php echo ix_icon('search'); ?>
                <label class="ix-sr" for="ixSearch">Search a program</label>
                <input id="ixSearch" type="search" name="q" placeholder="Search a program — try “B.Tech”, “Nursing”, “MBA”" autocomplete="off" list="ixProgList">
                <datalist id="ixProgList">
                    <?php foreach ($ix_programs as $p): ?><option value="<?php echo html_entity_decode($p[0]); ?>"></option><?php endforeach; ?>
                    <?php foreach ($ix_schools as $s): ?><option value="<?php echo html_entity_decode($s[0]); ?>"></option><?php endforeach; ?>
                </datalist>
            </form>
            <a class="ix-pill ix-pill--green" href="https://admissions.maya.edu.in" rel="noopener">
                <span>Apply now</span><b><?php echo ix_icon('arrow'); ?></b>
            </a>
        </div>
    </div>
</section>

<!-- =====================================================================
     LEGACY + WHAT'S HAPPENING (CU pattern)
     ===================================================================== -->
<section class="ix-sec ix-legacy" aria-labelledby="ix-legacy-t">
    <div class="ix-wrap ix-legacy__grid">
        <div class="ix-legacy__main">
            <h2 id="ix-legacy-t" class="ix-h2" data-r>An illustrious legacy <em>we continue</em> to shape</h2>
            <p class="ix-lead" data-r>Maya Devi University, Dehradun is dedicated to world-class education and holistic development &mdash; with modern infrastructure, experienced faculty and industry-aligned programs.</p>
            <ul class="ix-stats" data-stagger>
                <li><b data-count="120" data-suf="+">120+</b><span>Programs</span><small>Industry-oriented UG &amp; PG</small></li>
                <li><b data-count="100" data-suf="+">100+</b><span>Stalwarts</span><small>Industry mentors</small></li>
                <li><b data-count="35" data-suf="+">35+</b><span>Doctoral faculty</span><small>Research-active</small></li>
                <li><b data-count="12000" data-suf="+">12,000+</b><span>Alumni</span><small>Across the globe</small></li>
                <li><b data-count="15">15</b><span>Schools</span><small>One campus</small></li>
                <li><b data-count="800" data-suf="+">800+</b><span>Placement offers</span><small>Recent drives</small></li>
            </ul>
        </div>

        <aside class="ix-happen" data-r="right" aria-label="What's happening at MDU" data-happen>
            <div class="ix-happen__head">
                <h3>What&rsquo;s happening <em>at MDU</em></h3>
                <div class="ix-arrows">
                    <button type="button" data-happen-prev aria-label="Previous event"><?php echo ix_icon('chev-l'); ?></button>
                    <button type="button" data-happen-next aria-label="Next event"><?php echo ix_icon('chev-r'); ?></button>
                </div>
            </div>
            <div class="ix-happen__view">
                <div class="ix-happen__track" data-happen-track>
                    <?php foreach ($ix_events as $e): ?>
                    <a class="ix-happen__card" href="<?php echo $e[1]; ?>">
                        <img src="<?php echo ix_img($e[2]); ?>" alt="" loading="lazy">
                        <span class="ix-happen__meta"><?php echo ix_icon('cal'); ?><?php echo $e[4]; ?> &middot; <?php echo $e[3]; ?></span>
                        <strong><?php echo $e[0]; ?></strong>
                        <span class="ix-happen__more">Read more <?php echo ix_icon('arrow'); ?></span>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </aside>
    </div>
</section>

<!-- =====================================================================
     RECOGNITION ROW (DBUU pattern)
     ===================================================================== -->
<section class="ix-recog" aria-labelledby="ix-recog-t">
    <div class="ix-wrap ix-recog__inner">
        <h2 id="ix-recog-t" data-r>Proudly <em>recognised</em></h2>
        <ul data-stagger>
            <?php foreach ($ix_ranks as $r): ?><li><img src="assets/uploads/icon/<?php echo $r; ?>" alt="Recognition and accreditation logo" loading="lazy"></li><?php endforeach; ?>
        </ul>
        <a class="ix-link" href="approval-accreditation-membership-ranking.php" data-r>Approvals &amp; rankings <?php echo ix_icon('arrow'); ?></a>
    </div>
</section>

<!-- =====================================================================
     PROGRAM EXPLORER (Parul pattern)
     ===================================================================== -->
<section class="ix-sec ix-explore" id="ix-programs" aria-labelledby="ix-prog-t" data-explore>
    <div class="ix-wrap">
        <div class="ix-explore__head">
            <p class="ix-kicker ix-kicker--light" data-r>Find the right program for your future</p>
            <h2 id="ix-prog-t" class="ix-h2 ix-h2--light" data-r>Explore courses aligned with <em>your career goals</em></h2>
            <p class="ix-explore__sub" data-r>120+ programs across 15 schools. Filter by level, or search for what you want to study.</p>
        </div>

        <div class="ix-filter" data-r>
            <div class="ix-filter__tabs" role="tablist" aria-label="Program level">
                <?php $first = true; foreach ($ix_levels as $k => $label): ?>
                    <button type="button" role="tab" data-level="<?php echo $k; ?>" aria-selected="<?php echo $first ? 'true' : 'false'; ?>"><?php echo $label; ?></button>
                <?php $first = false; endforeach; ?>
            </div>
            <label class="ix-filter__search">
                <?php echo ix_icon('search'); ?>
                <span class="ix-sr">Filter programs</span>
                <input type="search" placeholder="Type to filter, e.g. Pharmacy" data-filter-input>
            </label>
        </div>

        <div class="ix-courses" data-courses>
            <?php foreach ($ix_programs as $i => $c): ?>
            <article class="ix-course" data-level="<?php echo $c[3]; ?>" data-text="<?php echo strtolower(strip_tags(html_entity_decode($c[0] . ' ' . $c[5]))); ?>">
                <a class="ix-course__img" href="<?php echo $c[1]; ?>" tabindex="-1" aria-hidden="true"><img src="<?php echo ix_img($c[2]); ?>" alt="" loading="lazy"></a>
                <div class="ix-course__body">
                    <span class="ix-course__tag"><?php echo $ix_levels[$c[3]]; ?></span>
                    <h3><a href="<?php echo $c[1]; ?>"><?php echo $c[0]; ?></a></h3>
                    <p><?php echo $c[6]; ?></p>
                    <ul class="ix-course__chips">
                        <li><?php echo ix_icon('clock'); ?><?php echo $c[4]; ?></li>
                        <li><?php echo ix_icon('cap'); ?><?php echo $c[5]; ?></li>
                    </ul>
                    <span class="ix-course__go">View details <?php echo ix_icon('arrow'); ?></span>
                </div>
            </article>
            <?php endforeach; ?>
            <p class="ix-courses__none" data-courses-none hidden>No match here yet &mdash; see the <a href="colleges-departments.php">full list of programs</a> or call <a href="tel:+917351441144">+91 73514 41144</a>.</p>
        </div>

        <div class="ix-explore__foot" data-r>
            <a class="ix-pill ix-pill--yellow" href="colleges-departments.php"><span>View all programs</span><b><?php echo ix_icon('arrow'); ?></b></a>
            <span class="ix-explore__links">
                <a href="<?php echo $ix_level_more['ug']; ?>">Undergraduate</a>
                <a href="<?php echo $ix_level_more['pg']; ?>">Postgraduate</a>
                <a href="<?php echo $ix_level_more['diploma']; ?>">Diploma</a>
                <a href="doctoral.php">Ph.D.</a>
            </span>
        </div>
    </div>
</section>

<!-- =====================================================================
     LEARN BY DOING — tabs that swap a large photo (DIT + CU pattern)
     ===================================================================== -->
<section class="ix-sec ix-learn" aria-labelledby="ix-learn-t" data-learn>
    <div class="ix-wrap">
        <div class="ix-head ix-head--split">
            <div>
                <p class="ix-kicker" data-r>How you learn at MDU</p>
                <h2 id="ix-learn-t" class="ix-h2" data-r>Education designed for <em>the real world</em></h2>
            </div>
            <p class="ix-learn__intro" data-r>Every program here mixes classroom teaching with hands-on practice. Pick an area to see what that looks like.</p>
        </div>

        <div class="ix-learn__grid">
            <div class="ix-learn__tabs" role="tablist" aria-label="Ways of learning" data-stagger>
                <?php foreach ($ix_learn as $i => $l): ?>
                <button type="button" role="tab" id="ix-learn-tab-<?php echo $i; ?>" aria-controls="ix-learn-panel" aria-selected="<?php echo $i ? 'false' : 'true'; ?>" data-learn-tab="<?php echo $i; ?>">
                    <span class="ix-learn__no"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
                    <span class="ix-learn__label"><?php echo $l[0]; ?></span>
                    <?php echo ix_icon('arrow'); ?>
                </button>
                <?php endforeach; ?>
            </div>

            <div class="ix-learn__stage" id="ix-learn-panel" role="tabpanel" data-r="right">
                <?php foreach ($ix_learn as $i => $l): ?>
                <figure class="ix-learn__slide<?php echo $i ? '' : ' is-on'; ?>" data-learn-slide="<?php echo $i; ?>"<?php echo $i ? ' aria-hidden="true"' : ''; ?>>
                    <img src="<?php echo ix_img($l[1]); ?>" alt="<?php echo strip_tags(html_entity_decode($l[0])); ?> at Maya Devi University" loading="lazy">
                    <figcaption>
                        <h3><?php echo $l[2]; ?></h3>
                        <p><?php echo $l[3]; ?></p>
                        <a href="<?php echo $l[4]; ?>"><?php echo $l[5]; ?> <?php echo ix_icon('arrow'); ?></a>
                    </figcaption>
                </figure>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- =====================================================================
     PLACEMENTS DASHBOARD (CU + DBUU pattern)
     ===================================================================== -->
<section class="ix-sec ix-place" aria-labelledby="ix-place-t">
    <div class="ix-wrap">
        <div class="ix-head ix-head--split">
            <div>
                <p class="ix-kicker" data-r>Placements</p>
                <h2 id="ix-place-t" class="ix-h2" data-r>Creating the next achievers with <em>top-tier placements</em></h2>
            </div>
            <div class="ix-head__actions" data-r>
                <a class="ix-pill ix-pill--line-dark" href="https://admissions.maya.edu.in" rel="noopener"><span>Apply now</span><b><?php echo ix_icon('arrow'); ?></b></a>
                <a class="ix-pill ix-pill--green" href="placement.php"><span>View placements</span><b><?php echo ix_icon('arrow'); ?></b></a>
            </div>
        </div>

        <div class="ix-dash">
            <div class="ix-dash__panel ix-dash__posters" data-deck data-r="left">
                <p class="ix-dash__label">Recently placed</p>
                <div class="ix-deck__stack">
                    <?php foreach ($ix_posters as $i => $p): ?>
                        <img class="ix-deck__card" src="<?php echo $p; ?>" alt="Placement announcement poster <?php echo $i + 1; ?>" width="1080" height="1080" loading="lazy">
                    <?php endforeach; ?>
                </div>
                <div class="ix-arrows ix-arrows--center">
                    <button type="button" data-deck-prev aria-label="Previous poster"><?php echo ix_icon('chev-l'); ?></button>
                    <span data-deck-count>01 / <?php echo str_pad(count($ix_posters), 2, '0', STR_PAD_LEFT); ?></span>
                    <button type="button" data-deck-next aria-label="Next poster"><?php echo ix_icon('chev-r'); ?></button>
                </div>
            </div>

            <div class="ix-dash__panel ix-dash__nums" data-stagger>
                <div class="ix-num ix-num--big"><span>Highest package offered</span><b><i>&#8377;</i><em data-count="48">48</em> LPA</b></div>
                <div class="ix-num"><span>Placement offers</span><b><em data-count="800">800</em>+</b></div>
                <div class="ix-num"><span>Average package</span><b><i>&#8377;</i><em data-count="5.5" data-dec="1">5.5</em> LPA</b></div>
                <div class="ix-num"><span>Graduates</span><b><em data-count="1250">1,250</em></b></div>
            </div>

            <div class="ix-dash__panel ix-dash__photo" data-r="right">
                <img src="<?php echo ix_img('student-thumbs'); ?>" alt="A Maya Devi University student on campus" loading="lazy">
                <div class="ix-dash__note"><b>Training &amp; placement cell</b><span>Mock interviews, aptitude prep and drives that start in your final year.</span></div>
            </div>
        </div>

        <div class="ix-logos" aria-label="Top recruiters on campus">
            <p class="ix-dash__label">Top recruiters on campus</p>
            <?php foreach ([0, 1] as $row): $set = $row ? array_reverse($ix_recruiters) : $ix_recruiters; ?>
            <div class="ix-logos__row<?php echo $row ? ' ix-logos__row--rev' : ''; ?>">
                <div class="ix-logos__track">
                    <?php for ($k = 0; $k < 2; $k++): foreach (array_slice($set, 0, 13) as $logo): ?>
                        <span class="ix-logos__item"><img src="<?php echo $logo; ?>" alt="<?php echo $k ? '' : 'Recruiter logo'; ?>" loading="lazy"<?php echo $k ? ' aria-hidden="true"' : ''; ?>></span>
                    <?php endforeach; endfor; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =====================================================================
     PILLARS — stacking photo cards on scroll (CU pattern)
     ===================================================================== -->
<section class="ix-pillars" aria-labelledby="ix-pillar-t" data-pillars>
    <div class="ix-wrap">
        <?php foreach ($ix_pillars as $i => $p): ?>
        <article class="ix-pillar" style="--n:<?php echo $i; ?>">
            <img src="<?php echo ix_img($p[0]); ?>" alt="" loading="lazy">
            <div class="ix-pillar__shade" aria-hidden="true"></div>
            <div class="ix-pillar__left">
                <?php if ($i === 0): ?>
                    <h2 id="ix-pillar-t">The pillars of <em>life at MDU</em></h2>
                <?php else: ?>
                    <p class="ix-pillar__title" aria-hidden="true">The pillars of <em>life at MDU</em></p>
                <?php endif; ?>
                <p>Behind every success is a strong foundation. Here is what ours is made of.</p>
            </div>
            <div class="ix-pillar__right">
                <span class="ix-pillar__no"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?> / <?php echo str_pad(count($ix_pillars), 2, '0', STR_PAD_LEFT); ?></span>
                <h3><?php echo $p[1]; ?></h3>
                <p><?php echo $p[2]; ?></p>
            </div>
        </article>
        <?php endforeach; ?>
    </div>
</section>

<!-- =====================================================================
     SCHOOLS GRID (DBUU pattern)
     ===================================================================== -->
<section class="ix-sec ix-sec--soft ix-schools" aria-labelledby="ix-sch-t">
    <div class="ix-wrap">
        <div class="ix-head ix-head--split">
            <div>
                <p class="ix-kicker" data-r>Our schools</p>
                <h2 id="ix-sch-t" class="ix-h2" data-r>The right choice is <em>right in front of you</em></h2>
            </div>
            <a class="ix-link" href="colleges-departments.php" data-r>All schools &amp; departments <?php echo ix_icon('arrow'); ?></a>
        </div>
        <ul class="ix-school-grid" data-stagger>
            <?php foreach ($ix_schools as $s): ?>
            <li><a href="<?php echo $s[1]; ?>">
                <span class="ix-school__ico"><?php echo ix_icon($s[2]); ?></span>
                <span class="ix-school__name"><small>School of</small><?php echo $s[0]; ?></span>
                <span class="ix-school__go"><?php echo ix_icon('arrow-ur'); ?></span>
            </a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<!-- =====================================================================
     CAMPUS LIFE GALLERY — filterable photo wall + lightbox (DBUU / CU)
     ===================================================================== -->
<section class="ix-sec ix-gallery" aria-labelledby="ix-gal-t" data-gallery>
    <div class="ix-wrap">
        <div class="ix-head ix-head--center">
            <p class="ix-kicker" data-r>Campus life</p>
            <h2 id="ix-gal-t" class="ix-h2" data-r>Experience excellence <em>beyond classrooms</em></h2>
            <p class="ix-lead" data-r>Real photos from a regular week at MDU &mdash; tap any picture to see it bigger.</p>
        </div>

        <div class="ix-gallery__filters" role="tablist" aria-label="Photo categories" data-r>
            <?php $first = true; foreach ($ix_gallery_cats as $k => $label): ?>
                <button type="button" role="tab" data-gcat="<?php echo $k; ?>" aria-selected="<?php echo $first ? 'true' : 'false'; ?>"><?php echo $label; ?></button>
            <?php $first = false; endforeach; ?>
        </div>

        <ul class="ix-gallery__wall">
            <?php foreach ($ix_gallery as $i => $g): ?>
            <li class="ix-gal" data-gcat="<?php echo $g[2]; ?>" style="--i:<?php echo $i % 8; ?>">
                <button type="button" data-gal-open="<?php echo $i; ?>" aria-label="Open photo: <?php echo strip_tags(html_entity_decode($g[1])); ?>">
                    <img src="<?php echo ix_img($g[0]); ?>" alt="<?php echo strip_tags(html_entity_decode($g[1])); ?>" loading="lazy">
                    <span class="ix-gal__cap"><small><?php echo $ix_gallery_cats[$g[2]]; ?></small><?php echo $g[1]; ?></span>
                </button>
            </li>
            <?php endforeach; ?>
        </ul>
        <div class="ix-gallery__foot" data-r><a class="ix-pill ix-pill--line-dark" href="campus-life.php"><span>Explore campus life</span><b><?php echo ix_icon('arrow'); ?></b></a></div>
    </div>
</section>

<div class="ix-lightbox" id="ixLightbox" hidden role="dialog" aria-modal="true" aria-label="Photo viewer">
    <button type="button" class="ix-lightbox__close" data-lb-close aria-label="Close photo"><?php echo ix_icon('plus'); ?></button>
    <button type="button" class="ix-lightbox__nav ix-lightbox__nav--prev" data-lb-prev aria-label="Previous photo"><?php echo ix_icon('chev-l'); ?></button>
    <figure class="ix-lightbox__fig"><img src="" alt="" data-lb-img><figcaption data-lb-cap></figcaption></figure>
    <button type="button" class="ix-lightbox__nav ix-lightbox__nav--next" data-lb-next aria-label="Next photo"><?php echo ix_icon('chev-r'); ?></button>
</div>

<!-- =====================================================================
     STORIES PANEL (CU pattern)
     ===================================================================== -->
<section class="ix-sec ix-stories" aria-labelledby="ix-story-t" data-stories>
    <div class="ix-wrap">
        <div class="ix-stories__panel">
            <div class="ix-stories__intro">
                <h2 id="ix-story-t" data-r>Discover inspiring stories <em>from our students</em></h2>
                <p data-r>In their own words &mdash; what studying at Maya Devi University has meant to them.</p>
                <div class="ix-arrows ix-arrows--light" data-r>
                    <button type="button" data-story-prev aria-label="Previous story"><?php echo ix_icon('chev-l'); ?></button>
                    <button type="button" data-story-next aria-label="Next story"><?php echo ix_icon('chev-r'); ?></button>
                </div>
            </div>
            <div class="ix-stories__view">
                <div class="ix-stories__track" data-story-track>
                    <?php foreach ($ix_voices as $i => $v):
                        $parts = preg_split('/\s+/', trim($v[0]));
                        $ini = strtoupper(substr($parts[0], 0, 1) . (isset($parts[1]) ? substr($parts[1], 0, 1) : '')); ?>
                    <blockquote class="ix-story">
                        <span class="ix-story__ini" aria-hidden="true"><?php echo $ini; ?></span>
                        <p><?php echo $v[2]; ?></p>
                        <footer><b><?php echo $v[0]; ?></b><span><?php echo $v[1]; ?></span></footer>
                    </blockquote>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =====================================================================
     ADMISSION BAND (DIT pattern)
     ===================================================================== -->
<section class="ix-admit" aria-labelledby="ix-admit-t" data-join>
    <div class="ix-wrap ix-admit__inner">
        <div class="ix-admit__head" data-r>
            <h2 id="ix-admit-t">Admission <em>2026&ndash;27</em></h2>
            <p>Four simple steps, all online.</p>
            <a class="ix-pill ix-pill--white" href="https://admissions.maya.edu.in" rel="noopener"><span>Apply online</span><b><?php echo ix_icon('arrow'); ?></b></a>
        </div>
        <ol class="ix-admit__steps">
            <?php foreach ($ix_steps as $i => $s): ?>
            <li class="ix-step" data-r style="--d:<?php echo .1 * $i; ?>s">
                <span class="ix-step__no"><?php echo $i + 1; ?></span>
                <b><?php echo $s[0]; ?></b>
                <span><?php echo $s[1]; ?></span>
            </li>
            <?php endforeach; ?>
        </ol>
        <ul class="ix-admit__links" data-stagger>
            <li><a href="application-process.php">Admission procedure</a></li>
            <li><a href="fee-structure.php">Programs &amp; fee structure</a></li>
            <li><a href="scholarship.php">Scholarships</a></li>
            <li><a href="assets/uploads/pdf/MDU_COMBINED_Brochure.pdf" target="_blank" rel="noopener">Download brochure</a></li>
        </ul>
    </div>
</section>

<!-- =====================================================================
     LIFE @MDU — two photo rows drifting in opposite directions
     ===================================================================== -->
<section class="ix-strip" aria-labelledby="ix-strip-t">
    <div class="ix-wrap ix-strip__head">
        <h2 id="ix-strip-t" class="ix-h2" data-r>Life <em>@MDU</em></h2>
        <p data-r>Classes, labs, grounds and stages &mdash; this is what your weeks could look like.</p>
    </div>
    <div class="ix-strip__rows" aria-hidden="true">
        <?php foreach ($ix_strip as $r => $row): ?>
        <div class="ix-strip__row<?php echo $r ? ' ix-strip__row--rev' : ''; ?>">
            <div class="ix-strip__track">
                <?php for ($k = 0; $k < 2; $k++): foreach ($row as $j => $img): ?>
                    <img src="<?php echo ix_img($img); ?>" alt="" loading="lazy" class="ix-strip__img ix-strip__img--<?php echo ($j % 3); ?>">
                <?php endforeach; endfor; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- =====================================================================
     FAQ
     ===================================================================== -->
<section class="ix-sec ix-faq" aria-labelledby="ix-faq-t">
    <div class="ix-wrap ix-faq__grid">
        <div>
            <p class="ix-kicker" data-r>Questions</p>
            <h2 id="ix-faq-t" class="ix-h2" data-r>Things students &amp; parents <em>ask us</em></h2>
            <p class="ix-lead" data-r>Can&rsquo;t find yours? Our counsellors pick up the phone.</p>
            <a class="ix-faq__call" href="tel:+917351441144" data-r><?php echo ix_icon('phone'); ?>+91 73514 41144</a>
        </div>
        <div class="ix-acc" data-stagger>
            <?php foreach ($ix_faqs as $i => $f): ?>
            <details<?php echo $i ? '' : ' open'; ?>>
                <summary><span><?php echo $f[0]; ?></span><?php echo ix_icon('plus'); ?></summary>
                <div class="ix-acc__a"><p><?php echo $f[1]; ?></p></div>
            </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- =====================================================================
     CALL-US BAND (IUU pattern)
     ===================================================================== -->
<section class="ix-callus" aria-labelledby="ix-call-t">
    <div class="ix-wrap ix-callus__inner">
        <div class="ix-callus__photo" data-r="left"><img src="<?php echo ix_img('cta-girl'); ?>" alt="A Maya Devi University student in the library" loading="lazy"></div>
        <div class="ix-callus__copy" data-r="right">
            <p class="ix-kicker ix-kicker--light">Your seat is waiting</p>
            <h2 id="ix-call-t">Start your journey at <em>Maya Devi University</em></h2>
            <div class="ix-callus__row">
                <a class="ix-callus__phone" href="tel:+917351441144"><?php echo ix_icon('phone'); ?><span><small>Call us (admissions)</small>+91 73514 41144</span></a>
                <a class="ix-pill ix-pill--white" href="https://admissions.maya.edu.in" rel="noopener"><span>Apply now</span><b><?php echo ix_icon('arrow'); ?></b></a>
                <a class="ix-pill ix-pill--line" href="contact.php"><span>Visit us</span><b><?php echo ix_icon('pin'); ?></b></a>
            </div>
        </div>
    </div>
</section>

<!-- campus tour video (opens from the hero) -->
<div class="ix-modal" id="ixTour" hidden role="dialog" aria-modal="true" aria-label="Campus tour video">
    <button type="button" class="ix-modal__close" data-tour-close aria-label="Close video"><?php echo ix_icon('plus'); ?></button>
    <div class="ix-modal__frame" data-tour-frame></div>
</div>

</main>

<script src="<?php echo ix_asset('assets/js/index-2.js'); ?>" defer></script>

<?php require "common/footer.php"; ?>
