<?php
require_once 'C:\wamp64\www\challenges\vendor\autoload.php';

$numbers = [1, 2, 3, 4, 5];

$result = array_reduce($numbers, function ($carry, $number) {
    return $carry * $number;
}, 1);
dump($result);
