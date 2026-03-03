<?php
// card.php - Luxurious White & Blue Edition

static $css_done = false;
if (!$css_done) {
    $css_done = true;
?>
<style>
    .products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 28px;
    max-width: 1440px;
    margin: 0 auto;
    padding: 20px 10px 40px;
}

.card {
    /* no width needed here – grid controls it */
    /* keep your other .card styles */
}
:root {
  --bg:        #f8f9fc;           /* very light cool white-blue tint */
  --card:      #ffffff;
  --blue-dark: #0f172a;           /* deep navy */
  --blue-med:  #1e40af;           /* rich royal blue */
  --gold:      #d4af37;           /* soft luxury gold */
  --gold-dark: #b8860b;
  --text:      #111827;
  --text-light:#64748b;
}

body {
  background: var(--bg);
  color: var(--text);
  font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
  margin: 0;
  padding: 3rem 1.5rem 4rem;
  line-height: 1.6;
}

.products {
  display: flex;
  flex-wrap: wrap;
  gap: 2rem 1.75rem;
  max-width: 1480px;
  margin: 0 auto;
  justify-content: center;
  padding: 0 1rem;
}

.card {
  width: 320px;
  background: var(--card);
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 8px 32px rgba(15,23,42,0.08),
              0 2px 8px rgba(0,0,0,0.04);
  transition: all 0.32s ease;
  border: 1px solid rgba(15,23,42,0.06);
  position: relative;
}

.card:hover {
  transform: translateY(-12px);
  box-shadow: 0 24px 48px rgba(15,23,42,0.14),
              0 4px 16px rgba(0,0,0,0.06);
  border-color: rgba(212,175,55,0.18);
}

.card::before {
  content: "";
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 4px;
  background: linear-gradient(90deg, var(--blue-med), var(--gold));
  opacity: 0.85;
  transition: opacity 0.4s ease;
}

.card:hover::before {
  opacity: 1;
}

.card-image {
  height: 260px;
  background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
  overflow: hidden;
  position: relative;
}

.card-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.48s cubic-bezier(0.34, 1.56, 0.64, 1);
}

.card:hover .card-image img {
  transform: scale(1.065);
}

.card-body {
  padding: 1.6rem 1.5rem 1.8rem;
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.title {
  font-size: 1.22rem;
  font-weight: 600;
  line-height: 1.38;
  color: var(--blue-dark);
  margin: 0 0 0.4rem 0;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.price {
  font-size: 1.52rem;
  font-weight: 700;
  color: var(--blue-med);
  letter-spacing: -0.02em;
  margin: 0.6rem 0 1.3rem 0;
}

.price small {
  font-size: 0.92rem;
  font-weight: 400;
  color: var(--text-light);
  margin-left: 0.6rem;
}

.btn {
  margin-top: auto;
  padding: 0.95rem;
  background: linear-gradient(135deg, var(--blue-med) 0%, var(--blue-dark) 100%);
  color: white;
  border: none;
  border-radius: 10px;
  font-weight: 600;
  font-size: 0.98rem;
  letter-spacing: 0.02em;
  cursor: pointer;
  transition: all 0.25s ease;
  box-shadow: 0 3px 10px rgba(30,64,175,0.25);
}

.btn:hover {
  background: linear-gradient(135deg, var(--blue-dark) 0%, #1e3a8a 100%);
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(30,64,175,0.35);
}

.btn:active {
  transform: translateY(0);
}

/* Title on top of page */
h1 {
  text-align: center;
  font-size: 2.8rem;
  font-weight: 700;
  color: var(--blue-dark);
  margin-bottom: 3.5rem;
  letter-spacing: -0.025em;
}
</style>
<?php } ?>

<div class="card">
  <div class="card-image">
    <img
      src="<?= htmlspecialchars($product['thumbnail'] ?? 'https://placehold.co/320x260?text=No+Image') ?>"
      alt="<?= htmlspecialchars($product['title'] ?? 'Product') ?>"
      loading="lazy"
    >
  </div>

  <div class="card-body">
    <h3 class="title">
      <?= htmlspecialchars($product['title'] ?? '—') ?>
    </h3>

    <div class="price">
      $<?= number_format($product['price'] ?? 0, 2) ?>
      <small>incl. VAT</small>
    </div>

    <button class="btn">Add to Cart</button>
  </div>
</div>