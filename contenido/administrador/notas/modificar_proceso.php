<?php

include("conexion.php");

//Se selecciona el id del alumno que se desea modificar
$id_nota=$_REQUEST['id_nota'];

$id_cerrera= $_POST['id_carrera'];
$id_periodo= $_POST['id_periodo'];
$id_materia= $_POST['id_materia'];
$promedio= $_POST['promedio'];
$id_usuario= $_POST['id_usuario'];

//Se procede la accion de modificar en cada unos de los campos
$query="UPDATE nota SET id_carrera='$id_carrera', id_periodo='$id_periodo', id_materia='$id_materia', promedio='$promedio', id_usuario='$id_usuario' WHERE id_nota='$id_nota'";
mysqli_close($conexion);
$resultado= $conexion->query($query);

//Una vez realizado la modificacion, se direcciona a la lista de alumnos actualizada
if($resultado){
    header("location: ../inicio.php");
}
else{
    echo "Error de Registro";
}

?>