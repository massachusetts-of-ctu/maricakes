<?php
include_once "../process/db.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['product_id'];
    $sql = "DELETE FROM `products` WHERE pro_id = $productId";
    if ($conn->query($sql) === TRUE) {
        echo "Product DELETED";
      }
} else {
    echo 'Error.';
}
?>
