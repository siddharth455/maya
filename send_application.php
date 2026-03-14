<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $script_url = "https://script.google.com/macros/s/AKfycbyoLGoDSCZrPlvp3ziltF5blUKJ4VSF297dsj5YiOZWZOcXyRQ4mb8jMYFDDuD6LW6DcA/exec";

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
            'content' => http_build_query($data)
        ]
    ];

    $context  = stream_context_create($options);
    $result = file_get_contents($script_url, false, $context);

    if ($result == "Success") {
        echo "<script>alert('Application Submitted Successfully!');window.location='career.php';</script>";
    } else {
        echo "Something went wrong.";
    }
}
?>
