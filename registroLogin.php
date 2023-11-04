<?php 
	include 'conexion.php';
	$username = $_POST['newusername'];
	$pass = $_POST['newpassword'];
	$rol = $_POST['visita'];

    $db = new Database();
	

	$sentencia = $db->connect()->prepare("INSERT INTO usuarios(username,password,id_rol) VALUES (?,?,?);");
	$resultado = $sentencia->execute([$username,$pass,$rol]);

	if ($resultado === TRUE) {
        //echo "<script languaje='JavaScript'> alert('Se registro correctamente');</script>";               
		session_start();
	    session_destroy();
        header('Location: login.php');
	}else{
		echo "Error";
	}
?>