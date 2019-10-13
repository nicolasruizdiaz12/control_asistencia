<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guardar Mac</title>
    <link href="css/estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

<body>
    <header>
        <div class="alert alert-info">
            <h2>Modificar Dirección Mac</h2>
        </div>
    </header>
    <div id="formulario" style="text-align:center;">

            <?php

            $id_dispositivos= $_REQUEST['id_dispositivos'];

            include("conexion.php");

            $query = "SELECT * FROM dispositivos WHERE id_dispositivos='$id_dispositivos'";
            mysqli_close($conexion);
            $resultado = $conexion->query($query);
            $row = $resultado->fetch_assoc();

            ?>
            <form action="modificar_proceso.php?id_dispositivos=<?php echo $row['id_dispositivos'] ?>" method="POST">
                <table class="table" id="table">
                    <td><input type="text" required name="mac_compu" id="mac_compu" placeholder="MAC Compu..." value="<?php echo $row['mac_compu']; ?>" /> </td>
                    <td> <input type="varchar" required name="mac_celu" id="mac_celu" placeholder="MAC Celular..." value="<?php echo $row['mac_celu']; ?>" /></td>
                </table>
                <br>
                <input class="btn-primary align-items-center" type="submit" value="Guardar Dispositivo">
            </form>
    </div>

</body>

</html>