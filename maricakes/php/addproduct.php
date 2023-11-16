<?php
include_once "db.php";

$sql = "SELECT * FROM products";
$all_products = $conn->query($sql);

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/addproduct.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>MariCakes</title>
  <link rel="icon" type="image/x-icon" href="../assets/img/logo.png">
</head>

<body>
  <div class="navbar">
    <div class="navbar-left">
      <img src="../assets/img/logo.png">
      <h2>MariCakes</h2>
      <div class="search-bar">
        <form action="search.php" id="search-form" method="POST">
          <input type="text" placeholder="Search..." name="query">
          <button type="submit">Search</button>
        </form>
      </div>
    </div>
    <div class="navbar-right">
      <button type="submit" id="myBtn">Add Product</button>&nbsp;&nbsp;
      <div class="message-icon">
        <i class="fa fa-envelope-o"></i>
      </div>
      <div class="notification-icon">
        <i class="fa fa-bell-o"></i>
      </div>
    </div>
  </div>
  </div>

  <div class="container">
    <?php 
    include('search.php');
    ?>
  </div>


  <!-- The Modal -->
  <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <h3>Add Prodcut</h3>
      <p>Think of a good product name :D</p>

      <div class="container-modal">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
          <label for="fname">Product name</label>
          <input type="text" id="pro_name" name="pro_name" placeholder="Enter Product name">

          <label for="lname">Price</label>
          <input type="number" id="pro_price" name="pro_price" placeholder="Enter Product Price">

          <input type="file" name="FileUpload" id="fileInput" accept="image/*">

          <input type="submit" value="Submit" name="UploadImg">
        </form>
      </div>
    </div>

  </div>
  <script>
        $(document).ready(function() {
            // Handle the search form submission using AJAX
            $('#search-form').submit(function(e) {
                e.preventDefault(); // Prevent the form from submitting the traditional way

                // Get the form data
                var formData = $(this).serialize();

                // Perform an AJAX request to the search.php file
                $.ajax({
                    type: 'POST',
                    url: 'search.php',
                    data: formData,
                    success: function(response) {
                        // Update the content-items div with the search results
                        $('#product-list').html(response);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="../javascript/function.js"></script>
  <script src="../javascript/grab-id.js"></script>

  <script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function () {
      modal.style.display = "block";
    }
    span.onclick = function () {
      modal.style.display = "none";
    }
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

</body>




</html>