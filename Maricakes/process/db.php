
<?php
    $host = "localhost";
    $root = "root";
    $password = "";
    $db = "maricakes";
    
    $conn = mysqli_connect($host, $root, $password, $db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>