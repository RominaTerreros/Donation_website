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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <title>Done con Nanku!</title>
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
    <div>
      <div class="seccion" id="seccM">
        <div class="g1">
          <div class="box">
            <video src="Imagenes/formdonaciones.mp4" autoplay="true" muted="true" loop="true"
              poster="Imagenes/donar.PNG"></video>
          </div>
          <form action="registrar.php" class="form-donativo" method=POST>
            <center>
              <figure>
                <img class="logo" src="Imagenes/donacion.png" alt="Logo de página">
              </figure>
            </center>
            <div class="mb">
              <label class="form-label">Nombre</label>
              <input type="text" class="entrada" value="<?php echo $_SESSION['Usuario']; ?>" name="usuario">
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="text" class="entrada" value="<?php echo $_SESSION['Correo']; ?>" name="correo">
            </div>
            <label for="">Tipo de Donativo</label>
            <select class="entrada" name="tipo_donacion">
              <option selected>--Seleccione el tipo de donativo--</option>
              <option value="Donar Ropa">Donar Ropa</option>
              <option value="Donar Muebles">Donar Muebles</option>
              <option value="Donar Medicamentos">Donar Medicamentos</option>
            </select>
            <label for="">Lugar de entrega</label>
            <select class="entrada" name="lugar">
              <option selected>--Seleccione el lugar--</option>
              <option value="San Miguel">Municipalidad de San Miguel</option>
              <option value="San Borja">Municipalidad de San Borja</option>
              <option value="Lince">Municipalidad de Lince</option>
            </select>
            <div class="mb-3">
              <label class="form-label">Cantidad de donativos</label>
              <input type="text" class="entrada" name="cant">
            </div>
            <div class="text-center">
              <button type="submit" class="btn" name="registrar_donacion"><a><span><i class=""></i> Enviar </span></a></button>
              <a class= "btn" href="user.php"><span><i class=""></i> Regresar </span></a> 
                        
            </div>
          </form>
        </div>
      </div>

      <div class="tabla">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Tipo de Donación</th>
              <th scope="col">Lugar de recojo</th>
              <th scope="col">Cantidad</th>
            </tr>
          </thead>
          <tbody>

            <?php

                $conexion=mysqli_connect("localhost","root","","nankuweb");            
                $SQL="SELECT tipo_donacion, lugar, cant FROM donacion where usuario='$usuario'";
                $dato = mysqli_query($conexion, $SQL);

                if($dato -> num_rows >0){
                    while($fila=mysqli_fetch_array($dato)){
                    
            ?>
            <tr>
              
              <td>
                <?php echo $fila['tipo_donacion']; ?>
              </td>
              <td>
                <?php echo $fila['lugar']; ?>
              </td>
              <td>
                <?php echo $fila['cant']; ?>
              </td>


              <?php
                }
                }else{

              ?>
            <tr class="text-center">
              <td colspan="16">No existen registros</td>
            </tr>


            <?php
    
            }

            ?>

          </tbody>
        </table>

      </div>
    </div>
  </div>
</body>

</html>