<?php



    $conexion = mysqli_connect("localhost", "root", "", "login-register");

    if ($conexion) {
        echo "Se ha conectado exitosamente";

    }

    else {
        echo "No se ha conectado exitosamente";
        }



?>