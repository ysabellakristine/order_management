<?php
require_once('menu.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize total cost and change
    $total_cost = 0;
    $change = 0;

    foreach ($_POST as $product_name => $quantity) {
        $quantity = intval($quantity);
        if ($quantity < 0) {
            continue;
        }

        if (isset($menu_item[$product_name])) {
            // Calculate total cost for each product
            $total_cost += $candy[$product_name]['price'] * $quantity;
        }
    }

    $cash_payment = floatval($_POST['cash']);

    $change = $cash_payment - $total_cost;
    
    header('Location: index.php');
    exit();
}
?>
