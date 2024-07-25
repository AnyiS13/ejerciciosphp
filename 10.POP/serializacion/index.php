<?php
    session_start();
    include_once 'MounstrodelasGalletas.class.php';
    if (!isset($_SESSION['coco'])){
        $_SESSION['coco'] = serialize(new MonstruoDeLasGalletas());
    }
    $coco =unserialize($_SESSION['coco']);
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mounstro come Galletas</title>
    </head>
    <body>
        <?php
            if(isset($_POST['numeroDeGalletas'])){
                $numeroDeGalletas = $_POST['numeroDeGalletas'];
                $coco->come($numeroDeGalletas);
            }
        ?>
        <h2>Soy Coco y he comido <?= $coco->getGalletas() ?> galletas</h2>
        <form action="index.php" method="post">
            No. de Galletas <br>
            <input type="number" name="numeroDeGalletas" min="1">
            <input type="submit" value="Comer">
        </form>
        <?php
            $_SESSION['coco'] = serialize($coco);
        ?>
    </body>
    </html>
