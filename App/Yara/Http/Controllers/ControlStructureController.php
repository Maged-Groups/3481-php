<?php

namespace App\Yara\Http\Controllers;

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

    // Create the temp function as follow: 35+ => Too Hot, 25+ => Normal, 15+ => coll, 5+ => cold, 0-, Frozen

    public static function temp(float $degree)
    {

        if ($degree >= 35) {
            echo "the $degree is too hot<hr >";
        } elseif ($degree <= 25) {
            echo "the $degree is normal<hr >";
        } elseif ($degree <= 15) {
            echo "the $degree is cold<hr >";
        } elseif ($degree <= 0) {
            echo "the $degree is frozen<hr >";
        }
    }


    public static function weatherCondition($temp)
    {
        if ($temp >= 35) {
            echo "too hot";
        } elseif ($temp >= 25) {
            echo "Normal<br>";
        } elseif ($temp >= 15) {
            echo "Coll<br>";
        } elseif ($temp >= 5) {
            echo "Cold<br>";
        } else {
            echo "Frozen<br>";
        }
    }
}
