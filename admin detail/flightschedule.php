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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="../Images/wings.png">

    <title>Flight Schedule</title>

    <style>
        /* book ticket ===============================================================================================
	==================================================================================================================*/
    
	body{
        background-color: whitesmoke;
    }
	
/* CSS */
.book-flight {
		padding: 20px;
		height: 350px;
			width: 90%;
			background: rgb(255, 255, 255);
			border-radius: 10px;
			margin-top: 20px;
			margin-left: 80px;
			margin-bottom: 80px;
			box-shadow: #152B4D;
	}
	
	.select-option input,.select-option2 input{
		width: 450px;
		margin-left: 20px;
	}
	
	.main-book-class {
		display: flex;
		flex-direction: column;
	}

    /**radio start*/
	.radio-box {
		display: flex;
		margin-bottom: 20px;
	}
	
	.form-check-work {
		margin-right: 20px;
	}
	
	.form-label {
		margin-left: 5px;
	}
	

	/*radio end*/
    .i-box {
		display: flex;
		margin-bottom: 20px;
	}
	
	.select-box,.select-box2 {
		position: relative;
		flex: 1;
		margin-right: 20px;
	}
	
	.from-select,.to-select {
		width: 100%;
		padding: 10px;
	}
	
	
	
	.date-flight {
		margin-bottom: 20px;
	}
	
	.date,.date2 {
		width: 100%;
		padding: 10px;
	}
	
	.select-flight select {
		padding: 10px;
	}
	
	.flight-btn {
		text-align: center;
	}
	
	button {
		padding: 10px 20px;
		background-color: #007bff;
		color: #fff;
		border: none;
		cursor: pointer;
	}
	
	button:hover {
		background-color: #0056b3;
	}
	
	.join-icons image{
		height: 30px;
		width: 30px;
	}
	
	.join-icons{
		font-size: 30px;
		font-weight: 400;
	}
	
	
	.makeFlex,.hrtlCenter {
		align-items: center;
	}
	.makeFlex {
		display: flex;
	}
	html[dir='ltr'] .appendRight8 {
		margin-right: 8px;
	}
	.icLocAlt {
		height: 40px;
		width: 40px;
	}
	img {
		max-width: 100%;
		overflow-clip-margin: content-box;
		overflow: clip;
	}
	h1, h2, h3, h4, h5, h6, p, ul {
		margin: 0;
		padding: 0;
		list-style: none;
	}
	
	.calc60 {
		width: -webkit-calc(100% - 60px);
		width: expression(100% - 60px);
		width: -moz-calc(100% - 60px);
		width: -o-calc(100% - 60px);
		width: calc(100% - 60px);
	}
	.appendBottom5 {
		margin-bottom: 5px;
	}
	.font14 {
		font-size: 14px;
		line-height: 14px;
	}
	.blackText, ._aff .blackText {
		color: #000000;
	}
	.greyText {
		--borderColor: #9b9b9b;
	}
	.appendBottom3 {
		margin-bottom: 3px;
	}
	.font12 {
		font-size: 12px;
		line-height: 12px;
	}
	.greyText, ._aff .greyText {
		color: #9b9b9b;
	}
	.appendBottom3 {
		margin-bottom: 3px;
	}
	html[dir='ltr'] .pushRight {
		margin-left: auto;
	}
	.latoBold {
		font-weight: 700;
	}
	.font14 {
		font-size: 14px;
		line-height: 14px;
	}
	.lightGreyText, ._aff .lightGreyText {
		color: #747474;
	}
	
	.flight-btn{
		float: right;
	}
	
	.flight-btn button{
		border-radius: 80px;
		height: 50px;
		width: 400px;
		color: white;
		text-align: center;
		background-color: #152B4D;
		margin-right: 50px;
	}

	.date-flight,.select-flight{
		margin: 10px 20px 40px 40px;
		width: 400px;
	}

    .time-detail{
        height: 35px;
        width: 280px;
    }

    
	
    </style>
</head>

<?php include 'header.php'; ?><body>

<div style="width:100%;height:55px;background:white;text-align: center;">
    <h1>Add New Flight</h1>
