<?php
//Incluir la conexion a la BD

include('conexion.php');
///Consulta a la BD 
$alumno="SELECT * FROM usuario order by id_usuario";
$resAlumnos=$conexion->query($alumno);

?>

<html lang="es">
    <head>
        <title>Desacargar Excel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>
        <header>
            <div class="alert alert-info">
                <h2 style="text-align: center;">Descargar Lista de Alumnos</h2>
        </div>
    </header>
    <section>
        <table class="table table-bordered">
            <tr class="bg-primary">
            <th>Apellido y Nombre</th>
            <th>CUIL</th>
            <th>Fecha Nac</th>
            <th>Domicilio</th>
            <th>Email</th>
    </tr>
    <?php
    while ($registroAlumnos = $resAlumnos ->fetch_array(MYSQLI_BOTH)){

        echo'<tr>
            <td class="success">'.$registroAlumnos['nombre'].'</td>
            <td>'.$registroAlumnos['cuil'].'</td>
            <td>'.$registroAlumnos['fecha'].'</td>
            <td>'.$registroAlumnos['domicilio'].'</td>
            <td>'.$registroAlumnos['email'].'</td>
            </tr>';
    }
    ?>
    </table>
    </section>

    <div align="center" >
    <div class="center-block">
    <form method="post" class="form" action="reporte.php">
    <br><br>
    <button type="botton" class="btn btn-success" name="generar_informe">Descargar</button>
    </form>
    </div>
    </div>

   

    </body>
    </html>