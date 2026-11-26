<?php
/* ==========================================================================
   Maya Devi University — homepage, edition 3
   File : index-3.php
   CSS  : assets/css/index-3.css   (everything namespaced .i3-)
   JS   : assets/js/index-3.js
   Font : Manrope (the typeface used on cuchd.in)
   Bright, classic university layout built from the client's picks:
     admission.disriverside.com  full-width hero slider with caption, navy
                                 welcome, "education that's personal",
                                 features & facilities, moments, admission process;
                                 UPPERCASE headings with an italic accent word
     dbuu.ac.in                  highlight cards, accreditations, schools cards,
                                 choose your programme, placement highlights,
                                 recruiters grid, Happening @, student speak
     cuchd.in                    legacy numbers, Manrope type
   No forms on the page. Programme lists are generated from the course pages.
   Photos are read from existing folders (assets/uploads/ix, h3d).
   index.php is untouched.
   ========================================================================== */

$page_title       = "Best Private University in Dehradun | Maya Devi University";
$page_description = "Maya Devi University is a leading private university in Dehradun, Uttarakhand offering B.Tech, B.Sc, MBA, MCA, Pharmacy, Nursing and more with modern infrastructure, expert faculty and strong placement support.";
$canonical_url    = "https://maya.edu.in/";
$og_image         = "https://maya.edu.in/assets/uploads/campus-2.jpeg";

function i3_asset($path) {
    $t = @filemtime(__DIR__ . '/' . $path);
    return $path . ($t ? '?v=' . $t : '');
}
function i3_img($path) { return 'assets/uploads/' . $path . '.webp'; }

function i3_icon($name, $class = '') {
    static $p = [
        'arrow'    => '<path d="M5 12h14M13 6l6 6-6 6"/>',
        'arrow-ur' => '<path d="M7 17 17 7M8 7h9v9"/>',
        'play'     => '<path d="M7 4.5v15l12-7.5z" fill="currentColor" stroke="none"/>',
        'phone'    => '<path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2z"/>',
        'chev-l'   => '<path d="m15 18-6-6 6-6"/>',
        'chev-r'   => '<path d="m9 18 6-6-6-6"/>',
        'plus'     => '<path d="M12 5v14M5 12h14"/>',
        'close'    => '<path d="M6 6l12 12M18 6 6 18"/>',
        'search'   => '<circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/>',
        'pin'      => '<path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/>',
        'cal'      => '<rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/>',
        'clock'    => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
        'check'    => '<path d="m5 12 5 5L20 7"/>',
        'star'     => '<path d="m12 3 2.7 5.6 6.1.9-4.4 4.3 1 6.1L12 17l-5.4 2.9 1-6.1L3.2 9.5l6.1-.9z"/>',
        'user'     => '<circle cx="12" cy="8" r="4"/><path d="M4 21a8 8 0 0 1 16 0"/>',
        'doc'      => '<path d="M14 3H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"/><path d="M14 3v6h6M8 13h8M8 17h5"/>',
        'card'     => '<rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20M6 15h4"/>',
        'shield'   => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/>',
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
        'chat'     => '<path d="M21 11.5a8.4 8.4 0 0 1-12.3 7.5L3 21l2-5.6A8.5 8.5 0 1 1 21 11.5z"/>',
        'expand'   => '<path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/>',
    ];
    return '<svg class="i3-i ' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">' . ($p[$name] ?? '') . '</svg>';
}

/* Program catalog — generated from undergraduate-course.php, post-graduate.php
   and Diploma-course.php. [school, [[program, url], ...]] per level */
