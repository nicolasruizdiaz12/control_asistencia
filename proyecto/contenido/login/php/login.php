<?php 


	session_start();
	require_once "conexion.php";

	    $conexion=conexion();

	   $usuario=$_POST['usuario'];
	   $password=sha1($_POST['password']);

		$sql="SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";
		$result=mysqli_query($conexion,$sql);

		if(mysqli_num_rows($result) > 0){
			$fila=mysqli_fetch_assoc($result);
			$_SESSION['username'] = $usuario;
			$_SESSION['idUser']=$fila['id_alumno'];
			$_SESSION['user']=$usuario;
			echo 1;
		}else{
			echo 0;
		}
		
 ?>