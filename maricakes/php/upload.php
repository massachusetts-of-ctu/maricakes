<?php
if(isset($_POST['UploadImg'])) {
    $filename = $_FILES['FileUpload']['name'];
    $tempName = $_FILES['FileUpload']['tmp_name'];

    if(isset($filename)) {
        if(!empty($filename)) {
            $location = "C:\\xampp\\htdocs\\maricakes\\assets\\img\\";
            if(move_uploaded_file($tempName, $location.$filename)) {
                header("Location: addproduct.php");
            } else {
                echo 'Failed to move the uploaded file.';
            }
        }
    }
}
?>