$i3_catalog = [
    'ug' => [
        ['School of Computer Engineering &amp; Applications', [['Bachelor of Computer Application', 'best-bca-college-in-dehradun-uttarakhand.php'], ['Bachelor of Computer Application in AIML', 'best-bca-ai-ml-college-in-dehradun-uttarakhand.php'], ['Bachelor of Computer Application in Data Science', 'best-bca-data-science-college-in-dehradun-uttarakhand.php'], ['Bachelor of Computer Application in Cyber Security', 'best-bca-cyber-security-college-in-dehradun-uttarakhand.php'], ['B.Sc IT', 'best-b-sc-information-technology-college-in-dehradun-uttarakhand.php'], ['B.Sc Computer Science', 'best-b-sc-computer-science-college-in-dehradun-uttarakhand.php'], ['B.Tech (LE)', 'best-b-tech-cse-lateral-entry-college-in-dehradun-uttarakhand.php'], ['B.Tech CSE', 'best-b-tech-cse-college-in-dehradun-uttarakhand.php'], ['B.Tech AI &amp; ML', 'best-b-tech-ai-ml-college-in-dehradun-uttarakhand.php'], ['B.Tech EVT', 'best-b-tech-electric-vehicle-technology-college-in-dehradun-uttarakhand.php'], ['B.Tech HFCT', 'best-b-tech-hydrogen-fuel-cell-technology-college-in-dehradun-uttarakhand.php'], ['B.Tech Data Science', 'best-b-tech-data-science-college-in-dehradun-uttarakhand.php'], ['B.Tech Cyber Security', 'best-b-tech-cyber-security-college-in-dehradun-uttarakhand.php'], ['B.Tech CS with IBM Program (AIML, Data Science, Cyber Security &amp; Forensics)', 'best-b-tech-cse-ibm-college-in-dehradun-uttarakhand.php']]],
        ['School of Engineering', [['B.Tech - Civil Engineering (Structural Engineering)', 'best-b-tech-civil-structural-engineering-college-in-dehradun-uttarakhand.php'], ['B.Tech - Civil Engineering', 'best-b-tech-civil-engineering-college-in-dehradun-uttarakhand.php'], ['B.Tech - Civil Engineering (Lateral Entry)', 'best-b-tech-civil-engineering-lateral-entry-college-in-dehradun-uttarakhand.php'], ['B.Tech - Mechanical Engineering', 'best-b-tech-mechanical-engineering-college-in-dehradun-uttarakhand.php'], ['B.Tech - Mechanical Engineering (Mechatronics)', 'best-b-tech-mechatronics-and-robotics-college-in-dehradun-uttarakhand.php'], ['B.Tech - Mechanical Engineering (LE)', 'best-b-tech-mechanical-engineering-lateral-entry-college-in-dehradun-uttarakhand.php'], ['B.Tech -Electronics &amp; Communication Engineering', 'best-b-tech-electronics-and-communication-engineering-college-in-dehradun-uttarakhand.php'], ['B.Tech -Electronics &amp; Communication Engineering (VLSI &amp; Embedded System)', 'best-b-tech-ece-vlsi-embedded-systems-college-in-dehradun-uttarakhand.php'], ['B.Tech -Electronics &amp; Communication Engineering (LE)', 'best-b-tech-ece-lateral-entry-college-in-dehradun-uttarakhand.php'], ['B.Tech -Electronics &amp; Communication Engineering (Robotics &amp; AI)', 'best-b-tech-ece-robotics-ai-college-in-dehradun-uttarakhand.php'], ['B.Tech - Aerospace Engineering', 'best-b-tech-aerospace-engineering-college-in-dehradun-uttarakhand.php']]],
        ['School of Pharmacy', [['B.Pharm - Pharmacy', 'best-b-pharma-colleges-in-dehradun-uttarakhand.php'], ['B.Pharm - Pharmacy (Lateral Entry)', 'best-b-pharma-lateral-entry-college-in-dehradun-uttarakhand.php'], ['Pharm.D - Doctor of Pharmacy', 'best-pharm-d-college-in-dehradun-uttarakhand.php']]],
        ['School of Management and Commerce', [['BBA - Business Administration (HR)', 'best-bba-college-in-dehradun-uttarakhand.php'], ['BBA - Business Administration (Marketing Management)', 'best-bba-college-in-dehradun-uttarakhand.php'], ['BBA - Business Administration (Finance Management)', 'best-bba-college-in-dehradun-uttarakhand.php'], ['BBA - Business Administration (Digital Marketing)', 'best-bba-college-in-dehradun-uttarakhand.php'], ['BBA - Business Administration (Aviation Management)', 'best-bba-college-in-dehradun-uttarakhand.php'], ['BBA - Business Administration (Retail Management)', 'best-bba-college-in-dehradun-uttarakhand.php'], ['BBA - Hospitality Management', 'best-bba-hospitality-management-college-in-dehradun-uttarakhand.php'], ['B.com (Hons) - Finance', 'best-b-com-college-in-dehradun-uttarakhand.php'], ['B.com (Hons) - Accounting', 'best-b-com-college-in-dehradun-uttarakhand.php'], ['B.com (Hons) - Taxation', 'best-b-com-college-in-dehradun-uttarakhand.php']]],
        ['School of Hotel Management and Tourism', [['BHM - Hotel Management', 'best-bhm-college-in-dehradun-uttarakhand.php'], ['BHM - Hotel Management (LE)', 'best-bhm-lateral-entry-college-in-dehradun-uttarakhand.php'], ['BHM - Hotel Management &amp; Catering Technology (BHMCT)', 'best-bhmct-college-in-dehradun-uttarakhand.php'], ['BHM - Hotel Management &amp; Catering Technology (LE)', 'best-bhmct-lateral-entry-college-in-dehradun-uttarakhand.php'], ['BBA - Hospitality Management', 'best-bba-hospitality-management-college-in-dehradun-uttarakhand.php']]],
        ['School of Life and Applied Sciences', [['B.Sc - Environmental Science (Hons.)', 'best-b-sc-environmental-science-hons-college-in-dehradun-uttarakhand.php'], ['B.Sc - Physics (Hons.)', 'best-b-sc-physics-hons-college-in-dehradun-uttarakhand.php'], ['B.Sc - Botany (Hons.)', 'best-b-sc-botany-hons-college-in-dehradun-uttarakhand.php'], ['B.Sc - Zoology (Hons.)', 'best-b-sc-zoology-hons-college-in-dehradun-uttarakhand.php'], ['B.Sc - Chemistry (Hons.)', 'best-b-sc-chemistry-hons-college-in-dehradun-uttarakhand.php'], ['B.Sc - Mathematics (Hons.)', 'best-b-sc-mathematics-hons-college-in-dehradun-uttarakhand.php'], ['B.Sc - Forensic Science (Hons.)', 'best-b-sc-forensic-science-hons-college-in-dehradun-uttarakhand.php'], ['B.Sc - Biotechnology (Hons.)', 'best-b-sc-biotechnology-hons-college-in-dehradun-uttarakhand.php'], ['B.Sc - Microbiology (Hons.)', 'best-b-sc-microbiology-hons-college-in-dehradun-uttarakhand.php'], ['B.Sc - PCM (Physics, Chemistry, Mathematics)', 'best-b-sc-pcm-college-in-dehradun-uttarakhand.php'], ['B.Sc - CBZ (Chemistry, Botany, Zoology)', 'best-b-sc-cbz-college-in-dehradun-uttarakhand.php']]],
        ['School of Education', [['B.Ed - Bachelor of Education', 'best-b-ed-college-in-dehradun-uttarakhand.php']]],
        ['School of Agriculture &amp; Technology', [['B.Sc - Agriculture (Hons.)', 'best-b-sc-agriculture-college-in-dehradun-uttarakhand.php'], ['B.Sc - Horticulture (Hons.)', 'best-b-sc-horticulture-college-in-dehradun-uttarakhand.php'], ['B.Tech - Food Technology', 'best-b-tech-food-technology-college-in-dehradun-uttarakhand.php'], ['B.Tech - Food Technology (Hons.)', 'best-b-sc-food-technology-college-in-dehradun-uttarakhand.php']]],
        ['School of Nursing', [['B.Sc - Nursing', 'best-b-sc-nursing-college-in-dehradun-uttarakhand.php']]],
        ['School of Health Sciences', [['Bachelor in Hospital Administration (BHA)', 'best-bha-hospital-administration-college-in-dehradun-uttarakhand.php'], ['Bachelor in Public Health (BPH)', 'best-bph-public-health-college-in-dehradun-uttarakhand.php']]],
        ['School of Paramedical Sciences', [['Bachelor of Physiotherapy (BPT)', 'best-bpt-college-in-dehradun-uttarakhand.php'], ['Bachelor of Medical Laboratory Technology (BMLT)', 'best-bmlt-college-in-dehradun-uttarakhand.php'], ['Bachelor of Radiology &amp; Imaging Technology (BMRIT)', 'best-bmrit-college-in-dehradun-uttarakhand.php'], ['Bachelor of Operation Theatre Technology (BOTT)', 'best-bott-college-in-dehradun-uttarakhand.php'], ['B.Sc - Dialysis Technology', 'best-b-sc-dialysis-technology-college-in-dehradun-uttarakhand.php'], ['B.Sc - Anaesthesia Technology', 'best-b-sc-anaesthesia-technology-college-in-dehradun-uttarakhand.php'], ['B.Sc - Cardiac Care Technology', 'best-b-sc-cardiac-care-technology-college-in-dehradun-uttarakhand.php'], ['Bachelor of Physical Education and Sports (BPES)', 'best-physical-education-and-sports-college-in-dehradun-uttarakhand.php']]],
        ['School of Arts and Humanities', [['BA - English Literature', 'best-ba-english-literature-college-in-dehradun-uttarakhand.php'], ['BA - History', 'best-ba-history-college-in-dehradun-uttarakhand.php'], ['BA - Psychology', 'best-ba-psychology-college-in-dehradun-uttarakhand.php'], ['BA - Clinical Psychology', 'best-ba-clinical-psychology-college-in-dehradun-uttarakhand.php'], ['BA - Hindi Literature', 'best-ba-hindi-literature-college-in-dehradun-uttarakhand.php'], ['BA - Sociology', 'best-ba-sociology-college-in-dehradun-uttarakhand.php'], ['BA - Political Science', 'best-ba-political-science-college-in-dehradun-uttarakhand.php'], ['BA - Economics', 'best-ba-economics-college-in-dehradun-uttarakhand.php'], ['BA - Yoga', 'best-ba-yoga-college-in-dehradun-uttarakhand.php'], ['BA - Geography', 'best-ba-geography-college-in-dehradun-uttarakhand.php'], ['BA - Fine &amp; Arts', 'best-ba-fine-arts-college-in-dehradun-uttarakhand.php'], ['BA - Maths', 'best-ba-mathematics-college-in-dehradun-uttarakhand.php'], ['BA - Journalism &amp; Mass Communication', 'best-ba-journalism-and-mass-communication-college-in-dehradun-uttarakhand.php']]],
        ['School of Law &amp; Legal Studies', [['BA LLB - Integrated Law', 'best-ba-llb-college-in-dehradun-uttarakhand.php'], ['LLB - Bachelor of Law', 'best-llb-college-in-dehradun-uttarakhand.php'], ['BBA LLB - Bachelor of Law', 'best-bba-llb-college-in-dehradun-uttarakhand.php']]],
        ['School of Skill Development and Vocational Studies', [['B.Voc - Agriculture', 'best-b-voc-agriculture-college-in-dehradun-uttarakhand.php'], ['B.Voc - Aviation', 'best-b-voc-aviation-college-in-dehradun-uttarakhand.php'], ['B.Voc - Welding', 'best-b-voc-welding-technology-college-in-dehradun-uttarakhand.php'], ['B.Voc - Food Production', 'best-b-voc-food-production-college-in-dehradun-uttarakhand.php'], ['B.Voc - Sales &amp; Marketing', 'best-b-voc-sales-marketing-college-in-dehradun-uttarakhand.php'], ['B.Voc - Pharma Assistance', 'best-b-voc-pharma-assistance-college-in-dehradun-uttarakhand.php'], ['B.Voc - Bakery &amp; Pastry Arts', 'best-b-voc-bakery-pastry-college-in-dehradun-uttarakhand.php'], ['B.Voc - AIML &amp; Data Analysis', 'best-b-voc-ai-ml-data-analysis-college-in-dehradun-uttarakhand.php'], ['B.Voc - Computer Technology', 'best-b-voc-computer-technology-college-in-dehradun-uttarakhand.php'], ['B.Voc - Mass media &amp; Production', 'best-b-voc-mass-media-production-college-in-dehradun-uttarakhand.php'], ['B.Voc - Finance,Taxation &amp; Accounting', 'best-b-voc-finance-taxation-accounting-college-in-dehradun-uttarakhand.php'], ['B.Voc - E-commerce &amp; Digital Marketing', 'best-b-voc-ecommerce-digital-marketing-college-in-dehradun-uttarakhand.php'], ['B.Voc - Hotel &amp; Hospital Management', 'best-b-voc-hotel-hospitality-college-in-dehradun-uttarakhand.php'], ['B.Voc - Patient &amp; Health Care Management', 'best-b-voc-patient-healthcare-college-in-dehradun-uttarakhand.php'], ['B.Voc - Food processing &amp; Nutrition Management', 'best-b-voc-food-processing-nutrition-college-in-dehradun-uttarakhand.php']]],
        ['Ashtavakra School of Rehabilitation', [['B.Sc - Clinical Psychology (Hons.)', 'best-b-sc-clinical-psychology-college-in-dehradun-uttarakhand.php']]],
    ],
    'pg' => [
        ['School of Computer Engineering &amp; Applications', [['Master of Computer Application', 'best-mca-college-in-dehradun-uttarakhand.php'], ['Master of Computer Application (AIML)', 'best-mca-ai-ml-college-in-dehradun-uttarakhand.php'], ['Master of Computer Application (Data Science)', 'best-mca-data-science-college-in-dehradun-uttarakhand.php'], ['Master of Computer Application (Cyber Security)', 'best-mca-cyber-security-college-in-dehradun-uttarakhand.php'], ['M.Sc Computer Science', 'best-m-sc-computer-science-college-in-dehradun-uttarakhand.php'], ['M.tech CSE', 'best-m-tech-cse-college-in-dehradun-uttarakhand.php'], ['M.tech CSE(AIML/Data Science/Cyber Security)', 'best-m-tech-cse-ai-ml-college-in-dehradun-uttarakhand.php']]],
        ['School of Engineering', [['M.Tech - Structural Engineering', 'best-m-tech-structural-engineering-college-in-dehradun-uttarakhand.php'], ['M.Tech - Mechanical Engineering', 'best-m-tech-mechanical-engineering-college-in-dehradun-uttarakhand.php']]],
        ['School of Pharmacy', [['M.Pharm - Pharmaceutics', 'best-m-pharma-pharmaceutics-college-in-dehradun-uttarakhand.php'], ['M.Pharm - Pharmaceutical Chemistry', 'best-m-pharma-pharmaceutical-chemistry-college-in-dehradun-uttarakhand.php'], ['M.Pharm - Pharmacology', 'best-m-pharma-pharmacology-college-in-dehradun-uttarakhand.php']]],
        ['School of Management and Commerce', [['M.Com - Master of Commerce', 'best-m-com-college-in-dehradun-uttarakhand.php'], ['MBA - Marketing Management', 'best-mba-marketing-management-college-in-dehradun-uttarakhand.php'], ['MBA - Human Resource Management (HR)', 'best-mba-human-resource-management-college-in-dehradun-uttarakhand.php'], ['MBA - FinTech', 'best-mba-fintech-college-in-dehradun-uttarakhand.php'], ['MBA - Digital Marketing', 'best-mba-digital-marketing-college-in-dehradun-uttarakhand.php'], ['MBA - Agri Business Management', 'best-mba-agri-business-management-college-in-dehradun-uttarakhand.php'], ['MBA - Logistics &amp; Supply Chain Management', 'best-mba-logistics-management-college-in-dehradun-uttarakhand.php'], ['MBA - Pharmaceutical Management', 'best-mba-pharmaceutical-management-college-in-dehradun-uttarakhand.php'], ['MBA - Travel &amp; Tourism Management', 'best-mba-travel-and-tourism-college-in-dehradun-uttarakhand.php']]],
        ['School of Hotel Management and Tourism', [['MHM - Master of Hotel Management', 'best-master-of-hotel-management-college-in-dehradun-uttarakhand.php'], ['Master of Hotel Management and Tourism', 'best-master-of-hotel-management-and-tourism-college-in-dehradun-uttarakhand.php']]],
        ['School of Life and Applied Sciences', [['M.Sc - Environmental Science', 'best-m-sc-environmental-science-college-in-dehradun-uttarakhand.php'], ['M.Sc - Physics', 'best-m-sc-physics-college-in-dehradun-uttarakhand.php'], ['M.Sc - Botany', 'best-m-sc-botany-college-in-dehradun-uttarakhand.php'], ['M.Sc - Zoology', 'best-m-sc-zoology-college-in-dehradun-uttarakhand.php'], ['M.Sc - Chemistry', 'best-m-sc-chemistry-college-in-dehradun-uttarakhand.php'], ['M.Sc - Mathematics', 'best-m-sc-mathematics-college-in-dehradun-uttarakhand.php'], ['M.Sc - Forensic Science', 'best-m-sc-forensic-science-college-in-dehradun-uttarakhand.php'], ['M.Sc - Biotechnology', 'best-m-sc-biotechnology-college-in-dehradun-uttarakhand.php'], ['M.Sc - Microbiology', 'best-m-sc-microbiology-college-in-dehradun-uttarakhand.php']]],
        ['School of Agriculture &amp; Technology', [['Master in Agronomy', 'best-m-sc-agriculture-college-in-dehradun-uttarakhand.php'], ['Master in Horticulture', 'best-m-sc-horticulture-college-in-dehradun-uttarakhand.php'], ['Master in Food Technology', 'best-m-sc-food-technology-college-in-dehradun-uttarakhand.php'], ['Master in Genetics &amp; Plant Breeding', 'best-m-sc-genetics-and-plant-breeding-college-in-dehradun-uttarakhand.php']]],
        ['School of Health Sciences', [['Master in Hospital Administration (MHA)', 'best-mha-hospital-administration-college-in-dehradun-uttarakhand.php'], ['Master in Public Health (MPH)', 'best-mph-public-health-college-in-dehradun-uttarakhand.php']]],
        ['School of Arts and Humanities', [['MA - English Literature', 'best-ma-english-college-in-dehradun-uttarakhand.php'], ['MA - Hindi Literature', 'best-ma-hindi-literature-college-in-dehradun-uttarakhand.php'], ['MA - Psychology', 'best-ma-psychology-college-in-dehradun-uttarakhand.php'], ['MA - Clinical Psychology', 'best-ma-clinical-psychology-college-in-dehradun-uttarakhand.php'], ['MA - Sociology', 'best-ma-sociology-college-in-dehradun-uttarakhand.php'], ['MA - Political Science', 'best-ma-political-science-college-in-dehradun-uttarakhand.php'], ['MA - Economics', 'best-ma-economics-college-in-dehradun-uttarakhand.php'], ['MA - Yoga', 'best-ma-yoga-college-in-dehradun-uttarakhand.php'], ['MA - Fine &amp; Arts', 'best-ma-fine-arts-college-in-dehradun-uttarakhand.php'], ['MA - Mathematics', 'best-ma-mathematics-college-in-dehradun-uttarakhand.php'], ['MA - Environmental Science', 'best-ma-environmental-science-college-in-dehradun-uttarakhand.php'], ['MA - Journalism &amp; Mass Communication', 'best-ma-journalism-and-mass-communication-college-in-dehradun-uttarakhand.php']]],
        ['School of Law &amp; Legal Studies', [['LLM - Master of Laws', 'best-llm-college-in-dehradun-uttarakhand.php']]],
    ],
    'diploma' => [
        ['School of Pharmacy', [['D.Pharm - Diploma in Pharmacy', 'best-d-pharma-college-in-dehradun-uttarakhand.php']]],
        ['School of Hotel Management and Tourism', [['DHM - Diploma in Hotel Management', 'best-diploma-in-hotel-management-college-in-dehradun-uttarakhand.php'], ['DFP - Diploma in Food Production', 'best-diploma-in-food-production-college-in-dehradun-uttarakhand.php'], ['Diploma in Bakery &amp; Confectionery', 'best-diploma-in-confectionery-college-in-dehradun-uttarakhand.php'], ['CHM - Certification in Hotel Management', 'best-certificate-in-hotel-management-college-in-dehradun-uttarakhand.php']]],
        ['School of Nursing', [['GNM - General Nursing &amp; Midwifery', 'best-gnm-college-in-dehradun-uttarakhand.php'], ['Nursing Assistant', 'best-nursing-assistant-college-in-dehradun-uttarakhand.php']]],
        ['School of Paramedical Sciences', [['Diploma in Dialysis Technology', 'best-diploma-in-dialysis-technology-college-in-dehradun-uttarakhand.php']]],
        ['Ashtavakra School of Rehabilitation', [['Early Childhood Special Education (Hearing Impairment)', 'best-diploma-early-childhood-special-education-college-in-dehradun-uttarakhand.php'], ['Early Rehabilitation Therapy (Mental Retardation)', 'best-diploma-in-early-rehabilitation-therapy-college-in-dehradun-uttarakhand.php'], ['Diploma in Prosthetics &amp; Orthotics', 'best-diploma-in-prosthetics-and-orthotics-college-in-dehradun-uttarakhand.php'], ['Diploma in Hearing Language &amp; Speech (DHLS)', 'best-diploma-in-hearing-language-and-speech-college-in-dehradun-uttarakhand.php'], ['Diploma in Indian Sign Language (DISLI)', 'best-diploma-in-indian-sign-language-college-in-dehradun-uttarakhand.php'], ['Certificate Course in Care Giving', 'best-certificate-in-care-giving-college-in-dehradun-uttarakhand.php']]],
    ],
];

