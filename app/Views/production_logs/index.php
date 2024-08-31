<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>
    Production Logs List
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h2>Production Logs</h2>
    <a href="/production_logs/create">Add New Production Log</a>

    <table>
        <thead>
            <tr>
                <th>Work Order</th>
                <th>Machine</th>
                <th>Operator</th>
                <th>Product</th>
                <th>Quantity Produced</th>
                <th>Production Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($production_logs as $log): ?>
            <tr>
                <td><?= $log['order_number'] ?></td>
                <td><?= $log['machine_name'] ?></td>
                <td><?= $log['operator_name'] ?></td>
                <td><?= $log['product_name'] ?></td>
                <td><?= $log['quantity_produced'] ?></td>
                <td><?= $log['production_date'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?= $this->endSection() ?>
