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



<?php
//data get from view more fear

if (isset($_GET['destination'])) {
    $sovalue2 = $_GET['destination'];
    // Use the $sovalue2 variable as needed
} else {
    $sovalue2 = '';
}

if (isset($_GET['dataarrive'])) {
    $sovalue = $_GET['dataarrive'];
    // Use the $sovalue2 variable as needed
} else {
    $sovalue = '';
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css_class/main.css">
    <link rel="icon" href="Images/wings.png">
    <title>Home</title>
   <style>
    /* Style the radio buttons */
.radio-box .form-check-work input[type="radio"] {
    display: none; /* Hide the default radio buttons */
}

/* Style the custom radio buttons */
.radio-box .form-check-work input[type="radio"] {
    content: '';
    display: inline-block;
    width: 20px; /* Size of the custom radio button */
    height: 20px; /* Size of the custom radio button */
    border: 2px solid #000; /* Border color of the custom radio button */
    border-radius: 50%; /* Make it circular */
   /* Adjust spacing between the radio button and label */
}

.radio-box .form-check-work input[type="radio"]:checked {
    background-color: #152B4D; /* Color of the checked radio button */
}




.select-passenger-data{
    display: flex;
}






@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

.rating-box {
  position: relative;
  background: #fff;
  padding: 25px 50px 35px;
  border-radius: 25px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);
}
.rating-box header {
  font-size: 22px;
  color: #dadada;
  font-weight: 500;
  margin-bottom: 20px;
  text-align: center;
}
.rating-box .stars {
  display: flex;
  align-items: center;
  padding-left: 570px;
  gap: 25px;
}
.stars i {
  color: #e6e6e6;
  font-size: 35px;
  cursor: pointer;
  transition: color 0.2s ease;
}
.stars i.active {
  color: #ff9c1a;
  
}
textarea {
    width: 100%;
    background-color: whitesmoke;
    padding: 1rem;
    border-radius: .5rem;
    border: none;
    outline: none;
    resize: none;
    margin-bottom: .5rem;
}

.btn-group {
    display: flex;
    grid-gap: .5rem;
    align-items: center;
    padding-left: 630px;

    .btn8 {
        padding: .75rem 1rem;
        border-radius: .5rem;
        border: none;
        outline: none;
        cursor: pointer;
        font-size: .875rem;
        font-weight: 500;

       
    }
}
.feedback-text{
  display: flex;
  
  
}
.feedback-text input{
  flex: 1;
  background-color: whitesmoke;
  border: none;
  padding: 1rem;
  margin: 10px 0px;
    border-radius: .5rem;
    justify-content: space-between;
  
}

.alert button{
    background-color: rgba(128, 128, 128, 0.34);
    margin-left: 1015px;
}

   </style>
</head>
<body>
    <?php include 'header.php'; ?>
    

    <!--Slider-->
    <div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
		<div class="carousel-indicators">
			<button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img alt="..." class="d-block w-100" src="images/flightbook5.jpeg">
				<div class="carousel-caption">
					<h3 class="animated bounceInRight" style="animation-delay: 1s">Reliable Booking</h3>
					<p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">Your travel aspirations, our priority. Book with confidence and embark on unforgettable journeys with ease.</p>
					<p class="animated bounceInRight" style="animation-delay: 3s"><a href="#">Book Tickets</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="images/cheap.jpeg">
				<div class="carousel-caption">
					<h3 class="animated bounceInRight" style="animation-delay: 1s">CostSaver Flights</h3>
					<p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">Fly for less, explore more. Find budget-friendly flights and embark on your next adventure without compromising on quality.</p>
					<p class="animated bounceInRight" style="animation-delay: 3s"><a href="#">Book Tickets</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="images/hotel.jpeg">
				<div class="carousel-caption">
					<h3 class="animated bounceInRight" style="animation-delay: 1s">FlightFriendly Stays</h3>
					<p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">Beyond the clouds, exceptional stays await. Discover our recommended hotels, ensuring your travel experience is as delightful on the ground as it is in the air.</p>
					<p class="animated bounceInRight" style="animation-delay: 3s"><a href="#">Book Now</a></p>
				</div>
			</div>
		</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button">
            <span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> 
            <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button">
                <span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
	</div>
    <!--end slider-->

	<!--for ticket booking=============================================================================================================
    ================================================================================================================================-->
    <section>
    <form action="roundtrip.php" method="post">
    <input type="hidden" id="flightType" name="flightType" value="">

    <script>
        const radioButtons = document.querySelectorAll('input[name="flight_type"]');
const flightTypeInput = document.getElementById('flightType');

