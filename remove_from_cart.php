<?php
session_start();

if (isset($_GET['key'])) {
    $key = $_GET['key'];
    if (isset($_SESSION['cart'][$key])) {
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart'] = array_values($_SESSION['cart']);
        $_SESSION['message'] = 'Product removed successfully';
    }
}
header("Location: cart.php");
exit();
?>
