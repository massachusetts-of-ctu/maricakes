<?php
date_default_timezone_set('Asia/Manila');
$date = date("d");
$sql = "SELECT COUNT(*) AS customer_count FROM recent_orders WHERE DAY(STR_TO_DATE(date_created, '%d/%m/%Y')) = ?";
$stmt = $conn->prepare($sql);

$stmt->bind_param("s", $date);

$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $customerCount = $row['customer_count'];

    echo '<div class="box box-2"><p> Today\'s Total Number of Customers </p> ' . $customerCount . ' <hr class="line"> </div>';
} else {
    echo ' <hr class="line">0 results';
}

$stmt->close();
?>
