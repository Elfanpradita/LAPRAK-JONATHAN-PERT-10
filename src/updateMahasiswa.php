<?php
include "conn.php";

$id = $_POST['id'] ?? '';
$nama = $_POST['nama'] ?? '';
$alamat = $_POST['alamat'] ?? '';

$query = "UPDATE mahasiswa SET nama='$nama', alamat='$alamat' WHERE id=$id";
$result = $conn->query($query);

echo json_encode([
    "status" => $result ? "success" : "failed"
]);
?>
