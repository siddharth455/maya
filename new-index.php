<?php
/* ==========================================================================
   Maya Devi University — new homepage (draft)
   File : new-index.php
   CSS  : assets/css/new-index.css   (everything namespaced .nx-)
   JS   : assets/js/new-index.js     (vanilla, no libraries)
   Font : Go (Go Regular / Medium / Bold / Italic, self-hosted in assets/fonts/go)
   Theme: MDU green #00a651 + logo navy #203058 on white / light grey.
   Built from uudoon.in, tulas.edu.in, cuchd.in and dbuu.ac.in: full-width
   campus slider, notifications strip, approvals, about, numbered "why" tiles,
   stacked school cards, programme finder with a 3D
   school stack, placements, infrastructure tabs, circular campus reveal,
   research, clubs + photo bento, events, voices, admission, FAQ.
   All facts come from the live site (index.php, placement.php, course pages).
   index.php is untouched.
   ========================================================================== */

$page_title       = "Best Private University in Dehradun | Maya Devi University";
$page_description = "Maya Devi University is a UGC-recognised private university in Selaqui, Dehradun, Uttarakhand offering 120+ programmes across 15 schools: B.Tech, BCA, MBA, MCA, B.Pharm, Nursing, Law, Agriculture, Hotel Management and more.";
$canonical_url    = "https://maya.edu.in/";
$og_image         = "https://maya.edu.in/assets/uploads/campus-2.jpeg";

function nx_asset($path) {
    $t = @filemtime(__DIR__ . '/' . $path);
    return $path . ($t ? '?v=' . $t : '');
}
function nx_img($path) { return 'assets/uploads/' . $path . '.webp'; }

function nx_icon($name, $class = '') {
    static $p = [
        'arrow'    => '<path d="M5 12h14M13 6l6 6-6 6"/>',
        'arrow-ur' => '<path d="M7 17 17 7M8 7h9v9"/>',
        'play'     => '<path d="M7 4.5v15l12-7.5z" fill="currentColor" stroke="none"/>',
        'phone'    => '<path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2z"/>',
        'mail'     => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/>',
        'chev-l'   => '<path d="m15 18-6-6 6-6"/>',
        'chev-r'   => '<path d="m9 18 6-6-6-6"/>',
        'plus'     => '<path d="M12 5v14M5 12h14"/>',
        'close'    => '<path d="M6 6l12 12M18 6 6 18"/>',
        'search'   => '<circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/>',
        'pin'      => '<path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/>',
        'cal'      => '<rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/>',
        'check'    => '<path d="m5 12 5 5L20 7"/>',
        'quote'    => '<path d="M10 7H6a2 2 0 0 0-2 2v4h4v4H4M20 7h-4a2 2 0 0 0-2 2v4h4v4h-4" />',
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
        'home'     => '<path d="m3 10 9-7 9 7v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><path d="M9 22V12h6v10"/>',
        'book'     => '<path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20V3H6.5A2.5 2.5 0 0 0 4 5.5z"/><path d="M4 19.5A2.5 2.5 0 0 0 6.5 22H20v-5"/>',
        'bus'      => '<rect x="4" y="3" width="16" height="15" rx="2"/><path d="M4 11h16M8 21v-3M16 21v-3"/><circle cx="8" cy="14.5" r=".8"/><circle cx="16" cy="14.5" r=".8"/>',
        'ball'     => '<circle cx="12" cy="12" r="9"/><path d="M12 3a15 15 0 0 1 0 18M3.5 9h17M3.5 15h17"/>',
        'coffee'   => '<path d="M17 8h1a4 4 0 1 1 0 8h-1M3 8h14v9a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4z"/><path d="M6 2v2M10 2v2M14 2v2"/>',
        'bell'     => '<path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.9 1.9 0 0 0 3.4 0"/>',
        'globe'    => '<circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 0 1 0 18M12 3a14 14 0 0 0 0 18"/>',
        'users'    => '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20a6.5 6.5 0 0 1 13 0M16 4.6a3.5 3.5 0 0 1 0 6.8M18 14.2a6.5 6.5 0 0 1 3.5 5.8"/>',
        'heart'    => '<path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 0 0-7.8 7.8L12 21.2l8.8-8.8a5.5 5.5 0 0 0 0-7.8z"/>',
        'gamepad'  => '<rect x="2" y="7" width="20" height="11" rx="5"/><path d="M7 10.5v4M5 12.5h4M15.5 12h.01M18 14h.01"/>',
        'monitor'  => '<rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/>',
    ];
    return '<svg class="nx-i ' . $class . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">' . ($p[$name] ?? '') . '</svg>';
}

/* text that rolls up to an identical copy on hover */
function nx_roll($text) {
    return '<span class="nx-roll"><span>' . $text . '</span><span aria-hidden="true">' . $text . '</span></span>';
}

/* heading: first line + italic green second line, each line clipped and raised in */
function nx_head($id, $line1, $line2, $tag = 'h2', $class = '') {
    return '<' . $tag . ' id="' . $id . '" class="nx-h ' . $class . '" data-lines>'
        . '<span class="nx-h__l"><span>' . $line1 . '</span></span>'
        . '<span class="nx-h__l"><em>' . $line2 . '</em></span>'
        . '</' . $tag . '>';
}

/* Programme catalog — generated from undergraduate-course.php, post-graduate.php
   and Diploma-course.php. [school, [[program, url], ...]] per level */
