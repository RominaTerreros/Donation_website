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
    <title>Participe aquí!</title>
    <link rel="shortcut icon" href="Imagenes/NankuLogoIcon.png">
    <link rel="stylesheet" href="Styles/donacion1.css" />
    <link rel="stylesheet" href="Styles/hfStyle.css">
<!--Icons-->
<script src="https://kit.fontawesome.com/414c30f412.js" crossorigin="anonymous"></script>
    <!--CSS bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!--javascript bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>


</head>

<body>
    <div>
        
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
            <div class="seccion" id="seccM">
                <div class="g1">
                    <div class="box">
                        <video src="Imagenes/formdonaciones.mp4" autoplay="true" muted="true" loop="true"
                            poster="Imagenes/donar.PNG"></video>
                    </div>


                    <form action="registrar.php" method="post" id="formulario-registro" class="form-campana">
                        <center>
                            <figure>
                                <img class="logo" src="Imagenes/donacion.png" alt="Logo de página">
                            </figure>
                        </center>
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control" value="<?php echo $_SESSION['Usuario']; ?>"
                                name="usuario">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" value="<?php echo $_SESSION['Correo']; ?>"
                                name="correo">
                        </div>

                        <div>
                            <label for="tipo_opcion">Campaña seleccionada:</label>
                            <select class="form-select mb-3" id="tipo_opcion" name="tipo_opcion">
                                <option value="">---Seleccione una opción---</option>
                                <option value="Campaña Reciclando Juntos">Campaña Reciclando Juntos</option>
                                <option value="Campaña Una Playa Limpia">Campaña Una Playa Limpia</option>
                                <option value="Campaña Vida Verde">Campaña Vida Verde</option>
                                <option value="Campaña Escolares Felices">Campaña Escolares Felices</option>
                            </select>
                        </div>


                        <!-- Bloques de contenido adicional para cada opción -->
                        <div class="opcion-info" id="Campaña Reciclando Juntos-info">
                            <p class="infoCamp">Campaña Reciclando Juntos - fechas: 11/04/2023,13/04/2023, 15/04/2023</p>
                        </div>
                        <div class="opcion-info" id="Campaña Una Playa Limpia-info">
                            <p class="infoCamp">Campaña Una Playa Limpia - fechas: 11/03/2023,13/03/2023, 15/03/2023</p>
                        </div>
                        <div class="opcion-info" id="Campaña Vida Verde-info">
                            <p class="infoCamp">Campaña Vida Verde - fechas: 11/03/2023,13/03/2023, 15/04/2023</p>
                        </div>

                        <div class="opcion-info" id="Campaña Escolares Felices-info">
                            <p class="infoCamp">Campaña Escolares Felices - fechas: 08/03/2023,10/03/2023, 11/03/2023</p>
                        </div>


                        <label for="fecha">Selecciona una fecha establecida según la campaña:</label>
                        <br>
                        <input type="date" id="fecha" name="fecha"
                            pattern="(08-03-2023|2023-03-10|2023-03-11|2023-03-13|2023-03-15|2023-03-11|2023-03-13|2023-04-15)"
                            required>
                        <br>
                        <label for="tipo_apoyo">Selecciona un tipo de contribución:</label>
                        <select class="form-select mb-3" id="tipo_apoyo" name="tipo_apoyo">
                            <option value="">---Seleccione una opción---</option>
                            <option value="Orientador">Orientador</option>
                            <option value="Publicitario">Publicitario</option>
                            <option value="Laboral">Laboral</option>
                            <option value="Planificador">Planificador</option>
                        </select>

                        <label for="consulta">Consulta (max 30 characters):</label>
                        <input type="text" id="consulta" name="consulta" required minlength="0" maxlength="30"
                            size="10">

                        <p></p>

                        <div class="text-center">
                            <button type="submit" class="btn" name="registrar_campana"><a><span><i class=""></i> Enviar
                                    </span></a></button>
                            <a class="btn" href="user.php"><span><i class=""></i> Regresar </span></a>

                        </div>


                    </form>
                </div>

            </div>

        </div>

</body>

</html>