<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planilla</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
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
    ?> 

    <!--Tabla de contenido-->
    <div>
        <table border=1px>
            <!--Encabezado de la tabla-->
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
            <!--Agrega el contenido del array a la tabla-->
            <?php
                $planilla_alumnos = userInformation();
                $mostrar_tabla = mostrar_tabla_principal( $planilla_alumnos );
                echo $mostrar_tabla;
            ?>
        </table>
    </div>

    <!--Listado de Información de los alumnos-->
    <!--Formato de lista desordenado-->
    <div>
        <ul>
            <?php
                $list = studentInformation();
                $mostrar_lista = mostrar_lista_datos( $list );
                echo $mostrar_lista;
            ?>
        </ul>
    </div>

    <!--Tal parece que no es necesario mostrar esta tabla-->
    <!--Tabla de Parciales-->
    <!--<div>
        <table border=1px>
            <tr>
                <th>ID</th>
                <th>Parcial 1</th>
                <th>Parcial 2</th>
                <th>Recuperatorio</th>
            </tr>
            <?php
                /* $notaParciales = nota_parciales();
                $mostrar_tabla_Parciles = mostrar_tabla_parciales( $notaParciales );
                echo $mostrar_tabla_Parciles; */
            ?>
        </table>
    </div>-->

    <!--Tabla para los porcentajes de libres, regulares y promocionales-->
    <div>
        <table class="porce">
            <tr>
                <td>% Libres</td>
                <?php echo '<td>'.$libres.'</td>' ?>
            </tr>
            <tr>
                <td>% Regulares</td>
                <?php echo '<td>'.$regulares.'</td>' ?>
            </tr>
            <tr>
                <td>% Promocionales</td>
                <?php echo '<td>'.$promocionales.'</td>' ?>
            </tr>
        </table>
    </div>
</body>
</html>