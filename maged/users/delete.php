<?php
$method = $_SERVER["REQUEST_METHOD"] ?? '';

if ($method !== 'DELETE') die('Only Delete method is allowed!');

$id_to_delete = $_GET['id'] ?? '';

echo $id_to_delete;