<?php
$users=[
['name'=>"Ahmed",'age'=>22],
['name'=>'Sara','age'=>35],
['name'=>'Mona','age'=>28],
['name'=>'Ali','age'=>40]

];
$result=array_filter($users,function ($user){return $user['age']>=30;});
var_dump($result);