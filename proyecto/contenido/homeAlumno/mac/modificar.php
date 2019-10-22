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

        $id_mac = $_REQUEST['id_mac'];

        include("conexion.php");

        $query = "SELECT * FROM mac_dispositivo WHERE id_mac='$id_mac'";
        $resultado = $conexion->query($query);
        $row = $resultado->fetch_assoc();
        mysqli_close($conexion);

        ?>
        <div class="card-body">
            <div class="table-responsive">
                <form action="modificar_proceso.php?id_mac=<?php echo $row['id_mac'] ?>" method="POST">
                    <table class="table table-bordered" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="danger" COLSPAN="2" align="center"><b>Dispositivos</b></td>
                            </tr>
                            <tr class="success">
                                <th style="text-align:center;">MAC Computadora</th>
                                <th style="text-align:center;">MAC Celular</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="warning">
                                <td><input type="text" required name="mac_compu" id="mac_compu" placeholder="   MAC Compu..." value="<?php echo $row['mac_compu']; ?>" /> </td>
                                <td> <input type="varchar" required name="mac_celu" id="mac_celu" placeholder="  MAC Celular..." value="<?php echo $row['mac_celu']; ?>" /></td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <input class="btn-primary align-items-center" type="submit" value="Guardar Dispositivo">
                </form>
            </div>

        </div>

    </div>

</body>

</html>