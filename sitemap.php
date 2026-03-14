<?php
header("Content-Type: application/xml; charset=utf-8");

$base_url = "https://maya.edu.in/"; // change when live

$exclude = [
    "cart.php",
    "checkout.php",
    "login-register.php",
    "send_application.php",
    "phpinfo.php",
    "index-2.php",
    "index-3.php"
];

echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

// Homepage
echo "  <url>" . PHP_EOL;
echo "    <loc>$base_url/</loc>" . PHP_EOL;
echo "    <priority>1.0</priority>" . PHP_EOL;
echo "  </url>" . PHP_EOL;

$files = scandir(__DIR__);

foreach ($files as $file) {

    if (
        pathinfo($file, PATHINFO_EXTENSION) === "php" &&
        !in_array($file, $exclude)
    ) {

        $safe_url = htmlspecialchars("$base_url/$file", ENT_XML1);

        echo "  <url>" . PHP_EOL;
        echo "    <loc>$safe_url</loc>" . PHP_EOL;
        echo "    <priority>0.8</priority>" . PHP_EOL;
        echo "  </url>" . PHP_EOL;
    }
}

echo '</urlset>';
?>
