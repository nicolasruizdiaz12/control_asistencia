<?php
    /*funcion auxiliar*/
    function _imp( $array, $title )
    {
        echo "<br>";
        echo '<h3>'.$title.'</h3>';
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }

    /*Muestra el contenido del array principal ubicado el la funcion userInformation()*/
    function mostrar_tabla_principal( $array, $array_condicion )
    {   $i = 0;
        foreach( $array as $id => $index )
        {
            echo '<tr>';
            /* echo '<td><a target="_blank" href="recibirGet.php?alumno='.$id.'">'.$id.'</a></td>'; */
            echo '<td>' .$id.'</td>';
            echo '<td><a target="_blank" href="recibirGet.php?alumno='.$index['apellidoNombre'].'">'.$index['apellidoNombre'].'</a></td>';
                foreach( $index['asistencias'] as $key => $asistencias )
                {
                    echo '<td>';
                        if ( $asistencias === 0 ){
                            echo 'A';
                        }else if( $asistencias === 1 ){
                            echo 'P';
                        }else {
                            echo $asistencias;
                        }
                    echo '</td>'; 
                }
                echo '<td>'.$array_condicion[$i].'</td>';
                $i++;
            echo '</tr>';
        }
    }

    /*Muestra la lista con los datos de los alumnos*/
    function mostrar_lista_datos( $array )
    {
        foreach( $array as $informacion => $estudiante )
        {
            echo '<li>'.$informacion.'</li>';
            echo '<ul>';
                foreach( $estudiante as $datos => $value )
                {
                    /*El condicional no es necesariamente indispensable, basta con modificar la información del contenido*/
                    echo '<li>'.$datos.': ';
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

    /*Muestra la table con los parciales*/
    function mostrar_tabla_parciales( $array )
    {
        foreach( $array as $id => $value )
        {
            echo '<tr>';
                echo '<td>'.$id.'</td>';
                foreach($value as $keys => $parciales)
                {
                    echo '<td>'.$parciales.'</td>';
                }
            echo '</tr>';
        }
    }

    /*Para calcular el promedio de asistencias*/
    function promedio_asistencias( $array )
    {   /*Esta parte hace el conteo de asistencias*/
        $asistencias = array_column( $array, 'asistencias' );
        $acum = array();
        for( $i = 0; $i < count( $asistencias ); $i++ )
        {
            $count = 0;
            for( $j = 0; $j < count( $asistencias[$i] ); $j++ )
            {
                if( $asistencias[$i][$j] == 1 )
                {
                    $count++;
                }
            }
            $acum[$i] = $count;
        }
        /*Esta parte calcula el porcentaje de asistencias*/
        $attPrecentage = array();
        for( $i = 0; $i < count( $acum ); $i++ )
        {
            $attPrecentage[$i] =  ( $acum[$i] * 100 )/8;
        }
        return $attPrecentage;
    }

    /*Para sumar todas las notas*/
    //array_1;
    function suma_notas( $array )
    {
        $array_suma = array();
        foreach( $array as $index => $value )
        {
            $add = 0;
            foreach( $value as $parcial => $notas )
            {
                $add += $notas;
            } 
            array_push( $array_suma, $add );  
        }
        return $array_suma;
    }

    /*Para encontrar la menor nota (nota de reprobado)*/
    //array_2
    function menor_notar( $array )
    {
        $menorNota = array();
        foreach( $array as $index => $value )
        {   $min = INF; //infinito;
            foreach( $value as $parcial => $notas )
            {
                if( $notas < $min ){
                    $min = $notas;
                }
            }
            array_push( $menorNota, $min );
        }
        return $menorNota;
    }

    /*Promedio de notas*/
    function promedio_notas( $array_1, $array_2 )
    {
        $prom_notas = array();
        $longitud = count( $array_1 );
        for( $i = 0; $i < $longitud; $i++ )
        {
            $prom_notas[$i] = ( ( $array_1[$i] - $array_2[$i] ) / 2 );
        }
        return $prom_notas;
    }

    /*Calcula la condición del alumno y lo guarda en un array*/
    function condicion_alumno( $asistencias, $notas )
    {
        $condicion = array();
        $longitud_array = count( $asistencias );//longitud 12;
        for( $i = 0; $i < $longitud_array; $i++ )
        {
            if( ($asistencias[$i] < 80) || ($notas[$i] < 6) ){
                $estado = 'Libre';
            }else if( ($asistencias[$i] >= 80) && ($notas[$i] >= 6) && ($notas[$i] < 8) ){
                $estado = 'Regular';
            }else if( ($asistencias[$i] >= 80) && ($notas[$i] >= 8) && ($notas[$i] <= 10) ){
                $estado = 'Promocionado';
            }
            array_push( $condicion, $estado );
        }
        return $condicion;
    }

    /*Para calcular el porcentaje de libres*/
    function alumnos_libres( $asistencias, $notas )
    {
        $libre = 0;
        $longitud_array = count( $asistencias ); //$asistencias y $notas tienen la misma longitud;
        for( $i = 0; $i < $longitud_array; $i++ )
        {
            if( ($asistencias[$i] < 80) || ($notas[$i] < 6) ){
                $libre++; 
            }     
        }
        $libres = ( $libre * 100 ) / $longitud_array;
        return $libres = round( $libres );
    }

    /*Para calcular el porcentaje de regulares*/
    function alumnos_regulares( $asistencias, $notas )
    {
        $regular = 0;
        $longitud_array = count( $asistencias ); //$asistencias y $notas tienen la misma longitud;
        for( $i = 0; $i < $longitud_array; $i++ )
        {
            if( ($asistencias[$i] >= 80) && ($notas[$i] >= 6) && ($notas[$i] < 8) ){
                $regular++;
            }
        }
        $regulares = ( $regular * 100 ) / $longitud_array;
        $regulares = round( $regulares );
        return $regulares;
    }

    //FIXME: La condición no esta bien definida;
    /*Para calcular el porcentaje de promocionales*/
    function alumnos_promocionales( $asistencias, $notas )
    {
        $promocional = 0;
        $longitud_array = count( $asistencias ); //$asistencias y $notas tienen la misma longitud;
        for( $i = 0; $i < $longitud_array; $i++ )
        {
            if( ($asistencias[$i] >= 80) && ($notas[$i] >= 8) && ($notas[$i] <= 10) ){
                $promocional++;
            }
        }
        $promocionales = ( $promocional * 100 ) / $longitud_array;
        return $promocionales = round( $promocionales );
    }

?>  