
    <!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>JSI StaTs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style_2.css">
    <script>
        function showFullTable() {
            document.getElementById("partial-table").style.display = "none";
            document.getElementById("full-table").style.display = "block";
        }
    </script>
    <script>
        function showLastTable() {
            document.getElementById("full-table").style.display = "none";            
            document.getElementById("partial-table").style.display = "block";

        }
    </script>
</head>

<body>

    <nav class="navbar navbar-default main-nav">
        <div class="container-fluid">
            
            <div class="navbar-header">
                <span class="hamburger navbar-toggle collapsed" data-toggle="collapse" data-target="#my-navbar-collapse" aria-expanded="false">☰</span>
                <a class="super-logo" href="#"></a>
            </div>
           
            <div class="collapse navbar-collapse" id="my-navbar-collapse">
                <div class="navbar-collapse-desktop">
                    <ul class="nav navbar-nav ">
                        <li><a href="https://www.leagueofgraphs.com/champions/builds" class="text-uppercase" target="_blank">Popular Champions</a></li>
                        <li><a href="https://www.leagueofgraphs.com/champions/builds/by-banrate" class="text-uppercase" target="_blank">Banned Champions</a></li>
                        <li><a href="https://esports.as.com/league-of-legends/" class="text-uppercase" target="_blank">esports</a></li>
                        <li><a href="#" class="text-uppercase" target="_blank">More Stats</a></li>
                        <li><a href="Suport.html" class="text-uppercase"  target="_blank" >Suport</a> <span class="main-nav-separator"></span></li>
                        <li class="dropdown">
                            <ul class="dropdown-menu">
                                <li><a href="http://google.com">Action</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
    
        </div>
       
    </nav>
       <!-- FONDO -->

<div class="video-background">
    <div class="video-container">
        <img id="youtube-video" src="images/oriana.jpg" alt="oriana">
    </div>
<div id="content">    
<br>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <a title="Noticias" href="https://www.riotgames.com/es/noticias">
                </a>
            </div>
        </div>
<br>
<br>
 <!-- VIDEO -->
