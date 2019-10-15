<?php

include("conexion.php");

//Se selecciona el id del alumno que se desea eliminar
$id_mac=$_REQUEST['id_mac'];

//Se ejecuta la funcion de eliminar el id seleccionado
$query="DELETE FROM mac_dispositivo WHERE id_mac='$id_mac'";
mysqli_close($conexion);
$resultado= $conexion->query($query);

//Luego de ejecutarse la funcion de eliminar. Nos envia a la lista de alumnos actualizada.

if($resultado){
    header("location: ../dispositivos.php");
}
else{
    echo "Error de Registro";
}

?>