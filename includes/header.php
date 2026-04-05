<?php 
session_start();
include('constant.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Ramesh Giri - Ecommerce </title>
    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- site Favicon -->
    <link rel="icon" href="assets/images/favicon/favicon.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="assets/images/favicon/favicon.png" />
    <meta name="msapplication-TileImage" content="assets/images/favicon/favicon.png" />

    <!-- css Icon Font -->
    <link rel="stylesheet" href="assets/css/vendor/ecicons.min.css" />

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="assets/css/plugins/animate.css" />
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/countdownTimer.css" />
    <link rel="stylesheet" href="assets/css/plugins/slick.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.css" />

    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/demo1.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <!-- Background css -->
    <link rel="stylesheet" id="bg-switcher-css" href="assets/css/backgrounds/bg-4.css">
    <style>
    .message {
            position: fixed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            background-color: #dff0d8;
            color: #3c763d;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            z-index: 1000;
        }
        .ec-checkout-wrap .ec-check-bill-form input {
            margin-bottom: 12px !important;
            height: 43px !important;
        }
        .search-results li {
            padding: 5px 10px;
            background: #fcfcfc;
            color: #000;
            border-bottom:1px solid #d8d8d8;
        }
        .search-results{
            z-index: 444;
            position: absolute;
            width: 43%;
            border:1px solid #d8d8d8;
            border-top:none;
        }
    </style>
</head>

<body>
    <div id="ec-overlay">
        <div class="ec-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Header start  -->
    <header class="ec-header">
        <!--Ec Header Top Start -->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Header Top social Start -->
                    <div class="col text-left header-top-left d-none d-lg-block">
                        <div class="header-top-social">
                            <span class="social-text text-upper">Follow us on:</span>
                        </div>
                    </div>
                    <!-- Header Top social End -->
                    <!-- Header Top Message Start -->
                    <div class="col text-center header-top-center">
                        <div class="header-top-message text-upper">
                            <marquee behavior="" direction=""> <span>Free Shipping</span>This Week Order Over - ₹75</marquee>
                        </div>
                    </div>
                    <!-- Header Top Message End -->
                    <!-- Header Top Language Currency -->
                    <div class="col header-top-right d-none d-lg-block">
                        <div class="header-top-lan-curr d-flex justify-content-end">
                            <!-- Currency Start -->
                            <div class="header-top-curr dropdown"><i class="fa-solid fa-phone"></i>
                                <button class="" data-bs-toggle="dropdown"><a href="tel:+ 9311703804">+91  9311703804</a></button>
                            </div>&emsp;
                            <!-- Currency End -->
                            <!-- Language Start -->
                            <div class="header-top-lan dropdown"><i class="fa-solid fa-envelope"></i>
                                 <button class=""><a
                                 href="mailto:info@rameshgiri.com">info@rameshgiri.com</a></button>
                            </div>
                            <!-- Language End -->

                        </div>
                    </div>
                    <!-- Header Top Language Currency -->
                    <!-- Header Top responsive Action -->
                    <div class="col d-lg-none ">
                        <div class="ec-header-bottons">
                            <!-- Header User End -->
                            <!-- Header Cart Start -->

                            <!-- Header Cart End -->
                            <a href="javascript:void(0)" class="ec-header-btn ec-sidebar-toggle">
                                <a href="index.php"><img src="assets/images/main_logo.png" alt="Site Logo" /></a>
                            </a>
                        </div>
                    </div>
                    <!-- Header Top responsive Action -->
                </div>
            </div>
        </div>
        <!-- Ec Header Top  End -->
        <!-- Ec Header Bottom  Start -->
        <div class="ec-header-bottom d-none d-lg-block">
            <div class="container position-relative">
                <div class="row">
                    <div class="ec-flex">
                        <!-- Ec Header Logo Start -->
                        <div class="align-self-center">
                            <div class="header-logo">
                                <a href="index.php"><img src="assets/images/main_logo.png" alt="Site Logo" /><img
                                        class="dark-logo" src="assets/images/main_logo.png" alt="Site Logo"
                                        style="display: none;" /></a>
                            </div>
                        </div>
                        <!-- Ec Header Logo End -->

                        <!-- Ec Header Search Start -->
                        <div class="align-self-center">
                            <div class="header-search">
                                <form class="ec-btn-group-form" action="#" id="searchForm">
                                    <input class="form-control ec-search-bar" placeholder="Search products..." type="text" id="searchInput">
                                    <button class="submit" ><i class="fi-rr-search"></i></button>
                                </form>

                            </div>
                            <ul id="searchResults" class="search-results"></ul>

                        </div>

                        <!-- Ec Header Search End -->

                        <!-- Ec Header Button Start -->
                        <div class="align-self-center">
                            <div class="ec-header-bottons">
                                <!-- Header wishlist End -->
                                <!-- Header Cart Start -->
                                <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                                    <div class="header-icon"><i class="fi-rr-shopping-bag"></i></div>
                                    <span class="ec-header-count cart-count-lable">
                                        <?php
                                        $cart_items = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
                                        
                                        $cart_count = 0;
                                        foreach ($cart_items as $item) {
                                            $cart_count += intval($item['qty']); 
                                        }
                                        
                                        echo $cart_count;
                                        ?>
                                    </span>
                                </a>

                                <!-- ekka Cart Start -->
                                <div class="ec-side-cart-overlay"></div>
                                <!-- Header Cart End -->
                                <div id="ec-side-cart" class="ec-side-cart">
                                    <div class="ec-cart-inner">
                                        <div class="ec-cart-top">
                                            <div class="ec-cart-title">
                                                <span class="cart_title">My Cart</span>
                                                <button class="ec-close">×</button>
                                            </div>
                                            <ul class="eccart-pro-items">
                                                <?php
                                                $cart_items = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
                                                $subtotal = 0;
                                                $delivery_charges = 50; 
                                                $total_amount = 0;

                                                foreach ($cart_items as $item) {
                                                    $price = preg_replace('/[^\d.]/', '', $item['price']); 
                                                    $qty = is_numeric($item['qty']) ? intval($item['qty']) : 0;
                                                
                                                    $subtotal += floatval($price) * $qty;
                                                }
                                                $total_amount = $subtotal;
                                                if (!empty($cart_items)) {
                                                    foreach ($cart_items as $key => $item) {
                                                        $product_id = isset($item['id']) ? $item['id'] : ''; 
                                                        if ($product_id == 1){
                                                            $productn="one";
                                                        }else if ($product_id == 2){
                                                            $productn="two";
                                                        }else if ($product_id == 3){
                                                            $productn="three";
                                                        }else if ($product_id == 4){
                                                            $productn="four";
                                                        }
                                                        $product_url = "product-{$productn}.php";
                                                        ?>
                                                        <li>
                                                            <a href="<?php echo htmlspecialchars($product_url); ?>" class="sidekka_pro_img">
                                                                <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>">
                                                            </a>
                                                            <div class="ec-pro-content">
                                                                <a href="<?php echo htmlspecialchars($product_url); ?>" class="cart_pro_title">
                                                                    <?php echo htmlspecialchars($item['title']); ?>
                                                                </a>
                                                                <span class="cart-price">
                                                                    <span>₹ <?php echo htmlspecialchars($item['price']); ?></span> x <?php echo htmlspecialchars($item['qty']); ?>
                                                                </span>
                                                                <a href="remove_from_cart.php?key=<?php echo $key; ?>" class="remove">×</a>
                                                            </div>
                                                        </li>
                                                        <?php
                                                    }
                                                } else {
                                                    ?>
                                                    <li>Your cart is empty.</li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>


                                        </div>
                                        <div class="ec-cart-bottom">
                                            <div class="cart-sub-total">
                                                <table class="table cart-table">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-left">Sub-Total :</td>
                                                            <td class="text-right">₹ <?php echo number_format($subtotal, 2); ?></td>
                                                        </tr>
                                                        <tr>
                                                        <?php 
                                                            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                                                 $del_price="50.00";
                                                            } else {
                                                                 $del_price="0.00";
                                                            }
                                                        ?>
                                                            <td class="text-left">Total :</td>
                                                            <td class="text-right primary-color">₹ <?php echo number_format($total_amount+$del_price, 2); ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="cart_btn">
                                                    <a href="checkout.php" class="btn btn-secondary">Checkout</a>
                                                </div>
                                                <div class="cart_btn">
                                                    <a href="cart.php" class="btn btn-secondary">Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ec Header Button End -->
        <!-- Header responsive Bottom  Start -->
        <div class="ec-header-bottom d-lg-none">
            <div class="container position-relative">
                <div class="row">
                    <div class="ec-header-bottons">
                        <!-- Header wishlist End -->
                        <!-- Header Cart Start -->
                        <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                            <div class="header-icon"><i class="fi-rr-shopping-bag"></i></div>
                            <span class="ec-header-count cart-count-lable">3</span>
                        </a>
                        <!-- Header Cart End -->
                    </div>
                    <!-- Ec Header Search Start -->
                    <div class="col">
                        <div class="header-search">
                            <form class="ec-btn-group-form" action="#">
                                <input class="form-control ec-search-bar" placeholder="Search products..." type="text">
                                <button class="submit" type="submit"><i class="fi-rr-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Ec Header Search End -->
                </div>
            </div>
        </div>
    </header>
    <!-- Header End  -->