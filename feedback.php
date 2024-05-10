<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="Images/wings.png">
    <style>
      /* Import Google font - Poppins */
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


  /* ************************************************************************************************************************************
**************************************************  log alert *************************************************************************/
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

.alert-danger{
    color: black;
    background-color: #c90a0a4a;
    border-color: #ffeeba;
    font-size: 18px;
}

.alert-success strong, .alert-danger strong{
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
	<title>Form Reviews</title>
</head>
<body>

	
    <div class="rating-box">
        <header style="color:black; font-size:30px;">Tell Us What You Think?</header>
        <div class="stars" name="rating">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
        </div>
        <form action="#" method="post" name="feedback">
          <div class="feedback-text">
            <input type="text" placeholder="Name" name="name">
            <input type="email" placeholder="E-Mail" style="margin-left:10px;" name="email">
          </div>
        <textarea name="opinion" cols="30" rows="5" placeholder="Your opinion..." name="opinion"></textarea>
            <div class="btn-group">
                <button type="submit" class="btn8 submit">Submit</button>
                <button class="btn8 cancel">Cancel</button>
            </div>
        </form>
      </div>

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

  
    <SCRIpt> 
       // Select all elements with the "i" tag and store them in a NodeList called "stars"
 const stars = document.querySelectorAll(".stars i");

// Loop through the "stars" NodeList
stars.forEach((star, index1) => {
  // Add an event listener that runs a function when the "click" event is triggered
  star.addEventListener("click", () => {
    // Loop through the "stars" NodeList Again
    stars.forEach((star, index2) => {
      // Add the "active" class to the clicked star and any stars with a lower index
      // and remove the "active" class from any stars with a higher index
      index1 >= index2 ? star.classList.add("active") : star.classList.remove("active");
    });
  });
});
  </SCRIpt>
</body>
</html>

<?php
//for feedback details of customers

session_start(); // Start the session

$showalt = false; // Initialize $showalt outside of the form submission condition
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'Connection.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $opinion = $_POST["opinion"];
    $rate = $_POST["rating"];
    
    // Prepare the SQL query
    $sql = "INSERT INTO `feedback` (`fname`, `femailid`, `feedback_detail`, `rate`) VALUES ('$name', '$email', '$opinion', '$rate')";
    
    // Execute the SQL query
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Feedback be submitted due to a server issue"; // Set $showError if there's an error in submission
    } else {
        echo "Feedback could not be submitted due to a server issue"; // Set $showError if there's an error in submission
    }
}
?>
