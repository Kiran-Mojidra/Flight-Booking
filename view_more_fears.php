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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css_class/main.css">
	<link rel="icon" href="Images/wings.png">
    <style>
	
	.slid-img img{
	box-sizing: border-box;
	height: 400px;
	width: 100%;
  object-fit: cover;
}
.intro{
	 height: 400px;
	 width: 100%;
	 padding:150px;
	 box-sizing: border-box;
	 position:relative;
	 bottom: 400px;
	 background: rgb(27, 27, 27,.5);
	 color: white;
	 transition: .5s;
} 
.intro h1{
	font-size: 40px;
	font-weight: 100;
}
.intro p{
	padding-top: 20px;
	font-size: 20px;
}
.main-slid-img{
    height: 450px;
    background-color: whitesmoke;
}
.offer3
        {
            background:white;
            height: 380px;
            width:  1170px;
            margin: 20px 20px 15px 70px;
            border-radius: 30px;
            overflow: hidden;
            position: relative;
            display: flex;
        }

        .offer3 img{
            width: 40%;
		height: 100%;
		
        border-bottom-left-radius: 10px;
        border-top-left-radius: 10px;
        flex: 1 1 25%;
        display: flex;
        }

		.offer-btn3 a{
		display: flex;
		color: black;
		padding-top: 10px;
        padding-left: 20px;
		justify-content: space-between;
		text-decoration: none;
        font-size: 20px;
        font-weight: 600;

    
	}

    .offer-btn3 svg{
		
        padding-right: 20px;
		height: 26px;
		width: 26px;
    
	}
	.card-main-btn2{
		font-size: 20px;
		font-weight: 200;
		color: white;
		background-color: rgb(7, 7, 70);
		text-decoration:none;
		border-color: rgb(7, 7, 70) ;
		border-radius: 30px;
		height: 60px;
		width: 350px;
		margin: 20px 160px;
	}

	.card-main-btn2 a{
		text-decoration: none;
		cursor: pointer;
		color:white;
		padding: 5px 20px ;
	}
	.offer-text3{
		margin-top: 40px;
		padding-left: 30px;
	}
	.offer-text3 h2
	{
	  font-weight: 800;
      font-size: 25px;
	  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    color: rgba(0, 0, 0, 0.948);
	
    padding: 20px 10px 5px 15px;
    margin-bottom: 0;
    
	}

    .offer-text3 p
	{
	
	  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    color: black;
    padding: 20px 10px 50px 30px;
     font-size: 18px;
    
	}
	

	.offer-text3 hr{
		padding-bottom: 0;
		margin-bottom: 0;
		margin-left: 20px;
        width: 90%;
	}
    </style>
    <title>Document</title>
