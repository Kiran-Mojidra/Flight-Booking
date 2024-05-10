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
     <!-- Bootstrap CSS -->
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css_class/main.css">
    <link rel="icon" href="Images/wings.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .inner-heade h1 {
  font-family: 'Lato', sans-serif;
  font-weight:300;
  letter-spacing: 2px;
  font-size:48px;
}


.header {
  position:relative;
  text-align:center;
  background:url(Images/hotel.jpeg) no-repeat;
  background-size: cover;
 color: aliceblue;
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
    </style>
    <title>Document</title>
</head>
<body>

<?php include 'header.php'; ?>


 <!--Hey! This is the original version
of Simple CSS Waves-->

<div class="header">

<!--Content before waves-->
<div class="inner-header flex">
    <!--Just the logo.. Don't mind this-->
    
    <h1> Book Hotels & Homestays </h1>
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

<!-- book a hotels for stay  -->

<section>
    <div class="main-hotel-book-div">

    <form action="Hotel/hotel_search.php" style="display: flex;" method="post">
        <div class="hotel-main">
            <div class="main-content-hotel">
                <label for="hotel-select">Where are you going?</label>
                
                <div class="hotel-select-box">
        <div class="hotel-select-option">
            <input type="text" placeholder="where" readonly name="stay" id="hotelSelect">
        </div>
        <div class="hotel-content">
            <div class="hotel-search">
                <input type="text" id="hotelOptionSearch" placeholder="Search">
            </div>
            <ul class="hotel-options">
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ahmedabad</p>
                                            <p class="font12 greyText appendBottom3"> Gujarat</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ayodhya</p>
                                            <p class="font12 greyText appendBottom3"> Uttar Pradesh</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Mumbai</p>
                                            <p class="font12 greyText appendBottom3"> Maharashtra</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Goa</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Shimla</p>
                                            <p class="font12 greyText appendBottom3"> Himachal Pradesh</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Agra</p>
                                            <p class="font12 greyText appendBottom3"> Uttar Pradesh</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kolkata</p>
                                            <p class="font12 greyText appendBottom3"> West Bengal</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jaisalmer</p>
                                            <p class="font12 greyText appendBottom3"> Rajasthan</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Hyderabad</p>
                                            <p class="font12 greyText appendBottom3"> Telangana</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Chennai</p>
                                            <p class="font12 greyText appendBottom3"> Tamil Nadu</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bangalore</p>
                                            <p class="font12 greyText appendBottom3"> Karnataka</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kashmir</p>
                                            
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kutch</p>
                                            <p class="font12 greyText appendBottom3"> Gujarat</p>
                                        </div>
                                    </div>
                               </li> <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kerala</p>
                                            
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Arunachal Pradesh</p>
                                         
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Varansi</p>
                                            <p class="font12 greyText appendBottom3">Uttar Pradesh</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Nanital</p>
                                            <p class="font12 greyText appendBottom3"> UttaraKhand</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Indore</p>
                                            <p class="font12 greyText appendBottom3"> Madhya Pradesh</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ooty</p>
                                            <p class="font12 greyText appendBottom3"> Tamil Nadu </p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Srinagar</p>
                                            <p class="font12 greyText appendBottom3"> Kashmir</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Alleppey</p>
                                            <p class="font12 greyText appendBottom3"> Kerala</p>
                                        </div>
                                    </div>
                               </li>
            </ul>
        </div>
    </div>

                <div class="check-date">
                <label for="form-label">Check-in</label>
                <label for="form-label">Check-Out</label>
                    
                </div>

                <div class="check-date">

                <input type="date" class="date2" name="checkIn">
                    <input type="date" class="date2" name="checkOut">
                </div>

                <div class="check-date">
                <label for="form-label">Guests & Rooms</label>
                </div>
                <div class="select-hotel">
    <div class="client-picker-container client-desktop">
        <div class="client-picker-field">
            <input id="client-content" tabindex="0" placeholder="Rooms|Adults" readonly="true" class="inputfi">
            <span class="icon-content bw-ic-che-right"></span>
        </div>
        <div id="overlay" class="client-drop-ang">
            <div class="col-sm-12 col-xs-12 paxbar-ang">
                <button class="close-passenger float-right bw-ic-close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                    </svg>
                </button>
                <div class="row mx-client-auto adult-row">
                    <label for="adult" class="col-6 px-0"><strong>Adults</strong><span>12+ years</span></label>
                    <div class="col px-0"></div>
                    <div class="col-5 d-flex fieldwrap pb-2">
                        <div class="select-style">
                            <select id="adult" class="regular-select-element" name="adult">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mx-auto adult-row">
                    <label for="child" class="col-6 px-0"><strong>Child</strong><span>1-11 years</span></label>
                    <div class="col-5 d-flex fieldwrap pb-2">
                        <div class="select-style">
                            <select id="child" class="regular-select-element" name="child">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mx-auto adult-row">
                    <label for="infant" class="col-6 px-0"><strong>Rooms</strong></label>
                    <div class="col-5 d-flex fieldwrap pb-2">
                        <div class="col-4 no-gutter">
                            <div class="select-style">
                                <select id="infant" class="regular-select-element" name="room">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="confirmBtnBox col-xs-12 col-sm-12 mt-3">
                    <button type="button" class="col-xs-12 col-sm-12 paxconfirm">Confirm</button>
                </div>
            </div>
        </div>
    </div>
                </div>

                <div class="hotel-btn">
                <button name="search_hotel">
                    Search Hotels
                </button>
            </div>

            </div>
        </div>
        <div>
        <div class="city_bxn makeFlex2 whybk">
            <div class="whybk_img">
                <img src="https://www.easemytrip.com/hotels/content/img/homes/hotel-icn.svg">
            </div>
            <div class="h_txt">
                Extensive Hotel
                Options
            </div>
            <div class="p_txt">
                Best hotels
                available for
                different
                destinations to
                offer you the
                stay of a
                lifetime.
            </div>
        </div>
        <div class="city_bxn makeFlex2 whybk">
            <div class="whybk_img">
                <img src="https://www.easemytrip.com/hotels/content/img/homes/beach-icn.svg">
            </div>
            <div class="h_txt">
                Best
                Price
            </div>
            <div class="p_txt">
                Get
                excellent
                hotels/resorts
                at
                the
                best
                prices
                to
                pamper
                your
                desires.
            </div>
        </div>

    </div>
    </form>

    </div>
   
</section>



<!-- selection card to input  -->
<script>
    // Function to handle the click event on destination links
    function handleDestinationClick(destination) {
        // Set the destination value in the form
        document.getElementById("hotelSelect").value = destination;
    }
</script>



<!-- card effects for hotels finds -->

<section>
        <div class="main-city-hotels">
            <div class="popular">
                <h2>Popular Destinations</h2>
                <p>We have selected some best locations around the world for you.</p>
            </div>
            <div class="sub-city">
                <a href="#" title="Mumbai"  onclick="handleDestinationClick('Mumbai')"
                    class="PopularDestinationsUIstyles__PopularBigImageWrapper-sc-1ir08i0-3 dAUSpZ"><img
                        src="Images/Mumbai.jpg" alt="Mumbai"
                        class="PopularDestinationsUIstyles__PopularBigImage-sc-1ir08i0-4 isfagQ" data-testid=""
                        itemprop="">
                    <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK">
                        <h3
                            class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 dygDHZ gmLHPV">
                            Mumbai</h3>
                        <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 hnUCfa">An ultimate luxurious
                            and
                            romantic holiday destination</p>
                    </div>
                </a>


                <div class="PopularDestinationsUIstyles__PopularSmallImageOuterWrapper-sc-1ir08i0-8 ceiRoP">
                    <a href="#" title="Agra" onclick="handleDestinationClick('Agra')"
                        class="PopularDestinationsUIstyles__PopularSmallImageWrapper-sc-1ir08i0-9 eiQutp"><img
                            src="Images/delhi.jpg"
                            alt="Paris" class="PopularDestinationsUIstyles__PopularSmallImage-sc-1ir08i0-10 dBcNbO"
                            data-testid="" itemprop="">
                        <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK">
                            <h3
                                class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 dygDHZ gmLHPV">
                                Agra</h3>
                            <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 hnUCfa">The City of Light
                            </p>
                        </div>
                    </a><a href="#" title="Goa"  onclick="handleDestinationClick('Goa')"
                        class="PopularDestinationsUIstyles__PopularSmallImageWrapper-sc-1ir08i0-9 eiQutp"><img
                            src="Images/Goa.jpg"
                            alt="Langkawi" class="PopularDestinationsUIstyles__PopularSmallImage-sc-1ir08i0-10 dBcNbO"
                            data-testid="" itemprop="">
                        <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK">
                            <h3
                                class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 dygDHZ gmLHPV">
                                Goa</h3>
                            <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 hnUCfa">Picturesque
                                island bordering
                                azure blue waters </p>
                        </div>
                    </a></div>

                <div class="PopularDestinationsUIstyles__PopularSmallImageOuterWrapper-sc-1ir08i0-8 ceiRoP"><a
                        href="#" title="Kolkata"  onclick="handleDestinationClick('Kolkata')"
                        class="PopularDestinationsUIstyles__PopularSmallImageWrapper-sc-1ir08i0-9 eiQutp"><img
                            src="Images/kolkata.jpg"
                            alt="Paris" class="PopularDestinationsUIstyles__PopularSmallImage-sc-1ir08i0-10 dBcNbO"
                            data-testid="" itemprop="">
                        <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK">
                            <h3
                                class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 dygDHZ gmLHPV">
                                Kolkata</h3>
                            <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 hnUCfa">The City of Light
                            </p>
                        </div>
                    </a><a href="#" title="Jaisalmer"  onclick="handleDestinationClick('Jaisalmer')"
                        class="PopularDestinationsUIstyles__PopularSmallImageWrapper-sc-1ir08i0-9 eiQutp"><img
                            src="Images/jaisalmer.webp"
                            alt="Jaisalmer" class="PopularDestinationsUIstyles__PopularSmallImage-sc-1ir08i0-10 dBcNbO"
                            data-testid="" itemprop="">
                        <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK">
                            <h3
                                class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 dygDHZ gmLHPV">
                                Jaisalmer</h3>
                            <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 hnUCfa">Picturesque
                                island bordering
                                azure blue waters </p>
                        </div>
                    </a></div>
            </div>




            <div class="sub-city">

                <div class="PopularDestinationsUIstyles__PopularSmallImageOuterWrapper-sc-1ir08i0-8 ceiRoP"><a
                        href="#" title="Hyderabad"  onclick="handleDestinationClick('Hyderabad')"
                        class="PopularDestinationsUIstyles__PopularSmallImageWrapper-sc-1ir08i0-9 eiQutp"><img
                            src="Images/haidrabad.jpg"
                            alt="Paris" class="PopularDestinationsUIstyles__PopularSmallImage-sc-1ir08i0-10 dBcNbO"
                            data-testid="" itemprop="">
                        <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK">
                            <h3
                                class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 dygDHZ gmLHPV">
                                Hyderabad</h3>
                            <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 hnUCfa">The City of Light
                            </p>
                        </div>
                    </a><a href="#" title="Bangalore"  onclick="handleDestinationClick('Bangalore')"
                        class="PopularDestinationsUIstyles__PopularSmallImageWrapper-sc-1ir08i0-9 eiQutp"><img
                            src="Images/banglore.jpg"
                            alt="Langkawi" class="PopularDestinationsUIstyles__PopularSmallImage-sc-1ir08i0-10 dBcNbO"
                            data-testid="" itemprop="">
                        <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK">
                            <h3
                                class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 dygDHZ gmLHPV">
                                Bangalore</h3>
                            <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 hnUCfa">Picturesque
                                island bordering
                                azure blue waters </p>
                        </div>
                    </a></div>

                <div class="PopularDestinationsUIstyles__PopularSmallImageOuterWrapper-sc-1ir08i0-8 ceiRoP"><a
                        href="#" title="Chennai"  onclick="handleDestinationClick('Chennai')"
                        class="PopularDestinationsUIstyles__PopularSmallImageWrapper-sc-1ir08i0-9 eiQutp"><img
                            src="Images/chennai.jpg"
                            alt="Chennai" class="PopularDestinationsUIstyles__PopularSmallImage-sc-1ir08i0-10 dBcNbO"
                            data-testid="" itemprop="">
                        <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK">
                            <h3
                                class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 dygDHZ gmLHPV">
                                Chennai</h3>
                            <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 hnUCfa">The City of Light
                            </p>
                        </div>
                    </a><a href="#" title="Kashmir"  onclick="handleDestinationClick('Kashmir')"
                        class="PopularDestinationsUIstyles__PopularSmallImageWrapper-sc-1ir08i0-9 eiQutp"><img
                            src="Images/kashmir.webp"
                            alt="Kashmir" class="PopularDestinationsUIstyles__PopularSmallImage-sc-1ir08i0-10 dBcNbO"
                            data-testid="" itemprop="">
                        <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK">
                            <h3
                                class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 dygDHZ gmLHPV">
                                Kashmir</h3>
                            <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 hnUCfa">Picturesque
                                island bordering
                                azure blue waters </p>
                        </div>
                    </a></div>
                <a href="#" title="Ahemdabad"  onclick="handleDestinationClick('Ahmedabad')"
                    class="PopularDestinationsUIstyles__PopularBigImageWrapper-sc-1ir08i0-3 dAUSpZ"><img
                        src="Images/Ahemdabad_Kariya.jpg" alt=""
                        class="PopularDestinationsUIstyles__PopularBigImage-sc-1ir08i0-4 isfagQ" data-testid=""
                        itemprop="">
                    <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK">
                        <h3
                            class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 dygDHZ gmLHPV">
                            Ahemdabad</h3>
                        <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 hnUCfa">An ultimate luxurious
                            and
                            romantic holiday destination</p>
                    </div>
                </a>
            </div>






            <div class="sub-city">
                <a href="#" title="Kutch"  onclick="handleDestinationClick('Kutch')"
                    class="PopularDestinationsUIstyles__PopularBigImageWrapper-sc-1ir08i0-3 dAUSpZ"><img
                        src="Images/kutch.webp" alt="Mumbai"
                        class="PopularDestinationsUIstyles__PopularBigImage-sc-1ir08i0-4 isfagQ" data-testid=""
                        itemprop="">
                    <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK">
                        <h3
                            class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 dygDHZ gmLHPV">
                            Kutch</h3>
                        <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 hnUCfa">An ultimate luxurious
                            and
                            romantic holiday destination</p>
                    </div>
                </a>


                <div class="PopularDestinationsUIstyles__PopularSmallImageOuterWrapper-sc-1ir08i0-8 ceiRoP">
                    <a href="#" title="Kerela"  onclick="handleDestinationClick('Kerela')"
                        class="PopularDestinationsUIstyles__PopularSmallImageWrapper-sc-1ir08i0-9 eiQutp"><img
                            src="Images/kerela.webp"
                            alt="Paris" class="PopularDestinationsUIstyles__PopularSmallImage-sc-1ir08i0-10 dBcNbO"
                            data-testid="" itemprop="">
                        <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK">
                            <h3
                                class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 dygDHZ gmLHPV">
                                Kerela</h3>
                            <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 hnUCfa">The City of Light
                            </p>
                        </div>
                    </a><a href="#" title="Varansi" onclick="handleDestinationClick('Varansi')"
                        class="PopularDestinationsUIstyles__PopularSmallImageWrapper-sc-1ir08i0-9 eiQutp"><img
                            src="Images/varansi.jpg"
                            alt="Varanasi" class="PopularDestinationsUIstyles__PopularSmallImage-sc-1ir08i0-10 dBcNbO"
                            data-testid="" itemprop="">
                        <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK">
                            <h3
                                class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 dygDHZ gmLHPV">
                                Varansi</h3>
                            <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 hnUCfa">Picturesque
                                island bordering
                                azure blue waters </p>
                        </div>
                    </a></div>

                <div class="PopularDestinationsUIstyles__PopularSmallImageOuterWrapper-sc-1ir08i0-8 ceiRoP"><a
                        href="#" title="Arunachal Pradesh" onclick="handleDestinationClick('Arunachal Pradesh')"
                        class="PopularDestinationsUIstyles__PopularSmallImageWrapper-sc-1ir08i0-9 eiQutp"><img
                            src="Images/Arunachal_pradesh.jpg"
                            alt="Arunachal Pradesh" class="PopularDestinationsUIstyles__PopularSmallImage-sc-1ir08i0-10 dBcNbO"
                            data-testid="" itemprop="">
                        <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK">
                            <h3
                                class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 dygDHZ gmLHPV">
                                Arunachal Pradesh</h3>
                            <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 hnUCfa">The City of Light
                            </p>
                        </div>
                    </a><a href="#" title="Shimla"  onclick="handleDestinationClick('Shimla')"
                        class="PopularDestinationsUIstyles__PopularSmallImageWrapper-sc-1ir08i0-9 eiQutp"><img
                            src="Images/shimla.jpg"
                            alt="Shimla" class="PopularDestinationsUIstyles__PopularSmallImage-sc-1ir08i0-10 dBcNbO"
                            data-testid="" itemprop="">
                        <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK">
                            <h3
                                class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 dygDHZ gmLHPV">
                                Shimla</h3>
                            <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 hnUCfa">Picturesque
                                island bordering
                                azure blue waters </p>
                        </div>
                    </a></div>
            </div>




            <div class="sub-city">

                <div class="PopularDestinationsUIstyles__PopularSmallImageOuterWrapper-sc-1ir08i0-8 ceiRoP"><a
                        href="#" title="Nanital" onclick="handleDestinationClick('Nanital')"
                        class="PopularDestinationsUIstyles__PopularSmallImageWrapper-sc-1ir08i0-9 eiQutp"><img
                            src="images/nainital.webp"
                            alt="Nanital" class="PopularDestinationsUIstyles__PopularSmallImage-sc-1ir08i0-10 dBcNbO"
                            data-testid="" itemprop="">
                        <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK">
                            <h3
                                class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 dygDHZ gmLHPV">
                                Nanital</h3>
                            <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 hnUCfa">The City of Light
                            </p>
                        </div>
                    </a><a href="#" title="Indore" onclick="handleDestinationClick('Indore')"
                        class="PopularDestinationsUIstyles__PopularSmallImageWrapper-sc-1ir08i0-9 eiQutp"><img
                            src="images/indor.jpg"
                            alt="Indore" class="PopularDestinationsUIstyles__PopularSmallImage-sc-1ir08i0-10 dBcNbO"
                            data-testid="" itemprop="">
                        <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK">
                            <h3
                                class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 dygDHZ gmLHPV">
                                Indore</h3>
                            <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 hnUCfa">Picturesque
                                island bordering
                                azure blue waters </p>
                        </div>
                    </a></div>

                <div class="PopularDestinationsUIstyles__PopularSmallImageOuterWrapper-sc-1ir08i0-8 ceiRoP"><a
                        href="#" title="Ooty" onclick="handleDestinationClick('Ooty')"
                        class="PopularDestinationsUIstyles__PopularSmallImageWrapper-sc-1ir08i0-9 eiQutp"><img
                            src="images/ooty.jpg"
                            alt="Paris" class="PopularDestinationsUIstyles__PopularSmallImage-sc-1ir08i0-10 dBcNbO"
                            data-testid="" itemprop="">
                        <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK">
                            <h3
                                class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 dygDHZ gmLHPV">
                                Ooty</h3>
                            <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 hnUCfa">The City of Light
                            </p>
                        </div>
                    </a><a href="#" title="Srinagar" onclick="handleDestinationClick('Srinagar')"
                        class="PopularDestinationsUIstyles__PopularSmallImageWrapper-sc-1ir08i0-9 eiQutp"><img
                            src="Images/srinagar.jpg"
                            alt="Srinagar" class="PopularDestinationsUIstyles__PopularSmallImage-sc-1ir08i0-10 dBcNbO"
                            data-testid="" itemprop="">
                        <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK">
                            <h3
                                class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 dygDHZ gmLHPV">
                                Srinagar</h3>
                            <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 hnUCfa">Picturesque
                                island bordering
                                azure blue waters </p>
                        </div>
                    </a></div>
                <a href="#" title="Ayodhya" onclick="handleDestinationClick('Ayodhya')"
                    class="PopularDestinationsUIstyles__PopularBigImageWrapper-sc-1ir08i0-3 dAUSpZ"><img
                        src="Images/ayodhya.jpg" alt="Ayodhya"
                        class="PopularDestinationsUIstyles__PopularBigImage-sc-1ir08i0-4 isfagQ" data-testid=""
                        itemprop="">
                    <div class="PopularDestinationsUIstyles__PopularImageOverlayWrap-sc-1ir08i0-5 jTVABK">
                        <h3
                            class="dwebCommonstyles__SectionHeader-sc-112ty3f-9 PopularDestinationsUIstyles__OverlayMainText-sc-1ir08i0-6 dygDHZ gmLHPV">
                            Ayodhya</h3>
                        <p class="PopularDestinationsUIstyles__OverlaySubText-sc-1ir08i0-7 hnUCfa">An ultimate luxurious
                            and
                            romantic holiday destination</p>
                    </div>
                </a>
            </div>

        </div>
    </section>
<!-- card end -->
    

  
<?php include 'footer.php'; ?>
    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
	</script> 
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">
	</script> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js">
	</script>
	  <script src="scricpts.js"></script>
      <script>
         /*------------------------------select client ----------------------------------------- */

         document.addEventListener('DOMContentLoaded', function() {
    const passengerContent = document.getElementById('client-content');
    const overlay = document.getElementById('overlay');

    passengerContent.addEventListener('click', function() {
        overlay.classList.toggle('show');
    });

    const confirmButton = document.querySelector('.paxconfirm');
    const passengerContentInput = document.getElementById('client-content');
    const passengerDropdown = document.getElementById('overlay');
    const adultSelect = document.getElementById('adult');
    const childSelect = document.getElementById('child');
    const infantSelect = document.getElementById('infant');

    confirmButton.addEventListener('click', function() {
        const adultCount = parseInt(adultSelect.value);
        const childCount = parseInt(childSelect.value);
        const infantCount = parseInt(infantSelect.value);
        const totalRooms = parseInt(infantSelect.value);

        const passengersInfo = `${totalRooms} Rooms | ${adultCount} Adults | ${childCount} Children`;
        passengerContentInput.value = passengersInfo;

        // Close passenger drop-down
        passengerDropdown.style.display = 'none';
    });
});

      </script>
      
</body>
</html>