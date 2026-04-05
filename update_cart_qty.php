<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['product_id'];
    $qty = intval($_POST['qty']); // Ensure it's an integer

    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as &$item) {
            if ($item['id'] == $product_id) {
                $item['qty'] = $qty; // Update quantity in session
                break;
            }
        }
    }

    echo 'updated';
}
?>
