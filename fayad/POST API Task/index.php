<?php

require_once 'helpers/users.php';
require_once 'helpers/response.php';
require_once 'helpers/auth.php';
require_once 'data/posts.php';

$method = $_SERVER['REQUEST_METHOD'] ?? '';

if ($method !== 'POST') die('Only POST method is allowed');

$email    = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if ($email === '')    die('Email is required');
if ($password === '') die('Password is required');

$user = find_user($email, $password);

if ($user === null) die('Wrong email or password');

$token_is_valid = check_token($user['token']);

if (!$token_is_valid) die('Token is not valid');

$posts = get_posts();
$data = [
    'logged_in_as' => $user['email'],
    'token'        => $user['token'],
    'data'         => $posts
];

respond($data);