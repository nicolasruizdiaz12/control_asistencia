<?php
session_start();

require_once "agregar_usuario/scripts.php";

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

        <title>Agregar Registro</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link rel="stylesheet" href="ccs/../../estilo.css">


        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
        <script src="js/4163d1ab35.js"></script>
        <!-- <script src="https://kit.fontawesome.com/4163d1ab35.js" crossorigin="anonymous"></script> -->
    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="inicioAdmin.php">
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
                            <a class="collapse-item" href="Lista_Alumnos/formulario.php">Agregar</a>
                            <a class="collapse-item" href="Lista_Alumnos/modificar.php">Editar</a>
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
                            <a class="collapse-item" href="login/registro.php">Registar</a>
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
                                    <span class="badge badge-danger badge-counter">3+</span>
                                </a>
                                <!-- Dropdown - Alerts -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                    <h6 class="dropdown-header">
                                        Alertas
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="fas fa-file-alt text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500"></div>
                                            <span class="font-weight-bold">Alerta1</span>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-success">
                                                <i class="fas fa-donate text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">Alerta2</div>
                                            Agregar Alerta
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-warning">
                                                <i class="fas fa-exclamation-triangle text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">Alerta 3</div>
                                            Agregar Alerta
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Mostrar todas las Alertas</a>
                                </div>
                            </li>

                            <!-- Nav Item - Calendario -->

                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-envelope fa-fw"></i>
                                </a>
                                <!-- Dropdown - Calendario -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">
                                        Calendario
                                    </h6> <!-- Agregar Calendario -->
                                    <div> <img src="img/instituto.png" height="60" width="60"></div>
                                </div>
                            </li>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Usuario</span>
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
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
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
                            <h1 class="h3 mb-0 text-gray-800">¡Bienvenido Administrador!</h1>
                        </div>
                        <div class="card shadow mb-4">
                            <div class="mx-auto">
                                <div class="table-responsive">


                                    <form id="frmRegistro">
                                        <table class="table table-bordered" style="width: 500px;">
                                            <tbody style="text-align: center;">
                                                <tr class="bg-success">
                                                    <th COLSPAN="2" style="color:#FFFFFF">Registrar Preceptor</th>
                                                </tr>
                                                <tr>
                                                    <td>Apellido y Nombre: </td>
                                                    <td><input type="text" class="form-control input-sm" id="nombre" name="" placeholder="    Nombres..." value="" /> </td>
                                                </tr>
                                                <tr>
                                                    <td>CUIL : </td>
                                                    <td><input type="text" class="form-control input-sm" id="cuil" name="" placeholder="    CUIL..." value="" /> </td>
                                                </tr>
                                                <tr>
                                                    <td>Fecha Nac : </td>
                                                    <td><input type="date" class="form-control input-sm" id="fecha" name="" placeholder="    ..." value="" /> </td>
                                                </tr>
                                                <tr>
                                                    <td>Domicilio: </td>
                                                    <td><input type="text" class="form-control input-sm" id="domicilio" name="" placeholder="    Domicilio..." value="" /> </td>
                                                </tr>
                                                <tr>
                                                    <td>E-mail: </td>
                                                    <td><input type="email" class="form-control input-sm" id="email" name="" placeholder="    E-mail..." value="" /> </td>
                                                </tr>
                                                <tr>
                                                    <td>Usuario: </td>
                                                    <td><input type="text" class="form-control input-sm" id="usuario" name="" placeholder="    User..." value="" /> </td>
                                                </tr>
                                                <tr>
                                                    <td>Contraseña: </td>
                                                    <td><input type="password" class="form-control input-sm" id="password" name="" placeholder="    Password..." value="" /> </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                        <div  class="row">
                                            <div class="mx-auto">
                                                <span class="btn btn-primary" id="registrarNuevo">Registrar</span>
                                            </div>
                                        </div>

                                    </form>

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
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="../index.php">Loggin</a>
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('#registrarNuevo').click(function() {

                if ($('#nombre').val() == "") {
                    alertify.alert("Debes agregar Nombre y Apellido");
                    return false;
                } else if ($('#cuil').val() == "") {
                    alertify.alert("Debes agregar el CUIL");
                    return false;
                } else if ($('#fecha').val() == "") {
                    alertify.alert("Debes agregar Fecha Nac...");
                    return false;
                } else if ($('#domicilio').val() == "") {
                    alertify.alert("Debes agregar Domicilio");
                    return false;
                } else if ($('#email').val() == "") {
                    alertify.alert("Debes agregar E-mail");
                    return false;
                } else if ($('#usuario').val() == "") {
                    alertify.alert("Debes agregar el Usuario");
                    return false;
                } else if ($('#password').val() == "") {
                    alertify.alert("Debes agregar la Contraseña");
                    return false;
                }

                cadena = "nombre=" + $('#nombre').val() +
                    "&cuil=" + $('#cuil').val() +
                    "&fecha=" + $('#fecha').val() +
                    "&domicilio=" + $('#domicilio').val() +
                    "&email=" + $('#email').val() +
                    "&usuario=" + $('#usuario').val() +
                    "&password=" + $('#password').val();
                console.log(cadena)
                $.ajax({
                    type: "POST",
                    url: "agregar_usuario/php/registrarUser.php",
                    data: cadena,
                    success: function(r) {

                        if (r == 2) {
                            alertify.alert("Este usuario ya existe, prueba con otro");
                        } else if (r == 1) {
                            $('#frmRegistro')[0].reset();
                            alertify.success("Agregado con exito");
                        } else {
                            alertify.error("Fallo al agregar");
                        }
                    }
                });
            });
        });
    </script>

<?php
} else {
    header("location:../inicio.php");
}
?>