
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
      <!-- Bootstrap CSS -->
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <link rel="icon" href="Images/wings.png">
	<link rel="stylesheet" href="css_class/main.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
          @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap'); 
        * {
            margin: 0;
            padding: 0;
            list-style: none;
            font-family: 'Josefin Sans', sans-serif;
        }

        body {
            background: whitesmoke; /* Changed background color */
        }

        .wrapper5 {
            width: 100%;
            background: whitesmoke;
            margin: 30px auto;
            border-radius: 3px;
        }

        .wrapper5 .tabs ul {
            width: 100%;
            height: 60px;
            display: flex;
        }

        .wrapper5 .tabs ul li {
            width: 50%;
            height: 65px;
            padding: 0 20px;
            text-align: center;
            background: #dbe3eb;
            cursor: pointer;
            text-transform: uppercase;
            color: #8b9393;
            font-size: 14px;
            letter-spacing: 2px;
            transition: all 0.3s ease;
        }

        .wrapper5 .tabs ul li:first-child {
            border-top-left-radius: 3px;
        }

        .wrapper5 .tabs ul li:last-child {
            border-top-right-radius: 3px;
        }

        .wrapper5 .tabs ul li img{
  width: 35px;
  height: 35px;
  display: block;
  margin: 0 auto 3px;
}

.wrapper5 .content{
  padding: 30px;
  height: auto;
  border-bottom: 6px solid #44c8fe;
  border-radius: 3px;
}

        .wrapper5 .content .tab_content {
            font-size: 14px;
            line-height: 22px;
        }

        .wrapper5 .tabs ul li.active {
            border-top: 6px solid #44c8fe;
            margin-top: -15px;
            background: #fff;
            color: #44c8fe;
            padding-top: 9px;
        }



        /** booked hotels */
        .room-booking-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 20px;
    padding: 20px;
}

.room-info-card {
    border: 1px solid #ccc;
    padding: 20px;
    text-align: center;
}


.booking-btn {
    background-color: green;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
}

.cancel-btn {
    background-color: red;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
}

.pdf-btn, .review-btn {
    background-color: #ccc;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
}




/** booked flights */
.main-fli{
    display: flex;
    
    margin: 20px 130px;
    border-radius: 20px;
}
.side-bar
{
    background-color: #3362c6;
    width: 400px;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
}

.logo {
        font-size: 40px;
        color: white;
       
    }


.message {
  text-align: center;
  font-size: 16px;
  color: white;
}

.text,.text2{
    display: flex;
    justify-content: space-between;
}

.text2 p{
    font-size: 25px;
    font-weight: 600;
    margin-top: 0px;
}
.fli-sub{
    padding:20px 60px;
    background-color: #ffffff;
    width: 900px;
}
.fli-sub1{
    display: flex;
    flex-wrap: wrap-reverse;
    justify-content: space-between;
    border-bottom: 1px solid gray;
    margin-bottom: 10px;
}
</style>
</head>
<body>
<?php 

include 'header.php';
?>

<div class="wrapper5">
    <div class="tabs">
        <ul id="tabs_ul">
            <li class="active" data-list="tab_1">
                <img src="images/ticket.png" alt="">
                <p>Booked Tickets</p>
            </li>
            <li data-list="tab_2">
                <img src="images/hotel-png-4.png" alt="">
                Booked Hotels</li> <!-- Corrected typo here -->
            
        </ul>
    </div>

    <div class="content">
        <!-- Booked hotel display-->
        <div class="tab_content tab_1" id="tab_1" style="display:block;">
               

                <?php
// Database connection
include 'connection.php';

