<?php
session_start();
if (isset($_POST['logout'])) {
    // User clicked "Yes" to log out
    session_destroy(); // Destroy all session data
    header('location: ../views/home.html'); // Redirect to the front page
    exit;
}
?>