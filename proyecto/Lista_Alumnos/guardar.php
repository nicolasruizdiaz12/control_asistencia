<?php

include("conexion.php");

//Se crean c/u de las variables con el metodo post para enviar los datos a la BD
$nombre= $_POST['nombre'];
$cuil= $_POST['cuil'];
$fecha= $_POST['fecha'];
$domicilio= $_POST['domicilio'];
$email= $_POST['email'];

//Se inserta a la BD cada uno de los datos ingresado en el formulario
$query="INSERT INTO usuarios(nombre, cuil, fecha, domicilio, email) VALUES('$nombre','$cuil','$fecha','$domicilio','$email')";
$resultado= $conexion->query($query);

if($resultado){
    echo "<script type='text/javascript'> alert('Agregado con Exito') </script>";
    header("location: ../Alumnos.php");
}
else{
    echo "Error de Registro";
}

?>