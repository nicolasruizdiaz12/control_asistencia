<?php 


	session_start();
	require_once "conexion.php";

	    $conexion=conexion();

	   $usuario=$_POST['usuario'];
	   $password=sha1($_POST['password']);

		$sql="SELECT nombre, id_tipo, id_usuario FROM usuario WHERE usuario='$usuario' AND password='$password'";
		$result=mysqli_query($conexion,$sql);

		if(mysqli_num_rows($result) > 0){
			$fila=mysqli_fetch_assoc($result);
			$_SESSION['nombre'] = $usuario;
			$_SESSION['id_usuario']=$fila['id_usuario'];
			$_SESSION['usuario']=$usuario;
			echo json_encode(array('error' => false, 'tipo' => $fila['id_tipo']),JSON_FORCE_OBJECT);
		}else{
			echo json_encode(array('error' => true),JSON_FORCE_OBJECT);
		}

	$conexion->close();
		
 ?>