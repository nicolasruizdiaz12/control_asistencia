<?php

include('conexion.php');//conexion a la BD

$fecha1=$_POST['fecha1'];
$fecha2=$_POST['fecha2'];

if(isset($_POST['generar_registro']))
{
    //Nombre del archivo y charset, con el cual se va a imprimir
    //header('Content-Type:text/csv; charset=utf-8');
    //header('Content-Disposition: attachment; filename="Registro de Asistencia.csv"');
    header('Content-type: application/vnd.ms-excel;charset=latin1');
    header('Content-Disposition: attachment; filename="Registro de Asistencia.xls"');

    //Salida del archivo 
    $salida=fopen('php://output', 'w');
    //Encabezado
    fputcsv($salida, array('Nombre y Apellido', 'ASISTENCIA',   'FECHA',   'HORA'),chr(9));
    //Query para crear el reporte
    $reporteCsv=$conexion->query("SELECT U.nombre, TR.tipo_asistencia, R.hora_registro FROM registro R 
    INNER JOIN  usuario U on R.id_usuario = U.id_usuario
    INNER JOIN tipo_asistencia TR on TR.id_tipo_asistencia = R.id_tipo_asistencia
    WHERE r.fecha_registro BETWEEN '$fecha1' AND '$fecha2' ORDER BY fecha_registro");
    while($filaR = $reporteCsv->fetch_assoc()){

        fputcsv($salida, array($filaR['nombre'],
        $filaR['tipo_asistencia'],
        $filaR['fecha_registro'],
        $filaR['hora_registro']),chr(9));
    }
    
}

