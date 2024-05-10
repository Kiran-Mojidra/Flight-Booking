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

// Check if hotel ID is provided in the URL parameters
if(isset($_GET['hotelid']) && isset($_GET['total_price'])) {

     // Get the login ID from the register table
     if (isset($_SESSION['id'])) {
        $logid = $_SESSION['id'];
    } else {
        echo "<script>alert('Session expired. Please log in again.'); window.location.href = 'index.php'; </script>";
        exit;
    }


    // Retrieve hotel ID from the URL
    $hotel_id = $_GET['hotelid'];
    $total_price= $_GET['total_price'];
    // Fetch hotel details from the database based on the hotel ID
    $query = "SELECT * FROM `hotel` WHERE hid = '$hotel_id'";
    // Execute the query
    $result = mysqli_query($conn, $query);
    
    // Check if the query was successful
    if ($result) {
        // Fetch hotel details
        $hotel_data = mysqli_fetch_assoc($result);
        // Store the retrieved hotel details in variables
        $hotel_name = $hotel_data['hotel_name'];
        $location = $hotel_data['location'];
        
        // Get other data from the URL parameters
       
        $checkIn = isset($_GET['checkIn']) ? $_GET['checkIn'] : "not provided";
        $checkOut = isset($_GET['checkOut']) ? $_GET['checkOut'] : "not provided";
        $adult = isset($_GET['adult']) ? $_GET['adult'] : "not provided";
        $child = isset($_GET['child']) ? $_GET['child'] : "not provided";
        $room = isset($_GET['room']) ? $_GET['room'] : "not provided";
        $checkInDate = date_create($checkIn);
$checkOutDate = date_create($checkOut);
$interval = date_diff($checkInDate, $checkOutDate);
$totalDays = $interval->format('%a');

       $main_price = $room * $total_price * $totalDays;
       $member = $adult + $child;
      
    } else {
        // If the query fails, handle the error or redirect
        echo "<script>alert('Failed to fetch hotel details.');
        window.location.href = '../stay.php';
        </script>";
    }
} else {
    // If hotel ID is not provided in the URL, handle the error or redirect
    echo "<script>alert('Invalid request. Please select a hotel.');
    window.location.href = '../stay.php';
    </script>";
}


if(isset($_POST['process_pay'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];

    // Perform insertion into hotel_cust_detail table
    $insert_query = "INSERT INTO hotel_cust_detail (uname,log_id, email, mono, city, state, zcode, hid, hname, checkIn, checkOut, member, room, amount, total_pay, dt) VALUES ('$name','$logid', '$email', '$mobile', '$city', '$state', '$zip', '$hotel_id', '$hotel_name', '$checkIn', '$checkOut', '$member', '$room', '$total_price', '$main_price', NOW())";
    $insert_result = mysqli_query($conn, $insert_query);

    if($insert_result) {
        echo "<script>alert('Data registered successfully now go and confirm payment.');
        window.location.href = 'hotel_pay.php?main_price=$main_price';
        </script>";
        
    } else {
        echo "<script>alert('Failed to insert data.');</script>";
    }

}
?>






<div class="container"> 
  
  <form action="#" method="post"> 

      <div class="row"> 

          <div class="col"> 
              <h3 class="title"> 
              Customer information
              </h3> 

              <div class="inputBox"> 
                  <label for="name"> 
                        Full Name: 
                    </label> 
                  <input type="text" id="name" name="name"
                         placeholder="Enter your full name" 
                         required> 
              </div> 

              <div class="inputBox"> 
                  <label for="email"> 
                        Email: 
                    </label> 
                  <input type="text" id="email" name="email"
                         placeholder="Enter email address" 
                         required> 
              </div> 

              <div class="inputBox"> 
                  <label for="address"> 
                        Mobile Number
                    </label> 
                  <input type="text" id="address" name="mobile"
                         placeholder="Enter address" 
                         required> 
              </div> 

              <div class="inputBox"> 
                  <label for="city"> 
                        City: 
                    </label> 
                  <input type="text" id="city" name="city"
                         placeholder="Enter city" 
                         required> 
              </div> 

              <div class="flex"> 

                  <div class="inputBox"> 
                      <label for="state"> 
                            State: 
                        </label> 
                      <input type="text" id="state" name="state"
                             placeholder="Enter state" 
                             required> 
                  </div> 

                  <div class="inputBox"> 
                      <label for="zip"> 
                            Zip Code: 
                        </label> 
                      <input type="number" id="zip" name="zip"
                             placeholder="123 456" 
                             required> 
                  </div> 

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