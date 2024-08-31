<!DOCTYPE html>
<html>
<head>
    <title>Add New Machine</title>
</head>
<body>

<h2>Add Machine</h2>

<form action="/machines/store" method="post">
    <label for="machine_name">Machine Name:</label>
    <input type="text" id="machine_name" name="machine_name">

    <label for="status">Status:</label>
    <select id="status" name="status">
        <option value="Operational">Operational</option>
        <option value="Maintenance">Maintenance</option>
    </select>

    <button type="submit">Save Machine</button>
</form>

</body>
</html>
