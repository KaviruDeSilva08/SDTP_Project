<?php
session_start(); // Start the session
include('../conn.php'); // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prevent SQL Injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Query to fetch user data based on username
    $query = "SELECT * FROM students WHERE susern='$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['spsw'])) {
            // Password is correct, redirect to dashboard or wherever you want
            header("Location: ../index.php");
            exit();
        } else {
            // Password is incorrect
            $_SESSION['error_message'] = "Invalid password.";
        }
    } else {
        // Username not found
        $_SESSION['error_message'] = "User not found.";
    }
    header("Location: ../index.php"); // Redirect to landlords.php to display the error message
    exit();
}
?>