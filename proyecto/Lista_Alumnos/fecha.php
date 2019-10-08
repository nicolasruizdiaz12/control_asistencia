<?php

 $fecha= $_POST['fecha'];

 $query="INSERT INTO registro(Fecha) VALUES('$fecha')";
$resultado= $conexion->query($query);

if($resultado){
    header("location: registro.php");
}
else{
    echo "Error de Registro";
}

 ?>