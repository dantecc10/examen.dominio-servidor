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
    <title>Servicio social - Administración</title>
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
        <form action="ResultadosLyC.php" method="POST">
            <table id="InsertarResultados" class="Examen">
                <tr>
                    <th>Número</th>
                    <th>Pregunta</th>
                    <th>Respuesta</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td><label for='Pregunta1'>Texto narrativo escrito en prosa o en verso donde sus personajes a menudo son animales que personifican a seres humanos y nos dejan una enseñanza</label></td>
                    <td><select name='Pregunta1'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='1A'>Novela</option>
                            <option value='1B'>Leyenda </option>
                            <option value='1C'>Fábula</option>
                            <option value='1D'>Cuento</option>
                        </select></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><label for='Pregunta2'>Obra literaria escrita en prosa considerada el subgénero más importante del género narrativo</label></td>
                    <td><select name='Pregunta2'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='2A'>Historieta</option>
                            <option value='2B'>Novela</option>
                            <option value='2C'>Cuento</option>
                            <option value='2D'>Leyenda</option>
                        </select></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><label for='Pregunta3'>Es un relato en el que se cuenta una historia real o ficticia que ocurre en un lugar y tiempo concretos</label></td>
                    <td><select name='Pregunta3'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='3A'>Texto expositivo</option>
                            <option value='3B'>Texto descriptivo</option>
                            <option value='3C'>Texto argumentativo</option>
                            <option value='3D'>Texto narrativo</option>
                        </select></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><label for='Pregunta4'>Es decir con tus propias palabras lo que acabas de leer</label></td>
                    <td><select name='Pregunta4'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='4A'>Paráfrasis</option>
                            <option value='4B'>Resumen</option>
                            <option value='4C'>Síntesis</option>
                            <option value='4D'>Opinión</option>
                        </select></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><label for='Pregunta5'>Consiste en explicar un tema a una audiencia ya sea en forma oral o escrita con la intención de informar</label></td>
                    <td><select name='Pregunta5'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='5A'>Simposio</option>
                            <option value='5B'>Exposición</option>
                            <option value='5C'>Foro</option>
                            <option value='5D'>Debate</option>
                        </select></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><label for='Pregunta6'>Es pintar con palabras un objeto, persona, lugar o situación</label></td>
                    <td><select name='Pregunta6'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='6A'>Narración</option>
                            <option value='6B'>Retrato</option>
                            <option value='6C'>Descripción</option>
                            <option value='6D'>Etopeya</option>
                        </select></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td><label for='Pregunta7'>Es un documento de carácter descriptivo y extensión breve en el que se presenta algo al público</label></td>
                    <td><select name='Pregunta7'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='7A'>Folleto</option>
                            <option value='7B'>Carta</option>
                            <option value='7C'>Cartel</option>
                            <option value='7D'>Cuestionario</option>
                        </select></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td><label for='Pregunta8'>Facultad humana de intercambiar ideas y sentimientos, a través de una lengua, por medio del habla</label></td>
                    <td><select name='Pregunta8'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='8A'>Habla</option>
                            <option value='8B'>Lenguaje</option>
                            <option value='8C'>Memorandum</option>
                            <option value='8D'>Vale</option>
                        </select></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td><label for='Pregunta9'>Texto escrito en el que se relatan vivencias. Generalmente son textos privados, en el que se escriben meditaciones, reflexiones o hechos ocurridos que son importantes para el autor</label></td>
                    <td><select name='Pregunta9'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='9A'>Biografía</option>
                            <option value='9B'>Historieta</option>
                            <option value='9C'>Anécdota</option>
                            <option value='9D'>Diario</option>
                        </select></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td><label for='Pregunta10'>Conversación entre dos o más personas, realizada de manera formal, con la intención fundamental de recoger noticias, comentarios, opiniones o interpretaciones, sobre variados temas, de los cuales la o las personas entrevistadas poseen especial información</label></td>
                    <td><select name='Pregunta10'>
                            <option value='Por defecto'>Selecciona una opción</option>
                            <option value='10A'>Entrevista</option>
                            <option value='10B'>Reportaje </option>
                            <option value='10C'>Cronica </option>
                            <option value='10D'>Noticia</option>
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