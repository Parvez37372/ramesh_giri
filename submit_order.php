<?php
session_start();

require_once __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendEmail($recipient, $subject, $body) {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = 0; // Set to 0 in production to disable debug output
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Your SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'jaiswalsangita97@gmail.com'; // SMTP username
        $mail->Password   = 'slbjgbdxzwwzhfyb'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom('websinfotech5@gmail.com', 'Ramesh Giri');
        $mail->addAddress($recipient); // Recipient email address

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $body;

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

if (isset($_POST['orderpay']) && $_POST['orderpay'] == 'place_order') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postalcode = $_POST['postalcode'];
    
    $firstname2 = $_POST['firstname2'];
    $lastname2 = $_POST['lastname2'];
    $phone2 = $_POST['phone2'];
    $email2 = $_POST['email2'];
    $address2 = $_POST['address2'];
    $city2 = $_POST['city2'];
    $state2 = $_POST['state2'];
    $postalcode2 = $_POST['postalcode2'];

    $cart_items = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
    
    $message = "
    <html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                color: #333;
                line-height: 1.6;
            }
            h2 {
                color: #444;
            }
            .order-details {
                padding: 10px;
                margin-bottom: 20px;
                border: 1px solid #ddd;
                border-radius: 5px;
                background-color: #f9f9f9;
            }
            .order-details table {
                width: 100%;
                border-collapse: collapse;
            }
            .order-details table, .order-details th, .order-details td {
                border: 1px solid #ddd;
            }
            .order-details th, .order-details td {
                padding: 8px;
                text-align: left;
            }
            .order-details img {
                width: 50px;
                height: auto;
            }
            .order-details th {
                background-color: #f2f2f2;
            }
            
            .user-details {
                padding: 7px 20px;
                margin-bottom: 20px;
                border: 1px solid #ddd;
                border-radius: 5px;
                background-color: #f5fff6;
            }
            .user-details {
                background-color: #f5fff6;
            }
            .user-details2 {
                padding: 7px 20px;
                margin-bottom: 20px;
                border: 1px solid #ddd;
                border-radius: 5px;
                background-color: #f9f9f9;
            }
            .user-details2 {
                background-color: #f9f9f9;
            }
            
        </style>
    </head>
    <body>
        
        <div class='user-details'>
            <h3>Billing Details</h3>
            <p><strong>Name:</strong> $firstname $lastname</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Address:</strong> $address $city $state <br> $postalcode</p>
        </div>
        
        <div class='user-details2'>
            <h3>Shipping Details</h3>
            <p><strong>Name:</strong> $firstname2 $lastname2</p>
            <p><strong>Phone:</strong> $phone2</p>
            <p><strong>Email:</strong> $email2</p>
            <p><strong>Address:</strong> $address2 $city2 $state2 <br> $postalcode2</p>
        </div>

        
        <div class='order-details'>
            <h3>Cart Items</h3>
            <table>
                <thead>
                    <tr>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>";
                    foreach ($cart_items as $item) {
                        $item_total = floatval($item['price']) * intval($item['qty']);
                        $message .= "
                        <tr>
                            <td><img src='" . htmlspecialchars($item['image']) . "' alt='" . htmlspecialchars($item['title']) . "'></td>
                            <td>" . htmlspecialchars($item['title']) . "</td>
                            <td>₹ " . htmlspecialchars($item['price']) . "</td>
                            <td>" . htmlspecialchars($item['qty']) . "</td>
                            <td>₹ " . number_format($item_total, 2) . "</td>
                        </tr>";
                    }
    $message .= "
                </tbody>
            </table>
        </div>
    </body>
    </html>
    ";
    
    // Send the email
    if (sendEmail($email, "Your Order Details", $message)) {
        unset($_SESSION['cart']); 
        session_destroy(); 
        echo 'success';
    } else {
        echo 'error';
    }
}
?>
