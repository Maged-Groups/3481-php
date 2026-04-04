<?php
$method = $_SERVER["REQUEST_METHOD"] ?? '';

if ($method !== 'PUT') die('Only PUT method is allowed!');

$id_to_update = $_GET['id'] ?? '';

echo $id_to_update;

var_dump(file_get_contents('php://input'));

$new_data = file_get_contents('php://input');

// Decodes the JSON string into a PHP associative array
var_dump( json_decode($new_data, true));