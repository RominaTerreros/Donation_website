<?php

session_start();
if(empty($_SESSION["IdUser"])){
  header("Location: login.php");
}
$usuario=$_SESSION['Usuario'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="shortcut icon" href="Imagenes/NankuLogoIcon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <link rel="stylesheet" href="Styles/Estilos-galeria.css">
    <link rel="stylesheet" href="Styles/Estilos-video.css">
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

    <div class="container gallery-container">

        <h1>Galeria de videos</h1>

        <div class="gallery">
            <div class="video">
                <a href="https://www.youtube.com/embed/kqWIQpYQi3c" data-lightbox="video" data-title="Video 1" target="_blank">
                    <iframe src="https://www.youtube.com/embed/kqWIQpYQi3c" allowfullscreen></iframe>
                    <div class="frame">
                        <center>Campaña Salva Playas 2022 Ministerio del Ambiente</center>
                    </div>
                </a>
            </div>
            <div class="video">
                <a href="https://www.youtube.com/embed/JY9gojUIy0I" data-lightbox="video" data-title="Video 2" target="_blank">
                    <iframe src="https://www.youtube.com/embed/JY9gojUIy0I" allowfullscreen></iframe>
                    <div class="frame">
                        <center>Enseña Perú en Nuevo Progreso (Áncash)</center>
                    </div>
                </a>
            </div>
            <div class="video">
                <a href="https://www.youtube.com/embed/IWOMKbLIk_g" data-lightbox="video" data-title="Video 3" target="_blank">
                    <iframe src="https://www.youtube.com/embed/IWOMKbLIk_g" allowfullscreen></iframe>
                    <div class="frame">
                        <center>Campaña de donaciones para el proyecto "De Tambo a Tambo"</center>
                    </div>
                </a>
            </div>
            <div class="video">
                <a href="https://www.youtube.com/embed/piIwG1DC4hY" data-lightbox="video" data-title="Video 4" target="_blank">
                    <iframe src="https://www.youtube.com/embed/piIwG1DC4hY" allowfullscreen></iframe>
                    <div class="frame">
                        <center>Campaña Navideña "Marcando Sonrisas" 20224</center>
                    </div>
                </a>
            </div>
        </div>

        <section class="paginacion">
            <ul>
                <li>
                    <a href="Galeria.php">1</a>
                </li>
                <li>
                    <a href="Galeria2.php">2</a>
                </li>
                <li>
                    <a href="Galeria3.php" class="active">3</a>
                </li>
            </ul>
        </section>

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
    <script src="https://cdn.jsdelivr.net/npm/lity@2/dist/lity.min.js"></script>

</body>
</html>