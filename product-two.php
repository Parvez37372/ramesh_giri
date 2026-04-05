<?php include('includes/header.php') ?>
<style>
    .btn {
        background-color: #5b8c51;
        color: white;
        border-radius: 5px;
    }

    .btn:hover {
        background: gray;
        color: white;
    }
    .cart-qty-plus-minusps {
    border: 1px solid #ededed;
    display: inline-block;
    height: 40px;
    overflow: hidden;
    padding: 0;
    position: relative;
    width: 100px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin-right:20px;
}
.cart-qty-plus-minusps input {
    background: transparent none repeat scroll 0 0;
    border: medium none;
    color: #444444;
    float: left;
    font-size: 14px;
    height: auto;
    margin: 0;
    padding: 0;
    text-align: center;
    width: 40px;
    outline: none;
    font-weight: 600;
    line-height: 38px;
}
</style>
<!-- Ec breadcrumb start -->
<div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row ec_breadcrumb_inner">
                    <div class="col-md-6 col-sm-12">
                        <h2 class="ec-breadcrumb-title">Single Products</h2>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <!-- ec-breadcrumb-list start -->
                        <ul class="ec-breadcrumb-list">
                            <li class="ec-breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="ec-breadcrumb-item active">Products</li>
                        </ul>
                        <!-- ec-breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ec breadcrumb end -->

