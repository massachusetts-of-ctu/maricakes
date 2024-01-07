<?php
include_once "../process/db.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['product_id'];
    $sql = "INSERT INTO order_history 
            SELECT * FROM  pre_order_history WHERE order_id = $productId;";
    if ($conn->query($sql) === TRUE) {
        $sql1 = "INSERT INTO recent_orders SELECT * FROM  pre_order WHERE order_id = $productId;";
        if ($conn->query($sql1) === TRUE) {
            $sql3 = "DELETE FROM `pre_order_history` WHERE order_id = $productId;";
            if ($conn->query($sql3) === TRUE) {
                $sql4 = "DELETE FROM `pre_order` WHERE order_id = $productId";
                if ($conn->query($sql4) === TRUE) {
                    echo "Pre-Order Confirmed";
                }
            }
        }
    }
} else {
    echo 'Error.';
}
?>