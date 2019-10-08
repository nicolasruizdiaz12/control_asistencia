<?php
//Incluir la conexion a la BD

include('conexion.php');
///Consulta a la BD 
$alumno="SELECT * FROM alumno order by ID";
$resAlumnos=$conexion->query($alumno);

?>

<html lang="es">
    <head>
        <title>Desacargar Excel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1"/>
        <link href="css/estilos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>
        <header>
            <div class="alert alert-info">
                <h2>Descargar Registros de Asistencias</h2>
        </div>
    </header>
    <section>
        <table class="table">
            <tr class="bg-primary">
            <th>Id</th>
            <th>Apellido y Nombre</th>
            <th>D.N.I</th>
            <th>Email</th>
            <th>Domicilio</th>
            <th>Telefono</th>
            <th>F_Nacimiento</th>
    </tr>
    <?php
    while ($registroAlumnos = $resAlumnos ->fetch_array(MYSQLI_BOTH)){

        echo'<tr>
            <td>'.$registroAlumnos['ID'].'</td>
            <td>'.$registroAlumnos['Nombre_Apellido'].'</td>
            <td>'.$registroAlumnos['DNI'].'</td>
            <td>'.$registroAlumnos['Email'].'</td>
            <td>'.$registroAlumnos['Domicilio'].'</td>
            <td>'.$registroAlumnos['Telefono'].'</td>
            <td>'.$registroAlumnos['F_Nacimiento'].'</td>
            </tr>';
    }
    ?>
    </table>
    </section>

    <div>
    <form method="post" class="form" action="reporte.php">
    <p>Desde</p>
    <input type="date" name="fecha1">
    <p>Hasta</p>
    <input type="date" name="fecha2">
    <input type="submit" name="generar_informe">
    </form>
    </div>

    </body>
    </html>