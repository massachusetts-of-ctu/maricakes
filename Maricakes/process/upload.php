<?php
include_once "../process/db.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if(isset($_POST['UploadImg'])) {
    $filename = $_FILES['FileUpload']['name'];
    $tempName = $_FILES['FileUpload']['tmp_name'];
    $productID = $_POST['productID'];
    $ProductName = $_POST['pro_name'];
    $ProductPrice = $_POST['pro_price'];

    if(isset($filename)) {
        if(!empty($filename)) {
            $location = "..\\assets\\img\\";
            $sql = "INSERT INTO `products`(`pro_name`, `pro_price`, `pro_img`, `availability`) 
                                    VALUES ('$ProductName','$ProductPrice','$filename','Not Available')";
            if(move_uploaded_file($tempName, $location.$filename)  && $conn->query($sql) === TRUE) {
                header("Location: ../php/add_product.php");
            } else {
                echo 'Failed to move the uploaded file.';
            }
        }
    }
}
}
?>
