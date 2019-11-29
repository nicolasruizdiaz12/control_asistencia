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

//trae la direccion mac del dispositivo con el que ingresa al sistema
//echo 'IP: ' . $_SERVER['REMOTE_ADDR'] .  '<br>';
$macs = explode(' ', shell_exec('arp -a ' . $_SERVER['REMOTE_ADDR']));
foreach ($macs as $mac) {
    if (filter_var($mac, FILTER_VALIDATE_MAC) !== FALSE) {
        $macRed = strtoupper($mac);
        break;
    }
}

//consulta de la mac del dispositivo registrado por el alumno 

$query = "Select * From mac_dispositivo 
                Where id_usuario = '$id_usuario' 
                    And (upper(mac_compu) = '$macRed' or upper(mac_celu) = '$macRed')";

$consulta = mysqli_query($conexion, $query);
if (mysqli_num_rows($consulta) > 0) {
    $repetido = "SELECT * FROM registro where id_usuario = '$id_usuario' and fecha_registro = '$fechahoy' and id_tipo_asistencia = 2";
    $resultado = mysqli_query($conexion, $repetido);
    if (mysqli_num_rows($resultado) > 0) {
        echo json_encode(array('estado' => 'repetido', 'mac' => $macRed, 'nombre' => $nombre), JSON_FORCE_OBJECT);
    } else {
        $query1 = "UPDATE registro SET id_tipo_asistencia = 2, hora_registro = '$hora' WHERE  id_usuario = '$id_usuario' and id_tipo_asistencia = 1 and fecha_registro = '$fechahoy'";
        $resultado = $conexion->query($query1);

        if ($conexion->affected_rows > 0) {
            echo json_encode(array('estado' => 'ok', 'mac' => $macRed, 'nombre' => $nombre), JSON_FORCE_OBJECT);
        } else {
            echo json_encode(array('estado' => 'inhabilitado', 'mac' => $macRed, 'nombre' => $nombre), JSON_FORCE_OBJECT);
        }
            
    }
} else {
    echo json_encode(array('estado' => 'error', 'mac' => $macRed, 'nombre' => $nombre), JSON_FORCE_OBJECT);
}

?>