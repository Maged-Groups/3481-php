<?php
require_once '../vendor/autoload.php';

use App\Maged\Http\Controllers\ControlStructureController;

ControlStructureController::switchCase(dayNumber: 3);


$enDayName= 'saturday';
$enDayName=   ucfirst(strtolower($enDayName));

$arDayName = ControlStructureController::getDayArName($enDayName);
echo "<h2>The Arabic day name for $enDayName is $arDayName</h2>";

$weekDayMessage = ControlStructureController::weekDaysMessage($enDayName);
echo "<h2>Today is $enDayName, $weekDayMessage</h2>";
