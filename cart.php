<?php include('includes/header.php');?>
    <!-- ekka Cart End -->

    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Cart</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="ec-breadcrumb-item active">Cart</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->


    <!-- Ec cart page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-cart-leftside col-lg-8 col-md-12 ">
                    <!-- cart content Start -->
                    <div class="ec-cart-content">
                        <div class="ec-cart-inner">
                            <div class="row">
                                    <div class="table-content cart-table-content">
                                        
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
                                        $total_amount = $subtotal ; 
                                        ?>

                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Price</th>
                                                    <th style="text-align: center;">Quantity</th>
                                                    <th>Total</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (!empty($cart_items)): ?>
                                                    <?php foreach ($cart_items as $key => $item): ?>
                                                        <tr>
                                                            <td data-label="Product" class="ec-cart-pro-name">
                                                                <?php
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
                                                                <a href="<?php echo htmlspecialchars($product_url); ?>">
                                                                    <img class="ec-cart-pro-img mr-4" src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>" />
                                                                    <?php echo htmlspecialchars($item['title']); ?>
                                                                </a>
                                                            </td>
                                                            <td data-label="Price" class="ec-cart-pro-price">
                                                                <span class="amount">₹ <?php echo htmlspecialchars($item['price']); ?></span>
                                                            </td>
                                                            <td data-label="Quantity" class="ec-cart-pro-qty" style="text-align: center;">
                                                            <div class="cart-qty-plus-minus">
                                                                <button type="button" class="qty-minus" onclick="updateQty(-1)">-</button>
                                                                <input class="cart-qty-input" type="text" name="cartqtybutton" value="<?php echo htmlspecialchars($item['qty']); ?>" readonly />
                                                                <button type="button" class="qty-plus" onclick="updateQty(1)">+</button>
                                                                <input type="hidden" class="product-id" value="<?= $product_id; ?>" />
                                                            </div>

                                                            </td>
                                                            <td data-label="Total" class="ec-cart-pro-subtotal">
                                                                ₹ <?php echo htmlspecialchars(floatval($item['price']) * intval($item['qty'])); ?>
                                                            </td>
                                                            <td data-label="Remove" class="ec-cart-pro-remove">
                                                                <a href="remove_from_cart.php?key=<?php echo $key; ?>"><i class="ecicon eci-trash-o"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php else: ?>
                                                    <tr>
                                                        <td colspan="5">Your cart is empty.</td>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>


                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="ec-cart-update-bottom">
                                                <a href="index.php">Continue Shopping</a>
                                                <a href="checkout.php" class="btn btn-primary text-light">Check Out</a>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!--cart content End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="ec-cart-rightside col-lg-4 col-md-12">
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Summary Block -->
                        <div class="ec-sidebar-block">
                        
                            <div class="ec-sb-block-content">
                                <div class="ec-cart-summary-bottom">
                                    <div class="ec-cart-summary">
                                        <div>
                                            <span class="text-left">Sub-Total</span>
                                            <span class="text-right">₹ <?php echo number_format($subtotal, 2); ?></span>
                                        </div>

                                        <div>
                                            <span class="text-left">Delivery Charge</span>
                                            <span class="text-right">₹ 
                                                <?php 
                                                    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                                        echo $del_price="50.00";
                                                    } else {
                                                        echo $del_price="0.00";
                                                    }
                                                ?>
                                            </span>
                                        </div>

                                        <div class="ec-cart-summary-total">
                                            <span class="text-left">Total Amount</span>
                                            <span class="text-right">₹ <?php echo number_format($total_amount+$del_price, 2); ?></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Summary Block -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include('includes/footer.php'); ?>
<script>
function updateQty(change) {
    // Assuming there is only one set of elements per .cart-qty-plus-minus
    var container = event.target.closest('.cart-qty-plus-minus'); // Find the closest container
    var qtyInput = container.querySelector('.cart-qty-input');
    var currentQty = parseInt(qtyInput.value, 10);
    var newQty = currentQty + change;

    if (newQty < 1) {
        newQty = 1;
    }

    qtyInput.value = newQty;

    var product_id = container.querySelector('.product-id').value;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'update_cart_qty.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (xhr.status === 200) {
            if (xhr.responseText === 'updated') {
                window.location.reload();
            }
        }
    };
    xhr.send('product_id=' + encodeURIComponent(product_id) + '&qty=' + encodeURIComponent(newQty));
}
</script>

