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
       body{
        background-color: whitesmoke;
       }
       .main-div-class {
            margin: 10px 2px;
            display: flex;
        }
        .google_map{
            height: 100%;
            width: 100%;
            object-fit: cover;
            box-sizing: border-box;
        }
        .ticket_choice{
            height: 800px;
            width: 50%;
            margin: 0px 10px 0px 5px;
            overflow: hidden;
            overflow-y: scroll;
        }
        .intro{
             height: 250px;
             width: 100%;
             padding:50px 0px 20px 30px;
             box-sizing: border-box;
             position:relative;
             bottom: 250px;
             background: rgb(27, 27, 27,.5);
             color: white;
             transition: .5s;
        }
        .intro h1{
            font-size: 26px;
        }
        .offer-text2
    {
        position: relative;
    padding: var(--f-base-space-6);
    letter-spacing: 0;
    height: 100%;
    }
    
    .sub{
        height: 250px;
    }
    .offer-text2 h3
	{
		font-size: 20px;
	  font-weight: 500;
      display: flex;
	  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    color: rgba(0, 0, 0, 0.948);
    padding: 15px 10px 5px 15px;
    margin-bottom: 0;
    
	}

    .offer-text2 p
	{
	
	  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    color: black;
    padding: 10px 10px 10px 20px;
     font-size: 15px;
    
	}
    .offer-text2 hr{
		padding-bottom: 0;
		margin-bottom: 0;
        width: 100%;
	}

    .offer-btn2 a{
		display: flex;
		color:   #152B4D;
		padding-top: 20px;
        padding-left: 20px;
		justify-content: space-between;
		text-decoration: none;
        font-size: 20px;
        font-weight: 600;

    
	}
    .offer-btn2 a:hover{
        color: aqua;
    }
    .offer-btn2 svg{
		
        padding-right: 20px;
		height: 26px;
		width: 26px;
    
	}
    .offer2
        {
            background:white;
            height: 220px;
            width:  470px;
            margin: 10px 10px 15px 5px;
            border-radius: 30px;
            overflow: hidden;
            position: relative;
            display: flex;
        }

        .offer2 img{
            width: 50%;
		height: 100%;
		object-fit: cover;
            border-bottom-left-radius: 10px;
        border-top-left-radius: 10px;
        flex: 1 1 25%;
        display: flex;
        }

        

        .main-destiny h1{
            margin: 20px;
        }
    </style>
</head>
<body>
    <?php include "header.php"?>

        <div class="main-div-class">
            <div class="ticket_choice">
                <div class="sub">
                 <img src="images/fli.jpeg" alt="where can we fly you?" width="100%" height="250px" object-fit="cover">
                 <div class="intro">
                    <h1>Ready for your upcoming <br>trip with us?</h1>
                    <p>Elevate your journey and turn it into a truly memorable experience.</p>
                 </div>
                 </div>
                 <div class="new_destination">
                    <div class="main-destiny">
                        <h1>
                            New Destination
                        </h1>
                        <div class="offer2">
                                <img src="Images/ayodhya.jpg" />
                                    <div class="offer-text2">
                                          <h3>Ayodhya</h3>
                                          <p>Ancient city, birthplace of Lord Rama, Ram Janmabhoomi.</p>
                                             <hr>
                                        <div class="offer-btn2">
                        
                                         <a href="#" aria-label="Find flights and fares" target="_blank" role="button" tabindex="0" data-destination="Ayodhya,Uttar Pradesh">
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
                                <img src="Images/rajasthan.jpg" />
                                    <div class="offer-text2">
                                          <h3>Rajasthan</h3>
                                          <p>Desert safaris, intricate architecture, rich heritage, royal cuisine.
                                          </p>
                                             <hr>
                                        <div class="offer-btn2">
                        
                                         <a href="#" aria-label="Find flights and fares" target="_blank" role="button" tabindex="0"  data-destination="Jaipur,Rajasthan">
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
                                <img src="Images/Goa.jpg" />
                                    <div class="offer-text2">
                                          <h3>Goa</h3>
                                          <p>Sun-kissed beaches, vibrant nightlife, Portuguese architecture.</p>
                                             <hr>
                                        <div class="offer-btn2">
                        
                                         <a href="#" aria-label="Find flights and fares" target="_blank" role="button" tabindex="0"  data-destination="Mopa, Goa">
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
                                <img src="Images/chennai.jpg" />
                                    <div class="offer-text2">
                                          <h3>chennai</h3>
                                          <p>South Indian cuisine, vibrant markets, colonial architecture, Tamil Nadu.</p>
                                             <hr>
                                        <div class="offer-btn2">
                        
                                         <a href="#" aria-label="Find flights and fares" target="_blank" role="button" tabindex="0"  data-destination="Chennai,Tamil Nadu">
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
                                <img src="Images/banglore.jpg" />
                                    <div class="offer-text2">
                                          <h3>Bangalore</h3>
                                          <p>Silicon Valley of India, IT hub, Lalbagh Botanical Garden, Vidhana Soudha.</p>
                                             <hr>
                                        <div class="offer-btn2">
                        
                                         <a href="#" aria-label="Find flights and fares" target="_blank" role="button" tabindex="0"  data-destination="Bengaluru, Karnataka">
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
                                <img src="Images/varansi.jpg" />
                                    <div class="offer-text2">
                                          <h3>varanasi</h3>
                                          <p>Spiritual capital of India, ghats on Ganges, Kashi Vishwanath Temple.</p>
                                             <hr>
                                        <div class="offer-btn2">
                        
                                         <a href="#" aria-label="Find flights and fares" target="_blank" role="button" tabindex="0"  data-destination="varanasi,Uttar Pradesh">
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
                                <img src="Images/jaisalmer.webp" />
                                    <div class="offer-text2">
                                          <h3>Jaisalmer</h3>
                                          <p>Desert camping, Jaisalmer Fort, Patwon Ki Haveli, Rajasthan..</p>
                                             <hr>
                                        <div class="offer-btn2">
                        
                                         <a href="#" aria-label="Find flights and fares" target="_blank" role="button" tabindex="0"  data-destination="Jaisalmer,Rajasthan">
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
                                <img src="Images/srinagar.jpg" />
                                    <div class="offer-text2">
                                          <h3>Srinagar</h3>
                                          <p>Paradise on Earth, Dal Lake, Mughal gardens, Shankaracharya Temple.</p>
                                             <hr>
                                        <div class="offer-btn2">
                        
                                         <a href="#" aria-label="Find flights and fares" target="_blank" role="button" tabindex="0"  data-destination="Srinagar,Jammu and Kashmir">
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
            </div>
    

            <div class="google_map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15316616.705955744!2d69.79944396037102!3d20.40726929488306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1spopular%20city%20in%20india!5e0!3m2!1sen!2sin!4v1708016788195!5m2!1sen!2sin" width="1000" height="800" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>           
            </div>

        </div>

        
    <?php include "footer.php"?>
    <script>
        //to store data into 
        // Add this script to your HTML file
document.querySelectorAll('.offer-btn2 a').forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault(); // Prevent the default link behavior
        const destination = e.target.getAttribute('data-destination');
        window.location.href = 'index.php?destination=' + destination;
    });
});
    </script>
</body>
</html>