$nx_catalog = [
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
$nx_school_meta = [
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
$nx_levels = [
    'ug'      => ['Undergraduate', 'undergraduate-course.php'],
    'pg'      => ['Postgraduate', 'post-graduate.php'],
    'diploma' => ['Diploma', 'Diploma-course.php'],
];

/* ---------------- School clusters (stacked cards + 3D stack + finder) ---------------- */
$nx_clusters = [
    'tech' => [
        'name'   => 'Engineering &amp; Computing',
        'short'  => 'Engineering',
        'img'    => 'ix/hero-coding',
        'alt'    => 'Student coding in a computer lab at Maya Devi University',
        'icon'   => 'laptop',
        'text'   => 'B.Tech, BCA, MCA and M.Tech, taught with plenty of lab time. You can also take B.Tech CS with IBM in AI &amp; ML, data science or cyber security.',
        'schools'=> ['School of Computer Engineering & Applications', 'School of Engineering'],
        'url'    => 'best-engineering-college-in-dehradun-uttarakhand.php',
    ],
    'health' => [
        'name'   => 'Pharmacy &amp; Health Sciences',
        'short'  => 'Health',
        'img'    => 'ix/nursing-care',
        'alt'    => 'Nursing students practising patient care',
        'icon'   => 'pulse',
        'text'   => 'Pharmacy, nursing, paramedical and rehabilitation courses with weekly lab practice and hospital visits, such as our recent trip to AIIMS Rishikesh.',
        'schools'=> ['School of Pharmacy', 'School of Nursing', 'School of Health Sciences', 'School of Paramedical Sciences', 'Ashtavakra School of Rehabilitation'],
        'url'    => 'best-pharmacy-college-in-dehradun-uttarakhand.php',
    ],
    'biz' => [
        'name'   => 'Management, Commerce &amp; Hospitality',
        'short'  => 'Management',
        'img'    => 'ix/learn-hospitality',
        'alt'    => 'Hotel management students in a training session',
        'icon'   => 'trend',
        'text'   => 'BBA, B.Com, M.Com and MBA, plus hotel management from diploma to master&rsquo;s. Students learn through projects, kitchen training and front-office practice.',
        'schools'=> ['School of Management and Commerce', 'School of Hotel Management and Tourism'],
        'url'    => 'best-management-and-commerce-college-in-dehradun-uttarakhand.php',
    ],
    'sci' => [
        'name'   => 'Sciences &amp; Agriculture',
        'short'  => 'Sciences',
        'img'    => 'ix/field',
        'alt'    => 'Agriculture students working in a polyhouse',
        'icon'   => 'leaf',
        'text'   => 'Science subjects from physics to forensic science, and agriculture with real field work, polyhouse practice and visits to research stations like the one at Sahaspur.',
        'schools'=> ['School of Life and Applied Sciences', 'School of Agriculture & Technology'],
        'url'    => 'best-life-and-allied-sciences-college-in-dehradun-uttarakhand.php',
    ],
    'law' => [
        'name'   => 'Law, Arts &amp; Education',
        'short'  => 'Law &amp; Arts',
        'img'    => 'ix/library',
        'alt'    => 'Students reading in the university library',
        'icon'   => 'scale',
        'text'   => 'Law (BA LLB, BBA LLB, LLB, LLM), arts subjects, B.Ed and job-focused B.Voc degrees, with moot courts, field visits and a well-stocked library.',
        'schools'=> ['School of Law & Legal Studies', 'School of Arts and Humanities', 'School of Education', 'School of Skill Development and Vocational Studies'],
        'url'    => 'best-law-college-in-dehradun-uttarakhand.php',
    ],
];

/* school -> cluster, and per-school / per-cluster programme counts, from the catalog */
$nx_school_cluster = [];
foreach ($nx_clusters as $ck => $c) { foreach ($c['schools'] as $s) { $nx_school_cluster[$s] = $ck; } }
$nx_rows = [];          // flattened programme rows for the finder
$nx_school_count = [];  // school => total programmes
foreach ($nx_catalog as $lv => $schools) {
    foreach ($schools as $sc) {
        $sname = html_entity_decode($sc[0]);
        $ck = $nx_school_cluster[$sname] ?? 'law';
        foreach ($sc[1] as $p) {
            $nx_rows[] = ['name' => $p[0], 'url' => $p[1], 'school' => $sc[0], 'level' => $lv, 'cluster' => $ck];
            $nx_school_count[$sname] = ($nx_school_count[$sname] ?? 0) + 1;
        }
    }
}
$nx_cluster_count = [];
foreach ($nx_rows as $r) { $nx_cluster_count[$r['cluster']] = ($nx_cluster_count[$r['cluster']] ?? 0) + 1; }
function nx_school_url($name) {
    global $nx_school_meta;
    return ($nx_school_meta[$name] ?? ['colleges-departments.php'])[0];
}
function nx_school_icon($name) {
    global $nx_school_meta;
    return ($nx_school_meta[$name] ?? [null, 'cap'])[1];
}
$nx_level_short = ['ug' => 'UG', 'pg' => 'PG', 'diploma' => 'Diploma'];

/* ---------------- Content (facts from the live site) ---------------- */


$nx_recog = [
    ['rank-1.webp', 'Govt. of Uttarakhand'],
    ['rank-2.png', 'UGC'],
    ['rank-3.png', 'PCI'],
    ['rank-4.webp', 'NCTE'],
    ['rank-5.png', 'BCI'],
];


$nx_posters = [];
foreach ([1, 2, 6, 7, 8, 11, 12, 13, 14, 15, 16] as $n) { $nx_posters[] = nx_img('ix/place-' . $n); }
$nx_recruiters = [];
for ($i = 1; $i <= 28; $i++) { $nx_recruiters[] = 'assets/uploads/icon/' . $i . '.' . (in_array($i, [5, 6], true) ? 'png' : 'jpg'); }

$nx_facilities = [
    ['home', 'Hostels', 'Separate for boys and girls'],
    ['book', 'Central library', 'Books, journals and e-resources'],
    ['monitor', 'Labs', 'Computer, science and pharmacy'],
    ['ball', 'Sports', 'Grounds, gym, yoga and martial arts'],
    ['coffee', 'Food court', 'And a health &amp; wellness centre'],
    ['bus', 'Transport', 'University buses across Dehradun'],
];


$nx_events = [
    ['Mushroom Cultivation Training Session', 'event-mushroom-cultivation-training.php', 'h3d/event-mushroom-cultivation-training', 'Agriculture', '11', 'May 2026'],
    ['Law Students Visit Suddhowala Jail for Academic Exposure', 'event-jail-visit-law-students.php', 'h3d/event-jail-visit-law-students', 'Law', '09', 'May 2026'],
    ['Academic Exposure Visit at AIIMS Rishikesh', 'event-aiims-rishikesh-visit.php', 'h3d/event-aiims-rishikesh-visit', 'Health Sciences', '07', 'May 2026'],
    ['Visit to the Regional Sericulture Research Station, Sahaspur', 'event-sericulture-research-visit.php', 'h3d/event-sericulture-research-visit', 'Agriculture', '06', 'May 2026'],
    ['International Conference on Sustainable Agriculture', 'event-international-agriculture-conference.php', 'ix/event-international-agriculture-conference', 'Conference', '05', 'May 2026'],
    ['Searching Eyes Internal Hackathon 2026', 'event-searching-eyes-hackathon-2026.php', 'ix/event-searching-eyes-hackathon-2026', 'Technology', '27', 'Feb 2026'],
];

$nx_voices = [
    ['Arti Sharma', 'School of Computer Engineering &amp; Applications', 'Studying at Maya Devi University has been a truly transformative journey. The dedicated faculty, advanced infrastructure, and practical learning approach have shaped my skills and confidence.'],
    ['Harshit Tiwari', 'School of Commerce &amp; Management', 'The supportive mentors, innovative teaching methods, and ample opportunities for growth have helped me discover my true potential.'],
    ['Anchal', 'School of Commerce &amp; Management', 'The perfect balance of academic learning and practical exposure. I am proud to be part of an institution that truly prepares its students for global opportunities.'],
    ['Priyanshi Tomar', 'School of Commerce &amp; Management', 'The exposure to real-world projects and industry interactions has made me confident to step into my professional career.'],
];

$nx_steps = [
    ['user', 'Register', 'Sign up on the admissions portal with your name, phone number and email.'],
    ['doc', 'Fill the application', 'Pick your course, fill in your details and upload your mark sheets.'],
    ['card', 'Pay the fee', 'Pay the application fee online to submit the form.'],
    ['shield', 'Get admitted', 'Once your documents are checked, we send you the next steps.'],
];

$nx_faqs = [
    ['Is Maya Devi University recognised by the UGC?', 'Yes. Maya Devi University, Dehradun is recognised by the University Grants Commission (UGC) and established under a Government of Uttarakhand Act. See the documents on our <a href="university-recognition.php">University Recognition</a> page.'],
    ['What are the placement highlights?', 'Recent outcomes include 800+ offers, a highest package of ₹48 LPA and an average package of ₹5.5 LPA. See the full <a href="placement.php">placement record</a>.'],
    ['How do I apply for admission?', 'Apply online at <a href="https://admissions.maya.edu.in" rel="noopener">admissions.maya.edu.in</a>, call <a href="tel:+917351441144">+91 73514 41144</a>, or reach our counsellors from the <a href="contact.php">Contact</a> page.'],
    ['Are scholarships available?', 'Yes, for eligible students. Criteria are listed on the <a href="scholarship.php">Scholarship</a> page.'],
    ['Does the university offer hostels?', 'Yes. There are separate hostels for boys and girls on campus with 24x7 security. Details are on the <a href="campus-life.php">Campus Life</a> page.'],
];
$nx_faq_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => array_map(function ($f) {
        return ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => strip_tags($f[1])]];
    }, $nx_faqs),
];


