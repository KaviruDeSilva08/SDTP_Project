<?php
include('../conn.php'); // Adjust the path as necessary
$data = json_decode(file_get_contents('php://input'), true);
$id = $data['Pid'];

// Perform your database delete here
$sql = "DELETE FROM aproperties WHERE id=$id";
$result = $conn->query($sql);

echo json_encode(["success" => true]);
