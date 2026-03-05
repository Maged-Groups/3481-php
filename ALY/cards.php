<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Cards</title>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .product-card {
            width: 250px;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }
        .product-card h3 {
            margin: 10px 0;
            font-size: 16px;
            height: 40px;
        }
        .product-card .price {
            color: green;
            font-weight: bold;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <div class="container"></div>