<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['product_id']; 
    $title = $_POST['title'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $image = $_POST['image'];

    $product_exists = false;
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            if ($item['id'] == $product_id) {
                $product_exists = true;
                break;
            }
        }
    }

    if ($product_exists) {
        echo 'exists';
    } else {
        $_SESSION['cart'][] = [
            'id' => $product_id, 
            'title' => $title,
            'price' => $price,
            'qty' => $qty,
            'image' => $image
        ];
        echo 'added';
    }
}
?>
