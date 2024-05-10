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
  height: 100%;
  padding: 0px;
  background-color: whitesmoke;
}

.inner-header h1 {
  font-family: 'Lato', sans-serif;
  font-weight:300;
  letter-spacing: 2px;
  font-size:48px;
  color: white;
}
.inner-header p{
    font-family: 'Lato', sans-serif;
  letter-spacing: 1px;
  font-size:30px;
  color: white;
}


.header {
  position:relative;
  text-align:center;
  background-color: whitesmoke;
  background:url(Images/flightbook6.jpeg) no-repeat;
  background-size: cover;
  color:rgba(5, 5, 65, 0.967);
  margin-bottom: 30px;
}


.inner-header {
  height:300px;
  width:100%;
  margin: 0;
  padding: 40px;
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
  background-color: whitesmoke;
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


.requirements-main{
  padding: 20px 50px 20px 100px;
  margin: 0px 10px 20px 10px;
}

.requirements-main p{
  color:#000099;
  font-size: 20px;
}

.requirements-main li{
  padding-top: 20px;
}

h1{
  color:#000099;
  padding: 0px;
  margin: 0px;
}

.text-img{
  display: flex;
  margin: 10px;
}

.text-img p{
  margin: 20px;
  color: #000099;
}

img{
  height: 200px;
  width: 400px;
  margin: 5px;
  border-radius: 10px;
  filter: drop-shadow(10px 10px 20px black);
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
    
    <h1>Travel requirements</h1>
    <p>Here's everything you need to know</p>
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

<!--travel requirements-->
<div class="requirements-main">
  <p>Please read the travel requirements and visa details before booking your trip and ensure you have the required documents at the time of travel. 
</p>
<p>When traveling within India from one state to another by flight, it's essential to ensure that you have all the necessary documents and comply with the regulations set by both the central and state governments. 
  Here are the travel requirements you need to consider:
</p>

  <div class="require-sub">
    <ul>
      <li>
        <h1>Valid Identification</h1>
        <div class="text-img">
        <p>- Carry a valid government-issued photo identification document such as Aadhaar card, passport, driver's license, or voter ID card. 
      This is required for airport security checks and boarding the flight.
    <br><br>
       -  Valid identification helps ensure the security and safety of air travel by confirming the identity of passengers and preventing unauthorized individuals from boarding flights.
    <br><br>
       -  It also facilitates efficient check-in and boarding processes, allowing airlines to accurately identify passengers and manage their travel records.
  </p>
      <img src="images/requirement2.jpg" alt="valid identity">
      </div>
      </li>
        <hr>
      <li>
        <h1>Flight Ticket</h1>
        <div class="text-img">
        <img src="images/ticket.jpg" alt="valid identity">
        <p>- Ensure that you have booked your flight ticket in advance.
           You can book your ticket online through the airline's website or mobile app or through authorized travel agents.
           <br><br>
          -  A flight ticket is a crucial document that facilitates air travel, and passengers should ensure that they have a confirmed reservation and valid ticket before heading to the airport for their journey.
        </p></div>
      </li>

      <hr>
  <li>
        <h1>COVID-19 Guidelines</h1>
        <div class="text-img">
        <div>
         <h2>RT-PCR Test:</h2> 
          <p> Depending on the prevailing COVID-19 situation and guidelines, you may be required to undergo an RT-PCR test within a specified timeframe before your flight. 
            Check the requirements of both the departure and arrival states for any mandatory testing requirements.
          </p>
         <h2> Quarantine: </h2>
          <p>
          Some states may have quarantine requirements for incoming travelers. 
          Check the quarantine guidelines of the destination state before traveling.
          </p> 
          <h2>Health Declaration Form:</h2>
             <p>
               Fill out any mandatory health declaration form provided by the airline or airport authorities.
              This may include information about your health status and recent travel history.
             </p>
         <h2>Aarogya Setu App: </h2> 
            <p>
            Download and install the Aarogya Setu app on your mobile phone. 
            Some states may require travelers to show the app indicating their COVID-19 status upon arrival.
            </p> 
        </div>
        <div>
           <img src="images/covid 3.jpg" alt="stay safe">
           <img src="images/covid2.jpg.crdownload" alt="stay safe">
          <img src="images/covid-19.jpeg" alt="stay safe">
        </div>  
      </div>
      </li>
      <hr>

      <li>
        <h1>Boarding Pass</h1>
        <div class="text-img">
        <img src="images/boding.jpg" alt="valid identity">
        <p>- After completing the check-in process, obtain your boarding pass either by printing it out or downloading it on your mobile phone through the airline's app.
        </p></div>
      </li>
      <hr>

      <li>
        <h1>Baggage</h1>
        <div class="text-img">
        <p>-  Pack your luggage according to the airline's baggage allowance and restrictions. 
          Ensure that you comply with the rules regarding carry-on and checked baggage.</p>
      <img src="images/lagej2.avif" alt="valid identity">
      </div>
      </li>
      <hr>

      <li>
        <h1>Arrival Formalities</h1>
        <div class="text-img">
        <img src="images/fz4gkurj.png" alt="valid identity">
        <p>- Upon arrival at your destination airport, follow the instructions provided by the airport authorities regarding baggage claim, exit procedures, and any additional screening measures.
        </p></div>
      </li>
      <hr>    
      
      <li>
        <h1> Travel Insurance</h1>
        <div class="text-img">
        <p>- Consider purchasing travel insurance that covers medical emergencies, trip cancellations, or any unforeseen events during your journey.</p>
      <img src="images/insurance.jpg" alt="valid identity">
      </div>
      </li>
      <hr>

      <li>
        <h1>Additional Precautions</h1>
        <div class="text-img">
        <img src="images/mask.jpg" alt="valid identity">
        <p>- Wear a mask and carry hand sanitizer for personal hygiene.
           Follow social distancing norms and instructions given by airline staff and airport authorities.
        </p></div>
      </li>
      <hr>    

      </ul>
  </div>



</div>


<?php include 'footer.php';?>
</body>
</html>