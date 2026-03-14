<?php

require_once '../vendor/autoload.php'; 
use App\Fayad\Http\Controllers\ControlStructureController;

echo ControlStructureController::weekDaysMessage('Friday');