<!-- Sart Single product -->
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-pro-rightside ec-common-rightside col-lg-12 order-lg-last col-md-12 order-md-first">

                <!-- Single product content Start -->
                <div class="single-pro-block">
                    <div class="single-pro-inner">
                        <div class="row">
                            <div class="single-pro-img">
                                <div class="single-product-scroll">
                                    <div class="single-product-cover">
                                        <div class="single-slide zoom-image-hover">
                                            <img class="img-responsive" src="assets/images/product-image/7_1.jpg"
                                                alt="">
                                        </div>
                                        <div class="single-slide zoom-image-hover">
                                            <img class="img-responsive" src="assets/images/product-image/7_1.jpg"
                                                alt="">
                                        </div>
                                        <div class="single-slide zoom-image-hover">
                                            <img class="img-responsive" src="assets/images/product-image/7_1.jpg"
                                                alt="">
                                        </div>
                                        <div class="single-slide zoom-image-hover">
                                            <img class="img-responsive" src="assets/images/product-image/7_1.jpg"
                                                alt="">
                                        </div>
                                        <div class="single-slide zoom-image-hover">
                                            <img class="img-responsive" src="assets/images/product-image/7_1.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="single-nav-thumb">
                                        <div class="single-slide">
                                            <img class="img-responsive" src="assets/images/product-image/7_2.jpg"
                                                alt="">
                                        </div>
                                        <div class="single-slide">
                                            <img class="img-responsive" src="assets/images/product-image/7_2.jpg"
                                                alt="">
                                        </div>
                                        <div class="single-slide">
                                            <img class="img-responsive" src="assets/images/product-image/7_2.jpg"
                                                alt="">
                                        </div>
                                        <div class="single-slide">
                                            <img class="img-responsive" src="assets/images/product-image/7_2.jpg"
                                                alt="">
                                        </div>
                                        <div class="single-slide">
                                            <img class="img-responsive" src="assets/images/product-image/7_2.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-pro-desc">
                                <div class="single-pro-content">
                                    <h5 class="ec-single-title" id="product-title">Full Sleeve Shirt</h5>
                                    <div class="ec-single-rating-wrap">
                                        <div class="ec-single-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star-o"></i>
                                        </div>
                                        <span class="ec-read-review"><a href="#ec-spt-nav-review">Be the first to
                                                review this product</a></span>
                                    </div>
                                    <div class="ec-single-desc">A full-sleeve shirt covers the entire arm, offering style and versatility. Suitable for formal and casual wear, it provides added protection against sun or cool weather while maintaining a polished look.</div>

                                    <div class="ec-single-price-stoke">
                                        <div class="ec-single-price">
                                            <span class="ec-single-ps-title">As low as</span>
                                            <span class="new-price" id="product-price">Rs. 349.00</span>
                                        </div>
                                    </div>
                                    <div class="ec-single-qty">
                                        <?php
                                            $product_id = 2; 
                                            $product_in_cart = false;
                                            if (isset($_SESSION['cart'])) {
                                                foreach ($_SESSION['cart'] as $item) {
                                                    if ($item['id'] == $product_id) {
                                                        $product_in_cart = true;
                                                        break;
                                                    }
                                                }
                                            }
                                        ?>
                                        <?php if ($product_in_cart): ?>
                                            <div class="cart-qty-plus-minusps">
                                                <button type="button" class="qty-minus" onclick="updateQty(-1)">-</button>
                                                <input class="cart-plus-minus" type="text" id="cart-qty-input2" name="cartqtybutton" value="<?php echo htmlspecialchars($item['qty']); ?>" readonly />
                                                <button type="button" class="qty-plus" onclick="updateQty(1)">+</button>
                                                <input type="hidden" id="product-id2" value="<?= $product_id; ?>" />
                                            </div>
                                        <a href="cart.php" class="btn btn-success">Go to Cart</a>

                                        <?php else: ?>
                                        <div class="qty-plus-minus">
                                            <input class="qty-input" type="text" id="product-qty" name="ec_qtybtn" value="1" />
                                        </div>
                                            <input type="hidden" id="product1" value="2">
                                            <button class="btn btn-primary" id="add-to-cart-btn">Add To Cart</button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Single product content End -->
                <!-- Single product tab start -->
                <div class="ec-single-pro-tab">
                    <div class="ec-single-pro-tab-wrapper">
                        <div class="ec-single-pro-tab-nav">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <button class="btn">Quick View</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content  ec-single-pro-tab-content">
                            <div id="ec-spt-nav-details" class="tab-pane fade show active">
                                <div class="ec-single-pro-tab-desc">
                                    <p>A full-sleeve shirt features sleeves that extend from shoulder to wrist, offering more coverage than short-sleeve or half-sleeve options. Ideal for cooler weather or formal settings, these shirts add a polished, professional look. They come in various styles and fabrics, suiting both casual and formal occasions.
                                    </p>
                                    <ul>
                                        <li>Any Product types that You want - Simple, Configurable</li>
                                        <li>Downloadable/Digital Products, Virtual Products</li>
                                        <li>Inventory Management with Backordered items</li>
                                        <li>Flatlock seams throughout.</li>
                                    </ul>
                                </div>
                            </div>
                            <div id="ec-spt-nav-review" class="tab-pane fade">
                                <div class="row">
                                    <div class="ec-t-review-wrapper">
                                        <div class="ec-t-review-item">
                                            <div class="ec-t-review-avtar">
                                                <img src="assets/images/review-image/1.jpg" alt="" />
                                            </div>
                                            <div class="ec-t-review-content">
                                                <div class="ec-t-review-top">
                                                    <div class="ec-t-review-name">Jeny Doe</div>
                                                    <div class="ec-t-review-rating">
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star-o"></i>
                                                    </div>
                                                </div>
                                                <div class="ec-t-review-bottom">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s, when an unknown
                                                        printer took a galley of type and scrambled it to make a
                                                        type specimen.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-t-review-item">
                                            <div class="ec-t-review-avtar">
                                                <img src="assets/images/review-image/2.jpg" alt="" />
                                            </div>
                                            <div class="ec-t-review-content">
                                                <div class="ec-t-review-top">
                                                    <div class="ec-t-review-name">Linda Morgus</div>
                                                    <div class="ec-t-review-rating">
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star-o"></i>
                                                        <i class="ecicon eci-star-o"></i>
                                                    </div>
                                                </div>
                                                <div class="ec-t-review-bottom">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s, when an unknown
                                                        printer took a galley of type and scrambled it to make a
                                                        type specimen.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product details description area end -->
            </div>
        </div>
    </div>
</section>
<!-- End Single product -->

