<?php
include_once "../process/db.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['product_id'];
    $sql = "DELETE FROM `recent_orders` WHERE order_id = $productId";
    if ($conn->query($sql) === TRUE) {
        echo "Recent Transaction DELETED";
      }
} else {
    echo 'Error.';  
}
?>
