<!DOCTYPE html>
<html>
<head>
    <title>Add New Product</title>
</head>
<body>

<h2>Add Product</h2>

<form action="/products/store" method="post">
    <label for="product_name">Product Name:</label>
    <input type="text" id="product_name" name="product_name" required>

    <label for="description">Description:</label>
    <textarea id="description" name="description"></textarea>

    <label for="price">Price:</label>
    <input type="number" step="0.01" id="price" name="price" required>

    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" required>

    <button type="submit">Save Product</button>
</form>

</body>
</html>
