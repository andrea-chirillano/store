<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products List</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body>
    <div class="background">
        <div class="container">
            <header>
                <h1>Products List</h1>
            </header>

            <?php if (!empty($products)) : ?>
                <nav>
                    <ul class="product-list">
                        <?php foreach ($products as $product) : ?>
                            <li class="product-item">
                                <a href="<?= site_url('products/detail/' . $product['id']); ?>">
                                    <div class="product-name"><?= $product['name']; ?></div>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            <?php else : ?>
                <p>No hay productos disponibles.</p>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>