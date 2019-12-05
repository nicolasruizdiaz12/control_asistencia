<?php
    require "vectores.php";
    require "funciones.php";
    //TABLA//
    $tablaConDatosC = "<div><table id='tabla3'>";
    //TABLE HEAD//
    $tablaConDatosC .= "<thead>";
    $tablaConDatosC .= "<tr>";
    $tablaConDatosC .= "<th>ID</th>";
    $tablaConDatosC .= "<th>Parcial 1</th>";
    $tablaConDatosC .= "<th>Parcial 2</th>";
    $tablaConDatosC .= "<th>Recuperatorio</th>";
    $tablaConDatosC .= "</tr>";
    $tablaConDatosC .= "</thead>";
    //FIN TABLE HEAD//
    //**********//
    //CUERPO DE TABLA//
    $tablaConDatosC .= "<tbody>";
    foreach ($alumnos_A as $key => $value) {
        $tablaConDatosC .= "<tr>";
        $tablaConDatosC .= "<td>".$key."</td>";
        foreach ($value["examenes"] as $key => $examenes) {
            $tablaConDatosC .= "<td>".$examenes."</td>";
        }
        $tablaConDatosC .= "</tr>";
    }
    $tablaConDatosC .= "</tbody>";
    //FIN CUERPO DE TABLA//
    $tablaConDatosC .= "</table></div>";
    //FIN TABLA//

    echo $tablaConDatosC;


?>