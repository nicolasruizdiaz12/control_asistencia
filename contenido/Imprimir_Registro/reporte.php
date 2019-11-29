<?php

include('conexion.php');//conexion a la BD

if(isset($_POST['generar_informe'])){



    //Nombre del archivo y charset, con el cual se va a imprimir
    //header('Content-Type:text/csv; charset=utf-8');
    //header('Content-Disposition: attachment; filename="Registro de Asistencia.csv"');
    header('Content-type: application/vnd.ms-excel;charset=latin1');
    header('Content-Disposition: attachment; filename="Lista de Alumnos.xls"');

    //Salida del archivo 
    $salida=fopen('php://output', 'w');
    //Encabezado
    fputcsv($salida, array('Nombre y Apellido', 'CUIL',   'Fecha Nac',   'Domicilio',   'Email'),chr(9));
    //Query para crear el reporte
    $reporteCsv=$conexion->query("SELECT * FROM usuario  ORDER BY nombre");
    while($filaR = $reporteCsv->fetch_array()){

        fputcsv($salida, array($filaR['nombre'],
        $filaR['cuil'],
        $filaR['fecha'],
        $filaR['domicilio'],
        $filaR['email']),chr(9));
    }
    
}

?>