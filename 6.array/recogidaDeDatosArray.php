<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recogida de datos para Array</title>
</head>
<body>
    <?php
    if(isset($_GET['n'])){
        $n = $_GET['n'];
        $ContadorNumeros = $_GET['ContadorNumeros'];
        $numeroTexto = $_GET['numeroTexto'];
    }
    if(!isset($_GET['n'])){
        $ContadorNumeros = 0;
        $numeroTexto = "";
    }
    //guardar los numeros introducidos
    if($ContadorNumeros == 6){
        $numeroTexto = $numeroTexto . " ". $n; //añade el ultimo numero ingresado
        $numeroTexto = substr($numeroTexto, 2); //quita los dos primeros espacios de la cadena
        echo "<hr>";
        echo $numeroTexto;
        echo "<hr>";
        $numero = explode(" ", $numeroTexto);
        echo "<pre>";
        print_r($numero);
        echo "</pre>";
        echo "<hr>";
        echo"Los numeros introducidos son: <br>";
        foreach($numero as $n){
            echo $n ,", ";
            echo "<hr>";
        }
    }
    if(($ContadorNumeros < 6) || (!isset($n))){
        ?>
    <form action="#" method="get">
        Introduzca un numero:
        <input type="number" name="n" autofocus>
        <input type="hidden" name="ContadorNumeros" value="<?= ++$ContadorNumeros ?>">
        <input type="hidden" name="numeroTexto" value="<?php if(isset($n)) echo $numeroTexto ." ". $n; else echo $numeroTexto . " ";?>">
        <input type="submit" value="OK">
    </form>
    <?php
    }
    ?>

</body>
</html>