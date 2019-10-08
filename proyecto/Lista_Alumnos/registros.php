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
  date_default_timezone_set('america/argentina/buenos_aires');
  $fechahoy= date("Y-m-d");
  ?>
<div>
<input type="date" required name="fecha" id="fecha" value=""/>

<br> <br>
  <table width="auto"  border="1">
    <tbody>
       <thead>
        <tr>                        
          <th>Apellido y Nombre</th>
          <th><input type="date" required name="fecha" id="fecha" value=""/></th>
          <?php echo"<th>".$fechahoy."</th>";?>
          <?php echo"<th>".$fechahoy."</th>";?>
          <?php echo"<th>".$fechahoy."</th>";?>
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


</body>
</html>

