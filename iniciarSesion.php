<?php
    //$conexion= mysqli_connect("localhost", "root", "", "nankuweb");
    require_once "conexion.php";

    if (isset($_POST['accion'])){ 
        switch ($_POST['accion']){
            //casos de registros
            /*case 'editar_registro':
                editar_registro();
                break; 
    
                case 'eliminar_registro';
                eliminar_registro();
        
                break;*/
    
                case 'acceso_user';
                acceso_user();
                break;   
            }
    
     }


    function acceso_user() {
        session_start();
        if(!empty($_POST["btningresar"])){
            if(!empty($_POST["Usuario"]) and !empty($_POST["Contrasena"])){
                $usuario=$_POST['Usuario'];
                $contrasena=$_POST['Contrasena'];
                $conn=mysqli_connect("localhost","root","","nankuweb");

                $sql = "SELECT IdUser, Usuario, Nombres, Apellidos, Correo, Contrasena FROM usuarios WHERE Usuario = ?";
                if($stmt = mysqli_prepare($conn, $sql)){
                    mysqli_stmt_bind_param($stmt, "s", $param_usuario);
                    $param_usuario = $usuario;

                    if(mysqli_stmt_execute($stmt)){
                        mysqli_stmt_store_result($stmt);
                    }

                    if(mysqli_stmt_num_rows($stmt) == 1){
                        mysqli_stmt_bind_result($stmt, $IdUser, $Usuario, $Nombres, $Apellidos, $Correo, $hashed_password);
                        if(mysqli_stmt_fetch($stmt)){
                            if(password_verify($contrasena, $hashed_password)){
                                session_start();
                                //Almacenar los datos en variables de sesión
                                $_SESSION["IdUser"] = $IdUser;
                                $_SESSION["Usuario"] = $Usuario;
                                $_SESSION['Correo']=$Correo;
                                $_SESSION['Nombres']=$Nombres;
                                $_SESSION['Apellidos']=$Apellidos;
                                header("location: user.php");
                            }else{
                                echo "<div class='alert alert-danger'> Acceso denegado</div>"; 
                            }
                        }else{
                            echo "<div class='alert alert-danger'> Acceso denegado</div>"; 
                        }
                    }else{
                        echo "Se ha producido un problema";
                    }
                }
                $conn->close();
            }else{
                header('Location: login.php');
                session_destroy();
            }
        }
    }
?>

<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>