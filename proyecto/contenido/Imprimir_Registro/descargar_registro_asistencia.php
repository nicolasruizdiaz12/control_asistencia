<?php
//Incluir la conexion a la BD

include('conexion.php');
///Consulta a la BD 
$registro = "SELECT * FROM registro r inner join usuario u on (r.id_usuario = u.id_usuario) order by r.fecha_Asistencia";
$resAsistencia = $conexion->query($registro);

?>

<html lang="es">

<head>
    <title>Desacargar Excel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

<body>
    <header>
        <div class="alert alert-info">
            <h2 style="text-align: center;">Descargar Registro Asistencia</h2>
        </div>
    </header>
    <section>
        <table class="table table-bordered">
            <tr class="bg-primary">
                <th>Apellido y Nombre</th>
                <th>Asistencia</th>
                <th>Fecha</th>
                <th>Hora</th>
            </tr>
            <?php
            while ($registroAsistencia = $resAsistencia->fetch_array(MYSQLI_BOTH)) {

                echo '<tr>
            <td class="success">' . $registroAsistencia['nombre'] . '</td>
            <td>' . $registroAsistencia['asistencia'] . '</td>
            <td>' . $registroAsistencia['fecha_Asistencia'] . '</td>
            <td>' . $registroAsistencia['hora'] . '</td>
            </tr>';
            }
            ?>
        </table>
    </section>


    <div style="text-align: center;">
        <form method="post" class="form" action="reporteAsistencia.php">
            <p><b>Desde:</b></p>
            <input type="date" name="fecha1">
            <br> <br>
            <p><b>Hasta:</b></p>
            <input type="date" name="fecha2">
            <br><br>
            <button type="botton" class="btn btn-success" name="generar_registro">Descargar</button>
        </form>
    </div>




</body>

</html>