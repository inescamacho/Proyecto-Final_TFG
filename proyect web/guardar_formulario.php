<?php
// Datos de conexión a la base de datos
$servername = "localhost"; 
$username = "root";
$password = "1234";
$dbname = "LOL";

// Recoger los datos del formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

// Crear la conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Insertar los datos en la base de datos
$sql = "INSERT INTO formulario (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    echo "Formulario enviado correctamente";
} else {
    echo "Error al enviar el formulario: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>