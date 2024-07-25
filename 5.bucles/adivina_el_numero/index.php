<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adivina el numero</title>
</head>
<body>
    Adivina el numero que estoy pensando
    <form action="adivina.php" method="post">
        <input type="hidden" name="numeroIntroducido" value="20"> <!--tipo hidden envia valores ocultos-->
        <input type="hidden" name="oportunidades" value="5">
        <input type="submit" value="continuar">
    </form>
</body>
</html>