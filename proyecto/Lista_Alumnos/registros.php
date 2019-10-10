<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registro</title>
  <link rel="stylesheet" type="text/css" href="css/estiloReloj.css">
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

  <?php
  $fecha = "--/--";
  date_default_timezone_set('america/argentina/buenos_aires');
  $fechahoy= date("Y-m-d");
  ?>
<div>
<br>
  <table class="table" id="tabla">
    <tbody>
      <tr>
      <th>ESPECIALIZACIÓN TECNOLÓGICO EN DESARROLLO DE SOFTWARE</th>
      </tr>
      <tr>                        
          <td class="bg-primary">Apellido y Nombre</td>
          <?php echo"<td>".$fecha."</td>";?>
      </tr>
            <?php
            
               include("conexion.php");
               $query="SELECT * FROM usuarios";
               $resultado= $conexion ->query($query);
               while($row=$resultado->fetch_assoc()){
               echo "<tr>";  
               echo "<td>".$row['nombre']."</td>";   
               echo"</tr>";   
               }
             ?> 
    </tbody>
  </table>
</div>

<div><input type="submit" value="Guardar Registro"></div>
</div>

</body>
</html>

<script type="text/javascript" src="js/hora.js"></script>