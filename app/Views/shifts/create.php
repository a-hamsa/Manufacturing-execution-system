<!DOCTYPE html>
<html>
<head>
    <title>Add New Shift</title>
</head>
<body>

<h2>Add Shift</h2>

<form action="/shifts/store" method="post">
    <label for="shift_name">Shift Name:</label>
    <input type="text" id="shift_name" name="shift_name" required>

    <label for="start_time">Start Time:</label>
    <input type="time" id="start_time" name="start_time" required>

    <label for="end_time">End Time:</label>
    <input type="time" id="end_time" name="end_time" required>

    <button type="submit">Save Shift</button>
</form>

</body>
</html>
