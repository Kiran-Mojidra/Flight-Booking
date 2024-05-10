<?php
// Include autoloader
require_once 'dompdf/autoload.inc.php';

// Include database connection
include 'Connection.php';

// Reference the Dompdf namespace
use Dompdf\Dompdf;

// Instantiate and use the dompdf class
$dompdf = new Dompdf();

// HTML content generation
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Information</title>
    <style>
       

    /** booked flights */
    .main-fli{
        display: flex;
        
        margin: 20px 130px;
        border-radius: 20px;
    }
    .side-bar
    {
        background-color: #3362c6;
        width: 400px;
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
    }
    
    .logo {
            font-size: 40px;
            color: white;
           
        }
    
    
    .message {
      text-align: center;
      font-size: 16px;
      color: white;
    }
    
    .text,.text2{
        display: flex;
        justify-content: space-between;
    }
    
    .text2 p{
        font-size: 25px;
        font-weight: 600;
        margin-top: 0px;
    }
    .fli-sub{
        padding:20px 60px;
        background-color: #ffffff;
        width: 900px;
    }
    .fli-sub1{
        display: flex;
        flex-wrap: wrap-reverse;
        justify-content: space-between;
        border-bottom: 1px solid gray;
        margin-bottom: 10px;
    }
    </style>
</head>
<body>';// Check if the uid parameter is set in the URL
if(isset($_GET['uid'])) {
    // Retrieve the uid from the URL
    $uid = $_GET['uid'];

    // Fetch booking details using $uid
    $query = "SELECT pd.*, s.airline FROM pass_details pd 
    INNER JOIN schedule s ON pd.fno = s.fno
    WHERE pd.log_id = '$uid'"; // Assuming log_id is the correct field to match with $uid
    $result = mysqli_query($conn, $query);

    // Check if there are bookings for the user
    if (mysqli_num_rows($result) > 0) {
        // Loop through each booking
        while ($row = mysqli_fetch_assoc($result)) {
            // Append HTML for each booking
            $html .= '<div class="main-fli">
            <div class="fli-sub">
            <div class="fli-sub1">
                <h4>UDDAN: Touch The Sky With Glory</h4>
                <h2><b>' . $row['class'] . ' Class</b></h2>
            </div>

            <div class="detail1">
                <div class="text" style="margin-top:20px;">
                    <p>Airline</p>
                    <p>From</p>
                    <p>To</p>
                </div>
                <div class="text2">
                    <p>' . $row['airline'] . '</p>
                    <p>' . $row['dplace'] . '</p>
                    <p>' . $row['aplace'] . '</p>
                </div>
            </div>

            <div class="detail2">
                <div class="text" style="margin-top:20px;margin-bottom:0px;">
                    <p>Passenger name</p>
                    <p>Board Time</p>
                </div>
                <div class="text2">
                    <p>' . $row['fname'] . ' ' . $row['lname'] . '</p>
                    <p>12:45</p>
                </div>
            </div>

            <div>
                <div class="text" style="margin-top:20px;">
                    <p>Departure</p>
                    <p>Arrival</p>
                    <p>Gate</p>
                    <p>Seat</p>
                </div>
                <div class="text2" style="margin-bottom:20px;">
                    <p>' . $row['departure'] . '</p>
                    <p>' . $row['arrival'] . '</p>
                    <p>1B</p>
                    <p>' . $row['seatno'] . '</p>
                </div>
            </div>
            </div>
             <div class="side-bar">
                    <h2 class="logo" style="padding:20px 10px 15px 80px;">
                <svg viewBox="410.1386 361.7521 54.723 33.7621" width="50" height="30.84818083803885" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none">
                    <defs></defs>
                    <style>.aLgOaV3zRcolors-0dA7jHsrIh {fill:#B09E80;fill-opacity:0.98;}.aLgOaV3zRcolors-1dA7jHsrIh {fill:#E9E9E9;fill-opacity:1;}.aLgOaV3zRcolors-2dA7jHsrIh {fill:#716551;fill-opacity:1;}</style>
                    
                    <g opacity="1" transform="rotate(0 410.1386 361.7521)"> 
                        <svg width="54.723" height="33.7621" x="410.1386" y="361.7521" version="1.1" preserveAspectRatio="none" viewBox="0 0 95.217 58.746"> 
                            <g transform="matrix(1 0 0 1 0 0)" class="aLgOaV3zRcolors-0dA7jHsrIh">
                            <g>
                                <path d="M95.217,0L55.41,29.765c2.006,1.967,3.251,4.708,3.251,7.739c0,5.982-4.847,10.832-10.827,10.836l-0.009,3.396 c0.003,0,0.005,0,0.009,0c0.002,0,0.005,0,0.008,0c1.654-0.003,3.244-0.279,4.73-0.782l1.418,5.306l0.824,0.226l-1.307-4.776 l2.561,5.12l1.307,0.357l-1.554-4.494l2.98,4.886l0.954,0.261l-1.699-3.778l3.57,4.291l1.441,0.395l-7.325-9.309 c0.487-0.31,0.956-0.645,1.403-1.008l4.36,4.361l0.501-0.06l-2.429-3.509l3.206,3.418l3.038-0.357l-3.267-3.494l6.332,3.201 l4.414-0.587l-13.657-5.563c0.216-0.286,0.419-0.581,0.614-0.883l11.944,2.455l0.828-0.569L66.46,45.06l7.497,1.148l2.563-1.762 l-8.614-1.41l10.245,0.289l3.305-2.272H62.04c0. </path>
                            </g>
                            </g>
                        </svg>
                    </g>
                </svg>
                UDDAN
            </h2>

            <div>
                <img src="images/airtic.png" alt="" style="height:150px;width:150px;margin-left:120px;">
            </div>
                     <div class="message">
                        <p>Thank you for choosing us.</p>
                         <p>Please be at the gate at boarding time</p>
                    </div>
                    </div>
                   

                </div>';
        }
    } else {
        // Handle case when no bookings found for the user
        $html .= "No bookings found for the user.";
    }
} else {
    // Handle case when UID parameter is not provided
    $html .= "UID parameter is missing.";
}
$html .= "</body></html>";

// Load HTML content into dompdf
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
?>