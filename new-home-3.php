<?php
/* ==========================================================================
   Maya Devi University — 3D SCROLL EXPERIENCE ("the campus fly-through")
   File : new-home-3.php   — a completely new design (not a variation of v1/v2)
   CSS  : assets/css/home3s.css      (namespaced .h3s-)
   JS   : assets/js/home3s.js
   Img  : compact WebP copies in assets/uploads/h3d/ (h3d_opt() falls back to the original)
   Idea : the visitor flies down a corridor lined with campus photographs;
          seven stations (welcome, campus, legacy, schools, placements, life, admissions)
          approach in 3D as they scroll. Programs, facilities, stories and news follow
          with scroll-driven 3D as well.
   Note : index.php, new-home.php and new-home-2.php are untouched. Preview: /new-home-3.php
   Theme: Maya green #00a651 + logo navy.
   ========================================================================== */

/* --- SEO variables consumed by common/header.php --------------------------- */
$page_title       = "Best Private University in Dehradun | Maya Devi University";
$page_description = "Maya Devi University is a leading private university in Dehradun, Uttarakhand offering B.Tech, B.Sc, MBA, MCA, Pharmacy, Nursing and more with modern infrastructure, expert faculty and strong placement support.";
$canonical_url    = "https://maya.edu.in/";
$og_image         = "https://maya.edu.in/assets/uploads/campus-2.jpeg";

/* --- Inline icon set (stroke icons, no icon-font dependency) --------------- */
function h3d_icon($name, $class = '') {
    static $p = [
        'arrow-right' => '<path d="M5 12h14M12 5l7 7-7 7"/>',
        'arrow-up-right' => '<path d="M7 17 17 7M7 7h10v10"/>',
        'arrow-down' => '<path d="M12 5v14M19 12l-7 7-7-7"/>',
        'chev-l' => '<path d="m15 18-6-6 6-6"/>',
        'chev-r' => '<path d="m9 18 6-6-6-6"/>',
        'play' => '<path d="M6 4.5v15l13-7.5z" fill="currentColor"/>',
        'plus' => '<path d="M12 5v14M5 12h14"/>',
        'check' => '<circle cx="12" cy="12" r="10"/><path d="m8 12.5 2.8 2.8L16.5 9.5"/>',
        'clock' => '<circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>',
        'calendar' => '<rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/>',
        'cap' => '<path d="M22 10 12 5 2 10l10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5M22 10v6"/>',
        'briefcase' => '<rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>',
        'globe' => '<circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>',
        'flask' => '<path d="M10 2v7.5a2 2 0 0 1-.2.9L4.7 20.5a1 1 0 0 0 .9 1.5h12.8a1 1 0 0 0 .9-1.5l-5.1-10.1a2 2 0 0 1-.2-.9V2M8.5 2h7M7 16h10"/>',
        'leaf' => '<path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.5 19 2c1 2 2 4.2 2 8 0 5.5-4.8 10-10 10z"/><path d="M2 21c0-3 1.9-5.4 5.1-6C9.5 14.5 12 13 13 12"/>',
        'users' => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.9M16 3.1a4 4 0 0 1 0 7.8"/>',
        'book' => '<path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2zM22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>',
        'pulse' => '<path d="M22 12h-4l-3 9L9 3l-3 9H2"/>',
        'mic' => '<path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"/><path d="M19 10v2a7 7 0 0 1-14 0v-2M12 19v4M8 23h8"/>',
        'bed' => '<path d="M2 4v16M2 8h18a2 2 0 0 1 2 2v10M2 17h20M6 8v9"/>',
        'bus' => '<path d="M8 6v6M16 6v6M2 12h19.6M18 18h3s.5-1.7.8-2.8c.1-.4.2-.8.2-1.2 0-.4-.1-.8-.2-1.2l-1.4-5C20.1 6.8 19.1 6 18 6H4a2 2 0 0 0-2 2v10h3M9 18h5"/><circle cx="7" cy="18" r="2"/><circle cx="16" cy="18" r="2"/>',
        'monitor' => '<rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/>',
        'shield' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
        'scale' => '<path d="m16 16 3-8 3 8c-.9.7-1.9 1-3 1s-2.1-.3-3-1zM2 16l3-8 3 8c-.9.7-1.9 1-3 1s-2.1-.3-3-1zM7 21h10M12 3v18M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"/>',
        'wrench' => '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.8-3.8a6 6 0 0 1-7.9 7.9l-6.9 6.9a2.1 2.1 0 0 1-3-3l6.9-6.9a6 6 0 0 1 7.9-7.9z"/>',
        'laptop' => '<path d="M20 16V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v9m16 0H4m16 0 1.3 2.6a1 1 0 0 1-.9 1.4H3.6a1 1 0 0 1-.9-1.4L4 16"/>',
        'trend' => '<path d="m22 7-8.5 8.5-5-5L2 17"/><path d="M16 7h6v6"/>',
        'pill' => '<path d="m10.5 20.5 10-10a4.95 4.95 0 1 0-7-7l-10 10a4.95 4.95 0 1 0 7 7zM8.5 8.5l7 7"/>',
        'steth' => '<path d="M4.8 2.3A.3.3 0 1 0 5 2H4a2 2 0 0 0-2 2v5a6 6 0 0 0 6 6 6 6 0 0 0 6-6V4a2 2 0 0 0-2-2h-1a.2.2 0 1 0 .3.3M8 15v1a6 6 0 0 0 12 0v-4"/><circle cx="20" cy="10" r="2"/>',
        'rehab' => '<circle cx="16" cy="4" r="1"/><path d="m18 19 1-7-6 1M5 8l3-3 5.5 3-2.4 3.5M4.2 14.5a5 5 0 0 0 6.9 6M13.8 17.5a5 5 0 0 0-6.9-6"/>',
        'palette' => '<circle cx="13.5" cy="6.5" r=".6"/><circle cx="17.5" cy="10.5" r=".6"/><circle cx="8.5" cy="7.5" r=".6"/><circle cx="6.5" cy="12.5" r=".6"/><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.9 0 1.6-.7 1.6-1.7 0-.4-.2-.8-.4-1.1-.3-.3-.4-.7-.4-1.1a1.6 1.6 0 0 1 1.7-1.7H16c3 0 5.6-2.5 5.6-5.6C22 6 17.5 2 12 2z"/>',
        'utensils' => '<path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2M7 2v20M21 15V2a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3zm0 0v7"/>',
        'cross' => '<path d="M11 2a2 2 0 0 0-2 2v5H4a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h5v5a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-5h5a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2h-5V4a2 2 0 0 0-2-2z"/>',
        'quote' => '<path d="M3 21c3 0 7-1 7-8V5c0-1.3-.8-2-2-2H4C2.8 3 2 3.8 2 5v6c0 1.3.8 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 0-1 1v2c0 1 0 1 1 1zM15 21c3 0 7-1 7-8V5c0-1.3-.8-2-2-2h-4c-1.2 0-2 .8-2 2v6c0 1.3.8 2 2 2h.8c0 2.3.2 4-2.8 4v3c0 1 0 1 1 1z"/>',
        'star' => '<path d="m12 2 3.1 6.3 6.9 1-5 4.9 1.2 6.9L12 17.8 5.8 21l1.2-6.9-5-4.9 6.9-1z" fill="currentColor"/>',
        'phone' => '<path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2z"/>',
        'file' => '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8zM14 2v6h6M16 13H8M16 17H8M10 9H8"/>',
        'edit' => '<path d="M12 20h9M16.5 3.5a2.1 2.1 0 0 1 3 3L7 19l-4 1 1-4z"/>',
        'chat' => '<path d="M21 11.5a8.4 8.4 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.4 8.4 0 0 1-3.8-.9L3 21l1.9-5.7a8.4 8.4 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.4 8.4 0 0 1 3.8-.9h.5a8.5 8.5 0 0 1 8 8z"/>',
        'award' => '<circle cx="12" cy="8" r="7"/><path d="M8.2 13.9 7 23l5-3 5 3-1.2-9.1"/>',
        'pin' => '<path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>',
        'building' => '<rect x="4" y="2" width="16" height="20" rx="1"/><path d="M9 22v-4h6v4M8 6h.01M12 6h.01M16 6h.01M8 10h.01M12 10h.01M16 10h.01M8 14h.01M12 14h.01M16 14h.01"/>',
    ];
    $inner = $p[$name] ?? '';
    return '<svg class="h3d-i ' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">' . $inner . '</svg>';
}

