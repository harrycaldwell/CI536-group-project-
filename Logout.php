<?php
// Start the session to access session variables
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Unset the username cookie by setting its expiration time to the past
setcookie("username", "", time() - 3600, "/");

// Redirect the user to the login page or any other desired page
header("Location: Index.php");
exit;
?>