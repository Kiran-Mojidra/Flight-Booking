<?php
// Register user
$showAlert = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    include 'Connection.php';

    // Sanitize user inputs to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email = mysqli_real_escape_string($conn, $_POST["email-id"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST["cpassword"]);

    // Check if passwords match
    if ($password === $confirmPassword) {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Check if the username already exists
        $stmt = $conn->prepare("SELECT * FROM register WHERE username=?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $resultUsername = $stmt->get_result();

        // Check if the email already exists
        $stmt = $conn->prepare("SELECT * FROM register WHERE emailid=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $resultEmail = $stmt->get_result();

        if ($resultUsername->num_rows > 0) {
            $showError = "Username already exists.";
        } elseif ($resultEmail->num_rows > 0) {
            $showError = "Email is already taken.";
        } else {
            // Insert user details into the database using prepared statement
            $stmt = $conn->prepare("INSERT INTO register (username, emailid, password, dt) VALUES (?, ?, ?, current_timestamp())");
            $stmt->bind_param("sss", $username, $email, $hashedPassword);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                $showAlert = true;
            } else {
                $showError = "Registration failed due to a server error.";
            }
        }
    } else {
        $showError = "Passwords do not match.";
    }
}


$updateSuccess = false;
$updateError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    include 'Connection.php';

    $email = mysqli_real_escape_string($conn, $_POST["email-id"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST["confirm_password"]);

    // Check if passwords match
    if ($password !== $confirmPassword) {
        $updateError = "Passwords do not match.";
    } else {
        // Update password in the database
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("UPDATE register SET password=? WHERE emailid=?");
        $stmt->bind_param("ss", $hashedPassword, $email);
        if ($stmt->execute()) {
            $updateSuccess = true;
        } else {
            $updateError = "Failed to update password.";
        }
    }
}
?>

<!-- HTML and JavaScript code remains the same -->

<!-- Display the error message if it exists -->
<?php if (isset($error)) { ?>
    <div class="alert alert-danger">
        <strong>Error!</strong> <?php echo $error; ?>
    </div>
<?php } ?>

<!-- HTML and JavaScript code remains the same -->





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="logstyle.css">
    <link rel="icon" href="Images/wings.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>

/* forgot password ***********************************/



.log-box .form-box.forgot {
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
    background: transparent;
    backdrop-filter: blur(20px);
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    color: #e4e4e4;
    transform: translateX(430px);
    transition: transform .6s ease;
    transition-delay: 0s;
  }
  
  .log-box.active .form-box.forgot {
    transform: translateX(0);
    transition-delay: .7s;
  }
  

        /* ************************************************************************************************************************************
**************************************************  log alert *************************************************************************/
.alert {
    position: relative;
    padding: 0.75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: 0.25rem;
}

.alert-success {
    color: black;
    background-color: #1033a64a;
    border-color: #ffeeba;
    font-size: 18px;
}

.alert-danger{
    color: black;
    background-color: #c90a0a4a;
    border-color: #ffeeba;
    font-size: 18px;
}

.alert-success strong, .alert-danger strong{
    color: black;
    font-size: 20px;
}

.close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 0.75rem 1.25rem;
    color: inherit;
    background-color: transparent;
    border: 0;
    cursor: pointer;
}

    </style>
    <title>Document</title>
</head>
<body>


<!-- Add this HTML code in the appropriate place within your form -->
<script>
    // JavaScript function to show alert messages without reloading the page
    function showAlert(message, type) {
        var alertDiv = document.createElement('div');
        alertDiv.className = 'alert alert-' + type;
        alertDiv.innerHTML = '<strong>' + (type === 'success' ? 'Success!' : 'Error!') + '</strong> ' + message + '<button type="button" class="close">&times;</button>';
        document.body.appendChild(alertDiv);

        // Close the alert when the close button is clicked
        alertDiv.querySelector('.close').addEventListener('click', function() {
            alertDiv.remove();
        });
    }

    // Show success alert if showAlert variable is true
    <?php if ($showAlert): ?>
        showAlert('Registration successful. You can now log in.', 'success');
    <?php endif; ?>

    // Show error alert if showError variable is true
    <?php if ($showError): ?>
        showAlert('<?php echo $showError; ?>', 'danger');
    <?php endif; ?>

    
    // Show update success alert if updateSuccess variable is true
    <?php if ($updateSuccess): ?>
        showAlert('Password updated successfully.', 'success');
        
    <?php endif; ?>

    // Show update error alert if updateError variable is true
    <?php if ($updateError): ?>
        showAlert('<?php echo $updateError; ?>', 'danger');
    <?php endif; ?>
