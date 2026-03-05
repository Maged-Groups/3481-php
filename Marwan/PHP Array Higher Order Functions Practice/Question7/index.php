<?php
require_once '\wamp64\www\challenges\vendor\autoload.php';
$products = [
    ['name' => 'Laptop', 'price' => 15000],
    ['name' => 'Mouse', 'price' => 200],
    ['name' => 'Keyboard', 'price' => 500],
];
$result=array_map(function($product){
return strtoupper($product['name']);


},$products);
dump($result);