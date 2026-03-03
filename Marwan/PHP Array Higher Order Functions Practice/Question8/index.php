<?php
require_once '\wamp64\www\challenges\vendor\autoload.php';


$numbers = [3, 6, 9, 12, 15, 18];
$result=array_filter($numbers,function($num){
  return $num%3==0 &&$num%2==0;
});
dump($result);