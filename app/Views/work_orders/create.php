<!DOCTYPE html>
<html>
<head>
    <title>Add New Work Order</title>
</head>
<body>

<h2>Add Work Order</h2>

<form action="/work_orders/store" method="post">
    <label for="order_number">Order Number:</label>
    <input type="text" id="order_number" name="order_number" required>

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

    <label for="status">Status:</label>
    <input type="text" id="status" name="status" required>

    <label for="start_date">Start Date:</label>
    <input type="date" id="start_date" name="start_date" required>

    <label for="end_date">End Date:</label>
    <input type="date" id="end_date" name="end_date" required>

    <button type="submit">Save Work Order</button>
</form>

</body>
</html>
