<?php include 'products.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Shop</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600&family=DM+Sans:wght@300;400&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="style.css"/>
</head>
<body>

  <header>
    <h1>Collection</h1>
    <span><?php echo count($products); ?> items</span>
  </header>

  <div class="grid">
    <?php foreach ($products as $product): ?>
    <div class="card">
      <div class="img-wrap">
        <img src="<?php echo htmlspecialchars($product['thumbnail']); ?>"
             alt="<?php echo htmlspecialchars($product['title']); ?>"
             loading="lazy"/>
      </div>
      <div class="card-body">
        <p class="card-id">#<?php echo $product['id']; ?></p>
        <h2 class="card-title"><?php echo htmlspecialchars($product['title']); ?></h2>
        <p class="card-price">$<?php echo number_format($product['price'], 2); ?></p>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

  <footer>
    &copy; <?php echo date('Y'); ?> &mdash; All rights reserved
  </footer>

</body>
</html>