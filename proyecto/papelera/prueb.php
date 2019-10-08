<div class="table-responsive">
                <table class="table table-bordered dataTable no-footer" id="dataTable" role="grid" width="100%" cellspacing="0">
                  <thead>
                    <tr class="bg-primary">
                      <th><font size ="3", color ="#ffffff">ID</font></th>
                      <th><font size ="3", color ="#ffffff">Apellido y Nombre</font></th>
                      <th><font size ="3", color ="#ffffff">D.N.I</font></th>
                      <th><font size ="3", color ="#ffffff">Email</font></th>
                      <th><font size ="3", color ="#ffffff">Domicilio</font></th>
                      <th><font size ="3", color ="#ffffff">Telefono</font></th>
                      <th><font size ="3", color ="#ffffff">F_Nacimiento</font></th>
                      <th colspan="2"><font size ="3", color ="#ffffff">Operaciones</font></th>
                    </tr>
                  </thead>
                
                   <tbody>
                    <?php
    
                    include("Lista_Alumnos/conexion.php");
    
                    $query="SELECT * FROM alumno";
                    $resultado= $conexion ->query($query);
                    while($row=$resultado->fetch_assoc()){
                    

                    ?>
    
                    <tr>
                        <td><?php echo $row['ID']; ?></td>
                        <td><?php echo $row['Nombre_Apellido']; ?></td>
                        <td><?php echo $row['DNI']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['Domicilio']; ?></td>
                        <td><?php echo $row['Telefono']; ?></td>
                        <td><?php echo $row['F_Nacimiento']; ?></td>
                        <td><a href="Lista_Alumnos/modificar.php?ID=<?php echo $row['ID'] ?>"><button type="button" class="btn btn-success">Modificar</button></a></td>
                        <td><a href="Lista_Alumnos/eliminar.php?ID=<?php echo $row['ID'] ?>"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
                    </tr>
                      
                    <?php
    
                    }
    
                    ?>
                </tbody>
                </table>