<?php
$users = [
    ['name' => 'Ahmed', 'salary' => 4000],
    ['name' => 'Sara', 'salary' => 6000],
    ['name' => 'Mona', 'salary' => 5000],
];

$result = array_map(function ($user) {
    return $user['salary'];
}, $users);
var_dump($result);