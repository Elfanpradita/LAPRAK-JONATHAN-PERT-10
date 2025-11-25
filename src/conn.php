<?php
$host = "mysql";
$user = "root";
$pass = "root";
$db   = "umnsi";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => $conn->connect_error]));
}
?>