// Check if user is logged in
if (isset($_SESSION['id'])) {
    // Fetch user's booking details
    $user_id = $_SESSION['id'];
    $query = "SELECT pd.*, s.airline FROM pass_details pd 
    INNER JOIN schedule s ON pd.fno = s.fno
    WHERE pd.log_id = '$user_id'";
    $result = mysqli_query($conn, $query);

    // Check if there are bookings for the user
    if (mysqli_num_rows($result) > 0) {
        // Loop through each booking
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
             <div class="main-fli">
            <div class="fli-sub">
            <div class="fli-sub1">
                <h4>UDDAN: Touch The Sky With Glory</h4>
                <h2><b><?php echo $row['class']; ?> Class</b></h2>
            </div>

            <div class="detail1">
                <div class="text" style="margin-top:20px;">
                    <p>Airline</p>
                    <p>From</p>
                    <p>To</p>
                </div>
                <div class="text2">
                    <p><?php echo $row['airline']; ?></p>
                    <p><?php echo $row['dplace']; ?></p>
                    <p><?php echo $row['aplace']; ?></p>
                </div>
            </div>

            <div class="detail2">
                <div class="text" style="margin-top:20px;margin-bottom:0px;">
                    <p>Passenger name</p>
                    <p>Board Time</p>
                </div>
                <div class="text2">
                    <p><?php echo $row['fname'] . ' ' . $row['lname']; ?></p>
                    <p>12:45</p>
                </div>
            </div>

            <div>
                <div class="text" style="margin-top:20px;">
                    <p>Departure</p>
                    <p>Arrival</p>
                    <p>Gate</p>
                    <p>Seat</p>
                </div>
                <div class="text2" style="margin-bottom:20px;">
                    <p><?php echo $row['departure']; ?></p>
                    <p><?php echo $row['arrival']; ?></p>
                    <p>1B</p>
                    <p><?php echo $row['seatno']; ?></p>
                </div>
            </div>
            </div>
             <div class="side-bar">
                    <h2 class="logo" style="padding:20px 10px 15px 80px;">
                <svg viewBox='410.1386 361.7521 54.723 33.7621' width='50' height='30.84818083803885' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' preserveAspectRatio='none'>
                    <defs></defs>
                    <style>.aLgOaV3zRcolors-0dA7jHsrIh {fill:#B09E80;fill-opacity:0.98;}.aLgOaV3zRcolors-1dA7jHsrIh {fill:#E9E9E9;fill-opacity:1;}.aLgOaV3zRcolors-2dA7jHsrIh {fill:#716551;fill-opacity:1;}</style>
                    
                    <g opacity='1' transform='rotate(0 410.1386 361.7521)'> 
                        <svg width='54.723' height='33.7621' x='410.1386' y='361.7521' version='1.1' preserveAspectRatio='none' viewBox='0 0 95.217 58.746'> 
                            <g transform='matrix(1 0 0 1 0 0)' class='aLgOaV3zRcolors-0dA7jHsrIh'>
                            <g>
                                <path d='M95.217,0L55.41,29.765c2.006,1.967,3.251,4.708,3.251,7.739c0,5.982-4.847,10.832-10.827,10.836l-0.009,3.396 c0.003,0,0.005,0,0.009,0c0.002,0,0.005,0,0.008,0c1.654-0.003,3.244-0.279,4.73-0.782l1.418,5.306l0.824,0.226l-1.307-4.776 l2.561,5.12l1.307,0.357l-1.554-4.494l2.98,4.886l0.954,0.261l-1.699-3.778l3.57,4.291l1.441,0.395l-7.325-9.309 c0.487-0.31,0.956-0.645,1.403-1.008l4.36,4.361l0.501-0.06l-2.429-3.509l3.206,3.418l3.038-0.357l-3.267-3.494l6.332,3.201 l4.414-0.587l-13.657-5.563c0.216-0.286,0.419-0.581,0.614-0.883l11.944,2.455l0.828-0.569L66.46,45.06l7.497,1.148l2.563-1.762 l-8.614-1.41l10.245,0.289l3.305-2.272H62.04c0.14-0.485,0.256-0.979,0.346-1.482l17.45-1.004l0.86-1.06l-6.431,0.21l6.993-0.903 l2.08-2.563l-10.808,1.326l11.825-2.582l2.938-3.622L62.61,36.188c-0.019-0.513-0.056-1.015-0.113-1.506l21.04-7.449l1.015-1.541 l-7.684,2.426l8.33-3.407l1.862-2.826l-9.383,2.475l10.739-4.534l3.157-4.792L61.699,31.274v0.002 c-0.073-0.199-0.152-0.396-0.235-0.592l26.352-16.576l2.395-4.564l-6.854,4.361l7.505-5.602l1.451-2.766l-13.304,8.761 L93.315,3.624L95.217,0z'></path>
                                <path d='M0,0l39.807,29.765c-2.006,1.967-3.251,4.708-3.251,7.739c0,5.982,4.847,10.832,10.827,10.836l0.009,3.396 c-0.003,0-0.005,0-0.009,0c-0.002,0-0.005,0-0.008,0c-1.654-0.003-3.244-0.279-4.73-0.782l-1.418,5.306l-0.824,0.226l1.307-4.776 l-2.561,5.12l-1.307,0.357l1.555-4.494l-2.981,4.886l-0.954,0.261l1.699-3.778l-3.571,4.291l-1.44,0.395l7.326-9.309 c-0.488-0.31-0.957-0.645-1.404-1.008l-4.36,4.361l-0.501-0.06l2.429-3.509l-3.206,3.418l-3.038-0.357l3.266-3.494l-6.332,3.201 l-4.414-0.587l13.657-5.563c-0.216-0.286-0.419-0.581-0.614-0.883l-11.944,2.455l-0.828-0.569l6.572-1.784l-7.497,1.148 l-2.563-1.762l8.614-1.41l-10.245,0.289l-3.305-2.272h19.415c-0.14-0.485-0.255-0.979-0.346-1.482L15.38,38.566l-0.859-1.06 l6.43,0.21l-6.993-0.903l-2.079-2.563l10.807,1.326L10.86,32.995l-2.938-3.622l24.685,6.815c0.019-0.513,0.056-1.015,0.113-1.506 l-21.04-7.449l-1.015-1.541l7.684,2.426l-8.33-3.407l-1.862-2.826l9.383,2.475l-10.74-4.534l-3.157-4.792l29.875,16.241l0,0.002 c0.074-0.199,0.153-0.396,0.236-0.592L7.401,14.108L5.006,9.544l6.855,4.361L4.356,8.304l-1.45-2.766l13.304,8.761 L1.901,3.624L0,0 z'>
                                </path>
                            </g>
                            </g>
                        </svg>
                    </g>
                </svg>
                UDDAN
            </h2>

            <div>
                <img src="images/airtic.png" alt="" style="height:150px;width:150px;margin-left:120px;">
            </div>
                     <div class="message">
                        <p>Thank you for choosing us.</p>
                         <p>Please be at the gate at boarding time</p>
                    </div>
                    </div>
                    <select name="op" id="" style="height:50px;background:brown;color:white;">
    <option value="select">Select</option>
    <option value="pdf">Download PDF</option>
    <?php
    // Display the cancel option if the check-in date is not within 1 day of the current date
    if (date('Y-m-d', strtotime($row['departure'])) > date('Y-m-d', strtotime('-1 day')) && $row['status'] != 'Cancelled') {
        echo "<option value='cancel'>Cancel</option>";
    }
    ?>  
</select>

                </div>
                
            <?php
        }
    } else {
        echo "No bookings found.";
    }
} else {
    echo "Please log in to view your booking details.";
}
?>

  
                   
        </div>



        <!-- Booked hotel display-->
        <div class="tab_content tab_2" id="tab_2" style="display:none;">
           

        <div class="room-booking-container">
        <?php
        include("Connection.php");

        // Check if the user is logged in
        if (isset($_SESSION['id'])) {
            $logid = $_SESSION['id'];

            // Fetch data from the hotel_cust_detail table
            $query = "SELECT * FROM hotel_cust_detail WHERE log_id = '$logid'";
            $result = mysqli_query($conn, $query);

            // Loop through the retrieved data and display the room information cards
            while ($row = mysqli_fetch_assoc($result)) {
                $uid = $row['uid'];
                $log_id = $row['log_id'];
                $uname = $row['uname'];
                $email = $row['email'];
                $mono = $row['mono'];
                $hid = $row['hid'];
                $hname = $row['hname'];
                $checkIn = $row['checkIn'];
                $checkOut = $row['checkOut'];
                $member = $row['member'];
                $room = $row['room'];
                $amount = $row['amount'];
                $total_pay = $row['total_pay'];
                $status = $row['status'];
                $dt = $row['dt'];
                $pay_status = $row['pay_status'];
                $refund = $row['refund'];

                echo "<div class='room-info-card'>";
                echo "<h2>$hname</h2>";
                echo "<p style=' padding-bottom: 20px;font-size:18px;'> <b>Booked Room:</b>$room</p>";
                echo "<p style=' padding-bottom: 20px;font-size:18px;'><b>Check in:</b> $checkIn</p>";
                echo "<p style=' padding-bottom: 20px;font-size:18px;'><b>Check out:</b> $checkOut</p>";
                echo "<p style=' padding-bottom: 20px;font-size:18px;'><b>Amount: </b>$amount /per night</p>";
                echo "<p style=' padding-bottom: 20px;font-size:18px;'><b>Total pay:</b> $total_pay</p>";
                echo "<p style=' padding-bottom: 20px;font-size:18px;'><b>Booking Confirmation:</b> <b style='background:green; color:white;padding:10px;'>$status</b></p>";
                echo "<p style=' padding-bottom: 20px;font-size:18px;'><b>Booking Date:</b> <b>$dt</p>";


                // Display the cancel button if the check-in date is not within 1 day of the current date
                if (date('Y-m-d', strtotime($checkIn)) > date('Y-m-d', strtotime('-1 day')) && $status != 'Cancelled') {
                    echo "<button class='cancel-btn' onclick='cancelBooking($uid)'>Cancel</button>";
                }

                // Display the refund information if the refund amount is greater than 0
                if ($refund > 0) {
                    echo "<p>Refund: $refund</p>";
                }

                echo "<button class='pdf-btn' onclick='downloadPDF($uid)'>Download PDF</button>";
                
                
                echo "</div>";
            }
        } else {
            echo "<script>alert('Please log in to view your booking details.'); window.location.href = 'login_user.php';</script>";
        }
        ?>
    </div>
        </div>
       
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(".content .tab_content").hide();
    $(".content .tab_content:first-child").show();

    $("ul li").click(function () {

        $("ul li").removeClass("active");
        $(this).addClass("active");

        var current_tab = $(this).attr("data-list");
        $(".content .tab_content").hide();
        $("." + current_tab).show();
    });

    var ul = document.getElementById("tabs_ul");
    var li_tabs = ul.getElementsByTagName("li");
    for (var i = 0; i < li_tabs.length; i++) {
        li_tabs[i].addEventListener("click", function () {
            var current = ul.getElementsByClassName("active");
            current[0].className = current[0].className.replace("active", "");
            this.className += "active";

            var current_tab_value = this.getAttribute("data-list");
            document.getElementById(current_tab_value).style.display = "block";

        });
    }
