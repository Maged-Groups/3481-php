<?php

namespace App\Yara\Chlengeswitch;
Class ChallengeSwitch{
    public static array $Even_mum=  [];
    public static function EvenNumbersInRange($min,$max){
        for($i=1;$i<=500;$i++){
            if($i % 2!=0){
                continue;
            }
        }
        if($i<$min||$i>$max){
           
        }

 array_push(self::$Even_mum, $i);


        }
         public static function printEvenNumbers() {
        foreach (self::$Even_mum as $num) {
            echo $num . " ";
        }
    }

        
        
    }
    
   
