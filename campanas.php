<?php

session_start();
if(empty($_SESSION["IdUser"])){
  header("Location: login.php");
}
$usuario=$_SESSION['Usuario'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campañas</title>
    <link rel="shortcut icon" href="Imagenes/NankuLogoIcon.png">
    <link rel="stylesheet" href="Styles/styleCampaign.css">
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

    <section id="campaign">
        <div class="camp-cont">
            <div>
                <h1>Campaña Reciclamos Juntos</h1>
                <div class="camp-text">
                    <p>Como ciudadanos y ciudadanas, jugamos un papel clave a la hora de utilizar
                        adecuadamente los contenedores que tenemos a nuestra disposición. Reciclar los
                        residuos de plástico y papel nos permite ahorrar energía y agua, generamos empleo
                        y colaboramos en la sostenibilidad del planeta. Tu colaboración diaria es esencial
                        para mantener viva la rueda de la sostenibilidad, y tu ejemplo, el mejor legado
                        para las generaciones futuras.</p>

                    <img class="imagen" src="Imagenes/reciclar.png" alt="Logo de reciclar">

                </div>
            </div>
            <div>
            <a href="formcampanas.php" class="btn" data-tipo="opcion-1"><span>¡Quiero participar! <i class="fa-solid fa-hand-holding-heart"></i></span></a>
            </div>
        </div>

        <div class="camp-cont">
            <div>
                <h1>Campaña Una Playa Limpia</h1>
                <div class="camp-text">
                    <p>El verano atrae a muchos ciudadanos a las hermosas playas que nos ofrece nuestro
                        país. Sin embargo, no todos son concientes de cuidarlas adecuadamente, por eso vemos
                        residuos plásticos, botellas y demás desechos que las personas olvidan tras dejar la
                        playa. Como organización buscamos ayudar a las playas, limpiandolas constantemente,
                        concientizando a los ciudadanos que acuden a ellas, incentivando a más personas a
                        colaborar con nosotros. Juntos podemos lograr tener una playa limpia.</p>
                    <img class="imagen" src="Imagenes/playa.png" alt="Logo de playa">
                </div>
            </div>
            <a href="formcampanas.php" class="btn" data-tipo="opcion-2"><span>¡Quiero participar! <i class="fa-solid fa-hand-holding-heart"></i></span></a>
        </div>

        <div class="camp-cont">
            <h1>Campaña Vida Verde</h1>
            <div class="camp-text">
                <p>En la actualidad, muchos árboles son podados día a día para utilizarlos para
                    diversos fines. No podemos dejar que nuestro país siga quedandose sin la hermosa
                    naturaleza verde, los necesitamos para vivir. En esta campaña plantaremos árboles
                    para aumentar la vida verde, ayudaremos al cuidado de los árboles que no están
                    teniendo una buena calidad de vida e incentivaremos a la población a apoyar esta
                    buena causa para nuestro medio ambiente.</p>
                <img class="imagen" src="Imagenes/arboles.png" alt="Logo de arboles">
            </div>
            <div>
            <a href="formcampanas.php" class="btn" data-tipo="opcion-3"><span>¡Quiero participar! <i class="fa-solid fa-hand-holding-heart"></i></span></a>
            </div>

        </div>

        <div class="camp-cont">
            <div>
                <h1>Campaña Escolares Felices</h1>
                <div class="camp-text">
                    <p>Muchos de nosotros tenemos materiales escolares como libros, cuadernos, plumones
                        u hojas que no utilizamos y están olvidadas en algún cajón de nuestra casa. Por otro
                        lado, hay muchos estudiantes que no cuentan con los recursos necesarios para acceder
                        a estos materiales de manera que puedan desarrollar sus actividades escolares con
                        normalidad. Es nuestra misión ayudar a aquellos estudiantes que lo necesitan, por eso
                        en esta campaña recolectaremos diversos materiales escolares para donarlo a los estudiantes
                        del país.</p>
                    <img class="imagen" src="Imagenes/alumnos.png" alt="Logo de alumnos">
                </div>
            </div>
            <div>
                <a href="formcampanas.php" class="btn" data-tipo="opcion-4"><span>¡Quiero participar! <i class="fa-solid fa-hand-holding-heart"></i></span></a>
                
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

