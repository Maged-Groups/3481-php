<?php
require_once '../../vendor/autoload.php';

use App\Fayad\Http\Controllers\ProductController;

$controller = new ProductController();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $controller->index();
} else {
    header("HTTP/1.1 405 Method Not Allowed");
    echo json_encode(["message" => "Method not allowed"]);
}
?>