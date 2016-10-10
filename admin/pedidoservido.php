<?php
	include("../php/conexion.php");
	$peticion = "UPDATE pedidos SET estado=1  WHERE id = '".$_GET['id']."'";
	$resultado = mysqli_query($conexion, $peticion);

	mysqli_close($conexion);

?>
<script type="text/javascript">
		
	window.location="pedidos.php";
				
</script>