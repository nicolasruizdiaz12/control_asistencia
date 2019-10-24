<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="Lista_Alumnos/css/estiloReloj.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
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
            <?php
            $fecha = "--/--";
            date_default_timezone_set('america/argentina/buenos_aires');
            $fechahoy = date("Y-m-d");
            ?>
        </div>

        <div class="col-sm-4">
            <?php
            $ip = $_SERVER['REMOTE_ADDR'];
            $salida = $_SERVER['REMOTE_HOST'] ;
            $mac = explode(' ', shell_exec('arp -a ' . $_SERVER['REMOTE_ADDR']));
            ?>
        </div>

        <div>
            <br> <br>
            <div class="container-fluid h-100">
                <div class="row w-100">
                    <div class="col v-center">
                        <button class="btn btn-danger d-block mx-auto"> Presente </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

<script type="text/javascript" src="Lista_Alumnos/js/hora.js"></script>
<script type="text/javascript" src="Lista_Alumnos/js/filtro.js"></script>

