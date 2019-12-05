<?php
    /*Array con los datos generales de los alumnos*/
    function userInformation()
    {
        $folder = array(
            '10' => array(
                #"id" => 10,
                /*Asistencias => 0 = ausente, 1 = presente*/
                "apellidoNombre" => "ACOSTA CARLOS ALBERTO",
                "asistencias" => array(0,0,1,1,1,1,1,1),
                "condicion" => "",
            ),
            '29' => array(
                # "id" => 29,
                "apellidoNombre" => "AGUILERA CAPRA JESUS DARIO",
                "asistencias" => array(1,1,1,1,0,1,1,1),
                "condicion" => "",
            ),
            '34' => array(
                # "id" => 34,
                "apellidoNombre" => "AYALA LEANDRO JOSE",
                "asistencias" => array(1,0,1,1,1,0,1,1),
                "condicion" => "",
            ),
            '45' => array(
                #"id" => 45,
                "apellidoNombre" => "BENITEZ DARIO",
                "asistencias" => array(1,1,1,0,1,1,1,1),
                "condicion" => "",
            ),
            '52' => array(
                # "id" => 52,
                "apellidoNombre" => "BRITEZ PABLO FERNANDO",
                "asistencias" => array (1,1,1,0,0,1,0,1),
                "condicion" => "",
            ),
            '65' => array(
                #"id" => 65,
                "apellidoNombre" => "CANESIN LUIS OSCAR",
                "asistencias" => array(1,0,1,1,1,0,1,1),
                "condicion" => "",
            ),
            '79' => array(
                #"id" => 79,
                "apellidoNombre" => "DEGREGORIO NICOLAS EZEQUIEL",
                "asistencias" => array(1,1,1,1,1,1,1,0),
                "condicion" => "",
            ),
            '84' => array(
                # "id" => 84,
                "apellidoNombre" => "FERNANDEZ VICTOR HUGO",
                "asistencias" => array(1,0,1,1,0,1,1,1),
                "condicion" => "",
            ),
            '9' => array(
                #"id" => 9,
                "apellidoNombre" => "BOGADO EZEQUIEL",
                "asistencias" => array(1,1,1,0,1,0,1,0),
                "condicion" => "",
            ),
            '103' => array(
                # "id" => 103,
                "apellidoNombre" => "IZA FEDERICO",
                "asistencias" => array (1,1,0,1,0,1,0,1),
                "condicion" => "",
            ),
            '117' => array(
                #"id" => 117,
                "apellidoNombre" => "GIMENEZ MARIANA ITATI",
                "asistencias" => array(1,0,1,1,1,1,0,0),
                "condicion" => "",
            ),
            '124' => array(
                # "id" => 124,
                "apellidoNombre" => "BRITEZ MENDEL JUNIOR JOEL",
                "asistencias" => array(1,1,1,1,1,0,1,1),
                "condicion" => "",
            ),
            
        );
        return $folder;
    };

    /*Lista de datos de los alumnos*/
    function studentInformation()
    {
        #true = Ac => activo;
        $folder = array(
            '10' => array(
                "DNI" => "37534790",
                "Estado" => true,
                "Telefono" => "3704564895",
            ),
            '29' => array(
                "DNI" => "31072642",
                "Estado" => true,
                "TE" => "3705238745",
            ),
            '34' => array(
                "DNI" => "31495856",
                "Estado" => true,
                "Telefono" => "3704214589",
            ),
            '45' => array(
                "DNI" => "28827535",
                "Estado" => true,
                "Telefono" => "3718256489",
            ),
            '52' => array(
                "DNI" => "38573714",
                "Estado" => true,
                "Telefono" => "3704564895",
            ),
            '65' => array(
                "DNI" => "20525869",
                "Estado" => true,
                "Telefono" => "3705238745",
            ),
            '79' => array(
                "DNI" => "37535531",
                "Estado" => true,
                "Telefono" => "3704214589",
            ),
            '84' => array(
                "DNI" => "16969416",
                "Estado" => true,
                "Telefono" => "3718256489",
            ),
            '9' => array(
                "DNI" => "39136464",
                "Estado" => true,
                "Telefono" => "3704564895",
            ),
            '103' => array(
                "DNI" => "40084200",
                "Estado" => true,
                "Telefono" => "3705238745 ",
            ),
            '117' => array(
                "DNI" => "39133013",
                "Estado" => true,
                "Telefono" => "",
            ),
            '124' => array(
                "DNI" => "12345678",
                "Estado" => true,
                "Telefono" => "3718256489",
            ),
        );
        return $folder;
    }
    
    /*Array con las notas de los parciales*/
    function nota_parciales()
    {
        $folder = array(
            '10' => array(
                "Parcial 1" => 4,
                "Parcial 2" => 6,
                "Recuperatorio" => 7
            ),
            '29' => array(
                "Parcial 1" => 7,
                "Parcial 2" => 6,
                "Recuperatorio" => 0
            ),
            '34' => array(
                "Parcial 1" => 5,
                "Parcial 2" => 8,
                "Recuperatorio" => 5
            ),
            '45' => array(
                "Parcial 1" => 7,
                "Parcial 2" => 10,
                "Recuperatorio" => 0
            ),
            '52' => array(
                "Parcial 1" => 9,
                "Parcial 2" => 9,
                "Recuperatorio" => 0
            ),
            '65' => array(
                "Parcial 1" => 4,
                "Parcial 2" => 6,
                "Recuperatorio" => 10
            ),
            '79' => array(
                "Parcial 1" => 9,
                "Parcial 2" => 6,
                "Recuperatorio" => 0
            ),
            '84' => array(
                "Parcial 1" => 8,
                "Parcial 2" => 9,
                "Recuperatorio" => 0
            ),
            '9' => array(
                "Parcial 1" => 8,
                "Parcial 2" => 4,
                "Recuperatorio" => 9
            ),
            '103' => array(
                "Parcial 1" => 9,
                "Parcial 2" => 6,
                "Recuperatorio" => 0
            ),
            '117' => array(
                "Parcial 1" => 9,
                "Parcial 2" => 9,
                "Recuperatorio" => 0
            ),
            '124' => array(
                "Parcial 1" => 5,
                "Parcial 2" => 5,
                "Recuperatorio" => 4
            ),
        );
        return $folder;
    }
?>