<?php

# Question 1

$numbers = [5, 12, 18, 25, 30, 42, 55];
$result = array_filter($numbers, function ($number) {
    return $number % 2 !== 0;
});


## Question 2

$numbers = [10, 15, 20, 25, 30];
$square = array_map(function ($number) {
    return $number ** 2;
    },
    $numbers
);

## Question 3

$users = [
    ['name' => 'Ahmed', 'age' => 22],
    ['name' => 'Sara', 'age' => 35],
    ['name' => 'Mona', 'age' => 28],
    ['name' => 'Ali', 'age' => 40],
];

$age = array_filter($users, function ($user) {
    return $user['age'] > 30;
});


## Question 4

$users = [
    ['name' => 'Ahmed', 'salary' => 4000],
    ['name' => 'Sara', 'salary' => 6000],
    ['name' => 'Mona', 'salary' => 5000],
];

$salary = array_map(function ($value) use ($users) {
    return $users['salary'];
    },
    $users
);


