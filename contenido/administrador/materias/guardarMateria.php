<?php

include("conexion.php");

//Se crean c/u de las variables con el metodo post para enviar los datos a la BD
$nombreMateria= $_POST['nombreMateria'];
$nombreProfe= $_POST['nombreProfe'];
$cuilProfe= $_POST['cuilProfe'];
$id_carrera= $_POST['id_carrera'];

//Se inserta a la BD cada uno de los datos ingresado en el formulario
$query="INSERT INTO materia(nombre_materia,id_carrera) VALUES('$nombreMateria','$id_carrera')";
$query="INSERT INTO profesor(nombre_profe,cuil_profe) VALUES('$nombreProfe','$cuilProfe')";
$resultado= $conexion->query($query);

if($resultado){
    echo "<script type='text/javascript'> alert('Agregado con Exito') </script>";
    header("location: ../inicioAdmin.php");
}
else{
    echo "Error de Registro";
}

?>