/* ---------------- v2 sections ---------------- */

/* Full-width hero slider (Tula's / DBUU / UU) — [image, alt, tab label, title, accent, text] */
$nx_slides = [
    ['h3d/hero-4', 'Maya Devi University students on campus', 'Welcome', 'Empower. Educate.', 'Excel.', 'A UGC-recognised university in Selaqui, Dehradun, with 15 schools and over 120 programmes.'],
    ['ix/campus-aerial', 'Aerial view of the Maya Devi University campus', 'Campus', 'A green campus', 'in the foothills', 'Hostels, labs, a library and sports grounds are all on one campus, so you never have to go far.'],
    ['ix/hero-coding', 'Student working in a computer lab', 'Labs', 'Learn by doing,', 'in real labs', 'Computer, science and pharmacy labs where you work with the equipment yourself, not just read about it.'],
    ['h3d/hero-2', 'Students playing tug of war on the campus ground', 'Campus life', 'Campus life', 'beyond classes', 'Sports, student clubs, fests and cultural events through the year.'],
];

/* quick stats under the hero */
$nx_quick = [
    ['cap', 15, '', 'Schools of study'],
    ['book', 120, '+', 'Programmes'],
    ['briefcase', 800, '+', 'Placement offers'],
    ['trend', 48, ' LPA', 'Highest package', '₹'],
];

/* notifications panel (DBUU "Academic Notifications") — [tag, text, url] */
$nx_notices = [
    ['New', 'Admissions open for session 2026&ndash;27', 'https://admissions.maya.edu.in'],
    ['PDF', 'Academic Calendar 2026&ndash;27', 'assets/uploads/pdf/Academic-Calender_2026-27.pdf'],
    ['PDF', 'List of Holidays 2026', 'assets/uploads/pdf/List_of_Holidays_2026.pdf'],
    ['PDF', 'University brochure', 'assets/uploads/pdf/MDU_COMBINED_Brochure.pdf'],
    ['Event', 'Mushroom Cultivation Training Session &middot; 11 May 2026', 'event-mushroom-cultivation-training.php'],
    ['Event', 'International Conference on Sustainable Agriculture', 'event-international-agriculture-conference.php'],
    ['Event', 'Searching Eyes Internal Hackathon 2026', 'event-searching-eyes-hackathon-2026.php'],
    ['Info', 'Scholarships for eligible students', 'scholarship.php'],
];

/* Why MDU — numbered photo tiles (UU / Tula's). [area, number, title, text, image|null, tone, url] */
$nx_why = [
    ['a', '01', 'UGC recognised', 'Set up under a Government of Uttarakhand Act and recognised by the UGC. Pharmacy, B.Ed and law courses are approved by PCI, NCTE and BCI.', null, 'green', 'university-recognition.php'],
    ['b', '02', 'Courses that match jobs', 'B.Tech CS with IBM in AI &amp; ML, data science and cyber security, along with 120+ other programmes.', 'ix/ai-lab', 'photo', 'best-b-tech-cse-ibm-college-in-dehradun-uttarakhand.php'],
    ['c', '03', '35+ doctoral faculty', 'Teachers with Ph.D.s, plus 100+ industry experts who guide students in class, in labs and on visits.', 'ix/lecture', 'photo', 'staff-details-with-photograph.php'],
    ['d', '04', '800+ placement offers', 'Highest package of ₹48 LPA and an average of ₹5.5 LPA.', null, 'navy', 'placement.php'],
    ['e', '05', 'Hostels on campus', 'Separate hostels for boys and girls, with security round the clock.', 'h3d/hostel', 'photo', 'campus-life.php'],
    ['f', '06', 'Scholarships', 'Fee support for students who meet the criteria, so money doesn&rsquo;t hold a good student back.', 'ix/student-boy', 'photo', 'scholarship.php'],
];

/* Infrastructure (UU "Best Infrastructure") — [title, text, image] (text from index.php) */
$nx_infra = [
    ['Computer &amp; Technology Labs', 'Labs for coding, AI and machine learning, data work and robotics, open for practicals and projects.', 'ix/computer-lab'],
    ['Central Library &amp; E-Resource Hub', 'Books, journals and online resources, with quiet reading space for studies and competitive exam preparation.', 'ix/pillar-library'],
    ['Auditorium &amp; Seminar Halls', 'Used for guest lectures, workshops, conferences and cultural programmes.', 'h3d/auditorium'],
    ['Secure &amp; Comfortable Hostels', 'Separate hostels for boys and girls, with round-the-clock security, study rooms and common rooms.', 'h3d/hostel'],
    ['Sports &amp; Fitness', 'A gym, grounds for volleyball and kabaddi, and regular yoga and martial arts classes.', 'ix/pillar-gym'],
    ['Food Court &amp; Wellness', 'A food court on campus, and a health centre for check-ups, with tie-ups for emergency care.', 'h3d/food-court'],
];

/* Research & collaborations (research.php, academic-collaboration.php) */
$nx_collab = [
    ['globe', 'International partnerships'],
    ['briefcase', 'Industry collaborations'],
    ['users', 'Student exchange'],
    ['flask', 'Research collaborations'],
    ['user', 'Faculty exchange'],
    ['cap', 'Joint academic programmes'],
];

/* Clubs (club.php) */
$nx_clubs = [
    ['shield', 'CyberSec Club'], ['gamepad', 'Game Dev &amp; AR/VR Club'], ['ball', 'Sports Club'], ['palette', 'Art &amp; Culture Club'],
    ['heart', 'Health Care Club'], ['leaf', 'Clean &amp; Green Club'], ['users', 'Women Empowerment Club'], ['utensils', 'Culinary Club'],
    ['globe', 'Language Clubs'], ['home', 'Community Engagement Club'], ['rehab', 'Inclusive Education Club'],
];

/* Life at MDU bento — exactly 8 tiles, fixed grid areas so there is never an empty cell */
$nx_bento = [
    ['ix/stage', 'Student on stage at a cultural evening'],
    ['ix/volleyball', 'Volleyball match on the campus ground'],
    ['ix/g-carnival', 'Hotel management carnival lunch'],
    ['ix/kabaddi', 'Kabaddi on the sports ground'],
    ['ix/pillar-yoga', 'Yoga session on campus'],
    ['ix/event-holi-celebration-hotel-management', 'Holi celebration on campus'],
    ['ix/g-martial', 'Martial arts training'],
    ['ix/discussion', 'Classmates in a group discussion'],
];
$nx_marquee = ['ix/g-chem', 'ix/learn-physics', 'ix/kitchen', 'ix/g-boxing', 'ix/gym', 'ix/g-event', 'ix/campus-steps', 'ix/g-lounge', 'ix/g-reading', 'ix/learn-bio', 'ix/plant-lab', 'ix/mech-class'];

