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
    <title>Document</title>
    <style>
        /***********************************************************************************************************************************************
*********************************************************** Customer Details *******************************************************************
***********************************************************************************************************************************************/

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
.container_detail{
  max-width: 800px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
  margin: 0px 30px;
}
.container_detail .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container_detail .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #101d25, #3870e1);
}
.content_detail form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}

.category input:checked{
    background-color: #152B4D;
    border-color: #d9d9d9;
}

form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #294ac0;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }

 .gender-details{
    width: 252px;
    margin-left: 0px;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #2a57d3;
   border-color: #d9d9d9;
 }
 .radio_wrap2 input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #11222d, #2e58d6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #111c34, #3362c6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content_detail form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container_detail .content_detail .category{
    flex-direction: column;
  }
}
    </style>
</head>
<body>
<?php 

include 'header.php';
?>

<?php

include("Connection.php");

// Check if hotel ID is provided in the URL parameters
if(isset($_GET['fno']) && isset($_GET['price'])) {
    // Retrieve hotel ID from the URL
    $fno = $_GET['fno'];
    $price = floatval($_GET['price']); // Convert the price to a float
    $departurePlace = $_GET['departure_place'];
    $arrivalPlace = $_GET['arrival_place'];
    $ddate = $_GET['ddate'];
    $adate = isset($_GET['adate']) ? $_GET['adate'] : ''; 
    $adult = intval($_GET['adult']); // Convert the adult count to an integer
    $class = $_GET['class'];
 
    // Fetch hotel details from the database based on the hotel ID
    $query = "SELECT * FROM `schedule` WHERE fno = '$fno'";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch hotel details
        $hotel_data = mysqli_fetch_assoc($result);

        // Store the retrieved hotel details in variables
        $flightNo = $hotel_data['fno'];
        $departure = $hotel_data['departure'];
        $arrival = $hotel_data['arrival'];
    
        $total_price = $adult * $price; // Perform multiplication with the converted values
    } else {
        // If the query fails, handle the error or redirect
        echo "<script>alert('Failed to fetch flight details.'); window.location.href = '../index.php'; </script>";
    }
}
 else {
    // If hotel ID is not provided in the URL, handle the error or redirect
    echo "<script>alert('Invalid request. Please select a flight.'); window.location.href = '../index.php'; </script>";
}



// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['pass_register'])) {
    // Get the login ID from the register table
    if (isset($_SESSION['id'])) {
        $logid = $_SESSION['id'];
    } else {
        echo "<script>alert('Session expired. Please log in again.'); window.location.href = 'index.php'; </script>";
        exit;
    }

    // Loop through the submitted passenger details
    $fullNames = $_POST['fullName'];
    $userNames = $_POST['username'];
    $dobs = $_POST['dob'];
    $phoneNumbers = $_POST['phoneNumber'];
    $emails = $_POST['email'];
    $genders = $_POST['gender'];

    for ($i = 0; $i < count($fullNames); $i++) {
        $fullName = $fullNames[$i];
        $lastName = $userNames[$i];
        $dob = $dobs[$i];
        $phoneNumber = $phoneNumbers[$i];
        $email = $emails[$i];
        $gender = $genders[$i];

        // Generate the seat number
        $seatColumn = ['A', 'B', 'C'];
        $seatRow = rand(1, 30);
        $seatNumber = $seatRow . $seatColumn[array_rand($seatColumn)];

        // Insert the passenger details into the pass_details table
        $query = "INSERT INTO pass_details (log_id, fname, lname, dob, pno, email, dplace, aplace, departure, arrival, gender, fno, prize, seatno, class)
                  VALUES ('$logid', '$fullName', '$lastName', '$dob', '$phoneNumber', '$email', '$departurePlace', '$arrivalPlace', '$ddate', '$adate', '$gender', '$fno', '$price', '$seatNumber', '$class')";

        if (mysqli_query($conn, $query)) {
            // Passenger details added successfully
            echo "<script>alert('Passenger details registered successfully!'); window.location.href = 'roundtrip_payment.php?fno=$fno&total_price=$total_price';</script>";
        } else {
            // Error occurred while adding passenger details
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }
}
?>

<div class="container_detail">
    <div class="title">Registration</div>
    <div class="content_detail">
        <form id="registrationForm" method="POST" action="#">
            <?php
            // Generate user details form based on selected number of adults
            echo "<div class='user-details'>";
            for ($i = 0; $i < $adult; $i++) {
                echo "
                <div class='input-box'>
                    <span class='details'>First Name</span>
                    <input type='text' placeholder='Enter your name' name='fullName[]' required>
                </div>
                <div class='input-box'>
                    <span class='details'>Last Name</span>
                    <input type='text' placeholder='Enter your username' name='username[]' required>
                </div>
                <div class='input-box'>
                    <span class='details'>Email</span>
                    <input type='email' placeholder='Enter your email' name='email[]' required>
                </div>
                <div class='input-box'>
                    <span class='details'>Phone Number</span>
                    <input type='text' placeholder='Enter your number' name='phoneNumber[]' required>
                </div>
                <div class='input-box'>
                    <span class='details'>Date Of Birth</span>
                    <input type='date' placeholder='Enter your date of birth' name='dob[]' required>
                </div>
                <div class='gender-details'>
                    <span class='gender-title'>Gender</span>
                    <div class='category'>
                    <input type='radio' name='gender[]' value='male' required>Male
                    <input type='radio' name='gender[]' value='female' required>Female
                    </div>
                </div>
                <hr style='border:2px double #294ac0;'>";
            }
            echo "</div>";
            ?>
            
            <div class="button">
                <input type="submit" name="pass_register" value="Register">
            </div>
        </form>
    </div>
</div>



<script>
    document.getElementById("registrationForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent form submission

        // Get form values
        var details = [];
        <?php
        for ($i = 0; $i < $adult; $i++) {
            echo "var fullName{$i} = document.getElementById('fullName{$i}').value;";
            echo "var username{$i} = document.getElementById('username{$i}').value;";
            echo "var email{$i} = document.getElementById('email{$i}').value;";
            echo "var phoneNumber{$i} = document.getElementById('phoneNumber{$i}').value;";
            echo "var dob{$i} = document.getElementById('dob{$i}').value;";
            echo "var gender{$i} = document.querySelector('input[name=\"gender{$i}\"]:checked').value;";
            echo "details.push({
                    fullName: fullName{$i},
                    username: username{$i},
                    email: email{$i},
                    phoneNumber: phoneNumber{$i},
                    dob: dob{$i},
                    gender: gender{$i}
                });";
        }
        ?>

        // Create alert message
        var alertMessage = "";
        details.forEach(function(detail) {
            alertMessage += "Full Name: " + detail.fullName + "\n";
            alertMessage += "Username: " + detail.username + "\n";
            alertMessage += "Email: " + detail.email + "\n";
            alertMessage += "Phone Number: " + detail.phoneNumber + "\n";
            alertMessage += "Date of Birth: " + detail.dob + "\n";
            alertMessage += "Gender: " + detail.gender + "\n\n";
        });

        // Display alert
        alert(alertMessage);
        document.querySelector('input[name="amt"]').value = "<?php echo $totalAmount; ?>";
        window.location.href = "roundtrip_payment.php";//changeed 
    });

</script>


<?php include 'footer.php';?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
	</script> 
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">
	</script> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js">
	</script>
	  <script src="scricpts.js"></script>
</body>
</html>