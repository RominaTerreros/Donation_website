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
  <title>Donación de Muebles</title>
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
    <div class="div-imagen-fondo-mueble">
      <h1 class="titulo1">DONAR MUEBLES</h1>
    </div>
    <div class="contenido">
      <h3> DONACIÓN DE MUEBLES</h3>
      <p>
        <b>Donación de Muebles</b> Cuando compres nuevos muebles, no deseches los viejos a la basura. Puede que ya no
        los quieras, pero quizás alguien estaría feliz con tener tu viejo sofá o silla reclinable. Afortunadamente,
        donar tus muebles usados no es difícil, hay muchas maneras de hacerlo, dándoles una segunda vida.
      </p>
      <div class="cat">
        <p>
          Para la donación de muebles en desuso es importante tener en cuenta algunos detalles: </p>
        <li>No puedes entregar muebles en malas condiciones o destruidos, por ello es necesario inculcar el hábito de
          cuidar sus pertenencias para que en un futuro estos puedan ser conservados y obsequiados a otras personas o
          familias.</li>
        <li>Es pertinente que lo recolectado se separe, por un lado los que
          pueden ser usados inmediatamente, y en otra, los que requieren algún tipo de reparación.</li>
      </div>
      <p>
        Recuerda que no sólo es el acto de donar, también estarás aportando a un mejor cuidado del medio ambiente.
        Únete, y empieza reciclando todos los objetos que tienes en desuso y dales una segunda vida.
      </p>
      <p>
        Ofrecemos opciones simples a personas que no cuentan con los recursos necesarios para la adquisición de un
        artículo nuevo y brindamos solución a sus problemas. Haga trabajo social donando lo que no usa y súmate a
        nuestra labor.
      </p>
      <p>
        Mostremos solidaridad con nuestro planeta evitando el desvió de artículos a los vertederos y pensemos que
        existen personas que se beneficiarían con una donación de muebles. No los deseches y demos esa mano amiga a la
        gente necesitada del Perú.
      </p>
      <p>
        La <b>Fundación Nanku</b> acepta muebles de todo tipo: <i>cómodas, juegos de sala, muebles de entretenimiento,
          armarios, sillones, mesas, cajoneras, entre otros</i> . Es importante destacar que los artículos no deben
        estar
        apolillados y aptos para un segundo uso.
      </p>
      <p>El objetivo es entregar un objeto funcional; y de esta manera sea factible el donativo.</p>
      <p>No botes los muebles viejos a la basura, y pensemos que existen muchas familias que serían felices con tener
        estos artículos en su hogar, así el mismo este usado.</p>
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