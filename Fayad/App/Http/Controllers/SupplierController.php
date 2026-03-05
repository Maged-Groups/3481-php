<?php

namespace App\Http\Controllers;

class SupplierController extends Controller
{
    public static string $name;
    public static string $address;
    public static string $city;

    public static function getSupplierName () :string {
        return self::$name;
    }
  
    public static function order (float $amout, int $itemsCount) : void {
        // 
    }
}
