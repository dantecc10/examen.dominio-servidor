<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <link rel="shortcut icon" href="IMG/SS SUITE-1.png" type="image/x-icon">
    <link id="EtiquetaCSS" rel="Stylesheet" href="CSS/CSS GLOBAL - TEMA INSTITUCIONAL PUEBLA.css" Type="text/css" MEDIA="screen">
    <script src="JavaScript/AjaxFiltros.js"></script>
    <!--<link id="Oculta/Muestra" rel="Stylesheet" href="CSS/CSS OCULTAMIENTO.css" Type="text/css" MEDIA="screen">-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicio social - Administración</title>
</head>

<body>
    <script src="JavaScript/CambiarTema.js"></script>
    <!--Encabezado (no mover)--> <br>
    <header id="Encabezado">
        <div id="Contenedor-Encabezado">
            <div id="Contenido-Encabezado">
                <h1>Examen</h1> <a href="index.php">
                    <img id="Logo" src="IMG/SS SUITE-1.png" alt="SS SUITE">
                </a>
                <div class="Menú-Desplegable"> <button class="Botón-Desplegar">Menú</button>
                    <div class="Contenido-Desplegable">
                        <a href="index.php">Inicio</a>
                        <a href="Examen.php">Examen</a>
                        <a href="Controlador/controlador_logout.php">Cerrar sesión</a>

                    </div>
                </div>
            </div>
        </div>
        <div id="Encabezado-Superior"></div>
        <div id="Encabezado-Inferior"></div>
    </header>
    <div>
        <p class="Descripción-Artículo">
            <?php
            require('Scripts PHP/Conexión.php');
            echo (". Aquí tienes los resultados del examen diagnóstico de literatura, " . $_SESSION['Nombre'] . ".");
            ?>
        </p>


        <p class="Descripción-Artículo">Resultados literatura:</p>
        <table class="InsertarResultados Examen">
            <?php
            $consulta = "SELECT * FROM `resultados_literatura`";
            $resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");
            echo ('<tr>');
            echo ('<th>ID</th>');
            echo ('<th>Nombre</th>');
            echo ('<th>Calificación</th>');
            echo ('</tr>');
            while ($columna = mysqli_fetch_array($resultado)) {
                echo ("<tr>");
                echo ("<td>" . $columna['ID'] . "</td>");
                echo ("<td>" . $columna['Alumno'] . "</td>");
                echo ("<td>" . $columna['Calificación'] . "</td>");

                echo ("</tr>");
            }
            ?>
        </table>
        <br>
        <p class="Descripción-Artículo">Resultados Lenguaje y Comunicación:</p>
        <table class="InsertarResultados Examen">
            <?php
            $consulta = "SELECT * FROM `resultados_lyc`";
            $resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");
            echo ('<tr>');
            echo ('<th>ID</th>');
            echo ('<th>Nombre</th>');
            echo ('<th>Calificación</th>');
            echo ('</tr>');
            while ($columna = mysqli_fetch_array($resultado)) {
                echo ("<tr>");
                echo ("<td>" . $columna['ID'] . "</td>");
                echo ("<td>" . $columna['Alumno'] . "</td>");
                echo ("<td>" . $columna['Calificación'] . "</td>");

                echo ("</tr>");
            }
            ?>
        </table>
        <br>
        <p class="Descripción-Artículo">Resultados Historia:</p>
        <table class="InsertarResultados Examen">
            <?php
            $consulta = "SELECT * FROM `resultados_historia`";
            $resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");
            echo ('<tr>');
            echo ('<th>ID</th>');
            echo ('<th>Nombre</th>');
            echo ('<th>Calificación</th>');
            echo ('</tr>');
            while ($columna = mysqli_fetch_array($resultado)) {
                echo ("<tr>");
                echo ("<td>" . $columna['ID'] . "</td>");
                echo ("<td>" . $columna['Alumno'] . "</td>");
                echo ("<td>" . $columna['Calificación'] . "</td>");

                echo ("</tr>");
            }
            ?>
        </table>

        <footer>
            <div id="RedesSociales" align="center">
                <hr id="AntesSociales">
                <script lang="JavaScript" src="JavaScript/Redes Sociales.js"></script>
                <h3><a href="mailto:dantecc10@gmail.com" class="TítuloArtículo" id="ContactoCorreo">Contacto</a></h3>
                <img class="RedSocial" alt="Ícono de Facebook" id="Facebook" onclick="javascript:AbrirFacebook();" src="../IMG/íconoFacebook.png" />
                <img class="RedSocial" alt="Ícono de WhatsApp" id="WhatsApp" onclick="javascript:AbrirWhatsApp();" src="../IMG/íconoWhatsApp.png" />
                <img class="RedSocial" alt="Ícono de Messenger" id="Messenger" onclick="javascript:AbrirMessenger();" src="../IMG/íconoMessenger.png" />
                <img class="RedSocial" alt="Ícono de YouTube" id="YouTube" onclick="javascript:AbrirYouTube();" src="../IMG/íconoYouTube.png" />
                <img class="RedSocial" alt="Ícono de Telegram" id="Telegram" onclick="javascript:AbrirTelegram();" src="../IMG/íconoTelegram.png" />
                <img class="RedSocial" alt="Ícono de Twitter" id="Twitter" onclick="javascript:AbrirTwitter();" src="../IMG/íconoTwitter.png" />
                <img class="RedSocial" alt="Ícono de GitHub" id="GitHub" onclick="javascript:AbrirGitHub();" src="../IMG/íconoGitHub.png" />
            </div>
            <p id="copyright">Copyright © Dante Castelán Carpinteyro - <b><i>Führer Industries</i></b> - 2022</p>
        </footer>
</body>

</html>