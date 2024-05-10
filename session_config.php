<?php
// Increase the session timeout to 2 hours (7200 seconds)
ini_set('session.gc_maxlifetime', 7200);
session_set_cookie_params(7200);

// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    // Update the last login timestamp
    $_SESSION['last_login_timestamp'] = time();
}