radioButtons.forEach(radio => {
    radio.addEventListener('change', () => {
        flightTypeInput.value = radio.value;
    });
});
    </script>
    <div class="wrapper">
    <div class="radio_tabs">
        <label class="radio_wrap" data-radio="radio_1">
            <input type="radio" name="flight_type" class="input" checked value="Return">
            <span class="radio_mark">
                Return
            </span>
        </label>
        <label class="radio_wrap" data-radio="radio_2">
            <input type="radio" name="flight_type" class="input" value="One Way">
            <span class="radio_mark">
                One Way
            </span>
        </label>
       <!-- <label class="radio_wrap" data-radio="radio_3">
            <input type="radio" name="flight_type" class="input" value="Multi Cities">
            <span class="radio_mark">
                Multy Cities
            </span>
        </label>-->
    </div>

    <div class="content">
        <div class="radio_content radio_1">
            <div class="i-box">
                <div class="select-box">
                    <div class="select-option">
                        <div>
                        <label for="departure"><h5>Departure</h5></label>
                        </div>
                        <input type="text" name="text-box1" class="from-select" id="soValue" placeholder="FROM" readonly value="<?php echo $sovalue; ?>">
                    </div>
                    <div class="search-content">
                        <div class="se-con">
                            <input type="text" id="optionSearch" placeholder="Search" name="">
                        </div>
                        <ul class="option" name="from1">
                           <!-- gujarat air-->
                           <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Rajkot, Gujarat</p>
                                            <p class="font12 greyText appendBottom3"> Rajkot Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold con">RAJ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ahmedabad, Gujarat</p>
                                            <p class="font12 greyText appendBottom3"> Sardar Vallabhbhai Patel
                                                International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">AMD</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Surat, Gujarat</p>
                                            <p class="font12 greyText appendBottom3"> Surat Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">STV</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Vadodara, Gujarat</p>
                                            <p class="font12 greyText appendBottom3">Vadodara Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BDQ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bhavnagar, Gujarat</p>
                                            <p class="font12 greyText appendBottom3"> Bhavnagar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BHU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bhuj, Gujarat</p>
                                            <p class="font12 greyText appendBottom3">Bhuj Airport / Bhuj Rudra Mata Air
                                                Force Base</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BHJ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jamnagar, Gujarat</p>
                                            <p class="font12 greyText appendBottom3"> Jamnagar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JGA</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kandla, Gujarat</p>
                                            <p class="font12 greyText appendBottom3"> Kandla Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXY</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Porbandar,Gujarat </p>
                                            <p class="font12 greyText appendBottom3"> Porbandar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">PBD</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Junagath-Keshod, India</p>
                                            <p class="font12 greyText appendBottom3"> Keshod Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXY</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Amreli, India</p>
                                            <p class="font12 greyText appendBottom3"> Amreli Airport</p>
                                        </div>
                                    </div>
                                </li>

                                <!-- Andhra Pradesh air-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kadapa, India</p>
                                            <p class="font12 greyText appendBottom3">Kadapa Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">CDP</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Donakonda, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Donakonda Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kurnool, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Kurnool Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">KJB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Puttaparthi, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Sri Sathya Sai Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">PUT</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Rajahmundry, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Rajahmundry Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">RJA</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Tirupati, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Tirupati International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TIR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Vijayawada, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Vijayawada International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">VGA</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Visakhapatnam, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Visakhapatnam International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">VTZ</div>
                                    </div>
                                </li>

                                <!--ARUNACHAL PRADEH-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Daporijo, Arunachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Daporijo Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">DEP</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Itanagar, Arunachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Donyi Polo Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">HGI</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Pasighat, Arunachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Pasighat Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXT</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Tezu, Arunachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Tezu Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TEI</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ziro, Arunachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Ziro Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">ZER</div>
                                    </div>
                                </li>

                                  <!-- Assam-->
                                  <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Dhubri, Assam</p>
                                            <p class="font12 greyText appendBottom3">Rupsi Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">RUP</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Dibrugarh, Assam</p>
                                            <p class="font12 greyText appendBottom3"> Dibrugarh Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">DIB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Guwahati, Assam</p>
                                            <p class="font12 greyText appendBottom3">LOkpriya Gopinath Bordoloi Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">GAU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jorhat, Assam</p>
                                            <p class="font12 greyText appendBottom3">Jorhat Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JRH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">North Lakhimpur, Assam</p>
                                            <p class="font12 greyText appendBottom3">Lilabari Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXI</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Silchar, Assam</p>
                                            <p class="font12 greyText appendBottom3">Silchar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXS</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Tezpur, Assam</p>
                                            <p class="font12 greyText appendBottom3">Tezpur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TEZ</div>
                                    </div>
                                </li>

                                 <!-- Bihar-->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Darbhanga, Bihar</p>
                                            <p class="font12 greyText appendBottom3">Darbhanga Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">DBR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Gaya, Bihar</p>
                                            <p class="font12 greyText appendBottom3"> Gaya Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">GAY</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Pumia, Bihar</p>
                                            <p class="font12 greyText appendBottom3">Pumia Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Muzaffarpur, Bihar</p>
                                            <p class="font12 greyText appendBottom3">Muzaffarpur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">MZU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Patna, Bihar</p>
                                            <p class="font12 greyText appendBottom3">Jay Prakash NArayan Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">PAT</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Raxaul, Bihar</p>
                                            <p class="font12 greyText appendBottom3">Raxaul Airport</p>
                                        </div>
                                    </div>
                                </li>
                                
                                <!-- Chhattisgarh-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Raipur, Chhattisgarh</p>
                                            <p class="font12 greyText appendBottom3">Swami Vivekananda Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">RPR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bilaspur, Chhattisgarh</p>
                                            <p class="font12 greyText appendBottom3"> Bilaspur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">PAB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jagdalpur, Chhattisgarh</p>
                                            <p class="font12 greyText appendBottom3">Jagdalpur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JGB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ambikapur, Chhattisgarh</p>
                                            <p class="font12 greyText appendBottom3">Ambikapur Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Raigarh, Chhattisgarh</p>
                                            <p class="font12 greyText appendBottom3">Raigarh Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Korba, Chhattisgarh</p>
                                            <p class="font12 greyText appendBottom3">Korba Airport</p>
                                        </div>
                                    </div>
                                </li>
                                
                                 <!-- GOA-->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Dabolim, Goa</p>
                                            <p class="font12 greyText appendBottom3">Dabolim Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">GOI</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Mopa, Goa</p>
                                            <p class="font12 greyText appendBottom3">Manohar International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">GOX</div>
                                    </div>
                                </li>

                                  <!-- Haryana-->
                                  <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Hisar, Haryana</p>
                                            <p class="font12 greyText appendBottom3">Hisar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">HSS</div>
                                    </div>
                                </li>

                                <!-- Himachal Pradesh-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kangra, Himachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Kangra Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">DHM</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kullu-Manali, Himachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Kullu-Manali Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">KUU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Shimla, Himachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Shimla Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">SLV</div>
                                    </div>
                                </li>

                                <!-- Jharkhand-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bokaro, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3">Bokaro Airport</p>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Deoghar, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3"> Deoghar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">DGH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Dhalbhumgarh, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3">Dhalbhumgarh Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Dumka, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3">Dumka Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jamshedpur, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3">Chakulia Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jamshedpur, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3">Sonari Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXW</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ranchi, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3">Birsa Munda Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXR</div>

                                    </div>
                                </li>
                               

                                <!-- Karnataka air-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Belgavi, Karnataka</p>
                                            <p class="font12 greyText appendBottom3"> Belgavi Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold con">IXG</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ballari, Karnataka</p>
                                            <p class="font12 greyText appendBottom3">  Jindal Vijaynagar International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">VDY</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bengaluru, Karnataka</p>
                                            <p class="font12 greyText appendBottom3"> Kempegowda International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BLR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bengaluru, Karnataka</p>
                                            <p class="font12 greyText appendBottom3">HAL Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bidar, Karnataka</p>
                                            <p class="font12 greyText appendBottom3"> Bidar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXX</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Hubli, Karnataka</p>
                                            <p class="font12 greyText appendBottom3">Hubli Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">HBX</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Koppal, Karnataka</p>
                                            <p class="font12 greyText appendBottom3"> Baldota Airport</p>
                                        </div>
                                       
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Mangaluru, Karnataka</p>
                                            <p class="font12 greyText appendBottom3"> Mangalore International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXE</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Mysuru,Karnataka </p>
                                            <p class="font12 greyText appendBottom3"> Mysore Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">MYQ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Shivamogga, Karnataka</p>
                                            <p class="font12 greyText appendBottom3"> Kuvempu Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">RQY</div>
                                    </div>
                                </li>


                                <!-- Kerala -->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kannur,Kerala</p>
                                            <p class="font12 greyText appendBottom3">Kannur International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">CNN</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kochi, Kerala</p>
                                            <p class="font12 greyText appendBottom3">Cochin International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">COK</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kazhikode, Kerala</p>
                                            <p class="font12 greyText appendBottom3">Kazhikode International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">CCJ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kazhikode, Kerala</p>
                                            <p class="font12 greyText appendBottom3">Thiruvanathapuram International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TRV</div>
                                    </div>
                                </li>
                               

                                 <!-- Madhya Pradesh air-->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bhopal, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Raja Bhoj Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold con">BHO</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Gwalior, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Rajmata Vijaya Raje Scindia Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">GWL</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Indore, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Devi Ahilya Bai Holkar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IDR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jabalpur, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Jabalpur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JLR</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Khajuraho, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Khajuraho Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">HJR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Khandwa, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Khandwa Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Nagda, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Birlagram Airport</p>
                                        </div>
                                       
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Panna, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Panna Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Satna,Madhya Pradesh </p>
                                            <p class="font12 greyText appendBottom3"> Satna Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TNI</div>
                                    </div>
                                </li>
                               

                                <!-- Maharashtra air-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Akola, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Akola Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">AKD</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Aurangabad, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3"> Aurangabad Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Baramati, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Baramati Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Gondia, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3"> Gondia Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">GDB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jalgaon, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3"> Jalgaon Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JLG</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kolhapur, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Kolhapur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">KLH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Latur, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3"> Latur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">LTU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Mumbai,Maharashtra </p>
                                            <p class="font12 greyText appendBottom3"> Chhatrapati Shivaji Maharaj International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BOM</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Mumbai, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3"> Juhu Aerodrome</p>
                                        </div>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Nagpur, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Dr. Babasaheb Ambedkar International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">NAG</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Nanded, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Shri Guru Gobind Singh Ji Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">NDC</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Nashik, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Nashik Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">ISK</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Osmanabad, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Osmanabad Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">OMN</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Pune, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Pune Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">PNQ</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Shirdi, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Shirdi Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">SAG</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Solapur, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Solapur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">SSE</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Sindhudurg, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Sindhudurg Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">SDW</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Yavatmal, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Sant Gadge Baba Yavatmai Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">YLT</div>

                                    </div>
                                </li>
                               

                                 <!-- Manipur -->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Imphal,  Manipur</p>
                                            <p class="font12 greyText appendBottom3">Imphal International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IMF</div>
                                    </div>
                                </li>


                                <!-- Meghalaya -->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Shillong, Meghalaya</p>
                                            <p class="font12 greyText appendBottom3">Shillong Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">SHL</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Shella, Meghalaya</p>
                                            <p class="font12 greyText appendBottom3">Shella Airport</p>
                                        </div>
                                    </div>
                                </li>

                                 <!-- NAgaland -->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Dimapur, Nagaland</p>
                                            <p class="font12 greyText appendBottom3">Dimapur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">DMU</div>
                                    </div>
                                </li>

                                
                                <!-- Mizoram -->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Aizawl, Mizoram</p>
                                            <p class="font12 greyText appendBottom3">Turial Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Aizawl, Mizoram</p>
                                            <p class="font12 greyText appendBottom3">Lengpui Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">AJL</div>
                                    </div>
                                </li>

                                <!-- Odisha air-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Angul, Odisha</p>
                                            <p class="font12 greyText appendBottom3"> Savitri Jindal Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Berhampur, Odisha</p>
                                            <p class="font12 greyText appendBottom3">Rangeilunda Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">QBM</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bhubaneswar, Odisha</p>
                                            <p class="font12 greyText appendBottom3"> Biju Patnaik International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BBI</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jeypore, Odisha</p>
                                            <p class="font12 greyText appendBottom3">Jeypore Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JRG</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Rourkela, Odisha</p>
                                            <p class="font12 greyText appendBottom3"> Rourkela Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">RRK</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Utkela, Odisha</p>
                                            <p class="font12 greyText appendBottom3">Utkela Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">UKE</div>
                                    </div>
                                </li>
                                
                                <!-- Panjab air-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Amrisar,Punjab</p>
                                            <p class="font12 greyText appendBottom3">Bathinda Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">ATQ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Amrisar, Panjab</p>
                                            <p class="font12 greyText appendBottom3"> Sri Guru Ram Dass jee International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">ATQ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bathinda, Panjab</p>
                                            <p class="font12 greyText appendBottom3">Bathinda Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BUP</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jalandhar,Panjab</p>
                                            <p class="font12 greyText appendBottom3">Adampur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">AIP</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ludhiana,Panjab</p>
                                            <p class="font12 greyText appendBottom3">Ludhiana Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">LUH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Pathankot,Panjab</p>
                                            <p class="font12 greyText appendBottom3">Pathankot Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXP</div>
                                    </div>
                                </li>

                                <!-- Rajasthan air-->

                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ajmer,Rajasthan </p>
                                            <p class="font12 greyText appendBottom3">Kishangath Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">KQH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Banasthali,Rajasthan</p>
                                            <p class="font12 greyText appendBottom3">Banasthali Airstrip Airport</p>
                                        </div>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bikaner,Rajasthan </p>
                                            <p class="font12 greyText appendBottom3">Bikaner Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BKB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jaipur,Rajasthan</p>
                                            <p class="font12 greyText appendBottom3">Jaipur =International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JAI</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jaisalmer,Rajasthan </p>
                                            <p class="font12 greyText appendBottom3">Jaisalmer Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JSA</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jodhpur,Rajasthan</p>
                                            <p class="font12 greyText appendBottom3">Jodhpur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JDH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kankroli,Rajasthan </p>
                                            <p class="font12 greyText appendBottom3">Kankroli Airstrip Airport</p>
                                        </div>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kota,Rajasthan</p>
                                            <p class="font12 greyText appendBottom3">Kota Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">KTU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Udaipur,Rajasthan </p>
                                            <p class="font12 greyText appendBottom3">Maharana Pratap Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">UDR</div>
                                    </div>
                                </li>
                                

                                 <!-- Sikkim -->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Gangtok, Sikkim</p>
                                            <p class="font12 greyText appendBottom3">Pakyong Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">PYG</div>
                                    </div>
                                </li>

                                
                                 <!-- Tamil Nadu air-->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Chennai,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3"> Chennai International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold con">MAA</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Coimbatore,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Coimbatore International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">CJB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Madurai,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Madurai Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold con">IXM</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Neyveli,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Neyveli Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">NVY</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Salem,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Salem Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold con">SXV</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Thanjavur,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Thanjavur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TJV</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Thoothukkudi,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Tuticorin Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TCR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Tiruchirappalli,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Tiruchirappalli International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TRZ</div>
                                    </div>
                                </li>
                               

                                 <!-- Telangana air-->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Hyderabad,Telangana</p>
                                            <p class="font12 greyText appendBottom3">Begumpet Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BPM</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Hyderabad, Telangana</p>
                                            <p class="font12 greyText appendBottom3"> Rajiv Gandhi International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">HYD</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Warangal,Telangana</p>
                                            <p class="font12 greyText appendBottom3">Warangal Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">WGC</div>
                                    </div>
                                </li>
                               
                                 <!-- Tripura air-->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Agartala,Tripura</p>
                                            <p class="font12 greyText appendBottom3">Maharaja Bir Bikram Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXA</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">KAilashahar, Tripura</p>
                                            <p class="font12 greyText appendBottom3">KAilashahar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kamalpur,Tripura</p>
                                            <p class="font12 greyText appendBottom3">Kamalpur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXQ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Khowai,Tripura</p>
                                            <p class="font12 greyText appendBottom3">Khowai Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXN</div>
                                    </div>
                                </li>
                                

                        </ul>
                    </div>
                </div>

                <div class="select-box2">
                    <div class="select-option2">
                        <div><label for="arrival"><h5>Arrival</h5></label></div> 
                        <input type="text" name="text-box2" class="to-select" id="soValue2" placeholder="To" value="<?php echo $sovalue2; ?>" readonly>
                    </div>
                    <div class="search-content2">
                        <div class="se-con2">
                            <input type="text" id="toOptionSearch" placeholder="Search" name="">
                        </div>
                        <ul class="option2" id="toOptions" name="to1">
                            <!-- gujarat air-->
                            <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Rajkot, Gujarat</p>
                                            <p class="font12 greyText appendBottom3"> Rajkot Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold con">RAJ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ahmedabad, Gujarat</p>
                                            <p class="font12 greyText appendBottom3"> Sardar Vallabhbhai Patel
                                                International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">AMD</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Surat, Gujarat</p>
                                            <p class="font12 greyText appendBottom3"> Surat Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">STV</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Vadodara, Gujarat</p>
                                            <p class="font12 greyText appendBottom3">Vadodara Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BDQ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bhavnagar, Gujarat</p>
                                            <p class="font12 greyText appendBottom3"> Bhavnagar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BHU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bhuj, Gujarat</p>
                                            <p class="font12 greyText appendBottom3">Bhuj Airport / Bhuj Rudra Mata Air
                                                Force Base</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BHJ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jamnagar, Gujarat</p>
                                            <p class="font12 greyText appendBottom3"> Jamnagar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JGA</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kandla, Gujarat</p>
                                            <p class="font12 greyText appendBottom3"> Kandla Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXY</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Porbandar,Gujarat </p>
                                            <p class="font12 greyText appendBottom3"> Porbandar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">PBD</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Junagath-Keshod, India</p>
                                            <p class="font12 greyText appendBottom3"> Keshod Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXY</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Amreli, India</p>
                                            <p class="font12 greyText appendBottom3"> Amreli Airport</p>
                                        </div>
                                    </div>
                                </li>

                                <!-- Andhra Pradesh air-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kadapa, India</p>
                                            <p class="font12 greyText appendBottom3">Kadapa Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">CDP</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Donakonda, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Donakonda Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kurnool, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Kurnool Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">KJB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Puttaparthi, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Sri Sathya Sai Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">PUT</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Rajahmundry, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Rajahmundry Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">RJA</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Tirupati, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Tirupati International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TIR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Vijayawada, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Vijayawada International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">VGA</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Visakhapatnam, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Visakhapatnam International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">VTZ</div>
                                    </div>
                                </li>

                                <!--ARUNACHAL PRADEH-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Daporijo, Arunachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Daporijo Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">DEP</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Itanagar, Arunachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Donyi Polo Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">HGI</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Pasighat, Arunachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Pasighat Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXT</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Tezu, Arunachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Tezu Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TEI</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ziro, Arunachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Ziro Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">ZER</div>
                                    </div>
                                </li>

                                  <!-- Assam-->
                                  <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Dhubri, Assam</p>
                                            <p class="font12 greyText appendBottom3">Rupsi Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">RUP</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Dibrugarh, Assam</p>
                                            <p class="font12 greyText appendBottom3"> Dibrugarh Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">DIB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Guwahati, Assam</p>
                                            <p class="font12 greyText appendBottom3">LOkpriya Gopinath Bordoloi Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">GAU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jorhat, Assam</p>
                                            <p class="font12 greyText appendBottom3">Jorhat Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JRH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">North Lakhimpur, Assam</p>
                                            <p class="font12 greyText appendBottom3">Lilabari Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXI</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Silchar, Assam</p>
                                            <p class="font12 greyText appendBottom3">Silchar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXS</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Tezpur, Assam</p>
                                            <p class="font12 greyText appendBottom3">Tezpur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TEZ</div>
                                    </div>
                                </li>

                                 <!-- Bihar-->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Darbhanga, Bihar</p>
                                            <p class="font12 greyText appendBottom3">Darbhanga Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">DBR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Gaya, Bihar</p>
                                            <p class="font12 greyText appendBottom3"> Gaya Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">GAY</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Pumia, Bihar</p>
                                            <p class="font12 greyText appendBottom3">Pumia Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Muzaffarpur, Bihar</p>
                                            <p class="font12 greyText appendBottom3">Muzaffarpur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">MZU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Patna, Bihar</p>
                                            <p class="font12 greyText appendBottom3">Jay Prakash NArayan Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">PAT</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Raxaul, Bihar</p>
                                            <p class="font12 greyText appendBottom3">Raxaul Airport</p>
                                        </div>
                                    </div>
                                </li>
                                
                                <!-- Chhattisgarh-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Raipur, Chhattisgarh</p>
                                            <p class="font12 greyText appendBottom3">Swami Vivekananda Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">RPR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bilaspur, Chhattisgarh</p>
                                            <p class="font12 greyText appendBottom3"> Bilaspur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">PAB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jagdalpur, Chhattisgarh</p>
                                            <p class="font12 greyText appendBottom3">Jagdalpur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JGB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ambikapur, Chhattisgarh</p>
                                            <p class="font12 greyText appendBottom3">Ambikapur Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Raigarh, Chhattisgarh</p>
                                            <p class="font12 greyText appendBottom3">Raigarh Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Korba, Chhattisgarh</p>
                                            <p class="font12 greyText appendBottom3">Korba Airport</p>
                                        </div>
                                    </div>
                                </li>
                                
                                 <!-- GOA-->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Dabolim, Goa</p>
                                            <p class="font12 greyText appendBottom3">Dabolim Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">GOI</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Mopa, Goa</p>
                                            <p class="font12 greyText appendBottom3">Manohar International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">GOX</div>
                                    </div>
                                </li>

                                  <!-- Haryana-->
                                  <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Hisar, Haryana</p>
                                            <p class="font12 greyText appendBottom3">Hisar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">HSS</div>
                                    </div>
                                </li>

                                <!-- Himachal Pradesh-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kangra, Himachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Kangra Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">DHM</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kullu-Manali, Himachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Kullu-Manali Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">KUU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Shimla, Himachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Shimla Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">SLV</div>
                                    </div>
                                </li>

                                <!-- Jharkhand-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bokaro, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3">Bokaro Airport</p>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Deoghar, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3"> Deoghar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">DGH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Dhalbhumgarh, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3">Dhalbhumgarh Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Dumka, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3">Dumka Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jamshedpur, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3">Chakulia Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jamshedpur, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3">Sonari Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXW</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ranchi, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3">Birsa Munda Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXR</div>

                                    </div>
                                </li>
                               

                                <!-- Karnataka air-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Belgavi, Karnataka</p>
                                            <p class="font12 greyText appendBottom3"> Belgavi Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold con">IXG</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ballari, Karnataka</p>
                                            <p class="font12 greyText appendBottom3">  Jindal Vijaynagar International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">VDY</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bengaluru, Karnataka</p>
                                            <p class="font12 greyText appendBottom3"> Kempegowda International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BLR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bengaluru, Karnataka</p>
                                            <p class="font12 greyText appendBottom3">HAL Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bidar, Karnataka</p>
                                            <p class="font12 greyText appendBottom3"> Bidar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXX</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Hubli, Karnataka</p>
                                            <p class="font12 greyText appendBottom3">Hubli Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">HBX</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Koppal, Karnataka</p>
                                            <p class="font12 greyText appendBottom3"> Baldota Airport</p>
                                        </div>
                                       
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Mangaluru, Karnataka</p>
                                            <p class="font12 greyText appendBottom3"> Mangalore International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXE</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Mysuru,Karnataka </p>
                                            <p class="font12 greyText appendBottom3"> Mysore Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">MYQ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Shivamogga, Karnataka</p>
                                            <p class="font12 greyText appendBottom3"> Kuvempu Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">RQY</div>
                                    </div>
                                </li>


                                <!-- Kerala -->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kannur,Kerala</p>
                                            <p class="font12 greyText appendBottom3">Kannur International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">CNN</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kochi, Kerala</p>
                                            <p class="font12 greyText appendBottom3">Cochin International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">COK</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kazhikode, Kerala</p>
                                            <p class="font12 greyText appendBottom3">Kazhikode International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">CCJ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kazhikode, Kerala</p>
                                            <p class="font12 greyText appendBottom3">Thiruvanathapuram International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TRV</div>
                                    </div>
                                </li>
                               

                                 <!-- Madhya Pradesh air-->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bhopal, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Raja Bhoj Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold con">BHO</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Gwalior, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Rajmata Vijaya Raje Scindia Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">GWL</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Indore, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Devi Ahilya Bai Holkar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IDR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jabalpur, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Jabalpur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JLR</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Khajuraho, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Khajuraho Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">HJR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Khandwa, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Khandwa Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Nagda, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Birlagram Airport</p>
                                        </div>
                                       
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Panna, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Panna Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Satna,Madhya Pradesh </p>
                                            <p class="font12 greyText appendBottom3"> Satna Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TNI</div>
                                    </div>
                                </li>
                               

                                <!-- Maharashtra air-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Akola, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Akola Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">AKD</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Aurangabad, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3"> Aurangabad Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Baramati, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Baramati Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Gondia, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3"> Gondia Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">GDB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jalgaon, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3"> Jalgaon Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JLG</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kolhapur, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Kolhapur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">KLH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Latur, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3"> Latur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">LTU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Mumbai,Maharashtra </p>
                                            <p class="font12 greyText appendBottom3"> Chhatrapati Shivaji Maharaj International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BOM</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Mumbai, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3"> Juhu Aerodrome</p>
                                        </div>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Nagpur, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Dr. Babasaheb Ambedkar International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">NAG</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Nanded, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Shri Guru Gobind Singh Ji Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">NDC</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Nashik, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Nashik Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">ISK</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Osmanabad, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Osmanabad Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">OMN</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Pune, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Pune Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">PNQ</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Shirdi, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Shirdi Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">SAG</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Solapur, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Solapur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">SSE</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Sindhudurg, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Sindhudurg Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">SDW</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Yavatmal, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Sant Gadge Baba Yavatmai Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">YLT</div>

                                    </div>
                                </li>
                               

                                 <!-- Manipur -->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Imphal,  Manipur</p>
                                            <p class="font12 greyText appendBottom3">Imphal International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IMF</div>
                                    </div>
                                </li>


                                <!-- Meghalaya -->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Shillong, Meghalaya</p>
                                            <p class="font12 greyText appendBottom3">Shillong Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">SHL</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Shella, Meghalaya</p>
                                            <p class="font12 greyText appendBottom3">Shella Airport</p>
                                        </div>
                                    </div>
                                </li>

                                 <!-- NAgaland -->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Dimapur, Nagaland</p>
                                            <p class="font12 greyText appendBottom3">Dimapur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">DMU</div>
                                    </div>
                                </li>

                                
                                <!-- Mizoram -->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Aizawl, Mizoram</p>
                                            <p class="font12 greyText appendBottom3">Turial Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Aizawl, Mizoram</p>
                                            <p class="font12 greyText appendBottom3">Lengpui Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">AJL</div>
                                    </div>
                                </li>

                                <!-- Odisha air-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Angul, Odisha</p>
                                            <p class="font12 greyText appendBottom3"> Savitri Jindal Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Berhampur, Odisha</p>
                                            <p class="font12 greyText appendBottom3">Rangeilunda Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">QBM</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bhubaneswar, Odisha</p>
                                            <p class="font12 greyText appendBottom3"> Biju Patnaik International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BBI</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jeypore, Odisha</p>
                                            <p class="font12 greyText appendBottom3">Jeypore Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JRG</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Rourkela, Odisha</p>
                                            <p class="font12 greyText appendBottom3"> Rourkela Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">RRK</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Utkela, Odisha</p>
                                            <p class="font12 greyText appendBottom3">Utkela Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">UKE</div>
                                    </div>
                                </li>
                                
                                <!-- Panjab air-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Amrisar,Punjab</p>
                                            <p class="font12 greyText appendBottom3">Bathinda Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">ATQ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Amrisar, Panjab</p>
                                            <p class="font12 greyText appendBottom3"> Sri Guru Ram Dass jee International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">ATQ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bathinda, Panjab</p>
                                            <p class="font12 greyText appendBottom3">Bathinda Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BUP</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jalandhar,Panjab</p>
                                            <p class="font12 greyText appendBottom3">Adampur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">AIP</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ludhiana,Panjab</p>
                                            <p class="font12 greyText appendBottom3">Ludhiana Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">LUH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Pathankot,Panjab</p>
                                            <p class="font12 greyText appendBottom3">Pathankot Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXP</div>
                                    </div>
                                </li>

                                <!-- Rajasthan air-->

                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ajmer,Rajasthan </p>
                                            <p class="font12 greyText appendBottom3">Kishangath Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">KQH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Banasthali,Rajasthan</p>
                                            <p class="font12 greyText appendBottom3">Banasthali Airstrip Airport</p>
                                        </div>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bikaner,Rajasthan </p>
                                            <p class="font12 greyText appendBottom3">Bikaner Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BKB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jaipur,Rajasthan</p>
                                            <p class="font12 greyText appendBottom3">Jaipur =International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JAI</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jaisalmer,Rajasthan </p>
                                            <p class="font12 greyText appendBottom3">Jaisalmer Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JSA</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jodhpur,Rajasthan</p>
                                            <p class="font12 greyText appendBottom3">Jodhpur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JDH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kankroli,Rajasthan </p>
                                            <p class="font12 greyText appendBottom3">Kankroli Airstrip Airport</p>
                                        </div>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kota,Rajasthan</p>
                                            <p class="font12 greyText appendBottom3">Kota Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">KTU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Udaipur,Rajasthan </p>
                                            <p class="font12 greyText appendBottom3">Maharana Pratap Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">UDR</div>
                                    </div>
                                </li>
                                

                                 <!-- Sikkim -->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Gangtok, Sikkim</p>
                                            <p class="font12 greyText appendBottom3">Pakyong Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">PYG</div>
                                    </div>
                                </li>

                                
                                 <!-- Tamil Nadu air-->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Chennai,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3"> Chennai International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold con">MAA</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Coimbatore,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Coimbatore International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">CJB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Madurai,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Madurai Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold con">IXM</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Neyveli,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Neyveli Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">NVY</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Salem,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Salem Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold con">SXV</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Thanjavur,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Thanjavur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TJV</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Thoothukkudi,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Tuticorin Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TCR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Tiruchirappalli,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Tiruchirappalli International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TRZ</div>
                                    </div>
                                </li>
                               

                                 <!-- Telangana air-->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Hyderabad,Telangana</p>
                                            <p class="font12 greyText appendBottom3">Begumpet Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BPM</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Hyderabad, Telangana</p>
                                            <p class="font12 greyText appendBottom3"> Rajiv Gandhi International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">HYD</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Warangal,Telangana</p>
                                            <p class="font12 greyText appendBottom3">Warangal Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">WGC</div>
                                    </div>
                                </li>
                               
                                 <!-- Tripura air-->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Agartala,Tripura</p>
                                            <p class="font12 greyText appendBottom3">Maharaja Bir Bikram Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXA</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">KAilashahar, Tripura</p>
                                            <p class="font12 greyText appendBottom3">KAilashahar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kamalpur,Tripura</p>
                                            <p class="font12 greyText appendBottom3">Kamalpur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXQ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Khowai,Tripura</p>
                                            <p class="font12 greyText appendBottom3">Khowai Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXN</div>
                                    </div>
                                </li>
                               
                        </ul>
                    </div>
                </div>

            </div>
            <div class="i-box2">
                <div class="date-flight">
                <div>
                        <label for="departure"><h5>Departure Date:</h5></label>
                        </div>
                    <input type="date" class="date" name="deDate">
                </div>

                <div class="date-flight">
                <div>
                        <label for="arrival"><h5>Return Date:</h5></label>
                        </div>
                    <input type="date" class="date" name="arDate">
                </div>


                <div class="select-passenger-data">
                     <div class="select_Audelts" style="margin: 10px 20px 40px 40px;">
            <div>
            <label for="Adults"><h5>Adults</h5></label>
            </div>
           
             <select name="adults" id="A" style="width:100px;height:45px;font-size:20px;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                       
            </select>
                     </div>
    
                     <div class="select_class" style="margin: 10px 20px 40px 40px;">
                     <div>
                         <label for="Class"><h5>Select Class</h5></strong></label>
                     </div>
       
                         <select name="class" id="Class" style="width:300px;height:45px;font-size:18px;">
                             <option value="economy">Economy</option>
                            <option value="business">Premium(Business/First)</option>
                   
                         </select>
                </div>
    
        
    </div>


            </div>
            <div class="flight-btn">
                <button name="search_submit">
                    Search Flights
                </button>
            </div>

        </div>
        <div class="radio_content radio_2">
            <div class="i-box">
                <div class="select-box">
                    <div class="select-option">
                    <div>
                        <label for="departure"><h5>Departure</h5></label>
                        </div>
                        <input type="text" name="text-box1" class="from-select" id="soValue" placeholder="FROM" readonly>
                    </div>
                    <div class="search-content">
                        <div class="se-con">
                            <input type="text" id="optionSearch" placeholder="Search" name="">
                        </div>
                        <ul class="option">
                            <!-- gujarat air-->
                            <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Rajkot, Gujarat</p>
                                            <p class="font12 greyText appendBottom3"> Rajkot Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold con">RAJ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ahmedabad, Gujarat</p>
                                            <p class="font12 greyText appendBottom3"> Sardar Vallabhbhai Patel
                                                International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">AMD</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Surat, Gujarat</p>
                                            <p class="font12 greyText appendBottom3"> Surat Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">STV</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Vadodara, Gujarat</p>
                                            <p class="font12 greyText appendBottom3">Vadodara Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BDQ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bhavnagar, Gujarat</p>
                                            <p class="font12 greyText appendBottom3"> Bhavnagar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BHU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bhuj, Gujarat</p>
                                            <p class="font12 greyText appendBottom3">Bhuj Airport / Bhuj Rudra Mata Air
                                                Force Base</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BHJ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jamnagar, Gujarat</p>
                                            <p class="font12 greyText appendBottom3"> Jamnagar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JGA</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kandla, Gujarat</p>
                                            <p class="font12 greyText appendBottom3"> Kandla Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXY</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Porbandar,Gujarat </p>
                                            <p class="font12 greyText appendBottom3"> Porbandar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">PBD</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Junagath-Keshod, India</p>
                                            <p class="font12 greyText appendBottom3"> Keshod Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXY</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Amreli, India</p>
                                            <p class="font12 greyText appendBottom3"> Amreli Airport</p>
                                        </div>
                                    </div>
                                </li>

                                <!-- Andhra Pradesh air-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kadapa, India</p>
                                            <p class="font12 greyText appendBottom3">Kadapa Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">CDP</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Donakonda, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Donakonda Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kurnool, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Kurnool Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">KJB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Puttaparthi, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Sri Sathya Sai Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">PUT</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Rajahmundry, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Rajahmundry Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">RJA</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Tirupati, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Tirupati International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TIR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Vijayawada, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Vijayawada International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">VGA</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Visakhapatnam, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Visakhapatnam International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">VTZ</div>
                                    </div>
                                </li>

                                <!--ARUNACHAL PRADEH-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Daporijo, Arunachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Daporijo Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">DEP</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Itanagar, Arunachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Donyi Polo Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">HGI</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Pasighat, Arunachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Pasighat Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXT</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Tezu, Arunachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Tezu Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TEI</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ziro, Arunachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Ziro Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">ZER</div>
                                    </div>
                                </li>

                                  <!-- Assam-->
                                  <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Dhubri, Assam</p>
                                            <p class="font12 greyText appendBottom3">Rupsi Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">RUP</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Dibrugarh, Assam</p>
                                            <p class="font12 greyText appendBottom3"> Dibrugarh Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">DIB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Guwahati, Assam</p>
                                            <p class="font12 greyText appendBottom3">LOkpriya Gopinath Bordoloi Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">GAU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jorhat, Assam</p>
                                            <p class="font12 greyText appendBottom3">Jorhat Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JRH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">North Lakhimpur, Assam</p>
                                            <p class="font12 greyText appendBottom3">Lilabari Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXI</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Silchar, Assam</p>
                                            <p class="font12 greyText appendBottom3">Silchar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXS</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Tezpur, Assam</p>
                                            <p class="font12 greyText appendBottom3">Tezpur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TEZ</div>
                                    </div>
                                </li>

                                 <!-- Bihar-->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Darbhanga, Bihar</p>
                                            <p class="font12 greyText appendBottom3">Darbhanga Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">DBR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Gaya, Bihar</p>
                                            <p class="font12 greyText appendBottom3"> Gaya Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">GAY</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Pumia, Bihar</p>
                                            <p class="font12 greyText appendBottom3">Pumia Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Muzaffarpur, Bihar</p>
                                            <p class="font12 greyText appendBottom3">Muzaffarpur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">MZU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Patna, Bihar</p>
                                            <p class="font12 greyText appendBottom3">Jay Prakash NArayan Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">PAT</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Raxaul, Bihar</p>
                                            <p class="font12 greyText appendBottom3">Raxaul Airport</p>
                                        </div>
                                    </div>
                                </li>
                                
                                <!-- Chhattisgarh-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Raipur, Chhattisgarh</p>
                                            <p class="font12 greyText appendBottom3">Swami Vivekananda Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">RPR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bilaspur, Chhattisgarh</p>
                                            <p class="font12 greyText appendBottom3"> Bilaspur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">PAB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jagdalpur, Chhattisgarh</p>
                                            <p class="font12 greyText appendBottom3">Jagdalpur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JGB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ambikapur, Chhattisgarh</p>
                                            <p class="font12 greyText appendBottom3">Ambikapur Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Raigarh, Chhattisgarh</p>
                                            <p class="font12 greyText appendBottom3">Raigarh Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Korba, Chhattisgarh</p>
                                            <p class="font12 greyText appendBottom3">Korba Airport</p>
                                        </div>
                                    </div>
                                </li>
                                
                                 <!-- GOA-->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Dabolim, Goa</p>
                                            <p class="font12 greyText appendBottom3">Dabolim Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">GOI</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Mopa, Goa</p>
                                            <p class="font12 greyText appendBottom3">Manohar International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">GOX</div>
                                    </div>
                                </li>

                                  <!-- Haryana-->
                                  <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Hisar, Haryana</p>
                                            <p class="font12 greyText appendBottom3">Hisar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">HSS</div>
                                    </div>
                                </li>

                                <!-- Himachal Pradesh-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kangra, Himachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Kangra Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">DHM</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kullu-Manali, Himachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Kullu-Manali Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">KUU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Shimla, Himachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Shimla Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">SLV</div>
                                    </div>
                                </li>

                                <!-- Jharkhand-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bokaro, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3">Bokaro Airport</p>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Deoghar, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3"> Deoghar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">DGH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Dhalbhumgarh, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3">Dhalbhumgarh Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Dumka, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3">Dumka Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jamshedpur, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3">Chakulia Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jamshedpur, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3">Sonari Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXW</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ranchi, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3">Birsa Munda Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXR</div>

                                    </div>
                                </li>
                               

                                <!-- Karnataka air-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Belgavi, Karnataka</p>
                                            <p class="font12 greyText appendBottom3"> Belgavi Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold con">IXG</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ballari, Karnataka</p>
                                            <p class="font12 greyText appendBottom3">  Jindal Vijaynagar International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">VDY</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bengaluru, Karnataka</p>
                                            <p class="font12 greyText appendBottom3"> Kempegowda International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BLR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bengaluru, Karnataka</p>
                                            <p class="font12 greyText appendBottom3">HAL Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bidar, Karnataka</p>
                                            <p class="font12 greyText appendBottom3"> Bidar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXX</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Hubli, Karnataka</p>
                                            <p class="font12 greyText appendBottom3">Hubli Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">HBX</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Koppal, Karnataka</p>
                                            <p class="font12 greyText appendBottom3"> Baldota Airport</p>
                                        </div>
                                       
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Mangaluru, Karnataka</p>
                                            <p class="font12 greyText appendBottom3"> Mangalore International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXE</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Mysuru,Karnataka </p>
                                            <p class="font12 greyText appendBottom3"> Mysore Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">MYQ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Shivamogga, Karnataka</p>
                                            <p class="font12 greyText appendBottom3"> Kuvempu Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">RQY</div>
                                    </div>
                                </li>


                                <!-- Kerala -->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kannur,Kerala</p>
                                            <p class="font12 greyText appendBottom3">Kannur International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">CNN</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kochi, Kerala</p>
                                            <p class="font12 greyText appendBottom3">Cochin International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">COK</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kazhikode, Kerala</p>
                                            <p class="font12 greyText appendBottom3">Kazhikode International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">CCJ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kazhikode, Kerala</p>
                                            <p class="font12 greyText appendBottom3">Thiruvanathapuram International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TRV</div>
                                    </div>
                                </li>
                               

                                 <!-- Madhya Pradesh air-->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bhopal, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Raja Bhoj Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold con">BHO</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Gwalior, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Rajmata Vijaya Raje Scindia Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">GWL</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Indore, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Devi Ahilya Bai Holkar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IDR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jabalpur, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Jabalpur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JLR</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Khajuraho, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Khajuraho Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">HJR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Khandwa, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Khandwa Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Nagda, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Birlagram Airport</p>
                                        </div>
                                       
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Panna, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Panna Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Satna,Madhya Pradesh </p>
                                            <p class="font12 greyText appendBottom3"> Satna Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TNI</div>
                                    </div>
                                </li>
                               

                                <!-- Maharashtra air-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Akola, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Akola Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">AKD</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Aurangabad, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3"> Aurangabad Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Baramati, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Baramati Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Gondia, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3"> Gondia Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">GDB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jalgaon, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3"> Jalgaon Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JLG</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kolhapur, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Kolhapur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">KLH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Latur, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3"> Latur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">LTU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Mumbai,Maharashtra </p>
                                            <p class="font12 greyText appendBottom3"> Chhatrapati Shivaji Maharaj International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BOM</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Mumbai, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3"> Juhu Aerodrome</p>
                                        </div>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Nagpur, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Dr. Babasaheb Ambedkar International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">NAG</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Nanded, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Shri Guru Gobind Singh Ji Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">NDC</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Nashik, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Nashik Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">ISK</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Osmanabad, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Osmanabad Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">OMN</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Pune, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Pune Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">PNQ</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Shirdi, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Shirdi Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">SAG</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Solapur, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Solapur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">SSE</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Sindhudurg, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Sindhudurg Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">SDW</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Yavatmal, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Sant Gadge Baba Yavatmai Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">YLT</div>

                                    </div>
                                </li>
                               

                                 <!-- Manipur -->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Imphal,  Manipur</p>
                                            <p class="font12 greyText appendBottom3">Imphal International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IMF</div>
                                    </div>
                                </li>


                                <!-- Meghalaya -->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Shillong, Meghalaya</p>
                                            <p class="font12 greyText appendBottom3">Shillong Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">SHL</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Shella, Meghalaya</p>
                                            <p class="font12 greyText appendBottom3">Shella Airport</p>
                                        </div>
                                    </div>
                                </li>

                                 <!-- NAgaland -->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Dimapur, Nagaland</p>
                                            <p class="font12 greyText appendBottom3">Dimapur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">DMU</div>
                                    </div>
                                </li>

                                
                                <!-- Mizoram -->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Aizawl, Mizoram</p>
                                            <p class="font12 greyText appendBottom3">Turial Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Aizawl, Mizoram</p>
                                            <p class="font12 greyText appendBottom3">Lengpui Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">AJL</div>
                                    </div>
                                </li>

                                <!-- Odisha air-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Angul, Odisha</p>
                                            <p class="font12 greyText appendBottom3"> Savitri Jindal Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Berhampur, Odisha</p>
                                            <p class="font12 greyText appendBottom3">Rangeilunda Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">QBM</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bhubaneswar, Odisha</p>
                                            <p class="font12 greyText appendBottom3"> Biju Patnaik International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BBI</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jeypore, Odisha</p>
                                            <p class="font12 greyText appendBottom3">Jeypore Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JRG</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Rourkela, Odisha</p>
                                            <p class="font12 greyText appendBottom3"> Rourkela Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">RRK</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Utkela, Odisha</p>
                                            <p class="font12 greyText appendBottom3">Utkela Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">UKE</div>
                                    </div>
                                </li>
                                
                                <!-- Panjab air-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Amrisar,Punjab</p>
                                            <p class="font12 greyText appendBottom3">Bathinda Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">ATQ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Amrisar, Panjab</p>
                                            <p class="font12 greyText appendBottom3"> Sri Guru Ram Dass jee International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">ATQ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bathinda, Panjab</p>
                                            <p class="font12 greyText appendBottom3">Bathinda Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BUP</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jalandhar,Panjab</p>
                                            <p class="font12 greyText appendBottom3">Adampur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">AIP</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ludhiana,Panjab</p>
                                            <p class="font12 greyText appendBottom3">Ludhiana Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">LUH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Pathankot,Panjab</p>
                                            <p class="font12 greyText appendBottom3">Pathankot Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXP</div>
                                    </div>
                                </li>

                                <!-- Rajasthan air-->

                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ajmer,Rajasthan </p>
                                            <p class="font12 greyText appendBottom3">Kishangath Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">KQH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Banasthali,Rajasthan</p>
                                            <p class="font12 greyText appendBottom3">Banasthali Airstrip Airport</p>
                                        </div>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bikaner,Rajasthan </p>
                                            <p class="font12 greyText appendBottom3">Bikaner Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BKB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jaipur,Rajasthan</p>
                                            <p class="font12 greyText appendBottom3">Jaipur =International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JAI</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jaisalmer,Rajasthan </p>
                                            <p class="font12 greyText appendBottom3">Jaisalmer Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JSA</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jodhpur,Rajasthan</p>
                                            <p class="font12 greyText appendBottom3">Jodhpur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JDH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kankroli,Rajasthan </p>
                                            <p class="font12 greyText appendBottom3">Kankroli Airstrip Airport</p>
                                        </div>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kota,Rajasthan</p>
                                            <p class="font12 greyText appendBottom3">Kota Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">KTU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Udaipur,Rajasthan </p>
                                            <p class="font12 greyText appendBottom3">Maharana Pratap Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">UDR</div>
                                    </div>
                                </li>
                                

                                 <!-- Sikkim -->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Gangtok, Sikkim</p>
                                            <p class="font12 greyText appendBottom3">Pakyong Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">PYG</div>
                                    </div>
                                </li>

                                
                                 <!-- Tamil Nadu air-->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Chennai,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3"> Chennai International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold con">MAA</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Coimbatore,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Coimbatore International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">CJB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Madurai,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Madurai Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold con">IXM</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Neyveli,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Neyveli Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">NVY</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Salem,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Salem Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold con">SXV</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Thanjavur,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Thanjavur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TJV</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Thoothukkudi,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Tuticorin Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TCR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Tiruchirappalli,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Tiruchirappalli International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TRZ</div>
                                    </div>
                                </li>
                               

                                 <!-- Telangana air-->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Hyderabad,Telangana</p>
                                            <p class="font12 greyText appendBottom3">Begumpet Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BPM</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Hyderabad, Telangana</p>
                                            <p class="font12 greyText appendBottom3"> Rajiv Gandhi International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">HYD</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Warangal,Telangana</p>
                                            <p class="font12 greyText appendBottom3">Warangal Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">WGC</div>
                                    </div>
                                </li>
                               
                                 <!-- Tripura air-->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Agartala,Tripura</p>
                                            <p class="font12 greyText appendBottom3">Maharaja Bir Bikram Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXA</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">KAilashahar, Tripura</p>
                                            <p class="font12 greyText appendBottom3">KAilashahar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kamalpur,Tripura</p>
                                            <p class="font12 greyText appendBottom3">Kamalpur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXQ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Khowai,Tripura</p>
                                            <p class="font12 greyText appendBottom3">Khowai Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXN</div>
                                    </div>
                                </li>




                        </ul>
                    </div>
                </div>

                <div class="select-box2">
                    <div class="select-option2">
                    <div><label for="arrival"><h5>Arrival</h5></label></div> 
                        <input type="text" name="text-box2" class="to-select" id="soValue2" placeholder="To" readonly>
                    </div>
                    <div class="search-content2">
                        <div class="se-con2">
                            <input type="text" id="toOptionSearch" placeholder="Search" name="">
                        </div>
                        <ul class="option2" id="toOptions">
                            <!-- gujarat air-->
                            <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Rajkot, Gujarat</p>
                                            <p class="font12 greyText appendBottom3"> Rajkot Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold con">RAJ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ahmedabad, Gujarat</p>
                                            <p class="font12 greyText appendBottom3"> Sardar Vallabhbhai Patel
                                                International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">AMD</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Surat, Gujarat</p>
                                            <p class="font12 greyText appendBottom3"> Surat Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">STV</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Vadodara, Gujarat</p>
                                            <p class="font12 greyText appendBottom3">Vadodara Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BDQ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bhavnagar, Gujarat</p>
                                            <p class="font12 greyText appendBottom3"> Bhavnagar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BHU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bhuj, Gujarat</p>
                                            <p class="font12 greyText appendBottom3">Bhuj Airport / Bhuj Rudra Mata Air
                                                Force Base</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BHJ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jamnagar, Gujarat</p>
                                            <p class="font12 greyText appendBottom3"> Jamnagar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JGA</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kandla, Gujarat</p>
                                            <p class="font12 greyText appendBottom3"> Kandla Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXY</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Porbandar,Gujarat </p>
                                            <p class="font12 greyText appendBottom3"> Porbandar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">PBD</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Junagath-Keshod, India</p>
                                            <p class="font12 greyText appendBottom3"> Keshod Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXY</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Amreli, India</p>
                                            <p class="font12 greyText appendBottom3"> Amreli Airport</p>
                                        </div>
                                    </div>
                                </li>

                                <!-- Andhra Pradesh air-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kadapa, India</p>
                                            <p class="font12 greyText appendBottom3">Kadapa Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">CDP</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Donakonda, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Donakonda Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kurnool, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Kurnool Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">KJB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Puttaparthi, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Sri Sathya Sai Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">PUT</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Rajahmundry, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Rajahmundry Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">RJA</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Tirupati, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Tirupati International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TIR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Vijayawada, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Vijayawada International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">VGA</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Visakhapatnam, Andhra Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Visakhapatnam International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">VTZ</div>
                                    </div>
                                </li>

                                <!--ARUNACHAL PRADEH-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Daporijo, Arunachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Daporijo Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">DEP</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Itanagar, Arunachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Donyi Polo Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">HGI</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Pasighat, Arunachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Pasighat Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXT</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Tezu, Arunachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Tezu Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TEI</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ziro, Arunachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Ziro Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">ZER</div>
                                    </div>
                                </li>

                                  <!-- Assam-->
                                  <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Dhubri, Assam</p>
                                            <p class="font12 greyText appendBottom3">Rupsi Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">RUP</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Dibrugarh, Assam</p>
                                            <p class="font12 greyText appendBottom3"> Dibrugarh Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">DIB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Guwahati, Assam</p>
                                            <p class="font12 greyText appendBottom3">LOkpriya Gopinath Bordoloi Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">GAU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jorhat, Assam</p>
                                            <p class="font12 greyText appendBottom3">Jorhat Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JRH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">North Lakhimpur, Assam</p>
                                            <p class="font12 greyText appendBottom3">Lilabari Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXI</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Silchar, Assam</p>
                                            <p class="font12 greyText appendBottom3">Silchar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXS</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Tezpur, Assam</p>
                                            <p class="font12 greyText appendBottom3">Tezpur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TEZ</div>
                                    </div>
                                </li>

                                 <!-- Bihar-->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Darbhanga, Bihar</p>
                                            <p class="font12 greyText appendBottom3">Darbhanga Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">DBR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Gaya, Bihar</p>
                                            <p class="font12 greyText appendBottom3"> Gaya Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">GAY</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Pumia, Bihar</p>
                                            <p class="font12 greyText appendBottom3">Pumia Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Muzaffarpur, Bihar</p>
                                            <p class="font12 greyText appendBottom3">Muzaffarpur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">MZU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Patna, Bihar</p>
                                            <p class="font12 greyText appendBottom3">Jay Prakash NArayan Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">PAT</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Raxaul, Bihar</p>
                                            <p class="font12 greyText appendBottom3">Raxaul Airport</p>
                                        </div>
                                    </div>
                                </li>
                                
                                <!-- Chhattisgarh-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Raipur, Chhattisgarh</p>
                                            <p class="font12 greyText appendBottom3">Swami Vivekananda Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">RPR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bilaspur, Chhattisgarh</p>
                                            <p class="font12 greyText appendBottom3"> Bilaspur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">PAB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jagdalpur, Chhattisgarh</p>
                                            <p class="font12 greyText appendBottom3">Jagdalpur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JGB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ambikapur, Chhattisgarh</p>
                                            <p class="font12 greyText appendBottom3">Ambikapur Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Raigarh, Chhattisgarh</p>
                                            <p class="font12 greyText appendBottom3">Raigarh Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Korba, Chhattisgarh</p>
                                            <p class="font12 greyText appendBottom3">Korba Airport</p>
                                        </div>
                                    </div>
                                </li>
                                
                                 <!-- GOA-->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Dabolim, Goa</p>
                                            <p class="font12 greyText appendBottom3">Dabolim Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">GOI</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Mopa, Goa</p>
                                            <p class="font12 greyText appendBottom3">Manohar International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">GOX</div>
                                    </div>
                                </li>

                                  <!-- Haryana-->
                                  <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Hisar, Haryana</p>
                                            <p class="font12 greyText appendBottom3">Hisar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">HSS</div>
                                    </div>
                                </li>

                                <!-- Himachal Pradesh-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kangra, Himachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Kangra Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">DHM</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kullu-Manali, Himachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Kullu-Manali Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">KUU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Shimla, Himachal Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Shimla Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">SLV</div>
                                    </div>
                                </li>

                                <!-- Jharkhand-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bokaro, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3">Bokaro Airport</p>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Deoghar, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3"> Deoghar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">DGH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Dhalbhumgarh, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3">Dhalbhumgarh Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Dumka, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3">Dumka Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jamshedpur, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3">Chakulia Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jamshedpur, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3">Sonari Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXW</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ranchi, Jharkhand</p>
                                            <p class="font12 greyText appendBottom3">Birsa Munda Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXR</div>

                                    </div>
                                </li>
                               

                                <!-- Karnataka air-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Belgavi, Karnataka</p>
                                            <p class="font12 greyText appendBottom3"> Belgavi Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold con">IXG</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ballari, Karnataka</p>
                                            <p class="font12 greyText appendBottom3">  Jindal Vijaynagar International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">VDY</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bengaluru, Karnataka</p>
                                            <p class="font12 greyText appendBottom3"> Kempegowda International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BLR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bengaluru, Karnataka</p>
                                            <p class="font12 greyText appendBottom3">HAL Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bidar, Karnataka</p>
                                            <p class="font12 greyText appendBottom3"> Bidar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXX</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Hubli, Karnataka</p>
                                            <p class="font12 greyText appendBottom3">Hubli Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">HBX</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Koppal, Karnataka</p>
                                            <p class="font12 greyText appendBottom3"> Baldota Airport</p>
                                        </div>
                                       
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Mangaluru, Karnataka</p>
                                            <p class="font12 greyText appendBottom3"> Mangalore International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXE</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Mysuru,Karnataka </p>
                                            <p class="font12 greyText appendBottom3"> Mysore Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">MYQ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Shivamogga, Karnataka</p>
                                            <p class="font12 greyText appendBottom3"> Kuvempu Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">RQY</div>
                                    </div>
                                </li>


                                <!-- Kerala -->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kannur,Kerala</p>
                                            <p class="font12 greyText appendBottom3">Kannur International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">CNN</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kochi, Kerala</p>
                                            <p class="font12 greyText appendBottom3">Cochin International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">COK</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kazhikode, Kerala</p>
                                            <p class="font12 greyText appendBottom3">Kazhikode International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">CCJ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kazhikode, Kerala</p>
                                            <p class="font12 greyText appendBottom3">Thiruvanathapuram International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TRV</div>
                                    </div>
                                </li>
                               

                                 <!-- Madhya Pradesh air-->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bhopal, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Raja Bhoj Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold con">BHO</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Gwalior, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Rajmata Vijaya Raje Scindia Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">GWL</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Indore, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Devi Ahilya Bai Holkar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IDR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jabalpur, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Jabalpur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JLR</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Khajuraho, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Khajuraho Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">HJR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Khandwa, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3">Khandwa Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Nagda, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Birlagram Airport</p>
                                        </div>
                                       
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Panna, Madhya Pradesh</p>
                                            <p class="font12 greyText appendBottom3"> Panna Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Satna,Madhya Pradesh </p>
                                            <p class="font12 greyText appendBottom3"> Satna Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TNI</div>
                                    </div>
                                </li>
                               

                                <!-- Maharashtra air-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Akola, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Akola Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">AKD</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Aurangabad, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3"> Aurangabad Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Baramati, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Baramati Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Gondia, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3"> Gondia Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">GDB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jalgaon, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3"> Jalgaon Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JLG</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kolhapur, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Kolhapur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">KLH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Latur, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3"> Latur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">LTU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Mumbai,Maharashtra </p>
                                            <p class="font12 greyText appendBottom3"> Chhatrapati Shivaji Maharaj International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BOM</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Mumbai, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3"> Juhu Aerodrome</p>
                                        </div>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Nagpur, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Dr. Babasaheb Ambedkar International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">NAG</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Nanded, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Shri Guru Gobind Singh Ji Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">NDC</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Nashik, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Nashik Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">ISK</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Osmanabad, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Osmanabad Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">OMN</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Pune, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Pune Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">PNQ</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Shirdi, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Shirdi Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">SAG</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Solapur, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Solapur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">SSE</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Sindhudurg, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Sindhudurg Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">SDW</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Yavatmal, Maharashtra</p>
                                            <p class="font12 greyText appendBottom3">Sant Gadge Baba Yavatmai Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">YLT</div>

                                    </div>
                                </li>
                               

                                 <!-- Manipur -->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Imphal,  Manipur</p>
                                            <p class="font12 greyText appendBottom3">Imphal International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IMF</div>
                                    </div>
                                </li>


                                <!-- Meghalaya -->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Shillong, Meghalaya</p>
                                            <p class="font12 greyText appendBottom3">Shillong Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">SHL</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Shella, Meghalaya</p>
                                            <p class="font12 greyText appendBottom3">Shella Airport</p>
                                        </div>
                                    </div>
                                </li>

                                 <!-- NAgaland -->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Dimapur, Nagaland</p>
                                            <p class="font12 greyText appendBottom3">Dimapur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">DMU</div>
                                    </div>
                                </li>

                                
                                <!-- Mizoram -->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Aizawl, Mizoram</p>
                                            <p class="font12 greyText appendBottom3">Turial Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Aizawl, Mizoram</p>
                                            <p class="font12 greyText appendBottom3">Lengpui Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">AJL</div>
                                    </div>
                                </li>

                                <!-- Odisha air-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Angul, Odisha</p>
                                            <p class="font12 greyText appendBottom3"> Savitri Jindal Airport</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Berhampur, Odisha</p>
                                            <p class="font12 greyText appendBottom3">Rangeilunda Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">QBM</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bhubaneswar, Odisha</p>
                                            <p class="font12 greyText appendBottom3"> Biju Patnaik International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BBI</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jeypore, Odisha</p>
                                            <p class="font12 greyText appendBottom3">Jeypore Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JRG</div>

                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Rourkela, Odisha</p>
                                            <p class="font12 greyText appendBottom3"> Rourkela Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">RRK</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Utkela, Odisha</p>
                                            <p class="font12 greyText appendBottom3">Utkela Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">UKE</div>
                                    </div>
                                </li>
                                
                                <!-- Panjab air-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Amrisar,Punjab</p>
                                            <p class="font12 greyText appendBottom3">Bathinda Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">ATQ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Amrisar, Panjab</p>
                                            <p class="font12 greyText appendBottom3"> Sri Guru Ram Dass jee International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">ATQ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bathinda, Panjab</p>
                                            <p class="font12 greyText appendBottom3">Bathinda Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BUP</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jalandhar,Panjab</p>
                                            <p class="font12 greyText appendBottom3">Adampur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">AIP</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ludhiana,Panjab</p>
                                            <p class="font12 greyText appendBottom3">Ludhiana Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">LUH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Pathankot,Panjab</p>
                                            <p class="font12 greyText appendBottom3">Pathankot Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXP</div>
                                    </div>
                                </li>

                                <!-- Rajasthan air-->

                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ajmer,Rajasthan </p>
                                            <p class="font12 greyText appendBottom3">Kishangath Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">KQH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Banasthali,Rajasthan</p>
                                            <p class="font12 greyText appendBottom3">Banasthali Airstrip Airport</p>
                                        </div>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bikaner,Rajasthan </p>
                                            <p class="font12 greyText appendBottom3">Bikaner Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BKB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jaipur,Rajasthan</p>
                                            <p class="font12 greyText appendBottom3">Jaipur =International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JAI</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jaisalmer,Rajasthan </p>
                                            <p class="font12 greyText appendBottom3">Jaisalmer Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JSA</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jodhpur,Rajasthan</p>
                                            <p class="font12 greyText appendBottom3">Jodhpur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">JDH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kankroli,Rajasthan </p>
                                            <p class="font12 greyText appendBottom3">Kankroli Airstrip Airport</p>
                                        </div>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kota,Rajasthan</p>
                                            <p class="font12 greyText appendBottom3">Kota Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">KTU</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Udaipur,Rajasthan </p>
                                            <p class="font12 greyText appendBottom3">Maharana Pratap Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">UDR</div>
                                    </div>
                                </li>
                                

                                 <!-- Sikkim -->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Gangtok, Sikkim</p>
                                            <p class="font12 greyText appendBottom3">Pakyong Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">PYG</div>
                                    </div>
                                </li>

                                
                                 <!-- Tamil Nadu air-->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Chennai,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3"> Chennai International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold con">MAA</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Coimbatore,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Coimbatore International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">CJB</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Madurai,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Madurai Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold con">IXM</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Neyveli,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Neyveli Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">NVY</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Salem,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Salem Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold con">SXV</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Thanjavur,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Thanjavur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TJV</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Thoothukkudi,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Tuticorin Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TCR</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Tiruchirappalli,Tamil Nadu</p>
                                            <p class="font12 greyText appendBottom3">Tiruchirappalli International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">TRZ</div>
                                    </div>
                                </li>
                               

                                 <!-- Telangana air-->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Hyderabad,Telangana</p>
                                            <p class="font12 greyText appendBottom3">Begumpet Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BPM</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Hyderabad, Telangana</p>
                                            <p class="font12 greyText appendBottom3"> Rajiv Gandhi International Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">HYD</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Warangal,Telangana</p>
                                            <p class="font12 greyText appendBottom3">Warangal Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">WGC</div>
                                    </div>
                                </li>
                               
                                 <!-- Tripura air-->
                                 <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Agartala,Tripura</p>
                                            <p class="font12 greyText appendBottom3">Maharaja Bir Bikram Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXA</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">KAilashahar, Tripura</p>
                                            <p class="font12 greyText appendBottom3">KAilashahar Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXH</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kamalpur,Tripura</p>
                                            <p class="font12 greyText appendBottom3">Kamalpur Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXQ</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Khowai,Tripura</p>
                                            <p class="font12 greyText appendBottom3">Khowai Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">IXN</div>
                                    </div>
                                </li>
                                
                            
                        </ul>
                    </div>
                </div>

            </div>
            <div class="i-box2">
                <div class="date-flight">
                <div>
                        <label for="departure"><h5>Departure Date:</h5></label>
                        </div>
                    <input type="date" class="date" name="deDate">
                </div>

                <div class="select-passenger-data">
                     <div class="select_Audelts" style="margin: 10px 20px 40px 40px;">
                        <div>
                        <label for="Adults"><h5>Adults</h5></label>
                         </div>
           
                        <select name="adults" id="A" style="width:100px;height:45px;font-size:20px;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                       
                        </select>
                     </div>
    
                     <div class="select_class" style="margin: 10px 20px 40px 40px;">
                             <div>
                                 <label for="Class"><h5>Select Class</h5></strong></label>
                             </div>
       
                            <select name="class" id="Class" style="width:300px;height:45px;font-size:18px;">
                             <option value="economy">Economy</option>
                            <option value="business">Premium(Business/First)</option>
                   
                            </select>
                    </div>
                </div>

            </div>
            <div class="flight-btn">
                <button>
                    Search Flights
                </button>
            </div>
        </div>

    </div>
