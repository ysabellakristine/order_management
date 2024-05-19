<?php
// Include the candy data and any other necessary files
require_once('menu.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize total cost and change
    $total_cost = 0;
    $change = 0;

    foreach ($_POST as $product_name => $quantity) {
        // Validate quantity
        $quantity = intval($quantity);
        if ($quantity < 0) {
            // Handle invalid quantity
            continue;
        }

        // Check if the product exists in the candy array
        if (isset($menu_item[$product_name])) {
            // Calculate total cost for each product
            $total_cost += $candy[$product_name]['price'] * $quantity;
        }
    }

    // Get the cash payment from the form
    $cash_payment = floatval($_POST['cash']);

    // Calculate change
    $change = $cash_payment - $total_cost;

    // Optionally, you can save the order information to a database

    // Redirect back to the home page or display a confirmation message
    header('Location: index.php');
    exit();
}
?>
