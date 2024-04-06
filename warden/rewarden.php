<?php

include('../conn.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    $userid = htmlspecialchars($_POST["userid"]);
    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $contact = htmlspecialchars($_POST["contact"]);

    
    $sql = "INSERT INTO warden (wid,wusern, wemail, wpsw, wcn) VALUES ('$userid','$username', '$email', '$password', '$contact')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Registation is Successfully");</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>