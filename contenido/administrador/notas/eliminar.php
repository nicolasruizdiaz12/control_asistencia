<?php

include("conexion.php");

//Se selecciona el id del alumno que se desea eliminar
$id_nota=$_REQUEST['id_nota'];

//Se ejecuta la funcion de eliminar el id seleccionado
$query="DELETE FROM nota WHERE id_nota='$id_nota'";
mysqli_close($conexion);
$resultado= $conexion->query($query);

//Luego de ejecutarse la funcion de eliminar. Nos envia a la lista de alumnos actualizada.

if($resultado){
    header("location: ../inicio.php");
}
else{
    echo "Error de Registro";
}

?>