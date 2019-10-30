<?php
session_start();
error_reporting(E_ERROR);

if (isset($_SESSION['usuario'])) {

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minimum-scale=1.0">
        <title>Registro</title>
        <link rel="stylesheet" type="text/css" href="Lista_Alumnos/css/estiloReloj.css">
        <link rel="stylesheet" href="css/estilo.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    </head>

    <body>
        <div class="contenedor">
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
            <div>
                <br>
                <br>
                <button id='btnRegistrarAsistencia' value="Registrar Asistencia">Registrar Asistencia</button>
            </div>
        </div>

    </body>

    </html>

    <script type="text/javascript" src="Lista_Alumnos/js/hora.js"></script>
    <script type="text/javascript" src="Lista_Alumnos/js/filtro.js"></script>
    <script type="text/javascript">
        $('#btnRegistrarAsistencia').on('click', function() {
            $.ajax({
                type: 'POST',
                url: 'registrarAsistencia.php',
                success: function(respuesta) {
                    respuesta = JSON.parse(respuesta)                    
                    if (respuesta.estado == 'error'){
                        alert('No tiene permisos para dar asistencia desde este Dispositivo')
                        return
                    }
                    alert('Se registró la asistencia correctamente');
                }
            })
        })
    </script>

<?php
} else {
    header("location:../inicioAlumno.php");
}
?>