</script>


    <div class="background"></div>
    <div class="container">
        <div class="content">
            <div class="lg">
                <h2 class="logo">
                    <svg viewBox='410.1386 361.7521 54.723 33.7621' width='50' height='30.84818083803885' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' preserveAspectRatio='none'>
                        <defs></defs>
                        <style>.aLgOaV3zRcolors-0dA7jHsrIh {fill:#B09E80;fill-opacity:0.98;}.aLgOaV3zRcolors-1dA7jHsrIh {fill:#E9E9E9;fill-opacity:1;}.aLgOaV3zRcolors-2dA7jHsrIh {fill:#716551;fill-opacity:1;}</style>
                        
                        <g opacity='1' transform='rotate(0 410.1386 361.7521)'> 
                            <svg width='54.723' height='33.7621' x='410.1386' y='361.7521' version='1.1' preserveAspectRatio='none' viewBox='0 0 95.217 58.746'> 
                                <g transform='matrix(1 0 0 1 0 0)' class='aLgOaV3zRcolors-0dA7jHsrIh'>
                                <g>
                                    <path d='M95.217,0L55.41,29.765c2.006,1.967,3.251,4.708,3.251,7.739c0,5.982-4.847,10.832-10.827,10.836l-0.009,3.396 c0.003,0,0.005,0,0.009,0c0.002,0,0.005,0,0.008,0c1.654-0.003,3.244-0.279,4.73-0.782l1.418,5.306l0.824,0.226l-1.307-4.776 l2.561,5.12l1.307,0.357l-1.554-4.494l2.98,4.886l0.954,0.261l-1.699-3.778l3.57,4.291l1.441,0.395l-7.325-9.309 c0.487-0.31,0.956-0.645,1.403-1.008l4.36,4.361l0.501-0.06l-2.429-3.509l3.206,3.418l3.038-0.357l-3.267-3.494l6.332,3.201 l4.414-0.587l-13.657-5.563c0.216-0.286,0.419-0.581,0.614-0.883l11.944,2.455l0.828-0.569L66.46,45.06l7.497,1.148l2.563-1.762 l-8.614-1.41l10.245,0.289l3.305-2.272H62.04c0.14-0.485,0.256-0.979,0.346-1.482l17.45-1.004l0.86-1.06l-6.431,0.21l6.993-0.903 l2.08-2.563l-10.808,1.326l11.825-2.582l2.938-3.622L62.61,36.188c-0.019-0.513-0.056-1.015-0.113-1.506l21.04-7.449l1.015-1.541 l-7.684,2.426l8.33-3.407l1.862-2.826l-9.383,2.475l10.739-4.534l3.157-4.792L61.699,31.274v0.002 c-0.073-0.199-0.152-0.396-0.235-0.592l26.352-16.576l2.395-4.564l-6.854,4.361l7.505-5.602l1.451-2.766l-13.304,8.761 L93.315,3.624L95.217,0z'></path><path d='M0,0l39.807,29.765c-2.006,1.967-3.251,4.708-3.251,7.739c0,5.982,4.847,10.832,10.827,10.836l0.009,3.396 c-0.003,0-0.005,0-0.009,0c-0.002,0-0.005,0-0.008,0c-1.654-0.003-3.244-0.279-4.73-0.782l-1.418,5.306l-0.824,0.226l1.307-4.776 l-2.561,5.12l-1.307,0.357l1.555-4.494l-2.981,4.886l-0.954,0.261l1.699-3.778l-3.571,4.291l-1.44,0.395l7.326-9.309 c-0.488-0.31-0.957-0.645-1.404-1.008l-4.36,4.361l-0.501-0.06l2.429-3.509l-3.206,3.418l-3.038-0.357l3.266-3.494l-6.332,3.201 l-4.414-0.587l13.657-5.563c-0.216-0.286-0.419-0.581-0.614-0.883l-11.944,2.455l-0.828-0.569l6.572-1.784l-7.497,1.148 l-2.563-1.762l8.614-1.41l-10.245,0.289l-3.305-2.272h19.415c-0.14-0.485-0.255-0.979-0.346-1.482L15.38,38.566l-0.859-1.06 l6.43,0.21l-6.993-0.903l-2.079-2.563l10.807,1.326L10.86,32.995l-2.938-3.622l24.685,6.815c0.019-0.513,0.056-1.015,0.113-1.506 l-21.04-7.449l-1.015-1.541l7.684,2.426l-8.33-3.407l-1.862-2.826l9.383,2.475l-10.74-4.534l-3.157-4.792l29.875,16.241l0,0.002 c0.074-0.199,0.153-0.396,0.236-0.592L7.401,14.108L5.006,9.544l6.855,4.361L4.356,8.304l-1.45-2.766l13.304,8.761L1.901,3.624L0,0 z'>

                    </path>
                     </g></g> </svg> </g></svg></svg>
                      UDDAN</h2>
                      <h2>Touch The Sky With Glory</h2>
            </div>

            <div class="text-sci">
                <h2>Welcome!<br><span>Experience convenience at every step. Fly smarter and book your flights swiftly with our intuitive interface.</span></h2>
                 <p>
                    
                 </p>

                 <div class="social-icons">
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                 </div>
            </div>
        </div>
        <?php
session_start();

// Login logic
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    include 'Connection.php';

    // Sanitize user inputs to prevent SQL injection
    $email = mysqli_real_escape_string($conn, $_POST["email2"]);
    $password = mysqli_real_escape_string($conn, $_POST["password2"]);

    // Check if the email and password match a record in the register table
    $stmt = $conn->prepare("SELECT * FROM register WHERE emailid = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Store the username in the session
            $_SESSION['user_name'] = $row['username'];

            // Redirect the user to the appropriate page (e.g., dashboard.php)
            header("Location: index.php");
            exit;
        } else {
            $error = "Invalid email or password.";
        }
    } else {
        $error = "no such a row found";
    }

    $stmt->close();
    $conn->close();
}
?>



        <div class="log-box">
            <div class=" form-box login">
                <form action="#" name="form" method="POST">
                    <h2>Sign In</h2>

                     
                    <div class="input-box">
                        <span class="icon"><i class="bi bi-envelope-fill"></i></span>
                        <input type="email" name="email2" id="email2" required>
                        <label>Email</label>
                     </div>

                     <div class="input-box">
                        <span class="icon"><i class="bi bi-lock-fill"></i></span>
                        <input type="password" name="password2" id="password2" required>
                        <label>Password</label>
                     </div>

                     <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label>
                        <a href="#" class="forgot-link" onclick="showForgotForm()">Forgot Password?</a>
                     </div>

                     <button type="submit" class="btn" name="login">Sign In</button>

                     <div class="login-register">
                        <p>Don't have an account?
                            <a href="#" class="register-link">Sign Up</a>
                        </p>
                     </div>

                </form>
            </div>
            

            <!-- ** forgot Password **-->
            <div class=" form-box forgot">
                <form action="#" name="form" method="post">
                    <h2>Change Password</h2>

                     
                    <div class="input-box">
                        <span class="icon"><i class="bi bi-envelope-fill"></i></span>
                        <input type="email" name="email-id" required>
                        <label>Email</label>
                     </div>

                     <div class="input-box">
                        <span class="icon"><i class="bi bi-lock-fill"></i></span>
                            <input type="password" id="password" name="password" required>
                        <label>New Password</label>
                     </div>

                     
                     <div class="input-box">
                        <span class="icon"><i class="bi bi-lock-fill"></i></span>
                            <input type="password" id="cpassword" name="confirm_password" required> 
                        <label>Confirm Password</label>
                    
                     <button type="submit" class="btn" name="update">Update Password</button>

                     

                </form>
            </div>


            <!-- ** register **-->
            <div class=" form-box register">
                <form name="form" method="post">
                    <h2>Sign Up</h2>

                    <div class="input-box">
                        <span class="icon"><i class="bi bi-person-fill"></i></i></span>
                        <input type="text" id="username" name="username" required>
                        <label>UserName</label>
                     </div>
                     
                    <div class="input-box">
                        <span class="icon"><i class="bi bi-envelope-fill"></i></span>
                        <input type="email" id="emil-id" name="email-id" required>
                        <label>Email</label>
                     </div>

                     <div class="input-box">
                        <span class="icon"><i class="bi bi-lock-fill"></i></span>
                        <input type="password" id="password" name="password" required>
                        <label>Password</label>
                     </div>

                     <div class="input-box">
                        <span class="icon"><i class="bi bi-lock-fill"></i></span>
                        <input type="password" id="cpassword" name="cpassword" required>
                        <label>Confirm Password</label>
                     </div>

                     <div class="remember-forgot">
                        <label><input type="checkbox">I agree to the terms & condition</label>
                     </div>

                     <button type="submit" class="btn" name="register">Sign Up</button>

                     <div class="login-register">
                        <p>Already have an account?
                            <a href="#" class="login-link">Sign In</a>
                        </p>
                     </div>

                </form>
            </div>
        </div>

    </div>
    <script src="script.js"></script>
    <script>
        /**  ***************************************************************************************************************************************
 * ********************************************************* Log alert btn ****************************************************************
 */

document.addEventListener('DOMContentLoaded', function() {
    const closeButton = document.querySelector('.alert .close');
    const alertBox = document.querySelector('.alert');

    closeButton.addEventListener('click', function() {
        alertBox.style.display = 'none';
    });
});


function showForgotForm() {
    logBox.classList.add('active');
    document.querySelector('.form-box.login').style.display = 'none';
    document.querySelector('.form-box.register').style.display = 'none';
    document.querySelector('.form-box.forgot').style.display = 'flex';
}

    </script>
</body>
</html>
