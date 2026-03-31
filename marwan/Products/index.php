<?php
require_once '../../vendor/autoload.php';

use App\Marwan\Http\Controllers\ProductController;

header('Content-Type: application/json');

$jsonData = ProductController::list_all();

echo $jsonData;
    