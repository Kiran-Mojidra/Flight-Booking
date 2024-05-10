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
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css_class/main.css">
  <link rel="icon" href="Images/wings.png">
    <title>Document</title>
    <style>
        body {
  margin:0px;
  padding: 0px;
  background-color: whitesmoke;
}

.inner-heade h1 {
  font-family: 'Lato', sans-serif;
  font-weight:300;
  letter-spacing: 2px;
  font-size:48px;
}


.header {
  position:relative;
  text-align:center;
  background:url(Images/holidays.jpg) no-repeat;
  background-size: cover;
  color:rgba(5, 5, 65, 0.967);
  margin-bottom: 30px;
}


.inner-header {
  height:300px;
  width:100%;
  margin: 0;
  padding: 100px;
}

.flex { /*Flexbox for containers*/
  
  justify-content: center;
  align-items: center;
  text-align: center;
}

.waves {
  position:relative;
  width: 100%;
  height:15vh;
  margin-bottom:-7px; /*Fix for safari gap*/
  min-height:100px;
  max-height:150px;
}

.content {
  position:relative;
  height:20vh;
  text-align:center;
  background-color: white;
}

/* Animation */

.parallax > use {
  animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
}
.parallax > use:nth-child(1) {
  animation-delay: -2s;
  animation-duration: 7s;
}
.parallax > use:nth-child(2) {
  animation-delay: -3s;
  animation-duration: 10s;
}
.parallax > use:nth-child(3) {
  animation-delay: -4s;
  animation-duration: 13s;
}
.parallax > use:nth-child(4) {
  animation-delay: -5s;
  animation-duration: 20s;
}
@keyframes move-forever {
  0% {
   transform: translate3d(-90px,0,0);
  }
  100% { 
    transform: translate3d(85px,0,0);
  }
}
/*Shrinking for mobile*/
@media (max-width: 768px) {
  .waves {
    height:40px;
    min-height:40px;
  }
  .content {
    height:30vh;
  }
.inner-header h1 {
    font-size:24px;
  }
}


/** text */
.ahemdabad-content{
	/*background-color: white;*/
	width: 100%;
	/*height: 2000px;*/
	margin-top: 40px;
}

.amd-city-main{
	margin: 80px 80px 30px 100px;
}

.amd-city-main h1{
	color: #152B4D;
	font-weight: 700;
	font-size: 40px;
	margin-top: 80px;
}

.sub-amd{
	display: flex;
}

.sub-amd p{
	font-size: 20px;
	color: #152B4D;
	flex: 4;
}

    </style>
</head>
<body>
    <?php include 'header.php';?>
        <!--Hey! This is the original version
of Simple CSS Waves-->

<div class="header">

<!--Content before waves-->
<div class="inner-header flex">
    <!--Just the logo.. Don't mind this-->
    
    <h1>ABOUT UDDAN</h1>
    <p style="font-size:24px;">Learn what we are all about</p>
</div>

<!--Waves Container-->
<div>
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
            <path id="gentle-wave"
                d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
        </g>
    </svg>
</div>
<!--Waves end-->

</div>
<!--Header ends-->


<div class="ahemdabad-content">
	<div class="amd-city-main">
			<h1>
            UDDAN - Touch The Sky With Glory
			</h1>
			<div class="sub-amd">
				<p>
					<br><br>
                    UDDAN, a premier online flight booking platform, stands at the forefront of revolutionizing travel experiences for millions worldwide. With its user-friendly interface and cutting-edge technology, UDDAN offers a seamless booking experience, ensuring travelers find the best deals tailored to their preferences.				  <br><br>

                    At UDDAN we’re dedicated to offering you the widest range of flight deals helping you to compare prices and features. Our ground-breaking technology enables you to search millions of flight and price options giving you a bird’s eye view; enabling you to pick the options that best meet your particular needs.				  <br><br>

                    In today's fast-paced world, UDDAN understands the importance of flexibility. With flexible booking options and easy modification policies, travelers have the freedom to adapt their plans as needed, offering peace of mind in uncertain times. Whether it's changes to travel dates or additional services, UDDAN empowers travelers with control over their journey, making every trip memorable and hassle-free.				 
				</p>
</div>
				


	</div>
</div>



<?php include 'footer.php';?>


</body>
</html>