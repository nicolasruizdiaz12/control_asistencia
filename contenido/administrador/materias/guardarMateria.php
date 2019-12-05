<?php

include("conexion.php");

//Se crean c/u de las variables con el metodo post para enviar los datos a la BD
$nombreMateria= $_POST['nombreMateria'];
$entrada= $_POST['entrada'];
$salida= $_POST['salida'];
$id_carrera = '2';
//Se inserta a la BD cada uno de los datos ingresado en el formulario
$query="INSERT INTO materia(nombre_materia,hora_entrada, hora_salida, id_carrera) VALUES('$nombreMateria','$entrada','$salida', '$id_carrera')";
$resultado= $conexion->query($query);

if($resultado){
    echo "<script type='text/javascript'> alert('Agregado con Exito') </script>";
    header("location: ../inicioAdmin.php");
}
else{
    echo "Error de Registro";
}

?>