</div>

</form>
</section>



<!--for Plannning-->
	<!--********************************************************************************************************************************-->
    <div class="contain-boxs">
        <h3>Start Planning Your Next Trip</h3>
        <p>
            Thinking of travelling somewhere soon? Here are some optins to help you get started.
        </p>
        <div class="plane">
            <div class="plane-box">
                <img class="img-map" src="images/flight-map.jpeg">
                <div class="text-content">
                    <h4>Explore Our Destinations</h4>
                    <hr>
                    <div class="button-content">

                        <a href="explor_destination.php" aria-label="Find flights and fares" target="_blank"
                            role="button" tabindex="0">
                            Find flights and fares
                            <span class="icon-arrow-right3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg></i></span>
                        </a>
                    </div>
                </div>
            </div>
           <!-- <div class="plane-box">
                <img class="img-map" src="images/holidays.jpg">
                <div class="text-content">
                    <h4>Your Perfect Holiday Awaits</h4>
                    <hr>
                    <div class="button-content">

                        <a href="Holiday.php" aria-label="Find flights and fares" target="_blank" role="button"
                            tabindex="0">
                            Book a Package
                            <span class="icon-arrow-right3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg></i></span>
                        </a>
                    </div>
                </div>
            </div>-->
            <div class="plane-box">
                <img class="img-map" src="images/flightbook3.jpeg">
                <div class="text-content">
                    <h4>Travel Requirements</h4>
                    <hr>
                    <div class="button-content">

                        <a href="find_out.php" aria-label="Find flights and fares" target="_blank" role="button"
                            tabindex="0">
                            Find More
                            <span class="icon-arrow-right3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <!--<div class="plane-box">
                <img class="img-map" src="images/experiance.jpg">
                <div class="text-content">
                    <h4>Elevate Your Experience</h4>
                    <hr>
                    <div class="button-content">

                        <a href="evevate.php" aria-label="Find flights and fares" target="_blank" role="button"
                            tabindex="0">
                            Purchase add-ons
                            <span class="icon-arrow-right3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg></i></span>
                        </a>
                    </div>
                </div>
            </div>-->
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
						<button class="card-btn" onclick="selectDestination('Mumbai,Maharashtra')">Book Now</button>
						
					</div>
				</div>

				<div class="card-sub-main">
					<div class="card2">
					<img src="images/delhi_Toor.jpg">
		 			<div class="card-body">
						<h1>Delhi</h1>
						<p class="card-sub-title">Explore Delhi like never before with our enriching tour, where the monumental India Gate and the serene Lodhi Gardens are just a glimpse into the city's fascinating story.</p>
						<p class="card-infos"><a href="Delhi.php">Discover</a></p>
						<button class="card-btn" onclick="selectDestination('Delhi')">Book Now</button>
					</div>
					</div>
					<div class="card2">
					<img src="images/Goa.jpg">
		 			<div class="card-body">
						<h1>GOA</h1>
						<p class="card-sub-title">Discover the charm of Goa, where palm-fringed shores, lively markets, and historic churches create an unforgettable coastal experience.</p>
						<p class="card-infos"><a href="Goa.php">Discover</a></p>
		       			<button class="card-btn" onclick="selectDestination('Mopa, Goa')">Book Now</button>
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
						<button class="card-btn" onclick="selectDestination('Kolkata,Maharashtra')">Book Now</button>
					</div>
					</div>
					<div class="card2">
					<img src="images/jaisalmer.webp">
		 			<div class="card-body">
						<h1>Jaisalmer</h1>
						<p class="card-sub-title">Explore the ethereal beauty of Jaisalmer, where the Fort Palace and Jain Temples narrate stories of valor, opulence, and spiritual devotion.</p>
						<p class="card-infos"><a href="Jaisalmer.php">Discover</a></p>
		       			<button class="card-btn" onclick="selectDestination('Jaisalmer,Rajasthan')">Book Now</button>
					</div>
					</div>
				</div>
				<div class="card1">
				<img src="images/Ahemdabad_Kariya.jpg">
		 			<div class="card-body">
						<h1>Ahmedabad</h1>
						<p class="card-sub-title">Step into Ahmedabad, where the vibrant colors of its festivals, like Uttarayan and Navratri, paint the sky and streets with joyous celebration.</p>
						<p class="card-info"><a href="Ahemdabad.php">Discover</a></p>
		       			<button class="card-btn" onclick="selectDestination('Ahmedabad, Gujarat')">Book Now</button>
					</div>
				</div>
				
			 </div>

				<button class="card-main-btn">
					<a href="view_more_fears.php">View More Fares</a>
				</button>

		</div>
        
    

    <!-- Feedback form *******************************************************************************************************************
    *************************************************************************************************************************************-->
   <!-- Feedback form -->
   <section id="redirect-section">

