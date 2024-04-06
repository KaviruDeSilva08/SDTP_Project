<?php
include('../conn.php'); 
$data = json_decode(file_get_contents('php://input'), true);
$id = $data['Pid'];


$sql = "DELETE FROM aproperties WHERE id=$id";
$result = $conn->query($sql);

echo json_encode(["success" => true]);
