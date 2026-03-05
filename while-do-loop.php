<?php

$x = 10;

while ($x < 1000) {
    echo "Yes $x is less than 1000<br >";
    $x % 2 === 0 ? $x *= 3 : $x *= 2;
}


echo 'After while <br >';


$guests = 0;

while ($guests >= 0) {
    echo 'Insert into DB<br >';
    $guests--;
}
