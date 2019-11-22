<?php

session_start();
include "homeAlumno/mac/conexion.php";
$id_usuario = $_SESSION['id_usuario'];
$nombre = $_SESSION['nombre'];
$usuario = $_SESSION['nombre'];

//fecha y hora de registro
date_default_timezone_set('america/argentina/buenos_aires');
$fechahoy = date("Y-m-d");
$hora = date("H:i:s");

$query = "Select * From usuario Where id_usuario = '$id_usuario' and id_tipo_usuario = '2'";

$consulta = mysqli_query($conexion, $query);
if (mysqli_num_rows($consulta) > 0) {
    $repetido = "SELECT * FROM registro where id_tipo_asistencia = '1' and fecha_registro = '$fechahoy'";
    $resultado = mysqli_query($conexion, $repetido);
    if (mysqli_num_rows($resultado) > 0) {
        echo json_encode(array('estado' => 'repetido'), JSON_FORCE_OBJECT);
    } else {
        $query1 = "INSERT INTO registro 
        SELECT NULL, 1, '$fechahoy', '$hora', id_usuario from usuario where usuario.id_tipo_usuario = '1'";
        $consulta = $conexion->query($query1);
        echo json_encode(array('estado' => 'ok'), JSON_FORCE_OBJECT);
    }
} else {
    echo json_encode(array('estado' => 'error'), JSON_FORCE_OBJECT);
}

$conexion->close();
?>