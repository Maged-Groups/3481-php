<?php
require_once '../../vendor/autoload.php';

use App\Maged\Http\Controllers\EmployeeController;

header('Content-Type: application/json');

$jsonData = EmployeeController::list_all();

echo $jsonData;
    