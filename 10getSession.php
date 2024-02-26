<?php
session_start();

if (isset($_SESSION['name'])) {
    echo $_SESSION['name'];
} else {
    echo "Session is not set";
}

// Unset all of the session variables
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-42000, '/');
}

// Finally, destroy the session
session_destroy();
?>
