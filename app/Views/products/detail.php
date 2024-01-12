<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body>
    <div class="background">
        <div class="container">
            <header>
                <h1>Product Details</h1>
            </header>

            <?php if (!empty($product)) : ?>
                <div class="detail">
                    <img src="<?= base_url('img/' . strtolower(str_replace(' ', '_', $product['name'])) . '.jpg'); ?>" alt="<?= $product['name']; ?>" width="100" height="100">
                    <p><strong>Name:</strong> <?= $product['name']; ?></p>
                    <p><strong>Price:</strong> $<?= $product['price']; ?>,00</p>
                    <p><strong>Stock:</strong> <?= $product['stock']; ?></p>
                    <p><strong>Code:</strong> <?= $product['code']; ?></p>
                    <a class="back_button"href="<?= site_url('/../../../'); ?>">Back to store</a>
                </div>
            <?php else : ?>
                <p>No se encontró información del producto.</p>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>