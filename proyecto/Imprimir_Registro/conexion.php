<?php

$host="localhost";
$usuario="root";
$contraseña="";
$base="asistencias";

$conexion= new mysqli($host, $usuario, $contraseña, $base);
if ($conexion -> connect_errno){

    die("Fallo la Conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}

?>