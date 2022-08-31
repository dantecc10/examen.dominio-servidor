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
    <title>Examen de historia</title>
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
        <form action="ResultadosHistoria.php" method="POST">
            <table class="InsertarResultados Examen">
                <tr>
                    <td>1</td>
                    <td><label for='Pregunta1'>Significa muchos dioses</label></td>
                    <td><select name='Pregunta1'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='1A'>Monoteísmo</option>
                            <option value='1B'>Religión</option>
                            <option value='1C'>Secta</option>
                            <option value='1D'>Politeísmo</option>
                        </select></td>
                </tr>

                <tr>
                    <td>2</td>
                    <td><label for='Pregunta2'>Abarcó del año 200 d. C. al 900 d. C. Durante este periodo se extendieron y florecieron numerosas culturas.</label></td>
                    <td><select name='Pregunta2'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='2A'>Posclásico</option>
                            <option value='2B'>Preclásico</option>
                            <option value='2C'>Clásico</option>
                            <option value='2D'>Jurásico</option>
                        </select></td>
                </tr>

                <tr>
                    <td>3</td>
                    <td><label for='Pregunta3'>Cultura que edificó la piramide del sol, de la luna y la calzada de los muertos</label></td>
                    <td><select name='Pregunta3'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='3A'>Maya</option>
                            <option value='3B'>Teotihuacana</option>
                            <option value='3C'>Mexica</option>
                            <option value='3D'>Tolteca</option>
                        </select></td>
                </tr>

                <tr>
                    <td>4</td>
                    <td><label for='Pregunta4'>Año en que Cristobal Colón descubre América</label></td>
                    <td><select name='Pregunta4'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='4A'>1521</option>
                            <option value='4B'>1500</option>
                            <option value='4C'>1492</option>
                            <option value='4D'>1494</option>
                        </select></td>
                </tr>

                <tr>
                    <td>5</td>
                    <td><label for='Pregunta5'>Se puede definir como "el conjunto de los rasgos distintivos, espirituales, materiales, intelectuales y afectivos que caracterizan a una sociedad o a un grupo social"</label></td>
                    <td><select name='Pregunta5'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='5A'>Costumbres</option>
                            <option value='5B'>Tradiciones</option>
                            <option value='5C'>Educación</option>
                            <option value='5D'>Cultura</option>
                        </select></td>
                </tr>

                <tr>
                    <td>6</td>
                    <td><label for='Pregunta6'>Este conocimiento se da con la experiencia y acción directa sobre el objeto, es percibida por medio de los sentidos</label></td>
                    <td><select name='Pregunta6'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='6A'>Conocimiento empírico</option>
                            <option value='6B'>Conocimiento científico</option>
                            <option value='6C'>Cultura</option>
                            <option value='6D'>Erudito</option>
                        </select></td>
                </tr>

                <tr>
                    <td>7</td>
                    <td><label for='Pregunta7'>Ciencia que estudia el pasado del hombre</label></td>
                    <td><select name='Pregunta7'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='7A'>Historia</option>
                            <option value='7B'>Filosofía</option>
                            <option value='7C'>Arqueología </option>
                            <option value='7D'>Geografía</option>
                        </select></td>
                </tr>

                <tr>
                    <td>8</td>
                    <td><label for='Pregunta8'>Año en que se consuma la independencia de México</label></td>
                    <td><select name='Pregunta8'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='8A'>1521</option>
                            <option value='8B'>1821</option>
                            <option value='8C'>1810</option>
                            <option value='8D'>1798</option>
                        </select></td>
                </tr>

                <tr>
                    <td>9</td>
                    <td><label for='Pregunta9'>Presidente de México que gobernó por más de 30 años el país</label></td>
                    <td><select name='Pregunta9'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='9A'>Victoriano Huerta</option>
                            <option value='9B'>Francisco I. Madero</option>
                            <option value='9C'>Porfirio Díaz</option>
                            <option value='9D'>Emiliano Zapata</option>
                        </select></td>
                </tr>

                <tr>
                    <td>10</td>
                    <td><label for='Pregunta10'>Personaje oaxaqueño que creó las Leyes de Reforma</label></td>
                    <td><select name='Pregunta10'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='10A'>Emiliano Zapata</option>
                            <option value='10B'>Benito Juárez</option>
                            <option value='10C'>Victoriano Huerta</option>
                            <option value='10D'>Porfirio Díaz</option>
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