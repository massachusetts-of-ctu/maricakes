<?php
include_once "../process/db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['UpdateProduct'])) {
        $productID = $_POST['productID'];
        $ProductName = $_POST['pro_name'];
        $ProductPrice = $_POST['pro_price'];

        if (!empty($_FILES['FileUploads']['name'])) {
            $filename = $_FILES['FileUploads']['name'];
            $tempName = $_FILES['FileUploads']['tmp_name'];
            $location = "..\\assets\\img\\";

            if (move_uploaded_file($tempName, $location . $filename)) {
                $sql = "UPDATE `products` SET `pro_name`=?, `pro_price`=?, `pro_img`=? WHERE pro_id=?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssi", $ProductName, $ProductPrice, $filename, $productID);

                if ($stmt->execute()) {
                    $stmt->close();
                    header("Location: ../php/add_product.php");
                    echo 'Product Updated!';
                    exit();
                } else {
                    echo 'Failed to update the product in the database.';
                }
            } else {
                echo 'Failed to move the uploaded file.';
            }
        } else {
            $sql = "UPDATE `products` SET `pro_name`=?, `pro_price`=? WHERE pro_id=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssi", $ProductName, $ProductPrice, $productID);

            if ($stmt->execute()) {
                $stmt->close();
                header("Location: ../php/add_product.php");
                echo 'Product Updated!';
                exit();
            } else {
                echo 'Failed to update the product in the database.';
            }
        }
    }
}
?>
