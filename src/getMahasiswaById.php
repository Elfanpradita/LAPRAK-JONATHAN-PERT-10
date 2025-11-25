<?php
include "conn.php";

$id = $_GET['id'] ?? '';

$query = "SELECT * FROM mahasiswa WHERE id=$id";
$result = $conn->query($query);

$data = $result->fetch_assoc();

echo json_encode($data ? $data : ["status" => "not found"]);
?>
