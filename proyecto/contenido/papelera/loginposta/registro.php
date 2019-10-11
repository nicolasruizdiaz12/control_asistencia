<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<?php require_once "scripts.php"; ?>
	
</head>
<body style="background-color: forestgreen">
<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="panel panel-asistencia">
				<div class="panel panel-heading" style="background-color:rgba(35, 38, 56, 0.829)">Registro de usuario</div>
				<div class="panel panel-body">
					<form id="frmRegistro">
					<label>Apellido y Nombre</label>
					<input type="text" class="form-control input-sm" id="nombre" name="">
					<label>CUIL</label>
					<input type="text" class="form-control input-sm" id="cuil" name="">
					<label>Fecha Nacimiento</label>
					<input type="date" class="form-control input-sm" id="fecha" name="">
					<label>Domicilio</label>
					<input type="text" class="form-control input-sm" id="domicilio" name="">
					<label>E-mail</label>
					<input type="email" class="form-control input-sm" id="email" name="">
					<label>Usuario</label>
					<input type="text" class="form-control input-sm" id="usuario" name="">
					<label>Password</label>
					<input type="password" class="form-control input-sm" id="password" name="">
					<p></p>
					<span class="btn btn-primary" id="registrarNuevo">Registrar</span>
					</form>
					<div style="text-align: right;">
						<a href="login.php" class="btn btn-default">Login</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarNuevo').click(function(){

			if($('#nombre').val()==""){
				alertify.alert("Debes agregar el Nombre");
				return false;
			}else if($('#cuil').val()==""){
				alertify.alert("Debes agregar el CUIL");
				return false;
			}else if($('#fecha').val()==""){
				alertify.alert("Debes agregar Fecha Nac...");
				return false;
			}else if($('#domicilio').val()==""){
				alertify.alert("Debes agregar Domicilio");
				return false;
			}else if($('#email').val()==""){
				alertify.alert("Debes agregar el E-mail");
				return false;
			}else if($('#usuario').val()==""){
				alertify.alert("Debes agregar el Usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar la Contraseña");
				return false;
			}

			cadena="nombre=" + $('#nombre').val() +
					"&cuil=" + $('#cuil').val() +
					"&fecha=" + $('#fecha').val() +
					"&domicilio=" + $('#domicilio').val() +
					"&email=" + $('#email').val() +
					"&usuario=" + $('#usuario').val() + 
					"&password=" + $('#password').val();
console.log(cadena)
					$.ajax({
						type:"POST",
						url:"php/registro.php",
						data:cadena,
						success:function(r){

							if(r==2){
								alertify.alert("Este usuario ya existe, prueba con otro :)");
							}
							else if(r==1){
								$('#frmRegistro')[0].reset();
								alertify.success("Agregado con exito");
							}else{
								alertify.error("Fallo al agregar");
							}
						}
					});
		});
	});
</script>

