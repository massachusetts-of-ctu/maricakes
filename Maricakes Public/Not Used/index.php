<?php
include_once "db.php";
include_once "header.php";

$sql = "SELECT * FROM products";
$all_products = $conn->query($sql);

?>

<body>
   <div class="navbar">
       <div class="navbar-left">
             <img src="../assets/img/logo.png">
          <h2>MariCakes</h2>
           <div class="search-bar">
	    <input type="text" placeholder="Search...">
            <i class="fa fa-search"></i>
	  </div>
       </div>
       <div class="navbar-right">
 	   <div class="message-icon">
	    <i class="fa fa-envelope-o"></i>
          </div>
       	  <div class="notification-icon">
	            <i class="fa fa-bell-o"></i>
          </div>
         
          </div> 
       </div>
   </div>
<?php
include('products.php');
?>
    <div class="content-sidebar summary">
         <div class="back-img order-summary">
            <img src="../assets/img/mariCakes.png">
            <table>
               <thead>
                  <tr>
                     <th>Product</th>
                     <th>Price</th>
                     <th>Quantity</th>
                     <th>Option</th>
                  </tr>
               </thead>
               <tbody id="order-summary-body">
            </tbody>
            </table>
            <p id="error-message" class="error-message"></p>
    </div>
         
         
         <hr>
         <div class="bill">
            <label>Total Price:</label>
            <span class="sign1">₱<span id="total-price">0.00</span></span>
         </div>
         <div class="bill">
            <label>Tax (3%):</label>
            <span class="sign2">₱<span id="tax-amount">0.00</span></span>
         </div>
         <div class="bill">
            <label for="discount">Discount (%):</label>
            <input type="number" id="discount" class="discount-input" min="0" step="1">
         </div>
         <div class="bill">
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
            <button class="confirm" id="confirm-button">Confirm</button>
            <button class="reset" id="reset-button">Reset</button>
         </div>
    </div>
    
</div>

<?php
include('modal.php');
?>

<script src="../javascript/function.js"></script>
</body>




</html>