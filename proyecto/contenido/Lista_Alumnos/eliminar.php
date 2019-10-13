<?php

include("conexion.php");

//Se selecciona el id del alumno que se desea eliminar
$id_alumno=$_REQUEST['id_alumno'];

//Se ejecuta la funcion de eliminar el id seleccionado
$query="DELETE FROM usuarios WHERE id_alumno='$id_alumno'";
$resultado= $conexion->query($query);

//Luego de ejecutarse la funcion de eliminar. Nos envia a la lista de alumnos actualizada.

if($resultado){
    header("location: ../Alumnos.php");
}
else{
    echo "Error de Registro";
}

?>