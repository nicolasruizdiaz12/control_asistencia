<?php

include("conexion.php");

//Se selecciona el id del alumno que se desea modificar
$id_alumno=$_REQUEST['id_alumno'];

$nombre= $_POST['nombre'];
$cuil= $_POST['cuil'];
$fecha= $_POST['fecha'];
$domicilio= $_POST['domicilio'];
$email= $_POST['email'];

//Se procede la accion de modificar en cada unos de los campos
$query="UPDATE usuarios SET nombre='$nombre', cuil='$cuil', fecha='$fecha', domicilio='$domicilio', email='$email' WHERE id_alumno='$id_alumno'";
$resultado= $conexion->query($query);

//Una vez realizado la modificacion, se direcciona a la lista de alumnos actualizada
if($resultado){
    header("location: ../Alumnos.php");
}
else{
    echo "Error de Registro";
}

?>