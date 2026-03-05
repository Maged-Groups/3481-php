<?php

namespace App\Http\Controllers;

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
    public static function tempStatus(float $temp): string {
        if ($temp >= 35) {
            return "Weather is Too Hot.";
        }
        elseif ($temp >= 25) {
            return "Weather is Normal.";
        }
        elseif ($temp >= 15) {
            return "Weather is Cool.";
        }
        elseif ($temp >= 5) {
            return "Weather is Cold.";
        }
        else {
            return "Weather is Frozen.";
        }
    }
}
