<?php

include("conexion.php");

//Se selecciona el id del alumno que se desea modificar
$id_carrera=$_REQUEST['id_carrera'];

$nombreCarrera= $_POST['nombreCarrera'];

//Se procede la accion de modificar en cada unos de los campos
$query="UPDATE carrera SET nombreCarrera='$nombreCarrera' WHERE id_carrera='$id_carrera'";
$resultado= $conexion->query($query);

//Una vez realizado la modificacion, se direcciona a la lista de alumnos actualizada
if($resultado){
    header("location: ../cargarCarrera.php");
}
else{
    echo "Error de Registro";
}