/* School landing pages + icons, keyed by the names used on the course pages */
$i3_school_meta = [
    'School of Computer Engineering & Applications'      => ['best-computer-engineering-college-in-dehradun-uttarakhand.php', 'laptop'],
    'School of Engineering'                               => ['best-engineering-college-in-dehradun-uttarakhand.php', 'wrench'],
    'School of Pharmacy'                                  => ['best-pharmacy-college-in-dehradun-uttarakhand.php', 'pill'],
    'School of Management and Commerce'                   => ['best-management-and-commerce-college-in-dehradun-uttarakhand.php', 'trend'],
    'School of Hotel Management and Tourism'              => ['best-hotel-management-college-in-dehradun-uttarakhand.php', 'utensils'],
    'School of Life and Applied Sciences'                 => ['best-life-and-allied-sciences-college-in-dehradun-uttarakhand.php', 'flask'],
    'School of Education'                                 => ['best-education-college-in-dehradun-uttarakhand.php', 'cap'],
    'School of Agriculture & Technology'                  => ['best-agriculture-college-in-dehradun-uttarakhand.php', 'leaf'],
    'School of Nursing'                                   => ['best-nursing-college-in-dehradun-uttarakhand.php', 'pulse'],
    'School of Health Sciences'                           => ['best-health-sciences-college-in-dehradun-uttarakhand.php', 'cross'],
    'School of Paramedical Sciences'                      => ['best-paramedical-college-in-dehradun-uttarakhand.php', 'steth'],
    'School of Arts and Humanities'                       => ['best-arts-and-humanities-college-in-dehradun-uttarakhand.php', 'palette'],
    'School of Law & Legal Studies'                       => ['best-law-college-in-dehradun-uttarakhand.php', 'scale'],
    'School of Skill Development and Vocational Studies'  => ['best-skill-development-and-vocational-college-in-dehradun-uttarakhand.php', 'briefcase'],
    'Ashtavakra School of Rehabilitation'                 => ['best-rehabilitation-sciences-college-in-dehradun-uttarakhand.php', 'rehab'],
];
$i3_levels = [
    'ug'      => ['Undergraduate', 'undergraduate-course.php'],
    'pg'      => ['Postgraduate', 'post-graduate.php'],
    'diploma' => ['Diploma', 'Diploma-course.php'],
];
function i3_school($name) {
    global $i3_school_meta;
    $k = html_entity_decode($name);
    return $i3_school_meta[$k] ?? ['colleges-departments.php', 'cap'];
}

