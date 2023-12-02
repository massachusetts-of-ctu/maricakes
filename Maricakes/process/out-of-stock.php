<?php
include_once "../process/db.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['product_ids'];
    $sql = "UPDATE `products` SET `availability`='Not Available' WHERE pro_id = $productId";
    if ($conn->query($sql) === TRUE) {
        echo "Product set to NOT AVAILABLE";
    } 
} else {
    echo 'Error.';
}
?>