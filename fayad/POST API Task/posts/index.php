<?php

require_once '../helpers/auth.php';
require_once '../helpers/response.php';
require_once '../logic/posts.php';

$method = $_SERVER['REQUEST_METHOD'] ?? '';
if ($method !== 'GET') die('Only GET method is allowed');

$headers = getallheaders();
$received_token = $headers['Authorization'] ?? '';

if (!check_token($received_token)) die('Unauthorized');

$posts = get_posts();

respond($posts);