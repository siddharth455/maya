<?php
/*
 * Course schema for individual course pages (Intane Media, Nov 2026, Batch 3).
 *
 * Usage on a course page, before common/header.php:
 *     require_once "common/course-schema.php";
 *     $page_schema = ($page_schema ?? "") . course_schema([
 *         "name"        => "Bachelor of Pharmacy (B.Pharm)",
 *         "description" => "First paragraph of the course overview",
 *         "credential"  => "Bachelor's degree",   // optional
 *         "time"        => "P4Y",                  // optional, ISO 8601 duration
 *     ]);
 */

function course_schema(array $c)
{
    $ld = [
        "@context" => "https://schema.org",
        "@type" => "Course",
        "name" => $c["name"],
        "description" => $c["description"],
        "provider" => [
            "@type" => "CollegeOrUniversity",
            "name" => "Maya Devi University",
            "sameAs" => "https://maya.edu.in/",
        ],
    ];
    if (!empty($c["credential"])) {
        $ld["educationalCredentialAwarded"] = $c["credential"];
    }
    if (!empty($c["time"])) {
        $ld["timeRequired"] = $c["time"];
    }
    $ld["hasCourseInstance"] = [
        "@type" => "CourseInstance",
        "courseMode" => "Onsite",
        "location" => "Maya Devi University, Selaqui, Dehradun",
    ];
    return '<script type="application/ld+json">' . "\n"
        . json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
        . "\n</script>\n";
}