/* Returns the compact WebP copy in assets/uploads/h3d/ when it exists, else the original */
function h3d_opt($p) {
    $b = 'assets/uploads/h3d/' . pathinfo($p, PATHINFO_FILENAME) . '.webp';
    return is_file(__DIR__ . '/' . $b) ? $b : $p;
}

/* --- Content data (all taken from the live site) --------------------------- */
$h3d_programs = [
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

$h3d_schools = [
    ['Engineering &amp; Technology', 'engineering-at-maya-devi-university.php', 'wrench'],
    ['Computer Applications', 'computer-engineering-at-maya-devi-university.php', 'laptop'],
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

$h3d_facilities = [
    ['Advanced Computer &amp; Technology Labs', 'Well-equipped labs supporting programming, AI, machine learning, analytics, robotics and digital innovation.', 'assets/uploads/computer.webp', 'monitor'],
    ['Central Library &amp; E-Resource Hub', 'Access to books, journals, research papers, digital learning platforms and study areas to assist academic and competitive exam preparation.', 'assets/uploads/library.png', 'book'],
    ['Health &amp; Wellness Centre', 'On-campus medical support with tie-ups for emergency care and routine health checkups.', 'assets/uploads/social.webp', 'pulse'],
    ['Auditorium &amp; Seminar Halls', 'Designed for conferences, workshops, cultural programs and guest lectures.', 'assets/uploads/auditorium.jpg', 'mic'],
    ['Secure &amp; Comfortable Hostels', 'Separate hostels for boys and girls with modern amenities, 24x7 security, study spaces and recreational zones.', 'assets/uploads/hostel.jpg', 'bed'],
    ['Transport Facilities', 'University-managed buses connecting major areas in Dehradun, ensuring safe and convenient travel.', 'assets/uploads/transport.webp', 'bus'],
];

$h3d_steps = [
    ['edit',   'Submit Application',      'Fill in the quick online application with your details and the program you want to join.'],
    ['file',   'Share Your Documents',    'Upload your academic marksheets, certificates and ID proofs for eligibility verification.'],
    ['chat',   'Counselling &amp; Guidance', 'Talk to our admission counsellors about your course, scholarships and career pathway.'],
    ['cap',    'Confirm &amp; Join MDU',   'Secure your seat, complete the formalities and step onto our Selaqui, Dehradun campus.'],
];

$h3d_wall = [
    [['assets/uploads/campus-8.jpeg', 'Campus Life'], ['assets/uploads/auditorium.jpg', 'Auditorium'], ['assets/uploads/sports-5.jpg', 'Sports Ground']],
    [['assets/uploads/maya-3.jpeg', 'AI &amp; Computer Labs'], ['assets/uploads/library-2.jpeg', 'Central Library'], ['assets/uploads/campus-3.jpeg', 'Student Community']],
    [['assets/uploads/campus-6.jpeg', 'Drone &amp; Robotics'], ['assets/uploads/hostel.jpg', 'Hostel Life'], ['assets/uploads/social.webp', 'Social Outreach']],
    [['assets/uploads/campus-4.jpeg', 'Collaborative Learning'], ['assets/uploads/campus-7.jpeg', 'Science Labs'], ['assets/uploads/maya-6.jpeg', 'One Campus, One Family']],
];

$h3d_testimonials = [
    ['Arti Sharma', 'School of Computer Engineering &amp; Application', 'assets/uploads/bba-2.jpeg',
     'Studying at Maya Devi University has been a truly transformative journey. The dedicated faculty, advanced infrastructure, and practical learning approach have shaped my skills and confidence. The university’s focus on both academics and industry exposure has prepared me to face real-world challenges and excel in my chosen career path.'],
    ['Harshit Tiwari', 'School of Commerce &amp; Management', 'assets/uploads/testimoni-2.jpeg',
     'My experience at Maya Devi University has been nothing short of exceptional. The supportive mentors, innovative teaching methods, and ample opportunities for growth have helped me discover my true potential. From academic excellence to personality development, the university has guided me every step of the way toward a successful future.'],
    ['Anchal', 'School of Commerce &amp; Management', 'assets/uploads/st-3.jpg',
     'Maya Devi University has provided me with the perfect balance of academic learning and practical exposure. The modern infrastructure, industry-focused curriculum, and guidance from experienced faculty have shaped my skills and boosted my confidence. I am proud to be a part of an institution that truly prepares its students for global opportunities.'],
    ['Priyanshi Tomar', 'School of Commerce &amp; Management', 'assets/uploads/girl-3.jpeg',
     'My journey at Maya Devi University has been nothing short of transformative. The supportive faculty, engaging classes, and ample opportunities for personal growth have helped me discover my true potential. The exposure to real-world projects and industry interactions has made me confident to step into my professional career with strong skills and determination.'],
];

$h3d_blogs = [
    ['Best Universities for PhD in Dehradun (2026 Guide): Top Doctoral Programs, Research Scope &amp; Admissions', 'best-universities-for-phd-in-dehradun.php', 'assets/uploads/phd-blog.png', 'Research &amp; Doctoral Studies', '2026-05-10', '10 May 2026', 'Looking for the best universities for PhD in Dehradun? Explore Maya Devi University and other top PhD colleges with details on eligibility, admission process and scholarships.'],
    ['Best Nursing College in Dehradun for BSc &amp; GNM: Admission, Fees, Courses &amp; Career Opportunities (2026)', 'best-nursing-college-in-dehradun-bsc-gnm.php', 'assets/uploads/nursing-gnm-blog.png', 'Nursing', '2026-05-05', '05 May 2026', 'Explore the best nursing college in Dehradun offering B.Sc Nursing, GNM, ANM and M.Sc Nursing. Compare courses, eligibility, placements and career scope.'],
    ['B.Tech in Civil Engineering in Uttarakhand: Course Details, Top Colleges, Admission Process &amp; Fees (2026)', 'btech-civil-engineering-uttarakhand.php', 'assets/uploads/civil-blog.png', 'Engineering', '2026-04-30', '30 Apr 2026', 'Learn about course structure, career scope, fees, admission process and top colleges for B.Tech Civil Engineering in Uttarakhand.'],
    ['Best Private B.Ed Colleges in Dehradun: Admission, Fees, Eligibility, Entrance Exams &amp; Career Scope (2026)', 'private-bed-colleges-dehradun.php', 'assets/uploads/bed-blog.png', 'Education', '2026-04-26', '26 Apr 2026', 'Explore the best private B.Ed colleges in Dehradun for 2026 — eligibility, admission process, fees, entrance exams and placements.'],
    ['BBA Colleges in Dehradun: Course Details, Admission Process, Fees, Placements &amp; Career Scope (2026)', 'bba-colleges-in-dehradun.php', 'assets/uploads/bba-blog.png', 'Commerce &amp; Management', '2026-03-30', '30 Mar 2026', 'A detailed look at BBA course structure, fees, placements and career scope at the best BBA colleges in Dehradun.'],
    ['Restoring Lives, Rebuilding Abilities: The Ashtvakra School of Rehabilitation at Maya Devi University', 'rehabilitation-sciences-at-maya-devi-university.php', 'assets/uploads/rehabilitation-blog.png', 'Rehabilitation Sciences', '2026-03-25', '25 Mar 2026', 'Study rehabilitation sciences, physiotherapy and allied rehab programs at the Ashtvakra School of Rehabilitation, Dehradun.'],
];

$h3d_events = [
    ['Mushroom Cultivation Training Session Encourages Agri-Entrepreneurship and Skill Development', 'event-mushroom-cultivation-training.php', 'assets/uploads/event-mushroom-cultivation-training.webp', 'Agriculture', '2026-05-11', '11 May 2026', 'The Department of Botany under the School of Life and Applied Sciences organised a hands-on training session on mushroom cultivation for students.'],
    ['School of Law and Legal Studies Students Visit Suddhowala Jail for Academic Exposure', 'event-jail-visit-law-students.php', 'assets/uploads/event-jail-visit-law-students.webp', 'Law', '2026-05-09', '09 May 2026', 'Students of the School of Law and Legal Studies participated in an educational visit as part of their practical learning in legal studies.'],
    ['Students Participate in Academic Exposure Visit at AIIMS Rishikesh', 'event-aiims-rishikesh-visit.php', 'assets/uploads/event-aiims-rishikesh-visit.webp', 'Health Sciences', '2026-05-07', '07 May 2026', 'An insightful visit exploring the future of anaesthesia through innovation, artificial intelligence and hands-on learning experiences.'],
    ['Students Visit Regional Sericulture Research Station, Sahaspur', 'event-sericulture-research-visit.php', 'assets/uploads/event-sericulture-research-visit.webp', 'Agriculture', '2026-05-06', '06 May 2026', 'An educational visit giving practical exposure to the sericulture industry and its role in sustainable agriculture.'],
];

$h3d_ranks = [
    ['assets/uploads/icon/rank-1.webp', 'WURI Ranking'],
    ['assets/uploads/icon/rank-2.png',  'Times Higher Education Rankings'],
    ['assets/uploads/icon/rank-3.png',  'NIRF Ranking'],
    ['assets/uploads/icon/rank-4.webp', 'THE Impact Rankings'],
    ['assets/uploads/icon/rank-5.png',  'Ranking and accreditation'],
];

/* Recruiter logos exactly as shown on placement.php */
$h3d_recruiters = [];
$h3d_named = [1 => 'Pfizer', 2 => 'Glenmark', 3 => 'Cisco', 4 => 'IBM', 5 => 'Amazon', 6 => 'Tata', 7 => 'Accenture'];
for ($i = 1; $i <= 26; $i++) {
    $ext = in_array($i, [5, 6], true) ? 'png' : 'jpg';
    $h3d_recruiters[] = ['assets/uploads/icon/' . $i . '.' . $ext, ($h3d_named[$i] ?? 'Recruiting partner') . ' — recruiter at Maya Devi University'];
}

$h3d_faqs = [
    ['Is Maya Devi University recognised by the UGC?',
     'Yes. Maya Devi University, Dehradun is recognised by the University Grants Commission (UGC). You can view the recognition documents on our <a href="university-recognition.php">University Recognition</a> page.'],
    ['What are the placement highlights at Maya Devi University?',
     'Recent placement outcomes include 800+ offers, a highest package of ₹48.00 LPA and an average package of ₹5.5 LPA. Our training and placement cell works with leading recruiters — see the full <a href="placement.php">placement record</a>.'],
    ['How can I apply for admission?',
     'You can apply online through the official admissions portal at <a href="https://admissions.maya.edu.in" rel="noopener">admissions.maya.edu.in</a>, or reach our admission counsellors from the <a href="contact.php">Contact</a> page for personal guidance.'],
    ['Are scholarships available?',
     'Maya Devi University offers scholarships for eligible students. Criteria and details are listed on the <a href="scholarship.php">Scholarship</a> page, and our counsellors can help you understand what you qualify for.'],
    ['What hostel and transport facilities are available on campus?',
     'The university has separate hostels for boys and girls with modern amenities, 24x7 security, study spaces and recreational zones. University-managed buses connect major areas of Dehradun.'],
];

/* One photo per school, same order as $h3d_schools */
$h3d_school_img = [
    'engineering.webp', 'maya-3.jpeg', 'campus-4.jpeg', 'pharmacy.webp', 'nursing.webp',
    'paramedical.webp', 'rehab.webp', 'legal.webp', 'agri.webp', 'life-and-allied.webp',
    'arts.webp', 'hotel.webp', 'education.jpg', 'health.webp', 'vocational.webp',
];

/* Life at MDU bento: [size class, image, tag, title, link] */
$h3d_bento = [
    ['xl',   'maya-8.jpeg',      'Sports',      'Play. Compete. Win.',   'sports.php'],
    ['',     'cultural.webp',    'Culture',     'Cultural Evenings',     'campus-life.php'],
    ['tall', 'sports.webp',      'Fitness',     'Cycling &amp; Fitness', 'sports.php'],
    ['',     'maya-7.jpeg',      'Clubs',       'Chess &amp; Indoor Games', 'club.php'],
    ['wide', 'transport.webp',   'Commute',     'University Buses',      'campus-life.php'],
    ['',     'food-court.webp',  'Dining',      'Food Court',            'campus-life.php'],
    ['',     'maya-5.jpeg',      'Hospitality', 'Culinary Labs',         'hotel-tourism-management-at-maya-devi-university.php'],
];

/* Real placement announcement cards (assets/uploads/icon/place-N.webp) */
$h3d_place_a = [1, 2, 3, 4, 5, 6, 7];
$h3d_place_b = [8, 11, 12, 13, 14, 15, 16];

$h3d_step_img = ['maya-3.jpeg', 'library-2.jpeg', 'campus-4.jpeg', 'campus-3.jpeg'];

/* Swap in the optimised copies where they exist */
foreach ($h3d_programs as $k => $g) { foreach ($g['items'] as $i => $c) { $h3d_programs[$k]['items'][$i][2] = h3d_opt($c[2]); } }
foreach ($h3d_facilities as $i => $f) { $h3d_facilities[$i][2] = h3d_opt($f[2]); }
foreach ($h3d_testimonials as $i => $t) { $h3d_testimonials[$i][2] = h3d_opt($t[2]); }
foreach ($h3d_blogs as $i => $b) { $h3d_blogs[$i][2] = h3d_opt($b[2]); }
foreach ($h3d_events as $i => $e) { $h3d_events[$i][2] = h3d_opt($e[2]); }
foreach ($h3d_wall as $c => $col) { foreach ($col as $i => $img) { $h3d_wall[$c][$i][0] = h3d_opt($img[0]); } }


/* ==========================================================================
   Extra data for the fly-through edition
   ========================================================================== */

/* Photos that line the corridor walls (all have optimised copies in assets/uploads/h3d/) */
$h3s_wall_pics = ['campus-3', 'campus-8', 'maya-8', 'library-2', 'maya-3', 'campus-6', 'maya-9', 'cultural', 'campus-4', 'sports', 'maya-7',
                  'food-court', 'campus-7', 'maya-12', 'event', 'technology', 'maya-1', 'campus-5', 'sports-3', 'maya-10', 'maya-5', 'transport'];

/* Two wall planes (left / right) for one scene: 6 photo cells each */
function h3s_walls($scene, $pics) {
    $n = count($pics);
    $html = '<div class="h3s-walls" aria-hidden="true">';
    foreach (['l', 'r'] as $si => $side) {
        $html .= '<div class="h3s-wall h3s-wall--' . $side . '">';
        for ($k = 0; $k < 6; $k++) {
            $name = $pics[($scene * 5 + $k * 3 + $si * 7) % $n];
            $html .= '<span class="h3s-cell"><img loading="lazy" decoding="async" src="assets/uploads/h3d/' . $name . '.webp" alt="" width="640" height="427" draggable="false"></span>';
        }
        $html .= '</div>';
    }
    return $html . '<div class="h3s-floor"></div></div>';
}

/* Placement announcement cards shown on the curved wall (real cards from assets/uploads/icon) */
$h3s_place = [5, 2, 8, 12, 14, 4, 16];

/* Programs flattened into one scrolling track */
$h3s_tracks = [];
foreach ($h3d_programs as $key => $g) {
    foreach ($g['items'] as $c) { $h3s_tracks[] = ['lvl' => $g['label'], 'key' => $key, 'c' => $c]; }
}

/* Scenes (HUD labels) */
$h3s_scene_names = ['Welcome', 'Campus', 'Legacy', 'Schools', 'Placements', 'Life', 'Admissions'];

require "common/header.php";
?>

<!-- Fonts: Bricolage Grotesque (display) + Plus Jakarta Sans (text) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,500..800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/css/home3s.css?v=<?php echo @filemtime(__DIR__ . '/assets/css/home3s.css'); ?>">

<!-- Without JS (or if the script fails) the page stays a normal, readable, stacked page -->
<script>
(function () {
  var r = document.documentElement;
  r.classList.add('h3s-js');
  setTimeout(function () { if (!window.__h3sReady) { r.classList.add('h3s-fail'); } }, 4500);
})();
</script>

<main class="h3s" id="h3sTop">

    <div class="h3s-progress" aria-hidden="true"><i id="h3sBar"></i></div>

    <!-- =====================================================================
         THE JOURNEY — seven stations along one photo corridor
         ===================================================================== -->
    <section class="h3s-journey" id="h3sJourney" aria-label="A journey through Maya Devi University">
        <div class="h3s-stage" id="h3sStage">
            <div class="h3s-camera" id="h3sCamera">
                <div class="h3s-world" id="h3sWorld">

                    <!-- ============ 1 · WELCOME ============ -->
                    <article class="h3s-scene" id="h3s-s1" data-scene data-title="Welcome">
                        <?php echo h3s_walls(0, $h3s_wall_pics); ?>
                        <div class="h3s-layer" style="--lz:0px" data-fly="b" data-delay="0.12">
                            <div class="h3s-blk h3s-hero__b">
                                <p class="h3s-lead" data-in>Maya Devi University offers quality education, expert guidance and a vibrant campus life to prepare you for a successful future.</p>
                                <div class="h3s-actions" data-in>
                                    <a class="h3s-btn h3s-btn--go" href="https://admissions.maya.edu.in" rel="noopener"><span>Apply Now</span><?php echo h3d_icon('arrow-right'); ?></a>
                                    <a class="h3s-btn h3s-btn--line" href="#h3s-programs"><span>Explore Programs</span><?php echo h3d_icon('arrow-down'); ?></a>
                                </div>
                                <ul class="h3s-mini" data-in>
                                    <li><b data-count="120" data-suf="+">120+</b><span>Programs</span></li>
                                    <li><b data-count="12000" data-suf="+">12,000+</b><span>Alumni</span></li>
                                    <li><b data-count="35" data-suf="+">35+</b><span>Doctoral Faculty</span></li>
                                </ul>
                            </div>
                            <span class="h3s-cue" aria-hidden="true"><i></i>Scroll to fly through campus</span>
                        </div>
                        <div class="h3s-layer" style="--lz:120px" data-fly="far" data-delay="0">
                            <div class="h3s-blk h3s-hero__t">
                                <span class="h3s-tag" data-in>Dehradun &middot; Uttarakhand</span>
                                <h1 class="h3s-h1" data-split>
                                    <span class="h3s-l1">Empower. Educate.</span>
                                    <span class="h3s-l2">Excel.</span>
                                </h1>
                            </div>
                        </div>
                    </article>

                    <!-- ============ 2 · CAMPUS ============ -->
                    <article class="h3s-scene" id="h3s-s2" data-scene data-title="Campus">
                        <?php echo h3s_walls(1, $h3s_wall_pics); ?>
                        <div class="h3s-layer" style="--lz:0px" data-fly="l" data-delay="0">
                            <div class="h3s-blk h3s-about__copy">
                                <span class="h3s-tag" data-in>About the university</span>
                                <h2 class="h3s-h2" data-in>A campus where <em>innovation meets inspiration</em></h2>
                                <p data-in>A premier institution dedicated to delivering world-class education and fostering holistic development. Nestled in the scenic foothills of Uttarakhand, the university offers a dynamic learning environment supported by modern infrastructure, experienced faculty and industry-aligned programs.</p>
                                <p class="h3s-p2" data-in>With a focus on academic excellence, research and innovation, we prepare students to excel in their chosen fields while nurturing values, leadership skills and a global perspective.</p>
                                <a class="h3s-btn h3s-btn--line" data-in href="about-us.php"><span>More about us</span><?php echo h3d_icon('arrow-right'); ?></a>
                            </div>
                        </div>
                        <div class="h3s-layer" style="--lz:90px" data-fly="r" data-delay="0.1">
                            <div class="h3s-blk h3s-about__media">
                                <div class="h3s-screen" id="h3sVideo">
                                    <img src="https://i.ytimg.com/vi/Gm-KE2N_5ws/hqdefault.jpg" onerror="this.onerror=null;this.src='assets/uploads/h3d/hero-1.webp';" alt="Aerial campus tour of Maya Devi University, Dehradun" width="1280" height="720" loading="lazy">
                                    <span class="h3s-screen__badge"><?php echo h3d_icon('play', 'h3d-i--sm'); ?> Campus tour</span>
                                    <button type="button" class="h3s-screen__play" id="h3sVideoBtn" aria-label="Play the Maya Devi University campus tour video"><span><?php echo h3d_icon('play'); ?></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="h3s-layer" style="--lz:140px" data-fly="bl" data-delay="0.2"><figure class="h3s-float h3s-float--1"><img loading="lazy" src="assets/uploads/h3d/campus-3.webp" alt="Students on the steps of the campus" width="800" height="533"></figure></div>
                        <div class="h3s-layer" style="--lz:190px" data-fly="tr" data-delay="0.28"><figure class="h3s-float h3s-float--2"><img loading="lazy" src="assets/uploads/h3d/campus-8.webp" alt="Students reading together on campus" width="800" height="533"></figure></div>
                    </article>

                    <!-- ============ 3 · LEGACY ============ -->
                    <article class="h3s-scene" id="h3s-s3" data-scene data-title="Legacy">
                        <?php echo h3s_walls(2, $h3s_wall_pics); ?>
                        <div class="h3s-layer" style="--lz:-420px" data-fly="far" data-delay="0"><div class="h3s-legacy__photo" aria-hidden="true"><img loading="lazy" src="assets/uploads/h3d/hero-4.webp" alt="" width="1800" height="1200"></div></div>
                        <div class="h3s-layer" style="--lz:0px" data-fly="t" data-delay="0">
                            <div class="h3s-blk h3s-legacy__head">
                                <span class="h3s-tag" data-in>Our legacy</span>
                                <h2 class="h3s-h2" data-in>An illustrious legacy we <em>shape</em></h2>
                            </div>
                        </div>
                        <div class="h3s-layer" style="--lz:70px" data-fly="l" data-delay="0.06"><div class="h3s-blk h3s-num h3s-num--1"><b data-count="120" data-suf="+">120+</b><span>Programs</span><small>Industry-oriented undergraduate &amp; postgraduate programs focused on employability.</small></div></div>
                        <div class="h3s-layer" style="--lz:160px" data-fly="tr" data-delay="0.14"><div class="h3s-blk h3s-num h3s-num--2"><b data-count="100" data-suf="+">100+</b><span>Stalwarts</span><small>Industry stalwarts and mentors collaborating with students &amp; faculty.</small></div></div>
                        <div class="h3s-layer" style="--lz:30px" data-fly="bl" data-delay="0.22"><div class="h3s-blk h3s-num h3s-num--3"><b data-count="35" data-suf="+">35+</b><span>Doctoral Faculty</span><small>Research-active doctoral faculty guiding projects &amp; publications.</small></div></div>
                        <div class="h3s-layer" style="--lz:120px" data-fly="r" data-delay="0.3"><div class="h3s-blk h3s-num h3s-num--4"><b data-count="12000" data-suf="+">12,000+</b><span>Alumni</span><small>A strong alumni network across industries and geographies.</small></div></div>
                        <div class="h3s-layer" style="--lz:0px" data-fly="b" data-delay="0.36">
                            <div class="h3s-blk h3s-ach">
                                <div><b data-count="1890">1,890</b><span>Students</span></div>
                                <div><b data-count="1250">1,250</b><span>Graduates</span></div>
                                <div><b data-count="750">750</b><span>Award winning</span></div>
                                <div><b data-count="250">250</b><span>Faculty</span></div>
                            </div>
                        </div>
                    </article>

                    <!-- ============ 4 · SCHOOLS ============ -->
                    <article class="h3s-scene" id="h3s-s4" data-scene data-title="Schools">
                        <?php echo h3s_walls(3, $h3s_wall_pics); ?>
                        <div class="h3s-layer" style="--lz:0px" data-fly="tl" data-delay="0">
                            <div class="h3s-blk h3s-schools__head">
                                <span class="h3s-tag" data-in>Colleges &amp; departments</span>
                                <h2 class="h3s-h2" data-in>Fifteen schools. <em>One campus.</em></h2>
                            </div>
                            <a class="h3s-btn h3s-btn--line h3s-schools__all" href="colleges-departments.php"><span>View all colleges &amp; departments</span><?php echo h3d_icon('arrow-right'); ?></a>
                        </div>
                        <div class="h3s-layer h3s-layer--3d">
                            <div class="h3s-blk h3s-grid">
                                <?php foreach ($h3d_schools as $si => $s): ?>
                                    <a class="h3s-school" href="<?php echo $s[1]; ?>" style="<?php $h3s_dirs = [[-1, -1], [1, -1], [-1, 0], [1, 0], [0, -1], [-1, 1], [1, 1], [0, 1]]; $h3s_d = $h3s_dirs[$si % 8]; ?>--dx:<?php echo $h3s_d[0] * (900 + (($si * 83) % 520)); ?>px;--dy:<?php echo $h3s_d[1] * (360 + (($si * 61) % 260)); ?>px;--dz:<?php echo -(220 + (($si * 137) % 620)); ?>px;--rx:<?php echo (($si * 53) % 70) - 35; ?>deg;--ry:<?php echo (($si * 71) % 90) - 45; ?>deg">
                                        <img loading="lazy" decoding="async" src="<?php echo h3d_opt('assets/uploads/' . $h3d_school_img[$si]); ?>" alt="" width="560" height="420" draggable="false">
                                        <span class="h3s-school__ico"><?php echo h3d_icon($s[2]); ?></span>
                                        <span class="h3s-school__name"><?php echo $s[0]; ?></span>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </article>

                    <!-- ============ 5 · PLACEMENTS ============ -->
                    <article class="h3s-scene" id="h3s-s5" data-scene data-title="Placements">
                        <?php echo h3s_walls(4, $h3s_wall_pics); ?>
                        <div class="h3s-layer" style="--lz:0px" data-fly="t" data-delay="0">
                            <div class="h3s-blk h3s-place__head">
                                <span class="h3s-tag" data-in>Placements &amp; career support</span>
                                <h2 class="h3s-h2" data-in>Employers trust <em>our talent</em></h2>
                            </div>
                            <ul class="h3s-blk h3s-kpis" data-in>
                                <li><b data-count="800" data-suf="+">800+</b><span>Placement offers</span></li>
                                <li class="is-hot"><b data-count="48" data-dec="2" data-pre="₹" data-suf=" LPA">₹48.00 LPA</b><span>Highest package</span></li>
                                <li><b data-count="5.5" data-dec="1" data-pre="₹" data-suf=" LPA">₹5.5 LPA</b><span>Average package</span></li>
                            </ul>
                            <a class="h3s-btn h3s-btn--line h3s-place__more" href="placement.php"><span>Explore the placement record</span><?php echo h3d_icon('arrow-right'); ?></a>
                        </div>
                        <div class="h3s-layer h3s-layer--3d">
                            <div class="h3s-blk h3s-arc" aria-label="Placement announcements for Maya Devi University students">
                                <?php foreach ($h3s_place as $j => $n): ?>
                                    <figure class="h3s-arc__card" style="--a:<?php echo ($j - 3) * 13; ?>deg">
                                        <img loading="lazy" decoding="async" src="<?php echo h3d_opt('assets/uploads/icon/place-' . $n . '.webp'); ?>" alt="Placement announcement for a Maya Devi University student" width="520" height="520" draggable="false">
                                    </figure>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </article>

                    <!-- ============ 6 · LIFE ============ -->
                    <article class="h3s-scene" id="h3s-s6" data-scene data-title="Life">
                        <?php echo h3s_walls(5, $h3s_wall_pics); ?>
                        <div class="h3s-layer" style="--lz:0px" data-fly="l" data-delay="0">
                            <div class="h3s-blk h3s-life__head">
                                <span class="h3s-tag" data-in>Campus life</span>
                                <h2 class="h3s-h2" data-in>Life beyond <em>the classroom</em></h2>
                                <p data-in>Sports, culture, clubs and great food — the moments that make every day at MDU memorable.</p>
                                <a class="h3s-btn h3s-btn--line" data-in href="campus-life.php"><span>Explore campus life</span><?php echo h3d_icon('arrow-right'); ?></a>
                            </div>
                        </div>
                        <?php foreach ([
                            ['maya-8', 'Sports', 'Play. Compete. Win.', 'sports.php', -90, 'tl', 0.05],
                            ['cultural', 'Culture', 'Cultural evenings', 'campus-life.php', 60, 'tr', 0.14],
                            ['sports', 'Fitness', 'Cycling &amp; fitness', 'sports.php', 170, 'r', 0.22],
                            ['maya-7', 'Clubs', 'Chess &amp; indoor games', 'club.php', 120, 'bl', 0.3],
                            ['food-court', 'Dining', 'The food court', 'campus-life.php', 30, 'br', 0.38],
                        ] as $li => $ph): ?>
                            <div class="h3s-layer" style="--lz:<?php echo $ph[4]; ?>px" data-fly="<?php echo $ph[5]; ?>" data-delay="<?php echo $ph[6]; ?>">
                                <a class="h3s-shot h3s-shot--<?php echo $li + 1; ?>" href="<?php echo $ph[3]; ?>">
                                    <img loading="lazy" decoding="async" src="assets/uploads/h3d/<?php echo $ph[0]; ?>.webp" alt="<?php echo html_entity_decode(strip_tags($ph[2]), ENT_QUOTES, 'UTF-8'); ?> at Maya Devi University" width="800" height="533" draggable="false">
                                    <span class="h3s-shot__cap"><small><?php echo $ph[1]; ?></small><?php echo $ph[2]; ?></span>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </article>

                    <!-- ============ 7 · ADMISSIONS ============ -->
                    <article class="h3s-scene" id="h3s-s7" data-scene data-title="Admissions">
                        <?php echo h3s_walls(6, $h3s_wall_pics); ?>
                        <div class="h3s-layer" style="--lz:-300px" data-fly="far" data-delay="0"><div class="h3s-portal" aria-hidden="true"><i></i><i></i><i></i></div></div>
                        <div class="h3s-layer" style="--lz:40px" data-fly="t" data-delay="0.1">
                            <div class="h3s-blk h3s-join__t">
                                <span class="h3s-tag" data-in>Admissions are open</span>
                                <h2 class="h3s-h2 h3s-h2--xl" data-in>Your future <em>starts here</em></h2>
                                <p class="h3s-lead" data-in>Four simple steps take you from application to campus. Talk to our admission counsellors or apply online in minutes.</p>
                                <div class="h3s-actions" data-in>
                                    <a class="h3s-btn h3s-btn--go" href="https://admissions.maya.edu.in" rel="noopener"><span>Apply Online</span><?php echo h3d_icon('arrow-right'); ?></a>
                                    <a class="h3s-btn h3s-btn--line" href="contact.php"><span>Talk to a Counsellor</span><?php echo h3d_icon('phone'); ?></a>
                                    <a class="h3s-btn h3s-btn--line" href="fee-structure.php"><span>Fee Structure</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="h3s-layer" style="--lz:120px" data-fly="b" data-delay="0.25">
                            <ol class="h3s-blk h3s-steps">
                                <?php foreach ($h3d_steps as $i => $st): ?>
                                    <li class="h3s-step">
                                        <img loading="lazy" decoding="async" src="<?php echo h3d_opt('assets/uploads/' . $h3d_step_img[$i]); ?>" alt="" width="640" height="427" draggable="false">
                                        <span class="h3s-step__no"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
                                        <b><?php echo $st[1]; ?></b>
                                    </li>
                                <?php endforeach; ?>
                            </ol>
                        </div>
                    </article>

                </div>
            </div>

            <div class="h3s-fog" aria-hidden="true"></div>
            <div class="h3s-warp" aria-hidden="true"></div>

            <!-- HUD: where am I in the journey -->
            <nav class="h3s-hud" aria-label="Journey stations">
                <span class="h3s-hud__now" aria-live="off"><b id="h3sNow">01</b> / 07 <em id="h3sName">Welcome</em></span>
                <ol class="h3s-rail">
                    <?php foreach ($h3s_scene_names as $i => $nm): ?>
                        <li><button type="button" data-goto="<?php echo $i; ?>" aria-label="Go to <?php echo $nm; ?>"><span><?php echo $nm; ?></span></button></li>
                    <?php endforeach; ?>
                </ol>
            </nav>
        </div>
    </section>

    <!-- =====================================================================
         PROGRAMS — pinned horizontal 3D scroller
         ===================================================================== -->
    <section class="h3s-prog" id="h3s-programs" data-prog aria-labelledby="h3s-prog-t">
        <div class="h3s-prog__pin">
            <div class="h3s-prog__head">
                <div>
                    <span class="h3s-tag">Academic programs</span>
                    <h2 class="h3s-h2" id="h3s-prog-t">Programs built around <em>industry demand</em></h2>
                </div>
                <div class="h3s-prog__side">
                    <p>Keep scrolling — the programs slide past in 3D.</p>
                    <div class="h3s-prog__links">
                        <?php foreach ($h3d_programs as $g): ?><a href="<?php echo $g['more']; ?>"><?php echo $g['label']; ?> <?php echo h3d_icon('arrow-up-right', 'h3d-i--sm'); ?></a><?php endforeach; ?>
                    </div>
                    <span class="h3s-prog__count"><b id="h3sProgNow">01</b> / <?php echo str_pad(count($h3s_tracks), 2, '0', STR_PAD_LEFT); ?></span>
                </div>
            </div>
            <div class="h3s-prog__view">
                <div class="h3s-prog__track" id="h3sTrack">
                    <?php foreach ($h3s_tracks as $t): $c = $t['c']; ?>
                        <a class="h3s-pc" href="<?php echo $c[1]; ?>">
                            <img loading="lazy" decoding="async" src="<?php echo $c[2]; ?>" alt="" width="640" height="427" draggable="false">
                            <span class="h3s-pc__lvl"><?php echo $t['lvl']; ?></span>
                            <span class="h3s-pc__body">
                                <b><?php echo $c[0]; ?></b>
                                <em><?php echo $c[4]; ?> &middot; Credits <?php echo $c[3]; ?></em>
                            </span>
                            <span class="h3s-pc__go"><?php echo h3d_icon('arrow-up-right'); ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="h3s-prog__bar" aria-hidden="true"><i id="h3sProgBar"></i></div>
        </div>
    </section>

    <!-- =====================================================================
         FACILITIES — sticky photo that changes as you scroll the list
         ===================================================================== -->
    <section class="h3s-fac" id="h3s-fac" data-fac aria-labelledby="h3s-fac-t">
        <div class="h3s-wrap">
            <div class="h3s-fac__intro">
                <span class="h3s-tag">Campus infrastructure</span>
                <h2 class="h3s-h2" id="h3s-fac-t">Modern facilities that <em>empower every student</em></h2>
            </div>
            <div class="h3s-fac__grid">
                <div class="h3s-fac__sticky">
                    <div class="h3s-fac__stack">
                        <?php foreach ($h3d_facilities as $i => $f): ?>
                            <figure class="h3s-fac__img<?php echo $i === 0 ? ' is-on' : ''; ?>"><img loading="lazy" decoding="async" src="<?php echo $f[2]; ?>" alt="<?php echo html_entity_decode(strip_tags($f[0]), ENT_QUOTES, 'UTF-8'); ?> at Maya Devi University" width="900" height="600"></figure>
                        <?php endforeach; ?>
                    </div>
                    <span class="h3s-fac__no" id="h3sFacNo">01</span>
                </div>
                <div class="h3s-fac__list">
                    <?php foreach ($h3d_facilities as $i => $f): ?>
                        <article class="h3s-fac__item<?php echo $i === 0 ? ' is-on' : ''; ?>" data-fac-item="<?php echo $i; ?>">
                            <span class="h3s-fac__ico"><?php echo h3d_icon($f[3]); ?></span>
                            <h3><?php echo $f[0]; ?></h3>
                            <p><?php echo $f[1]; ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         VOICES — student stories
         ===================================================================== -->
    <section class="h3s-voices" id="h3s-voices" data-voices aria-labelledby="h3s-voices-t">
        <div class="h3s-wrap">
            <div class="h3s-voices__head">
                <span class="h3s-tag">Student voices</span>
                <h2 class="h3s-h2" id="h3s-voices-t">Stories of ambition, <em>learning &amp; success</em></h2>
            </div>
            <div class="h3s-voices__stage">
                <?php foreach ($h3d_testimonials as $i => $t): ?>
                    <figure class="h3s-voice<?php echo $i === 0 ? ' is-on' : ''; ?>">
                        <div class="h3s-voice__photo"><img loading="lazy" decoding="async" src="<?php echo $t[2]; ?>" alt="<?php echo $t[0]; ?>, student at Maya Devi University" width="520" height="520"></div>
                        <div class="h3s-voice__body">
                            <span class="h3s-voice__q"><?php echo h3d_icon('quote'); ?></span>
                            <blockquote>“<?php echo $t[3]; ?>”</blockquote>
                            <figcaption><b><?php echo $t[0]; ?></b><span><?php echo $t[1]; ?></span></figcaption>
                        </div>
                    </figure>
                <?php endforeach; ?>
            </div>
            <div class="h3s-voices__bar">
                <button type="button" class="h3s-round" data-voice-prev aria-label="Previous story"><?php echo h3d_icon('chev-l'); ?></button>
                <div class="h3s-voices__dots" data-voice-dots></div>
                <button type="button" class="h3s-round" data-voice-next aria-label="Next story"><?php echo h3d_icon('chev-r'); ?></button>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         TRUSTED BY — recruiters + rankings
         ===================================================================== -->
    <section class="h3s-trust" aria-label="Recruiters and rankings">
        <p class="h3s-trust__label">Recent recruiters</p>
        <div class="h3s-marq"><div class="h3s-marq__track">
            <?php for ($p = 0; $p < 2; $p++): foreach ($h3d_recruiters as $rec): ?>
                <span class="h3s-logo"><img loading="lazy" src="<?php echo $rec[0]; ?>" alt="<?php echo $p ? '' : $rec[1]; ?>" height="56"></span>
            <?php endforeach; endfor; ?>
        </div></div>
        <p class="h3s-trust__label h3s-trust__label--2">Rankings &amp; accreditations</p>
        <div class="h3s-marq h3s-marq--rev"><div class="h3s-marq__track">
            <?php for ($p = 0; $p < 3; $p++): foreach ($h3d_ranks as $r): ?>
                <span class="h3s-logo h3s-logo--rank"><img loading="lazy" src="<?php echo $r[0]; ?>" alt="<?php echo $p ? '' : $r[1]; ?>" height="70"></span>
            <?php endforeach; endfor; ?>
        </div></div>
    </section>

    <!-- =====================================================================
         STORIES — blog + events
         ===================================================================== -->
    <section class="h3s-news" aria-labelledby="h3s-news-t">
        <div class="h3s-wrap">
            <div class="h3s-news__head">
                <div>
                    <span class="h3s-tag">From the blog</span>
                    <h2 class="h3s-h2" id="h3s-news-t">Insights &amp; <em>admission guides</em></h2>
                </div>
                <a class="h3s-btn h3s-btn--line" href="blog.php"><span>Read all articles</span><?php echo h3d_icon('arrow-right'); ?></a>
            </div>
        </div>
        <div class="h3s-hscroll" data-hscroll>
            <?php foreach ($h3d_blogs as $b): ?>
                <a class="h3s-post" href="<?php echo $b[1]; ?>">
                    <span class="h3s-post__img"><img loading="lazy" decoding="async" src="<?php echo $b[2]; ?>" alt="" width="640" height="360" draggable="false"><em><?php echo $b[3]; ?></em></span>
                    <b><?php echo $b[0]; ?></b>
                    <time datetime="<?php echo $b[4]; ?>"><?php echo $b[5]; ?></time>
                </a>
            <?php endforeach; ?>
        </div>

        <div class="h3s-wrap">
            <div class="h3s-news__head h3s-news__head--2">
                <div>
                    <span class="h3s-tag">Campus events</span>
                    <h2 class="h3s-h2">Celebrating ideas, <em>culture &amp; connections</em></h2>
                </div>
                <a class="h3s-btn h3s-btn--line" href="event.php"><span>All events</span><?php echo h3d_icon('arrow-right'); ?></a>
            </div>
            <div class="h3s-events">
                <?php foreach ($h3d_events as $e): $parts = explode(' ', $e[5]); ?>
                    <a class="h3s-ev" href="<?php echo $e[1]; ?>">
                        <time datetime="<?php echo $e[4]; ?>"><b><?php echo $parts[0]; ?></b><span><?php echo $parts[1]; ?></span></time>
                        <span class="h3s-ev__img"><img loading="lazy" decoding="async" src="<?php echo $e[2]; ?>" alt="" width="480" height="360" draggable="false"></span>
                        <span class="h3s-ev__txt"><em><?php echo $e[3]; ?></em><b><?php echo $e[0]; ?></b><span><?php echo $e[6]; ?></span></span>
                        <span class="h3s-ev__go"><?php echo h3d_icon('arrow-up-right'); ?></span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         FAQ
         ===================================================================== -->
    <section class="h3s-faq" id="h3s-faq" aria-labelledby="h3s-faq-t">
        <div class="h3s-wrap h3s-wrap--narrow">
            <div class="h3s-faq__head">
                <span class="h3s-tag">Got questions?</span>
                <h2 class="h3s-h2 h3s-h2--c" id="h3s-faq-t">Frequently asked <em>questions</em></h2>
            </div>
            <div class="h3s-faq__list">
                <?php foreach ($h3d_faqs as $i => $f): ?>
                    <div class="h3s-q<?php echo $i === 0 ? ' is-open' : ''; ?>">
                        <button type="button" class="h3s-q__b" aria-expanded="<?php echo $i === 0 ? 'true' : 'false'; ?>"><span><?php echo $f[0]; ?></span><i><?php echo h3d_icon('plus'); ?></i></button>
                        <div class="h3s-q__a"><div><p><?php echo $f[1]; ?></p></div></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         FINAL CTA
         ===================================================================== -->
    <section class="h3s-end" aria-labelledby="h3s-end-t">
        <div class="h3s-end__bg" data-bgpar style="background-image:url('assets/uploads/h3d/hero-2.webp')" aria-hidden="true"></div>
        <div class="h3s-wrap h3s-end__in">
            <span class="h3s-tag">Admissions are open</span>
            <h2 class="h3s-h2 h3s-h2--xl" id="h3s-end-t">Come, be part <em>of it</em></h2>
            <p class="h3s-lead h3s-lead--c">Take the next step towards a career you are proud of.</p>
            <div class="h3s-actions h3s-actions--c">
                <a class="h3s-btn h3s-btn--go" href="https://admissions.maya.edu.in" rel="noopener"><span>Apply Online</span><?php echo h3d_icon('arrow-right'); ?></a>
                <a class="h3s-btn h3s-btn--line" href="contact.php"><span>Contact Admissions</span><?php echo h3d_icon('phone'); ?></a>
            </div>
        </div>
    </section>

    <a class="h3s-top" href="#h3sTop" id="h3sTopBtn" aria-label="Back to top"><?php echo h3d_icon('arrow-up-right'); ?></a>

</main>

<!-- FAQ structured data, generated from the same list shown above -->
<script type="application/ld+json">
<?php
$h3s_ld = [];
foreach ($h3d_faqs as $f) {
    $h3s_ld[] = [
        "@type" => "Question",
        "name"  => html_entity_decode(strip_tags($f[0]), ENT_QUOTES, 'UTF-8'),
        "acceptedAnswer" => ["@type" => "Answer", "text" => html_entity_decode(strip_tags($f[1]), ENT_QUOTES, 'UTF-8')],
    ];
}
echo json_encode(["@context" => "https://schema.org", "@type" => "FAQPage", "mainEntity" => $h3s_ld], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
?>
</script>

<!-- Loaded before the footer so the headline never waits on the site-wide libraries -->
<script src="assets/js/home3s.js?v=<?php echo @filemtime(__DIR__ . '/assets/js/home3s.js'); ?>" defer></script>

<?php require "common/footer.php"; ?>
