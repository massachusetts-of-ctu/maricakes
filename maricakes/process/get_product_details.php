<?php
include_once "../process/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productId = $_POST["productId"];

    $sql = "SELECT * FROM products WHERE pro_id = $productId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $productDetails = $result->fetch_assoc();

        $productDetails['image_url'] = '../assets/img/' . $productDetails['pro_img'];

        echo json_encode($productDetails);
    } else {
        echo json_encode(['error' => 'Product not found']);
    }
} else {
    echo json_encode(['error' => 'Invalid request']);
}
?>
