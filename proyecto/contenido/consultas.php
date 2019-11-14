<?php
    session_start();
    include "homeAlumno/mac/conexion.php";
    $id_usuario = $_SESSION['id_usuario'];
    $nombre = $_SESSION['nombre'];
    $usuario = $_SESSION['nombre'];
    $ausente = '1';
    $presente = '2';
    //fecha y hora de registro
    date_default_timezone_set('america/argentina/buenos_aires');
    $fechahoy = date("Y-m-d");
    $hora = date ("H:i:s");


 //Trae el id de los alumnos
    $query = "SELECT id_usuario from usuario where usuario.id_tipo = '1'";
    $resultado = $conexion->query($query);
	while ($row = $resultado->fetch_assoc()) {

    
        echo $id = $row['id_usuario'];
        if(mysqli_num_rows($resultado) > 0){
            $query2="INSERT INTO registro(id_asistencia, fecha_Asistencia, hora, id_usuario) VALUES('$ausente','$fechahoy','$hora','$id')";
            $resultado= $conexion->query($query2);
            echo "se registro";
            
        }
       
    }


?>