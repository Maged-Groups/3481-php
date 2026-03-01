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


## Question 5

$numbers = [1, 2, 3, 4, 5];
$result = array_reduce($numbers, function ($carry, $number) use ($numbers){
    return $carry * $number;
},0);


## Question 6

$products = [
    ['name' => 'Laptop', 'price' => 15000],
    ['name' => 'Mouse', 'price' => 200],
    ['name' => 'Keyboard', 'price' => 500],
];
$price = array_filter($products, function ($product) {
    return $product['price'] > 1000;
});


## Question 7

$products = [
    ['name' => 'Laptop', 'price' => 15000],
    ['name' => 'Mouse', 'price' => 200],
    ['name' => 'Keyboard', 'price' => 500],
];

$upper = array_map( function($item){
    return upperCase($item['name']);   
},
$products);

## Question 8

$numbers = [3, 6, 9, 12, 15, 18];

$div = array_filter($numbers, function ($value) {
    return $value % 2 == 0 and $value % 3 == 0;
}); 


## Question 9

$users = [
    ['name' => 'Omar', 'age' => 17],
    ['name' => 'Laila', 'age' => 21],
    ['name' => 'Hassan', 'age' => 15],
    ['name' => 'Nour', 'age' => 30],
];

$age = array_filter($users, function ($user){
    return $user['age'] >= 18;
});


## Question 10

$orders = [
    ['id' => 1, 'total' => 250],
    ['id' => 2, 'total' => 450],
    ['id' => 3, 'total' => 300],
];

$total = array_reduce($orders, function($carry, $order) use($numbers, $orders){
    return $carry + $order;
},0);
