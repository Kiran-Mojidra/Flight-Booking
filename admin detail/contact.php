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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link rel="icon" href="../Images/wings.png">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php include 'header.php'; ?>
    <section>

    <?php 
include '../Connection.php';

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    
    // Delete the record from the database
    $delete_query = "DELETE FROM contact_us WHERE cid = '$delete_id'";
    if (mysqli_query($conn, $delete_query)) {
        echo "<script>alert('Record deleted successfully');</script>";
        // Redirect back to this page to refresh the table
        echo "<script>window.location.href = 'contact.php';</script>";
    } else {
        echo "<script>alert('Error deleting record: " . mysqli_error($conn) . "');</script>";
    }
}

$query = "SELECT * FROM contact_us"; 
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
<table class="user-detail2"> 
	<tr> 
		<th colspan="7"><h2>Quries</h2></th> <!-- Changed colspan to 3 -->
	</tr> 
	<tr style="font-size:20px;"> <!-- Moved the <tr> tag here -->
		<th> Contact Id </th> 
		<th> First Name </th> 
		<th> Last Name </th> 
		<th> Email </th> 
		<th> Mobile No </th>
		<th> Messages </th>
		<th> operation </th>  
		
	</tr> 
		
	<?php while($rows=mysqli_fetch_assoc($result)) { ?> 
		<tr> 
			<td><?php echo $rows['cid']; ?></td> 
			<td><?php echo $rows['cfname']; ?></td> 
			<td><?php echo $rows['clname']; ?></td> 
			<td><?php echo $rows['email']; ?></td> 
			<td><?php echo $rows['cmobile']; ?></td> 
			<td><?php echo $rows['cmessage']; ?></td> 
			<td><button style="background:#11222d; height:50px;width:100px;border-radius:10px;"><a href="?delete_id=<?php echo $rows['cid']; ?>" style="text-decoration:none; color:white;">Delete</a></button></td>
		</tr> 
	<?php } ?> 
	</table>
	</div>
	</div>



    </section>

	<?php include 'footer.php';?>
</body>
</html>