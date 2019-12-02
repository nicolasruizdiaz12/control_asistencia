<?php
session_start();

$usuario = $_SESSION['nombre'];
$id_usuario = $_SESSION['id_usuario'];

if (isset($_SESSION['usuario'])) {

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Lista Alumnos</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
        <script src="js/4163d1ab35.js"></script>
        <!-- <script src="https://kit.fontawesome.com/4163d1ab35.js" crossorigin="anonymous"></script> -->
    </head>

    <!-- Funcion de confirmacion para eliminar datos de la lista por js -->
    <script type="text/javascript">
        function Confirmation() {

            if (confirm('Esta seguro de eliminar el registro?') == true) {
                alert('El registro ha sido eliminado correctamente!!!');
                return true;
            } else {
                alert('Cancelo la eliminacion');
                return false;
            }
        }
    </script>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="inicio.php">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="far fa-grin-tongue"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Control Asistencia</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="inicio.php">
                        <i class="far fa-address-book fa-lg" style="color: #FFFFFF;"></i>
                        <span>Asistencia</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Interface
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog" style="color: #FFFFFF;"></i>
                        <span>Configuraciones</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Ejecucion de Alumnos:</h6>
                            <a class="collapse-item" href="agregarAlumno.php">Agregar</a>
                            <a class="collapse-item" href="modificar.php">Editar</a>
                            <a class="collapse-item" href="Lista_Alumnos/eliminar">Eliminar</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fab fa-untappd" style="color: #FFFFFF;"></i>
                        <span>Red Social</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded" style='text-align:center'>
                            <h6 class="collapse-header">Redes Sociales:</h6>

                            <a class="collapse-item" target="_blank" href="https://www.facebook.com/pages/Polo-Cientifico-y-Tecnol%C3%B3gico/1975263692720762">
                                <i class="fab fa-facebook-square fa-2x" style="color: #3b5998;"></i> <span>Facebook</span>
                            </a>
                            <a class="collapse-item" target="_blank" href="https://www.instagram.com/ipformosa/?hl=es-la">
                                <i class="fab fa-instagram fa-2x" style="color: #ff0084;"></i> <span>Instagram</span>
                            </a>
                            <a class="collapse-item" target="_blank" href="">
                                <i class="fas fa-envelope fa-2x" style="color: #FF0000;"></i> <span>Gmail</span>
                            </a>
                            <a class="collapse-item" target="_blank" href="https://www.ipf.edu.ar">
                                <i class="fab fa-google fa-2x" style="color: #008080;"></i> <span>Politécnico</span>
                            </a>

                        </div>
                    </div>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Actividades
                </div>

                <!-- Nav Item - Charts -->
                <li class="nav-item active">
                    <a class="nav-link" href="asistenciaDelDia.php">
                        <i class="far fa-address-card"></i>
                        <span>Registro Asistencia</span></a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="listaAlumnos.php">
                        <i class="fas fa-user-graduate" style="color: #FFFFFF;"></i>
                        <span>Alumnos</span></a>
                </li>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder" style="color: #FFFFFF;"></i>
                        <span>Páginas</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Login:</h6>
                            <a class="collapse-item" href="../index.php">Login</a>
                            <a class="collapse-item" href="login/registro.php">Registrar</a>
                        </div>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <?php
                    date_default_timezone_set('america/argentina/buenos_aires');
                    $fechahoy = date("Y-m-d");

                    $mysqli = new mysqli("localhost", "root", "", "registro_asistencia");
                    $cantidad = "SELECT COUNT(*) notificacion FROM notificacione WHERE id_vista = '2' and fecha_noti = '$fechahoy'";
                    $result = mysqli_query($mysqli, $cantidad);
                    $total = mysqli_fetch_assoc($result);
                    ?>
                <?php
                    include("Lista_Alumnos/conexion.php");
                    $query = "SELECT * FROM notificacione N inner join usuario U on N.id_usuario = U.id_usuario where id_vista = '2' order by 'id_notificacione' desc ";
                    if ($resultado = mysqli_query($conexion, $query)) {

                        ?>


                    <!-- Main Content -->
                    <div id="content">

                        <!-- Topbar -->
                        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                            <!-- Sidebar Toggle (Topbar) -->
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>

                            <!-- Topbar Search -->
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

                            <!-- Topbar Navbar -->
                            <ul class="navbar-nav ml-auto">

                                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                                <li class="nav-item dropdown no-arrow d-sm-none">
                                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-search fa-fw"></i>
                                    </a>
                                    <!-- Dropdown - Messages -->
                                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                        <form class="form-inline mr-auto w-100 navbar-search">
                                            <div class="input-group">
                                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="button">
                                                        <i class="fas fa-search fa-sm"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>

                                <!-- Nav Item - Alerts -->
                                <li class="nav-item dropdown no-arrow mx-1">
                                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-bell fa-fw"></i>
                                        <!-- Counter - Alerts -->
                                        <span class="badge badge-danger badge-counter"><?php echo $total['notificacion']; ?></span>
                                    </a>
                                    <!-- Dropdown - Alerts -->
                                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                        <h6 class="dropdown-header">
                                            Alertas
                                        </h6>
                                    <?php
                                            while ($row = mysqli_fetch_assoc($resultado)) {

                                                echo '<a class="dropdown-item d-flex align-items-center" href="#">
												 <div class="mr-3">
													 <div class="icon-circle bg-primary">
														 <i class="fas fa-file-alt text-white"></i>
													 </div>
												 </div>
												 <div>
													 <div class="small text-gray-500"></div>
													 <span class="font-weight-bold">' . $row['nombre'] . '</span>
												 </div>
											 </a>';
                                            }
                                            mysqli_free_result($resultado);
                                        }
                                        ?>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Mostrar todas las Alertas</a>
                                    </div>
                                </li>
                                <!-- Nav Item - Calendario -->

                                <?php
                                    date_default_timezone_set('america/argentina/buenos_aires');
                                    $fechahoy = date("Y-m-d");

                                    $mysqli = new mysqli("localhost", "root", "", "registro_asistencia");
                                    $presentes = "SELECT COUNT(*) presentes FROM registro WHERE id_tipo_asistencia = '1' and fecha_registro = '$fechahoy'";
                                    $result = mysqli_query($mysqli, $presentes);
                                    $fila = mysqli_fetch_assoc($result);

                                    $ausentes = "SELECT COUNT(*) ausentes FROM registro WHERE id_tipo_asistencia = '2' and fecha_registro = '$fechahoy'";
                                    $result = mysqli_query($mysqli, $ausentes);
                                    $cantidad = mysqli_fetch_assoc($result);
                                    ?>

                                <li class="nav-item dropdown no-arrow mx-1">
                                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-user-graduate fa-fw"></i>
                                    </a>
                                    <!-- Dropdown - Asistencia del dia -->
                                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                        <h6 class="dropdown-header" style="font-size:14px; text-align:center;">
                                            <?php echo 'Fecha : ' . $fechahoy; ?>
                                        </h6> <!-- Asistencia-->
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="mr-3">
                                                <div>
                                                    <i class="fas fa-check-circle fa-2x fa-lg" style="color:#2EBA00;"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="small text-gray-500"></div>
                                                <span class="font-weight-bold"><?php echo '<b>Cantidad Presentes :  '  .  $fila['presentes'] . '</b>'; ?></span>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="mr-3">
                                                <div>
                                                    <i class="fas fa-times fa-2x fa-lg" style="color:#E52401;"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="small text-gray-500"></div>
                                                <span class="font-weight-bold"><?php echo '<b>Cantidad Ausentes :  '  .  $cantidad['ausentes'] . '</b>'; ?></span>
                                            </div>
                                        </a>
                                        <a class="dropdown-item text-center small text-gray-500" target="_blank" href="grafico/porcentajeDelDia.php">Mostrar Porcentaje</a>
                                    </div>
                                </li>

                                <div class="topbar-divider d-none d-sm-block"></div>

                                <!-- Nav Item - User Information -->
                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $usuario; ?></span>
                                        <img src="img/instituto.png" height="60" width="60">
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Perfil
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Configuración
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Registro de actividad
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="../index.php" data-toggle="modal" data-target="#logoutModal">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Salir
                                        </a>
                                    </div>
                                </li>

                            </ul>

                        </nav>
                        <!-- End of Topbar -->

                        <!-- Begin Page Content -->
                        <div class="container-fluid">

                            <!-- Page Heading -->
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-0 text-gray-800">Especialización Tecnica en Desarrollo de Software</h1>
                                <a target="_blank" href="Imprimir_Registro/descargar_reporte_bd.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Descargar Lista</a>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Porcentaje de Asistencias</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Apellido y Nombre</th>
                                                    <th>Presentes</th>
                                                    <th>Ausentes</th>
                                                    <th>Porcentaje</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    include("Lista_Alumnos/conexion.php");
                                                    $query = "Select nombre,Cant_Presentes/Cant_clases *100,Cant_Ausentes/Cant_clases*100, Cant_Presentes,Cant_Ausentes
                                                    from
                                                   (select nombre
                                                    , (select count(*) as total from registro where  id_tipo_asistencia = 2 And fecha_registro BETWEEN '2019-01-01' and '2019-12-31'
                                                                                         And registro.id_usuario = usuario.id_usuario) as Cant_Presentes
                                                    , (select count(*) from registro where  id_tipo_asistencia = 1 And fecha_registro BETWEEN '2019-01-01' and '2019-12-31'
                                                                                         And registro.id_usuario = usuario.id_usuario) as Cant_Ausentes
                                                    ,(select count(distinct fecha_registro) from registro where fecha_registro BETWEEN '2019-01-01' and '2019-12-31') Cant_Clases                                  
                                                    from usuario
                                                    Where id_tipo_usuario = 1) tblRegistro";
                                                    $resultado = $conexion->query($query);
                                                    while ($row = $resultado->fetch_assoc()) {
                                                        $porcentaje = number_format($row['Cant_Presentes/Cant_clases *100']);
                                                        
                                                        /* color */
                                                        if ($porcentaje >= 86 ) {
                                                            $color = 'bg-success';
                                                        }else if($porcentaje >= 80 && $porcentaje <= 85 )  {
                                                            $color = 'bg-warning';
                                                        }
                                                        else {
                                                            $color = 'bg-danger';
                                                        }

                                                        echo "<tr>";
                                                        echo "<td>" . $row['nombre'] . "</td>";
                                                        echo "<td>" . $row['Cant_Presentes'] . "</td>";
                                                        echo "<td>" . $row['Cant_Ausentes'] . "</td>";
                                                        echo "<td>
                                                            <div class='progress'>
                                                                <div class='progress-bar $color ' role='progressbar' style='width:$porcentaje%; min-width:10%;'>
                                                                    $porcentaje%
                                                                </div>
                                                               
                                                            </div>
                                                        </td>";
                                                        echo "</tr>";
                                                    }

                                                    // <span class='sr-only'>.$porcentaje.'</span>
                                                    ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- /.container-fluid -->

                    </div>
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Ruiz Diaz Nico &copy; Gil Yami 2019</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->
        </div>
        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="../index.php">Cerrar Sección</a>
                    </div>
                </div>
            </div>
        </div>




        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>

    </body>

    </html>

<?php
} else {
    header("location:../inicio.php");
}
?>