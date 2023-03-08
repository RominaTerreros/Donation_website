<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nankuweb";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Verificar si la conexión ha sido exitosa
    if ($conn->connect_error) {
        die("La conexión ha fallado: " . $conn->connect_error);
        header("Location: Inicio.php");
    }
?>