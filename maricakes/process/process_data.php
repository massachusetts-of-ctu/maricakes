<?php
include_once "../process/db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $json_data = $_POST["receiptData"];

    $receipt_data = json_decode($json_data, true);

    $soldTo = $conn->real_escape_string($receipt_data['soldTo']);
    $cId = (rand(100, 900));
    
    if (empty($soldTo)) {
        $soldTo = "Not Set";
    }
    
    $sql = "INSERT INTO customers (customer_id, cname) VALUES ('$cId', '$soldTo')";
    echo "Customer Insert successful\n";
    
    if ($conn->query($sql) !== TRUE) {
        echo "Error inserting customer data: " . $conn->error;
        exit;
    }
    

        $order_id = $conn->real_escape_string($receipt_data['orNumber']);
        $grandTotal = $conn->real_escape_string($receipt_data['grandTotal']);
        $date = $conn->real_escape_string($receipt_data['date']);
        $ordID = (rand(100, 900)); 
        $sql = "INSERT INTO recent_orders (r_id, order_id, customer_id, date_created, total) 
                VALUES ('$ordID', '$order_id', '$cId', '$date', '$grandTotal')";
        echo "recent Orders successful\n";
         if ($conn->query($sql) !== TRUE) {
            echo "Error inserting payment data: " . $conn->error;
            $conn->close();
            exit;
        }

        foreach ($receipt_data['products'] as $product) {
            $productName = $conn->real_escape_string($product['product']);
            $productId = $conn->real_escape_string($product['id']);
            $productPrice = $conn->real_escape_string($product['price']);
            $productQty = $conn->real_escape_string($product['quantity']);
            $proPrice = $conn->real_escape_string($product['remove']);
            $productTotal = $conn->real_escape_string($receipt_data['totalPrice']);
            $order_id = $conn->real_escape_string($receipt_data['orNumber']);
            $tax = $conn->real_escape_string($receipt_data['taxAmount']);
            $discount = $conn->real_escape_string($receipt_data['discount']);
            $grandTotal = $conn->real_escape_string($receipt_data['grandTotal']);
            $date = $conn->real_escape_string($receipt_data['date']);
            $time = $conn->real_escape_string($receipt_data['time']);
            $casher = $conn->real_escape_string($receipt_data['cashier']);
            $oror = $conn->real_escape_string($receipt_data['orNumber']);
            
            $sql = "INSERT INTO `order_history`(`order_id`, `product_ids`, `qty`, `price`, `pro_total`, `ornum`, `subtotal`, `proname`, `tax`, `discount`, `total`, `customer_id`, `date`, `time`, `cashier`) 
                                        VALUES ('$order_id', '$productId', '$productQty', '$productPrice', '$proPrice', '$oror', '$productTotal', '$productName', '$tax', '$discount', '$grandTotal', '$cId', '$date', '$time', '$casher')";
            echo "Order History Successful \n";
            if ($conn->query($sql) !== TRUE) {
                echo "Error inserting product data: " . $conn->error;
                exit;
            }
        }

     $conn->close();

     echo "OMG!\n";
 } else {
    header("Location: ..\process\logout.php");
    header("");
}

?>
