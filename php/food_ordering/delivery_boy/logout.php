<?php
session_start();
include('function.inc.php');

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Optionally, set a message to inform the user they have logged out
$_SESSION['message'] = 'You have been logged out successfully.';

// Redirect to the login page
redirect('login.php');
?>

