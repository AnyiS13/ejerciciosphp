<?php 
    if(isset($_POST['actriz'])){
        $actriz = $_POST['actriz'];
        $actor = $_POST['actor'];
        //crear cookies
        setcookie("actriz", $actriz, time() + 3600);
        setcookie("actor", $actor, time() + 3600);
    } else if(isset($_COOKIE['actriz'])){
        $actriz = $_COOKIE["actriz"];
        $actor = $_COOKIE["actor"];
    }
    //borrado de cookies y variables
    if(isset($_POST['borrarCookies'])){
        setcookie("actriz", NULL, -3600);
        setcookie("actor", NULL, -3600);
        unset($actriz);
        unset($actor);
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>actores</title>
    </head>
    <body>
        <?php
            if(!isset($actriz)){
                echo "No has elegido todavia a tus actores favoritos.<br>";
                echo "utiliza el siguiente formulario para hacerlo.<br>";
            } else {
                echo "<h2>Actriz favorita: ".$actriz." </h2>";
                echo "<h2>Actor favorito: ".$actor." </h2>";
                echo "Introduce nuevos nombres si quieres cambiar tus preferencias.<br>";
            }
        ?>
        <form action="#" method="post">
            Actriz: <input type="text" name="actriz"><br>
            Actor: <input type="text" name="actor"><br>
            <input type="submit" value="Aceptar">
        </form>
        <hr>
        <form action="#" method="post">
            <input type="hidden" name="borrarCookies" value="Si">
            <input type="submit" name="Borrar cookies">
        </form>
    </body>
</html>