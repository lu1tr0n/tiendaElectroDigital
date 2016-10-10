<?php
	include_once('php/header.php');
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<br>
			<hr>
			<p>¿Ya eres Usuario?</p>
			<form action="login.php" method="POST" accept-charset="utf-8">
				
				<input type="text" name="usuario" value="" placeholder="Introduzca tu nombre de usuario">
				<input type="password" name="contrasena" value="" placeholder="Introduzca tu contraseña">
				<input type="submit" name="btnEnviar" value="Log In">
				
			</form>

			<p>¿Eres Nuevo Usuario?</p>
		</div>
	</div>
</div>

<?php include_once("php/footer.php"); ?>