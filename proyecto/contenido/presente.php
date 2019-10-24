<?php
session_start();
error_reporting(E_ERROR);
$nombre = $_SESSION['nombre'];
$usuario = $_SESSION['nombre'];
$id_usuario = $_SESSION['id_usuario'];

if (isset($_SESSION['usuario'])) {

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registro</title>
        <link rel="stylesheet" type="text/css" href="Lista_Alumnos/css/estiloReloj.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500" rel="stylesheet">
    </head>

    <body>
        <div>
            <div class="date">
                <div class="fecha">
                    <p id="diaSemana" class="diaSemana"></p>
                    <p id="dia" class="dia"></p>
                    <p id="mes" class="mes"></p>
                    <p id="year" class="year"></p>
                </div>
                <div class="reloj">
                    <p id="horas" class="horas"></p>
                    <p>:</p>
                    <p id="minutos" class="minutos"></p>
                    <p>:</p>

                    <div class="caja-segundos">
                        <p id="ampm" class="ampm"></p>
                        <p id="segundos" class="segundos"></p>
                    </div>
                </div>
                <div class="inst">
                    <p>¡Especializacion Tecnico Desarrollo de Software!</p>
                </div>
            </div>

            <div class="php">
                <?php
                    //fecha de registro
                    date_default_timezone_set('america/argentina/buenos_aires');
                    $fechahoy = date("Y-m-d");

                    //trae la direccion mac del dispositivo con el que ingresa al sistema
                    echo 'IP: ' . $_SERVER['REMOTE_ADDR'] . ' HOST: ' . $_SERVER['REMOTE_HOST'] . '<br>';
                    $macs = explode(' ', shell_exec('arp -a ' . $_SERVER['REMOTE_ADDR']));
                    foreach ($macs as $mac) {
                        if (preg_match("/??-??-??-??-??-??/",$mac)){
                            $macRed = $mac;
                            break;  
                        }
                    }

                    echo 'MAC: ' . $macRed . '<br>'.'<br>';

                    //consulta de la mac del dispositivo registrado por el alumno 
                    include("homeAlumno/mac/conexion.php");
                    $query = "SELECT mac_compu,mac_celu FROM mac_dispositivo where id_usuario='$id_usuario'";
                    $resultado = $conexion->query($query);
                    $macQry = $resultado->fetch_assoc();
                    print_r($macQry);

                    ?>
            </div>


    </body>

    </html>

    <script type="text/javascript" src="Lista_Alumnos/js/hora.js"></script>
    <script type="text/javascript" src="Lista_Alumnos/js/filtro.js"></script>

<?php
} else {
    header("location:../inicioAlumno.php");
}
?>