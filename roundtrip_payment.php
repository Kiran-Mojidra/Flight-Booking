<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // User is not logged in, redirect to the login page
    header("Location: login_user.php");
    exit();
}

// User is logged in, display the index page content
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css_class/main.css">
    <link rel="icon" href="Images/wings.png">
    <style>
        
/***********************************************************************************************************************************************
*********************************************************** payment   *******************************************************************
***********************************************************************************************************************************************/
.container_payment{
	background: white;
	max-width: 900px;
	min-height: 500px;
	display: flex;
	justify-content:space-between;
	align-items: flex-start;
	padding: 0.5rem 1.5rem;
}
.left{
	flex-basis: 50%;
}

.left image{
	height: 500px;
}
.right{
	flex-basis: 50%;
}
.container_payment form{
	padding: 1rem;
}

.container_payment h3{
	margin-top: 1rem;
	color:#2c3e50;
	}

.container_payment form input[type="text"]{
	width: 100%;
	padding: 0.5rem 0.7rem;
	margin: 0.5rem 0;
	outline: none;
}

#zip{
	display: flex;
	margin-top: 0.5rem;
}
#zip select{
	padding: 0.5rem 0.7rem;
}
#zip input[type="number"]{
	padding: 0.5rem 0.7rem;
	margin-left: 5px;	
}
input[type="submit"]{
	width: 100%;
	padding: 0.7rem 1.5rem;
	background: #021c35;
	color: white;
	border: none;
	outline: none;
	margin-top: 1rem;
	cursor: pointer;
}

input[type="submit"]:hover{
	background: #2c3e50;
}


@media only screen and (max-width: 770px){
	.container_payment{
		flex-direction: column;
	}
	body{
		overflow-x: hidden;
	}
}

    </style>
    <title>Payment</title>
</head>
<body>
<?php include 'header.php';?>

<?php
// Check if the URL parameters are set
if (isset($_GET['fno']) && isset($_GET['total_price'])) {
    $fno = $_GET['fno'];
    $total_price = $_GET['total_price'];

    
} else {
    // Handle the case where the URL parameters are not set
    echo "Invalid request. Please try again.";
}




include("Connection.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Proceed_to_Checkout'])) {
    // Retrieve the form data
    $card_holder_name = $_POST['cardName'];
    $ccardnumber = $_POST['cno'];
    $expmonth = $_POST['month'];
    $cvv = $_POST['cvv'];
    $amount = $_POST['amt'];
    $fid = $_GET['fno']; // Assuming you're passing the flight ID (fno) in the URL

    // Prepare the SQL query
    $query = "INSERT INTO payment (fid, card_holder_name, ccardnumber, expmonth, cvv, Amount) 
              VALUES ('$fid', '$card_holder_name', '$ccardnumber', '$expmonth', '$cvv', '$amount')";

    // Execute the SQL query
    if (mysqli_query($conn, $query)) {
        // Payment details inserted successfully
        echo "<script>alert('Payment processed successfully!'); window.location.href = 'myticket.php';</script>";
    } else {
        // Error occurred while inserting payment details
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
    
<div class="container_payment">
  <div class="left">
    <img src="images/payment.png" alt="Payment Image">
  </div>
  <div class="right">
    <h3>PAYMENT</h3>
    <form method="post" action="#"> <!-- Specify the action attribute with the URL to process the payment -->
      Accepted Card <br>
      <img src="Images/card1.png" width="100" alt="Card 1">
      <img src="images/card2.png" width="50" alt="Card 2">
      <br><br>

      <div class="inputBox"> 
      <label for="cardName"> 
            Name On Card: 
        </label> 
      <input type="text" id="cardName" name="cardName"
             placeholder="Enter card name" 
             required> 
  </div> 

      Credit card number
      <input type="text" name="cno" placeholder="Enter card number" required>
      
      Exp month
      <input type="text" name="month" placeholder="Month/year" required>
      <div id="zip">
          <label>
          CVV
          <input type="number" name="cvv" placeholder="CVV" required>
        </label>

        <label>
          Amount
          <input type="number" name="amt" placeholder="Amount" value="<?php echo $total_price;?>">
        </label>
      </div>
      
      
      <div class="button">
        <input type="submit" name="Proceed_to_Checkout" value="Proceed to Checkout">
      </div>
    </form>
  </div>
</div>

<?php include 'footer.php';?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
<script src="scripts.js"></script>
</body>
</html>
