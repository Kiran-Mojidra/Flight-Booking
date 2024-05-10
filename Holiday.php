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
  padding: 0;
}

.flex { /*Flexbox for containers*/
  display: flex;
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

/* holiday =================================================================================================================
========================================================================================================================================
==============================================================================================================================================*/
* {
	margin: 0;
	padding: 0;
}


.cards{
    height: 500px;
    margin: 20px;
    border-radius: 20px;
    box-shadow: 5px 5px 20px  black;
    overflow: hidden;
}
 img{
    height: 500px;
    width: 400px;
    border-radius: 3px;
    transition: .5s;
}

.cards h1{
    margin:10px;
    padding: 10px;
    font-size: 30px;
}

.cards p{
    font-size: 16px;
    margin: 20px;
    visibility: hidden;
    opacity: 0;
}

.cards button{
    font-size: 20px;
    background-color: rgb(220, 189, 15);
    height: 50px;
    width: 200px;
    border-radius: 20px;
    margin: 20px 80px;
    visibility: hidden;
    opacity: 0;
}

.intro{
    height: 70px;
    width: 400px;
    padding-left: 6px;
    box-sizing: border-box;
    position:relative;
    bottom: 70px;
    background: rgb(27, 27, 27,.5);
    color: white;
    transition: .5s;
}

.card-contain{
    display: flex;
    margin-left: 50px;
    margin-top: 30px;
}
.holiday-card{
   
    width: 95%;
    margin: 40px;
    justify-content: center;
    align-items: center;
    background-color: whitesmoke;
}


.cards:hover{
    cursor: pointer;
}
.cards:hover .intro{
    height: 260px;
    bottom: 260px;
    background: #000000c1;
}
.cards:hover p{
    opacity: 1;
    visibility: visible;
}
.cards:hover button{
    opacity: 1;
    visibility: visible;
}
.cards:hover img{
    transform: scale(1.1)rotate(-3deg);
}
/*------------------------------------------------------------------------------------------------------------------ */
.main-use{
    background-color:whitesmoke;
    width: 100%;
    height: 400px;
}
.with-us-holiday{
    margin: 50px 20px 60px 80px;
}

.why-with-us{
    font-size: 45px;
    color: #000099;
    padding-left: 80px;
    font-weight: 500;
}

.sub-us-card{
    display: flex;
    margin-left: 50px;
}

.card-us{
    background-color: white;
    height: 250px;
    width: 250px;
    margin: 20px;
    padding: 20px;
    border-radius: 20px;
    text-align: center;
    box-shadow: 5px 5px 20px  black
}


.card-us img{
    height: 70px;
    width: 70px;
}
.footer-div{
    background-color: #000099;
    margin: 0px;
    padding: 0px;
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
    
    <h1>Your Perfect Holiday Awaits</h1>
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

<!--Holiday ==================================================================================================================================
=============================================================================================================================================
==============================================================================================================================================-->

<div class="holiday-card">
	<div class="card-contain">
        <div class="cards">
            <img src="Images/kashmir.webp" alt="mumbai">
            <div class="intro">
                <h1>Srinagar, Kashmir</h1>
                <p>Nestled in the breathtaking Kashmir Valley, Srinagar is renowned for its serene Dal Lake, vibrant houseboats, and iconic Mughal gardens.</p>
                <button>Book Now</button>
            </div>
        </div>
        <div class="cards">
            <img src="Images/shimla.webp" alt="shimla">
            <div class="intro">
            <h1>Shimla, Himachal Pradesh</h1>
                <p> A picturesque hill station renowned for its colonial charm and breathtaking mountain vistas.</p>
                <button>Book Now</button>
            </div>
        </div>
        <div class="cards">
            <img src="images/nainital.webp" alt="mumbai">
            <div class="intro">
            <h1>Nainital, Uttarakhand</h1>
                <p>A tranquil hill station nestled around a pristine lake, offering a perfect blend of scenic beauty and soothing ambiance for a memorable tour.</p>
                <button>Book Now</button>
            </div>
        </div>
    </div>

    <div class="card-contain">
        <div class="cards">
            <img src="Images/ooty.webp" alt="mumbai">
            <div class="intro">
                <h1> Ooty, Tamil Nadu</h1>
                <p> A charming hill station renowned for its lush tea gardens, scenic landscapes, and pleasant weather, promising a delightful tour experience.</p>
                <button>Book Now</button>
            </div>
        </div>
        <div class="cards">
            <img src="Images/kerela.webp" alt="mumbai">
            <div class="intro">
            <h1>Alleppey, Kerala</h1>
                <p>A captivating destination renowned for its serene backwaters, houseboat experiences, promising an unforgettable tour experience.</p>
                <button>Book Now</button>
            </div>
        </div>
        <div class="cards">
            <img src="Images/kutch.webp" alt="mumbai">
            <div class="intro">
            <h1>Kutch, Gujarat</h1>
                <p>A mesmerizing desert landscape dotted with white salt flats and vibrant handicrafts, offering a unique and colorful tour experience.</p>
                <button>Book Now</button>
            </div>
        </div>
    </div>

    
</div>

<div class="main-use">
    <div class="with-us-holiday">
         <div class="sub-us">
             <p class="why-with-us">
                 Why book Holidays with Us
             </p>
         </div>
            <div class="sub-us-card">
                 <div class="card-us">
                     <img src="images/save-up-tp.svg" alt="save up to">
                         <div class="text-of-sub">
                              <h3>Save up
                                   <br>
                             to 30% </h3>
                                 <p>Incredible savings on holidays.</p>
                        </div>
                 </div>
                 <div class="card-us">
                     <img src="images/earth.svg" alt="save up to">
                        <div class="text-of-sub">
                             <h3>Worldwide
                               <br>
                             coverage </h3>
                              <p>Choose from over 200,000 hotels.</p>
                      </div>
                 </div>
                 <div class="card-us">
                        <img src="images/plane.svg" alt="save up to"/>
                            <div class="text-of-sub">
                           <h3>World's Best
                              <br>
                          Business Class </h3>
                          <p>Travel with confidence.</p>
                    </div>
                 </div>
                 <div class="card-us">
                         <img src="images/save-up-tp.svg" alt="save up to">
                             <div class="text-of-sub">
                                <h3>Confidence
                                     <br>
                              & convenience </h3>
                                 <p>Flexible policies, easy cancellations.</p>
                             </div>
                  </div>
            </div>
    </div>
</div>
<div class="footer-div">
<?php include 'footer.php';?>
</div>

</body>
</html>