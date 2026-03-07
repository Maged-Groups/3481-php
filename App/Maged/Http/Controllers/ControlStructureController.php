<?php

namespace App\Maged\Http\Controllers;

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

    public static function switchCase($dayNumber)
    {
        switch ($dayNumber) {
            case 0:
                echo 'It is Sunday';
                break;
            case 1:
                echo 'It is Monday';
                break;
            case 2:
                echo 'It is Tuesday';
                break;
            case 3:
                echo 'It is Wednesday';
                break;
            case 4:
                echo 'It is Thursday';
                break;
            case 5:
                echo 'It is Friday';
                break;
            case 6:
                echo 'It is Saturday';
                break;
            default:
                echo 'Wrong day number';
        }

        echo '<br>';
        echo 'Switch-case completed successfully';
    }

    public static function getDayArName(string $enName): string
    {
        $enName = strtolower($enName);

        switch ($enName) {
            case 'sunday':
                return 'الأحد';
            case 'monday':
                return 'الإثنين';
            case 'tuesday':
                return 'الثلاثاء';
            case 'wednesday':
                return 'الأربعاء';
            case 'thursday':
                return 'الخميس';
            case 'friday':
                return 'الجمعة';
            case 'saturday':
                return 'السبت';
            default:
                return 'Wrong day name!!!';
        }
        echo '<br>';
        echo 'Switch-case completed successfully';
    }

  public static function weekDaysMessage(string $dayName): string
    {
        $dayName = strtolower($dayName);

        switch ($dayName) {
            case 'sunday':
            case 'monday':
            case 'tuesday':
            case 'wednesday':
            case 'thursday':
                return 'Enjoy your work.';

          case 'friday':
           case 'saturday':
                return 'Happy weekend';

            default:
                return 'Wrong day name!!!';
        }
    }

    public static function matchCase(string $status): string
    {
        // $colorMap = [
        //     'pending' => 'orange',
        //     'shipped' => 'blue',
        //     'delivered' => 'green',
        //     'approved' =>  'green',
        //     'cancelled' =>  'red',
        //     'refunded' =>  'red',
        // ];

        // return $colorMap[$status] ?? 'gray';

        return match ($status) {
            'pending' => 'orange',
            'shipped' => 'blue',
            'delivered', 'approved' =>  'green',
            'cancelled', 'refunded' =>  'red',
            default => 'gray'
        };
    }
}
