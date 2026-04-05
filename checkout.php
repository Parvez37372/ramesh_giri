<?php include('includes/header.php');
include('config.php');

?>

<style>
#loader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); 
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999; 
}

.spinner {
    border: 8px solid rgba(0, 0, 0, 0.1); 
    border-radius: 50%;
    border-top: 8px solid #fff; 
    width: 50px;
    height: 50px;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.ec-checkout-title {
    font-size: 20px;
    margin-bottom: 15px; /* Spacing below the heading */
}

.radio-group {
    display: flex;
    justify-content: space-around;
}

.radio-option {
    display: flex;
    align-items: center;
    justify-content: center;
}

.radio-option input[type="radio"] {
    margin-right: 10px; /* Add space between radio and label */
}

.ec-checkout-wrap .ec-check-bill-form .form-select{
    background-color: transparent;
    border: 1px solid #ededed !important;
    color: #444444;
    font-size: 14px;
    margin-bottom: 26px;
    padding: 0 15px;
    width: 100%;
    outline: none;
}

</style>

    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Checkout</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="ec-breadcrumb-item active">Checkout</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Ec checkout page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
            <div class="ec-checkout-leftside col-lg-12 col-md-12 ">
                    <!-- checkout content Start -->
                    <div class="ec-checkout-content">
                        <div class="ec-checkout-inner">
                            <div class="ec-checkout-wrap margin-bottom-30 padding-bottom-3">
                                <div class="ec-checkout-block ec-check-bill">
                                    <h3 class="ec-checkout-title" style="padding-bottom:20px;">Billing Details</h3>
                                    <div class="ec-bl-block-content">
                                        <div class="ec-check-bill-form">
                                        <form id="order-form" method="post">
                                            <!-- Billing Details -->
                                          
                                            <div class="ec-bill-half col-lg-3 mx-3">
                                                <label>First Name *</label>
                                                <input type="text" id="billing-firstname" name="firstname" placeholder="Enter your first name" required>
                                            </div>
                                            <div class=" ec-bill-half col-lg-3 mx-3" >
                                                <label>Last Name *</label>
                                                <input type="text" id="billing-lastname" name="lastname" placeholder="Enter your last name" required>
                                            </div>
                                            <div class=" ec-bill-half col-lg-3 mx-3">
                                                <label>Phone *</label>
                                                <input type="text" id="billing-phone" name="phone" placeholder="Phone Number" required>
                                            </div>
                                          
                                        
                                            <div class="ec-bill-half col-lg-3 mx-3">
                                                <label>Email *</label>
                                                <input type="email" id="billing-email" name="email" placeholder="Enter email" required>
                                            </div>
                                            
                                            <div class="col-lg-3 mx-3">
                                                <label>Address *</label>
                                                <input type="text" id="billing-address" name="address" placeholder="Address" required>
                                            </div>
                                            <div class="ec-bill-half col-lg-3 mx-3">
                                                <label>State</label>
                                                <input type="text" name="state" value="Delhi" readonly>
                                            </div>
                                          
                                            <div class="col-lg-4 ec-bill-half mx-3">
                                                <label>City</label>
                                                <select class="form-select" aria-label="Default select example" name="city" id="citySelect">
                                                    <option value="Central Delhi" selected>Central Delhi</option>
                                                    <option value="East Delhi">East Delhi</option>
                                                    <option value="New Delhi">New Delhi</option>
                                                    <option value="North Delhi">North Delhi</option>
                                                    <option value="South Delhi">South Delhi</option>
                                                    <option value="West Delhi">West Delhi</option>
                                                </select>
                                            </div>
                                        
                                            <div class="col-lg-4 ec-bill-half mx-3">
                                                <label>Post Code *</label>
                                                <select class="form-select" aria-label="Default select example" name="postalcode" id="postalcodeSelect">
                                                    <!-- Options will be populated dynamically -->
                                                </select>
                                            </div>
                                      
                                       
                                            <!-- Shipping Details -->
                                             <div class="container">
            <div class="row">
            <div class="ec-checkout-leftside col-lg-8 col-md-12 ">
                                            <div class="shipping-details-container  mt-3">
                                                <h3 class="ec-checkout-title"><b>Shipping Details</b></h3>
                                                <div class="radio-group">
                                                    <div class="radio-option">
                                                        <input type="radio" id="new-shipping" name="shipping" value="new" style="height: 22px !important;" disabled>
                                                        <label for="new-shipping" class="">New Address</label>
                                                    </div>
                                                    <div class="radio-option">
                                                        <input type="radio" id="same-shipping" name="shipping" value="same" style="height: 22px !important;" disabled>
                                                        <label for="same-shipping">Same as Billing</label>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div class="row">
    <div class="ec-bill-wrap ec-bill-half col-lg-6" style="display: inline-block;">
        <label>First Name *</label>
        <input type="text" id="shipping-firstname" name="firstname2" placeholder="Enter your first name" required>
    </div>
    <div class="ec-bill-wrap ec-bill-half col-lg-6" style="display: inline-block;">
        <label>Last Name *</label>
        <input type="text" id="shipping-lastname" name="lastname2" placeholder="Enter your last name" required>
    </div>

                                            <div class="ec-bill-wrap ec-bill-half col-lg-6">
                                                <label>Phone *</label>
                                                <input type="text" id="shipping-phone" name="phone2" placeholder="Phone Number" required>
                                            </div>
                                            <div class="ec-bill-wrap ec-bill-half col-lg-6">
                                                <label>Email *</label>
                                                <input type="email" id="shipping-email" name="email2" placeholder="Enter email" required>
                                            </div>
                                            </div>
                                            <div class="">
                                                <label>Address *</label>
                                                <input type="text" id="shipping-address" name="address2" placeholder="Address" required>
                                            </div>
                                            <div class="row">
                                            <div class="ec-bill-wrap ec-bill-half col-lg-6">
                                                <label>State</label>
                                                <input type="text" name="state2" value="Delhi" readonly>
                                            </div>
                                            <div class="ec-bill-wrap ec-bill-half col-lg-6">
                                                <label>City</label>
                                                <select class="form-select" aria-label="Default select example" name="city2" id="citySelect2">
                                                    <option value="Central Delhi" selected>Central Delhi</option>
                                                    <option value="East Delhi">East Delhi</option>
                                                    <option value="New Delhi">New Delhi</option>
                                                    <option value="North Delhi">North Delhi</option>
                                                    <option value="South Delhi">South Delhi</option>
                                                    <option value="West Delhi">West Delhi</option>
                                                </select>
                                            </div>
                                        </div>
                                            <div class=" ec-bill-half">
                                                <label>Post Code *</label>
                                                <select class="form-select" aria-label="Default select example" name="postalcode2" id="postalcodeSelect2">
                                                    <!-- Options will be populated dynamically -->
                                                </select>
                                            </div>
                                        
                                            <input type="hidden" name="orderpay" value="place_order">
                                            <div class="ec-bill-wrap" style="text-align: right;">
                                                <button type="submit" id="place-order-btn" class="btn btn-primary">Place Order</button>
                                            </div>
                                        </form>


                                        <div id="message" style="display:none;z-index:444; position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%); background-color: lightgreen; color: white; padding: 10px; opacity: 0.9;">
                                            Order submitted successfully!
                                        </div>


                                        </div>

                                    <!--</div>-->
                                <!--</div>-->

                            <!--</div>-->
                            
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
                <!-- Sidebar Area Start -->
            <div class="ec-checkout-rightside col-lg-4 col-md-12">
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Summary Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Order Items</h3>
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
                            <div class="ec-sb-title" style="padding-top:15px">
                                <h3 class="ec-sidebar-title">Cart Details</h3>
                            </div>
                            <div class="ec-sb-block-content">
                                <div class="ec-checkout-summary">
                                    <div>
                                        <span class="text-left">Sub-Total</span>
                                        <span class="text-right">₹ <?php echo number_format($subtotal, 2); ?></span>
                                    </div>
                                    <div>
                                        <span class="text-left">Delivery Charges</span>
                                        <span class="text-right">₹  
                                            <?php 
                                                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                                    echo "50.00";
                                                } else {
                                                    echo "0.00";
                                                }
                                            ?>
                                        </span>
                                    </div>
                                    <div class="ec-checkout-summary-total">
                                        <span class="text-left">Total Amount</span>
                                        <span class="text-right">₹ <?php echo number_format($total_amount, 2); ?></span>
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
    <!-- Loader HTML -->
