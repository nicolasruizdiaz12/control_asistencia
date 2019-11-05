<?php
    session_start();
    include "homeAlumno/mac/conexion.php";
    $id_usuario = $_SESSION['id_usuario'];
    $nombre = $_SESSION['nombre'];
    $usuario = $_SESSION['nombre'];
    $presente = 'Presente';
    $ausente = 'Ausente';
    //fecha y hora de registro
    date_default_timezone_set('america/argentina/buenos_aires');
    $fechahoy = date("Y-m-d");
    $hora = date ("H:i:s");

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
        echo json_encode(array('estado' => 'ok', 'mac' => $macRed, 'nombre' => $nombre),
        $query1="INSERT INTO registro(asistencia, fecha_Asistencia, hora, id_usuario) VALUES('$presente','$fechahoy', '$hora','$id_usuario')",
        $resultado= $conexion->query($query1),JSON_FORCE_OBJECT);

    } else {
        echo json_encode(array('estado' => 'error', 'mac' => $macRed, 'nombre' => $nombre),
        $query2="INSERT INTO registro(asistencia, fecha_Asistencia, hora, id_usuario) VALUES('$ausente','$fechahoy','$hora','$id_usuario')",
        $resultado= $conexion->query($query2),JSON_FORCE_OBJECT);

    }

?>