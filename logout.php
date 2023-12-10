<?php
session_start();

// Set the session variable 'validUser' to false if it exists
if (isset($_SESSION['validUser'])) {
    $_SESSION['validUser'] = false;
}

session_unset();

session_destroy();

// Redirect to the login page
header("Location: login.php");
exit();
?>
