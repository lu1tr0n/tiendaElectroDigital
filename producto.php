<?php /*
*	Script PHP para la tienda ElectroDigital
*
*/ ?>
<?php include_once('php/conexion.php'); ?>
<?php include_once('php/header.php'); ?>


<div class="container">
	<div class="row">
		<div class="col-md-12 well">
			<?php
				echo "<table>";

				$peticion = "SELECT * FROM productos WHERE id=".$_GET['idproducto']." LIMIT 1";
				$resultado = mysqli_query($conexion, $peticion);

				while($fila = mysqli_fetch_array($resultado)){
					echo "<tr>";
					$peticion2 = "SELECT * FROM imagenesproductos WHERE idproducto = ".$fila['id']."";
					$imagenes = mysqli_query($conexion, $peticion2);

					while($imagen = mysqli_fetch_array($imagenes)){
						echo "<td><img src='images/".$imagen['imagen']."' width=100></td>";
					}

					echo "<td><h3>".$fila['nombre']."</h3></td>";
					echo "<td><p>Precio: $".$fila['precio']."</p></td>";
					//echo "<td><a href='producto.php?idproducto=".$fila['id']."'><button>Más Información</button></a></td>";
					echo "<td><button value='".$fila['id']."' class='botoncompra'>Comprar Ahora</button></td>";
					echo "</tr>";
				}
				echo "</table>";
				mysqli_close($conexion);
			 ?>
		</div>
	</div>
</div>		


<?php include_once('php/footer.php'); ?>
