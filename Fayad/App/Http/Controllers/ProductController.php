<?php

namespace App\Http\Controllers;

use \App\Helpers\Str;

class ProductController extends Controller
{
    private static $products = [
        'mouse',
        'LAPTOP',
        'Pc',
        'mobile',
        'Tv',
        'WiFI',
        'EarPods',
        'KeyBoard',
    ];

    private static $old_prices = [
        1000,
        1200,
        1400,
        1500,
        5000
    ];

    public static function index()
    {
        dump(self::$products);

        foreach (self::$products as $product) {
            echo $product . '<hr>';
        }
    }

    public static function store()
    {
        // 
    }

    public static function refine()
    {
        // echo   Str::upperCase('MaRAWAn');
        $new_products =  array_map('upperCase', self::$products);
        /**
         * $new_products = ['OK', 'OK'];
         */

        dumP($new_products);
    }
}
