<div class="product-card">
    <img src="<?= $product['thumbnail']; ?>" 
         alt="<?= htmlspecialchars($product['title']); ?>" 
         class="product-image">

    <h4 class="product-title">
        <?= htmlspecialchars($product['title']); ?>
    </h4>

    <p class="product-price">
        $<?= number_format($product['price'], 2); ?>
    </p>
</div>