<section id="trailer">
<h2>The Brink of Infinity | Season 2023 Cinematic</h2>
<iframe width="560" height="315" src="https://www.youtube.com/embed/cJT5d5Ue3ao?controls=0&autoplay=1" title="YouTube video player" frameborder="0" allow="autoplay;"></iframe>
<section>  
</div>
<section class="col-md-12 heading-default">
<!-- TABLA MINIMIZADA CHAMPION_ABILITIES -->
<section class="tabla1">
<h2>CHAMPION ABILITIES</h2>
<div id="partial-table">
    <table class="resaltar-tabla1">
        <tr>
            <th>Champion</th>
            <th>Name</th>
            <th>Description</th>
            <th>Effect</th>
            <th>Cost</th>
            <th>Range</th>
        </tr>
        <?php
        // Incluir el archivo de conexión
        include 'conexion.php';

        // Consultar la base de datos
        $sql = "SELECT * FROM `champion_abilities` LIMIT 3";
        $result = $conn->query($sql);

        // Mostrar los resultados
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["champion"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["description"] . "</td>";
                echo "<td>" . $row["effect"] . "</td>";
                echo "<td>" . $row["cost"] . "</td>";
                echo "<td>" . $row["range"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No se encontraron resultados.</td></tr>";
        }

        // Cerrar la conexión
        $conn->close();
        ?>
    </table>
</div>
</section>
<!-- TABLA COMPLETA CHAMPION_ABILITIES -->
<section class="tabla1">
<div id="full-table">
    <table class="resaltar-tabla1">
        <tr>
            <th>Champion</th>
            <th>Name</th>
            <th>Description</th>
            <th>Effect</th>
            <th>Cost</th>
            <th>Range</th>
        </tr>
        <?php
        // Incluir el archivo de conexión
        include 'conexion.php';

        // Consultar la base de datos
        $sql = "SELECT * FROM `champion_abilities` LIMIT 10";
        $result = $conn->query($sql);

        // Mostrar los resultados
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["champion"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["description"] . "</td>";
                echo "<td>" . $row["effect"] . "</td>";
                echo "<td>" . $row["cost"] . "</td>";
                echo "<td>" . $row["range"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No se encontraron resultados.</td></tr>";
        }

        // Cerrar la conexión
        $conn->close();
        ?>
    </table>
</div>
</section>
<button id="show-button" onclick="showFullTable()"> Mostrar tabla completa </button>
<button id="show-button" onclick="showLastTable()"> Cerrar tabla</button>
<br>
<br>
<br>
<!-- TABLA CHAMPION_STATS -->
<section class="tabla2">
<h2>CHAMPION STATS</h2>
<div >
    <table class="resaltar-tabla">
        <tr>
            <th>Champion</th>
            <th>Name</th>
            <th>Value</th>
            <th>Modifier</th>
        </tr>
        <?php
        // Incluir el archivo de conexión
        include 'conexion.php';

        // Consultar la base de datos
        $sql = "SELECT * FROM `champion_stats` LIMIT 5";
        $result = $conn->query($sql);

        // Mostrar los resultados
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["champion"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["value"] . "</td>";
                echo "<td>" . $row["modifier"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No se encontraron resultados.</td></tr>";
        }

        // Cerrar la conexión
        $conn->close();
        ?>
    </table>
    </div>
    </section>
<br>
<br>
<br>
<!-- TABLA CHAMPIONS -->
<section class="tabla1">
<h2>CHAMPIONS</h2>
<div >
    <table class="resaltar-tabla1">
        <tr>
            <th>Name</th>
            <th>Title</th>
            <th>Lore</th>
            <th>Tags</th>
            <th>Attack</th>
            <th>Health</th>
            <th>Difficulty</th>
            <th>Spells</th>
        </tr>
        <?php
        // Incluir el archivo de conexión
        include 'conexion.php';

        // Consultar la base de datos
        $sql = "SELECT * FROM `champions` LIMIT 5";
        $result = $conn->query($sql);
        $sql2 = "SELECT CONCAT(SUBSTRING_INDEX(lore, ' ', 20), '...') AS valor_limitado FROM champions;";
        $result2 = $conn->query($sql2);
        $sql3 = "SELECT attack, health, difficulty, spells FROM champions LIMIT 5";
        $result3 = $conn->query($sql3);

        // Mostrar los resultados
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $porcattack=$row["attack"]*10;
            $porchealth=$row["health"]*10;
            $porcdifficulty=$row["difficulty"]*10;
            $porcspells=$row["spells"]*10;
            $row2=$result2->fetch_assoc();
            // $row3=$result3->fetch_assoc();
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["title"] . "</td>";
                echo "<td>" . $row2["valor_limitado"] . "</td>"; //muestra las 10 primeras palabras del parrafo 
                echo "<td>" . $row["tags"] . "</td>";
                echo "<td>";
                echo "<div class='progress-bar'>";
                echo "<div class='progress-bar-fill' style='width: " . $porcattack . "%;'></div>"; 
                echo "</div>";
                echo "</td>";
                echo "<td>";
                echo "<div class='progress-bar'>";
                echo "<div class='progress-bar-fill' style='width: " . $porchealth . "%;'></div>"; 
                echo "</div>";
                echo "</td>";
                echo "<td>";
                echo "<div class='progress-bar'>";
                echo "<div class='progress-bar-fill' style='width: " . $porcdifficulty . "%;'></div>"; 
                echo "</div>";
                echo "</td>";
                echo "<td>";
                echo "<div class='progress-bar'>";
                echo "<div class='progress-bar-fill' style='width: " . $porcspells . "%;'></div>"; 
                echo "</div>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No se encontraron resultados.</td></tr>";
        }

        // Cerrar la conexión
        $conn->close();
        ?>
    </table>
</div>
    </section>
<br>
<br>
<br>

<!-- TABLA ITEMS -->
<section class="tabla2">
<h2>ITEMS</h2>
<div >
    <table class="resaltar-tabla">
    <tr>
            <th colspan=5>Names</th>
    </tr>
        <?php
        // Incluir el archivo de conexión
        include 'conexion.php';

        // Consultar la base de datos
        $sql = "SELECT * FROM `items` LIMIT 26";
        $result = $conn->query($sql);

        // Mostrar los resultados
        $data = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $data[] = $row["name"];
            }
        }

        // Mezclar los datos de forma aleatoria
        shuffle($data);

        // Crear la tabla con los datos mezclados
        $counter = 0;
        for ($row = 0; $row < 5; $row++) {
            echo "<tr>";
            for ($col = 0; $col < 5; $col++) {
                $counter++;
                if ($counter >= count($data)) {
                    break;
                }
                echo "<td>" . $data[$counter] . "</td>";
            }
            echo "</tr>";
        }

        // Cerrar la conexión
        $conn->close();
        ?>
    </table>
</div>
    </section>
<br>
<br>
<br>

<!-- TABLA RUNES -->
<section class="tabla2">
<h2>RUNES</h2>
<div >
    <table class="resaltar-tabla">
        <tr>
            <th>Name</th>
            <th>Description</th>
        </tr>
        <?php
        // Incluir el archivo de conexión
        include 'conexion.php';

        // Consultar la base de datos
        $sql = "SELECT * FROM `runes` LIMIT 5";
        $result = $conn->query($sql);

        // Mostrar los resultados
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["description"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No se encontraron resultados.</td></tr>";
        }

        // Cerrar la conexión
        $conn->close();
        ?>
    </table>
</div>
    </section>
<br>
<br>
<br>
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/bootstrap.js"></script>

</div>
</div>

</section>
</body>
<footer>
    <p><a href="george.nagy@educa.madrd.org">JSI     Javier|Samuel|Ines</a></p>
    <p><a> Todos los derechos reservador Copiright&copy; 2023</a></p>
  </footer>
  
</html>