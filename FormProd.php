<?php

session_start();
if(empty($_SESSION["IdUser"])){
  header("Location: login.php");
}
$usuario=$_SESSION['Usuario'];
$correo=$_SESSION['Correo'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/StyleFormProd.css">
    <link rel="stylesheet" href="Styles/hfStyle.css">
<!--Icons-->
<script src="https://kit.fontawesome.com/414c30f412.js" crossorigin="anonymous"></script>
    <title>Compre un Solidary Box!</title>
    <link rel="shortcut icon" href="Imagenes/NankuLogoIcon.png">
    <!--CSS Bootstrap
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    Java Bootstrap
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
-->
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
    <section class="seccion">
        
        <h3 class="text-center">Registro de Paquete</h3>
        
        <form method="POST" action="registrar.php">
            <p class="Sub">Nombres</p>
            <input class="entrada" type="text" value="<?php echo $_SESSION['Nombres']; ?>" name="nombre" id="nombre" placeholder="Ingresar nombres" required> 
            <p class="Sub">Apellidos</p>
            <input class="entrada" type="text" value="<?php echo $_SESSION['Apellidos']; ?>" name="apellidos" id="apellidos" placeholder="Ingresar apellidos" required>
            <p class="Sub">Correo Electrónico</p>
            <input class="entrada" type="email" value="<?php echo $_SESSION['Correo']; ?>" name="email" id="email" placeholder="Ingresar correo" required>

            <p class="Sub">Tipo de Nanku-Box</p>

            <center>
                <select class="combo" name="producto" id="producto">
                    <option value="Box Alimenticio">Box Alimenticio</option>
                    <option value="Box Ropa y Calzado">Box Ropa y Calzado</option>
                    <option value="Box Utiles Escolares">Box Utiles Escolares</option>
                </select>
            </center>

            <p class="Sub">Tipo de Tarjeta</p>
            <center>
                <select class="combo" name="tipoTarjeta" id="tipoTarjeta">
                    <option value="VISA">VISA</option>
                    <option value="Master Card">Master Card</option>
                    <option value="Diners Club">Diners Club</option>
                    <option value="American Express">American Express</option>
                </select>
            </center>

            <p class="Sub">Número de Tarjeta</p>
            <input class="entrada" type="text" name="numTarjeta" id="numTarjeta" placeholder="Ingresar número de tarjeta" required>
            <p class="Sub">CVV</p>
            <input class="entrada" type="text" name="cvv" id="cvv" placeholder="Ingresar cvv de tarjeta" required>
        
            
            <input id="Benviar" type="submit" name="registrar_compra" value="Enviar">

        </form>
          
    </section>

    <div class="TablaCompras">
        <div class="TituloTabla">
        <h2>Compras del Usuario</h2>
        </div>

        <div class="ContenidoTabla">
            <table>
                <thead>
                    <tr>
                    <th scope="col">Producto</th>
                    <th scope="col">Tipo de Tarjeta</th>
                    <th scope="col">Número de Tarjeta</th>
                    <th scope="col">CVV</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $conexion=mysqli_connect("localhost","root","","nankuweb");
                    $SQL="SELECT Producto, TipoTarjeta, NumTarjeta, Cvv FROM compraproductos where Correo='$correo'";
                    $dato = mysqli_query($conexion, $SQL);

                    if($dato -> num_rows >0){
                        while($fila=mysqli_fetch_array($dato)){
                        
                ?>

                <tr>
                
                <td>
                    <?php echo $fila['Producto']; ?>
                </td>
                <td>
                    <?php echo $fila['TipoTarjeta']; ?>
                </td>
                <td>
                    <?php echo $fila['NumTarjeta']; ?>
                </td>
                <td>
                    <?php echo $fila['Cvv']; ?>
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
</body>
</html>