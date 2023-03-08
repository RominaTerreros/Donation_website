<?php
    require_once "conexion.php";

    if(isset($_POST['registrar'])){
    
        if(strlen($_POST['Usuario'])  >=1 && strlen($_POST['Nombres']) >=1 
        && strlen($_POST['Apellidos'])  >=1 && strlen($_POST['Correo'])  >=1  
        && strlen($_POST['Contrasena'])  >=1  ){
        
        $Usuario = trim($_POST['Usuario']);
        $Nombres = trim($_POST['Nombres']);
        $Apellidos = trim($_POST['Apellidos']);
        $Correo = trim($_POST['Correo']);
        $Contrasena = password_hash(trim($_POST['Contrasena']), PASSWORD_DEFAULT);
    
        $consulta= "INSERT INTO usuarios (Usuario, Nombres, Apellidos, Correo, Contrasena)
        VALUES ('$Usuario', '$Nombres','$Apellidos', '$Correo','$Contrasena' )";
    
        mysqli_query($conn, $consulta);
        mysqli_close($conn);
    
        header('Location: index.php');
      }
    }

    if (isset($_POST['registrar_campana'])) {
      // Validar datos de entrada
      $usuario = trim($_POST['usuario']);
      $correo = trim($_POST['correo']);
      $tipo_opcion = trim($_POST['tipo_opcion']);
      $fecha = trim($_POST['fecha']);
      $tipo_apoyo = trim($_POST['tipo_apoyo']);
      $consulta = trim($_POST['consulta']);
    
      if (empty($usuario) || empty($correo) || empty($tipo_opcion) || empty($fecha) || empty($tipo_apoyo) || empty($consulta)) {
          echo '<script>alert("Por favor ingrese todos los campos"); window.location.href = "formcampanas.php";</script>';
          exit();
      }
    
      // Validar fecha
      $fecha_bd = date('Y-m-d', strtotime(str_replace('-', '/', $fecha)));
    
      $fechas_validas = ["2023-03-08", "2023-03-10", "2023-03-11", "2023-03-13", "2023-03-15", "2023-04-11", "2023-04-13", "2023-04-15"];
      
      if (!in_array($fecha_bd, $fechas_validas) || strtotime($fecha) === false) {
        echo '<script>alert("La fecha seleccionada no es válida"); window.location.href = "formcampanas.php"</script>';
    } else {
        // Insertar registro en la base de datos
        $stmt = $conn->prepare("INSERT INTO campana (usuario, correo, tipo_opcion, fecha, tipo_apoyo, consulta) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $usuario, $correo, $tipo_opcion, $fecha_bd, $tipo_apoyo, $consulta);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    
        echo '<script>alert("Registro exitoso");</script>';
        header('Location: formcampanas.php');
        exit();
    }
  
  }

    if(isset($_POST['registrar_donacion'])){

      if(strlen($_POST['usuario']) >=1 && strlen($_POST['correo'])  >=1  
       && strlen($_POST['tipo_donacion'])  >=1 && strlen($_POST['lugar'])  >=1 ){
     
       $usuario = trim($_POST['usuario']);
       $correo = trim($_POST['correo']);
       $tipo_donacion = trim($_POST['tipo_donacion']);
       $lugar = trim($_POST['lugar']);
       $cant = trim($_POST['cant']);
     
       $sql= "INSERT INTO donacion (usuario, correo, tipo_donacion, lugar, cant)
       VALUES ('$usuario', '$correo','$tipo_donacion','$lugar','$cant' )";
     
       mysqli_query($conn, $sql);
       mysqli_close($conn);
     
       header('Location: formdonacion.php');
     }
     
     }

     if(isset($_POST['registrar_donacion_monetaria'])){

      if(strlen($_POST['usuario']) >=1 ){
     
       $usuario = trim($_POST['usuario']);
       $mensaje = trim($_POST['mensaje']);
       $cantidad = trim($_POST['cantidad']);
     
       $sql2= "INSERT INTO donacionmonetaria (usuario, mensaje, cantidad)
       VALUES ('$usuario', '$mensaje','$cantidad' )";
     
       mysqli_query($conn, $sql2);
       mysqli_close($conn);
     
       header('Location: donacionM.php');
     }
     
     }

     if(isset($_POST['registrar_compra'])){

      if(strlen($_POST['nombre']) >=1 
      && strlen($_POST['apellidos'])  >=1 && strlen($_POST['email'])  >=1  
      && strlen($_POST['tipoTarjeta'])  >=1  
      && strlen($_POST['numTarjeta'])  >=1  
      && strlen($_POST['cvv'])  >=1  
      && strlen($_POST['producto'])  >=1  ){
     
       $nombre = trim($_POST['nombre']);
       $apellidos = trim($_POST['apellidos']);
       $email = trim($_POST['email']);
       $tipoTarjeta = trim($_POST['tipoTarjeta']);
       $numTarjeta = trim($_POST['numTarjeta']);
       $cvv = trim($_POST['cvv']);
       $producto = trim($_POST['producto']);
     
       $sql2= "INSERT INTO compraproductos (Nombres, Apellidos, Correo, Producto, TipoTarjeta, NumTarjeta, Cvv)
       VALUES ('$nombre', '$apellidos','$email','$producto', '$tipoTarjeta', '$numTarjeta', '$cvv' )";
     
       mysqli_query($conn, $sql2);
       mysqli_close($conn);
     
       header('Location: productos_user.php');
     }
     else{
      header('Location: FormProd.php');
     }
     
     }
?>