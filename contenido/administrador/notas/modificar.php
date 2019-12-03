<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guardar Alumnos</title>
    <link href="css/estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<header>
        <div class="alert alert-info">
        <h2>Ingresar Alumnos a la Lista</h2>
        </div>
</header>
<div id="formulario">
<center>
            
<?php

$id_nota=$_REQUEST['id_nota'];

include("conexion.php");

$query="SELECT * FROM nota WHERE id_nota='$id_nota'";
mysqli_close($conexion);
$resultado= $conexion ->query($query);
$row=$resultado->fetch_assoc();

?>
            <form action="modificar_proceso.php?id_nota=<?php echo $row['id_nota'] ?>" method="POST">
                <table class="table">
                    <td><input type="text" required name="nombre" id="nombre" placeholder="Apellido y Nombre..." value="<?php echo $row['nombre']; ?>"/> </td>
                    <td> <input type="varchar" required name="cuil" id="cuil" placeholder="CUIL..." value="<?php echo $row['dni']; ?>"/></td>
                    <td><input type="date" required name="fecha" id="fecha" placeholder="Fecha Nac..." value="<?php echo $row['fecha']; ?>"/></td> 
                    <td><input type="email" required name="email" id="email" placeholder="Domicilio..." value="<?php echo $row['domicilio']; ?>"/></td>   
                </table> 
                <br>
                <input type="submit" value="Guardar Nota">       
            </form>
</div>

</body>
</html>