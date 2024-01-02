<?php
session_start();
include_once "../process/db.php";
if(isset($_SESSION['username'])) {
$sql = "SELECT * FROM products";
$all_products = $conn->query($sql);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../assets/css/style_add.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../assets/css/addproduct.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../assets/css/screen.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>MariCakes | Manage Products</title>
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.png">
</head>

<body>
    <div class="load">
      <div class="load_icon"></div>
   </div>
    <div class="navbar">
      <div class="navbar-left">
         <img src="../assets/img/logo.png">
			<a href="../php/main.php">
				<h2>MariCakes </h2>
			</a>
         <div class="search-bar">
            <form id="search-form">
            
               <h3>   |   Cashier: <?php echo $_SESSION['username']; ?></h3>
               
            </form>
         </div>
      </div>
      <div class="navbar-right">
            <div class="message-icon" style="right: 20px; position:relative;">
               <i class="bi bi-messenger"></i>
            </div>
            <!-- <div class="user-icon">
                <i class="fa fa-user-o" id="user"></i>
                <div class="dropdown-cont">
                  <h3> <?php echo $_SESSION['username']; ?></h3>
                  <div class="select"><a href="../php/add_product.php"><i class="bi bi-cake"></i>Manage Products</a></div>
                  <div class="select"><a href="../php/recent_orders.php"><i class="bi bi-card-text"></i>Recent Orders</a></div>
                  <div class="select"><a href="../php/register.php"><i class="bi bi-person-add"></i>Add Account</a></div>
                  <div class="select"><a href="../process/logout.php"><i class="bi bi-box-arrow-right"></i>Log Out</a></div>
                </div> 
            </div> -->
      </div>
   </div>

    <div class="content">
        <div class="left-sidebar" style="width: 327px;">
            <div class="select"><a href="../php/main.php"><i class="bi bi-cash-coin"></i>Point of Sale</a></div>
            <div class="select"><a href="../php/add_product.php"><i class="bi bi-cake"></i>Manage Products</a></div>
            <div class="select"><a href="../php/recent_orders.php"><i class="bi bi-card-text"></i>Recent Orders</a></div>
            <div class="select"><a href="../php/register.php"><i class="bi bi-person-add"></i>Add User</a></div>
            <div class="select"><a href="../process/logout.php"><i class="bi bi-box-arrow-right"></i>Log Out</a></div>
		</div>
        <div class="cont-products">
            <h1>Products
                <span class="add-btn">
                    <button class="button" type="submit" id="myBtn">Add</button>
                </span>
            </h1>
            <table class="cont-products-table">
                <thead class="table-head">
                    <tr>
                        <th><b>Product Name</b></th>
                        <th><b>Product Price</b></th>
                        <th><b>Availability</b></th>
                        <th><b>Actions</b></th>
                    </tr>
                </thead>
                <tbody class="table-body">
                    <?php include('../process/product_list.php'); ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Add product modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3>Add Product</h3>
            <p>Think of a good product name :D</p>
            <div class="container-modal">
                <form action="../process/upload.php" method="POST" enctype="multipart/form-data">
                    <label for="pro_name">Product name</label>
                    <input type="text" id="pro_name" name="pro_name" placeholder="Enter Product name">
                    <label for="pro_price">Price</label>
                    <input type="number" id="pro_price" name="pro_price" placeholder="Enter Product Price">
                    <label for="FileUpload">Product Image</label>
                    <input type="file" name="FileUpload" id="fileInput" accept="image/*">
                    <input type="submit" value="Submit" name="UploadImg">
                </form>
            </div>
        </div>
    </div>


    <!-- Edit product modal -->
    <div class="modals" id="EditModal">
        <span onclick="closeModal()" class="close">&times;</span>
        <h3>Edit Product</h3>
        <div class="edit-content">
            <form action="../process/updateProduct.php" method="POST" enctype="multipart/form-data">
                <img src="" alt="Product Image" id="editProductImage">
                <input type="file" name="FileUploads" id="fileInputs" accept="image/*">
                <input type="text" name="pro_name" id="editProductName" placeholder="Product Name">
                <input type="number" name="pro_price" id="editProductPrice" placeholder="Product Price">
                <button type="button" class="out-of-stock" id="editOOS">Not Available</button>
                <button type="button" class="on-stock" id="editAVAIL">Available</button>
                <input type="submit" id="btn_save" value="Save" name="UpdateProduct">

                <input type="hidden" name="productID" id="productIdField">
            </form>
        </div>
    </div>
    <div class="overlay" id="overlay"></div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../javascript/edit_pro.js"></script>
    <script src="../javascript/preload.js"></script>
    <script src="../javascript/grab-id.js"></script>
    <script src="../javascript/modal.js"></script>
</body>

</html>
<?php
}
else {
   header("Location: ../index.php");
    exit(); 
}
?>