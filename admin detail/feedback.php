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
</head>
<body>
<?php include 'header.php'; ?>
    <section>

    <?php 
include '../Connection.php';

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    
    // Delete the record from the database
    $delete_query = "DELETE FROM feedback WHERE fid = '$delete_id'";
    if (mysqli_query($conn, $delete_query)) {
        echo "<script>alert('Record deleted successfully');</script>";
        // Redirect back to this page to refresh the table
        echo "<script>window.location.href = 'your_page.php';</script>";
    } else {
        echo "<script>alert('Error deleting record: " . mysqli_error($conn) . "');</script>";
    }
}

$query = "SELECT * FROM feedback"; 
$result = mysqli_query($conn, $query);
?> 


<style>
	body
	{
		background-color: whitesmoke;
	}
.feedback-card {
  display: flex;
  align-items: center;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  padding: 16px;
  margin: 30px;
    height: 200px;
    width: 500px;
}

.feedback-card img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  margin-right: 16px;
}

.feedback-details h3 {
  margin: 0;
  font-size: 18px;
  font-weight: bold;
}

.feedback-details p {
  margin: 4px 0;
  font-size: 18px;
  color: #666;
}

.rating {
  display: flex;
  align-items: center;
  font-size: 25px;
  color: #f5a623;
}

.rating .star {
  margin-right: 4px;
}

.rating .review-count {
  margin-left: 8px;
  font-size: 18px;
  color: #666;
}
.feedback-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 0 -8px; /* Adjust as needed */
        }

        .feedback-card {
            width: calc(50% - 16px); /* Adjust as needed */
            margin: 8px; /* Adjust as needed */
        }

        @media (max-width: 768px) {
            .feedback-card {
                width: calc(100% - 16px); /* Adjust as needed for smaller screens */
            }
        }
</style>

<h1 style="justify-content:center;background:#fff;height:50px;width:100%;margin:20px 10px;text-align:center;font-size:45px;">Feedback Details</h1>

<div class="feedback-container">
	<?php while($rows=mysqli_fetch_assoc($result)) { ?> 

		<div class="feedback-card">
  <img src="../Images/user.jpeg" alt="Jane Smith">
  <div class="feedback-details">
    <h3><?php echo $rows['fname']; ?></h3>
    <p><?php echo $rows['femailid']; ?></p>
    <p><?php echo $rows['feedback_detail']; ?></p>
    <div class="rating">
      <?php
      $rating = intval($rows['rate']); // Convert rating to integer
      for ($i = 1; $i <= 5; $i++) {
          if ($i <= $rating) {
              echo '<span class="star">&#9733;</span>'; // Full star for rating
          } else {
              echo '<span class="star">&#9734;</span>'; // Empty star for remaining
          }
      }
      ?>
      <span class="review-count"></span>
    </div>
  </div>
</div>





		
	<?php } ?> 
	
	</div>
	</div>



    </section>
    <?php include 'footer.php';?>
</body>
</html>