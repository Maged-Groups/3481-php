<?php
require_once '\wamp64\www\challenges\vendor\autoload.php';

$orders = [
    ['id' => 1, 'total' => 250],
    ['id' => 2, 'total' => 450],
    ['id' => 3, 'total' => 300],
];
$result=array_reduce($orders,function($carry,$order){
return $order['total']+$carry;

},0);
dump($result);