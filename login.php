<?php
	/*
		Tienda Electronica ElectroDigital 
		Materia Web y Comercio Electronico II 2016
	*/

	include("php/header.php");
	include("php/conexion.php");
	$contador = 0;
	$peticion = "SELECT * FROM clientes WHERE usuario = '".$_POST['usuario']."' AND password = '".$_POST['contrasena']."'";
	$resultado = mysqli_query($conexion, $peticion);
	while($fila = mysqli_fetch_array($resultado)){
		$contador++;
		$_SESSION['usuario'] = $fila['id'];
	}

	if($contador > 0){
		$peticion = "INSERT INTO pedidos VALUES ('', ".$_SESSION['usuario'].", '".date("U")."', '0')";
		$resultado = mysqli_query($conexion, $peticion);

		$peticion1 = "SELECT * FROM pedidos WHERE idcliente = '".$_SESSION['usuario']."' ORDER BY fecha DESC LIMIT 1";
		$resultado1 = mysqli_query($conexion, $peticion1);
		while($fila1 = mysqli_fetch_array($resultado1)){
			$_SESSION['idpedido'] = $fila1['idcliente'];
		}

		//echo $_SESSION['idpedido'];

		for ($i = 0; $i < $_SESSION['contador']; $i++) { 
			# code...
			$peticion = "INSERT INTO lineaspedido VALUES ('', '".$_SESSION['idpedido']."', '".$_SESSION['producto'][$i]."', '1')";
			$resultado = mysqli_query($conexion, $peticion);
			$peticion = "SELECT * FROM productos WHERE id = '".$_SESSION['producto'][$i]."'";
			$resultado = mysqli_query($conexion, $peticion);
			while($fila = mysqli_fetch_array($resultado)){
				$existencia = $fila['existencias'];
				$peticiones = "UPDATE productos SET existencias = ".($existencia-1)." WHERE id = '".$_SESSION['producto'][$i]."'";
				$resultadoPeticiones = mysqli_query($conexion, $peticiones);
			}
		}
		echo "<div class='container'><div class='row'><div class='col-md-12'><br><h2>Tu pedido se ha realizado satifactoriamente.</h2></div></div></div>";
		session_destroy();
		echo '
				<script type="text/javascript">
				setTimeout("redirige()", 5000);
				function redirige(){
					window.location="index.php";
				}
			</script>
		';
	}else{
		echo 'El Usuario no existe.';
		echo '
				<script type="text/javascript">
				setTimeout("redirige()", 5000);
				function redirige(){
					window.location="confirmar.php";
				}
			</script>
		';
	}
	mysqli_close($conexion);
?>
