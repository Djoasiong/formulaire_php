<?php

$userLastName = $userFirstName = $userEmail = $userPhoneNumber = $subject = $message = "";
$userLastNameErr = $userFirstNameErr = $userEmailErr = $userPhoneNumberErr = $subjectErr = $messageErr = "";
$email = 'name@example.com';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['userLastName'])) {
        $userLastNameErr = 'lastName is required'; 
}else{
        $userLastName = test_input($_POST['userLastName']);
}
}

    if (empty($_POST['firstName'])) {
        $userFirstNameErr = 'firstName is required'; 
}else{
        $userFirstName = test_input($_POST['userFirstName']);
}

    if (empty($_POST['userEmail'])) {
        $userEmailErr = "email is required"; 
}else{
    $userEmail = test_input($_POST['userEmail']);
}
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'email valid';
    }else{
        echo 'email is not valid';
    }

if (empty($_POST['userPhoneNumber '])) {
    $userPhoneNumberErr  = "phone is required"; 
}else{
    $userPhoneNumber = test_input($_POST['userPhoneNumber ']);
}

if (empty($_POST['subject'])) {
    $subjectErr = "subject is required"; 
}else{
    $subject = test_input($_POST['subject']);
}

if (empty($_POST['message'])) {
    $messageErr= "message is required"; 
}else{
    $message = test_input($_POST['message']);
}