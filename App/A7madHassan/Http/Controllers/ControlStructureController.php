<?php

namespace App\A7madHassan\Http\Controllers;

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

    public static function temp(float $temp): string
    {
        return "The temp is: $temp";
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


    public static function weekDaysMessage($dayName)
    {
        $day = ucfirst(strtolower($dayName));

        switch ($day) {
            case 'Friday':
            case 'Saturday':
                return "Happy weekend";

            case 'Sunday':
            case 'Monday':
            case 'Tuesday':
            case 'Wednesday':
            case 'Thursday':
                return "Enjoy your work ";

            default:
                return "Invalid day name! Please enter a valid week day.";
        }
    }
}
