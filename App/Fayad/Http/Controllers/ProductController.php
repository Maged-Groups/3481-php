<?php
namespace App\Fayad\Http\Controllers;

use App\Fayad\Models\Product;

class ProductController {
    private $productModel;

    public function __construct() {
        $this->productModel = new Product();
    }

    public function index() {
        $products = $this->productModel->getAll();
        header('Content-Type: application/json');
        echo json_encode([
            "message" => "Products fetched successfully",
            "data" => $products
        ]);
    }
}
?>