<?php
session_start();
if(isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../assets/css/resibo.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../assets/css/style_add.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../assets/css/style_register.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../assets/css/screen.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../assets/css/addproduct.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>MariCakes | Add User</title>
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.png">
</head>
<body>

<?php
    include('../process/db.php');

    $username = $password = $confirm_password = "";
    $username_err = $password_err = $confirm_password_err = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        if (empty(trim($_POST["username"]))) {
            $username_err = "Please enter a username.";
        } else {
            $username = trim($_POST["username"]);
        }
      
        if (empty(trim($_POST["password"]))) {
            $password_err = "Please enter a password.";
        } else {
            $password = trim($_POST["password"]);
        }

        if (empty(trim($_POST["confirm_password"]))) {
            $confirm_password_err = "Please confirm password.";
        } else {
            $confirm_password = trim($_POST["confirm_password"]);
            if ($password != $confirm_password) {
                $confirm_password_err = "Password did not match.";
            }
        }
      
        $stmt = $conn->prepare("SELECT user_id FROM users WHERE username=?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $username_err = "This username is already taken.";
            $confirm_password_err = "";
        }
        
        if (empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $user_type = "Cashier";
            $stmt = $conn->prepare("INSERT INTO users (username, password, user_type) VALUES (?,?,?)");
            $stmt->bind_param("sss", $username, $hashed_password, $user_type);

            if ($stmt->execute()) {
                
                header("location: ../php/add_product.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }

            $stmt->close();
        }

        $conn->close();
    }
    ?>
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
                <i class="fa fa-user-o"></i>
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
    <div class="left-sidebar">
    <div class="select"><a href="../php/main.php"><i class="bi bi-cash-coin"></i>Point of Sale</a></div>
        <div class="select"><a href="../php/add_product.php"><i class="bi bi-cake"></i>Manage Products</a></div>
        <div class="select"><a href="../php/recent_orders.php"><i class="bi bi-card-text"></i>Recent Orders</a></div>
        <div class="select"><a href="../php/pre-order.php"><i class="bi bi-cart-plus"></i>Pre-Orders</a></div>
        <div class="select"><a href="../php/register.php"><i class="bi bi-person-add"></i>Add User</a></div>
        <div class="select"><a href="../process/logout.php"><i class="bi bi-box-arrow-right"></i>Log Out</a></div>
    </div>
    <div class="right-content">
    <div class="reg-form">
        <h1>Add New User</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"> 
    <p class="error"><?php echo $username_err; ?><?php echo $password_err; ?><?php echo $confirm_password_err; ?></p>
    <div > 
        <input class="input-box box" id="user" type="text" required="required" name="username" value="<?php echo $username; ?>">
        <label class="emails move">Username</label>
    </div>
    <div> 
        <input class="input-box box" id="pass" type="password" required="required" name="password"> 
        <label class="passw move">Password</label>
    </div>
    <div> 
        <input class="input-box box" id="cpass" type="password" required="required" name="confirm_password"> 
        <label class="cpassw move">Confirm Password</label>
    </div>
    <button type="submit" class="btn submit">Add User!</button> 
    </form>
    </div>

    </div>
    
    </div>
    
    <script src="../javascript/preload.js"></script>
    <script src="../javascript/form_trans.js"></script>

</body>
</html>
<?php
}
else {
   header("Location: ../index.php");
    exit();
}
?>