<?php
session_start(); 
include('../conn.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $query = "SELECT * FROM landlords WHERE lusern='$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['lpsw'])) {
            
            header("Location: placeform.php");
            exit();
        } else {
            
            $_SESSION['error_message'] = "Invalid password.";
        }
    } else {
        // Username not found
        $_SESSION['error_message'] = "User not found.";
    }
    header("Location: placeform.php"); 
    exit();
}
?>
