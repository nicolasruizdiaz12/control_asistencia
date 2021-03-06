<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registro Asistencia</title>
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
    <br>
    <div>
      <div>
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
          <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-primary" type="button">
                <i class="fas fa-search fa-sm"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
      <br>
      <?php
      date_default_timezone_set('america/argentina/buenos_aires');
      $fechahoy = date("Y-m-d");
      ?>
      <section>
        <table class="col-md-12">
          <tbody>
            <tr class="col-primary">
              <th colspan="3">ESPECIALIZACIÓN TECNOLÓGICO EN DESARROLLO DE SOFTWARE</th>
            </tr>
            <tr>
              <th class="bg-primary">Apellido y Nombre</th>
              <th class="bg-primary"><?php echo $fechahoy ?></th>
              <th class="bg-primary">Hora</th>
            </tr>
            <?php
            $col = 0;

            include("Lista_Alumnos/conexion.php");
            $query = "SELECT * FROM registro r inner join usuario u on r.id_usuario = u.id_usuario where r.fecha = '$fechahoy'";
            $resultado = $conexion->query($query);

            while ($row = $resultado->fetch_assoc()) {
              $col++; 
              echo "<tr>";
              echo "<td>" . $row['nombre'] . "</td>";
              echo "<td>" . $row['asistencia'] . "</td>";
              echo "<td>" . $row['hora'] . "</td>";
              if($col == 2){ //EN ESTA SENTENCIA INDICASD QUE AL LLEGAR A LA SEGUNDA COLUMNA INICIE OTRA FILA
                $col=0; 
                echo "</tr><tr>"; 
            }
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </section>

    </div>

  </div>

</body>

</html>

<script type="text/javascript" src="Lista_Alumnos/js/hora.js"></script>
<script type="text/javascript" src="Lista_Alumnos/js/filtro.js"></script>