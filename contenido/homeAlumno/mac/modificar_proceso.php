<?php

include("conexion.php");

//Se selecciona el id del alumno que se desea modificar
$id_mac=$_REQUEST['id_mac'];

$compu= $_POST['mac_compu'];
$celular= $_POST['mac_celu'];

//Se procede la accion de modificar en cada unos de los campos
$query="UPDATE mac_dispositivo SET mac_compu='$compu', mac_celu='$celular' WHERE id_mac='$id_mac'";
$resultado= $conexion->query($query);
mysqli_close($conexion);

//Una vez realizado la modificacion, se direcciona a la lista de alumnos actualizada
if($resultado){
    header("location: ../../direccionMac.php");
}
else{
    echo "Error de Registro";
}

?>