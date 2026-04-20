<?php
session_start();

// remove all session variables
session_unset();

// destroy session
session_destroy();

// go back to login page
header("Location: exersize3.php");
exit();
?>