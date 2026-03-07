<?php
require_once '../vendor/autoload.php';

use App\A7madHassan\Http\Controllers\ControlStructureController;
use App\A7madHassan\Helpers\PracticeTasks;

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
ControlStructureController::weatherCondition(0);
ControlStructureController::weatherCondition(5);
ControlStructureController::weatherCondition(16);
ControlStructureController::weatherCondition(30);
ControlStructureController::weatherCondition(35);

// (Testing) ---
echo PracticeTasks::checkEvenOdd(7) . "<br>";
echo PracticeTasks::isLeapYear(2024) . "<br>";
echo PracticeTasks::findLargest(10, 50, 25) . "<br>";
echo "Calc (10 * 5): " . PracticeTasks::calculator(10, 5, '*') . "<br>";
echo PracticeTasks::sumToOneHundred() . "<br>";
echo PracticeTasks::Fibonacci(8) . "<br>";

// تجربة الدالة
echo PracticeTasks::weekDaysMessage("friday");   
echo PracticeTasks::weekDaysMessage("Monday");   