<div class="rating-box">
    <header style="color:black; font-size:30px;">Tell Us What You Think?</header>
    <div class="stars">
        <i class="bi bi-star-fill" name="rating"></i>
        <i class="bi bi-star-fill" name="rating"></i>
        <i class="bi bi-star-fill" name="rating"></i>
        <i class="bi bi-star-fill" name="rating"></i>
        <i class="bi bi-star-fill" name="rating"></i>
    </div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#redirect-section" method="post" name="feedback">
        <div class="feedback-text">
            <input type="text" placeholder="Name" name="name">
            <input type="email" placeholder="E-Mail" style="margin-left:10px;" name="email">
        </div>
        <textarea name="opinion" cols="30" rows="5" placeholder="Your opinion..."></textarea>
        <input type="hidden" name="rating" id="rating-value">
        <div class="btn-group">
            <button type="submit" class="btn8 submit" name="feedback_submit">Submit</button>
            <button class="btn8 cancel">Cancel</button>
        </div>
    </form>
</div>

<?php

// Initialize variables
$showalt = false;
$showError = false;

// Check if the form is submitted
if (isset($_POST["feedback_submit"]))
{
    // Include database connection
    include 'Connection.php';

    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $opinion = $_POST["opinion"];
    $rating = $_POST["rating"]; // Retrieve the rating value

    // Prepare SQL query using prepared statement
    $sql = "INSERT INTO feedback (fname, femailid, feedback_detail, rate) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $name, $email, $opinion, $rating);

    // Execute SQL query
    if ($stmt->execute()) {
        $showalt = true; // Set success flag
    } else {
        $showError = "Feedback could not be submitted due to a server issue"; // Set error message
    }

    // Close statement
    $stmt->close();
    // Close connection
    $conn->close();
}
?>

