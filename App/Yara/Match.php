<?php
$grade=25;

  $RESULT=match($grade){
    15=>"good",
    25=>"exlent",
    38=>"bAD",
    default =>"fail"


};
echo"$RESULT";
echo "<hr>";

$floor=5;
$number=match($floor){
    3,6=>"this is not floor",
    2,5=>"this is floor",
    default =>'wrong building'
};
echo"$number";


