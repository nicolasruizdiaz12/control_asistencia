<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos Personales</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
    <?php include "planilla.php"; ?>
    <?php include "run.php"; ?>
    <?php 
        $list = studentInformation(); //array con el DNI, Tel... de los alumnos;
        $array_asistencias = userInformation(); //array con el contenido gral de los alumnos;
        $parciales = nota_parciales();
        $suma = suma_notas( $parciales );
        $menor = menor_notar( $parciales );
        $promedio_Notas = promedio_notas( $suma, $menor );
        $porcentaje_asistencias = promedio_asistencias( $array_asistencias );
        $condicion_estudiantes = condicion_alumno( $porcentaje_asistencias, $promedio_Notas );
        $libres = alumnos_libres( $porcentaje_asistencias, $promedio_Notas );
        $regulares = alumnos_regulares( $porcentaje_asistencias, $promedio_Notas );
        $promocionales = alumnos_promocionales( $porcentaje_asistencias, $promedio_Notas );
    ?>
    <?php $alumnoGet = $_GET['alumno']; ?>
    <header><h1>Datos Personales: <br><?php echo $alumnoGet; ?> </h1></header>
    <table>
    <table border=1px>
        <tr>
            <th rowspan="2">ID</th>
            <th rowspan="2">Apellido y Nombre</th>
            <th colspan="8">Fechas</th>
            <th rowspan="2">Condición</th>
            
        </tr>
        <tr class="date">
            <th>30/09</th>
            <th>06/10</th>
            <th>07/10</th>
            <th>13/10</th>
            <th>14/10</th>
            <th>20/10</th>
            <th>21/10</th>
            <th>27/10</th>
        </tr>

        <?php
            $alumnoGet = $_GET['alumno'];
            $i = 0;
            foreach( $array_asistencias as $id => $alumno )
            {
                $alumno['condicion'] = $condicion_estudiantes[$i];
                $i++;
                echo '<tr>';
                    if( $alumnoGet == $alumno['apellidoNombre'] ){
                        echo '<td>'.$id.'</td>';
                        echo '<td>'.$alumno['apellidoNombre'].'</td>';
                        foreach( $alumno['asistencias'] as $key => $asistencias )
                        {
                            echo '<td id="hola">';
                                if ( $asistencias === 0 ){
                                    echo 'A';
                                }else if( $asistencias === 1 ){
                                    echo 'P';
                                }else {
                                    echo $asistencias;
                                }
                            echo '</td>';
                        }
                        echo '<td>'.$alumno['condicion']. '</td>';
                    }
                echo '</tr>';  
            } 
        ?>
    </table>
    <div id="datos_personales">
        <ul>
            <?php
                foreach( $list as $nombre => $estudiante )
                {
                    if( $alumnoGet == $nombre ) {
                        echo '<ul>';
                            foreach( $estudiante as $nombre_valor => $value )
                            {
                                echo '<li>'.$nombre_valor.': ';
                                    if( $value === true ){
                                        echo 'Ac';
                                    }else if( $value === false ){
                                        echo '?';
                                    }else{
                                        echo $value;
                                    }
                                echo'</li>';
                            }
                        echo '</ul>';
                    }
                } 
            ?> 
        </ul>  
    </div> 
</body>
</html>