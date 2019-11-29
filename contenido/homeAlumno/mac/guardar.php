<?php
session_start();
include("conexion.php");

//Se crean c/u de las variables con el metodo post para enviar los datos a la BD
$compu= $_POST['mac_compu'];
$celular= $_POST['mac_celu'];
$id_usuario = $_SESSION['id_usuario'];

//Se inserta a la BD cada uno de los datos ingresado en el formulario
$query="INSERT INTO mac_dispositivo(mac_compu, mac_celu, id_usuario) VALUES('$compu','$celular','$id_usuario')";
$resultado= $conexion->query($query);
mysqli_close($conexion);

if($resultado){
    header("location: ../../direccionMac.php");
}
else{
    echo "Error de Registro";
}

?>