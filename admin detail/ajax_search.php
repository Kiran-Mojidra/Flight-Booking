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
include 'Connection.php'; // Assuming Connection.php is in the same directory

// Get the search term from the query string
$searchTerm = isset($_GET['term']) ? $_GET['term'] : '';

// Prepare the SQL query
$query = "SELECT * FROM hotel WHERE hid LIKE '%$searchTerm%' OR hotel_name LIKE '%$searchTerm%'";

// Execute the query
$result = mysqli_query($conn, $query);

// Loop through the results and display them
while ($row = mysqli_fetch_assoc($result)) {
    // Your HTML code for displaying each hotel goes here
    // You can use the same code you have in your original file
    echo "<div class='offer2'>
	<div>
		<img src='../images/{$row['hotel_img']}' style='height: 200px; width: 300px;'/>
		<div class='container_hotel'>
			" . displayRoomImages($row['rooms_img']) . "
		</div>
	</div>
	<div class='offer-text2'>
		<h3>{$row['hid']}</h3><br>
		<h3>{$row['hotel_name']}</h3><br>
		<p><img class='icLocAlt appendRight8' src='../Icons/geo-alt.svg' alt='icon'>{$row['location']}</p><br>
		<p>Facilities</p>
		<ul style='font-weight:200;list-style-type:circle;'>
			<li>Restaurants</li>
			<li>Luggage storage</li>
			<li>Laundry service</li>
			<li>Check-in and Check-out details are provided upon your arrival here.</li>
		</ul>
	</div>
	<div class='rooms'>
		<h3>Simple Room price</h3>
		<p>Your price includes:<br>
		Cancellation policy<br>
		Parking, Free WiFi</p>
		<h3>{$row['room_prize']}</h3>
	</div>
	<div class='rooms'>
		<h3>Luxury Room price</h3>
		<p>Your price includes:<br>
		Cancellation policy<br>
		Parking, Free WiFi</p>
		<h3>{$row['Luxary_prize']}</h3>
	</div>
	<button style='background:#11222d; height:50px; width:100px; border-radius:10px;'>
		<a href='?delete_id={$row['hid']}' style='text-decoration:none; color:white;'>Delete</a>
	</button>
</div>";
}

// If no results were found, display a message
if (mysqli_num_rows($result) === 0) {
echo "<p>No results found.</p>";
}

// Function to display room images
function displayRoomImages($roomsImgStr) {
    $output = '';
    $roomsImages = explode(',', $roomsImgStr);
    foreach ($roomsImages as $roomImage) {
        $output .= "<div class='container__img-holder'>
                        <img src='../images/$roomImage' alt='Room Image'>
                    </div>";
    }
    return $output;
}