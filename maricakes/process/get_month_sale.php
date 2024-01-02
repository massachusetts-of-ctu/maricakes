<?php
date_default_timezone_set('Asia/Manila');
$month = date("m");
$sql = "SELECT total FROM recent_orders WHERE MONTH(STR_TO_DATE(date_created, '%d/%m/%Y')) = ?";
$stmt = $conn->prepare($sql);

$stmt->bind_param("i", $month);

$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $totalSum1 = 0;

    while ($row = $result->fetch_assoc()) {
        $totalSum1 += $row['total'];
    }
    echo '<div class="box box-3"><p> Total Sales For the Month of ' . date("F") . '</p> ₱' . $totalSum1 . ' <hr class="line"> </div>';

} else {
    echo '<div class="box box-3"><p> Total Sales For the Month of ' . date("F") . '</p> ₱ 0 <hr class="line"> </div>';
}

$stmt->close();
?>
