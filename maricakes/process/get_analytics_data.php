<?php
date_default_timezone_set('Asia/Manila');
$today = date("d");
$sql = "SELECT total FROM recent_orders WHERE DAY(STR_TO_DATE(date_created, '%d/%m/%Y')) = ?";
$stmt = $conn->prepare($sql);

$stmt->bind_param("s", $today);

$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $totalSum = 0;

    while ($row = $result->fetch_assoc()) {
        $totalSum += $row['total'];
    }
    echo '<div class="box box-1"><p> Total Sales Today</p> ₱' . $totalSum . ' <hr class="line"> </div>';
} else {
    echo '<div class="box box-1"><p> Total Sales Today </p> ₱ 0 <hr class="line"> </div>';
}

$stmt->close();
?>
