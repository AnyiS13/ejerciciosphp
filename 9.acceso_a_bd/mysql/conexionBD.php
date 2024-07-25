<?php
    $conexion = mysqli_connect("localhost","root","");
    if($conexion){
        echo "Se ha establecido una conexion con el servidor de base de datos.";
    } else {
        echo "No se ha podido establecer una cnexion con el servidor de base de datos.";
    }
?>