require "common/header.php";
?>

<link rel="preload" href="assets/fonts/go/Go-Regular.ttf" as="font" type="font/ttf" crossorigin>
<link rel="preload" href="assets/fonts/go/Go-Bold.ttf" as="font" type="font/ttf" crossorigin>
<link rel="preload" href="<?php echo nx_img('h3d/hero-4'); ?>" as="image">
<link rel="stylesheet" href="<?php echo nx_asset('assets/css/new-index.css'); ?>">
<script>
(function () {
  var r = document.documentElement;
  r.classList.add('nx-js');
  if (window.matchMedia && matchMedia('(prefers-reduced-motion: reduce)').matches) r.classList.add('nx-still');
  setTimeout(function () { if (!window.__nxReady) r.classList.add('nx-fail'); }, 4000);
})();
</script>
<script type="application/ld+json"><?php echo json_encode($nx_faq_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>

<main class="nx" id="nxTop">

<!-- 1. HERO — full-width campus slider (Tula's / DBUU / UU) -->
<section class="nx-hero" aria-roledescription="carousel" aria-label="Welcome to Maya Devi University" data-hero>
    <h1 class="nx-sr">Maya Devi University, Dehradun &mdash; a UGC-recognised university with 15 schools and 120+ programmes</h1>
    <div class="nx-hero__frame">
        <?php foreach ($nx_slides as $i => $s): ?>
        <div class="nx-slide<?php echo $i ? '' : ' is-on'; ?>" role="group" aria-roledescription="slide" aria-label="<?php echo ($i + 1) . ' of ' . count($nx_slides); ?>" data-slide<?php echo $i ? ' aria-hidden="true"' : ''; ?>>
            <img class="nx-slide__img" src="<?php echo nx_img($s[0]); ?>" alt="<?php echo $s[1]; ?>" <?php echo $i ? 'loading="lazy"' : 'fetchpriority="high"'; ?>>
            <div class="nx-slide__cap">
                <div class="nx-wrap">
                    <p class="nx-slide__tag"><span></span>Admissions open &middot; 2026&ndash;27</p>
                    <p class="nx-slide__title"><span class="nx-slide__l"><span><?php echo $s[3]; ?></span></span><span class="nx-slide__l"><em><?php echo $s[4]; ?></em></span></p>
                    <p class="nx-slide__sub"><?php echo $s[5]; ?></p>
                    <div class="nx-slide__btns">
                        <a class="nx-btn" href="https://admissions.maya.edu.in" rel="noopener"<?php echo $i ? ' tabindex="-1"' : ''; ?>><?php echo nx_roll('Apply Now'); ?><span class="nx-btn__chip"><?php echo nx_icon('arrow'); ?><?php echo nx_icon('arrow'); ?></span></a>
                        <a class="nx-btn nx-btn--glass" href="#nx-finder"<?php echo $i ? ' tabindex="-1"' : ''; ?>><?php echo nx_roll('Explore programmes'); ?><span class="nx-btn__chip"><?php echo nx_icon('arrow'); ?><?php echo nx_icon('arrow'); ?></span></a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <div class="nx-hero__nav">
            <div class="nx-wrap nx-hero__navin">
                <div class="nx-hero__tabs" role="tablist" aria-label="Choose a slide">
                    <?php foreach ($nx_slides as $i => $s): ?>
                    <button type="button" role="tab" aria-selected="<?php echo $i ? 'false' : 'true'; ?>" class="<?php echo $i ? '' : 'is-on'; ?>" data-tab="<?php echo $i; ?>"><small><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></small><?php echo $s[2]; ?><i><b></b></i></button>
                    <?php endforeach; ?>
                </div>
                <div class="nx-hero__arrows">
                    <button type="button" aria-label="Previous slide" data-prev><?php echo nx_icon('chev-l'); ?></button>
                    <button type="button" aria-label="Pause slideshow" data-pause><span class="nx-hero__pp"></span></button>
                    <button type="button" aria-label="Next slide" data-next><?php echo nx_icon('chev-r'); ?></button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. QUICK STATS + NOTIFICATIONS (DBUU / Tula's) -->
<section class="nx-quick" aria-label="Highlights and notifications">
    <div class="nx-wrap nx-quick__in">
        <ul class="nx-quick__stats">
            <?php foreach ($nx_quick as $i => $q): ?>
            <li data-up style="--d:<?php echo $i * 70; ?>ms">
                <span class="nx-quick__ic"><?php echo nx_icon($q[0]); ?></span>
                <b><?php echo $q[4] ?? ''; ?><span data-count="<?php echo $q[1]; ?>"><?php echo $q[1]; ?></span><?php echo $q[2]; ?></b>
                <span><?php echo $q[3]; ?></span>
            </li>
            <?php endforeach; ?>
        </ul>
        <div class="nx-notice" data-up style="--d:280ms" data-notice>
            <div class="nx-notice__head">
                <p><?php echo nx_icon('bell'); ?> Notifications</p>
                <a href="event.php">View all</a>
            </div>
            <div class="nx-notice__win">
                <ul class="nx-notice__list" data-notice-list>
                    <?php for ($k = 0; $k < 2; $k++): foreach ($nx_notices as $n): ?>
                    <li<?php echo $k ? ' aria-hidden="true"' : ''; ?>><a href="<?php echo $n[2]; ?>"<?php echo $k ? ' tabindex="-1"' : ''; ?><?php echo $n[0] === 'PDF' ? ' target="_blank" rel="noopener"' : ''; ?>><span class="nx-notice__tag nx-notice__tag--<?php echo strtolower($n[0]); ?>"><?php echo $n[0]; ?></span><span><?php echo $n[1]; ?></span><?php echo nx_icon('chev-r'); ?></a></li>
                    <?php endforeach; endfor; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- 3. APPROVALS (UU) -->
<section class="nx-recog" aria-label="Approvals and recognitions">
    <div class="nx-wrap nx-recog__in">
        <p class="nx-recog__lead" data-up>Approvals &amp; <em>recognitions</em></p>
        <ul class="nx-recog__list">
            <?php foreach ($nx_recog as $i => $r): ?>
            <li data-up style="--d:<?php echo $i * 60; ?>ms"><span class="nx-recog__logo"><img src="assets/uploads/icon/<?php echo $r[0]; ?>" alt="<?php echo $r[1]; ?>" loading="lazy" width="64" height="64"></span><span><?php echo $r[1]; ?></span></li>
            <?php endforeach; ?>
        </ul>
        <a class="nx-link" href="approval-accreditation-membership-ranking.php"><?php echo nx_roll('View all'); ?><span class="nx-chip nx-chip--sm"><?php echo nx_icon('arrow'); ?></span></a>
    </div>
</section>

<!-- 4. ABOUT (Tula's / UU) -->
<section class="nx-sec nx-about" aria-labelledby="nx-ab-t">
    <div class="nx-wrap nx-about__in">
        <div class="nx-about__text">
            <p class="nx-kicker" data-up>About the university</p>
            <?php echo nx_head('nx-ab-t', 'Welcome to', 'Maya Devi University'); ?>
            <p data-up>Maya Devi University is a <strong>UGC-recognised private university</strong> in Selaqui, Dehradun, on a green campus at the foot of the Uttarakhand hills. We have <strong>15 schools</strong> and more than <strong>120 programmes</strong>, from diplomas to Ph.D.</p>
            <p data-up>You can study engineering, computer applications, pharmacy, nursing, law, management, agriculture, hotel management and more. Classes are backed by lab work, internships and field visits, so you leave with real skills for a job or for further study.</p>
            <ul class="nx-about__ticks" data-up>
                <li><?php echo nx_icon('check'); ?>Established under a Govt. of Uttarakhand Act</li>
                <li><?php echo nx_icon('check'); ?>B.Tech CS offered with IBM</li>
                <li><?php echo nx_icon('check'); ?>Doctoral (Ph.D.) programmes</li>
                <li><?php echo nx_icon('check'); ?>Scholarships for eligible students</li>
            </ul>
            <div class="nx-about__btns" data-up>
                <a class="nx-btn nx-btn--navy" href="about-us.php"><?php echo nx_roll('About the University'); ?><span class="nx-btn__chip"><?php echo nx_icon('arrow'); ?><?php echo nx_icon('arrow'); ?></span></a>
                <a class="nx-link" href="vision-mission.php"><?php echo nx_roll('Vision &amp; mission'); ?><span class="nx-chip nx-chip--sm"><?php echo nx_icon('arrow'); ?></span></a>
            </div>
        </div>
        <div class="nx-about__media">
            <div class="nx-video" data-video data-wipe>
                <button type="button" class="nx-video__poster" aria-label="Play the Maya Devi University campus video">
                    <img src="<?php echo nx_img('h3d/hero-1'); ?>" alt="" loading="lazy">
                    <span class="nx-video__play"><?php echo nx_icon('play'); ?></span>
                    <span class="nx-video__cap">Watch the campus tour</span>
                </button>
            </div>
            <figure class="nx-about__small" data-wipe><img src="<?php echo nx_img('ix/main-block'); ?>" alt="The main academic block" loading="lazy"></figure>
            <div class="nx-about__badge nx-about__badge--a" data-up style="--d:300ms"><b><span data-count="8000">8,000</span>+</b><span>Alumni</span></div>
            <div class="nx-about__badge nx-about__badge--b" data-up style="--d:420ms"><b><span data-count="35">35</span>+</b><span>Doctoral faculty</span></div>
        </div>
    </div>
</section>

<!-- 5. WHY MDU — numbered photo tiles (UU / Tula's) -->
<section class="nx-sec nx-why" aria-labelledby="nx-why-t">
    <div class="nx-wrap">
        <div class="nx-sechead">
            <?php echo nx_head('nx-why-t', 'Why choose', 'Maya Devi University'); ?>
            <p data-up>Here is what students and parents usually ask about before choosing a university, and what we offer.</p>
        </div>
        <div class="nx-why__grid" data-swipe>
            <?php foreach ($nx_why as $i => $w): ?>
            <a class="nx-tile nx-tile--<?php echo $w[5]; ?>" href="<?php echo $w[6]; ?>" style="grid-area:<?php echo $w[0]; ?>;--d:<?php echo $i * 70; ?>ms" data-up>
                <?php if ($w[4]): ?><span class="nx-tile__img"><img src="<?php echo nx_img($w[4]); ?>" alt="" loading="lazy"></span><?php endif; ?>
                <span class="nx-tile__n"><?php echo $w[1]; ?></span>
                <span class="nx-tile__body"><strong><?php echo $w[2]; ?></strong><span><?php echo $w[3]; ?></span></span>
                <span class="nx-tile__go"><?php echo nx_icon('arrow-ur'); ?></span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 6. SCHOOLS — stacked sticky cards (Nordal residences) -->
<section class="nx-sec nx-stack" id="nx-schools" aria-labelledby="nx-stack-t">
    <div class="nx-wrap">
        <div class="nx-sechead">
            <?php echo nx_head('nx-stack-t', 'Fifteen schools,', 'five ways to begin'); ?>
            <p data-up>Each school has its own teachers, labs and visits. Start with the area you like and see what you can study.</p>
        </div>
        <div class="nx-stack__list" data-stack>
            <?php $ci = 0; foreach ($nx_clusters as $ck => $c): ?>
            <div class="nx-stack__item" style="--i:<?php echo $ci; ?>" data-stack-item>
                <article class="nx-card" data-card>
                    <div class="nx-card__photo" data-card-photo>
                        <div class="nx-card__par" data-card-par><img src="<?php echo nx_img($c['img']); ?>" alt="<?php echo $c['alt']; ?>" loading="lazy"></div>
                        <span class="nx-card__alt"><?php echo $c['alt']; ?></span>
                    </div>
                    <div class="nx-card__body">
                        <p class="nx-card__count"><?php echo str_pad($ci + 1, 2, '0', STR_PAD_LEFT); ?> / 05 &middot; <?php echo count($c['schools']); ?> school<?php echo count($c['schools']) > 1 ? 's' : ''; ?></p>
                        <h3><?php echo $c['name']; ?></h3>
                        <p class="nx-card__text"><?php echo $c['text']; ?></p>
                        <ul class="nx-card__specs">
                            <?php foreach ($c['schools'] as $s): ?>
                            <li><a href="<?php echo nx_school_url($s); ?>"><span><?php echo htmlspecialchars(str_replace('School of ', '', $s)); ?></span><b><?php echo $nx_school_count[$s] ?? 0; ?> programmes</b></a></li>
                            <?php endforeach; ?>
                        </ul>
                        <button type="button" class="nx-link" data-to-finder="<?php echo $ck; ?>"><?php echo nx_roll('See all ' . ($nx_cluster_count[$ck] ?? 0) . ' programmes'); ?><span class="nx-chip"><?php echo nx_icon('arrow'); ?></span></button>
                    </div>
                    <span class="nx-card__veil" data-card-veil></span>
                </article>
            </div>
            <?php $ci++; endforeach; ?>
        </div>
    </div>
</section>

<!-- 7. PROGRAMME FINDER — 3D school stack + filterable list (Nordal availability) -->
<section class="nx-sec nx-finder" id="nx-finder" aria-labelledby="nx-find-t" data-finder>
    <div class="nx-wrap">
        <div class="nx-sechead">
            <?php echo nx_head('nx-find-t', 'Choose your', 'programme'); ?>
            <p data-up><?php echo count($nx_rows); ?> programmes across undergraduate, postgraduate and diploma levels. Filter by area, level or search by name.</p>
        </div>

        <div class="nx-finder__bar" data-up>
            <div class="nx-chips" role="radiogroup" aria-label="Area of study" data-chips>
                <span class="nx-chips__pill" data-pill aria-hidden="true"></span>
                <button type="button" role="radio" aria-checked="true" class="is-on" data-filter="all">All <small data-n="all"><?php echo count($nx_rows); ?></small></button>
                <?php foreach ($nx_clusters as $ck => $c): ?>
                <button type="button" role="radio" aria-checked="false" data-filter="<?php echo $ck; ?>"><?php echo $c['short']; ?> <small data-n="<?php echo $ck; ?>"><?php echo $nx_cluster_count[$ck] ?? 0; ?></small></button>
                <?php endforeach; ?>
            </div>
            <div class="nx-finder__tools">
                <div class="nx-seg" role="radiogroup" aria-label="Programme level" data-levels>
                    <button type="button" role="radio" aria-checked="true" class="is-on" data-level="all">All levels</button>
                    <?php foreach ($nx_level_short as $lk => $ln): ?>
                    <button type="button" role="radio" aria-checked="false" data-level="<?php echo $lk; ?>"><?php echo $ln; ?></button>
                    <?php endforeach; ?>
                </div>
                <label class="nx-find">
                    <span class="nx-sr">Search programmes</span>
                    <?php echo nx_icon('search'); ?>
                    <input type="search" placeholder="Search B.Tech, BBA, B.Pharm&hellip;" autocomplete="off" data-find>
                </label>
            </div>
        </div>

        <div class="nx-finder__grid">
            <div class="nx-model" data-model>
                <div class="nx-model__stage" data-model-stage>
                    <div class="nx-model__rig" data-model-rig>
                        <span class="nx-model__plot" aria-hidden="true"></span>
                        <?php $li = 0; foreach ($nx_clusters as $ck => $c): ?>
                        <button type="button" class="nx-slab" style="--l:<?php echo $li; ?>" data-slab="<?php echo $ck; ?>" aria-label="<?php echo strip_tags(html_entity_decode($c['name'])); ?>, <?php echo $nx_cluster_count[$ck] ?? 0; ?> programmes">
                            <span class="nx-slab__top">
                                <?php foreach ($c['schools'] as $s): ?><span class="nx-slab__cell"><?php echo nx_icon(nx_school_icon($s)); ?></span><?php endforeach; ?>
                            </span>
                            <span class="nx-slab__front"></span>
                            <span class="nx-slab__side"></span>
                        </button>
                        <?php $li++; endforeach; ?>
                    </div>
                </div>
                <div class="nx-model__read" aria-live="polite" data-readout>
                    <div class="nx-model__line" data-read-line><b>Five areas, fifteen schools</b><span>Pick a layer to filter the programmes</span></div>
                </div>
            </div>

            <div class="nx-table" data-table>
                <div class="nx-table__head" aria-hidden="true"><span>Programme</span><span>School</span><span>Level</span><span></span></div>
                <ul class="nx-table__rows" data-rows>
                    <?php foreach ($nx_rows as $i => $r): ?>
                    <li class="nx-row" data-row data-cluster="<?php echo $r['cluster']; ?>" data-level="<?php echo $r['level']; ?>" data-name="<?php echo htmlspecialchars(strtolower(html_entity_decode($r['name'] . ' ' . $r['school']))); ?>">
                        <a href="<?php echo $r['url']; ?>">
                            <span class="nx-row__name"><?php echo $r['name']; ?></span>
                            <span class="nx-row__school"><?php echo str_replace('School of ', '', $r['school']); ?></span>
                            <span class="nx-row__lv"><?php echo $nx_level_short[$r['level']]; ?></span>
                            <span class="nx-row__go"><?php echo nx_icon('arrow-ur'); ?></span>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <p class="nx-table__empty" hidden data-empty>No programme matches that search. Browse <a href="undergraduate-course.php">all courses</a>.</p>
                <div class="nx-table__foot">
                    <button type="button" class="nx-btn nx-btn--line" data-more hidden><?php echo nx_roll('Show all'); ?><span class="nx-btn__chip"><?php echo nx_icon('plus'); ?><?php echo nx_icon('plus'); ?></span></button>
                    <p>Also offered: <a href="best-university-for-phd-in-dehradun-uttarakhand.php">Doctorate (Ph.D.)</a> in most schools. See the <a href="fee-structure.php">fee structure</a> and <a href="scholarship.php">scholarships</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- trailing preview card (desktop, fine pointer) -->
    <div class="nx-peek" aria-hidden="true" data-peek>
        <div class="nx-peek__in">
            <?php foreach ($nx_clusters as $ck => $c): ?><img src="<?php echo nx_img($c['img']); ?>" alt="" loading="lazy" data-peek-img="<?php echo $ck; ?>"><?php endforeach; ?>
            <div class="nx-peek__txt"><b data-peek-name></b><span data-peek-school></span></div>
        </div>
    </div>
</section>

<!-- 8. PLACEMENTS — green band, posters, recruiters (CU / DBUU) -->
<section class="nx-sec nx-place" id="nx-place" aria-labelledby="nx-place-t">
    <div class="nx-wrap nx-place__in">
        <div class="nx-place__text">
            <?php echo nx_head('nx-place-t', 'Careers that', 'start on campus', 'h2', 'nx-h--light'); ?>
            <p data-up>Our placement cell starts working with you from the first year. You get aptitude and interview practice, help with communication skills, internships and campus drives with companies like IBM, Amazon, Accenture and Pfizer.</p>
            <ul class="nx-place__stats">
                <li data-up><b><span data-count="800">800</span>+</b><span>Placement offers</span></li>
                <li data-up style="--d:80ms"><b>₹<span data-count="48">48</span> LPA</b><span>Highest package</span></li>
                <li data-up style="--d:160ms"><b>₹<span data-count="5.5" data-dec="1">5.5</span> LPA</b><span>Average package</span></li>
            </ul>
            <a class="nx-btn nx-btn--white" href="placement.php" data-up><?php echo nx_roll('View placement record'); ?><span class="nx-btn__chip"><?php echo nx_icon('arrow'); ?><?php echo nx_icon('arrow'); ?></span></a>
        </div>
        <div class="nx-place__posters" data-up>
            <div class="nx-posters" data-posters>
                <?php foreach ($nx_posters as $i => $p): ?>
                <figure class="nx-poster"><img src="<?php echo $p; ?>" alt="Placement achievement poster <?php echo $i + 1; ?>" loading="lazy"></figure>
                <?php endforeach; ?>
            </div>
            <div class="nx-posters__ctrl">
                <button type="button" aria-label="Previous posters" data-pp><?php echo nx_icon('chev-l'); ?></button>
                <button type="button" aria-label="Next posters" data-pn><?php echo nx_icon('chev-r'); ?></button>
            </div>
        </div>
    </div>
    <div class="nx-logos" aria-label="Our recruiters">
        <p class="nx-logos__lead">Our recruiters</p>
        <div class="nx-logos__track">
            <?php for ($k = 0; $k < 2; $k++): ?>
            <ul<?php echo $k ? ' aria-hidden="true"' : ''; ?>>
                <?php foreach ($nx_recruiters as $i => $logo): ?><li><img src="<?php echo $logo; ?>" alt="<?php echo $k ? '' : 'Recruiter logo ' . ($i + 1); ?>" loading="lazy"></li><?php endforeach; ?>
            </ul>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- 9. INFRASTRUCTURE (UU "Best Infrastructure") -->
<section class="nx-sec nx-infra" aria-labelledby="nx-in-t" data-infra>
    <div class="nx-wrap">
        <div class="nx-sechead">
            <?php echo nx_head('nx-in-t', 'Infrastructure built', 'for learning'); ?>
            <p data-up>Labs, library, seminar halls, hostels, sports and food are all on campus.</p>
        </div>
        <div class="nx-infra__in">
            <div class="nx-infra__stage" data-up>
                <?php foreach ($nx_infra as $i => $f): ?>
                <img class="<?php echo $i ? '' : 'is-on'; ?>" src="<?php echo nx_img($f[2]); ?>" alt="<?php echo strip_tags(html_entity_decode($f[0])); ?> at Maya Devi University" loading="lazy" data-infra-img>
                <?php endforeach; ?>
                <span class="nx-infra__count" data-infra-count>01 / <?php echo str_pad(count($nx_infra), 2, '0', STR_PAD_LEFT); ?></span>
            </div>
            <ul class="nx-infra__list" role="tablist" aria-label="Facilities">
                <?php foreach ($nx_infra as $i => $f): ?>
                <li>
                    <button type="button" role="tab" aria-selected="<?php echo $i ? 'false' : 'true'; ?>" class="<?php echo $i ? '' : 'is-on'; ?>" data-infra-tab="<?php echo $i; ?>">
                        <span class="nx-infra__n"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
                        <span class="nx-infra__t"><b><?php echo $f[0]; ?></b><span class="nx-infra__d"><span><?php echo $f[1]; ?></span></span></span>
                        <span class="nx-infra__plus"><?php echo nx_icon('plus'); ?></span>
                    </button>
                    <img class="nx-infra__mob" src="<?php echo nx_img($f[2]); ?>" alt="" loading="lazy">
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>

<!-- 9. CAMPUS — circular reveal (Nordal "the site") -->
<section class="nx-site" id="nx-campus" aria-labelledby="nx-site-t" data-site>
    <div class="nx-site__stage">
        <div class="nx-site__photo" data-site-photo><img src="<?php echo nx_img('ix/campus-aerial'); ?>" alt="Aerial view of the Maya Devi University campus in Selaqui, Dehradun" loading="lazy" data-site-img></div>
        <div class="nx-site__intro" data-site-intro>
            <p class="nx-kicker">Campus</p>
            <p class="nx-site__big">A green campus <em>in the foothills</em></p>
        </div>
        <div class="nx-site__veil" data-site-veil></div>
        <div class="nx-site__copy" data-site-copy>
            <div class="nx-wrap nx-site__grid">
                <div>
                    <h2 id="nx-site-t" class="nx-site__h">Our campus in <em>Selaqui, Dehradun</em></h2>
                    <p>The campus is in Pharma City, Selaqui. It has hostels, labs, a library, sports grounds and a food court, and university buses run to different parts of Dehradun.</p>
                    <a class="nx-btn nx-btn--white" href="campus-life.php"><?php echo nx_roll('Explore campus life'); ?><span class="nx-btn__chip"><?php echo nx_icon('arrow'); ?><?php echo nx_icon('arrow'); ?></span></a>
                </div>
                <ul class="nx-site__list">
                    <?php foreach ($nx_facilities as $f): ?>
                    <li><span class="nx-site__ic"><?php echo nx_icon($f[0]); ?></span><b><?php echo $f[1]; ?></b><span><?php echo $f[2]; ?></span></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- 11. RESEARCH & COLLABORATIONS (DBUU) -->
<section class="nx-sec nx-res" aria-labelledby="nx-rs-t">
    <div class="nx-wrap nx-res__in">
        <div class="nx-res__media">
            <figure class="nx-res__big" data-wipe><img src="<?php echo nx_img('h3d/campus-6'); ?>" alt="Students and faculty working on a drone in the technology lab" loading="lazy"></figure>
            <figure class="nx-res__s1" data-wipe><img src="<?php echo nx_img('nx/research-2'); ?>" alt="Faculty research workshop" loading="lazy"></figure>
            <figure class="nx-res__s2" data-wipe><img src="<?php echo nx_img('nx/research-3'); ?>" alt="Research presentation at the university" loading="lazy"></figure>
        </div>
        <div class="nx-res__text">
            <p class="nx-kicker" data-up>Research &amp; collaborations</p>
            <?php echo nx_head('nx-rs-t', 'Research and', 'partnerships'); ?>
            <p data-up>Faculty and Ph.D. scholars work on projects in AI, data science, drones, agriculture and the sciences. We help them publish in good journals and apply for research grants, and we work with other institutions on exchange and joint programmes.</p>
            <ul class="nx-res__list">
                <?php foreach ($nx_collab as $i => $c): ?>
                <li data-up style="--d:<?php echo $i * 50; ?>ms"><span class="nx-res__ic"><?php echo nx_icon($c[0]); ?></span><?php echo $c[1]; ?></li>
                <?php endforeach; ?>
            </ul>
            <div class="nx-res__btns" data-up>
                <a class="nx-btn" href="research.php"><?php echo nx_roll('Research at MDU'); ?><span class="nx-btn__chip"><?php echo nx_icon('arrow'); ?><?php echo nx_icon('arrow'); ?></span></a>
                <a class="nx-link" href="academic-collaboration.php"><?php echo nx_roll('Academic collaborations'); ?><span class="nx-chip nx-chip--sm"><?php echo nx_icon('arrow'); ?></span></a>
            </div>
        </div>
    </div>
</section>

<!-- 12. LIFE AT MDU — clubs + fixed bento (no empty cells) + moving photo strip -->
<section class="nx-sec nx-life" aria-labelledby="nx-life-t" data-gallery>
    <div class="nx-wrap">
        <div class="nx-sechead">
            <?php echo nx_head('nx-life-t', 'Life at MDU,', 'beyond the classroom'); ?>
            <a class="nx-link" href="club.php"><?php echo nx_roll('All clubs &amp; activities'); ?><span class="nx-chip"><?php echo nx_icon('arrow'); ?></span></a>
        </div>
        <ul class="nx-clubs" data-up>
            <?php foreach ($nx_clubs as $c): ?><li><span><?php echo nx_icon($c[0]); ?></span><?php echo $c[1]; ?></li><?php endforeach; ?>
        </ul>
        <ul class="nx-bento">
            <?php foreach ($nx_bento as $i => $g): ?>
            <li class="nx-bento__i nx-bento__i--<?php echo $i + 1; ?>" data-up style="--d:<?php echo ($i % 4) * 60; ?>ms">
                <button type="button" data-zoom="<?php echo nx_img($g[0]); ?>" aria-label="Open photo: <?php echo $g[1]; ?>">
                    <img src="<?php echo nx_img($g[0]); ?>" alt="<?php echo $g[1]; ?>" loading="lazy">
                    <span><?php echo $g[1]; ?></span>
                </button>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="nx-strip" aria-hidden="true">
        <div class="nx-strip__track">
            <?php for ($k = 0; $k < 2; $k++): foreach ($nx_marquee as $m): ?><img src="<?php echo nx_img($m); ?>" alt="" loading="lazy"><?php endforeach; endfor; ?>
        </div>
    </div>
    <div class="nx-lb" hidden data-lb role="dialog" aria-modal="true" aria-label="Photo viewer">
        <button type="button" class="nx-lb__x" aria-label="Close" data-lb-x><?php echo nx_icon('close'); ?></button>
        <button type="button" class="nx-lb__nav nx-lb__nav--p" aria-label="Previous photo" data-lb-p><?php echo nx_icon('chev-l'); ?></button>
        <figure><img src="" alt="" data-lb-img><figcaption data-lb-cap></figcaption></figure>
        <button type="button" class="nx-lb__nav nx-lb__nav--n" aria-label="Next photo" data-lb-n><?php echo nx_icon('chev-r'); ?></button>
    </div>
</section>

<!-- 11. HAPPENINGS — events (DBUU "Happening @") -->
<section class="nx-sec nx-events" aria-labelledby="nx-ev-t">
    <div class="nx-wrap">
        <div class="nx-sechead">
            <?php echo nx_head('nx-ev-t', 'Happening', 'at MDU'); ?>
            <a class="nx-link" href="event.php"><?php echo nx_roll('All events'); ?><span class="nx-chip"><?php echo nx_icon('arrow'); ?></span></a>
        </div>
        <div class="nx-events__grid">
            <?php foreach ($nx_events as $i => $e): ?>
            <a class="nx-ev<?php echo $i === 0 ? ' nx-ev--big' : ''; ?>" href="<?php echo $e[1]; ?>" data-up style="--d:<?php echo ($i % 3) * 80; ?>ms">
                <span class="nx-ev__img"><img src="<?php echo nx_img($e[2]); ?>" alt="" loading="lazy"></span>
                <span class="nx-ev__date"><b><?php echo $e[4]; ?></b><?php echo $e[5]; ?></span>
                <span class="nx-ev__body"><small><?php echo $e[3]; ?></small><strong><?php echo $e[0]; ?></strong></span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 12. STUDENT VOICES -->
<section class="nx-sec nx-voices" aria-labelledby="nx-vo-t" data-voices>
    <div class="nx-wrap nx-voices__in">
        <div class="nx-voices__side">
            <?php echo nx_head('nx-vo-t', 'In their', 'own words'); ?>
            <p data-up>A few of our students on what studying here is like.</p>
            <div class="nx-voices__ctrl">
                <button type="button" aria-label="Previous story" data-vp><?php echo nx_icon('chev-l'); ?></button>
                <span data-vcount>01 / 0<?php echo count($nx_voices); ?></span>
                <button type="button" aria-label="Next story" data-vn><?php echo nx_icon('chev-r'); ?></button>
            </div>
        </div>
        <div class="nx-voices__track" data-vtrack>
            <?php foreach ($nx_voices as $i => $v): $ini = implode('', array_map(function ($w) { return mb_substr($w, 0, 1); }, array_slice(explode(' ', $v[0]), 0, 2))); ?>
            <figure class="nx-voice">
                <?php echo nx_icon('quote', 'nx-voice__q'); ?>
                <blockquote><?php echo $v[2]; ?></blockquote>
                <figcaption><span class="nx-voice__ini"><?php echo $ini; ?></span><span><b><?php echo $v[0]; ?></b><?php echo $v[1]; ?></span></figcaption>
            </figure>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 13. ADMISSION STEPS + call band -->
<section class="nx-sec nx-admit" id="nx-admit" aria-labelledby="nx-ad-t">
    <div class="nx-wrap">
        <div class="nx-sechead">
            <?php echo nx_head('nx-ad-t', 'Your admission,', 'in four steps', 'h2', 'nx-h--light'); ?>
            <p data-up>You can apply online for the 2026&ndash;27 session. If you get stuck, our counsellors are a phone call away.</p>
        </div>
        <ol class="nx-steps">
            <?php foreach ($nx_steps as $i => $s): ?>
            <li data-up style="--d:<?php echo $i * 90; ?>ms">
                <span class="nx-steps__n"><?php echo $i + 1; ?></span>
                <span class="nx-steps__ic"><?php echo nx_icon($s[0]); ?></span>
                <h3><?php echo $s[1]; ?></h3>
                <p><?php echo $s[2]; ?></p>
            </li>
            <?php endforeach; ?>
        </ol>
        <div class="nx-admit__band" data-up>
            <div class="nx-admit__photo"><img src="<?php echo nx_img('ix/cta-girl'); ?>" alt="Maya Devi University student in the library" loading="lazy"></div>
            <div class="nx-admit__copy">
                <p class="nx-admit__big">Admissions open for <em>2026&ndash;27</em></p>
                <div class="nx-admit__btns">
                    <a class="nx-btn" href="https://admissions.maya.edu.in" rel="noopener" data-magnet><?php echo nx_roll('Apply Now'); ?><span class="nx-btn__chip"><?php echo nx_icon('arrow'); ?><?php echo nx_icon('arrow'); ?></span></a>
                    <a class="nx-call" href="tel:+917351441144"><span class="nx-chip"><?php echo nx_icon('phone'); ?></span><span><small>Admission helpline</small>+91 73514 41144</span></a>
                </div>
                <p class="nx-admit__links"><a href="application-process.php">Application process</a><a href="fee-structure.php">Fee structure</a><a href="scholarship.php">Scholarships</a><a href="assets/uploads/pdf/MDU_COMBINED_Brochure.pdf" target="_blank" rel="noopener">Brochure (PDF)</a></p>
            </div>
        </div>
    </div>
</section>

<!-- 14. FAQ -->
<section class="nx-sec nx-faq" aria-labelledby="nx-fq-t">
    <div class="nx-wrap nx-faq__in">
        <div>
            <?php echo nx_head('nx-fq-t', 'Questions,', 'answered'); ?>
            <p class="nx-faq__more" data-up>Still unsure? Write to <a href="mailto:info@maya.edu.in">info@maya.edu.in</a> or visit the <a href="contact.php">contact page</a>.</p>
        </div>
        <div class="nx-faq__list">
            <?php foreach ($nx_faqs as $i => $f): ?>
            <details class="nx-qa" data-up style="--d:<?php echo $i * 60; ?>ms"<?php echo $i === 0 ? ' open' : ''; ?>>
                <summary><?php echo $f[0]; ?><span class="nx-qa__ic"><?php echo nx_icon('plus'); ?></span></summary>
                <div class="nx-qa__a"><p><?php echo $f[1]; ?></p></div>
            </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 15. CLOSING WORDMARK -->
<section class="nx-mark" aria-label="Maya Devi University">
    <div class="nx-wrap nx-mark__row">
        <p>Maya Devi University, Selaqui, Dehradun, Uttarakhand</p>
        <p><a href="tel:+917351441144">+91 73514 41144</a> &middot; <a href="mailto:info@maya.edu.in">info@maya.edu.in</a></p>
    </div>
    <p class="nx-mark__word" aria-hidden="true" data-mark><?php foreach (str_split('MAYADEVI') as $ch): ?><span class="nx-mark__ch"><span><?php echo $ch; ?></span></span><?php endforeach; ?></p>
</section>

<!-- desktop dock -->
<nav class="nx-dock" aria-label="Page sections" data-dock>
    <span class="nx-dock__pill" data-dock-pill aria-hidden="true"></span>
    <a href="#nx-schools" data-dock-link="nx-schools"><?php echo nx_roll('Schools'); ?></a>
    <a href="#nx-finder" data-dock-link="nx-finder"><?php echo nx_roll('Programmes'); ?></a>
    <a href="#nx-place" data-dock-link="nx-place"><?php echo nx_roll('Placements'); ?></a>
    <a href="#nx-campus" data-dock-link="nx-campus"><?php echo nx_roll('Campus'); ?></a>
    <a class="nx-dock__cta" href="#nx-admit" data-dock-link="nx-admit" data-magnet><?php echo nx_roll('Apply Now'); ?></a>
    <span class="nx-dock__bar" data-dock-bar aria-hidden="true"></span>
</nav>

</main>

<script src="<?php echo nx_asset('assets/js/new-index.js'); ?>" defer></script>

<?php require "common/footer.php"; ?>
