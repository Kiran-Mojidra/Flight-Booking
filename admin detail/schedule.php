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
    <?php include 'header.php';?>
	<div class="search-btn">
    <div class="form2">
        <i class="fa fa-search"></i>
        <input type="text" class="form-control form-input" placeholder="Search anything..." onkeyup="searchAdmin()" id="searchInput">
        <span class="left-pan"><i class="fa fa-microphone"></i></span>
    </div>
</div>
		
</div>
		

<div>
<?php 

include '../Connection.php';

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    
    // Delete the record from the database
    $delete_query = "DELETE FROM schedule WHERE fno = '$delete_id'";
    if (mysqli_query($conn, $delete_query)) {
        echo "<script>alert('Record deleted successfully');</script>";
        // Redirect back to this page to refresh the table
        echo "<script>window.location.href = 'schedule.php';</script>";
    } else {
        echo "<script>alert('Error deleting record: " . mysqli_error($conn) . "');</script>";
    }
}

$query = "SELECT * FROM schedule"; 
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
		<th colspan="8"><h2>Flight Schedule</h2></th> <!-- Changed colspan to 3 -->
	</tr> 
	<tr style="font-size:20px; border-bottom:2px solid black"> <!-- Moved the <tr> tag here -->
		<th> flight Id </th> 
		<th> Departure Time </th> 
		<th> Arrival Time  </th> 
		<th> Departure place </th> 
		<th> Arrival place </th>
		<th> Economy class Price </th>
        <th> Business class Price </th>
		<th> operation </th>  
		
	</tr> 
		
	<?php while($rows=mysqli_fetch_assoc($result)) { ?> 
		<tr> 
			<td><?php echo $rows['fno']; ?></td> 
			<td><?php echo $rows['departure']; ?></td> 
			<td><?php echo $rows['arrival']; ?></td> 
			<td><?php echo $rows['departure_place']; ?></td> 
			<td><?php echo $rows['arrival_place']; ?></td> 
			<td><?php echo $rows['prize']; ?></td> 
            <td><?php echo $rows['prize2']; ?></td> 
			<td><button style="background:#11222d; height:50px; width:100px; border-radius:10px;"><a href="?delete_id=<?php echo $rows['fno']; ?>" style="text-decoration:none; color:white;">Delete</a></button></td>
		</tr> 
	<?php } ?> 
	</table>
</div>

<?php
include 'footer.php';
?>

<script>
         function searchAdmin() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("adminTable");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[3]; // Search by username
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