/* ---------------- Content (facts from the live site) ---------------- */

/* Full-width hero (DIS) — [image, caption] */
$i3_slides = [
    ['h3d/hero-4', 'Empower. Educate. Excel.'],
    ['ix/campus-aerial', 'A Green Campus in the Foothills of Dehradun'],
    ['ix/pillar-lab', 'Advanced Computer &amp; Technology Labs'],
    ['ix/campus-steps', 'Friendships That Last a Lifetime'],
];

/* Highlight cards under the hero (DBUU) */
$i3_highlights = [
    ['120+', 'Programmes', 'cap'],
    ['15', 'Schools of Study', 'doc'],
    ['800+', 'Placement Offers', 'briefcase'],
    ['₹48 LPA', 'Highest Package', 'trend'],
];

/* Recognitions (approval-accreditation-membership-ranking.php) */
$i3_recog = [
    ['rank-1.webp', 'Govt. of Uttarakhand'],
    ['rank-2.png', 'UGC'],
    ['rank-3.png', 'PCI'],
    ['rank-4.webp', 'NCTE'],
    ['rank-5.png', 'BCI'],
];

/* Why MDU photo tiles (DBUU) — [image, label] */
$i3_why = [
    ['ix/main-block', '15 Schools of Study'],
    ['ix/classroom', '35+ Doctoral Faculty'],
    ['h3d/maya-3', 'Modern Labs'],
    ['ix/pillar-library', 'Central Library'],
];

