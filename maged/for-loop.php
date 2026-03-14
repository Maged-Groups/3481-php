<?php
require_once '../vendor/autoload.php';

use App\Maged\Http\Controllers\ControlStructureController;


for ($x = 1; $x < 1000; $x *= 3) {
    echo "Yes $x is less than 10<br >";
}

echo 'After Foor Loop';


$odds = ControlStructureController::printOdd(10, 100);

dd($odds);