</head>
<body>
    <?php include "header.php"; ?>
    <div>

        <div class="Main-slid-demo">
        <div class="main-slid-img">
    <div class="slid-img">
        <img src="images/ooty.webp" alt="Happy to travel with us">
        <div class="intro">
                <h1>Ready for your upcoming <br>trip with us?</h1>
                <p>Elevate your journey and turn it into a truly memorable experience.</p>
            </div>
        </div>
    </div>
    </div>
        </div>



        <!--card hover effect-->
	<!--**********************************************************************************************************************************-->
		<div class="card-box">
			<h1>Find Great Fares</h1>
			 <div class="card-main">
				<div class="card1">
					<img src="images/taj_hotel.jpg">
		 			<div class="card-body">
						<h1>Mumbai</h1>
						<p class="card-sub-title">Embark on an unforgettable journey through the heart of Mumbai, where each corner tells a story of resilience, culture, and boundless dreams.</p>
						<p class="card-info"><a href="Mumbai.php">Discover</a></p>
						<button class="card-btn" data-destination="Mumbai">Book Now</button>
						
					</div>
				</div>

				<div class="card-sub-main">
					<div class="card2">
					<img src="images/delhi_Toor.jpg">
		 			<div class="card-body">
						<h1>Delhi</h1>
						<p class="card-sub-title">Explore Delhi like never before with our enriching tour, where the monumental India Gate and the serene Lodhi Gardens are just a glimpse into the city's fascinating story.</p>
						<p class="card-infos"><a href="Delhi.php">Discover</a></p>
						<button class="card-btn" data-destination="Delhi">Book Now</button>
					</div>
					</div>
					<div class="card2">
					<img src="images/Goa.jpg">
		 			<div class="card-body">
						<h1>GOA</h1>
						<p class="card-sub-title">Discover the charm of Goa, where palm-fringed shores, lively markets, and historic churches create an unforgettable coastal experience.</p>
						<p class="card-infos"><a href="Goa.php">Discover</a></p>
		       			<button class="card-btn" data-destination="GOA">Book Now</button>
					</div>
					</div>
				</div>
			 </div>

			 <div class="card-main">
			 <div class="card-sub-main">
					<div class="card2">
					<img src="images/kolkata.jpg">
		 			<div class="card-body">
						<h1>Kolkata</h1>
						<p class="card-sub-title">Discover Kolkata, where the aroma of street food blends with the elegance of colonial architecture, creating a sensory feast for all.</p>
						<p class="card-infos"><a href="Kolkata.php">Discover</a></p>
						<button class="card-btn" data-destination="Kolkata">Book Now</button>
					</div>
					</div>
					<div class="card2">
					<img src="images/jaisalmer.webp">
		 			<div class="card-body">
						<h1>Jaisalmer</h1>
						<p class="card-sub-title">Explore the ethereal beauty of Jaisalmer, where the Fort Palace and Jain Temples narrate stories of valor, opulence, and spiritual devotion.</p>
						<p class="card-infos"><a href="Jaisalmer.php">Discover</a></p>
		       			<button class="card-btn" data-destination="Jaisalmer">Book Now</button>
					</div>
					</div>
				</div>
				<div class="card1">
				<img src="images/Ahemdabad_Kariya.jpg">
		 			<div class="card-body">
						<h1>Ahemdabad</h1>
						<p class="card-sub-title">Step into Ahmedabad, where the vibrant colors of its festivals, like Uttarayan and Navratri, paint the sky and streets with joyous celebration.</p>
						<p class="card-info"><a href="Ahemdabad.php">Discover</a></p>
		       			<button class="card-btn" data-destination="Ahemdabad">Book Now</button>
					</div>
				</div>
				
			 </div>

             <div class="card-main">
				<div class="card1">
					<img src="images/ooty.webp">
		 			<div class="card-body">
						<h1>Ooty</h1>
						<p class="card-sub-title">Visitors can explore the lush tea plantations and enjoy panoramic views of the valleys.</p>
						<p class="card-info"><a href="Ooty.php">Discover</a></p>
						<button class="card-btn" data-destination="Ooty">Book Now</button>
						
					</div>
				</div>

				<div class="card-sub-main">
					<div class="card2">
					<img src="images/banglore.jpg">
		 			<div class="card-body">
						<h1>Bangalore</h1>
						<p class="card-sub-title">Visitors can explore the lush greenery of Cubbon Park and the iconic Lalbagh Botanical Garden.</p>
						<p class="card-infos"><a href="Bangalor.php">Discover</a></p>
						<button class="card-btn" data-destination="Bangalore">Book Now</button>
					</div>
					</div>
					<div class="card2">
					<img src="images/delhi.jpg">
		 			<div class="card-body">
						<h1>Agra</h1>
						<p class="card-sub-title">Agra offers a captivating blend of history, culture, and architectural wonders, making it a must-visit destination for tourists.</p>
						<p class="card-infos"><a href="Agra.php">Discover</a></p>
		       			<button class="card-btn" data-destination="Agra">Book Now</button>
					</div>
					</div>
				</div>
			 </div>



             <div class="card-main">
			 <div class="card-sub-main">
					<div class="card2">
					<img src="images/kutch.webp">
		 			<div class="card-body">
						<h1>Kutch</h1>
						<p class="card-sub-title">Visit the iconic Rann Utsav, a cultural extravaganza showcasing the best of Kutchi art, music, and dance.</p>
						<p class="card-infos"><a href="Kutch.php">Discover</a></p>
						<button class="card-btn" data-destination="Kutch">Book Now</button>
					</div>
					</div>
					<div class="card2">
					<img src="images/chennai.jpg">
		 			<div class="card-body">
						<h1>Chennai</h1>
						<p class="card-sub-title"> Gateway to the South," is a bustling metropolis situated on the Coromandel Coast of the Bay of Bengal.</p>
						<p class="card-infos"><a href="Chennai.php">Discover</a></p>
		       			<button class="card-btn" data-destination="Chennai">Book Now</button>
					</div>
					</div>
				</div>
				<div class="card1">
				<img src="images/haidrabad.jpg">
		 			<div class="card-body">
						<h1>Hyderabad</h1>
						<p class="card-sub-title">With its architectural marvels, culinary delights, and cultural attractions, Hyderabad offers a memorable experience for tourists on a tour</p>
						<p class="card-info"><a href="Hyderabad.php">Discover</a></p>
		       			<button class="card-btn" data-destination="Hyderabad">Book Now</button>
					</div>
				</div>
				
			 </div>


		</div>  

<script>
	// to store data into index page
document.querySelectorAll('.card-btn').forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault(); // Prevent the default button behavior
        const destination = e.target.getAttribute('data-destination');
        window.location.href = 'index.php?destination=' + destination;
    });
});
</script>
        <!--===============================================================================================================================

        <div class="main-offer">
        <h1>Where would you like to go next?</h1>
	<p>Discover the latest offers and news and start planning your next trip</p>
        <div class="offers">
            <div class="offer1">
                <img src="Images/holidays.jpg" />
                <div class="offer-text">
                    <h2>Your Perfect Holiday Awaits</h2>
                    <p>Step into a world of wonder and luxury, where your perfect holiday unfolds with every breathtaking moment.</p>
                    <hr>
                    <div class="offer-btn">
                    
                          <a href="Holiday.php" aria-label="Find flights and fares" target="_blank" role="button" tabindex="0">
                          Book holiday package
                          <span class="icon-arrow-right3">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
 				 <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
						</svg></i></span> 
                           </a>
                    </div>
              </div>
            </div>

            <div class="offer1">
                <img src="Images/exclusive.jpg" />
                <div class="offer-text">
                    <h2>Explore multiple Destinations for Toor</h2>
                    <p>Discover the remarkable destinations we fly to, and find the latest fares all in one place.</p>
                    <hr>
                    <div class="offer-btn">
                    
                          <a href="explor_destination.php" aria-label="Find flights and fares" target="_blank" role="button" tabindex="0">
                          Book your journey now
                          <span class="icon-arrow-right3">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
 				 <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
						</svg></i></span> 
                           </a>
                    </div>
              </div>
            </div>

        </div>

        <div class="offer3">
                                <img src="Images/happy_family2.webp" />
                                    <div class="offer-text3">
                                          <h3>Elevate Your Experience</h3>
                                          <p>Experience the pinnacle of luxury and sophistication as we elevate your journey with exclusive experiences and exceptional service.</p>
                                             <hr>
                                        <div class="offer-btn3">
                                            <button class="card-main-btn2">
                                            <a href="evevate.php">Explore add-on service</a>
                                            </button>
                                         </div>
                                    </div>
            </div>
        </div>



    </div>-->

    <?php include "footer.php"; ?>
</body>
</html>