/* DIS "an education that's personal" — [image, title, text] */
$i3_journey = [
    ['ix/hero-coding', 'Industry-Aligned Programmes', '120+ programmes across engineering, computer applications, pharmacy, management, law, agriculture and more &mdash; including B.Tech specialisations offered with IBM.'],
    ['ix/sci-lab', 'Learning by Doing', 'Science, pharmacy, paramedical and computer labs where students spend real hours on real equipment, guided by experienced faculty.'],
    ['ix/volleyball', 'Strength Through Sports', 'Volleyball, kabaddi, martial arts and a full gymnasium help students build fitness, teamwork and discipline.'],
    ['ix/hero-friends', 'A Campus That Feels Like Home', 'Separate hostels, a wellness centre, cultural festivals and clubs &mdash; a green campus where students make friends for life.'],
];

/* Our schools (DBUU photo cards) — [name, url, image, short tag] */
$i3_schools = [
    ['Computer Engineering &amp; Applications', 'best-computer-engineering-college-in-dehradun-uttarakhand.php', 'ix/coding', 'SoCEA'],
    ['Engineering', 'best-engineering-college-in-dehradun-uttarakhand.php', 'ix/learn-electronics', 'SoE'],
    ['Pharmacy', 'best-pharmacy-college-in-dehradun-uttarakhand.php', 'h3d/pharmacy', 'SoP'],
    ['Commerce &amp; Management', 'best-management-and-commerce-college-in-dehradun-uttarakhand.php', 'h3d/bba-2', 'SoCM'],
    ['Hotel &amp; Tourism Management', 'best-hotel-management-college-in-dehradun-uttarakhand.php', 'h3d/hotel', 'SoHTM'],
    ['Life &amp; Applied Sciences', 'best-life-and-allied-sciences-college-in-dehradun-uttarakhand.php', 'ix/sci-lab', 'SoLAS'],
    ['Agriculture &amp; Technology', 'best-agriculture-college-in-dehradun-uttarakhand.php', 'h3d/agriculture', 'SoAT'],
    ['Nursing', 'best-nursing-college-in-dehradun-uttarakhand.php', 'ix/nursing-care', 'SoN'],
    ['Health Sciences', 'best-health-sciences-college-in-dehradun-uttarakhand.php', 'h3d/health', 'SoHS'],
    ['Paramedical Sciences', 'best-paramedical-college-in-dehradun-uttarakhand.php', 'h3d/paramedical', 'SoPS'],
    ['Law &amp; Legal Studies', 'best-law-college-in-dehradun-uttarakhand.php', 'h3d/event-jail-visit-law-students', 'SoLLS'],
    ['Arts &amp; Humanities', 'best-arts-and-humanities-college-in-dehradun-uttarakhand.php', 'h3d/arts', 'SoAH'],
    ['Education', 'best-education-college-in-dehradun-uttarakhand.php', 'h3d/education', 'SoEd'],
    ['Skill Development &amp; Vocational Studies', 'best-skill-development-and-vocational-college-in-dehradun-uttarakhand.php', 'h3d/vocational', 'SoSDVS'],
    ['Ashtavakra School of Rehabilitation', 'best-rehabilitation-sciences-college-in-dehradun-uttarakhand.php', 'h3d/rehab', 'ASR'],
];

$i3_posters = [];
foreach ([1, 2, 6, 7, 8, 11, 12, 13, 14, 15, 16] as $n) { $i3_posters[] = i3_img('ix/place-' . $n); }
$i3_recruiters = [];
for ($i = 1; $i <= 24; $i++) { $i3_recruiters[] = 'assets/uploads/icon/' . $i . '.' . (in_array($i, [5, 6], true) ? 'png' : 'jpg'); }

/* DIS features & facilities — [image, title, bullets] */
$i3_features = [
    ['ix/pillar-lab', 'Academic &amp; Learning Infrastructure', ['Smart classrooms and seminar halls', 'Computer, science and pharmacy labs', 'Central library with e-resources']],
    ['h3d/hostel', 'Hostel &amp; Residential Life', ['Separate hostels for boys and girls', '24x7 security on campus', 'Study spaces and recreation zones']],
    ['ix/pillar-gym', 'Sports &amp; Physical Education', ['Grounds for volleyball and kabaddi', 'Gymnasium and fitness centre', 'Martial arts and yoga sessions']],
    ['h3d/food-court', 'Dining, Wellness &amp; Transport', ['Food court on campus', 'Health &amp; wellness centre', 'University buses across Dehradun']],
];

$i3_events = [
    ['Mushroom Cultivation Training Session', 'event-mushroom-cultivation-training.php', 'h3d/event-mushroom-cultivation-training', 'Agriculture', '11', 'May 2026'],
    ['Law Students Visit Suddhowala Jail for Academic Exposure', 'event-jail-visit-law-students.php', 'h3d/event-jail-visit-law-students', 'Law', '09', 'May 2026'],
    ['Academic Exposure Visit at AIIMS Rishikesh', 'event-aiims-rishikesh-visit.php', 'h3d/event-aiims-rishikesh-visit', 'Health Sciences', '07', 'May 2026'],
    ['Visit to the Regional Sericulture Research Station, Sahaspur', 'event-sericulture-research-visit.php', 'h3d/event-sericulture-research-visit', 'Agriculture', '06', 'May 2026'],
    ['International Conference on Sustainable Agriculture', 'event-international-agriculture-conference.php', 'ix/event-international-agriculture-conference', 'Conference', '05', 'May 2026'],
    ['Searching Eyes Internal Hackathon 2026', 'event-searching-eyes-hackathon-2026.php', 'ix/event-searching-eyes-hackathon-2026', 'Technology', '27', 'Feb 2026'],
];

$i3_voices = [
    ['Arti Sharma', 'School of Computer Engineering &amp; Applications', 'Studying at Maya Devi University has been a truly transformative journey. The dedicated faculty, advanced infrastructure, and practical learning approach have shaped my skills and confidence.'],
    ['Harshit Tiwari', 'School of Commerce &amp; Management', 'The supportive mentors, innovative teaching methods, and ample opportunities for growth have helped me discover my true potential.'],
    ['Anchal', 'School of Commerce &amp; Management', 'The perfect balance of academic learning and practical exposure. I am proud to be part of an institution that truly prepares its students for global opportunities.'],
    ['Priyanshi Tomar', 'School of Commerce &amp; Management', 'The exposure to real-world projects and industry interactions has made me confident to step into my professional career.'],
];

$i3_moments = ['ix/g-carnival', 'h3d/maya-5', 'ix/kabaddi', 'h3d/campus-6', 'ix/g-martial', 'h3d/maya-10', 'ix/stage', 'h3d/maya-7'];

$i3_steps = [
    ['user', 'Registration Form', 'Register with basic contact and personal details.'],
    ['doc', 'Application Form', 'Fill in your information and upload documents.'],
    ['card', 'Pay Application Fee', 'Secure online payment to submit your application.'],
    ['shield', 'Verification &amp; Admission', 'Receive your admission instructions after verification.'],
];

