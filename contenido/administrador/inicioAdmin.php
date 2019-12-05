<?php
session_start();

$usuario = $_SESSION['nombre'];
$id_usuario = $_SESSION['id_usuario'];

if (isset($_SESSION['usuario'])) {

	?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<title>Inicio</title>
		<?php require_once "../login/scripts.php"; ?>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Inico-Administrador</title>

		<!-- Custom fonts for this template-->
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


		<!-- Custom fonts for this template-->
		<link rel="stylesheet" href="css/parpadeo.css">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<!-- Custom styles for this template-->
		<link href="css/sb-admin-2.min.css" rel="stylesheet">
	</head>

	<body>

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
						<i class="fas fa-user-tie fa-lg" style="color: #FFFFFF;"></i>
						<span>Preceptor</span></a>
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
							<h6 class="collapse-header">Datos Institución:</h6>
							<a class="collapse-item" href="#">Ver</a>
							<a class="collapse-item" href="#">Editar</a>
							<a class="collapse-item" href="#">Eliminar</a>
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
					<a class="nav-link" target="_blank" href="asistenciaDelDia.php">
						<i class="fas fa-chalkboard-teacher"></i> 
						<span>Profesores</span></a>
				</li>

				<!-- Nav Item - Tables -->
				<li class="nav-item">
					<a class="nav-link" href="listaAlumnos.php">
						<i class="far fa-address-card" style="color: #FFFFFF;"></i>
						<span>Materias</span></a>
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
							<a class="collapse-item" href="../../index.php">Login</a>
							<a class="collapse-item" href="../login/registro.php">Registrar</a>
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
					$cantidad = "SELECT COUNT(*) notificacion FROM notificacione WHERE id_vista = '2'";
					$result = mysqli_query($mysqli, $cantidad);
					$total = mysqli_fetch_assoc($result);
					?>
				<?php
					include("notas/conexion.php");
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
										<h6 class="dropdown-header" style="font-size:14px; text-align:center;">
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
									$presentes = "SELECT COUNT(*) presentes FROM registro WHERE id_tipo_asistencia = '2' and fecha_registro = '$fechahoy'";
									$result = mysqli_query($mysqli, $presentes);
									$fila = mysqli_fetch_assoc($result);

									$ausentes = "SELECT COUNT(*) ausentes FROM registro WHERE id_tipo_asistencia = '1' and fecha_registro = '$fechahoy'";
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

								<!-- Nav Item - Usuario Information -->
								<li class="nav-item dropdown no-arrow">
									<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $usuario; ?></span>
										<?php
										include("notas/conexion.php");
										$logo = "SELECT * FROM institucion_dato";
										$resultado = mysqli_query($conexion, $logo);
										while ($row = $resultado->fetch_assoc()) {
											if ($row = 1){
										echo "<img src='datos_institucion/logo/$row[ruta]'height='60' width='60'>";
								        }else {
											echo "<img src='datos_institucion/logo/perfil.jpg'height='60' width='60'>";
										}
									}
										?>
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
								<h1 class="h3 mb-0 text-gray-800">Bienvenido Administrador</h1>
							</div>

							<!-- Content Row -->
							<div class="row">

								<!-- Earnings (Monthly) Card Example -->

								<div class="col-xl-3 col-md-6 mb-4">
									<div class="card border-left-primary shadow h-100 py-2">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="crearUser.php">Crear Usuario</a></div>
													<div class="h5 mb-0 font-weight-bold text-gray-800">Preceptor</div>
												</div>
												<div class="col-auto">
													<i class="fas fa-user-tie fa-2x" style="color: #008000;"></i> 
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-3 col-md-6 mb-4">
									<div class="card border-left-primary shadow h-100 py-2">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="#">Subir</a></div>
													<div class="h5 mb-0 font-weight-bold text-gray-800">Horarios</div>
												</div>
												<div class="col-auto">
													<i class="fab fa-algolia fa-2x" style="color: #008000;"></i>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Earnings (Monthly) Card Example -->
								<div class="col-xl-3 col-md-6 mb-4">
									<div class="card border-left-primary shadow h-100 py-2">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="cargarMateria.php">Cargar</a></div>
													<div class="h5 mb-0 font-weight-bold text-gray-800">Materias</div>
												</div>
												<div class="col-auto">
													<i class="far fa-address-card fa-2x" style="color: #008000;"></i>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Pending Requests Card Example -->
								<div class="col-xl-3 col-md-6 mb-4">
									<div class="card border-left-primary shadow h-100 py-2">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="cargarCarrera.php">Cargar</a></div>
													<div class="h5 mb-0 font-weight-bold text-gray-800">Carreras</div>
												</div>
												<div class="col-auto">
													<i class="fas fa-calculator fa-2x" style="color: #008000;"></i>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Pending Requests Card Example -->
								<div class="col-xl-3 col-md-6 mb-4">
									<div class="card border-left-primary shadow h-100 py-2">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="registrarInstitucion.php">Cargar Datos</a></div>
													<div class="h5 mb-0 font-weight-bold text-gray-800">Institución</div>
												</div>
												<div class="col-auto">
													<i class="fas fa-school fa-2x" style="color: #008000;"></i>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Pending Requests Card Example -->
								<div class="col-xl-3 col-md-6 mb-4">
									<div class="card border-left-primary shadow h-100 py-2">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a target="_blank" href="#">Cargar</a></div>
													<div class="h5 mb-0 font-weight-bold text-gray-800">Profesores</div>
												</div>
												<div class="col-auto">
													<i class="fas fa-chalkboard-teacher fa-2x" style="color: #008000;"></i>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Pending Requests Card Example -->
								<div class="col-xl-3 col-md-6 mb-4">
									<div class="card border-left-primary shadow h-100 py-2">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a target="_blank" href="#">Cargar</a></div>
													<div class="h5 mb-0 font-weight-bold text-gray-800">Notas</div>
												</div>
												<div class="col-auto">
													<i class="fas fa-calculator fa-2x" style="color: #008000;"></i>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Pending Requests Card Example -->
								<div class="col-xl-3 col-md-6 mb-4">
									<div class="card border-left-primary shadow h-100 py-2">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a target="_blank" href="#">Cargar</a></div>
													<div class="h5 mb-0 font-weight-bold text-gray-800">Notas</div>
												</div>
												<div class="col-auto">
													<i class="fas fa-calculator fa-2x" style="color: #008000;"></i>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- /.container-fluid -->

							</div> <br><br><br><br><br><br><br>
							<!-- End of Main Content -->

							<footer class="sticky-footer bg-white">
								<div class="container my-auto">
									<div class="copyright text-center my-auto">
										<span>Ruiz Diaz Nico &copy; Gil Yami 2019</span>
									</div>
								</div>
							</footer>

						</div>
						<!-- End of Content Wrapper -->

					</div>

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
		<script src="vendor/chart.js/Chart.min.js"></script>

		<!-- Page level custom scripts -->
		<script src="js/demo/chart-area-demo.js"></script>
		<script src="js/demo/chart-pie-demo.js"></script>

	</body>

	</html>

<?php
} else {
	header("location:../inicioAdmin.php");
}
?>