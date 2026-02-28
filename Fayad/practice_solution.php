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

for ($i = 0 ; $i <= 100 ; $i++) {
    if ($i % 2 == 0) {
        echo "$i<br>";
    }
}