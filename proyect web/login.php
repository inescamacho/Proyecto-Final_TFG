<!DOCTYPE html>
<html>
<head>
    <title>Inicio de sesión y registro</title>
    <style>
        body {
            background-color: #000;
            font-family: "Arial", sans-serif;
            color: #fff;
            text-align: center;
        }

        #container {
            width: 300px;
            margin: 100px auto;
            background-color: #222;
            padding: 20px;
            border-radius: 10px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            font-family: "LeagueGothic", sans-serif;
            color: #fff;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #fff;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: none;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div id="container">
        <h1>League of Legends Login</h1>
        <form action="verificar_login.php" method="POST">
            <label for="username">Nombre de usuario:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Iniciar sesión">
        </form>
    </div>
</body>
</html>

