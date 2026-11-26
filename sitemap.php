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
    "B.Tech-HFCT.php",
    "COE.php",
    "CVO.php",
    "Diploma-course.php",
    "DoctorPharmacy.php",
    "Ombudsperson.php",
    "School-Of-LegalStudies.php",
    "b.tech-AI-ML.php",
    "b.tech-CSE.php",
    "b.tech-CS_IBM.php",
    "b.tech-EVT.php",
    "b.tech-LE.php",
    "bachelor-of-computer-application-AI-&-ML.php",
    "best-masters-of-business-administration-Business-Analytics-college-in-dehradun.php",
    "best-masters-of-business-administration-Sports-Management-college-in-dehradun.php",

    // test / duplicate pages - retired, 301-redirected in .htaccess (Nov 2026 SEO batch 1)
    "home.php",
    "new-home.php",
    "new-home-2.php",
    "new-home-3.php",
    "new-home-4.php",
    "new-index.php",
    "new-best-computer-engineering-college-in-dehradun-uttarakhand.php",
    "new-bachelor-of-computer-application-ai-and-ml.php",
    "approval-accredetion-membership-ranking.php", // old spelling, redirect stub
    "library.php",            // duplicate of university-library.php
    "placement-2.php",       // fragment, included by home.php
];

// Small files that only send a Location header are 301 redirect stubs, not pages.
function is_redirect_stub($path) {
    if (filesize($path) > 1024) return false;
    return stripos(file_get_contents($path), "Location:") !== false;
}

echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

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
        !in_array($file, $exclude, true) &&
        !is_redirect_stub(__DIR__ . "/" . $file)
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
