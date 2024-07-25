<?php
    try{
        $conexion = new PDO("mysql:host=localhost","root","");
        echo "Se ha establecido una conexion con el servidor de base de datos <br>";
    } catch (PDOException $e){
        echo "No se ha podido establecer una conexion con el servidor de base de datos <br>";
        die("Error: ".$e->getMessage());
    }
?>