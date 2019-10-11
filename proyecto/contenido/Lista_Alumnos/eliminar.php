<?php

include("conexion.php");

//Se selecciona el id del alumno que se desea eliminar
$id=$_REQUEST['id'];

//Se ejecuta la funcion de eliminar el id seleccionado
$query="DELETE FROM usuarios WHERE id='$id'";
$resultado= $conexion->query($query);

//Luego de ejecutarse la funcion de eliminar. Nos envia a la lista de alumnos actualizada.

if($resultado){
    header("location: ../Alumnos.php");
}
else{
    echo "Error de Registro";
}

?>