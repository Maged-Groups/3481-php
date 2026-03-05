<?php
require_once 'vendor/autoload.php'; 
use App\Http\Controllers\ControlStructureController;

ControlStructureController::ternary(5000);
ControlStructureController::ternary(50000);
ControlStructureController::ternary(15000);
ControlStructureController::ternary(3000);
ControlStructureController::ternary(5000);
ControlStructureController::ternary(9000000);


ControlStructureController::ifCondition(99);
ControlStructureController::ifCondition(79);
ControlStructureController::ifCondition(33);

// Test the temp function many times(5+) 
 
ControlStructureController::temp(30);
ControlStructureController::temp(15);
ControlStructureController::temp(35);
ControlStructureController::temp(1);
ControlStructureController::temp(2);


// Test the temp function many times(5+)
ControlStructureController::weatherCondition(0);
ControlStructureController::weatherCondition(5);
ControlStructureController::weatherCondition(16);
ControlStructureController::weatherCondition(30);
ControlStructureController::weatherCondition(35);
