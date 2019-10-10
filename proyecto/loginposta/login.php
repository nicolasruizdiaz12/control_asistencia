<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<?php require_once "scripts.php"; ?>
</head>
<body style="background-color:#0EA300;">
<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="panel panel-asistencia">
				<div class="panel panel-heading" style="background-color:rgba(35, 38, 56, 0.829)">CONTROL DE INASISTENCIA</div>
				<div class="panel panel-body">
					<div style="text-align: center;">
						<img src="img/logo.png" width="100%" class="img-rounded">
					</div>
					<p></p>
					<label>Usuario</label>
					<input type="text" id="usuario" class="form-control input-sm" name="">
					<label>Password</label>
					<input type="password" id="password" class="form-control input-sm" name="">
					<p></p>
					<span class="btn btn-primary" id="entrarSistema">Entrar</span>
					<a href="registro.php" class="btn btn-danger">Registro</a>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<?php 
				echo 'IP: '.$_SERVER['REMOTE_ADDR'].' HOST: '.$_SERVER['REMOTE_HOST'].'<br>';
				$salida = explode(' ',shell_exec('arp -a '.$_SERVER['REMOTE_ADDR'])); 
				echo 'MAC: '.$salida[33];2255
			?>
		</div>
	</div>
</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){
			if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}

			cadena="usuario=" + $('#usuario').val() + 
					"&password=" + $('#password').val();
console.log(cadena);
					$.ajax({
						type:"POST",
						url:"php/login.php",
						data:cadena,
						success:function(r){
							if(r==1){
								window.location="../inicio.php";	
							}else{
								alertify.alert("Fallo al entrar");
							}
						}
					});
		});	
	});
</script>