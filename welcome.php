<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
    header("Location: index.html");
    exit();
}

echo "Welcome, " . $_SESSION["username"] . "! You are now logged in.";
?>
