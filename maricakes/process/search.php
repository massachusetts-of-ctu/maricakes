<?php
include_once "../process/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search_query = $_POST["query"];

    $search_query = mysqli_real_escape_string($conn, $search_query);

    $sql = "SELECT * FROM products WHERE pro_name LIKE '%$search_query%'";
    $search_result = $conn->query($sql);
} else {
    $sql = "SELECT * FROM products";
    $search_result = $conn->query($sql);
}

?>

<div class="content-items" id="product-list">

<?php
$search_result_html = '';

if (mysqli_num_rows($search_result) > 0) {
    while ($row = mysqli_fetch_assoc($search_result)) {
        $search_result_html .= '<div class="item one product-card">';
        $search_result_html .= '<img src="../assets/img/' . $row["pro_img"] . '">';
        $search_result_html .= '<h4>' . $row["pro_name"] . '</h4>';
        $search_result_html .= '<p>' . $row["pro_price"] . '</p>';
        $search_result_html .= '<button class="fa fa-times out-of-stock" data-product-id="' . $row["pro_id"] . '" id="oos">&nbsp;OOS</button>';
        $search_result_html .= '<button class="fa fa-times on-stock-product" data-product-id="' . $row["pro_id"] . '" id="avail">&nbsp;AVAIL</button>';
        $search_result_html .= '<button class="fa fa-edit edit-product" data-product-id="' . $row["pro_id"] . '">&nbsp;Edit</button>';
        $search_result_html .= '<button class="fa fa-trash delete-product" data-product-id="' . $row["pro_id"] . '">&nbsp;Delete</button>';
        $search_result_html .= '</div>';
        $search_result_html .= '<script src="../javascript/grab-id.js"></script>';
    }
}

echo $search_result_html;
?>
</div>