<?php
if(isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MariCakes | Login</title>
  <link rel="icon" type="image/x-icon" href="assets/img/logo.png">
  <link rel="stylesheet" href="assets/css/style_login.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
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
                    
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"> 
                            <div class="form-group mb-3 inputs"> 
                                <input type="text" required="required" name="username" value="<?php echo $username; ?>">
                                <span class="emails">Username</span>
                            </div>
                            <div class="form-group mb-3 inputs"> 
                                <input type="password" required="required" name="password"> 
                                <span class="passw">Password</span>
                            </div>
                            <div class="form-group mb-3 inputs"> 
                                <input type="password" required="required" name="confirm_password"> 
                                <span class="cpassw">Confirm Password</span>
                            </div>
                            <p class="error"><?php echo $username_err; ?><br><br><?php echo $password_err; ?><br><?php echo $confirm_password_err; ?></p>
                            <button type="submit" class="btn butn">Add User!</button> 

                                    </u></a></p></div> </form> </div> </div> </div> </div>

        </div> </div> </div>

</body>
</html>
<?php
}
else {
   header("Location: ../index.php");
    exit();
}
?>