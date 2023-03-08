<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/logStyle.css">
    <title>Inicio de Sesión</title>
    <link rel="shortcut icon" href="Imagenes/NankuLogoIcon.png">
</head>

<body>
    <section class="seccion">

        <form class="form" action="iniciarSesion.php" method="POST">
            <h3>Iniciar Sesión</h3>
            <label for="Usuario">Usuario:</label>
            <input class="entrada" type="text" id="Usuario" name="Usuario" required>
            <br>
            <label for="Contrasena">Contraseña:</label>
            <input class="entrada" type="password" id="Contrasena" name="Contrasena" required>

            <input type="hidden" name="accion" value="acceso_user">

            <input type="submit" class="btn" value="Ingresar" name="btningresar">
            <button class="btn" id="regresar"><span><i class="fa-solid fa-circle-xmark"></i> <a
                        href="index.php">Regresar</a> </span> </button>
            <br>
            <div class="registrarse">¿Aún no tienes una cuenta? <a href="sign_up.php">¡Resgistrate!</a></div>
        </form>
    </section>
</body>

</html>