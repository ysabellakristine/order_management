<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Management System</title>
    <style>
        body { 
			font-family: Comic Sans MS;
			background-color: rgb(176,101,0);
			line-height: 1.7;}
		h1 {
			color: rgb(135,206,250);}
		h2 { 
			color: rgb(139,0,0);}
    </style>
</head>
<body>
    <h1>Bella's Burger Store</h1>
    <h2>Place Order</h2>
    <form action="place_order.php" method="post">
        <?php foreach ($menu_item as $product_name => $data) { ?>
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
