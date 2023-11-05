<?php
session_start();

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Your authentication logic (e.g., check against a database)
    // For simplicity, we'll use hardcoded values
    $valid_username = "user";
    $valid_password = "password";

    if ($username === $valid_username && $password === $valid_password) {
        // Successful login
        $_SESSION["username"] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        // Invalid login
        echo "Invalid username or password. Please try again.";
    }
}
?>
