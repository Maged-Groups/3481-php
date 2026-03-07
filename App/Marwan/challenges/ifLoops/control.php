<?php
namespace App\Marwan\challenges\ifLoops; 
require_once '../vendor\autoload.php';
class control{
static function evenOrOdd($num){

if($num%2==0){
  return 'Even';
}
else return'Odd';
}

static function LeapYear($year){

if($year%400==0){
  return 'Leap year';
}
elseif($year%100==0){
  return 'Not a leap year';

}
elseif($year%4==0) {
  return'Leap year';}
else return 'Not a leap year';

}
static function largest($n1,$n2,$n3){

if($n1>=$n2){         
if($n1>=$n3){
  return"$n1 is the largest number";
}
elseif($n1<=$n3) return"$n3 is the number";
}
elseif($n1<=$n2){
if($n2<$n3){
 return"$n3 is the largest number";
}elseif($n2>=$n3) return "$n2 is the largest number";
}}

static function calc($n1,$sign,$n2){
if($sign == "+"){
  return $n1+$n2;
}
elseif($sign == "-"){
   return $n1-$n2;
}
elseif($sign == "*"){
   return $n1*$n2;
}elseif($sign == "/"){
  if($n2==0){return "Undefined";}
   return $n1/$n2;
}else return "Please enter one of those signs in the second parameter(+,-,*,/)";


}

static function SumOfNumbers($initial,$last){
  $sum=0;
  
  for( ;$initial<=$last;$initial++){
$sum+=$initial;
  }
return $sum;
}

  static function Fibonacci($n) {
    if ($n <= 0) return;
    
    $a = 0;
    $b = 1;
    $res="";
  
  for ($i = 0; $i<$n; $i++) {
        $res=$res. "$a," ;
        $next = $a + $b;
        $a = $b;
        $b = $next;
    }
    return $res;
    
}

static function pyramid($height){

for($i=1;$i<=$height;$i++){
for($y=1;$y<=$i;$y++){
echo "*";
  
}
echo "<br>";

}

}
static function arrayFilter($array,$threshold){
foreach($array as $item){
  if($item >$threshold){
echo $item;}
};




}
}


