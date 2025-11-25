<?php
include "conn.php";

$nama = $_POST['nama'] ?? '';
$alamat = $_POST['alamat'] ?? '';

$query = "INSERT INTO mahasiswa (nama, alamat) VALUES ('$nama', '$alamat')";
$result = $conn->query($query);

echo json_encode([
    "status" => $result ? "success" : "failed",
    "nama" => $nama,
    "alamat" => $alamat
]);
?>
