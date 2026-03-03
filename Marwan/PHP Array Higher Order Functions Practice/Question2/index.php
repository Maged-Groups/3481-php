<?php
$numbers = [10, 15, 20, 25, 30];

$result = array_map(function ($number) {
    return $number * $number;
}, $numbers);
var_dump($result);