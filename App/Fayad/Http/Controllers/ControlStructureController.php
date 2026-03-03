<?php

namespace App\Fayad\Http\Controllers;

class ControlStructureController
{

    private static $mobilePrice = 12000;

    public static function ternary(float $wallet)
    {
        $mobPrice = self::$mobilePrice;

        echo  $wallet >= self::$mobilePrice ?  "You have EGP$wallet, You can buy it :)<hr >" : "Mobile price is $mobPrice, and you have $wallet, so you are too pooooor<hr >";
    }

    public static function ifCondition(float $score)
    {

        if ($score >= 90) {
            echo "Grade for score $score is Excellent<hr >";
        } elseif ($score >= 75) {
            echo "Grade for score $score is Very Good<hr >";
        } elseif ($score >= 65) {
            echo "Grade for score $score is Good<hr >";
        } elseif ($score >= 50) {
            echo "Grade for score $score is Pass<hr >";
        } else {
            echo "Grade for score $score is Fail<hr >";
        }
    }

    public static function temp(float $temp): string {
        return "The temp is: $temp";
    }
public static function tempStatus(float $temp): string {
    if ($temp >= 35) {
        return "Weatehr is too hot.";
    }
    elseif ($temp >= 25) {
        return "Weatehr is normal.";
    }
    elseif ($temp >= 15) {
        return "Weatehr is cool.";
    }
    elseif ($temp >= 5) {
        return "Weatehr is cold.";
    }
    else {
        return "Weatehr is Frozen.";
    }
}

}
