<?php
	
	/*
	*	Descripcion: Este es un sitio para Web y Comercio II
	*
	*/

	// Conexion a la base de datos
	//$conexion = new mysqli("localhost", "root", "Ghostmanzana$+$", "tiendaonline");
	//$conexion->character_set_name("utf-8");

	// Error en la conexion
	/*if($conexion->connect_errno){
		printf("Falló la conexión: %s\n", $conexion->connect_error);
    	exit();
	}*/

	$conexion = mysqli_connect("localhost", "root", "", "tiendaelectronica");
	mysqli_set_charset($conexion, "utf8");
?>