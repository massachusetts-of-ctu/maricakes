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
    include('process/db.php');

    $username = $password = "";
    $username_err = $password_err = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        if (empty(trim($_POST["username"]))) {
            $username_err = "Please enter a <strong>username</strong>.";
        } else {
            $username = trim($_POST["username"]);
        }

        if (empty(trim($_POST["password"]))) {
            $password_err = "Please enter your <strong>password</strong>.";
        } else {
            $password = trim($_POST["password"]);
        }

        if (empty($username_err) && empty($password_err)) {
            $stmt = $conn->prepare("SELECT user_id, username, password FROM users WHERE username=?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows == 1) { 
                $stmt->bind_result($id, $username, $hashed_password);
                if ($stmt->fetch()) {
                    if (password_verify($password, $hashed_password)) {
        
                        session_start();
                        
                        $_SESSION["username"] = $username;

                        header("location: php/main.php");
                    } else {
                        $password_err = "The <strong>password</strong> you entered was not valid.";
                    }
                }
            } else {
                $username_err = "No account found with that <strong>username</strong>.";
            }

            $stmt->close();
        }

        $conn->close();
    }
    ?>



    <section class="wrap">
    <div class="logo">
       <img src="assets/img/logo.png"/> 
       <h3 class="brand">MariCakes</h3>
    </div>
      <div class="container">
<!-- SIGN IN -->
      <div class="started">
          <h1>LOGIN</h1>
          <p>Get access to MariCakes that made with pure delight. Get started!</p>
        </div>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
      
        <div>
          <input class="input-box box" type="text" name="username" value="<?php echo $username; ?>" required>
          <label class="email">Email</label>
        </div>
        <div>
          <input class="input-box box" type="password" name="password" required>
          <label class="pass">Password</label>
        </div>
        <p class="error"><?php echo $username_err; ?><?php echo $password_err; ?></p>
        <div>
          <input class="btn submit" type="submit" name="submit" value="Login ">
        </div>  
      </form>
      </div>  
    </section>
    <div class="background-img">
      <img src="assets/img/mariCakes.png"/> 
    </div>

</body>
</html>





