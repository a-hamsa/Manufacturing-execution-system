<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>
    Work Orders List
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h2>Work Orders</h2>
    <a href="/work_orders/create">Add New Work Order</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Order Number</th>
                <th>Machine</th>
                <th>Operator</th>
                <th>Status</th>
                <th>Start Date</th>
                <th>End Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($work_orders as $order): ?>
            <tr>
                <td><?= $order['id'] ?></td>
                <td><?= $order['order_number'] ?></td>
                <td><?= $order['machine_name'] ?></td>
                <td><?= $order['operator_name'] ?></td>
                <td><?= $order['status'] ?></td>
                <td><?= $order['start_date'] ?></td>
                <td><?= $order['end_date'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?= $this->endSection() ?>
