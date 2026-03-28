<?php
echo 'Checking user data.......';

var_dump($_GET);
var_dump($_POST);
var_dump($_FILES);
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
