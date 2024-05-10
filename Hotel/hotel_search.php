<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // User is not logged in, redirect to the login page
    header("Location: login_user.php");
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
<?php include '../header.php'; ?>
    

<section>

    <?php
    // Get data from text-box1
$place = isset($_POST['stay']) ? $_POST['stay'] : "not entered";

// Get data from text-box2
$checkIn = isset($_POST['checkIn']) ? $_POST['checkIn'] : "not entered";

// Get data from text-box3
$checkOut = isset($_POST['checkOut']) ? $_POST['checkOut'] : "not entered";

// Get data from text-box4
$adult = isset($_POST['adult']) ? $_POST['adult'] : "not entered";

// Get data from text-box4
$child = isset($_POST['child']) ? $_POST['child'] : "not entered";

// Get data from text-box4
$room = isset($_POST['room']) ? $_POST['room'] : "not entered";




//code for display hotels

include("../Connection.php");

if(isset($_POST['search_hotel'])) {
    
    $query = "SELECT * FROM `hotel` WHERE name = '$place'";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);

if ($total != 0) {
    while ($result = mysqli_fetch_assoc($data)) {
        echo "
        <form method='post'>
        <style>
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

        .hbtn a{
          color: white;
          text-decoration: none;
          font-size:16px;
        }
      </style>




        <div class='offer2'>
        <!-- Image and Image Gallery -->
        <div>
            <img src='../images/{$result['hotel_img']}' style='height: 200px;width: 300px;'/>
            <div class='container_hotel'>";
        
        // Split the rooms images string into an array
        $rooms_images = explode(',', $result['rooms_img']);
        foreach ($rooms_images as $room_image) {
            echo "<div class='container__img-holder'>
                    <img src='../images/$room_image' alt='Room Image'>
                  </div>";
        }
        
        echo "</div>
            </div>
            
            <!-- Offer and Rooms Text -->
            <div class='offer-text2'>
            <h3> ". $result['hid'] . "</h3><br>
                <h3> ". $result['hotel_name'] . "</h3><br>
                <p><img class='icLocAlt appendRight8' src='../Icons/geo-alt.svg' alt='icon'>" . $result['location'] . "</p><br>
                <p>Facilities</p>
                <ul style='font-weight:200;list-style-type:circle;'>
                <li>Restaurants</li>
                <li>Luggage storage</li>
                <li>Laundry service</li>
                </ul>
            </div>
            
            <div class='rooms'>
                <h3>Simple Room</h3>
                <p>Your price includes:<br>
                Cancellation policy<br>
                Parking, Free WiFi</p>
                <h3>". $result['room_prize'] ."</h3>
                
                        <button name='nr' class='hbtn'>
                            <a href='hotel_detail.php?hotelid=".$result['hid']."&total_price=". $result['room_prize'] ."&checkIn=$checkIn&checkOut=$checkOut&adult=$adult&child=$child&room=$room'>
                                Book Now
                            </a>
                        </button>
            

            </div>
            
            <div class='rooms'>
                <h3>Luxury Room</h3>
                <p>Your price includes:<br>
                Cancellation policy<br>
                Parking, Free WiFi</p>
                <h3>". $result['Luxary_prize'] ."</h3>
               
            <button name='lr' class='hbtn'>
                <a href='hotel_detail.php?hotelid=".$result['hid']."&total_price=". $result['Luxary_prize'] ."&checkIn=$checkIn&checkOut=$checkOut&adult=$adult&child=$child&room=$room'>
                    Book Now
                </a>
            </button>


            </div>
        </div>
        
        
      </section>
        
        ";
    }

   
} else {
    echo "<script>alert('No flights have been scheduled for the provided departure and arrival places.');
    window.location.href = '../stay.php';
    </script>
    </form>
    ";
}
}


    ?>

   

<?php include '../footer.php'; ?>
</body>
</html>