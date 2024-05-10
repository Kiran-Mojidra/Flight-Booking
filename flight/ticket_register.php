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
    <title>Document</title>
    <style>
    /* Registration Form Styles */
.container_detail {
  width: 80%;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  margin: 20px 10px 30px 150px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.title {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
}

.user-details {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
  grid-gap: 20px;
}

.input-box-row {
  display: flex;
  justify-content: space-between;
  gap: 20px;
}

.input-box {
  flex: 1;
  display: flex;
  flex-direction: column;
}

.input-box .details {
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}

.input-box input {
  height: 45px;
  width: 100%;
  outline: none;
  border-radius: 5px;
  border: 1px solid #ccc;
  padding-left: 15px;
  font-size: 16px;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}

.gender-details {
  display: flex;
  flex-direction: column;
  margin-top: 10px;
}

.gender-details .gender-title {
  font-size: 16px;
  font-weight: 500;
  margin-bottom: 10px;
}

.category {
  display: flex;
  justify-content: space-between;
  width: 200px;
}

.category label {
  display: flex;
  align-items: center;
  cursor: pointer;
}

.category label input {
  margin-right: 10px;
}
.button input {
  height: 45px;
  width: 100%;
  outline: none;
  color: #fff;
  border: none;
  font-size: 18px;
  font-weight: 500;
  border-radius: 5px;
  letter-spacing: 1px;
  background: linear-gradient(135deg, #11222d, #2e58d6);
  cursor: pointer;
}

.button input:hover {
    background: linear-gradient(-135deg, #111c34, #3362c6);
}
    </style>
    
</head>
<body>
    <?php include '../header.php';?>

    <?php

include("../Connection.php");

// Check if hotel ID is provided in the URL parameters
if(isset($_GET['fno']) && isset($_GET['price'])) {
    // Retrieve hotel ID from the URL
    $fno = $_GET['fno'];
    $price = floatval($_GET['price']); // Convert the price to a float
    $departurePlace = $_GET['departure_place'];
    $arrivalPlace = $_GET['arrival_place'];
    $adult = intval($_GET['adult']); // Convert the adult count to an integer
    $class = $_GET['class'];
   echo "$fno";
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
                  VALUES ('$logid', '$fullName', '$lastName', '$dob', '$phoneNumber', '$email', '$departurePlace', '$arrivalPlace', '$departure', '$arrival', '$gender', '$fno', '$price', '$seatNumber', '$class')";

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

    <?php include '../footer.php';?>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
	</script> 
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">
	</script> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js">
	</script>
	  <script src="scricpts.js"></script>
</body>
</html>