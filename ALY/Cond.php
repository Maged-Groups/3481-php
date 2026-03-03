<?php

namespace ALY;
class Cond
{
    public static function temp($temp){
        if ($temp >= 35){
            echo "It is too hot outsdide";
        }
        elseif ($temp >= 25){
            echo "It is normal";
        }
        elseif ($temp >= 15){
            echo "It is coll";
        }
        elseif ($temp >= 5){
            echo "It is cold";
    }
    else {
        echo "It is too cold";
    }
    }
}