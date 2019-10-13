<?php

include("conexion.php");

//Se selecciona el id del alumno que se desea modificar
$id=$_REQUEST['id_dispositivos'];

$compu= $_POST['mac_compu'];
$celular= $_POST['mac_celu'];

//Se procede la accion de modificar en cada unos de los campos
$query="UPDATE dispositivos SET mac_compu='$compu', mac_celu='$celular' WHERE id_dispositivos='$id'";
mysqli_close($conexion);
$resultado= $conexion->query($query);

//Una vez realizado la modificacion, se direcciona a la lista de alumnos actualizada
if($resultado){
    header("location: ../dispositivos.php");
}
else{
    echo "Error de Registro";
}

?>