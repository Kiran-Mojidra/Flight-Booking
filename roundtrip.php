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


  
    <title>Document</title>
</head>
<body>
    <?php include 'header.php';?>
    
<!-- ********************************************************************************************************************************************
******************************************************* All methods for checking and other ******************************************************-->


    <?php
include("Connection.php");

// Check if form is submitted and flight_type is set
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['flight_type'])) {
    $selectedOption = $_POST['flight_type'];
} else {
    // Default value if no option is selected
    $selectedOption = "not selected";
}

// Get data from text-box1
$departure = isset($_POST['text-box1']) ? $_POST['text-box1'] : "not entered";

// Get data from text-box2
$arrival = isset($_POST['text-box2']) ? $_POST['text-box2'] : "not entered";

// Get data from deDate
$departureDate = isset($_POST['deDate']) ? $_POST['deDate'] : "not entered";

// Get data from arDate
$arrivalDate = isset($_POST['arDate']) ? $_POST['arDate'] : "not entered";

// Get data from adults
$adults = isset($_POST['adults']) ? $_POST['adults'] : "not entered";

// Get data from class
$class = isset($_POST['class']) ? $_POST['class'] : "not entered";




// Depending on the selected flight type, store the data accordingly
if($selectedOption == "One Way") {
    // One Way flight selected, store the relevant data
   // Get data from text-box1
$departure2 = isset($_POST['text-box3']) ? $_POST['text-box3'] : "not entered";

// Get data from text-box2
$arrival2 = isset($_POST['text-box4']) ? $_POST['text-box4'] : "not entered";

// Get data from deDate
$departureDate2 = isset($_POST['deDate2']) ? $_POST['deDate2'] : "not entered";



// Get data from adults
$adults2 = isset($_POST['adults2']) ? $_POST['adults2'] : "not entered";

// Get data from class
$class2 = isset($_POST['class2']) ? $_POST['class2'] : "not entered";

    if(isset($_POST['search_submit2'])) {
        $query = "SELECT * FROM `schedule` WHERE departure_place = '$departure2' AND arrival_place = '$arrival2'";
        $data = mysqli_query($conn, $query);
        $total = mysqli_num_rows($data);
    
        if ($total != 0) {
            while($result = mysqli_fetch_assoc($data)) {
                echo "
                <style>
                    .schedule1 {
                        background-color:white;
                        border-radius: 10px;
                        height:25x0px;
                        margin: 20px 30px;
                        padding: 30px 50px;
                        text-align: center;
                    }
                    
                    .sch_sub1 {
                        display: flex;
                        margin-bottom: 0px;
                    }
                    
                    .sch_sub1 h3, p {
                        flex: 1;
                    }
                    
                    .fliStopsDisc {
                        width: 11px;
                        height: 11px;
                        border: 2px solid #e7e7e7;
                        display: inline-block;
                        background-color:#021128d5;
                        position: relative;
                        z-index: 2;
                        top: -55%;
                        margin: 0 2px;
                        border-radius: 20px;
                        left:-5%;
                    }
                    
                    .sch_footer {
                        display: flex;
                        margin-top: 20px;
                        font-size: 16px;
                        text-align: left;
                    }
                    
                    .book_now_btn {
                        margin-left: auto;
                        height: 50px;
                        font-size: 18px;
                        color: #e7e7e7;
                        background-color: #2a57d3;
                        width: 200px;
                        border-radius: 20px;
                    }
                    .book_now_btn a{
                        font-size: 18px;
                        color: #e7e7e7;
                        text-decoration:none;
                    }
                    .br-div{
                        height:100%;
                        border:2px solid #0b54d2;
                        margin:20px 40px 20px 40px;
                    }
                </style>
                <div class='schedule1'>
                    <div class='sch_sub1'>
                        <h3>Airline</h3>
                        <h3>Flight No</h3>
                        <h3>Departure</h3>
                        <h3><hr style='width: 200px; padding-left: 0; border: 1.5px solid #2a57d3;'><span class='fliStopsDisc'></span></h3>
                        <h3>Arrival</h3>
                        <h3>Price</h3>
                    </div>
                    <div class='sch_sub1'>
                    <p>" . $result['airline'] . "</p>
                        <p>" . $result['fno'] . "</p>
                        <p>" . $result['departure_place'] . "</p>
                        <p style='margin-left:5px;'>" . $result['departure'] . " - " . $result['arrival'] . "<br></p>
                        <p>" . $result['arrival_place'] . "</p>
                        <p>" . (($class == 'economy') ? 'INR ' . $result['prize'] : 'INR ' . $result['prize2']) . " per adult</p>
                    </div>
                    
                    <div class='sch_footer'>
                    <p><i class='bi bi-x-circle'></i> Cancellation Within 24 hours of booking without fees</p>
                    <p><i class='bi bi-suitcase-lg-fill'></i> Cabin baggage: 8kg/Adult</p>
                    <p><i class='bi bi-suitcase-fill'></i> Check-In baggage: 20kg/Adult</p>
                   
                    <div class='sub_sch_btn'>
                        <button class='book_now_btn'>
                        <a href='round_trip_register.php?fno= ".$result['fno']."&departure_place=". $result['departure_place']." &price=" . (($class == 'economy') ? $result['prize'] : $result['prize2']) . " &arrival_place=". $result['arrival_place']."&adult= $adults2&class= $class2&ddate=$departureDate2'>                       
                            Book Now
                            </a>
                        </button>
                    </div>
                </div>
                
                </div>
               
                <hr class='br-div'>";
               
            }
    
            
        } else {
            echo "<script>alert('No flights have been scheduled for the provided departure and arrival places.');
            window.location.href = 'index.php';
            </script>";
        }
    }
} elseif($selectedOption == "Return") {
    // Return flight selected, store the relevant data
    $departureReturn = $departure;
    $arrivalReturn = $arrival;
    $departureDateReturn = $departureDate;
    $arrivalDateReturn = $arrivalDate;
    $adultsReturn = $adults;
    $classReturn = $class;

    if(isset($_POST['search_submit'])) {
        $query = "SELECT * FROM `schedule` WHERE departure_place = '$departureReturn' AND arrival_place = '$arrivalReturn'";
        $data = mysqli_query($conn, $query);
        $total = mysqli_num_rows($data);
    
        if ($total != 0) {
            while($result = mysqli_fetch_assoc($data)) {
                echo "
                <style>
                    .schedule1 {
                        background-color:white;
                        border-radius: 10px;
                        height:25x0px;
                        margin: 20px 30px;
                        padding: 30px 50px;
                        text-align: center;
                    }
                    
                    .sch_sub1 {
                        display: flex;
                        margin-bottom: 0px;
                    }
                    
                    .sch_sub1 h3, p {
                        flex: 1;
                    }
                    
                    .fliStopsDisc {
                        width: 11px;
                        height: 11px;
                        border: 2px solid #e7e7e7;
                        display: inline-block;
                        background-color:#021128d5;
                        position: relative;
                        z-index: 2;
                        top: -55%;
                        margin: 0 2px;
                        border-radius: 20px;
                        left:-5%;
                    }
                    
                    .sch_footer {
                        display: flex;
                        margin-top: 20px;
                        font-size: 16px;
                        text-align: left;
                    }
                    
                    .book_now_btn {
                        margin-left: auto;
                        height: 50px;
                        font-size: 18px;
                        color: #e7e7e7;
                        background-color: #2a57d3;
                        width: 200px;
                        border-radius: 20px;
                    }
                    .book_now_btn a{
                        font-size: 18px;
                        color: #e7e7e7;
                        text-decoration:none;
                    }
                    .br-div{
                        height:100%;
                        border:2px solid #0b54d2;
                        margin:20px 40px 20px 40px;
                    }
                </style>
                <div class='schedule1'>
                    <div class='sch_sub1'>
                        <h3>Airline</h3>
                        <h3>Flight No</h3>
                        <h3>Departure</h3>
                        <h3><hr style='width: 200px; padding-left: 0; border: 1.5px solid #2a57d3;'><span class='fliStopsDisc'></span></h3>
                        <h3>Arrival</h3>
                        <h3>Price</h3>
                    </div>
                    <div class='sch_sub1'>
                    <p>" . $result['airline'] . "</p>
                        <p>" . $result['fno'] . "</p>
                        <p>" . $result['departure_place'] . "</p>
                        <p style='margin-left:5px;'>" . $result['departure'] . " - " . $result['arrival'] . "<br></p>
                        <p>" . $result['arrival_place'] . "</p>
                        <p>" . (($class == 'economy') ? 'INR ' . $result['prize'] : 'INR ' . $result['prize2']) . " per adult</p>
                    </div>
                    
                    <div class='sch_footer'>
                    <p><i class='bi bi-x-circle'></i> Cancellation Within 24 hours of booking without fees</p>
                    <p><i class='bi bi-suitcase-lg-fill'></i> Cabin baggage: 8kg/Adult</p>
                    <p><i class='bi bi-suitcase-fill'></i> Check-In baggage: 20kg/Adult</p>
                   
                    <div class='sub_sch_btn'>
                        <button class='book_now_btn'>
                        <a href='round_trip_register.php?fno= ".$result['fno']."&departure_place=". $result['departure_place']." &price=" . (($class == 'economy') ? $result['prize'] : $result['prize2']) . " &arrival_place=". $result['arrival_place']."&adult= $adultsReturn&class= $classReturn&ddate=$departureDateReturn&adate=$arrivalDateReturn'>                       
                            Book Now
                            </a>
                        </button>
                    </div>
                </div>
                
                </div>
               
                <hr class='br-div'>";
               
            }
    
            
        } else {
            echo "<script>alert('No flights have been scheduled for the provided departure and arrival places.');
            window.location.href = 'index.php';
            </script>";
        }
    }
}



?>


   



   


 






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