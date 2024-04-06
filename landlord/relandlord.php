<?php
// Include database connection file
include('../conn.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    $userid = htmlspecialchars($_POST["userid"]);
    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $contact = htmlspecialchars($_POST["contact"]);

    // SQL query to insert data into the database
    $sql = "INSERT INTO landlords (lid,lusern, lemail, lpsw, lcn) VALUES ('$userid','$username', '$email', '$password', '$contact')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Registation is Successfully");</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
// Close connection (optional, as PHP automatically closes it at the end of the script execution)
$conn->close();
?>

