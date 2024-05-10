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
	<link rel="stylesheet" href="css_class/main.css">
    <link rel="icon" href="Images/wings.png">
   
    <title>Document</title>
</head>
<body>
<?php include 'header.php'; ?>

<div class="main-slid-img">
    <div class="slid-img">
	<video src="Videos/kutch.mp4" muted autoplay loop></video>
        <div class="intro">
                <h1>Kutch: Witness the vibrant colors <br> and cultural extravaganza at <br>the Rann Utsav.</h1>
                
            </div>
        </div>
    </div>
</div>
<style>

body{
    background-color: whitesmoke;
}

.slid-img video{
    box-sizing: border-box;
    height: 500px;
    width: 100%;
  object-fit: cover;
}
.intro{
     height: 500px;
     width: 100%;
     padding:150px;
     box-sizing: border-box;
     position:relative;
     bottom: 510px;
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

.require-sub,.insurance-main{
    margin: 0px 60px 10px 60px;
}

.require-sub h1{
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
font-size: 20px;
}

.img-require{
height: 300px;
width: 80%;
margin: 5px 40px 5px 40px;
border-radius: 10px;
box-sizing: border-box;
}
.main-slid-img{
height: 450px;
background-color: whitesmoke;
}
.insurance-main{
background-color: white;
border-radius: 10px;
padding: 20px;
}
.insurance-main h1{
font-size: 40px;
font-weight: 400;
padding: 10px 0px 10px 30px;
}
.insurance-main p{
font-size: 18px;
padding-left: 60px;
}
.book-form{
margin: 20px 30px 40px 80px;
border: 1px solid black;
border-radius: 10px;
width: 80%;
padding: 20px 30px 20px 40px;
}

input{
height: 50px;
width: 45%;
font-size: 20px;
color: #000099;
padding: 0px 0px 0px 20px;
margin: 0px 0px 0px 20px;
border-radius: 10px;
border: 1px solid black;
}
button{
height: 45px;
width: 50%;
border: 2px solid #000099;
background-color: white;
color: #000099;
font-size: 25px;
margin-left: 250px;
border-radius: 30px;
}



.ahemdabad-content{
	/*background-color: white;*/
	width: 100%;
	/*height: 2400px;*/
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



.container2 {
    display: flex;
  width: 90%;
  max-width: 1260px;
  margin:30px 40px;
}
.card_outer2 {
  display: grid;
  grid-template-columns: auto auto auto auto;
  grid-gap: 20px;
}
.card2 {
  position: relative;
  display: flex;
  align-items: flex-end;
  overflow: hidden;
  padding: 1rem;
  width: 100%;
  min-height: 400px;
  text-align: center;
  color: #fff;
  background-color: #fff;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1), 
              0 2px 2px rgba(0, 0, 0, 0.1), 
              0 4px 4px rgba(0, 0, 0, 0.1), 
              0 8px 8px rgba(0, 0, 0, 0.1), 
              0 16px 16px rgba(0, 0, 0, 0.1);
}
.card2:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 110%;
  background-size: cover;
  background-position: 0 0;
  transition: transform calc(var(--d) * 1.5) var(--e);
  pointer-events: none;
}
.card2:after {
  opacity: 0;
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 200%;
  pointer-events: none;
  background-color: rgba(0, 0, 0, 0.5);
  transform: translateY(-50%);
  transition: transform calc(var(--d) * 2) var(--e);
}
.card2:hover:after {
  opacity: 1;
  transition: opacity calc(var(--d) * 1.5) var(--e);
}
.card2:nth-child(1):before {
  background-image: url(Images/delhi_Toor.jpg);
}
.card2:nth-child(2):before {
  background-image: url(Images/haidrabad.jpg);
}
.card2:nth-child(3):before {
  background-image: url(Images/jaisalmer.webp);
}
.card2:nth-child(4):before {
  background-image: url(Images/Ahemdabad_Kariya.jpg);
}

.content2 {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 100%;
  padding: 1rem;
  transition: transform var(--d) var(--e);
  z-index: 1;
}
.content2 > * + * {
  margin-top: 1rem;
}

.title2 {
  font-size: 25px;
  font-weight: bold;
  line-height: 35px;
}

.copy2 {
  font-size: 15px;
  font-style: italic;
  line-height: 25px;
}

.btn2 {
  cursor: pointer;
  margin-top: 1.5rem;
  padding: 0.75rem 1.5rem;
  font-size: 0.65rem;
  font-weight: bold;
  letter-spacing: 0.025rem;
  text-transform: uppercase;
  color: white;
  background-color: black;
  border: none;
}
.btn2:hover {
  background-color: #0d0d0d;
}
@media (hover: hover) and (min-width: 600px) {
  .card2:after {
    transform: translateY(0);
  }
  .content2 {
    transform: translateY(calc(100% - 4.5rem));
  }
  .content2 > *:not(.title) {
    opacity: 0;
    transform: translateY(1rem);
    transition: transform var(--d) var(--e), opacity var(--d) var(--e);
  }
  .card2:hover,
  .card2:focus-within {
      align-items: center;
    }
  .card2:hover:before,
  .card2:focus-within:before {
      transform: translateY(-4%);
    }
  .card2:hover:after,
  .card2:focus-within:after {
      transform: translateY(-50%);
    }
  .card2:hover .content2,
  .card:focus-within .content2 {
      transform: translateY(0);
    }
  .card2:hover .content2 > *:not(.title),
  .card2:focus-within .content2 > *:not(.title) {
      opacity: 1;
      transform: translateY(0);
      transition-delay: calc(var(--d) / 8);
    }

  .card2:focus-within:before, .card2:focus-within:after,
  .card2:focus-within .content2,
  .card2:focus-within .content2 > *:not(.title) {
      transition-duration: 0s;
    }
}

.amd-city-main button{
	height: 45px;
    width: 60%;
    border: 2px solid #000099;
    margin-left: 10px;
  
}



	
</style>
<!--for ticket booking=============================================================================================================
    ================================================================================================================================-->
    <section>
    <form action="#" method="post">

    <div class="wrapper">
    
    <div class="content">
        <div class="radio_content radio_1">
            <div class="i-box">
                <div class="select-box">
                    <div class="select-option">
                        <div>
                        <label for="departure"><h5>Departure</h5></label>
                        </div>
                        <input type="text" name="text-box1" class="from-select" id="soValue" placeholder="FROM"readonly>
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
                                            <p class="font14 appendBottom5 blackText">Bhuj, Gujarat</p>
                                            <p class="font12 greyText appendBottom3">Bhuj Airport / Bhuj Rudra Mata Air
                                                Force Base</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold">BHJ</div>
                                    </div>
                                </li>
                                
                        </ul>
                    </div>
                </div>

                <script>
    function selectDestination(destination) {
        document.getElementById("soValue2").value = destination;
    }
</script>
            </div>

            <div class="flight-btn">
                <button name="search_submit">
                    Book Now
                </button>
            </div>

        </div>

    </div>
</div>

</form>
</section>


<script>
         // JavaScript
document.addEventListener('DOMContentLoaded', function() {
    const selectBox = document.querySelectorAll('.select-box');

    selectBox.forEach(function(box) {
        const textBox = box.querySelector('.from-select');
        const searchContent = box.querySelector('.search-content');

        textBox.addEventListener('click', function() {
            searchContent.classList.toggle('active');
        });

        const options = searchContent.querySelectorAll('.option li');

        options.forEach(function(option) {
            option.addEventListener('click', function() {
                textBox.value = option.querySelector('.font14').innerText;
                searchContent.classList.remove('active');
            });
        });
    });
});



const selectBox = document.querySelector(".select-box");
const selectOption = document.querySelector(".select-option");
const soValue = document.querySelector("#soValue");
const optionSearch = document.querySelector("#optionSearch");
const option = document.querySelector(".option");
const optionLi = document.querySelectorAll(".option li");

selectOption.addEventListener('click', function () {
    selectBox.classList.toggle('active');
});

optionLi.forEach(function (optionLiSingle) {
    optionLiSingle.addEventListener('click', function () {
        const text = this.textContent;
        soValue.value = text; // Assign the value to the 'value' property
        selectBox.classList.remove('active');
    });
});

optionSearch.addEventListener('keyup', function () {
    var filter, li, i, textvalue;
    filter = optionSearch.value.toUpperCase();
    li = document.querySelectorAll('.option li'); // Use document.querySelectorAll() to select all <li> elements
    for (i = 0; i < li.length; i++) {
        textvalue = li[i].textContent || li[i].innerText; // Access textContent/innerText of each li
        if (textvalue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = '';
        } else {
            li[i].style.display = 'none';
        }
    }
});




/*------------------------------to-------------------------------------------- */
document.addEventListener('DOMContentLoaded', function() {
      // Handling the first select box
      // Your existing JavaScript code here
      
      // Handling the second select box
      const selectBox2 = document.querySelector('.select-box2');
      const textBox2 = selectBox2.querySelector('.to-select');
      const searchContent2 = selectBox2.querySelector('.search-content2');
      const optionLi2 = searchContent2.querySelectorAll('.option2 li');
      
      textBox2.addEventListener('click', function() {
        searchContent2.classList.toggle('active');
      });

      optionLi2.forEach(function(option) {
        option.addEventListener('click', function() {
          textBox2.value = option.querySelector('.font14').innerText;
          searchContent2.classList.remove('active');
        });
      });

      // Set default value to Ahmedabad
      textBox2.value = 'Bhuj, Gujarat';
    });


    
    /*-------------------- redorect data -------------------------------- */
    
    // JavaScript
    // ... (existing JavaScript code) ...

    // Add event listener to the form submission
    document.querySelector('form').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent the default form submission
      
      // Get the values of the input fields
      const fromValue = document.querySelector('.from-select').value;
      const toValue = document.querySelector('.to-select').value;
      
      // Redirect to the index.php page with the values
      window.location.href = 'index.php?dataarrive=' + encodeURIComponent(fromValue) + '&destination=' + encodeURIComponent(toValue);
    });

    </script>


