<?php

    include "send.php";

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Solicitud de Turno</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/icon.ico">
        <link rel="stylesheet" href="contacto.css">
    </head>
    <body>

      <header>


    <!-- MENU REDES SOCIALES -->
    
        <div class="menu-2">
          <div class="socials">
            <a href="#">
              <div class="social">
                <img src="img/instagram.png" alt="" />
              </div>
            </a>
            <a href="#">
              <div class="social">
                <img src="img/facebook.png" alt="" />
              </div>
            </a>
            <a href="#">
              <div class="social">
                <img src="img/wp.png" alt="" />
              </div>
            </a>
            <a href="#">
              <div class="social">
                <img src="img/github.png" alt="" />
              </div>
            </a>
            <a href="#">
              <div class="social">
                <img src="img/linkedin.png" alt="" />
              </div>
            </a>
            <a href="#">
              <div class="social">
                <img src="img/behance.png" alt="" />
              </div>
            </a>
          </div>
        </div>
              
    <!-- MENU -->

        <div class="menu container">
          <input type="checkbox" id="menu" />
          <label for="menu">
            <img src="img/menumenu.png" class="menu-icono" alt="" />
          </label>
          <nav class="navbar">
            <div class="menu-1">
              <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="index.php#quienessomos">Codepass</a></li>
                <li><a href="index.php#servicios">Servicios</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </header>

    <!-- CONTACTO LOGO -->
      <div class="contacto-general">
        <div class="imagen-logo">
          <img src="img/logologo.png">

    <!-- INFORMACION -->
          <h1>Contacto</h1>
          <p>Comunicate con nosotros para resolver todas tus consultas</p>
        </div>

    <!-- CONTACTO REDES SOCIALES -->

        <div class="contacto-social">
          <div class="chat">
            <div class="Instagram">
              <img src="img/instagram.png" alt="">
              <h2>INSTAGRAM</h2>
              <a href="https://www.instagram.com/codepasss/">www.instagram.com/codepasss</a>
            </div>
          </div>
          <div class="chat">
            <div class="Email">
              <img src="img/correo.png" alt="">
              <h2>EMAIL</h2>
              <a href="mailto:codepassweb@hotmail.com">codepassweb@hotmail.com</a>
            </div>
          </div>
          <div class="chat">
            <div class="linkedin">
              <img src="img/linkedin.png" alt="">
              <h2>LINKEDIN</h2>
              <a href="https://www.linkedin.com/in/anabella-bertola-591634277/">https://www.linkedin.com/in/anabella-bertola-591634277/</a>
            </div>
          </div>
          <div class="chat">
            <div class="github">
              <img src="img/gitblanco.png" alt="">
              <h2>GITHUB</h2>
              <a href="https://github.com/anabellabertola">https://github.com/anabellabertola</a>
            </div>
          </div>
        </div>
      </div>

    <!-- DIVIDER -->

      <div class="divider-1">
      </div>

    <!-- TITULO FORMULARIO -->

        <div class="formulario-1">
          <div class="titulo-consulta">
            <h1>Formulario de Consulta</h1>
            <p>También puedes dejarnos tu consulta personalizada en el siguiente formulario</p>
          </div>
        </div>

    <!-- FORMULARIO -->
          
        <div class="formulario">
          <form method="POST" autocomplete="off">

    <!-- CAMPOS A COMPLETAR FORMULARIO -->

            <div class= "input-contenedor">
              <div class="input-grupo">
                <input type="text" placeholder="Nombre" name="nombre">
              </div>
              <div class="input-grupo">
                <input type="email" placeholder="Email" name="email">
              </div>
              <div class="input-grupo">
                <input type="tel" placeholder="Teléfono" name="telefono">
              </div>
              <div class="input-grupo">
                <input type="text" placeholder="País" name="pais">
              </div>
              <div class="input-grupo">
                <input type="text" placeholder="Consulta" name="consulta">
              </div>

    <!-- BOTON ENVIAR-->

                <input type="submit" name="send" class="btn-send" value="Enviar">
              </div>
            </div>
          </form>
        </div>

    <!-- FOOTER -->
        <footer>
          <div class="cont-footer">
            <div class="logo-footer">
              <img src="img/logopng.png" alt="">
              <p>Descubre el poder de dar vida a tus ideas online con nuestras páginas web. En un mundo donde la presencia digital es vital, nuestras soluciones te ofrecen un universo de posibilidades ilimitadas. Imagina la magia de tu negocio cobrando vida en cada clic, cautivando audiencias y expandiendo tu alcance como nunca antes. Desde la elegancia de su diseño hasta la funcionalidad sin límites, nuestras páginas web son la puerta de entrada a un viaje hacia el éxito digital. ¡Convierte lo ordinario en extraordinario y haz que tu presencia en línea sea inolvidable!</p>                    
            </div>

    <!-- REDES SOCIALES FOOTER -->

            <div class="socials-footer">
              <a href="https://www.instagram.com/codepasss/">
                <img src="img/instagram.png" alt="" />
              </a>
              <a href="#">
                <img src="img/facebook.png" alt="" />
              </a>
              <a href="https://wa.me/3412294863">
                <img src="img/wp.png" alt="" />
              </a>
              <a href="https://github.com/anabellabertola">
                <img src="img/gitblanco.png" alt="" />
              </a>
              <a href="https://www.linkedin.com/in/anabella-bertola-591634277/">
                <img src="img/linkedin.png" alt="" />
              </a>
              <a href="https://www.behance.net/anabellabertola">
                <img src="img/behanceblanco.png" alt="" />
              </a>
            </div>
          </div>              
        </footer>

    <!-- BOTON WHATSAPP -->

        <div class="float-btn">
          <a href="https://wa.me/3412294863" target="_blank">
            <img class="wp" src="img/pw.png" alt="" />
          </a>
        </div>

        <script src="" async defer></script>
    </body>
</html>