<!-- Related Product Start -->
<section class="section ec-releted-product section-space-p">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2 class="ec-bg-title">Related products</h2>
                    <h2 class="ec-title">Related products</h2>
                    <p class="sub-title">Browse The Collection of Top Products</p>
                </div>
            </div>
        </div>
        <div class="row margin-minus-b-30">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                <div class="ec-product-inner">
                    <div class="ec-pro-image-outer">
                        <div class="ec-pro-image">
                            <a href="product-two.php" class="image">
                                <img class="main-image"
                                    src="assets/images/product-image/9_1.jpg" alt="Product" />
                                <img class="hover-image"
                                    src="assets/images/product-image/9_2.jpg" alt="Product" />
                            </a>
                            <span class="percentage">20%</span>
                            
                        </div>
                    </div>
                    <div class="ec-pro-content">
                        <h5 class="ec-pro-title"><a href="product-two.php">Unisex Cotton Neck Hoodie</a></h5>
                        <div class="ec-pro-rating">
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star"></i>
                        </div>
                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                        <span class="ec-price">
                            <span class="old-price">₹ 499.00</span>
                            <span class="new-price">₹ 399.00</span>
                        </span>
                        <a href="product-one.php" class="ec-single-cart">
                            <button class="btn">Quick View</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                <div class="ec-product-inner">
                    <div class="ec-pro-image-outer">
                        <div class="ec-pro-image">
                            <a href="product-three.php" class="image">
                                <img class="main-image"
                                    src="assets/images/product-image/1_1.jpg" alt="Product" />
                                <img class="hover-image"
                                    src="assets/images/product-image/1_2.jpg" alt="Product" />
                            </a>
                            <span class="flags">
                                <span class="new">New</span>
                            </span>
                        </div>
                    </div>
                    <div class="ec-pro-content">
                        <h5 class="ec-pro-title"><a href="product-three.php">Cute Baby Toy's</a></h5>
                        <div class="ec-pro-rating">
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star"></i>
                        </div>
                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                        <span class="ec-price">
                            <span class="old-price">₹ 499.00</span>
                            <span class="new-price">₹ 400.00</span>
                        </span>
                        <a href="product-three.php" class="ec-single-cart">
                            <button class="btn">Quick View</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                <div class="ec-product-inner">
                    <div class="ec-pro-image-outer">
                        <div class="ec-pro-image">
                            <a href="product-four.php" class="image">
                                <img class="main-image"
                                    src="assets/images/product-image/2_1.jpg" alt="Product" />
                                <img class="hover-image"
                                    src="assets/images/product-image/2_2.jpg" alt="Product" />
                            </a>
                            
                        </div>
                    </div>
                    <div class="ec-pro-content">
                        <h5 class="ec-pro-title"><a href="product-four.php">Jumbo Carry Bag</a></h5>
                        <div class="ec-pro-rating">
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star"></i>
                        </div>
                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                        <span class="ec-price">
                            <span class="old-price">₹ 599.00</span>
                            <span class="new-price">₹ 529.00</span>
                        </span>
                        <a href="product-four.php" class="ec-single-cart">
                            <button class="btn">Quick View</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="cart-message" style="display:none; position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%); background: green; color: white; padding: 10px; border-radius: 5px; opacity: 0.6;">
    Add to cart successfully
</div>

<!-- Related Product end -->
<?php include('includes/footer.php') ?>

<script>
document.getElementById('add-to-cart-btn').addEventListener('click', function () {
    var productId = document.getElementById('product1').value;
    var title = document.getElementById('product-title').innerText;
    var price = document.getElementById('product-price').innerText.replace('Rs. ', '').trim();
    var qty = document.getElementById('product-qty').value;
    var imageSrc = document.querySelector('.single-product-cover img').src;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'add_to_cart.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status === 200) {
            var message = document.getElementById('cart-message');
            if (xhr.responseText === 'exists') {
                // Product already exists, redirect to cart
                message.innerText = 'Already Added in Cart';
                message.style.display = 'block';
                setTimeout(function () {
                    message.style.display = 'none';
                    window.location.href = 'cart.php'; // Redirect to cart page
                }, 1000);
            } else if (xhr.responseText === 'added') {
                // Product added successfully
                message.innerText = 'Product added successfully';
                message.style.display = 'block';
                setTimeout(function () {
                    message.style.display = 'none';
                    location.reload();
                }, 1000); // Hide message after 3 seconds
            }
        }
    };
    xhr.send('product_id=' + encodeURIComponent(productId) +
             '&title=' + encodeURIComponent(title) +
             '&price=' + encodeURIComponent(price) +
             '&qty=' + encodeURIComponent(qty) +
             '&image=' + encodeURIComponent(imageSrc));
});

</script>
<script>
function updateQty(change) {
    var qtyInput = document.getElementById('cart-qty-input2');
    var currentQty = parseInt(qtyInput.value, 10);
    var newQty = currentQty + change;
    if (newQty < 1) {
        newQty = 1;
    }
    qtyInput.value = newQty;
    var product_id = document.getElementById('product-id2').value;
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