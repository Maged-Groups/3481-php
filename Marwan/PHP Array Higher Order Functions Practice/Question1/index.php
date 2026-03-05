<?php 
$numbers = [5, 12, 18, 25, 30, 42, 55];

$result = array_filter($numbers, function ($number) {
    return $number % 2 ==1;
});
var_dump($result);