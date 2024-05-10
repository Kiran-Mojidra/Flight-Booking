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


<?php include 'header.php'; ?>
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

    <style>

        body{
            background-color: whitesmoke;
        }

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


/* card offer */
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


    /** contect form style  ***************************************************************************** */
    /* Container Styles */
.ContactUs {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
   /* padding: 50px;*/
}

/* Title Styles */
.ContactUs .title {
    text-align: center;
    width: 100%;
    margin-bottom: 50px;
}

.ContactUs .title h2 {
    font-size: 36px;
    color: rgb(7, 7, 70);
}

/* Form Styles */
.ContactUs .box {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    width: 100%;
}

.ContactUs .contact {
    width: 65%;
    padding: 20px;
    border: 1px solid #ccc;
    background-color: #BBDEFB;
    border-radius: 10px;
    margin-bottom: 20px;
}

.ContactUs .contact h3 {
    font-size: 24px;
    color: black;
    margin-bottom: 20px;
}

.ContactUs .contact form {
    width: 100%;
}

.ContactUs .formBox {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.ContactUs .formBox .row50 {
    width: 48%;
}

.ContactUs .formBox .row100 {
    width: 100%;
}

.ContactUs .inputBox {
    margin-bottom: 20px;
    margin-right: 20px;
}

.ContactUs .inputBox span {
    display: block;
    font-size: 16px;
    color: #0d6efd;
    font-size: 20px;
    margin-bottom: 5px;
}

.ContactUs .inputBox input,
.ContactUs .inputBox textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

.ContactUs .inputBox input[type="submit"] {
    width: 645px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    margin-left: 150px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.ContactUs .inputBox input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Info Box Styles */
.ContactUs .contact.info {
    width: 100%;
    background-color:#0056b3;
    color: white;

}

.ContactUs .contact.info .InfoBox {
    margin-top: 20px;
}

.ContactUs .contact.info .InfoBox div {

    align-items: center;
    margin-bottom: 10px;
}

.ContactUs .contact.info .InfoBox div span {
    margin-right: 10px;
    font-size: 20px;
    color:white ;
}

.ContactUs .contact.info .InfoBox div p,
.ContactUs .contact.info .InfoBox div a {
    font-size: 16px;
    color:white;
    text-decoration: none;
}

.ContactUs .contact.info .InfoBox div a:hover {
    color: palevioletred;
}

/* Social Media Icon Styles */
.ContactUs .contact.info .InfoBox .sci {
    display: flex;
    list-style-type: none;
    padding-left: 380px;
    margin: 0;
}

.ContactUs .contact.info .InfoBox .sci li {
    margin-right: 10px;
}

.ContactUs .contact.info .InfoBox .sci li a {
    font-size: 28px;
    color: white;
    text-decoration: none;
}

.ContactUs .contact.info .InfoBox .sci li a:hover {
    color: palevioletred;
}

/* Media Queries */
@media screen and (max-width: 768px) {
    .ContactUs {
        padding: 20px;
    }

    .ContactUs .box {
        flex-direction: column;
    }

    .ContactUs .contact {
        width: 100%;
    }

    .ContactUs .contact.info {
        width: 100%;
        margin-top: 30px;
    }
}
.content-box-text
{
    display: flex;
    justify-content: space-between;
    margin: 0px 100px;
}
.text-info i{
    margin-right: 10px;
    font-size: 20px;
}

.contact-text-para{
    text-align: center;
    margin: 20px 130px;
}

.contact-text-para p{
    font-size: 18px;
    color: black;
    font-weight: 500;
}
    </style>
</head>
<body>

    <div class="main-slid-img">
    <div class="slid-img">
        <img src="images/fz4gkurj.png" alt="Happy to travel with us">
        <div class="intro">
                <h1>How Can we help?</h1>
            </div>
        </div>
    </div>
    </div>

    <!-- ******************************  paragraph ***************************************************************************************-->
        <div class="contact-text-para">
            <h1>FEEL FREE TO CONTACT US</h1>
            <p>
                <!--<br>
            At Uddan, we pride ourselves on providing seamless online flight ticket booking services tailored to your needs. Our dedicated team works tirelessly to ensure your travel experience is smooth and stress-free. Whether you're planning a weekend getaway, a business trip, or a family vacation, we're here to assist you every step of the way.

            <br><br>
            With our user-friendly platform, you can easily search for flights and book your tickets with confidence. We understand that travel plans can change, which is why we offer flexible booking options and excellent customer support to address any concerns you may have.

            <br><br>
            If you have any questions, or need assistance with your booking, please don't hesitate to contact us. Our knowledgeable customer service representatives are available around the clock to assist you. Your satisfaction is our priority, and we're committed to providing you with the best possible travel experience.

            <br>--><br>
            Experience the convenience and reliability of Uddan for all your flight booking needs. Let us take the stress out of travel planning so you can focus on creating unforgettable memories. Feel free to reach out to us anytime – we're here to help make your journey a memorable one.
            </p>
        </div>


    <!-- contect us form *****************************************************************************************************************-->

    <div class="ContactUs">
    <div class="title">
        <h2>Contact Us</h2>
    </div>
    <div class="box">
        <!--Form-->
        <div class="contact form">
            <h3>Send a message</h3>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" name="contact-details">
                <div class="formBox">
                    <div class="row50">
                        <div class="inputBox">
                            <span>First Name</span>
                            <input type="text" placeholder="First Name" name="first_name">
                        </div>
                        <div class="inputBox">
                            <span>Last Name</span>
                            <input type="text" placeholder="Last Name" name="last_name">
                        </div>
                    </div>
                    <div class="row50">
                        <div class="inputBox">
                            <span>Email</span>
                            <input type="text" placeholder="Email" name="email">
                        </div>
                        <div class="inputBox">
                            <span>Mobile</span>
                            <input type="text" placeholder="Mobile" name="mobile">
                        </div>
                    </div>
                    <div class="row100">
                        <div class="inputBox">
                            <span>Message</span>
                            <textarea placeholder="Write your message here..." cols="30" rows="6" name="message"></textarea>
                        </div>
                    </div>
                    <div class="row100">
                        <div class="inputBox">
                            <input type="submit" value="Send" name="contact_submit">
                        </div>
                    </div>
                </div>
            </form>

             <!--info Box-->
        <div class="contact info">
            <h3 style="color:white;">Contact info</h3>
            <div class="InfoBox">
                <div class="content-box-text">
                    <div class="text-info">
                        <p><i class="bi bi-envelope-fill"></i>uddan2024@gmail.com</p><br>
                        <p><i class="bi bi-telephone-fill"></i>+91 98745 63214</p>
                    </div>
                    <div class="text-info">
                        <p><i class="bi bi-geo-alt-fill"></i>1St Floor, Olive Arcade,  
                        </p>
                        <p style="margin-left:30px;">Opp. Samudra Annexe,Off. C. G. Road,</p>
                        <p style="margin-left:30px;">Ahmedabad, Gujarat 380003.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
       
    </div>
</div>

<?php
// Database connection
include 'Connection.php';

// Initialize variables
$showSuccess = false;

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $message = $_POST["message"];

    // Validate mobile number
    if (strlen($mobile) > 10) {
        echo "<script>alert('Mobile number should not exceed 10 characters.');</script>";
    } else {
        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Invalid email format.');</script>";
        } else {
            // Validate first name and last name length
            if (strlen($first_name) > 15 || strlen($last_name) > 15) {
                echo "<script>alert('First name and last name should not exceed 15 characters.');</script>";
            } else {
                // Validate message length
                if (strlen($message) > 50) {
                    echo "<script>alert('Message should not exceed 50 characters.');</script>";
                } else {
                    // Insert data into the database
                    $sql = "INSERT INTO `contact_us` (`cfname`, `clname`, `email`, `cmobile`, `cmessage`) VALUES ('$first_name', '$last_name', '$email', '$mobile', '$message')";
                    if (mysqli_query($conn, $sql)) {
                        $showSuccess = true;
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                }
            }
        }
    }
}

// Show success message
if ($showSuccess) {
    echo "<script>alert('Your message has been successfully delivered.');</script>";
}
?>


    <!-- card main offer *********************************************************************************************************************
    
    
    
    <div class="main-offer">
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
     </div>-->

</body>
</html>
<?php include 'footer.php'; ?>