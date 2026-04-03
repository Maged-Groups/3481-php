<?php
require_once '../../vendor/autoload.php';

use App\Maged\Http\Controllers\ProductController;

header('Content-Type: application/json');

$jsonData = ProductController::list_all();

echo $jsonData;
