<?php
include "conn.php";

$id = $_POST['id'] ?? '';

$query = "DELETE FROM mahasiswa WHERE id=$id";
$result = $conn->query($query);

echo json_encode([
    "status" => $result ? "success" : "failed"
]);
?>
