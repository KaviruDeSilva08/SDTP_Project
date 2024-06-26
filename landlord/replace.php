<?php

include('../conn.php'); 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $place_name = htmlspecialchars($_POST["place_name"]);
    $owner_name = htmlspecialchars($_POST["owner_name"]);
    $address = htmlspecialchars($_POST["address"]);
    $contact_number = htmlspecialchars($_POST["contact_number"]);
    $price = htmlspecialchars($_POST["price"]);
    $latitude = htmlspecialchars($_POST["latitude"]);
    $longitude = htmlspecialchars($_POST["longitude"]);
    $suitable = htmlspecialchars($_POST["suitable"]);
    $description = htmlspecialchars($_POST["description"]);

    
    $target_dir = "uploads/"; // Ensure this directory exists and is writable
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
            echo '<script>alert("File is an image - ' . $check["mime"] . '.");</script>';
            $uploadOk = 1;
        } else {
            echo '<script>alert("File is not an image.");</script>';
            $uploadOk = 0;
        }
    }

   
    if ($uploadOk == 0) {
        echo '<script>alert("Sorry, your file was not uploaded.");</script>';
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo '<script>alert("The file '. htmlspecialchars( basename( $_FILES["image"]["name"])) . ' has been uploaded.");</script>';
        } else {
            echo '<script>alert("Sorry, there was an error uploading your file.");</script>';
        }
    }

    
    $sql = $conn->prepare("INSERT INTO properties (pname, ownern, paddress, pcn, price, latitude, longitude, suitable, description, pimage) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $sql->bind_param("ssssddssss", $place_name, $owner_name, $address, $contact_number, $price, $latitude, $longitude, $suitable, $description, $target_file);

    
    if ($sql->execute()) {
        echo '<script>alert("Property registered successfully");</script>';
    } else {
        echo '<script>alert("Error registering property: ' . $conn->error . '");</script>';
    }

    $sql->close();
}
$conn->close();
?>
