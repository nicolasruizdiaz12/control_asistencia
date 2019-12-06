<?php

include("conexion.php");

//Se crean c/u de las variables con el metodo post para enviar los datos a la BD
$nombreCarrera= $_POST['nombreCarrera'];

//Se inserta a la BD cada uno de los datos ingresado en el formulario
$query="INSERT INTO carrera(nombreCarrera) VALUES('$nombreCarrera')";
$resultado= $conexion->query($query);

if($resultado){
    echo "<script type='text/javascript'> alert('Agregado con Exito') </script>";
    header("location: ../cargarCarrera.php");
}
else{
    echo "Error de Registro";
}

?>