</script>

<script>
    function cancelBooking(uid) {
        if (confirm("Are you sure you want to cancel this booking?")) {
            // Perform AJAX request to update booking status
            $.ajax({
                type: "POST",
                url: "myticket.php", // Create a PHP file to handle cancellation logic
                data: { uid: uid },
                success: function(response) {
                    // Display success message
                    alert("Your booking has been cancelled. Refund will be processed in 2-3 days.");
                    // Refresh the page or update the UI as needed
                    location.reload(); // Reload the page to reflect the updated status
                },
                error: function(xhr, status, error) {
                    // Handle errors
                    console.error(xhr.responseText);
                    alert("An error occurred while processing your request. Please try again later.");
                }
            });
        }
    }
</script>
<script>
    function downloadPDF(uid) {
        // Redirect to generate_pdf.php with uid as parameter
        window.location.href = `generate_pdf.php?uid=${uid}`;
    }
</script>

<script>
    function downloadPDF2(id) {
        // Redirect to generate_pdf2.php with uid as parameter
        window.location.href = `generate_pdf2.php?id=${id}`;
    }
</script>

<!-- Add the following script to the end of your HTML body -->
<script>
    // Function to handle option selection in the select element
    $('select[name="op"]').change(function() {
        var selectedOption = $(this).val();
        var uid = <?php echo $user_id; ?>; // Assuming $user_id is already defined
        
        if (selectedOption === 'pdf') {
            // Redirect to generate_pdf2.php with the user ID
            window.location.href = `generate_pdf2.php?uid=${uid}`;
        } else if (selectedOption === 'cancel') {
            // Call the cancelBooking function
            cancelBooking(uid);
        }
    });
</script>



<?php 

include 'footer.php';
?>

</body>
</html>

