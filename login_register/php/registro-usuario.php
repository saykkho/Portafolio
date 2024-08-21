<?php
    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $email= $_POST['email'];
    $contraseña = $_POST['contraseña'];

    $query = "INSERT INTO usuarios(nombre_completo, email, contraseña)
    VALUES('$nombre_completo', '$email', '$contraseña')";   

 $ejecutar = mysqli_query($conexion, $query);

