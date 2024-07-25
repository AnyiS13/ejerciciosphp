<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Array bidimencional</title>
</head>
<body>
    <?php
        $persona = array(
            array(
                "nombre" => "Rosa",
                "estatura" => 168,
                "sexo" => "F"
            ),
            array(
                "nombre" => "Ignacio",
                "estatura" => 175,
                "sexo" => "M"
            ),
            array(
                "nombre" => "Daniel",
                "estatura" => 172,
                "sexo" => "M"
            ),
            array(
                "nombre" => "Rubén",
                "estatura" => 182,
                "sexo" => "M"
            ),
        );
        echo "nombre ", $persona[0]['nombre'], ", estatura ", $persona[0]['estatura'], ", sexo ",  $persona[0]['sexo'], ". <br> ";

        echo "<br>DATOS SOBRE EL PERSONAL</br><br><hr>";
        $numPersonas = count($persona);
        for($i=0; $i < $numPersonas; $i++){
            echo "Nombre: <b>" ,$persona[$i]['nombre'],"</b><br>";
            echo "Estatura: <b>" ,$persona[$i]['estatura'],"</b><br>";
            echo "Sexo: <b>" ,$persona[$i]['sexo'],"</b><br><hr>";
        }
    ?>
</body>
</html>