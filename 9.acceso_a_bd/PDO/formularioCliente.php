<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alta de Clientes</title>
</head>
<body>
    <h1>Base de Datos <u>Banco</u></h1>
    <h2>Alta de Clientes</h2>
    <form action="altaCliente.php" method="post">
        Identificacion: <input type="text" name="cedula" required><br>
        Nombre: <input type="text" name="nombre" required><br>
        Direccion: <input type="text" name="direccion" required><br>
        Telefono: <input type="tel" name="telefono" required><br>
        <input type="submit" value="Enviar"><br>
    </form><br>
    <a href="listadoClientes.php">Regresar</a>
</body>
</html>