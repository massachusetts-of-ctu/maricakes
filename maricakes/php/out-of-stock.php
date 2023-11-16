<?php
include_once "db.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['product_id'];
    $sql = "UPDATE `products` SET `availability`='no' WHERE pro_id = $productId";
    if ($conn->query($sql) === TRUE) {
        echo "Product set to OUT OF STOCK";
      }
} else {
    echo 'Error.';
}
?>
