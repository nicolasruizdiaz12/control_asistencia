<?php
    require "vectores.php";
    require "funciones.php";
    //TABLA//
    $tablaConDatos = "<div><table id='tabla1'>";
    //TABLE HEAD//
    $tablaConDatos .= "<thead>";
    $tablaConDatos .= "<tr rowspan='2'>";
    $tablaConDatos .= "<th rowspan='2'>ID</th>";
    $tablaConDatos .= "<th rowspan='2'>Apellido y Nombre</th>";
    $tablaConDatos .= "<th colspan='8'>Fechas</th>";
    $tablaConDatos .= '<th rowspan="2">Condicion</th>';
    $tablaConDatos .= "</tr>";
    $tablaConDatos .= "<tr>";
    foreach ($alumnos_A[array_key_first($alumnos_A)]["asistencias"] as $key => $value) {
        $tablaConDatos .= "<th>".$key."</th>";//column aistencias
    }
    $tablaConDatos .= "</tr>";
    $tablaConDatos .= "</thead>";
    //FIN TABLE HEAD//
    //**********//
    //CUERPO DE TABLA//
    $tablaConDatos .= "<tbody>";
    foreach ($alumnos_A as $key => $value) {
        $tablaConDatos .= "<tr>";
        $tablaConDatos .= "<td>".$key."</td>";
        $tablaConDatos .= "<td style='text-align: left;'>".$value["apellidoNombre"]."</td>";
        foreach ($value["asistencias"] as $key => $asistencia) {
            if ($asistencia == 0) {
                $asistencia = "-";
            } else {
                $asistencia = "P";
            }
            $tablaConDatos .= "<td>".$asistencia."</td>";
        }
        $tablaConDatos .= "<td></td>";//condicion
        $tablaConDatos .= "</tr>";
    }
    $tablaConDatos .= "</tbody>";
    //FIN CUERPO DE TABLA//
    $tablaConDatos .= "</table></div>";
    //FIN TABLA//
    
    echo $tablaConDatos;//IMPRIMO LA TABLA//







?>