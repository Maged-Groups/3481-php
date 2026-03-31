<?php

require_once '../helpers/users.php';

$method = $_SERVER['REQUEST_METHOD'] ?? '';
if ($method !== 'POST') die('Only POST method is allowed');

$email    = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if ($email === '')    die('Email is required');
if ($password === '') die('Password is required');

$user = find_user($email, $password);

if ($user === null) die('Wrong email or password');

echo $user['token'];