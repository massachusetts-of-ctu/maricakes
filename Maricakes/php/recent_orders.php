<?php
session_start();
include_once "../process/db.php";
include_once "header.php";

if (isset($_SESSION['username'])) {

	$sql = "SELECT * FROM recent_orders";
	$all_transaction = $conn->query($sql);

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
			<button type="submit" id="search-form"><a href="../php/main.php">POS</a></button>&nbsp;&nbsp;
        <button type="submit" id="search-form"><a href="../php/register.php">Add Account</a></button>&nbsp;&nbsp;
				<div class="message-icon">
					<i class="fa fa-envelope-o"></i>
				</div>
				<div class="notification-icon">
					<i class="fa fa-bell-o"></i>
				</div>

			</div>
		</div>

		<div class="content">
			<div class="left-sidebar">
		
			</div>
			<div class="right-content">
				<div class="analytics">
				<?php include_once "../process/get_analytics_data.php"; ?>
				<?php include_once "../process/get_customer_today.php"; ?>
				<?php include_once "../process/get_month_sale.php"; ?>
				</div>

				<div class="table-recent_orders">
					<h1>Recent Orders</h1>
					<table class="tbl-orders">
						<tr>
							<th class="tbl-header">Order ID</th>
							<th class="tbl-header">Customer Name</th>
							<th class="tbl-header">Date</th>
							<th class="tbl-header">Total</th>
							<th class="tbl-header">Action</th>
						</tr>

						<?php
						if (mysqli_num_rows($all_transaction) == 0) {
							?>
							<tr>
								<td class="tbl-id">No Data</td>
								<td class="tbl-name">No Data</td>
								<td class="tbl-date">No Data</td>
								<td class="tbl-total">No Data</td>
								<td class="tbl-col-4">No Data</td>
							</tr>
							<?php
						} else {
							while ($row = mysqli_fetch_assoc($all_transaction)) {
								$customer_id = $row["customer_id"];
								$customer_query = "SELECT cname FROM customers WHERE customer_id = $customer_id";
								$customer_result = $conn->query($customer_query);

								if ($customer_result && $customer_result->num_rows > 0) {
									$customer_data = $customer_result->fetch_assoc();
									$customer_name = $customer_data["cname"];
								}
								?>

								<tr>
									<td class="tbl-id">
										<?php echo $row["order_id"]; ?>
									</td>
									<td class="tbl-name">
										<?php echo $customer_name; ?>
									</td>
									<td class="tbl-date">
										<?php echo $row["date_created"]; ?>
									</td>
									<td class="tbl-total">₱
										<?php echo $row["total"]; ?>
									</td>
									<td class="tbl-col-4">
										<button class="delete edit-recent-order" onclick="openModals()"
											data-product-id="<?php echo $row["order_id"]; ?>">View Details</button>
										<button class="delete delete-recent-order"
											data-product-id="<?php echo $row["order_id"]; ?>">Delete</button>
									</td>
								</tr>

								<?php
							}
						}
						?>
					</table>
				</div>

				<div class="recent-body">
					<div class="recent" id="recent">
						<div class="modal-recent">
							<span class="recent-close" onclick="closeModals()">&times;</span>
							<div class="main">
								<div class="content">
									<div class="cont-center">
										<h1>Order Details</h1>
										<div class="tables-of-order">
											<div class="left-tables">
												<table class="tbl-details">
													<thead>
														<tr>
															<th class="col-product">Product(s)</th>
															<th class="col-price">Price</th>
															<th class="col-qty">Quantity</th>
														</tr>
													</thead>
													<tbody id="detailsTableBody">
													<td class="col-product" id="r_proname"></td>
													<td class="col-price" id="r_price"></td>
													<td class="col-qty" id="r_qty"></td>
													</tr>
													</tbody>
												</table>
											</div>

											<div class="right-tables">
												<table class="tbl-summary">
													<tr>
														<th class="col-summary" colspan="2">Order Summary</th>
													</tr>
													<tr>
														<td class="col-summary">Subtotal</td>
														<td class="col-amount" id="r_prototal"></td>
													</tr>
													<tr>
														<td class="col-summary">Estimated Tax</td>
														<td class="col-amount" id="r_tax"></td>
													</tr>
													<tr>
														<td class="col-summary">DIscount</td>
														<td class="col-amount" id="r_discount"></td>
													</tr>
													<tr class="row-total">
														<td class="col-summary">Total</td>
														<td class="col-amount" id="r_gtotal"></td>
													</tr>
												</table>

												<table class="tbl-info">
													<tr>
														<th class="col-left-info" colspan="2">Order Information</th>
													</tr>
													<tr>
														<td class="col-left-info">Order ID</td>
														<td class="col-right-info" id="r_orderId"></td>
													</tr>
													<tr>
														<td class="col-left-info">Name</td>
														<td class="col-right-info" id="r_customer">
															<?php echo $customer_name; ?>
														</td>
													</tr>
													<tr>
														<td class="col-left-info">Date</td>
														<td class="col-right-info" id="r_date"></td>
													</tr>
													<tr>
														<td class="col-left-info">Time</td>
														<td class="col-right-info" id="r_time"></td>
													</tr>
													<tr>
														<td class="col-left-info">Cashier</td>
														<td class="col-right-info" id="r_cashier"></td>
													</tr>
												</table>
												<div>
												</div>
											</div>
										</div>






										<!-- Store pro_id as one string

loop to display pro_id 1 per line

display pro_id details per loop

trans_id	pro_id	qty		total		name		sub_total		tax		g_total		date		time		cashier
1		    213213	1		350		    qwerty	    350			    3		380			now()		time()	    $SESSION

-->

										<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
										<script src="../javascript/edit_pro.js"></script>
										<script src="../javascript/grab-id.js"></script>
	</body>

	</html>

	<?php
} else {
	header("Location: ../index.php");
	exit();
}
?>