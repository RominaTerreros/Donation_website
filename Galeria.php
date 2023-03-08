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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="Styles/Estilos-galeria.css">
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

        <h1>Galeria de fotos</h1>

        <div class="tz-gallery">
    
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="ImagenesGaleria/imagen1.jpg">
                        <img src="ImagenesGaleria/imagen1.jpg" alt="Imagen 1" >
                    </a>
                    <div class="frame">
                        <center>Banco de Alimento Perú busca brindar apoyo durante la época de emergencia.</center>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="ImagenesGaleria/imagen2.jpg">
                        <img src="ImagenesGaleria/imagen2.jpg" alt="Imagen 2" >
                    </a>
                    <div class="frame">
                        <center>Campaña "Platos que alimentan esperanza", con el objetivo de recaudar un millón de raciones de comida.</center>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="ImagenesGaleria/imagen3.jpg">
                        <img src="ImagenesGaleria/imagen3.jpg" alt="Imagen 3" >
                    </a>
                    <div class="frame">
                        <center>Campaña #YoAyudoDesdeCasa, realiza donaciones de productos de limpieza e higiene personal.</center>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="ImagenesGaleria/imagen4.jpg">
                        <img src="ImagenesGaleria/imagen4.jpg" alt="Imagen 4" >
                    </a>
                    <div class="frame">
                        <center>Campaña contra el friaje, donación de ropa para una comunidad en Villa María del Triunfo.</center>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="ImagenesGaleria/imagen5.jpg">
                        <img src="ImagenesGaleria/imagen5.jpg" alt="Imagen 5" >
                    </a>
                    <div class="frame">
                        <center>Campaña de donaciones, Colegio STEX y Alianza Francesa de Arequipa.</center>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="ImagenesGaleria/imagen6.jpg">
                        <img src="ImagenesGaleria/imagen6.jpg" alt="Imagen 6" >
                    </a>
                    <div class="frame">
                        <center>Donaciones de la Clínica Infantil Paz Holandesa, Arequipa Pediatria.</center>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="ImagenesGaleria/imagen7.jpg">
                        <img src="ImagenesGaleria/imagen7.jpg" alt="Imagen 7" >
                    </a>
                    <div class="frame">
                        <center>Biblio Perú promueve la donación de libros y materiales de estudio.</center>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="ImagenesGaleria/imagen8.jpg">
                        <img src="ImagenesGaleria/imagen8.jpg" alt="Imagen 8" >
                    </a>
                    <div class="frame">
                        <center>OIM Perú entregó útiles escolares y equipamiento tecnológico a 58 instituciones educativas en Lima.</center>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="ImagenesGaleria/imagen9.jpg">
                        <img src="ImagenesGaleria/imagen9.jpg" alt="Imagen 9" >
                    </a>
                    <div class="frame">
                        <center>World Vision Perú realizó la donación de kits educativos a familias afectadas por el Covid-19.</center>
                    </div>
                </div>
            </div>
    
        </div>
    
        <section class="paginacion">
            <ul>
                <li>
                    <a href="Galeria.php" class="active">1</a>
                </li>
                <li>
                    <a href="Galeria2.php">2</a>
                </li>
                <li>
                    <a href="Galeria2.php">3</a>
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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>

</body>
</html>