<?php
// Create a list of even(+) numbers from 1 to 100
// Ex.:
/**
 * 2
 * 4
 * 6
 * 8
 * ...
 */

$x = 1;

while ($x <= 100) {
     
    echo $x % 2 == 0 ? $x : '' ;
    $x ++;
}