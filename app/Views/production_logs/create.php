<!DOCTYPE html>
<html>
<head>
    <title>Add New Production Log</title>
</head>
<body>

<h2>Add Production Log</h2>

<form action="/production_logs/store" method="post">
    <label for="work_order_id">Work Order:</label>
    <select id="work_order_id" name="work_order_id" required>
        <?php foreach ($work_orders as $work_order): ?>
            <option value="<?= $work_order['id'] ?>"><?= $work_order['order_number'] ?></option>
        <?php endforeach; ?>
    </select>

    <label for="machine_id">Machine:</label>
    <select id="machine_id" name="machine_id" required>
        <?php foreach ($machines as $machine): ?>
            <option value="<?= $machine['id'] ?>"><?= $machine['machine_name'] ?></option>
        <?php endforeach; ?>
    </select>

    <label for="operator_id">Operator:</label>
    <select id="operator_id" name="operator_id" required>
        <?php foreach ($operators as $operator): ?>
            <option value="<?= $operator['id'] ?>"><?= $operator['operator_name'] ?></option>
        <?php endforeach; ?>
    </select>

    <label for="product_id">Product:</label>
    <select id="product_id" name="product_id" required>
        <?php foreach ($products as $product): ?>
            <option value="<?= $product['id'] ?>"><?= $product['product_name'] ?></option>
        <?php endforeach; ?>
    </select>

    <label for="quantity_produced">Quantity Produced:</label>
    <input type="number" id="quantity_produced" name="quantity_produced" required>

    <label for="production_date">Production Date:</label>
    <input type="date" id="production_date" name="production_date" required>

    <button type="submit">Save Production Log</button>
</form>

</body>
</html>
