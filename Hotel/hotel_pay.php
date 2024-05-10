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
    <link rel="icon" href="../Images/wings.png">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap'); 

* { 
	margin: 0; 
	padding: 0; 
	box-sizing: border-box; 
	border: none; 
	outline: none; 
	font-family: 'Poppins', sans-serif; 
	text-transform: capitalize; 
	transition: all 0.2s linear; 
} 

.container { 
	display: flex; 
	justify-content: center; 
	align-items: center; 
	min-height: 100vh; 
	padding: 25px; 
	background: whitesmoke; 
} 

.container form { 
	width: 1000px; 
	padding: 20px; 
	background: #fff; 
	box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.2); 
} 

.container form .row { 
	display: flex; 
	flex-wrap: wrap; 
	gap: 15px; 
} 

.container form .row .col { 
	flex: 1 1 250px; 
} 

.col .title { 
	font-size: 20px; 
	color:rgb(14 109 235); 
	padding-bottom: 5px; 
} 

.col .inputBox { 
	margin: 15px 0; 
} 

.col .inputBox label { 
	margin-bottom: 10px; 
	display: block; 
} 

.col .inputBox input, 
.col .inputBox select { 
	width: 100%; 
	border: 1px solid #ccc; 
	padding: 10px 15px; 
	font-size: 15px; 
} 

.col .inputBox input:focus, 
.col .inputBox select:focus { 
	border: 1px solid #000; 
} 

.col .flex { 
	display: flex; 
	gap: 15px; 
} 

.col .flex .inputBox { 
	flex: 1 1; 
	margin-top: 5px; 
} 

.col .inputBox img { 
	height: 34px; 
	margin-top: 5px; 
	filter: drop-shadow(0 0 1px #000); 
} 

.container form .submit_btn { 
	width: 100%; 
	padding: 12px; 
	font-size: 17px; 
	background: hsl(220, 85%, 35%); 
	color: #fff; 
	margin-top: 5px; 
	cursor: pointer; 
	letter-spacing: 1px; 
} 

.container form .submit_btn:hover { 
	background: #071c45; 
} 

input::-webkit-inner-spin-button, 
input::-webkit-outer-spin-button { 
	display: none; 
}

    </style>
</head>
<body>
<?php include '../header.php'; ?>

<?php
include("../Connection.php");

// Retrieve the main_price from the URL parameter
if(isset($_GET['main_price'])) {
    $main_price = $_GET['main_price'];
} else {
    // Handle the case when main_price is not provided in the URL
    echo "<script>alert('Main price not provided.');
    window.location.href = 'hotel_detail.php'; // Redirect to appropriate page
    </script>";
}

if(isset($_POST['process_pay'])){
    // Retrieve the u_id and h_id from the hotel_cust_detail table
    $query = "SELECT uid, hid FROM hotel_cust_detail WHERE total_pay = '$main_price'"; // Assuming $hotel_id is available
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $u_id = $row['uid'];
        $h_id = $row['hid'];
        
        // Retrieve form data
        $card_no = $_POST['cardNum'];
        $card_holder_name = $_POST['cardName'];
        $exp_month = $_POST['expMonth'];
        $exp_year = $_POST['expYear'];
        $cvv = $_POST['cvv'];
        
    

        // Insert data into hotel_pay table
        $insert_query = "INSERT INTO hotel_pay (u_id, h_id, card_no, card_holder_name, exp_month, exp_year, cvv, trans_amt,dt) VALUES ('$u_id', '$h_id', '$card_no', '$card_holder_name', '$exp_month', '$exp_year', '$cvv', '$main_price',NOW())";
        $insert_result = mysqli_query($conn, $insert_query);

        if($insert_result) {
            echo "<script>alert('Payment successful.');
            window.location.href = '../myticket.php';
            </script>";
        } else {
            echo "<script>alert('Failed to process payment.');</script>";
        }
    } else {
        echo "<script>alert('Failed to retrieve user and hotel data.');</script>";
    }
}
?>






<div class="container"> 
  
  <form action="#" method="post"> 

  <div class="col"> 
  <h3 class="title">Payment information</h3> 

  <div class="inputBox"> 
      <label for="name"> 
            Card Accepted: 
        </label> 
      <img src="../images/card1.png" 
           alt="credit/debit card image"> 
           <img src="../images/card2.png" 
           alt="credit/debit card image"> 
  </div> 

  <div class="inputBox"> 
      <label for="cardName"> 
            Name On Card: 
        </label> 
      <input type="text" id="cardName" name="cardName"
             placeholder="Enter card name" 
             required> 
  </div> 

  <div class="inputBox"> 
      <label for="cardNum"> 
            Credit Card Number: 
        </label> 
      <input type="text" id="cardNum" name="cardNum"
             placeholder="1111-2222-3333-4444" 
             maxlength="19" required> 
  </div> 

  <div class="flex">
  <div class="inputBox"> 
      <label for="">Exp Month:</label> 
      <select name="expMonth" id=""> 
          <option value="">Choose month</option> 
          <option value="January">January</option> 
          <option value="February">February</option> 
          <option value="March">March</option> 
          <option value="April">April</option> 
          <option value="May">May</option> 
          <option value="June">June</option> 
          <option value="July">July</option> 
          <option value="August">August</option> 
          <option value="September">September</option> 
          <option value="October">October</option> 
          <option value="November">November</option> 
          <option value="December">December</option> 
      </select> 
  </div> 

  <div class="inputBox"> 
          <label for="">Exp Year:</label> 
          <select name="expYear" id=""> 
              <option value="">Choose Year</option> 
              <option value="2023">2023</option> 
              <option value="2024">2024</option> 
              <option value="2025">2025</option> 
              <option value="2026">2026</option> 
              <option value="2027">2027</option> 
          </select> 
      </div> 
  </div>


  <div class="flex"> 
      

      <div class="inputBox"> 
          <label for="cvv">CVV</label> 
          <input type="number" id="cvv" name="cvv"
                 placeholder="1234" required> 
      </div> 

      <div class="inputBox"> 
          <label for="Amount">Amount</label> 
          <input type="number" id="amt" value="<?php echo "$main_price"?>" placeholder="Amount" name="amt" required>
      </div> 
  </div> 

</div> 

      <input type="submit" value="Proceed to Payment" 
             class="submit_btn" name="process_pay"> 
  </form> 

</div> 



<script>

let cardNumInput = 
	document.querySelector('#cardNum') 

cardNumInput.addEventListener('keyup', () => { 
	let cNumber = cardNumInput.value 
	cNumber = cNumber.replace(/\s/g, "") 

	if (Number(cNumber)) { 
		cNumber = cNumber.match(/.{1,4}/g) 
		cNumber = cNumber.join(" ") 
		cardNumInput.value = cNumber 
	} 
})

</script>

<?php include '../footer.php'; ?>
</body>
</html>