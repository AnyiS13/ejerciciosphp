<?php
    if(isset($_GET['nombre']))
    echo "El nombre es: ", $_GET['nombre'];
else
    echo "No llego!!!";
$nombre = $_GET['nombre'] ?? 'nada'; 
echo "<br>";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        Hola <?= $nombre ?> que tengas un bonito dia.
        <br>
        <a href="../saluda">Regresar</a>
    </body>
</html>