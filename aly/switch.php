<?php
namespace App\Aly;
class SwitchCase

{
public static function weekDaysMessage ($dayName) {
        // Use switch-case to get a message
        /**
         * Saturday and Friday  => Happy weekend
         * Sunday - Thursday    => Enjoy your work
         */

        switch ($dayName){
            case 'Saturday':
                return 'Happy weekend';
                
            case 'Friday':
                return 'Happy weekend';
                
            case 'Sunday':
                return 'Enjoy your work';
            
            case 'Thursday':
                return 'Enjoy your work';
                    
        }
    }
}