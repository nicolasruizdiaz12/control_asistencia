<?php

include("conexion.php");

//Se crean c/u de las variables con el metodo post para enviar los datos a la BD
$compu= $_POST['mac_compu'];
$celular= $_POST['mac_celu'];

//Se inserta a la BD cada uno de los datos ingresado en el formulario
$query="INSERT INTO dispositivos(mac_compu, mac_celu) VALUES('$compu','$celular')";
mysqli_close($conexion);
$resultado= $conexion->query($query);

if($resultado){
    header("location: ../dispositivos.php");
}
else{
    echo "Error de Registro";
}

?>