<?php

include("conexion.php");

//Se selecciona el id del alumno que se desea eliminar
$id_carrera=$_REQUEST['id_carrera'];

//Se ejecuta la funcion de eliminar el id seleccionado
$query="DELETE FROM carrera WHERE id_carrera='$id_carrera'";
$resultado= $conexion->query($query);

//Luego de ejecutarse la funcion de eliminar. Nos envia a la lista de alumnos actualizada.

if($resultado){
    header("location: ../cargarCarrera.php");
}
else{
    echo "Error de Ejecución";
}

?>