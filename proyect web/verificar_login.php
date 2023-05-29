
<?php
// Conectar a la base de datos
$servername = "localhost";
$username_db = "root";
$password_db = "1234";
$database = "LOL";

$conn = new mysqli($servername, $username_db, $password_db, $database);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

// Recoger los datos enviados desde el formulario de inicio de sesión
$username = $_POST["username"];
$password = $_POST["password"];

// Consultar la base de datos para verificar las credenciales del usuario
$sql = "SELECT * FROM usuarios WHERE usuario = '$username' AND contraseña = '$password'";
$result = $conn->query($sql);

// Verificar si se encontró un resultado en la consulta
if ($result->num_rows > 0) {
    echo "Inicio de sesión exitoso. ¡Bienvenido, $username!";
    header('Location: pagina_restringida.php');
} else {
    echo "<h1>¡Nombre de usuario o contraseña incorrectos!</h1>";
    echo "<img src='images/acceso_restringido.jpg' alt='Acceso Restringido' style=' height: 400px'>";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
