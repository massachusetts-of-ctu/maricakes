<?php
include_once "../process/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productId = $_POST["productId"];

    $sql = "SELECT * FROM order_history WHERE order_id = $productId";
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
