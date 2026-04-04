<?php

var_dump($_POST);
$fullName = $_POST['fullname'] ?? "";

if ($fullName == ''){
    echo "Full name can't be empty";

} elseif(strlen($fullName) < 3 || strlen($fullName) > 60){
    echo "Full name should be between 3 and 60 letters only";

} else{
    echo"<br>";
    echo"Full name is valid";
}
//var_dump($GLOBALS);

die();


$email =  $_POST['email'];
echo"<br>";
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