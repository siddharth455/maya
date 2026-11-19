<?php
/*
 * Course-page SEO content (Intane Media, Nov 2026, Batch 2).
 *
 * One place for the "at a glance" table, "Why choose" list and FAQs of the
 * ten main keyword pages. The visible FAQ section and the FAQPage schema are
 * both built from the same array, so they always match word for word.
 *
 * Usage on a page (before common/header.php):
 *     require_once "common/course-seo.php";
 *     $seo = course_seo("nursing");
 *     $page_schema = ($page_schema ?? "") . seo_faq_schema($seo);
 * In the body:
 *     echo seo_intro($seo);  echo seo_glance($seo);  echo seo_why($seo);  echo seo_faq($seo);
 */

if (!defined("SEO_FEES")) {
    define("SEO_FEES", 'See the <a href="fee-structure.php">2027–28 fee structure</a>');
}

function course_seo_data()
{
    return [

    // 1. Nursing — /Nursing.php
    "nursing" => [
        "intro" => [
            "Looking for the best nursing college in Dehradun? The School of Nursing at Maya Devi University, Selaqui, offers <strong>B.Sc Nursing</strong> (4-year degree) and <strong>GNM</strong> (General Nursing and Midwifery diploma), with hands-on clinical training, modern nursing labs and guidance for nursing careers in India and abroad.",
            "Maya Devi University has been educating students since 2010, first as Maya Group of Colleges and, since 2024, as a state private university. Our nursing programmes combine classroom teaching with supervised hospital postings, so students graduate confident in real patient care.",
        ],
        "glance_title" => "Nursing at Maya Devi University at a Glance",
        "glance" => [
            ["Programmes", "B.Sc Nursing (4 years), GNM (diploma)"],
            ["B.Sc Nursing eligibility", "10+2 with PCB and English, minimum 45% aggregate"],
            ["GNM eligibility", "10+2 with English, minimum 40%; any stream (Science, Commerce, Arts)"],
            ["Minimum age", "17 years on 31 December of the admission year"],
            ["Training", "Nursing labs and clinical postings in hospitals"],
            ["Careers abroad", "Guidance for NCLEX (USA), NMC (UK), HAAD (UAE) and CGFNS pathways"],
            ["Fees", SEO_FEES],
        ],
        "why_title" => "Why Choose Maya Devi University for Nursing?",
        "why" => [
            ["Two entry routes:", "B.Sc Nursing for PCB students, and GNM for students from any stream."],
            ["Clinical training from the start,", "with supervised postings in hospital wards."],
            ["International pathways:", "guidance for nursing licensing exams in the USA, UK and UAE."],
            ["Student nursing associations", "for community health drives, clinical skills and research."],
            ["A residential campus", "at Selaqui, Dehradun, with hostels and transport."],
        ],
        "faqs" => [
            ["Which is the best nursing college in Dehradun?", "Maya Devi University’s School of Nursing in Selaqui, Dehradun is a strong choice, offering B.Sc Nursing and GNM with clinical hospital training and guidance for nursing careers abroad."],
            ["What is the eligibility for B.Sc Nursing at Maya Devi University?", "10+2 with Physics, Chemistry, Biology and English, with at least 45% aggregate, and a minimum age of 17 years on 31 December of the admission year."],
            ["Can arts or commerce students do GNM at MDU?", "Yes. GNM is open to students from any stream who have passed 10+2 with English and at least 40% marks."],
            ["How long are the nursing courses at MDU?", "B.Sc Nursing is a 4-year degree. GNM is a diploma programme."],
            ["Does Maya Devi University help nursing students work abroad?", "Yes. The School of Nursing guides students on international licensing routes such as NCLEX (USA), NMC (UK), HAAD (UAE) and CGFNS."],
        ],
    ],

    // 2. B.Pharm — /best-b-pharma-colleges-in-dehradun-uttarakhand.php
    "bpharm" => [
        "intro" => [
            "If you are looking for the best B.Pharm college in Dehradun, Maya Devi University offers a <strong>4-year Bachelor of Pharmacy (B.Pharm) approved by the Pharmacy Council of India (PCI), New Delhi</strong>. The course combines pharmacology, pharmaceutics, pharmaceutical chemistry, pharmacognosy and clinical pharmacy with hands-on lab work and industry exposure.",
            "B.Pharm graduates from MDU are prepared for careers in hospital and community pharmacies, pharmaceutical manufacturing, research and development, regulatory affairs and medical sales, or for higher study such as M.Pharm, Pharm.D or an MBA.",
        ],
        "glance_title" => "B.Pharm at Maya Devi University at a Glance",
        "glance" => [
            ["Course", "Bachelor of Pharmacy (B.Pharm)"],
            ["Duration", "4 years"],
            ["Approval", "Pharmacy Council of India (PCI), New Delhi"],
            ["Eligibility", "10+2 with PCB or PCM and English; minimum 50% (45% for SC/ST)"],
            ["Minimum age", "17 years on 31 December"],
            ["Lateral entry", "B.Pharm Lateral Entry for D.Pharm holders"],
            ["Fees", SEO_FEES],
        ],
        "why_title" => "Why Study B.Pharm at Maya Devi University?",
        "why" => [
            ["PCI-approved programme", "with a practice-focused curriculum."],
            ["Practical training and industrial exposure", "alongside classroom teaching."],
            ["Regulatory and research orientation,", "for careers beyond retail pharmacy."],
            ["A complete pharmacy pathway", "on one campus: D.Pharm, B.Pharm, Pharm.D and M.Pharm."],
            ["Career options", "in industry, hospitals, sales and marketing, drug inspection and higher studies."],
        ],
        "faqs" => [
            ["Is B.Pharm at Maya Devi University approved by PCI?", "Yes. The B.Pharm programme at Maya Devi University is approved by the Pharmacy Council of India (PCI), New Delhi."],
            ["What is the eligibility for B.Pharm admission 2027 at MDU?", "10+2 with Physics, Chemistry and Biology or Maths, with English, and at least 50% marks (45% for SC/ST). The minimum age is 17 years on 31 December."],
            ["How long is the B.Pharm course?", "B.Pharm is a 4-year undergraduate degree. D.Pharm holders can join through B.Pharm Lateral Entry."],
            ["What can I do after B.Pharm?", "You can work in pharmaceutical companies, hospital and community pharmacies, research and development, regulatory affairs or medical sales, or study further with M.Pharm, Pharm.D or an MBA."],
            ["Can PCM students do B.Pharm at MDU?", "Yes. Students with either PCB or PCM in 10+2 are eligible."],
        ],
    ],

    // 3. D.Pharm — /best-d-pharma-college-in-dehradun-uttarakhand.php
    "dpharm" => [
        "intro" => [
            "Maya Devi University’s <strong>Diploma in Pharmacy (D.Pharm)</strong> is a two-year full-time course, <strong>approved by the Pharmacy Council of India (PCI), New Delhi</strong>. It is the minimum qualification to become a registered pharmacist, and one of the quickest ways to start a career in pharmacy after Class 12.",
            "The course covers pharmacology, pharmaceutics, pharmaceutical chemistry and pharmacognosy, and includes about 500 hours of mandatory practical training in a hospital or pharmacy.",
        ],
        "glance_title" => "D.Pharm at Maya Devi University at a Glance",
        "glance" => [
            ["Course", "Diploma in Pharmacy (D.Pharm)"],
            ["Duration", "2 years (two annual sessions)"],
            ["Approval", "Pharmacy Council of India (PCI), New Delhi"],
            ["Eligibility", "10+2 with PCB or PCM; minimum 50% (45% for SC/ST)"],
            ["Minimum age", "17 years on 31 December"],
            ["Practical training", "About 500 hours in a hospital or pharmacy"],
            ["Next step", "B.Pharm Lateral Entry, directly into the second year"],
            ["Fees", SEO_FEES],
        ],
        "why_title" => "Why Choose Maya Devi University for D.Pharm?",
        "why" => [
            ["PCI-approved", "diploma that qualifies you to register as a pharmacist."],
            ["Practice-oriented curriculum", "with mandatory hospital or pharmacy training."],
            ["Clear progression", "to B.Pharm through lateral entry on the same campus."],
            ["Career options", "as a retail or hospital pharmacist, in defence services or pharmaceutical manufacturing."],
        ],
        "faqs" => [
            ["Is D.Pharm at Maya Devi University approved by PCI?", "Yes. The D.Pharm course is approved by the Pharmacy Council of India (PCI), New Delhi."],
            ["What is the duration of D.Pharm?", "D.Pharm is a two-year full-time course, divided into two annual sessions."],
            ["What is the eligibility for D.Pharm admission 2027?", "10+2 with Physics, Chemistry and Biology or Maths, with at least 50% marks (45% for SC/ST), and a minimum age of 17 years on 31 December."],
            ["Can I open a pharmacy after D.Pharm?", "D.Pharm is the minimum qualification to register as a pharmacist, which is required to run a retail pharmacy, subject to state registration rules."],
            ["Can I do B.Pharm after D.Pharm at MDU?", "Yes. D.Pharm holders can join B.Pharm Lateral Entry at Maya Devi University."],
        ],
    ],

    // 4. Engineering / B.Tech — /best-engineering-college-in-dehradun-uttarakhand.php
    "engineering" => [
        "intro" => [
            "Maya Devi University’s School of Engineering is one of the most complete places to study <strong>B.Tech in Dehradun</strong>, with programmes in Computer Science (including AI &amp; ML, Data Science and Cyber Security), Civil, Mechanical, Electronics &amp; Communication and Aerospace Engineering, plus lateral entry, M.Tech and PhD.",
            "The programmes combine strong fundamentals with emerging technologies, hands-on projects and industrial visits, so students graduate ready for industry or further study.",
        ],
        "glance_title" => "B.Tech at Maya Devi University at a Glance",
        "glance" => [
            ["Computer Science", "B.Tech CSE, with options in AI &amp; ML, Data Science and Cyber Security"],
            ["Core branches", "Civil, Mechanical (incl. Mechatronics), Electronics &amp; Communication (VLSI &amp; Embedded, Robotics &amp; AI), Aerospace"],
            ["Lateral entry", "Civil, Mechanical and ECE"],
            ["Postgraduate", "M.Tech Structural Engineering, M.Tech Mechanical Engineering, PhD"],
            ["Duration", "4 years (3 years for lateral entry)"],
            ["Fees", SEO_FEES],
        ],
        "why_title" => "Why Choose Maya Devi University for B.Tech?",
        "why" => [
            ["Specialised CSE options", "in AI &amp; ML, data science and cyber security."],
            ["Emerging-technology branches", "such as robotics &amp; AI, VLSI and aerospace."],
            ["Project-based learning", "with labs, industrial visits and research."],
            ["A complete path", "from B.Tech to M.Tech and PhD on one campus."],
        ],
        "faqs" => [
            ["Which B.Tech branches does Maya Devi University offer?", "Computer Science (with AI &amp; ML, Data Science and Cyber Security options), Civil, Mechanical (including Mechatronics), Electronics &amp; Communication (VLSI &amp; Embedded, Robotics &amp; AI) and Aerospace Engineering."],
            ["Is lateral entry available for B.Tech at MDU?", "Yes. Diploma holders can join B.Tech Civil, Mechanical and ECE through lateral entry."],
            ["How long is B.Tech at Maya Devi University?", "B.Tech is a 4-year degree, and 3 years for lateral entry students."],
            ["Does MDU offer M.Tech and PhD in engineering?", "Yes. MDU offers M.Tech in Structural Engineering and Mechanical Engineering, and full-time PhD research."],
            ["Where is Maya Devi University located?", "Maya Devi University is at Selaqui, Dehradun, Uttarakhand."],
        ],
    ],

    // 5. B.Sc Agriculture — /bsc-agriculture-colleges-in-dehradun-uttarakhand.php
    "agriculture" => [
        "intro" => [
            "Maya Devi University offers <strong>B.Sc Agriculture (Hons.)</strong> in Dehradun, with practical training on farms, in laboratories and through research projects. The programme covers crop production, soil science, horticulture, agricultural economics and farm management, with a strong focus on sustainable farming.",
            "Internships and fieldwork with agricultural organisations prepare graduates for careers as agricultural scientists, farm managers, agribusiness professionals and researchers, or for a master’s in agriculture.",
        ],
        "glance_title" => "B.Sc Agriculture at Maya Devi University at a Glance",
        "glance" => [
            ["Course", "B.Sc Agriculture (Hons.)"],
            ["Eligibility", "10+2 with PCB, PCM or Agriculture; minimum 50% (45% for SC/ST)"],
            ["Training", "Farm practicals, laboratory work, research projects, internships and fieldwork"],
            ["Core subjects", "Crop production, soil science, horticulture, agricultural economics, farm management"],
            ["Higher studies", "Master in Agriculture, Genetics &amp; Plant Breeding, MBA (Agri Business Management)"],
            ["Fees", SEO_FEES],
        ],
        "why_title" => "Why Study B.Sc Agriculture at Maya Devi University?",
        "why" => [
            ["Hands-on farm and lab training", "throughout the course."],
            ["Sustainable and modern farming", "practices built into the curriculum."],
            ["Internships and fieldwork", "with agricultural organisations."],
            ["Progression on the same campus", "to Master in Agriculture or MBA (Agri Business)."],
        ],
        "faqs" => [
            ["What is the eligibility for B.Sc Agriculture at Maya Devi University?", "10+2 with Physics, Chemistry and Biology, Physics, Chemistry and Maths, or Agriculture, with at least 50% marks (45% for SC/ST)."],
            ["Can PCM students do B.Sc Agriculture at MDU?", "Yes. Students with PCM, PCB or Agriculture in 10+2 are eligible."],
            ["What will I study in B.Sc Agriculture?", "Crop production, soil science, horticulture, agricultural economics and farm management, with practical farm and laboratory training."],
            ["What are the career options after B.Sc Agriculture?", "Agricultural scientist, farm manager, agribusiness professional, researcher, or roles in the food and agriculture sectors, as well as higher studies."],
            ["Does MDU offer a master’s in agriculture?", "Yes. Maya Devi University offers a Master in Agriculture and Genetics &amp; Plant Breeding, as well as an MBA in Agri Business Management."],
        ],
    ],

    // 6. PhD — /best-university-for-phd-in-dehradun-uttarakhand.php
    "phd" => [
        "intro" => [
            "Maya Devi University offers full-time <strong>PhD programmes across five core disciplines</strong>, with expert research supervisors, laboratory access and support for publishing in reputed journals. It is a strong choice for scholars looking for a PhD university in Dehradun and Uttarakhand.",
            "Our doctoral programmes are designed to build independent researchers who can contribute original work, publish, and move into teaching, research and policy careers.",
        ],
        "glance_title" => "PhD at Maya Devi University at a Glance",
        "glance" => [
            ["Programme", "Doctor of Philosophy (PhD), full-time"],
            ["Disciplines", "Research across five core disciplines, including sciences, engineering and technology"],
            ["Support", "Expert supervisors, lab access, publication and conference support"],
            ["Careers", "Academia, corporate research, government and policy roles"],
            ["Admission", "See the PhD admission notice for 2027 eligibility and entrance details"],
        ],
        "why_title" => "Why Do Your PhD at Maya Devi University?",
        "why" => [
            ["Guided research", "with experienced faculty supervisors."],
            ["Lab and research infrastructure", "for experimental work."],
            ["Publication support", "for reputed journals, patents and conferences."],
            ["Collaboration", "with universities, researchers and scientific bodies."],
        ],
        "faqs" => [
            ["Does Maya Devi University offer PhD programmes?", "Yes. MDU offers full-time PhD programmes across five core disciplines."],
            ["Who can apply for PhD admission 2027 at MDU?", "Candidates with a relevant master’s degree who meet the university’s eligibility criteria. Check the 2027 PhD admission notice for marks, entrance test and interview details."],
            ["Does MDU support research publication?", "Yes. Scholars are supported to publish in reputed journals and present at academic conferences."],
            ["What careers can a PhD lead to?", "Teaching and research roles in universities, corporate research and development, and government and policy work."],
            ["Where can I compare PhD universities in Dehradun?", 'Our guide to the <a href="best-universities-for-phd-in-dehradun.php">best universities for PhD in Dehradun</a> compares the main options.'],
        ],
    ],

    // 7. MBA & BBA — /management-and-commerce.php
    "management" => [
        "intro" => [
            "Maya Devi University’s School of Commerce &amp; Management offers <strong>BBA, MBA and M.Com</strong> in Dehradun, with MBA specialisations in Marketing, Human Resources, FinTech, Digital Marketing, Business Analytics, Logistics, Travel &amp; Tourism, Pharmaceutical Management and Agri Business Management.",
            "Teaching combines case studies, internships, industrial visits and live projects, so students learn to solve real business problems from the first semester.",
        ],
        "glance_title" => "Management at Maya Devi University at a Glance",
        "glance" => [
            ["Undergraduate", "BBA, BBA Hospitality Management, BBA LLB"],
            ["MBA (2 years)", "Marketing, Human Resources, FinTech, Digital Marketing, Business Analytics, Logistics, Travel &amp; Tourism, Pharmaceutical Management, Agri Business Management"],
            ["Commerce", "M.Com"],
            ["Learning", "Case studies, internships, industrial visits, live projects"],
            ["Fees", SEO_FEES],
        ],
        "why_title" => "Why Study Management at Maya Devi University?",
        "why" => [
            ["Nine MBA specialisations,", "including future-focused options like FinTech, Digital Marketing and Business Analytics."],
            ["Industry-linked learning", "through internships, visits and live projects."],
            ["Sector-specific MBAs", "in pharma, agri business and travel &amp; tourism."],
            ["BBA to MBA on one campus.", ""],
        ],
        "faqs" => [
            ["Which MBA specialisations does Maya Devi University offer?", "Marketing, Human Resources, FinTech, Digital Marketing, Business Analytics, Logistics, Travel &amp; Tourism, Pharmaceutical Management and Agri Business Management."],
            ["How long is the MBA at MDU?", "The MBA is a two-year postgraduate programme."],
            ["Does MDU offer BBA in Dehradun?", "Yes. MDU offers BBA, BBA in Hospitality Management and the integrated BBA LLB."],
            ["What is the eligibility for MBA admission 2027?", "A bachelor’s degree from a recognised university, with the minimum marks set in the 2027 admission notice."],
            ["Do MBA students get internships?", "Yes. Internships, industrial visits and live projects are part of the programme."],
        ],
    ],

    // 8. Hotel Management — /hotel-management-and-tourism.php
    "hotel" => [
        "intro" => [
            "Maya Devi University’s School of Hotel &amp; Tourism Management offers <strong>BHM, BHMCT, diploma, certificate and master’s programmes</strong> in Dehradun, with practical training in food production, front office, housekeeping and food &amp; beverage service.",
            "The school combines a future-ready curriculum with hands-on training and industry exposure, preparing students for careers in hotels, resorts, airlines, cruise lines, tourism and event management.",
        ],
        "glance_title" => "Hotel Management at Maya Devi University at a Glance",
        "glance" => [
            ["Degrees", "BHM, BHMCT (with lateral entry), BBA Hospitality Management, B.Voc Hotel &amp; Hospitality"],
            ["Diplomas and certificates", "Diploma in Hotel Management, Diploma in Food Production, Diploma in Confectionary, Certification in Hotel Management"],
            ["Master’s", "Master of Hotel Management, Master of Hotel Management &amp; Tourism"],
            ["Training", "Practical kitchens and service training, industry exposure"],
            ["Fees", SEO_FEES],
        ],
        "why_title" => "Why Choose Maya Devi University for Hotel Management?",
        "why" => [
            ["A full range of courses,", "from one-year certificates to master’s degrees."],
            ["Practical training", "in kitchens and hospitality operations."],
            ["Industry exposure", "for careers in hotels, travel and tourism."],
            ["Lateral entry", "into BHM and BHMCT for diploma holders."],
        ],
        "faqs" => [
            ["Which hotel management courses does Maya Devi University offer?", "BHM, BHMCT, BBA Hospitality Management, B.Voc Hotel &amp; Hospitality, diplomas in hotel management, food production and confectionary, a certification course, and master’s programmes."],
            ["What is the difference between BHM and BHMCT?", "Both are hotel management degrees. BHMCT adds catering technology to the hotel management curriculum."],
            ["Can I join hotel management after 12th in any stream?", "Most hotel management courses accept 10+2 from any stream. Check each course page for exact eligibility."],
            ["Is lateral entry available in hotel management at MDU?", "Yes. BHM and BHMCT both have lateral entry options."],
            ["What jobs can I get after hotel management?", "Roles in hotels and resorts, airlines, cruise lines, travel and tourism, catering and event management."],
        ],
    ],

    // 9. Law — /school-of-legal-studies.php
    "law" => [
        "intro" => [
            "Maya Devi University’s School of Law &amp; Legal Studies offers the <strong>5-year integrated BA LLB and BBA LLB</strong> and the <strong>3-year LLB</strong> in Dehradun. The programmes build legal reasoning, advocacy and research skills, with a strong emphasis on ethics and practical training.",
            "Students gain a global perspective through international collaborations, exchange programmes and internships, alongside court visits and moot court practice.",
        ],
        "glance_title" => "Law at Maya Devi University at a Glance",
        "glance" => [
            ["Integrated", "BA LLB and BBA LLB (5 years)"],
            ["Professional", "LLB (3 years, after graduation)"],
            ["Learning", "Moot court, court and jail visits, internships, legal research"],
            ["Global exposure", "International collaborations, exchange programmes and global internships"],
            ["Fees", SEO_FEES],
        ],
        "why_title" => "Why Study Law at Maya Devi University?",
        "why" => [
            ["Three law routes:", "BA LLB, BBA LLB and LLB."],
            ["Practical legal training", "through moot court and field visits."],
            ["Global perspective", "through international collaborations and exchanges."],
            ["Focus on ethics", "and critical thinking."],
        ],
        "faqs" => [
            ["Which law courses does Maya Devi University offer?", "The 5-year integrated BA LLB and BBA LLB, and the 3-year LLB."],
            ["Can I do law after 12th at MDU?", "Yes. After 12th you can join the 5-year BA LLB or BBA LLB. The 3-year LLB is for graduates."],
            ["What is the difference between BA LLB and BBA LLB?", "Both are 5-year integrated law degrees. BA LLB combines law with arts subjects, and BBA LLB combines law with business administration."],
            ["Do law students get practical exposure?", "Yes. Students take part in moot courts, court and institutional visits, and internships."],
            ["Where is the law school located?", "The School of Law &amp; Legal Studies is on the Maya Devi University campus at Selaqui, Dehradun."],
        ],
    ],

    // 10. BCA — /bachelor-of-computer-application.php
    "bca" => [
        "intro" => [
            "Maya Devi University offers a <strong>three-year, industry-integrated BCA</strong> in Dehradun, with specialisations in <strong>AI &amp; Machine Learning, Data Science and Cyber Security</strong>. The curriculum covers programming, databases and web development alongside machine learning, neural networks and data science.",
            "Mentorship, certifications and project-based learning mean students graduate with a strong portfolio and are ready for software, data and IT roles, or for an MCA.",
        ],
        "glance_title" => "BCA at Maya Devi University at a Glance",
        "glance" => [
            ["Course", "Bachelor of Computer Applications (BCA)"],
            ["Duration", "3 years"],
            ["Specialisations", "AI &amp; Machine Learning, Data Science, Cyber Security"],
            ["Eligibility", "10+2 or equivalent from a recognised board"],
            ["Learning", "Project-based learning, mentorship, industry certifications"],
            ["Next step", "MCA (including AI &amp; ML, Data Science, Cyber Security)"],
            ["Fees", SEO_FEES],
        ],
        "why_title" => "Why Choose Maya Devi University for BCA?",
        "why" => [
            ["Three in-demand specialisations:", "AI &amp; ML, Data Science and Cyber Security."],
            ["Industry-integrated curriculum", "with tools and frameworks used in real jobs."],
            ["Project-based learning", "and certifications to build your portfolio."],
            ["BCA to MCA on one campus.", ""],
        ],
        "faqs" => [
            ["What is the duration of BCA at Maya Devi University?", "BCA is a three-year undergraduate programme."],
            ["Which BCA specialisations does MDU offer?", "AI &amp; Machine Learning, Data Science and Cyber Security, as well as the general BCA."],
            ["What is the eligibility for BCA admission 2027?", "10+2 or an equivalent examination from a recognised board. Check the 2027 admission notice for minimum marks."],
            ["What can I do after BCA?", "Work as a software developer, data analyst, web developer or security analyst, or continue to an MCA."],
            ["Does MDU offer MCA after BCA?", "Yes. MDU offers an MCA, including specialisations in AI &amp; ML, Data Science and Cyber Security."],
        ],
    ],

    ];
}

