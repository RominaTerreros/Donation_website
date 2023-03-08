<?php
    session_start();
    if(empty($_SESSION["IdUser"])){
      header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Nanku</title>
    <link rel="shortcut icon" href="Imagenes/NankuLogoIcon.png">
    <link rel="stylesheet" href="Styles/indexStyle.css">
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

    <section class="content_header">
        <h2 class="title">NANKU</h2>
        <p>
            La fundación “NANKU” está basada en brindar apoyo a
            las comunidades vulnerables de Lima en los aspectos
            de economía, educación y medio ambiente.
        </p>
        <a href="#" class="btn">Saber mas</a>
    </section>

    <section class="content sau">
        <h2 class="title" id="Tobjetivo">OBJETIVO</h2>
        <div class="box-container">

            <div class="box">
                <i class="fa-solid fa-hand-holding-dollar"></i>
                <h3>Apoyo Económico</h3>
                <p>
                    Generar la oportunidad de que cualquier
                    persona del país pueda realizar donaciones
                    con solo acceder a nuestra página web desde
                    cualquier dispositivo</p>
            </div>

            <div class="box">
                <i class="fa-solid fa-hands-holding-child"></i>
                <h3>Calidad de Vida</h3>
                <p>
                    Aumentar índices de calidad de vida con apoyo
                    de donaciones a través de la página web</p>
            </div>

            <div class="box">
                <i class="fa-solid fa-hand-holding-heart"></i>
                <h3>Valores</h3>
                <p>
                    Asumir el principio de la solidaridad como un
                    rol en la sociedad actual, a tal grado de generar
                    equidad y oportunidades en localidades de nuestro
                    país.</p>
            </div>

        </div>

    </section>

    <section class="content problem">

        <article class="contain">

            <h2 class="title">Problemática</h2>
            <p>A nivel mundial, el número de personas que viven en situación de extrema pobreza disminuyó desde un 36 %
                en 1990 hasta un 10 % en 2015, teniendo cada año un porcentaje menor de mitigación, esto debido al
                COVID-19; por lo que resulta necesario acelerar el proceso de erradicación de la pobreza a partir de
                diversos medios, una de ellas son las fundaciones que son promovidas en línea, las cuales además tendrán
                un impacto en otros objetivos de desarrollo sostenible como promover la educación de calidad y tomar
                acción por el clima, rescatando diversos ecosistemas que se encuentren vulnerables, etc.
            </p>

        </article>

    </section>

    <section class="content about">
        <h2 class="title" id="Tnoso">Nosotros</h2>
        <p id="Tnosot">Somos una fundación que
            acopla diversos tipos de donativos para apoyar
            a un gran conjunto de personas de la provincia
            de Lima. Estos donativos podrán ser muebles, ropa,
            artefactos o cantidades monetarias otorgadas por
            un donador. Además de contar con una área de
            campañas en donde cualquiera podrá participar
            de las actividades de concientización que promueva
            la fundación.
        </p>
        <div class="box-container2">
            <div class="box">
                <img src="Imagenes/star.svg" alt="Logo user">
                <p><i class="fa-solid fa-circle-check"></i> Leonel Quijaite
                    <br><br> <i class="fa-solid fa-circle-check"></i> Jose Tolentino
                </p>

            </div>

            <div class="box">
                <img src="Imagenes/star.svg" alt="Logo user">
                <p><i class="fa-solid fa-circle-check"></i>Yesenia Torres <br><br>
                    <i class="fa-solid fa-circle-check"></i>Rommina Shulieta
                </p>

            </div>

            <div class="box">
                <img src="Imagenes/star.svg" alt="Logo user">
                <p><i class="fa-solid fa-circle-check"></i>Antony Romero <br><br>
                    <i class="fa-solid fa-circle-check"></i>Brayams Zacarías
                </p>

            </div>

            <div class="box">
                <img src="Imagenes/star.svg" alt="Logo user">
                <p><i class="fa-solid fa-circle-check"></i>Edgardo Fernández<br><br>
                    <i class="fa-solid fa-circle-check"></i>Javier Vilca
                </p>
            </div>
        </div>
    </section>

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