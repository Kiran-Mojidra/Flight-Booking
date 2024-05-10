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

if (isset($_GET['refund_id'])) {
    $refund_id = $_GET['refund_id'];

    // Get the prize value from the database
    $query = "SELECT prize FROM pass_details WHERE id = '$refund_id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $prize = $row['prize'];

    // Update the refund column with the prize value
    $update_query = "UPDATE pass_details SET refund = '$prize' WHERE id = '$refund_id'";
    if (mysqli_query($conn, $update_query)) {
        echo "<script>alert('Refund successful!');</script>";
    } else {
        echo "<script>alert('Error occurred while refunding.');</script>";
    }
}

$query = "SELECT * FROM pass_details WHERE status = 'cancelled' AND refund = '0'";
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
		<th colspan="12"><h2>Refund Bookings</h2></th> <!-- Changed colspan to 3 -->
	</tr> 
	<tr style="font-size:20px;"> <!-- Moved the <tr> tag here -->
		<th> Customer Id </th> 
		<th> Name </th> 
		
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
			
            <td><?php echo $rows['pno']; ?></td> 
			
			<td><?php echo $rows['class']; ?></td> 
			<td><?php echo $rows['seatno']; ?></td> 
            
			
			<td><?php echo $rows['fno']; ?></td> 
			<td><?php echo $rows['status']; ?></td> 
			<td><?php echo $rows['prize']; ?></td> 
            <td><button style="background:Green; height:50px;width:100px;border-radius:10px;">
			<a href="?refund_id=<?php echo $rows['id']; ?>" style="text-decoration:none; color:white;"><i class="bi bi-cash-coin"></i>Refund</a>
		     </button></td>
			
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
