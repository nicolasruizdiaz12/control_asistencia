<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agregar Registro</title>

    <!-- Custom fonts for this template-->
    <script language="javascript" src="jquery-1.5.2.min.js"></script>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

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
                    <h1 class="h3 mb-4 text-gray-800">Configurar Plataforma</h1>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary" style="text-align: center;">AGREGAR CARRERAS</h6>
                        </div>
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <form method="POST">
                                    <input type="number" name='cantidad' id='cantidad' placeholder="  Cantidad Carreras" value='cantidad'>
                                    <input type="submit" value="Agregar">
                                </form>
                            </div>
                            <div class="js">
                                <script>
                                    document.getElementById('cantidad').value = valor;
                                </script>
                            </div>
                            <div class="row d-flex justify-content-center" style="text-align: center;">
                                <form action="carreras/guardarCarrera.php" method="POST" id="frmRegistro">
                                    <table id="tabla" cellspacing="0" style="text-align:center;" border="1">
                                        <tbody style="text-align: center">
                                            <tr class="bg-success">
                                                <th COLSPAN="2" style="color:#FFFFFF"> Nombres de Carreras </th>
                                            </tr>
                                            <?php
                                            $valor = (isset($_POST['cantidad']) ? $_POST['cantidad'] : 1);
                                            echo '<br>';
                                            for ($i = 0; $i < $valor; $i++) {
                                                echo '
                                            <tr  class="success">
                                                <td>  Carrera  : ' . $i .  '  </td>
                                                <td><input type="text" size="40" required name="nombreCarrera" id="nombreCarrera" placeholder="    ........ " value="" /> </td>
                                            </tr>';
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                    <br>
                                    <input class="btn-primary align-items-center" type="submit" id="guardarCarrera" value="Guardar">
                                </form>
                            </div>
                            <div>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Carreras Agregadas</th>
                                        </tr>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Operaciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include("carreras/conexion.php");
                                        $query = "SELECT * FROM carrera ";
                                        $resultado = $conexion->query($query);
                                        while ($row = $resultado->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>" . $row['nombreCarrera'] . "</td>";
                                            //echo '<td><span><i class="far fa-edit fa-lg" style="color: #51cf66;"></i></span></td>';
                                            echo '<td align="center"><a> 
                                                        <i class="far fa-edit fa-lg" style="color: #51cf66" <input type="button" onclick="layer_show()" /;"></input></i>
                                                        </a>
                                                        <a href="carreras/eliminar.php?id_carrera=' . $row['id_carrera'] . '">
											            <i class="far fa-trash-alt fa-lg" style="color: #ff6b6b <input type="button" onclick="return Confirmation()" /;"></input></i>
                                                        </a>
                                                        </td>';
                                            /*<td><a href="Lista_Alumnos/eliminar.php?ID=<?php echo $row['ID'] ?>"><button type="button" class="btn btn-danger">Eliminar</button></a></td>*/

                                            echo "</tr>";
                                        }

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div id='layerPreviewContent'>
                                <!-- Mostramos el texto de cerrar para poder cerrar la ventana -->
                                <div style='width:100%;text-align:right;border-bottom:1px solid;'><span onclick="layer_close();" style='cursor:pointer;padding-right:5px;' style="color:red"><b>X</b></span></div>
                                <div class="table-responsive">
                                    <?php

                                    include("carreras/conexion.php");


                                    $query = "SELECT * FROM carrera";
                                    $resultado = $conexion->query($query);
                                    $row = $resultado->fetch_assoc();
                                    ?>
                                    <form action="carreras/editar_Proceso.php?id_carrera=<?php echo $row['id_carrera'] ?>" method="POST">
                                        <table class="table table-bordered" id="dataTable" cellspacing="0">
                                            <tbody style="text-align: center;">
                                                <tr class="bg-success">
                                                    <td style="color:#FFFFFF"> Editar Carrera</td>
                                                </tr>

                                                <tr>
                                                    <td><input type="text" required name="nombreCarrera" id="nombreCarrera" placeholder=" <?php echo $row['nombreCarrera']; ?> " value=" <?php echo $row['nombreCarrera']; ?>" /> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br>
                                        <center><input class="btn-primary" type="submit" value="Guardar Edición"></center>
                                    </form>
                                </div>
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
                    <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="../../index.php">Cerrar Sección</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script language="javascript" src="carreras/jquery-1.5.2.min.js"></script>
    <style type="text/css">
        /* Determina el fondo transparente cuando se muestra la previsualizacion */
        #layerPreview {
            position: absolute;
            z-index: 1;
            display: none;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            background-color: #fff;
            opacity: 0.8;
            -moz-opacity: 0.8;
            filter: alpha(opacity=80);
            -khtml-opacity: 0.8;
        }

        /* Determina la capa que aparecera centrada */
        #layerPreviewContent {
            position: absolute;
            z-index: 1;
            display: none;
            background-color: #fff;
            left: 50%;
            width: 400px;
            margin-left: -150px;
            height: 250px;
            padding: 2px;
            border: 1px solid;
        }
    </style>
    <script type='text/javascript'>
        /**
         * Funcion que muestra las capas
         */
        function layer_show() {
            /* Ponemos los atributos de posicion a la capa transparente del fondo */
            $('#layerPreview').attr("style", "top:0px; height:" + $(document).height() + "px; width:" + $(window).width() + "px; display:inline;");

            /* Buscamos la posicion superior de la capa que aparece centrada.
               La anchura y la posicion centrada se establece en el estilo */
            var posTop = (($(window).height() / 2) - (200 / 2)) + $(document).scrollTop();
            if (posTop < 0)
                posTop = 0;
            $('#layerPreviewContent').attr("style", "top:" + posTop + "px;");
            /* Indicamos que se muestre la capa */
            $('#layerPreviewContent').show(600);
        }

        /**
         * Funcion que esconde las capas
         */
        function layer_close() {
            $('#layerPreviewContent').hide(300);
            $('#layerPreview').hide();
        }
    </script>


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