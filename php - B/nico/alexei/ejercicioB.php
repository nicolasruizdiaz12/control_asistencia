<?php
    require "vectores.php";
    require "funciones.php";
    //TABLA//
    $tablaConDatosB = "<div><table id='tabla2'>";
    //TABLE HEAD//
    $tablaConDatosB .= "<thead>";
    $tablaConDatosB .= "<tr>";
    $tablaConDatosB .= "<th>ID</th>";
    $tablaConDatosB .= "<th>DNI</th>";
    $tablaConDatosB .= "<th>Estado</th>";
    $tablaConDatosB .= "<th>Telefono</th>";
    $tablaConDatosB .= "</tr>";
    $tablaConDatosB .= "</thead>";
    //FIN TABLE HEAD//
    //**********//
    //CUERPO TABLA//
    $tablaConDatosB .= "<tbody>";
    foreach ($alumnos_A as $key => $value) {
        $tablaConDatosB .= "<tr>";
        $tablaConDatosB .= "<td>".$key."</td>";
        $tablaConDatosB .= "<td>".$value["dni"]."</td>";
        $tablaConDatosB .= "<td>".$value["estado"]."</td>";
        $tablaConDatosB .= "<td>".$value["te"]."</td>";
        $tablaConDatosB .= "</tr>";
    }
    $tablaConDatosB .= "</tbody>";
    //FIN CUERPO TABLA//
    $tablaConDatosB .= "</table></div>";
    //FIN TABLA//

    echo $tablaConDatosB;


?>