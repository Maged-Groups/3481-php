<?php

namespace App\Marwan\Http\Controllers;

use App\Marwan\Models\Product;

class ProductController 
{
    public static function list_all()
    {
        // Get data from Model
        $products = Product::all();

        $json = json_encode($products);

        // return
        return $json;
    }
}
