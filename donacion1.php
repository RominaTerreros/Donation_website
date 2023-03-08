<?php

session_start();
error_reporting(0);

$validar = $_SESSION['Usuario'];

if( $validar == null || $validar = ''){

  header("Location: login.php");
  die();
  
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <title>Donación de Ropa</title>
  <link rel="shortcut icon" href="Imagenes/NankuLogoIcon.png">
  <link rel="stylesheet" href="Styles/donacion1.css" />
  <link rel="stylesheet" href="Styles/hfStyle.css">
  <!--Icons-->
  <script src="https://kit.fontawesome.com/414c30f412.js" crossorigin="anonymous"></script>
</head>

<body>
<header class="header">
        <div class="logo">
            <img src="Imagenes/LogoNankuFinal.png" alt="Logo Nanku">
        </div>
        <nav class="nav">
            <ul class="navbar-links">
                <li>
                    <a href="user.php">Inicio</a>
                </li>
            
                <li>
                    <a href="productos_user.php">Productos</a>
                </li>

                <li>
                    <a href="campanas.php">Campañas</a>
                </li>

                <li>
                    <a href="#">Donaciones</a>
                    <ul>
                        <li><a href="donacion1.php">Donacion de Ropa</a></li>
                        <li><a href="donacion2.php">Donacion de Muebles</a></li>
                        <li><a href="donacion3.php">Donacion de Medicamentos</a></li>
                        <li><a href="donacionM.php">Donacion Monetaria</a></li>
                    </ul>
                </li>

                <li>
                    <a href="PreguntasFrecuentes.php">Preguntas frecuentes</a>
                </li>

                <li>
                    <a href="Galeria.php">Galería</a>
                </li>
            </ul>
        </nav>
        <button class="btn"><a href="#"><span><i class="fa-solid fa-user"></i> <b> <?php echo $_SESSION['Usuario'] ; ?> </b></span></a> </button>
        <button class="btn"><a href="cerrarSesion.php"><span><i class="fa-solid fa-right-from-bracket"></i></i> Log Out </span></a> </button>
</header>

  <div>
    <div class="content_header">
      <h1 class="titulo1">DONAR ROPA</h1>
    </div>
    <div class="contenido">
      <h3> DONACIÓN DE ROPA USADA</h3>
      <p>
        <b>Donación de Ropa Usada.</b> La conciencia social es tarea de todos y alimentar el espíritu es necesario a
        la hora de ayudar a nuestro prójimo. En este sentido, súmate a la donación de ropa usada y así; personas
        puedan darles una segunda utilidad.
        Hoy más que nunca, puedes ayudar a personas y comunidades necesitadas, donando ropa y otros artículos de uso
        doméstico; ya que podemos proporcionarles la posibilidad de darle un segundo uso.
      </p>
      <div class="cat">
        <p>
          Tips para que tu donación sea más efectiva:
        </p>
        <li>Las prendas de vestir deben estar limpias</li>
        <li>Clasificar las prendas que estén en buena condición.</li>
        <li>Ubicar la ropa en recipientes como: bolsas de basura de plástico, cajas de plástico, bolsos de tela.
        </li>
        <li>Todas las prendas pueden ser donadas en diferentes tallas y modelos.</li>
      </div>

      <div class="cat">
        <p>Clasifica la ropa y separa tus artículos :</p>
        <li>Pantalón</li>
        <li>Polo</li>
        <li>Casacas</li>
        <li>Zapatillas</li>
        <li>Frazadas</li>
      </div>

      <p>
        Donar ropa puede hacer que un niño prospere en la escuela entre sus compañeros. Las donaciones de ropa
        pueden mantener a una familia caliente por la noche cuando las temperaturas bajan. Sin mencionar, las
        innumerables comunidades de la ciudad y los alrededores que les cuesta mucho adquirir una prenda nueva.
      </p>
      <p>
        La fundación <b>NANKU</b> te invita a contribuir con esta causa y lograr que personas de bajos recursos
        mejoren su calidad de vida. Ofrecemos opciones simples a personas que no cuentan con los recursos necesarios
        para la adquisición de un artículo nuevo y brindamos solución a sus problemas.
      </p>
      <p>Tus donaciones son importantes.</p>
    </div>
    <div class="seccion">
      <div class="g1">
        <div class="box">
          <video src="Imagenes/donaciones.mp4" autoplay="true" muted="true" loop="true"
            poster="Imagenes/donar.PNG"></video>
        </div>
        <div class="envio">
          <h1><b>Fundación Nanku</b></h1>
          <h2> Comience a donar con nosotros </h2>
          <button class="btn"><a href="formdonacion.php"><span><i class="fa-solid fa-hand-holding-heart"></i> ¡Dona aquí!</span></a> </button>

          
        </div>
      </div>

    </div>
  </div>

  <footer class="footer">
        <!--<section class="content contact">-->
        <h2 class="titleFotter">Contáctanos</h2>

        <div class="box-container3">

            <div class="box3">
                <a href="https://web.whatsapp.com/" target="_blank"><span><i class="fa-brands fa-whatsapp"></i>
                        WhatsApp</span></a>
                <p>+51 999 999 999</p>
            </div>

            <div class="box3">
                <a href="https://www.facebook.com/" target="_blank"><span><i class="fa-brands fa-facebook"></i> Facebook</span></a>
                <p>Fundación NANKU</p>
            </div>

            <div class="box3">
                <a href="https://www.instagram.com/" target="_blank"><span><i class="fa-brands fa-instagram"></i> Instagram</span></a>
                <p>@NankuFundacion</p>
            </div>

            <div class="box3">
                <a href="https://www.youtube.com/" target="_blank"><span><i class="fa-brands fa-youtube"></i> Youtube</span></a>
                <p>@NankuFundacion</p>
            </div>
        </div>

        <div class="derechos">
            <small>&copy; 2023 <b>Fundación NANKU</b></small>
        </div>
        <!-- </section>-->
    </footer>
</body>

</html>