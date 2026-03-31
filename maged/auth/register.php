<?php
var_dump($_POST);

<<<<<<< HEAD
$method = var_dump($_SERVER['REQUEST_METHOD']);

if ($method !== $_POST) die("POST method only");
=======

$fullName = $_POST['fullname'] ?? '';

if ($fullName == '') {
    echo 'Full name cannot be empty';
} elseif (strlen($fullName) < 3 || strlen($fullName) > 60) {
    echo 'Full name should be between 3 and 60 letters only';
} else {
    echo 'Fullname is valid';
}
die();
$email =  $_POST['email'];
$phone =  $_POST['phone'];
$dob =  $_POST['dob'];
$gender =  $_POST['gender'];
$nationality =  $_POST['nationality'];
$bio =  $_POST['bio'];
$street =  $_POST['street'];
$city =  $_POST['city'];
$state =  $_POST['state'];
$zip =  $_POST['zip'];
$country =  $_POST['country'];
$username =  $_POST['username'];
$password =  $_POST['password'];
$confirm_password =  $_POST['confirm_password'];
$security_question =  $_POST['security_question'];
$security_answer =  $_POST['security_answer'];
$language =  $_POST['language'];
$referral =  $_POST['referral'];
$fav_color =  $_POST['fav_color'];
$fav_color_text =  $_POST['fav_color_text'];
$employment =  $_POST['employment'];
$experience =  $_POST['experience'];
$comments =  $_POST['comments'];



var_dump($fullName);
>>>>>>> 2dfdb16cd68d0bfa41e2016f13ce5497b6c75ee1
