
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        .product-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
            width: 200px;
            margin: 10px;
            display: inline-block;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            transition: 0.3s;
        }

        .product-card:hover {
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }

        .product-image {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 6px;
        }

        .product-title {
            margin: 10px 0;
        }

        .product-price {
            color: green;
            font-weight: bold;
        }

        /* Container لتنسيق البطاقات في منتصف الصفحة */
        .products-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
    </style>
</head>
<body>

    <h1>All Products</h1>

    <div class="products-container">
        <?php foreach ($products as $product): ?>
            <div class="product-card">
                <img src="<?= $product['thumbnail']; ?>" alt="<?= htmlspecialchars($product['title']); ?>" class="product-image">
                <h4 class="product-title"><?= htmlspecialchars($product['title']); ?></h4>
                <p class="product-price">$<?= number_format($product['price'], 2); ?></p>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>