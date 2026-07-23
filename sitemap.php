<?php
header("Content-Type: application/xml; charset=utf-8");

$base_url = "https://maya.edu.in"; // no trailing slash - avoids "//" in generated URLs

// Files that should NEVER appear in the sitemap:
// - utility/config/test/scratch files
// - form-processing endpoints (not pages)
// - HTML fragments included by other pages (no <head>, not directly useful standalone)
// - legacy dynamic templates superseded by the static blog/event pages
// - unused ecommerce placeholder pages (Lorem-ipsum, not linked from site navigation)
$exclude = [
    "index.php",             // added separately below as "/"
    "cart.php",
    "checkout.php",
    "login-register.php",
    "wishlist.php",
    "shop.php",
    "single-product.php",
    "send_application.php",
    "phpinfo.php",
    "sample.php",
    "test-1.php",
    "test-2.php",
    "test-3.php",
    "sitemap.php",
    "placement.php",          // fragment, included by about-us.php / index.php
    "blog-single.php",        // legacy dynamic template, superseded by static blog pages
    "event-details.php",      // legacy dynamic template, superseded by static event pages
    "index-2.php",
    "index-3.php",

    // old mixed-case URLs - now 301 redirect stubs, replaced by lowercase-hyphenated versions
    "Advanced-certification-in-hotel-management.php",
    "Arts-and-humanities.php",
    "B.Tech-HFCT.php",
    "BHMCT-colleges-in-dehradun-uttarakhand.php",
    "BHMCT-lateral-entry-colleges-in-dehradun-uttarakhand.php",
    "Bachelor-Education.php",
    "COE.php",
    "CVO.php",
    "Diploma-course.php",
    "Diploma-in-hotel-management.php",
    "DoctorPharmacy.php",
    "Ombudsperson.php",
    "School-Of-Education.php",
    "School-Of-Health-Sciences.php",
    "School-Of-LegalStudies.php",
    "School-Of-Paramedical-Sciences.php",
    "School-Of-Rehabilitation-Sciences.php",
    "School-Of-Skill-Development-and-Vocational-Studies.php",
    "b.tech-AI-ML.php",
    "b.tech-CSE.php",
    "b.tech-CS_IBM.php",
    "b.tech-EVT.php",
    "b.tech-LE.php",
    "bachelor-of-computer-application-AI-&-ML.php",
    "bachelor-of-computer-application-Data-Science.php",
    "best-masters-of-business-administration-Agri-Business-Management-college-in-dehradun.php",
    "best-masters-of-business-administration-Business-Analytics-college-in-dehradun.php",
    "best-masters-of-business-administration-Digital-Marketing-college-in-dehradun.php",
    "best-masters-of-business-administration-FinTech-college-in-dehradun.php",
    "best-masters-of-business-administration-Logistic-Management-college-in-dehradun.php",
    "best-masters-of-business-administration-Pharmaceutical-Management-college-in-dehradun.php",
    "best-masters-of-business-administration-Sports-Management-college-in-dehradun.php",
    "mtech-specializations-cse-AI-ML.php",
];

echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
echo '<urlset xmlns="https://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

// Homepage
echo "  <url>" . PHP_EOL;
echo "    <loc>$base_url/</loc>" . PHP_EOL;
echo "    <priority>1.0</priority>" . PHP_EOL;
echo "  </url>" . PHP_EOL;

$files = scandir(__DIR__);
sort($files);

foreach ($files as $file) {

    if (
        pathinfo($file, PATHINFO_EXTENSION) === "php" &&
        !in_array($file, $exclude, true)
    ) {
        $safe_url = htmlspecialchars("$base_url/$file", ENT_XML1);
        $lastmod  = date("Y-m-d", filemtime(__DIR__ . "/" . $file));

        echo "  <url>" . PHP_EOL;
        echo "    <loc>$safe_url</loc>" . PHP_EOL;
        echo "    <lastmod>$lastmod</lastmod>" . PHP_EOL;
        echo "    <priority>0.8</priority>" . PHP_EOL;
        echo "  </url>" . PHP_EOL;
    }
}

echo '</urlset>';
