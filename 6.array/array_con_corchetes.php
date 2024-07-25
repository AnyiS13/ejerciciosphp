<?php
    $color = [
        "verde",
        "amarillo",
        "rojo",
        "azul",
        "blanco",
        "gris",
        "negro"
    ];
    echo "Mañana me pongo una camiseta de color ", $color[3],"<br>";
    echo "Mañana me pongo una camiseta de color ", $color[rand(0,6)],"<br>"; //funcion rand() genera un valor al azar segun el rango indicado
?>