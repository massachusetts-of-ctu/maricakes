<?php
include_once "../process/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productId = $_POST["productId"];

    $sql = "SELECT oh.*, c.cname 
            FROM order_history oh
            JOIN customers c ON oh.customer_id = c.customer_id
            WHERE oh.order_id = $productId";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $productDetails = array();

        while ($row = $result->fetch_assoc()) {
            $productDetails[] = $row;
        }

        echo json_encode($productDetails);
    } else {
        echo json_encode(['error' => 'Product not found']);
    }
} else {
    echo json_encode(['error' => 'Invalid request']);
}
?>
