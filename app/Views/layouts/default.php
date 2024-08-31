<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        header {
            background-color: #007bff;
            color: white;
            padding: 15px;
            text-align: center;
        }
        nav {
            background-color: #333;
            overflow: hidden;
        }
        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        nav a:hover {
            background-color: #ddd;
            color: black;
        }
        section {
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: #007bff;
            color: white;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

<header>
    <h1>Welcome to the Manufacturing Execution System</h1>
</header>

<nav>
    <a href="/">Home</a>
    <a href="/shifts">Shifts</a>
    <a href="/operators">Operators</a>
    <a href="/machines">Machines</a>
    <a href="/products">Product</a>
    <a href="/work_orders">Work Order</a>
    <a href="/production_logs">Production Logs</a>
</nav>

<section>
    <?= $this->renderSection('content') ?>
</section>

<footer>
    <p>&copy; 2024 MES System. All Rights Reserved.</p>
</footer>

</body>
</html>
