<?php
require 'config/db.php';
require 'includes/header.php';

$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);
?>

<h1>Каталог товаров</h1>

<div class="products-grid">
    <?php while ($product = mysqli_fetch_assoc($result)): ?>
        <div class="product-card">
            <img src="/assets/img/products/<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['title']) ?>">
            <h3><?= htmlspecialchars($product['title']) ?></h3>
            <p><?= htmlspecialchars($product['description']) ?></p>
            <div class="product-price"><?= number_format($product['price'], 0, '', ' ') ?> ₽</div>
            <a href="/actions/add_to_cart.php?id=<?= $product['id'] ?>" class="btn">В корзину</a>
        </div>
    <?php endwhile; ?>
</div>

<?php require 'includes/footer.php'; ?>
