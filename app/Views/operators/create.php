<!DOCTYPE html>
<html>
<head>
    <title>Add New Operator</title>
</head>
<body>

<h2>Add Operator</h2>

<form action="/operators/store" method="post">
    <label for="operator_name">Operator Name:</label>
    <input type="text" id="operator_name" name="operator_name" required>

    <label for="shift_id">Shift:</label>
    <select id="shift_id" name="shift_id" required>
        <?php foreach ($shifts as $shift): ?>
            <option value="<?= $shift['id'] ?>"><?= $shift['shift_name'] ?></option>
        <?php endforeach; ?>
    </select>

    <button type="submit">Save Operator</button>
</form>

</body>
</html>
