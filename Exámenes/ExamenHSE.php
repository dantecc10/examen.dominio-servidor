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
    <title>Examen de historia socioeconómica de México</title>
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
            echo (". Un gusto tenerte por aquí, " . $_SESSION['Nombre'] . " " . $_SESSION['Apellidos'] . ".");
            ?>
        </p>


        <p>Examen:</p>
        <form action="ResultadosHSE.php" method="POST">
            <table class="InsertarResultados Examen">
                <tr>
                    <th>Número</th>
                    <th>Pregunta</th>
                    <th>Respuesta</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td><label for='Pregunta1'>Toda moneda extranjera que entra a un país</label></td>
                    <td><select name='Pregunta1'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='1A'>Devaluación</option>
                            <option value='1B'>Cambio</option>
                            <option value='1C'>Divisa</option>
                            <option value='1D'>Arancel</option>
                        </select></td>
                </tr>

                <tr>
                    <td>2</td>
                    <td><label for='Pregunta2'>Año en que se da el movimiento estudiantil en México</label></td>
                    <td><select name='Pregunta2'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='2A'>1968</option>
                            <option value='2B'>1963</option>
                            <option value='2C'>1970</option>
                            <option value='2D'>1971</option>
                        </select></td>
                </tr>

                <tr>
                    <td>3</td>
                    <td><label for='Pregunta3'>Diferencia que se da entre dos potencias E.U y la URSS, que fue considerada un enfrentamiento sin armas</label></td>
                    <td><select name='Pregunta3'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='3A'>Guerra sin armas</option>
                            <option value='3B'>Guerra Fría</option>
                            <option value='3C'>Armamentismo</option>
                            <option value='3D'>Guerra de Reforma</option>
                        </select></td>
                </tr>

                <tr>
                    <td>4</td>
                    <td><label for='Pregunta4'>¿En qué año se da la caída del muro de Berlín?</label></td>
                    <td><select name='Pregunta4'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='4A'>1990</option>
                            <option value='4B'>1965</option>
                            <option value='4C'>1983</option>
                            <option value='4D'>1989</option>
                        </select></td>
                </tr>

                <tr>
                    <td>5</td>
                    <td><label for='Pregunta5'>¿Con qué presidente surgió el EZLN</label></td>
                    <td><select name='Pregunta5'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='5A'>Ernesto Zedillo Ponce de León</option>
                            <option value='5B'>Miguel de la Madrid Hurtado</option>
                            <option value='5C'>Carlos Salinas de Gortari</option>
                            <option value='5D'>Felipe Calderón Hinojosa</option>
                        </select></td>
                </tr>

                <tr>
                    <td>6</td>
                    <td><label for='Pregunta6'>Pérdida del valor de una moneda en relación con otra moneda extranjera</label></td>
                    <td><select name='Pregunta6'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='6A'>Devaluación</option>
                            <option value='6B'>Cetes</option>
                            <option value='6C'>Divisa</option>
                            <option value='6D'>Moneda extranjera</option>
                        </select></td>
                </tr>

                <tr>
                    <td>7</td>
                    <td><label for='Pregunta7'>Fomenta el desarrollo a largo plazo y la reducción de la pobreza proporcionando apoyo técnico y financiero</label></td>
                    <td><select name='Pregunta7'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='7A'>FMI</option>
                            <option value='7B'>BMM22</option>
                            <option value='7C'>OCDE</option>
                            <option value='7D'>ONU</option>
                        </select></td>
                </tr>

                <tr>
                    <td>8</td>
                    <td><label for='Pregunta8'>Estudia el pasado del hombre</label></td>
                    <td><select name='Pregunta8'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='8A'>Historia</option>
                            <option value='8B'>Antropología</option>
                            <option value='8C'>Filosofía</option>
                            <option value='8D'>Estética</option>
                        </select></td>
                </tr>

                <tr>
                    <td>9</td>
                    <td><label for='Pregunta9'>Integración de los distintos países del mundo a partir del mayor intercambio comercial y de los flujos de invesrsiones.</label></td>
                    <td><select name='Pregunta9'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='9A'>Socialismo</option>
                            <option value='9B'>Globalización</option>
                            <option value='9C'>Etnia</option>
                            <option value='9D'>Capitalismo</option>
                        </select></td>
                </tr>

                <tr>
                    <td>10</td>
                    <td><label for='Pregunta10'>Periodo que abarca la Primera Guerra Mundial</label></td>
                    <td><select name='Pregunta10'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='10A'>1910-1917</option>
                            <option value='10B'>1934-1939</option>
                            <option value='10C'>1914-1918</option>
                            <option value='10D'>1810-1821</option>
                        </select></td>
                </tr>
            </table>
            <input type="submit" name="InicioSesión" value="Terminar" class="IniciarSesión DecoradoBotón">
        </form>

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