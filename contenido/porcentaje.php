<?php

session_start();
$mysqli = new mysqli("localhost", "root", "", "registro_asistencia");
include "homeAlumno/mac/conexion.php";
$id_usuario = $_SESSION['id_usuario'];
$nombre = $_SESSION['nombre'];
$usuario = $_SESSION['nombre'];


$CantPresente = "SELECT COUNT(id_tipo_asistencia) presente, id_usuario FROM registro WHERE id_tipo_asistencia = '2' and id_usuario = '49'";
$result = mysqli_query($mysqli, $CantPresente);
$presentes = mysqli_fetch_assoc($result);
echo 'Cantidad Presente: ' . $presentes['presente'] . '<br>';

$CantAusente = "SELECT COUNT(id_tipo_asistencia) ausente, id_usuario FROM registro WHERE id_tipo_asistencia = '1' and id_usuario = '49'";
$result = mysqli_query($mysqli, $CantAusente);
$ausentes = mysqli_fetch_assoc($result);
echo 'Cantidad Ausentes: ' . $ausentes['ausente'] . '<br>';


$CantDias = "SELECT COUNT(fecha_registro) as cant_fechas, id_usuario from registro GROUP by id_usuario";
$result = mysqli_query($mysqli, $CantDias);
$dias = mysqli_fetch_assoc($result);
echo 'Clases Dictadas: ' . $dias['cant_fechas'] . '<br>';


$Porcentaje = ($presentes['presente'] * 100) / $dias['cant_fechas'];
echo 'Porcentaje Asistencia: ' . $Porcentaje . '% <br>';

$Presente = "select nombre
, (select count(*) from registro where  id_tipo_asistencia = 1 And fecha_registro BETWEEN '2019-01-01' and '2019-12-31'
                                     And registro.id_usuario = usuario.id_usuario) Cant_Presentes";
$result = mysqli_query($mysqli, $Presente);
$presentes = mysqli_fetch_assoc($result);

?>

