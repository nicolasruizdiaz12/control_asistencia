<?php 

	session_start();

	unset($_SESSION['user']);

	header("../inicio.php");

 ?>