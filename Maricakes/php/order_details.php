<?php
session_start();
if(isset($_SESSION['username'])) {
?>
<?php
	include_once "header.php";
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

<div class="content">
   <div class="left-sidebar"></div>
   <div class="cont-center">
      <h1>Order Details</h1>
      <div class="tables-of-order">
	<div class="left-tables">
              <table class="tbl-details">
	  	 <tr>
                    <th class="col-product">Product(s)</th>
		    <th class="col-price">Price</th>
	 	    <th class="col-qty">Quantity</th>
                 </tr>
 		 <tr>
	 	   <td class="col-product">Mois Chocolate Bento Cake</td>
		   <td class="col-price">P250.00</td>
                   <td class="col-qty">1</td>
		 </tr>
		  <tr>
	 	   <td class="col-product">Mois Chocolate Bento Cake</td>
		   <td class="col-price">P250.00</td>
                   <td class="col-qty">1</td>
		 </tr>
		  <tr>
	 	   <td class="col-product">Mois Chocolate Bento Cake</td>
		   <td class="col-price">P250.00</td>
                   <td class="col-qty">1</td>
		 </tr>
		   <tr>
	 	   <td class="col-product">Mois Chocolate Bento Cake</td>
		   <td class="col-price">P250.00</td>
                   <td class="col-qty">1</td>
		 </tr>
		  <tr>
	 	   <td class="col-product">Mois Chocolate Bento Cake</td>
		   <td class="col-price">P250.00</td>
                   <td class="col-qty">1</td>
		 </tr>
	      </table>
       </div>

       <div class="right-tables">
 	      <table class="tbl-summary">
		 <tr>
		   <th class="col-summary" colspan="2">Order Summary</th>
		 </tr>
		 <tr>
		   <td class="col-summary">Subtotal</td>
		   <td class="col-amount">P250.00</td>
		 </tr>
		 <tr>
		   <td class="col-summary">Estimated Tax</td>
		   <td class="col-amount">P10.00</td>
		 </tr>
		  <tr class="row-total">
		   <td class="col-summary">Total</td>
		   <td class="col-amount">P260.00</td>
		 </tr>
	      </table>

 	       <table class="tbl-info">
		 <tr>
		   <th class="col-left-info" colspan="2">Order Information</th>
		 </tr>
		 <tr>
		   <td class="col-left-info">Order ID</td>
		   <td class="col-right-info">20</td>
		 </tr>
		 <tr>
		   <td class="col-left-info">Name</td>
		   <td class="col-right-info">Almonds</td>
		 </tr>
		  <tr>
		   <td class="col-left-info">Phone</td>
		   <td class="col-right-info">123-456-789</td>
		 </tr>
 		  <tr>
		   <td class="col-left-info">Date</td>
		   <td class="col-right-info">11-11-23</td>
		 </tr>
		 <tr>
		   <td class="col-left-info">Time</td>
		   <td class="col-right-info">21:13:08</td>
		 </tr>
		  <tr>
		   <td class="col-left-info">Cashier</td>
		   <td class="col-right-info">Limpangog, Kembirly</td>
		 </tr>
	      </table>
        <div>
     </div>   
   </div>
 </div>
</div>
<?php
}
else {
   header("Location: ../index.php");
    exit();
}
?>