<div id="loader" style="display: none;">
    <div class="spinner"></div>
</div>

 <?php include('includes/footer.php') ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>
$(document).ready(function() {
    function loadPostalCodes(selectedCity) {
        $.ajax({
            url: 'get_postal_codes.php',
            type: 'POST',
            data: { city: selectedCity },
            success: function(response) {
                var data = JSON.parse(response);

                $('#postalcodeSelect').empty();

                if (data.length > 0) {
                    $.each(data, function(index, item) {
                        $('#postalcodeSelect').append('<option value="' + item.Pincode + '">' + item.Pincode + '</option>');
                    });
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("AJAX error: ", textStatus, errorThrown);
            }
        });
    }

    loadPostalCodes('Central Delhi');

    $('#citySelect').on('change', function() {
        var selectedCity = $(this).val();
        loadPostalCodes(selectedCity);
    });
});

$(document).ready(function() {
    function loadPostalCodes2(selectedCity) {
        $.ajax({
            url: 'get_postal_codes.php',
            type: 'POST',
            data: { city: selectedCity },
            success: function(response) {
                var data = JSON.parse(response);

                $('#postalcodeSelect2').empty();

                if (data.length > 0) {
                    $.each(data, function(index, item) {
                        $('#postalcodeSelect2').append('<option value="' + item.Pincode + '">' + item.Pincode + '</option>');
                    });
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("AJAX error: ", textStatus, errorThrown);
            }
        });
    }

    loadPostalCodes2('Central Delhi');

    $('#citySelect2').on('change', function() {
        var selectedCity = $(this).val();
        loadPostalCodes2(selectedCity);
    });
});
 
     // Enable radio buttons and shipping fields after entering billing details
    document.getElementById('billing-firstname').addEventListener('input', enableShippingFields);
    document.getElementById('billing-lastname').addEventListener('input', enableShippingFields);
    document.getElementById('billing-phone').addEventListener('input', enableShippingFields);

    function enableShippingFields() {
        const firstname = document.getElementById('billing-firstname').value;
        const lastname = document.getElementById('billing-lastname').value;
        const phone = document.getElementById('billing-phone').value;

        if (firstname && lastname && phone) {
            document.getElementById('new-shipping').disabled = false;
            document.getElementById('same-shipping').disabled = false;
        } else {
            document.getElementById('new-shipping').disabled = true;
            document.getElementById('same-shipping').disabled = true;
        }
    }

    // Fill shipping fields with billing details if "Same as Billing" is selected
    document.getElementById('same-shipping').addEventListener('change', function () {
        if (this.checked) {
            document.getElementById('shipping-firstname').value = document.getElementById('billing-firstname').value;
            document.getElementById('shipping-lastname').value = document.getElementById('billing-lastname').value;
            document.getElementById('shipping-phone').value = document.getElementById('billing-phone').value;
            document.getElementById('shipping-email').value = document.getElementById('billing-email').value;
            document.getElementById('shipping-address').value = document.getElementById('billing-address').value;
            document.getElementById('shipping-city').value = document.getElementById('billing-city').value;

            // Enable shipping fields
            document.getElementById('shipping-firstname').disabled = false;
            document.getElementById('shipping-lastname').disabled = false;
            document.getElementById('shipping-phone').disabled = false;
            document.getElementById('shipping-email').disabled = false;
            document.getElementById('shipping-address').disabled = false;
            document.getElementById('citySelect2').disabled = false;
        }
    });

    // Clear shipping fields if "New Address" is selected
    document.getElementById('new-shipping').addEventListener('change', function () {
        if (this.checked) {
            document.getElementById('shipping-firstname').value = '';
            document.getElementById('shipping-lastname').value = '';
            document.getElementById('shipping-phone').value = '';
            document.getElementById('shipping-email').value = '';
            document.getElementById('shipping-address').value = '';
            document.getElementById('citySelect2').value = '';

            // Enable shipping fields
            document.getElementById('shipping-firstname').disabled = false;
            document.getElementById('shipping-lastname').disabled = false;
            document.getElementById('shipping-phone').disabled = false;
            document.getElementById('shipping-email').disabled = false;
            document.getElementById('shipping-address').disabled = false;
            document.getElementById('citySelect2').disabled = false;
        }
    });
</script>
 <script>
$(document).ready(function() {
    $('#order-form').on('submit', function(e) {
        e.preventDefault(); 

        $('#place-order-btn').prop('disabled', true);
        $('#loader').fadeIn(); // Show the loader

        $.ajax({
            url: 'submit_order.php',
            type: 'POST',
            data: $(this).serialize(), 
            success: function(response) {
                $('#loader').fadeOut(); // Hide the loader
                if (response === 'success') {
                    $('#message').fadeIn();
                    setTimeout(function() {
                        $('#message').fadeOut();
                        window.location.href = 'thanku.php';
                    }, 3000);
                } else {
                    $('#place-order-btn').prop('disabled', false);
                }
            },
            error: function() {
                $('#loader').fadeOut(); // Hide the loader on error
                $('#place-order-btn').prop('disabled', false);
            }
        });
    });
});
</script>