</div>
<section>


		<div class="book-flight">
        <form action="#" method="post">
            <div class="main-book-class">
            <div>
    <select name="airline" id="air" style="width:50%;height:35px;font-size:18px;margin:20px;">
    <option value="select">Select Airline</option>
        <?php
        // Include the file with the database connection
        include 'connection.php';

        // Query to select data from the 'airline' table
        $query = "SELECT * FROM airline"; 
        $result = mysqli_query($conn, $query);

        // Check if there are rows returned from the query
        if (mysqli_num_rows($result) > 0) {
            // Loop through each row of the result set
            while ($row = mysqli_fetch_assoc($result)) {
                // Output an option element for each airline_name
                echo '<option value="' . $row['airline_name'] . '">' . $row['airline_name'] . '</option>';
            }
        } else {
            // If no rows returned, display a default option
            echo '<option value="">No airlines found</option>';
        }

        // Free the result set
        mysqli_free_result($result);

        // Close the database connection
        mysqli_close($conn);
        ?>
    </select>
            </div>

              <style>
            .search-content,.search-content2{
		background-color: #fff;
		position: absolute;
		color: #000;
		border-radius: 7px;
		margin-top: 1px;
		width: 400px;
		z-index: 999;
		padding: 10px;
		display: none;
	}
	
	.search-content.active,.search-content2.active {
		display: block;
	}
	
	.se-con,.se-con2 {
		padding: 10px;
	}
	
	.se-con input,.se-con2 input
	{
		width: 90%;
		font-size: 17px;
		padding: 10px;
		outline: 0;
		border: 1px solid #b3b3b3;
		border-radius: 5px;
	}
	
	.option,.option2 {
		list-style-type: none;
		padding: 0;
		margin-top: 10px;
		max-width: 450px;
		max-height: 150px;
		overflow-y: auto;
		padding: 0;
	}
	
	.option li,.option2 li {
		
		padding: 10px 15px;
		 border-radius: 5px;
		 font-size: 22px;
		 cursor: pointer;
		 border-bottom: 1px solid gray;
	}
	
	.option li:hover,.option2 li:hover{
		background-color: #94b2df37;
	}
	
	.select-box.active .search-content,.select-box2.active .search-content{
		display: block;
	}
	
	.select-box.active .select-option::after,.select-box2.active .select-option::after{
		transform: rotate(-180deg);
	}
              </style> 
                <div class="i-box">
                    <div class="select-box">
                        <div class="select-option">
                        <label for="Departure"><h2 style="margin:10px 30px;color:#152B4D;">Departure Place</h2></label>

                            <input type="text" name="text-box" class="from-select" id="soValue" placeholder="FROM"
                                readonly>
                        </div>
                        <div class="search-content">
                            <div class="se-con">
                                <input type="text" id="optionSearch" placeholder="Search" name="">
                            </div>
                            <ul class="option">
                                <!-- gujarat air-->
                                <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Rajkot, Gujarat</p>
                                            <p class="font12 greyText appendBottom3"> Rajkot Airport</p>
                                        </div>
                                        <div class="pushRight font14 lightGreyText latoBold con">RAJ</div>
                                    </div>
                                </li>
                                
                                <li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
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
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Surat, Gujarat</p>
            <p class="font12 greyText appendBottom3"> Surat Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">STV</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Vadodara, Gujarat</p>
            <p class="font12 greyText appendBottom3">Vadodara Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">BDQ</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Bhavnagar, Gujarat</p>
            <p class="font12 greyText appendBottom3"> Bhavnagar Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">BHU</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
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
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Jamnagar, Gujarat</p>
            <p class="font12 greyText appendBottom3"> Jamnagar Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">JGA</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Kandla, Gujarat</p>
            <p class="font12 greyText appendBottom3"> Kandla Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">IXY</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Porbandar,Gujarat </p>
            <p class="font12 greyText appendBottom3"> Porbandar Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">PBD</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Junagath-Keshod, India</p>
            <p class="font12 greyText appendBottom3"> Keshod Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">IXY</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Amreli, India</p>
            <p class="font12 greyText appendBottom3"> Amreli Airport</p>
        </div>
    </div>
</li>

<!-- Andhra Pradesh air-->
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Kadapa, India</p>
            <p class="font12 greyText appendBottom3">Kadapa Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">CDP</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Donakonda, Andhra Pradesh</p>
            <p class="font12 greyText appendBottom3"> Donakonda Airport</p>
        </div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Kurnool, Andhra Pradesh</p>
            <p class="font12 greyText appendBottom3">Kurnool Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">KJB</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Puttaparthi, Andhra Pradesh</p>
            <p class="font12 greyText appendBottom3">Sri Sathya Sai Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">PUT</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Rajahmundry, Andhra Pradesh</p>
            <p class="font12 greyText appendBottom3">Rajahmundry Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">RJA</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Tirupati, Andhra Pradesh</p>
            <p class="font12 greyText appendBottom3">Tirupati International Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">TIR</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Vijayawada, Andhra Pradesh</p>
            <p class="font12 greyText appendBottom3">Vijayawada International Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">VGA</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
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
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
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
            <p class="font14 appendBottom5 blackText">Rajkot, Maharashtra</p>
            <p class="font12 greyText appendBottom3"> Rajkot Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold con">RAJ</div>
    </div>
