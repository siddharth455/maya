<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // ✅ 1. HONEYPOT CHECK
    if (!empty($_POST['website'])) {
        die("Spam detected!");
    }

    // ✅ 2. TIME CHECK
    if (time() - $_POST['form_time'] < 5) {
        die("Too fast submission - suspected bot.");
    }

    // ✅ 3. GOOGLE RECAPTCHA VERIFY
    $secretKey = "6LdCDZIsAAAAAGyb7EB-Fpjmt7q-FsZiAxWrIT8U";
    $responseKey = $_POST['g-recaptcha-response'] ?? '';

    if (empty($responseKey)) {
        die("Captcha missing.");
    }

    $userIP = $_SERVER['REMOTE_ADDR'];

    $url = "https://www.google.com/recaptcha/api/siteverify";
    $response = file_get_contents($url . "?secret=" . $secretKey . "&response=" . $responseKey . "&remoteip=" . $userIP);
    $response = json_decode($response);

    if (!$response || !$response->success) {
        die("Captcha verification failed. Try again.");
    }

    // ✅ YOUR ORIGINAL CODE
    $script_url = "https://script.google.com/macros/s/AKfycbw3SLv2t7dRTu2renoiFxD6RIT2JEmrSjwZhU9qlEKoH2ydBF4uz9e1eYIXrKHLOba3Rg/exec";

    // ✅ FILE CHECK (important)
    if (!isset($_FILES['resume']) || $_FILES['resume']['error'] != 0) {
        die("Resume upload failed.");
    }

    $resume_content = base64_encode(file_get_contents($_FILES['resume']['tmp_name']));

    $data = [
        'position' => $_POST['position'],
        'department' => $_POST['department'],
        'specialization' => $_POST['specialization'],
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'qualification' => $_POST['qualification'],
        'designation' => $_POST['designation'],
        'experience' => $_POST['experience'],
        'current_salary' => $_POST['current_salary'],
        'organization' => $_POST['organization'],
        'expected_salary' => $_POST['expected_salary'],
        'notice_period' => $_POST['notice_period'],
        'resume' => $resume_content
    ];

    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded",
            'method'  => 'POST',
            'content' => http_build_query($data),
            'timeout' => 30
        ]
    ];

    $context  = stream_context_create($options);
    $result = @file_get_contents($script_url, false, $context);

    // ✅ DEBUG (very important)
    if ($result === FALSE) {
        die("Error connecting to Google Script.");
    }

    // ✅ FLEXIBLE SUCCESS CHECK (THIS FIXES YOUR ISSUE)
    if ($result && stripos($result, "success") !== false) {
        echo "<script>alert('Application Submitted Successfully!');window.location='career.php';</script>";
    } else {
        // Show actual error for debugging
        echo "Something went wrong.<br><br>Response: " . htmlspecialchars($result);
    }
}
?>