<?php 
     try{
        $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8","root","");
   } catch(PDOException $e){
        echo "No se ha podido establecer conexion con el servidor de bases de datos.<br>";
        die("Error: ".$e->getMessage());
   }

   $consulta = $conexion->query("SELECT dni FROM cliente WHERE dni = '".$_POST['cedula']."'");
   //echo "SELECT dni FROM cliente WHERE dni = '".$_POST['dni']."'";
   if($consulta->rowCount() > 0){
        echo "Ya existe un cliente con el DNI ".$_POST['cedula']."<br> Por favor, vuelva  a diligenciar el formulario de clientes.<br>";
        echo "<br><a href='formularioCliente.php'>Volver al Formulario Clientes</a>";
   } else {
    $insercion = "INSERT INTO cliente (dni, nombre, direccion, telefono) VALUES ('$_POST[cedula]','$_POST[nombre]','$_POST[direccion]','$_POST[telefono]')";
    $conexion->exec($insercion);
    echo "Cliente dado de alta correctamente<br>";
    echo "<a href='listadoClientes.php'>Volver</a>";
   }
?>