<?php

include('conexion.php');//conexion a la BD

$fecha1=$_POST['fecha1'];
$fecha2=$_POST['fecha2'];

if(isset($_POST['generar_informe']))
{
    //Nombre del archivo y charset, con el cual se va a imprimir
    //header('Content-Type:text/csv; charset=utf-8');
    //header('Content-Disposition: attachment; filename="Registro de Asistencia.csv"');
    header('Content-type: application/vnd.ms-excel;charset=latin1');
    header('Content-Disposition: attachment; filename="Registro de Asistencia.xls"');

    //Salida del archivo 
    $salida=fopen('php://output', 'w');
    //Encabezado
    fputcsv($salida, array('ID', 'Nombre_Apellido', 'DNI',   'Email',   'Domicilio',   'Telefono',   'F_Nacimiento'),chr(9));
    //Query para crear el reporte
    $reporteCsv=$conexion->query("SELECT * FROM alumno WHERE F_Nacimiento BETWEEN '$fecha1' AND '$fecha2' ORDER BY ID");
    while($filaR = $reporteCsv->fetch_assoc()){

        fputcsv($salida, array($filaR['ID'],
        $filaR['Nombre_Apellido'],
        $filaR['DNI'],
        $filaR['Email'],
        $filaR['Domicilio'],
        $filaR['Telefono'],
        $filaR['F_Nacimiento']),chr(9));
    }
    
}


?>