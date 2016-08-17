<?php

	$nombre = $_POST['nombre'];
	$dni = $_POST['dni'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$empresa = $_POST['empresa'];
	$ruc = $_POST['ruc'];

	require("php/conexion-db.php");
	$checkdni=mysql_query("SELECT * FROM participantes WHERE dni='$dni'");
	$check_dni=mysql_num_rows($checkdni);
		if ($check_dni>0){
			echo '<script language="javascript">alert("Este DNI ya se encuentra registrado");location.assign("http://2mg.com.pe/formulario-persona.php");</script>';
		} else{
			//requiere(conexion_db.php);
			mysql_query("INSERT INTO participantes VALUES('','$nombre','$dni','$email','$telefono','$empresa','$ruc')");
			include 'registro-persona-satisfactorio.php';
			mysql_close($link);
		}
?>