$i3_faqs = [
    ['Is Maya Devi University recognised by the UGC?', 'Yes. Maya Devi University, Dehradun is recognised by the University Grants Commission (UGC). See the documents on our <a href="university-recognition.php">University Recognition</a> page.'],
    ['What are the placement highlights?', 'Recent outcomes include 800+ offers, a highest package of ₹48 LPA and an average package of ₹5.5 LPA. See the full <a href="placement.php">placement record</a>.'],
    ['How do I apply for admission?', 'Apply online at <a href="https://admissions.maya.edu.in" rel="noopener">admissions.maya.edu.in</a>, call <a href="tel:+917351441144">+91 73514 41144</a>, or reach our counsellors from the <a href="contact.php">Contact</a> page.'],
    ['Are scholarships available?', 'Yes, for eligible students. Criteria are listed on the <a href="scholarship.php">Scholarship</a> page.'],
];
$i3_faq_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => array_map(function ($f) {
        return ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => strip_tags($f[1])]];
    }, $i3_faqs),
];

/* section heading in the DIS style: UPPERCASE line + italic accent word */
function i3_title($id, $main, $accent, $sub = '', $light = false) {
    return '<div class="i3-title' . ($light ? ' i3-title--light' : '') . '" data-r><h2 id="' . $id . '">' . $main . ' <em>' . $accent . '</em></h2>' . ($sub ? '<p>' . $sub . '</p>' : '') . '</div>';
}

