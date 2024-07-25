<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sobrecarga</title>
</head>
<body>
    <?php
    include_once "funciones.php";
    //include llama un archivo lo carga en la pagina pero si contiene errores muestra un warning y permite el funcionamiento del documento
    //require es similar al include pero en este caso si el archivo contiene errores el programa no funcionara y mostrara un fatal error en el log
    //el include_once y require_once funcionan igual que lo anteriormente descrito pero evitan la carga del fichero varias veces.

    echo opera(2)."<br>";
    echo opera(2,3)."<br>";
    echo opera(2,3,10)."<br>";
    echo opera2(10,20)."<br>";
    echo opera2("melon","sandia")."<br>";
    ?>
</body>
</html>