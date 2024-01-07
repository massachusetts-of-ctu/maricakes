<?php
include_once "../process/db.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['product_id'];
    $sql = "DELETE FROM `pre_order` WHERE order_id = $productId";
    if ($conn->query($sql) === TRUE) {
        echo "Pre-Order DELETED";
      }
} else {
    echo 'Error.';
}
?>
