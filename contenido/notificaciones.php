<?php
session_start();

$usuario = $_SESSION['nombre'];
$id_usuario = $_SESSION['id_usuario'];
?>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Apellido y Nombre</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php

                date_default_timezone_set('america/argentina/buenos_aires');
                $fechahoy = date("Y-m-d");

                include("Lista_Alumnos/conexion.php");
                $query = "SELECT U.nombre, id_notificacion, description, fecha_noti, ruta FROM notificacione N 
                INNER JOIN  usuario U on N.id_usuario = U.id_usuario 
                where N.fecha_noti = '2019-11-14' and  id_vista = '2'";
                if ($resultado = mysqli_query($conexion, $query)) {

                    while ($row = mysqli_fetch_assoc($resultado)) {

                        echo "<tr>";
                        echo "<td>" . $row['nombre'] . "</td>";
                        echo "<td>" . $row['description'] . "</td>";
                        echo "<td>" . $row['fecha_noti'] . "</td>";
                        ?>
                        <td><img src="archivo/upload/<?php echo $row["ruta"] ?>" alt="" width="200" height="200"></td>
                <?php echo "</tr>";
                    }
                    mysqli_free_result($resultado);
                }
                ?>
            </tbody>
        </table>
    </div>
</div>