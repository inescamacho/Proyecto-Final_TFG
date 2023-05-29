<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
    <title>Respuestas del Formulario</title>
    <style>
        table {
            border-collapse: collapse;
        }
        
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h2>Respuestas del Formulario</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Pregunta</th>
        </tr>
        <tr>
            <td><?php echo $_POST["nombre"]; ?></td>
            <td><?php echo $_POST["email"]; ?></td>
            <td><?php echo $_POST["pregunta"]; ?></td>
        </tr>
    </table>
</body>
</html>
