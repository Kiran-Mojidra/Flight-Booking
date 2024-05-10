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
    <link rel="icon" href="../Images/wings.png">
    <title>Document</title>
    <style>
        /**search btn */
		body{
			background-color: whitesmoke;
		}
.form2{

position: relative;
}

.form2 .fa-search{

position: absolute;
top:20px;
left: 20px;
color: #9ca3af;

}

.form2 span{

	position: absolute;
right: 17px;
top: 13px;
padding: 2px;
border-left: 1px solid #d1d5db;

}

.left-pan{
padding-left: 7px;
}

.left-pan i{

padding-left: 10px;
}

.form-input{

height: 55px;
width: 800px;
text-indent: 33px;
border-radius: 10px;
}

.form-input:focus{

box-shadow: none;
border:none;
}

.search-btn{
	margin: 10px 300px;
	
}
    </style>
</head>
<body>
<?php include 'header.php'; ?>
<div class="search-btn">
    <div class="form2">
        <i class="fa fa-search"></i>
        <input type="text" class="form-control form-input" placeholder="Search anything..." id="searchInput" onkeyup="searchAdmin()">
        <span class="left-pan"><i class="fa fa-microphone"></i></span>
    </div>
</div>
<?php 
include '../Connection.php';

if (isset($_GET['approve_id'])) {
    $approve_id = $_GET['approve_id'];
    
    // Update the status to 'approved' in the database
    $approve_query = "UPDATE hotel_cust_detail SET status = 'approved' WHERE uid = '$approve_id'";
    if (mysqli_query($conn, $approve_query)) {
        echo "<script>alert('Status updated to approved successfully');</script>";
        // Redirect back to this page to refresh the table
        echo "<script>window.location.href = 'pending_booking.php';</script>";
    } else {
        echo "<script>alert('Error updating status: " . mysqli_error($conn) . "');</script>";
    }
}

if (isset($_GET['cancel_id'])) {
    $cancel_id = $_GET['cancel_id'];
    
    // Update the status to 'cancelled' in the database
    $cancel_query = "UPDATE hotel_cust_detail SET status = 'cancelled' WHERE uid = '$cancel_id'";
    if (mysqli_query($conn, $cancel_query)) {
        echo "<script>alert('Status updated to cancelled successfully');</script>";
        // Redirect back to this page to refresh the table
        echo "<script>window.location.href = 'pending_booking.php';</script>";
    } else {
        echo "<script>alert('Error updating status: " . mysqli_error($conn) . "');</script>";
    }
}

$query = "SELECT * FROM hotel_cust_detail WHERE status = 'pending'"; 
$result = mysqli_query($conn, $query);



?>


<style>
    .user-detail2
    {
        width:1450px;
        text-align:center; 
        line-height:40px;
         margin:30px;
         text-align:center;
         border:0px;
         outline: none;
         background-color: white;
         border-radius: 10px;

    }

    .buttons-container {
        width: 50%;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    button {
        border: solid 2px black;
        padding: .375em 1.125em;
        font-size: 1rem;
        border-radius: 5px;
    }

    .button-arounder {
        color: white;
        box-shadow: 0 0px 0px hsla(190deg, 15%, 5%, .2);
        transfrom: translateY(0);
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px;
        --dur: .15s;
        --delay: .15s;
        --radius: 16px;
        transition:
            border-top-left-radius var(--dur) var(--delay) ease-out,
            border-top-right-radius var(--dur) calc(var(--delay) * 2) ease-out,
            border-bottom-right-radius var(--dur) calc(var(--delay) * 3) ease-out,
            border-bottom-left-radius var(--dur) calc(var(--delay) * 4) ease-out,
            box-shadow calc(var(--dur) * 4) ease-out,
            transform calc(var(--dur) * 4) ease-out;
    }

    .button-arounder:hover,
    .button-arounder:focus {
        box-shadow: 0 4px 8px hsla(190deg, 15%, 5%, .2);
        transform: translateY(-4px);
    }

    .approve-button {
        background: #11222d;
    }

    .cancel-button {
        background: red;
    }
</style>

<table class="user-detail2" id="adminTable"> 
	<tr> 
		<th colspan="12"><h2>Pending Request For Hotel Booking</h2></th> <!-- Changed colspan to 3 -->
	</tr> 
	<tr style="font-size:20px;"> <!-- Moved the <tr> tag here -->
		<th> Customer Id </th> 
		<th> Name </th> 
		<th> Email </th> 
		<th> Hotel Id </th> 
		<th> Hotel Name </th>
        
		<th> Arrival Date </th> 
		<th> Leaving Date</th>
		<th> Members </th>
		<th> Rooom </th>  
        <th> Status </th>
		<th> Price/per room </th>  
        <th> Operation </th> 
		
	</tr> 
		
	<?php while($rows=mysqli_fetch_assoc($result)) { ?> 
		<tr> 
			<td><?php echo $rows['uid']; ?></td> 
			<td><?php echo $rows['uname']; ?></td> 
			<td><?php echo $rows['email']; ?></td> 
			<td><?php echo $rows['hid']; ?></td> 
			<td><?php echo $rows['hname']; ?></td> 
			<td><?php echo $rows['checkIn']; ?></td> 
            
			<td><?php echo $rows['checkOut']; ?></td> 
			<td><?php echo $rows['member']; ?></td> 
			<td><?php echo $rows['room']; ?></td> 
			<td><?php echo $rows['status']; ?></td> 
			<td><?php echo $rows['amount']; ?></td> 
            <td style="display:flex;justify-content:space-between;">
            <div class="buttons-container">
                <button class="button-arounder approve-button"><a href="?approve_id=<?php echo $rows['uid']; ?>" style="text-decoration:none; color:white;">Approve</a></button>
            </div>
            <div class="buttons-container">
                <button class="button-arounder cancel-button"><a href="?cancel_id=<?php echo $rows['uid']; ?>" style="text-decoration:none; color:white;">Cancel</a></button>
            </div>
            </td>
			
		</tr> 
	<?php } ?> 
	</table>
	</div>
	</div>
    <?php include 'footer.php';?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
       function searchAdmin() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("adminTable");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1]; // Search by username
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</body>
</html>
