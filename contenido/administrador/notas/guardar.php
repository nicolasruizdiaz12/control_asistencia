<?php

include("conexion.php");

//Se crean c/u de las variables con el metodo post para enviar los datos a la BD
$id_cerrera= $_POST['id_carrera'];
$id_periodo= $_POST['id_periodo'];
$id_materia= $_POST['id_materia'];
$promedio= $_POST['promedio'];
$id_usuario= $_POST['id_usuario'];

//Se inserta a la BD cada uno de los datos ingresado en el formulario
$query="INSERT INTO nota(id_carrera, id_periodo, id_materia, promedio, id_usuario) VALUES('$id_carrera','$id_periodo','$id_materia','$promedio','$id_usuario')";
mysqli_close($conexion);
$resultado= $conexion->query($query);

if($resultado){
    header("location: ../inicio.php");
}
else{
    echo "Error de Registro";
}

?>