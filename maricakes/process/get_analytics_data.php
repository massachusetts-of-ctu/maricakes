<?php
date_default_timezone_set('Asia/Manila');
$date = date("d-m-Y");
$sql = "SELECT total FROM recent_orders WHERE DATE(date_created) = ?";
$stmt = $conn->prepare($sql);

$stmt->bind_param("s", $date);

$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $totalSum = 0;

    while ($row = $result->fetch_assoc()) {
        $totalSum += $row['total'];
    }
    echo '<div class="box box-1"><p> Today Total Sales </p> ₱' . $totalSum . ' <hr class="line"> </div>';

} else {
    echo '<div class="box box-1"><p> Today Total Sales </p> ₱ 0 <hr class="line"> </div>';
}
$stmt->close();