<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="ccs/../../estilo.css">

	<?php require_once "contenido/login/scripts.php"; ?>
</head>

<body style="background: #0EA300;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #000000, #0EA300);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #000000, #0EA300); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="panel panel-asistencia">
					<div class="panel panel-heading" style="background-color:rgba(35, 38, 56, 0.829)">CONTROL DE ASISTENCIA</div>
					<div class="panel panel-body">
						<div style="text-align: center;">
							<img src="contenido/login/img/logo.png" width="100%" class="img-rounded">
						</div>
						<p></p>
						<label>Usuario</label>
						<input type="text" id="usuario" class="form-control input-sm" name="">
						<label>Password</label>
						<input type="password" id="password" class="form-control input-sm" name="">
						<p></p>
						<span class="btn btn-primary" id="entrarSistema">Ingresar</span>
						<a href="contenido/login/registro.php" class="btn btn-danger">Registro</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<?php
				 echo 'IP: ' . $_SERVER['REMOTE_ADDR'] .  '<br>';
				 $macs = explode(' ', shell_exec('arp -a ' . $_SERVER['REMOTE_ADDR']));
				 
				 foreach ($macs as $mac) {
					 if (filter_var($mac, FILTER_VALIDATE_MAC) !== FALSE){
						 $macRed = $mac;
						 break;  
					 }
				 }

				 echo 'MAC: ' . $macRed . '<br>';
				
				?>
			</div>
		</div>
	</div>
</body>

</html>

<script type="text/javascript">
	$(document).ready(function() {
		$('#entrarSistema').click(function() {
			if ($('#usuario').val() == "") {
				alertify.alert("Debes agregar el usuario");
				return false;
			} else if ($('#password').val() == "") {
				alertify.alert("Debes agregar el password");
				return false;
			}

			cadena = "usuario=" + $('#usuario').val() +
				"&password=" + $('#password').val();
			console.log(cadena);
			$.ajax({
				type: "POST",
				url: "contenido/login/php/login.php",
				data: cadena,
				success: function(r) {
					if (r == 1) {
						window.location = "contenido/inicio.php";
					} else {
						alertify.alert("Fallo al entrar");
					}
				}
			});
		});
	});
</script>