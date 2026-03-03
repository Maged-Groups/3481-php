<?php
require_once 'C:\wamp64\www\challenges\vendor\autoload.php';
$products = [
    ['name' => 'Laptop', 'price' => 15000],
    ['name' => 'Mouse', 'price' => 200],
    ['name' => 'Keyboard', 'price' => 500],
];
$result=array_filter($products,function($product){
return $product["price"]>1000;
});
dump($result);
