<?php
$servername = "localhost"; 
$username = "root";
$password = "1234";
$dbname = "LOL";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
