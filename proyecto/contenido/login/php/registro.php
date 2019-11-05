<?php 

	require_once "conexion.php";
	$conexion=conexion();

		$nombre=$_POST['nombre'];	
		$cuil=$_POST['cuil'];
		$fecha=$_POST['fecha'];
		$domicilio=$_POST['domicilio'];	
		$email=$_POST['email'];	
		$usuario=$_POST['usuario'];
		$password=sha1($_POST['password']);
		$tipoUsuario="1";

		if(buscaUserRepetido($usuario,$password,$conexion)==1){
			echo 2;
		}else{
			$sql="INSERT into usuario (nombre,cuil,fecha,domicilio,email,usuario,password,id_tipo)
				values ('$nombre','$cuil','$fecha','$domicilio','$email','$usuario','$password','$tipoUsuario')";
			echo $result=mysqli_query($conexion,$sql);
		}


		function buscaUserRepetido($usuario,$password,$conexion){
			$sql="SELECT * from usuario 
				where usuario='$usuario'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){
				return 1;
			}else{
				return 0;
			}
		}

 ?>