</li>
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
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Madurai,Tamil Nadu</p>
            <p class="font12 greyText appendBottom3">Madurai Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold con">IXM</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Neyveli,Tamil Nadu</p>
            <p class="font12 greyText appendBottom3">Neyveli Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">NVY</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Salem,Tamil Nadu</p>
            <p class="font12 greyText appendBottom3">Salem Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold con">SXV</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Thanjavur,Tamil Nadu</p>
            <p class="font12 greyText appendBottom3">Thanjavur Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">TJV</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Thoothukkudi,Tamil Nadu</p>
            <p class="font12 greyText appendBottom3">Tuticorin Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">TCR</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
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
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Hyderabad,Telangana</p>
            <p class="font12 greyText appendBottom3">Begumpet Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">BPM</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Hyderabad, Telangana</p>
            <p class="font12 greyText appendBottom3"> Rajiv Gandhi International Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">HYD</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
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
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Agartala,Tripura</p>
            <p class="font12 greyText appendBottom3">Maharaja Bir Bikram Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">IXA</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">KAilashahar, Tripura</p>
            <p class="font12 greyText appendBottom3">KAilashahar Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">IXH</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Kamalpur,Tripura</p>
            <p class="font12 greyText appendBottom3">Kamalpur Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">IXQ</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
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
                        <label for="arrivaal"><h2 style="margin:10px 30px;color:#152B4D;">Arrival Place</h2></label>

                            <input type="text" name="text-box2" class="to-select" id="soValue2" placeholder="To"
                                readonly>
                        </div>
                        <div class="search-content2">
                            <div class="se-con2">
                                <input type="text" id="toOptionSearch" placeholder="Search" name="">
                            </div>
                            <ul class="option2">
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
            <p class="font14 appendBottom5 blackText">Rajkot, Maharashtra</p>
            <p class="font12 greyText appendBottom3"> Rajkot Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold con">RAJ</div>
    </div>
</li>
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
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Solapur, Maharashtra</p>
            <p class="font12 greyText appendBottom3">Solapur Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">SSE</div>

    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Sindhudurg, Maharashtra</p>
            <p class="font12 greyText appendBottom3">Sindhudurg Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">SDW</div>

    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
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
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
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
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Shillong, Meghalaya</p>
            <p class="font12 greyText appendBottom3">Shillong Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">SHL</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Shella, Meghalaya</p>
            <p class="font12 greyText appendBottom3">Shella Airport</p>
        </div>
    </div>
</li>

 <!-- NAgaland -->
 <li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
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
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Aizawl, Mizoram</p>
            <p class="font12 greyText appendBottom3">Turial Airport</p>
        </div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
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
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Angul, Odisha</p>
            <p class="font12 greyText appendBottom3"> Savitri Jindal Airport</p>
        </div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Berhampur, Odisha</p>
            <p class="font12 greyText appendBottom3">Rangeilunda Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">QBM</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Bhubaneswar, Odisha</p>
            <p class="font12 greyText appendBottom3"> Biju Patnaik International Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">BBI</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Jeypore, Odisha</p>
            <p class="font12 greyText appendBottom3">Jeypore Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">JRG</div>

    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Rourkela, Odisha</p>
            <p class="font12 greyText appendBottom3"> Rourkela Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">RRK</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
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
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Amrisar,Punjab</p>
            <p class="font12 greyText appendBottom3">Bathinda Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">ATQ</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Amrisar, Panjab</p>
            <p class="font12 greyText appendBottom3"> Sri Guru Ram Dass jee International Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">ATQ</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
        <div class="calc60">
            <p class="font14 appendBottom5 blackText">Bathinda, Panjab</p>
            <p class="font12 greyText appendBottom3">Bathinda Airport</p>
        </div>
        <div class="pushRight font14 lightGreyText latoBold">BUP</div>
    </div>
</li>
<li>
    <div class="makeFlex hrtlCenter">
        <img class="icLocAlt appendRight8" src="../Icons/ic-flight-onward.png" alt="icon">
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

                <div class="i-box">

                <div>
                <label for="arrivaal"><h4 style="margin:10px 30px;color:#152B4D;font-size:20px;">Departure Time</h4></label>
                    <input type="time" placeholder="Enter departure time" class="time-detail" name="departure"/>
                 </div>
                 <div>
                    <label for="arrivaal"><h4 style="margin:10px 20px;color:#152B4D;font-size:20px;">Arrival Time</h4></label>
                 <input type="time" placeholder="Enter arrival time" class="time-detail" name="arrival" style="margin-left: 20px;"/>
                </div>
                    
                <div>
                <label for="dp"><h4 style="margin:10px 40px;color:#152B4D;font-size:20px;">Economy Class Prize</h4></label>
                    <input type="text" placeholder="Enter Prize for Economy class" class="time-detail" name="prize" style="margin-left: 20px;"/>
                 </div>
                 <div>
                    <label for="ap"><h4 style="margin:10px 20px;color:#152B4D;font-size:20px;">Business Class Flight</h4></label>
                 <input type="text" placeholder="Enter Prize for business class" class="time-detail" name="prize2" style="margin-left: 20px;"/>
                </div>

                    
                </div>




            </div>


   

        <div class="flight-btn">
             <button name="add">
                     ADD Flight Schedule
             </button>
        </div>