require "common/header.php";
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@1,500;1,600&display=swap" rel="stylesheet">
<link rel="preload" href="<?php echo i3_img($i3_slides[0][0]); ?>" as="image">
<link rel="stylesheet" href="<?php echo i3_asset('assets/css/index-3.css'); ?>">
<script>
(function () {
  var r = document.documentElement;
  r.classList.add('i3-js');
  setTimeout(function () { if (!window.__i3Ready) r.classList.add('i3-fail'); }, 4000);
})();
</script>
<script type="application/ld+json"><?php echo json_encode($i3_faq_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>

<main class="i3" id="i3Top">

<!-- 1. HERO — full-width photo slider with caption (DIS) -->
<section class="i3-hero" aria-label="Maya Devi University" data-hero>
    <?php foreach ($i3_slides as $i => $s): ?>
    <figure class="i3-hero__slide<?php echo $i ? '' : ' is-on'; ?>" data-slide>
        <img src="<?php echo i3_img($s[0]); ?>" alt="" <?php echo $i ? 'loading="lazy"' : 'fetchpriority="high"'; ?>>
        <figcaption class="i3-hero__cap">
            <?php if ($i === 0): ?><h1><?php echo $s[1]; ?></h1><?php else: ?><p class="i3-hero__h"><?php echo $s[1]; ?></p><?php endif; ?>
            <span>Admission Open 2026&ndash;27</span>
        </figcaption>
    </figure>
    <?php endforeach; ?>
    <div class="i3-hero__ctrl">
        <button type="button" data-prev aria-label="Previous slide"><?php echo i3_icon('chev-l'); ?></button>
        <div class="i3-hero__dots"><?php foreach ($i3_slides as $i => $s): ?><button type="button" class="<?php echo $i ? '' : 'is-on'; ?>" aria-label="Slide <?php echo $i + 1; ?>" data-dot></button><?php endforeach; ?></div>
        <button type="button" data-next aria-label="Next slide"><?php echo i3_icon('chev-r'); ?></button>
    </div>
</section>

<!-- highlight cards (DBUU) -->
<section class="i3-high" aria-label="Highlights">
    <div class="i3-wrap">
        <ul class="i3-high__list">
            <?php foreach ($i3_highlights as $i => $h): ?>
            <li data-r style="--d:<?php echo $i * 80; ?>ms"><span class="i3-high__ic"><?php echo i3_icon($h[2]); ?></span><span><b><?php echo $h[0]; ?></b><?php echo $h[1]; ?></span></li>
            <?php endforeach; ?>
            <li class="i3-high__apply" data-r style="--d:320ms">
                <span><b>Admissions Open</b>Session 2026&ndash;27</span>
                <a class="i3-btn" href="https://admissions.maya.edu.in" rel="noopener">Apply Now</a>
            </li>
        </ul>
    </div>
</section>

<!-- 2. WELCOME (DIS navy) -->
<section class="i3-welcome" aria-labelledby="i3-wel-t">
    <div class="i3-wrap i3-welcome__in">
        <div class="i3-welcome__text">
            <h2 id="i3-wel-t" data-r>Welcome to Maya Devi University, <em>Dehradun</em></h2>
            <p data-r>Maya Devi University is a <strong>UGC-recognised private university</strong> in Selaqui, Dehradun, set amidst the green foothills of Uttarakhand. Across <strong>15 schools</strong> and <strong>120+ programmes</strong>, we bring together experienced faculty, modern laboratories and industry-aligned curricula.</p>
            <p data-r>From engineering and pharmacy to law, agriculture, nursing and hotel management, our students learn by doing &mdash; and graduate ready for careers with leading recruiters, or for the next step in higher education.</p>
            <a class="i3-btn i3-btn--line-light" href="about-us.php" data-r>About the University</a>
        </div>
        <div class="i3-video" data-video data-r>
            <button type="button" class="i3-video__poster" aria-label="Play the Maya Devi University campus video">
                <img src="<?php echo i3_img('h3d/hero-1'); ?>" alt="" loading="lazy">
                <span class="i3-video__play"><?php echo i3_icon('play'); ?></span>
                <span class="i3-video__cap">Watch the campus tour</span>
            </button>
        </div>
    </div>
</section>

<!-- 3. RECOGNITIONS (DBUU) -->
<section class="i3-sec i3-recog" aria-labelledby="i3-rec-t">
    <div class="i3-wrap">
        <?php echo i3_title('i3-rec-t', 'Accreditations &amp;', 'recognitions'); ?>
        <ul class="i3-recog__list">
            <?php foreach ($i3_recog as $i => $r): ?>
            <li data-r style="--d:<?php echo $i * 70; ?>ms"><span><img src="assets/uploads/icon/<?php echo $r[0]; ?>" alt="<?php echo $r[1]; ?> logo" loading="lazy"></span><?php echo $r[1]; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<!-- 4. WHY MDU (DBUU photo tiles + CU legacy numbers) -->
<section class="i3-sec i3-sec--grey i3-why" aria-labelledby="i3-why-t">
    <div class="i3-wrap">
        <?php echo i3_title('i3-why-t', 'An illustrious legacy', 'we continue to shape', 'A university where learning, growth and opportunity come together.'); ?>
        <div class="i3-why__grid">
            <?php foreach ($i3_why as $i => $w): ?>
            <figure class="i3-why__tile" data-r style="--d:<?php echo $i * 80; ?>ms">
                <img src="<?php echo i3_img($w[0]); ?>" alt="" loading="lazy">
                <figcaption><?php echo $w[1]; ?></figcaption>
            </figure>
            <?php endforeach; ?>
        </div>
        <ul class="i3-why__stats" data-r>
            <li><b><span data-count="120">0</span>+</b>Programmes</li>
            <li><b><span data-count="100">0</span>+</b>Industry Stalwarts</li>
            <li><b><span data-count="35">0</span>+</b>Doctoral Faculty</li>
            <li><b><span data-count="8000">0</span>+</b>Alumni</li>
        </ul>
    </div>
</section>

<!-- 5. AN EDUCATION THAT'S PERSONAL (DIS) -->
<section class="i3-sec i3-journey" aria-labelledby="i3-jr-t" data-journey>
    <div class="i3-wrap">
        <?php echo i3_title('i3-jr-t', 'An education that&rsquo;s', 'personal', '&ldquo;At Maya Devi University, no two journeys are the same &mdash; because every student&rsquo;s talents and ambitions are their own.&rdquo;'); ?>
        <div class="i3-journey__grid">
            <div class="i3-journey__nav">
                <ul>
                    <?php foreach ($i3_journey as $i => $j): ?><li><button type="button" class="<?php echo $i ? '' : 'is-on'; ?>" data-jnav><?php echo $j[1]; ?></button></li><?php endforeach; ?>
                </ul>
                <a class="i3-btn i3-btn--line" href="https://admissions.maya.edu.in" rel="noopener">Apply Now</a>
            </div>
            <div class="i3-journey__cards">
                <?php foreach ($i3_journey as $i => $j): ?>
                <article class="i3-jcard" data-jcard>
                    <img src="<?php echo i3_img($j[0]); ?>" alt="" loading="lazy">
                    <div class="i3-jcard__info"><h3><?php echo $j[1]; ?></h3><p><?php echo $j[2]; ?></p></div>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- 6. OUR SCHOOLS (DBUU) -->
<section class="i3-sec i3-sec--grey i3-schools" aria-labelledby="i3-sc-t">
    <div class="i3-wrap">
        <div class="i3-rowhead">
            <?php echo i3_title('i3-sc-t', 'Our', 'schools', 'The right choice is right in front of you.'); ?>
            <div class="i3-arrows" data-r><button type="button" data-sc-prev aria-label="Previous schools"><?php echo i3_icon('chev-l'); ?></button><button type="button" data-sc-next aria-label="Next schools"><?php echo i3_icon('chev-r'); ?></button></div>
        </div>
        <div class="i3-rail" data-sc-rail>
            <?php foreach ($i3_schools as $s): ?>
            <a class="i3-scard" href="<?php echo $s[1]; ?>">
                <span class="i3-scard__img"><img src="<?php echo i3_img($s[2]); ?>" alt="" loading="lazy"><em><?php echo $s[3]; ?></em></span>
                <span class="i3-scard__body"><small>School of</small><strong><?php echo $s[0]; ?></strong><span>View Details <?php echo i3_icon('arrow'); ?></span></span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 7. CHOOSE YOUR PROGRAMMES (DBUU) -->
<section class="i3-sec i3-progs" id="i3-programs" aria-labelledby="i3-pr-t" data-progs>
    <div class="i3-wrap">
        <?php echo i3_title('i3-pr-t', 'Choose your', 'programme'); ?>
        <label class="i3-progs__find" data-r>
            <span class="i3-sr">Search programmes</span>
            <input type="search" placeholder="Search a programme, e.g. B.Tech, BBA, B.Pharm&hellip;" autocomplete="off" data-find>
            <?php echo i3_icon('search'); ?>
        </label>
        <div class="i3-progs__grid">
            <div class="i3-progs__levels" role="tablist" aria-label="Programme level" data-r>
                <?php $first = true; foreach ($i3_levels as $k => $lv): ?>
                <button type="button" role="tab" class="<?php echo $first ? 'is-on' : ''; ?>" aria-selected="<?php echo $first ? 'true' : 'false'; ?>" data-level="<?php echo $k; ?>"><?php echo $lv[0]; ?><?php echo i3_icon('chev-r'); ?></button>
                <?php $first = false; endforeach; ?>
                <a href="best-university-for-phd-in-dehradun-uttarakhand.php">Doctorate (Ph.D.)<?php echo i3_icon('chev-r'); ?></a>
                <div class="i3-progs__promo">
                    <strong>Admissions Open 2026&ndash;27</strong>
                    <span>Explore programmes. Build skills. Shape tomorrow.</span>
                    <a class="i3-btn i3-btn--sm" href="https://admissions.maya.edu.in" rel="noopener">Apply Now</a>
                </div>
            </div>
            <div class="i3-progs__panes">
                <?php foreach ($i3_catalog as $lv => $schools): ?>
                <div class="i3-progs__pane" data-pane="<?php echo $lv; ?>" <?php echo $lv === 'ug' ? '' : 'hidden'; ?>>
                    <?php foreach ($schools as $sc): $meta = i3_school($sc[0]); $n = count($sc[1]); ?>
                    <article class="i3-school" data-school>
                        <h3><span class="i3-school__ic"><?php echo i3_icon($meta[1]); ?></span><a href="<?php echo $meta[0]; ?>"><?php echo $sc[0]; ?></a></h3>
                        <ul>
                            <?php foreach ($sc[1] as $j => $p): ?>
                            <li<?php echo $j >= 4 ? ' class="is-more"' : ''; ?> data-prog="<?php echo strtolower(html_entity_decode($p[0])); ?>"><a href="<?php echo $p[1]; ?>"><?php echo $p[0]; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php if ($n > 4): ?><button type="button" class="i3-school__more" data-more>+ <?php echo $n - 4; ?> more</button><?php endif; ?>
                    </article>
                    <?php endforeach; ?>
                </div>
                <?php endforeach; ?>
                <p class="i3-progs__empty" hidden data-empty>No programme matches that search. Browse <a href="undergraduate-course.php">all courses</a>.</p>
            </div>
        </div>
    </div>
</section>

<!-- 8. PLACEMENT HIGHLIGHTS (DBUU + CU) -->
<section class="i3-sec i3-sec--grey i3-place" aria-labelledby="i3-pl-t">
    <div class="i3-wrap i3-place__grid">
        <div class="i3-place__posters" data-r>
            <div class="i3-fade" data-poster-fade>
                <?php foreach ($i3_posters as $i => $src): ?><img class="<?php echo $i ? '' : 'is-on'; ?>" src="<?php echo $src; ?>" alt="Placement achievement poster" loading="lazy"><?php endforeach; ?>
            </div>
            <div class="i3-arrows i3-arrows--center"><button type="button" data-po-prev aria-label="Previous poster"><?php echo i3_icon('chev-l'); ?></button><button type="button" data-po-next aria-label="Next poster"><?php echo i3_icon('chev-r'); ?></button></div>
        </div>
        <div>
            <div class="i3-title i3-title--left" data-r><small>Recent</small><h2 id="i3-pl-t">Placement <em>highlights</em></h2><p>Leading companies recruit MDU talent.</p></div>
            <ul class="i3-place__stats" data-r>
                <li><b>800+</b>Placement Offers</li>
                <li class="is-hl"><b>₹48 LPA</b>Highest Package</li>
                <li><b>₹5.5 LPA</b>Average Package</li>
                <li><b>8,000+</b>Alumni Network</li>
            </ul>
            <div class="i3-btns" data-r>
                <a class="i3-btn" href="https://admissions.maya.edu.in" rel="noopener">Apply Now</a>
                <a class="i3-btn i3-btn--line" href="placement.php">View Placements</a>
            </div>
        </div>
    </div>
    <div class="i3-wrap">
        <h3 class="i3-sub" data-r>Recruiters across <em>industries</em></h3>
        <ul class="i3-logos" data-r>
            <?php foreach ($i3_recruiters as $src): ?><li><img src="<?php echo $src; ?>" alt="Recruiter logo" loading="lazy"></li><?php endforeach; ?>
        </ul>
    </div>
</section>

<!-- 9. FEATURES & FACILITIES (DIS navy cards) -->
<section class="i3-sec i3-feat" aria-labelledby="i3-ft-t">
    <div class="i3-wrap">
        <?php echo i3_title('i3-ft-t', 'Features &amp;', 'facilities', 'An environment designed for excellence, where modern infrastructure meets a caring atmosphere.', true); ?>
        <div class="i3-feat__grid">
            <?php foreach ($i3_features as $i => $f): ?>
            <article class="i3-fcard" data-r style="--d:<?php echo $i * 80; ?>ms">
                <img src="<?php echo i3_img($f[0]); ?>" alt="" loading="lazy">
                <div class="i3-fcard__in">
                    <ul><?php foreach ($f[2] as $b): ?><li><?php echo $b; ?></li><?php endforeach; ?></ul>
                    <h3><?php echo $f[1]; ?></h3>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 10. HAPPENING @MDU (DBUU) -->
<section class="i3-sec i3-events" aria-labelledby="i3-ev-t">
    <div class="i3-wrap">
        <div class="i3-rowhead">
            <?php echo i3_title('i3-ev-t', 'Happening', '@MDU', 'News, events and university updates.'); ?>
            <div class="i3-arrows" data-r><button type="button" data-ev-prev aria-label="Previous events"><?php echo i3_icon('chev-l'); ?></button><button type="button" data-ev-next aria-label="Next events"><?php echo i3_icon('chev-r'); ?></button></div>
        </div>
        <div class="i3-rail" data-ev-rail>
            <?php foreach ($i3_events as $e): ?>
            <a class="i3-ecard" href="<?php echo $e[1]; ?>">
                <span class="i3-ecard__img"><img src="<?php echo i3_img($e[2]); ?>" alt="" loading="lazy"></span>
                <span class="i3-ecard__body">
                    <span class="i3-ecard__date"><b><?php echo $e[4]; ?></b><?php echo $e[5]; ?></span>
                    <span><small><?php echo $e[3]; ?></small><strong><?php echo $e[0]; ?></strong><em>Read More <?php echo i3_icon('arrow'); ?></em></span>
                </span>
            </a>
            <?php endforeach; ?>
        </div>
        <div class="i3-center" data-r><a class="i3-btn i3-btn--line" href="event.php">View All Events</a></div>
    </div>
</section>

<!-- 11. STUDENT SPEAK (DBUU / CU) -->
<section class="i3-sec i3-sec--grey i3-voices" aria-labelledby="i3-vo-t">
    <div class="i3-wrap">
        <?php echo i3_title('i3-vo-t', 'Student', 'speak', 'Inspiring stories from our students.'); ?>
        <div class="i3-voices__grid">
            <?php foreach ($i3_voices as $i => $v): $pp = explode(' ', html_entity_decode($v[0])); ?>
            <blockquote class="i3-vcard" data-r style="--d:<?php echo $i * 80; ?>ms">
                <span class="i3-vcard__q" aria-hidden="true">&ldquo;</span>
                <p><?php echo $v[2]; ?></p>
                <footer><span class="i3-vcard__av"><?php echo strtoupper($pp[0][0] . (count($pp) > 1 ? end($pp)[0] : '')); ?></span><span><b><?php echo $v[0]; ?></b><?php echo $v[1]; ?></span></footer>
            </blockquote>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 12. MOMENTS (DIS) -->
<section class="i3-sec i3-moments" aria-labelledby="i3-mo-t">
    <div class="i3-wrap">
        <?php echo i3_title('i3-mo-t', 'Moments at', 'Maya Devi University', 'A visual journey through campus life, student engagement and learning.'); ?>
    </div>
    <div class="i3-moments__row" data-r>
        <?php foreach ($i3_moments as $m): ?><figure><img src="<?php echo i3_img($m); ?>" alt="Campus life at Maya Devi University" loading="lazy"></figure><?php endforeach; ?>
    </div>
    <div class="i3-center" data-r><a class="i3-btn i3-btn--line" href="campus-life.php">Explore Campus Life</a></div>
</section>

<!-- 13. ADMISSION PROCESS (DIS) -->
<section class="i3-sec i3-sec--grey i3-admit" aria-labelledby="i3-ad-t" data-steps>
    <div class="i3-wrap">
        <?php echo i3_title('i3-ad-t', 'Admission', 'process', 'Your step-by-step guide to joining the Maya Devi University family.'); ?>
        <div class="i3-steps" role="tablist" aria-label="Admission steps" data-r>
            <?php foreach ($i3_steps as $i => $s): ?>
            <button type="button" role="tab" class="<?php echo $i ? '' : 'is-on'; ?>" aria-selected="<?php echo $i ? 'false' : 'true'; ?>" data-step><?php echo i3_icon($s[0]); ?><small>Step <?php echo $i + 1; ?></small><span><?php echo $s[1]; ?></span></button>
            <?php endforeach; ?>
        </div>
        <div class="i3-admit__body" data-r>
            <div>
                <h3>Before you apply</h3>
                <ul class="i3-dots">
                    <li>Eligibility differs by programme &mdash; see the programme page or the <a href="fee-structure.php">fee structure</a>.</li>
                    <li>Scholarships are available for eligible students &mdash; see <a href="scholarship.php">scholarships</a>.</li>
                    <li>Download the <a href="assets/uploads/pdf/MDU_COMBINED_Brochure.pdf" download>MDU brochure</a> for every school and programme.</li>
                </ul>
                <div class="i3-note"><strong>Need help choosing a programme?</strong> Call our admission helpline: <a href="tel:+917351441144">+91 73514 41144</a></div>
            </div>
            <div>
                <h3>Admissions timeline</h3>
                <ol class="i3-time">
                    <?php foreach ($i3_steps as $i => $s): ?><li class="<?php echo $i ? '' : 'is-on'; ?>" data-step-row><b><?php echo $i + 1; ?></b><span><strong><?php echo $s[1]; ?></strong><?php echo $s[2]; ?></span></li><?php endforeach; ?>
                </ol>
                <a class="i3-btn i3-btn--block" href="https://admissions.maya.edu.in" rel="noopener">Apply Today</a>
            </div>
        </div>
    </div>
</section>

<!-- 14. FAQ -->
<section class="i3-sec i3-faq" aria-labelledby="i3-fq-t">
    <div class="i3-wrap i3-faq__in">
        <?php echo i3_title('i3-fq-t', 'Frequently asked', 'questions'); ?>
        <?php foreach ($i3_faqs as $i => $f): ?>
        <details data-r <?php echo $i ? '' : 'open'; ?>><summary><?php echo $f[0]; ?><span><?php echo i3_icon('plus'); ?></span></summary><p><?php echo $f[1]; ?></p></details>
        <?php endforeach; ?>
    </div>
</section>

<!-- 15. CALL US (IUU / CU) -->
<section class="i3-call" aria-labelledby="i3-cl-t">
    <div class="i3-wrap i3-call__in">
        <div>
            <h2 id="i3-cl-t">Start your journey at <em>Maya Devi University</em></h2>
            <p>Talk to our admission counsellors &mdash; we&rsquo;re happy to help.</p>
        </div>
        <div class="i3-call__acts">
            <a class="i3-call__ph" href="tel:+917351441144"><?php echo i3_icon('phone'); ?><span><small>Call us</small>+91 73514 41144</span></a>
            <a class="i3-btn" href="https://admissions.maya.edu.in" rel="noopener">Apply Now</a>
            <a class="i3-btn i3-btn--line-light" href="assets/uploads/pdf/MDU_COMBINED_Brochure.pdf" download>Download Brochure</a>
        </div>
    </div>
</section>

</main>

<script src="<?php echo i3_asset('assets/js/index-3.js'); ?>" defer></script>

<?php require "common/footer.php"; ?>
