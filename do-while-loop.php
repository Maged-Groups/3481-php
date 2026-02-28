<?php

$x = 10000;

do {
    echo "Yes $x is less than 1000<br >";
    $x % 2 === 0 ? $x *= 3 : $x *= 2;
} while ($x < 1000);

echo 'After loop<br >';


$guests = 0;

do {
    echo 'Insert into DB<br >';
    $guests--;
} while ($guests >= 0);
