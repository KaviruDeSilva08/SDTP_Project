<?php
include('../conn.php'); // Adjust the path as necessary
$data = json_decode(file_get_contents('php://input'), true);
$id = $data['pid'];

// Perform your database update here
$sql = "UPDATE properties SET status='Approved' WHERE id=$id";
$result = $conn->query($sql);

echo json_encode(["success" => true]);
