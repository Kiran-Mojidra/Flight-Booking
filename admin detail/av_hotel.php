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
        .form2 {
            position: relative;
        }

        .form2 .fa-search {
            position: absolute;
            top: 20px;
            left: 20px;
            color: #9ca3af;
        }

        .form2 span {
            position: absolute;
            right: 17px;
            top: 13px;
            padding: 2px;
            border-left: 1px solid #d1d5db;
        }

        .left-pan {
            padding-left: 7px;
        }

        .left-pan i {
            padding-left: 10px;
        }

        .form-input {
            height: 55px;
            width: 800px;
            text-indent: 33px;
            border-radius: 10px;
        }

        .form-input:focus {
            box-shadow: none;
            border: none;
        }

        .search-btn {
            margin: 10px 300px;
            width: 100%;
        }

		html {
            box-sizing: border-box;
          }
      
          *, *::before, *::after {
            margin: 0;
            padding: 0;
            box-sizing: inherit;
          }
      
          html, body {
            width: 100%;
            height: 100%;
          }
      
          body {
            background:whitesmoke;
            color: #fff;
            font-size: 18px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
          }
    
        

        .hbtn a{
          color: white;
          text-decoration: none;
          font-size:16px;
        }
        body{
			background-color: whitesmoke;
		}
    </style>
