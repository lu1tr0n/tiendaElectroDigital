<?php
	// Esta es una consulta sencilla de como obtener el estado de un producto
	
	include("../php/conexion.php");
	$peticion = "UPDATE pedidos SET estado=2  WHERE id = '".$_GET['id']."'";
	$resultado = mysqli_query($conexion, $peticion);

	mysqli_close($conexion);

?>
<script type="text/javascript">
	// Para redirecionar a pedidos
	window.location="pedidos.php";
				
</script>
