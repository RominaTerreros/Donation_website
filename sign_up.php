<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/logStyle.css">
    <!--Icons-->
    <script src="https://kit.fontawesome.com/414c30f412.js" crossorigin="anonymous"></script>
    <title>Registro de Usuario</title>
    <link rel="shortcut icon" href="Imagenes/NankuLogoIcon.png">

</head>

<body>
    <section class="seccion">


        <form class="form" action="registrar.php" method="POST">
            <h3>Registrarse</h3>
            <label for="Usuario">Nombre de Usuario</label>
            <input class="entrada" type="text" id="Usuario" name="Usuario" required>
            <br>
            <label for="Nombres">Nombres</label>
            <input class="entrada" type="text" id="Nombres" name="Nombres" required>
            <br>
            <label for="Apellidos">Apellido</label>
            <input class="entrada" type="text" id="Apellidos" name="Apellidos" require>
            <br>
            <label for="Correo">Correo</label>
            <input class="entrada" type="email" id="Correo" name="Correo" require>
            <br>
            <label for="Contrasena">Contraseña</label>
            <input class="entrada" type="password" id="Contrasena" name="Contrasena" require>

            <button class="btn" id="registrar" name="registrar"><span><i class="fa-solid fa-user-plus"></i>
                    Registrarse</span> </button>
            <button class="btn" id="regresar"><span><i class="fa-solid fa-circle-xmark"></i> <a
                        href="index.php">Regresar</a> </span> </button>
            <br>

            <div class="iniciar">¿Ya tienes una cuenta? <a href="login.php">Inicia Sesión!</a></div>
        </form>

    </section>
</body>

</html>