</form>

</section>
<section>

</div>

<?php
// Database connection
include '../Connection.php';

// Initialize variables
$showSuccess = false;
$showError = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $departure_place = $_POST["text-box"];
    $arrival_place = $_POST["text-box2"];
    $dtime = $_POST["departure"];
    $atime = $_POST["arrival"];
    $prize = $_POST["prize"];
    $prize2 = $_POST["prize2"];
    $airline = $_POST["airline"];

    // Validate departure and arrival places
    if (empty($departure_place) || empty($arrival_place)) {
        $showError = "Departure and Arrival places are required.";
    } else {
        // Validate departure and arrival times
        if (empty($dtime) || empty($atime)) {
            $showError = "Departure and Arrival times are required.";
        } else {
            // Validate prizes
            if (empty($prize) || empty($prize2)) {
                $showError = "Prizes are required.";
            } else {
                // Insert data into the database
                $sql = "INSERT INTO `schedule` (`departure`, `arrival`, `departure_place`, `arrival_place`, `prize`, `prize2`,`airline`) VALUES ('$dtime', '$atime', '$departure_place', '$arrival_place', '$prize', '$prize2','$airline')";
                if (mysqli_query($conn, $sql)) {
                    $showSuccess = true;
                } else {
                    $showError = "Data cannot be submitted due to a system error: " . mysqli_error($conn);
                }
            }
        }
    }
}

?>
<?php
if ($showSuccess) {
    echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your flight data has been scheduled successfully.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    ';
}

if (!empty($showError)) {
    echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong>' . $showError . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    ';
}
?>

<script>
    /** ***************************************************************************************************************************************
     * ********************************************************* Log alert btn ****************************************************************
     */

    document.addEventListener('DOMContentLoaded', function() {
        const closeButton = document.querySelector('.alert .close');
        const alertBox = document.querySelector('.alert');

        closeButton.addEventListener('click', function() {
            alertBox.style.display = 'none';
        });
    });
</script>

<style>
    /* ************************************************************************************************************************************
                                                    log alert *************************************************************************/
    .alert {
        position: relative;
        padding: 0.75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 0.25rem;
    }

    .alert-success {
        color: black;
        background-color: #1033a64a;
        border-color: #ffeeba;
        font-size: 18px;
    }

    .alert-danger {
        color: black;
        background-color: #c90a0a4a;
        border-color: #ffeeba;
        font-size: 18px;
    }

    .alert-success strong,
    .alert-danger strong {
        color: black;
        font-size: 20px;
    }

    .close {
        position: absolute;
        top: 0;
        right: 0;
        padding: 0.75rem 1.25rem;
        color: inherit;
        background-color: transparent;
        border: 0;
        cursor: pointer;
    }
</style>








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
                textBox.value = option.querySelector('.font14').innerText;
                searchContent.classList.remove('active');
            });
        });
    });
});


const selectBox2 = document.querySelector(".select-box2");
const selectOption2 = document.querySelector(".select-option2");
const soValue2 = document.querySelector("#toValue");
const optionSearch2 = document.querySelector("#toOptionSearch");
const option2 = document.querySelector(".option2");
const optionLi2 = document.querySelectorAll(".option2 li");

selectOption2.addEventListener('click', function () {
    selectBox2.classList.toggle('active');
});

optionLi2.forEach(function (option2LiSingle) {
    option2LiSingle.addEventListener('click', function () {
        const text2 = this.textContent;
        soValue2.value = text2; // Assign the value to the 'value' property
        selectBox2.classList.remove('active');
    });
});

optionSearch2.addEventListener('keyup', function () {
    var filter2, li2, i2, textvalue2;
    filter2 = optionSearch2.value.toUpperCase();
    li2 = document.querySelectorAll('.option2 li'); // Use document.querySelectorAll() to select all <li> elements
    for (i2 = 0; i2 < li2.length; i2++) {
        textvalue2 = li2[i2].textContent || li2[i2].innerText; // Access textContent/innerText of each li
        if (textvalue2.toUpperCase().indexOf(filter2) > -1) {
            li2[i2].style.display = '';
        } else {
            li2[i2].style.display = 'none';
        }
    }
});
</script>

<script src="script.js">

</script>
<?php include 'footer.php';?>
</body>
</html>