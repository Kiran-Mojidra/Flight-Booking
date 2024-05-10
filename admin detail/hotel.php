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
    <title>Hotel</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* book Hotel ===============================================================================================
	==================================================================================================================*/
    #fileToUpload{
        color:white;
        background-color: #0056b3;
    }
	
	

	 /* CSS */
	 .book-flight {
		padding: 20px;
		height: 450px;
			width: 70%;
			background: rgb(255, 255, 255);
			border-radius: 10px;
			margin-top: 80px;
			margin-left: 200px;
			margin-bottom: 80px;
			box-shadow: #152B4D;
            justify-content: center;
	}
	
	.select-option input,.select-option2 input{
		width: 450px;
		margin-left: 20px;
        font-size: 16px;
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
	
	.i-box{
		display: flex;

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
		height: 30px;
		width: 30px;
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
        font-size: 16px;
    }

    
	
    </style>
</head>
<body>
<?php include 'header.php'; ?>

<div style="width:100%;height:55px;background:white;text-align: center;">
    <h1>Add New Hotel Detail</h1>
</div>

<style>
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
	
	/*.search-content {
		display: none;
		position: absolute;
		top: 100%;
		left: 0;
		z-index: 1;
		width: 100%;
		background-color: #fff;
		border: 1px solid #ccc;
		color: #000;
	
		border-radius: 7px;
		margin-top: 1px;
		padding: 10px;
	}*/
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
<div class="book-flight">
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="main-book-class">
               
            <div class="i-box">
                    <div class="select-box">
                        <div class="select-option">
                        <label for="Departure"><h2 style="margin:10px 30px;color:#152B4D;">Discover Stay</h2></label>

                            <input type="text" name="text-box" class="from-select" id="soValue" placeholder="Where are you going?"
                                readonly>
                        </div>
                        <div class="search-content">
                            <div class="se-con">
                                <input type="text" id="optionSearch" placeholder="Search" name="">
                            </div>
                            <ul class="option">
                            <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="../Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ahmedabad</p>
                                            <p class="font12 greyText appendBottom3"> Gujarat</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="../Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ayodhya</p>
                                            <p class="font12 greyText appendBottom3"> Uttar Pradesh</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="../Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Mumbai</p>
                                            <p class="font12 greyText appendBottom3"> Maharashtra</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="../Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Goa</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="../Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Shimla</p>
                                            <p class="font12 greyText appendBottom3"> Himachal Pradesh</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="../Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Agra</p>
                                            <p class="font12 greyText appendBottom3"> Uttar Pradesh</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="../Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kolkata</p>
                                            <p class="font12 greyText appendBottom3"> West Bengal</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="../Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Jaisalmer</p>
                                            <p class="font12 greyText appendBottom3"> Rajasthan</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="../Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Hyderabad</p>
                                            <p class="font12 greyText appendBottom3"> Telangana</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="../Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Chennai</p>
                                            <p class="font12 greyText appendBottom3"> Tamil Nadu</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="../Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Bangalore</p>
                                            <p class="font12 greyText appendBottom3"> Karnataka</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="../Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kashmir</p>
                                            
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="../Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kutch</p>
                                            <p class="font12 greyText appendBottom3"> Gujarat</p>
                                        </div>
                                    </div>
                               </li> <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="../Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Kerala</p>
                                            
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="../Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Arunachal Pradesh</p>
                                         
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="../Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Varansi</p>
                                            <p class="font12 greyText appendBottom3">Uttar Pradesh</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="../Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Nanital</p>
                                            <p class="font12 greyText appendBottom3"> UttaraKhand</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="../Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Indore</p>
                                            <p class="font12 greyText appendBottom3"> Madhya Pradesh</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="../Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Ooty</p>
                                            <p class="font12 greyText appendBottom3"> Tamil Nadu </p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="../Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Srinagar</p>
                                            <p class="font12 greyText appendBottom3"> Kashmir</p>
                                        </div>
                                    </div>
                               </li>
                               <li>
                                    <div class="makeFlex hrtlCenter">
                                        <img class="icLocAlt appendRight8" src="../Icons/geo-alt.svg" alt="icon">
                                        <div class="calc60">
                                            <p class="font14 appendBottom5 blackText">Alleppey</p>
                                            <p class="font12 greyText appendBottom3"> Kerala</p>
                                        </div>
                                    </div>
                               </li>

                        
                                </ul>
                        </div>
                    </div>

                    <div class="select-box2">
                        <div class="select-option2">
                        <label for="select name"><h2 style="margin:10px 30px;color:#152B4D;">Hotel Name</h2></label>

                            <input type="text" name="text-box2" class="to-select" id="soValue2" placeholder="Name of Hotel">
                        </div>
                        
                    </div>
            </div>
                    
                

                <div class="i-box">  
                <div>
                <label for="dp"><h4 style="margin:10px 40px;color:#152B4D;font-size:20px;">Location</h4></label>
                    <input type="text" placeholder="Enter Location of Hotel" class="time-detail" name="location" style="margin-left: 20px;"/>
                 </div>
                <div>
                <label for="dp"><h4 style="margin:10px 40px;color:#152B4D;font-size:20px;">Normal Room Prize</h4></label>
                    <input type="text" placeholder="Enter Prize for Economy class" class="time-detail" name="rprize" style="margin-left: 20px;"/>
                 </div>
                 <div>
                    <label for="ap"><h4 style="margin:10px 20px;color:#152B4D;font-size:20px;">Luxurious Room Price</h4></label>
                 <input type="text" placeholder="Enter Prize for business class" class="time-detail" name="rprize2" style="margin-left: 20px;"/>
                </div>

                    
                </div>

                <div class="i-box">
                <div>
                    <label for="image"><h4 style="margin: 10px 20px; color: #152B4D; font-size: 20px;">Upload Hotel Image</h4></label>
                    <input type="file" id="fileToUpload" name="img" style="margin-left: 20px;">
                </div>
                <div>
                    <label for="image"><h4 style="margin: 10px 20px; color: #152B4D; font-size: 20px;">Upload Hotel Rooms Image</h4></label>
                    <input type="file" id="fileToUpload" name="img2[]" style="margin-left: 20px;" multiple>
                </div>
                </div>

            </div>


   

        <div class="flight-btn">
             <button name="add_hotel" type="submit">
                    Add Hotel
             </button>
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
    $place = $_POST["text-box"];
    $room_prize = $_POST["rprize"];
    $luxary_prize = $_POST["rprize2"];
    $location = $_POST["location"];
    $hname = $_POST["text-box2"];

    // Validate departure and arrival places
    if (empty($place)) {
        $showError = "Places are required.";
    } else {
        // Validate prizes
        if (empty($room_prize) || empty($luxary_prize)) {
            $showError = "Prizes are required.";
        } else {
            // Initialize variables to store file names
            $hotel_image = '';
            $room_images = '';

            // File upload handling for hotel image
            if (!empty($_FILES['img']['name'])) {
                // Get hotel image details
                $filename = $_FILES['img']['name'];
                $tempname = $_FILES['img']['tmp_name'];
                $folder = '../images/' . $filename;

                
                // Move hotel image to destination folder
                if (move_uploaded_file($tempname, $folder)) {
                    $hotel_image = $filename;
                } else {
                    $showError = "Failed to move hotel image.";
                }
            } else {
                $showError = "Hotel image is required.";
            }

            // File upload handling for room images
            if (!empty($_FILES['img2']['name'])) {
                $total_files = count($_FILES['img2']['name']);
                // Loop through each room image
                for ($i = 0; $i < $total_files; $i++) {
                    // Get room image details
                    $filename2 = $_FILES['img2']['name'][$i];
                    $tempname2 = $_FILES['img2']['tmp_name'][$i];
                    $folder2 = '../images/' . $filename2;

                    // Move room image to destination folder
                    if (move_uploaded_file($tempname2, $folder2)) {
                        // Append room image filename to room_images variable
                        $room_images .= $filename2 . ',';
                    } else {
                        $showError = "Failed to move room image.";
                    }
                }
                // Remove the trailing comma from room_images variable
                $room_images = rtrim($room_images, ',');
            } else {
                $showError = "At least one room image is required.";
            }

            // Insert data into the database if no errors
            if (empty($showError)) {
                $sql = "INSERT INTO `hotel` (`name`, `hotel_name`, `location`, `hotel_img`,`rooms_img`, `room_prize`, `Luxary_prize`) VALUES ('$place','$hname','$location', '$hotel_image', '$room_images', '$room_prize', '$luxary_prize')";
                if (mysqli_query($conn, $sql)) {
                    $showSuccess = true;
                } else {
                    $showError = "Data cannot be submitted due to a system error: " . mysqli_error($conn);
                }
            }
        }
    }
}

// Display success or error message
if ($showSuccess) {
    echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your hotel data has been added successfully.
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
        margin-top: 60px;
        border: 1px solid transparent;
        border-radius: 0.25rem;
    }

    .alert-success {
        color: black;
        border-color: #117897d7;
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
       




</form>

</div>


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

<script src="script.js"></script>

<?php include 'footer.php';?>
</body>
</html>