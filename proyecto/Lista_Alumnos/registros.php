<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registro</title>
</head>
<body>
  <?php
  $fecha = "--/--";
  date_default_timezone_set('america/argentina/buenos_aires');
  $fechahoy= date("Y-m-d");
  echo $fechahoy;
  ?>
<div>

<br>
  <table class="table table-bordered" border="1" id="tabla">
    <tbody>
       <thead>
       <tr><th colspan="">ESPECIALIZACIÓN TECNOLÓGICO EN DESARROLLO DE SOFTWARE</th></tr>
        <tr>                        
          <th class="bg-primary">Apellido y Nombre</th>
          <?php echo"<th>".$fecha."</th>";?>
          <?php echo"<th>".$fecha."</th>";?>
          <?php echo"<th>".$fecha."</th>";?>
          <?php echo"<th>".$fecha."</th>";?>
          <?php echo"<th>".$fecha."</th>";?>
          <?php echo"<th>".$fecha."</th>";?>
        </tr>
      </thead>
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

<div><input type="submit" value="Guardar Registro" onclick="contarFilas()"/></div>

</body>
</html>

