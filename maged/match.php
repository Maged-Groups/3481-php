<?php
require_once '../vendor/autoload.php';

use App\Maged\Http\Controllers\ControlStructureController;

$orderStatus = 'pending';

$orderColor = ControlStructureController::matchCase($orderStatus);

dd([
    'status' => $orderStatus,
    'color' => $orderColor,
]);
