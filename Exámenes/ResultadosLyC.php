<?php
session_start();
if (empty($_SESSION['ID'])) {
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <link rel="shortcut icon" href="../IMG/SS SUITE-1.png" type="image/x-icon">
    <link id="EtiquetaCSS" rel="Stylesheet" href="../CSS/CSS GLOBAL - TEMA INSTITUCIONAL PUEBLA.css" Type="text/css" MEDIA="screen">

    <!--<link id="Oculta/Muestra" rel="Stylesheet" href="CSS/CSS OCULTAMIENTO.css" Type="text/css" MEDIA="screen">-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del examen de lenguaje y comunicación</title>
</head>

<body>
    <script src="../JavaScript/CambiarTema.js"></script>
    <!--Encabezado (no mover)--> <br>
    <header id="Encabezado">
        <div id="Contenedor-Encabezado">
            <div id="Contenido-Encabezado">
                <h1>Examen</h1> <a href="../index.php">
                    <img id="Logo" src="../IMG/SS SUITE-1.png" alt="SS SUITE">
                </a>
                <div class="Menú-Desplegable"> <button class="Botón-Desplegar">Menú</button>
                    <div class="Contenido-Desplegable">
                        <a href="../index.php">Inicio</a>
                        <a href="../Controlador/controlador_logout.php">Cerrar sesión</a>

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
            require('../Scripts PHP/Conexión.php');
            echo (". Aquí tienes los resultados de tu examen diagnóstico, " . $_SESSION['Nombre'] . " " . $_SESSION['Apellidos'] . ".");
            ?>
        </p>


        <p class="Descripción-Artículo">Examen:</p>

        <table class="InsertarResultados Examen">
            <?php
            $consulta = "SELECT * FROM `preguntas_lyc`";
            $resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");
            echo ('<tr>');
            echo ('<th>Número</th>');
            echo ('<th>Pregunta</th>');
            echo ('<th>Respuesta</th>');
            echo ('</tr>');

            $R1 = $_POST['Pregunta1'];
            $R2 = $_POST['Pregunta2'];
            $R3 = $_POST['Pregunta3'];
            $R4 = $_POST['Pregunta4'];
            $R5 = $_POST['Pregunta5'];
            $R6 = $_POST['Pregunta6'];
            $R7 = $_POST['Pregunta7'];
            $R8 = $_POST['Pregunta8'];
            $R9 = $_POST['Pregunta9'];
            $R10 = $_POST['Pregunta10'];

            $contador = 1;
            $aciertos = 0;
            while ($columna = mysqli_fetch_array($resultado)) {
                echo ("<tr>");
                echo ("<td>" . $columna['ID'] . "</td>");
                echo ("<td>" . $columna['Pregunta'] . "</td>");
                echo ("<td>");

                switch ($contador) {
                    case 1:
                        if ($columna['Correcta'] ==  $R1) {
                            echo "<label class='Respuesta-Correcta'>$R1 Correcta</label>";
                            $aciertos = ($aciertos + 1);
                        } else {
                            echo "<label class='Respuesta-Incorrecta'>$R1 Incorrecta</label>";
                        }
                        break;
                    case 2:
                        if ($columna['Correcta'] ==  $R2) {
                            echo "<label class='Respuesta-Correcta'>$R2 Correcta</label>";
                            $aciertos = ($aciertos + 1);
                        } else {
                            echo "<label class='Respuesta-Incorrecta'>$R2 Incorrecta</label>";
                        }
                        break;
                    case 3:
                        if ($columna['Correcta'] ==  $R3) {
                            echo "<label class='Respuesta-Correcta'>$R3 Correcta</label>";
                            $aciertos = ($aciertos + 1);
                        } else {
                            echo "<label class='Respuesta-Incorrecta'>$R3 Incorrecta</label>";
                        }
                        break;
                    case 4:
                        if ($columna['Correcta'] ==  $R4) {
                            echo "<label class='Respuesta-Correcta'>$R4 Correcta</label>";
                            $aciertos = ($aciertos + 1);
                        } else {
                            echo "<label class='Respuesta-Incorrecta'>$R4 Incorrecta</label>";
                        }
                        break;
                    case 5:
                        if ($columna['Correcta'] ==  $R5) {
                            echo "<label class='Respuesta-Correcta'>$R5 Correcta</label>";
                            $aciertos = ($aciertos + 1);
                        } else {
                            echo "<label class='Respuesta-Incorrecta'>$R5 Incorrecta</label>";
                        }
                        break;
                    case 6:
                        if ($columna['Correcta'] ==  $R6) {
                            echo "<label class='Respuesta-Correcta'>$R6 Correcta</label>";
                            $aciertos = ($aciertos + 1);
                        } else {
                            echo "<label class='Respuesta-Incorrecta'>$R6 Incorrecta</label>";
                        }
                        break;
                    case 7:
                        if ($columna['Correcta'] ==  $R7) {
                            echo "<label class='Respuesta-Correcta'>$R7 Correcta</label>";
                            $aciertos = ($aciertos + 1);
                        } else {
                            echo "<label class='Respuesta-Incorrecta'>$R7 Incorrecta</label>";
                        }
                        break;
                    case 8:
                        if ($columna['Correcta'] ==  $R8) {
                            echo "<label class='Respuesta-Correcta'>$R8 Correcta</label>";
                            $aciertos = ($aciertos + 1);
                        } else {
                            echo "<label class='Respuesta-Incorrecta'>$R8 Incorrecta</label>";
                        }
                        break;
                    case 9:
                        if ($columna['Correcta'] ==  $R9) {
                            echo "<label class='Respuesta-Correcta'>$R9 Correcta</label>";
                            $aciertos = ($aciertos + 1);
                        } else {
                            echo "<label class='Respuesta-Incorrecta'>$R9 Incorrecta</label>";
                        }
                        break;
                    case 10:
                        if ($columna['Correcta'] ==  $R10) {
                            echo "<label class='Respuesta-Correcta'>$R10 orrecta</label>";
                            $aciertos = ($aciertos + 1);
                        } else {
                            echo "<label class='Respuesta-Incorrecta'>$R10 Incorrecta</label>";
                        }
                        break;
                    default:

                        break;
                }
                $contador = ($contador + 1);
                echo ("</td>");

                echo ("</tr>");
            }
            ?>
            <tr>
                <td id="SinDecorado"></td>
                <td id="TotalAciertos">Total: </td>
                <td>
                    <?php
                    echo ($aciertos . " de 10");
                    ?>
                </td>
            </tr>
        </table>
        <?php
        $alumno = ($_SESSION['Nombre'] . " " . $_SESSION['Apellidos']);
        $consulta = ("SELECT * FROM `resultados_lyc` WHERE ");
        $resultado = mysqli_query($conexión, $consulta) or die("<p class='Descripción-Artículo'>Error en la consulta a la base de datos</p>");
        while ($columna = mysqli_fetch_array($resultado)) {
            if ($columna['Alumno'] == $alumno) {
                mysqli_close($conexión);
            }
        }
        $consulta = ("INSERT INTO `resultados_lyc`(`ID`, `Alumno`, `Calificación`) VALUES ('','" . $_SESSION['Nombre'] . " " . $_SESSION['Apellidos'] . "'," . $aciertos .  ")");
        //echo $consulta;
        $resultado = mysqli_query($conexión, $consulta) or die("<p class='Descripción-Artículo'>Tus datos ya se han cargado en la base de datos de los resultados. No puedes hacerlo otra vez...</p>");
        ?>

        <footer>
            <div id="RedesSociales" align="center">
                <hr id="AntesSociales">
                <script lang="JavaScript" src="../JavaScript/Redes Sociales.js"></script>
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