<div class="ahemdabad-content">
	<div class="amd-city-main">
			<h1>
				Book a flight to Kutch with Us
			</h1>
			<div class="sub-amd">
				<p>
					<br><br>
					Nestled in the westernmost part of India, Kutch is a mesmerizing destination that beckons travelers with its unique blend of culture, heritage, and natural beauty. The Great Rann of Kutch, a vast expanse of salt marshes, is one of its most iconic attractions, offering visitors an ethereal landscape that stretches as far as the eye can see. During the winter months, the Rann Utsav transforms this barren wilderness into a vibrant carnival of colors, music, and dance, showcasing the rich cultural heritage of the region.

                    <br><br>
                    Kutch is not just about its stunning white desert; it is also home to a rich tapestry of handicrafts and textiles that reflect the artistic prowess of its inhabitants. Bhujodi, a quaint village near Bhuj, is renowned for its handloom weaving, where skilled artisans create intricate patterns and designs on traditional looms. Visitors can witness these artisans at work and even purchase exquisite handcrafted souvenirs to take back home.

                    <br><br>
                    For history enthusiasts, Kutch offers a glimpse into the ancient past with sites like Dholavira, an archaeological marvel dating back to the Indus Valley Civilization. The ruins of this ancient city provide valuable insights into the life and times of one of the world's oldest urban settlements. Moreover, Hodka Village offers a fascinating peek into the traditional Kutchi way of life, where mud huts, vibrant textiles, and warm hospitality define the ethos of the community.				 
				</p>
				
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d908286.4976144064!2d69.30978999066306!3d23.725022517225238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39511e0750db4489%3A0x2049bf8ec25dea88!2sKachchh%2C%20Gujarat!5e1!3m2!1sen!2sin!4v1710268076568!5m2!1sen!2sin" width="600" height="740" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>				</iframe>
			</div>

			<div>
				<h1> <center>Ahmedabad highlights</center> </h1>

				<p style="margin:20px 100px; font-size:18px;">
					<center>
                    Adventure seekers can embark on thrilling camel safaris across the Little Rann of Kutch, traversing its rugged terrain dotted with salt flats and sand dunes. The experience of riding atop a camel, with the vast expanse of the desert unfolding before you, is truly unforgettable. Additionally, Mandvi Beach beckons travelers with its serene shores and historic landmarks, including the majestic Vijay Vilas Palace, a stunning example of Indo-Saracenic architecture. 
                    </center>        
                </p>

				<br><br><br>
                <iframe width="100%" height="530" src="https://www.youtube.com/embed/5jhQxml22uw" title="Rann of Kutch  - Gujarat ft. Actor Amitabh Bachchan | India" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>

			<div class="sub-amd">
				<p><center>
					<br><br>
                    A journey to Kutch is a soul-stirring odyssey through a land of boundless beauty and timeless traditions, where every moment is imbued with the magic of discovery and wonder.
                </center>
				</p>
			</div>


			<!--card hover effect-->
	<!--**********************************************************************************************************************************-->
	<h1 style="margin:40px 0px 0px 0px;">Find Great Fares</h1>
	<section class="container2">
      <div class="card_outer2">
        <div class="card2">
          <div class="content2">
            <h2 class="title2">Delhi</h2>
            <p class="copy2">Pay homage at the tranquil Lotus Temple, renowned for its stunning architecture and serene ambiance.</p>
            <button class="btn2"><a href="Delhi.php">Read More</a></button>
          </div>
        </div>
        <div class="card2">
          <div class="content2">
            <h2 class="title2">Hyderabad</h2>
            <p class="copy2">Witness the fusion of old-world charm and urban sophistication in Hyderabad.</p>
            <button class="btn2"><a href="Hyderabad.php">Read More</a></button>
          </div>
        </div>
        <div class="card2">
          <div class="content2">
            <h2 class="title2">Jaisalmer</h2>
            <p class="copy2"> A mesmerizing desert city adorned with golden sandstone architecture.</p>
            <button class="btn2"><a href="Jaisalmer.php">Read More</a></button>
          </div>
        </div>
		<div class="card2">
          <div class="content2">
            <h2 class="title2">Ahmedabad</h2>
            <p class="copy2"> Enjoy panoramic views of the city from the top of Kankaria Lake's Balloon Safari.</p>
            <button class="btn2"><a href="Ahemdabad.php">Read More</a></button>
          </div>
        </div>
      </div>
    </section>


	</div>
</div>







<?php include 'footer.php'; ?>
    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
	</script> 
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">
	</script> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js">
	</script>
	  
</body>
</html>