<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Management System</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Place Order</h2>
    <form action="place_order.php" method="post">
        <?php foreach ($candy as $product_name => $data) { ?>
            <label for="<?= $product_name ?>"><?= $product_name ?></label>
            <select id="<?= $product_name ?>" name="<?= $product_name ?>">
                <?php for ($i = 0; $i <= $data['stock']; $i++) { ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php } ?>
            </select><br>
        <?php } ?>
        <label for="cash">Cash</label>
        <input type="number" id="cash" name="cash" step="0.01" min="0"><br>
        <input type="submit" value="Place Order">
    </form>
</body>
</html>
