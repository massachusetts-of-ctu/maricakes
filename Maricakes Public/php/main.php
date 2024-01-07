<?php
session_start();
include_once "../process/db.php";
?>

<?php
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
        <link rel="stylesheet" href="../assets/css/screen.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../assets/css/receipt.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
         <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <title>MariCakes | Pre-Order</title>
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
            
               <h2>|&nbsp;&nbsp;&nbsp; Online Pre-order</h2>
               
            </form>
         </div>
      </div>
      <div class="navbar-right">
         <p class="howto">How to order?</p> &nbsp;&nbsp;
            <div class="user-icon">
                <i class="bi bi-info-circle" id="user"></i>
                </div>
            </div>
      </div>
   </div>
   </div>

   <div class="container">
      <?php include('../process/products.php'); ?>
   </div>


   <div class="content-sidebar summary">
    <div class="back-img order-summary">
        <img src="../assets/img/mariCakes.png">   
        <table style="width:100%">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>ID</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody id="order-summary-body">
            </tbody>
        </table>
        <p id="error-message" class="error-message"></p>
    </div>


      <hr>
      <div class="bill-cont">
      <div class="bill">
         <label for="customer">Customer Name:</label>
         <input type="text" id="customer" class="customer-input" required>
      </div>
      <div class="bill">
         <label>Total Price:</label>
         <span class="sign1">₱<span id="total-price">0.00</span></span>
      </div>
      <div class="bill tax">
         <label>Tax (3%):</label>
         <span class="sign2">₱<span id="tax-amount">0.00</span></span>
      </div>
      <div class="bill" style="display:none;">
         <label for="discount">Discount (%):</label>
         <input disabled type="number" id="discount" class="discount-input" min="0" step="1">
         &nbsp; &nbsp;<p>Disabled</p>
      </div>
      <div class="bill gtotal">
         <label>Grand Total:</label>
         <span class="sign3">₱<span id="grand-total">0.00</span></span>
      </div>
      <div class="bill">
         <label for="cash">Cash:</label>
         <input type="number" id="cash" class="cash-input">
         <button id="commit-button" class="commit-button">Commit</button>
      </div>
      <div class="bill">
         <label>Change:</label>
         <span class="sign4"><span id="change-sign">₱</span><span id="change">0.00</span></span>
      </div>
      <div class="below-button">
         <button class="confirm" id="confirm-button" onclick="display()" disabled>Confirm</button>
         <button class="reset" id="reset-button">Reset</button>
      </div>
      </div>

   </div>

   </div>

   <?php
   include('../process/modal.php');
   ?>
   <script src="../javascript/function.js"></script>
   <script src="../javascript/preload.js"></script>
   <script src="../javascript/insert_transact.js"></script>
   <script>
      function display() {
         var customerName = document.getElementById("customer").value;
         document.getElementById('sold-modal').innerText = customerName;
      } 
   </script>
</body>
</html>