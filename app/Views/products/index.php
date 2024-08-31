<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>
    Products List
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h2>Products</h2>
    <a href="/products/create">Add New Product</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['product_name'] ?></td>
                <td><?= $product['description'] ?></td>
                <td><?= $product['price'] ?></td>
                <td><?= $product['quantity'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?= $this->endSection() ?>
