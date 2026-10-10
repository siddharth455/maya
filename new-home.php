<?php
/* ==========================================================================
   Maya Devi University — 3D IMMERSIVE HOMEPAGE (preview build)
   File : new-home.php
   CSS  : assets/css/home3d.css   (namespaced .h3d-)
   JS   : assets/js/home3d.js     (+ three.js from cdnjs for the hero scene)
   Note : index.php is untouched. Preview at  /new-home.php
   Theme: Maya green #00a651 + logo navy — nothing else.
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

require "common/header.php";
?>

<!-- Fonts (Sora for display, Manrope for text) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Sora:wght@500;600;700;800&display=swap" rel="stylesheet">

<!-- 3D homepage stylesheet (separate file, safe to remove) -->
<link rel="stylesheet" href="assets/css/home3d.css?v=<?php echo @filemtime(__DIR__ . '/assets/css/home3d.css'); ?>">

<!-- Enables the animated initial states; if the script never loads, content is revealed anyway -->
<script>
(function () {
  var r = document.documentElement;
  r.classList.add('h3d-js');
  setTimeout(function () { if (!window.__h3dReady) { r.classList.add('h3d-fail'); } }, 4500);
})();
</script>

<main class="h3d" id="h3dTop">

    <div class="h3d-progress" aria-hidden="true"><i id="h3dProgress"></i></div>

    <!-- =====================================================================
         HERO — WebGL knowledge-globe + layered 3D student stage
         ===================================================================== -->
    <section class="h3d-hero" id="h3dHero" aria-label="Maya Devi University introduction">
        <div class="h3d-hero__bg" aria-hidden="true"></div>
        <div class="h3d-hero__canvas" data-h3d-canvas aria-hidden="true"></div>
        <div class="h3d-hero__veil" aria-hidden="true"></div>

        <div class="h3d-wrap h3d-hero__inner" data-h3d-hero-inner>
            <div class="h3d-hero__copy">
                <span class="h3d-eyebrow h3d-eyebrow--dark" data-r>Dehradun &middot; Uttarakhand</span>

                <h1 class="h3d-hero__title" data-r="split" data-h3d-split>Empower. Educate. <span class="h3d-hl">Excel.</span></h1>

                <p class="h3d-lead" data-r style="--d:.25s">
                    Maya Devi University offers quality education, expert guidance and a vibrant campus life to prepare you for a successful future.
                </p>

                <div class="h3d-actions" data-r style="--d:.35s">
                    <a class="h3d-btn h3d-btn--primary" href="https://admissions.maya.edu.in" rel="noopener">
                        <span>Apply Now</span><?php echo h3d_icon('arrow-right'); ?>
                    </a>
                    <a class="h3d-btn h3d-btn--glass" href="#h3d-programs">
                        <span>Explore Programs</span><?php echo h3d_icon('arrow-down'); ?>
                    </a>
                </div>

                <ul class="h3d-hero__stats" data-r style="--d:.45s">
                    <li><strong data-count="120" data-suf="+">120+</strong><span>Programs</span></li>
                    <li><strong data-count="12000" data-suf="+">12,000+</strong><span>Alumni</span></li>
                    <li><strong data-count="35" data-suf="+">35+</strong><span>Doctoral Faculty</span></li>
                </ul>
            </div>

            <div class="h3d-stage" data-h3d-stage aria-hidden="false">
                <div class="h3d-stage__halo" aria-hidden="true"></div>
                <div class="h3d-stage__disc" aria-hidden="true"></div>
                <div class="h3d-stage__orbit h3d-stage__orbit--a" aria-hidden="true"></div>
                <div class="h3d-stage__orbit h3d-stage__orbit--b" aria-hidden="true"></div>

                <img class="h3d-stage__person" src="assets/uploads/banner-girl.png" alt="A student of Maya Devi University" width="408" height="612" fetchpriority="high">

                <div class="h3d-chip h3d-chip--a">
                    <span class="h3d-chip__ico"><?php echo h3d_icon('briefcase'); ?></span>
                    <div><b data-count="48" data-dec="2" data-pre="₹" data-suf=" LPA">₹48.00 LPA</b><small>Highest package</small></div>
                </div>
                <div class="h3d-chip h3d-chip--b">
                    <span class="h3d-chip__ico"><?php echo h3d_icon('award'); ?></span>
                    <div><b data-count="800" data-suf="+">800+</b><small>Placement offers</small></div>
                </div>
                <div class="h3d-chip h3d-chip--c">
                    <span class="h3d-chip__ico"><?php echo h3d_icon('pin'); ?></span>
                    <div><b>Selaqui, Dehradun</b><small>Residential campus</small></div>
                </div>
            </div>
        </div>

        <a class="h3d-cue" href="#h3d-about" aria-label="Scroll to explore"><i></i><span>Scroll</span></a>
    </section>

    <!-- =====================================================================
         RANKINGS MARQUEE
         ===================================================================== -->
    <section class="h3d-marq" aria-label="Rankings and accreditations">
        <p class="h3d-marq__label">Rankings &amp; Accreditations</p>
        <div class="h3d-marq__viewport">
            <div class="h3d-marq__track">
                <?php for ($pass = 0; $pass < 3; $pass++): ?>
                    <div class="h3d-marq__group"<?php echo $pass ? ' aria-hidden="true"' : ''; ?>>
                        <?php foreach ($h3d_ranks as $r): ?>
                            <div class="h3d-marq__item"><img loading="lazy" src="<?php echo $r[0]; ?>" alt="<?php echo $pass ? '' : $r[1]; ?>" height="70"></div>
                        <?php endforeach; ?>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         ABOUT — screen that flattens as you scroll into it
         ===================================================================== -->
    <section class="h3d-sec h3d-about" id="h3d-about" aria-labelledby="h3d-about-t">
        <div class="h3d-wrap">
            <div class="h3d-head h3d-head--center">
                <span class="h3d-eyebrow" data-r>About the University</span>
                <h2 id="h3d-about-t" data-r="split" data-h3d-split>A campus where <span class="h3d-hl">innovation meets inspiration</span></h2>
                <p data-r style="--d:.15s">Take an aerial tour of our campus, set amidst lush greenery and modern architecture in the foothills of Uttarakhand.</p>
            </div>

            <div class="h3d-about__scene" data-h3d-scene>
                <div class="h3d-screen" data-h3d-screen>
                    <div class="h3d-screen__frame" id="h3dVideo">
                        <img src="https://i.ytimg.com/vi/Gm-KE2N_5ws/hqdefault.jpg" onerror="this.onerror=null;this.src='assets/uploads/campus-bg.jpeg';" alt="Aerial campus tour of Maya Devi University, Dehradun" width="1280" height="720" loading="lazy">
                        <span class="h3d-screen__badge"><?php echo h3d_icon('play', 'h3d-i--sm'); ?> Campus Tour</span>
                        <button type="button" class="h3d-screen__play" id="h3dVideoBtn" aria-label="Play the Maya Devi University campus tour video">
                            <span><?php echo h3d_icon('play'); ?></span>
                        </button>
                    </div>
                    <div class="h3d-screen__glow" aria-hidden="true"></div>
                </div>

                <div class="h3d-about__text" data-r="right">
                    <span class="h3d-rule" aria-hidden="true"></span>
                    <h3>Maya Devi University, Dehradun</h3>
                    <p>A premier institution dedicated to delivering world-class education and fostering holistic development. Nestled in the scenic foothills of Uttarakhand, the university offers a dynamic learning environment supported by modern infrastructure, experienced faculty and industry-aligned programs.</p>
                    <p>With a focus on academic excellence, research and innovation, we prepare students to excel in their chosen fields while nurturing values, leadership skills and a global perspective.</p>
                    <a class="h3d-btn h3d-btn--ghost" href="about-us.php"><span>More About Us</span><?php echo h3d_icon('arrow-right'); ?></a>
                </div>
            </div>

            <div class="h3d-feats" data-r-stagger>
                <article class="h3d-feat" data-tilt>
                    <span class="h3d-feat__ico"><?php echo h3d_icon('flask'); ?></span>
                    <h3>Modern Facilities</h3>
                    <p>Well-equipped laboratories, libraries and learning spaces designed for the future.</p>
                </article>
                <article class="h3d-feat" data-tilt>
                    <span class="h3d-feat__ico"><?php echo h3d_icon('leaf'); ?></span>
                    <h3>Scenic Green Campus</h3>
                    <p>A peaceful, secure campus at Selaqui in the foothills of Uttarakhand.</p>
                </article>
                <article class="h3d-feat" data-tilt>
                    <span class="h3d-feat__ico"><?php echo h3d_icon('users'); ?></span>
                    <h3>Vibrant Student Life</h3>
                    <p>Clubs, sports and events that build collaboration, creativity and leadership.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         LEGACY — dark, floating CSS-3D solids, glass stat tiles
         ===================================================================== -->
    <section class="h3d-sec h3d-dark h3d-legacy" aria-labelledby="h3d-legacy-t">
        <div class="h3d-bgfx" aria-hidden="true">
            <span class="h3d-cube h3d-cube--1"><i></i><i></i><i></i><i></i><i></i><i></i></span>
            <span class="h3d-cube h3d-cube--2"><i></i><i></i><i></i><i></i><i></i><i></i></span>
            <span class="h3d-torus h3d-torus--1"></span>
        </div>

        <div class="h3d-wrap h3d-legacy__grid">
            <div>
                <div class="h3d-head">
                    <span class="h3d-eyebrow h3d-eyebrow--dark" data-r>Our Legacy</span>
                    <h2 id="h3d-legacy-t" data-r="split" data-h3d-split>An illustrious legacy we <span class="h3d-hl">shape</span></h2>
                </div>

                <div class="h3d-stats" data-r-stagger>
                    <article class="h3d-stat" data-tilt>
                        <span class="h3d-stat__num" data-count="120" data-suf="+">120+</span>
                        <h3>Programs</h3>
                        <p>Industry-oriented undergraduate &amp; postgraduate programs focused on employability.</p>
                    </article>
                    <article class="h3d-stat" data-tilt>
                        <span class="h3d-stat__num" data-count="100" data-suf="+">100+</span>
                        <h3>Stalwarts</h3>
                        <p>Industry stalwarts and mentors collaborating with students &amp; faculty.</p>
                    </article>
                    <article class="h3d-stat" data-tilt>
                        <span class="h3d-stat__num" data-count="35" data-suf="+">35+</span>
                        <h3>Doctoral Faculty</h3>
                        <p>Research-active doctoral faculty guiding projects &amp; publications.</p>
                    </article>
                    <article class="h3d-stat" data-tilt>
                        <span class="h3d-stat__num" data-count="12000" data-suf="+">12,000+</span>
                        <h3>Alumni</h3>
                        <p>A strong alumni network across industries and geographies.</p>
                    </article>
                </div>
            </div>

            <div class="h3d-stage h3d-legacy__media" data-h3d-stage data-r="zoom">
                <div class="h3d-stage__halo" aria-hidden="true"></div>
                <div class="h3d-stage__disc" aria-hidden="true"></div>
                <div class="h3d-stage__orbit h3d-stage__orbit--a" aria-hidden="true"></div>
                <img class="h3d-stage__person" src="assets/uploads/about-boy.png" alt="Students of Maya Devi University" width="612" height="408" loading="lazy">
                <div class="h3d-chip h3d-chip--d">
                    <span class="h3d-chip__ico"><?php echo h3d_icon('users'); ?></span>
                    <div><b data-count="1890">1,890</b><small>Students &amp; growing</small></div>
                </div>
            </div>
        </div>

        <div class="h3d-wrap">
            <div class="h3d-ach" data-r-stagger>
                <div><b data-count="1890">1,890</b><span>Students</span></div>
                <div><b data-count="1250">1,250</b><span>Graduates</span></div>
                <div><b data-count="750">750</b><span>Award Winning</span></div>
                <div><b data-count="250">250</b><span>Faculty</span></div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         PROGRAMS — 3D cover-flow with tabs
         ===================================================================== -->
    <section class="h3d-sec h3d-soft" id="h3d-programs" aria-labelledby="h3d-prog-t">
        <div class="h3d-wrap">
            <div class="h3d-head h3d-head--center">
                <span class="h3d-eyebrow" data-r>Academic Programs</span>
                <h2 id="h3d-prog-t" data-r="split" data-h3d-split>Find the <span class="h3d-hl">course that fits you</span></h2>
                <p data-r style="--d:.15s">From skill-first diplomas to research-driven master's degrees — drag, swipe or use the arrows to explore programs built around industry demand.</p>
            </div>

            <div class="h3d-tabs" role="tablist" aria-label="Program levels" data-r>
                <?php $first = true; foreach ($h3d_programs as $key => $group): ?>
                    <button type="button" class="h3d-tab" role="tab"
                            id="h3d-tab-<?php echo $key; ?>" aria-controls="h3d-panel-<?php echo $key; ?>"
                            aria-selected="<?php echo $first ? 'true' : 'false'; ?>" tabindex="<?php echo $first ? '0' : '-1'; ?>">
                        <?php echo $group['label']; ?>
                    </button>
                <?php $first = false; endforeach; ?>
            </div>

            <?php $first = true; foreach ($h3d_programs as $key => $group): ?>
                <div class="h3d-panel" role="tabpanel" id="h3d-panel-<?php echo $key; ?>" aria-labelledby="h3d-tab-<?php echo $key; ?>" <?php echo $first ? '' : 'hidden'; ?>>
                    <p class="h3d-panel__intro"><?php echo $group['intro']; ?></p>

                    <div class="h3d-flow" data-h3d-flow>
                        <div class="h3d-flow__stage" tabindex="0" aria-label="<?php echo $group['label']; ?> programs carousel. Use left and right arrow keys.">
                            <?php foreach ($group['items'] as $c): ?>
                                <article class="h3d-pcard">
                                    <a class="h3d-pcard__media" href="<?php echo $c[1]; ?>" tabindex="-1" aria-hidden="true">
                                        <span class="h3d-pcard__tag"><?php echo $group['label']; ?></span>
                                        <img loading="lazy" src="<?php echo $c[2]; ?>" alt="" width="600" height="375" draggable="false">
                                    </a>
                                    <div class="h3d-pcard__body">
                                        <h3><a href="<?php echo $c[1]; ?>"><?php echo $c[0]; ?></a></h3>
                                        <p><?php echo $c[5]; ?></p>
                                    </div>
                                    <div class="h3d-pcard__meta">
                                        <span><?php echo h3d_icon('award', 'h3d-i--sm'); ?> Credits: <?php echo $c[3]; ?></span>
                                        <span><?php echo h3d_icon('clock', 'h3d-i--sm'); ?> <?php echo $c[4]; ?></span>
                                    </div>
                                    <a class="h3d-pcard__cta" href="<?php echo $c[1]; ?>"><span>View Program</span><?php echo h3d_icon('arrow-up-right'); ?></a>
                                </article>
                            <?php endforeach; ?>
                        </div>
                        <div class="h3d-flow__bar">
                            <button type="button" class="h3d-round" data-flow-prev aria-label="Previous program"><?php echo h3d_icon('chev-l'); ?></button>
                            <div class="h3d-flow__dots" role="tablist" aria-label="Choose program"></div>
                            <button type="button" class="h3d-round" data-flow-next aria-label="Next program"><?php echo h3d_icon('chev-r'); ?></button>
                        </div>
                    </div>

                    <div class="h3d-more">
                        <a class="h3d-btn h3d-btn--ghost" href="<?php echo $group['more']; ?>"><span>See all <?php echo $group['label']; ?> courses</span><?php echo h3d_icon('arrow-right'); ?></a>
                    </div>
                </div>
            <?php $first = false; endforeach; ?>
        </div>
    </section>

    <!-- =====================================================================
         SCHOOLS — rotating 3D ring
         ===================================================================== -->
    <section class="h3d-sec h3d-dark h3d-schools" aria-labelledby="h3d-sch-t">
        <div class="h3d-bgfx" aria-hidden="true"><span class="h3d-glow h3d-glow--l"></span><span class="h3d-glow h3d-glow--r"></span></div>
        <div class="h3d-wrap">
            <div class="h3d-head h3d-head--center">
                <span class="h3d-eyebrow h3d-eyebrow--dark" data-r>Colleges &amp; Departments</span>
                <h2 id="h3d-sch-t" data-r="split" data-h3d-split>Our schools, <span class="h3d-hl">one campus</span></h2>
                <p data-r style="--d:.15s">Every school runs its own labs, faculty and industry connections. Spin the ring — or scroll — to discover yours.</p>
            </div>
        </div>

        <div class="h3d-ring" data-h3d-ring>
            <div class="h3d-ring__scene">
                <div class="h3d-ring__cyl">
                    <?php foreach ($h3d_schools as $s): ?>
                        <a class="h3d-ring__panel" href="<?php echo $s[1]; ?>" draggable="false">
                            <span class="h3d-ring__ico"><?php echo h3d_icon($s[2]); ?></span>
                            <span class="h3d-ring__name"><?php echo $s[0]; ?></span>
                            <span class="h3d-ring__go"><?php echo h3d_icon('arrow-up-right', 'h3d-i--sm'); ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="h3d-ring__floor" aria-hidden="true"></div>
        </div>

        <div class="h3d-wrap"><div class="h3d-more"><a class="h3d-btn h3d-btn--glass" href="colleges-departments.php"><span>View all colleges &amp; departments</span><?php echo h3d_icon('arrow-right'); ?></a></div></div>
    </section>

    <!-- =====================================================================
         PLACEMENTS
         ===================================================================== -->
    <section class="h3d-sec" id="h3d-placements" aria-labelledby="h3d-place-t">
        <div class="h3d-wrap">
            <div class="h3d-head h3d-head--center">
                <span class="h3d-eyebrow" data-r>Placements &amp; Career Support</span>
                <h2 id="h3d-place-t" data-r="split" data-h3d-split>Employers trust <span class="h3d-hl">our talent</span></h2>
                <p data-r style="--d:.15s">Industry-focused training and a dedicated placement cell turn into high-impact career starts.</p>
            </div>

            <div class="h3d-kpis" data-r-stagger>
                <article class="h3d-kpi" data-tilt>
                    <span class="h3d-kpi__num" data-count="800" data-suf="+">800+</span>
                    <h3>Placement Offers</h3>
                    <p>Job and internship offers secured by our students.</p>
                </article>
                <article class="h3d-kpi h3d-kpi--hot" data-tilt>
                    <span class="h3d-kpi__num" data-count="48" data-dec="2" data-pre="₹" data-suf=" LPA">₹48.00 LPA</span>
                    <h3>Highest Package</h3>
                    <p>The top offer secured by a Maya Devi University graduate.</p>
                </article>
                <article class="h3d-kpi" data-tilt>
                    <span class="h3d-kpi__num" data-count="5.5" data-dec="1" data-pre="₹" data-suf=" LPA">₹5.5 LPA</span>
                    <h3>Average Package</h3>
                    <p>Steady outcomes across engineering, management and pharmacy.</p>
                </article>
            </div>
        </div>

        <div class="h3d-recs" data-r>
            <p class="h3d-recs__label">Recent Recruiters</p>
            <div class="h3d-recs__row">
                <div class="h3d-recs__track">
                    <?php for ($p = 0; $p < 2; $p++): foreach ($h3d_recruiters as $rec): ?>
                        <span class="h3d-logo"><img loading="lazy" src="<?php echo $rec[0]; ?>" alt="<?php echo $p ? '' : $rec[1]; ?>" height="56"></span>
                    <?php endforeach; endfor; ?>
                </div>
            </div>
            <div class="h3d-recs__row h3d-recs__row--rev">
                <div class="h3d-recs__track">
                    <?php for ($p = 0; $p < 2; $p++): foreach (array_reverse($h3d_recruiters) as $rec): ?>
                        <span class="h3d-logo"><img loading="lazy" src="<?php echo $rec[0]; ?>" alt="" height="56"></span>
                    <?php endforeach; endfor; ?>
                </div>
            </div>
        </div>

        <div class="h3d-wrap"><div class="h3d-more"><a class="h3d-btn h3d-btn--ghost" href="placement.php"><span>Explore the placement record</span><?php echo h3d_icon('arrow-right'); ?></a></div></div>
    </section>

    <!-- =====================================================================
         FACILITIES — sticky stacking cards
         ===================================================================== -->
    <section class="h3d-sec h3d-soft h3d-fac" aria-labelledby="h3d-fac-t">
        <div class="h3d-wrap">
            <div class="h3d-head h3d-head--center">
                <span class="h3d-eyebrow" data-r>Campus Infrastructure</span>
                <h2 id="h3d-fac-t" data-r="split" data-h3d-split>Modern facilities that <span class="h3d-hl">empower every student</span></h2>
            </div>

            <div class="h3d-stack" data-h3d-stack>
                <?php foreach ($h3d_facilities as $i => $f): ?>
                    <article class="h3d-scard">
                        <div class="h3d-scard__in">
                            <div class="h3d-scard__copy">
                                <span class="h3d-scard__no"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
                                <span class="h3d-scard__ico"><?php echo h3d_icon($f[3]); ?></span>
                                <h3><?php echo $f[0]; ?></h3>
                                <p><?php echo $f[1]; ?></p>
                            </div>
                            <div class="h3d-scard__media"><img loading="lazy" src="<?php echo $f[2]; ?>" alt="<?php echo html_entity_decode(strip_tags($f[0]), ENT_QUOTES, 'UTF-8'); ?> at Maya Devi University" width="800" height="600"></div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         ADMISSION JOURNEY
         ===================================================================== -->
    <section class="h3d-sec" id="h3d-admissions" aria-labelledby="h3d-adm-t">
        <div class="h3d-wrap">
            <div class="h3d-head h3d-head--center">
                <span class="h3d-eyebrow" data-r>Admissions</span>
                <h2 id="h3d-adm-t" data-r="split" data-h3d-split>Your 4-step journey to <span class="h3d-hl">Maya Devi University</span></h2>
                <p data-r style="--d:.15s">A simple, transparent and student-friendly admission process designed to get you started quickly.</p>
            </div>

            <div class="h3d-path" data-h3d-path>
                <div class="h3d-path__line" aria-hidden="true"><i></i></div>
                <?php foreach ($h3d_steps as $i => $s): ?>
                    <article class="h3d-step" data-r>
                        <div class="h3d-step__card" data-tilt>
                            <span class="h3d-step__no"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
                            <span class="h3d-step__ico"><?php echo h3d_icon($s[0]); ?></span>
                            <h3><?php echo $s[1]; ?></h3>
                            <p><?php echo $s[2]; ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <div class="h3d-more">
                <a class="h3d-btn h3d-btn--primary" href="https://admissions.maya.edu.in" rel="noopener"><span>Apply Online</span><?php echo h3d_icon('arrow-right'); ?></a>
                <a class="h3d-btn h3d-btn--ghost" href="contact.php"><span>Talk to a Counsellor</span><?php echo h3d_icon('phone'); ?></a>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         GALLERY — tilted 3D wall
         ===================================================================== -->
    <section class="h3d-sec h3d-dark h3d-wall" aria-labelledby="h3d-wall-t">
        <div class="h3d-bgfx" aria-hidden="true"><span class="h3d-glow h3d-glow--l"></span><span class="h3d-glow h3d-glow--r"></span></div>
        <div class="h3d-wrap">
            <div class="h3d-head h3d-head--center">
                <span class="h3d-eyebrow h3d-eyebrow--dark" data-r>Campus Gallery</span>
                <h2 id="h3d-wall-t" data-r="split" data-h3d-split>Moments that make <span class="h3d-hl">MDU life</span></h2>
                <p data-r style="--d:.15s">Learning, creativity, collaboration and everyday life on campus.</p>
            </div>
        </div>

        <div class="h3d-wall__view" data-h3d-wall>
            <div class="h3d-wall__plane">
                <?php foreach ($h3d_wall as $ci => $col): ?>
                    <div class="h3d-wall__col" data-speed="<?php echo $ci % 2 ? '-1' : '1'; ?>">
                        <?php foreach ($col as $img): ?>
                            <a class="h3d-wall__cell" href="campus-life.php">
                                <img loading="lazy" src="<?php echo $img[0]; ?>" alt="<?php echo html_entity_decode(strip_tags($img[1]), ENT_QUOTES, 'UTF-8'); ?> — Maya Devi University" width="600" height="450" draggable="false">
                                <span><?php echo $img[1]; ?></span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="h3d-wrap"><div class="h3d-more"><a class="h3d-btn h3d-btn--glass" href="campus-life.php"><span>Explore campus life</span><?php echo h3d_icon('arrow-right'); ?></a></div></div>
    </section>

    <!-- =====================================================================
         TESTIMONIALS — 3D card deck
         ===================================================================== -->
    <section class="h3d-sec h3d-soft" aria-labelledby="h3d-testi-t">
        <div class="h3d-wrap">
            <div class="h3d-head h3d-head--center">
                <span class="h3d-eyebrow" data-r>Student Voices</span>
                <h2 id="h3d-testi-t" data-r="split" data-h3d-split>Stories of ambition, <span class="h3d-hl">learning &amp; success</span></h2>
            </div>

            <div class="h3d-deck" data-h3d-deck data-r="zoom">
                <div class="h3d-deck__stage">
                    <?php foreach ($h3d_testimonials as $t): ?>
                        <figure class="h3d-tcard">
                            <div class="h3d-tcard__photo"><img loading="lazy" src="<?php echo $t[2]; ?>" alt="<?php echo $t[0]; ?>, student at Maya Devi University" width="300" height="300"></div>
                            <div class="h3d-tcard__body">
                                <span class="h3d-tcard__q"><?php echo h3d_icon('quote'); ?></span>
                                <blockquote>“<?php echo $t[3]; ?>”</blockquote>
                                <figcaption><strong><?php echo $t[0]; ?></strong><span><?php echo $t[1]; ?></span></figcaption>
                            </div>
                        </figure>
                    <?php endforeach; ?>
                </div>
                <div class="h3d-flow__bar">
                    <button type="button" class="h3d-round" data-deck-prev aria-label="Previous story"><?php echo h3d_icon('chev-l'); ?></button>
                    <div class="h3d-flow__dots" data-deck-dots></div>
                    <button type="button" class="h3d-round" data-deck-next aria-label="Next story"><?php echo h3d_icon('chev-r'); ?></button>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         BLOG
         ===================================================================== -->
    <section class="h3d-sec" aria-labelledby="h3d-blog-t">
        <div class="h3d-wrap">
            <div class="h3d-head h3d-head--center">
                <span class="h3d-eyebrow" data-r>From the Blog</span>
                <h2 id="h3d-blog-t" data-r="split" data-h3d-split>Insights &amp; <span class="h3d-hl">admission guides</span></h2>
                <p data-r style="--d:.15s">Course guides, admission timelines and career advice from the Maya Devi University team.</p>
            </div>

            <div class="h3d-posts" data-r-stagger>
                <?php foreach ($h3d_blogs as $b): ?>
                    <article class="h3d-post" data-tilt>
                        <a class="h3d-post__media" href="<?php echo $b[1]; ?>" tabindex="-1" aria-hidden="true">
                            <span class="h3d-post__cat"><?php echo $b[3]; ?></span>
                            <img loading="lazy" src="<?php echo $b[2]; ?>" alt="" width="600" height="338">
                        </a>
                        <div class="h3d-post__body">
                            <h3><a href="<?php echo $b[1]; ?>"><?php echo $b[0]; ?></a></h3>
                            <div class="h3d-post__foot">
                                <time datetime="<?php echo $b[4]; ?>"><?php echo h3d_icon('calendar', 'h3d-i--sm'); ?> <?php echo $b[5]; ?></time>
                                <span class="h3d-link">Read <?php echo h3d_icon('arrow-right', 'h3d-i--sm'); ?></span>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <div class="h3d-more"><a class="h3d-btn h3d-btn--ghost" href="blog.php"><span>Read all articles</span><?php echo h3d_icon('arrow-right'); ?></a></div>
        </div>
    </section>

    <!-- =====================================================================
         EVENTS
         ===================================================================== -->
    <section class="h3d-sec h3d-soft" aria-labelledby="h3d-ev-t">
        <div class="h3d-wrap">
            <div class="h3d-head h3d-head--center">
                <span class="h3d-eyebrow" data-r>Campus Events</span>
                <h2 id="h3d-ev-t" data-r="split" data-h3d-split>Celebrating ideas, <span class="h3d-hl">culture and connections</span></h2>
            </div>

            <div class="h3d-events" data-r-stagger>
                <?php foreach ($h3d_events as $e):
                    $parts = explode(' ', $e[5]); ?>
                    <a class="h3d-ev" href="<?php echo $e[1]; ?>" data-tilt>
                        <time class="h3d-ev__date" datetime="<?php echo $e[4]; ?>"><b><?php echo $parts[0]; ?></b><span><?php echo $parts[1]; ?></span></time>
                        <span class="h3d-ev__thumb"><img loading="lazy" src="<?php echo $e[2]; ?>" alt="" width="400" height="300"></span>
                        <span class="h3d-ev__body">
                            <em><?php echo $e[3]; ?></em>
                            <strong><?php echo $e[0]; ?></strong>
                            <span><?php echo $e[6]; ?></span>
                        </span>
                        <span class="h3d-ev__go" aria-hidden="true"><?php echo h3d_icon('arrow-up-right'); ?></span>
                    </a>
                <?php endforeach; ?>
            </div>

            <div class="h3d-more"><a class="h3d-btn h3d-btn--ghost" href="event.php"><span>All events</span><?php echo h3d_icon('arrow-right'); ?></a></div>
        </div>
    </section>

    <!-- =====================================================================
         FAQ
         ===================================================================== -->
    <section class="h3d-sec" id="h3d-faq" aria-labelledby="h3d-faq-t">
        <div class="h3d-wrap h3d-wrap--narrow">
            <div class="h3d-head h3d-head--center">
                <span class="h3d-eyebrow" data-r>Got Questions?</span>
                <h2 id="h3d-faq-t" data-r="split" data-h3d-split>Frequently asked <span class="h3d-hl">questions</span></h2>
            </div>

            <div class="h3d-faq" data-r-stagger>
                <?php foreach ($h3d_faqs as $i => $f): ?>
                    <div class="h3d-faq__item<?php echo $i === 0 ? ' is-open' : ''; ?>">
                        <button type="button" class="h3d-faq__q" aria-expanded="<?php echo $i === 0 ? 'true' : 'false'; ?>">
                            <span><?php echo $f[0]; ?></span><span class="h3d-faq__ico"><?php echo h3d_icon('plus'); ?></span>
                        </button>
                        <div class="h3d-faq__a"><div><p><?php echo $f[1]; ?></p></div></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         FINAL CTA
         ===================================================================== -->
    <section class="h3d-cta h3d-dark" aria-labelledby="h3d-cta-t">
        <div class="h3d-bgfx" aria-hidden="true">
            <span class="h3d-torus h3d-torus--2"></span>
            <span class="h3d-cube h3d-cube--3"><i></i><i></i><i></i><i></i><i></i><i></i></span>
            <span class="h3d-cube h3d-cube--4"><i></i><i></i><i></i><i></i><i></i><i></i></span>
            <span class="h3d-glow h3d-glow--c"></span>
        </div>
        <div class="h3d-wrap">
            <div class="h3d-cta__in" data-r="zoom">
                <span class="h3d-eyebrow h3d-eyebrow--dark">Admissions are open</span>
                <h2 id="h3d-cta-t">Your future starts <span class="h3d-hl">here</span></h2>
                <p>Take the next step towards a career you are proud of. Talk to our admission counsellors or apply online in minutes.</p>
                <div class="h3d-actions h3d-actions--center">
                    <a class="h3d-btn h3d-btn--primary" href="https://admissions.maya.edu.in" rel="noopener"><span>Apply Online</span><?php echo h3d_icon('arrow-right'); ?></a>
                    <a class="h3d-btn h3d-btn--glass" href="contact.php"><span>Talk to a Counsellor</span></a>
                    <a class="h3d-btn h3d-btn--glass" href="fee-structure.php"><span>Fee Structure</span></a>
                </div>
            </div>
        </div>
    </section>

    <a class="h3d-top" href="#h3dTop" id="h3dTopBtn" aria-label="Back to top"><?php echo h3d_icon('arrow-up-right'); ?></a>

</main>

<!-- FAQ structured data, generated from the same list shown above -->
<script type="application/ld+json">
<?php
$h3d_ld = [];
foreach ($h3d_faqs as $f) {
    $h3d_ld[] = [
        "@type" => "Question",
        "name"  => html_entity_decode(strip_tags($f[0]), ENT_QUOTES, 'UTF-8'),
        "acceptedAnswer" => ["@type" => "Answer", "text" => html_entity_decode(strip_tags($f[1]), ENT_QUOTES, 'UTF-8')],
    ];
}
echo json_encode(["@context" => "https://schema.org", "@type" => "FAQPage", "mainEntity" => $h3d_ld], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
?>
</script>

<!-- 3D homepage scripts. Loaded before the footer so the headline never waits on the site-wide
     libraries; three.js only powers the hero globe and the page works without it. -->
<script src="assets/js/home3d.js?v=<?php echo @filemtime(__DIR__ . '/assets/js/home3d.js'); ?>" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js" defer></script>

<?php require "common/footer.php"; ?>
