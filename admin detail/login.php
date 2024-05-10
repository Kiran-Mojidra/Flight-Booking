<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Images/wings.png">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: whitesmoke;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: linear-gradient(135deg, #11222d, #2e58d6) no-repeat;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
    background: linear-gradient(135deg, #11222d, #2e58d6);
}
.form .message {
  margin: 15px 0 0;
  color: black;
  font-size: 16px;
}
.form .message a {
  color: linear-gradient(135deg, #11222d, #2e58d6);
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #2e58d6;
  font-family:"Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
    </style>
</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="register-form" method="post">
      <input type="text" placeholder="Username" name="username"/>
      <input type="password" placeholder="password" name="password"/>
      <input type="password" placeholder="confirm password" name="confirm_password"/>
      <button name="confirm">confirm details</button>
      <p class="message">Back to <tab> <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" method="post">
      <input type="text" placeholder="username" name="username1"/>
      <input type="password" placeholder="password" name="password1"/>
      <button name="login_btn">login</button>
      <p class="message">Forgot Password? <a href="#">Correct here</a></p>
    </form>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
</body>
</html>

<?php
session_start(); // Start the session
$showLogError = false;

if (isset($_POST['login_btn'])) {
    include '../Connection.php';
    
    // Login user
    if (isset($_POST['username1']) && isset($_POST['password1'])) { // Ensure $_POST array keys are set
        $username1 = $_POST["username1"];
        $password1 = $_POST["password1"];
        
        $sql = "SELECT * FROM `adminlogin` WHERE ausername='$username1' AND password='$password1'" ;
        $result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            $_SESSION['ausername'] = $username1;
            echo "<script>alert('Login successful.'); window.location.href = 'index.php';</script>";
            exit();
        } else {
            echo "<script>alert('Username or password invalid.');</script>";
        }
    }
    
    // Update password
    if (isset($_POST['confirm'])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
        
        // Check if passwords match
        if ($password !== $confirm_password) {
            echo "<script>alert('Passwords do not match.');</script>";
        } else {
            // Update password in the database
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("UPDATE adminlogin SET password=? WHERE ausername=?");
            $stmt->bind_param("ss", $hashed_password, $username);
            if ($stmt->execute()) {
                echo "<script>alert('Password successfully changed.');</script>";
            } else {
                echo "<script>alert('Failed to update password.');</script>";
            }
        }
    }
}
?>
