<?php

include("conexion.php");

//Se selecciona el id del alumno que se desea modificar
$id=$_REQUEST['ID'];

$nombre= $_POST['nombre'];
$dni= $_POST['dni'];
$email= $_POST['email'];
$domicilio= $_POST['domicilio'];
$telefono= $_POST['telefono'];
$fecha= $_POST['fecha'];

//Se procede la accion de modificar en cada unos de los campos
$query="UPDATE alumno SET Nombre_Apellido='$nombre', DNI='$dni', Email='$email', Domicilio='$domicilio', Telefono='$telefono', F_Nacimiento='$fecha' WHERE ID='$id'";
$resultado= $conexion->query($query);

//Una vez realizado la modificacion, se direcciona a la lista de alumnos actualizada
if($resultado){
    header("location: ../Alumnos.php");
}
else{
    echo "Error de Registro";
}

?>