function course_seo($key)
{
    $all = course_seo_data();
    return $all[$key];
}

// Plain text of an HTML snippet, as used in the schema (tags removed, entities decoded).
function seo_plain($html)
{
    return html_entity_decode(strip_tags($html), ENT_QUOTES | ENT_HTML5, "UTF-8");
}

// Shared styles, printed once per page.
function seo_css()
{
    static $done = false;
    if ($done) return "";
    $done = true;
    return <<<CSS
<style>
.seo-h1{font-size:36px;line-height:44px;font-weight:800;color:#203058;margin:0 0 18px;}
.seo-h1 span{color:#00a651;}
.seo-intro p{margin-bottom:14px;}
.seo-block{padding:10px 0 30px;}
.seo-block h2{font-size:28px;line-height:36px;font-weight:700;color:#203058;margin:0 0 18px;}
.seo-table-wrap{overflow-x:auto;margin-bottom:34px;}
.seo-glance{width:100%;border-collapse:collapse;background:#fff;border:1px solid #e2e6ef;font-size:15px;}
.seo-glance th,.seo-glance td{padding:12px 16px;border-bottom:1px solid #e2e6ef;vertical-align:top;text-align:left;line-height:24px;}
.seo-glance th{width:32%;background:#f3faf6;color:#203058;font-weight:700;}
.seo-glance td{color:#333;}
.seo-glance a{color:#00a651;font-weight:600;text-decoration:underline;}
.seo-why{list-style:none;padding:0;margin:0 0 10px;}
.seo-why li{position:relative;padding:0 0 12px 30px;font-size:15px;line-height:25px;color:#333;}
.seo-why li::before{content:"\\2713";position:absolute;left:0;top:1px;width:20px;height:20px;line-height:20px;border-radius:50%;background:#00a651;color:#fff;font-size:12px;text-align:center;font-weight:700;}
.seo-why strong{color:#203058;}
.mdu-faq-a a{color:#00a651;text-decoration:underline;}
.mdu-main-link a{color:#00a651;font-weight:600;text-decoration:underline;}
.breadcrumb-top h1.seo-banner-h1{font-size:40px;line-height:48px;}
@media (max-width:767px){
  .breadcrumb-top h1.seo-banner-h1{font-size:24px;line-height:30px;}
  .seo-h1{font-size:26px;line-height:33px;}
  .seo-block h2{font-size:22px;line-height:29px;}
  .seo-glance th{width:40%;}
  .seo-glance th,.seo-glance td{padding:10px 12px;font-size:14px;}
}
</style>

CSS;
}

function seo_intro($seo)
{
    $out = seo_css() . '<div class="seo-intro">' . "\n";
    foreach ($seo["intro"] as $p) {
        $out .= "  <p>$p</p>\n";
    }
    return $out . "</div>\n";
}

function seo_glance($seo)
{
    $out = seo_css() . '<div class="seo-block seo-glance-block">' . "\n";
    $out .= "  <h2>{$seo["glance_title"]}</h2>\n";
    $out .= '  <div class="seo-table-wrap"><table class="seo-glance"><tbody>' . "\n";
    foreach ($seo["glance"] as $row) {
        $out .= "    <tr><th scope=\"row\">{$row[0]}</th><td>{$row[1]}</td></tr>\n";
    }
    return $out . "  </tbody></table></div>\n</div>\n";
}

function seo_why($seo)
{
    $out = seo_css() . '<div class="seo-block seo-why-block">' . "\n";
    $out .= "  <h2>{$seo["why_title"]}</h2>\n  <ul class=\"seo-why\">\n";
    foreach ($seo["why"] as $item) {
        $rest = $item[1] !== "" ? " " . $item[1] : "";
        $out .= "    <li><strong>{$item[0]}</strong>$rest</li>\n";
    }
    return $out . "  </ul>\n</div>\n";
}

// Visible FAQ section (same markup/style as the existing school-page FAQs).
function seo_faq($seo)
{
    $out = <<<HTML
<section class="mdu-faq-section" id="faq">
  <style>
    .mdu-faq-section{max-width:900px;margin:60px auto;padding:0 20px;font-family:inherit;}
    .mdu-faq-section h2{font-size:28px;font-weight:700;margin-bottom:24px;color:#0a1628;}
    .mdu-faq-item{background:#ffffff;border:1px solid #e2e6ef;border-radius:10px;
      padding:16px 20px;margin-bottom:14px;box-shadow:0 1px 3px rgba(0,0,0,0.04);}
    .mdu-faq-q{font-weight:600;font-size:16px;color:#0a1628;cursor:pointer;list-style:none;}
    .mdu-faq-q::-webkit-details-marker{display:none;}
    .mdu-faq-q::after{content:"+";float:right;font-weight:700;color:#00a651;}
    .mdu-faq-item[open] .mdu-faq-q::after{content:"\\2212";}
    .mdu-faq-a{margin-top:10px;color:#4a5568;line-height:1.7;font-size:15px;}
    .mdu-faq-a a{color:#00a651;text-decoration:underline;}
  </style>
  <h2>Frequently Asked Questions</h2>

HTML;
    foreach ($seo["faqs"] as $i => $faq) {
        $open = $i === 0 ? " open" : "";
        $out .= "    <details class=\"mdu-faq-item\"$open>\n"
              . "      <summary class=\"mdu-faq-q\">{$faq[0]}</summary>\n"
              . "      <p class=\"mdu-faq-a\">{$faq[1]}</p>\n"
              . "    </details>\n";
    }
    return $out . "</section>\n";
}

// FAQPage JSON-LD built from the same FAQ text as the visible section.
function seo_faq_schema($seo)
{
    $ld = [
        "@context" => "https://schema.org",
        "@type" => "FAQPage",
        "mainEntity" => [],
    ];
    foreach ($seo["faqs"] as $faq) {
        $ld["mainEntity"][] = [
            "@type" => "Question",
            "name" => seo_plain($faq[0]),
            "acceptedAnswer" => ["@type" => "Answer", "text" => seo_plain($faq[1])],
        ];
    }
    return '<script type="application/ld+json">' . "\n"
        . json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
        . "\n</script>\n";
}
