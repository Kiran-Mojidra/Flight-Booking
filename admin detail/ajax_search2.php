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


<?php
include 'connection.php';


$searchTerm = $_GET['searchTerm'];

$query = "SELECT * FROM pass_details 
          WHERE id LIKE '%$searchTerm%' 
          OR log_id LIKE '%$searchTerm%'
          OR fname LIKE '%$searchTerm%'
          OR lname LIKE '%$searchTerm%'
          OR seatno LIKE '%$searchTerm%'
          OR class LIKE '%$searchTerm%'
          OR fno LIKE '%$searchTerm%'
          AND status = 'pending'";

$result = mysqli_query($conn, $query);
?>


<table class="user-detail2" id="pendingTicketTable"> 
	<tr> 
		<th colspan="12"><h2>Pending Request For Flight Ticket Booking</h2></th> <!-- Changed colspan to 3 -->
	</tr> 
	<tr style="font-size:20px;"> <!-- Moved the <tr> tag here -->
    <th> Customer Id </th> 
		<th> Name </th> 
		<th> Email </th> 
		<th> Mobile No </th> 
		<th> Class </th>
        
		<th> Seat No </th> 
		<th> Flight No</th>
		<th> Status </th>
		<th> Price </th>  
        
        <th> Operation </th> 
		
	</tr> 
		
	<?php while($rows=mysqli_fetch_assoc($result)) { ?> 
		<tr> 
			<td><?php echo $rows['id']; ?></td> 
			<td><?php echo $rows['fname'] . " " . $rows['lname']; ?></td> 
			<td><?php echo $rows['email']; ?></td> 
            <td><?php echo $rows['pno']; ?></td> 
			
			<td><?php echo $rows['class']; ?></td> 
			<td><?php echo $rows['seatno']; ?></td> 
            
			
			<td><?php echo $rows['fno']; ?></td> 
			<td><?php echo $rows['status']; ?></td> 
			<td><?php echo $rows['prize']; ?></td> 
            <td style="display:flex;justify-content:space-between;">
            <div class="buttons-container">
                <button class="button-arounder approve-button"><a href="?approve_id=<?php echo $rows['id']; ?>" style="text-decoration:none; color:white;">Approve</a></button>
            </div>
            <div class="buttons-container">
                <button class="button-arounder cancel-button"><a href="?cancel_id=<?php echo $rows['id']; ?>" style="text-decoration:none; color:white;">Cancel</a></button>
            </div>
            </td>
			
		</tr> 
	<?php } ?> 
	</table>
