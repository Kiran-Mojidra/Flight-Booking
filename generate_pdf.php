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
        /* Add your CSS styles here */
        /* booked hotels */
        .room-booking-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
            padding: 20px;
        }

        .room-info-card {
            border: 1px solid #ccc;
            padding: 20px;
            text-align: center;
        }

        .booking-btn {
            background-color: green;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        .cancel-btn {
            background-color: red;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        .pdf-btn,
        .review-btn {
            background-color: #ccc;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>';

// Check if the uid parameter is set in the URL
if(isset($_GET['uid'])) {
    // Retrieve the uid from the URL
    $uid = $_GET['uid'];
    $uid = mysqli_real_escape_string($conn, $uid); // Sanitize the input

    // Fetch data from the hotel_cust_detail table
    $query = "SELECT * FROM hotel_cust_detail WHERE uid = '$uid'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        // Handle query error
        die("Error: " . mysqli_error($conn));
    }

    // Loop through the retrieved data and append to HTML
    while ($row = mysqli_fetch_assoc($result)) {
        $uid = $row['uid'];
        $uname = htmlspecialchars($row['uname']); // Sanitize output
        $hname = htmlspecialchars($row['hname']); // Sanitize output
        $room = htmlspecialchars($row['room']); // Sanitize output
        $checkIn = htmlspecialchars($row['checkIn']); // Sanitize output
        $checkOut = htmlspecialchars($row['checkOut']); // Sanitize output
        $amount = $row['amount'];
        $total_pay = $row['total_pay'];
        $status = htmlspecialchars($row['status']); // Sanitize output
        $dt = htmlspecialchars($row['dt']); // Sanitize output
        $refund = $row['refund'];

        $html .= "<div class='room-info-card'>";
        $html .= "<h2>$hname</h2>";
        $html .= "<p style='padding-bottom: 20px;font-size:18px;'><b>Customer Id:</b> $uid</p>";
        $html .= "<p style='padding-bottom: 20px;font-size:18px;'><b>Customer Name:</b> $uname</p>";
        $html .= "<p style='padding-bottom: 20px;font-size:18px;'><b>Booked Room:</b> $room</p>";
        $html .= "<p style='padding-bottom: 20px;font-size:18px;'><b>Check in:</b> $checkIn</p>";
        $html .= "<p style='padding-bottom: 20px;font-size:18px;'><b>Check out:</b> $checkOut</p>";
        $html .= "<p style='padding-bottom: 20px;font-size:18px;'><b>Amount: </b>$amount /per night</p>";
        $html .= "<p style='padding-bottom: 20px;font-size:18px;'><b>Total pay:</b> $total_pay</p>";
        $html .= "<p style='padding-bottom: 20px;font-size:18px;'><b>Booking Confirmation:</b> <b style='background:green; color:white;padding:10px;'>$status</b></p>";
        $html .= "<p style='padding-bottom: 20px;font-size:18px;'><b>Booking Date:</b> $dt</p>";

        // Display the cancel button if the check-in date is not within 1 day of the current date
        if (date('Y-m-d', strtotime($checkIn)) > date('Y-m-d', strtotime('-1 day')) && $status != 'Cancelled') {
            $html .= "<button class='cancel-btn' onclick='cancelBooking($uid)'>Cancel</button>";
        }

        // Display the refund information if the refund amount is greater than 0
        if ($refund > 0) {
            $html .= "<p>Refund: $refund</p>";
        }

        $html .= "</div>"; // Close the room-info-card div
    }
} else {
    // Handle the case when the uid parameter is not set
    $html .= "UID parameter is missing.";
}

$html .= '</body></html>';

// Load HTML content into dompdf
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
?>