<?php
if($showalt){
    echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your Opinion is submitted successfully
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
    ';
}

if($showError){
    echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong>'. $showError.'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
    ';
}
?>
  
</section>




	<!--Students and other offers=======================================================================================================
=============================================================================================================================================-->	
 
<!--<div class="main-offer">
        <h1>Let's go places together</h1>
	<p>Discover the latest offers and news and start planning your next trip</p>
        <div class="offers">
            <div class="offer1">
                <img src="Images/student.jpeg" />
                <div class="offer-text">
                    <h2>Aim for the skies with Student Club</h2>
                    <p>Savings of up to 20%* on fares, extra baggage allowance, Complimentary onboard Wi-Fi, tier upgrade & more.</p>
                    <hr>
                    <div class="offer-btn">
                    
                          <a href="explor_destination.php" aria-label="Find flights and fares" target="_blank" role="button" tabindex="0">
                          Book Now
                          <span class="icon-arrow-right3">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
 				 <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
						</svg></i></span> 
                           </a>
                    </div>
              </div>
            </div>
            <div class="sub-offer">
                <div class="offer2">
                    <img src="Images/air2.jpg" />
                    <div class="offer-text2">
                        <h3>Exclusive offer for HDFC Bank</h3>
                        <p>Save up to 15%* on fares use promo code 'QRHDFC23'.</p>
                        <hr>
                        <div class="offer-btn2">
                        
                              <a href="#" aria-label="Find flights and fares" target="_blank" role="button" tabindex="0">
                              Book Now
                                  <span class="icon-arrow-right3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                </svg></i></span> 
                               </a>
                        </div>
                  </div>
                </div>
                <div class="offer2">
                    <img src="Images/exclusive.jpg" />
                    <div class="offer-text2">
                        <h3>Make 2024 exceptional</h3>
                        <p>Get ready to explore Europe and the United Kingdom</p>
                        <hr>
                        <div class="offer-btn2">
                        
                              <a href="#" aria-label="Find flights and fares" target="_blank" role="button" tabindex="0">
                              Book Now
                                  <span class="icon-arrow-right3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                </svg></i></span> 
                               </a>
                        </div>
                  </div>
                </div>
                <div class="offer2">
                    <img src="Images/lagej.jpeg" />
                    <div class="offer-text2">
                        <h3>Enjoy up to 45 kgs baggage allowance</h3>
                        <p>Plan now with extra baggage offer to select destinations in Europe.</p>
                        <hr>
                        <div class="offer-btn2">
                        
                              <a href="#" aria-label="Find flights and fares" target="_blank" role="button" tabindex="0">
                              Book Now
                                  <span class="icon-arrow-right3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                </svg></i></span> 
                               </a>
                        </div>
                  </div>
                </div>
            </div>
        </div>
    </div>-->
	

    <?php include 'footer.php'; ?>
    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
	</script> 
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">
	</script> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js">
	</script>
	  <script src="scricpts.js"></script>
      <script>
  


  /*------------------------------to-------------------------------------------- */
  document.addEventListener('DOMContentLoaded', function() {
    const selectBoxes = document.querySelectorAll('.select-box2');

    selectBoxes.forEach(function(box) {
        const textBox = box.querySelector('.to-select');
        const searchContent = box.querySelector('.search-content2');

        textBox.addEventListener('click', function() {
            searchContent.classList.toggle('active');
        });

        const options = searchContent.querySelectorAll('.option2 li');

        options.forEach(function(option) {
            option.addEventListener('click', function() {
                const text = option.querySelector('p').textContent; // Accessing the text content of the first <p> tag
                textBox.value = text;
                searchContent.classList.remove('active');
            });
        });
    });

    const selectOption2 = document.querySelector(".select-option2");
    const soValue2 = document.querySelector("#toValue");
    const optionSearch2 = document.querySelector("#toOptionSearch");
    const optionLi2 = document.querySelectorAll(".option2 li");

    selectOption2.addEventListener('click', function () {
        selectBoxes.forEach(function(selectBox2) {
            selectBox2.classList.toggle('active');
        });
    });

    optionLi2.forEach(function (option2LiSingle) {
        option2LiSingle.addEventListener('click', function () {
            const text2 = this.querySelector('p').textContent; // Accessing the text content of the first <p> tag
            soValue2.value = text2;
            selectBoxes.forEach(function(selectBox2) {
                selectBox2.classList.remove('active');
            });
        });
    });

    optionSearch2.addEventListener('keyup', function () {
        var filter2, li2, i2, textvalue2;
        filter2 = optionSearch2.value.toUpperCase();
        li2 = document.querySelectorAll('.option2 li');
        for (i2 = 0; i2 < li2.length; i2++) {
            textvalue2 = li2[i2].querySelector('p').textContent; // Accessing the text content of the first <p> tag
            if (textvalue2.toUpperCase().indexOf(filter2) > -1) {
                li2[i2].style.display = '';
            } else {
                li2[i2].style.display = 'none';
            }
        }
    });
});