</head>
<body>

           
             <?php include 'header.php'; ?>
             <style>
                /* Image gallery stlyling */
        .container_hotel {
          max-width: 300px;
          
          text-align: center;
        }
    
        .container__img-holder {
          max-width: 280px;
          display: inline-block;
          vertical-align: top;
          margin-bottom: 20px;
          margin-left: 16px;
          cursor: pointer;
        }
    
        .container_hotel .container__img-holder:nth-child(3n+1) {
          margin-left: 0;
        }
    
        .container__img-holder img {
          width: 100%;
          height: 60px;
          display: block;
        }
    
    
        /* Popup Styling */
        .img-popup {
          position: fixed;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          background: rgba(255, 255, 255, .5);
          display: flex;
          justify-content: center;
          align-items: center;
          display: none;
        }
    
        .img-popup img {
          max-width: 900px;
          width: 100%;
          opacity: 0;
          transform: translateY(-100px);
          -webkit-transform: translateY(-100px);
          -moz-transform: translateY(-100px);
          -ms-transform: translateY(-100px);
          -o-transform: translateY(-100px);
        }
    
        .close-btn {
          width: 35px;
          height: 30px;
          display: flex;
          justify-content: center;
          flex-direction: column;
          position: absolute;
          top: 20px;
          right: 20px;
          cursor: pointer;
        }
    
        .close-btn .bar {
          height: 4px;
          background: #333;
        }
    
        .close-btn .bar:nth-child(1) {
          transform: rotate(45deg);
        }
    
        .close-btn .bar:nth-child(2) {
          transform: translateY(-4px) rotate(-45deg);
        }
    
        .opened {
          display: flex;
        }
    
        .opened img {
          animation: animatepopup 1s ease-in-out .8s;
          -webkit-animation: animatepopup .3s ease-in-out forwards;
        }
    
        @keyframes animatepopup {
          to {
            opacity: 1;
            transform: translateY(0);
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
          }
        }
    
        @media screen and (max-width: 880px) {
          .container_hotel .container__img-holder:nth-child(3n+1) {
            margin-left: 16px;
          }
        }
    
        .offer2{
          background:white;
                height: 280px;
                width: 80%;
                margin: 10px 10px 15px 150px;
               /* border-radius: 30px; */
                overflow: hidden;
                position: relative;
                display: flex;
        }
        .offer-text2,.rooms{
          position: relative;
        padding: var(--f-base-space-6);
        letter-spacing: 0;
        height: 100%;
        width:200px;
        }
        .offer-text2,.rooms h3
        {
            font-size: 20px;
          font-weight: 500;
          display: flex;
          font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        color: rgba(0, 0, 0, 0.948);
        padding: 15px 10px 5px 15px;
        margin-bottom: 0;
        
        }
    
        .offer-text2,.rooms p
        {
        
          font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        color: black;
        padding: 10px 10px 10px 20px;
         font-size: 15px;
        
        }
        .offer-text2,.rooms hr{
            padding-bottom: 0;
            margin-bottom: 0;
            width: 40%;
        display: inline;
        }
        
        .hbtn{
            background:#152B4D;
            color:white;
            height:30px;
            width:150px;
            font-size:16px;
        }
            </style>
    <div style="width:100%;height:55px;background:white;text-align: center;color:black;">
        <h1>Manage Hotel Details</h1>
    </div>

    <div class="search-btn">
        <div class="form2">
            <i class="fa fa-search"></i>
            <input type="text" class="form-control form-input" placeholder="Search anything..." id="searchInput">
            <span class="left-pan"><i class="fa fa-microphone"></i></span>
        </div>
    </div>

    <section>
        <div id="resultContainer">
            <?php
                include '../Connection.php';
                if (isset($_GET['delete_id'])) {
                    $delete_id = $_GET['delete_id'];
                    $delete_query = "DELETE FROM hotel WHERE hid = '$delete_id'";
                    if (mysqli_query($conn, $delete_query)) {
                        echo "<script>alert('Record deleted successfully');</script>";
                        echo "<script>window.location.href = 'av_hotel.php';</script>";
                    } else {
                        echo "<script>alert('Error deleting record: " . mysqli_error($conn) . "');</script>";
                    }
                }
                $query = "SELECT * FROM hotel";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                
            ?>
             while($row = mysqli_fetch_assoc($result)) {
            ?>

            <style>
                /* Image gallery stlyling */
        .container_hotel {
          max-width: 300px;
          
          text-align: center;
        }
    
        .container__img-holder {
          max-width: 280px;
          display: inline-block;
          vertical-align: top;
          margin-bottom: 20px;
          margin-left: 16px;
          cursor: pointer;
        }
    
        .container_hotel .container__img-holder:nth-child(3n+1) {
          margin-left: 0;
        }
    
        .container__img-holder img {
          width: 100%;
          height: 60px;
          display: block;
        }
    
    
        /* Popup Styling */
        .img-popup {
          position: fixed;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          background: rgba(255, 255, 255, .5);
          display: flex;
          justify-content: center;
          align-items: center;
          display: none;
        }
    
        .img-popup img {
          max-width: 900px;
          width: 100%;
          opacity: 0;
          transform: translateY(-100px);
          -webkit-transform: translateY(-100px);
          -moz-transform: translateY(-100px);
          -ms-transform: translateY(-100px);
          -o-transform: translateY(-100px);
        }
    
        .close-btn {
          width: 35px;
          height: 30px;
          display: flex;
          justify-content: center;
          flex-direction: column;
          position: absolute;
          top: 20px;
          right: 20px;
          cursor: pointer;
        }
    
        .close-btn .bar {
          height: 4px;
          background: #333;
        }
    
        .close-btn .bar:nth-child(1) {
          transform: rotate(45deg);
        }
    
        .close-btn .bar:nth-child(2) {
          transform: translateY(-4px) rotate(-45deg);
        }
    
        .opened {
          display: flex;
        }
    
        .opened img {
          animation: animatepopup 1s ease-in-out .8s;
          -webkit-animation: animatepopup .3s ease-in-out forwards;
        }
    
        @keyframes animatepopup {
          to {
            opacity: 1;
            transform: translateY(0);
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
          }
        }
    
        @media screen and (max-width: 880px) {
          .container_hotel .container__img-holder:nth-child(3n+1) {
            margin-left: 16px;
          }
        }
    
        .offer2{
          background:white;
                height: 280px;
                width: 80%;
                margin: 10px 10px 15px 150px;
               /* border-radius: 30px; */
                overflow: hidden;
                position: relative;
                display: flex;
        }
        .offer-text2,.rooms{
          position: relative;
        padding: var(--f-base-space-6);
        letter-spacing: 0;
        height: 100%;
        width:200px;
        }
        .offer-text2,.rooms h3
        {
            font-size: 20px;
          font-weight: 500;
          display: flex;
          font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        color: rgba(0, 0, 0, 0.948);
        padding: 15px 10px 5px 15px;
        margin-bottom: 0;
        
        }
    
        .offer-text2,.rooms p
        {
        
          font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        color: black;
        padding: 10px 10px 10px 20px;
         font-size: 15px;
        
        }
        .offer-text2,.rooms hr{
            padding-bottom: 0;
            margin-bottom: 0;
            width: 40%;
        display: inline;
        }
        
        .hbtn{
            background:#152B4D;
            color:white;
            height:30px;
            width:150px;
            font-size:16px;
        }
            </style>
            <div class='offer2' id="resultContainer">
                <div>
                    <img src='../images/<?php echo $row['hotel_img']; ?>' style='height: 200px;width: 300px;'/>
                    <div class='container_hotel'>
                        <?php 
                            $rooms_images = explode(',', $row['rooms_img']);
                            foreach ($rooms_images as $room_image) {
                                echo "<div class='container__img-holder'>
                                        <img src='../images/$room_image' alt='Room Image'>
                                      </div>";
                            }
                        ?>
                    </div>
                </div>
                <div class='offer-text2'>
                    <h3><?php echo $row['hid']; ?></h3><br>
                    <h3><?php echo $row['hotel_name']; ?></h3><br>
                    <p><img class='icLocAlt appendRight8' src='../Icons/geo-alt.svg' alt='icon'><?php echo $row['location']; ?></p><br>
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
                    <h3><?php echo $row['room_prize']; ?></h3>
                </div>
                <div class='rooms'>
                    <h3>Luxury Room price</h3>
                    <p>Your price includes:<br>
                    Cancellation policy<br>
                    Parking, Free WiFi</p>
                    <h3><?php echo $row['Luxary_prize']; ?></h3>
                </div>

				<button style="background:#11222d; height:50px; width:100px; border-radius:10px;">
                            <a href="?delete_id=<?php echo $row['hid']; ?>" style="text-decoration:none; color:white;">Delete</a>
                        </button>

            </div>
            <?php } ?>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script>
        // Wait for the DOM to load
        document.addEventListener('DOMContentLoaded', function() {
            // Get the search input and form elements
            const searchInput = document.getElementById('searchInput');
            const searchForm = document.querySelector('.form2');

            // Add an event listener to the search input
            searchInput.addEventListener('input', function() {
                const searchTerm = searchInput.value.trim();

                // Send an AJAX request to the server
                const xhr = new XMLHttpRequest();
                xhr.open('GET', 'ajax_search.php?term=' + encodeURIComponent(searchTerm), true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // Update the display with the search results
                        const resultContainer = document.getElementById('resultContainer');
                        resultContainer.innerHTML = xhr.responseText;
                    }
                };
                xhr.send();
            });
        });
    </script>
</body>
</html>