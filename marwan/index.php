<?php
require_once '../vendor\autoload.php';

 echo"<h1> testing evenOrOdd function";
 dump(App\Marwan\challenges\ifLoops\control::evenOrOdd(3));
 dump(App\Marwan\challenges\ifLoops\control::evenOrOdd(4));

 dump(App\Marwan\challenges\ifLoops\control::LeapYear(16));
echo"<h1> testing largest function";
 dump(App\Marwan\challenges\ifLoops\control::largest(1,2,3));
 dump(App\Marwan\challenges\ifLoops\control::largest(3,2,1));
 dump(App\Marwan\challenges\ifLoops\control::largest(1,3,2));
 dump(App\Marwan\challenges\ifLoops\control::largest(1,1,3));
 dump(App\Marwan\challenges\ifLoops\control::largest(3,1,1));
 dump(App\Marwan\challenges\ifLoops\control::largest(1,3,1));
 dump(App\Marwan\challenges\ifLoops\control::largest(1,1,1));

//calc function
echo"<h1>testing calc function";
 dump(App\Marwan\challenges\ifLoops\control::calc(2,'+',3));
 dump(App\Marwan\challenges\ifLoops\control::calc(2,'-',3));
 dump(App\Marwan\challenges\ifLoops\control::calc(2,'*',3));
 dump(App\Marwan\challenges\ifLoops\control::calc(6,'/',2));
 dump(App\Marwan\challenges\ifLoops\control::calc(1,'/',0));
 dump(App\Marwan\challenges\ifLoops\control::calc(2,'=',3));

echo"<h1>testing SumOfNumbers function";
dump(App\Marwan\challenges\ifLoops\control::SumOfNumbers(1,100));


echo"<h1>testing Fibonacci function";
dump(App\Marwan\challenges\ifLoops\control::Fibonacci(7));

echo"<h1>testing arrayFilter function<br>";
$x=[1,2,3,4,5,6,7,8,8,9];
App\Marwan\challenges\ifLoops\control::arrayFilter($x,5);
echo "<br>";
echo"<h1>testing pyramid function<br>";
App\Marwan\challenges\ifLoops\control::pyramid(100);