/* *****************************************************  multicities/round trip/one way  ***************************************************************** */

$(document).ready(function(){
    /* by default hide all radio_content div elements except first element */
    $(".content .radio_content").hide();
    $(".content .radio_content:first-child").show();

    /* when any radio element is clicked, Get the attribute value of that clicked radio element and show the radio_content div element which matches the attribute value and hide the remaining tab content div elements */
    $(".radio_wrap").click(function(){
      var current_raido = $(this).attr("data-radio");
      $(".content .radio_content").hide();
      $("."+current_raido).show();
    })
});








//********************************* feedback ******************************************************************************* */
  // Select all elements with the "i" tag and store them in a NodeList called "stars"
  document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.stars i');
            const ratingValue = document.getElementById('rating-value');

            stars.forEach((star, index) => {
                star.addEventListener('click', () => {
                    ratingValue.value = index + 1; // Set the value of the hidden input field to the selected star rating
                    stars.forEach((s, i) => {
                        if (i <= index) {
                            s.classList.add('active');
                        } else {
                            s.classList.remove('active');
                        }
                    });
                });
            });
        });



/**  ***************************************************************************************************************************************
 * ********************************************************* Log alert btn ****************************************************************
 */

 document.addEventListener('DOMContentLoaded', function() {
    const closeButton = document.querySelector('.alert .close');
    const alertBox = document.querySelector('.alert');

    closeButton.addEventListener('click', function() {
        alertBox.style.display = 'none';
    });
});




  /*------------------------------select pasenger for one way----------------------------------------- */

  /*------------------------------select pasenger 

  document.addEventListener('DOMContentLoaded', function() {
    const passengerContent2 = document.getElementById('passenger-content2');
    const overlay2 = document.getElementById('overlay2');
  
    passengerContent2.addEventListener('click', function() {
      overlay2.classList.toggle('show');
    });
  
    const confirmButton2 = document.querySelector('.paxconfirm2');
    const passengerContentInput2 = document.getElementById('passenger-content2');
    const passengerDropdown2 = document.getElementById('overlay2');
    const adultSelect2 = document.getElementById('adult2');
    const childSelect2 = document.getElementById('child2');
    const infantSelect2 = document.getElementById('infant2');
    const cabinClassEconomy2 = document.getElementById('E2');
    const cabinClassPremium2 = document.getElementById('B2');
  
    confirmButton2.addEventListener('click', function() {
      const adultCount2 = parseInt(adultSelect2.value);
      const childCount2 = parseInt(childSelect2.value);
      const infantCount2 = parseInt(infantSelect2.value);
      const totalPassengers2 = adultCount2 + childCount2 + infantCount2;
  
      let classDetails2;
      if (cabinClassEconomy2.checked) {
        classDetails2 = 'Economy';
      } else if (cabinClassPremium2.checked) {
        classDetails2 = 'Premium (Business/First)';
      } else {
        classDetails2 = 'No class selected';
      }
  
      const passengersDetails2 = `Passengers: ${totalPassengers2}, Class: ${classDetails2}`;
      passengerContentInput2.value = passengersDetails2;
  
      // Close passenger drop-down
      passengerDropdown2.style.display = 'none';
    });
}); ----------------------------------------- */


  /*------------------------------select pasenger for multicities way----------------------------------------- */

  /*------------------------------select pasenger 

  document.addEventListener('DOMContentLoaded', function() {
    const passengerContent3 = document.getElementById('passenger-content3');
    const overlay3 = document.getElementById('overlay3');

    passengerContent3.addEventListener('click', function() {
        overlay3.classList.toggle('show');
    });

    const confirmButton3 = document.querySelector('.paxconfirm3');
    const adultSelect3 = document.getElementById('adult3');
    const childSelect3 = document.getElementById('child3');
    const infantSelect3 = document.getElementById('infant3');
    const cabinClassEconomy3 = document.getElementById('E3');
    const cabinClassPremium3 = document.getElementById('B3');

    confirmButton3.addEventListener('click', function() {
        const adultCount3 = parseInt(adultSelect3.value);
        const childCount3 = parseInt(childSelect3.value);
        const infantCount3 = parseInt(infantSelect3.value);
        const totalPassengers3 = adultCount3 + childCount3 + infantCount3;

        let classDetails3;
        if (cabinClassEconomy3.checked) {
            classDetails3 = 'Economy';
        } else if (cabinClassPremium3.checked) {
            classDetails3 = 'Premium (Business/First)';
        } else {
            classDetails3 = 'No class selected';
        }

        const passengersDetails3 = `Passengers: ${totalPassengers3}, Class: ${classDetails3}`;
        passengerContent3.value = passengersDetails3;

        // Close passenger drop-down
        overlay3.classList.remove('show');
    });
});  ----------------------------------------- */


 /*------------------------------select pasenger 
// For the first passenger selection component
document.addEventListener('DOMContentLoaded', function() {
    const passengerContent = document.getElementById('passenger-content');
    const overlay = document.getElementById('overlay');
  
    passengerContent.addEventListener('click', function() {
      overlay.classList.toggle('show');
    });
  
    // Add event listeners or further functionality as needed
  });
  
  document.addEventListener('DOMContentLoaded', function() {
    const confirmButton = document.querySelector('.paxconfirm');
    const passengerContentInput = document.getElementById('passenger-content');
    const passengerDropdown = document.getElementById('overlay');
    const adultSelect = document.getElementById('adult');
    const childSelect = document.getElementById('child');
    const cabinClassEconomy = document.getElementById('E');
    const cabinClassPremium = document.getElementById('B');
  
    confirmButton.addEventListener('click', function() {
      const adultCount = parseInt(adultSelect.value);
      const childCount = parseInt(childSelect.value);
      const totalPassengers = adultCount + childCount;
  
      let classDetails;
      if (cabinClassEconomy.checked) {
        classDetails = 'Economy';
      } else if (cabinClassPremium.checked) {
        classDetails = 'Premium (Business/First)';
      } else {
        classDetails = 'No class selected';
      }
  
      const passengersDetails = `Passengers: ${totalPassengers}, Class: ${classDetails}`;
      passengerContentInput.value = passengersDetails;
  
      // Close passenger drop-down
      passengerDropdown.style.display = 'none';
    });
  });


// Repeat similar event listeners for the other passenger selection components----------------------------------------- */



      </script></body>
</html>


