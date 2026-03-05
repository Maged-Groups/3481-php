<?php
require_once '\wamp64\www\challenges\vendor\autoload.php';

$users = [
    ['name' => 'Omar', 'age' => 17],
    ['name' => 'Laila', 'age' => 21],
    ['name' => 'Hassan', 'age' => 15],
    ['name' => 'Nour', 'age' => 30],
];
$result=array_filter($users,function($user){
  return $user['age']>=18;
});
dump($result);
