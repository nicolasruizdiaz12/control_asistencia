<?php
session_start();
include("mac/conexion.php");

$id_usuario = $_SESSION['id_usuario'];

echo 'IP: ' . $_SERVER['REMOTE_ADDR'] . ' HOST: ' . $_SERVER['REMOTE_HOST'] . '<br>';
$salida = explode(' ', shell_exec('arp -a ' . $_SERVER['REMOTE_ADDR']));
echo 'MAC: ' . $salida[35];
print_r($salida);

$query = "SELECT * FROM mac_dispositivo";

$resultado = $conexion->query($query);
while ($row = $resultado->fetch_assoc()) {

   print_r($row);
}

?>