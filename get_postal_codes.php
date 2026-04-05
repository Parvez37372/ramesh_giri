<?php
include 'config.php'; 

if (isset($_POST['city'])) {
    $city = $_POST['city'];

    $stmt = mysqli_query($con, "SELECT Pincode FROM `pincode` WHERE district = '$city'");
    
    $pincodes = [];
    while ($row = mysqli_fetch_assoc($stmt)) { 
        $pincodes[] = $row; 
    }
    
    echo json_encode($pincodes);
}
?>
