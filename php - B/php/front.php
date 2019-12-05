<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planilla</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
<body>

    <header>
        <h1>Taller de Lenguaje & Programación</h1>
    </header>
    <?php
        include "planilla.php";
        include "run.php";
        $parciales = nota_parciales();
        $suma = suma_notas( $parciales );
        $menor = menor_notar( $parciales );
        $promedio_Notas = promedio_notas( $suma, $menor );
        $array_asistencias = userInformation();
        $porcentaje_asistencias = promedio_asistencias( $array_asistencias );
        $condicion_estudiantes = condicion_alumno( $porcentaje_asistencias, $promedio_Notas );
        $libres = alumnos_libres( $porcentaje_asistencias, $promedio_Notas );
        $regulares = alumnos_regulares( $porcentaje_asistencias, $promedio_Notas );
        $promocionales = alumnos_promocionales( $porcentaje_asistencias, $promedio_Notas );
        $list = studentInformation();
    ?> 
    <section class="main">
        <div class="caja">
            <div class="titulo_caja"><p>Filtro por Nombre</p></div>
            <input type="text" name="filtrar" id="filtrar" placeholder="Escribar el nombre del alumno" style="height:30px; width: 300px;" >
        </div>
        <!--Tabla de contenido-->
        <div class="tabla_estudiantes">
            <table id="tabla" class="efecto" border=1px>
                <!--Encabezado de la tabla-->
                <thead>
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
                </thead>
                <tbody>
                    <!--Agrega el contenido del array a la tabla-->
                    <?php
                        $planilla_alumnos = userInformation(); //aqui llamo el contenido del array principal
                        $mostrar_tabla = mostrar_tabla_principal( $planilla_alumnos, $condicion_estudiantes );
                        echo $mostrar_tabla;
                    ?>
                </tbody>
            </table>
        </div>
        <!-- sideBar -->
        <div class="acordeon">
            <?php
                foreach( $list as $informacion => $estudiante )
                {
                    echo '<section class="panel">';
                    echo '<div class="cabecera">'.$informacion.'</div>';
                        foreach( $estudiante as $datos => $value )
                        {
                            echo '<div class="informacion">';
                            echo $datos.': ';
                                if( $value === true ){
                                    echo 'Ac';
                                }else if( $value === false ){
                                    echo '?';
                                }else{
                                    echo $value;
                                }
                            echo'</div>';
                        }
                    echo '</section>';
                }
            ?>       
        </div>

        <!--Tabla para los porcentajes de libres, regulares y promocionales-->
        <div>
            <table class="porcentaje">
                <tr>
                    <td>% Libres</td>
                    <?php echo '<td>'.$libres.'</td>'; ?>
                    <td>% Regulares</td>
                    <?php echo '<td>'.$regulares.'</td>'; ?>
                    <td>% Promocionales</td>
                    <?php echo '<td>'.$promocionales.'</td>'; ?>
                </tr>
            </table>
        </div>
    </section>
    <footer class="footer"><p>Alumno: Fernández, Jorge Antonio</p></footer>
    <script src="../jquery/jquery-3.4.1.min.js"></script>
    <script src="../js/sideBar.js"></script>
    <script src="../js/filtrar.js"></script>
</body>
</html>