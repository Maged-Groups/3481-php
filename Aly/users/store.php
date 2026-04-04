<?php

// var_dump($GLOBALS['_SERVER']);
// var_dump($_SERVER);
var_dump($_SERVER['REQUEST_METHOD']);
// var_dump($_FILES['photo']);
// var_dump($_POST);

$method = $_SERVER['REQUEST_METHOD'] ?? '';

if($method !== 'POST') die('The request method is not allowed, only POST method is allowed!!!');





$languages = $_POST['lang'] ?? [];
var_dump($languages);




echo "Store new user";
