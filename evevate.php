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

    </style>
</head>
<body>

    <div class="main-slid-img">
    <div class="slid-img">
        <img src="images/happy_family.webp" alt="Happy to travel with us">
        <div class="intro">
                <h1>Ready for your upcoming <br>trip with us?</h1>
                <p>Elevate your journey and turn it into a truly memorable experience.</p>
            </div>
        </div>
    </div>
    </div>

    <div class="require-sub">
    <ul>
      <li>
        <h1>Memorable Experience</h1>
        <div class="text-img">
        <p> "Turn it into a truly memorable experience" emphasizes the desire to make the journey memorable and enjoyable for the traveler.
            <br><br>
             It suggests that the travel experience can be more than just a means of transportation.
             <br><br>
             it can be an opportunity for adventure, relaxation, or exploration.
        </p>
      <img class="img-require" src="images/happy_family2.webp" alt="valid identity">
      </div>
      </li>
    </ul>
    </div>

    <div class="insurance-main">
        <h1>Purchase Your Travel Insurance</h1>

        <p>
        Enjoy peace of mind during your journey with travel insurance.
        </p>

        <div class="retrieve-booking">
            <form action="post" class="book-form">
                <input type="text" placeholder="Booking Reference Number"/>
                <input type="text" placeholder="Last Name"/>
                <br><br>
                <button>Retrieve Booking</button>
            </form>
        </div>




    <h1>
    insurance terms and conditions
    </h1>
        <p>
       te Travel insurance, an essential component of ticket booking, provides travelers with financial protection and peace of mind during their journeys. 
        <br><br>
        It covers a range of unforeseen events and emergencies, including trip cancellations, medical expenses, baggage loss or delay, and travel delays.
        </p>

        <p>
        Travel insurance terms and conditions in India for air travel encompass various aspects such as coverage limits, exclusions, medical coverage, trip cancellation or interruption, baggage protection, travel assistance services, policy duration, premium payment terms, and claim procedures. 
        <br><br>
        Coverage limits specify the maximum amount payable for benefits like medical expenses, trip cancellation, or baggage loss. Exclusions may include pre-existing medical conditions or high-risk activities. 
        <br><br>
        Medical coverage includes reimbursement for emergency treatment, hospitalization, and evacuation. Trip cancellation coverage applies to events like illness or natural disasters. 
        <br><br>
        Baggage protection covers lost or damaged luggage. Travel assistance services offer support for emergencies.
        <br><br>
         Policy duration, premium payment terms, and claim procedures outline the coverage period, payment details, and claim filing process.
         <br><br> 
        It's crucial for travelers to review these terms before purchasing travel insurance to understand their coverage and obligations.
        </p>
    </div>

</body>
</html>
<?php include 'footer.php'; ?>