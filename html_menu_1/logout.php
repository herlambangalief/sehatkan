<?php
// Start the session
session_start();


// Destroy the session
session_destroy();

// Redirect to the login page or any other page after logout
header("Location: index.php");
exit();
?>