<?php

include("conexion.php");

//Se selecciona el id del alumno que se desea eliminar
$id_usuario=$_REQUEST['id_usuario'];

//Se ejecuta la funcion de eliminar el id seleccionado
$query="DELETE FROM usuario WHERE id_usuario='$id_usuario'";
$resultado= $conexion->query($query);

//Luego de ejecutarse la funcion de eliminar. Nos envia a la lista de alumnos actualizada.

if($resultado){
    header("location: ../listaAlumnos.php");
}
else{
    echo "Error de Registro";
}

?>