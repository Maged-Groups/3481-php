<?php

namespace App\A7mad\Http\Controllers;

use App\A7mad\Models\Product;

class ProductController extends Controller
{
    public static function list_all()
    {
        // Get data from Model
        $Products = Product::all();

        $json = json_encode($Products);

        // return
        return $json;
    }
}
