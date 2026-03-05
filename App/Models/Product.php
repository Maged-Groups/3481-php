<?php

namespace App\Models;

class Product extends Model
{
    public static string $title;

    protected static float $price;

    private static int $stock;

    public function inStock()
    {
        return 'App\Models\Product@inStock';
    }
    protected function calculateTax()
    {
        return 'App\Models\Product@calculateTax';
    }
}
