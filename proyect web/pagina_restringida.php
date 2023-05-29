<!DOCTYPE html>
<html>
<head>
    <title>Tabla de la base de datos LOL</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Formulario de preguntas | Suport | League Of Legends</h1>
    
    <table>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Mensaje</th>
            <th>Respondido</th>
        </tr>
        
        <?php
        // Conectar a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "1234";
        $database = "lol";

        $conn = new mysqli($servername, $username, $password, $database);

        // Verificar si la conexión fue exitosa
        if ($conn->connect_error) {
            die("Error al conectar a la base de datos: " . $conn->connect_error);
        }

        // Consultar los datos de la tabla formulario
        $sql = "SELECT nombre, email, mensaje FROM formulario";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Mostrar los datos en la tabla
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nombre"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["mensaje"] . "</td>";
                echo "<td><input type='checkbox'></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No se encontraron resultados.</td></tr>";
        }

        // Cerrar la conexión a la base de datos
        $conn->close();
        ?>
    </table>
</body>
</html>
