<?php
session_start();
if (empty($_SESSION['ID'])) {
    header("Location: index.php");
}
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
            echo (". Un gusto tenerte por aquí, " . $_SESSION['Nombre'] . " " . $_SESSION['Apellidos'] . ".");
            ?>
        </p>


        <p>Examen:</p>
        <form action="ResultadosLiteratura.php" method="POST">
            <table id="InsertarResultados" class="Examen">
                <tr>
                    <th>Número</th>
                    <th>Pregunta</th>
                    <th>Respuesta</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td><label for='Pregunta1'>¿Quién escribió la Iliada y la Odisea?</label></td>
                    <td><select name='Pregunta1'>
                            <option value='Por defecto'>Selecciona una opción
                            </option>
                            <option value='1A'>Miguel De Cervantes Saavedra</option>
                            <option value='1B'>Homero</option>
                            <option value='1C'>William Shakespeare</option>
                            <option value='1D'>Julio Verne</option><select></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><label for='Pregunta2'>Consiste en percibir, traducir y comprender palabras</label></td>
                    <td><select name='Pregunta2'>
                            <option value='Por defecto'>Selecciona una opción
                            </option>
                            <option value='2A'>Escritura</option>
                            <option value='2B'>Poesía</option>
                            <option value='2C'>Lectura</option>
                            <option value='2D'>Prosopopeya</option><select></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><label for='Pregunta3'>En la literatura es la simulación de la realidad</label></td>
                    <td><select name='Pregunta3'>
                            <option value='Por defecto'>Selecciona una opción
                            </option>
                            <option value='3A'>Realidad</option>
                            <option value='3B'>Leyenda</option>
                            <option value='3C'>Novela</option>
                            <option value='3D'>Ficción literaria</option><select></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><label for='Pregunta4'>Autor checo cuya obra está escrita en alemán, considerada una de las más influyentes del siglo XX</label></td>
                    <td><select name='Pregunta4'>
                            <option value='Por defecto'>Selecciona una opción
                            </option>
                            <option value='4A'>Franz Kafka</option>
                            <option value='4B'>William Shakespeare</option>
                            <option value='4C'>Miguel De Cervantes Saavedra</option>
                            <option value='4D'>Jorge Isaacs</option><select></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><label for='Pregunta5'>Narración que encadena una serie de sucesos para formar un relato y los presenta a través de ilustraciones</label></td>
                    <td><select name='Pregunta5'>
                            <option value='Por defecto'>Selecciona una opción
                            </option>
                            <option value='5A'>Dibujo</option>
                            <option value='5B'>Cartel</option>
                            <option value='5C'>Historieta o cómic</option>
                            <option value='5D'>Viñetas</option><select></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><label for='Pregunta6'>Es el arte que emplea la palabra hablada o escrita como medio de expresión</label></td>
                    <td><select name='Pregunta6'>
                            <option value='Por defecto'>Selecciona una opción
                            </option>
                            <option value='6A'>Literatura</option>
                            <option value='6B'>Ensayo</option>
                            <option value='6C'>Lectura</option>
                            <option value='6D'>Paráfrasis</option><select></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td><label for='Pregunta7'>Palabras que imitan los sonidos de la naturaleza</label></td>
                    <td><select name='Pregunta7'>
                            <option value='Por defecto'>Selecciona una opción
                            </option>
                            <option value='7A'>Onomatopeya</option>
                            <option value='7B'>Globos</option>
                            <option value='7C'>Gritos</option>
                            <option value='7D'>Símbolos auditivos</option><select></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td><label for='Pregunta8'>Son los actores de una historia</label></td>
                    <td><select name='Pregunta8'>
                            <option value='Por defecto'>Selecciona una opción
                            </option>
                            <option value='8A'>Personaje principal</option>
                            <option value='8B'>Actores</option>
                            <option value='8C'>Personajes</option>
                            <option value='8D'>Narradores</option><select></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td><label for='Pregunta9'>Medievo-Clasicismo-Renacimiento-Barroco-Neoclasicismo-Romanticismo-Realismo-Naturalismo-Costumbrismo-Vanguardias-Modernismo son ejemplos de...</label></td>
                    <td><select name='Pregunta9'>
                            <option value='Por defecto'>Selecciona una opción
                            </option>
                            <option value='9A'>Fases de la historia</option>
                            <option value='9B'>Corrientes literarias</option>
                            <option value='9C'>Etapas cronológicas</option>
                            <option value='9D'>Etapas históricas</option><select></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td><label for='Pregunta10'>Mafalda de Quino, El gato Félix de Messmer, Fábulas de policías y Ladrones de trino o Garfield de Jim Davis son ejemplos de...</label></td>
                    <td><select name='Pregunta10'>
                            <option value='Por defecto'>Selecciona una opción
                            </option>
                            <option value='10A'>Fábulas </option>
                            <option value='10B'>Cuentos cortos</option>
                            <option value='10C'>Cuentos</option>
                            <option value='10D'>Cómics</option><select></td>
                </tr>
            </table>
            <input type="submit" name="InicioSesión" value="Terminar" class="IniciarSesión DecoradoBotón">
        </form>

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