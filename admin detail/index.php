<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['ausername'])) {
    // User is not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}

// User is logged in, display the index page content
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>DashBoard</title>
	<link rel="icon" href="../Images/wings.png">
</head>
<body>
<?php include 'header.php'; ?>

<section id="section1">
	<style>
		.card,.card2{
	height: 200px;
	padding: 20px;
	border-radius: 20px;
	background-color:white;
	width: 300px;
	color: #11222d;
	display: flex;
	margin: 20px 10px;
  }

  
  .detail-main{
	display: flex;
	justify-content: center;
	
  }

  .card h1{
	padding-left: 10px;
  }

  .dashboard{
	display: flex;
	justify-content: center;
  }

  .sty{
	text-decoration: none;
  }

	</style>

<?php 
include '../Connection.php';

// Get total users
$query_users = "SELECT COUNT(*) AS total_users FROM register";
$result_users = mysqli_query($conn, $query_users);
$row_users = mysqli_fetch_assoc($result_users);
$total_users = $row_users['total_users'];

// Get total admin
$query_admin = "SELECT COUNT(*) AS total_admin FROM adminlogin";
$result_admin = mysqli_query($conn, $query_admin);
$row_admin = mysqli_fetch_assoc($result_admin);
$total_admin = $row_admin['total_admin'];

// Get total admin contact
$query_admin_contact = "SELECT COUNT(*) AS contact FROM contact_us";
$result_admin_contact = mysqli_query($conn, $query_admin_contact);
$row_admin_contact = mysqli_fetch_assoc($result_admin_contact);
$total_admin_contact = $row_admin_contact['contact'];

// Get total admin feed
$query_admin_feed = "SELECT COUNT(*) AS feed FROM feedback";
$result_admin_feed = mysqli_query($conn, $query_admin_feed);
$row_admin_feed = mysqli_fetch_assoc($result_admin_feed);
$total_admin_feed = $row_admin_feed['feed'];

// Get total booked tickets
$query_tickets = "SELECT COUNT(*) AS total_tickets FROM pass_details WHERE status = 'approved'";
$result_tickets = mysqli_query($conn, $query_tickets);
$row_tickets = mysqli_fetch_assoc($result_tickets);
$total_tickets = $row_tickets['total_tickets'];

// Get total pending tickets
$query_tickets_pending = "SELECT COUNT(*) AS total_tickets_pending FROM pass_details WHERE status = 'pending'";
$result_tickets_pending = mysqli_query($conn, $query_tickets_pending);
$row_tickets_pending = mysqli_fetch_assoc($result_tickets_pending);
$total_tickets_pending = $row_tickets_pending['total_tickets_pending'];

// Get total canceled tickets
$query_tickets_canceled = "SELECT COUNT(*) AS total_tickets_cancel FROM pass_details WHERE status = 'cancelled'";
$result_tickets_canceled = mysqli_query($conn, $query_tickets_canceled);
$row_tickets_canceled = mysqli_fetch_assoc($result_tickets_canceled);
$total_tickets_canceled = $row_tickets_canceled['total_tickets_cancel'];

// Get total booked hotels
$query_hotel = "SELECT COUNT(*) AS total_hotel FROM hotel_cust_detail WHERE status = 'approved'";
$result_hotel = mysqli_query($conn, $query_hotel);
$row_hotel = mysqli_fetch_assoc($result_hotel);
$total_hotel = $row_hotel['total_hotel'];

// Get total pending hotels
$query_pending = "SELECT COUNT(*) AS total_pending FROM hotel_cust_detail WHERE status = 'pending'";
$result_pending = mysqli_query($conn, $query_pending);
$row_pending = mysqli_fetch_assoc($result_pending);
$total_pending = $row_pending['total_pending'];

// Get total canceled hotels
$query_canceled = "SELECT COUNT(*) AS total_canceled FROM hotel_cust_detail WHERE status = 'cancelled'";
$result_canceled = mysqli_query($conn, $query_canceled);
$row_canceled = mysqli_fetch_assoc($result_canceled);
$total_canceled = $row_canceled['total_canceled'];

// Get total hotels
$query_hotels = "SELECT COUNT(*) AS total_hotels FROM hotel";
$result_hotels = mysqli_query($conn, $query_hotels);
$row_hotels = mysqli_fetch_assoc($result_hotels);
$total_hotels = $row_hotels['total_hotels'];

// Get total flights
$query_flights = "SELECT COUNT(*) AS total_flights FROM schedule";
$result_flights = mysqli_query($conn, $query_flights);
$row_flights = mysqli_fetch_assoc($result_flights);
$total_flights = $row_flights['total_flights'];

// Get total users
$query_airline = "SELECT COUNT(*) AS total_airline FROM airline";
$result_airline = mysqli_query($conn, $query_airline);
$row_airline = mysqli_fetch_assoc($result_airline);
$total_airline = $row_airline['total_airline'];

?> 









<div>
<!--<label for="hotel"> <h2>Dashboard</h2></label>-->

</div>
	<div class="dashboard">
		<div class="detail-main">

		<a href="user.php" class="sty">
			<div class="card">
  				<img src="../Images/user.jpeg" alt="user" style="height:100px; width:100px;">
				<h1><br><?php echo $total_users; ?><br>Total Users</h1>
			</div></a>
			<a href="admin.php" class="sty">
			<div class="card">
			<img src="../Images/admin.jpeg" alt="user" style="height:100px; width:100px;">
				<h1> <br><?php echo $total_admin; ?><br>Total Admin</h1>
			</div></a>
			

			<a href="contact.php" class="sty">
		<div class="card">
   			 <img src="../Images/qury.jpeg" alt="user" style="height:100px; width:100px;">
   				 <h1><br><?php echo $total_admin_contact; ?><br>Queries</h1>
		</div></a>
		
		<a href="feedback.php" class="sty">
		<div class="card">
   			 <img src="../Images/reviews-icon.png" alt="user" style="height:100px; width:100px;">
   					 <h1><br><?php echo $total_admin_feed; ?><br>Reviews</h1>
		</div></a>

</div>

		
	</div>


  <!--  ***************************************** Admin Manage flight ***************************************************-->
	<div style="margin-bottom: 0px; padding-left:100px;">
	<label for="hotel"> <h2>Flight Ticket Booking Analytics</h2></label>

	</div>
	
	<div class="dashboard">
		<div class="detail-main">
			<a href="approve_ticket.php" class="sty">
			<div class="card2">
			<img src="../Images/ticket.png" alt="user" style="height:100px; width:100px;">
				<h1> <br>
				<?php echo $total_tickets; ?><br>Booked Tickets</h1>
			</div></a>
		</div>

		<a href="pending_ticket.php" class="sty">
		<div class="card2">
   			 <img src="../Images/OIP.jpeg" alt="user" style="height:100px; width:100px;">
   				 <h1><br><?php echo $total_tickets_pending; ?><br>Pending Tickets</h1>
		</div></a>
		
		<a href="cancle_ticket.php" class="sty">
		<div class="card2">
   			 <img src="../Images/cancel-png-20.png" alt="user" style="height:100px; width:100px;">
   					 <h1><br><?php echo $total_tickets_canceled; ?><br>Canceled Tickets</h1>
		</div></a>

		
	</div>

	<div>







	<!--  ***************************************** Admin Hotel ***************************************************-->
	<div style="margin-bottom: 0px; padding-left:100px;">
	<label for="hotel"> <h2>Hotel Booking Analytics</h2></label>

	</div>
	<div class="dashboard">
		<div class="detail-main">
			<a href="approve_book.php" class="sty">
			<div class="card2">
			<img src="../Images/hotel-png-4.png" alt="user" style="height:100px; width:100px;">
				<h1> <br>
				<?php echo $total_hotel; ?><br>Booked Hotel</h1>
			</div></a>
		</div>

		<a href="pending_booking.php" class="sty">
		<div class="card2">
   			 <img src="../Images/OIP.jpeg" alt="user" style="height:100px; width:100px;">
   				 <h1><br><?php echo $total_pending; ?><br>Pending Hotels</h1>
		</div></a>
		
		<a href="cancle_book.php" class="sty">
		<div class="card2">
   			 <img src="../Images/cancel-png-20.png" alt="user" style="height:100px; width:100px;">
   					 <h1><br><?php echo $total_canceled; ?><br>Canceled Hotels</h1>
		</div></a>

		
	</div>
 <!--  ***************************************** Admin Manage flight/hotel ***************************************************-->
 <div style="margin-bottom: 0px; padding-left:100px;">
	<label for="hotel"> <h2>Flight, Hotel, Airline Analytics</h2></label>

	</div>
	
	<div class="dashboard">
		<div class="detail-main">
			<a href="schedule.php" class="sty">
			<div class="card2">
			<img src="../Images/ticket.png" alt="user" style="height:100px; width:100px;">
				<h1> <br>
				<?php echo $total_flights; ?><br>Scheduled Flight</h1>
			</div></a>
		</div>

		<a href="av_hotel.php" class="sty">
		<div class="card2">
   			 <img src="../Images/hotel-png-4.png" alt="user" style="height:100px; width:100px;">
   				 <h1><br><?php echo $total_hotels; ?><br>Available Hotels</h1>
		</div></a>

		<a href="airline.php" class="sty">
		<div class="card2">
   			 <img src="../Images/Flight3-removebg-preview.png" alt="user" style="height:100px; width:100px;">
   				 <h1><br><?php echo $total_airline; ?><br>Available Airline</h1>
		</div></a>
	</div>
	
</section>








<?php include 'footer.php';?>
<script src="script.js"></script>
</body>
</html>