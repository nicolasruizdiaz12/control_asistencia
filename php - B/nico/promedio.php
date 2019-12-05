<?php

$Notas=array(
    '10'=>array('Parcial 1'=>'4','Parcial 2'=>'6', 'Recuperatorio'=>'7'),
    '29'=>array('Parcial 1'=>'7', 'Parcial 2'=>'6', 'Recuperatorio'=>'0'),
    '34'=>array('Parcial 1'=>'5', 'Parcial 2'=>'8', 'Recuperatorio'=>'5'),
    '45'=>array('Parcial 1'=>'7', 'Parcial 2'=>'10', 'Recuperatorio'=>'0'),
    '52'=>array('Parcial 1'=>'9', 'Parcial 2'=>'9', 'Recuperatorio'=>'0'),
    '65'=>array('Parcial 1'=>'4', 'Parcial 2'=>'6', 'Recuperatorio'=>'10'),
    '79'=>array('Parcial 1'=>'9', 'Parcial 2'=>'6', 'Recuperatorio'=>'0'),
    '84'=>array('Parcial 1'=>'8', 'Parcial 2'=>'9', 'Recuperatorio'=>'0'),
    '9'=>array('Parcial 1'=>'8', 'Parcial 2'=>'4', 'Recuperatorio'=>'9'),
    '103'=>array('Parcial 1'=>'9', 'Parcial 2'=>'6', 'Recuperatorio'=>'0'),
    '117'=>array('Parcial 1'=>'9', 'Parcial 2'=>'9', 'Recuperatorio'=>'0'),
    '124'=>array('Parcial 1'=>'5', 'Parcial 2'=>'5', 'Recuperatorio'=>'4'));

    
    $suma_notas = [];
    foreach( $Notas as $id => $array )
    {   
        $menor_nota = INF;
        $suma = 0;
        $suma_final = 0;
        foreach( $array as $parciales => $valores )
        {
            if( $menor_nota > $valores ){
                $menor_nota = $valores;
            }
            $suma += $valores;
            $suma_final = $suma - $menor_nota;
        }
        $suma_notas[] = $suma_final;
    }   
   
    echo '<h3>Suma de Notas</h3>';
    echo '<pre>';
    print_r( $suma_notas );
    echo '</pre>';
    
    echo '<h3>Promedio de Notas</h3>';
    $promedio = [];
    $long = count( $suma_notas );
    for( $i = 0; $i < $long; $i++ )
    {
        $promedio[$i] = $suma_notas[$i] / 2;
    }

    echo '<pre>';
    print_r( $promedio );
    echo '</pre>';


    /* te pide porcentaje, entonces
    Primero tenes que sumar el total de asistencias, luego 
    Porcentaje seria => porcentaje = (asistencia * 100) / 8 
    IMPORTANTE = pide asistencias no ausencias
    por lo que tenes que usar un IF*/
    
?>