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
    <title>Cancle booking details</title>
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
	width: 100%;
}
	</style>
</head>
<body>
<?php include 'header.php'; ?>
<div class="search-btn">
    <div class="form2">
    <i class="fa fa-search"></i>
    <input type="text" class="form-control form-input" placeholder="Search anything..." onkeyup="searchAdmin()" id="searchInput">
    <span class="left-pan"><i class="fa fa-microphone"></i></span>

	
</div>
</div>
<?php 
include '../Connection.php';


if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    
    // Delete the record from the database
    $delete_query = "DELETE FROM hotel_cust_detail WHERE uid = '$delete_id'";
    if (mysqli_query($conn, $delete_query)) {
        echo "<script>alert('Record deleted successfully');</script>";
        // Redirect back to this page to refresh the table
        echo "<script>window.location.href = 'cancle_book.php';</script>";
    } else {
        echo "<script>alert('Error deleting record: " . mysqli_error($conn) . "');</script>";
    }
}

$query = "SELECT * FROM hotel_cust_detail WHERE status = 'cancelled'"; 
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

    
</style>

<table class="user-detail2" id="adminTable"> 
	<tr> 
		<th colspan="12"><h2>All canceled Hotel Booking</h2></th> <!-- Changed colspan to 3 -->
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
            <td><button style="background:red; height:50px;width:100px;border-radius:10px;"><a href="?delete_id=<?php echo $rows['uid']; ?>" style="text-decoration:none; color:white;">Delete</a></button></td>

			
		</tr> 
	<?php } ?> 
	</table>
	</div>
	</div>
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

	<?php include 'footer.php';?>
</body>
</html>

