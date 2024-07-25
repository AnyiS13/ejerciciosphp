<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Adivina el numero</title>
    </head>
    <body>
        <?php
        $oportunidades = $_POST['oportunidades'];
        $numeroIntroducido = $_POST['numeroIntroducido'];
        $numeroSecreto = 17;
        if($numeroIntroducido == $numeroSecreto)
            echo "Felicitaciones has acertado el numero";
        else{
            if($oportunidades == 0)
                echo "Lo siento, has agotado todas tus oportunidades. Has perdido";
            else{
                if($numeroIntroducido != $numeroSecreto){
                    if($numeroSecreto > $numeroIntroducido)
                        echo "El numero que estoy pensando es mayor que el numero que has introducido <br>";
                    else
                        echo "El numero que estoy pensando es menor que el numero que has introducido <br>";
                }
                ?>
                        Te quedan <?= $oportunidades-- ?> oportunidades para adivinar el numero<br>
                        Introduce un numero del 0 al 20 <br>
                        <form action="adivina.php" method="post">
                        <input type="number" name="numeroIntroducido"> <!--tipo hidden envia valores ocultos-->
                        <input type="hidden" name="oportunidades" value="<?=$oportunidades?>">
                        <input type="submit" value="continuar">
                    </form>
                <?php     
            }
        }
    ?>
    </body>
</html>